<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/CouponAccessControlHandler.php-1624732871',
   'data' => 
  array (
    '4e003517d314c27d6bce9ea7beb67386' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an access control handler for coupons.
 *
 * Coupons are always managed in the scope of their parent (the promotion),
 * so they have a simplified permission set, and rely on parent access:
 * - A coupon can be viewed if the parent promotion can be viewed.
 * - A coupon can be updated or deleted if the parent promotion can be updated.
 * - A coupon can be created if the user has permission to update promotions.
 *
 * The "administer commerce_promotion" permission is also respected.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponAccessControlHandler',
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
    '5425b24bf59b7a386cd0157d9ec55685' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponAccessControlHandler',
         'functionName' => 'checkAccess',
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
    'bf7609bf4c07a833a010d98c59de0b83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\Entity\\CouponInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponAccessControlHandler',
         'functionName' => 'checkAccess',
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
    'c38a5e68b180a36a0886f183f4ba4420' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityaccesscontrolhandler' => 'Drupal\\Core\\Entity\\EntityAccessControlHandler',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\CouponAccessControlHandler',
         'functionName' => 'checkCreateAccess',
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