<?php

namespace Drupal\FunctionalTests\Installer;

use Drupal\Core\Database\Database;
<<<<<<< HEAD
=======
use Drupal\Core\Extension\Extension;
use Drupal\Core\Extension\ModuleUninstallValidatorException;
>>>>>>> dev

/**
 * Tests the interactive installer.
 *
 * @group Installer
 */
class InstallerNonDefaultDatabaseDriverTest extends InstallerTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * The name of the test database driver in use.
   * @var string
   */
  protected $testDriverName;

  /**
   * {@inheritdoc}
   */
  protected function setUpSettings() {
    $driver = Database::getConnection()->driver();
    if (!in_array($driver, ['mysql', 'pgsql'])) {
      $this->markTestSkipped("This test does not support the {$driver} database driver.");
    }
    $this->testDriverName = 'Drivertest' . ucfirst($driver);

    // Assert that we are using the database drivers from the driver_test module.
    $elements = $this->xpath('//label[@for="edit-driver-drivertestmysql"]');
<<<<<<< HEAD
    $this->assertEqual(current($elements)->getText(), 'MySQL by the driver_test module');
    $elements = $this->xpath('//label[@for="edit-driver-drivertestpgsql"]');
    $this->assertEqual(current($elements)->getText(), 'PostgreSQL by the driver_test module');
=======
    $this->assertEquals('MySQL by the driver_test module', current($elements)->getText());
    $elements = $this->xpath('//label[@for="edit-driver-drivertestpgsql"]');
    $this->assertEquals('PostgreSQL by the driver_test module', current($elements)->getText());
>>>>>>> dev

    $settings = $this->parameters['forms']['install_settings_form'];

    $settings['driver'] = $this->testDriverName;
    $settings[$this->testDriverName] = $settings[$driver];
    unset($settings[$driver]);
    $edit = $this->translatePostValues($settings);
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, $this->translations['Save and continue']);
=======
    $this->submitForm($edit, $this->translations['Save and continue']);
>>>>>>> dev
  }

  /**
   * Confirms that the installation succeeded.
   */
  public function testInstalled() {
<<<<<<< HEAD
    $this->assertUrl('user/1');
=======
    $this->assertSession()->addressEquals('user/1');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(200);

    // Assert that in the settings.php the database connection array has the
    // correct values set.
<<<<<<< HEAD
    $contents = file_get_contents($this->root . '/' . $this->siteDirectory . '/settings.php');
    $this->assertStringContainsString("'namespace' => 'Drupal\\\\driver_test\\\\Driver\\\\Database\\\\{$this->testDriverName}',", $contents);
    $this->assertStringContainsString("'driver' => '{$this->testDriverName}',", $contents);
    $this->assertStringContainsString("'autoload' => 'core/modules/system/tests/modules/driver_test/src/Driver/Database/{$this->testDriverName}/',", $contents);
=======
    $contents = file_get_contents($this->container->getParameter('app.root') . '/' . $this->siteDirectory . '/settings.php');
    $this->assertStringContainsString("'namespace' => 'Drupal\\\\driver_test\\\\Driver\\\\Database\\\\{$this->testDriverName}',", $contents);
    $this->assertStringContainsString("'driver' => '{$this->testDriverName}',", $contents);
    $this->assertStringContainsString("'autoload' => 'core/modules/system/tests/modules/driver_test/src/Driver/Database/{$this->testDriverName}/',", $contents);

    // Assert that the module "driver_test" has been installed.
    $this->assertEquals(\Drupal::service('module_handler')->getModule('driver_test'), new Extension($this->root, 'module', 'core/modules/system/tests/modules/driver_test/driver_test.info.yml'));

    // Change the default database connection to use the database driver from
    // the module "driver_test".
    $connection_info = Database::getConnectionInfo();
    $driver_test_connection = $connection_info['default'];
    $driver_test_connection['driver'] = $this->testDriverName;
    $driver_test_connection['namespace'] = 'Drupal\\driver_test\\Driver\\Database\\' . $this->testDriverName;
    $driver_test_connection['autoload'] = "core/modules/system/tests/modules/driver_test/src/Driver/Database/{$this->testDriverName}/";
    Database::renameConnection('default', 'original_database_connection');
    Database::addConnectionInfo('default', 'default', $driver_test_connection);

    // The module "driver_test" should not be uninstallable, because it is
    // providing the database driver.
    try {
      $this->container->get('module_installer')->uninstall(['driver_test']);
      $this->fail('Uninstalled driver_test module.');
    }
    catch (ModuleUninstallValidatorException $e) {
      $this->assertStringContainsString("The module 'Contrib database driver test' is providing the database driver '{$this->testDriverName}'.", $e->getMessage());
    }

    // Restore the old database connection.
    Database::addConnectionInfo('default', 'default', $connection_info['default']);
>>>>>>> dev
  }

}
