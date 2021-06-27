<?php

namespace Drupal\Tests\aggregator\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Tests migration of Aggregator's variables to configuration.
 *
 * @group aggregator
 */
class MigrateAggregatorSettingsTest extends MigrateDrupal7TestBase {

<<<<<<< HEAD
  public static $modules = ['aggregator'];
=======
  protected static $modules = ['aggregator'];
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
    $this->installConfig(static::$modules);
    $this->executeMigration('d7_aggregator_settings');
  }

  /**
   * Tests migration of Aggregator variables to configuration.
   */
  public function testMigration() {
    $config = \Drupal::config('aggregator.settings')->get();
<<<<<<< HEAD
    $this->assertIdentical('aggregator', $config['fetcher']);
    $this->assertIdentical('aggregator', $config['parser']);
    $this->assertIdentical(['aggregator'], $config['processors']);
    $this->assertIdentical('<p> <div> <a>', $config['items']['allowed_html']);
    $this->assertIdentical(500, $config['items']['teaser_length']);
    $this->assertIdentical(86400, $config['items']['expire']);
    $this->assertIdentical(6, $config['source']['list_max']);
=======
    $this->assertSame('aggregator', $config['fetcher']);
    $this->assertSame('aggregator', $config['parser']);
    $this->assertSame(['aggregator'], $config['processors']);
    $this->assertSame('<p> <div> <a>', $config['items']['allowed_html']);
    $this->assertSame(500, $config['items']['teaser_length']);
    $this->assertSame(86400, $config['items']['expire']);
    $this->assertSame(6, $config['source']['list_max']);
>>>>>>> dev
  }

}
