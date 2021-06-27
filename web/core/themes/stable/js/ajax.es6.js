/**
 * @file
 * Provides backwards compatibility layer for Ajax-related markup.
 */

<<<<<<< HEAD
(Drupal => {
=======
((Drupal) => {
>>>>>>> dev
  /**
   * Override the default ajaxProgressBar for backwards compatibility.
   *
   * @param {jQuery} $element
   *   Progress bar element.
   * @return {string}
   *   The HTML markup for the progress bar.
   */
<<<<<<< HEAD
  Drupal.theme.ajaxProgressBar = $element =>
=======
  Drupal.theme.ajaxProgressBar = ($element) =>
>>>>>>> dev
    $element.addClass('ajax-progress ajax-progress-bar');
})(Drupal);
