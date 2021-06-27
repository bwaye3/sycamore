<?php

namespace Drupal\Tests\content_moderation\Kernel;

use Drupal\Core\Render\RenderContext;
use Drupal\entity_test\Entity\EntityTestRev;
use Drupal\KernelTests\KernelTestBase;
use Drupal\Tests\content_moderation\Traits\ContentModerationTestTrait;

/**
 * Test the state field formatter.
 *
 * @group content_moderation
 */
class StateFormatterTest extends KernelTestBase {

  use ContentModerationTestTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'workflows',
    'content_moderation',
    'entity_test',
    'user',
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->installEntitySchema('entity_test_rev');
    $this->installEntitySchema('content_moderation_state');
    $this->installConfig('content_moderation');

    $workflow = $this->createEditorialWorkflow();
    $workflow->getTypePlugin()->addEntityTypeAndBundle('entity_test_rev', 'entity_test_rev');
    $workflow->save();
  }

  /**
<<<<<<< HEAD
   * Test the embed field.
=======
   * Tests the embed field.
>>>>>>> dev
   *
   * @dataProvider formatterTestCases
   */
  public function testStateFieldFormatter($field_value, $formatter_settings, $expected_output) {
    $entity = EntityTestRev::create([
      'moderation_state' => $field_value,
    ]);
    $entity->save();

    $field_output = $this->container->get('renderer')->executeInRenderContext(new RenderContext(), function () use ($entity, $formatter_settings) {
      return $entity->moderation_state->view($formatter_settings);
    });

    $this->assertEquals($expected_output, $field_output[0]);
  }

  /**
<<<<<<< HEAD
   * Test cases for ::
=======
   * Test cases for testStateFieldFormatter().
>>>>>>> dev
   */
  public function formatterTestCases() {
    return [
      'Draft State' => [
        'draft',
        [
          'type' => 'content_moderation_state',
          'settings' => [],
        ],
        [
          '#markup' => 'Draft',
        ],
      ],
      'Published State' => [
        'published',
        [
          'type' => 'content_moderation_state',
          'settings' => [],
        ],
        [
          '#markup' => 'Published',
        ],
      ],
    ];
  }

}
