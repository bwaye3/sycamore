<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/MemoryCache/MemoryCache.php-1624732867',
   'data' => 
  array (
    'be3625e96f45dec18d14b8a21e8614a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a memory cache implementation.
 *
 * Stores cache items in memory using a PHP array.
 *
 * @ingroup cache
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\MemoryCache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'memorybackend' => 'Drupal\\Core\\Cache\\MemoryBackend',
        ),
         'className' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCache',
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
    '569d8125f75ed9ff1aaa2a1e0e65420f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a cached item.
   *
   * Checks that items are either permanent or did not expire, and returns data
   * as appropriate.
   *
   * @param object $cache
   *   An item loaded from self::get() or self::getMultiple().
   * @param bool $allow_invalid
   *   (optional) If TRUE, cache items may be returned even if they have expired
   *   or been invalidated. Defaults to FALSE.
   *
   * @return mixed
   *   The item with data as appropriate or FALSE if there is no
   *   valid item to load.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\MemoryCache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'memorybackend' => 'Drupal\\Core\\Cache\\MemoryBackend',
        ),
         'className' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCache',
         'functionName' => 'prepareItem',
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
    'd81ee05cdb2fa57784c96475a0f922b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\MemoryCache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'memorybackend' => 'Drupal\\Core\\Cache\\MemoryBackend',
        ),
         'className' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCache',
         'functionName' => 'set',
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