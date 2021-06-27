<?php

/**
 * @file
 * Post update functions for Editor.
 */

/**
<<<<<<< HEAD
 * Clear the render cache to fix file references added by Editor.
 */
function editor_post_update_clear_cache_for_file_reference_filter() {
=======
 * Implements hook_removed_post_updates().
 */
function editor_removed_post_updates() {
  return [
    'editor_post_update_clear_cache_for_file_reference_filter' => '9.0.0',
  ];
>>>>>>> dev
}
