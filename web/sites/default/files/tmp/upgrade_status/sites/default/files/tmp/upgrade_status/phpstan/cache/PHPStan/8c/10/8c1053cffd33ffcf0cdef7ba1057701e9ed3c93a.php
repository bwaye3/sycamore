<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Entity/CouponInterface.php-1624732871',
   'data' => 
  array (
    '177f2bac317e2b5aeec1ccfc8ca06e42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for defining coupon entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
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
    'a92e36cf0012f0cd004305e2de69100e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the parent promotion.
   *
   * @return \\Drupal\\commerce_promotion\\Entity\\PromotionInterface|null
   *   The promotion entity, or null.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'getPromotion',
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
    '2879234929eb190aa01564861e289ca7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the parent promotion ID.
   *
   * @return int|null
   *   The promotion ID, or null.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'getPromotionId',
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
    'cfa54a8ff4aa5e9e1a672c0406d77c10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the coupon code.
   *
   * @return string
   *   Code for the coupon.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'getCode',
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
    '26da6b9487da93d976d646cd449a698c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the coupon code.
   *
   * @param string $code
   *   The coupon code.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'setCode',
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
    '04a1cbf91527dce66b757b34c5ed9e26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the coupon usage limit.
   *
   * Represents the maximum number of times the coupon can be used.
   * 0 for unlimited.
   *
   * @return int
   *   The coupon usage limit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'getUsageLimit',
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
    '116d50034dce984b838990d6f9eb195d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the coupon usage limit.
   *
   * @param int $usage_limit
   *   The coupon usage limit.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'setUsageLimit',
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
    'b511686a332c486131d4de2486d8c953' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the per customer coupon usage limit.
   *
   * Represents the maximum number of times the coupon can be used by a customer.
   * 0 for unlimited.
   *
   * @return int
   *   The per customer coupon usage limit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'getCustomerUsageLimit',
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
    'c1c77caff5678e63bf199dfaf72e2d06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the per customer coupon usage limit.
   *
   * @param int $usage_limit_customer
   *   The per customer coupon usage limit.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'setCustomerUsageLimit',
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
    'ef6462afb5392cdaf412523da475014b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the coupon is enabled.
   *
   * @return bool
   *   TRUE if the coupon is enabled, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'isEnabled',
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
    'b0c4982d9a3234eccf3fcf11dace8663' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether the coupon is enabled.
   *
   * @param bool $enabled
   *   Whether the coupon is enabled.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'setEnabled',
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
    '0ea4dc7cfea5239e2b284b26e01f181d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the coupon is available for the given order.
   *
   * Ensures that the parent promotion is available, the coupon
   * is enabled, and the usage limits are respected.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   *
   * @return bool
   *   TRUE if coupon is available, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\CouponInterface',
         'functionName' => 'available',
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