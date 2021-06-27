<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/system/src/Tests/Cache/AssertPageCacheContextsAndTagsTrait.php-1624732869',
   'data' => 
  array (
    '95f0b76af6d51ee07539a259ac5f5356' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides test assertions for testing page-level cache contexts & tags.
 *
 * Can be used by test classes that extend \\Drupal\\simpletest\\WebTestBase.
 *
 * @deprecated in drupal:8.?.? and is removed from drupal:9.0.0. Use
 *  \\Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait
 *  instead.
 *
 * @see https://www.drupal.org/node/2896632
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
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
    '6af884100ed3c8eb6fed4f50e5d504b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables page caching.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'enablePageCaching',
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
    'cddf32732ad21b4ab4187b5786601a52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific header value as array.
   *
   * @param string $header_name
   *   The header name.
   *
   * @return string[]
   *   The header value, potentially exploded by spaces.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'getCacheHeaderValues',
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
    '0e7fff8ecd8d6fcb296ac2af5da62ee4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache context was present in the last response.
   *
   * @param string $expected_cache_context
   *   The expected cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheContext',
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
    '72441060c5b7c78ccb4ddd7706ac0a66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a cache context was not present in the last response.
   *
   * @param string $not_expected_cache_context
   *   The expected cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertNoCacheContext',
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
    'a5538ea558c2d5afcdd6d7b7a300f8b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts page cache miss, then hit for the given URL; checks cache headers.
   *
   * @param \\Drupal\\Core\\Url $url
   *   The URL to test.
   * @param string[] $expected_contexts
   *   The expected cache contexts for the given URL.
   * @param string[] $expected_tags
   *   The expected cache tags for the given URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertPageCacheContextsAndTags',
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
    'e1f5fdf07b85a274da380d0198d7d5e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides debug information for cache tags.
   *
   * @param string[] $actual_tags
   *   The actual cache tags.
   * @param string[] $expected_tags
   *   The expected cache tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'debugCacheTags',
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
    '5c20667b844607bec28089cea046c720' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures that some cache tags are present in the current response.
   *
   * @param string[] $expected_tags
   *   The expected tags.
   * @param bool $include_default_tags
   *   (optional) Whether the default cache tags should be included.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheTags',
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
    '0c5fcf826e8fd3816edfcf05789232ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures that some cache contexts are present in the current response.
   *
   * @param string[] $expected_contexts
   *   The expected cache contexts.
   * @param string $message
   *   (optional) A verbose message to output.
   * @param bool $include_default_contexts
   *   (optional) Whether the default contexts should automatically be included.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheContexts',
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
    '530b6004f6af0cbc278f7c3348626910' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the max age header.
   *
   * @param int $max_age
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
         'functionName' => 'assertCacheMaxAge',
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