<?php

/**
 * @file
 * Post update functions for User module.
 */

<<<<<<< HEAD
use Drupal\user\Entity\Role;

/**
 * Enforce order of role permissions.
 */
function user_post_update_enforce_order_of_permissions() {
  $entity_save = function (Role $role) {
    $permissions = $role->getPermissions();
    sort($permissions);
    if ($permissions !== $role->getPermissions()) {
      $role->save();
    }
  };
  array_map($entity_save, Role::loadMultiple());
=======
/**
 * Implements hook_removed_post_updates().
 */
function user_removed_post_updates() {
  return [
    'user_post_update_enforce_order_of_permissions' => '9.0.0',
  ];
>>>>>>> dev
}
