/**
 * @file
 * Statistics functionality.
 */

<<<<<<< HEAD
(function($, Drupal, drupalSettings) {
=======
(function ($, Drupal, drupalSettings) {
>>>>>>> dev
  $(document).ready(() => {
    $.ajax({
      type: 'POST',
      cache: false,
      url: drupalSettings.statistics.url,
      data: drupalSettings.statistics.data,
    });
  });
})(jQuery, Drupal, drupalSettings);
