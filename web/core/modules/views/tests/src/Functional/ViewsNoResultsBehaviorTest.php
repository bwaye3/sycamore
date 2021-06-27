<?php

namespace Drupal\Tests\views\Functional;

/**
 * Tests no results behavior.
 *
 * @group views
 */
class ViewsNoResultsBehaviorTest extends ViewTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'user'];
=======
  protected static $modules = ['node', 'user'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp();
    $this->enableViewsTestModule();
    $user = $this->createUser([], NULL, TRUE);
    $this->drupalLogin($user);

    // Set the Stark theme and use the default templates from views module.
    /** @var \Drupal\Core\Extension\ThemeInstallerInterface $theme_installer */
    $theme_installer = \Drupal::service('theme_installer');
    $theme_installer->install(['stark']);
    $this->config('system.theme')->set('default', 'stark')->save();
  }

  /**
   * Tests the view with the text.
   */
  public function testDuplicateText() {
    $output = $this->drupalGet('admin/content');
<<<<<<< HEAD
    $this->assertEqual(1, substr_count($output, 'No content available.'), 'Only one message should be present');
=======
    $this->assertEquals(1, substr_count($output, 'No content available.'), 'Only one message should be present');
>>>>>>> dev
  }

}
