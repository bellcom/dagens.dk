<?php
/**
 * @file
 * bnp_import.feeds_tamper_default.inc
 */

/**
 * Implements hook_feeds_tamper_default().
 */
function bnp_import_feeds_tamper_default() {
  $export = array();

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'bnp_importer-xpathparser_1-find_replace_regex';
  $feeds_tamper->importer = 'bnp_importer';
  $feeds_tamper->source = 'xpathparser:1';
  $feeds_tamper->plugin_id = 'find_replace_regex';
  $feeds_tamper->settings = array(
    'find' => '/paragraph>/',
    'replace' => 'p>',
    'limit' => '',
    'real_limit' => -1,
  );
  $feeds_tamper->weight = 0;
  $feeds_tamper->description = 'Find replace REGEX';
  $export['bnp_importer-xpathparser_1-find_replace_regex'] = $feeds_tamper;

  $feeds_tamper = new stdClass();
  $feeds_tamper->disabled = FALSE; /* Edit this to true to make a default feeds_tamper disabled initially */
  $feeds_tamper->api_version = 2;
  $feeds_tamper->id = 'bnp_importer-xpathparser_8-custom_truncate_and_pad';
  $feeds_tamper->importer = 'bnp_importer';
  $feeds_tamper->source = 'xpathparser:8';
  $feeds_tamper->plugin_id = 'trunc_pad';
  $feeds_tamper->settings = array(
    'length' => '254',
  );
  $feeds_tamper->weight = 1;
  $feeds_tamper->description = 'Custom truncate and pad';
  $export['bnp_importer-xpathparser_8-custom_truncate_and_pad'] = $feeds_tamper;

  return $export;
}
