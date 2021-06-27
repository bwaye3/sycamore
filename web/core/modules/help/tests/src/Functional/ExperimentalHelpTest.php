<?php

namespace Drupal\Tests\help\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Verifies help for experimental modules.
 *
 * @group help
 */
class ExperimentalHelpTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * The experimental_module_test module implements hook_help() and is in the
   * Core (Experimental) package.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'help',
    'experimental_module_test',
    'help_page_test',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * The admin user.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->adminUser = $this->drupalCreateUser(['access administration pages']);
  }

  /**
   * Verifies that a warning message is displayed for experimental modules.
   */
  public function testExperimentalHelp() {
    $this->drupalLogin($this->adminUser);
    $this->drupalGet('admin/help/experimental_module_test');
<<<<<<< HEAD
    $this->assertText('This module is experimental.');
=======
    $this->assertSession()->pageTextContains('This module is experimental.');
>>>>>>> dev

    // Regular modules should not display the message.
    $this->drupalGet('admin/help/help_page_test');
    $this->assertNoText('This module is experimental.');

    // Ensure the actual help page is displayed to avoid a false positive.
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText('online documentation for the Help Page Test module');
=======
    $this->assertSession()->pageTextContains('online documentation for the Help Page Test module');
>>>>>>> dev
  }

}
