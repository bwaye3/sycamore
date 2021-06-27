/**
 * @file
 *  Testing behavior for JSWebAssertTest.
 */

(($, Drupal) => {
  /**
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Makes changes in the DOM to be able to test the completion of AJAX in assertWaitOnAjaxRequest.
   */
  Drupal.behaviors.js_webassert_test_wait_for_ajax_request = {
    attach() {
<<<<<<< HEAD
      $('#edit-test-assert-no-element-after-wait-pass').on('click', e => {
=======
      $('#edit-test-assert-no-element-after-wait-pass').on('click', (e) => {
>>>>>>> dev
        e.preventDefault();
        setTimeout(() => {
          $('#edit-test-assert-no-element-after-wait-pass').remove();
        }, 500);
      });

<<<<<<< HEAD
      $('#edit-test-assert-no-element-after-wait-fail').on('click', e => {
=======
      $('#edit-test-assert-no-element-after-wait-fail').on('click', (e) => {
>>>>>>> dev
        e.preventDefault();
        setTimeout(() => {
          $('#edit-test-assert-no-element-after-wait-fail').remove();
        }, 2000);
      });
    },
  };
})(jQuery, Drupal);
