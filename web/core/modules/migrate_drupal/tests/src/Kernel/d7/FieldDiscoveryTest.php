<?php

namespace Drupal\Tests\migrate_drupal\Kernel\d7;

use Drupal\comment\Entity\CommentType;
<<<<<<< HEAD
use Drupal\Component\Plugin\Exception\PluginNotFoundException;
use Drupal\field\Plugin\migrate\source\d7\FieldInstance;
use Drupal\migrate_drupal\FieldDiscovery;
use Drupal\migrate_drupal\FieldDiscoveryInterface;
use Drupal\migrate_drupal\Plugin\MigrateFieldPluginManagerInterface;
=======
use Drupal\field\Plugin\migrate\source\d7\FieldInstance;
use Drupal\migrate_drupal\FieldDiscoveryInterface;
>>>>>>> dev
use Drupal\node\Entity\NodeType;
use Drupal\taxonomy\Entity\Vocabulary;
use Drupal\Tests\migrate_drupal\Traits\FieldDiscoveryTestTrait;
use Drupal\field_discovery_test\FieldDiscoveryTestClass;

<<<<<<< HEAD
=======
// cspell:ignore imagelink

>>>>>>> dev
/**
 * Test FieldDiscovery Service against Drupal 7.
 *
 * @group migrate_drupal
 * @coversDefaultClass \Drupal\migrate_drupal\FieldDiscovery
 */
class FieldDiscoveryTest extends MigrateDrupal7TestBase {

