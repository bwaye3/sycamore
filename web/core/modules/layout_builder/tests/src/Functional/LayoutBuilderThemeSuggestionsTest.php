<?php

namespace Drupal\Tests\layout_builder\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests template suggestions.
 *
 * @group layout_builder
 */
class LayoutBuilderThemeSuggestionsTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'layout_builder',
    'node',
    'layout_builder_theme_suggestions_test',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->createContentType([
      'type' => 'bundle_with_section_field',
      'name' => 'Bundle with section field',
    ]);
    $this->createNode([
      'type' => 'bundle_with_section_field',
      'title' => 'A node title',
      'body' => [
        [
          'value' => 'This is content that the template should not render',
        ],
      ],
    ]);

    $this->drupalLogin($this->drupalCreateUser([
      'configure any layout',
      'administer node display',
    ]));

    $this->drupalGet('admin/structure/types/manage/bundle_with_section_field/display/default');
<<<<<<< HEAD
    $this->drupalPostForm(NULL, ['layout[enabled]' => TRUE], 'Save');
=======
    $this->submitForm(['layout[enabled]' => TRUE], 'Save');
>>>>>>> dev
  }

  /**
   * Tests alterations of the layout list via preprocess functions.
   */
  public function testLayoutListSuggestion() {
    $page = $this->getSession()->getPage();
    $assert_session = $this->assertSession();

    $this->drupalGet('admin/structure/types/manage/bundle_with_section_field/display/default/layout');
    $page->clickLink('Add section');
    $assert_session->pageTextContains('layout_builder_theme_suggestions_test_preprocess_item_list__layouts');
  }

  /**
   * Tests that of view mode specific field templates are suggested.
   */
  public function testFieldBlockViewModeTemplates() {
    $assert_session = $this->assertSession();

    $this->drupalGet('node/1');
    // Confirm that content is displayed by layout builder.
    $assert_session->elementExists('css', '.block-layout-builder');
    // Text that only appears in the view mode specific template.
    $assert_session->pageTextContains('I am a field template for a specific view mode!');
    // The content of the body field should not be visible because it is
    // displayed via a template that does not render it.
    $assert_session->pageTextNotContains('This is content that the template should not render');
  }

}
