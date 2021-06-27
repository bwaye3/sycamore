<?php

namespace Drupal\Tests\file\Kernel;

use Drupal\file\Entity\File;

/**
 * Tests the spaceUsed() function.
 *
 * @group file
 */
class SpaceUsedTest extends FileManagedUnitTestBase {

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create records for a couple of users with different sizes.
    $this->createFileWithSize('public://example1.txt', 50, 2);
    $this->createFileWithSize('public://example2.txt', 20, 2);
    $this->createFileWithSize('public://example3.txt', 100, 3);
    $this->createFileWithSize('public://example4.txt', 200, 3);

    // Now create some non-permanent files.
    $this->createFileWithSize('public://example5.txt', 1, 2, 0);
    $this->createFileWithSize('public://example6.txt', 3, 3, 0);
  }

  /**
   * Creates a file with a given size.
   *
   * @param string $uri
   *   URI of the file to create.
   * @param int $size
   *   Size of the file.
   * @param int $uid
   *   File owner ID.
   * @param int $status
   *   Whether the file should be permanent or temporary.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   *   The file entity.
   */
  protected function createFileWithSize($uri, $size, $uid, $status = FILE_STATUS_PERMANENT) {
    file_put_contents($uri, $this->randomMachineName($size));
    $file = File::create([
      'uri' => $uri,
      'uid' => $uid,
      'status' => $status,
    ]);
    $file->save();
    return $file;
  }

  /**
<<<<<<< HEAD
   * Test different users with the default status.
=======
   * Tests different users with the default status.
>>>>>>> dev
   */
  public function testFileSpaceUsed() {
    $file = $this->container->get('entity_type.manager')->getStorage('file');
    // Test different users with default status.
<<<<<<< HEAD
    $this->assertEqual($file->spaceUsed(2), 70);
    $this->assertEqual($file->spaceUsed(3), 300);
    $this->assertEqual($file->spaceUsed(), 370);

    // Test the status fields
    $this->assertEqual($file->spaceUsed(NULL, 0), 4);
    $this->assertEqual($file->spaceUsed(NULL, FILE_STATUS_PERMANENT), 370);

    // Test both the user and status.
    $this->assertEqual($file->spaceUsed(1, 0), 0);
    $this->assertEqual($file->spaceUsed(1, FILE_STATUS_PERMANENT), 0);
    $this->assertEqual($file->spaceUsed(2, 0), 1);
    $this->assertEqual($file->spaceUsed(2, FILE_STATUS_PERMANENT), 70);
    $this->assertEqual($file->spaceUsed(3, 0), 3);
    $this->assertEqual($file->spaceUsed(3, FILE_STATUS_PERMANENT), 300);
=======
    $this->assertEquals(70, $file->spaceUsed(2));
    $this->assertEquals(300, $file->spaceUsed(3));
    $this->assertEquals(370, $file->spaceUsed());

    // Test the status fields
    $this->assertEquals(4, $file->spaceUsed(NULL, 0));
    $this->assertEquals(370, $file->spaceUsed(NULL, FILE_STATUS_PERMANENT));

    // Test both the user and status.
    $this->assertEquals(0, $file->spaceUsed(1, 0));
    $this->assertEquals(0, $file->spaceUsed(1, FILE_STATUS_PERMANENT));
    $this->assertEquals(1, $file->spaceUsed(2, 0));
    $this->assertEquals(70, $file->spaceUsed(2, FILE_STATUS_PERMANENT));
    $this->assertEquals(3, $file->spaceUsed(3, 0));
    $this->assertEquals(300, $file->spaceUsed(3, FILE_STATUS_PERMANENT));
>>>>>>> dev
  }

}
