<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/config_translation/src/ConfigMapperManagerInterface.php-1624732867',
   'data' => 
  array (
    '4580e82c4935c1748dd291090d46d20f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a common interface for config mapper managers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
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
    'ece94e00c1f023ee89c5426e6476ce33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of all mappers.
   *
   * @param \\Symfony\\Component\\Routing\\RouteCollection $collection
   *   The route collection used to initialize the mappers.
   *
   * @return \\Drupal\\config_translation\\ConfigMapperInterface[]
   *   An array of all mappers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
         'functionName' => 'getMappers',
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
    'b2f780e199b3c0e89abe5b3d543e849d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns TRUE if the configuration data has translatable items.
   *
   * @param string $name
   *   Configuration key.
   *
   * @return bool
   *   A boolean indicating if the configuration data has translatable items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\config_translation',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\config_translation\\ConfigMapperManagerInterface',
         'functionName' => 'hasTranslatable',
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