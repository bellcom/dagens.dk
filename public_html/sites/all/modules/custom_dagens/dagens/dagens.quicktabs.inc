<?php
/**
 * @file
 * dagens.quicktabs.inc
 */

/**
 * Implements hook_quicktabs_default_quicktabs().
 */
function dagens_quicktabs_default_quicktabs() {
  $export = array();

  $quicktabs = new stdClass();
  $quicktabs->disabled = FALSE; /* Edit this to true to make a default quicktabs disabled initially */
  $quicktabs->api_version = 1;
  $quicktabs->machine_name = 'mest_l_ste';
  $quicktabs->ajax = 0;
  $quicktabs->hide_empty_tabs = TRUE;
  $quicktabs->default_tab = 0;
  $quicktabs->title = 'Mest læste';
  $quicktabs->tabs = array(
    0 => array(
      'bid' => 'views_delta_recent_posts-block',
      'hide_title' => 1,
      'title' => 'Dagens',
      'weight' => '-100',
      'type' => 'block',
    ),
    1 => array(
      'bid' => 'views_delta_recent_posts-block_2',
      'hide_title' => 1,
      'title' => 'Ugens',
      'weight' => '-99',
      'type' => 'block',
    ),
    2 => array(
      'bid' => 'views_delta_recent_posts-block_3',
      'hide_title' => 1,
      'title' => 'Månedens',
      'weight' => '-98',
      'type' => 'block',
    ),
  );
  $quicktabs->renderer = 'ui_tabs';
  $quicktabs->style = 'Zen';
  $quicktabs->options = array(
    'history' => 0,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Dagens');
  t('Mest læste');
  t('Månedens');
  t('Ugens');

  $export['mest_l_ste'] = $quicktabs;

  return $export;
}
