<?php

namespace Drupal\Tests\menu_ui\Functional;

use Drupal\language\Entity\ConfigurableLanguage;
use Drupal\menu_link_content\Entity\MenuLinkContent;
use Drupal\node\Entity\Node;
use Drupal\Tests\BrowserTestBase;

/**
 * Add, edit, and delete a node with menu link.
 *
 * @group menu_ui
 */
class MenuUiNodeTest extends BrowserTestBase {

  /**
   * An editor user.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $editor;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'menu_ui',
    'test_page_test',
    'node',
    'block',
    'locale',
    'language',
    'content_translation',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->drupalPlaceBlock('system_menu_block:main');
    $this->drupalPlaceBlock('page_title_block');

    $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);

    $this->editor = $this->drupalCreateUser([
      'access administration pages',
      'administer content types',
      'administer menu',
      'create page content',
      'edit any page content',
      'delete any page content',
      'create content translations',
      'update content translations',
      'delete content translations',
      'translate any entity',
    ]);
    $this->drupalLogin($this->editor);
  }

  /**
<<<<<<< HEAD
   * Test creating, editing, deleting menu links via node form widget.
=======
   * Tests creating, editing, deleting menu links via node form widget.
>>>>>>> dev
   */
  public function testMenuNodeFormWidget() {
    // Verify that cacheability metadata is bubbled from the menu link tree
    // access checking that is performed when determining the "default parent
    // item" options in menu_ui_form_node_type_form_alter(). The "log out" link
    // adds the "user.roles:authenticated" cache context.
    $this->drupalGet('admin/structure/types/manage/page');
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Contexts', 'user.roles:authenticated');

    // Verify that the menu link title has the correct maxlength.
    $title_max_length = \Drupal::service('entity_field.manager')->getBaseFieldDefinitions('menu_link_content')['title']->getSetting('max_length');
    $this->drupalGet('node/add/page');
<<<<<<< HEAD
    $this->assertPattern('/<input .* id="edit-menu-title" .* maxlength="' . $title_max_length . '" .* \/>/');
=======
    $this->assertSession()->responseMatches('/<input .* id="edit-menu-title" .* maxlength="' . $title_max_length . '" .* \/>/');
>>>>>>> dev

    // Verify that the menu link description has the correct maxlength.
    $description_max_length = \Drupal::service('entity_field.manager')->getBaseFieldDefinitions('menu_link_content')['description']->getSetting('max_length');
    $this->drupalGet('node/add/page');
<<<<<<< HEAD
    $this->assertPattern('/<input .* id="edit-menu-description" .* maxlength="' . $description_max_length . '" .* \/>/');
=======
    $this->assertSession()->responseMatches('/<input .* id="edit-menu-description" .* maxlength="' . $description_max_length . '" .* \/>/');
>>>>>>> dev

    // Disable the default main menu, so that no menus are enabled.
    $edit = [
      'menu_options[main]' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/page', $edit, t('Save content type'));

    // Verify that no menu settings are displayed and nodes can be created.
    $this->drupalGet('node/add/page');
    $this->assertText(t('Create Basic page'));
    $this->assertNoText(t('Menu settings'));
=======
    $this->drupalGet('admin/structure/types/manage/page');
    $this->submitForm($edit, 'Save content type');

    // Verify that no menu settings are displayed and nodes can be created.
    $this->drupalGet('node/add/page');
    $this->assertSession()->pageTextContains('Create Basic page');
    $this->assertNoText('Menu settings');
>>>>>>> dev
    $node_title = $this->randomMachineName();
    $edit = [
      'title[0][value]' => $node_title,
      'body[0][value]' => $this->randomString(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
    $node = $this->drupalGetNodeByTitle($node_title);
    $this->assertEqual($node->getTitle(), $edit['title[0][value]']);
=======
    $this->submitForm($edit, 'Save');
    $node = $this->drupalGetNodeByTitle($node_title);
    $this->assertEquals($edit['title[0][value]'], $node->getTitle());
>>>>>>> dev

    // Test that we cannot set a menu item from a menu that is not set as
    // available.
    $edit = [
      'menu_options[tools]' => 1,
      'menu_parent' => 'main:',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/page', $edit, t('Save content type'));
    $this->assertText(t('The selected menu item is not under one of the selected menus.'));
=======
    $this->drupalGet('admin/structure/types/manage/page');
    $this->submitForm($edit, 'Save content type');
    $this->assertSession()->pageTextContains('The selected menu link is not under one of the selected menus.');
>>>>>>> dev
    $this->assertNoRaw(t('The content type %name has been updated.', ['%name' => 'Basic page']));

    // Enable Tools menu as available menu.
    $edit = [
      'menu_options[main]' => 1,
      'menu_options[tools]' => 1,
      'menu_parent' => 'main:',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/manage/page', $edit, t('Save content type'));
=======
    $this->drupalGet('admin/structure/types/manage/page');
    $this->submitForm($edit, 'Save content type');
>>>>>>> dev
    $this->assertRaw(t('The content type %name has been updated.', ['%name' => 'Basic page']));

    // Test that we can preview a node that will create a menu item.
    $edit = [
      'title[0][value]' => $node_title,
      'menu[enabled]' => 1,
      'menu[title]' => 'Test preview',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/add/page', $edit, t('Preview'));
=======
    $this->drupalGet('node/add/page');
    $this->submitForm($edit, 'Preview');
>>>>>>> dev

    // Create a node.
    $node_title = $this->randomMachineName();
    $edit = [
      'title[0][value]' => $node_title,
      'body[0][value]' => $this->randomString(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/add/page', $edit, t('Save'));
=======
    $this->drupalGet('node/add/page');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $node = $this->drupalGetNodeByTitle($node_title);
    // Assert that there is no link for the node.
    $this->drupalGet('test-page');
    $this->assertSession()->linkNotExists($node_title);

    // Edit the node, enable the menu link setting, but skip the link title.
    $edit = [
      'menu[enabled]' => 1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/' . $node->id() . '/edit', $edit, t('Save'));
=======
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    // Assert that there is no link for the node.
    $this->drupalGet('test-page');
    $this->assertSession()->linkNotExists($node_title);

    // Make sure the menu links only appear when the node is published.
    // These buttons just appear for 'administer nodes' users.
    $admin_user = $this->drupalCreateUser([
      'access administration pages',
      'administer content types',
      'administer nodes',
      'administer menu',
      'create page content',
      'edit any page content',
    ]);
    $this->drupalLogin($admin_user);
    // Assert that the link does not exist if unpublished.
    $edit = [
      'menu[enabled]' => 1,
      'menu[title]' => $node_title,
      'status[value]' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/' . $node->id() . '/edit', $edit, 'Save');
=======
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $this->drupalGet('test-page');
    $this->assertSession()->linkNotExists($node_title, 'Found no menu link with the node unpublished');
    // Assert that the link exists if published.
    $edit['status[value]'] = TRUE;
<<<<<<< HEAD
    $this->drupalPostForm('node/' . $node->id() . '/edit', $edit, 'Save');
=======
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $this->drupalGet('test-page');
    $this->assertSession()->linkExists($node_title, 0, 'Found a menu link with the node published');

    // Log back in as normal user.
    $this->drupalLogin($this->editor);
    // Edit the node and create a menu link.
    $edit = [
      'menu[enabled]' => 1,
      'menu[title]' => $node_title,
      'menu[weight]' => 17,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/' . $node->id() . '/edit', $edit, t('Save'));
    // Assert that the link exists.
    $this->drupalGet('test-page');
    $this->assertSession()->linkExists($node_title);

    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->assertFieldById('edit-menu-weight', 17, 'Menu weight correct in edit form');
    // Verify that the menu link title field has correct maxlength in node edit
    // form.
    $this->assertPattern('/<input .* id="edit-menu-title" .* maxlength="' . $title_max_length . '" .* \/>/');
    // Verify that the menu link description field has correct maxlength in
    // node add form.
    $this->assertPattern('/<input .* id="edit-menu-description" .* maxlength="' . $description_max_length . '" .* \/>/');
=======
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
    // Assert that the link exists.
    $this->drupalGet('test-page');
    $this->assertSession()->linkExists($node_title);
    // Check if menu weight is 17.
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->assertSession()->fieldValueEquals('edit-menu-weight', 17);
    // Verify that the menu link title field has correct maxlength in node edit
    // form.
    $this->assertSession()->responseMatches('/<input .* id="edit-menu-title" .* maxlength="' . $title_max_length . '" .* \/>/');
    // Verify that the menu link description field has correct maxlength in
    // node add form.
    $this->assertSession()->responseMatches('/<input .* id="edit-menu-description" .* maxlength="' . $description_max_length . '" .* \/>/');
>>>>>>> dev

    // Disable the menu link, then edit the node--the link should stay disabled.
    $link_id = menu_ui_get_menu_link_defaults($node)['entity_id'];
    /** @var \Drupal\menu_link_content\Entity\MenuLinkContent $link */
    $link = MenuLinkContent::load($link_id);
    $link->set('enabled', FALSE);
    $link->save();
<<<<<<< HEAD
    $this->drupalPostForm($node->toUrl('edit-form'), $edit, t('Save'));
=======
    $this->drupalGet($node->toUrl('edit-form'));
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $link = MenuLinkContent::load($link_id);
    $this->assertFalse($link->isEnabled(), 'Saving a node with a disabled menu link keeps the menu link disabled.');

    // Edit the node and remove the menu link.
    $edit = [
      'menu[enabled]' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/' . $node->id() . '/edit', $edit, t('Save'));
=======
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    // Assert that there is no link for the node.
    $this->drupalGet('test-page');
    $this->assertSession()->linkNotExists($node_title);

    // Add a menu link to the Administration menu.
    $item = MenuLinkContent::create([
      'link' => [['uri' => 'entity:node/' . $node->id()]],
      'title' => $this->randomMachineName(16),
      'menu_name' => 'admin',
    ]);
    $item->save();

    // Assert that disabled Administration menu is not shown on the
    // node/$nid/edit page.
    $this->drupalGet('node/' . $node->id() . '/edit');
<<<<<<< HEAD
    $this->assertText('Provide a menu link', 'Link in not allowed menu not shown in node edit form');
    // Assert that the link is still in the Administration menu after save.
    $this->drupalPostForm('node/' . $node->id() . '/edit', $edit, t('Save'));
=======
    $this->assertSession()->pageTextContains('Provide a menu link');
    // Assert that the link is still in the Administration menu after save.
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $link = MenuLinkContent::load($item->id());
    $this->assertInstanceOf(MenuLinkContent::class, $link);

    // Move the menu link back to the Tools menu.
    $item->menu_name->value = 'tools';
    $item->save();
    // Create a second node.
    $child_node = $this->drupalCreateNode(['type' => 'article']);
    // Assign a menu link to the second node, being a child of the first one.
    $child_item = MenuLinkContent::create([
      'link' => [['uri' => 'entity:node/' . $child_node->id()]],
      'title' => $this->randomMachineName(16),
      'parent' => $item->getPluginId(),
      'menu_name' => $item->getMenuName(),
    ]);
    $child_item->save();
    // Edit the first node.
    $this->drupalGet('node/' . $node->id() . '/edit');
    // Assert that it is not possible to set the parent of the first node to itself or the second node.
<<<<<<< HEAD
    $this->assertNoOption('edit-menu-menu-parent', 'tools:' . $item->getPluginId());
    $this->assertNoOption('edit-menu-menu-parent', 'tools:' . $child_item->getPluginId());
    // Assert that unallowed Administration menu is not available in options.
    $this->assertNoOption('edit-menu-menu-parent', 'admin:');
=======
    $this->assertSession()->optionNotExists('edit-menu-menu-parent', 'tools:' . $item->getPluginId());
    $this->assertSession()->optionNotExists('edit-menu-menu-parent', 'tools:' . $child_item->getPluginId());
    // Assert that unallowed Administration menu is not available in options.
    $this->assertSession()->optionNotExists('edit-menu-menu-parent', 'admin:');
>>>>>>> dev
  }

  /**
   * Testing correct loading and saving of menu links via node form widget in a multilingual environment.
   */
  public function testMultilingualMenuNodeFormWidget() {
    // Setup languages.
    $langcodes = ['de'];
    foreach ($langcodes as $langcode) {
      ConfigurableLanguage::createFromLangcode($langcode)->save();
    }
    array_unshift($langcodes, \Drupal::languageManager()->getDefaultLanguage()->getId());

    $config = \Drupal::service('config.factory')->getEditable('language.negotiation');
    // Ensure path prefix is used to determine the language.
    $config->set('url.source', 'path_prefix');
    // Ensure that there's a path prefix set for english as well.
    $config->set('url.prefixes.' . $langcodes[0], $langcodes[0]);
    $config->save();

    $this->rebuildContainer();

    $languages = [];
    foreach ($langcodes as $langcode) {
      $languages[$langcode] = ConfigurableLanguage::load($langcode);
    }

    // Use a UI form submission to make the node type and menu link content entity translatable.
    $this->drupalLogout();
    $this->drupalLogin($this->rootUser);
    $edit = [
      'entity_types[node]' => TRUE,
      'entity_types[menu_link_content]' => TRUE,
      'settings[node][page][settings][language][language_alterable]' => TRUE,
      'settings[node][page][translatable]' => TRUE,
      'settings[node][page][fields][title]' => TRUE,
      'settings[menu_link_content][menu_link_content][translatable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/content-language', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/content-language');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev

    // Log out and back in as normal user.
    $this->drupalLogout();
    $this->drupalLogin($this->editor);

    // Create a node.
    $node_title = $this->randomMachineName(8);
    $node = Node::create([
      'type' => 'page',
      'title' => $node_title,
      'body' => $this->randomMachineName(16),
      'uid' => $this->editor->id(),
      'status' => 1,
      'langcode' => $langcodes[0],
    ]);
    $node->save();

    // Create translation.
    $translated_node_title = $this->randomMachineName(8);
    $node->addTranslation($langcodes[1], ['title' => $translated_node_title, 'body' => $this->randomMachineName(16), 'status' => 1]);
    $node->save();

    // Edit the node and create a menu link.
    $edit = [
      'menu[enabled]' => 1,
      'menu[title]' => $node_title,
      'menu[weight]' => 17,
    ];
    $options = ['language' => $languages[$langcodes[0]]];
    $url = $node->toUrl('edit-form', $options);
<<<<<<< HEAD
    $this->drupalPostForm($url, $edit, t('Save') . ' ' . t('(this translation)'));
=======
    $this->drupalGet($url);
    $this->submitForm($edit, 'Save (this translation)');
>>>>>>> dev

    // Edit the node in a different language and translate the menu link.
    $edit = [
      'menu[enabled]' => 1,
      'menu[title]' => $translated_node_title,
      'menu[weight]' => 17,
    ];
    $options = ['language' => $languages[$langcodes[1]]];
    $url = $node->toUrl('edit-form', $options);
<<<<<<< HEAD
    $this->drupalPostForm($url, $edit, t('Save') . ' ' . t('(this translation)'));
=======
    $this->drupalGet($url);
    $this->submitForm($edit, 'Save (this translation)');
>>>>>>> dev

    // Assert that the original link exists in the frontend.
    $this->drupalGet('node/' . $node->id(), ['language' => $languages[$langcodes[0]]]);
    $this->assertSession()->linkExists($node_title);

    // Assert that the translated link exists in the frontend.
    $this->drupalGet('node/' . $node->id(), ['language' => $languages[$langcodes[1]]]);
    $this->assertSession()->linkExists($translated_node_title);

    // Revisit the edit page in original language, check the loaded menu item title and save.
    $options = ['language' => $languages[$langcodes[0]]];
    $url = $node->toUrl('edit-form', $options);
    $this->drupalGet($url);
<<<<<<< HEAD
    $this->assertFieldById('edit-menu-title', $node_title);
    $this->drupalPostForm(NULL, [], t('Save') . ' ' . t('(this translation)'));
=======
    $this->assertSession()->fieldValueEquals('edit-menu-title', $node_title);
    $this->submitForm([], 'Save (this translation)');
>>>>>>> dev

    // Revisit the edit page of the translation and check the loaded menu item title.
    $options = ['language' => $languages[$langcodes[1]]];
    $url = $node->toUrl('edit-form', $options);
    $this->drupalGet($url);
<<<<<<< HEAD
    $this->assertFieldById('edit-menu-title', $translated_node_title);
=======
    $this->assertSession()->fieldValueEquals('edit-menu-title', $translated_node_title);
>>>>>>> dev
  }

}
