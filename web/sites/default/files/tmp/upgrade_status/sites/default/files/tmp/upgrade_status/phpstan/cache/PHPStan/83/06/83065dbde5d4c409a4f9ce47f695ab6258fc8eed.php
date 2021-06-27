<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/tests/src/Kernel/Entity/OrderItemTest.php-1624732871',
   'data' => 
  array (
    '39df13ccdf8257213b6136674d1d3fa5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the order item entity.
 *
 * @coversDefaultClass \\Drupal\\commerce_order\\Entity\\OrderItem
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity\\OrderItemTest',
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
    '9d4203bb6cc2a87e31aed0b83a03ff30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the order item entity and its methods.
   *
   * @covers ::getTitle
   * @covers ::setTitle
   * @covers ::getQuantity
   * @covers ::setQuantity
   * @covers ::getUnitPrice
   * @covers ::setUnitPrice
   * @covers ::isUnitPriceOverridden
   * @covers ::getTotalPrice
   * @covers ::recalculateTotalPrice
   * @covers ::getAdjustments
   * @covers ::setAdjustments
   * @covers ::addAdjustment
   * @covers ::removeAdjustment
   * @covers ::getAdjustedTotalPrice
   * @covers ::getAdjustedUnitPrice
   * @covers ::getData
   * @covers ::setData
   * @covers ::unsetData
   * @covers ::getCreatedTime
   * @covers ::setCreatedTime
   * @covers ::isLocked
   * @covers ::lock
   * @covers ::unlock
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity\\OrderItemTest',
         'functionName' => 'testOrderItem',
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
    '164c914bdb387ba905f9059168632846' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity\\OrderItemTest',
         'functionName' => 'testOrderItem',
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
    'ee47bba7438a89dbcff58fc2b1bbeffa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the legacy adjustments handling.
   *
   * @covers ::usesLegacyAdjustments
   * @covers ::getAdjustedTotalPrice
   * @covers ::getAdjustedUnitPrice
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity\\OrderItemTest',
         'functionName' => 'testHandlingLegacyAdjustments',
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
    'a159d581960bcf6f5a3245595cc15420' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the handling of invalid bundles.
   *
   * @covers ::bundleFieldDefinitions
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\Entity\\OrderItemTest',
         'functionName' => 'testInvalidBundle',
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