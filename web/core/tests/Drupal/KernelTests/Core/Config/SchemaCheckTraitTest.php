<?php

namespace Drupal\KernelTests\Core\Config;

use Drupal\Core\Config\Schema\SchemaCheckTrait;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the functionality of SchemaCheckTrait.
 *
 * @group config
 */
class SchemaCheckTraitTest extends KernelTestBase {

  use SchemaCheckTrait;

  /**
   * The typed config manager.
   *
   * @var \Drupal\Core\Config\TypedConfigManagerInterface
   */
  protected $typedConfig;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['config_test', 'config_schema_test'];
=======
  protected static $modules = ['config_test', 'config_schema_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installConfig(['config_test', 'config_schema_test']);
    $this->typedConfig = \Drupal::service('config.typed');
  }

  /**
   * Tests \Drupal\Core\Config\Schema\SchemaCheckTrait.
   */
  public function testTrait() {
    // Test a non existing schema.
    $ret = $this->checkConfigSchema($this->typedConfig, 'config_schema_test.noschema', $this->config('config_schema_test.noschema')->get());
<<<<<<< HEAD
    $this->assertIdentical($ret, FALSE);
=======
    $this->assertFalse($ret);
>>>>>>> dev

    // Test an existing schema with valid data.
    $config_data = $this->config('config_test.types')->get();
    $ret = $this->checkConfigSchema($this->typedConfig, 'config_test.types', $config_data);
<<<<<<< HEAD
    $this->assertIdentical($ret, TRUE);
=======
    $this->assertTrue($ret);
>>>>>>> dev

    // Add a new key, a new array and overwrite boolean with array to test the
    // error messages.
    $config_data = ['new_key' => 'new_value', 'new_array' => []] + $config_data;
    $config_data['boolean'] = [];
    $ret = $this->checkConfigSchema($this->typedConfig, 'config_test.types', $config_data);
    $expected = [
      'config_test.types:new_key' => 'missing schema',
      'config_test.types:new_array' => 'missing schema',
      'config_test.types:boolean' => 'non-scalar value but not defined as an array (such as mapping or sequence)',
    ];
<<<<<<< HEAD
    $this->assertEqual($ret, $expected);
=======
    $this->assertEquals($expected, $ret);
>>>>>>> dev
  }

}
