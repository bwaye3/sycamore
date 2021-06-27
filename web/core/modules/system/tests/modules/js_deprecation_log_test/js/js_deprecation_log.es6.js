/**
 * @file
 *  Testing tools for deprecating JavaScript functions and class properties.
 */
<<<<<<< HEAD
(function() {
  if (typeof console !== 'undefined' && console.warn) {
    const originalWarnFunction = console.warn;
    console.warn = warning => {
=======
(function () {
  if (typeof console !== 'undefined' && console.warn) {
    const originalWarnFunction = console.warn;
    console.warn = (warning) => {
>>>>>>> dev
      const warnings = JSON.parse(
        sessionStorage.getItem('js_deprecation_log_test.warnings') ||
          JSON.stringify([]),
      );
      warnings.push(warning);
      sessionStorage.setItem(
        'js_deprecation_log_test.warnings',
        JSON.stringify(warnings),
      );
      originalWarnFunction(warning);
    };
  }
})();
