<?php

namespace Drupal\KernelTests\Core\File;

use Drupal\Component\FileSystem\FileSystem as FileSystemComponent;
use Drupal\Core\File\FileSystem;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests for getTempDirectory on FileSystem.
 *
 * @group File
 * @coversDefaultClass \Drupal\Core\File\FileSystem
 */
class FileSystemTempDirectoryTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['system'];
=======
  protected static $modules = ['system'];
>>>>>>> dev

  /**
   * The file system under test.
   *
   * @var \Drupal\Core\File\FileSystemInterface
   */
  protected $fileSystem;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $stream_wrapper_manager = $this->container->get('stream_wrapper_manager');
    $logger = $this->container->get('logger.channel.file');
    $settings = $this->container->get('settings');
    $this->fileSystem = new FileSystem($stream_wrapper_manager, $settings, $logger);
  }

  /**
   * Tests 'file_temp_path' setting.
   *
   * @covers ::getTempDirectory
   */
  public function testGetTempDirectorySettings() {
    $tempDir = '/var/tmp/' . $this->randomMachineName();
    $this->setSetting('file_temp_path', $tempDir);
    $this->assertEquals($tempDir, $this->fileSystem->getTempDirectory());
  }

  /**
<<<<<<< HEAD
   * Tests 'path.temporary' config deprecation.
   *
   * @group legacy
   * @covers ::getTempDirectory
   * @expectedDeprecation The 'system.file' config 'path.temporary' is deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Set 'file_temp_path' in settings.php instead. See https://www.drupal.org/node/3039255
   */
  public function testGetTempDirectoryDeprecation() {
    $tempDir = '/var/tmp/' . $this->randomMachineName();
    $this->config('system.file')
      ->set('path.temporary', $tempDir)
      ->save(TRUE);

    $dir = $this->fileSystem->getTempDirectory();
    $this->assertEquals($tempDir, $dir);
  }

  /**
=======
>>>>>>> dev
   * Tests os default fallback.
   *
   * @covers ::getTempDirectory
   */
  public function testGetTempDirectoryOsDefault() {
    $tempDir = FileSystemComponent::getOsTemporaryDirectory();
    $dir = $this->fileSystem->getTempDirectory();
    $this->assertEquals($tempDir, $dir);
  }

}
