<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/MemoryCache/MemoryCacheInterface.php-1624732867',
   'data' => 
  array (
    'dd0835c7bd4f3ff4e21b38d37f7410be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for memory cache implementations.
 *
 * This has additional requirements over CacheBackendInterface and
 * CacheTagsInvalidatorInterface. Objects stored must be the same instance when
 * retrieved from cache, so that this can be used as a replacement for protected
 * properties and similar.
 *
 * @ingroup cache
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\MemoryCache',
         'uses' => 
        array (
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
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