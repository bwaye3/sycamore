<?php

namespace Drupal\Tests\file\Kernel\Migrate;

use Drupal\Tests\migrate_drupal\Kernel\MigrateDrupalTestBase;
use Drupal\migrate_drupal\Tests\StubTestTrait;

/**
 * Test stub creation for file entities.
 *
 * @group file
 */
class MigrateFileStubTest extends MigrateDrupalTestBase {

  use StubTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['file'];
=======
  protected static $modules = ['file'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installEntitySchema('file');
  }

  /**
   * Tests creation of file stubs.
   */
  public function testStub() {
    $this->performStubTest('file');
  }

}
