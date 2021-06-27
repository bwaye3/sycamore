<?php

namespace Drupal\KernelTests\Core\Action;

use Drupal\Core\Action\Plugin\Action\Derivative\EntityChangedActionDeriver;
use Drupal\entity_test\Entity\EntityTestMulChanged;
use Drupal\KernelTests\KernelTestBase;
use Drupal\system\Entity\Action;

/**
 * @group Action
 */
class SaveActionTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['system', 'entity_test', 'user'];
=======
  protected static $modules = ['system', 'entity_test', 'user'];
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
    $this->installEntitySchema('entity_test_mul_changed');
  }

  /**
   * @covers \Drupal\Core\Action\Plugin\Action\Derivative\EntityChangedActionDeriver::getDerivativeDefinitions
   */
  public function testGetDerivativeDefinitions() {
    $deriver = new EntityChangedActionDeriver(\Drupal::entityTypeManager(), \Drupal::translation());
<<<<<<< HEAD
    $this->assertArraySubset([
      'entity_test_mul_changed' => [
        'type' => 'entity_test_mul_changed',
        'label' => 'Save test entity - data table',
        'action_label' => 'Save',
      ],
    ], $deriver->getDerivativeDefinitions([
      'action_label' => 'Save',
    ]));
=======
    $definitions = $deriver->getDerivativeDefinitions([
      'action_label' => 'Save',
    ]);
    $this->assertEquals([
      'type' => 'entity_test_mul_changed',
      'label' => 'Save test entity - data table',
      'action_label' => 'Save',
    ], $definitions['entity_test_mul_changed']);
>>>>>>> dev
  }

  /**
   * @covers \Drupal\Core\Action\Plugin\Action\SaveAction::execute
   */
  public function testSaveAction() {
    $entity = EntityTestMulChanged::create(['name' => 'test']);
    $entity->save();
    $saved_time = $entity->getChangedTime();

    $action = Action::create([
      'id' => 'entity_save_action',
      'plugin' => 'entity:save_action:entity_test_mul_changed',
    ]);
    $action->save();
    $action->execute([$entity]);
    $this->assertNotSame($saved_time, $entity->getChangedTime());
<<<<<<< HEAD
    $this->assertArraySubset(['module' => ['entity_test']], $action->getDependencies());
=======
    $this->assertSame(['module' => ['entity_test']], $action->getDependencies());
>>>>>>> dev
  }

}
