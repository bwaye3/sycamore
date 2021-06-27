<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/PreconfiguredFieldUiOptionsInterface.php-1624732867',
   'data' => 
  array (
    'c42c33fc313d9d44e9b930c09a2ab00f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for exposing "preconfigured" field definitions.
 *
 * These field definitions will be exposed as additional options in the \'Add
 * field\' form in Field UI, together with individual field types.
 *
 * @see \\Drupal\\Core\\Field\\FieldTypePluginManager::getUiDefinitions()
 * @see \\Drupal\\field_ui\\Form\\FieldStorageAddForm::submitForm()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2ff1e5cb634a9b2886ec347f5585dbf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns preconfigured field options for a field type.
   *
   * Note that if you want to give modules an opportunity to alter the result
   * of this method, you should call
   * \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface::getPreconfiguredOptions()
   * instead.
   *
   * @return mixed[][]
   *   A multi-dimensional array with string keys and the following structure:
   *   - label: The label to show in the field type selection list.
   *   - category: (optional) The category in which to put the field label.
   *     Defaults to the category of the field type.
   *   - field_storage_config: An array with the following supported keys:
   *     - cardinality: The field cardinality.
   *     - settings: Field-type specific storage settings.
   *   - field_config: An array with the following supported keys:
   *     - required: Indicates whether the field is required.
   *     - settings: Field-type specific settings.
   *   - entity_form_display: An array with the following supported keys:
   *     - type: The widget to be used in the \'default\' form mode.
   *   - entity_view_display: An array with the following supported keys:
   *     - type: The formatter to be used in the \'default\' view mode.
   *
   * @see \\Drupal\\field\\Entity\\FieldStorageConfig
   * @see \\Drupal\\field\\Entity\\FieldConfig
   * @see \\Drupal\\Core\\Entity\\Display\\EntityDisplayInterface::setComponent()
   * @see \\Drupal\\Core\\Field\\FieldTypePluginManagerInterface::getPreconfiguredOptions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\PreconfiguredFieldUiOptionsInterface',
         'functionName' => 'getPreconfiguredOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));