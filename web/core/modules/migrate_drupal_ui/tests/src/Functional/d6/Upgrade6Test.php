<?php

namespace Drupal\Tests\migrate_drupal_ui\Functional\d6;

use Drupal\node\Entity\Node;
use Drupal\Tests\migrate_drupal_ui\Functional\MigrateUpgradeExecuteTestBase;
<<<<<<< HEAD
use Drupal\user\Entity\User;
=======
>>>>>>> dev

/**
 * Tests Drupal 6 upgrade using the migrate UI.
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
class Upgrade6Test extends MigrateUpgradeExecuteTestBase {

  /**
<<<<<<< HEAD
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = [
    'language',
    'content_translation',
    'config_translation',
    'migrate_drupal_ui',
    'telephone',
    'aggregator',
    'book',
    'forum',
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
    'update',
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

    $this->loadFixture(drupal_get_path('module', 'migrate_drupal') . '/tests/fixtures/drupal6.php');
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
      'aggregator_item' => 1,
      'aggregator_feed' => 2,
      'block' => 34,
      'block_content' => 2,
      'block_content_type' => 1,
      'comment' => 8,
      // The 'standard' profile provides the 'comment' comment type, and the
      // migration creates 12 comment types, one per node type.
<<<<<<< HEAD
      'comment_type' => 13,
=======
      'comment_type' => 14,
>>>>>>> dev
      'contact_form' => 5,
      'contact_message' => 0,
      'configurable_language' => 5,
      'editor' => 2,
<<<<<<< HEAD
      'field_config' => 95,
      'field_storage_config' => 66,
      'file' => 7,
      'filter_format' => 7,
      'image_style' => 5,
=======
      'field_config' => 103,
      'field_storage_config' => 71,
      'file' => 7,
      'filter_format' => 7,
      'image_style' => 6,
>>>>>>> dev
      'language_content_settings' => 15,
      'node' => 18,
      // The 'book' module provides the 'book' node type, and the migration
      // creates 12 node types.
<<<<<<< HEAD
      'node_type' => 13,
=======
      'node_type' => 14,
>>>>>>> dev
      'rdf_mapping' => 7,
      'search_page' => 2,
      'shortcut' => 2,
      'shortcut_set' => 1,
      'action' => 25,
      'menu' => 8,
      'path_alias' => 8,
      'taxonomy_term' => 15,
      'taxonomy_vocabulary' => 7,
<<<<<<< HEAD
      'tour' => 5,
=======
      'tour' => 6,
>>>>>>> dev
      'user' => 7,
      'user_role' => 6,
      'menu_link_content' => 10,
      'view' => 16,
      'date_format' => 11,
<<<<<<< HEAD
      'entity_form_display' => 29,
      'entity_form_mode' => 1,
      'entity_view_display' => 58,
      'entity_view_mode' => 14,
      'base_field_override' => 38,
=======
      'entity_form_display' => 31,
      'entity_form_mode' => 1,
      'entity_view_display' => 61,
      'entity_view_mode' => 14,
      'base_field_override' => 41,
>>>>>>> dev
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getEntityCountsIncremental() {
    $counts = $this->getEntityCounts();
    $counts['block_content'] = 3;
    $counts['comment'] = 9;
<<<<<<< HEAD
    $counts['entity_view_display'] = 58;
=======
    $counts['entity_view_display'] = 61;
>>>>>>> dev
    $counts['entity_view_mode'] = 14;
    $counts['file'] = 8;
    $counts['menu_link_content'] = 11;
    $counts['node'] = 19;
    $counts['taxonomy_term'] = 16;
    $counts['user'] = 8;
    $counts['view'] = 16;
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
      'comment',
      'contact',
      'content',
      'date',
      'email',
      'filefield',
      'filter',
      'forum',
      'i18nblocks',
      'i18ncontent',
      'i18nmenu',
      'i18nprofile',
      'i18nsync',
      'imagecache',
      'imagefield',
      'menu',
      'node',
      'nodereference',
      'optionwidgets',
      'path',
      'search',
      'statistics',
      'system',
      'taxonomy',
      'text',
      'translation',
      'upload',
      'user',
      'userreference',
      // Include modules that do not have an upgrade path and are enabled in the
      // source database'.
      'date_api',
      'date_timezone',
      'event',
      'imageapi',
      'number',
      'php',
      'profile',
      'variable_admin',
=======
      'Aggregator',
      'Block',
      'Block translation',
      'Book',
      'CCK translation',
      'Comment',
      'Contact',
      'Content',
      'Content translation',
      'Content type translation',
      'Date',
      'Email',
      'FileField',
      'Filter',
      'Forum',
      'ImageCache',
      'ImageField',
      'Internationalization',
      'Locale',
      'Menu',
      'Menu translation',
      'Node',
      'Node Reference',
      'Option Widgets',
      'Path',
      'Profile translation',
      'Search',
      'Statistics',
      'String translation',
      'Synchronize translations',
      'System',
      'Taxonomy',
      'Taxonomy translation',
      'Text',
      'Update status',
      'Upload',
      'User',
      'User Reference',
      // Include modules that do not have an upgrade path and are enabled in the
      // source database'.
      'Date API',
      'Date Timezone',
      'Event',
      'ImageAPI',
      'Number',
      'PHP filter',
      'Profile',
      'Variable admin',
>>>>>>> dev
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getMissingPaths() {
<<<<<<< HEAD
    return [
      'i18n',
      'i18ncck',
      'i18nstrings',
      'i18ntaxonomy',
      'locale',
    ];
=======
    return [];
>>>>>>> dev
  }

  /**
   * Executes all steps of migrations upgrade.
   */
<<<<<<< HEAD
  public function testMigrateUpgradeExecute() {
    parent::testMigrateUpgradeExecute();

    // Ensure migrated users can log in.
    $user = User::load(2);
    $user->passRaw = 'john.doe_pass';
    $this->drupalLogin($user);
=======
  public function testUpgradeAndIncremental() {
    // Perform upgrade followed by an incremental upgrade.
    $this->doUpgradeAndIncremental();

    // Ensure a migrated user can log in.
    $this->assertUserLogIn(2, 'john.doe_pass');

>>>>>>> dev
    $this->assertFollowUpMigrationResults();
  }

  /**
   * Tests that follow-up migrations have been run successfully.
   */
  protected function assertFollowUpMigrationResults() {
    $node = Node::load(10);
    $this->assertSame('12', $node->get('field_reference')->target_id);
    $this->assertSame('12', $node->get('field_reference_2')->target_id);
    $translation = $node->getTranslation('fr');
    $this->assertSame('12', $translation->get('field_reference')->target_id);
    $this->assertSame('12', $translation->get('field_reference_2')->target_id);

    $node = Node::load(12)->getTranslation('en');
    $this->assertSame('10', $node->get('field_reference')->target_id);
    $this->assertSame('10', $node->get('field_reference_2')->target_id);
    $translation = $node->getTranslation('fr');
    $this->assertSame('10', $translation->get('field_reference')->target_id);
    $this->assertSame('10', $translation->get('field_reference_2')->target_id);
  }

}
