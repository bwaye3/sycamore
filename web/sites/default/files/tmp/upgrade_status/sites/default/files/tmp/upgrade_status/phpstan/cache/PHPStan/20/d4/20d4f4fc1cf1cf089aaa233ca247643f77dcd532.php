<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityTypeManager.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/dependency-injection/ContainerAwareTrait.php-1590872761',
   'data' => 
  array (
    'dfe03fdb6b94a10c3b23559ea61551e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages entity type plugin definitions.
 *
 * Each entity type definition array is set in the entity type\'s annotation and
 * altered by hook_entity_type_alter().
 *
 * Do not use hook_entity_type_alter() hook to add information to entity types,
 * unless one of the following is true:
 * - You are filling in default values.
 * - You need to dynamically add information only in certain circumstances.
 * - Your hook needs to run after hook_entity_type_build() implementations.
 * Use hook_entity_type_build() instead in all other cases.
 *
 * @see \\Drupal\\Core\\Entity\\Annotation\\EntityType
 * @see \\Drupal\\Core\\Entity\\EntityInterface
 * @see \\Drupal\\Core\\Entity\\EntityTypeInterface
 * @see hook_entity_type_alter()
 * @see hook_entity_type_build()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    'daf6982c76c1f3346abfee33d77a2826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * ContainerAware trait.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    '5312c49b5818d3acfc75a496b819f3c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var ContainerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    '44308ce7b99929f73585f9d6559663be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Contains instantiated handlers keyed by handler type and entity type.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    'eeebb229a29e0df92aef936d0cb22735' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    'b84993016fdbe85a1b8954443ea3ad4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The class resolver.
   *
   * @var \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    '719ab3bb6f3736acc44300d252b2963f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity last installed schema repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    '24ba036fddde25f164e227efe34c1d39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A list of entity type definitions that are active for the current request.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    'aa5e2f0de2a609534af23f0eba276971' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Entity plugin manager.
   *
   * @param \\Traversable $namespaces
   *   An object that implements \\Traversable which contains the root paths
   *   keyed by the corresponding namespace to look for plugin implementations,
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   The cache backend to use.
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   The string translation.
   * @param \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface $class_resolver
   *   The class resolver.
   * @param \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface $entity_last_installed_schema_repository
   *   The entity last installed schema repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    'eeb60a2606de0d2c66621e31e2ff3d2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'processDefinition',
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
    '22a4a04190e1acebe0e85986b1b192b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeInterface $definition */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'processDefinition',
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
    '53824e244a157a11e304eeeba62bb158' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'findDefinitions',
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
    '4186e5d57988102d1879e9b2e80606a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getDefinition',
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
    'ba8d463b51d855473cd26385daebab3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the active definition for a content entity type.
   *
   * @param string $entity_type_id
   *   The entity type ID.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
   *   The active entity type definition.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getActiveDefinition',
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
    '7fdda7ac4725d2e06f3f83f4c3d4ad31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    'e4e334fdbd07a532e32ca6b9086604fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
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
    'b34e62f46e6606c2f2e4ed479bde6a31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'hasHandler',
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
    '673ce0ec6efc141ecba0ac4417b975e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getStorage',
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
    '933e390e76992676416248376676dab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getListBuilder',
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
    'eef55b586cceb9369ff268332acf5497' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getFormObject',
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
    '824c554eca58ed5daf75961fad1b51c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getRouteProviders',
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
    '744837e088a441f52db0768511222a61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getViewBuilder',
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
    '39f9089764cbb8068d7f7f6ed660a115' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getAccessControlHandler',
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
    '5b6572ab12bbf4054327f8b15efafe7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'getHandler',
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
    '7ad8a9981f2a56a72f3cdcfc56685755' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'invalidplugindefinitionexception' => 'Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException',
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'classresolverinterface' => 'Drupal\\Core\\DependencyInjection\\ClassResolverInterface',
          'invalidlinktemplateexception' => 'Drupal\\Core\\Entity\\Exception\\InvalidLinkTemplateException',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'defaultpluginmanager' => 'Drupal\\Core\\Plugin\\DefaultPluginManager',
          'annotatedclassdiscovery' => 'Drupal\\Core\\Plugin\\Discovery\\AnnotatedClassDiscovery',
          'translationinterface' => 'Drupal\\Core\\StringTranslation\\TranslationInterface',
          'containerawareinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareInterface',
          'containerawaretrait' => 'Symfony\\Component\\DependencyInjection\\ContainerAwareTrait',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityTypeManager',
         'functionName' => 'createHandlerInstance',
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