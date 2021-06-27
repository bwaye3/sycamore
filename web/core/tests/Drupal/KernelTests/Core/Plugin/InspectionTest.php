<?php

namespace Drupal\KernelTests\Core\Plugin;

/**
 * Tests that plugins implementing PluginInspectionInterface are inspectable.
 *
 * @group Plugin
 */
class InspectionTest extends PluginTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['node', 'user'];
=======
  protected static $modules = ['node', 'user'];
>>>>>>> dev

  /**
   * Ensure the test plugins correctly implement getPluginId() and getPluginDefinition().
   */
  public function testInspection() {
    foreach (['user_login'] as $id) {
      $plugin = $this->testPluginManager->createInstance($id);
      $expected_definition = $this->testPluginExpectedDefinitions[$id];
<<<<<<< HEAD
      $this->assertIdentical($plugin->getPluginId(), $id);
      $this->assertIdentical($this->testPluginManager->getDefinition($id), $expected_definition);
      $this->assertIdentical($plugin->getPluginDefinition(), $expected_definition);
=======
      $this->assertSame($id, $plugin->getPluginId());
      $this->assertSame($expected_definition, $this->testPluginManager->getDefinition($id));
      $this->assertSame($expected_definition, $plugin->getPluginDefinition());
>>>>>>> dev
    }
    // Skip the 'menu' derived blocks, because MockMenuBlock does not implement
    // PluginInspectionInterface. The others do by extending PluginBase.
    foreach (['user_login', 'layout'] as $id) {
      $plugin = $this->mockBlockManager->createInstance($id);
      $expected_definition = $this->mockBlockExpectedDefinitions[$id];
<<<<<<< HEAD
      $this->assertIdentical($plugin->getPluginId(), $id);
      $this->assertIdentical($this->castSafeStrings($this->mockBlockManager->getDefinition($id)), $expected_definition);
      $this->assertIdentical($this->castSafeStrings($plugin->getPluginDefinition()), $expected_definition);
=======
      $this->assertSame($id, $plugin->getPluginId());
      $this->assertEquals($expected_definition, $this->mockBlockManager->getDefinition($id));
      $this->assertEquals($expected_definition, $plugin->getPluginDefinition());
>>>>>>> dev
    }
    // Test a plugin manager that provides defaults.
    foreach (['test_block1', 'test_block2'] as $id) {
      $plugin = $this->defaultsTestPluginManager->createInstance($id);
      $expected_definition = $this->defaultsTestPluginExpectedDefinitions[$id];
<<<<<<< HEAD
      $this->assertIdentical($plugin->getPluginId(), $id);
      $this->assertIdentical($this->defaultsTestPluginManager->getDefinition($id), $expected_definition);
      $this->assertIdentical($this->castSafeStrings($plugin->getPluginDefinition()), $expected_definition);
=======
      $this->assertSame($id, $plugin->getPluginId());
      $this->assertSame($expected_definition, $this->defaultsTestPluginManager->getDefinition($id));
      $this->assertEquals($expected_definition, $plugin->getPluginDefinition());
>>>>>>> dev
    }
  }

}
