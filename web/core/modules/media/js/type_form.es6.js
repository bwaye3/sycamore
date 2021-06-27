/**
 * @file
 * Defines JavaScript behaviors for the media type form.
 */

<<<<<<< HEAD
(function($, Drupal) {
=======
(function ($, Drupal) {
>>>>>>> dev
  /**
   * Behaviors for setting summaries on media type form.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches summary behaviors on media type edit forms.
   */
  Drupal.behaviors.mediaTypeFormSummaries = {
    attach(context) {
      const $context = $(context);
      // Provide the vertical tab summaries.
<<<<<<< HEAD
      $context.find('#edit-workflow').drupalSetSummary(context => {
=======
      $context.find('#edit-workflow').drupalSetSummary((context) => {
>>>>>>> dev
        const vals = [];
        $(context)
          .find('input[name^="options"]:checked')
          .parent()
<<<<<<< HEAD
          .each(function() {
            vals.push(
              Drupal.checkPlain(
                $(this)
                  .find('label')
                  .text(),
              ),
            );
          });
        if (
          !$(context)
            .find('#edit-options-status')
            .is(':checked')
        ) {
=======
          .each(function () {
            vals.push(Drupal.checkPlain($(this).find('label').text()));
          });
        if (!$(context).find('#edit-options-status').is(':checked')) {
>>>>>>> dev
          vals.unshift(Drupal.t('Not published'));
        }
        return vals.join(', ');
      });
      $(context)
        .find('#edit-language')
<<<<<<< HEAD
        .drupalSetSummary(context => {
=======
        .drupalSetSummary((context) => {
>>>>>>> dev
          const vals = [];

          vals.push(
            $(context)
              .find(
                '.js-form-item-language-configuration-langcode select option:selected',
              )
              .text(),
          );

          $(context)
            .find('input:checked')
            .next('label')
<<<<<<< HEAD
            .each(function() {
=======
            .each(function () {
>>>>>>> dev
              vals.push(Drupal.checkPlain($(this).text()));
            });

          return vals.join(', ');
        });
    },
  };
})(jQuery, Drupal);
