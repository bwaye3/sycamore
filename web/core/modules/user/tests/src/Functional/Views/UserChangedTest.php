<?php

namespace Drupal\Tests\user\Functional\Views;

use Drupal\Tests\views\Functional\ViewTestBase;
use Drupal\views\Tests\ViewTestData;

/**
 * Tests the changed field.
 *
 * @group user
 */
class UserChangedTest extends ViewTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['views_ui', 'user_test_views'];
=======
  protected static $modules = ['views_ui', 'user_test_views'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_user_changed'];

<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
    parent::setUp($import_test_views);

    ViewTestData::createTestViews(get_class($this), ['user_test_views']);
=======
  protected function setUp($import_test_views = TRUE): void {
    parent::setUp($import_test_views);

    ViewTestData::createTestViews(static::class, ['user_test_views']);
>>>>>>> dev

    $this->enableViewsTestModule();
  }

  /**
   * Tests changed field.
   */
  public function testChangedField() {
    $path = 'test_user_changed';

    $options = [];

    $this->drupalGet($path, $options);

<<<<<<< HEAD
    $this->assertText('Updated date: ' . date('Y-m-d', REQUEST_TIME));
=======
    $this->assertSession()->pageTextContains('Updated date: ' . date('Y-m-d', REQUEST_TIME));
>>>>>>> dev
  }

}
