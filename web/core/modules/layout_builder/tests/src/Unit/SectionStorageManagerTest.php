<?php

namespace Drupal\Tests\layout_builder\Unit;

use Drupal\Component\Plugin\Context\ContextInterface;
use Drupal\Component\Plugin\Discovery\DiscoveryInterface;
use Drupal\Component\Plugin\Exception\ContextException;
use Drupal\Component\Plugin\Factory\FactoryInterface;
use Drupal\Core\Cache\CacheableDependencyInterface;
use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Cache\CacheBackendInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Plugin\Context\Context;
use Drupal\Core\Plugin\Context\ContextDefinition;
use Drupal\Core\Plugin\Context\ContextHandlerInterface;
use Drupal\layout_builder\SectionStorage\SectionStorageDefinition;
use Drupal\layout_builder\SectionStorage\SectionStorageManager;
use Drupal\layout_builder\SectionStorageInterface;
use Drupal\Tests\UnitTestCase;
<<<<<<< HEAD
use Symfony\Component\DependencyInjection\ContainerInterface;
=======
>>>>>>> dev

/**
 * @coversDefaultClass \Drupal\layout_builder\SectionStorage\SectionStorageManager
 *
 * @group layout_builder
 */
class SectionStorageManagerTest extends UnitTestCase {

  /**
   * The section storage manager.
   *
   * @var \Drupal\layout_builder\SectionStorage\SectionStorageManager
   */
  protected $manager;

  /**
   * The plugin.
   *
   * @var \Drupal\layout_builder\SectionStorageInterface
   */
  protected $plugin;

  /**
   * The plugin discovery.
   *
   * @var \Drupal\Component\Plugin\Discovery\DiscoveryInterface
   */
  protected $discovery;

  /**
   * The plugin factory.
   *
   * @var \Drupal\Component\Plugin\Factory\FactoryInterface
   */
  protected $factory;

  /**
   * The context handler.
   *
   * @var \Drupal\Core\Plugin\Context\ContextHandlerInterface
   */
  protected $contextHandler;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $cache = $this->prophesize(CacheBackendInterface::class);
    $module_handler = $this->prophesize(ModuleHandlerInterface::class);
    $this->contextHandler = $this->prophesize(ContextHandlerInterface::class);
    $this->manager = new SectionStorageManager(new \ArrayObject(), $cache->reveal(), $module_handler->reveal(), $this->contextHandler->reveal());

    $this->discovery = $this->prophesize(DiscoveryInterface::class);
    $reflection_property = new \ReflectionProperty($this->manager, 'discovery');
    $reflection_property->setAccessible(TRUE);
    $reflection_property->setValue($this->manager, $this->discovery->reveal());

