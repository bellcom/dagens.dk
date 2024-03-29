<?php

/**
 * @file
 * Provide the media file selector widget and media field formatters to the
 * Fields API.
 */

/**
 * Implements hook_field_widget_info().
 */
function media_field_widget_info() {
  return array(
    'media_generic' => array(
      'label' => t('Media file selector'),
      'field types' => array('file', 'image'),
      'settings' => array(
        'progress_indicator' => 'throbber',
        'allowed_types' => array('image'),
        'browser_plugins' => array(),
        'allowed_schemes' => array('public', 'private'),
      ),
      'behaviors' => array(
        'multiple values' => FIELD_BEHAVIOR_DEFAULT,
        'default value' => FIELD_BEHAVIOR_NONE,
      ),
    ),
  );
}

/**
 * Implements hook_field_formatter_info().
 *
 * Provides legacy support for the "Large filetype icon" file field formatter.
 * This was originally used when media entities contained file fields. The
 * current file entity architecture no longer needs this, but people may
 * have used this formatter for other file fields on their website.
 *
 * @todo Some day, remove this.
 */
function media_field_formatter_info() {
  $formatters = array(
    'media_large_icon' => array(
      'label' => t('Large filetype icon'),
      'field types' => array('file'),
    ),
  );
  return $formatters;
}

/**
 * Implements hook_field_formatter_view().
 *
 * Legacy support for the "Large filetype icon" file field formatter.
 * @see media_field_formatter_info()
 */
function media_field_formatter_view($entity_type, $entity, $field, $instance, $langcode, $items, $display) {
  $element = array();

  if ($display['type'] == 'media_large_icon') {
    foreach ($items as $delta => $item) {
      $element[$delta] = array(
        '#theme' => 'media_formatter_large_icon',
        '#file' => (object) $item,
      );
    }
  }

  return $element;
}

/**
 * Implements hook_field_widget_settings_form().
 */
function media_field_widget_settings_form($field, $instance) {
  $widget = $instance['widget'];
  $settings = $widget['settings'];
  $form = array();

  // Setup type selection form
  $types = media_type_get_types();
  $options = array();
  foreach ($types as $key => $definition) {
    $options[$key] = $definition->label;
  }

  $streams = file_get_stream_wrappers(STREAM_WRAPPERS_VISIBLE);

  $form['allowed_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Allowed remote media types'),
    '#options' => $options,
    '#default_value' => $settings['allowed_types'],
    '#description' => t('Media types which are allowed for this field when using remote streams.'),
    '#weight' => 1,
    '#access' => count(file_get_stream_wrappers(STREAM_WRAPPERS_VISIBLE | STREAM_WRAPPERS_LOCAL)) != count($streams),
  );

  $options = array();
  foreach ($streams as $scheme => $data) {
    $options[$scheme] = t('@scheme (@name)', array('@scheme' => $scheme . '://', '@name' => $data['name']));
  }
  $form['allowed_schemes'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Allowed URI schemes'),
    '#options' => $options,
    '#default_value' => $settings['allowed_schemes'],
    '#description' => t('URI schemes include public:// and private:// which are the Drupal files directories, and may also refer to remote sites.'),
    '#weight' => 2,
  );

  $plugins = media_get_browser_plugin_info();
  $form['browser_plugins'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Enabled browser plugins'),
    '#options' => array(),
    '#default_value' => $settings['browser_plugins'],
    '#description' => t('If no plugins are selected, they will all be available.'),
  );
  foreach ($plugins as $key => $plugin) {
    $form['browser_plugins']['#options'][$key] = !empty($plugin['title']) ? $plugin['title'] : $key;
  }

  return $form;
}

/**
 * Implements hook_field_widget_form().
 */
