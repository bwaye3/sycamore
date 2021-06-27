/**
 * @file
 *  Testing behavior for JSWebAssertTest.
 */
<<<<<<< HEAD
(function($, Drupal) {
=======
(function ($, Drupal) {
>>>>>>> dev
  /**
   * Test Ajax command.
   *
   * @param {Drupal.Ajax} [ajax]
   *   {@link Drupal.Ajax} object created by {@link Drupal.Ajax}.
   * @param {object} response
   *   The response from the Ajax request.
   * @param {string} response.selector
   *   A jQuery selector string.
   */
<<<<<<< HEAD
  Drupal.AjaxCommands.prototype.jsAjaxTestCommand = function(ajax, response) {
=======
  Drupal.AjaxCommands.prototype.jsAjaxTestCommand = function (ajax, response) {
>>>>>>> dev
    const $domElement = $(response.selector);
    ajax.element_settings.cat = 'catbro';

    const data = {
      element_settings: ajax.element_settings.cat || {},
      elementSettings: ajax.elementSettings.cat || {},
    };

    $domElement.html(
      `<div id="js_ajax_test_form_element">${JSON.stringify(data)}</div>`,
    );
  };
})(jQuery, Drupal);
