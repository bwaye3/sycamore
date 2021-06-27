<?php

namespace Drupal\KernelTests\Core\DrupalKernel;

<<<<<<< HEAD
use Drupal\Core\DrupalKernel;
use Drupal\Core\DrupalKernelInterface;
use Drupal\KernelTests\KernelTestBase;
use Symfony\Component\HttpFoundation\Request;
=======
use Composer\Autoload\ClassLoader;
use Drupal\Core\DrupalKernel;
use Drupal\Core\DrupalKernelInterface;
use Drupal\KernelTests\KernelTestBase;
use org\bovigo\vfs\vfsStream;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\KernelEvent;
>>>>>>> dev

/**
 * Tests DIC compilation to disk.
 *
 * @group DrupalKernel
<<<<<<< HEAD
=======
 * @coversDefaultClass \Drupal\Core\DrupalKernel
>>>>>>> dev
 */
class DrupalKernelTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
    // DrupalKernel relies on global $config_directories and requires those
    // directories to exist. Therefore, create the directories, but do not
    // invoke KernelTestBase::setUp(), since that would set up further
    // environment aspects, which would distort this test, because it tests
    // the DrupalKernel (re-)building itself.
=======
  protected function setUp(): void {
    // Do not invoke KernelTestBase::setUp(), since that would set up further
    // environment aspects, which would distort this test, because it tests the
    // DrupalKernel (re-)building itself.
>>>>>>> dev
    $this->root = static::getDrupalRoot();
    $this->bootEnvironment();
  }

  /**
   * Build a kernel for testings.
   *
   * Because the bootstrap is in DrupalKernel::boot and that involved loading
   * settings from the filesystem we need to go to extra lengths to build a kernel
   * for testing.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   A request object to use in booting the kernel.
   * @param array $modules_enabled
   *   A list of modules to enable on the kernel.
   *
   * @return \Drupal\Core\DrupalKernel
   *   New kernel for testing.
   */
  protected function getTestKernel(Request $request, array $modules_enabled = NULL) {
    // Manually create kernel to avoid replacing settings.
    $class_loader = require $this->root . '/autoload.php';
    $kernel = DrupalKernel::createFromRequest($request, $class_loader, 'testing');
    $this->setSetting('container_yamls', []);
    $this->setSetting('hash_salt', $this->databasePrefix);
    if (isset($modules_enabled)) {
      $kernel->updateModules($modules_enabled);
    }
    $kernel->boot();

    return $kernel;
  }

  /**
<<<<<<< HEAD
=======
   * Tests KernelEvent class_alias() override.
   *
   * @todo https://www.drupal.org/project/drupal/issues/3197482 Remove this test
   *   once Drupal is using Symfony 5.3 or higher.
   */
  public function testKernelEvent() {
    $request = Request::createFromGlobals();
    $kernel = $this->getTestKernel($request);
    $event = new KernelEvent($kernel, $request, $kernel::MASTER_REQUEST);
    $this->assertTrue($event->isMainRequest());
  }

  /**
>>>>>>> dev
   * Tests DIC compilation.
   */
  public function testCompileDIC() {
    // @todo: write a memory based storage backend for testing.
    $modules_enabled = [
      'system' => 'system',
      'user' => 'user',
    ];

    $request = Request::createFromGlobals();
    $this->getTestKernel($request, $modules_enabled);

    // Instantiate it a second time and we should get the compiled Container
    // class.
    $kernel = $this->getTestKernel($request);
    $container = $kernel->getContainer();
    $refClass = new \ReflectionClass($container);
    $is_compiled_container = !$refClass->isSubclassOf('Symfony\Component\DependencyInjection\ContainerBuilder');
    $this->assertTrue($is_compiled_container);
    // Verify that the list of modules is the same for the initial and the
    // compiled container.
    $module_list = array_keys($container->get('module_handler')->getModuleList());
<<<<<<< HEAD
    $this->assertEqual(array_values($modules_enabled), $module_list);
=======
    $this->assertEquals(array_values($modules_enabled), $module_list);
>>>>>>> dev

    // Get the container another time, simulating a "production" environment.
    $container = $this->getTestKernel($request, NULL)
      ->getContainer();

    $refClass = new \ReflectionClass($container);
    $is_compiled_container = !$refClass->isSubclassOf('Symfony\Component\DependencyInjection\ContainerBuilder');
    $this->assertTrue($is_compiled_container);

    // Verify that the list of modules is the same for the initial and the
    // compiled container.
    $module_list = array_keys($container->get('module_handler')->getModuleList());
<<<<<<< HEAD
    $this->assertEqual(array_values($modules_enabled), $module_list);
=======
    $this->assertEquals(array_values($modules_enabled), $module_list);
>>>>>>> dev

    // Test that our synthetic services are there.
    $class_loader = $container->get('class_loader');
    $refClass = new \ReflectionClass($class_loader);
    $this->assertTrue($refClass->hasMethod('loadClass'), 'Container has a class loader');

    // We make this assertion here purely to show that the new container below
    // is functioning correctly, i.e. we get a brand new ContainerBuilder
    // which has the required new services, after changing the list of enabled
    // modules.
    $this->assertFalse($container->has('service_provider_test_class'));

    // Add another module so that we can test that the new module's bundle is
    // registered to the new container.
    $modules_enabled['service_provider_test'] = 'service_provider_test';
    $this->getTestKernel($request, $modules_enabled);

    // Instantiate it a second time and we should not get a ContainerBuilder
    // class because we are loading the container definition from cache.
    $kernel = $this->getTestKernel($request, $modules_enabled);
    $container = $kernel->getContainer();

    $refClass = new \ReflectionClass($container);
    $is_container_builder = $refClass->isSubclassOf('Symfony\Component\DependencyInjection\ContainerBuilder');
    $this->assertFalse($is_container_builder, 'Container is not a builder');

    // Assert that the new module's bundle was registered to the new container.
    $this->assertTrue($container->has('service_provider_test_class'), 'Container has test service');

    // Test that our synthetic services are there.
    $class_loader = $container->get('class_loader');
    $refClass = new \ReflectionClass($class_loader);
    $this->assertTrue($refClass->hasMethod('loadClass'), 'Container has a class loader');

    // Check that the location of the new module is registered.
    $modules = $container->getParameter('container.modules');
<<<<<<< HEAD
    $this->assertEqual($modules['service_provider_test'], [
      'type' => 'module',
      'pathname' => drupal_get_filename('module', 'service_provider_test'),
      'filename' => NULL,
    ]);
=======
    $this->assertEquals(['type' => 'module', 'pathname' => drupal_get_filename('module', 'service_provider_test'), 'filename' => NULL], $modules['service_provider_test']);
>>>>>>> dev

    // Check that the container itself is not among the persist IDs because it
    // does not make sense to persist the container itself.
    $persist_ids = $container->getParameter('persist_ids');
    $this->assertNotContains('service_container', $persist_ids);
  }

  /**
   * Tests repeated loading of compiled DIC with different environment.
   */
  public function testRepeatedBootWithDifferentEnvironment() {
    $request = Request::createFromGlobals();
    $class_loader = require $this->root . '/autoload.php';

    $environments = [
      'testing1',
      'testing1',
      'testing2',
      'testing2',
    ];

    foreach ($environments as $environment) {
      $kernel = DrupalKernel::createFromRequest($request, $class_loader, $environment);
      $this->setSetting('container_yamls', []);
      $this->setSetting('hash_salt', $this->databasePrefix);
      $this->assertInstanceOf(DrupalKernelInterface::class, $kernel->boot(), "Environment $environment should boot.");
    }
  }

  /**
   * Tests setting of site path after kernel boot.
   */
  public function testPreventChangeOfSitePath() {
    // @todo: write a memory based storage backend for testing.
    $modules_enabled = [
      'system' => 'system',
      'user' => 'user',
    ];

    $request = Request::createFromGlobals();
    $kernel = $this->getTestKernel($request, $modules_enabled);
    $pass = FALSE;
    try {
      $kernel->setSitePath('/dev/null');
    }
    catch (\LogicException $e) {
      $pass = TRUE;
    }
    $this->assertTrue($pass, 'Throws LogicException if DrupalKernel::setSitePath() is called after boot');

    // Ensure no LogicException if DrupalKernel::setSitePath() is called with
    // identical path after boot.
    $path = $kernel->getSitePath();
    $kernel->setSitePath($path);
  }

  /**
<<<<<<< HEAD
   * @group legacy
   * @expectedDeprecation Drupal\Core\DrupalKernel::prepareLegacyRequest is deprecated drupal:8.0.0 and is removed from drupal:9.0.0. Use DrupalKernel::boot() and DrupalKernel::preHandle() instead. See https://www.drupal.org/node/3070678
   */
  public function testPrepareLegacyRequest() {
    $request = Request::createFromGlobals();
    // Manually create kernel to avoid replacing settings.
    $class_loader = require $this->root . '/autoload.php';
    $kernel = DrupalKernel::createFromRequest($request, $class_loader, 'testing');
    $this->setSetting('container_yamls', []);
    $this->setSetting('hash_salt', $this->databasePrefix);

    $this->assertNull($kernel->getContainer());
    // Restore the usual PHPUnit error handler for deprecation testing.
    restore_error_handler();
    $kernel->prepareLegacyRequest($request);

    $this->assertSame($request, $kernel->getContainer()->get('request_stack')->getMasterRequest());
=======
   * Data provider for self::testClassLoaderAutoDetect.
   * @return array
   */
  public function providerClassLoaderAutoDetect() {
    return [
      'TRUE' => [TRUE],
      'FALSE' => [FALSE],
    ];
  }

  /**
   * Tests class_loader_auto_detect setting.
   *
   * This test runs in a separate process since it registers class loaders and
   * results in statics being set.
   *
   * @runInSeparateProcess
   * @preserveGlobalState disabled
   * @covers ::boot
   * @dataProvider providerClassLoaderAutoDetect
   *
   * @param bool $value
   *   The value to set class_loader_auto_detect to.
   */
  public function testClassLoaderAutoDetect($value) {
    // Create a virtual file system containing items that should be
    // excluded. Exception being modules directory.
    vfsStream::setup('root', NULL, [
      'sites' => [
        'default' => [],
      ],
      'core' => [
        'lib' => [
          'Drupal' => [
            'Core' => [],
            'Component' => [],
          ],
        ],
      ],
    ]);

    $this->setSetting('class_loader_auto_detect', $value);
    $classloader = $this->prophesize(ClassLoader::class);

    // Assert that we call the setApcuPrefix on the classloader if
    // class_loader_auto_detect is set to TRUE;
    if ($value) {
      $classloader->setApcuPrefix(Argument::type('string'))->shouldBeCalled();
    }
    else {
      $classloader->setApcuPrefix(Argument::type('string'))->shouldNotBeCalled();
    }

    // Create a kernel suitable for testing.
    $kernel = new DrupalKernel('test', $classloader->reveal(), FALSE, vfsStream::url('root'));
    $kernel->setSitePath(vfsStream::url('root/sites/default'));
    $kernel->boot();
>>>>>>> dev
  }

}
