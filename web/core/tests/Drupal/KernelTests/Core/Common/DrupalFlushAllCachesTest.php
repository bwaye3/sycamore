<?php

namespace Drupal\KernelTests\Core\Common;

<<<<<<< HEAD
=======
use Drupal\Core\DependencyInjection\ContainerBuilder;
>>>>>>> dev
use Drupal\KernelTests\KernelTestBase;

/**
 * @covers ::drupal_flush_all_caches
 * @group Common
 */
class DrupalFlushAllCachesTest extends KernelTestBase {

  /**
<<<<<<< HEAD
=======
   * Stores the number of container builds.
   *
   * @var int
   */
  protected $containerBuilds = 0;

  /**
>>>>>>> dev
   * {@inheritdoc}
   */
  protected static $modules = ['system'];

  /**
   * Tests that drupal_flush_all_caches() uses core.extension properly.
   */
  public function testDrupalFlushAllCachesModuleList() {
<<<<<<< HEAD
=======
    $this->assertFalse(function_exists('system_test_help'));
>>>>>>> dev
    $core_extension = \Drupal::configFactory()->getEditable('core.extension');
    $module = $core_extension->get('module');
    $module['system_test'] = -10;
    $core_extension->set('module', module_config_sort($module))->save();
<<<<<<< HEAD

    drupal_flush_all_caches();

    $this->assertSame(['system_test', 'path_alias', 'system'], array_keys($this->container->getParameter('container.modules')));
=======
    $this->containerBuilds = 0;
    drupal_flush_all_caches();
    $this->assertSame(['system_test', 'system'], array_keys($this->container->getParameter('container.modules')));
    $this->assertSame(1, $this->containerBuilds);
    $this->assertTrue(function_exists('system_test_help'));

    $core_extension->clear('module.system_test')->save();
    $this->containerBuilds = 0;
    drupal_flush_all_caches();
    $this->assertSame(['system'], array_keys($this->container->getParameter('container.modules')));
    $this->assertSame(1, $this->containerBuilds);
  }

  /**
   * {@inheritdoc}
   */
  public function register(ContainerBuilder $container) {
    parent::register($container);
    $this->containerBuilds++;
>>>>>>> dev
  }

}
