/**
 * @file
 * Attaches behaviors for the Comment module's "by-viewer" class.
 */

<<<<<<< HEAD
(function($, Drupal, drupalSettings) {
=======
(function ($, Drupal, drupalSettings) {
>>>>>>> dev
  /**
   * Add 'by-viewer' class to comments written by the current user.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.commentByViewer = {
    attach(context) {
      const currentUserID = parseInt(drupalSettings.user.uid, 10);
      $('[data-comment-user-id]')
<<<<<<< HEAD
        .filter(function() {
=======
        .filter(function () {
>>>>>>> dev
          return (
            parseInt(this.getAttribute('data-comment-user-id'), 10) ===
            currentUserID
          );
        })
        .addClass('by-viewer');
    },
  };
})(jQuery, Drupal, drupalSettings);
