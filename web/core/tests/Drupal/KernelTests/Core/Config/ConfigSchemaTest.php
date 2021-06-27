<?php

namespace Drupal\KernelTests\Core\Config;

use Drupal\Core\Config\FileStorage;
use Drupal\Core\Config\InstallStorage;
use Drupal\Core\Config\Schema\ConfigSchemaAlterException;
use Drupal\Core\Config\Schema\Ignore;
use Drupal\Core\Config\Schema\Mapping;
use Drupal\Core\Config\Schema\Undefined;
use Drupal\Core\TypedData\Plugin\DataType\StringData;
use Drupal\Core\TypedData\Type\IntegerInterface;
use Drupal\Core\TypedData\Type\StringInterface;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests schema for configuration objects.
 *
 * @group config
 */
class ConfigSchemaTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'system',
    'language',
    'field',
    'image',
    'config_test',
    'config_schema_test',
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
    $this->installConfig(['system', 'image', 'config_schema_test']);
  }

  /**
   * Tests the basic metadata retrieval layer.
   */
  public function testSchemaMapping() {
    // Nonexistent configuration key will have Undefined as metadata.
<<<<<<< HEAD
    $this->assertSame(FALSE, \Drupal::service('config.typed')->hasConfigSchema('config_schema_test.no_such_key'));
=======
    $this->assertFalse(\Drupal::service('config.typed')->hasConfigSchema('config_schema_test.no_such_key'));
>>>>>>> dev
    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.no_such_key');
    $expected = [];
    $expected['label'] = 'Undefined';
    $expected['class'] = Undefined::class;
    $expected['type'] = 'undefined';
    $expected['definition_class'] = '\Drupal\Core\TypedData\DataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for nonexistent configuration.');

    // Configuration file without schema will return Undefined as well.
    $this->assertSame(FALSE, \Drupal::service('config.typed')->hasConfigSchema('config_schema_test.noschema'));
    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.noschema');
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for configuration with no schema.');

    // Configuration file with only some schema.
    $this->assertSame(TRUE, \Drupal::service('config.typed')->hasConfigSchema('config_schema_test.someschema'));
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for nonexistent configuration.');

    // Configuration file without schema will return Undefined as well.
    $this->assertFalse(\Drupal::service('config.typed')->hasConfigSchema('config_schema_test.noschema'));
    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.noschema');
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for configuration with no schema.');

    // Configuration file with only some schema.
    $this->assertTrue(\Drupal::service('config.typed')->hasConfigSchema('config_schema_test.someschema'));
>>>>>>> dev
    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.someschema');
    $expected = [];
    $expected['label'] = 'Schema test data';
    $expected['class'] = Mapping::class;
    $expected['mapping']['langcode']['type'] = 'string';
    $expected['mapping']['langcode']['label'] = 'Language code';
    $expected['mapping']['_core']['type'] = '_core_config_info';
    $expected['mapping']['testitem'] = ['label' => 'Test item'];
    $expected['mapping']['testlist'] = ['label' => 'Test list'];
    $expected['type'] = 'config_schema_test.someschema';
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for configuration with only some schema.');
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for configuration with only some schema.');
>>>>>>> dev

    // Check type detection on elements with undefined types.
    $config = \Drupal::service('config.typed')->get('config_schema_test.someschema');
    $definition = $config->get('testitem')->getDataDefinition()->toArray();
    $expected = [];
    $expected['label'] = 'Test item';
    $expected['class'] = Undefined::class;
    $expected['type'] = 'undefined';
    $expected['definition_class'] = '\Drupal\Core\TypedData\DataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Automatic type detected for a scalar is undefined.');
=======
    $this->assertEquals($expected, $definition, 'Automatic type detected for a scalar is undefined.');
>>>>>>> dev
    $definition = $config->get('testlist')->getDataDefinition()->toArray();
    $expected = [];
    $expected['label'] = 'Test list';
    $expected['class'] = Undefined::class;
    $expected['type'] = 'undefined';
    $expected['definition_class'] = '\Drupal\Core\TypedData\DataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Automatic type detected for a list is undefined.');
    $definition = $config->get('testnoschema')->getDataDefinition()->toArray();
=======
    $this->assertEquals($expected, $definition, 'Automatic type detected for a list is undefined.');
    $definition = $config->get('test_no_schema')->getDataDefinition()->toArray();
>>>>>>> dev
    $expected = [];
    $expected['label'] = 'Undefined';
    $expected['class'] = Undefined::class;
    $expected['type'] = 'undefined';
    $expected['definition_class'] = '\Drupal\Core\TypedData\DataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Automatic type detected for an undefined integer is undefined.');
=======
    $this->assertEquals($expected, $definition, 'Automatic type detected for an undefined integer is undefined.');
