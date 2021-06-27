<?php

namespace Drupal\Tests\migrate_drupal_ui\Functional\d7;

use Drupal\Tests\migrate_drupal_ui\Functional\MultilingualReviewPageTestBase;

<<<<<<< HEAD
=======
// cspell:ignore Multiupload Imagefield

>>>>>>> dev
/**
 * Tests migrate upgrade review page for Drupal 7.
 *
 * Tests with translation modules and migrate_drupal_multilingual enabled.
 *
 * @group migrate_drupal_7
 * @group migrate_drupal_ui
<<<<<<< HEAD
 *
 * @group legacy
=======
>>>>>>> dev
 */
class MultilingualReviewPageTest extends MultilingualReviewPageTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'language',
    'content_translation',
    'telephone',
    'aggregator',
    'book',
    'forum',
    'statistics',
    'syslog',
    'tracker',
    'update',
    // Test migrations states.
    'migrate_state_finished_test',
    'migrate_state_not_finished_test',
<<<<<<< HEAD
    // Test missing migrate_drupal.yml.
    'migrate_state_no_file_test',
=======
>>>>>>> dev
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->loadFixture(drupal_get_path('module', 'migrate_drupal') . '/tests/fixtures/drupal7.php');
  }

  /**
   * {@inheritdoc}
   */
  protected function getSourceBasePath() {
    return __DIR__ . '/files';
  }

  /**
   * {@inheritdoc}
   */
  protected function getAvailablePaths() {
    return [
<<<<<<< HEAD
      'blog',
      'book',
      'bulk_export',
      'color',
      'comment',
      'contact',
      'contextual',
      'ctools',
      'ctools_access_ruleset',
      'ctools_ajax_sample',
      'ctools_custom_content',
      'dashboard',
      'date',
      'date_api',
      'date_all_day',
      'date_context',
      'date_migrate',
      'date_popup',
      'date_repeat',
      'date_repeat_field',
      'date_tools',
      'date_views',
      'dblog',
      'email',
      'entity',
      'entity_feature',
      'entity_token',
      'entity_translation',
      'entityreference',
      'field',
      'field_sql_storage',
      'field_ui',
      'file',
      'filter',
      'forum',
      'help',
      'i18n_block',
      'i18n_sync',
      'image',
      'link',
      'list',
      'locale',
      'menu',
      'number',
      'node',
      'openid',
      'options',
      'overlay',
      'page_manager',
      'path',
      'phone',
      'php',
      'poll',
      'profile',
      'rdf',
      'search',
      'search_embedded_form',
      'search_extra_type',
      'search_node_tags',
      'shortcut',
      'simpletest',
      'statistics',
      'stylizer',
      'syslog',
      'system',
      'taxonomy',
      'term_depth',
      'text',
      'title',
      'toolbar',
      'tracker',
      'translation',
      'trigger',
      'update',
      'user',
      'views_content',
      'views_ui',
=======
      'Block languages',
      'Blog',
      'Book',
      'Bulk Export',
      'Chaos tools',
      'Chaos Tools (CTools) AJAX Example',
      'Color',
      'Comment',
      'Contact',
      'Content translation',
      'Contextual links',
      'Custom content panes',
      'Custom rulesets',
      'Dashboard',
      'Database logging',
      'Date',
      'Date API',
      'Date All Day',
      'Date Context',
      'Date Migration',
      'Date Popup',
      'Date Repeat API',
      'Date Repeat Field',
      'Date Tools',
      'Date Views',
      'Email',
      'Entity API',
      'Entity Reference',
      'Entity Translation',
      'Entity feature module',
      'Entity tokens',
      'Field',
      'Field SQL storage',
      'Field UI',
      'File',
      'Filter',
      'Forum',
      'Help',
      'Image',
      'Internationalization',
      'Link',
      'List',
      'Locale',
      'Menu',
      'Menu translation',
      'Multiupload Filefield Widget',
      'Multiupload Imagefield Widget',
      'Node',
      'Node Reference',
      'Number',
      'OpenID',
      'Options',
      'Overlay',
      'PHP filter',
      'Page manager',
      'Path',
      'Phone',
      'Poll',
      'Profile',
      'RDF',
      'Search',
      'Search embedded form',
      'Shortcut',
      'Statistics',
      'String translation',
      'Stylizer',
      'Synchronize translations',
      'Syslog',
      'System',
      'Taxonomy translation',
      'Taxonomy',
      'Telephone',
      'Term Depth access',
      'Test search node tags',
      'Test search type',
      'Testing',
      'Text',
      'Title',
      'Toolbar',
      'Tracker',
      'Trigger',
      'Update manager',
      'User',
      'User Reference',
      'Views content panes',
      'Views UI',
>>>>>>> dev
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getMissingPaths() {
    return [
<<<<<<< HEAD
      // Action is set not_finished in migrate_sate_not_finished_test.
      // Aggregator is set not_finished in migrate_sate_not_finished_test.
      'aggregator',
      // Block is set not_finished in migrate_sate_not_finished_test.
      'block',
      'breakpoints',
      'entity_translation_i18n_menu',
      'entity_translation_upgrade',
      // Flexslider_picture is a sub module of Picture module. Only the
      // styles from picture are migrated.
      'flexslider_picture',
      'i18n',
      'i18n_contact',
      'i18n_field',
      'i18n_forum',
      'i18n_menu',
      'i18n_node',
      'i18n_path',
      'i18n_redirect',
      'i18n_select',
      'i18n_string',
      'i18n_taxonomy',
      'i18n_translation',
      'i18n_user',
      'i18n_variable',
      'picture',
      'migrate_status_active_test',
      'variable',
      'variable_admin',
      'variable_realm',
      'variable_store',
      'variable_views',
      'views',
=======
      // Action is set not_finished in migrate_state_not_finished_test.
      // Aggregator is set not_finished in migrate_state_not_finished_test.
      'Aggregator',
      // Block is set not_finished in migrate_state_not_finished_test.
      'Block',
      'Breakpoints',
      'Contact translation',
      'Entity Translation Menu',
      'Entity Translation Upgrade',
      'Field translation',
      // Flexslider_picture is a sub module of Picture module. Only the
      // styles from picture are migrated.
      'FlexSlider Picture',
      'Multilingual content',
      'Multilingual forum',
      'Multilingual select',
      'Path translation',
      'Picture',
      'References',
      'References UUID',
      'Translation redirect',
      'Translation sets',
      'User mail translation',
      'Variable',
      'Variable admin',
      'Variable realm',
      'Variable store',
      'Variable translation',
      'Variable views',
      'Views',
      'migrate_status_active_test',
>>>>>>> dev
    ];
  }

}
