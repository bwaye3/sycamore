<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Discovery/CachedDiscoveryInterface.php-1624732867',
   'data' => 
  array (
    '3ce143ea547274888ad30aa0465e572f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for discovery components holding a cache of plugin definitions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
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
    '5b28f7a3870127a486c3d00970ae9d53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears static and persistent plugin definition caches.
   *
   * Don\'t resort to calling \\Drupal::cache()->delete() and friends to make
   * Drupal detect new or updated plugin definitions. Always use this method on
   * the appropriate plugin type\'s plugin manager!
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
         'functionName' => 'clearCachedDefinitions',
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
    '7b6ce686f5611f6ef4b576a9c965b047' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Disable the use of caches.
   *
   * Can be used to ensure that uncached plugin definitions are returned,
   * without invalidating all cached information.
   *
   * This will also remove all local/static caches.
   *
   * @param bool $use_caches
   *   FALSE to not use any caches.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Discovery\\CachedDiscoveryInterface',
         'functionName' => 'useCaches',
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