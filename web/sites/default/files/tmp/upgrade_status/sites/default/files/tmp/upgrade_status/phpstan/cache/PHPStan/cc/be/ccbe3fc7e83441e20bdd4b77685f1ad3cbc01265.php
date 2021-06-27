<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Mapper/MapperInterface.php-1624732867',
   'data' => 
  array (
    'f904e7890968e7da9cf85a75e9e03789' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin mapper interface.
 *
 * Plugin mappers are responsible for mapping a plugin request to its
 * implementation. For example, it might map a cache bin to a memcache bin.
 *
 * Mapper objects incorporate the best practices of retrieving configurations,
 * type information, and factory instantiation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Mapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
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
    'c2ce6423702021f1357b4e56b271c9c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a preconfigured instance of a plugin.
   *
   * @param array $options
   *   An array of options that can be used to determine a suitable plugin to
   *   instantiate and how to configure it.
   *
   * @return object|false
   *   A fully configured plugin instance. The interface of the plugin instance
   *   will depend on the plugin type. If no instance can be retrieved, FALSE
   *   will be returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Mapper',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Mapper\\MapperInterface',
         'functionName' => 'getInstance',
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