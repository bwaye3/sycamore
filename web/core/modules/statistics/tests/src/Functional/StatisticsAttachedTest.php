<?php

namespace Drupal\Tests\statistics\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\node\Entity\Node;

/**
 * Tests if statistics.js is loaded when content is not printed.
 *
 * @group statistics
 */
class StatisticsAttachedTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'statistics'];
=======
  protected static $modules = ['node', 'statistics'];
>>>>>>> dev

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

    $this->drupalCreateContentType(['type' => 'page']);

    // Install "statistics_test_attached" and set it as the default theme.
    $theme = 'statistics_test_attached';
    \Drupal::service('theme_installer')->install([$theme]);
    $this->config('system.theme')
      ->set('default', $theme)
      ->save();
    // Installing a theme will cause the kernel terminate event to rebuild the
    // router. Simulate that here.
    \Drupal::service('router.builder')->rebuildIfNeeded();
  }

  /**
   * Tests if statistics.js is loaded when content is not printed.
   */
  public function testAttached() {

    $node = Node::create([
      'type' => 'page',
      'title' => 'Page node',
      'body' => 'body text',
    ]);
    $node->save();
    $this->drupalGet('node/' . $node->id());

<<<<<<< HEAD
    $this->assertRaw('core/modules/statistics/statistics.js', 'Statistics library is available');
=======
    $this->assertRaw('core/modules/statistics/statistics.js');
>>>>>>> dev
  }

}
