<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/CacheBackendInterface.php-1624732867',
   'data' => 
  array (
    'cf267fc02a762a6c9eec27f8041e4dfa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for cache implementations.
 *
 * All cache implementations have to implement this interface.
 * Drupal\\Core\\Cache\\DatabaseBackend provides the default implementation, which
 * can be consulted as an example.
 *
 * The cache identifiers are case sensitive.
 *
 * @ingroup cache
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
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
    '1046e81ba7596170169fe7819d43b74e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that the item should never be removed unless explicitly deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
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
    'a7c1fbd08c02e2159adccebbedfa1da6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns data from the persistent cache.
   *
   * @param string $cid
   *   The cache ID of the data to retrieve.
   * @param bool $allow_invalid
   *   (optional) If TRUE, a cache item may be returned even if it is expired or
   *   has been invalidated. Such items may sometimes be preferred, if the
   *   alternative is recalculating the value stored in the cache, especially
   *   if another concurrent request is already recalculating the same value.
   *   The "valid" property of the returned object indicates whether the item is
   *   valid or not. Defaults to FALSE.
   *
   * @return object|false
   *   The cache item or FALSE on failure.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::getMultiple()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
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
    '1a3af28b26f3dcb3d2bd28ccc60092d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns data from the persistent cache when given an array of cache IDs.
   *
   * @param array $cids
   *   An array of cache IDs for the data to retrieve. This is passed by
   *   reference, and will have the IDs successfully returned from cache
   *   removed.
   * @param bool $allow_invalid
   *   (optional) If TRUE, cache items may be returned even if they have expired
   *   or been invalidated. Such items may sometimes be preferred, if the
   *   alternative is recalculating the value stored in the cache, especially
   *   if another concurrent thread is already recalculating the same value. The
   *   "valid" property of the returned objects indicates whether the items are
   *   valid or not. Defaults to FALSE.
   *
   * @return array
   *   An array of cache item objects indexed by cache ID.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::get()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'getMultiple',
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
    'fa1f7eff1567932e8112b437506b34c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores data in the persistent cache.
   *
   * Core cache implementations set the created time on cache item with
   * microtime(TRUE) rather than REQUEST_TIME_FLOAT, because the created time
   * of cache items should match when they are created, not when the request
   * started. Apart from being more accurate, this increases the chance an
   * item will legitimately be considered valid.
   *
   * @param string $cid
   *   The cache ID of the data to store.
   * @param mixed $data
   *   The data to store in the cache.
   *   Some storage engines only allow objects up to a maximum of 1MB in size to
   *   be stored by default. When caching large arrays or similar, take care to
   *   ensure $data does not exceed this size.
   * @param int $expire
   *   One of the following values:
   *   - CacheBackendInterface::CACHE_PERMANENT: Indicates that the item should
   *     not be removed unless it is deleted explicitly.
   *   - A Unix timestamp: Indicates that the item will be considered invalid
   *     after this time, i.e. it will not be returned by get() unless
   *     $allow_invalid has been set to TRUE. When the item has expired, it may
   *     be permanently deleted by the garbage collector at any time.
   * @param array $tags
   *   An array of tags to be stored with the cache item. These should normally
   *   identify objects used to build the cache item, which should trigger
   *   cache invalidation when updated. For example if a cached item represents
   *   a node, both the node ID and the author\'s user ID might be passed in as
   *   tags. For example [\'node:123\', \'node:456\', \'user:789\'].
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::get()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::getMultiple()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
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
    'd62107b96eb021388fcac53890c5505e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Store multiple items in the persistent cache.
   *
   * @param array $items
   *   An array of cache items, keyed by cid. In the form:
   *   @code
   *   $items = array(
   *     $cid => array(
   *       // Required, will be automatically serialized if not a string.
   *       \'data\' => $data,
   *       // Optional, defaults to CacheBackendInterface::CACHE_PERMANENT.
   *       \'expire\' => CacheBackendInterface::CACHE_PERMANENT,
   *       // (optional) The cache tags for this item, see CacheBackendInterface::set().
   *       \'tags\' => array(),
   *     ),
   *   );
   *   @endcode
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'setMultiple',
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
    '2e70a5f0503831d3573722cba050f7ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes an item from the cache.
   *
   * If the cache item is being deleted because it is no longer "fresh", you may
   * consider using invalidate() instead. This allows callers to retrieve the
   * invalid item by calling get() with $allow_invalid set to TRUE. In some cases
   * an invalid item may be acceptable rather than having to rebuild the cache.
   *
   * @param string $cid
   *   The cache ID to delete.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidate()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::deleteMultiple()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::deleteAll()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'delete',
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
    '66cb3f9916e9b7c15b8c8f68b6dc30a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes multiple items from the cache.
   *
   * If the cache items are being deleted because they are no longer "fresh",
   * you may consider using invalidateMultiple() instead. This allows callers to
   * retrieve the invalid items by calling get() with $allow_invalid set to TRUE.
   * In some cases an invalid item may be acceptable rather than having to
   * rebuild the cache.
   *
   * @param array $cids
   *   An array of cache IDs to delete.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidateMultiple()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::delete()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::deleteAll()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'deleteMultiple',
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
    '220da4b93335615319b28edc1b383b1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes all cache items in a bin.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidateAll()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::delete()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::deleteMultiple()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'deleteAll',
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
    '0daf30d482286741aa03dba34b84c835' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Marks a cache item as invalid.
   *
   * Invalid items may be returned in later calls to get(), if the $allow_invalid
   * argument is TRUE.
   *
   * @param string $cid
   *   The cache ID to invalidate.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::delete()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidateMultiple()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidateAll()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'invalidate',
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
    '032abfe47fe5e3b6786d903ef2eb0b74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Marks cache items as invalid.
   *
   * Invalid items may be returned in later calls to get(), if the $allow_invalid
   * argument is TRUE.
   *
   * @param string[] $cids
   *   An array of cache IDs to invalidate.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::deleteMultiple()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidate()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidateAll()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'invalidateMultiple',
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
    'ab2416eb5769456c132782b8427f2581' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Marks all cache items as invalid.
   *
   * Invalid items may be returned in later calls to get(), if the $allow_invalid
   * argument is TRUE.
   *
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::deleteAll()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidate()
   * @see \\Drupal\\Core\\Cache\\CacheBackendInterface::invalidateMultiple()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'invalidateAll',
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
    '54b627e91ca8a4b72c51e37a5e7813ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs garbage collection on a cache bin.
   *
   * The backend may choose to delete expired or invalidated items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'garbageCollection',
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
    '477ff1ecbd537a15821df1328f9bb349' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Remove a cache bin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
         'functionName' => 'removeBin',
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