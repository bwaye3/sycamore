<?php

namespace Drupal\Tests\migrate_drupal_ui\Functional\d7;

use Drupal\node\Entity\Node;
use Drupal\Tests\migrate_drupal_ui\Functional\MigrateUpgradeExecuteTestBase;
<<<<<<< HEAD
use Drupal\user\Entity\User;
=======

// cspell:ignore Multiupload Imagefield
>>>>>>> dev

/**
 * Tests Drupal 7 upgrade using the migrate UI.
 *
 * The test method is provided by the MigrateUpgradeTestBase class.
 *
 * @group migrate_drupal_ui
<<<<<<< HEAD
 *
 * @group legacy
=======
>>>>>>> dev
 */
class Upgrade7Test extends MigrateUpgradeExecuteTestBase {

  /**
<<<<<<< HEAD
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'file',
    'language',
    'config_translation',
    'content_translation',
    'migrate_drupal_ui',
    'telephone',
    'aggregator',
    'book',
    'forum',
    'rdf',
    'statistics',
    'migration_provider_test',
=======
   * {@inheritdoc}
   */
  protected static $modules = [
    'aggregator',
    'book',
    'config_translation',
    'content_translation',
    'forum',
    'language',
    'migrate_drupal_ui',
    'statistics',
    'telephone',
>>>>>>> dev
  ];

