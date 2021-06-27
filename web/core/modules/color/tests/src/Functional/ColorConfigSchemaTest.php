<?php

namespace Drupal\Tests\color\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Ensures the color config schema is correct.
 *
 * @group color
 */
class ColorConfigSchemaTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['color'];
=======
  protected static $modules = ['color'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with administrative permissions.
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
    \Drupal::service('theme_installer')->install(['bartik']);

    // Create user.
    $this->adminUser = $this->drupalCreateUser(['administer themes']);
    $this->drupalLogin($this->adminUser);
  }

  /**
   * Tests whether the color config schema is valid.
   */
  public function testValidColorConfigSchema() {
    $settings_path = 'admin/appearance/settings/bartik';
    $edit['scheme'] = '';
    $edit['palette[bg]'] = '#123456';
<<<<<<< HEAD
    $this->drupalPostForm($settings_path, $edit, t('Save configuration'));
=======
    $this->drupalGet($settings_path);
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev
  }

}
