<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/EntityAdjustableInterface.php-1624732871',
   'data' => 
  array (
    '92430ad9caa579bb375be863273cc372' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for objects that contain adjustments.
 *
 * Adjustments store promotions, taxes, fees, shipping costs.
 * They can be calculated on the order level (based on the order subtotal),
 * or on the order item level (based on the order item total).
 *
 * if $order_item->usesLegacyAdjustments() is true, the order item adjustments
 * were calculated based on the order item unit price, which was the default
 * logic prior to Commerce 2.8, changed in #2980713.
 *
 * Adjustments are always displayed in the order total summary, below
 * the subtotal. They are not shown as a part of the order item prices.
 * To get the order item total price with adjustments included, use
 * $order_item->getAdjustedTotalPrice().
 *
 * @see \\Drupal\\commerce_order\\Entity\\OrderInterfaceEntity
 * @see \\Drupal\\commerce_order\\Entity\\OrderItemInterfaceEntity
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
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
    '88ed0cd19a38d148162fedf00f4c0826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the adjustments.
   *
   * @param string[] $adjustment_types
   *   The adjustment types to include.
   *   Examples: fee, promotion, tax. Defaults to all adjustment types.
   *
   * @return \\Drupal\\commerce_order\\Adjustment[]
   *   The adjustments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
         'functionName' => 'getAdjustments',
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
    'd6c5dfabffde82b9a09196b6530d7228' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the adjustments.
   *
   * @param \\Drupal\\commerce_order\\Adjustment[] $adjustments
   *   The adjustments.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
         'functionName' => 'setAdjustments',
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
    'ffbd02f92b4d10ae51285bfd70e9543c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an adjustment.
   *
   * @param \\Drupal\\commerce_order\\Adjustment $adjustment
   *   The adjustment.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
         'functionName' => 'addAdjustment',
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
    '12956a9b0276258bd6ee808e1939767e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes an adjustment.
   *
   * @param \\Drupal\\commerce_order\\Adjustment $adjustment
   *   The adjustment to remove.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
         'functionName' => 'removeAdjustment',
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