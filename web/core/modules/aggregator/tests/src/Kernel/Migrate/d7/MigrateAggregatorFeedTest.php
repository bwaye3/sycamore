<?php

namespace Drupal\Tests\aggregator\Kernel\Migrate\d7;

use Drupal\aggregator\Entity\Feed;
use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Test migration to aggregator_feed entities.
 *
 * @group migrate_drupal_7
 */
class MigrateAggregatorFeedTest extends MigrateDrupal7TestBase {

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
    $this->executeMigration('d7_aggregator_feed');
  }

  /**
   * Tests migration of aggregator feeds.
   */
  public function testAggregatorFeedImport() {
    /** @var \Drupal\aggregator\FeedInterface $feed */
    $feed = Feed::load(1);
<<<<<<< HEAD
    $this->assertIdentical('Know Your Meme', $feed->label());
    $this->assertIdentical('en', $feed->language()->getId());
    $this->assertIdentical('http://knowyourmeme.com/newsfeed.rss', $feed->getUrl());
    $this->assertIdentical('900', $feed->getRefreshRate());
=======
    $this->assertSame('Know Your Meme', $feed->label());
    $this->assertSame('en', $feed->language()->getId());
    $this->assertSame('http://knowyourmeme.com/newsfeed.rss', $feed->getUrl());
    $this->assertSame('900', $feed->getRefreshRate());
>>>>>>> dev
    // The feed's last checked time can change as the fixture is updated, so
    // assert that its format is correct.
    $checked_time = $feed->getLastCheckedTime();
    $this->assertIsNumeric($checked_time);
<<<<<<< HEAD
    $this->assertTrue($checked_time > 1000000000);
    $this->assertIdentical('0', $feed->getQueuedTime());
    $this->assertIdentical('http://knowyourmeme.com', $feed->link->value);
    $this->assertIdentical('New items added to the News Feed', $feed->getDescription());
    $this->assertNull($feed->getImage());
    // As with getLastCheckedTime(), the etag can change as the fixture is
    // updated normally, so assert that its format is correct.
    $this->assertRegExp('/^"[a-z0-9]{32}"$/', $feed->getEtag());
    $this->assertIdentical('0', $feed->getLastModified());
=======
    $this->assertGreaterThan(1000000000, $checked_time);
    $this->assertSame('0', $feed->getQueuedTime());
    $this->assertSame('http://knowyourmeme.com', $feed->link->value);
    $this->assertSame('New items added to the News Feed', $feed->getDescription());
    $this->assertNull($feed->getImage());
    // As with getLastCheckedTime(), the etag can change as the fixture is
    // updated normally, so assert that its format is correct.
    $this->assertMatchesRegularExpression('/^"[a-z0-9]{32}"$/', $feed->getEtag());
    $this->assertSame('0', $feed->getLastModified());
>>>>>>> dev
  }

}
