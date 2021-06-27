/**
 * @file
 * Theme overrides for Claro.
 */

<<<<<<< HEAD
(Drupal => {
=======
((Drupal) => {
>>>>>>> dev
  /**
   * Overrides the dropbutton toggle markup.
   *
   * We have to keep the 'dropbutton-toggle' CSS class because the dropbutton JS
   * operates with that one.
   *
   * @param {object} options
   *   Options object.
   * @param {string} [options.title]
   *   The button text.
   *
   * @return {string}
   *   A string representing a DOM fragment.
   */
<<<<<<< HEAD
  Drupal.theme.dropbuttonToggle = options =>
=======
  Drupal.theme.dropbuttonToggle = (options) =>
>>>>>>> dev
    `<li class="dropbutton-toggle"><button type="button" class="dropbutton__toggle"><span class="visually-hidden">${options.title}</span></button></li>`;
})(Drupal);
