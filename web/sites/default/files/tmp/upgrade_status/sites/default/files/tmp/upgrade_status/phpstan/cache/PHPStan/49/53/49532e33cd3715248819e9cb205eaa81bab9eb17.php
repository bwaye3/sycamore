<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Plugin/Field/FieldWidget/ProductVariationWidgetBase.php-1624732871',
   'data' => 
  array (
    '5e4122b1ecdfb1e5924fd0460f2583c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the base structure for product variation widgets.
 *
 * Product variation widget forms depends on the \'product\' being present in
 * $form_state.
 *
 * @see \\Drupal\\commerce_product\\Plugin\\Field\\FieldFormatter\\AddToCartFormatter::viewElements().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
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
    '4b33b5f6c8c78cf396ff4c54a549466b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product variation storage.
   *
   * @var \\Drupal\\commerce_product\\ProductVariationStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
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
    '9aa4e49f57bee7d485c89e40c2df906f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity repository service.
   *
   * @var \\Drupal\\Core\\Entity\\EntityRepositoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
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
    '6bd651ca2dcdc527864f3f3df7025c2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ProductVariationWidgetBase object.
   *
   * @param string $plugin_id
   *   The plugin_id for the widget.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The definition of the field to which the widget is associated.
   * @param array $settings
   *   The widget settings.
   * @param array $third_party_settings
   *   Any third party settings.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository
   *   The entity repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
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
    '132c438d4a99972ae9a25c912bd3aaad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
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
    'b786704272d02c5f16a4affea6170789' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
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
    '2000d131eebaf42763ffb4dc0e90c0c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'massageFormValues',
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
    'f0d036c581015894f2aaee041adc2db8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * #ajax callback: Replaces the rendered fields on variation change.
   *
   * Assumes the existence of a \'selected_variation\' in $form_state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'ajaxRefresh',
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
    'be9431cf51a8087cfe1490ab005e1780' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\MainContent\\MainContentRendererInterface $ajax_renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'ajaxRefresh',
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
    'a742d4d8024bf8b7435d6a4a80db7d4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Ajax\\AjaxResponse $response */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'ajaxRefresh',
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
    '354b9a7fe97e040f85e6edba01e6063f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\Entity\\ProductInterface $product */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'ajaxRefresh',
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
    '77af217c6079d3dcbf44cbd5667a4ec7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_product\\ProductVariationFieldRendererInterface $variation_field_renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'ajaxRefresh',
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
    '2c95e0f9544b602cd499f0e554053b2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the default variation for the widget.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductInterface $product
   *   The product.
   * @param array $variations
   *   An array of available variations.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   *   The default variation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'getDefaultVariation',
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
    '4592d3408123c6af217336954e4b0425' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the enabled variations for the product.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductInterface $product
   *   The product.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductVariationInterface[]
   *   An array of variations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'productinterface' => 'Drupal\\commerce_product\\Entity\\ProductInterface',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationajaxchangeevent' => 'Drupal\\commerce_product\\Event\\ProductVariationAjaxChangeEvent',
          'productevents' => 'Drupal\\commerce_product\\Event\\ProductEvents',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationWidgetBase',
         'functionName' => 'loadEnabledVariations',
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