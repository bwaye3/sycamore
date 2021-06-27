<?php

namespace Drupal\Tests\file\Kernel;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\File\FileSystemInterface;
use Drupal\file\Entity\File;

/**
 * Tests the file move function.
 *
 * @group file
 */
class MoveTest extends FileManagedUnitTestBase {

  /**
   * Move a normal file.
   */
  public function testNormal() {
    $contents = $this->randomMachineName(10);
    $source = $this->createFile(NULL, $contents);
    $desired_filepath = 'public://' . $this->randomMachineName();

    // Clone the object so we don't have to worry about the function changing
    // our reference copy.
    $result = file_move(clone $source, $desired_filepath, FileSystemInterface::EXISTS_ERROR);

    // Check the return status and that the contents changed.
    $this->assertNotFalse($result, 'File moved successfully.');
<<<<<<< HEAD
    $this->assertFileNotExists($source->getFileUri());
    $this->assertEqual($contents, file_get_contents($result->getFileUri()), 'Contents of file correctly written.');
=======
    $this->assertFileDoesNotExist($source->getFileUri());
    $this->assertEquals($contents, file_get_contents($result->getFileUri()), 'Contents of file correctly written.');
>>>>>>> dev

    // Check that the correct hooks were called.
    $this->assertFileHooksCalled(['move', 'load', 'update']);

    // Make sure we got the same file back.
<<<<<<< HEAD
    $this->assertEqual($source->id(), $result->id(), new FormattableMarkup("Source file id's' %fid is unchanged after move.", ['%fid' => $source->id()]));
=======
    $this->assertEquals($source->id(), $result->id(), new FormattableMarkup("Source file id's' %fid is unchanged after move.", ['%fid' => $source->id()]));
>>>>>>> dev

    // Reload the file from the database and check that the changes were
    // actually saved.
    $loaded_file = File::load($result->id());
    $this->assertNotEmpty($loaded_file, 'File can be loaded from the database.');
    $this->assertFileUnchanged($result, $loaded_file);
  }

  /**
<<<<<<< HEAD
   * Test renaming when moving onto a file that already exists.
=======
   * Tests renaming when moving onto a file that already exists.
>>>>>>> dev
   */
  public function testExistingRename() {
    // Setup a file to overwrite.
    $contents = $this->randomMachineName(10);
    $source = $this->createFile(NULL, $contents);
    $target = $this->createFile();
    $this->assertDifferentFile($source, $target);

    // Clone the object so we don't have to worry about the function changing
    // our reference copy.
    $result = file_move(clone $source, $target->getFileUri(), FileSystemInterface::EXISTS_RENAME);

    // Check the return status and that the contents changed.
    $this->assertNotFalse($result, 'File moved successfully.');
<<<<<<< HEAD
    $this->assertFileNotExists($source->getFileUri());
    $this->assertEqual($contents, file_get_contents($result->getFileUri()), 'Contents of file correctly written.');
=======
    $this->assertFileDoesNotExist($source->getFileUri());
    $this->assertEquals($contents, file_get_contents($result->getFileUri()), 'Contents of file correctly written.');
>>>>>>> dev

    // Check that the correct hooks were called.
    $this->assertFileHooksCalled(['move', 'load', 'update']);

    // Compare the returned value to what made it into the database.
    $this->assertFileUnchanged($result, File::load($result->id()));
    // The target file should not have been altered.
    $this->assertFileUnchanged($target, File::load($target->id()));
    // Make sure we end up with two distinct files afterwards.
    $this->assertDifferentFile($target, $result);

    // Compare the source and results.
    $loaded_source = File::load($source->id());
<<<<<<< HEAD
    $this->assertEqual($loaded_source->id(), $result->id(), "Returned file's id matches the source.");
    $this->assertNotEqual($loaded_source->getFileUri(), $source->getFileUri(), 'Returned file path has changed from the original.');
  }

