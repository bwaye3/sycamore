/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings) {
  Drupal.behaviors.contentTranslationDependentOptions = {
    attach: function attach(context) {
      var $context = $(context);
      var options = drupalSettings.contentTranslationDependentOptions;
<<<<<<< HEAD
      var $fields = void 0;
=======
      var $fields;
>>>>>>> dev

      function fieldsChangeHandler($fields, dependentColumns) {
        return function (e) {
          Drupal.behaviors.contentTranslationDependentOptions.check($fields, dependentColumns, $(e.target));
        };
      }

      if (options && options.dependent_selectors) {
        Object.keys(options.dependent_selectors).forEach(function (field) {
<<<<<<< HEAD
          $fields = $context.find('input[name^="' + field + '"]');
          var dependentColumns = options.dependent_selectors[field];

=======
          $fields = $context.find("input[name^=\"".concat(field, "\"]"));
          var dependentColumns = options.dependent_selectors[field];
>>>>>>> dev
          $fields.on('change', fieldsChangeHandler($fields, dependentColumns));
          Drupal.behaviors.contentTranslationDependentOptions.check($fields, dependentColumns);
        });
      }
    },
    check: function check($fields, dependentColumns, $changed) {
      var $element = $changed;
<<<<<<< HEAD
      var column = void 0;
=======
      var column;
>>>>>>> dev

      function filterFieldsList(index, field) {
        return $(field).val() === column;
      }

      Object.keys(dependentColumns || {}).forEach(function (index) {
        column = dependentColumns[index];

        if (!$changed) {
          $element = $fields.filter(filterFieldsList);
        }

<<<<<<< HEAD
        if ($element.is('input[value="' + column + '"]:checked')) {
=======
        if ($element.is("input[value=\"".concat(column, "\"]:checked"))) {
>>>>>>> dev
          $fields.prop('checked', true).not($element).prop('disabled', true);
        } else {
          $fields.prop('disabled', false);
        }
      });
    }
  };
<<<<<<< HEAD

=======
>>>>>>> dev
  Drupal.behaviors.contentTranslation = {
    attach: function attach(context) {
      $(context).find('table .bundle-settings .translatable :input').once('translation-entity-admin-hide').each(function () {
        var $input = $(this);
        var $bundleSettings = $input.closest('.bundle-settings');
<<<<<<< HEAD
=======

>>>>>>> dev
        if (!$input.is(':checked')) {
          $bundleSettings.nextUntil('.bundle-settings').hide();
        } else {
          $bundleSettings.nextUntil('.bundle-settings', '.field-settings').find('.translatable :input:not(:checked)').closest('.field-settings').nextUntil(':not(.column-settings)').hide();
        }
      });
<<<<<<< HEAD

=======
>>>>>>> dev
      $('body').once('translation-entity-admin-bind').on('click', 'table .bundle-settings .translatable :input', function (e) {
        var $target = $(e.target);
        var $bundleSettings = $target.closest('.bundle-settings');
        var $settings = $bundleSettings.nextUntil('.bundle-settings');
        var $fieldSettings = $settings.filter('.field-settings');
<<<<<<< HEAD
=======

>>>>>>> dev
        if ($target.is(':checked')) {
          $bundleSettings.find('.operations :input[name$="[language_alterable]"]').prop('checked', true);
          $fieldSettings.find('.translatable :input').prop('checked', true);
          $settings.show();
        } else {
          $settings.hide();
        }
      }).on('click', 'table .field-settings .translatable :input', function (e) {
        var $target = $(e.target);
        var $fieldSettings = $target.closest('.field-settings');
        var $columnSettings = $fieldSettings.nextUntil('.field-settings, .bundle-settings');
<<<<<<< HEAD
=======

>>>>>>> dev
        if ($target.is(':checked')) {
          $columnSettings.show();
        } else {
          $columnSettings.hide();
        }
      });
    }
  };
})(jQuery, Drupal, drupalSettings);