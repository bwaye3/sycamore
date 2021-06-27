<?php

namespace Drupal\Tests\book\Kernel;

use Drupal\node\Entity\Node;
use Drupal\node\Entity\NodeType;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests that the Book module cannot be uninstalled if books exist.
 *
 * @group book
 */
class BookUninstallTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'system',
    'user',
    'field',
    'filter',
    'text',
    'node',
    'book',
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installEntitySchema('user');
    $this->installEntitySchema('node');
    $this->installSchema('book', ['book']);
    $this->installSchema('node', ['node_access']);
    $this->installConfig(['node', 'book', 'field']);
    // For uninstall to work.
    $this->installSchema('user', ['users_data']);
  }

  /**
   * Tests the book_system_info_alter() method.
   */
  public function testBookUninstall() {
    // No nodes exist.
    $validation_reasons = \Drupal::service('module_installer')->validateUninstall(['book']);
<<<<<<< HEAD
    $this->assertEqual([], $validation_reasons, 'The book module is not required.');
=======
    $this->assertEquals([], $validation_reasons, 'The book module is not required.');
>>>>>>> dev

    $content_type = NodeType::create([
      'type' => $this->randomMachineName(),
      'name' => $this->randomString(),
    ]);
    $content_type->save();
    $book_config = $this->config('book.settings');
    $allowed_types = $book_config->get('allowed_types');
    $allowed_types[] = $content_type->id();
    $book_config->set('allowed_types', $allowed_types)->save();

    $node = Node::create(['title' => $this->randomString(), 'type' => $content_type->id()]);
    $node->book['bid'] = 'new';
    $node->save();

    // One node in a book but not of type book.
    $validation_reasons = \Drupal::service('module_installer')->validateUninstall(['book']);
<<<<<<< HEAD
    $this->assertEqual(['To uninstall Book, delete all content that is part of a book'], $validation_reasons['book']);
=======
    $this->assertEquals(['To uninstall Book, delete all content that is part of a book'], $validation_reasons['book']);
>>>>>>> dev

    $book_node = Node::create(['title' => $this->randomString(), 'type' => 'book']);
    $book_node->book['bid'] = FALSE;
    $book_node->save();

    // Two nodes, one in a book but not of type book and one book node (which is
    // not in a book).
    $validation_reasons = \Drupal::service('module_installer')->validateUninstall(['book']);
<<<<<<< HEAD
    $this->assertEqual(['To uninstall Book, delete all content that is part of a book'], $validation_reasons['book']);
=======
    $this->assertEquals(['To uninstall Book, delete all content that is part of a book'], $validation_reasons['book']);
>>>>>>> dev

    $node->delete();
    // One node of type book but not actually part of a book.
    $validation_reasons = \Drupal::service('module_installer')->validateUninstall(['book']);
<<<<<<< HEAD
    $this->assertEqual(['To uninstall Book, delete all content that has the Book content type'], $validation_reasons['book']);
=======
    $this->assertEquals(['To uninstall Book, delete all content that has the Book content type'], $validation_reasons['book']);
>>>>>>> dev

    $book_node->delete();
    // No nodes exist therefore the book module is not required.
    $module_data = \Drupal::service('extension.list.module')->getList();
    $this->assertFalse(isset($module_data['book']->info['required']), 'The book module is not required.');

    $node = Node::create(['title' => $this->randomString(), 'type' => $content_type->id()]);
    $node->save();
    // One node exists but is not part of a book therefore the book module is
    // not required.
    $validation_reasons = \Drupal::service('module_installer')->validateUninstall(['book']);
<<<<<<< HEAD
    $this->assertEqual([], $validation_reasons, 'The book module is not required.');
=======
    $this->assertEquals([], $validation_reasons, 'The book module is not required.');
>>>>>>> dev

    // Uninstall the Book module and check the node type is deleted.
    \Drupal::service('module_installer')->uninstall(['book']);
    $this->assertNull(NodeType::load('book'), "The book node type does not exist.");
  }

}
