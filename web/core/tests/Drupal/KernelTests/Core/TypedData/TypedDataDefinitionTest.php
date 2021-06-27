<?php

namespace Drupal\KernelTests\Core\TypedData;

use Drupal\Core\TypedData\ComplexDataDefinitionInterface;
use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\DataDefinitionInterface;
use Drupal\Core\TypedData\DataReferenceDefinition;
use Drupal\Core\TypedData\DataReferenceDefinitionInterface;
use Drupal\Core\TypedData\ListDataDefinition;
use Drupal\Core\TypedData\ListDataDefinitionInterface;
use Drupal\Core\TypedData\MapDataDefinition;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests deriving metadata of core data types.
 *
 * @group TypedData
 */
class TypedDataDefinitionTest extends KernelTestBase {

  /**
   * The typed data manager to use.
   *
   * @var \Drupal\Core\TypedData\TypedDataManager
   */
  protected $typedDataManager;

<<<<<<< HEAD
  protected function setUp() {
    parent::setup();
=======
  protected function setUp(): void {
    parent::setUp();
>>>>>>> dev
    $this->typedDataManager = $this->container->get('typed_data_manager');
  }

  /**
   * Tests deriving metadata about list items.
   */
  public function testLists() {
    $list_definition = ListDataDefinition::create('string');
    $this->assertInstanceOf(ListDataDefinitionInterface::class, $list_definition);
    $item_definition = $list_definition->getItemDefinition();
    $this->assertInstanceOf(DataDefinitionInterface::class, $item_definition);
<<<<<<< HEAD
    $this->assertEqual($item_definition->getDataType(), 'string');
=======
    $this->assertEquals('string', $item_definition->getDataType());
>>>>>>> dev

    // Test using the definition factory.
    $list_definition2 = $this->typedDataManager->createListDataDefinition('string');
    $this->assertInstanceOf(ListDataDefinitionInterface::class, $list_definition2);
<<<<<<< HEAD
    $this->assertEqual($list_definition, $list_definition2);
=======
    $this->assertEquals($list_definition, $list_definition2);
>>>>>>> dev

    // Test creating the definition of data with type 'list', which is the same
    // as creating a definition of a list of items of type 'any'.
    $list_definition = $this->typedDataManager->createDataDefinition('list');
    $this->assertInstanceOf(ListDataDefinitionInterface::class, $list_definition);
<<<<<<< HEAD
    $this->assertEqual($list_definition->getDataType(), 'list');
    $this->assertEqual($list_definition->getItemDefinition()->getDataType(), 'any');
=======
    $this->assertEquals('list', $list_definition->getDataType());
    $this->assertEquals('any', $list_definition->getItemDefinition()->getDataType());
>>>>>>> dev
  }

  /**
   * Tests deriving metadata about maps.
   */
  public function testMaps() {
    $map_definition = MapDataDefinition::create()
      ->setPropertyDefinition('one', DataDefinition::create('string'))
      ->setPropertyDefinition('two', DataDefinition::create('string'))
      ->setPropertyDefinition('three', DataDefinition::create('string'));

    $this->assertInstanceOf(ComplexDataDefinitionInterface::class, $map_definition);

    // Test retrieving metadata about contained properties.
<<<<<<< HEAD
    $this->assertEqual(array_keys($map_definition->getPropertyDefinitions()), ['one', 'two', 'three']);
    $this->assertEqual($map_definition->getPropertyDefinition('one')->getDataType(), 'string');
=======
    $this->assertEquals(['one', 'two', 'three'], array_keys($map_definition->getPropertyDefinitions()));
    $this->assertEquals('string', $map_definition->getPropertyDefinition('one')->getDataType());
>>>>>>> dev
    $this->assertNull($map_definition->getMainPropertyName());
    $this->assertNull($map_definition->getPropertyDefinition('invalid'));

    // Test using the definition factory.
    $map_definition2 = $this->typedDataManager->createDataDefinition('map');
    $this->assertInstanceOf(ComplexDataDefinitionInterface::class, $map_definition2);
    $map_definition2->setPropertyDefinition('one', DataDefinition::create('string'))
      ->setPropertyDefinition('two', DataDefinition::create('string'))
      ->setPropertyDefinition('three', DataDefinition::create('string'));
<<<<<<< HEAD
    $this->assertEqual(serialize($map_definition), serialize($map_definition2));
=======
    $this->assertEquals(serialize($map_definition2), serialize($map_definition));
>>>>>>> dev
  }

  /**
   * Tests deriving metadata from data references.
   */
  public function testDataReferences() {
    $language_reference_definition = DataReferenceDefinition::create('language');
    $this->assertInstanceOf(DataReferenceDefinitionInterface::class, $language_reference_definition);

    // Test retrieving metadata about the referenced data.
<<<<<<< HEAD
    $this->assertEqual($language_reference_definition->getTargetDefinition()->getDataType(), 'language');
=======
    $this->assertEquals('language', $language_reference_definition->getTargetDefinition()->getDataType());
>>>>>>> dev

    // Test using the definition factory.
    $language_reference_definition2 = $this->typedDataManager->createDataDefinition('language_reference');
    $this->assertInstanceOf(DataReferenceDefinitionInterface::class, $language_reference_definition2);
<<<<<<< HEAD
    $this->assertEqual(serialize($language_reference_definition), serialize($language_reference_definition2));
=======
    $this->assertEquals(serialize($language_reference_definition2), serialize($language_reference_definition));
>>>>>>> dev
  }

}
