<?php

namespace Drupal\Tests\system\Functional\Menu;

use Drupal\Component\Utility\Html;
use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests local actions derived from router and added/altered via hooks.
 *
 * @group Menu
 */
class LocalActionTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var string[]
   */
<<<<<<< HEAD
  public static $modules = ['block', 'menu_test'];
=======
  protected static $modules = ['block', 'menu_test'];
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

    $this->drupalPlaceBlock('local_actions_block');
  }

  /**
   * Tests appearance of local actions.
   */
  public function testLocalAction() {
    $this->drupalGet('menu-test-local-action');
    // Ensure that both menu and route based actions are shown.
    $this->assertLocalAction([
      [Url::fromRoute('menu_test.local_action4'), 'My dynamic-title action'],
      [Url::fromRoute('menu_test.local_action4'), Html::escape("<script>alert('Welcome to the jungle!')</script>")],
      [Url::fromRoute('menu_test.local_action4'), Html::escape("<script>alert('Welcome to the derived jungle!')</script>")],
      [Url::fromRoute('menu_test.local_action2'), 'My hook_menu action'],
      [Url::fromRoute('menu_test.local_action3'), 'My YAML discovery action'],
      [Url::fromRoute('menu_test.local_action5'), 'Title override'],
    ]);
    // Test a local action title that changes based on a config value.
    $this->drupalGet(Url::fromRoute('menu_test.local_action6'));
    $this->assertLocalAction([
      [Url::fromRoute('menu_test.local_action5'), 'Original title'],
    ]);
    // Verify the expected cache tag in the response headers.
<<<<<<< HEAD
    $header_values = explode(' ', $this->drupalGetHeader('x-drupal-cache-tags'));
    $this->assertContains('config:menu_test.links.action', $header_values, "Found 'config:menu_test.links.action' cache tag in header");
=======
    $this->assertSession()->responseHeaderContains('x-drupal-cache-tags', 'config:menu_test.links.action');
>>>>>>> dev
    /** @var \Drupal\Core\Config\Config $config */
    $config = $this->container->get('config.factory')->getEditable('menu_test.links.action');
    $config->set('title', 'New title');
    $config->save();
    $this->drupalGet(Url::fromRoute('menu_test.local_action6'));
    $this->assertLocalAction([
      [Url::fromRoute('menu_test.local_action5'), 'New title'],
    ]);
  }

  /**
   * Asserts local actions in the page output.
   *
   * @param array $actions
   *   A list of expected action link titles, keyed by the hrefs.
   */
  protected function assertLocalAction(array $actions) {
    $elements = $this->xpath('//a[contains(@class, :class)]', [
      ':class' => 'button-action',
    ]);
    $index = 0;
    foreach ($actions as $action) {
      /** @var \Drupal\Core\Url $url */
      list($url, $title) = $action;
      // SimpleXML gives us the unescaped text, not the actual escaped markup,
      // so use a pattern instead to check the raw content.
      // This behavior is a bug in libxml, see
      // https://bugs.php.net/bug.php?id=49437.
<<<<<<< HEAD
      $this->assertPattern('@<a [^>]*class="[^"]*button-action[^"]*"[^>]*>' . preg_quote($title, '@') . '</@');
      $this->assertEqual($elements[$index]->getAttribute('href'), $url->toString());
=======
      $this->assertSession()->responseMatches('@<a [^>]*class="[^"]*button-action[^"]*"[^>]*>' . preg_quote($title, '@') . '</@');
      $this->assertEquals($url->toString(), $elements[$index]->getAttribute('href'));
>>>>>>> dev
      $index++;
    }
  }

}
