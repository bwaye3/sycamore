/**
 * @file
 * Attaches comment behaviors to the entity form.
 */

<<<<<<< HEAD
(function($, Drupal) {
=======
(function ($, Drupal) {
>>>>>>> dev
  /**
   *
   * @type {Drupal~behavior}
   */
  Drupal.behaviors.commentFieldsetSummaries = {
    attach(context) {
      const $context = $(context);
      $context
        .find('fieldset.comment-entity-settings-form')
<<<<<<< HEAD
        .drupalSetSummary(context =>
=======
        .drupalSetSummary((context) =>
>>>>>>> dev
          Drupal.checkPlain(
            $(context)
              .find('.js-form-item-comment input:checked')
              .next('label')
              .text(),
          ),
        );
    },
  };
})(jQuery, Drupal);
