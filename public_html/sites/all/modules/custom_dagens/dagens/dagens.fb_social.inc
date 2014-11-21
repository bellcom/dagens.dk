<?php
/**
 * @file
 * dagens.fb_social.inc
 */

/**
 * Implements hook_fb_social_default_presets().
 */
function dagens_fb_social_default_presets() {
  $export = array();

  $fb_social_preset = new stdClass();
  $fb_social_preset->disabled = FALSE; /* Edit this to true to make a default fb_social_preset disabled initially */
  $fb_social_preset->api_version = 1;
  $fb_social_preset->name = 'dagens_fb_like';
  $fb_social_preset->description = '';
  $fb_social_preset->plugin_type = 'like';
  $fb_social_preset->settings = array(
    'node_types' => array(
      'types' => array(
        'article' => 'article',
        'advertisement' => 0,
        'page' => 0,
        'ferie' => 0,
        'galleria_galleri' => 0,
        'gallery_item' => 0,
        'migrate_extras_media_example' => 0,
        'panel' => 0,
        'simplenews' => 0,
        'webform' => 0,
      ),
    ),
    'plugin_location' => array(
      'location' => '0',
      'node_view_modes' => array(
        'full' => 'full',
        'teaser' => 0,
        'rss' => 0,
        'search_index' => 0,
        'search_result' => 0,
        'token' => 0,
      ),
    ),
    'block' => 0,
  );
  $fb_social_preset->fb_attrs = array(
    'send' => 1,
    'layout' => 'box_count',
    'show_faces' => 0,
    'width' => '60',
    'action' => 'like',
    'font' => 'segoe ui',
    'colorscheme' => 'light',
  );
  $export['dagens_fb_like'] = $fb_social_preset;

  $fb_social_preset = new stdClass();
  $fb_social_preset->disabled = FALSE; /* Edit this to true to make a default fb_social_preset disabled initially */
  $fb_social_preset->api_version = 1;
  $fb_social_preset->name = 'dagens_fb_like_only';
  $fb_social_preset->description = '';
  $fb_social_preset->plugin_type = 'like';
  $fb_social_preset->settings = array(
    'node_types' => array(
      'types' => array(
        'advertisement' => 0,
        'article' => 0,
        'page' => 0,
        'ferie' => 0,
        'galleria_galleri' => 0,
        'gallery_item' => 0,
        'migrate_extras_media_example' => 0,
        'panel' => 0,
        'simplenews' => 0,
        'webform' => 0,
      ),
    ),
    'plugin_location' => array(
      'location' => '0',
      'node_view_modes' => array(
        'full' => 0,
        'teaser' => 0,
        'rss' => 0,
        'search_index' => 0,
        'search_result' => 0,
        'token' => 0,
      ),
    ),
    'block' => 1,
  );
  $fb_social_preset->fb_attrs = array(
    'send' => 0,
    'layout' => 'box_count',
    'show_faces' => 0,
    'width' => '60',
    'action' => 'like',
    'font' => 'segoe ui',
    'colorscheme' => 'light',
  );
  $export['dagens_fb_like_only'] = $fb_social_preset;

  $fb_social_preset = new stdClass();
  $fb_social_preset->disabled = FALSE; /* Edit this to true to make a default fb_social_preset disabled initially */
  $fb_social_preset->api_version = 1;
  $fb_social_preset->name = 'fb_comments';
  $fb_social_preset->description = 'Facebook Kommentarer';
  $fb_social_preset->plugin_type = 'comments';
  $fb_social_preset->settings = array(
    'node_types' => array(
      'types' => array(
        'article' => 'article',
        'advertisement' => 0,
        'page' => 0,
        'ferie' => 0,
        'galleria_galleri' => 0,
        'gallery_item' => 0,
        'migrate_extras_media_example' => 0,
        'panel' => 0,
        'simplenews' => 0,
        'webform' => 0,
      ),
    ),
    'plugin_location' => array(
      'node_view_modes' => array(
        'full' => 0,
        'teaser' => 0,
        'rss' => 0,
        'search_index' => 0,
        'search_result' => 0,
        'token' => 0,
      ),
    ),
    'plugin_comments_count' => array(
      'count' => 1,
      'cache' => '30',
    ),
    'plugin_comments_seo' => array(
      'seo' => 0,
      'nr_comments' => '100',
      'cache_length' => '120',
    ),
    'block' => 1,
  );
  $fb_social_preset->fb_attrs = array(
    'numposts' => '10',
    'width' => '620',
    'colorscheme' => 'light',
    'migrated' => 0,
  );
  $export['fb_comments'] = $fb_social_preset;

  return $export;
}
