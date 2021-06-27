<?php

namespace Drupal\KernelTests\Core\Plugin\Context;

<<<<<<< HEAD
use Drupal\Component\Plugin\Context\ContextInterface as ComponentContextInterface;
=======
>>>>>>> dev
use Drupal\Component\Plugin\Definition\ContextAwarePluginDefinitionInterface;
use Drupal\Component\Plugin\Definition\ContextAwarePluginDefinitionTrait;
use Drupal\Component\Plugin\Definition\PluginDefinition;
use Drupal\Component\Plugin\Exception\ContextException;
use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\Plugin\Context\ContextDefinition;
use Drupal\Core\Plugin\ContextAwarePluginBase;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\Plugin\DataType\StringData;
use Drupal\Core\TypedData\TypedDataManagerInterface;
use Drupal\KernelTests\KernelTestBase;
<<<<<<< HEAD
use Drupal\Tests\Traits\ExpectDeprecationTrait;
=======
>>>>>>> dev

/**
 * @coversDefaultClass \Drupal\Core\Plugin\ContextAwarePluginBase
 *
 * @group Plugin
<<<<<<< HEAD
 */
class ContextAwarePluginBaseTest extends KernelTestBase {

  use ExpectDeprecationTrait;

=======
 * @group legacy
 */
class ContextAwarePluginBaseTest extends KernelTestBase {

>>>>>>> dev
  /**
   * The plugin instance under test.
   *
   * @var \Drupal\Core\Plugin\ContextAwarePluginBase
   */
  private $plugin;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function setUp() {
=======
  public function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $configuration = [
      'context' => [
        'nato_letter' => 'Alpha',
      ],
    ];
    $plugin_definition = new TestPluginDefinition();
    $plugin_definition->addContextDefinition('nato_letter', ContextDefinition::create('string'));
<<<<<<< HEAD
    $this->plugin = new TestContextAwarePlugin($configuration, 'the_sisko', $plugin_definition);
=======
    $this->plugin = $this->getMockBuilder(ContextAwarePluginBase::class)
      ->setConstructorArgs([$configuration, 'the_sisko', $plugin_definition])
      ->setMethods(['setContext'])
      ->getMockForAbstractClass();
>>>>>>> dev
  }

  /**
   * @covers ::getContextDefinitions
   */
  public function testGetContextDefinitions() {
    $this->assertIsArray($this->plugin->getContextDefinitions());
  }

  /**
   * @covers ::getContextDefinition
   */
  public function testGetContextDefinition() {
    // The context is not defined, so an exception will be thrown.
    $this->expectException(ContextException::class);
    $this->expectExceptionMessage('The person context is not a valid context.');
    $this->plugin->getContextDefinition('person');
  }

  /**
   * @covers ::getContextValue
<<<<<<< HEAD
   * @group legacy
=======
>>>>>>> dev
   */
  public function testGetContextValue() {
    // Assert that the context value passed in the plugin configuration is
    // available.
    $this->assertSame('Alpha', $this->plugin->getContextValue('nato_letter'));
<<<<<<< HEAD

    // It should be possible to access the context via the $contexts property,
    // but it should trigger a deprecation notice.
    $this->addExpectedDeprecationMessage('The $contexts property is deprecated in Drupal 8.8.0 and will be removed before Drupal 9.0.0. Use methods of \Drupal\Component\Plugin\ContextAwarePluginInterface instead. See https://www.drupal.org/project/drupal/issues/3080631 for more information.');
    $this->assertSame('Alpha', $this->plugin->contexts['nato_letter']->getContextValue());
=======
>>>>>>> dev
  }

  /**
   * @covers ::setContextValue
<<<<<<< HEAD
   * @group legacy
=======
>>>>>>> dev
   */
  public function testSetContextValue() {
    $typed_data_manager = $this->prophesize(TypedDataManagerInterface::class);
    $container = new ContainerBuilder();
    $container->set('typed_data_manager', $typed_data_manager->reveal());
    \Drupal::setContainer($container);

    $this->plugin->getPluginDefinition()->addContextDefinition('foo', new ContextDefinition('string'));

<<<<<<< HEAD
    $this->assertFalse($this->plugin->setContextCalled);
    $this->plugin->setContextValue('foo', new StringData(new DataDefinition(), 'bar'));
    $this->assertTrue($this->plugin->setContextCalled);

    // Assert that setContextValue() did NOT update the deprecated $contexts
    // property.
    $this->addExpectedDeprecationMessage('The $contexts property is deprecated in Drupal 8.8.0 and will be removed before Drupal 9.0.0. Use methods of \Drupal\Component\Plugin\ContextAwarePluginInterface instead. See https://www.drupal.org/project/drupal/issues/3080631 for more information.');
    $this->assertArrayNotHasKey('foo', $this->plugin->contexts);
=======
    $this->plugin->expects($this->exactly(1))->method('setContext');
    $this->plugin->setContextValue('foo', new StringData(new DataDefinition(), 'bar'));
>>>>>>> dev
  }

}

class TestPluginDefinition extends PluginDefinition implements ContextAwarePluginDefinitionInterface {

  use ContextAwarePluginDefinitionTrait;

}
<<<<<<< HEAD

class TestContextAwarePlugin extends ContextAwarePluginBase {

  /**
   * Indicates if ::setContext() has been called or not.
   *
   * @var bool
   */
  public $setContextCalled = FALSE;

  /**
   * {@inheritdoc}
   */
  public function setContext($name, ComponentContextInterface $context) {
    parent::setContext($name, $context);
    $this->setContextCalled = TRUE;
  }

}
=======
>>>>>>> dev