>>>>>>> dev

    // Simple case, straight metadata.
    $definition = \Drupal::service('config.typed')->getDefinition('system.maintenance');
    $expected = [];
    $expected['label'] = 'Maintenance mode';
    $expected['class'] = Mapping::class;
    $expected['mapping']['message'] = [
      'label' => 'Message to display when in maintenance mode',
      'type' => 'text',
    ];
    $expected['mapping']['langcode'] = [
      'label' => 'Language code',
      'type' => 'string',
    ];
    $expected['mapping']['_core']['type'] = '_core_config_info';
    $expected['type'] = 'system.maintenance';
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for system.maintenance');
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for system.maintenance');
>>>>>>> dev

    // Mixed schema with ignore elements.
    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.ignore');
    $expected = [];
    $expected['label'] = 'Ignore test';
    $expected['class'] = Mapping::class;
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['mapping']['langcode'] = [
      'type' => 'string',
      'label' => 'Language code',
    ];
    $expected['mapping']['_core']['type'] = '_core_config_info';
    $expected['mapping']['label'] = [
      'label' => 'Label',
      'type' => 'label',
    ];
    $expected['mapping']['irrelevant'] = [
      'label' => 'Irrelevant',
      'type' => 'ignore',
    ];
    $expected['mapping']['indescribable'] = [
      'label' => 'Indescribable',
      'type' => 'ignore',
    ];
    $expected['mapping']['weight'] = [
      'label' => 'Weight',
      'type' => 'integer',
    ];
    $expected['type'] = 'config_schema_test.ignore';
    $expected['unwrap_for_canonical_representation'] = TRUE;

<<<<<<< HEAD
    $this->assertEqual($definition, $expected);
=======
    $this->assertEquals($expected, $definition);
>>>>>>> dev

    // The ignore elements themselves.
    $definition = \Drupal::service('config.typed')->get('config_schema_test.ignore')->get('irrelevant')->getDataDefinition()->toArray();
    $expected = [];
    $expected['type'] = 'ignore';
    $expected['label'] = 'Irrelevant';
    $expected['class'] = Ignore::class;
    $expected['definition_class'] = '\Drupal\Core\TypedData\DataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
<<<<<<< HEAD
    $this->assertEqual($definition, $expected);
    $definition = \Drupal::service('config.typed')->get('config_schema_test.ignore')->get('indescribable')->getDataDefinition()->toArray();
    $expected['label'] = 'Indescribable';
    $this->assertEqual($definition, $expected);
=======
    $this->assertEquals($expected, $definition);
    $definition = \Drupal::service('config.typed')->get('config_schema_test.ignore')->get('indescribable')->getDataDefinition()->toArray();
    $expected['label'] = 'Indescribable';
    $this->assertEquals($expected, $definition);
>>>>>>> dev

    // More complex case, generic type. Metadata for image style.
    $definition = \Drupal::service('config.typed')->getDefinition('image.style.large');
    $expected = [];
    $expected['label'] = 'Image style';
    $expected['class'] = Mapping::class;
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
    $expected['mapping']['name']['type'] = 'string';
    $expected['mapping']['uuid']['type'] = 'uuid';
    $expected['mapping']['uuid']['label'] = 'UUID';
    $expected['mapping']['langcode']['type'] = 'string';
    $expected['mapping']['langcode']['label'] = 'Language code';
    $expected['mapping']['status']['type'] = 'boolean';
    $expected['mapping']['status']['label'] = 'Status';
    $expected['mapping']['dependencies']['type'] = 'config_dependencies';
    $expected['mapping']['dependencies']['label'] = 'Dependencies';
    $expected['mapping']['name']['type'] = 'string';
    $expected['mapping']['label']['type'] = 'label';
    $expected['mapping']['label']['label'] = 'Label';
    $expected['mapping']['effects']['type'] = 'sequence';
    $expected['mapping']['effects']['sequence']['type'] = 'mapping';
    $expected['mapping']['effects']['sequence']['mapping']['id']['type'] = 'string';
    $expected['mapping']['effects']['sequence']['mapping']['data']['type'] = 'image.effect.[%parent.id]';
    $expected['mapping']['effects']['sequence']['mapping']['weight']['type'] = 'integer';
    $expected['mapping']['effects']['sequence']['mapping']['uuid']['type'] = 'uuid';
    $expected['mapping']['third_party_settings']['type'] = 'sequence';
    $expected['mapping']['third_party_settings']['label'] = 'Third party settings';
    $expected['mapping']['third_party_settings']['sequence']['type'] = '[%parent.%parent.%type].third_party.[%key]';
    $expected['mapping']['_core']['type'] = '_core_config_info';
    $expected['type'] = 'image.style.*';

<<<<<<< HEAD
    $this->assertEqual($definition, $expected);
=======
    $this->assertEquals($expected, $definition);
