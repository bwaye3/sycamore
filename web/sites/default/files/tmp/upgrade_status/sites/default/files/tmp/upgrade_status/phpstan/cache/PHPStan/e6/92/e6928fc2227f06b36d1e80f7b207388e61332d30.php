<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/PromotionUsageInterface.php-1624732871',
   'data' => 
  array (
    'c6948eb5954009cab2ffe7ee31bfd2e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tracks promotion usage.
 *
 * The customer is tracked by storing the email, which allows tracking
 * both authenticated and anonymous customers the same way.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
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
    '572633cfdad9ca80c2f076493e8f73be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers usage for the given order.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion
   *   The promotion.
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface $coupon
   *   (Optional) The used coupon.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'register',
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
    '5a8c50538eafb0a4a11691f5de73088a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reassigns usage to a new customer email.
   *
   * @param string $old_mail
   *   The old customer email.
   * @param string $new_mail
   *   The new customer email.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'reassign',
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
    'd92f0b47870b3a2ddd85b52ab680ef29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes all usage for the given promotions.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface[] $promotions
   *   The promotions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'delete',
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
    'dc0d9bf21b445e0bfa5e8fbc79684da1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes all usage for the given coupons.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface[] $coupons
   *   The coupons.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'deleteByCoupon',
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
    'cd871bedad8a1d51adf63dabc2e9a26c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the usage for the given promotion.
   *
   * The optional $mail parameter can be used to restrict the usage count
   * to a specific customer email.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion
   *   The promotion.
   * @param string $mail
   *   (Optional) The customer email.
   *
   * @return int
   *   The usage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'load',
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
    '707843df986c2de618ec199736a0f8fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the usage for the given coupon.
   *
   * The optional $mail parameter can be used to restrict the usage count
   * to a specific customer email.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface $coupon
   *   The coupon.
   * @param string $mail
   *   (Optional) The customer email.
   *
   * @return int
   *   The usage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'loadByCoupon',
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
    'ab83679262380eb5676bd3a96ae73e39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the usage for the given promotions.
   *
   * The optional $mail parameter can be used to restrict the usage count
   * to a specific customer email.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface[] $promotions
   *   The promotions.
   * @param string $mail
   *   (Optional) The customer email.
   *
   * @return array
   *   The usage counts, keyed by promotion ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'loadMultiple',
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
    '3fd4dd9e32fd04b8ff721abc6c4c8d00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the usage for the given coupon.
   *
   * The optional $mail parameter can be used to restrict the usage count
   * to a specific customer email.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface[] $coupons
   *   The coupons.
   * @param string $mail
   *   (Optional) The customer email.
   *
   * @return array
   *   The usage counts, keyed by promotion ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'couponinterface' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
          'promotioninterface' => 'Drupal\\commerce_promotion\\Entity\\PromotionInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\PromotionUsageInterface',
         'functionName' => 'loadMultipleByCoupon',
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