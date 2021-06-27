<?php

namespace Drupal\Tests\system\Functional\Theme;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the multi theme engine support.
 *
 * @group Theme
 */
class EngineNyanCatTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['theme_test'];
=======
  protected static $modules = ['theme_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    \Drupal::service('theme_installer')->install(['test_theme_nyan_cat_engine']);
  }

  /**
   * Ensures a theme's template is overridable based on the 'template' filename.
   */
  public function testTemplateOverride() {
    $this->config('system.theme')
      ->set('default', 'test_theme_nyan_cat_engine')
      ->save();
    $this->drupalGet('theme-test/template-test');
<<<<<<< HEAD
    $this->assertText('Success: Template overridden with Nyan Cat theme. All of them', 'Template overridden by Nyan Cat file.');
=======
    $this->assertSession()->pageTextContains('Success: Template overridden with Nyan Cat theme. All of them');
>>>>>>> dev
  }

}
