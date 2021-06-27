<?php

namespace Drupal\Tests\file\Functional;

/**
 * Tests the file uploading functions.
 *
 * @group file
 */
class RemoteFileSaveUploadTest extends SaveUploadTest {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['file_test'];
=======
  protected static $modules = ['file_test'];
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
    $this->config('system.file')->set('default_scheme', 'dummy-remote')->save();
  }

}