>>>>>>> dev

    // More complex, type based on a complex one.
    $definition = \Drupal::service('config.typed')->getDefinition('image.effect.image_scale');
    // This should be the schema for image.effect.image_scale.
    $expected = [];
    $expected['label'] = 'Image scale';
    $expected['class'] = Mapping::class;
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
    $expected['mapping']['width']['type'] = 'integer';
    $expected['mapping']['width']['label'] = 'Width';
    $expected['mapping']['height']['type'] = 'integer';
    $expected['mapping']['height']['label'] = 'Height';
    $expected['mapping']['upscale']['type'] = 'boolean';
    $expected['mapping']['upscale']['label'] = 'Upscale';
    $expected['type'] = 'image.effect.image_scale';

<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for image.effect.image_scale');
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for image.effect.image_scale');
>>>>>>> dev

    // Most complex case, get metadata for actual configuration element.
    $effects = \Drupal::service('config.typed')->get('image.style.medium')->get('effects');
    $definition = $effects->get('bddf0d06-42f9-4c75-a700-a33cafa25ea0')->get('data')->getDataDefinition()->toArray();
    // This should be the schema for image.effect.image_scale, reuse previous one.
    $expected['type'] = 'image.effect.image_scale';

<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for the first effect of image.style.medium');
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for the first effect of image.style.medium');
>>>>>>> dev

    $test = \Drupal::service('config.typed')->get('config_test.dynamic.third_party')->get('third_party_settings.config_schema_test');
    $definition = $test->getDataDefinition()->toArray();
    $expected = [];
    $expected['type'] = 'config_test.dynamic.*.third_party.config_schema_test';
    $expected['label'] = 'Mapping';
    $expected['class'] = Mapping::class;
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
    $expected['mapping'] = [
      'integer' => ['type' => 'integer'],
      'string' => ['type' => 'string'],
    ];
<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for config_test.dynamic.third_party:third_party_settings.config_schema_test');
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for config_test.dynamic.third_party:third_party_settings.config_schema_test');
>>>>>>> dev

    // More complex, several level deep test.
    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.someschema.somemodule.section_one.subsection');
    // This should be the schema of config_schema_test.someschema.somemodule.*.*.
    $expected = [];
    $expected['label'] = 'Schema multiple filesystem marker test';
    $expected['class'] = Mapping::class;
    $expected['mapping']['langcode']['type'] = 'string';
    $expected['mapping']['langcode']['label'] = 'Language code';
    $expected['mapping']['_core']['type'] = '_core_config_info';
    $expected['mapping']['testid']['type'] = 'string';
    $expected['mapping']['testid']['label'] = 'ID';
    $expected['mapping']['testdescription']['type'] = 'text';
    $expected['mapping']['testdescription']['label'] = 'Description';
    $expected['type'] = 'config_schema_test.someschema.somemodule.*.*';
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;

