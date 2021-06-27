<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/AvailabilityCheckerInterface.php-1624732871',
   'data' => 
  array (
    '478377a55c57ee15f4687542c9ed9a55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for availability checkers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
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
    'e0577b44419a98b0891e0f570035479a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the checker applies to the given order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return bool
   *   TRUE if the checker applies to the given order item, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
         'functionName' => 'applies',
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
    'f6ab7ea6679f12e2bf6284cc47d50462' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the availability of the given order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param \\Drupal\\commerce\\Context $context
   *   The context.
   *
   * @return \\Drupal\\commerce_order\\AvailabilityResult
   *   The availability result. AvailabilityResult::unavailable() should be
   *   used to indicate that the given order item is "unavailable" for purchase.
   *   Note that an optional "reason" can be specified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AvailabilityCheckerInterface',
         'functionName' => 'check',
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