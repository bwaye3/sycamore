<?php

namespace Drupal\Tests\migrate_drupal\Kernel\d7;

<<<<<<< HEAD
use Drupal\Tests\DeprecatedModulesTestTrait;
=======
>>>>>>> dev
use Drupal\Tests\migrate_drupal\Traits\ValidateMigrationStateTestTrait;

/**
 * Tests the migration state information in module.migrate_drupal.yml.
 *
 * @group migrate_drupal
 */
class ValidateMigrationStateTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  use DeprecatedModulesTestTrait;
=======
>>>>>>> dev
  use ValidateMigrationStateTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    // Test migrations states.
    'migrate_state_finished_test',
    'migrate_state_not_finished_test',
  ];

}
