<?php

namespace Drupal\Tests\config\Functional;

use Drupal\Core\Serialization\Yaml;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the user interface for importing/exporting a single configuration.
 *
 * @group config
 */
class ConfigSingleImportExportTest extends BrowserTestBase {

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
    'block',
    'config',
    'config_test',
    // Adding language module makes it possible to involve non-default
    // (language.xx) collections in import/export operations.
    'language',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->drupalPlaceBlock('page_title_block');
  }

  /**
   * Tests importing a single configuration file.
   */
  public function testImport() {
    $storage = \Drupal::entityTypeManager()->getStorage('config_test');
    $uuid = \Drupal::service('uuid');

    $this->drupalLogin($this->drupalCreateUser(['import configuration']));

    // Attempt an import with invalid YAML.
    $edit = [
      'config_type' => 'action',
      'import' => '{{{',
    ];

<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    // Assert the static portion of the error since different parsers could give different text in their error.
    $this->assertText('The import failed with the following message: ');
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    // Assert the static portion of the error since different parsers could give different text in their error.
    $this->assertSession()->pageTextContains('The import failed with the following message: ');
>>>>>>> dev

    $import = <<<EOD
label: First
weight: 0
style: ''
status: '1'
EOD;
    $edit = [
      'config_type' => 'config_test',
      'import' => $import,
    ];
    // Attempt an import with a missing ID.
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertText(t('Missing ID key "@id_key" for this @entity_type import.', ['@id_key' => 'id', '@entity_type' => 'Test configuration']));
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertSession()->pageTextContains('Missing ID key "id" for this Test configuration import.');
>>>>>>> dev

    // Perform an import with no specified UUID and a unique ID.
    $this->assertNull($storage->load('first'));
    $edit['import'] = "id: first\n" . $edit['import'];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertRaw(t('Are you sure you want to create a new %name @type?', ['%name' => 'first', '@type' => 'test configuration']));
    $this->drupalPostForm(NULL, [], t('Confirm'));
    $entity = $storage->load('first');
    $this->assertIdentical($entity->label(), 'First');
    $this->assertIdentical($entity->id(), 'first');
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertRaw(t('Are you sure you want to create a new %name @type?', ['%name' => 'first', '@type' => 'test configuration']));
    $this->submitForm([], 'Confirm');
    $entity = $storage->load('first');
    $this->assertSame('First', $entity->label());
    $this->assertSame('first', $entity->id());
>>>>>>> dev
    $this->assertTrue($entity->status());
    $this->assertRaw(t('The configuration was imported successfully.'));

    // Attempt an import with an existing ID but missing UUID.
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertText(t('An entity with this machine name already exists but the import did not specify a UUID.'));

    // Attempt an import with a mismatched UUID and existing ID.
    $edit['import'] .= "\nuuid: " . $uuid->generate();
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertText(t('An entity with this machine name already exists but the UUID does not match.'));

    // Attempt an import with a custom ID.
    $edit['custom_entity_id'] = 'custom_id';
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertRaw(t('Are you sure you want to create a new %name @type?', ['%name' => 'custom_id', '@type' => 'test configuration']));
    $this->drupalPostForm(NULL, [], t('Confirm'));
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertSession()->pageTextContains('An entity with this machine name already exists but the import did not specify a UUID.');

    // Attempt an import with a mismatched UUID and existing ID.
    $edit['import'] .= "\nuuid: " . $uuid->generate();
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertSession()->pageTextContains('An entity with this machine name already exists but the UUID does not match.');

    // Attempt an import with a custom ID.
    $edit['custom_entity_id'] = 'custom_id';
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertRaw(t('Are you sure you want to create a new %name @type?', ['%name' => 'custom_id', '@type' => 'test configuration']));
    $this->submitForm([], 'Confirm');
>>>>>>> dev
    $this->assertRaw(t('The configuration was imported successfully.'));

    // Perform an import with a unique ID and UUID.
    $import = <<<EOD
id: second
label: Second
weight: 0
style: ''
status: '0'
EOD;
    $edit = [
      'config_type' => 'config_test',
      'import' => $import,
    ];
    $second_uuid = $uuid->generate();
    $edit['import'] .= "\nuuid: " . $second_uuid;
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertRaw(t('Are you sure you want to create a new %name @type?', ['%name' => 'second', '@type' => 'test configuration']));
    $this->drupalPostForm(NULL, [], t('Confirm'));
    $entity = $storage->load('second');
    $this->assertRaw(t('The configuration was imported successfully.'));
    $this->assertIdentical($entity->label(), 'Second');
    $this->assertIdentical($entity->id(), 'second');
    $this->assertFalse($entity->status());
    $this->assertIdentical($entity->uuid(), $second_uuid);
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertRaw(t('Are you sure you want to create a new %name @type?', ['%name' => 'second', '@type' => 'test configuration']));
    $this->submitForm([], 'Confirm');
    $entity = $storage->load('second');
    $this->assertRaw(t('The configuration was imported successfully.'));
    $this->assertSame('Second', $entity->label());
    $this->assertSame('second', $entity->id());
    $this->assertFalse($entity->status());
    $this->assertSame($second_uuid, $entity->uuid());
>>>>>>> dev

    // Perform an update.
    $import = <<<EOD
id: second
uuid: $second_uuid
label: 'Second updated'
weight: 0
style: ''
status: '0'
EOD;
    $edit = [
      'config_type' => 'config_test',
      'import' => $import,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertRaw(t('Are you sure you want to update the %name @type?', ['%name' => 'second', '@type' => 'test configuration']));
    $this->drupalPostForm(NULL, [], t('Confirm'));
    $entity = $storage->load('second');
    $this->assertRaw(t('The configuration was imported successfully.'));
    $this->assertIdentical($entity->label(), 'Second updated');
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertRaw(t('Are you sure you want to update the %name @type?', ['%name' => 'second', '@type' => 'test configuration']));
    $this->submitForm([], 'Confirm');
    $entity = $storage->load('second');
    $this->assertRaw(t('The configuration was imported successfully.'));
    $this->assertSame('Second updated', $entity->label());
>>>>>>> dev

    // Try to perform an update which adds missing dependencies.
    $import = <<<EOD
id: second
uuid: $second_uuid
label: 'Second updated'
weight: 0
style: ''
status: '0'
dependencies:
  module:
    - does_not_exist
EOD;
    $edit = [
      'config_type' => 'config_test',
      'import' => $import,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
>>>>>>> dev
    $this->assertRaw(t('Configuration %name depends on the %owner module that will not be installed after import.', ['%name' => 'config_test.dynamic.second', '%owner' => 'does_not_exist']));

    // Try to preform an update which would create a PHP object if Yaml parsing
    // not securely set up.
    // Perform an update.
    $import = <<<EOD
id: second
uuid: $second_uuid
label: !php/object "O:36:\"Drupal\\\Core\\\Test\\\ObjectSerialization\":0:{}"
weight: 0
style: ''
status: '0'
EOD;
    $edit = [
      'config_type' => 'config_test',
      'import' => $import,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
>>>>>>> dev
    if (extension_loaded('yaml')) {
      // If the yaml extension is loaded it will work but not create the PHP
      // object.
      $this->assertRaw(t('Are you sure you want to update the %name @type?', [
        '%name' => 'second',
        '@type' => 'test configuration',
      ]));
<<<<<<< HEAD
      $this->drupalPostForm(NULL, [], t('Confirm'));
=======
      $this->submitForm([], 'Confirm');
>>>>>>> dev
      $entity = $storage->load('second');
      $this->assertRaw(t('The configuration was imported successfully.'));
      $this->assertIsString($entity->label());
      $this->assertStringContainsString('ObjectSerialization', $entity->label(), 'Label contains serialized object');
    }
    else {
      // If the Symfony parser is used there will be an error.
      $this->assertSession()->responseContains('The import failed with the following message:');
      $this->assertSession()->responseContains('Object support when parsing a YAML file has been disabled');
    }
  }

  /**
   * Tests importing a simple configuration file.
   */
  public function testImportSimpleConfiguration() {
    $this->drupalLogin($this->drupalCreateUser(['import configuration']));
    $config = $this->config('system.site')->set('name', 'Test simple import');

    // Place branding block with site name into header region.
    $this->drupalPlaceBlock('system_branding_block', ['region' => 'header']);

    $edit = [
      'config_type' => 'system.simple',
      'config_name' => $config->getName(),
      'import' => Yaml::encode($config->get()),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertRaw(t('Are you sure you want to update the %name @type?', ['%name' => $config->getName(), '@type' => 'simple configuration']));
    $this->drupalPostForm(NULL, [], t('Confirm'));
    $this->drupalGet('');
    $this->assertText('Test simple import');
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertRaw(t('Are you sure you want to update the %name @type?', ['%name' => $config->getName(), '@type' => 'simple configuration']));
    $this->submitForm([], 'Confirm');
    $this->drupalGet('');
    $this->assertSession()->pageTextContains('Test simple import');
>>>>>>> dev

    // Ensure that ConfigImporter validation is running when importing simple
    // configuration.
    $config_data = $this->config('core.extension')->get();
    // Simulate uninstalling the Config module.
    unset($config_data['module']['config']);
    $edit = [
      'config_type' => 'system.simple',
      'config_name' => 'core.extension',
      'import' => Yaml::encode($config_data),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/development/configuration/single/import', $edit, t('Import'));
    $this->assertText(t('Can not uninstall the Configuration module as part of a configuration synchronization through the user interface.'));

    // Try to import without any values.
    $this->drupalPostForm('admin/config/development/configuration/single/import', [], t('Import'));
    $this->assertText('Configuration type field is required.');
    $this->assertText('Paste your configuration here field is required.');
=======
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm($edit, 'Import');
    $this->assertSession()->pageTextContains('Can not uninstall the Configuration module as part of a configuration synchronization through the user interface.');

    // Try to import without any values.
    $this->drupalGet('admin/config/development/configuration/single/import');
    $this->submitForm([], 'Import');
    $this->assertSession()->pageTextContains('Configuration type field is required.');
    $this->assertSession()->pageTextContains('Paste your configuration here field is required.');
>>>>>>> dev
  }

  /**
   * Tests exporting a single configuration file.
   */
  public function testExport() {
    $this->drupalLogin($this->drupalCreateUser(['export configuration']));

<<<<<<< HEAD
    $this->drupalGet('admin/config/development/configuration/single/export/system.simple');
    $this->assertFieldByXPath('//select[@name="config_type"]//option[@selected="selected"]', t('Simple configuration'), 'The simple configuration option is selected when specified in the URL.');
    // Spot check several known simple configuration files.
    $element = $this->xpath('//select[@name="config_name"]')[0];
    $options = $element->findAll('css', 'option');
    $expected_options = ['system.site', 'user.settings'];
    foreach ($options as &$option) {
      $option = $option->getValue();
    }
    $this->assertIdentical($expected_options, array_intersect($expected_options, $options), 'The expected configuration files are listed.');

    $this->drupalGet('admin/config/development/configuration/single/export/system.simple/system.image');
    $this->assertEquals("toolkit: gd\n_core:\n  default_config_hash: durWHaKeBaq4d9Wpi4RqwADj1OufDepcnJuhVLmKN24\n", $this->xpath('//textarea[@name="export"]')[0]->getValue(), 'The expected system configuration is displayed.');

    $this->drupalGet('admin/config/development/configuration/single/export/date_format');
    $this->assertFieldByXPath('//select[@name="config_type"]//option[@selected="selected"]', t('Date format'), 'The date format entity type is selected when specified in the URL.');

    $this->drupalGet('admin/config/development/configuration/single/export/date_format/fallback');
    $this->assertFieldByXPath('//select[@name="config_name"]//option[@selected="selected"]', t('Fallback date format (fallback)'), 'The fallback date format config entity is selected when specified in the URL.');

    $fallback_date = \Drupal::entityTypeManager()->getStorage('date_format')->load('fallback');
    $yaml_text = $this->xpath('//textarea[@name="export"]')[0]->getValue();
=======
    // Verify that the simple configuration option is selected when specified
    // in the URL.
    $this->drupalGet('admin/config/development/configuration/single/export/system.simple');
    $option_node = $this->assertSession()->optionExists("config_type", 'Simple configuration');
    $this->assertTrue($option_node->isSelected());
    // Spot check several known simple configuration files.
    $this->assertSession()->optionExists('config_name', 'system.site');
    $this->assertSession()->optionExists('config_name', 'user.settings');

    $this->drupalGet('admin/config/development/configuration/single/export/system.simple/system.image');
    $this->assertSession()->fieldValueEquals('export', "toolkit: gd\n_core:\n  default_config_hash: durWHaKeBaq4d9Wpi4RqwADj1OufDepcnJuhVLmKN24\n");

    // Verify that the date format entity type is selected when specified in
    // the URL.
    $this->drupalGet('admin/config/development/configuration/single/export/date_format');
    $option_node = $this->assertSession()->optionExists("config_type", 'Date format');
    $this->assertTrue($option_node->isSelected());

    // Verify that the fallback date format config entity is selected when
    // specified in the URL.
    $this->drupalGet('admin/config/development/configuration/single/export/date_format/fallback');
    $option_node = $this->assertSession()->optionExists("config_name", 'Fallback date format (fallback)');
    $this->assertTrue($option_node->isSelected());
    $fallback_date = \Drupal::entityTypeManager()->getStorage('date_format')->load('fallback');
    $yaml_text = $this->assertSession()->fieldExists('export')->getValue();
>>>>>>> dev
    $this->assertEquals(Yaml::decode($yaml_text), $fallback_date->toArray(), 'The fallback date format config entity export code is displayed.');
  }

}
