<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/tests/src/Kernel/Entity/PromotionTest.php-1624732871',
   'data' => 
  array (
    '4754a419fb4c90963f8797632f718540' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the Promotion entity.
 *
 * @coversDefaultClass \\Drupal\\commerce_promotion\\Entity\\Promotion
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity',
         'uses' => 
        array (
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'coupon' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
          'promotion' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
          'orderitempercentageoff' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPercentageOff',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity\\PromotionTest',
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
    '3bb7c8ec26a88305eefa29c20feb95ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity',
         'uses' => 
        array (
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'coupon' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
          'promotion' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
          'orderitempercentageoff' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPercentageOff',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity\\PromotionTest',
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
    'debfa556c96de23d1bfa08f61eac663f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity',
         'uses' => 
        array (
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'coupon' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
          'promotion' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
          'orderitempercentageoff' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPercentageOff',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity\\PromotionTest',
         'functionName' => 'setUp',
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
    '415e1c700dcb697176e2a46a30b65041' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::getName
   * @covers ::setName
   * @covers ::getDisplayName
   * @covers ::setDisplayName
   * @covers ::getDescription
   * @covers ::setDescription
   * @covers ::getOrderTypes
   * @covers ::setOrderTypes
   * @covers ::getOrderTypeIds
   * @covers ::setOrderTypeIds
   * @covers ::getStores
   * @covers ::setStores
   * @covers ::setStoreIds
   * @covers ::getStoreIds
   * @covers ::getOffer
   * @covers ::setOffer
   * @covers ::getConditionOperator
   * @covers ::setConditionOperator
   * @covers ::getCouponIds
   * @covers ::getCoupons
   * @covers ::setCoupons
   * @covers ::hasCoupons
   * @covers ::addCoupon
   * @covers ::removeCoupon
   * @covers ::hasCoupon
   * @covers ::getUsageLimit
   * @covers ::setUsageLimit
   * @covers ::getUsageLimit
   * @covers ::setUsageLimit
   * @covers ::getStartDate
   * @covers ::setStartDate
   * @covers ::getEndDate
   * @covers ::setEndDate
   * @covers ::isEnabled
   * @covers ::setEnabled
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity',
         'uses' => 
        array (
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'coupon' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
          'promotion' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
          'orderitempercentageoff' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPercentageOff',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity\\PromotionTest',
         'functionName' => 'testPromotion',
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
    '1758fd6f12af878d4d7567c9365df1b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity',
         'uses' => 
        array (
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'coupon' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
          'promotion' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
          'orderitempercentageoff' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPercentageOff',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity\\PromotionTest',
         'functionName' => 'testPromotion',
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
    '743a92044b734348f22c521dad477ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::createDuplicate
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity',
         'uses' => 
        array (
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'coupon' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
          'promotion' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
          'orderitempercentageoff' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPercentageOff',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
          'orderkerneltestbase' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_promotion\\Kernel\\Entity\\PromotionTest',
         'functionName' => 'testDuplicate',
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