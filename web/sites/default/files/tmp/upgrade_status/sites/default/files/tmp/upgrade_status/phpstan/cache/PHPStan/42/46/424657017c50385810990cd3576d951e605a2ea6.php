<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Schema/SchemaCheckTrait.php-1624732867',
   'data' => 
  array (
    '73d51a48f7b23490abe30ee9f47d3bea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for checking configuration schema.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
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
    '0664f723194a0ea5fa2b11808cdd8c77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config schema wrapper object for the configuration object under test.
   *
   * @var \\Drupal\\Core\\Config\\Schema\\Element
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
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
    'afaab568dd9ee647246c2eee8b6d85b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration object name under test.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
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
    '14ed073060419dd5b3ac5fa00a1d7287' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the TypedConfigManager has a valid schema for the configuration.
   *
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
   *   The TypedConfigManager.
   * @param string $config_name
   *   The configuration name.
   * @param array $config_data
   *   The configuration data, assumed to be data for a top-level config object.
   *
   * @return array|bool
   *   FALSE if no schema found. List of errors if any found. TRUE if fully
   *   valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
         'functionName' => 'checkConfigSchema',
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
    '620d5d6a1302117f19504e881713cc6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper method to check data type.
   *
   * @param string $key
   *   A string of configuration key.
   * @param mixed $value
   *   Value of given key.
   *
   * @return array
   *   List of errors found while checking with the corresponding schema.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Schema',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
          'traversabletypeddatainterface' => 'Drupal\\Core\\TypedData\\TraversableTypedDataInterface',
          'booleaninterface' => 'Drupal\\Core\\TypedData\\Type\\BooleanInterface',
          'stringinterface' => 'Drupal\\Core\\TypedData\\Type\\StringInterface',
          'floatinterface' => 'Drupal\\Core\\TypedData\\Type\\FloatInterface',
          'integerinterface' => 'Drupal\\Core\\TypedData\\Type\\IntegerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
         'functionName' => 'checkValue',
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