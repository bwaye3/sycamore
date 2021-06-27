<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/OrderItemMatcherInterface.php-1624732871',
   'data' => 
  array (
    '15a2da0f1556af39210a9f8600bf2081' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Finds matching order items.
 *
 * Used for combining order items in the add to cart process.
 *
 * By default, takes into account the order item type, purchased entity ID,
 * and any custom fields shown on the add to cart form.
 *
 * For example, when a custom "engraving" field is shown on the add to cart
 * form, two order items will be combined if they have the same
 * engraving, type, purchased entity ID.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcherInterface',
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
    'b71fb76d24bc46eff88f10cfd78fce10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds the first matching order item for the given order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface[] $order_items
   *   The order items to match against.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderItemInterface|null
   *   A matching order item, or NULL if none was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcherInterface',
         'functionName' => 'match',
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
    '54611f86189c0c9cda6d9210f3879cad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all matching order items for the given order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface[] $order_items
   *   The order items to match against.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderItemInterface[]
   *   The matching order items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcherInterface',
         'functionName' => 'matchAll',
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