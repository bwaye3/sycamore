<?php

namespace Drupal\Tests\field\Kernel;

use Drupal\entity_test\Entity\EntityTest;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;

/**
 * Tests the serialization of an object.
 *
 * @group field
 */
class TestObjectItemTest extends FieldKernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['field_test'];
=======
  protected static $modules = ['field_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create a 'test_field' field and storage for validation.
    FieldStorageConfig::create([
      'field_name' => 'field_test',
      'entity_type' => 'entity_test',
      'type' => 'test_object_field',
    ])->save();
    FieldConfig::create([
      'entity_type' => 'entity_test',
      'field_name' => 'field_test',
      'bundle' => 'entity_test',
    ])->save();
  }

  /**
   * Tests the serialization of a field type that has an object.
   */
  public function testTestObjectItem() {
    $object = new \stdClass();
    $object->foo = 'bar';
    $entity = EntityTest::create();
    $entity->field_test->value = $object;
    $entity->save();

    // Verify that the entity has been created properly.
    $id = $entity->id();
    $entity = EntityTest::load($id);
    $this->assertInstanceOf(\stdClass::class, $entity->field_test->value);
    $this->assertEquals($object, $entity->field_test->value);
  }

}
