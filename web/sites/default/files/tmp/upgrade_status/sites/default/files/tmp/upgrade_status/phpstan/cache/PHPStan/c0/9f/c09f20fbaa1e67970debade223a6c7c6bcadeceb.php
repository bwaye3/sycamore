<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Plugin/Commerce/PromotionOffer/BuyXGetY.php-1624732871',
   'data' => 
  array (
    '5471df09bca4262b4ef1ac7e3b571137' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the "Buy X Get Y" offer for orders.
 *
 * Examples:
 * - "Buy 1 t-shirt, get 1 hat for $10 less"
 * - "Buy 3 t-shirts, get 2 t-shirts free (100% off)"
 *
 * The cheapest items are always discounted first. The offer applies multiple
 * times ("Buy 3 Get 1" will discount 2 items when 6 are bought).
 *
 * Decimal quantities are supported.
 *
 * @CommercePromotionOffer(
 *   id = "order_buy_x_get_y",
 *   label = @Translation("Buy X Get Y"),
 *   entity_type = "commerce_order",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
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
    '4cc8d5a6f2c52f19df95cc090f7f541f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The condition manager.
   *
   * @var \\Drupal\\commerce\\ConditionManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
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
    '7e0afdd3f1c1176265bcaaa558795cc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The chain base price resolver.
   *
   * @var \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
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
    '565030569908a65da2d5abae1956fba9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
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
    '11d5534a33ae0e9237d2b60a97574dee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new BuyXGetY object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The pluginId for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\commerce_price\\RounderInterface $rounder
   *   The rounder.
   * @param \\Drupal\\commerce_order\\PriceSplitterInterface $splitter
   *   The splitter.
   * @param \\Drupal\\commerce\\ConditionManagerInterface $condition_manager
   *   The condition manager.
   * @param \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface $chain_price_resolver
   *   The chain price resolver.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
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
    'ea6cef3f27c198a1326c95e25231d2ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
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
    'ae2b8948fa22ebef65ebb8ee0fbb85c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'defaultConfiguration',
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
    '9075153b05245f88197e4800ab856656' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'buildConfigurationForm',
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
    '03190feffd134386457240bf9d8a7c49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
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
    '05274e2b54bfcbaf3bce4fde70aaef03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'validateConfigurationForm',
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
    'a055a002485c3639d79d3c035a158d0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'submitConfigurationForm',
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
    '50f17ab5104ee0e33a4cea2e4a97c88b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'apply',
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
    '384bbabb64850b2bdb85d1f996eaba99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'apply',
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
    'fa5e93b4d3c1ccb80c8d8cde9eba4360' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'clear',
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
    '695d1abbd145cce8f20a0001e77d0917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'clear',
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
    '1d1b84d78f69fc8208e78a8106984c57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a condition group for the given condition configuration.
   *
   * @param array $condition_configuration
   *   The condition configuration.
   *
   * @return \\Drupal\\commerce\\ConditionGroup
   *   The condition group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'buildConditionGroup',
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
    'f6c1e63cca2e352e32c41ac85a8e7242' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selects non-free order items that match the given conditions.
   *
   * Selected order items are sorted by unit price in the specified direction.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface[] $order_items
   *   The order items.
   * @param \\Drupal\\commerce\\ConditionGroup $conditions
   *   The conditions.
   * @param string $sort_direction
   *   The sort direction.
   *   Use \'ASC\' for least expensive first, \'DESC\' for most expensive first.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderItemInterface[]
   *   The selected order items, keyed by order item ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'selectOrderItems',
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
    '58e35433683bd88d9ae9edaf10180295' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the configured purchasable entity amongst the given conditions.
   *
   * @param \\Drupal\\commerce\\ConditionGroup $conditions
   *   The condition group.
   *
   * @return \\Drupal\\commerce\\PurchasableEntityInterface|null
   *   The purchasable entity, or NULL if not found in the conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'findSinglePurchasableEntity',
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
    'baf83bdede5f22fea3a447e6edaa3d19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attempt to find the given purchasable entity amongst the given order items.
   *
   * If the given purchasable entity isn\'t referenced by any order item, create
   * an order item referencing it so we can automatically add it to the order.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $get_purchasable_entity
   *   The "get" purchasable entity.
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface[] $order_items
   *   The order items.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderItemInterface
   *   An order item referencing the given purchasable entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'findOrCreateOrderItem',
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
    'cedac5608a5aae3854512b8d8707095e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'findOrCreateOrderItem',
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
    'faadc547e47f7670879241a1d67becfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates the expected get quantity.
   *
   * @param array $buy_quantities
   *   An array of buy quantities.
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return string
   *   The expected get quantity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'calculateExpectedGetQuantity',
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
    '308d57afe1c3c795184012b45225d70e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the #states visibility array for the \'auto_add\' form element.
   *
   * @return array
   *   An array of visibility options for a form element\'s #state property.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'getAutoAddStatesVisibility',
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
    'a83e21e0287b1d4d56c6065a885c5d4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Takes a slice from the given quantity list.
   *
   * For example, [\'1\' => \'10\', \'2\' => \'5\'] sliced for total quantity \'11\'
   * will produce a [\'1\' => \'10\', \'2\' => \'1\'] slice, leaving [\'2\' => \'4\']
   * in the original list.
   *
   * @param array $quantities
   *   The quantity list. Modified by reference.
   * @param string $total_quantity
   *   The total quantity of the new slice.
   *
   * @return array
   *   The quantity list slice.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'sliceQuantities',
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
    '50cf31f4648816a53c5a843b8088306c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes the second quantity list from the first quantity list.
   *
   * For example: [\'1\' => \'10\', \'2\' => \'20\'] - [\'1\' => \'10\', \'2\' => \'17\']
   * will result in [\'2\' => \'3\'].
   *
   * @param array $first_quantities
   *   The first quantity list.
   * @param array $second_quantities
   *   The second quantity list.
   *
   * @return array
   *   The new quantity list.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'removeQuantities',
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
    '0168aab022c08483e77f44dcc6109309' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges the first quantity list with the second quantity list.
   *
   * Quantities belonging to shared order item IDs will be added together.
   *
   * For example: [\'1\' => \'10\'] and [\'1\' => \'10\', \'2\' => \'17\']
   * will merge into [\'1\' => \'20\', \'2\' => \'17\'].
   *
   * @param array $first_quantities
   *   The first quantity list.
   * @param array $second_quantities
   *   The second quantity list.
   *
   * @return array
   *   The new quantity list.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'mergeQuantities',
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
    '1d84e0b2db68b88160f81b6ef094769c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an adjustment amount for the given order item and quantity.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param string $quantity
   *   The quantity.
   *
   * @return \\Drupal\\commerce_price\\Price
   *   The adjustment amount.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'buildAdjustmentAmount',
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
    'b681cd04a9e7b9f50ae338606a985d01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the purchasable entity condition plugin definitions.
   *
   * @return array
   *   The purchasable entity condition plugin definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'conditionmanagerinterface' => 'Drupal\\commerce\\ConditionManagerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityconditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\PurchasableEntityConditionInterface',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'pricesplitterinterface' => 'Drupal\\commerce_order\\PriceSplitterInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\BuyXGetY',
         'functionName' => 'getPurchasableEntityConditions',
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