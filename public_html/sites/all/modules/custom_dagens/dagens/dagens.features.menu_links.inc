<?php
/**
 * @file
 * dagens.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function dagens_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: menu-mere:<front>
  $menu_links['menu-mere:<front>'] = array(
    'menu_name' => 'menu-mere',
    'link_path' => '<front>',
    'router_path' => '',
    'link_title' => 'Mere',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
    ),
    'module' => 'menu',
    'hidden' => '0',
    'external' => '1',
    'has_children' => '1',
    'expanded' => '0',
    'weight' => '0',
  );
  // Translatables
  // Included for use with string extractors like potx.
  t('Mere');


  return $menu_links;
}
