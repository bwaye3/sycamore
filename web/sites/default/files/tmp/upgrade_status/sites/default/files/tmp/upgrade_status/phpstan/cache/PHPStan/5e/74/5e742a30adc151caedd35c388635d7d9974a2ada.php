<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/SectionStorageInterface.php-1624732868',
   'data' => 
  array (
    '12fd8ba7a8888899e704ab4b2d87b7b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for Section Storage type plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
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
    '2c51c3e44589c5fd6d4d558de5efc5e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an identifier for this storage.
   *
   * @return string
   *   The unique identifier for this storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'getStorageId',
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
    '839cd47d7d5f1aa4635684e736a98667' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the type of this storage.
   *
   * Used in conjunction with the storage ID.
   *
   * @return string
   *   The type of storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'getStorageType',
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
    '0c84a406f3ad3a4678d50945c8e95d1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Derives the section list from the storage ID.
   *
   * @param string $id
   *   The storage ID, see ::getStorageId().
   *
   * @return \\Drupal\\layout_builder\\SectionListInterface
   *   The section list.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if the ID is invalid.
   *
   * @internal
   *   This should only be called during section storage instantiation.
   *
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. The
   *   section list should be derived from context. See
   *   https://www.drupal.org/node/3016262.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'getSectionListFromId',
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
    'b96cc1f67a3af1272a5c6e328cea1859' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the routes needed for Layout Builder UI.
   *
   * Allows the plugin to add or alter routes during the route building process.
   * \\Drupal\\layout_builder\\Routing\\LayoutBuilderRoutesTrait is provided for the
   * typical use case of building a standard Layout Builder UI.
   *
   * @param \\Symfony\\Component\\Routing\\RouteCollection $collection
   *   The route collection.
   *
   * @see \\Drupal\\Core\\Routing\\RoutingEvents::ALTER
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'buildRoutes',
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
    'e9a0bf612619747a1c32dc56fe35ef72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the URL used when redirecting away from the Layout Builder UI.
   *
   * @return \\Drupal\\Core\\Url
   *   The URL object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'getRedirectUrl',
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
    '87f701789fc1c2650e85defbbaa6a5fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the URL used to display the Layout Builder UI.
   *
   * @param string $rel
   *   (optional) The link relationship type, for example: \'view\' or \'disable\'.
   *   Defaults to \'view\'.
   *
   * @return \\Drupal\\Core\\Url
   *   The URL object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'getLayoutBuilderUrl',
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
    'a1ba00fe266d21d980d687971d9d8284' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Configures the plugin based on route values.
   *
   * @param mixed $value
   *   The raw value.
   * @param mixed $definition
   *   The parameter definition provided in the route options.
   * @param string $name
   *   The name of the parameter.
   * @param array $defaults
   *   The route defaults array.
   *
   * @return string|null
   *   The section storage ID if it could be extracted, NULL otherwise.
   *
   * @internal
   *   This should only be called during section storage instantiation.
   *
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0.
   *   \\Drupal\\layout_builder\\SectionStorageInterface::deriveContextsFromRoute()
   *   should be used instead. See https://www.drupal.org/node/3016262.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'extractIdFromRoute',
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
    '12aeb2f8aa202a0250bbb4d9d8bb28b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Derives the available plugin contexts from route values.
   *
   * This should only be called during section storage instantiation,
   * specifically for use by the routing system. For all non-routing usages, use
   * \\Drupal\\Component\\Plugin\\ContextAwarePluginInterface::getContextValue().
   *
   * @param mixed $value
   *   The raw value.
   * @param mixed $definition
   *   The parameter definition provided in the route options.
   * @param string $name
   *   The name of the parameter.
   * @param array $defaults
   *   The route defaults array.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextInterface[]
   *   The available plugin contexts.
   *
   * @see \\Drupal\\Core\\ParamConverter\\ParamConverterInterface::convert()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'deriveContextsFromRoute',
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
    'f99d6cfd5f85d61cc7b09c1a7cde4cf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets contexts for use during preview.
   *
   * When not in preview, ::getContexts() will be used.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextInterface[]
   *   The plugin contexts suitable for previewing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'getContextsDuringPreview',
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
    '273c6dd60dd44b0202b9c6139c758f1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the label for the object using the sections.
   *
   * @return string
   *   The label, or NULL if there is no label defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'label',
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
    'd25ff444d46b5b34342e68dcad36b02d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves the sections.
   *
   * @return int
   *   SAVED_NEW or SAVED_UPDATED is returned depending on the operation
   *   performed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'save',
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
    '2a9b28c4d50ad3455286e20eb1507975' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if this section storage is applicable for the current contexts.
   *
   * @param \\Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface $cacheability
   *   Refinable cacheability object, typically provided by the section storage
   *   manager. When implementing this method, populate $cacheability with any
   *   information that affects whether this storage is applicable.
   *
   * @return bool
   *   TRUE if this section storage is applicable, FALSE otherwise.
   *
   * @internal
   *   This method is intended to be called by
   *   \\Drupal\\layout_builder\\SectionStorage\\SectionStorageManagerInterface::findByContext().
   *
   * @see \\Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'isApplicable',
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
    '2e72c91f98abc20aa85003bf0f77e794' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Component\\Plugin\\PluginInspectionInterface::getPluginDefinition().
   *
   * @return \\Drupal\\layout_builder\\SectionStorage\\SectionStorageDefinition
   *   The section storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'getPluginDefinition',
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
    '970ada3393619eddcb018f062c9a7c02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Core\\Access\\AccessibleInterface::access().
   *
   * @ingroup layout_builder_access
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'contextawareplugininterface' => 'Drupal\\Core\\Plugin\\ContextAwarePluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'Drupal\\layout_builder\\SectionStorageInterface',
         'functionName' => 'access',
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