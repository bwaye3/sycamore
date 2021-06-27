<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/Context/CacheContextsManager.php-1624732867',
   'data' => 
  array (
    '85000b851845b9b38c7da7e6bb38c7e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts cache context tokens into cache keys.
 *
 * Uses cache context services (services tagged with \'cache.context\', and whose
 * service ID has the \'cache_context.\' prefix) to dynamically generate cache
 * keys based on the request context, thus allowing developers to express the
 * state by which should varied (the current URL, language, and so on).
 *
 * Note that this maps exactly to HTTP\'s Vary header semantics:
 * @link http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.44
 *
 * @see \\Drupal\\Core\\Cache\\Context\\CacheContextInterface
 * @see \\Drupal\\Core\\Cache\\Context\\CalculatedCacheContextInterface
 * @see \\Drupal\\Core\\Cache\\Context\\CacheContextsPass
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
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
    '12ec02703c2c9ee3df80484269528722' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The service container.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
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
    '5aadc8b0b9c1846c3b0dfefbb3bb83ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Available cache context IDs and corresponding labels.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
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
    'fff21f2811a4e4fc51d531b46caaf00c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a CacheContextsManager object.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The current service container.
   * @param string[] $contexts
   *   An array of the available cache context IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => '__construct',
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
    '457b97a549fe83d364ed893e95a18f1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides an array of available cache contexts.
   *
   * @return string[]
   *   An array of available cache context IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'getAll',
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
    'b59229a0d74afe199a24b8f8b929c619' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides an array of available cache context labels.
   *
   * To be used in cache configuration forms.
   *
   * @param bool $include_calculated_cache_contexts
   *   Whether to also return calculated cache contexts. Default to FALSE.
   *
   * @return array
   *   An array of available cache contexts and corresponding labels.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'getLabels',
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
    '57e14c26c37f0d7840901204f8fc49bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts cache context tokens to cache keys.
   *
   * A cache context token is either:
   * - a cache context ID (if the service ID is \'cache_context.foo\', then \'foo\'
   *   is a cache context ID); for example, \'foo\'.
   * - a calculated cache context ID, followed by a colon, followed by
   *   the parameter for the calculated cache context; for example,
   *   \'bar:some_parameter\'.
   *
   * @param string[] $context_tokens
   *   An array of cache context tokens.
   *
   * @return \\Drupal\\Core\\Cache\\Context\\ContextCacheKeys
   *   The ContextCacheKeys object containing the converted cache keys and
   *   cacheability metadata.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'convertTokensToKeys',
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
    '46cf6392798d52ff94cada5bd717092d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Optimizes cache context tokens (the minimal representative subset).
   *
   * A minimal representative subset means that any cache context token in the
   * given set of cache context tokens that is a property of another cache
   * context cache context token in the set, is removed.
   *
   * Hence a minimal representative subset is the most compact representation
   * possible of a set of cache context tokens, that still captures the entire
   * universe of variations.
   *
   * If a cache context is being optimized away, it is able to set cacheable
   * metadata for itself which will be bubbled up.
   *
   * For example, when caching per user (\'user\'), also caching per role
   * (\'user.roles\') is meaningless because "per role" is implied by "per user".
   *
   * In the following examples, remember that the period indicates hierarchy and
   * the colon can be used to get a specific value of a calculated cache
   * context:
   * - [\'a\', \'a.b\'] -> [\'a\']
   * - [\'a\', \'a.b.c\'] -> [\'a\']
   * - [\'a.b\', \'a.b.c\'] -> [\'a.b\']
   * - [\'a\', \'a.b\', \'a.b.c\'] -> [\'a\']
   * - [\'x\', \'x:foo\'] -> [\'x\']
   * - [\'a\', \'a.b.c:bar\'] -> [\'a\']
   *
   * @param string[] $context_tokens
   *   A set of cache context tokens.
   *
   * @return string[]
   *   A representative subset of the given set of cache context tokens..
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'optimizeTokens',
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
    '5552dff8308caba6bf90dbd1c2adca1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a cache context service from the container.
   *
   * @param string $context_id
   *   The context ID, which together with the service ID prefix allows the
   *   corresponding cache context service to be retrieved.
   *
   * @return \\Drupal\\Core\\Cache\\Context\\CacheContextInterface
   *   The requested cache context service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'getService',
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
    'c1d805a7492d0df992d785271909fecc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parses cache context tokens into context IDs and optional parameters.
   *
   * @param string[] $context_tokens
   *   An array of cache context tokens.
   *
   * @return array
   *   An array with the parsed results, with each result being an array
   *   containing:
   *   - The cache context ID.
   *   - The associated parameter (for a calculated cache context), or NULL if
   *     there is no parameter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'parseTokens',
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
    'dca27a8e9db40a4dc450f9dbf7846710' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates an array of cache context tokens.
   *
   * Can be called before using cache contexts in operations, to check validity.
   *
   * @param string[] $context_tokens
   *   An array of cache context tokens.
   *
   * @throws \\LogicException
   *
   * @see \\Drupal\\Core\\Cache\\Context\\CacheContextsManager::parseTokens()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'validateTokens',
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
    'da342e8fb8976713ae4f8d93acff285d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the context tokens are valid
   *
   * Similar to ::validateTokens, this method returns boolean TRUE when the
   * context tokens are valid, and FALSE when they are not instead of returning
   * NULL when they are valid and throwing a \\LogicException when they are not.
   * This function should be used with the assert() statement.
   *
   * @param mixed $context_tokens
   *   Variable to be examined - should be array of context_tokens.
   *
   * @return bool
   *   TRUE if context_tokens is an array of valid tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache\\Context',
         'uses' => 
        array (
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\Core\\Cache\\Context\\CacheContextsManager',
         'functionName' => 'assertValidTokens',
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