<?php

namespace Drupal\Tests\field\Kernel\String;

use Drupal\entity_test\Entity\EntityTest;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the output of a UUID field.
 *
 * @group field
 */
class UuidFormatterTest extends KernelTestBase {


  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['field', 'entity_test', 'system', 'user'];
=======
  protected static $modules = ['field', 'entity_test', 'system', 'user'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
    parent::setUp();

    $this->installConfig(['system', 'field']);
    \Drupal::service('router.builder')->rebuild();
=======
  protected function setUp(): void {
    parent::setUp();

    $this->installConfig(['system', 'field']);
>>>>>>> dev
    $this->installEntitySchema('entity_test');
  }

  /**
   * Tests string formatter output.
   */
  public function testUuidStringFormatter() {
    $entity = EntityTest::create([]);
    $entity->save();

    $uuid_field = $entity->get('uuid');

    // Verify default render.
    $render_array = $uuid_field->view([]);
<<<<<<< HEAD
    $this->assertIdentical($render_array[0]['#context']['value'], $entity->uuid(), 'The rendered UUID matches the entity UUID.');
=======
    $this->assertSame($entity->uuid(), $render_array[0]['#context']['value'], 'The rendered UUID matches the entity UUID.');
>>>>>>> dev
    $this->assertStringContainsString($entity->uuid(), $this->render($render_array), 'The rendered UUID found.');

    // Verify customized render.
    $render_array = $uuid_field->view(['settings' => ['link_to_entity' => TRUE]]);
<<<<<<< HEAD
    $this->assertIdentical($render_array[0]['#type'], 'link');
    $this->assertIdentical($render_array[0]['#title']['#context']['value'], $entity->uuid());
    $this->assertIdentical($render_array[0]['#url']->toString(), $entity->toUrl()->toString());
=======
    $this->assertSame('link', $render_array[0]['#type']);
    $this->assertSame($entity->uuid(), $render_array[0]['#title']['#context']['value']);
    $this->assertSame($entity->toUrl()->toString(), $render_array[0]['#url']->toString());
>>>>>>> dev
    $rendered = $this->render($render_array);
    $this->assertStringContainsString($entity->uuid(), $rendered, 'The rendered UUID found.');
    $this->assertStringContainsString($entity->toUrl()->toString(), $rendered, 'The rendered entity URL found.');
  }

}
