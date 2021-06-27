<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/Context/CacheContextInterface.php-1624732867',
   'data' => 
  array (
    'c05307be6124bfc80c445542b5a88fb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for defining a cache context service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
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
    '78271ed112fc4be1b77a8302e847b7a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the label of the cache context.
   *
   * @return string
   *   The label of the cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
         'functionName' => 'getLabel',
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
    '64ba0ec217ce5fec11c1bd842740524f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the string representation of the cache context.
   *
   * A cache context service\'s name is used as a token (placeholder) cache key,
   * and is then replaced with the string returned by this method.
   *
   * @return string
   *   The string representation of the cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
         'functionName' => 'getContext',
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
    '0a2beffe3b895ea1d0d6b83667bc2c3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the cacheability metadata for the context.
   *
   * There are three valid cases for the returned CacheableMetadata object:
   * - An empty object means this can be optimized away safely.
   * - A max-age of 0 means that this context can never be optimized away. It
   *   will never bubble up and cache tags will not be used.
   * - Any non-zero max-age and cache tags will bubble up into the cache item
   *   if this is optimized away to allow for invalidation if the context
   *   value changes.
   *
   *
   * @return \\Drupal\\Core\\Cache\\CacheableMetadata
   *   A cacheable metadata object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextInterface',
         'functionName' => 'getCacheableMetadata',
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