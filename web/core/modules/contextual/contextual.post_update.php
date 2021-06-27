<?php

/**
 * @file
 * Post update functions for Contextual Links.
 */

/**
<<<<<<< HEAD
 * Ensure new page loads use the updated JS and get the updated markup.
 */
function contextual_post_update_fixed_endpoint_and_markup() {
  // Empty update to trigger a change to css_js_query_string and invalidate
  // cached markup.
=======
 * Implements hook_removed_post_updates().
 */
function contextual_removed_post_updates() {
  return [
    'contextual_post_update_fixed_endpoint_and_markup' => '9.0.0',
  ];
>>>>>>> dev
}
