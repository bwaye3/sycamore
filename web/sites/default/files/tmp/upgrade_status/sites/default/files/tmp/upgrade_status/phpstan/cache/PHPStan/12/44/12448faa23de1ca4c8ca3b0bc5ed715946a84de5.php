<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/Cache.php-1624732867',
   'data' => 
  array (
    'ea957c8b5064d3957ed7018049ecdb43' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper methods for cache.
 *
 * @ingroup cache
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
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
    '8b0811e169f568997a312554d946face' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that the item should never be removed unless explicitly deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
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
    'f74ec80c0a7301bf044545f913735649' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges arrays of cache contexts and removes duplicates.
   *
   * @param array $a
   *   Cache contexts array to merge.
   * @param array $b
   *   Cache contexts array to merge.
   *
   * @return string[]
   *   The merged array of cache contexts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'mergeContexts',
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
    'd6d39d6146c5a4afbbf283f479b4d764' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges arrays of cache tags and removes duplicates.
   *
   * The cache tags array is returned in a format that is valid for
   * \\Drupal\\Core\\Cache\\CacheBackendInterface::set().
   *
   * When caching elements, it is necessary to collect all cache tags into a
   * single array, from both the element itself and all child elements. This
   * allows items to be invalidated based on all tags attached to the content
   * they\'re constituted from.
   *
   * @param array $a
   *   Cache tags array to merge.
   * @param array $b
   *   Cache tags array to merge.
   *
   * @return string[]
   *   The merged array of cache tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'mergeTags',
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
    '62f28313bba2d1430563acd46ab880f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges max-age values (expressed in seconds), finds the lowest max-age.
   *
   * Ensures infinite max-age (Cache::PERMANENT) is taken into account.
   *
   * @param int $a
   *   Max age value to merge.
   * @param int $b
   *   Max age value to merge.
   *
   * @return int
   *   The minimum max-age value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'mergeMaxAges',
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
    '631baa8b010b613190e4213a345853b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates an array of cache tags.
   *
   * Can be called before using cache tags in operations, to ensure validity.
   *
   * @param string[] $tags
   *   An array of cache tags.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
   *   assert(\\Drupal\\Component\\Assertion\\Inspector::assertAllStrings($tags))
   *   instead.
   *
   * @throws \\LogicException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'validateTags',
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
    'd2148b1ad9810f1e6e7ce02841b3b389' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build an array of cache tags from a given prefix and an array of suffixes.
   *
   * Each suffix will be converted to a cache tag by appending it to the prefix,
   * with a colon between them.
   *
   * @param string $prefix
   *   A prefix string.
   * @param array $suffixes
   *   An array of suffixes. Will be cast to strings.
   * @param string $glue
   *   A string to be used as glue for concatenation. Defaults to a colon.
   *
   * @return string[]
   *   An array of cache tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'buildTags',
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
    'fff0d48358eb2b6e09bfe89ce8b157ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Marks cache items from all bins with any of the specified tags as invalid.
   *
   * @param string[] $tags
   *   The list of tags to invalidate cache items for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'invalidateTags',
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
    'f91b9293f7f14e9b29517bb890254cbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all cache bin services.
   *
   * @return \\Drupal\\Core\\Cache\\CacheBackendInterface[]
   *   An array of cache backend objects keyed by cache bins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'getBins',
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
    '591412e43be9349d10f28800424f272a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a hash from a query object, to be used as part of the cache key.
   *
   * This smart caching strategy saves Drupal from querying and rendering to
   * HTML when the underlying query is unchanged.
   *
   * Expensive queries should use the query builder to create the query and then
   * call this function. Executing the query and formatting results should
   * happen in a #pre_render callback.
   *
   * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $query
   *   A select query object.
   *
   * @return string
   *   A hash of the query arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
          'inspector' => 'Drupal\\Component\\Assertion\\Inspector',
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Cache',
         'functionName' => 'keyFromQuery',
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