<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Derivative/DeriverInterface.php-1624732867',
   'data' => 
  array (
    '55c09fec764299051ef1dfeca117c47d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides additional plugin definitions based on an existing definition.
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Derivative',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverInterface',
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
    '4160e577215018bcba342257caf35855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definition of a derivative plugin.
   *
   * @param string $derivative_id
   *   The derivative id. The id must uniquely identify the derivative within a
   *   given base plugin, but derivative ids can be reused across base plugins.
   * @param array|\\Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface $base_plugin_definition
   *   The definition of the base plugin from which the derivative plugin
   *   is derived. It is maybe an entire object or just some array, depending
   *   on the discovery mechanism.
   *
   * @return array
   *   The full definition array of the derivative plugin, typically a merge of
   *   $base_plugin_definition with extra derivative-specific information. NULL
   *   if the derivative doesn\'t exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Derivative',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverInterface',
         'functionName' => 'getDerivativeDefinition',
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
    '7b059968359fb8a5eeca8455fa554ea6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definition of all derivatives of a base plugin.
   *
   * @param array $base_plugin_definition
   *   The definition array of the base plugin.
   *
   * @return array
   *   An array of full derivative definitions keyed on derivative id.
   *
   * @see getDerivativeDefinition()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Derivative',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Derivative\\DeriverInterface',
         'functionName' => 'getDerivativeDefinitions',
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