<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/CouponStorageInterface.php-1624732871',
   'data' => 
  array (
    '057f51141498f1d1dcfe9115f9c69ca1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for coupon storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponStorageInterface',
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
    'b61d1031958f493c13d86f1d09763010' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the enabled coupon for the given coupon code.
   *
   * @param string $code
   *   The coupon code.
   *
   * @return \\Drupal\\commerce_promotion\\Entity\\CouponInterface
   *   The coupon.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponStorageInterface',
         'functionName' => 'loadEnabledByCode',
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
    'c5f18bb76f14c88c1ff220dd950b6f6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all coupons for the given promotion.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion
   *   The promotion.
   *
   * @return \\Drupal\\commerce_promotion\\Entity\\CouponInterface[]
   *   The coupons.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponStorageInterface',
         'functionName' => 'loadMultipleByPromotion',
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