<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/TypedConfigManagerInterface.php-1624732867',
   'data' => 
  array (
    'f64983f435a935b64d084e469f26c62e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for managing config schema type plugins.
 *
 * @see \\Drupal\\Core\\Config\\TypedConfigManager
 * @see \\Drupal\\Core\\Config\\Schema\\ConfigSchemaDiscovery
 * @see hook_config_schema_info_alter()
 * @see https://www.drupal.org/node/1905070
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'typeddatamanagerinterface' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
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
    '7751475f1082663038b78b35031a1058' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets typed configuration data.
   *
   * @param string $name
   *   Configuration object name.
   *
   * @return \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface
   *   Typed configuration element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'typeddatamanagerinterface' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
         'functionName' => 'get',
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
    'ec25169c40443a871c808013025110a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new data definition object from a type definition array and
   * actual configuration data. Since type definitions may contain variables
   * to be replaced, we need the configuration value to create it.
   *
   * @param array $definition
   *   The base type definition array, for which a data definition should be
   *   created.
   * @param $value
   *   Optional value of the configuration element.
   * @param string $name
   *   Optional name of the configuration element.
   * @param object $parent
   *   Optional parent element.
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
   *   A data definition for the given data type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'typeddatamanagerinterface' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
         'functionName' => 'buildDataDefinition',
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
    'c0f189778d9c2fc4f1d83e9cf06819b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the configuration schema with the given config name exists.
   *
   * @param string $name
   *   Configuration name.
   *
   * @return bool
   *   TRUE if configuration schema exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'typeddatamanagerinterface' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
         'functionName' => 'hasConfigSchema',
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
    '6f931fa770210f3afc280736c9b336e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific plugin definition.
   *
   * @param string $plugin_id
   *   A plugin id.
   * @param bool $exception_on_invalid
   *   Ignored with TypedConfigManagerInterface. Kept for compatibility with
   *   DiscoveryInterface.
   *
   * @return array
   *   A plugin definition array. If the given plugin id does not have typed
   *   configuration definition assigned, the definition of an undefined
   *   element type is returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'typeddatamanagerinterface' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
         'functionName' => 'getDefinition',
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
    '604b692df599cef5bb1a634f887154bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets typed data for a given configuration name and its values.
   *
   * @param string $config_name
   *   The machine name of the configuration.
   * @param array $config_data
   *   The data associated with the configuration. Note: This configuration
   *   doesn\'t yet have to be stored.
   *
   * @return \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface
   *   The typed configuration element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'typeddatamanagerinterface' => 'Drupal\\Core\\TypedData\\TypedDataManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
         'functionName' => 'createFromNameAndData',
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