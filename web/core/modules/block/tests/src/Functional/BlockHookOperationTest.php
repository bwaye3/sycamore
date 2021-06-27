<?php

namespace Drupal\Tests\block\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests for Block module regarding hook_entity_operations_alter().
 *
 * @group block
 */
class BlockHookOperationTest extends BrowserTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'entity_test'];
=======
  protected static $modules = ['block', 'entity_test'];
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

    $permissions = [
      'administer blocks',
    ];

    // Create and log in user.
    $admin_user = $this->drupalCreateUser($permissions);
    $this->drupalLogin($admin_user);
  }

  /**
   * Tests the block list to see if the test_operation link is added.
   */
  public function testBlockOperationAlter() {
    // Add a test block, any block will do.
    // Set the machine name so the test_operation link can be built later.
    $block_id = mb_strtolower($this->randomMachineName(16));
    $this->drupalPlaceBlock('system_powered_by_block', ['id' => $block_id]);

    // Get the Block listing.
    $this->drupalGet('admin/structure/block');

    $test_operation_link = 'admin/structure/block/manage/' . $block_id . '/test_operation';
    // Test if the test_operation link is on the page.
<<<<<<< HEAD
    $this->assertLinkByHref($test_operation_link);
=======
    $this->assertSession()->linkByHrefExists($test_operation_link);
>>>>>>> dev
  }

}
