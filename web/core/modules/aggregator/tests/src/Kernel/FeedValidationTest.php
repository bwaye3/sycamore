<?php

namespace Drupal\Tests\aggregator\Kernel;

use Drupal\aggregator\Entity\Feed;
use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;

/**
 * Tests feed validation constraints.
 *
 * @group aggregator
 */
class FeedValidationTest extends EntityKernelTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['aggregator', 'options'];
=======
  protected static $modules = ['aggregator', 'options'];
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
  }

  /**
   * Tests the feed validation constraints.
   */
  public function testValidation() {
    // Add feed.
    $feed = Feed::create([
      'title' => 'Feed 1',
      'url' => 'https://www.drupal.org/planet/rss.xml',
      'refresh' => 900,
    ]);

    $violations = $feed->validate();
    $this->assertCount(0, $violations);

    $feed->save();

    // Add another feed.
<<<<<<< HEAD
    /* @var \Drupal\aggregator\FeedInterface $feed */
=======
    /** @var \Drupal\aggregator\FeedInterface $feed */
>>>>>>> dev
    $feed = Feed::create([
      'title' => 'Feed 1',
      'url' => 'https://www.drupal.org/planet/rss.xml',
      'refresh' => 900,
    ]);

    $violations = $feed->validate();

    $this->assertCount(2, $violations);
<<<<<<< HEAD
    $this->assertEqual($violations[0]->getPropertyPath(), 'title');
    $this->assertEqual($violations[0]->getMessage(), t('A feed named %value already exists. Enter a unique title.', [
      '%value' => $feed->label(),
    ]));
    $this->assertEqual($violations[1]->getPropertyPath(), 'url');
    $this->assertEqual($violations[1]->getMessage(), t('A feed with this URL %value already exists. Enter a unique URL.', [
      '%value' => $feed->getUrl(),
    ]));
=======
    $this->assertEquals('title', $violations[0]->getPropertyPath());
    $this->assertEquals(t('A feed named %value already exists. Enter a unique title.', ['%value' => $feed->label()]), $violations[0]->getMessage());
    $this->assertEquals('url', $violations[1]->getPropertyPath());
    $this->assertEquals(t('A feed with this URL %value already exists. Enter a unique URL.', ['%value' => $feed->getUrl()]), $violations[1]->getMessage());
>>>>>>> dev
  }

}
