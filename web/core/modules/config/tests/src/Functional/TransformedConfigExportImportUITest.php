<?php

namespace Drupal\Tests\config\Functional;

<<<<<<< HEAD
use Drupal\Component\Utility\Html;
=======
>>>>>>> dev
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the user interface for importing/exporting transformed configuration.
 *
 * @group config
 */
class TransformedConfigExportImportUITest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'config',
    'config_transformer_test',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $permissions = [
      'export configuration',
      'import configuration',
      'synchronize configuration',
    ];
    $this->webUser = $this->drupalCreateUser($permissions);
    $this->drupalLogin($this->webUser);

    // Start off with the sync storage being the same as the active storage.
    $this->copyConfig($this->container->get('config.storage'), $this->container->get('config.storage.sync'));
  }

  /**
   * Tests a simple site export import case.
   */
  public function testTransformedExportImport() {
    // After installation there is no snapshot but a new site name.
    $this->drupalGet('admin/config/development/configuration');
    $this->assertNoText('Warning message');
    $this->assertNoText('There are no configuration changes to import.');

    // Tests changes of system.site.
    $this->drupalGet('admin/config/development/configuration/sync/diff/system.site');
<<<<<<< HEAD
    $this->assertText('name: Drupal');
    $this->assertText(Html::escape("name: 'Drupal Arrr'"));
=======
    $this->assertSession()->pageTextContains('name: Drupal');
    $this->assertSession()->pageTextContains("name: 'Drupal Arrr'");
>>>>>>> dev

    // Add a slogan.
    $originalSlogan = $this->config('system.site')->get('slogan');
    $this->assertEmpty($originalSlogan);
    $newSlogan = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->assertNotEqual($newSlogan, $originalSlogan);
    $this->config('system.site')
      ->set('slogan', $newSlogan)
      ->save();
    $this->assertEqual($this->config('system.site')->get('slogan'), $newSlogan);

    // Tests changes of system.site.
    $this->drupalGet('admin/config/development/configuration/sync/diff/system.site');
    $this->assertText(Html::escape("slogan: ''"));
    $this->assertText(Html::escape("slogan: $newSlogan"));

    // Export the configuration.
    $this->drupalPostForm('admin/config/development/configuration/full/export', [], 'Export');
=======
    $this->assertNotEquals($originalSlogan, $newSlogan);
    $this->config('system.site')
      ->set('slogan', $newSlogan)
      ->save();
    $this->assertEquals($newSlogan, $this->config('system.site')->get('slogan'));

    // Tests changes of system.site.
    $this->drupalGet('admin/config/development/configuration/sync/diff/system.site');
    $this->assertSession()->pageTextContains("slogan: ''");
    $this->assertSession()->pageTextContains("slogan: $newSlogan");

    // Export the configuration.
    $this->drupalGet('admin/config/development/configuration/full/export');
    $this->submitForm([], 'Export');
>>>>>>> dev
    $tarball = $this->getSession()->getPage()->getContent();

    // Import the configuration from the tarball.
    $filename = 'temporary://' . $this->randomMachineName();
    file_put_contents($filename, $tarball);
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/full/import', ['files[import_tarball]' => $filename], 'Upload');

    // Assert the new name and slogan.
    $this->drupalGet('admin/config/development/configuration/sync/diff/system.site');
    $this->assertText(Html::escape("name: 'Drupal Arrr'"));
    $this->assertText(Html::escape("slogan: '$originalSlogan Arrr'"));
    $this->assertEqual($this->config('system.site')->get('name'), 'Drupal');
    $this->assertEqual($this->config('system.site')->get('slogan'), $newSlogan);

    // Sync the configuration.
    $this->drupalPostForm('admin/config/development/configuration', [], 'Import all');
    $this->assertEqual($this->config('system.site')->get('name'), 'Drupal Arrr');
    $this->assertEqual($this->config('system.site')->get('slogan'), $originalSlogan . " Arrr");

    // Assert that the event was dispatched again on the new config.
    $this->drupalGet('admin/config/development/configuration/sync/diff/system.site');
    $this->assertText(Html::escape("name: 'Drupal Arrr Arrr'"));
=======
    $this->drupalGet('admin/config/development/configuration/full/import');
    $this->submitForm(['files[import_tarball]' => $filename], 'Upload');

    // Assert the new name and slogan.
    $this->drupalGet('admin/config/development/configuration/sync/diff/system.site');
    $this->assertSession()->pageTextContains("name: 'Drupal Arrr'");
    $this->assertSession()->pageTextContains("slogan: '$originalSlogan Arrr'");
    $this->assertEquals('Drupal', $this->config('system.site')->get('name'));
    $this->assertEquals($newSlogan, $this->config('system.site')->get('slogan'));

    // Sync the configuration.
    $this->drupalGet('admin/config/development/configuration');
    $this->submitForm([], 'Import all');
    $this->assertEquals('Drupal Arrr', $this->config('system.site')->get('name'));
    $this->assertEquals($originalSlogan . " Arrr", $this->config('system.site')->get('slogan'));

    // Assert that the event was dispatched again on the new config.
    $this->drupalGet('admin/config/development/configuration/sync/diff/system.site');
    $this->assertSession()->pageTextContains("name: 'Drupal Arrr Arrr'");
>>>>>>> dev
  }

}
