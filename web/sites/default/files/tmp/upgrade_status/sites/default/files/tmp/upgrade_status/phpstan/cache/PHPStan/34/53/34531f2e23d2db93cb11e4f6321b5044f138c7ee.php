<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Plugin/Field/FieldFormatter/ProductAttributesOverview.php-1624732871',
   'data' => 
  array (
    'e1d38a14e85e7a878cbe271762f4e475' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'commerce_product_attributes_overview\' formatter.
 *
 * @FieldFormatter(
 *   id = "commerce_product_attributes_overview",
 *   label = @Translation("Product attributes overview"),
 *   field_types = {
 *     "entity_reference",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
    'bd15864ead4a4bd10d500c4fe53dcb8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
    '50d4e60204d9828d93909ae2db0f2a5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity display repository.
   *
   * @var \\Drupal\\Core\\Entity|EntityDisplayRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
    '403bd762dd9a06f62f3f33a964338f7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The attribute field manager.
   *
   * @var \\Drupal\\commerce_product\\ProductAttributeFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
    'e56c24f59b3f4316b228707230af5c3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
    'd93b90117dc8881f6e1312d9643d4252' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ProductAttributesOverview object.
   *
   * @param string $plugin_id
   *   The plugin_id for the formatter.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the formatter is associated.
   * @param array $settings
   *   The formatter settings.
   * @param string $label
   *   The formatter label display setting.
   * @param string $view_mode
   *   The view mode.
   * @param array $third_party_settings
   *   Any third party settings.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Entity|EntityDisplayRepositoryInterface $entity_display_repository
   *   The entity display repository.
   * @param \\Drupal\\commerce_product\\ProductAttributeFieldManagerInterface $attribute_field_manager
   *   The attribute field manager.
   * @param \\Drupal\\Core\\Render\\RendererInterface $renderer
   *   The renderer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
    '3af93716b1c49fdfbee71c0a28aada63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
    '5cf9e5b0e445b9c2a700b9030c2a31f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'defaultSettings',
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
    'dfab6ed385b68a12f4eec748fa979ffe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'settingsForm',
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
    'f5005a8d2148b7591460c5d528479b66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductTypeInterface $product_bundle */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'settingsForm',
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
    '1ef95b4ed80b94cda39ca20aa30afe97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'settingsSummary',
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
    '50286896d3ccfba47c659bd2900261af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'viewElements',
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
    '5485a68ff1f6f157037adda6e952ba92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductAttributeInterface[] $attributes */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'viewElements',
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
    'e4943a46fa5e2747d77f98c204e0c0e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the renderable item list of attributes.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $variation_items
   *   The item list of variation entities.
   * @param \\Drupal\\commerce_product\\Entity\\ProductAttributeInterface $attribute
   *   The product attribute.
   *
   * @return array
   *   The render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'getAttributeItemList',
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
    'f35dc3cd96a9bf24f439f05df08ab93a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\Plugin\\Field\\FieldType\\EntityReferenceItem $variation */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'getAttributeItemList',
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
    '4e10b81bfa6b87b4c3e671674794795b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface $attribute_value */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
         'functionName' => 'getAttributeItemList',
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
    '709234f1584031e21b67c40f27b27cb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter',
         'uses' => 
        array (
          'entityhelper' => 'Drupal\\commerce\\EntityHelper',
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
          'productattributefieldmanagerinterface' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
          'entitydisplayrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'formatterbase' => 'Drupal\\Core\\Field\\FormatterBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'rendererinterface' => 'Drupal\\Core\\Render\\RendererInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\ProductAttributesOverview',
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
  ),
));