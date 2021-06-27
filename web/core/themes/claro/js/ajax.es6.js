/**
 * @file
 * Ajax theme overrides for Claro.
 */

<<<<<<< HEAD
(Drupal => {
=======
((Drupal) => {
>>>>>>> dev
  /**
   * Theme override of the ajax progress indicator for full screen.
   *
   * @return {string}
   *   The HTML markup for the throbber.
   */
  Drupal.theme.ajaxProgressIndicatorFullscreen = () =>
    '<div class="ajax-progress ajax-progress--fullscreen"><div class="ajax-progress__throbber ajax-progress__throbber--fullscreen">&nbsp;</div></div>';

  /**
   * Theme override of the ajax progress indicator.
   *
   * @param {string} message
   *   The message shown on the UI.
   * @return {string}
   *   The HTML markup for the throbber.
   */
<<<<<<< HEAD
  Drupal.theme.ajaxProgressThrobber = message => {
=======
  Drupal.theme.ajaxProgressThrobber = (message) => {
>>>>>>> dev
    // Build markup without adding extra white space since it affects rendering.
    const messageMarkup =
      typeof message === 'string'
        ? Drupal.theme('ajaxProgressMessage', message)
        : '';
    const throbber = '<div class="ajax-progress__throbber">&nbsp;</div>';

    return `<div class="ajax-progress ajax-progress--throbber">${throbber}${messageMarkup}</div>`;
  };

  /**
   * Theme override of the ajax progress message.
   *
   * @param {string} message
   *   The message shown on the UI.
   * @return {string}
   *   The HTML markup for the throbber.
   */
<<<<<<< HEAD
  Drupal.theme.ajaxProgressMessage = message =>
=======
  Drupal.theme.ajaxProgressMessage = (message) =>
>>>>>>> dev
    `<div class="ajax-progress__message">${message}</div>`;
})(Drupal);
