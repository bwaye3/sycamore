<?php

namespace Drupal\KernelTests\Core\Config;

use Drupal\KernelTests\KernelTestBase;

/**
 * Unit tests for configuration entity base methods.
 *
 * @group config
 */
class ConfigEntityUnitTest extends KernelTestBase {

  /**
   * Exempt from strict schema checking.
   *
   * @see \Drupal\Core\Config\Development\ConfigSchemaChecker
   *
   * @var bool
   */
  protected $strictConfigSchema = FALSE;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['config_test'];
=======
  protected static $modules = ['config_test'];
>>>>>>> dev

  /**
   * The config_test entity storage.
   *
   * @var \Drupal\Core\Config\Entity\ConfigEntityStorageInterface
   */
  protected $storage;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->storage = $this->container->get('entity_type.manager')->getStorage('config_test');
  }

  /**
   * Tests storage methods.
   */
  public function testStorageMethods() {
    $entity_type = \Drupal::entityTypeManager()->getDefinition('config_test');

    // Test the static extractID() method.
    $expected_id = 'test_id';
    $config_name = $entity_type->getConfigPrefix() . '.' . $expected_id;
    $storage = $this->storage;
<<<<<<< HEAD
    $this->assertIdentical($storage::getIDFromConfigName($config_name, $entity_type->getConfigPrefix()), $expected_id);
=======
    $this->assertSame($expected_id, $storage::getIDFromConfigName($config_name, $entity_type->getConfigPrefix()));
>>>>>>> dev

    // Create three entities, two with the same style.
    $style = $this->randomMachineName(8);
    for ($i = 0; $i < 2; $i++) {
      $entity = $this->storage->create([
        'id' => $this->randomMachineName(),
        'label' => $this->randomString(),
        'style' => $style,
      ]);
      $entity->save();
    }
    $entity = $this->storage->create([
      'id' => $this->randomMachineName(),
      'label' => $this->randomString(),
      // Use a different length for the entity to ensure uniqueness.
      'style' => $this->randomMachineName(9),
    ]);
    $entity->save();

    // Ensure that the configuration entity can be loaded by UUID.
    $entity_loaded_by_uuid = \Drupal::service('entity.repository')->loadEntityByUuid($entity_type->id(), $entity->uuid());
    if (!$entity_loaded_by_uuid) {
      $this->fail(sprintf("Failed to load '%s' entity ID '%s' by UUID '%s'.", $entity_type->id(), $entity->id(), $entity->uuid()));
    }
    // Compare UUIDs as the objects are not identical since
    // $entity->enforceIsNew is FALSE and $entity_loaded_by_uuid->enforceIsNew
    // is NULL.
    $this->assertSame($entity->uuid(), $entity_loaded_by_uuid->uuid());

    $entities = $this->storage->loadByProperties();
    $this->assertCount(3, $entities, 'Three entities are loaded when no properties are specified.');

    $entities = $this->storage->loadByProperties(['style' => $style]);
    $this->assertCount(2, $entities, 'Two entities are loaded when the style property is specified.');

    // Assert that both returned entities have a matching style property.
    foreach ($entities as $entity) {
<<<<<<< HEAD
      $this->assertIdentical($entity->get('style'), $style, 'The loaded entity has the correct style value specified.');
=======
      $this->assertSame($style, $entity->get('style'), 'The loaded entity has the correct style value specified.');
>>>>>>> dev
    }

    // Test that schema type enforcement can be overridden by trusting the data.
    $entity = $this->storage->create([
      'id' => $this->randomMachineName(),
      'label' => $this->randomString(),
      'style' => 999,
    ]);
    $entity->save();
    $this->assertSame('999', $entity->style);
    $entity->style = 999;
    $entity->trustData()->save();
    $this->assertSame(999, $entity->style);
    $entity->save();
    $this->assertSame('999', $entity->style);
  }

}
