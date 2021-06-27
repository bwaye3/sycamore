<?php

namespace Drupal\migrate_events_test\Plugin\migrate\destination;

<<<<<<< HEAD
use Drupal\migrate\Plugin\MigrationInterface;
=======
>>>>>>> dev
use Drupal\migrate\Plugin\migrate\destination\DestinationBase;
use Drupal\migrate\Row;

/**
 * @MigrateDestination(
 *   id = "dummy",
 *   requirements_met = true
 * )
 */
class DummyDestination extends DestinationBase {

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    $ids['value']['type'] = 'string';
    return $ids;
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function fields(MigrationInterface $migration = NULL) {
=======
  public function fields() {
>>>>>>> dev
    return ['value' => 'Dummy value'];
  }

  /**
   * {@inheritdoc}
   */
  public function import(Row $row, array $old_destination_id_values = []) {
    return ['value' => $row->getDestinationProperty('value')];
  }

}
