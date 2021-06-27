<?php

namespace Drupal\Tests\options\Kernel;

use Drupal\entity_test\Entity\EntityTest;

/**
 * Tests the Options field type formatters.
 *
 * @group options
 * @see \Drupal\options\Plugin\Field\FieldFormatter\OptionsDefaultFormatter
 * @see \Drupal\options\Plugin\Field\FieldFormatter\OptionsKeyFormatter
 */
class OptionsFormattersTest extends OptionsFieldUnitTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
  }

  /**
   * Tests the formatters.
   */
  public function testFormatter() {
    $entity = EntityTest::create();
    $entity->{$this->fieldName}->value = 1;

    $items = $entity->get($this->fieldName);

    $build = $items->view();
<<<<<<< HEAD
    $this->assertEqual($build['#formatter'], 'list_default', 'Ensure to fall back to the default formatter.');
    $this->assertEqual($build[0]['#markup'], 'One');

    $build = $items->view(['type' => 'list_key']);
    $this->assertEqual($build['#formatter'], 'list_key', 'The chosen formatter is used.');
    $this->assertEqual((string) $build[0]['#markup'], 1);
=======
    $this->assertEquals('list_default', $build['#formatter'], 'Ensure to fall back to the default formatter.');
    $this->assertEquals('One', $build[0]['#markup']);

    $build = $items->view(['type' => 'list_key']);
    $this->assertEquals('list_key', $build['#formatter'], 'The chosen formatter is used.');
    $this->assertEquals(1, (string) $build[0]['#markup']);
>>>>>>> dev
  }

}
