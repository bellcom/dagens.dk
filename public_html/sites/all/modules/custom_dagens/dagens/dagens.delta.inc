<?php
/**
 * @file
 * dagens.delta.inc
 */

/**
 * Implements hook_delta_default_templates().
 */
function dagens_delta_default_templates() {
  $export = array();

  $delta = new stdClass();
  $delta->disabled = FALSE; /* Edit this to true to make a default delta disabled initially */
  $delta->api_version = 3;
  $delta->machine_name = 'dagens_artikler';
  $delta->name = 'Dagens Artikler';
  $delta->description = '';
  $delta->theme = 'dagens';
  $delta->mode = 'preserve';
  $delta->parent = 'dagens_std';
  $delta->settings = array(
    'theme_dagens_settings' => array(
      'favicon_upload' => '',
      'alpha_toggle_page_title' => 1,
      'alpha_region_socials_force' => 1,
    ),
  );
  $export['dagens_artikler'] = $delta;

  $delta = new stdClass();
  $delta->disabled = FALSE; /* Edit this to true to make a default delta disabled initially */
  $delta->api_version = 3;
  $delta->machine_name = 'dagens_std';
  $delta->name = 'Dagens std';
  $delta->description = '';
  $delta->theme = 'dagens';
  $delta->mode = 'preserve';
  $delta->parent = '';
  $delta->settings = array();
  $export['dagens_std'] = $delta;

  return $export;
}