    $this->plugin = $this->prophesize(SectionStorageInterface::class);
    $this->factory = $this->prophesize(FactoryInterface::class);
    $this->factory->createInstance('the_plugin_id', [])->willReturn($this->plugin->reveal());
    $reflection_property = new \ReflectionProperty($this->manager, 'factory');
    $reflection_property->setAccessible(TRUE);
    $reflection_property->setValue($this->manager, $this->factory->reveal());
  }

  /**
<<<<<<< HEAD
   * @covers ::__construct
   *
   * @expectedDeprecation The context.handler service must be passed to \Drupal\layout_builder\SectionStorage\SectionStorageManager::__construct(); it was added in Drupal 8.7.0 and will be required before Drupal 9.0.0.
   *
   * @group legacy
   */
  public function testConstructNoContextHandler() {
    $cache = $this->prophesize(CacheBackendInterface::class);
    $module_handler = $this->prophesize(ModuleHandlerInterface::class);

    $container = $this->prophesize(ContainerInterface::class);
    $container->get('context.handler')->shouldBeCalled();
    \Drupal::setContainer($container->reveal());
    new SectionStorageManager(new \ArrayObject(), $cache->reveal(), $module_handler->reveal());
  }

  /**
=======
>>>>>>> dev
   * @covers ::loadEmpty
   */
  public function testLoadEmpty() {
    $result = $this->manager->loadEmpty('the_plugin_id');
    $this->assertInstanceOf(SectionStorageInterface::class, $result);
    $this->assertSame($this->plugin->reveal(), $result);
  }

  /**
<<<<<<< HEAD
   * @covers ::loadFromStorageId
   *
   * @expectedDeprecation \Drupal\layout_builder\SectionStorage\SectionStorageManagerInterface::loadFromStorageId() is deprecated in Drupal 8.7.0 and will be removed before Drupal 9.0.0. \Drupal\layout_builder\SectionStorage\SectionStorageManagerInterface::load() should be used instead. See https://www.drupal.org/node/3012353.
   *
   * @group legacy
   */
  public function testLoadFromStorageId() {
    $this->plugin->deriveContextsFromRoute('the_storage_id', [], '', [])->willReturn([]);

    $result = $this->manager->loadFromStorageId('the_plugin_id', 'the_storage_id');
    $this->assertInstanceOf(SectionStorageInterface::class, $result);
  }

  /**
   * @covers ::loadFromRoute
   *
   * @expectedDeprecation \Drupal\layout_builder\SectionStorage\SectionStorageManagerInterface::loadFromRoute() is deprecated in Drupal 8.7.0 and will be removed before Drupal 9.0.0. \Drupal\layout_builder\SectionStorageInterface::deriveContextsFromRoute() and \Drupal\layout_builder\SectionStorage\SectionStorageManagerInterface::load() should be used instead. See https://www.drupal.org/node/3012353.
   *
   * @group legacy
   */
  public function testLoadFromRoute() {
    $this->plugin->deriveContextsFromRoute('the_value', [], 'the_parameter_name', [])->willReturn([]);
    $result = $this->manager->loadFromRoute('the_plugin_id', 'the_value', [], 'the_parameter_name', []);
    $this->assertInstanceOf(SectionStorageInterface::class, $result);
  }

  /**
   * @covers ::loadFromRoute
   *
   * @expectedDeprecation \Drupal\layout_builder\SectionStorage\SectionStorageManagerInterface::loadFromRoute() is deprecated in Drupal 8.7.0 and will be removed before Drupal 9.0.0. \Drupal\layout_builder\SectionStorageInterface::deriveContextsFromRoute() and \Drupal\layout_builder\SectionStorage\SectionStorageManagerInterface::load() should be used instead. See https://www.drupal.org/node/3012353.
   *
   * @group legacy
   */
  public function testLoadFromRouteNull() {
    $this->plugin->deriveContextsFromRoute('the_value', [], 'the_parameter_name', ['_route' => 'the_route_name'])->willReturn([]);
    $result = $this->manager->loadFromRoute('the_plugin_id', 'the_value', [], 'the_parameter_name', ['_route' => 'the_route_name']);
    $this->assertInstanceOf(SectionStorageInterface::class, $result);
  }

  /**
=======
>>>>>>> dev
   * @covers ::load
   */
  public function testLoad() {
    $contexts = [
      'the_context' => $this->prophesize(ContextInterface::class)->reveal(),
    ];

    $this->contextHandler->applyContextMapping($this->plugin, $contexts)->shouldBeCalled();

    $result = $this->manager->load('the_plugin_id', $contexts);
    $this->assertSame($this->plugin->reveal(), $result);
  }

  /**
   * @covers ::load
   */
  public function testLoadNull() {
    $contexts = [
      'the_context' => $this->prophesize(ContextInterface::class)->reveal(),
    ];

    $this->contextHandler->applyContextMapping($this->plugin, $contexts)->willThrow(new ContextException());

    $result = $this->manager->load('the_plugin_id', $contexts);
    $this->assertNull($result);
  }

  /**
   * @covers ::findDefinitions
   */
  public function testFindDefinitions() {
    $this->discovery->getDefinitions()->willReturn([
      'plugin1' => new SectionStorageDefinition(),
      'plugin2' => new SectionStorageDefinition(['weight' => -5]),
      'plugin3' => new SectionStorageDefinition(['weight' => -5]),
      'plugin4' => new SectionStorageDefinition(['weight' => 10]),
    ]);

    $expected = [
      'plugin2',
      'plugin3',
      'plugin1',
      'plugin4',
    ];
    $result = $this->manager->getDefinitions();
    $this->assertSame($expected, array_keys($result));
  }

  /**
   * @covers ::findByContext
   *
   * @dataProvider providerTestFindByContext
   *
   * @param bool $plugin_is_applicable
   *   The result for the plugin's isApplicable() method to return.
   */
  public function testFindByContext($plugin_is_applicable) {
    $cacheability = new CacheableMetadata();
    $contexts = [
      'foo' => new Context(new ContextDefinition('foo')),
    ];
    $definitions = [
      'no_access' => new SectionStorageDefinition(),
      'missing_contexts' => new SectionStorageDefinition(),
      'provider_access' => new SectionStorageDefinition(),
    ];
    $this->discovery->getDefinitions()->willReturn($definitions);

    $provider_access = $this->prophesize(SectionStorageInterface::class);
    $provider_access->isApplicable($cacheability)->willReturn($plugin_is_applicable);

    $no_access = $this->prophesize(SectionStorageInterface::class);
    $no_access->isApplicable($cacheability)->willReturn(FALSE);

    $missing_contexts = $this->prophesize(SectionStorageInterface::class);

    // Do not do any filtering based on context.
    $this->contextHandler->filterPluginDefinitionsByContexts($contexts, $definitions)->willReturnArgument(1);
    $this->contextHandler->applyContextMapping($no_access, $contexts)->shouldBeCalled();
    $this->contextHandler->applyContextMapping($provider_access, $contexts)->shouldBeCalled();
    $this->contextHandler->applyContextMapping($missing_contexts, $contexts)->willThrow(new ContextException());

    $this->factory->createInstance('no_access', [])->willReturn($no_access->reveal());
    $this->factory->createInstance('missing_contexts', [])->willReturn($missing_contexts->reveal());
    $this->factory->createInstance('provider_access', [])->willReturn($provider_access->reveal());

    $result = $this->manager->findByContext($contexts, $cacheability);
    if ($plugin_is_applicable) {
      $this->assertSame($provider_access->reveal(), $result);
    }
    else {
      $this->assertNull($result);
    }
  }

  /**
   * Provides test data for ::testFindByContext().
   */
  public function providerTestFindByContext() {
    // Data provider values are:
    // - the result for the plugin's isApplicable() method to return.
    $data = [];
    $data['plugin access: true'] = [TRUE];
    $data['plugin access: false'] = [FALSE];
    return $data;
  }

  /**
   * @covers ::findByContext
   */
  public function testFindByContextCacheableSectionStorage() {
    $cacheability = new CacheableMetadata();
    $contexts = [
      'foo' => new Context(new ContextDefinition('foo')),
    ];

    $definitions = [
      'first' => new SectionStorageDefinition(),
      'second' => new SectionStorageDefinition(),
    ];
    $this->discovery->getDefinitions()->willReturn($definitions);

    // Create a plugin that has cacheability info itself as a cacheable object
    // and from within ::isApplicable() but is not applicable.
    $first_plugin = $this->prophesize(SectionStorageInterface::class);
    $first_plugin->willImplement(CacheableDependencyInterface::class);
    $first_plugin->getCacheContexts()->shouldNotBeCalled();
    $first_plugin->getCacheTags()->shouldNotBeCalled();
    $first_plugin->getCacheMaxAge()->shouldNotBeCalled();
    $first_plugin->isApplicable($cacheability)->will(function ($arguments) {
      $arguments[0]->addCacheTags(['first_plugin']);
      return FALSE;
    });

    // Create a plugin that adds cacheability info from within ::isApplicable()
    // and is applicable.
    $second_plugin = $this->prophesize(SectionStorageInterface::class);
    $second_plugin->isApplicable($cacheability)->will(function ($arguments) {
      $arguments[0]->addCacheTags(['second_plugin']);
      return TRUE;
    });

    $this->factory->createInstance('first', [])->willReturn($first_plugin->reveal());
    $this->factory->createInstance('second', [])->willReturn($second_plugin->reveal());

    // Do not do any filtering based on context.
    $this->contextHandler->filterPluginDefinitionsByContexts($contexts, $definitions)->willReturnArgument(1);
    $this->contextHandler->applyContextMapping($first_plugin, $contexts)->shouldBeCalled();
    $this->contextHandler->applyContextMapping($second_plugin, $contexts)->shouldBeCalled();

    $result = $this->manager->findByContext($contexts, $cacheability);
    $this->assertSame($second_plugin->reveal(), $result);
    $this->assertSame(['first_plugin', 'second_plugin'], $cacheability->getCacheTags());
  }

}
