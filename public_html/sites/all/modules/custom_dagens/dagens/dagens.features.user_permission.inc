<?php
/**
 * @file
 * dagens.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function dagens_user_default_permissions() {
  $permissions = array();

  // Exported permission: use custom search.
  $permissions['use custom search'] = array(
    'name' => 'use custom search',
    'roles' => array(
      0 => 'anonymous user',
      1 => 'authenticated user',
    ),
    'module' => 'custom_search',
  );

  // Exported permission: use custom search blocks.
  $permissions['use custom search blocks'] = array(
    'name' => 'use custom search blocks',
    'roles' => array(
      0 => 'administrator',
      1 => 'anonymous user',
      2 => 'authenticated user',
    ),
    'module' => 'custom_search_blocks',
  );

  return $permissions;
}
