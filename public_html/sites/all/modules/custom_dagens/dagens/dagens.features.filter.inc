<?php
/**
 * @file
 * dagens.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function dagens_filter_default_formats() {
  $formats = array();

  // Exported format: banner.
  $formats['banner'] = array(
    'format' => 'banner',
    'name' => 'banner',
    'cache' => '1',
    'status' => '1',
    'weight' => '0',
    'filters' => array(),
  );

  return $formats;
}
