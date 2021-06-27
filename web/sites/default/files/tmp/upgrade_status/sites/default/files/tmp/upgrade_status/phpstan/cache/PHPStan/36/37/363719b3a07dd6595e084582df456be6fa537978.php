<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/PluginManagerInterface.php-1624732867',
   'data' => 
  array (
    '70c64cd6faf82cc318e6d7de0671ee64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface implemented by plugin managers.
 *
 * There are no explicit methods on the manager interface. Instead plugin
 * managers broker the interactions of the different plugin components, and
 * therefore, must implement each component interface, which is enforced by
 * this interface extending all of the component ones.
 *
 * While a plugin manager may directly implement these interface methods with
 * custom logic, it is expected to be more common for plugin managers to proxy
 * the method invocations to the respective components, and directly implement
 * only the additional functionality needed by the specific pluggable system.
 * To follow this pattern, plugin managers can extend from the PluginManagerBase
 * class, which contains the proxying logic.
 *
 * @see \\Drupal\\Component\\Plugin\\PluginManagerBase
 *
 * @ingroup plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'factoryinterface' => 'Drupal\\Component\\Plugin\\Factory\\FactoryInterface',
          'mapperinterface' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
        ),
         'className' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
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
  ),
));