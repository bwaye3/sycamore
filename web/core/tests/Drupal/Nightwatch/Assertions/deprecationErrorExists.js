<<<<<<< HEAD
module.exports.assertion = function(expected) {
  this.message = `Testing if "${expected}" deprecation error has been triggered`;
  this.expected = expected;
  this.pass = deprecationMessages => deprecationMessages.includes(expected);
  this.value = result => {
    const sessionStorageEntries = JSON.parse(result.value);
    const deprecationMessages =
      sessionStorageEntries !== null
        ? sessionStorageEntries.filter(message =>
=======
module.exports.assertion = function (expected) {
  this.message = `Testing if "${expected}" deprecation error has been triggered`;
  this.expected = expected;
  this.pass = (deprecationMessages) => deprecationMessages.includes(expected);
  this.value = (result) => {
    const sessionStorageEntries = JSON.parse(result.value);
    const deprecationMessages =
      sessionStorageEntries !== null
        ? sessionStorageEntries.filter((message) =>
>>>>>>> dev
            new RegExp('[Deprecation]').test(message),
          )
        : [];

<<<<<<< HEAD
    return deprecationMessages.map(message =>
      message.replace('[Deprecation] ', ''),
    );
  };
  this.command = callback =>
    // eslint-disable-next-line prefer-arrow-callback
    this.api.execute(function() {
=======
    return deprecationMessages.map((message) =>
      message.replace('[Deprecation] ', ''),
    );
  };
  this.command = (callback) =>
    // eslint-disable-next-line prefer-arrow-callback
    this.api.execute(function () {
>>>>>>> dev
      return window.sessionStorage.getItem('js_deprecation_log_test.warnings');
    }, callback);
};
