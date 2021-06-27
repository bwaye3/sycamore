<?php

namespace Drupal\Tests\block_content\Functional;

use Drupal\block_content\Entity\BlockContentType;
use Drupal\Component\Utility\Html;
use Drupal\Core\Url;
use Drupal\Tests\system\Functional\Menu\AssertBreadcrumbTrait;

/**
 * Ensures that custom block type functions work correctly.
 *
 * @group block_content
 */
class BlockContentTypeTest extends BlockContentTestBase {

  use AssertBreadcrumbTrait;
  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['field_ui'];
=======
  protected static $modules = ['field_ui'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * Permissions to grant admin user.
   *
   * @var array
   */
  protected $permissions = [
    'administer blocks',
    'administer block_content fields',
  ];

  /**
   * Whether or not to create an initial block type.
   *
   * @var bool
   */
  protected $autoCreateBasicBlockType = FALSE;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->drupalPlaceBlock('page_title_block');
  }

  /**
<<<<<<< HEAD
=======
   * Tests the order of the block content types on the add page.
   */
  public function testBlockContentAddPageOrder() {
    $this->createBlockContentType(['id' => 'bundle_1', 'label' => 'Bundle 1']);
    $this->createBlockContentType(['id' => 'bundle_2', 'label' => 'Aaa Bundle 2']);
    $this->drupalLogin($this->adminUser);
    $this->drupalGet('block/add');
    $this->assertSession()->pageTextMatches('/Aaa Bundle 2(.*)Bundle 1/');
  }

