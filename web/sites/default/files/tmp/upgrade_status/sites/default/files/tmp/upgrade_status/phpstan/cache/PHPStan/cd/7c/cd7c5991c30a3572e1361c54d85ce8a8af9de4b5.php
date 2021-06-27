<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Plugin/Field/FieldWidget/UnitPriceWidget.php-1624732871',
   'data' => 
  array (
    'b50b5e424d565fed927252b5b6871454' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Plugin implementation of the \'commerce_unit_price\' widget.
 *
 * @FieldWidget(
 *   id = "commerce_unit_price",
 *   label = @Translation("Unit price"),
 *   field_types = {
 *     "commerce_price",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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
    'c3efde01b5bb8fcea3a050b51b5aa732' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The chain price resolver.
   *
   * @var \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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
    'ce3190856d7a95880adfa610135166f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new UnitPriceWidget object.
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
   * @param \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface $price_resolver
   *   The chain price resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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
    'fbf716a5f00fbc2e889253f42d101e44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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
    '5b3652f2717cead999ffb35cd0f32bca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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
    '2404c2c8b76edd4e6854dd7b0fd3b574' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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
    '0cfb9a1dfd4b92e7cbb65a5d444f6bff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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
    '6b6860dc7e0b2e833b576a98dac7db0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
         'functionName' => 'formElement',
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
    '901e9aa969a9bd3fdc86d88cdc0b101e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
         'functionName' => 'formElement',
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
    'aa25d64565c657cc2c8788d27fb9bb1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
         'functionName' => 'extractFormValues',
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
    '75fe3048b7f91976513b70803dac25f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'orderform' => 'Drupal\\commerce_order\\Form\\OrderForm',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'fielddefinitioninterface' => 'Drupal\\Core\\Field\\FieldDefinitionInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
          'widgetbase' => 'Drupal\\Core\\Field\\WidgetBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Field\\FieldWidget\\UnitPriceWidget',
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