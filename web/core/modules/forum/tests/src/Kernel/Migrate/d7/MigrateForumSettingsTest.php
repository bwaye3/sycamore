<?php

namespace Drupal\Tests\forum\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migration of Forum's variables to configuration.
 *
 * @group forum
 */
class MigrateForumSettingsTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  // Don't alphabetize these. They're in dependency order.
  public static $modules = [
=======
  /**
   * Modules to enable.
   *
   * Don't alphabetize these. They're in dependency order.
   *
   * @var array
   */
  protected static $modules = [
>>>>>>> dev
    'comment',
    'field',
    'filter',
    'text',
    'node',
    'taxonomy',
    'forum',
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
    $this->executeMigration('d7_taxonomy_vocabulary');
    $this->executeMigration('d7_forum_settings');
  }

  /**
   * Tests the migration of Forum's settings to configuration.
   */
  public function testForumSettingsMigration() {
    $config = $this->config('forum.settings');
<<<<<<< HEAD
    $this->assertIdentical(9, $config->get('block.active.limit'));
    $this->assertIdentical(4, $config->get('block.new.limit'));
    $this->assertIdentical(10, $config->get('topics.hot_threshold'));
    $this->assertIdentical(25, $config->get('topics.page_limit'));
    $this->assertIdentical(1, $config->get('topics.order'));
    $this->assertIdentical('forums', $config->get('vocabulary'));
=======
    $this->assertSame(9, $config->get('block.active.limit'));
    $this->assertSame(4, $config->get('block.new.limit'));
    $this->assertSame(10, $config->get('topics.hot_threshold'));
    $this->assertSame(25, $config->get('topics.page_limit'));
    $this->assertSame(1, $config->get('topics.order'));
    $this->assertSame('forums', $config->get('vocabulary'));
>>>>>>> dev
  }

}
