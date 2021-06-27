<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/field/LinkBase.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/RedirectDestinationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Entity/Render/EntityTranslationRenderTrait.php-1624732869',
   'data' => 
  array (
    'f3e909e6f92d11216b52383be7c33579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Field handler to present a link to an entity.
 *
 * @ingroup views_field_handlers
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    'dbbf26c96b57c0fa79d5a83bdc9efce7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the Redirect Destination.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    '207f8ecf5f8a0f8335eecb6caa8e9f08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The redirect destination service.
   *
   * @var \\Drupal\\Core\\Routing\\RedirectDestinationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    '064950898bdcf31361b07ae1e640ef92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a \'destination\' URL query parameter for use with \\Drupal\\Core\\Url.
   *
   * @see \\Drupal\\Core\\Routing\\RedirectDestinationInterface::getAsArray()
   *
   * @return array
   *   An associative array containing the key:
   *   - destination: The value of the current request\'s \'destination\' query
   *     parameter, if present. This can be either a relative or absolute URL.
   *     However, for security, redirection to external URLs is not performed.
   *     If the query parameter isn\'t present, then the URL of the current
   *     request is returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getDestinationArray',
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
    '93205312c279ae9f476a2377586e5676' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the redirect destination service.
   *
   * @return \\Drupal\\Core\\Routing\\RedirectDestinationInterface
   *   The redirect destination helper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getRedirectDestination',
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
    '1921d002f3bb3d1c2513d03b0944dc51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the redirect destination service.
   *
   * @param \\Drupal\\Core\\Routing\\RedirectDestinationInterface $redirect_destination
   *   The redirect destination service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'setRedirectDestination',
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
    '400658b592f3ac49cc7fd39dd4561611' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait used to instantiate the view\'s entity translation renderer.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    '12a376205acf799f2771e5770c42bbc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer to be used to render the entity row.
   *
   * @var \\Drupal\\views\\Entity\\Render\\EntityTranslationRendererBase
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    'be71cfd062cd2da0b795d826630aff95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current renderer.
   *
   * @return \\Drupal\\views\\Entity\\Render\\EntityTranslationRendererBase
   *   The configured renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityTranslationRenderer',
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
    '89973dbc4c48caf798caaf11f19380e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity translation matching the configured row language.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity object the field value being processed is attached to.
   * @param \\Drupal\\views\\ResultRow $row
   *   The result row the field value being processed belongs to.
   *
   * @return \\Drupal\\Core\\Entity\\FieldableEntityInterface
   *   The entity translation object for the specified row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityTranslation',
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
    '6ec01bbfae46beade1731d6ad76faa9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity type identifier.
   *
   * @return string
   *   The entity type identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityTypeId',
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
    'fbd10531fb0cfa51ac484bbd78bdebe5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity type manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityTypeManager',
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
    'c0874f8d0f368051a5432bff3157ab1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity repository.
   *
   * @return \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   *   The entity repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityRepository',
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
    '5d517887da22eb8d986dc3af6c4c5887' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language manager.
   *
   * @return \\Drupal\\Core\\Language\\LanguageManagerInterface
   *   The language manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getLanguageManager',
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
    'e26f26bd9369fddfe578cab54738ffeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the top object of a view.
   *
   * @return \\Drupal\\views\\ViewExecutable
   *   The view object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity\\Render',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'translatableinterface' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
          'pluginbase' => 'Drupal\\views\\Plugin\\views\\PluginBase',
          'resultrow' => 'Drupal\\views\\ResultRow',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getView',
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
    'a28ae3e8ae171242c97579c7b109c89d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The access manager service.
   *
   * @var \\Drupal\\Core\\Access\\AccessManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    '17dec78474ed2b0704184c38b26c320c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Current user object.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    'dafe9603d4358fcd7bb5461e8c456600' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    '44c39013718f03a91ab40606ae886b32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    'fa54131d56b7939ad324dbb91295c233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity repository.
   *
   * @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    '5de8818b836b1b9b84fe31698f297e2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a LinkBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Access\\AccessManagerInterface $access_manager
   *   The access manager.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface|null $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Entity\\EntityRepositoryInterface|null $entity_repository
   *   The entity repository.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface|null $language_manager
   *   The language manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
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
    '1abae206f1d15c01ceb33b29f43cfd47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'create',
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
    '3795fa1e1860acb1236c5da2299c7746' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current active user.
   *
   * @todo: https://www.drupal.org/node/2105123 put this method in
   *   \\Drupal\\Core\\Plugin\\PluginBase instead.
   *
   * @return \\Drupal\\Core\\Session\\AccountInterface
   *   The current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'currentUser',
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
    'e50d80455277396a046daf3dc1d0e658' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'defineOptions',
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
    '54844c69a1d0981fedd1d153976fa54e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'buildOptionsForm',
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
    '924bf60e8df4ddd7d9a362288eacc3e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'usesGroupBy',
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
    'b4b4d1f1875ebb22d616e557240a5c3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'query',
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
    '2281b59f0a0a7d6c1e2f1d1ee0fc71d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'render',
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
    '98303996c88049930d3aad70cd752abb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks access to the link route.
   *
   * @param \\Drupal\\views\\ResultRow $row
   *   A view result row.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'checkUrlAccess',
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
    '6d4bc2b3bb6ae69dd6fd9c0155bd2357' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URI elements of the link.
   *
   * @param \\Drupal\\views\\ResultRow $row
   *   A view result row.
   *
   * @return \\Drupal\\Core\\Url
   *   The URI elements of the link.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getUrlInfo',
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
    '4805eaf53944d977b1c567f4674ad899' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the link to view a entity.
   *
   * @param \\Drupal\\views\\ResultRow $row
   *   A view result row.
   *
   * @return string
   *   Returns a string for the link text.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'renderLink',
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
    'ae672303ba5d1ba372696722d5c864fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds language information to the options.
   *
   * @param \\Drupal\\views\\ResultRow $row
   *   A view result row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'addLangcode',
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
    '0d2591673fe8fb30ac09e55569e58d83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default label for this link.
   *
   * @return string
   *   The default link label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getDefaultLabel',
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
    '415c6aa42c3c7cd4577a568e5c8b48c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityTypeId',
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
    'e7c1a17f65166149a5a8ab9422cda9c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityTypeManager',
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
    '233cfc7304050cc52f2d00fc141c82c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getEntityRepository',
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
    '54e50c4823b964ef26879b09c35ba3c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getLanguageManager',
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
    '3b9e113892ebcc1a5236bc4ce9efbd7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'accessmanagerinterface' => 'Drupal\\Core\\Access\\AccessManagerInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'bubbleablemetadata' => 'Drupal\\Core\\Render\\BubbleableMetadata',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'entitytranslationrendertrait' => 'Drupal\\views\\Entity\\Render\\EntityTranslationRenderTrait',
          'resultrow' => 'Drupal\\views\\ResultRow',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\LinkBase',
         'functionName' => 'getView',
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