module.exports = {
  '@tags': ['core'],
  before(browser) {
    browser.drupalInstall({
      setupFile:
        'core/tests/Drupal/TestSite/TestSiteMultilingualInstallTestScript.php',
      langcode: 'fr',
    });
  },
  after(browser) {
    browser.drupalUninstall();
  },
<<<<<<< HEAD
  'Test page with langcode': browser => {
=======
  'Test page with langcode': (browser) => {
>>>>>>> dev
    browser
      .drupalRelativeURL('/test-page')
      .assert.attributeEquals('html', 'lang', 'fr')
      .drupalLogAndEnd({ onlyOnError: false });
  },
};
