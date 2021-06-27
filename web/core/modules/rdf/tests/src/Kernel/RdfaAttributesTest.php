<?php

namespace Drupal\Tests\rdf\Kernel;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests RDFa attribute generation from RDF mapping.
 *
 * @group rdf
 */
class RdfaAttributesTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['rdf'];

  /**
   * Test attribute creation for mappings which use 'property'.
=======
  protected static $modules = ['rdf'];

  /**
   * Tests attribute creation for mappings which use 'property'.
>>>>>>> dev
   */
  public function testProperty() {
    $properties = ['dc:title'];

    $mapping = ['properties' => $properties];
    $expected_attributes = ['property' => $properties];

    $this->_testAttributes($expected_attributes, $mapping);
  }

  /**
<<<<<<< HEAD
   * Test attribute creation for mappings which use 'datatype'.
=======
   * Tests attribute creation for mappings which use 'datatype'.
>>>>>>> dev
   */
  public function testDatatype() {
    $properties = ['foo:bar1'];
    $datatype = 'foo:bar1type';

    $mapping = [
      'datatype' => $datatype,
      'properties' => $properties,
    ];
    $expected_attributes = [
      'datatype' => $datatype,
      'property' => $properties,
    ];

    $this->_testAttributes($expected_attributes, $mapping);
  }

  /**
<<<<<<< HEAD
   * Test attribute creation for mappings which override human-readable content.
=======
   * Tests attribute creation for mappings that override human-readable content.
>>>>>>> dev
   */
  public function testDatatypeCallback() {
    $properties = ['dc:created'];
    $datatype = 'xsd:dateTime';

    $date = 1252750327;
    $iso_date = $this->container->get('date.formatter')->format($date, 'custom', 'c', 'UTC');

    $mapping = [
      'datatype' => $datatype,
      'properties' => $properties,
      'datatype_callback' => ['callable' => 'Drupal\rdf\CommonDataConverter::dateIso8601Value'],
    ];
    $expected_attributes = [
      'datatype' => $datatype,
      'property' => $properties,
      'content' => $iso_date,
    ];

    $this->_testAttributes($expected_attributes, $mapping, ['value' => $date]);
  }

  /**
<<<<<<< HEAD
   * Test attribute creation for mappings which use data converters.
=======
   * Tests attribute creation for mappings which use data converters.
>>>>>>> dev
   */
  public function testDatatypeCallbackWithConverter() {
    $properties = ['schema:interactionCount'];

    $data = "23";
    $content = "UserComments:23";

    $mapping = [
      'properties' => $properties,
      'datatype_callback' => [
        'callable' => 'Drupal\rdf\SchemaOrgDataConverter::interactionCount',
        'arguments' => ['interaction_type' => 'UserComments'],
      ],
    ];
    $expected_attributes = [
      'property' => $properties,
      'content' => $content,
    ];

    $this->_testAttributes($expected_attributes, $mapping, $data);
  }

  /**
<<<<<<< HEAD
   * Test attribute creation for mappings which use 'rel'.
=======
   * Tests attribute creation for mappings which use 'rel'.
>>>>>>> dev
   */
  public function testRel() {
    $properties = ['sioc:has_creator', 'dc:creator'];

    $mapping = [
      'properties' => $properties,
      'mapping_type' => 'rel',
    ];
    $expected_attributes = ['rel' => $properties];

    $this->_testAttributes($expected_attributes, $mapping);
  }

  /**
   * Helper function to test attribute generation.
   *
   * @param array $expected_attributes
   *   The expected return of rdf_rdfa_attributes.
   * @param array $field_mapping
   *   The field mapping to merge into the RDF mapping config.
   * @param mixed $data
   *   The data to pass into the datatype callback, if specified.
   */
  protected function _testAttributes($expected_attributes, $field_mapping, $data = NULL) {
    $mapping = rdf_get_mapping('node', 'article')
      ->setFieldMapping('field_test', $field_mapping)
      ->getPreparedFieldMapping('field_test');
    $attributes = rdf_rdfa_attributes($mapping, $data);
    ksort($expected_attributes);
    ksort($attributes);
<<<<<<< HEAD
    $this->assertEqual($expected_attributes, $attributes);
=======
    $this->assertEquals($expected_attributes, $attributes);
>>>>>>> dev
  }

}
