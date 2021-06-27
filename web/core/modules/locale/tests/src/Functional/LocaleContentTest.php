<?php

namespace Drupal\Tests\locale\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Core\Language\LanguageInterface;
use Drupal\node\NodeInterface;

/**
 * Tests you can enable multilingual support on content types and configure a
 * language for a node.
 *
 * @group locale
 */
class LocaleContentTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['node', 'locale'];
=======
  protected static $modules = ['node', 'locale'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * Verifies that machine name fields are always LTR.
   */
  public function testMachineNameLTR() {
    // User to add and remove language.
    $admin_user = $this->drupalCreateUser([
      'administer languages',
      'administer content types',
      'access administration pages',
      'administer site configuration',
    ]);

    // Log in as admin.
    $this->drupalLogin($admin_user);

    // Verify that the machine name field is LTR for a new content type.
    $this->drupalGet('admin/structure/types/add');
<<<<<<< HEAD
    $this->assertFieldByXpath('//input[@name="type" and @dir="ltr"]', NULL, 'The machine name field is LTR when no additional language is configured.');
=======
    $type = $this->assertSession()->fieldExists('type');
    $this->assertSame('ltr', $type->getAttribute('dir'));
>>>>>>> dev

    // Install the Arabic language (which is RTL) and configure as the default.
    $edit = [];
    $edit['predefined_langcode'] = 'ar';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');
>>>>>>> dev

    $edit = [
      'site_default_language' => 'ar',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language', $edit, t('Save configuration'));

    // Verify that the machine name field is still LTR for a new content type.
    $this->drupalGet('admin/structure/types/add');
    $this->assertFieldByXpath('//input[@name="type" and @dir="ltr"]', NULL, 'The machine name field is LTR when the default language is RTL.');
  }

  /**
   * Test if a content type can be set to multilingual and language is present.
=======
    $this->drupalGet('admin/config/regional/language');
    $this->submitForm($edit, 'Save configuration');

    // Verify that the machine name field is still LTR for a new content type.
    $this->drupalGet('admin/structure/types/add');
    $type = $this->assertSession()->fieldExists('type');
    $this->assertSame('ltr', $type->getAttribute('dir'));
  }

  /**
   * Tests if a content type can be set to multilingual and language is present.
>>>>>>> dev
   */
  public function testContentTypeLanguageConfiguration() {
    $type1 = $this->drupalCreateContentType();
    $type2 = $this->drupalCreateContentType();

    // User to add and remove language.
    $admin_user = $this->drupalCreateUser([
      'administer languages',
      'administer content types',
      'access administration pages',
    ]);
    // User to create a node.
    $web_user = $this->drupalCreateUser([
      "create {$type1->id()} content",
      "create {$type2->id()} content",
      "edit any {$type2->id()} content",
    ]);

    // Add custom language.
    $this->drupalLogin($admin_user);
    // Code for the language.
    $langcode = 'xx';
    // The English name for the language.
    $name = $this->randomMachineName(16);
    $edit = [
      'predefined_langcode' => 'custom',
      'langcode' => $langcode,
      'label' => $name,
      'direction' => LanguageInterface::DIRECTION_LTR,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add custom language'));

    // Set the content type to use multilingual support.
    $this->drupalGet("admin/structure/types/manage/{$type2->id()}");
    $this->assertText(t('Language settings'), 'Multilingual support widget present on content type configuration form.');
    $edit = [
      'language_configuration[language_alterable]' => TRUE,
    ];
    $this->drupalPostForm("admin/structure/types/manage/{$type2->id()}", $edit, t('Save content type'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add custom language');

    // Set the content type to use multilingual support.
    $this->drupalGet("admin/structure/types/manage/{$type2->id()}");
    $this->assertSession()->pageTextContains('Language settings');
    $edit = [
      'language_configuration[language_alterable]' => TRUE,
    ];
    $this->drupalGet("admin/structure/types/manage/{$type2->id()}");
    $this->submitForm($edit, 'Save content type');
>>>>>>> dev
    $this->assertRaw(t('The content type %type has been updated.', ['%type' => $type2->label()]));
    $this->drupalLogout();
    \Drupal::languageManager()->reset();

    // Verify language selection is not present on the node add form.
    $this->drupalLogin($web_user);
    $this->drupalGet("node/add/{$type1->id()}");
    // Verify language select list is not present.
<<<<<<< HEAD
    $this->assertNoFieldByName('langcode[0][value]', NULL, 'Language select not present on the node add form.');
=======
    $this->assertSession()->fieldNotExists('langcode[0][value]');
>>>>>>> dev

    // Verify language selection appears on the node add form.
    $this->drupalGet("node/add/{$type2->id()}");
    // Verify language select list is present.
<<<<<<< HEAD
    $this->assertFieldByName('langcode[0][value]', NULL, 'Language select present on the node add form.');
    // Ensure language appears.
    $this->assertText($name, 'Language present.');
=======
    $this->assertSession()->fieldExists('langcode[0][value]');
    // Ensure language appears.
    $this->assertSession()->pageTextContains($name);
>>>>>>> dev

    // Create a node.
    $node_title = $this->randomMachineName();
    $node_body = $this->randomMachineName();
    $edit = [
      'type' => $type2->id(),
      'title' => $node_title,
      'body' => [['value' => $node_body]],
      'langcode' => $langcode,
    ];
    $node = $this->drupalCreateNode($edit);
    // Edit the content and ensure correct language is selected.
    $path = 'node/' . $node->id() . '/edit';
    $this->drupalGet($path);
<<<<<<< HEAD
    $this->assertRaw('<option value="' . $langcode . '" selected="selected">' . $name . '</option>', 'Correct language selected.');
=======
    $this->assertRaw('<option value="' . $langcode . '" selected="selected">' . $name . '</option>');
>>>>>>> dev
    // Ensure we can change the node language.
    $edit = [
      'langcode[0][value]' => 'en',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($path, $edit, t('Save'));
    $this->assertText(t('@title has been updated.', ['@title' => $node_title]));

    // Verify that the creation message contains a link to a node.
    $view_link = $this->xpath('//div[@class="messages"]//a[contains(@href, :href)]', [':href' => 'node/' . $node->id()]);
    $this->assert(isset($view_link), 'The message area contains the link to the edited node');
=======
    $this->drupalGet($path);
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains($node_title . ' has been updated.');

    // Verify that the creation message contains a link to a node.
    $xpath = $this->assertSession()->buildXPathQuery('//div[@data-drupal-messages]//a[contains(@href, :href)]', [
      ':href' => 'node/' . $node->id(),
    ]);
    $this->assertSession()->elementExists('xpath', $xpath);
>>>>>>> dev

    $this->drupalLogout();
  }

  /**
<<<<<<< HEAD
   * Test if a dir and lang tags exist in node's attributes.
=======
   * Tests if a dir and lang tags exist in node's attributes.
>>>>>>> dev
   */
  public function testContentTypeDirLang() {
    $type = $this->drupalCreateContentType();

    // User to add and remove language.
    $admin_user = $this->drupalCreateUser([
      'administer languages',
      'administer content types',
      'access administration pages',
    ]);
    // User to create a node.
    $web_user = $this->drupalCreateUser([
      "create {$type->id()} content",
      "edit own {$type->id()} content",
    ]);

    // Log in as admin.
    $this->drupalLogin($admin_user);

    // Install Arabic language.
    $edit = [];
    $edit['predefined_langcode'] = 'ar';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');
>>>>>>> dev

    // Install Spanish language.
    $edit = [];
    $edit['predefined_langcode'] = 'es';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');
>>>>>>> dev
    \Drupal::languageManager()->reset();

    // Set the content type to use multilingual support.
    $this->drupalGet("admin/structure/types/manage/{$type->id()}");
    $edit = [
      'language_configuration[language_alterable]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/types/manage/{$type->id()}", $edit, t('Save content type'));
=======
    $this->drupalGet("admin/structure/types/manage/{$type->id()}");
    $this->submitForm($edit, 'Save content type');
>>>>>>> dev
    $this->assertRaw(t('The content type %type has been updated.', ['%type' => $type->label()]));
    $this->drupalLogout();

    // Log in as web user to add new node.
    $this->drupalLogin($web_user);

    // Create three nodes: English, Arabic and Spanish.
    $nodes = [];
    foreach (['en', 'es', 'ar'] as $langcode) {
      $nodes[$langcode] = $this->drupalCreateNode([
        'langcode' => $langcode,
        'type' => $type->id(),
        'promote' => NodeInterface::PROMOTED,
      ]);
    }

    // Check if English node does not have lang tag.
    $this->drupalGet('node/' . $nodes['en']->id());
    $element = $this->cssSelect('article.node[lang="en"]');
    $this->assertTrue(empty($element), 'The lang tag has not been assigned to the English node.');

    // Check if English node does not have dir tag.
    $element = $this->cssSelect('article.node[dir="ltr"]');
    $this->assertTrue(empty($element), 'The dir tag has not been assigned to the English node.');

    // Check if Arabic node has lang="ar" & dir="rtl" tags.
    $this->drupalGet('node/' . $nodes['ar']->id());
    $element = $this->cssSelect('article.node[lang="ar"][dir="rtl"]');
    $this->assertTrue(!empty($element), 'The lang and dir tags have been assigned correctly to the Arabic node.');

    // Check if Spanish node has lang="es" tag.
    $this->drupalGet('node/' . $nodes['es']->id());
    $element = $this->cssSelect('article.node[lang="es"]');
    $this->assertTrue(!empty($element), 'The lang tag has been assigned correctly to the Spanish node.');

    // Check if Spanish node does not have dir="ltr" tag.
    $element = $this->cssSelect('article.node[lang="es"][dir="ltr"]');
    $this->assertTrue(empty($element), 'The dir tag has not been assigned to the Spanish node.');
  }

}
