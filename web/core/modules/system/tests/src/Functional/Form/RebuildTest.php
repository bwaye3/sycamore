<?php

namespace Drupal\Tests\system\Functional\Form;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests functionality of \Drupal\Core\Form\FormBuilderInterface::rebuildForm().
 *
 * @group Form
 */
class RebuildTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'form_test'];
=======
  protected static $modules = ['node', 'form_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user for testing.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $webUser;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);

    $this->webUser = $this->drupalCreateUser(['access content']);
    $this->drupalLogin($this->webUser);
  }

  /**
   * Tests preservation of values.
   */
  public function testRebuildPreservesValues() {
    $edit = [
      'checkbox_1_default_off' => TRUE,
      'checkbox_1_default_on' => FALSE,
      'text_1' => 'foo',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('form-test/form-rebuild-preserve-values', $edit, 'Add more');
=======
    $this->drupalGet('form-test/form-rebuild-preserve-values');
    $this->submitForm($edit, 'Add more');
>>>>>>> dev

    $assert_session = $this->assertSession();

    // Verify that initial elements retained their submitted values.
    $assert_session->checkboxChecked('edit-checkbox-1-default-off');
    $assert_session->checkboxNotChecked('edit-checkbox-1-default-on');
    $assert_session->fieldValueEquals('edit-text-1', 'foo');

    // Verify that newly added elements were initialized with their default values.
    $assert_session->checkboxChecked('edit-checkbox-2-default-on');
    $assert_session->checkboxNotChecked('edit-checkbox-2-default-off');
    $assert_session->fieldValueEquals('edit-text-2', 'DEFAULT 2');
  }

}