<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for config_schema_test.someschema.somemodule.section_one.subsection');

    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.someschema.somemodule.section_two.subsection');
    // The other file should have the same schema.
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for config_schema_test.someschema.somemodule.section_two.subsection');
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for config_schema_test.someschema.somemodule.section_one.subsection');

    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.someschema.somemodule.section_two.subsection');
    // The other file should have the same schema.
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for config_schema_test.someschema.somemodule.section_two.subsection');
>>>>>>> dev
  }

  /**
   * Tests metadata retrieval with several levels of %parent indirection.
   */
  public function testSchemaMappingWithParents() {
    $config_data = \Drupal::service('config.typed')->get('config_schema_test.someschema.with_parents');

    // Test fetching parent one level up.
    $entry = $config_data->get('one_level');
    $definition = $entry->get('testitem')->getDataDefinition()->toArray();
    $expected = [
      'type' => 'config_schema_test.someschema.with_parents.key_1',
      'label' => 'Test item nested one level',
      'class' => StringData::class,
      'definition_class' => '\Drupal\Core\TypedData\DataDefinition',
      'unwrap_for_canonical_representation' => TRUE,
    ];
<<<<<<< HEAD
    $this->assertEqual($definition, $expected);
=======
    $this->assertEquals($expected, $definition);
>>>>>>> dev

    // Test fetching parent two levels up.
    $entry = $config_data->get('two_levels');
    $definition = $entry->get('wrapper')->get('testitem')->getDataDefinition()->toArray();
    $expected = [
      'type' => 'config_schema_test.someschema.with_parents.key_2',
      'label' => 'Test item nested two levels',
      'class' => StringData::class,
      'definition_class' => '\Drupal\Core\TypedData\DataDefinition',
      'unwrap_for_canonical_representation' => TRUE,
    ];
<<<<<<< HEAD
    $this->assertEqual($definition, $expected);
=======
    $this->assertEquals($expected, $definition);
>>>>>>> dev

    // Test fetching parent three levels up.
    $entry = $config_data->get('three_levels');
    $definition = $entry->get('wrapper_1')->get('wrapper_2')->get('testitem')->getDataDefinition()->toArray();
    $expected = [
      'type' => 'config_schema_test.someschema.with_parents.key_3',
      'label' => 'Test item nested three levels',
      'class' => StringData::class,
      'definition_class' => '\Drupal\Core\TypedData\DataDefinition',
      'unwrap_for_canonical_representation' => TRUE,
    ];
<<<<<<< HEAD
    $this->assertEqual($definition, $expected);
=======
    $this->assertEquals($expected, $definition);
>>>>>>> dev
  }

  /**
   * Tests metadata applied to configuration objects.
   */
  public function testSchemaData() {
    // Try a simple property.
    $meta = \Drupal::service('config.typed')->get('system.site');
    $property = $meta->get('page')->get('front');
    $this->assertInstanceOf(StringInterface::class, $property);
<<<<<<< HEAD
    $this->assertEqual($property->getValue(), '/user/login', 'Got the right value for page.front data.');
=======
    $this->assertEquals('/user/login', $property->getValue(), 'Got the right value for page.front data.');
>>>>>>> dev
    $definition = $property->getDataDefinition();
    $this->assertTrue(empty($definition['translatable']), 'Got the right translatability setting for page.front data.');

    // Check nested array of properties.
    $list = $meta->get('page')->getElements();
    $this->assertCount(3, $list, 'Got a list with the right number of properties for site page data');
<<<<<<< HEAD
    $this->assertTrue(isset($list['front']) && isset($list['403']) && isset($list['404']), 'Got a list with the right properties for site page data.');
    $this->assertEqual($list['front']->getValue(), '/user/login', 'Got the right value for page.front data from the list.');
=======
    $this->assertArrayHasKey('front', $list);
    $this->assertArrayHasKey('403', $list);
    $this->assertArrayHasKey('404', $list);
    $this->assertEquals('/user/login', $list['front']->getValue(), 'Got the right value for page.front data from the list.');
>>>>>>> dev

    // And test some TypedConfigInterface methods.
    $properties = $list;
    $this->assertCount(3, $properties, 'Got the right number of properties for site page.');
    $this->assertSame($list['front'], $properties['front']);
    $values = $meta->get('page')->toArray();
    $this->assertCount(3, $values, 'Got the right number of property values for site page.');
    $this->assertSame($values['front'], '/user/login');

    // Now let's try something more complex, with nested objects.
    $wrapper = \Drupal::service('config.typed')->get('image.style.large');
    $effects = $wrapper->get('effects');
    $this->assertCount(1, $effects->toArray(), 'Got an array with effects for image.style.large data');
    $uuid = key($effects->getValue());
    $effect = $effects->get($uuid)->getElements();
<<<<<<< HEAD
    $this->assertTrue(!$effect['data']->isEmpty() && $effect['id']->getValue() == 'image_scale', 'Got data for the image scale effect from metadata.');
    $this->assertInstanceOf(IntegerInterface::class, $effect['data']->get('width'));
    $this->assertEqual($effect['data']->get('width')->getValue(), 480, 'Got the right value for the scale effect width.');
  }

  /**
   * Test configuration value data type enforcement using schemas.
=======
    $this->assertFalse($effect['data']->isEmpty(), 'Got data for the image scale effect from metadata.');
    $this->assertSame('image_scale', $effect['id']->getValue(), 'Got data for the image scale effect from metadata.');
    $this->assertInstanceOf(IntegerInterface::class, $effect['data']->get('width'));
    $this->assertEquals(480, $effect['data']->get('width')->getValue(), 'Got the right value for the scale effect width.');
  }

  /**
   * Tests configuration value data type enforcement using schemas.
>>>>>>> dev
   */
  public function testConfigSaveWithSchema() {
    $untyped_values = [
      'string' => 1,
      'empty_string' => '',
      'null_string' => NULL,
      'integer' => '100',
      'null_integer' => '',
      'boolean' => 1,
      // If the config schema doesn't have a type it shouldn't be casted.
      'no_type' => 1,
      'mapping' => [
        'string' => 1,
      ],
      'float' => '3.14',
      'null_float' => '',
      'sequence' => [1, 0, 1],
      'sequence_bc' => [1, 0, 1],
      // Not in schema and therefore should be left untouched.
      'not_present_in_schema' => TRUE,
      // Test a custom type.
      'config_schema_test_integer' => '1',
      'config_schema_test_integer_empty_string' => '',
    ];
    $untyped_to_typed = $untyped_values;

    $typed_values = [
      'string' => '1',
      'empty_string' => '',
      'null_string' => NULL,
      'integer' => 100,
      'null_integer' => NULL,
      'boolean' => TRUE,
      'no_type' => 1,
      'mapping' => [
        'string' => '1',
      ],
      'float' => 3.14,
      'null_float' => NULL,
      'sequence' => [TRUE, FALSE, TRUE],
      'sequence_bc' => [TRUE, FALSE, TRUE],
      'not_present_in_schema' => TRUE,
      'config_schema_test_integer' => 1,
      'config_schema_test_integer_empty_string' => NULL,
    ];

    // Save config which has a schema that enforces types.
    $this->config('config_schema_test.schema_data_types')
      ->setData($untyped_to_typed)
      ->save();
<<<<<<< HEAD
    $this->assertIdentical($this->config('config_schema_test.schema_data_types')->get(), $typed_values);
=======
    $this->assertSame($typed_values, $this->config('config_schema_test.schema_data_types')->get());
>>>>>>> dev

    // Save config which does not have a schema that enforces types.
    $this->config('config_schema_test.no_schema_data_types')
      ->setData($untyped_values)
      ->save();
<<<<<<< HEAD
    $this->assertIdentical($this->config('config_schema_test.no_schema_data_types')->get(), $untyped_values);
=======
    $this->assertSame($untyped_values, $this->config('config_schema_test.no_schema_data_types')->get());
>>>>>>> dev

    // Ensure that configuration objects with keys marked as ignored are not
    // changed when saved. The 'config_schema_test.ignore' will have been saved
    // during the installation of configuration in the setUp method.
    $extension_path = __DIR__ . '/../../../../../modules/config/tests/config_schema_test/';
    $install_storage = new FileStorage($extension_path . InstallStorage::CONFIG_INSTALL_DIRECTORY);
    $original_data = $install_storage->read('config_schema_test.ignore');
    $installed_data = $this->config('config_schema_test.ignore')->get();
    unset($installed_data['_core']);
<<<<<<< HEAD
    $this->assertIdentical($installed_data, $original_data);
=======
    $this->assertSame($original_data, $installed_data);
>>>>>>> dev
  }

  /**
   * Tests configuration sequence sorting using schemas.
   */
  public function testConfigSaveWithSequenceSorting() {
    $data = [
      'keyed_sort' => [
        'b' => '1',
        'a' => '2',
      ],
      'no_sort' => [
        'b' => '2',
        'a' => '1',
      ],
    ];
    // Save config which has a schema that enforces sorting.
    $this->config('config_schema_test.schema_sequence_sort')
      ->setData($data)
      ->save();
    $this->assertSame(['a' => '2', 'b' => '1'], $this->config('config_schema_test.schema_sequence_sort')->get('keyed_sort'));
    $this->assertSame(['b' => '2', 'a' => '1'], $this->config('config_schema_test.schema_sequence_sort')->get('no_sort'));

    $data = [
      'value_sort' => ['b', 'a'],
      'no_sort' => ['b', 'a'],
    ];
    // Save config which has a schema that enforces sorting.
    $this->config('config_schema_test.schema_sequence_sort')
      ->setData($data)
      ->save();

    $this->assertSame(['a', 'b'], $this->config('config_schema_test.schema_sequence_sort')->get('value_sort'));
    $this->assertSame(['b', 'a'], $this->config('config_schema_test.schema_sequence_sort')->get('no_sort'));

    // Value sort does not preserve keys - this is intentional.
    $data = [
      'value_sort' => [1 => 'b', 2 => 'a'],
      'no_sort' => [1 => 'b', 2 => 'a'],
    ];
    // Save config which has a schema that enforces sorting.
    $this->config('config_schema_test.schema_sequence_sort')
      ->setData($data)
      ->save();

    $this->assertSame(['a', 'b'], $this->config('config_schema_test.schema_sequence_sort')->get('value_sort'));
    $this->assertSame([1 => 'b', 2 => 'a'], $this->config('config_schema_test.schema_sequence_sort')->get('no_sort'));

    // Test sorts do not destroy complex values.
    $data = [
      'complex_sort_value' => [['foo' => 'b', 'bar' => 'b'] , ['foo' => 'a', 'bar' => 'a']],
      'complex_sort_key' => ['b' => ['foo' => '1', 'bar' => '1'] , 'a' => ['foo' => '2', 'bar' => '2']],
    ];
    $this->config('config_schema_test.schema_sequence_sort')
      ->setData($data)
      ->save();
    $this->assertSame([['foo' => 'a', 'bar' => 'a'], ['foo' => 'b', 'bar' => 'b']], $this->config('config_schema_test.schema_sequence_sort')->get('complex_sort_value'));
    $this->assertSame(['a' => ['foo' => '2', 'bar' => '2'], 'b' => ['foo' => '1', 'bar' => '1']], $this->config('config_schema_test.schema_sequence_sort')->get('complex_sort_key'));

    // Swap the previous test scenario around.
    $data = [
      'complex_sort_value' => ['b' => ['foo' => '1', 'bar' => '1'] , 'a' => ['foo' => '2', 'bar' => '2']],
      'complex_sort_key' => [['foo' => 'b', 'bar' => 'b'] , ['foo' => 'a', 'bar' => 'a']],
    ];
    $this->config('config_schema_test.schema_sequence_sort')
      ->setData($data)
      ->save();
    $this->assertSame([['foo' => '1', 'bar' => '1'], ['foo' => '2', 'bar' => '2']], $this->config('config_schema_test.schema_sequence_sort')->get('complex_sort_value'));
    $this->assertSame([['foo' => 'b', 'bar' => 'b'], ['foo' => 'a', 'bar' => 'a']], $this->config('config_schema_test.schema_sequence_sort')->get('complex_sort_key'));

  }

  /**
   * Tests fallback to a greedy wildcard.
   */
  public function testSchemaFallback() {
    $definition = \Drupal::service('config.typed')->getDefinition('config_schema_test.wildcard_fallback.something');
    // This should be the schema of config_schema_test.wildcard_fallback.*.
    $expected = [];
    $expected['label'] = 'Schema wildcard fallback test';
    $expected['class'] = Mapping::class;
    $expected['definition_class'] = '\Drupal\Core\TypedData\MapDataDefinition';
    $expected['unwrap_for_canonical_representation'] = TRUE;
    $expected['mapping']['langcode']['type'] = 'string';
    $expected['mapping']['langcode']['label'] = 'Language code';
    $expected['mapping']['_core']['type'] = '_core_config_info';
    $expected['mapping']['testid']['type'] = 'string';
    $expected['mapping']['testid']['label'] = 'ID';
    $expected['mapping']['testdescription']['type'] = 'text';
    $expected['mapping']['testdescription']['label'] = 'Description';
    $expected['type'] = 'config_schema_test.wildcard_fallback.*';

<<<<<<< HEAD
    $this->assertEqual($definition, $expected, 'Retrieved the right metadata for config_schema_test.wildcard_fallback.something');
=======
    $this->assertEquals($expected, $definition, 'Retrieved the right metadata for config_schema_test.wildcard_fallback.something');
>>>>>>> dev

    $definition2 = \Drupal::service('config.typed')->getDefinition('config_schema_test.wildcard_fallback.something.something');
    // This should be the schema of config_schema_test.wildcard_fallback.* as
    // well.
    $this->assertSame($definition, $definition2);
  }

  /**
   * Tests use of colons in schema type determination.
   *
   * @see \Drupal\Core\Config\TypedConfigManager::getFallbackName()
   */
  public function testColonsInSchemaTypeDetermination() {
    $tests = \Drupal::service('config.typed')->get('config_schema_test.plugin_types')->get('tests')->getElements();
    $definition = $tests[0]->getDataDefinition()->toArray();
<<<<<<< HEAD
    $this->assertEqual($definition['type'], 'test.plugin_types.boolean');

    $definition = $tests[1]->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'test.plugin_types.boolean:*');

    $definition = $tests[2]->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'test.plugin_types.*');

    $definition = $tests[3]->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'test.plugin_types.*');

    $tests = \Drupal::service('config.typed')->get('config_schema_test.plugin_types')->get('test_with_parents')->getElements();
    $definition = $tests[0]->get('settings')->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'test_with_parents.plugin_types.boolean');

    $definition = $tests[1]->get('settings')->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'test_with_parents.plugin_types.boolean:*');

    $definition = $tests[2]->get('settings')->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'test_with_parents.plugin_types.*');

    $definition = $tests[3]->get('settings')->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'test_with_parents.plugin_types.*');
