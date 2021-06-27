/**
 * @file
<<<<<<< HEAD
 * Javascript for the node content editing form.
 */

(function($, Drupal) {
=======
 * JavaScript for the node content editing form.
 */

(function ($, Drupal) {
>>>>>>> dev
  /**
   * Behaviors for setting summaries on content type form.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches summary behaviors on content type edit forms.
   */
  Drupal.behaviors.contentTypes = {
    attach(context) {
      const $context = $(context);
      // Provide the vertical tab summaries.
<<<<<<< HEAD
      $context.find('#edit-submission').drupalSetSummary(context => {
        const vals = [];
        vals.push(
          Drupal.checkPlain(
            $(context)
              .find('#edit-title-label')
              .val(),
          ) || Drupal.t('Requires a title'),
        );
        return vals.join(', ');
      });
      $context.find('#edit-workflow').drupalSetSummary(context => {
=======
      $context.find('#edit-submission').drupalSetSummary((context) => {
        const vals = [];
        vals.push(
          Drupal.checkPlain($(context).find('#edit-title-label').val()) ||
            Drupal.t('Requires a title'),
        );
        return vals.join(', ');
      });
      $context.find('#edit-workflow').drupalSetSummary((context) => {
>>>>>>> dev
        const vals = [];
        $(context)
          .find('input[name^="options"]:checked')
          .next('label')
<<<<<<< HEAD
          .each(function() {
            vals.push(Drupal.checkPlain($(this).text()));
          });
        if (
          !$(context)
            .find('#edit-options-status')
            .is(':checked')
        ) {
=======
          .each(function () {
            vals.push(Drupal.checkPlain($(this).text()));
          });
        if (!$(context).find('#edit-options-status').is(':checked')) {
>>>>>>> dev
          vals.unshift(Drupal.t('Not published'));
        }
        return vals.join(', ');
      });
<<<<<<< HEAD
      $('#edit-language', context).drupalSetSummary(context => {
=======
      $('#edit-language', context).drupalSetSummary((context) => {
>>>>>>> dev
        const vals = [];

        vals.push(
          $(
            '.js-form-item-language-configuration-langcode select option:selected',
            context,
          ).text(),
        );

        $('input:checked', context)
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
<<<<<<< HEAD
      $context.find('#edit-display').drupalSetSummary(context => {
=======
      $context.find('#edit-display').drupalSetSummary((context) => {
>>>>>>> dev
        const vals = [];
        const $editContext = $(context);
        $editContext
          .find('input:checked')
          .next('label')
<<<<<<< HEAD
          .each(function() {
=======
          .each(function () {
>>>>>>> dev
            vals.push(Drupal.checkPlain($(this).text()));
          });
        if (!$editContext.find('#edit-display-submitted').is(':checked')) {
          vals.unshift(Drupal.t("Don't display post information"));
        }
        return vals.join(', ');
      });
    },
  };
})(jQuery, Drupal);