function media_field_widget_form(&$form, &$form_state, $field, $instance, $langcode, $items, $delta, $element) {
  $field_settings = $instance['settings'];
  $widget_settings = $instance['widget']['settings'];

  // @todo The Field API supports automatic serialization / unserialization, so
  //   this should no longer be needed. After verifying with a module that uses
  //   the 'data' column, remove this.
  // @see media_field_widget_value()
  $current_value = array();
  if (isset($items[$delta])) {
    $current_value = $items[$delta];
    // @todo $items[$delta] is sometimes a loaded media entity (an object)
    //   rather than an array. This conflicts with Field API expectations (for
    //   example, it results in fatal errors when previewing a node with a
    //   multi-valued media field), so should be fixed. In the meantime, don't
    //   assume that $current_value is an array.
    if (is_array($current_value) && isset($current_value['data']) && is_string($current_value['data'])) {
      $current_value['data'] = unserialize($current_value['data']);
    }
  }

  $element += array(
    '#type' => 'media', // Would like to make this a fieldset, but throws some weird warning about element_children... not sure what it is about yet.
    '#default_value' => $current_value,
    '#required' => $instance['required'],
    '#media_options' => array(
      'global' => array(
        'types' => array_filter($widget_settings['allowed_types']),
        'enabledPlugins' => array_filter($instance['widget']['settings']['browser_plugins']),
        'schemes' => $widget_settings['allowed_schemes'],
        'file_directory' => isset($field_settings['file_directory']) ? $field_settings['file_directory'] : '',
        'file_extensions' => isset($field_settings['file_extensions']) ? $field_settings['file_extensions'] : media_variable_get('file_extensions'),
        'max_filesize' => isset($field_settings['max_filesize']) ? $field_settings['max_filesize'] : 0,
        'uri_scheme' => !empty($field['settings']['uri_scheme']) ? $field['settings']['uri_scheme'] : file_default_scheme(),
      ),
    ),
  );

  $fields = array();
  if ($field['type'] == 'file') {
    $fields['display'] = array(
      '#type' => 'value',
      '#value' => 1,
    );

    // Add the description field if enabled.
    if (!empty($field_settings['description_field'])) {
      $fields['description'] = array(
        '#type' => 'textfield',
        '#title' => t('Description'),
        '#value' => isset($current_value['description']) ? $current_value['description'] : '',
        '#type' => variable_get('file_description_type', 'textfield'),
        '#maxlength' => variable_get('file_description_length', 128),
        '#description' => t('The description may be used as the label of the link to the file.'),
      );
    }
  }

  // Add image field specific validators.
  if ($field['type'] == 'image') {
    if ($field_settings['min_resolution'] || $field_settings['max_resolution']) {
      $fields['media']['#media_options']['global']['min_resolution'] = $field_settings['min_resolution'];
      $fields['media']['#media_options']['global']['max_resolution'] = $field_settings['max_resolution'];
    }
    // Add the additional alt and title fields.
    $fields['alt'] = array(
      '#title' => t('Alternate text'),
      '#type' => 'textfield',
      '#default_value' => isset($current_value['alt']) ? $current_value['alt'] : '',
      '#description' => t('This text will be used by screen readers, search engines, or when the image cannot be loaded.<br />
        <em>(Notice: this field is not fetched on -all- formatters yet. For example: If the Rendered file formatter will be used, this field is not available at the moment.)</em>'),
      '#maxlength' => variable_get('image_alt_length', 80),
      '#weight' => 1,
      '#access' => $field_settings['alt_field'],
    );
    $fields['title'] = array(
      '#type' => 'textfield',
      '#title' => t('Title'),
      '#default_value' => isset($current_value['title']) ? $current_value['title'] : '',
      '#description' => t('The title is used as a tool tip when the user hovers the mouse over the image.<br />
        <em>(Notice: this field is not fetched on -all- formatters yet. For example: If the Rendered file formatter will be used, this field is not available at the moment.)</em>'),
      '#maxlength' => variable_get('image_title_length', 500),
      '#weight' => 2,
      '#access' => $field_settings['title_field'],
    );
  }

  $element += $fields;

  return $element;
}

/**
 * @todo Is this function ever called? If not, remove it. The Field API now
 *   supports automatic serialization / unserialization, so this should no
 *   longer be needed. After verifying with a module that uses the 'data'
 *   column, remove this.
 *
 * @see media_field_widget_form()
 */
function media_field_widget_value($element, $input, $form_state) {
  $return = $input;

  if (!is_array($return)) {
    $return = array();
  }

  if (isset($return['data'])) {
    $return['data'] = serialize($return['data']);
  }

  $return += array(
    'fid' => 0,
    'title' => '',
    'data' => NULL,
  );

  return $return;
}
