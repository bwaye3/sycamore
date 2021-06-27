<?php

namespace Drupal\Tests\block_content\Functional;

use Drupal\block_content\Entity\BlockContent;
<<<<<<< HEAD
use Drupal\Core\Database\Database;
=======
>>>>>>> dev

/**
 * Tests $block_content->save() for saving content.
 *
 * @group block_content
 */
class BlockContentSaveTest extends BlockContentTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block_content_test'];
=======
  protected static $modules = ['block_content_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * Sets the test up.
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->drupalLogin($this->adminUser);
  }

  /**
   * Checks whether custom block IDs are saved properly during an import.
   */
  public function testImport() {
    // Custom block ID must be a number that is not in the database.
<<<<<<< HEAD
    $max_id = Database::getConnection()->query('SELECT MAX(id) FROM {block_content}')->fetchField();
=======
    $max_id = (int) \Drupal::entityQueryAggregate('block_content')
      ->accessCheck(FALSE)
      ->aggregate('id', 'max')
      ->execute()[0]['id_max'];
>>>>>>> dev
    $test_id = $max_id + mt_rand(1000, 1000000);
    $info = $this->randomMachineName(8);
    $block_array = [
      'info' => $info,
      'body' => ['value' => $this->randomMachineName(32)],
      'type' => 'basic',
      'id' => $test_id,
    ];
    $block = BlockContent::create($block_array);
    $block->enforceIsNew(TRUE);
    $block->save();

    // Verify that block_submit did not wipe the provided id.
<<<<<<< HEAD
    $this->assertEqual($block->id(), $test_id, 'Block imported using provide id');
=======
    $this->assertEquals($test_id, $block->id(), 'Block imported using provide id');
>>>>>>> dev

    // Test the import saved.
    $block_by_id = BlockContent::load($test_id);
    $this->assertNotEmpty($block_by_id, 'Custom block load by block ID.');
<<<<<<< HEAD
    $this->assertIdentical($block_by_id->body->value, $block_array['body']['value']);
=======
    $this->assertSame($block_array['body']['value'], $block_by_id->body->value);
>>>>>>> dev
  }

  /**
   * Tests determining changes in hook_block_presave().
   *
   * Verifies the static block load cache is cleared upon save.
   */
  public function testDeterminingChanges() {
    // Initial creation.
    $block = $this->createBlockContent('test_changes');
<<<<<<< HEAD
    $this->assertEqual($block->getChangedTime(), REQUEST_TIME, 'Creating a block sets default "changed" timestamp.');

    // Update the block without applying changes.
    $block->save();
    $this->assertEqual($block->label(), 'test_changes', 'No changes have been determined.');
=======
    $this->assertEquals(REQUEST_TIME, $block->getChangedTime(), 'Creating a block sets default "changed" timestamp.');

    // Update the block without applying changes.
    $block->save();
    $this->assertEquals('test_changes', $block->label(), 'No changes have been determined.');
>>>>>>> dev

    // Apply changes.
    $block->setInfo('updated');
    $block->save();

    // The hook implementations block_content_test_block_content_presave() and
    // block_content_test_block_content_update() determine changes and change
    // the title as well as programmatically set the 'changed' timestamp.
<<<<<<< HEAD
    $this->assertEqual($block->label(), 'updated_presave_update', 'Changes have been determined.');
    $this->assertEqual($block->getChangedTime(), 979534800, 'Saving a custom block uses "changed" timestamp set in presave hook.');

    // Test the static block load cache to be cleared.
    $block = BlockContent::load($block->id());
    $this->assertEqual($block->label(), 'updated_presave', 'Static cache has been cleared.');
=======
    $this->assertEquals('updated_presave_update', $block->label(), 'Changes have been determined.');
    $this->assertEquals(979534800, $block->getChangedTime(), 'Saving a custom block uses "changed" timestamp set in presave hook.');

    // Test the static block load cache to be cleared.
    $block = BlockContent::load($block->id());
    $this->assertEquals('updated_presave', $block->label(), 'Static cache has been cleared.');
>>>>>>> dev
  }

  /**
   * Tests saving a block on block insert.
   *
   * This test ensures that a block has been fully saved when
   * hook_block_content_insert() is invoked, so that the block can be saved again
   * in a hook implementation without errors.
   *
   * @see block_test_block_insert()
   */
  public function testBlockContentSaveOnInsert() {
    // block_content_test_block_content_insert() triggers a save on insert if the
    // title equals 'new'.
    $block = $this->createBlockContent('new');
<<<<<<< HEAD
    $this->assertEqual($block->label(), 'BlockContent ' . $block->id(), 'Custom block saved on block insert.');
=======
    $this->assertEquals('BlockContent ' . $block->id(), $block->label(), 'Custom block saved on block insert.');
>>>>>>> dev
  }

}
