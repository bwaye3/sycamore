/**
 * @file
 * Attaches behaviors for the Path module.
 */
<<<<<<< HEAD
(function($, Drupal) {
=======
(function ($, Drupal) {
>>>>>>> dev
  /**
   * Behaviors for settings summaries on path edit forms.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches summary behavior on path edit forms.
   */
  Drupal.behaviors.pathDetailsSummaries = {
    attach(context) {
      $(context)
        .find('.path-form')
<<<<<<< HEAD
        .drupalSetSummary(context => {
=======
        .drupalSetSummary((context) => {
>>>>>>> dev
          const path = $('.js-form-item-path-0-alias input').val();

          return path
            ? Drupal.t('Alias: @alias', { '@alias': path })
            : Drupal.t('No alias');
        });
    },
  };
})(jQuery, Drupal);
