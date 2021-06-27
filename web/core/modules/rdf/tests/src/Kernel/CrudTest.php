<?php

namespace Drupal\Tests\rdf\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the RDF mapping CRUD functions.
 *
 * @group rdf
 */
class CrudTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['entity_test', 'rdf', 'system'];
=======
  protected static $modules = ['entity_test', 'rdf', 'system'];
>>>>>>> dev

  /**
   * @var string
   */
  protected $prefix;

  /**
   * @var string
   */
  protected $entityType;

  /**
   * @var string
   */
  protected $bundle;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->prefix = 'rdf.mapping';
    $this->entityType = $this->bundle = 'entity_test';
  }

  /**
   * Tests creation of RDF mapping.
   */
  public function testMappingCreation() {
    $mapping_config_name = "{$this->prefix}.{$this->entityType}.{$this->bundle}";

    // Save bundle mapping config.
    rdf_get_mapping($this->entityType, $this->bundle)->save();
    // Test that config file was saved.
    $mapping_config = \Drupal::configFactory()->listAll('rdf.mapping.');
    $this->assertContains($mapping_config_name, $mapping_config, 'Rdf mapping config saved.');
  }

  /**
<<<<<<< HEAD
   * Test the handling of bundle mappings.
=======
   * Tests the handling of bundle mappings.
>>>>>>> dev
   */
  public function testBundleMapping() {
    // Test that the bundle mapping can be saved.
    $types = ['sioc:Post', 'foaf:Document'];
    rdf_get_mapping($this->entityType, $this->bundle)
      ->setBundleMapping(['types' => $types])
      ->save();
    $bundle_mapping = rdf_get_mapping($this->entityType, $this->bundle)
      ->getBundleMapping();
<<<<<<< HEAD
    $this->assertEqual($types, $bundle_mapping['types'], 'Bundle mapping saved.');
=======
    $this->assertEquals($types, $bundle_mapping['types'], 'Bundle mapping saved.');
>>>>>>> dev

    // Test that the bundle mapping can be edited.
    $types = ['schema:BlogPosting'];
    rdf_get_mapping($this->entityType, $this->bundle)
      ->setBundleMapping(['types' => $types])
      ->save();
    $bundle_mapping = rdf_get_mapping($this->entityType, $this->bundle)
      ->getBundleMapping();
<<<<<<< HEAD
    $this->assertEqual($types, $bundle_mapping['types'], 'Bundle mapping updated.');
  }

  /**
   * Test the handling of field mappings.
=======
    $this->assertEquals($types, $bundle_mapping['types'], 'Bundle mapping updated.');
  }

  /**
   * Tests the handling of field mappings.
>>>>>>> dev
   */
  public function testFieldMapping() {
    $field_name = 'created';

    // Test that the field mapping can be saved.
    $mapping = [
      'properties' => ['dc:created'],
      'datatype' => 'xsd:dateTime',
      'datatype_callback' => ['callable' => 'Drupal\rdf\CommonDataConverter::dateIso8601Value'],
    ];
    rdf_get_mapping($this->entityType, $this->bundle)
      ->setFieldMapping($field_name, $mapping)
      ->save();
    $field_mapping = rdf_get_mapping($this->entityType, $this->bundle)
      ->getFieldMapping($field_name);
<<<<<<< HEAD
    $this->assertEqual($mapping, $field_mapping, 'Field mapping saved.');
=======
    $this->assertEquals($mapping, $field_mapping, 'Field mapping saved.');
>>>>>>> dev

    // Test that the field mapping can be edited.
    $mapping = [
      'properties' => ['dc:date'],
      'datatype' => 'foo:bar',
      'datatype_callback' => ['callable' => 'Drupal\rdf\CommonDataConverter::dateIso8601Value'],
    ];
    rdf_get_mapping($this->entityType, $this->bundle)
      ->setFieldMapping($field_name, $mapping)
      ->save();
    $field_mapping = rdf_get_mapping($this->entityType, $this->bundle)
      ->getFieldMapping($field_name);
<<<<<<< HEAD
    $this->assertEqual($mapping, $field_mapping, 'Field mapping updated.');
=======
    $this->assertEquals($mapping, $field_mapping, 'Field mapping updated.');
>>>>>>> dev
  }

}
