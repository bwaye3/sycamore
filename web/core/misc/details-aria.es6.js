/**
 * @file
 * Add aria attribute handling for details and summary elements.
 */

<<<<<<< HEAD
(function($, Drupal) {
=======
(function ($, Drupal) {
>>>>>>> dev
  /**
   * Handles `aria-expanded` and `aria-pressed` attributes on details elements.
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.detailsAria = {
    attach() {
      $('body')
        .once('detailsAria')
<<<<<<< HEAD
        .on('click.detailsAria', 'summary', event => {
=======
        .on('click.detailsAria', 'summary', (event) => {
>>>>>>> dev
          const $summary = $(event.currentTarget);
          const open =
            $(event.currentTarget.parentNode).attr('open') === 'open'
              ? 'false'
              : 'true';

          $summary.attr({
            'aria-expanded': open,
            'aria-pressed': open,
          });
        });
    },
  };
})(jQuery, Drupal);
