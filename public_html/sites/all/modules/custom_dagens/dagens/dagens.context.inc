<?php
/**
 * @file
 * dagens.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function dagens_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'artikel_visning';
  $context->description = 'Visning af artikler';
  $context->tag = '';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'article' => 'article',
      ),
      'options' => array(
        'node_form' => '1',
      ),
    ),
    'path' => array(
      'values' => array(
        'billeder/*' => 'billeder/*',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'widgets-s_addthis-share' => array(
          'module' => 'widgets',
          'delta' => 's_addthis-share',
          'region' => 'socials',
          'weight' => '-10',
        ),
        'panels_mini-banner_sidepanel_1' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_sidepanel_1',
          'region' => 'sidebar_second',
          'weight' => '-10',
        ),
        'quicktabs-mest_l_ste' => array(
          'module' => 'quicktabs',
          'delta' => 'mest_l_ste',
          'region' => 'sidebar_second',
          'weight' => '-9',
        ),
        'views-recent_posts-block_1' => array(
          'module' => 'views',
          'delta' => 'recent_posts-block_1',
          'region' => 'sidebar_second',
          'weight' => '-8',
        ),
        'widgets-s_facebook-like-box' => array(
          'module' => 'widgets',
          'delta' => 's_facebook-like-box',
          'region' => 'sidebar_second',
          'weight' => '-7',
        ),
        'panels_mini-banner_sidepanel_2' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_sidepanel_2',
          'region' => 'sidebar_second',
          'weight' => '-6',
        ),
        'aggregator-feed-1' => array(
          'module' => 'aggregator',
          'delta' => 'feed-1',
          'region' => 'sidebar_second',
          'weight' => '-5',
        ),
        'panels_mini-banner_bred_bund' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_bred_bund',
          'region' => 'postscript_zero',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block',
          'region' => 'postscript_first',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_2' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_2',
          'region' => 'postscript_second',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_3' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_3',
          'region' => 'postscript_third',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_4' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_4',
          'region' => 'postscript_fourth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_5' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_5',
          'region' => 'postscript_fifth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_6' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_6',
          'region' => 'postscript_sixth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_7' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_7',
          'region' => 'postscript_seventh',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_1' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_1',
          'region' => 'postscript_eighth',
          'weight' => '-10',
        ),
      ),
    ),
    'delta' => array(
      'delta_template' => 'dagens_artikler',
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Visning af artikler');
  $export['artikel_visning'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'dagens_forside';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'panels_mini-banner_bred_bund' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_bred_bund',
          'region' => 'postscript_zero',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block',
          'region' => 'postscript_first',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_2' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_2',
          'region' => 'postscript_second',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_3' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_3',
          'region' => 'postscript_third',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_4' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_4',
          'region' => 'postscript_fourth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_5' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_5',
          'region' => 'postscript_fifth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_6' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_6',
          'region' => 'postscript_sixth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_7' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_7',
          'region' => 'postscript_seventh',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_1' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_1',
          'region' => 'postscript_eighth',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['dagens_forside'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'global';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'sitewide' => array(
      'values' => array(
        1 => 1,
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'panels_mini-top_social_ikoner' => array(
          'module' => 'panels_mini',
          'delta' => 'top_social_ikoner',
          'region' => 'user_first',
          'weight' => '-10',
        ),
        'custom_search_blocks-1' => array(
          'module' => 'custom_search_blocks',
          'delta' => '1',
          'region' => 'user_second',
          'weight' => '-10',
        ),
        'menu_block-1' => array(
          'module' => 'menu_block',
          'delta' => '1',
          'region' => 'menu',
          'weight' => '-64',
        ),
        'nice_menus-1' => array(
          'module' => 'nice_menus',
          'delta' => '1',
          'region' => 'menu',
          'weight' => '-63',
        ),
        'menu_block-3' => array(
          'module' => 'menu_block',
          'delta' => '3',
          'region' => 'menu',
          'weight' => '-62',
        ),
        'panels_mini-banner_header' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_header',
          'region' => 'header_first',
          'weight' => '-10',
        ),
        'block-25' => array(
          'module' => 'block',
          'delta' => '25',
          'region' => 'footer_top',
          'weight' => '-10',
        ),
        'panels_mini-footer_1' => array(
          'module' => 'panels_mini',
          'delta' => 'footer_1',
          'region' => 'footer_first',
          'weight' => '-10',
        ),
        'panels_mini-footer_2' => array(
          'module' => 'panels_mini',
          'delta' => 'footer_2',
          'region' => 'footer_second',
          'weight' => '-10',
        ),
        'panels_mini-footer_3' => array(
          'module' => 'panels_mini',
          'delta' => 'footer_3',
          'region' => 'footer_third',
          'weight' => '-10',
        ),
        'panels_mini-footer_4' => array(
          'module' => 'panels_mini',
          'delta' => 'footer_4',
          'region' => 'footer_fourth',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['global'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'hoejre_indhold_forside';
  $context->description = 'Sidebar forside og emnesider';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
        'taxonomy/term/*' => 'taxonomy/term/*',
        'flere/*' => 'flere/*',
        'arkiv/*' => 'arkiv/*',
        'search' => 'search',
        'search/*' => 'search/*',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'panels_mini-banner_sidepanel_1' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_sidepanel_1',
          'region' => 'sidebar_second',
          'weight' => '1',
        ),
        'views-recent_posts-block_1' => array(
          'module' => 'views',
          'delta' => 'recent_posts-block_1',
          'region' => 'sidebar_second',
          'weight' => '2',
        ),
        'quicktabs-mest_l_ste' => array(
          'module' => 'quicktabs',
          'delta' => 'mest_l_ste',
          'region' => 'sidebar_second',
          'weight' => '3',
        ),
        'widgets-s_facebook-like-box' => array(
          'module' => 'widgets',
          'delta' => 's_facebook-like-box',
          'region' => 'sidebar_second',
          'weight' => '4',
        ),
        'panels_mini-banner_sidepanel_2' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_sidepanel_2',
          'region' => 'sidebar_second',
          'weight' => '5',
        ),
        'views-dagens_billedgallerier-block' => array(
          'module' => 'views',
          'delta' => 'dagens_billedgallerier-block',
          'region' => 'sidebar_second',
          'weight' => '6',
        ),
        'aggregator-feed-1' => array(
          'module' => 'aggregator',
          'delta' => 'feed-1',
          'region' => 'sidebar_second',
          'weight' => '7',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Sidebar forside og emnesider');
  $export['hoejre_indhold_forside'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'termsider';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'sport' => 'sport',
        'business' => 'business',
        'krimi' => 'krimi',
        'teknologi' => 'teknologi',
        'forbrug' => 'forbrug',
        'underholdning' => 'underholdning',
        'politik' => 'politik',
        'sundhed' => 'sundhed',
        'kultur' => 'kultur',
        'navne' => 'navne',
        'videnskab' => 'videnskab',
        'billedgallerier' => 'billedgallerier',
        'sydjylland' => 'sydjylland',
        'østjylland' => 'østjylland',
        'midtvest' => 'midtvest',
        'nordjylland' => 'nordjylland',
        'fyn' => 'fyn',
        'sjælland' => 'sjælland',
        'bornholm' => 'bornholm',
        'københavn' => 'københavn',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'panels_mini-banner_bred_bund' => array(
          'module' => 'panels_mini',
          'delta' => 'banner_bred_bund',
          'region' => 'postscript_zero',
          'weight' => '2',
        ),
        'views-dagens_artikler-block' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block',
          'region' => 'postscript_first',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_2' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_2',
          'region' => 'postscript_second',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_3' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_3',
          'region' => 'postscript_third',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_4' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_4',
          'region' => 'postscript_fourth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_5' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_5',
          'region' => 'postscript_fifth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_6' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_6',
          'region' => 'postscript_sixth',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_7' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_7',
          'region' => 'postscript_seventh',
          'weight' => '-10',
        ),
        'views-dagens_artikler-block_1' => array(
          'module' => 'views',
          'delta' => 'dagens_artikler-block_1',
          'region' => 'postscript_eighth',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;
  $export['termsider'] = $context;

  return $export;
}
