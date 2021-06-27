<?php

namespace Drupal\Tests\options\Kernel\Views;

use Drupal\field\Entity\FieldStorageConfig;
use Drupal\field\Entity\FieldConfig;
use Drupal\Tests\views\Kernel\ViewsKernelTestBase;
use Drupal\views\Views;

/**
 * Tests file views data.
 *
 * @group file
 */
class FileViewsDataTest extends ViewsKernelTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['file', 'views', 'entity_test', 'user', 'field'];
=======
  protected static $modules = [
    'file',
    'views',
    'entity_test',
    'user',
    'field',
  ];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);
    $this->installEntitySchema('entity_test');
    $this->installEntitySchema('entity_test_mul');
  }

  /**
   * Tests views data generated for file field relationship.
   *
   * @see file_field_views_data()
   * @see file_field_views_data_views_data_alter()
   */
  public function testRelationshipViewsData() {
    // Create file field to entity_test.
    FieldStorageConfig::create([
      'entity_type' => 'entity_test',
      'field_name' => 'field_base_file',
      'type' => 'file',
    ])->save();
    FieldConfig::create([
      'entity_type' => 'entity_test',
      'field_name' => 'field_base_file',
      'bundle' => 'entity_test',
    ])->save();
    // Check the generated views data.
    $views_data = Views::viewsData()->get('entity_test__field_base_file');
    $relationship = $views_data['field_base_file_target_id']['relationship'];
<<<<<<< HEAD
    $this->assertEqual($relationship['id'], 'standard');
    $this->assertEqual($relationship['base'], 'file_managed');
    $this->assertEqual($relationship['base field'], 'fid');
    $this->assertEqual($relationship['entity type'], 'file');
    // Check the backwards reference.
    $views_data = Views::viewsData()->get('file_managed');
    $relationship = $views_data['reverse_field_base_file_entity_test']['relationship'];
    $this->assertEqual($relationship['id'], 'entity_reverse');
    $this->assertEqual($relationship['base'], 'entity_test');
    $this->assertEqual($relationship['base field'], 'id');
    $this->assertEqual($relationship['field table'], 'entity_test__field_base_file');
    $this->assertEqual($relationship['field field'], 'field_base_file_target_id');
    $this->assertEqual($relationship['field_name'], 'field_base_file');
    $this->assertEqual($relationship['entity_type'], 'entity_test');
    $this->assertEqual($relationship['join_extra'][0], ['field' => 'deleted', 'value' => 0, 'numeric' => TRUE]);
=======
    $this->assertEquals('standard', $relationship['id']);
    $this->assertEquals('file_managed', $relationship['base']);
    $this->assertEquals('fid', $relationship['base field']);
    $this->assertEquals('file', $relationship['entity type']);
    // Check the backwards reference.
    $views_data = Views::viewsData()->get('file_managed');
    $relationship = $views_data['reverse_field_base_file_entity_test']['relationship'];
    $this->assertEquals('entity_reverse', $relationship['id']);
    $this->assertEquals('entity_test', $relationship['base']);
    $this->assertEquals('id', $relationship['base field']);
    $this->assertEquals('entity_test__field_base_file', $relationship['field table']);
    $this->assertEquals('field_base_file_target_id', $relationship['field field']);
    $this->assertEquals('field_base_file', $relationship['field_name']);
    $this->assertEquals('entity_test', $relationship['entity_type']);
    $this->assertEquals(['field' => 'deleted', 'value' => 0, 'numeric' => TRUE], $relationship['join_extra'][0]);
>>>>>>> dev

    // Create file field to entity_test_mul.
    FieldStorageConfig::create([
      'entity_type' => 'entity_test_mul',
      'field_name' => 'field_data_file',
      'type' => 'file',
    ])->save();
    FieldConfig::create([
      'entity_type' => 'entity_test_mul',
      'field_name' => 'field_data_file',
      'bundle' => 'entity_test_mul',
    ])->save();
    // Check the generated views data.
    $views_data = Views::viewsData()->get('entity_test_mul__field_data_file');
    $relationship = $views_data['field_data_file_target_id']['relationship'];
<<<<<<< HEAD
    $this->assertEqual($relationship['id'], 'standard');
    $this->assertEqual($relationship['base'], 'file_managed');
    $this->assertEqual($relationship['base field'], 'fid');
    $this->assertEqual($relationship['entity type'], 'file');
    // Check the backwards reference.
    $views_data = Views::viewsData()->get('file_managed');
    $relationship = $views_data['reverse_field_data_file_entity_test_mul']['relationship'];
    $this->assertEqual($relationship['id'], 'entity_reverse');
    $this->assertEqual($relationship['base'], 'entity_test_mul_property_data');
    $this->assertEqual($relationship['base field'], 'id');
    $this->assertEqual($relationship['field table'], 'entity_test_mul__field_data_file');
    $this->assertEqual($relationship['field field'], 'field_data_file_target_id');
    $this->assertEqual($relationship['field_name'], 'field_data_file');
    $this->assertEqual($relationship['entity_type'], 'entity_test_mul');
    $this->assertEqual($relationship['join_extra'][0], ['field' => 'deleted', 'value' => 0, 'numeric' => TRUE]);
=======
    $this->assertEquals('standard', $relationship['id']);
    $this->assertEquals('file_managed', $relationship['base']);
    $this->assertEquals('fid', $relationship['base field']);
    $this->assertEquals('file', $relationship['entity type']);
    // Check the backwards reference.
    $views_data = Views::viewsData()->get('file_managed');
    $relationship = $views_data['reverse_field_data_file_entity_test_mul']['relationship'];
    $this->assertEquals('entity_reverse', $relationship['id']);
    $this->assertEquals('entity_test_mul_property_data', $relationship['base']);
    $this->assertEquals('id', $relationship['base field']);
    $this->assertEquals('entity_test_mul__field_data_file', $relationship['field table']);
    $this->assertEquals('field_data_file_target_id', $relationship['field field']);
    $this->assertEquals('field_data_file', $relationship['field_name']);
    $this->assertEquals('entity_test_mul', $relationship['entity_type']);
    $this->assertEquals(['field' => 'deleted', 'value' => 0, 'numeric' => TRUE], $relationship['join_extra'][0]);
>>>>>>> dev
  }

}
