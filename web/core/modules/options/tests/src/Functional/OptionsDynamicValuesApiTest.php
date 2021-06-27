<?php

namespace Drupal\Tests\options\Functional;

/**
<<<<<<< HEAD
* Tests the options allowed values api.
 *
 * @group options
*/
=======
 * Tests the options allowed values api.
 *
 * @group options
 */
>>>>>>> dev
class OptionsDynamicValuesApiTest extends OptionsDynamicValuesTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests options_allowed_values().
   *
   * @see options_test_dynamic_values_callback()
   */
  public function testOptionsAllowedValues() {
    // Test allowed values without passed $items.
    $values = options_allowed_values($this->fieldStorage);
<<<<<<< HEAD
    $this->assertEqual([], $values);
=======
    $this->assertEquals([], $values);
>>>>>>> dev

    $values = options_allowed_values($this->fieldStorage, $this->entity);

    $expected_values = [
      $this->entity->label(),
      $this->entity->toUrl()->toString(),
      $this->entity->uuid(),
      $this->entity->bundle(),
    ];
    $expected_values = array_combine($expected_values, $expected_values);
<<<<<<< HEAD
    $this->assertEqual($expected_values, $values);
=======
    $this->assertEquals($expected_values, $values);
>>>>>>> dev
  }

}
