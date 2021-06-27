<?php

namespace Drupal\Tests\system\Functional\Theme;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the legacy stylesheets-remove key.
 *
 * @group system
 * @group legacy
 */
class LegacyStyleSheetsRemoveTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    \Drupal::service('theme_installer')->install(['test_legacy_stylesheets_remove']);
  }

  /**
   * Tests the stylesheets-remove key.
   *
   * @throws \Behat\Mink\Exception\ExpectationException
<<<<<<< HEAD
   *
   * @expectedDeprecation The theme info key stylesheets-remove implemented by theme test_legacy_stylesheets_remove is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. See https://www.drupal.org/node/2497313
   */
  public function testStyleSheetsRemove() {
=======
   */
  public function testStyleSheetsRemove() {
    $this->expectDeprecation('The theme info key stylesheets-remove implemented by theme test_legacy_stylesheets_remove is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. See https://www.drupal.org/node/2497313');
>>>>>>> dev
    \Drupal::configFactory()->getEditable('system.theme')->set('default', 'classy')->save();
    $this->drupalGet('<front>');
    $this->assertSession()->responseContains('css/components/action-links.css?');
    $this->assertSession()->responseContains('css/components/breadcrumb.css?');
    \Drupal::configFactory()->getEditable('system.theme')->set('default', 'test_legacy_stylesheets_remove')->save();
    $this->drupalGet('<front>');
    $this->assertSession()->responseNotContains('css/components/action-links.css?');
    $this->assertSession()->responseContains('css/components/breadcrumb.css?');
  }

}
