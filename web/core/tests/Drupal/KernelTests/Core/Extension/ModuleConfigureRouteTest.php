<?php

namespace Drupal\KernelTests\Core\Extension;

use Drupal\KernelTests\FileSystemModuleDiscoveryDataProviderTrait;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the configure route for core modules.
 *
 * @group #slow
 * @group Module
 */
class ModuleConfigureRouteTest extends KernelTestBase {

  use FileSystemModuleDiscoveryDataProviderTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['system', 'user'];
=======
  protected static $modules = ['system', 'user', 'path_alias'];
>>>>>>> dev

  /**
   * @var \Drupal\Core\Routing\RouteProviderInterface
   */
  protected $routeProvider;

  /**
   * An array of module info.
   *
   * @var array
   */
  protected $moduleInfo;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->routeProvider = \Drupal::service('router.route_provider');
    $this->moduleInfo = \Drupal::service('extension.list.module')->getList();
  }

  /**
<<<<<<< HEAD
   * Test the module configure routes exist.
=======
   * Tests the module configure routes exist.
>>>>>>> dev
   *
   * @dataProvider coreModuleListDataProvider
   */
  public function testModuleConfigureRoutes($module) {
    $module_info = $this->moduleInfo[$module]->info;
    if (!isset($module_info['configure'])) {
      $this->markTestSkipped("$module has no configure route");
    }
    $this->container->get('module_installer')->install([$module]);
    $route = $this->routeProvider->getRouteByName($module_info['configure']);
    $this->assertNotEmpty($route, sprintf('The configure route for the "%s" module was found.', $module));
  }

}
