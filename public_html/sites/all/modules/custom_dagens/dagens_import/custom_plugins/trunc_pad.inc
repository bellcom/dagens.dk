<?php
/**
 * Custom tamper plugin for handling stringlength and appropriate padding with (...)
 */
$plugin = array(
  'form' => 'dagens_tamper_truncate_pad_form',
  'callback' => 'dagens_tamper_truncate_pad_callback',
  'name' => 'Custom truncate and pad',
);

function dagens_tamper_truncate_pad_form($importer, $element_key, $settings) {
  $form = array();
  $form['length'] = array(
    '#type' => 'textfield',
    '#title' => t('Length'),
    '#default_value' => isset($settings['length']) ? $settings['length'] : '',
    '#size' => 4,
    '#required' => TRUE,
  );
  
  return $form;
}

function dagens_tamper_truncate_pad_callback($result, $item_key, $element_key, &$field, $settings) {
  $field = (strlen($field) < intval($settings['length'])) ? $field : substr($field, 0, (intval($settings['length']) - 3)) . '...';
}
