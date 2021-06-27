<?php

namespace Drupal\Tests\field_ui\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests indentation on Field UI.
 *
 * @group field_ui
 */
class FieldUIIndentationTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'field_ui', 'field_ui_test'];
=======
  protected static $modules = ['node', 'field_ui', 'field_ui_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create a test user.
    $admin_user = $this->drupalCreateUser([
      'access content',
      'administer content types',
      'administer node display',
    ]);
    $this->drupalLogin($admin_user);

    // Create Basic page node type.
    $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);

  }

  public function testIndentation() {
    $this->drupalGet('admin/structure/types/manage/page/display');
    $this->assertRaw('js-indentation indentation');
  }

}
