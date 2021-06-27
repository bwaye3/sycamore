<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/Context/ContextRepositoryInterface.php-1624732867',
   'data' => 
  array (
    '32019e6731c4326be05d56fffc1ea189' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Offers a global context repository.
 *
 * Provides a list of all available contexts, which is mostly useful for
 * configuration on forms, as well as a method to get the concrete contexts with
 * their values, given a list of fully qualified context IDs.
 *
 * @see \\Drupal\\Core\\Plugin\\Context\\ContextProviderInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
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
    'b23e2404d5b36634020b86f5aec51817' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets runtime context values for the given context IDs.
   *
   * Given that context providers might not return contexts for the given
   * context IDs, it is also not guaranteed that the context repository returns
   * contexts for all specified IDs.
   *
   * @param string[] $context_ids
   *   Fully qualified context IDs, which looks like
   *   @{service_id}:{unqualified_context_id}, so for example
   *   node.node_route_context:node.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextInterface[]
   *   The determined contexts, keyed by the fully qualified context ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
         'functionName' => 'getRuntimeContexts',
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
    '785394e5ae04e706a0d61b4e6a98f138' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all available contexts for the purposes of configuration.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextInterface[]
   *   All available contexts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface',
         'functionName' => 'getAvailableContexts',
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