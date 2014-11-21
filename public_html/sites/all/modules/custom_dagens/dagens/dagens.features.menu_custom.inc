<?php
/**
 * @file
 * dagens.features.menu_custom.inc
 */

/**
 * Implements hook_menu_default_menu_custom().
 */
function dagens_menu_default_menu_custom() {
  $menus = array();

  // Exported menu: menu-mere.
  $menus['menu-mere'] = array(
    'menu_name' => 'menu-mere',
    'title' => 'Mere',
    'description' => '',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Mere');


  return $menus;
}