  use FieldDiscoveryTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'comment',
    'datetime',
    'file',
    'image',
    'link',
    'node',
    'system',
    'taxonomy',
    'telephone',
    'text',
  ];

  /**
   * The Field discovery service.
   *
   * @var \Drupal\migrate_drupal\FieldDiscoveryInterface
   */
  protected $fieldDiscovery;

  /**
   * The field plugin manager.
   *
   * @var \Drupal\migrate_drupal\Plugin\MigrateFieldPluginManagerInterface
   */
  protected $fieldPluginManager;

  /**
   * The migration plugin manager.
   *
   * @var \Drupal\migrate\Plugin\MigrationPluginManagerInterface
   */
  protected $migrationPluginManager;

  /**
   * The logger.
   *
   * @var \Drupal\Core\Logger\LoggerChannelInterface
   */
  protected $logger;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function setUp() {
=======
  public function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installConfig(static::$modules);
    $node_types = [
      'page' => 'comment_node_page',
      'article' => 'comment_node_article',
      'blog' => 'comment_node_blog',
      'book' => 'comment_node_book',
      'et' => 'comment_node_et',
      'forum' => 'comment_forum',
      'test_content_type' => 'comment_node_test_content_type',
<<<<<<< HEAD
=======
      'a_thirty_two_character_type_name' => 'a_thirty_two_character_type_name',
>>>>>>> dev
    ];
    foreach ($node_types as $node_type => $comment_type) {
      NodeType::create([
        'type' => $node_type,
        'label' => $this->randomString(),
      ])->save();

      CommentType::create([
        'id' => $comment_type,
        'label' => $this->randomString(),
        'target_entity_type_id' => 'node',
      ])->save();
    }

    Vocabulary::create(['vid' => 'test_vocabulary'])->save();
    $this->executeMigrations([
      'd7_field',
<<<<<<< HEAD
=======
      'd7_comment_type',
>>>>>>> dev
      'd7_taxonomy_vocabulary',
      'd7_field_instance',
    ]);

    $this->fieldDiscovery = $this->container->get('migrate_drupal.field_discovery');
    $this->migrationPluginManager = $this->container->get('plugin.manager.migration');
    $this->fieldPluginManager = $this->container->get('plugin.manager.migrate.field');
    $this->logger = $this->container->get('logger.channel.migrate_drupal');
  }

  /**
   * Tests the addAllFieldProcesses method.
   *
   * @covers ::addAllFieldProcesses
   */
  public function testAddAllFieldProcesses() {
    $expected_process_keys = [
      'comment_body',
      'field_integer',
      'body',
      'field_text_plain',
      'field_text_filtered',
      'field_text_plain_filtered',
      'field_text_long_plain',
      'field_text_long_filtered',
      'field_text_long_plain_filtered',
      'field_text_sum_plain',
      'field_text_sum_filtered',
      'field_text_sum_plain_filtered',
      'field_tags',
      'field_image',
      'field_link',
      'field_reference',
      'field_reference_2',
      'taxonomy_forums',
      'field_boolean',
      'field_email',
      'field_phone',
      'field_date',
      'field_date_with_end_time',
      'field_file',
      'field_float',
      'field_images',
      'field_text_list',
      'field_integer_list',
      'field_long_text',
      'field_term_reference',
      'field_text',
      'field_node_entityreference',
      'field_user_entityreference',
      'field_term_entityreference',
<<<<<<< HEAD
=======
      'field_node_reference',
      'field_user_reference',
>>>>>>> dev
      'field_private_file',
      'field_datetime_without_time',
      'field_date_without_time',
      'field_float_list',
      'field_training',
      'field_sector',
      'field_chancellor',
    ];
    $this->assertFieldProcessKeys($this->fieldDiscovery, $this->migrationPluginManager, '7', $expected_process_keys);
  }

  /**
   * Tests the addAllFieldProcesses method for field migrations.
   *
   * @covers ::addAllFieldProcesses
   * @dataProvider addAllFieldProcessesAltersData
   */
  public function testAddAllFieldProcessesAlters($field_plugin_method, $expected_process) {
    $this->assertFieldProcess($this->fieldDiscovery, $this->migrationPluginManager, FieldDiscoveryInterface::DRUPAL_7, $field_plugin_method, $expected_process);
  }

  /**
   * Provides data for testAddAllFieldProcessesAlters.
   *
   * @return array
   *   The data.
   */
  public function addAllFieldProcessesAltersData() {
    return [
      'Field Instance' => [
        'field_plugin_method' => 'alterFieldInstanceMigration',
        'expected_process' => [
          'settings/title' => [
            0 => [
              'plugin' => 'static_map',
              'source' => 'settings/title',
              'bypass' => TRUE,
              'map' => [
                'disabled' => 0,
                'optional' => 1,
                'required' => 2,
              ],
            ],
          ],
        ],
      ],
      'Field Formatter' => [
        'field_plugin_method' => 'alterFieldFormatterMigration',
        'expected_process' => [
          'options/type' => [
            0 => [
              'map' => [
                'taxonomy_term_reference' => [
                  'taxonomy_term_reference_link' => 'entity_reference_label',
                  'taxonomy_term_reference_plain' => 'entity_reference_label',
                  'taxonomy_term_reference_rss_category' => 'entity_reference_label',
                  'i18n_taxonomy_term_reference_link' => 'entity_reference_label',
                  'entityreference_entity_view' => 'entity_reference_entity_view',
                ],
                'link_field' => [
                  'link_default' => 'link',
<<<<<<< HEAD
=======
                  'link_title_plain' => 'link',
                  'link_host' => 'link',
                  'link_url' => 'link',
                  'link_plain' => 'link',
                  'link_absolute' => 'link',
                  'link_domain' => 'link',
                  'link_no_protocol' => 'link',
                  'link_short' => 'link',
                  'link_label' => 'link',
                  'link_separate' => 'link_separate',
>>>>>>> dev
                ],
                'entityreference' => [
                  'entityreference_label' => 'entity_reference_label',
                  'entityreference_entity_id' => 'entity_reference_entity_id',
                  'entityreference_entity_view' => 'entity_reference_entity_view',
                ],
<<<<<<< HEAD
=======
                'node_reference' => [
                  'node_reference_default' => 'entity_reference_label',
                  'node_reference_plain' => 'entity_reference_label',
                  'node_reference_nid' => 'entity_reference_entity_id',
                  'node_reference_node' => 'entity_reference_entity_view',
                  'node_reference_path' => 'entity_reference_label',
                ],
                'user_reference' => [
                  'user_reference_default' => 'entity_reference_label',
                  'user_reference_plain' => 'entity_reference_label',
                  'user_reference_uid' => 'entity_reference_entity_id',
                  'user_reference_user' => 'entity_reference_entity_view',
                  'user_reference_path' => 'entity_reference_label',
                ],
                'file' => [
                  'default' => 'file_default',
                  'url_plain' => 'file_url_plain',
                  'path_plain' => 'file_url_plain',
                  'image_plain' => 'image',
                  'image_nodelink' => 'image',
                  'image_imagelink' => 'image',
                ],
>>>>>>> dev
                'email' => [
                  'email_formatter_default' => 'email_mailto',
                  'email_formatter_contact' => 'basic_string',
                  'email_formatter_plain' => 'basic_string',
                  'email_formatter_spamspan' => 'basic_string',
                  'email_default' => 'email_mailto',
                  'email_contact' => 'basic_string',
                  'email_plain' => 'basic_string',
                  'email_spamspan' => 'basic_string',
                ],
                'phone' => [
                  'phone' => 'basic_string',
                ],
                'datetime' => [
                  'date_default' => 'datetime_default',
<<<<<<< HEAD
                ],
                'file' => [
                  'default' => 'file_default',
                  'url_plain' => 'file_url_plain',
                  'path_plain' => 'file_url_plain',
                  'image_plain' => 'image',
                  'image_nodelink' => 'image',
                  'image_imagelink' => 'image',
=======
                  'format_interval' => 'datetime_time_ago',
                  'date_plain' => 'datetime_plain',
                ],
                'telephone' => [
                  'text_plain' => 'string',
                  'telephone_link' => 'telephone_link',
>>>>>>> dev
                ],
              ],
            ],
          ],
        ],
      ],
      'Field Widget' => [
        'field_plugin_method' => 'alterFieldWidgetMigration',
        'expected_process' => [
          'options/type' => [
            'type' => [
              'map' => [
                'd7_text' => 'd7_text_default',
                'number_default' => 'number_default_default',
                'taxonomy_term_reference' => 'taxonomy_term_reference_default',
                'image' => 'image_default',
<<<<<<< HEAD
                'link_field' => 'link_default',
                'entityreference' => 'entityreference_default',
                'list' => 'list_default',
=======
                'image_miw' => 'image_image',
                'link_field' => 'link_default',
                'entityreference' => 'entityreference_default',
                'node_reference_select' => 'options_select',
                'node_reference_buttons' => 'options_buttons',
                'node_reference_autocomplete' => 'entity_reference_autocomplete_tags',
                'user_reference_select' => 'options_select',
                'user_reference_buttons' => 'options_buttons',
                'user_reference_autocomplete' => 'entity_reference_autocomplete_tags',
                'list' => 'list_default',
                'file_mfw' => 'file_generic',
                'filefield_widget' => 'file_generic',
>>>>>>> dev
                'email_textfield' => 'email_default',
                'phone' => 'phone_default',
                'date' => 'datetime_default',
                'datetime' => 'datetime_default',
                'datestamp' => 'datetime_timestamp',
<<<<<<< HEAD
                'filefield_widget' => 'file_generic',
=======
>>>>>>> dev
              ],
            ],
          ],
        ],
      ],
    ];
  }

  /**
   * Tests the getAllFields method.
   *
   * @covers ::getAllFields
   */
  public function testGetAllFields() {
    $field_discovery_test = new FieldDiscoveryTestClass($this->fieldPluginManager, $this->migrationPluginManager, $this->logger);
    $actual_fields = $field_discovery_test->getAllFields('7');
    $this->assertSame(['comment', 'node', 'user', 'taxonomy_term'], array_keys($actual_fields));
    $this->assertArrayHasKey('test_vocabulary', $actual_fields['taxonomy_term']);
    $this->assertArrayHasKey('user', $actual_fields['user']);
    $this->assertArrayHasKey('test_content_type', $actual_fields['node']);
<<<<<<< HEAD
    $this->assertCount(7, $actual_fields['node']);
    $this->assertCount(7, $actual_fields['comment']);
    $this->assertCount(22, $actual_fields['node']['test_content_type']);
=======
    $this->assertCount(8, $actual_fields['node']);
    $this->assertCount(8, $actual_fields['comment']);
    $this->assertCount(23, $actual_fields['node']['test_content_type']);
>>>>>>> dev
    foreach ($actual_fields as $entity_type_id => $bundles) {
      foreach ($bundles as $bundle => $fields) {
        foreach ($fields as $field_name => $field_info) {
          $this->assertArrayHasKey('field_definition', $field_info);
          $this->assertEquals($entity_type_id, $field_info['entity_type']);
          $this->assertEquals($bundle, $field_info['bundle']);
        }
      }
    }
  }

  /**
   * Tests the getSourcePlugin method.
   *
   * @covers ::getSourcePlugin
   */
  public function testGetSourcePlugin() {
    $this->assertSourcePlugin('7', FieldInstance::class, [
      'requirements_met' => TRUE,
      'id' => 'd7_field_instance',
      'source_module' => 'field',
      'class' => 'Drupal\\field\\Plugin\\migrate\\source\\d7\\FieldInstance',
      'provider' => [
        0 => 'field',
        1 => 'migrate_drupal',
        2 => 'migrate',
        4 => 'core',
      ],
    ]);
  }

