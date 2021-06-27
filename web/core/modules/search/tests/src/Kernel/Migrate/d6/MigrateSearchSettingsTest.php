<?php

namespace Drupal\Tests\search\Kernel\Migrate\d6;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade variables to search.settings.yml.
 *
 * @group migrate_drupal_6
 */
class MigrateSearchSettingsTest extends MigrateDrupal6TestBase {

  use SchemaCheckTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['search'];
=======
  protected static $modules = ['search'];
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
    $this->executeMigration('d6_search_settings');
  }

  /**
   * Tests migration of search variables to search.settings.yml.
   */
  public function testSearchSettings() {
    $config = $this->config('search.settings');
<<<<<<< HEAD
    $this->assertIdentical(3, $config->get('index.minimum_word_size'));
    $this->assertIdentical(TRUE, $config->get('index.overlap_cjk'));
    $this->assertIdentical(100, $config->get('index.cron_limit'));
    $this->assertIdentical(TRUE, $config->get('logging'));
=======
    $this->assertSame(3, $config->get('index.minimum_word_size'));
    $this->assertTrue($config->get('index.overlap_cjk'));
    $this->assertSame(100, $config->get('index.cron_limit'));
    $this->assertTrue($config->get('logging'));
>>>>>>> dev
    $this->assertConfigSchema(\Drupal::service('config.typed'), 'search.settings', $config->get());
  }

}
