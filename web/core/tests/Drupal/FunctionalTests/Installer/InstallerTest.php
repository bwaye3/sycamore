<?php

namespace Drupal\FunctionalTests\Installer;

<<<<<<< HEAD
=======
use Drupal\Core\Routing\RoutingEvents;
use Drupal\Core\Test\PerformanceTestRecorder;

>>>>>>> dev
/**
 * Tests the interactive installer.
 *
 * @group Installer
 */
class InstallerTest extends InstallerTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Ensures that the user page is available after installation.
   */
  public function testInstaller() {
<<<<<<< HEAD
    $this->assertUrl('user/1');
    $this->assertSession()->statusCodeEquals(200);
    // Confirm that we are logged-in after installation.
    $this->assertText($this->rootUser->getAccountName());
=======
    $this->assertNotNull(\Drupal::state()->get('system.css_js_query_string'), 'The dummy query string should be set during install');
    $this->assertSession()->addressEquals('user/1');
    $this->assertSession()->statusCodeEquals(200);
    // Confirm that we are logged-in after installation.
    $this->assertSession()->pageTextContains($this->rootUser->getAccountName());
>>>>>>> dev

    // Verify that the confirmation message appears.
    require_once $this->root . '/core/includes/install.inc';
    $this->assertRaw(t('Congratulations, you installed @drupal!', [
      '@drupal' => drupal_install_profile_distribution_name(),
    ]));

    // Ensure that the timezone is correct for sites under test after installing
    // interactively.
<<<<<<< HEAD
    $this->assertEqual($this->config('system.date')->get('timezone.default'), 'Australia/Sydney');
=======
    $this->assertEquals('Australia/Sydney', $this->config('system.date')->get('timezone.default'));
>>>>>>> dev

    // Ensure the profile has a weight of 1000.
    $module_extension_list = \Drupal::service('extension.list.module');
    $extensions = $module_extension_list->getList();

    $this->assertArrayHasKey('testing', $extensions);
    $this->assertEquals(1000, $extensions['testing']->weight);
<<<<<<< HEAD
=======
    // Ensures that router is not rebuilt unnecessarily during the install.
    $this->assertSame(1, \Drupal::service('core.performance.test.recorder')->getCount('event', RoutingEvents::FINISHED));
>>>>>>> dev
  }

  /**
   * Installer step: Select language.
   */
  protected function setUpLanguage() {
    // Test that \Drupal\Core\Render\BareHtmlPageRenderer adds assets and
    // metatags as expected to the first page of the installer.
    $this->assertRaw("core/themes/seven/css/components/buttons.css");
    $this->assertRaw('<meta charset="utf-8" />');

    // Assert that the expected title is present.
<<<<<<< HEAD
    $this->assertEqual('Choose language', $this->cssSelect('main h2')[0]->getText());
=======
    $this->assertEquals('Choose language', $this->cssSelect('main h2')[0]->getText());
>>>>>>> dev

    parent::setUpLanguage();
  }

  /**
   * {@inheritdoc}
   */
  protected function setUpProfile() {
<<<<<<< HEAD
    // Assert that the expected title is present.
    $this->assertEqual('Select an installation profile', $this->cssSelect('main h2')[0]->getText());
    $result = $this->xpath('//span[contains(@class, :class) and contains(text(), :text)]', [':class' => 'visually-hidden', ':text' => 'Select an installation profile']);
    $this->assertCount(1, $result, "Title/Label not displayed when '#title_display' => 'invisible' attribute is set");
=======
    $settings_services_file = DRUPAL_ROOT . '/sites/default/default.services.yml';
    // Copy the testing-specific service overrides in place.
    copy($settings_services_file, $this->siteDirectory . '/services.yml');
    PerformanceTestRecorder::registerService($this->siteDirectory . '/services.yml', TRUE);
    // Assert that the expected title is present.
    $this->assertEquals('Select an installation profile', $this->cssSelect('main h2')[0]->getText());
    // Verify that Title/Label are not displayed when '#title_display' =>
    // 'invisible' attribute is set.
    $this->assertSession()->elementsCount('xpath', "//span[contains(@class, 'visually-hidden') and contains(text(), 'Select an installation profile')]", 1);
>>>>>>> dev

    parent::setUpProfile();
  }

  /**
   * {@inheritdoc}
   */
  protected function setUpSettings() {
    // Assert that the expected title is present.
<<<<<<< HEAD
    $this->assertEqual('Database configuration', $this->cssSelect('main h2')[0]->getText());
=======
    $this->assertEquals('Database configuration', $this->cssSelect('main h2')[0]->getText());
>>>>>>> dev

    // Assert that we use the by core supported database drivers by default and
    // not the ones from the driver_test module.
    $elements = $this->xpath('//label[@for="edit-driver-mysql"]');
<<<<<<< HEAD
    $this->assertEqual(current($elements)->getText(), 'MySQL, MariaDB, Percona Server, or equivalent');
    $elements = $this->xpath('//label[@for="edit-driver-pgsql"]');
    $this->assertEqual(current($elements)->getText(), 'PostgreSQL');
=======
    $this->assertEquals('MySQL, MariaDB, Percona Server, or equivalent', current($elements)->getText());
    $elements = $this->xpath('//label[@for="edit-driver-pgsql"]');
    $this->assertEquals('PostgreSQL', current($elements)->getText());
>>>>>>> dev

    parent::setUpSettings();
  }

  /**
   * {@inheritdoc}
   */
  protected function setUpSite() {
    // Assert that the expected title is present.
<<<<<<< HEAD
    $this->assertEqual('Configure site', $this->cssSelect('main h2')[0]->getText());

    // Test that SiteConfigureForm::buildForm() has made the site directory and
    // the settings file non-writable.
    $site_directory = $this->container->get('app.root') . '/' . $this->siteDirectory;
    $this->assertDirectoryNotIsWritable($site_directory);
    $this->assertFileNotIsWritable($site_directory . '/settings.php');
=======
    $this->assertEquals('Configure site', $this->cssSelect('main h2')[0]->getText());

    // Test that SiteConfigureForm::buildForm() has made the site directory and
    // the settings file non-writable.
    $site_directory = $this->container->getParameter('app.root') . '/' . $this->siteDirectory;
    $this->assertDirectoryIsNotWritable($site_directory);
    $this->assertFileIsNotWritable($site_directory . '/settings.php');
>>>>>>> dev

    parent::setUpSite();
  }

  /**
   * {@inheritdoc}
   */
  protected function visitInstaller() {
    parent::visitInstaller();

    // Assert the title is correct and has the title suffix.
<<<<<<< HEAD
    $this->assertTitle('Choose language | Drupal');
=======
    $this->assertSession()->titleEquals('Choose language | Drupal');
>>>>>>> dev
  }

}
