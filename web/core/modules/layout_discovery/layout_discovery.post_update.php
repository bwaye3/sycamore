<?php

/**
 * @file
 * Post update functions for layout discovery.
 */

<<<<<<< HEAD
use Drupal\Core\Config\Entity\ConfigEntityUpdater;

/**
 * Recalculate dependencies for the entity_form_display entity.
 */
function layout_discovery_post_update_recalculate_entity_form_display_dependencies(&$sandbox = NULL) {
  \Drupal::classResolver(ConfigEntityUpdater::class)->update($sandbox, 'entity_form_display');
}

/**
 * Recalculate dependencies for the entity_view_display entity.
 */
function layout_discovery_post_update_recalculate_entity_view_display_dependencies(&$sandbox = NULL) {
  \Drupal::classResolver(ConfigEntityUpdater::class)->update($sandbox, 'entity_view_display');
=======
/**
 * Implements hook_removed_post_updates().
 */
function layout_discovery_removed_post_updates() {
  return [
    'layout_discovery_post_update_recalculate_entity_form_display_dependencies' => '9.0.0',
    'layout_discovery_post_update_recalculate_entity_view_display_dependencies' => '9.0.0',
  ];
>>>>>>> dev
}
