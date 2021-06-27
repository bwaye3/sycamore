<?php

namespace Drupal\Tests\block\Functional;

use Drupal\Component\Utility\Crypt;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests form in block caching.
 *
 * @group block
 */
class BlockFormInBlockTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'block_test', 'test_page_test'];
=======
  protected static $modules = ['block', 'block_test', 'test_page_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Enable our test block.
    $this->drupalPlaceBlock('test_form_in_block');
  }

  /**
<<<<<<< HEAD
   * Test to see if form in block's redirect isn't cached.
=======
   * Tests to see if form in block's redirect isn't cached.
>>>>>>> dev
   */
  public function testCachePerPage() {
    $form_values = ['email' => 'test@example.com'];

    // Go to "test-page" and test if the block is enabled.
    $this->drupalGet('test-page');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText('Your .com email address.', 'form found');

    // Make sure that we're currently still on /test-page after submitting the
    // form.
    $this->drupalPostForm(NULL, $form_values, t('Submit'));
    $this->assertUrl('test-page');
    $this->assertText(t('Your email address is @email', ['@email' => 'test@example.com']));
=======
    $this->assertSession()->pageTextContains('Your .com email address.');

    // Make sure that we're currently still on /test-page after submitting the
    // form.
    $this->submitForm($form_values, 'Submit');
    $this->assertSession()->addressEquals('test-page');
    $this->assertSession()->pageTextContains('Your email address is test@example.com');
>>>>>>> dev

    // Go to a different page and see if the block is enabled there as well.
    $this->drupalGet('test-render-title');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText('Your .com email address.', 'form found');
=======
    $this->assertSession()->pageTextContains('Your .com email address.');
>>>>>>> dev

    // Make sure that submitting the form didn't redirect us to the first page
    // we submitted the form from after submitting the form from
    // /test-render-title.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $form_values, t('Submit'));
    $this->assertUrl('test-render-title');
    $this->assertText(t('Your email address is @email', ['@email' => 'test@example.com']));
  }

  /**
   * Test the actual placeholders
=======
    $this->submitForm($form_values, 'Submit');
    $this->assertSession()->addressEquals('test-render-title');
    $this->assertSession()->pageTextContains('Your email address is test@example.com');
  }

  /**
   * Tests the actual placeholders.
>>>>>>> dev
   */
  public function testPlaceholders() {
    $this->drupalGet('test-multiple-forms');

    $placeholder = 'form_action_' . Crypt::hashBase64('Drupal\Core\Form\FormBuilder::prepareForm');
<<<<<<< HEAD
    $this->assertText('Form action: ' . $placeholder, 'placeholder found.');
=======
    $this->assertSession()->pageTextContains('Form action: ' . $placeholder);
>>>>>>> dev
  }

}
