<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Plugin/Commerce/Condition/OrderItemPurchasedEntity.php-1624732871',
   'data' => 
  array (
    '9e6688074d5382c8e2a265be718b50fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the variation condition for order items.
 *
 * @CommerceCondition(
 *   id = "order_item_purchased_entity",
 *   label = @Translation("Purchased entity"),
 *   display_label = @Translation("Specific purchased item"),
 *   category = @Translation("Purchased items"),
 *   entity_type = "commerce_order_item",
 *   weight = -1,
 *   deriver = "Drupal\\commerce_order\\Plugin\\Commerce\\Condition\\PurchasedEntityConditionDeriver"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\Condition\\OrderItemPurchasedEntity',
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
    '059af9b48fab4b5a4c603d6a0265a099' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Commerce\\Condition\\OrderItemPurchasedEntity',
         'functionName' => 'evaluate',
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