  /**
   * The entity storage for node.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $nodeStorage;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Delete the existing content made to test the ID Conflict form. Migrations
    // are to be done on a site without content. The test of the ID Conflict
    // form is being moved to its own issue which will remove the deletion
    // of the created nodes.
    // See https://www.drupal.org/project/drupal/issues/3087061.
    $this->nodeStorage = $this->container->get('entity_type.manager')
      ->getStorage('node');
    $this->nodeStorage->delete($this->nodeStorage->loadMultiple());

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
  protected function getEntityCounts() {
    return [
      'aggregator_item' => 11,
      'aggregator_feed' => 1,
      'block' => 25,
      'block_content' => 1,
      'block_content_type' => 1,
      'comment' => 4,
      // The 'standard' profile provides the 'comment' comment type, and the
      // migration creates 6 comment types, one per node type.
<<<<<<< HEAD
      'comment_type' => 8,
=======
      'comment_type' => 9,
>>>>>>> dev
      // Module 'language' comes with 'en', 'und', 'zxx'. Migration adds 'is'
      // and 'fr'.
      'configurable_language' => 5,
      'contact_form' => 3,
      'contact_message' => 0,
      'editor' => 2,
<<<<<<< HEAD
      'field_config' => 81,
      'field_storage_config' => 62,
      'file' => 3,
      'filter_format' => 7,
      'image_style' => 6,
      'language_content_settings' => 20,
      'node' => 7,
      'node_type' => 7,
=======
      'field_config' => 89,
      'field_storage_config' => 68,
      'file' => 3,
      'filter_format' => 7,
      'image_style' => 7,
      'language_content_settings' => 22,
      'node' => 7,
      'node_type' => 8,
>>>>>>> dev
      'rdf_mapping' => 8,
      'search_page' => 2,
      'shortcut' => 6,
      'shortcut_set' => 2,
      'action' => 19,
<<<<<<< HEAD
      'menu' => 6,
      'taxonomy_term' => 24,
      'taxonomy_vocabulary' => 7,
      'path_alias' => 8,
      'tour' => 5,
=======
      'menu' => 7,
      'taxonomy_term' => 25,
      'taxonomy_vocabulary' => 8,
      'path_alias' => 8,
      'tour' => 6,
>>>>>>> dev
      'user' => 4,
      'user_role' => 3,
      'menu_link_content' => 12,
      'view' => 16,
      'date_format' => 11,
<<<<<<< HEAD
      'entity_form_display' => 22,
      'entity_form_mode' => 1,
      'entity_view_display' => 33,
=======
      'entity_form_display' => 24,
      'entity_form_mode' => 1,
      'entity_view_display' => 37,
>>>>>>> dev
      'entity_view_mode' => 14,
      'base_field_override' => 4,
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getEntityCountsIncremental() {
    $counts = $this->getEntityCounts();
    $counts['block_content'] = 2;
    $counts['comment'] = 5;
    $counts['file'] = 4;
    $counts['menu_link_content'] = 13;
    $counts['node'] = 8;
<<<<<<< HEAD
    $counts['taxonomy_term'] = 25;
=======
    $counts['taxonomy_term'] = 26;
>>>>>>> dev
    $counts['user'] = 5;
    return $counts;
  }

  /**
   * {@inheritdoc}
   */
  protected function getAvailablePaths() {
    return [
<<<<<<< HEAD
      'aggregator',
      'block',
      'book',
      'color',
      'comment',
      'contact',
      'ctools',
      'date',
      'dblog',
      'email',
      'entity_translation',
      'entityreference',
      'field',
      'field_sql_storage',
      'file',
      'filter',
      'forum',
      'i18n_block',
      'i18n_sync',
      'i18n_variable',
      'image',
      'link',
      'list',
      'menu',
      'node',
      'number',
      'options',
      'path',
      'phone',
      'rdf',
      'search',
      'shortcut',
      'statistics',
      'system',
      'taxonomy',
      'text',
      'title',
      'user',
      // Include modules that do not have an upgrade path and are enabled in the
      // source database.
      'blog',
      'contextual',
      'date_api',
      'entity',
      'field_ui',
      'help',
      'php',
      'simpletest',
      'toolbar',
      'translation',
      'trigger',
=======
      'Aggregator',
      'Block languages',
      'Block',
      'Book',
      'Chaos tools',
      'Color',
      'Comment',
      'Contact',
      'Content translation',
      'Database logging',
      'Date',
      'Email',
      'Entity Reference',
      'Entity Translation',
      'Field SQL storage',
      'Field translation',
      'Field',
      'File',
      'Filter',
      'Forum',
      'Image',
      'Internationalization',
      'Locale',
      'Link',
      'List',
      'Menu',
      'Menu translation',
      'Multiupload Filefield Widget',
      'Multiupload Imagefield Widget',
      'Node',
      'Node Reference',
      'Number',
      'Options',
      'Path',
      'Phone',
      'RDF',
      'Search',
      'Shortcut',
      'Statistics',
      'String translation',
      'Synchronize translations',
      'System',
      'Taxonomy translation',
      'Taxonomy',
      'Telephone',
      'Text',
      'Title',
      'User',
      'User Reference',
      'Variable translation',
      // Include modules that do not have an upgrade path and are enabled in the
      // source database.
      'Blog',
      'Contextual links',
      'Date API',
      'Entity API',
      'Field UI',
      'Help',
      'PHP filter',
      'Testing',
      'Toolbar',
      'Trigger',
>>>>>>> dev
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getMissingPaths() {
    return [
<<<<<<< HEAD
      'i18n',
      'i18n_field',
      'i18n_string',
      'i18n_taxonomy',
      'i18n_translation',
      'locale',
      'variable',
      'variable_realm',
      'variable_store',
      // These modules are in the missing path list because they are installed
      // on the source site but they are not installed on the destination site.
      'syslog',
      'tracker',
      'update',
=======
      'References',
      'Translation sets',
      'Variable realm',
      'Variable store',
      'Variable',
      // These modules are in the missing path list because they are installed
      // on the source site but they are not installed on the destination site.
      'Syslog',
      'Tracker',
      'Update manager',
>>>>>>> dev
    ];
  }

  /**
   * Executes all steps of migrations upgrade.
   */
<<<<<<< HEAD
  public function testMigrateUpgradeExecute() {
    parent::testMigrateUpgradeExecute();

    // Ensure migrated users can log in.
    $user = User::load(2);
    $user->passRaw = 'a password';
    $this->drupalLogin($user);
=======
  public function testUpgradeAndIncremental() {
    // Perform upgrade followed by an incremental upgrade.
    $this->doUpgradeAndIncremental();

    // Ensure a migrated user can log in.
    $this->assertUserLogIn(2, 'a password');

>>>>>>> dev
    $this->assertFollowUpMigrationResults();
  }

  /**
   * Tests that follow-up migrations have been run successfully.
   */
  protected function assertFollowUpMigrationResults() {
    $node = Node::load(2);
    $this->assertSame('4', $node->get('field_reference')->target_id);
    $this->assertSame('4', $node->get('field_reference_2')->target_id);
    $translation = $node->getTranslation('is');
    $this->assertSame('4', $translation->get('field_reference')->target_id);
    $this->assertSame('4', $translation->get('field_reference_2')->target_id);

    $node = Node::load(4);
    $this->assertSame('2', $node->get('field_reference')->target_id);
    $this->assertSame('2', $node->get('field_reference_2')->target_id);
    $translation = $node->getTranslation('en');
    $this->assertSame('2', $translation->get('field_reference')->target_id);
    $this->assertSame('2', $translation->get('field_reference_2')->target_id);

  }

}
