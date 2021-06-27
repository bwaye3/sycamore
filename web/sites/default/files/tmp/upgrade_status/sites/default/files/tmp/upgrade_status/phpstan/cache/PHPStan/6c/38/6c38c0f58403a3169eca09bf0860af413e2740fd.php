<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Plugin/PanelizerEntity/PanelizerProduct.php-1624732871',
   'data' => 
  array (
    '0ea04d280baab39d233e6cbf616c5a5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Panelizer entity plugin for integrating with products.
 *
 * @PanelizerEntity("commerce_product")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    '1050f994cd0ba6f3d7106074fdb53e09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product field variation renderer.
   *
   * @var \\Drupal\\commerce_product\\ProductVariationFieldRenderer
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    '7d27e634492dcb85d0e656f5f43154a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    '2deaea2c9104034b21b09f5eda2fd099' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PanelizerProduct object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Panels\\PanelsDisplayManager $panels_manager
   *   The Panels display manager.
   * @param \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager
   *   The entity field manager.
   * @param \\Drupal\\commerce_product\\ProductVariationFieldRenderer $variation_field_renderer
   *   The product variation field renderer.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    'ae86550ce665a4689024a29d6fc48e4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    'be1083e6eed6534c7a51215a0ff890b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
         'functionName' => 'getDefaultDisplay',
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
    '0c260f53d6f00ca26f5f639a17091f7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Block\\BlockPluginInterface[] $blocks */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
         'functionName' => 'getDefaultDisplay',
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
    '350f3dce19c47a2fdfeaa707624af552' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Currently this mimics \\Drupal\\commerce_product\\ProductViewBuilder::alterBuild
   * until we expose injected variation fields to Panels.
   *
   * @todo Remove once https://www.drupal.org/node/2723691 lands
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    '14631751e7730bce91103afaa557f3b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    '417df84647978a4884ea3fd4f22bb400' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\ProductVariationStorageInterface $variation_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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
    'c36b81d3b8d22184958bfeba9cef16b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductTypeInterface $product_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity',
         'uses' => 
        array (
          'productvariationfieldrenderer' => 'Drupal\\commerce_product\\ProductVariationFieldRenderer',
          'entityviewdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
          'entityfieldmanagerinterface' => 'Drupal\\Core\\Entity\\EntityFieldManagerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'panelizerentitybase' => 'Drupal\\panelizer\\Plugin\\PanelizerEntityBase',
          'panelsdisplaymanager' => 'Drupal\\panels\\PanelsDisplayManager',
          'panelsdisplayvariant' => 'Drupal\\panels\\Plugin\\DisplayVariant\\PanelsDisplayVariant',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\PanelizerEntity\\PanelizerProduct',
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