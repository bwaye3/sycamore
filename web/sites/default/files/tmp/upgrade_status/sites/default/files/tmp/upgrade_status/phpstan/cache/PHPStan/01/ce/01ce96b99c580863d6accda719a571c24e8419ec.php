<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Resolver/OrderTypeResolverInterface.php-1624732871',
   'data' => 
  array (
    '5f8e39bd6bdf48c363603ab8dbbf2ef6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for order type resolvers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Resolver',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
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
    'e9ecca5b598e62622ad3909e81988c3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves the order type.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item being added to an order.
   *
   * @return string|null
   *   The order type ID, if resolved. Otherwise NULL, indicating that the
   *   next resolver in the chain should be called.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Resolver',
         'uses' => 
        array (
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
         'functionName' => 'resolve',
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