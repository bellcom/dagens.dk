<?php
/**
 * @file
 * bnp_import.feeds_importer_default.inc
 */

/**
 * Implements hook_feeds_importer_default().
 */
function bnp_import_feeds_importer_default() {
  $export = array();

  $feeds_importer = new stdClass();
  $feeds_importer->disabled = FALSE; /* Edit this to true to make a default feeds_importer disabled initially */
  $feeds_importer->api_version = 1;
  $feeds_importer->id = 'bnp_importer';
  $feeds_importer->config = array(
    'name' => 'BNP Artikler',
    'description' => 'Importere artikler fra BNP',
    'fetcher' => array(
      'plugin_key' => 'feeds_fetcher_directory_fetcher',
      'config' => array(
        'recursive' => 0,
        'filemask' => '/\\.xml$/',
        'updated_files' => 1,
      ),
    ),
    'parser' => array(
      'plugin_key' => 'FeedsXPathParserXML',
      'config' => array(
        'sources' => array(
          'xpathparser:0' => 'content/header',
          'xpathparser:1' => 'content/body',
          'xpathparser:2' => 'docdata/internalid/@id',
          'xpathparser:8' => 'content/subheader',
          'xpathparser:9' => '"Nyheder"',
          'xpathparser:10' => 'content/preface',
        ),
        'rawXML' => array(
          'xpathparser:1' => 'xpathparser:1',
          'xpathparser:0' => 0,
          'xpathparser:2' => 0,
          'xpathparser:8' => 0,
          'xpathparser:9' => 0,
          'xpathparser:10' => 0,
        ),
        'context' => '/saxotech/wirenews',
        'exp' => array(
          'errors' => 0,
          'debug' => array(
            'context' => 0,
            'xpathparser:0' => 0,
            'xpathparser:1' => 0,
            'xpathparser:2' => 0,
            'xpathparser:8' => 0,
            'xpathparser:9' => 0,
            'xpathparser:10' => 0,
          ),
        ),
        'allow_override' => 0,
      ),
    ),
    'processor' => array(
      'plugin_key' => 'FeedsNodeProcessor',
      'config' => array(
        'content_type' => 'article',
        'expire' => '-1',
        'author' => '222',
        'mappings' => array(
          0 => array(
            'source' => 'xpathparser:0',
            'target' => 'title',
            'unique' => FALSE,
          ),
          1 => array(
            'source' => 'xpathparser:1',
            'target' => 'body',
            'unique' => FALSE,
          ),
          2 => array(
            'source' => 'xpathparser:2',
            'target' => 'guid',
            'unique' => 1,
          ),
          3 => array(
            'source' => 'xpathparser:8',
            'target' => 'field_slugline',
            'unique' => FALSE,
          ),
          4 => array(
            'source' => 'xpathparser:9',
            'target' => 'field_tags',
            'unique' => FALSE,
          ),
          5 => array(
            'source' => 'xpathparser:10',
            'target' => 'field_preface',
            'unique' => FALSE,
          ),
        ),
        'update_existing' => '2',
        'input_format' => 'full_html',
      ),
    ),
    'content_type' => '',
    'update' => 0,
    'import_period' => '0',
    'expire_period' => 3600,
    'import_on_create' => 1,
    'process_in_background' => 0,
  );
  $export['bnp_importer'] = $feeds_importer;

  return $export;
}