=======
    $this->assertEquals('test.plugin_types.boolean', $definition['type']);

    $definition = $tests[1]->getDataDefinition()->toArray();
    $this->assertEquals('test.plugin_types.boolean:*', $definition['type']);

    $definition = $tests[2]->getDataDefinition()->toArray();
    $this->assertEquals('test.plugin_types.*', $definition['type']);

    $definition = $tests[3]->getDataDefinition()->toArray();
    $this->assertEquals('test.plugin_types.*', $definition['type']);

    $tests = \Drupal::service('config.typed')->get('config_schema_test.plugin_types')->get('test_with_parents')->getElements();
    $definition = $tests[0]->get('settings')->getDataDefinition()->toArray();
    $this->assertEquals('test_with_parents.plugin_types.boolean', $definition['type']);

    $definition = $tests[1]->get('settings')->getDataDefinition()->toArray();
    $this->assertEquals('test_with_parents.plugin_types.boolean:*', $definition['type']);

    $definition = $tests[2]->get('settings')->getDataDefinition()->toArray();
    $this->assertEquals('test_with_parents.plugin_types.*', $definition['type']);

    $definition = $tests[3]->get('settings')->getDataDefinition()->toArray();
    $this->assertEquals('test_with_parents.plugin_types.*', $definition['type']);
