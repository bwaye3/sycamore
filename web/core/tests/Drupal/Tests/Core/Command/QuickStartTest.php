<?php

namespace Drupal\Tests\Core\Command;

<<<<<<< HEAD
=======
use Drupal\Core\Database\Driver\sqlite\Install\Tasks;
>>>>>>> dev
use Drupal\Core\Test\TestDatabase;
use Drupal\Tests\BrowserTestBase;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;

/**
 * Tests the quick-start commands.
 *
 * These tests are run in a separate process because they load Drupal code via
 * an include.
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
<<<<<<< HEAD
=======
 * @requires extension pdo_sqlite
>>>>>>> dev
 *
 * @group Command
 */
class QuickStartTest extends TestCase {

  /**
   * The PHP executable path.
   *
   * @var string
   */
  protected $php;

  /**
   * A test database object.
   *
   * @var \Drupal\Core\Test\TestDatabase
   */
  protected $testDb;

  /**
   * The Drupal root directory.
   *
   * @var string
   */
  protected $root;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function setUp() {
    parent::setUp();
    $php_executable_finder = new PhpExecutableFinder();
    $this->php = $php_executable_finder->find();
    $this->root = dirname(dirname(substr(__DIR__, 0, -strlen(__NAMESPACE__))));
=======
  public function setUp(): void {
    parent::setUp();
    $php_executable_finder = new PhpExecutableFinder();
    $this->php = $php_executable_finder->find();
    $this->root = dirname(substr(__DIR__, 0, -strlen(__NAMESPACE__)), 2);
>>>>>>> dev
    chdir($this->root);
    if (!is_writable("{$this->root}/sites/simpletest")) {
      $this->markTestSkipped('This test requires a writable sites/simpletest directory');
    }
    // Get a lock and a valid site path.
    $this->testDb = new TestDatabase();
<<<<<<< HEAD
    include $this->root . '/core/includes/bootstrap.inc';
=======
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function tearDown() {
=======
  public function tearDown(): void {
>>>>>>> dev
    if ($this->testDb) {
      $test_site_directory = $this->root . DIRECTORY_SEPARATOR . $this->testDb->getTestSitePath();
      if (file_exists($test_site_directory)) {
        // @todo use the tear down command from
        //   https://www.drupal.org/project/drupal/issues/2926633
        // Delete test site directory.
        $this->fileUnmanagedDeleteRecursive($test_site_directory, [
          BrowserTestBase::class,
          'filePreDeleteCallback',
        ]);
      }
    }
    parent::tearDown();
  }

  /**
   * Tests the quick-start command.
   */
  public function testQuickStartCommand() {
<<<<<<< HEAD
    if (version_compare(phpversion(), DRUPAL_MINIMUM_SUPPORTED_PHP) < 0) {
=======
    if (version_compare(phpversion(), \Drupal::MINIMUM_SUPPORTED_PHP) < 0) {
      $this->markTestSkipped();
    }
    if (version_compare(\SQLite3::version()['versionString'], Tasks::SQLITE_MINIMUM_VERSION) < 0) {
>>>>>>> dev
      $this->markTestSkipped();
    }

    // Install a site using the standard profile to ensure the one time login
    // link generation works.

    $install_command = [
      $this->php,
      'core/scripts/drupal',
      'quick-start',
      'standard',
      "--site-name='Test site {$this->testDb->getDatabasePrefix()}'",
      '--suppress-login',
    ];
    $process = new Process($install_command, NULL, ['DRUPAL_DEV_SITE_PATH' => $this->testDb->getTestSitePath()]);
<<<<<<< HEAD
    $process->inheritEnvironmentVariables();
=======
>>>>>>> dev
    $process->setTimeout(500);
    $process->start();
    $guzzle = new Client();
    $port = FALSE;
    while ($process->isRunning()) {
      if (preg_match('/127.0.0.1:(\d+)/', $process->getOutput(), $match)) {
        $port = $match[1];
        break;
      }
      // Wait for more output.
      sleep(1);
    }
    // The progress bar uses STDERR to write messages.
<<<<<<< HEAD
    $this->assertContains('Congratulations, you installed Drupal!', $process->getErrorOutput());
=======
    $this->assertStringContainsString('Congratulations, you installed Drupal!', $process->getErrorOutput());
>>>>>>> dev
    $this->assertNotFalse($port, "Web server running on port $port");

    // Give the server a couple of seconds to be ready.
    sleep(2);
<<<<<<< HEAD
    $this->assertContains("127.0.0.1:$port/user/reset/1/", $process->getOutput());
=======
    $this->assertStringContainsString("127.0.0.1:$port/user/reset/1/", $process->getOutput());
>>>>>>> dev

    // Generate a cookie so we can make a request against the installed site.
    define('DRUPAL_TEST_IN_CHILD_SITE', FALSE);
    chmod($this->testDb->getTestSitePath(), 0755);
    $cookieJar = CookieJar::fromArray([
      'SIMPLETEST_USER_AGENT' => drupal_generate_test_ua($this->testDb->getDatabasePrefix()),
    ], '127.0.0.1');

    $response = $guzzle->get('http://127.0.0.1:' . $port, ['cookies' => $cookieJar]);
    $content = (string) $response->getBody();
<<<<<<< HEAD
    $this->assertContains('Test site ' . $this->testDb->getDatabasePrefix(), $content);
=======
    $this->assertStringContainsString('Test site ' . $this->testDb->getDatabasePrefix(), $content);
>>>>>>> dev

    // Stop the web server.
    $process->stop();
  }

  /**
   * Tests that the installer throws a requirement error on older PHP versions.
   */
  public function testPhpRequirement() {
<<<<<<< HEAD
    if (version_compare(phpversion(), DRUPAL_MINIMUM_SUPPORTED_PHP) >= 0) {
=======
    if (version_compare(phpversion(), \Drupal::MINIMUM_SUPPORTED_PHP) >= 0) {
>>>>>>> dev
      $this->markTestSkipped();
    }

    $install_command = [
      $this->php,
      'core/scripts/drupal',
      'quick-start',
      'standard',
      "--site-name='Test site {$this->testDb->getDatabasePrefix()}'",
      '--suppress-login',
    ];
    $process = new Process($install_command, NULL, ['DRUPAL_DEV_SITE_PATH' => $this->testDb->getTestSitePath()]);
<<<<<<< HEAD
    $process->inheritEnvironmentVariables();
=======
>>>>>>> dev
    $process->setTimeout(500);
    $process->start();
    while ($process->isRunning()) {
      // Wait for more output.
      sleep(1);
    }

    $error_output = $process->getErrorOutput();
<<<<<<< HEAD
    $this->assertContains('Your PHP installation is too old.', $error_output);
    $this->assertContains('Drupal requires at least PHP', $error_output);
    $this->assertContains(DRUPAL_MINIMUM_SUPPORTED_PHP, $error_output);
=======
    $this->assertStringContainsString('Your PHP installation is too old.', $error_output);
    $this->assertStringContainsString('Drupal requires at least PHP', $error_output);
    $this->assertStringContainsString(\Drupal::MINIMUM_SUPPORTED_PHP, $error_output);
>>>>>>> dev

    // Stop the web server.
    $process->stop();
  }

  /**
   * Tests the quick-start commands.
   */
  public function testQuickStartInstallAndServerCommands() {
<<<<<<< HEAD
    if (version_compare(phpversion(), DRUPAL_MINIMUM_SUPPORTED_PHP) < 0) {
=======
    if (version_compare(phpversion(), \Drupal::MINIMUM_SUPPORTED_PHP) < 0) {
      $this->markTestSkipped();
    }
    if (version_compare(\SQLite3::version()['versionString'], Tasks::SQLITE_MINIMUM_VERSION) < 0) {
>>>>>>> dev
      $this->markTestSkipped();
    }

    // Install a site.
    $install_command = [
      $this->php,
      'core/scripts/drupal',
      'install',
      'testing',
      "--site-name='Test site {$this->testDb->getDatabasePrefix()}'",
    ];
    $install_process = new Process($install_command, NULL, ['DRUPAL_DEV_SITE_PATH' => $this->testDb->getTestSitePath()]);
<<<<<<< HEAD
    $install_process->inheritEnvironmentVariables();
    $install_process->setTimeout(500);
    $result = $install_process->run();
    // The progress bar uses STDERR to write messages.
    $this->assertContains('Congratulations, you installed Drupal!', $install_process->getErrorOutput());
=======
    $install_process->setTimeout(500);
    $result = $install_process->run();
    // The progress bar uses STDERR to write messages.
    $this->assertStringContainsString('Congratulations, you installed Drupal!', $install_process->getErrorOutput());
>>>>>>> dev
    $this->assertSame(0, $result);

    // Run the PHP built-in webserver.
    $server_command = [
      $this->php,
      'core/scripts/drupal',
      'server',
      '--suppress-login',
    ];
    $server_process = new Process($server_command, NULL, ['DRUPAL_DEV_SITE_PATH' => $this->testDb->getTestSitePath()]);
<<<<<<< HEAD
    $server_process->inheritEnvironmentVariables();
=======
>>>>>>> dev
    $server_process->start();
    $guzzle = new Client();
    $port = FALSE;
    while ($server_process->isRunning()) {
      if (preg_match('/127.0.0.1:(\d+)/', $server_process->getOutput(), $match)) {
        $port = $match[1];
        break;
      }
      // Wait for more output.
      sleep(1);
    }
    $this->assertEquals('', $server_process->getErrorOutput());
<<<<<<< HEAD
    $this->assertContains("127.0.0.1:$port/user/reset/1/", $server_process->getOutput());
=======
    $this->assertStringContainsString("127.0.0.1:$port/user/reset/1/", $server_process->getOutput());
>>>>>>> dev
    $this->assertNotFalse($port, "Web server running on port $port");

    // Give the server a couple of seconds to be ready.
    sleep(2);

    // Generate a cookie so we can make a request against the installed site.
    define('DRUPAL_TEST_IN_CHILD_SITE', FALSE);
    chmod($this->testDb->getTestSitePath(), 0755);
    $cookieJar = CookieJar::fromArray([
      'SIMPLETEST_USER_AGENT' => drupal_generate_test_ua($this->testDb->getDatabasePrefix()),
    ], '127.0.0.1');

    $response = $guzzle->get('http://127.0.0.1:' . $port, ['cookies' => $cookieJar]);
    $content = (string) $response->getBody();
<<<<<<< HEAD
    $this->assertContains('Test site ' . $this->testDb->getDatabasePrefix(), $content);
=======
    $this->assertStringContainsString('Test site ' . $this->testDb->getDatabasePrefix(), $content);
>>>>>>> dev

    // Try to re-install over the top of an existing site.
    $install_command = [
      $this->php,
      'core/scripts/drupal',
      'install',
      'testing',
      "--site-name='Test another site {$this->testDb->getDatabasePrefix()}'",
    ];
    $install_process = new Process($install_command, NULL, ['DRUPAL_DEV_SITE_PATH' => $this->testDb->getTestSitePath()]);
<<<<<<< HEAD
    $install_process->inheritEnvironmentVariables();
    $install_process->setTimeout(500);
    $result = $install_process->run();
    $this->assertContains('Drupal is already installed.', $install_process->getOutput());
=======
    $install_process->setTimeout(500);
    $result = $install_process->run();
    $this->assertStringContainsString('Drupal is already installed.', $install_process->getOutput());
>>>>>>> dev
    $this->assertSame(0, $result);

    // Ensure the site name has not changed.
    $response = $guzzle->get('http://127.0.0.1:' . $port, ['cookies' => $cookieJar]);
    $content = (string) $response->getBody();
<<<<<<< HEAD
    $this->assertContains('Test site ' . $this->testDb->getDatabasePrefix(), $content);
=======
    $this->assertStringContainsString('Test site ' . $this->testDb->getDatabasePrefix(), $content);
>>>>>>> dev

    // Stop the web server.
    $server_process->stop();
  }

  /**
   * Tests the install command with an invalid profile.
   */
  public function testQuickStartCommandProfileValidation() {
    // Install a site using the standard profile to ensure the one time login
    // link generation works.
    $install_command = [
      $this->php,
      'core/scripts/drupal',
      'quick-start',
      'umami',
      "--site-name='Test site {$this->testDb->getDatabasePrefix()}' --suppress-login",
    ];
    $process = new Process($install_command, NULL, ['DRUPAL_DEV_SITE_PATH' => $this->testDb->getTestSitePath()]);
<<<<<<< HEAD
    $process->inheritEnvironmentVariables();
    $process->run();
    $this->assertContains('\'umami\' is not a valid install profile. Did you mean \'demo_umami\'?', $process->getErrorOutput());
=======
    $process->run();
    $this->assertStringContainsString('\'umami\' is not a valid install profile. Did you mean \'demo_umami\'?', $process->getErrorOutput());
>>>>>>> dev
  }

  /**
   * Tests the server command when there is no installation.
   */
  public function testServerWithNoInstall() {
    $server_command = [
      $this->php,
      'core/scripts/drupal',
      'server',
      '--suppress-login',
    ];
    $server_process = new Process($server_command, NULL, ['DRUPAL_DEV_SITE_PATH' => $this->testDb->getTestSitePath()]);
<<<<<<< HEAD
    $server_process->inheritEnvironmentVariables();
    $server_process->run();
    $this->assertContains('No installation found. Use the \'install\' command.', $server_process->getErrorOutput());
=======
    $server_process->run();
    $this->assertStringContainsString('No installation found. Use the \'install\' command.', $server_process->getErrorOutput());
>>>>>>> dev
  }

  /**
   * Deletes all files and directories in the specified path recursively.
   *
   * Note this method has no dependencies on Drupal core to ensure that the
   * test site can be torn down even if something in the test site is broken.
   *
   * @param string $path
<<<<<<< HEAD
   *   A string containing either an URI or a file or directory path.
=======
   *   A string containing either a URI or a file or directory path.
>>>>>>> dev
   * @param callable $callback
   *   (optional) Callback function to run on each file prior to deleting it and
   *   on each directory prior to traversing it. For example, can be used to
   *   modify permissions.
   *
   * @return bool
   *   TRUE for success or if path does not exist, FALSE in the event of an
   *   error.
   *
<<<<<<< HEAD
   * @see file_unmanaged_delete_recursive()
=======
   * @see \Drupal\Core\File\FileSystemInterface::deleteRecursive()
>>>>>>> dev
   */
  protected function fileUnmanagedDeleteRecursive($path, $callback = NULL) {
    if (isset($callback)) {
      call_user_func($callback, $path);
    }
    if (is_dir($path)) {
      $dir = dir($path);
      while (($entry = $dir->read()) !== FALSE) {
        if ($entry == '.' || $entry == '..') {
          continue;
        }
        $entry_path = $path . '/' . $entry;
        $this->fileUnmanagedDeleteRecursive($entry_path, $callback);
      }
      $dir->close();

      return rmdir($path);
    }
    return unlink($path);
  }

}
