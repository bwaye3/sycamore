<?php

namespace Drupal\Tests\system\Functional\Menu;

use Drupal\menu_link_content\Entity\MenuLinkContent;
use Drupal\Tests\BrowserTestBase;

/**
 * Ensures that menu links don't cause XSS issues.
 *
 * @group Menu
 */
class MenuLinkSecurityTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['menu_link_content', 'block', 'menu_test'];
=======
  protected static $modules = ['menu_link_content', 'block', 'menu_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Ensures that a menu link does not cause an XSS issue.
   */
  public function testMenuLink() {
    $menu_link_content = MenuLinkContent::create([
      'title' => '<script>alert("Wild animals")</script>',
      'menu_name' => 'tools',
      'link' => ['uri' => 'route:<front>'],
    ]);
    $menu_link_content->save();

    $this->drupalPlaceBlock('system_menu_block:tools');

    $this->drupalGet('<front>');
    $this->assertNoRaw('<script>alert("Wild animals")</script>');
    $this->assertNoRaw('<script>alert("Even more wild animals")</script>');
<<<<<<< HEAD
    $this->assertEscaped('<script>alert("Wild animals")</script>');
    $this->assertEscaped('<script>alert("Even more wild animals")</script>');
=======
    $this->assertSession()->assertEscaped('<script>alert("Wild animals")</script>');
    $this->assertSession()->assertEscaped('<script>alert("Even more wild animals")</script>');
>>>>>>> dev
  }

}
