<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/SchemaCheckTestTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Schema/SchemaCheckTrait.php-1624732867',
   'data' => 
  array (
    'd006e826590f87db84a24cc27272a26f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a class for checking configuration schema.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'schemachecktrait' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
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
    '70fc8acef60f2d468bf1bd52c5110fec' => 
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
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
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
    '10f9963aa883dcf226cffbdfde9b8929' => 
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
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
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
    '96308907cc2cf8181fc350062798b09a' => 
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
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
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
    'd2e94b58cb640175deed96683e56a635' => 
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
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
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
    'ed68ea9d508f44c43d7251d5f4a429cc' => 
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
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
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
    'ecc5010849c6d05b0d5f4bbf80dcc6b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the TypedConfigManager has a valid schema for the configuration.
   *
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
   *   The TypedConfigManager.
   * @param string $config_name
   *   The configuration name.
   * @param array $config_data
   *   The configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'schemachecktrait' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
         'functionName' => 'assertConfigSchema',
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
    '42ea55e89579ddd2a6ab368797f6e451' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts configuration, specified by name, has a valid schema.
   *
   * @param string $config_name
   *   The configuration name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'schemachecktrait' => 'Drupal\\Core\\Config\\Schema\\SchemaCheckTrait',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\SchemaCheckTestTrait',
         'functionName' => 'assertConfigSchemaByName',
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