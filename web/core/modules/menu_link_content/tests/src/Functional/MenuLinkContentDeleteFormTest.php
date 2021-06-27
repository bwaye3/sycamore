<?php

namespace Drupal\Tests\menu_link_content\Functional;

use Drupal\menu_link_content\Entity\MenuLinkContent;
use Drupal\system\Entity\Menu;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the menu link content delete UI.
 *
 * @group Menu
 */
class MenuLinkContentDeleteFormTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['menu_link_content'];
=======
  protected static $modules = ['menu_link_content'];
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
    $web_user = $this->drupalCreateUser(['administer menu']);
    $this->drupalLogin($web_user);
  }

  /**
   * Tests the MenuLinkContentDeleteForm class.
   */
  public function testMenuLinkContentDeleteForm() {
    // Add new menu item.
<<<<<<< HEAD
    $this->drupalPostForm(
      'admin/structure/menu/manage/admin/add',
      [
        'title[0][value]' => t('Front page'),
        'link[0][uri]' => '<front>',
      ],
      t('Save')
    );
    $this->assertText(t('The menu link has been saved.'));
=======
    $this->drupalGet('admin/structure/menu/manage/admin/add');
    $this->submitForm([
      'title[0][value]' => t('Front page'),
      'link[0][uri]' => '<front>',
    ], 'Save');
    $this->assertSession()->pageTextContains('The menu link has been saved.');
>>>>>>> dev

    $menu_link = MenuLinkContent::load(1);
    $this->drupalGet($menu_link->toUrl('delete-form'));
    $this->assertRaw(t('Are you sure you want to delete the custom menu link %name?', ['%name' => $menu_link->label()]));
<<<<<<< HEAD
    $this->assertSession()->linkExists(t('Cancel'));
    // Make sure cancel link points to link edit
    $this->assertLinkByHref($menu_link->toUrl('edit-form')->toString());

    \Drupal::service('module_installer')->install(['menu_ui']);
    \Drupal::service('router.builder')->rebuild();
=======
    $this->assertSession()->linkExists('Cancel');
    // Make sure cancel link points to link edit
    $this->assertSession()->linkByHrefExists($menu_link->toUrl('edit-form')->toString());

    \Drupal::service('module_installer')->install(['menu_ui']);
>>>>>>> dev

    // Make sure cancel URL points to menu_ui route now.
    $this->drupalGet($menu_link->toUrl('delete-form'));
    $menu = Menu::load($menu_link->getMenuName());
<<<<<<< HEAD
    $this->assertLinkByHref($menu->toUrl('edit-form')->toString());
    $this->drupalPostForm(NULL, [], t('Delete'));
=======
    $this->assertSession()->linkByHrefExists($menu->toUrl('edit-form')->toString());
    $this->submitForm([], 'Delete');
>>>>>>> dev
    $this->assertRaw(t('The menu link %title has been deleted.', ['%title' => $menu_link->label()]));
  }

}
