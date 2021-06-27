<?php

namespace Drupal\Tests\system\Functional\Form;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the SystemConfigFormTestBase class.
 *
 * @group Form
 */
class SystemConfigFormTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['form_test'];
=======
  protected static $modules = ['form_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests the SystemConfigFormTestBase class.
   */
  public function testSystemConfigForm() {
    $this->drupalGet('form-test/system-config-form');
<<<<<<< HEAD
    $element = $this->xpath('//div[@id = :id]/input[contains(@class, :class)]', [':id' => 'edit-actions', ':class' => 'button--primary']);
    $this->assertNotEmpty($element, 'The primary action submit button was found.');
    $this->drupalPostForm(NULL, [], t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));
=======
    // Verify the primary action submit button is found.
    $this->assertSession()->elementExists('xpath', "//div[@id = 'edit-actions']/input[contains(@class, 'button--primary')]");
    $this->submitForm([], 'Save configuration');
    $this->assertSession()->pageTextContains('The configuration options have been saved.');
>>>>>>> dev
  }

}
