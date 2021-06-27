<?php

namespace Drupal\Tests\aggregator\Kernel\Migrate;

use Drupal\Tests\migrate_drupal\Kernel\MigrateDrupalTestBase;
use Drupal\migrate_drupal\Tests\StubTestTrait;

/**
 * Test stub creation for aggregator feeds and items.
 *
 * @group aggregator
 */
class MigrateAggregatorStubTest extends MigrateDrupalTestBase {

  use StubTestTrait;

  /**
   * {@inheritdoc}
   */
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
    $this->installEntitySchema('aggregator_feed');
    $this->installEntitySchema('aggregator_item');
  }

  /**
   * Tests creation of aggregator feed stubs.
   */
  public function testFeedStub() {
    $this->performStubTest('aggregator_feed');
  }

  /**
   * Tests creation of aggregator feed items.
   */
  public function testItemStub() {
    $this->performStubTest('aggregator_item');
  }

}
