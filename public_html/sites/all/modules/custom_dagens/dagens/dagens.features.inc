<?php
/**
 * @file
 * dagens.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function dagens_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  list($module, $api) = func_get_args();
  if ($module == "delta" && $api == "delta") {
    return array("version" => "3");
  }
  list($module, $api) = func_get_args();
  if ($module == "fb_social" && $api == "fb_social") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "page_manager" && $api == "pages_default") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "panels_mini" && $api == "panels_default") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "quicktabs" && $api == "quicktabs") {
    return array("version" => "1");
  }
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function dagens_views_api() {
  return array("version" => "3.0");
}

/**
 * Implements hook_fontyourface_features_default_font().
 */
function dagens_fontyourface_features_default_font() {
  return array(
    'Open Sans 300 (latin)' => array(
      'name' => 'Open Sans 300 (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#300',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '300',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:300";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 300 (latin-ext)' => array(
      'name' => 'Open Sans 300 (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#300',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '300',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:300";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans 300italic (latin)' => array(
      'name' => 'Open Sans 300italic (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#300italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '300',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:300italic";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 300italic (latin-ext)' => array(
      'name' => 'Open Sans 300italic (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#300italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '300',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:300italic";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans 600 (latin)' => array(
      'name' => 'Open Sans 600 (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#600',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '600',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:600";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 600 (latin-ext)' => array(
      'name' => 'Open Sans 600 (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#600',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '600',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:600";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans 600italic (latin)' => array(
      'name' => 'Open Sans 600italic (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#600italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '600',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:600italic";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 600italic (latin-ext)' => array(
      'name' => 'Open Sans 600italic (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#600italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '600',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:600italic";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans 700 (latin)' => array(
      'name' => 'Open Sans 700 (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#700',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '700',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:700";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 700 (latin-ext)' => array(
      'name' => 'Open Sans 700 (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#700',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '700',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:700";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans 700italic (latin)' => array(
      'name' => 'Open Sans 700italic (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#700italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '700',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:700italic";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 700italic (latin-ext)' => array(
      'name' => 'Open Sans 700italic (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#700italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '700',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:700italic";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans 800 (latin)' => array(
      'name' => 'Open Sans 800 (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#800',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '800',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:800";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 800 (latin-ext)' => array(
      'name' => 'Open Sans 800 (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#800',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => '800',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:13:"Open Sans:800";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans 800italic (latin)' => array(
      'name' => 'Open Sans 800italic (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#800italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '800',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:800italic";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans 800italic (latin-ext)' => array(
      'name' => 'Open Sans 800italic (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#800italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => '800',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:19:"Open Sans:800italic";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans Condensed 300 (latin)' => array(
      'name' => 'Open Sans Condensed 300 (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans Condensed&subset=latin#300',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans Condensed',
      'css_style' => 'normal',
      'css_weight' => '300',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:23:"Open Sans Condensed:300";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans Condensed 300 (latin-ext)' => array(
      'name' => 'Open Sans Condensed 300 (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans Condensed&subset=latin-ext#300',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans Condensed',
      'css_style' => 'normal',
      'css_weight' => '300',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:23:"Open Sans Condensed:300";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans Condensed 700 (latin)' => array(
      'name' => 'Open Sans Condensed 700 (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans Condensed&subset=latin#700',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans Condensed',
      'css_style' => 'normal',
      'css_weight' => '700',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:23:"Open Sans Condensed:700";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans Condensed 700 (latin-ext)' => array(
      'name' => 'Open Sans Condensed 700 (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans Condensed&subset=latin-ext#700',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans Condensed',
      'css_style' => 'normal',
      'css_weight' => '700',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:23:"Open Sans Condensed:700";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans italic (latin)' => array(
      'name' => 'Open Sans italic (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => 'normal',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:16:"Open Sans:italic";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans italic (latin-ext)' => array(
      'name' => 'Open Sans italic (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#italic',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'italic',
      'css_weight' => 'normal',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:16:"Open Sans:italic";s:6:"subset";s:9:"latin-ext";}',
    ),
    'Open Sans regular (latin)' => array(
      'name' => 'Open Sans regular (latin)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin#regular',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => 'normal',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:17:"Open Sans:regular";s:6:"subset";s:5:"latin";}',
    ),
    'Open Sans regular (latin-ext)' => array(
      'name' => 'Open Sans regular (latin-ext)',
      'enabled' => '1',
      'url' => 'http://www.google.com/webfonts/family?family=Open Sans&subset=latin-ext#regular',
      'provider' => 'google_fonts_api',
      'css_selector' => NULL,
      'css_family' => 'Open Sans',
      'css_style' => 'normal',
      'css_weight' => 'normal',
      'css_fallbacks' => '',
      'foundry' => '',
      'foundry_url' => '',
      'license' => '',
      'license_url' => '',
      'designer' => '',
      'designer_url' => '',
      'metadata' => 'a:2:{s:4:"path";s:17:"Open Sans:regular";s:6:"subset";s:9:"latin-ext";}',
    ),
  );
}

/**
 * Implements hook_image_default_styles().
 */
function dagens_image_default_styles() {
  $styles = array();

  // Exported image style: 170_130.
  $styles['170_130'] = array(
    'name' => '170_130',
    'effects' => array(
      16 => array(
        'label' => 'Scale and Smart Crop',
        'help' => 'Similar to "Scale And Crop", but preserves the portion of the image with the most entropy.',
        'effect callback' => 'smartcrop_scale_effect',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'smartcrop',
        'name' => 'smartcrop_scale_and_crop',
        'data' => array(
          'width' => '170',
          'height' => '130',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: 190_123.
  $styles['190_123'] = array(
    'name' => '190_123',
    'effects' => array(
      17 => array(
        'label' => 'Scale and Smart Crop',
        'help' => 'Similar to "Scale And Crop", but preserves the portion of the image with the most entropy.',
        'effect callback' => 'smartcrop_scale_effect',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'smartcrop',
        'name' => 'smartcrop_scale_and_crop',
        'data' => array(
          'width' => '190',
          'height' => '123',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: 322_250.
  $styles['322_250'] = array(
    'name' => '322_250',
    'effects' => array(
      21 => array(
        'label' => 'Scale and Smart Crop',
        'help' => 'Similar to "Scale And Crop", but preserves the portion of the image with the most entropy.',
        'effect callback' => 'smartcrop_scale_effect',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'smartcrop',
        'name' => 'smartcrop_scale_and_crop',
        'data' => array(
          'width' => '322',
          'height' => '250',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: 399_294.
  $styles['399_294'] = array(
    'name' => '399_294',
    'effects' => array(
      22 => array(
        'label' => 'Scale and Smart Crop',
        'help' => 'Similar to "Scale And Crop", but preserves the portion of the image with the most entropy.',
        'effect callback' => 'smartcrop_scale_effect',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'smartcrop',
        'name' => 'smartcrop_scale_and_crop',
        'data' => array(
          'width' => '399',
          'height' => '294',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: 600-wide.
  $styles['600-wide'] = array(
    'name' => '600-wide',
    'effects' => array(
      17 => array(
        'label' => 'Skalér',
        'help' => 'Skalering bevarer billedets højde-bredde-forhold. Hvis kun den ene dimension angives vil den anden blive beregnet.',
        'effect callback' => 'image_scale_effect',
        'dimensions callback' => 'image_scale_dimensions',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'image',
        'name' => 'image_scale',
        'data' => array(
          'width' => '600',
          'height' => '600',
          'upscale' => 0,
        ),
        'weight' => '2',
      ),
    ),
  );

  // Exported image style: 600_480.
  $styles['600_480'] = array(
    'name' => '600_480',
    'effects' => array(
      20 => array(
        'label' => 'Scale and Smart Crop',
        'help' => 'Similar to "Scale And Crop", but preserves the portion of the image with the most entropy.',
        'effect callback' => 'smartcrop_scale_effect',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'smartcrop',
        'name' => 'smartcrop_scale_and_crop',
        'data' => array(
          'width' => '600',
          'height' => '480',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: 83_52.
  $styles['83_52'] = array(
    'name' => '83_52',
    'effects' => array(
      18 => array(
        'label' => 'Scale and Smart Crop',
        'help' => 'Similar to "Scale And Crop", but preserves the portion of the image with the most entropy.',
        'effect callback' => 'smartcrop_scale_effect',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'smartcrop',
        'name' => 'smartcrop_scale_and_crop',
        'data' => array(
          'width' => '83',
          'height' => '52',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: 98_63.
  $styles['98_63'] = array(
    'name' => '98_63',
    'effects' => array(
      19 => array(
        'label' => 'Scale and Smart Crop',
        'help' => 'Similar to "Scale And Crop", but preserves the portion of the image with the most entropy.',
        'effect callback' => 'smartcrop_scale_effect',
        'form callback' => 'image_scale_form',
        'summary theme' => 'image_scale_summary',
        'module' => 'smartcrop',
        'name' => 'smartcrop_scale_and_crop',
        'data' => array(
          'width' => '98',
          'height' => '63',
          'upscale' => 1,
        ),
        'weight' => '1',
      ),
    ),
  );

  // Exported image style: dagens_gossip.
  $styles['dagens_gossip'] = array(
    'name' => 'dagens_gossip',
    'effects' => array(
      24 => array(
        'label' => 'Skalér og beskær',
        'help' => 'Skalering og beskæring bevarer billedets højde-bredde-forhold og beskærer derefter den største dimension. Det er nyttigt til at generere kvadratiske thumbnails uden at forvrænge billedet.',
        'effect callback' => 'image_scale_and_crop_effect',
        'dimensions callback' => 'image_resize_dimensions',
        'form callback' => 'image_resize_form',
        'summary theme' => 'image_resize_summary',
        'module' => 'image',
        'name' => 'image_scale_and_crop',
        'data' => array(
          'width' => '280',
          'height' => '184',
        ),
        'weight' => '1',
      ),
    ),
  );

  return $styles;
}

/**
 * Implements hook_node_info().
 */
function dagens_node_info() {
  $items = array(
    'article' => array(
      'name' => t('Artikel'),
      'base' => 'node_content',
      'description' => t('Use <em>articles</em> for time-sensitive content like news, press releases or blog posts.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  return $items;
}
