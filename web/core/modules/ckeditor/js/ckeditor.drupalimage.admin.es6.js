/**
 * @file
 * CKEditor 'drupalimage' plugin admin behavior.
 */

<<<<<<< HEAD
(function($, Drupal, drupalSettings) {
=======
(function ($, Drupal, drupalSettings) {
>>>>>>> dev
  /**
   * Provides the summary for the "drupalimage" plugin settings vertical tab.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches summary behavior to the "drupalimage" settings vertical tab.
   */
  Drupal.behaviors.ckeditorDrupalImageSettingsSummary = {
    attach() {
<<<<<<< HEAD
      $('[data-ckeditor-plugin-id="drupalimage"]').drupalSetSummary(context => {
        const root =
          'input[name="editor[settings][plugins][drupalimage][image_upload]';
        const $status = $(`${root}[status]"]`);
        const $maxFileSize = $(`${root}[max_size]"]`);
        const $maxWidth = $(`${root}[max_dimensions][width]"]`);
        const $maxHeight = $(`${root}[max_dimensions][height]"]`);
        const $scheme = $(`${root}[scheme]"]:checked`);

        const maxFileSize = $maxFileSize.val()
          ? $maxFileSize.val()
          : $maxFileSize.attr('placeholder');
        const maxDimensions =
          $maxWidth.val() && $maxHeight.val()
            ? `(${$maxWidth.val()}x${$maxHeight.val()})`
            : '';

        if (!$status.is(':checked')) {
          return Drupal.t('Uploads disabled');
        }

        let output = '';
        output += Drupal.t('Uploads enabled, max size: @size @dimensions', {
          '@size': maxFileSize,
          '@dimensions': maxDimensions,
        });
        if ($scheme.length) {
          output += `<br />${$scheme.attr('data-label')}`;
        }
        return output;
      });
=======
      $('[data-ckeditor-plugin-id="drupalimage"]').drupalSetSummary(
        (context) => {
          const root =
            'input[name="editor[settings][plugins][drupalimage][image_upload]';
          const $status = $(`${root}[status]"]`);
          const $maxFileSize = $(`${root}[max_size]"]`);
          const $maxWidth = $(`${root}[max_dimensions][width]"]`);
          const $maxHeight = $(`${root}[max_dimensions][height]"]`);
          const $scheme = $(`${root}[scheme]"]:checked`);

          const maxFileSize = $maxFileSize.val()
            ? $maxFileSize.val()
            : $maxFileSize.attr('placeholder');
          const maxDimensions =
            $maxWidth.val() && $maxHeight.val()
              ? `(${$maxWidth.val()}x${$maxHeight.val()})`
              : '';

          if (!$status.is(':checked')) {
            return Drupal.t('Uploads disabled');
          }

          let output = '';
          output += Drupal.t('Uploads enabled, max size: @size @dimensions', {
            '@size': maxFileSize,
            '@dimensions': maxDimensions,
          });
          if ($scheme.length) {
            output += `<br />${$scheme.attr('data-label')}`;
          }
          return output;
        },
      );
>>>>>>> dev
    },
  };
})(jQuery, Drupal, drupalSettings);
