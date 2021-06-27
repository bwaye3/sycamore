<?php

namespace Drupal\FunctionalJavascriptTests;

/**
 * Tests Javascript deprecation notices.
 *
 * @group javascript
 * @group legacy
 */
class JavascriptDeprecationTest extends WebDriverTestBase {

<<<<<<< HEAD
  public static $modules = ['js_deprecation_test'];

  /**
   * @expectedDeprecation Javascript Deprecation: This function is deprecated for testing purposes.
   * @expectedDeprecation Javascript Deprecation: This property is deprecated for testing purposes.
   */
  public function testJavascriptDeprecation() {
=======
  protected static $modules = ['js_deprecation_test'];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests Javascript deprecation notices.
   */
  public function testJavascriptDeprecation() {
    $this->expectDeprecation('Javascript Deprecation: This function is deprecated for testing purposes.');
    $this->expectDeprecation('Javascript Deprecation: This property is deprecated for testing purposes.');
>>>>>>> dev
    $this->drupalGet('js_deprecation_test');
    // Ensure that deprecation message from previous page loads will be
    // detected.
    $this->drupalGet('user');
  }

}
