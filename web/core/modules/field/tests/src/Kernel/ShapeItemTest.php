<?php

namespace Drupal\Tests\field\Kernel;

use Drupal\Core\Field\FieldItemInterface;
use Drupal\Core\Field\FieldItemListInterface;
use Drupal\entity_test\Entity\EntityTest;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;

/**
 * Tests the new entity API for the shape field type.
 *
 * @group field
 */
class ShapeItemTest extends FieldKernelTestBase {

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
   * The name of the field to use in this test.
   *
   * @var string
   */
  protected $fieldName = 'field_shape';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create a 'shape' field and storage for validation.
    FieldStorageConfig::create([
      'field_name' => $this->fieldName,
      'entity_type' => 'entity_test',
      'type' => 'shape',
    ])->save();
    FieldConfig::create([
      'entity_type' => 'entity_test',
      'field_name' => $this->fieldName,
      'bundle' => 'entity_test',
    ])->save();
  }

  /**
   * Tests using entity fields of the field field type.
   */
  public function testShapeItem() {
    // Verify entity creation.
    $entity = EntityTest::create();
    $shape = 'cube';
    $color = 'blue';
    $entity->{$this->fieldName}->shape = $shape;
    $entity->{$this->fieldName}->color = $color;
    $entity->name->value = $this->randomMachineName();
    $entity->save();

    // Verify entity has been created properly.
    $id = $entity->id();
    $entity = EntityTest::load($id);
    $this->assertInstanceOf(FieldItemListInterface::class, $entity->{$this->fieldName});
    $this->assertInstanceOf(FieldItemInterface::class, $entity->{$this->fieldName}[0]);
<<<<<<< HEAD
    $this->assertEqual($entity->{$this->fieldName}->shape, $shape);
    $this->assertEqual($entity->{$this->fieldName}->color, $color);
    $this->assertEqual($entity->{$this->fieldName}[0]->shape, $shape);
    $this->assertEqual($entity->{$this->fieldName}[0]->color, $color);
=======
    $this->assertEquals($shape, $entity->{$this->fieldName}->shape);
    $this->assertEquals($color, $entity->{$this->fieldName}->color);
    $this->assertEquals($shape, $entity->{$this->fieldName}[0]->shape);
    $this->assertEquals($color, $entity->{$this->fieldName}[0]->color);
>>>>>>> dev

    // Verify changing the field value.
    $new_shape = 'circle';
    $new_color = 'red';
    $entity->{$this->fieldName}->shape = $new_shape;
    $entity->{$this->fieldName}->color = $new_color;
<<<<<<< HEAD
    $this->assertEqual($entity->{$this->fieldName}->shape, $new_shape);
    $this->assertEqual($entity->{$this->fieldName}->color, $new_color);
=======
    $this->assertEquals($new_shape, $entity->{$this->fieldName}->shape);
    $this->assertEquals($new_color, $entity->{$this->fieldName}->color);
>>>>>>> dev

    // Read changed entity and assert changed values.
    $entity->save();
    $entity = EntityTest::load($id);
<<<<<<< HEAD
    $this->assertEqual($entity->{$this->fieldName}->shape, $new_shape);
    $this->assertEqual($entity->{$this->fieldName}->color, $new_color);
=======
    $this->assertEquals($new_shape, $entity->{$this->fieldName}->shape);
    $this->assertEquals($new_color, $entity->{$this->fieldName}->color);
>>>>>>> dev
  }

}
