<?php

namespace Drupal\FunctionalTests\Core\Test;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests Drupal's integration with Symfony PHPUnit Bridge.
 *
 * @group Test
 * @group legacy
 */
class PhpUnitBridgeTest extends BrowserTestBase {

  protected static $modules = ['deprecation_test'];

  /**
<<<<<<< HEAD
   * @expectedDeprecation This is the deprecation message for deprecation_test_function().
   */
  public function testSilencedError() {
=======
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests deprecation message from deprecation_test_function().
   */
  public function testSilencedError() {
    $this->expectDeprecation('This is the deprecation message for deprecation_test_function().');
>>>>>>> dev
    $this->assertEquals('known_return_value', deprecation_test_function());
  }

  /**
<<<<<<< HEAD
   * @expectedDeprecation This is the deprecation message for deprecation_test_function().
   */
  public function testErrorOnSiteUnderTest() {
=======
   * Tests deprecation message from deprecated route.
   */
  public function testErrorOnSiteUnderTest() {
    $this->expectDeprecation('This is the deprecation message for deprecation_test_function().');
>>>>>>> dev
    $this->drupalGet(Url::fromRoute('deprecation_test.route'));
  }

}