>>>>>>> dev
  }

  /**
   * Tests hook_config_schema_info_alter().
   */
  public function testConfigSchemaInfoAlter() {
    /** @var \Drupal\Core\Config\TypedConfigManagerInterface $typed_config */
    $typed_config = \Drupal::service('config.typed');
    $typed_config->clearCachedDefinitions();

    // Ensure that keys can not be added or removed by
    // hook_config_schema_info_alter().
    \Drupal::state()->set('config_schema_test_exception_remove', TRUE);
    try {
      $typed_config->getDefinitions();
      $this->fail('Expected ConfigSchemaAlterException thrown.');
    }
    catch (ConfigSchemaAlterException $e) {
<<<<<<< HEAD
      $this->assertEqual($e->getMessage(), 'Invoking hook_config_schema_info_alter() has removed (config_schema_test.hook) schema definitions');
=======
      $this->assertEquals('Invoking hook_config_schema_info_alter() has removed (config_schema_test.hook) schema definitions', $e->getMessage());
>>>>>>> dev
    }

    \Drupal::state()->set('config_schema_test_exception_add', TRUE);
    try {
      $typed_config->getDefinitions();
      $this->fail('Expected ConfigSchemaAlterException thrown.');
    }
    catch (ConfigSchemaAlterException $e) {
<<<<<<< HEAD
      $this->assertEqual($e->getMessage(), 'Invoking hook_config_schema_info_alter() has added (config_schema_test.hook_added_definition) and removed (config_schema_test.hook) schema definitions');
=======
      $this->assertEquals('Invoking hook_config_schema_info_alter() has added (config_schema_test.hook_added_definition) and removed (config_schema_test.hook) schema definitions', $e->getMessage());
>>>>>>> dev
    }

    \Drupal::state()->set('config_schema_test_exception_remove', FALSE);
    try {
      $typed_config->getDefinitions();
      $this->fail('Expected ConfigSchemaAlterException thrown.');
    }
    catch (ConfigSchemaAlterException $e) {
<<<<<<< HEAD
      $this->assertEqual($e->getMessage(), 'Invoking hook_config_schema_info_alter() has added (config_schema_test.hook_added_definition) schema definitions');
=======
      $this->assertEquals('Invoking hook_config_schema_info_alter() has added (config_schema_test.hook_added_definition) schema definitions', $e->getMessage());
>>>>>>> dev
    }

    // Tests that hook_config_schema_info_alter() can add additional metadata to
    // existing configuration schema.
    \Drupal::state()->set('config_schema_test_exception_add', FALSE);
    $definitions = $typed_config->getDefinitions();
<<<<<<< HEAD
    $this->assertEqual($definitions['config_schema_test.hook']['additional_metadata'], 'new schema info');
=======
    $this->assertEquals('new schema info', $definitions['config_schema_test.hook']['additional_metadata']);
>>>>>>> dev
  }

  /**
   * Tests saving config when the type is wrapped by a dynamic type.
   */
  public function testConfigSaveWithWrappingSchema() {
    $untyped_values = [
      'tests' => [
        [
          'wrapper_value' => 'foo',
          'plugin_id' => 'wrapper:foo',
          'internal_value' => 100,
        ],
      ],
    ];

    $typed_values = [
      'tests' => [
        [
          'wrapper_value' => 'foo',
          'plugin_id' => 'wrapper:foo',
          'internal_value' => '100',
        ],
      ],
    ];

    // Save config which has a schema that enforces types.
    \Drupal::configFactory()->getEditable('wrapping.config_schema_test.plugin_types')
      ->setData($untyped_values)
      ->save();
<<<<<<< HEAD
    $this->assertIdentical(\Drupal::config('wrapping.config_schema_test.plugin_types')
      ->get(), $typed_values);
=======
    $this->assertSame($typed_values, \Drupal::config('wrapping.config_schema_test.plugin_types')->get());
>>>>>>> dev
  }

  /**
   * Tests dynamic config schema type with multiple sub-key references.
   */
  public function testConfigSaveWithWrappingSchemaDoubleBrackets() {
    $untyped_values = [
      'tests' => [
        [
          'wrapper_value' => 'foo',
          'foo' => 'turtle',
          'bar' => 'horse',
          // Converted to a string by 'test.double_brackets.turtle.horse'
          // schema.
          'another_key' => '100',
        ],
      ],
    ];

    $typed_values = [
      'tests' => [
        [
          'wrapper_value' => 'foo',
          'foo' => 'turtle',
          'bar' => 'horse',
          'another_key' => 100,
        ],
      ],
    ];

    // Save config which has a schema that enforces types.
    \Drupal::configFactory()->getEditable('wrapping.config_schema_test.double_brackets')
      ->setData($untyped_values)
      ->save();
<<<<<<< HEAD
    $this->assertIdentical(\Drupal::config('wrapping.config_schema_test.double_brackets')
      ->get(), $typed_values);

    $tests = \Drupal::service('config.typed')->get('wrapping.config_schema_test.double_brackets')->get('tests')->getElements();
    $definition = $tests[0]->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'wrapping.test.double_brackets.*||test.double_brackets.turtle.horse');
