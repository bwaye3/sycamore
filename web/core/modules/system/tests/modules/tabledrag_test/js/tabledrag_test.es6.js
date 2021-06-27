/**
 * @file
 * Testing behaviors for tabledrag library.
 */
<<<<<<< HEAD
(function($, Drupal) {
=======
(function ($, Drupal) {
>>>>>>> dev
  /**
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Removes a test class from the handle elements to allow verifying that
   *   dragging operations have been executed.
   */
  Drupal.behaviors.tableDragTest = {
    attach(context) {
      $('.tabledrag-handle', context)
        .once('tabledrag-test')
<<<<<<< HEAD
        .on('keydown.tabledrag-test', event => {
=======
        .on('keydown.tabledrag-test', (event) => {
>>>>>>> dev
          $(event.currentTarget).removeClass('tabledrag-test-dragging');
        });
    },
  };
})(jQuery, Drupal);
