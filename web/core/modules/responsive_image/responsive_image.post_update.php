<?php

/**
 * @file
 * Post update functions for Responsive Image.
 */

<<<<<<< HEAD
use Drupal\Core\Entity\Display\EntityViewDisplayInterface;
use Drupal\Core\Entity\Entity\EntityViewDisplay;

/**
 * Make responsive image formatters dependent on responsive image styles.
 */
function responsive_image_post_update_recreate_dependencies() {
  $displays = EntityViewDisplay::loadMultiple();
  array_walk($displays, function (EntityViewDisplayInterface $entity_view_display) {
    $old_dependencies = $entity_view_display->getDependencies();
    $new_dependencies = $entity_view_display->calculateDependencies()->getDependencies();
    if ($old_dependencies !== $new_dependencies) {
      $entity_view_display->save();
    }
  });
=======
/**
 * Implements hook_removed_post_updates().
 */
function responsive_image_removed_post_updates() {
  return [
    'responsive_image_post_update_recreate_dependencies' => '9.0.0',
  ];
>>>>>>> dev
}