  /**
>>>>>>> dev
   * Tests creating a block type programmatically and via a form.
   */
  public function testBlockContentTypeCreation() {
    // Log in a test user.
    $this->drupalLogin($this->adminUser);

    // Test the page with no block-types.
    $this->drupalGet('block/add');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertText('You have not created any block types yet');
=======
    $this->assertSession()->pageTextContains('You have not created any block types yet');
>>>>>>> dev
    $this->clickLink('block type creation page');

    // Create a block type via the user interface.
    $edit = [
      'id' => 'foo',
      'label' => 'title for foo',
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
=======
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $block_type = BlockContentType::load('foo');
    $this->assertInstanceOf(BlockContentType::class, $block_type);

    $field_definitions = \Drupal::service('entity_field.manager')->getFieldDefinitions('block_content', 'foo');
    $this->assertTrue(isset($field_definitions['body']), 'Body field created when using the UI to create block content types.');

    // Check that the block type was created in site default language.
    $default_langcode = \Drupal::languageManager()->getDefaultLanguage()->getId();
<<<<<<< HEAD
    $this->assertEqual($block_type->language()->getId(), $default_langcode);
=======
    $this->assertEquals($block_type->language()->getId(), $default_langcode);
>>>>>>> dev

    // Create block types programmatically.
    $this->createBlockContentType('basic', TRUE);
    $field_definitions = \Drupal::service('entity_field.manager')->getFieldDefinitions('block_content', 'basic');
    $this->assertTrue(isset($field_definitions['body']), "Body field for 'basic' block type created when using the testing API to create block content types.");

    $this->createBlockContentType('other');
    $field_definitions = \Drupal::service('entity_field.manager')->getFieldDefinitions('block_content', 'other');
    $this->assertFalse(isset($field_definitions['body']), "Body field for 'other' block type not created when using the testing API to create block content types.");

    $block_type = BlockContentType::load('other');
    $this->assertInstanceOf(BlockContentType::class, $block_type);

    $this->drupalGet('block/add/' . $block_type->id());
    $this->assertSession()->statusCodeEquals(200);
  }

  /**
   * Tests editing a block type using the UI.
   */
  public function testBlockContentTypeEditing() {
    $this->drupalPlaceBlock('system_breadcrumb_block');
    // Now create an initial block-type.
    $this->createBlockContentType('basic', TRUE);

    $this->drupalLogin($this->adminUser);
    // We need two block types to prevent /block/add redirecting.
    $this->createBlockContentType('other');

    $field_definitions = \Drupal::service('entity_field.manager')->getFieldDefinitions('block_content', 'other');
    $this->assertFalse(isset($field_definitions['body']), 'Body field was not created when using the API to create block content types.');

    // Verify that title and body fields are displayed.
    $this->drupalGet('block/add/basic');
<<<<<<< HEAD
    $this->assertRaw('Block description', 'Block info field was found.');
=======
    $this->assertRaw('Block description');
>>>>>>> dev
    $this->assertNotEmpty($this->cssSelect('#edit-body-0-value'), 'Body field was found.');

    // Change the block type name.
    $edit = [
      'label' => 'Bar',
    ];
    $this->drupalGet('admin/structure/block/block-content/manage/basic');
<<<<<<< HEAD
    $this->assertTitle('Edit basic custom block type | Drupal');
    $this->drupalPostForm(NULL, $edit, t('Save'));
=======
    $this->assertSession()->titleEquals('Edit basic custom block type | Drupal');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $front_page_path = Url::fromRoute('<front>')->toString();
    $this->assertBreadcrumb('admin/structure/block/block-content/manage/basic/fields', [
      $front_page_path => 'Home',
      'admin/structure/block' => 'Block layout',
      'admin/structure/block/block-content' => 'Custom block library',
      'admin/structure/block/block-content/manage/basic' => 'Edit Bar',
    ]);
    \Drupal::service('entity_field.manager')->clearCachedFieldDefinitions();

    $this->drupalGet('block/add');
<<<<<<< HEAD
    $this->assertRaw('Bar', 'New name was displayed.');
    $this->clickLink('Bar');
    $this->assertUrl(Url::fromRoute('block_content.add_form', ['block_content_type' => 'basic'], ['absolute' => TRUE])->toString(), [], 'Original machine name was used in URL.');

    // Remove the body field.
    $this->drupalPostForm('admin/structure/block/block-content/manage/basic/fields/block_content.basic.body/delete', [], t('Delete'));
    // Resave the settings for this type.
    $this->drupalPostForm('admin/structure/block/block-content/manage/basic', [], t('Save'));
=======
    $this->assertRaw('Bar');
    $this->clickLink('Bar');
    // Verify that the original machine name was used in the URL.
    $this->assertSession()->addressEquals(Url::fromRoute('block_content.add_form', ['block_content_type' => 'basic']));

    // Remove the body field.
    $this->drupalGet('admin/structure/block/block-content/manage/basic/fields/block_content.basic.body/delete');
    $this->submitForm([], 'Delete');
    // Resave the settings for this type.
    $this->drupalGet('admin/structure/block/block-content/manage/basic');
    $this->submitForm([], 'Save');
>>>>>>> dev
    // Check that the body field doesn't exist.
    $this->drupalGet('block/add/basic');
    $this->assertEmpty($this->cssSelect('#edit-body-0-value'), 'Body field was not found.');
  }

  /**
   * Tests deleting a block type that still has content.
   */
  public function testBlockContentTypeDeletion() {
    // Now create an initial block-type.
    $this->createBlockContentType('basic', TRUE);

    // Create a block type programmatically.
    $type = $this->createBlockContentType('foo');

    $this->drupalLogin($this->adminUser);

    // Add a new block of this type.
    $block = $this->createBlockContent(FALSE, 'foo');
    // Attempt to delete the block type, which should not be allowed.
    $this->drupalGet('admin/structure/block/block-content/manage/' . $type->id() . '/delete');
    $this->assertRaw(
<<<<<<< HEAD
      t('%label is used by 1 custom block on your site. You can not remove this block type until you have removed all of the %label blocks.', ['%label' => $type->label()]),
      'The block type will not be deleted until all blocks of that type are removed.'
    );
    $this->assertNoText(t('This action cannot be undone.'), 'The block type deletion confirmation form is not available.');
=======
      t('%label is used by 1 custom block on your site. You can not remove this block type until you have removed all of the %label blocks.', ['%label' => $type->label()])
    );
    $this->assertNoText('This action cannot be undone.');
>>>>>>> dev

    // Delete the block.
    $block->delete();
    // Attempt to delete the block type, which should now be allowed.
    $this->drupalGet('admin/structure/block/block-content/manage/' . $type->id() . '/delete');
    $this->assertRaw(
<<<<<<< HEAD
      t('Are you sure you want to delete the custom block type %type?', ['%type' => $type->id()]),
      'The block type is available for deletion.'
    );
    $this->assertText(t('This action cannot be undone.'), 'The custom block type deletion confirmation form is available.');
=======
      t('Are you sure you want to delete the custom block type %type?', ['%type' => $type->id()])
    );
    $this->assertSession()->pageTextContains('This action cannot be undone.');
>>>>>>> dev
  }

  /**
   * Tests that redirects work as expected when multiple block types exist.
   */
  public function testsBlockContentAddTypes() {
    // Now create an initial block-type.
    $this->createBlockContentType('basic', TRUE);

    $this->drupalLogin($this->adminUser);
    // Create two block types programmatically.
<<<<<<< HEAD
    $type = $this->createBlockContentType('foo');
    $type = $this->createBlockContentType('bar');
=======
    $this->createBlockContentType('foo');
    $this->createBlockContentType('bar');
>>>>>>> dev

    // Get the custom block storage.
    $storage = $this->container
      ->get('entity_type.manager')
      ->getStorage('block_content');

    // Install all themes.
    \Drupal::service('theme_installer')->install(['bartik', 'seven', 'stark']);
    $theme_settings = $this->config('system.theme');
    foreach (['bartik', 'seven', 'stark'] as $default_theme) {
      // Change the default theme.
      $theme_settings->set('default', $default_theme)->save();
      $this->drupalPlaceBlock('local_actions_block');
<<<<<<< HEAD
      \Drupal::service('router.builder')->rebuild();
=======
>>>>>>> dev

      // For each installed theme, go to its block page and test the redirects.
      foreach (['bartik', 'seven', 'stark'] as $theme) {
        // Test that adding a block from the 'place blocks' form sends you to the
        // block configure form.
        $path = $theme == $default_theme ? 'admin/structure/block' : "admin/structure/block/list/$theme";
        $this->drupalGet($path);
        $this->clickLink('Place block');
        $this->clickLink(t('Add custom block'));
        // The seven theme has markup inside the link, we cannot use clickLink().
        if ($default_theme == 'seven') {
          $options = $theme != $default_theme ? ['query' => ['theme' => $theme]] : [];
<<<<<<< HEAD
          $this->assertLinkByHref(Url::fromRoute('block_content.add_form', ['block_content_type' => 'foo'], $options)->toString());
=======
          $this->assertSession()->linkByHrefExists(Url::fromRoute('block_content.add_form', ['block_content_type' => 'foo'], $options)->toString());
>>>>>>> dev
          $this->drupalGet('block/add/foo', $options);
        }
        else {
          $this->clickLink('foo');
        }
        // Create a new block.
        $edit = ['info[0][value]' => $this->randomMachineName(8)];
<<<<<<< HEAD
        $this->drupalPostForm(NULL, $edit, t('Save'));
        $blocks = $storage->loadByProperties(['info' => $edit['info[0][value]']]);
        if (!empty($blocks)) {
          $block = reset($blocks);
          $this->assertUrl(Url::fromRoute('block.admin_add', ['plugin_id' => 'block_content:' . $block->uuid(), 'theme' => $theme], ['absolute' => TRUE])->toString());
          $this->drupalPostForm(NULL, ['region' => 'content'], t('Save block'));
          $this->assertUrl(Url::fromRoute('block.admin_display_theme', ['theme' => $theme], ['absolute' => TRUE, 'query' => ['block-placement' => Html::getClass($edit['info[0][value]'])]])->toString());
=======
        $this->submitForm($edit, 'Save');
        $blocks = $storage->loadByProperties(['info' => $edit['info[0][value]']]);
        if (!empty($blocks)) {
          $block = reset($blocks);
          $this->assertSession()->addressEquals(Url::fromRoute('block.admin_add', ['plugin_id' => 'block_content:' . $block->uuid(), 'theme' => $theme]));
          $this->submitForm(['region' => 'content'], 'Save block');
          $this->assertSession()->addressEquals(Url::fromRoute('block.admin_display_theme', ['theme' => $theme], ['query' => ['block-placement' => Html::getClass($edit['info[0][value]'])]]));
>>>>>>> dev
        }
        else {
          $this->fail('Could not load created block.');
        }
      }
    }

    // Test that adding a block from the 'custom blocks list' doesn't send you
    // to the block configure form.
    $this->drupalGet('admin/structure/block/block-content');
    $this->clickLink(t('Add custom block'));
    $this->clickLink('foo');
    $edit = ['info[0][value]' => $this->randomMachineName(8)];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
    $blocks = $storage->loadByProperties(['info' => $edit['info[0][value]']]);
    if (!empty($blocks)) {
      $this->assertUrl(Url::fromRoute('entity.block_content.collection', [], ['absolute' => TRUE])->toString());
=======
    $this->submitForm($edit, 'Save');
    $blocks = $storage->loadByProperties(['info' => $edit['info[0][value]']]);
    if (!empty($blocks)) {
      $this->assertSession()->addressEquals(Url::fromRoute('entity.block_content.collection'));
>>>>>>> dev
    }
    else {
      $this->fail('Could not load created block.');
    }
  }

}
