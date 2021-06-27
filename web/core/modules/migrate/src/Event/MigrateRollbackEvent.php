<?php

namespace Drupal\migrate\Event;

use Drupal\migrate\Plugin\MigrationInterface;
<<<<<<< HEAD
use Symfony\Component\EventDispatcher\Event;
=======
use Drupal\Component\EventDispatcher\Event;
>>>>>>> dev

/**
 * Wraps a pre- or post-rollback event for event listeners.
 */
class MigrateRollbackEvent extends Event {

  /**
   * Migration entity.
   *
   * @var \Drupal\migrate\Plugin\MigrationInterface
   */
  protected $migration;

  /**
<<<<<<< HEAD
   * Constructs an rollback event object.
=======
   * Constructs a rollback event object.
>>>>>>> dev
   *
   * @param \Drupal\migrate\Plugin\MigrationInterface $migration
   *   Migration entity.
   */
  public function __construct(MigrationInterface $migration) {
    $this->migration = $migration;
  }

  /**
   * Gets the migration entity.
   *
   * @return \Drupal\migrate\Plugin\MigrationInterface
   *   The migration entity involved.
   */
  public function getMigration() {
    return $this->migration;
  }

}
