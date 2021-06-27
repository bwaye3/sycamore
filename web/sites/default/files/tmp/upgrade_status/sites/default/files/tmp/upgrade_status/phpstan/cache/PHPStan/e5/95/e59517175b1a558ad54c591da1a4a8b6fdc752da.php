<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/PriceCalculatorInterface.php-1624732871',
   'data' => 
  array (
    'f02d72e1b963e7e35a2747dddef152e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Calculates the price a purchasable entity would have if it was in an order.
 *
 * Used for product listings and pages, where an order doesn\'t exist yet.
 * When an order does exist, the actual calculation happens in OrderRefresh.
 *
 * @see \\Drupal\\commerce_order\\OrderRefresh
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
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
    '98b1c38882c0eb8fbf1587d686518738' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an order processor for the given adjustment type.
   *
   * @param \\Drupal\\commerce_order\\OrderProcessorInterface $processor
   *   The order processor.
   * @param string $adjustment_type
   *   The adjustment type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
         'functionName' => 'addProcessor',
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
    'f39c98be7fe71dde38a98e65bc128eaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all order processors for the given adjustment type.
   *
   * @param string $adjustment_type
   *   The adjustment type.
   *
   * @return \\Drupal\\commerce_order\\OrderProcessorInterface[]
   *   The order processors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
         'functionName' => 'getProcessors',
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
    '1549ac9aed48291dd846fa25421f9891' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates a purchasable entity\'s price.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $purchasable_entity
   *   The purchasable entity.
   * @param string $quantity
   *   The quantity.
   * @param \\Drupal\\commerce\\Context $context
   *   The context.
   * @param string[] $adjustment_types
   *   The adjustment types to include in the calculated price.
   *   Examples: fee, promotion, tax.
   *
   * @return \\Drupal\\commerce_order\\PriceCalculatorResult
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\PriceCalculatorInterface',
         'functionName' => 'calculate',
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