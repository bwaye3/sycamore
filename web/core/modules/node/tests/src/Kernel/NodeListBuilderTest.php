<?php

namespace Drupal\Tests\node\Kernel;

use Drupal\Core\Language\LanguageInterface;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the admin listing fallback when views is not enabled.
 *
 * @group node
 */
class NodeListBuilderTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['node', 'user'];

  protected function setUp() {
=======
  protected static $modules = ['node', 'user'];

  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->installEntitySchema('node');
  }

  /**
   * Tests that the correct cache contexts are set.
   */
  public function testCacheContexts() {
    /** @var \Drupal\Core\Entity\EntityListBuilderInterface $list_builder */
    $list_builder = $this->container->get('entity_type.manager')->getListBuilder('node');

    $build = $list_builder->render();
    $this->container->get('renderer')->renderRoot($build);

<<<<<<< HEAD
    $this->assertEqual(['languages:' . LanguageInterface::TYPE_INTERFACE, 'theme', 'url.query_args.pagers:0', 'user.node_grants:view', 'user.permissions'], $build['#cache']['contexts']);
=======
    $this->assertEquals(['languages:' . LanguageInterface::TYPE_INTERFACE, 'theme', 'url.query_args.pagers:0', 'user.node_grants:view', 'user.permissions'], $build['#cache']['contexts']);
>>>>>>> dev
  }

}
