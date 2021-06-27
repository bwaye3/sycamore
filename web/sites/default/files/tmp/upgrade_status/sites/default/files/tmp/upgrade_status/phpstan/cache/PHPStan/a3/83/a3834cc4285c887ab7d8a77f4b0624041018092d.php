<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/FilteredPluginManagerInterface.php-1624732867',
   'data' => 
  array (
    '7a58183a9234e671ffea3086f67fd91d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for plugin managers that allow filtering definitions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\FilteredPluginManagerInterface',
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
    '19d6aefeccef99f81f0ea3c33340aec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plugin definitions for a given type and consumer and filters them.
   *
   * This allows modules and themes to alter plugin definitions at runtime,
   * which is useful for tasks like hiding specific plugins from a particular
   * user interface.
   *
   * @param string $consumer
   *   A string identifying the consumer of these plugin definitions.
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[]|null $contexts
   *   (optional) Either an array of contexts to use for filtering, or NULL to
   *   not filter by contexts.
   * @param mixed[] $extra
   *   (optional) An associative array containing additional information
   *   provided by the code requesting the filtered definitions.
   *
   * @return \\Drupal\\Component\\Plugin\\Definition\\PluginDefinitionInterface[]|array[]
   *   An array of plugin definitions that are filtered.
   *
   * @see hook_plugin_filter_TYPE_alter()
   * @see hook_plugin_filter_TYPE__CONSUMER_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Plugin\\FilteredPluginManagerInterface',
         'functionName' => 'getFilteredDefinitions',
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