=======
    $this->assertSame($typed_values, \Drupal::config('wrapping.config_schema_test.double_brackets')->get());

    $tests = \Drupal::service('config.typed')->get('wrapping.config_schema_test.double_brackets')->get('tests')->getElements();
    $definition = $tests[0]->getDataDefinition()->toArray();
    $this->assertEquals('wrapping.test.double_brackets.*||test.double_brackets.turtle.horse', $definition['type']);
>>>>>>> dev

    $untyped_values = [
      'tests' => [
        [
          'wrapper_value' => 'foo',
          'foo' => 'cat',
          'bar' => 'dog',
          // Converted to a string by 'test.double_brackets.cat.dog' schema.
          'another_key' => 100,
        ],
      ],
    ];

    $typed_values = [
      'tests' => [
        [
          'wrapper_value' => 'foo',
          'foo' => 'cat',
          'bar' => 'dog',
          'another_key' => '100',
        ],
      ],
    ];

    // Save config which has a schema that enforces types.
    \Drupal::configFactory()->getEditable('wrapping.config_schema_test.double_brackets')
      ->setData($untyped_values)
      ->save();
<<<<<<< HEAD
    $this->assertIdentical(\Drupal::config('wrapping.config_schema_test.double_brackets')
      ->get(), $typed_values);

    $tests = \Drupal::service('config.typed')->get('wrapping.config_schema_test.double_brackets')->get('tests')->getElements();
    $definition = $tests[0]->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'wrapping.test.double_brackets.*||test.double_brackets.cat.dog');
