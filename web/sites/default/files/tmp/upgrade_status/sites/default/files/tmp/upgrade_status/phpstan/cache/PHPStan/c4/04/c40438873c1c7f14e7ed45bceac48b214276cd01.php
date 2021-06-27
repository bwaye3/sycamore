<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/ProductViewBuilder.php-1624732871',
   'data' => 
  array (
    'bbde6ea2617f58ff520c7a577ae3b79e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the entity view builder for products.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
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
    '18c20ad6d4e5f344c643ef16e1c7342a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
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
    'e8a5f6b592ad8ef85d2eea184b8f7f62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product field variation renderer.
   *
   * @var \\Drupal\\commerce_product\\ProductVariationFieldRenderer
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
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
    '547f300492434126472c1db702719bce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ProductViewBuilder object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository
   *   The entity repository.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Theme\\Registry $theme_registry
   *   The theme registry.
   * @param \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display repository.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\commerce_product\\ProductVariationFieldRenderer $variation_field_renderer
   *   The product variation field renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
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
    'f226164c2b8d2f16b3ec81c159d51885' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
         'functionName' => 'createInstance',
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
    '78a7420d798008545ef142878d58b211' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
         'functionName' => 'alterBuild',
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
    '8dadc3e152e2c591806be428bb471076' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\ProductVariationStorageInterface $variation_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
         'functionName' => 'alterBuild',
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
    '695df47e7cd6169fd6126eb1ee17088b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductTypeInterface $product_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'entityviewbuilder' => 'Drupal\\Core\\Entity\\EntityViewBuilder',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'layoutentitydisplayinterface' => 'Drupal\\layout_builder\\Entity\\LayoutEntityDisplayInterface',
          'registry' => 'Drupal\\Core\\Theme\\Registry',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductViewBuilder',
         'functionName' => 'alterBuild',
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