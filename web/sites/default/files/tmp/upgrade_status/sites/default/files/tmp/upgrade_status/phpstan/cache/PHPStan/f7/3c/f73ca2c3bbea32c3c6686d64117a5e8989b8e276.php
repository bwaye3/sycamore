<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/AvailabilityManagerInterface.php-1624732871',
   'data' => 
  array (
    'c02df1b336876554a973d95228ddb1ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Runs the added checkers to determine the availability of an order item.
 *
 * If any checker returns an "unavailable" availability result,
 * the order item is considered to be unavailable.
 *
 * Example checks:
 * - Whether the entity is in stock.
 * - Whether the entity\'s "available on" date is before the current date.
 *
 * @see \\Drupal\\commerce_order\\AvailabilityCheckerInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'legacycheckerinterface' => 'Drupal\\commerce\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
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
    '55d63e1591a74e2cb05fc88f8c49d1b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a checker.
   *
   * @param \\Drupal\\commerce_order\\AvailabilityCheckerInterface $checker
   *   The checker.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'legacycheckerinterface' => 'Drupal\\commerce\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
         'functionName' => 'addChecker',
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
    'deedf5ce99316d6d9498774a839ffdd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a "legacy" (i.e "deprecated") checker.
   *
   * @param \\Drupal\\commerce\\AvailabilityCheckerInterface $checker
   *   The "legacy" (i.e "deprecated") checker.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'legacycheckerinterface' => 'Drupal\\commerce\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
         'functionName' => 'addLegacyChecker',
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
    'fe7f894693a2ca2b4c06faac66754ba6' => 
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
   *   An AvailabilityResult value object determining whether an order item
   *   is available for purchase.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'legacycheckerinterface' => 'Drupal\\commerce\\AvailabilityCheckerInterface',
          'context' => 'Drupal\\commerce\\Context',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
        ),
         'className' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
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