// Allow other JavaScript libraries to use $.
if (window.jQuery) {
  jQuery.noConflict();
}

// Class indicating that JS is enabled; used for styling purpose.
document.documentElement.className += ' js';

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it in an anonymous closure.
<<<<<<< HEAD
(function(Drupal, drupalSettings) {
=======
(function (Drupal, drupalSettings) {
>>>>>>> dev
  /**
   * Calls callback when document ready.
   *
   * @param {function} callback
   *   The function to be called on document ready.
   */
<<<<<<< HEAD
  const domReady = callback => {
    if (document.readyState !== 'loading') {
      callback();
    } else {
      const listener = () => {
        callback();
        document.removeEventListener('DOMContentLoaded', listener);
      };
=======
  const domReady = (callback) => {
    const listener = () => {
      callback();
      document.removeEventListener('DOMContentLoaded', listener);
    };
    if (document.readyState !== 'loading') {
      setTimeout(callback, 0);
    } else {
>>>>>>> dev
      document.addEventListener('DOMContentLoaded', listener);
    }
  };

  // Attach all behaviors.
  domReady(() => {
    Drupal.attachBehaviors(document, drupalSettings);
  });
})(Drupal, window.drupalSettings);
