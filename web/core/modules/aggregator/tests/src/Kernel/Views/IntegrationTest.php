<?php

namespace Drupal\Tests\aggregator\Kernel\Views;

use Drupal\Component\Utility\Xss;
use Drupal\Core\Render\RenderContext;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\Tests\views\Kernel\ViewsKernelTestBase;
use Drupal\views\Views;
use Drupal\views\Tests\ViewTestData;

/**
 * Tests basic integration of views data from the aggregator module.
 *
 * @group aggregator
 */
class IntegrationTest extends ViewsKernelTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'aggregator',
    'aggregator_test_views',
    'system',
    'field',
    'options',
    'user',
  ];

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_aggregator_items'];

  /**
   * The entity storage for aggregator items.
   *
   * @var \Drupal\aggregator\ItemStorage
   */
  protected $itemStorage;

  /**
   * The entity storage for aggregator feeds.
   *
   * @var \Drupal\aggregator\FeedStorage
   */
  protected $feedStorage;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp();

    $this->installEntitySchema('aggregator_item');
    $this->installEntitySchema('aggregator_feed');

<<<<<<< HEAD
    ViewTestData::createTestViews(get_class($this), ['aggregator_test_views']);
=======
    ViewTestData::createTestViews(static::class, ['aggregator_test_views']);
>>>>>>> dev

    $this->itemStorage = $this->container->get('entity_type.manager')->getStorage('aggregator_item');
    $this->feedStorage = $this->container->get('entity_type.manager')->getStorage('aggregator_feed');
  }

  /**
   * Tests basic aggregator_item view.
   */
  public function testAggregatorItemView() {
    /** @var \Drupal\Core\Render\RendererInterface $renderer */
    $renderer = \Drupal::service('renderer');

    $feed = $this->feedStorage->create([
      'title' => $this->randomMachineName(),
      'url' => 'https://www.drupal.org/',
      'refresh' => 900,
      'checked' => 123543535,
      'description' => $this->randomMachineName(),
    ]);
    $feed->save();

    $items = [];
    $expected = [];
    for ($i = 0; $i < 10; $i++) {
      $values = [];
      $values['fid'] = $feed->id();
      $values['timestamp'] = mt_rand(REQUEST_TIME - 10, REQUEST_TIME + 10);
      $values['title'] = $this->randomMachineName();
      $values['description'] = $this->randomMachineName();
<<<<<<< HEAD
      // Add a image to ensure that the sanitizing can be tested below.
=======
      // Add an image to ensure that the sanitizing can be tested below.
>>>>>>> dev
      $values['author'] = $this->randomMachineName() . '<img src="http://example.com/example.png" \>"';
      $values['link'] = 'https://www.drupal.org/node/' . mt_rand(1000, 10000);
      $values['guid'] = $this->randomString();

      $aggregator_item = $this->itemStorage->create($values);
      $aggregator_item->save();
      $items[$aggregator_item->id()] = $aggregator_item;

      $values['iid'] = $aggregator_item->id();
      $expected[] = $values;
    }

    $view = Views::getView('test_aggregator_items');
    $this->executeView($view);

    $column_map = [
      'iid' => 'iid',
      'title' => 'title',
      'aggregator_item_timestamp' => 'timestamp',
      'description' => 'description',
      'aggregator_item_author' => 'author',
    ];
    $this->assertIdenticalResultset($view, $expected, $column_map);

    // Ensure that the rendering of the linked title works as expected.
    foreach ($view->result as $row) {
      $iid = $view->field['iid']->getValue($row);
      $expected_link = Link::fromTextAndUrl($items[$iid]->getTitle(), Url::fromUri($items[$iid]->getLink(), ['absolute' => TRUE]))->toString();
      $output = $renderer->executeInRenderContext(new RenderContext(), function () use ($view, $row) {
        return $view->field['title']->advancedRender($row);
      });
<<<<<<< HEAD
      $this->assertEqual($output, $expected_link->getGeneratedLink(), 'Ensure the right link is generated');
=======
      $this->assertEquals($expected_link->getGeneratedLink(), $output, 'Ensure the right link is generated');
>>>>>>> dev

      $expected_author = Xss::filter($items[$iid]->getAuthor(), _aggregator_allowed_tags());
      $output = $renderer->executeInRenderContext(new RenderContext(), function () use ($view, $row) {
        return $view->field['author']->advancedRender($row);
      });
<<<<<<< HEAD
      $this->assertEqual($output, $expected_author, 'Ensure the author got filtered');
=======
      $this->assertEquals($expected_author, $output, 'Ensure the author got filtered');
>>>>>>> dev

      $expected_description = Xss::filter($items[$iid]->getDescription(), _aggregator_allowed_tags());
      $output = $renderer->executeInRenderContext(new RenderContext(), function () use ($view, $row) {
        return $view->field['description']->advancedRender($row);
      });
<<<<<<< HEAD
      $this->assertEqual($output, $expected_description, 'Ensure the author got filtered');
=======
      $this->assertEquals($expected_description, $output, 'Ensure the author got filtered');
>>>>>>> dev
    }
  }

}
