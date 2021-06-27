<?php

namespace Drupal\Tests\aggregator\Functional;

use Drupal\aggregator\Entity\Feed;
use Drupal\aggregator\Entity\Item;

/**
 * Tests the processor plugins functionality and discoverability.
 *
 * @group aggregator
 *
 * @see \Drupal\aggregator_test\Plugin\aggregator\processor\TestProcessor.
 */
class FeedProcessorPluginTest extends AggregatorTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    // Enable test plugins.
    $this->enableTestPlugins();
    // Create some nodes.
    $this->createSampleNodes();
  }

  /**
<<<<<<< HEAD
   * Test processing functionality.
=======
   * Tests processing functionality.
>>>>>>> dev
   */
  public function testProcess() {
    $feed = $this->createFeed();
    $this->updateFeedItems($feed);
    foreach ($feed->items as $iid) {
      $item = Item::load($iid);
      $this->assertStringStartsWith('testProcessor', $item->label());
    }
  }

  /**
<<<<<<< HEAD
   * Test deleting functionality.
=======
   * Tests deleting functionality.
>>>>>>> dev
   */
  public function testDelete() {
    $feed = $this->createFeed();
    $description = $feed->description->value ?: '';
    $this->updateAndDelete($feed, NULL);
    // Make sure the feed title is changed.
    $entities = \Drupal::entityTypeManager()->getStorage('aggregator_feed')->loadByProperties(['description' => $description]);
    $this->assertTrue(empty($entities));
  }

  /**
<<<<<<< HEAD
   * Test post-processing functionality.
=======
   * Tests post-processing functionality.
>>>>>>> dev
   */
  public function testPostProcess() {
    $feed = $this->createFeed(NULL, ['refresh' => 1800]);
    $this->updateFeedItems($feed);
    $feed_id = $feed->id();
    // Reset entity cache manually.
    \Drupal::entityTypeManager()->getStorage('aggregator_feed')->resetCache([$feed_id]);
    // Reload the feed to get new values.
    $feed = Feed::load($feed_id);
    // Make sure its refresh rate doubled.
<<<<<<< HEAD
    $this->assertEqual($feed->getRefreshRate(), 3600);
=======
    $this->assertEquals(3600, $feed->getRefreshRate());
>>>>>>> dev
  }

}
