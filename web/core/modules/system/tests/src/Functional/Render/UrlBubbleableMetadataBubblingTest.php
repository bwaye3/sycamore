<?php

namespace Drupal\Tests\system\Functional\Render;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\system\Functional\Cache\AssertPageCacheContextsAndTagsTrait;

/**
 * Tests that URL bubbleable metadata is correctly bubbled.
 *
 * @group Render
 */
class UrlBubbleableMetadataBubblingTest extends BrowserTestBase {

  use AssertPageCacheContextsAndTagsTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['cache_test'];
=======
  protected static $modules = ['cache_test'];
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
  }

  /**
   * Tests that URL bubbleable metadata is correctly bubbled.
   */
  public function testUrlBubbleableMetadataBubbling() {
    // Test that regular URLs bubble up bubbleable metadata when converted to
    // string.
    $url = Url::fromRoute('cache_test.url_bubbling');
    $this->drupalGet($url);
    $this->assertCacheContext('url.site');
    $this->assertRaw($url->setAbsolute()->toString());
  }

}
