<?php

namespace Drupal\Tests\tracker\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;
use Drupal\Core\Database\Database;

/**
 * Tests migration of tracker_user.
 *
 * @group tracker
 */
class MigrateTrackerUserTest extends MigrateDrupal7TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'menu_ui',
    'node',
    'text',
    'tracker',
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

    $this->installEntitySchema('node');
    $this->installConfig(static::$modules);
    $this->installSchema('node', ['node_access']);
    $this->installSchema('tracker', ['tracker_node', 'tracker_user']);

    $this->migrateContentTypes();
    $this->migrateUsers(FALSE);
    $this->executeMigrations([
      'd7_node',
      'd7_tracker_node',
    ]);
  }

  /**
   * Tests migration of tracker user table.
   */
  public function testMigrateTrackerUser() {
    $connection = Database::getConnection('default', 'migrate');
    $num_rows = $connection
      ->select('tracker_user', 'tn')
      ->fields('tu', ['nid', 'uid', 'published', 'changed'])
      ->countQuery()
      ->execute()
      ->fetchField();
<<<<<<< HEAD
    $this->assertIdentical('1', $num_rows);
=======
    $this->assertSame('1', $num_rows);
>>>>>>> dev

    $tracker_nodes = $connection
      ->select('tracker_user', 'tu')
      ->fields('tu', ['nid', 'uid', 'published', 'changed'])
      ->execute();
    $row = $tracker_nodes->fetchAssoc();
<<<<<<< HEAD
    $this->assertIdentical('1', $row['nid']);
    $this->assertIdentical('2', $row['uid']);
    $this->assertIdentical('1', $row['published']);
    $this->assertIdentical('1421727536', $row['changed']);
=======
    $this->assertSame('1', $row['nid']);
    $this->assertSame('2', $row['uid']);
    $this->assertSame('1', $row['published']);
    $this->assertSame('1421727536', $row['changed']);
>>>>>>> dev
  }

}
