<?php

namespace Drupal\Tests\migrate_drupal_ui\Functional\d6;

use Drupal\Tests\migrate_drupal_ui\Functional\MultilingualReviewPageTestBase;

/**
 * Tests migrate upgrade review page for Drupal 6.
 *
 * Tests with translation modules and migrate_drupal_multilingual enabled.
 *
 * @group migrate_drupal_6
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
    'config_translation',
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
    // Test missing migrate_drupal.yml.
<<<<<<< HEAD
    'migrate_state_no_file_test',
    // Test missing migrate_drupal.yml.
=======
>>>>>>> dev
    'migrate_state_no_upgrade_path',
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
  protected function getAvailablePaths() {
    return [
<<<<<<< HEAD
      // Aggregator is set not_finished in migrate_sate_not_finished_test.
      'aggregator',
      'blog',
      'blogapi',
      'book',
      'calendarsignup',
      'color',
      'comment',
      'contact',
      'content',
      'content_copy',
      'content_multigroup',
      'content_permissions',
      'date',
      'date_api',
      'date_locale',
      'date_php4',
      'date_popup',
      'date_repeat',
      'date_timezone',
      'date_tools',
      'datepicker',
      'dblog',
      'ddblock',
      'email',
      'event',
      'fieldgroup',
      'filefield',
      'filefield_meta',
      'filter',
      'forum',
      'help',
      'i18nblocks',
      'i18ncontent',
      'i18nmenu',
      'i18npoll',
      'i18nprofile',
      'i18nsync',
      'imageapi',
      'imageapi_gd',
      'imageapi_imagemagick',
      'imagecache',
      'imagecache_ui',
      'imagefield',
      'jquery_ui',
      'link',
      'menu',
      'node',
      'nodeaccess',
      'nodereference',
      'number',
      'openid',
      'optionwidgets',
      'path',
      'phone',
      'php',
      'ping',
      'poll',
      'profile',
      'search',
      'statistics',
      'syslog',
      'system',
      'taxonomy',
      'text',
      'throttle',
      'tracker',
      'translation',
      'trigger',
      'update',
      'upload',
      'user',
      'userreference',
      'variable',
      'variable_admin',
      'views_export',
      'views_ui',
=======
      'Aggregator',
      'Block translation',
      'Blog',
      'Blog API',
      'Book',
      'CCK translation',
      'Calendar Signup',
      'Color',
      'Comment',
      'Contact',
      'Content',
      'Content Copy',
      'Content Multigroup',
      'Content Permissions',
      'Content translation',
      'Content type translation',
      'Database logging',
      'Date',
      'Date API',
      'Date Locale',
      'Date PHP4',
      'Date Picker',
      'Date Popup',
      'Date Repeat API',
      'Date Timezone',
      'Date Tools',
      'Dynamic display block',
      'Email',
      'Event',
      'Fieldgroup',
      'FileField',
      'FileField Meta',
      'Filter',
      'Forum',
      'Help',
      'ImageAPI',
      'ImageAPI GD2',
      'ImageAPI ImageMagick',
      'ImageCache',
      'ImageCache UI',
      'ImageField',
      'Internationalization',
      'Link',
      'Locale',
      'Menu',
      'Menu translation',
      'Node',
      'Node Reference',
      'Nodeaccess',
      'Number',
      'OpenID',
      'Option Widgets',
      'PHP filter',
      'Path',
      'Phone - CCK',
      'Ping',
      'Poll',
      'Poll aggregate',
      'Profile',
      'Profile translation',
      'Search',
      'Statistics',
      'String translation',
      'Synchronize translations',
      'Syslog',
      'System',
      'Taxonomy translation',
      'Taxonomy',
      'Text',
      'Throttle',
      'Tracker',
      'Trigger',
      'Update status',
      'Upload',
      'User',
      'User Reference',
      'Variable API',
      'Variable admin',
      'Views UI',
      'Views exporter',
      'jQuery UI',
>>>>>>> dev
    ];
  }

  /**
   * {@inheritdoc}
   */
  protected function getMissingPaths() {
    return [
<<<<<<< HEAD
      // Block is set not_finished in migrate_sate_not_finished_test.
      'block',
      'devel',
      'devel_generate',
      'devel_node_access',
      'i18n',
      'i18ncck',
      'i18nstrings',
      'i18ntaxonomy',
      'i18nviews',
      'locale',
      'migrate_status_active_test',
      'views',
=======
      // Block is set not_finished in migrate_state_not_finished_test.
      'Block',
      'Devel',
      'Devel generate',
      'Devel node access',
      'Views',
      'Views translation',
      'migrate_status_active_test',
>>>>>>> dev
    ];
  }

}
