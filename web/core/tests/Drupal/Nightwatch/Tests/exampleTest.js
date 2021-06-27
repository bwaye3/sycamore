module.exports = {
  '@tags': ['core'],
  before(browser) {
    browser.drupalInstall({
      setupFile: 'core/tests/Drupal/TestSite/TestSiteInstallTestScript.php',
    });
  },
  after(browser) {
    browser.drupalUninstall();
  },
<<<<<<< HEAD
  'Test page': browser => {
=======
  'Test page': (browser) => {
>>>>>>> dev
    browser
      .drupalRelativeURL('/test-page')
      .waitForElementVisible('body', 1000)
      .assert.containsText('body', 'Test page text')
      .drupalLogAndEnd({ onlyOnError: false });
  },
<<<<<<< HEAD
  'Page objects test page': browser => {
=======
  'Page objects test page': (browser) => {
>>>>>>> dev
    const testPage = browser.page.TestPage();

    testPage
      .drupalRelativeURL('/test-page')
      .waitForElementVisible('@body', testPage.props.timeout)
      .assert.containsText('@body', testPage.props.text)
      .assert.noDeprecationErrors()
      .drupalLogAndEnd({ onlyOnError: false });
  },
};
