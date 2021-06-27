<?php

namespace Drupal\Tests\editor\Functional;

use Drupal\editor\Entity\Editor;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\filter\Entity\FilterFormat;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests loading of text editors.
 *
 * @group editor
 */
class EditorLoadingTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['filter', 'editor', 'editor_test', 'node'];
=======
  protected static $modules = ['filter', 'editor', 'editor_test', 'node'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * An untrusted user, with access to the 'plain_text' format.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $untrustedUser;

  /**
   * A normal user with additional access to the 'filtered_html' format.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $normalUser;

  /**
   * A privileged user with additional access to the 'full_html' format.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $privilegedUser;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Let there be T-rex.
    \Drupal::state()->set('editor_test_give_me_a_trex_thanks', TRUE);
    \Drupal::service('plugin.manager.editor')->clearCachedDefinitions();

    // Add text formats.
    $filtered_html_format = FilterFormat::create([
      'format' => 'filtered_html',
      'name' => 'Filtered HTML',
      'weight' => 0,
      'filters' => [],
    ]);
    $filtered_html_format->save();
    $full_html_format = FilterFormat::create([
      'format' => 'full_html',
      'name' => 'Full HTML',
      'weight' => 1,
      'filters' => [],
    ]);
    $full_html_format->save();

    // Create article node type.
    $this->drupalCreateContentType([
      'type' => 'article',
      'name' => 'Article',
    ]);

    // Create page node type, but remove the body.
    $this->drupalCreateContentType([
      'type' => 'page',
      'name' => 'Page',
    ]);
    $body = FieldConfig::loadByName('node', 'page', 'body');
    $body->delete();

    // Create a formatted text field, which uses an <input type="text">.
    FieldStorageConfig::create([
      'field_name' => 'field_text',
      'entity_type' => 'node',
      'type' => 'text',
    ])->save();

    FieldConfig::create([
      'field_name' => 'field_text',
      'entity_type' => 'node',
      'label' => 'Textfield',
      'bundle' => 'page',
    ])->save();

    \Drupal::service('entity_display.repository')
      ->getFormDisplay('node', 'page')
      ->setComponent('field_text')
      ->save();

    // Create 3 users, each with access to different text formats.
    $this->untrustedUser = $this->drupalCreateUser([
      'create article content',
      'edit any article content',
    ]);
    $this->normalUser = $this->drupalCreateUser([
      'create article content',
      'edit any article content',
      'use text format filtered_html',
    ]);
    $this->privilegedUser = $this->drupalCreateUser([
      'create article content',
      'edit any article content',
      'create page content',
      'edit any page content',
      'use text format filtered_html',
      'use text format full_html',
    ]);
  }

  /**
   * Tests loading of text editors.
   */
  public function testLoading() {
    // Only associate a text editor with the "Full HTML" text format.
    $editor = Editor::create([
      'format' => 'full_html',
      'editor' => 'unicorn',
      'image_upload' => [
        'status' => FALSE,
        'scheme' => 'public',
        'directory' => 'inline-images',
        'max_size' => '',
        'max_dimensions' => ['width' => '', 'height' => ''],
      ],
    ]);
    $editor->save();

    // The normal user:
    // - has access to 2 text formats;
    // - doesn't have access to the full_html text format, so: no text editor.
    $this->drupalLogin($this->normalUser);
    $this->drupalGet('node/add/article');
<<<<<<< HEAD
    list(, $editor_settings_present, $editor_js_present, $body, $format_selector) = $this->getThingsToCheck('body');
    $this->assertFalse($editor_settings_present, 'No Text Editor module settings.');
    $this->assertFalse($editor_js_present, 'No Text Editor JavaScript.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertCount(0, $format_selector, 'No text format selector exists on the page because the user only has access to a single format.');
=======
    list(, $editor_settings_present, $editor_js_present, $body) = $this->getThingsToCheck('body');
    $this->assertFalse($editor_settings_present, 'No Text Editor module settings.');
    $this->assertFalse($editor_js_present, 'No Text Editor JavaScript.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertSession()->elementNotExists('css', 'select.js-filter-list');
>>>>>>> dev
    $this->drupalLogout($this->normalUser);

    // The privileged user:
    // - has access to 2 text formats (and the fallback format);
    // - does have access to the full_html text format, so: Unicorn text editor.
    $this->drupalLogin($this->privilegedUser);
    $this->drupalGet('node/add/article');
<<<<<<< HEAD
    list($settings, $editor_settings_present, $editor_js_present, $body, $format_selector) = $this->getThingsToCheck('body');
=======
    list($settings, $editor_settings_present, $editor_js_present, $body) = $this->getThingsToCheck('body');
>>>>>>> dev
    $expected = [
      'formats' => [
        'full_html' => [
          'format' => 'full_html',
          'editor' => 'unicorn',
          'editorSettings' => ['ponyModeEnabled' => TRUE],
          'editorSupportsContentFiltering' => TRUE,
          'isXssSafe' => FALSE,
        ],
      ],
    ];
    $this->assertTrue($editor_settings_present, "Text Editor module's JavaScript settings are on the page.");
<<<<<<< HEAD
    $this->assertIdentical($expected, $settings['editor'], "Text Editor module's JavaScript settings on the page are correct.");
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript is present.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertCount(1, $format_selector, 'A single text format selector exists on the page.');
    $specific_format_selector = $this->xpath('//select[contains(@class, "filter-list") and @data-editor-for="edit-body-0-value"]');
    $this->assertCount(1, $specific_format_selector, 'A single text format selector exists on the page and has a "data-editor-for" attribute with the correct value.');
=======
    $this->assertSame($expected, $settings['editor'], "Text Editor module's JavaScript settings on the page are correct.");
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript is present.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertSession()->elementsCount('css', 'select.js-filter-list', 1);
    $select = $this->assertSession()->elementExists('css', 'select.js-filter-list');
    $this->assertSame('edit-body-0-value', $select->getAttribute('data-editor-for'));
>>>>>>> dev

    // Load the editor image dialog form and make sure it does not fatal.
    $this->drupalGet('editor/dialog/image/full_html');
    $this->assertSession()->statusCodeEquals(200);

    $this->drupalLogout($this->privilegedUser);

    // Also associate a text editor with the "Plain Text" text format.
    $editor = Editor::create([
      'format' => 'plain_text',
      'editor' => 'unicorn',
    ]);
    $editor->save();

    // The untrusted user:
    // - has access to 1 text format (plain_text);
    // - has access to the plain_text text format, so: Unicorn text editor.
    $this->drupalLogin($this->untrustedUser);
    $this->drupalGet('node/add/article');
<<<<<<< HEAD
    list($settings, $editor_settings_present, $editor_js_present, $body, $format_selector) = $this->getThingsToCheck('body');
=======
    list($settings, $editor_settings_present, $editor_js_present, $body) = $this->getThingsToCheck('body');
>>>>>>> dev
    $expected = [
      'formats' => [
        'plain_text' => [
          'format' => 'plain_text',
          'editor' => 'unicorn',
          'editorSettings' => ['ponyModeEnabled' => TRUE],
          'editorSupportsContentFiltering' => TRUE,
          'isXssSafe' => FALSE,
        ],
      ],
    ];
    $this->assertTrue($editor_settings_present, "Text Editor module's JavaScript settings are on the page.");
<<<<<<< HEAD
    $this->assertIdentical($expected, $settings['editor'], "Text Editor module's JavaScript settings on the page are correct.");
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript is present.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertCount(0, $format_selector, 'No text format selector exists on the page.');
    $hidden_input = $this->xpath('//input[@type="hidden" and @value="plain_text" and @data-editor-for="edit-body-0-value"]');
    $this->assertCount(1, $hidden_input, 'A single text format hidden input exists on the page and has a "data-editor-for" attribute with the correct value.');
=======
    $this->assertSame($expected, $settings['editor'], "Text Editor module's JavaScript settings on the page are correct.");
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript is present.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertSession()->elementNotExists('css', 'select.js-filter-list');
    // Verify that a single text format hidden input exists on the page and has
    // a "data-editor-for" attribute with the correct value.
    $hidden_input = $this->assertSession()->hiddenFieldExists('body[0][format]');
    $this->assertSame('plain_text', $hidden_input->getValue());
    $this->assertSame('edit-body-0-value', $hidden_input->getAttribute('data-editor-for'));
>>>>>>> dev

    // Create an "article" node that uses the full_html text format, then try
    // to let the untrusted user edit it.
    $this->drupalCreateNode([
      'type' => 'article',
      'body' => [
        ['value' => $this->randomMachineName(32), 'format' => 'full_html'],
      ],
    ]);

    // The untrusted user tries to edit content that is written in a text format
    // that they are not allowed to use. The editor is still loaded. CKEditor,
    // for example, supports being loaded in a disabled state.
    $this->drupalGet('node/1/edit');
<<<<<<< HEAD
    list(, $editor_settings_present, $editor_js_present, $body, $format_selector) = $this->getThingsToCheck('body');
    $this->assertTrue($editor_settings_present, 'Text Editor module settings.');
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertFieldByXPath('//textarea[@id="edit-body-0-value" and @disabled="disabled"]', t('This field has been disabled because you do not have sufficient permissions to edit it.'), 'Text format access denied message found.');
    $this->assertCount(0, $format_selector, 'No text format selector exists on the page.');
    $hidden_input = $this->xpath('//input[@type="hidden" and contains(@class, "editor")]');
    $this->assertCount(0, $hidden_input, 'A single text format hidden input does not exist on the page.');
  }

  /**
   * Test supported element types.
=======
    list(, $editor_settings_present, $editor_js_present, $body) = $this->getThingsToCheck('body');
    $this->assertTrue($editor_settings_present, 'Text Editor module settings.');
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript.');
    $this->assertCount(1, $body, 'A body field exists.');
    $this->assertSession()->fieldDisabled("edit-body-0-value");
    $this->assertSession()->fieldValueEquals("edit-body-0-value", 'This field has been disabled because you do not have sufficient permissions to edit it.');
    $this->assertSession()->elementNotExists('css', 'select.js-filter-list');
    // Verify that no single text format hidden input exists on the page.
    $this->assertSession()->elementNotExists('xpath', '//input[@type="hidden" and contains(@class, "editor")]');
  }

  /**
   * Tests supported element types.
>>>>>>> dev
   */
  public function testSupportedElementTypes() {
    // Associate the unicorn text editor with the "Full HTML" text format.
    $editor = Editor::create([
      'format' => 'full_html',
      'editor' => 'unicorn',
      'image_upload' => [
        'status' => FALSE,
        'scheme' => 'public',
        'directory' => 'inline-images',
        'max_size' => '',
        'max_dimensions' => ['width' => '', 'height' => ''],
      ],
    ]);
    $editor->save();

<<<<<<< HEAD
    // Create an "page" node that uses the full_html text format.
=======
    // Create a "page" node that uses the full_html text format.
>>>>>>> dev
    $this->drupalCreateNode([
      'type' => 'page',
      'field_text' => [
        ['value' => $this->randomMachineName(32), 'format' => 'full_html'],
      ],
    ]);

    // Assert the unicorn editor works with textfields.
    $this->drupalLogin($this->privilegedUser);
    $this->drupalGet('node/1/edit');
<<<<<<< HEAD
    list(, $editor_settings_present, $editor_js_present, $field, $format_selector) = $this->getThingsToCheck('field-text', 'input');
    $this->assertTrue($editor_settings_present, "Text Editor module's JavaScript settings are on the page.");
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript is present.');
    $this->assertCount(1, $field, 'A text field exists.');
    $this->assertCount(1, $format_selector, 'A single text format selector exists on the page.');
    $specific_format_selector = $this->xpath('//select[contains(@class, "filter-list") and contains(@class, "editor") and @data-editor-for="edit-field-text-0-value"]');
    $this->assertCount(1, $specific_format_selector, 'A single text format selector exists on the page and has the "editor" class and a "data-editor-for" attribute with the correct value.');
=======
    list(, $editor_settings_present, $editor_js_present, $field) = $this->getThingsToCheck('field-text', 'input');
    $this->assertTrue($editor_settings_present, "Text Editor module's JavaScript settings are on the page.");
    $this->assertTrue($editor_js_present, 'Text Editor JavaScript is present.');
    $this->assertCount(1, $field, 'A text field exists.');
    // Verify that a single text format selector exists on the page and has the
    // "editor" class and a "data-editor-for" attribute with the correct value.
    $this->assertSession()->elementsCount('css', 'select.js-filter-list', 1);
    $select = $this->assertSession()->elementExists('css', 'select.js-filter-list');
    $this->assertStringContainsString('editor', $select->getAttribute('class'));
    $this->assertSame('edit-field-text-0-value', $select->getAttribute('data-editor-for'));
>>>>>>> dev

    // Associate the trex text editor with the "Full HTML" text format.
    $editor->delete();
    Editor::create([
      'format' => 'full_html',
      'editor' => 'trex',
    ])->save();

    $this->drupalGet('node/1/edit');
<<<<<<< HEAD
    list(, $editor_settings_present, $editor_js_present, $field, $format_selector) = $this->getThingsToCheck('field-text', 'input');
    $this->assertFalse($editor_settings_present, "Text Editor module's JavaScript settings are not on the page.");
    $this->assertFalse($editor_js_present, 'Text Editor JavaScript is not present.');
    $this->assertCount(1, $field, 'A text field exists.');
    $this->assertCount(1, $format_selector, 'A single text format selector exists on the page.');
    $specific_format_selector = $this->xpath('//select[contains(@class, "filter-list") and contains(@class, "editor") and @data-editor-for="edit-field-text-0-value"]');
    $this->assertCount(0, $specific_format_selector, 'No text format selector exists on the page with the "editor" class and a "data-editor-for" attribute with the expected value.');
=======
    list(, $editor_settings_present, $editor_js_present, $field) = $this->getThingsToCheck('field-text', 'input');
    $this->assertFalse($editor_settings_present, "Text Editor module's JavaScript settings are not on the page.");
    $this->assertFalse($editor_js_present, 'Text Editor JavaScript is not present.');
    $this->assertCount(1, $field, 'A text field exists.');
    // Verify that a single text format selector exists on the page but without
    // the "editor" class or a "data-editor-for" attribute with the expected
    // value.
    $this->assertSession()->elementsCount('css', 'select.js-filter-list', 1);
    $select = $this->assertSession()->elementExists('css', 'select.js-filter-list');
    $this->assertStringNotContainsString('editor', $select->getAttribute('class'));
    $this->assertNotSame('edit-field-text-0-value', $select->getAttribute('data-editor-for'));
>>>>>>> dev
  }

  protected function getThingsToCheck($field_name, $type = 'textarea') {
    $settings = $this->getDrupalSettings();
    return [
      // JavaScript settings.
      $settings,
      // Editor.module's JS settings present.
      isset($settings['editor']),
      // Editor.module's JS present.
      strpos($this->getSession()->getPage()->getContent(), drupal_get_path('module', 'editor') . '/js/editor.js') !== FALSE,
      // Body field.
      $this->xpath('//' . $type . '[@id="edit-' . $field_name . '-0-value"]'),
<<<<<<< HEAD
      // Format selector.
      $this->xpath('//select[contains(@class, "filter-list")]'),
=======
>>>>>>> dev
    ];
  }

}
