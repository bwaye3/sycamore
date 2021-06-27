<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/Context/ContextProviderInterface.php-1624732867',
   'data' => 
  array (
    'a99a796930d624b3fa23ae16b732ddc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for providing plugin contexts.
 *
 * Implementations only need to deal with unqualified context IDs so they only
 * need to be unique in the context of a given service provider.
 *
 * The fully qualified context ID then includes the service ID, e.g.
 * "@service_id:unqualified_context_id".
 *
 * @see \\Drupal\\Core\\Plugin\\Context\\ContextRepositoryInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
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
    '32f611148fb8fa13dff921f218a87cda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets runtime context values for the given context IDs.
   *
   * For context-aware plugins to function correctly, all of the contexts that
   * they require must be populated with values. So this method should set a
   * value for each context that it adds. For example:
   *
   * @code
   *   // Determine a specific node to pass as context to a block.
   *   $node = ...
   *
   *   // Set that specific node as the value of the \'node\' context.
   *   $context = EntityContext::fromEntity($node);
   *   return [\'node\' => $context];
   * @endcode
   *
   * On the other hand, there are cases, on which providers no longer are
   * possible to provide context objects, even without the value, so the caller
   * should not expect it.
   *
   * @param string[] $unqualified_context_ids
   *   The requested context IDs. The context provider must only return contexts
   *   for those IDs.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextInterface[]
   *   The determined available contexts, keyed by the unqualified context_id.
   *
   * @see \\Drupal\\Core\\Plugin\\Context\\ContextProviderInterface:getAvailableContexts()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
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
    '6492138d3e6f431c3337d3076fb9929f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all available contexts for the purposes of configuration.
   *
   * When a context aware plugin is being configured, the configuration UI must
   * know which named contexts are potentially available, but does not care
   * about the value, since the value can be different for each request, and
   * might not be available at all during the configuration UI\'s request.
   *
   * For example:
   * @code
   *   // During configuration, there is no specific node to pass as context.
   *   // However, inform the system that a context named \'node\' is
   *   // available, and provide its definition, so that context aware plugins
   *   // can be configured to use it. When the plugin, for example a block,
   *   // needs to evaluate the context, the value of this context will be
   *   // supplied by getRuntimeContexts().
   *   $context = EntityContext::fromEntityTypeId(\'node\');
   *   return [\'node\' => $context];
   * @endcode
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextInterface[]
   *   All available contexts keyed by the unqualified context ID.
   *
   * @see \\Drupal\\Core\\Plugin\\Context\\ContextProviderInterface::getRuntimeContext()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Plugin\\Context\\ContextProviderInterface',
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