=======
    $this->assertSame($typed_values, \Drupal::config('wrapping.config_schema_test.double_brackets')->get());

    $tests = \Drupal::service('config.typed')->get('wrapping.config_schema_test.double_brackets')->get('tests')->getElements();
    $definition = $tests[0]->getDataDefinition()->toArray();
    $this->assertEquals('wrapping.test.double_brackets.*||test.double_brackets.cat.dog', $definition['type']);
>>>>>>> dev

    // Combine everything in a single save.
    $typed_values = [
      'tests' => [
        [
          'wrapper_value' => 'foo',
          'foo' => 'cat',
          'bar' => 'dog',
          'another_key' => 100,
        ],
        [
          'wrapper_value' => 'foo',
          'foo' => 'turtle',
          'bar' => 'horse',
          'another_key' => '100',
        ],
      ],
    ];
    \Drupal::configFactory()->getEditable('wrapping.config_schema_test.double_brackets')
      ->setData($typed_values)
      ->save();
    $tests = \Drupal::service('config.typed')->get('wrapping.config_schema_test.double_brackets')->get('tests')->getElements();
    $definition = $tests[0]->getDataDefinition()->toArray();
<<<<<<< HEAD
    $this->assertEqual($definition['type'], 'wrapping.test.double_brackets.*||test.double_brackets.cat.dog');
    $definition = $tests[1]->getDataDefinition()->toArray();
    $this->assertEqual($definition['type'], 'wrapping.test.double_brackets.*||test.double_brackets.turtle.horse');
=======
    $this->assertEquals('wrapping.test.double_brackets.*||test.double_brackets.cat.dog', $definition['type']);
    $definition = $tests[1]->getDataDefinition()->toArray();
    $this->assertEquals('wrapping.test.double_brackets.*||test.double_brackets.turtle.horse', $definition['type']);
>>>>>>> dev

    $typed_values = [
      'tests' => [
        [
<<<<<<< HEAD
          'id' => 'cat:persion.dog',
          'foo' => 'cat',
          'bar' => 'dog',
          'breed' => 'persion',
=======
          'id' => 'cat:persian.dog',
          'foo' => 'cat',
          'bar' => 'dog',
          'breed' => 'persian',
>>>>>>> dev
        ],
      ],
    ];

    \Drupal::configFactory()->getEditable('wrapping.config_schema_test.other_double_brackets')
      ->setData($typed_values)
      ->save();
    $tests = \Drupal::service('config.typed')->get('wrapping.config_schema_test.other_double_brackets')->get('tests')->getElements();
    $definition = $tests[0]->getDataDefinition()->toArray();
    // Check that definition type is a merge of the expected types.
<<<<<<< HEAD
    $this->assertEqual($definition['type'], 'wrapping.test.other_double_brackets.*||test.double_brackets.cat:*.*');
    // Check that breed was inherited from parent definition.
    $this->assertEqual($definition['mapping']['breed'], ['type' => 'string']);
=======
    $this->assertEquals('wrapping.test.other_double_brackets.*||test.double_brackets.cat:*.*', $definition['type']);
    // Check that breed was inherited from parent definition.
    $this->assertEquals(['type' => 'string'], $definition['mapping']['breed']);
>>>>>>> dev
  }

}
