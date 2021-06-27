<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/CouponCodeGeneratorInterface.php-1624732871',
   'data' => 
  array (
    'beff1897432e43597e71531f8c56fd78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generates coupon codes (unique, machine readable identifiers for coupons).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponCodeGeneratorInterface',
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
    'e7aadac59de1078b68d77cd391b52a99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the given pattern for the specified quantity.
   *
   * @param \\Drupal\\commerce_promotion\\CouponCodePattern $pattern
   *   The pattern.
   * @param int $quantity
   *   The quantity.
   *
   * @return bool
   *   TRUE if the pattern is valid, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponCodeGeneratorInterface',
         'functionName' => 'validatePattern',
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
    '812546b2ff7ef711b4904324c71b3e44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates coupon codes.
   *
   * Ensures uniqueness, which means that depending on the pattern, the
   * number of generated codes might be smaller than requested.
   * This can be mitigated by using a pattern with a prefix/suffix.
   *
   * @param \\Drupal\\commerce_promotion\\CouponCodePattern $pattern
   *   The pattern.
   * @param int $quantity
   *   The quantity.
   *
   * @return string[]
   *   The generated coupon codes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponCodeGeneratorInterface',
         'functionName' => 'generateCodes',
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