<?php
/**
 * @file
 */

/**
 * FAPI definition for settings page.
 */
function background_process_settings_form() {
  $form = array();
  $form['background_process_service_timeout'] = array(
    '#type' => 'textfield',
    '#title' => t('Service timeout'),
    '#description' => t('Timeout for service call in seconds (0 = disabled)'),
    '#default_value' => variable_get('background_process_service_timeout', BACKGROUND_PROCESS_SERVICE_TIMEOUT),
  );
  $form['background_process_connection_timeout'] = array(
    '#type' => 'textfield',
    '#title' => t('Connection timeout'),
    '#description' => t('Timeout for connection in seconds'),
    '#default_value' => variable_get('background_process_connection_timeout', BACKGROUND_PROCESS_CONNECTION_TIMEOUT),
  );
  $form['background_process_stream_timeout'] = array(
    '#type' => 'textfield',
    '#title' => t('Stream timeout'),
    '#description' => t('Timeout for stream in seconds'),
    '#default_value' => variable_get('background_process_stream_timeout', BACKGROUND_PROCESS_STREAM_TIMEOUT),
  );
  $form['background_process_cleanup_age'] = array(
    '#type' => 'textfield',
    '#title' => t('Cleanup age'),
    '#description' => t('Seconds to wait before unlocking processes that never started.'),
    '#default_value' => variable_get('background_process_cleanup_age', BACKGROUND_PROCESS_CLEANUP_AGE),
  );

  $options = variable_get('background_process_service_groups', array());
  foreach ($options as $key => &$value) {
    $value = (empty($value['description']) ? $key : $value['description']) . ' (' . join(',', $value['hosts']) . ')';
  }
  $options += array('default' => 'default (default)');
  $form['background_process_default_service_group'] = array(
    '#type' => 'select',
    '#title' => t('Default service group'),
    '#description' => t('The default service group to use.'),
    '#options' => $options,
    '#default_value' => variable_get('background_process_default_service_group', 'default'),
  );

  $options = background_process_get_service_hosts();
  foreach ($options as $key => &$value) {
    $new = empty($value['description']) ? $key : $value['description'];
    $base_url = empty($value['base_url']) ? $base_url : $value['base_url'];
    $http_host = empty($value['http_host']) ? parse_url($base_url, PHP_URL_HOST) : $value['http_host'];
    $new .= ' (' . $base_url . ' - ' . $http_host . ')';
    $value = $new;
  }

  $form['background_process_default_service_host'] = array(
    '#type' => 'select',
    '#title' => t('Default service host'),
    '#description' => t('The default service host to use'),
    '#options' => $options,
    '#default_value' => variable_get('background_process_default_service_host', 'default'),
  );

  $form = system_settings_form($form);

  // Add determine button and make sure all the buttons are shown last.
  $form['buttons']['#weight'] = 1000;
  $form['buttons']['determine'] = array(
    '#value' => t("Determine default service host"),
    '#description' => t('Tries to determine the default service host.'),
    '#type' => 'submit',
    '#submit' => array('background_process_settings_form_determine_submit'),
  );

  return $form;
}

/**
 * Submit handler for determining default service host
 */
function background_process_settings_form_determine_submit($form, &$form_state) {
  background_process_determine_and_save_default_service_host();
}

/**
 * Overview of background processes.
 */
function background_process_overview_page() {
  $processes = background_process_get_processes();

  $data = array();
  foreach ($processes as $process) {
    $progress = progress_get_progress($process->handle);

    $data[] = array(
      $process->handle,
      $process->callback,
      $process->uid,
      $process->service_host,
      format_date((int)$process->start, 'custom', 'Y-m-d H:i:s'),
      $progress ? sprintf("%.02f%%", $progress->progress * 100) : t('N/A'),
      l(t('Unlock'), 'background-process/unlock/' . $process->handle,
        array('attributes' => array('class' => 'button-unlock'), 'query' => drupal_get_destination())
      )
    );
  }
  $header = array('Handle', 'Callback', 'User', 'Host', 'Start time', 'Progress', '');
  $output = '';
  $output .= theme('table', array(
    'header' => $header,
    'rows' => $data,
    'class' => 'background-process-overview'
  ));
  return $output;
}

/**
 * Unlock background process.
 *
 * @param $handle
 *   Handle of process to unlock
 */
function background_process_service_unlock($handle) {
  if (background_process_unlock($handle)) {
    drupal_set_message(t('Process %handle unlocked', array('%handle' => $handle)));
  }
  else {
    drupal_set_message(t('Process %handle could not be unlocked', array('%handle' => $handle)), 'error');
  }
  drupal_goto();
}
