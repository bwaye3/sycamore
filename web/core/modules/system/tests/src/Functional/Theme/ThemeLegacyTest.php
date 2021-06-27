<?php

namespace Drupal\Tests\system\Functional\Theme;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests legacy theme functions.
 *
 * @group Theme
 * @group legacy
 *
 * @todo Remove in https://www.drupal.org/project/drupal/issues/3097889
 */
class ThemeLegacyTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['theme_test', 'theme_legacy_test'];
=======
  protected static $modules = ['theme_test', 'theme_legacy_test'];
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
    \Drupal::service('theme_installer')->install(['test_legacy_theme']);
  }

  /**
   * Ensures a theme template can override a theme function.
   */
  public function testFunctionOverride() {
    $this->drupalGet('theme-test/function-template-overridden');
<<<<<<< HEAD
    $this->assertText('Success: Template overrides theme function.', 'Theme function overridden by test_theme template.');
=======
    $this->assertSession()->pageTextContains('Success: Template overrides theme function.', 'Theme function overridden by test_theme template.');
>>>>>>> dev
  }

  /**
   * Tests that theme suggestion alter hooks work for theme functions.
   */
  public function testThemeFunctionSuggestionsAlter() {
    $this->drupalGet('theme-test/function-suggestion-alter');
<<<<<<< HEAD
    $this->assertText('Original theme function.');
=======
    $this->assertSession()->pageTextContains('Original theme function.');
>>>>>>> dev

    // Install test_theme and test that themes can alter theme suggestions.
    $this->config('system.theme')
      ->set('default', 'test_legacy_theme')
      ->save();
    $this->drupalGet('theme-test/function-suggestion-alter');
<<<<<<< HEAD
    $this->assertText('Theme function overridden based on new theme suggestion provided by the test_legacy_theme theme.');
=======
    $this->assertSession()->pageTextContains('Theme function overridden based on new theme suggestion provided by the test_legacy_theme theme.');
>>>>>>> dev

    // Enable the theme_suggestions_test module to test modules implementing
    // suggestions alter hooks.
    \Drupal::service('module_installer')->install(['theme_legacy_suggestions_test']);
    $this->resetAll();
    $this->drupalGet('theme-test/function-suggestion-alter');
<<<<<<< HEAD
    $this->assertText('Theme function overridden based on new theme suggestion provided by a module.');
=======
    $this->assertSession()->pageTextContains('Theme function overridden based on new theme suggestion provided by a module.');
>>>>>>> dev
  }

  /**
   * Tests that theme suggestion alter hooks work with theme hook includes.
   */
  public function testSuggestionsAlterInclude() {
    // Check the original theme output.
    $this->drupalGet('theme-test/suggestion-alter-include');
<<<<<<< HEAD
    $this->assertText('Original function before altering theme suggestions.');
=======
    $this->assertSession()->pageTextContains('Original function before altering theme suggestions.');
>>>>>>> dev

    // Enable theme_suggestions_test module and make two requests to make sure
    // the include file is always loaded. The file will always be included for
    // the first request because the theme registry is being rebuilt.
    \Drupal::service('module_installer')->install(['theme_legacy_suggestions_test']);
    $this->resetAll();
    $this->drupalGet('theme-test/suggestion-alter-include');
<<<<<<< HEAD
    $this->assertText('Function suggested via suggestion alter hook found in include file.', 'Include file loaded for initial request.');
    $this->drupalGet('theme-test/suggestion-alter-include');
    $this->assertText('Function suggested via suggestion alter hook found in include file.', 'Include file loaded for second request.');
=======
    $this->assertSession()->pageTextContains('Function suggested via suggestion alter hook found in include file.', 'Include file loaded for initial request.');
    $this->drupalGet('theme-test/suggestion-alter-include');
    $this->assertSession()->pageTextContains('Function suggested via suggestion alter hook found in include file.', 'Include file loaded for second request.');
>>>>>>> dev
  }

}
