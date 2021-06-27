<?php

namespace Drupal\KernelTests\Core\File;

<<<<<<< HEAD
use Drupal\Component\FileSystem\FileSystem;
=======
>>>>>>> dev
use Drupal\KernelTests\KernelTestBase;

/**
 * @group File
<<<<<<< HEAD
 * @group legacy
=======
>>>>>>> dev
 */
class FileSystemRequirementsTest extends KernelTestBase {

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
   * {@inheritdoc}
   */
  protected $strictConfigSchema = FALSE;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->setInstallProfile('standard');
  }

  /**
<<<<<<< HEAD
   * Tests requirements warnings.
   *
   * @expectedDeprecation The 'system.file' config 'path.temporary' is deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Set 'file_temp_path' in settings.php instead. See https://www.drupal.org/node/3039255
   */
  public function testFileSystemRequirements() {
    $this->config('system.file')
      ->set('path.temporary', $this->randomMachineName())
      ->save(TRUE);

    $requirements = $this->checkSystemRequirements();
    $this->assertEquals('Deprecated configuration', (string) $requirements['temp_directory']['value']);
    $this->assertEquals('You are using deprecated configuration for the temporary files path.', (string) $requirements['temp_directory']['description'][0]['#markup']);
    $this->assertStringStartsWith('Remove the configuration and add the following', (string) $requirements['temp_directory']['description'][1]['#markup']);

    $this->config('system.file')
      ->set('path.temporary', FileSystem::getOsTemporaryDirectory())
      ->save(TRUE);

    $requirements = $this->checkSystemRequirements();
    $this->assertEquals('Deprecated configuration', (string) $requirements['temp_directory']['value']);
    $this->assertEquals('You are using deprecated configuration for the temporary files path.', (string) $requirements['temp_directory']['description'][0]['#markup']);
    $this->assertEquals('Your temporary directory configuration matches the OS default and can be safely removed.', (string) $requirements['temp_directory']['description'][1]['#markup']);
  }

  /**
=======
>>>>>>> dev
   * Tests if settings are set, there are not warnings.
   */
  public function testSettingsExist() {
    $this->setSetting('file_temp_path', $this->randomMachineName());
    $requirements = $this->checkSystemRequirements();
    $this->assertArrayNotHasKey('temp_directory', $requirements);
  }

  /**
   * Checks system runtime requirements.
   *
   * @return array
   *   An array of system requirements.
   */
  protected function checkSystemRequirements() {
    module_load_install('system');
    return system_requirements('runtime');
  }

}
