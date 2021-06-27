/**
 * @file
 * Content Translation admin behaviors.
 */

<<<<<<< HEAD
(function($, Drupal, drupalSettings) {
=======
(function ($, Drupal, drupalSettings) {
>>>>>>> dev
  /**
   * Forces applicable options to be checked as translatable.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches content translation dependent options to the UI.
   */
  Drupal.behaviors.contentTranslationDependentOptions = {
    attach(context) {
      const $context = $(context);
      const options = drupalSettings.contentTranslationDependentOptions;
      let $fields;

      function fieldsChangeHandler($fields, dependentColumns) {
<<<<<<< HEAD
        return function(e) {
=======
        return function (e) {
>>>>>>> dev
          Drupal.behaviors.contentTranslationDependentOptions.check(
            $fields,
            dependentColumns,
            $(e.target),
          );
        };
      }

      // We're given a generic name to look for so we find all inputs containing
      // that name and copy over the input values that require all columns to be
      // translatable.
      if (options && options.dependent_selectors) {
<<<<<<< HEAD
        Object.keys(options.dependent_selectors).forEach(field => {
=======
        Object.keys(options.dependent_selectors).forEach((field) => {
>>>>>>> dev
          $fields = $context.find(`input[name^="${field}"]`);
          const dependentColumns = options.dependent_selectors[field];

          $fields.on('change', fieldsChangeHandler($fields, dependentColumns));
          Drupal.behaviors.contentTranslationDependentOptions.check(
            $fields,
            dependentColumns,
          );
        });
      }
    },
    check($fields, dependentColumns, $changed) {
      let $element = $changed;
      let column;

      function filterFieldsList(index, field) {
        return $(field).val() === column;
      }

      // A field that has many different translatable parts can also define one
      // or more columns that require all columns to be translatable.
<<<<<<< HEAD
      Object.keys(dependentColumns || {}).forEach(index => {
=======
      Object.keys(dependentColumns || {}).forEach((index) => {
>>>>>>> dev
        column = dependentColumns[index];

        if (!$changed) {
          $element = $fields.filter(filterFieldsList);
        }

        if ($element.is(`input[value="${column}"]:checked`)) {
<<<<<<< HEAD
          $fields
            .prop('checked', true)
            .not($element)
            .prop('disabled', true);
=======
          $fields.prop('checked', true).not($element).prop('disabled', true);
>>>>>>> dev
        } else {
          $fields.prop('disabled', false);
        }
      });
    },
  };

  /**
   * Makes field translatability inherit bundle translatability.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches content translation behavior.
   */
  Drupal.behaviors.contentTranslation = {
    attach(context) {
      // Initially hide all field rows for non translatable bundles and all
      // column rows for non translatable fields.
      $(context)
        .find('table .bundle-settings .translatable :input')
        .once('translation-entity-admin-hide')
<<<<<<< HEAD
        .each(function() {
=======
        .each(function () {
>>>>>>> dev
          const $input = $(this);
          const $bundleSettings = $input.closest('.bundle-settings');
          if (!$input.is(':checked')) {
            $bundleSettings.nextUntil('.bundle-settings').hide();
          } else {
            $bundleSettings
              .nextUntil('.bundle-settings', '.field-settings')
              .find('.translatable :input:not(:checked)')
              .closest('.field-settings')
              .nextUntil(':not(.column-settings)')
              .hide();
          }
        });

      // When a bundle is made translatable all of its fields should inherit
      // this setting. Instead when it is made non translatable its fields are
      // hidden, since their translatability no longer matters.
      $('body')
        .once('translation-entity-admin-bind')
<<<<<<< HEAD
        .on('click', 'table .bundle-settings .translatable :input', e => {
=======
        .on('click', 'table .bundle-settings .translatable :input', (e) => {
>>>>>>> dev
          const $target = $(e.target);
          const $bundleSettings = $target.closest('.bundle-settings');
          const $settings = $bundleSettings.nextUntil('.bundle-settings');
          const $fieldSettings = $settings.filter('.field-settings');
          if ($target.is(':checked')) {
            $bundleSettings
              .find('.operations :input[name$="[language_alterable]"]')
              .prop('checked', true);
            $fieldSettings.find('.translatable :input').prop('checked', true);
            $settings.show();
          } else {
            $settings.hide();
          }
        })
<<<<<<< HEAD
        .on('click', 'table .field-settings .translatable :input', e => {
=======
        .on('click', 'table .field-settings .translatable :input', (e) => {
>>>>>>> dev
          const $target = $(e.target);
          const $fieldSettings = $target.closest('.field-settings');
          const $columnSettings = $fieldSettings.nextUntil(
            '.field-settings, .bundle-settings',
          );
          if ($target.is(':checked')) {
            $columnSettings.show();
          } else {
            $columnSettings.hide();
          }
        });
    },
  };
})(jQuery, Drupal, drupalSettings);
