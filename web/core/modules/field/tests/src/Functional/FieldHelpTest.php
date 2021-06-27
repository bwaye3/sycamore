<?php

namespace Drupal\Tests\field\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests help display for the Field module.
 *
 * @group field
 */
class FieldHelpTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['field', 'help'];
=======
  protected static $modules = ['field', 'help'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  // Tests field help implementation without optional core modules enabled.
  protected $profile = 'minimal';

=======
>>>>>>> dev
  /**
   * The admin user that will be created.
   */
  protected $adminUser;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create the admin user.
    $this->adminUser = $this->drupalCreateUser([
      'access administration pages',
      'view the administration theme',
    ]);
  }

  /**
<<<<<<< HEAD
   * Test the Field module's help page.
=======
   * Tests the Field module's help page.
>>>>>>> dev
   */
  public function testFieldHelp() {
    // Log in the admin user.
    $this->drupalLogin($this->adminUser);

    // Visit the Help page and make sure no warnings or notices are thrown.
    $this->drupalGet('admin/help/field');

    // Enable the Options, Email and Field API Test modules.
    \Drupal::service('module_installer')->install(['options', 'field_test']);
<<<<<<< HEAD
    $this->resetAll();
    \Drupal::service('plugin.manager.field.widget')->clearCachedDefinitions();
    \Drupal::service('plugin.manager.field.field_type')->clearCachedDefinitions();

    $this->drupalGet('admin/help/field');
    $this->assertSession()->linkExists('Options', 0, 'Options module is listed on the Field help page.');
    $this->assertText('Field API Test', 'Modules with field types that do not implement hook_help are listed.');
=======

    $this->drupalGet('admin/help/field');
    $this->assertSession()->linkExists('Options', 0, 'Options module is listed on the Field help page.');
    // Verify that modules with field types that do not implement hook_help are
    // listed.
    $this->assertSession()->pageTextContains('Field API Test');
>>>>>>> dev
    $this->assertSession()->linkNotExists('Field API Test', 'Modules with field types that do not implement hook_help are not linked.');
    $this->assertSession()->linkNotExists('Link', 'Modules that have not been installed, are not listed.');
  }

}
