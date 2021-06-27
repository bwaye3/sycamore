<?php

namespace Drupal\migrate\Plugin\migrate\destination;

<<<<<<< HEAD
use Drupal\migrate\Plugin\MigrationInterface;
=======
>>>>>>> dev
use Drupal\migrate\Row;

/**
 * Provides null destination plugin.
 *
 * @MigrateDestination(
 *   id = "null",
 *   requirements_met = false
 * )
 */
class NullDestination extends DestinationBase {

  /**
   * {@inheritdoc}
   */
  public function getIds() {
    return [];
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function fields(MigrationInterface $migration = NULL) {
=======
  public function fields() {
>>>>>>> dev
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function import(Row $row, array $old_destination_id_values = []) {
  }

}
