<?php

namespace Drupal\system\Plugin\migrate\destination;

<<<<<<< HEAD
=======
use Drupal\Core\Datetime\DateFormatInterface;
>>>>>>> dev
use Drupal\Core\Entity\EntityInterface;
use Drupal\migrate\Plugin\migrate\destination\EntityConfigBase;

/**
 * @MigrateDestination(
 *   id = "entity:date_format"
 * )
 */
class EntityDateFormat extends EntityConfigBase {

  /**
   * {@inheritdoc}
<<<<<<< HEAD
   *
   * @param \Drupal\Core\Datetime\DateFormatInterface $entity
   *   The date entity.
   */
  protected function updateEntityProperty(EntityInterface $entity, array $parents, $value) {
=======
   */
  protected function updateEntityProperty(EntityInterface $entity, array $parents, $value) {
    assert($entity instanceof DateFormatInterface);
>>>>>>> dev
    if ($parents[0] == 'pattern') {
      $entity->setPattern($value);
    }
    else {
      parent::updateEntityProperty($entity, $parents, $value);
    }
  }

}