<<<<<<< HEAD
  /**
   * Tests the fallback to deprecated CCK Plugin Manager.
   *
   * @covers ::getCckPluginManager
   * @group legacy
   * @expectedDeprecation TextField is deprecated in Drupal 8.3.x and will be removed before Drupal 9.0.x. Use \Drupal\text\Plugin\migrate\field\d6\TextField or \Drupal\text\Plugin\migrate\field\d7\TextField instead.
   * @expectedDeprecation CckFieldPluginBase is deprecated in Drupal 8.3.x and will be be removed before Drupal 9.0.x. Use \Drupal\migrate_drupal\Plugin\migrate\field\FieldPluginBase instead.
   * @expectedDeprecation MigrateCckFieldInterface is deprecated in Drupal 8.3.x and will be removed before Drupal 9.0.x. Use \Drupal\migrate_drupal\Annotation\MigrateField instead.
   */
  public function testGetCckPluginManager() {
    $definition = [
      'migration_tags' => ['Drupal 7'],
    ];
    $migration = $this->migrationPluginManager->createStubMigration($definition);
    $field_plugin_manager = $this->prophesize(MigrateFieldPluginManagerInterface::class);
    $field_plugin_manager->getPluginIdFromFieldType('text_long', ['core' => '7'], $migration)->willThrow(PluginNotFoundException::class);
    $field_discovery = new FieldDiscovery($field_plugin_manager->reveal(), $this->migrationPluginManager, $this->logger);
    $field_discovery->addBundleFieldProcesses($migration, 'comment', 'comment_node_page');
    $actual_process = $migration->getProcess();
    $expected_process = [
      'comment_body' => [
        0 => [
          'plugin' => 'sub_process',
          'source' => 'comment_body',
          'process' => [
            'value' => 'value',
            'format' => [
              0 => [
                'plugin' => 'static_map',
                'bypass' => TRUE,
                'source' => 'format',
                'map' => [
                  0 => NULL,
                ],
              ],
              1 => [
                'plugin' => 'skip_on_empty',
                'method' => 'process',
              ],
              2 => [
                'plugin' => 'migration',
                'migration' => [
                  0 => 'd6_filter_format',
                  1 => 'd7_filter_format',
                ],
                'source' => 'format',
              ],
            ],
          ],
        ],
      ],
    ];
    $this->assertEquals($expected_process, $actual_process);
  }

=======
>>>>>>> dev
}
