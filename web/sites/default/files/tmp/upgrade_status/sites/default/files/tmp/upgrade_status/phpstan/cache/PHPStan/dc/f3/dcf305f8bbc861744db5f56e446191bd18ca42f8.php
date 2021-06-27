<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/OrderTotalSummaryInterface.php-1624732871',
   'data' => 
  array (
    '708edda7a3711042b0aff8839652fc02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the totals for the given order.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   *
   * @return array
   *   An array of totals with the following elements:
   *     - subtotal: The order subtotal price.
   *     - adjustments: The adjustments:
   *         - type: The adjustment type.
   *         - label: The adjustment label.
   *         - amount: The adjustment amount.
   *         - percentage: The decimal adjustment percentage, when available.
   *     - total: The order total price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
        ),
         'className' => 'Drupal\\commerce_order\\OrderTotalSummaryInterface',
         'functionName' => 'buildTotals',
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