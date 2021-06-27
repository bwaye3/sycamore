<?php

/**
 * @file
 * Post-update functions for Locale module.
 */

/**
<<<<<<< HEAD
 * Clear cache to ensure plural translations are removed from it.
 */
function locale_post_update_clear_cache_for_old_translations() {
  // Remove cache of translations, like '@count[2] words'.
=======
 * Implements hook_removed_post_updates().
 */
function locale_removed_post_updates() {
  return [
    'locale_post_update_clear_cache_for_old_translations' => '9.0.0',
  ];
>>>>>>> dev
}
