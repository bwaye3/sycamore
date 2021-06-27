<?php

namespace Drupal\KernelTests\Core\TypedData;

use Drupal\Core\TypedData\DataDefinition;
use Drupal\Core\TypedData\MapDataDefinition;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests ComplexData validation constraint with both valid and invalid values
 * for a key.
 *
 * @group Validation
 */
class ComplexDataConstraintValidatorTest extends KernelTestBase {

  /**
   * The typed data manager to use.
   *
   * @var \Drupal\Core\TypedData\TypedDataManager
   */
  protected $typedData;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->typedData = $this->container->get('typed_data_manager');
  }

  /**
   * Tests the ComplexData validation constraint validator.
   *
   * For testing a map including a constraint on one of its keys is defined.
   */
  public function testValidation() {
    // Create a definition that specifies some ComplexData constraint.
    $definition = MapDataDefinition::create()
      ->setPropertyDefinition('key', DataDefinition::create('integer'))
      ->addConstraint('ComplexData', [
        'key' => [
          'AllowedValues' => [1, 2, 3],
        ],
      ]);

    // Test the validation.
    $typed_data = $this->typedData->create($definition, ['key' => 1]);
    $violations = $typed_data->validate();
<<<<<<< HEAD
    $this->assertEqual($violations->count(), 0, 'Validation passed for correct value.');
=======
    $this->assertEquals(0, $violations->count(), 'Validation passed for correct value.');
>>>>>>> dev

    // Test the validation when an invalid value is passed.
    $typed_data = $this->typedData->create($definition, ['key' => 4]);
    $violations = $typed_data->validate();
<<<<<<< HEAD
    $this->assertEqual($violations->count(), 1, 'Validation failed for incorrect value.');

    // Make sure the information provided by a violation is correct.
    $violation = $violations[0];
    $this->assertEqual($violation->getMessage(), t('The value you selected is not a valid choice.'), 'The message for invalid value is correct.');
    $this->assertEqual($violation->getRoot(), $typed_data, 'Violation root is correct.');
    $this->assertEqual($violation->getInvalidValue(), 4, 'The invalid value is set correctly in the violation.');
=======
    $this->assertEquals(1, $violations->count(), 'Validation failed for incorrect value.');

    // Make sure the information provided by a violation is correct.
    $violation = $violations[0];
    $this->assertEquals(t('The value you selected is not a valid choice.'), $violation->getMessage(), 'The message for invalid value is correct.');
    $this->assertEquals($typed_data, $violation->getRoot(), 'Violation root is correct.');
    $this->assertEquals(4, $violation->getInvalidValue(), 'The invalid value is set correctly in the violation.');
>>>>>>> dev

    // Test using the constraint with a map without the specified key. This
    // should be ignored as long as there is no NotNull or NotBlank constraint.
    $typed_data = $this->typedData->create($definition, ['foo' => 'bar']);
    $violations = $typed_data->validate();
<<<<<<< HEAD
    $this->assertEqual($violations->count(), 0, 'Constraint on non-existing key is ignored.');
=======
    $this->assertEquals(0, $violations->count(), 'Constraint on non-existing key is ignored.');
>>>>>>> dev

    $definition = MapDataDefinition::create()
      ->setPropertyDefinition('key', DataDefinition::create('integer'))
      ->addConstraint('ComplexData', [
        'key' => [
          'NotNull' => [],
        ],
      ]);

    $typed_data = $this->typedData->create($definition, ['foo' => 'bar']);
    $violations = $typed_data->validate();
<<<<<<< HEAD
    $this->assertEqual($violations->count(), 1, 'Key is required.');
=======
    $this->assertEquals(1, $violations->count(), 'Key is required.');
>>>>>>> dev
  }

}