  /**
   * Test replacement when moving onto a file that already exists.
=======
    $this->assertEquals($result->id(), $loaded_source->id(), "Returned file's id matches the source.");
    $this->assertNotEquals($source->getFileUri(), $loaded_source->getFileUri(), 'Returned file path has changed from the original.');
  }

  /**
   * Tests replacement when moving onto a file that already exists.
>>>>>>> dev
   */
  public function testExistingReplace() {
    // Setup a file to overwrite.
    $contents = $this->randomMachineName(10);
    $source = $this->createFile(NULL, $contents);
    $target = $this->createFile();
    $this->assertDifferentFile($source, $target);

    // Clone the object so we don't have to worry about the function changing
    // our reference copy.
    $result = file_move(clone $source, $target->getFileUri(), FileSystemInterface::EXISTS_REPLACE);

    // Look at the results.
<<<<<<< HEAD
    $this->assertEqual($contents, file_get_contents($result->getFileUri()), 'Contents of file were overwritten.');
    $this->assertFileNotExists($source->getFileUri());
=======
    $this->assertEquals($contents, file_get_contents($result->getFileUri()), 'Contents of file were overwritten.');
    $this->assertFileDoesNotExist($source->getFileUri());
>>>>>>> dev
    $this->assertNotEmpty($result, 'File moved successfully.');

    // Check that the correct hooks were called.
    $this->assertFileHooksCalled(['move', 'update', 'delete', 'load']);

    // Reload the file from the database and check that the changes were
    // actually saved.
    $loaded_result = File::load($result->id());
    $this->assertFileUnchanged($result, $loaded_result);
    // Check that target was re-used.
    $this->assertSameFile($target, $loaded_result);
    // Source and result should be totally different.
    $this->assertDifferentFile($source, $loaded_result);
  }

  /**
<<<<<<< HEAD
   * Test replacement when moving onto itself.
=======
   * Tests replacement when moving onto itself.
>>>>>>> dev
   */
  public function testExistingReplaceSelf() {
    // Setup a file to overwrite.
    $contents = $this->randomMachineName(10);
    $source = $this->createFile(NULL, $contents);

    // Copy the file over itself. Clone the object so we don't have to worry
    // about the function changing our reference copy.
    $result = file_move(clone $source, $source->getFileUri(), FileSystemInterface::EXISTS_REPLACE);
    $this->assertFalse($result, 'File move failed.');
<<<<<<< HEAD
    $this->assertEqual($contents, file_get_contents($source->getFileUri()), 'Contents of file were not altered.');
=======
    $this->assertEquals($contents, file_get_contents($source->getFileUri()), 'Contents of file were not altered.');
>>>>>>> dev

    // Check that no hooks were called while failing.
    $this->assertFileHooksCalled([]);

    // Load the file from the database and make sure it is identical to what
    // was returned.
    $this->assertFileUnchanged($source, File::load($source->id()));
  }

  /**
<<<<<<< HEAD
   * Test that moving onto an existing file fails when instructed to do so.
=======
   * Tests that moving onto an existing file fails when instructed to do so.
>>>>>>> dev
   */
  public function testExistingError() {
    $contents = $this->randomMachineName(10);
    $source = $this->createFile();
    $target = $this->createFile(NULL, $contents);
    $this->assertDifferentFile($source, $target);

    // Clone the object so we don't have to worry about the function changing
    // our reference copy.
    $result = file_move(clone $source, $target->getFileUri(), FileSystemInterface::EXISTS_ERROR);

    // Check the return status and that the contents did not change.
    $this->assertFalse($result, 'File move failed.');
    $this->assertFileExists($source->getFileUri());
<<<<<<< HEAD
    $this->assertEqual($contents, file_get_contents($target->getFileUri()), 'Contents of file were not altered.');
=======
    $this->assertEquals($contents, file_get_contents($target->getFileUri()), 'Contents of file were not altered.');
>>>>>>> dev

    // Check that no hooks were called while failing.
    $this->assertFileHooksCalled([]);

    // Load the file from the database and make sure it is identical to what
    // was returned.
    $this->assertFileUnchanged($source, File::load($source->id()));
    $this->assertFileUnchanged($target, File::load($target->id()));
  }

}
