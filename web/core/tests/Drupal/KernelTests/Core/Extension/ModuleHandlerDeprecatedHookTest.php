<?php

namespace Drupal\KernelTests\Core\Extension;

use Drupal\KernelTests\KernelTestBase;

/**
 * Test whether deprecated hook invocations trigger errors.
 *
 * @group Extension
 * @group legacy
 *
 * @coversDefaultClass Drupal\Core\Extension\ModuleHandler
 */
class ModuleHandlerDeprecatedHookTest extends KernelTestBase {

  protected static $modules = ['deprecation_test'];

  /**
   * @covers ::invokeDeprecated
<<<<<<< HEAD
   * @expectedDeprecation The deprecated hook hook_deprecated_hook() is implemented in these functions: deprecation_test_deprecated_hook(). Use something else.
   */
  public function testInvokeDeprecated() {
    /* @var $module_handler \Drupal\Core\Extension\ModuleHandlerInterface */
    $module_handler = $this->container->get('module_handler');
    $arg = 'an_arg';
    $this->assertEqual(
=======
   */
  public function testInvokeDeprecated() {
    $this->expectDeprecation('The deprecated hook hook_deprecated_hook() is implemented in these functions: deprecation_test_deprecated_hook(). Use something else.');
    /** @var \Drupal\Core\Extension\ModuleHandlerInterface $module_handler */
    $module_handler = $this->container->get('module_handler');
    $arg = 'an_arg';
    $this->assertEquals(
>>>>>>> dev
      $arg,
      $module_handler->invokeDeprecated('Use something else.', 'deprecation_test', 'deprecated_hook', [$arg])
    );
  }

  /**
   * @covers ::invokeAllDeprecated
<<<<<<< HEAD
   * @expectedDeprecation The deprecated hook hook_deprecated_hook() is implemented in these functions: deprecation_test_deprecated_hook(). Use something else.
   */
  public function testInvokeAllDeprecated() {
    /* @var $module_handler \Drupal\Core\Extension\ModuleHandlerInterface */
    $module_handler = $this->container->get('module_handler');
    $arg = 'an_arg';
    $this->assertEqual(
=======
   */
  public function testInvokeAllDeprecated() {
    $this->expectDeprecation('The deprecated hook hook_deprecated_hook() is implemented in these functions: deprecation_test_deprecated_hook(). Use something else.');
    /** @var \Drupal\Core\Extension\ModuleHandlerInterface $module_handler */
    $module_handler = $this->container->get('module_handler');
    $arg = 'an_arg';
    $this->assertEquals(
>>>>>>> dev
      [$arg],
      $module_handler->invokeAllDeprecated('Use something else.', 'deprecated_hook', [$arg])
    );
  }

  /**
   * @covers ::alterDeprecated
<<<<<<< HEAD
   * @expectedDeprecation The deprecated alter hook hook_deprecated_alter_alter() is implemented in these functions: deprecation_test_deprecated_alter_alter. Alter something else.
   */
  public function testAlterDeprecated() {
    /* @var $module_handler \Drupal\Core\Extension\ModuleHandlerInterface */
=======
   */
  public function testAlterDeprecated() {
    $this->expectDeprecation('The deprecated alter hook hook_deprecated_alter_alter() is implemented in these functions: deprecation_test_deprecated_alter_alter. Alter something else.');
    /** @var \Drupal\Core\Extension\ModuleHandlerInterface $module_handler */
>>>>>>> dev
    $module_handler = $this->container->get('module_handler');
    $data = [];
    $context1 = 'test1';
    $context2 = 'test2';
    $module_handler->alterDeprecated('Alter something else.', 'deprecated_alter', $data, $context1, $context2);
<<<<<<< HEAD
    $this->assertEqual([$context1, $context2], $data);
=======
    $this->assertEquals([$context1, $context2], $data);
>>>>>>> dev
  }

}
