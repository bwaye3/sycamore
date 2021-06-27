<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/CartSessionInterface.php-1624732871',
   'data' => 
  array (
    '1d61dbd4571d1f96d40a854ef1f94cb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Stores cart ids in the anonymous user\'s session.
 *
 * Allows the system to keep track of which cart orders belong to the anonymous
 * user. The session is the only available storage in this case, since all
 * anonymous users share the same user id (0).
 *
 * Tracks active and completed carts separately.
 *
 * @see \\Drupal\\commerce_cart\\CartProviderInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_cart\\CartSessionInterface',
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
    'a5a40ccee165fff66b9a2015f9b4f1ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all cart order ids from the session.
   *
   * @param string $type
   *   The cart session type.
   *
   * @return int[]
   *   A list of cart orders ids.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_cart\\CartSessionInterface',
         'functionName' => 'getCartIds',
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
    '099cb7bcc6d002d93eff1611f4194c50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds the given cart order ID to the session.
   *
   * @param int $cart_id
   *   The cart order ID.
   * @param string $type
   *   The cart session type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_cart\\CartSessionInterface',
         'functionName' => 'addCartId',
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
    '523e86a494eff01e3806939a2090c2e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the given cart order ID exists in the session.
   *
   * @param int $cart_id
   *   The cart order ID.
   * @param string $type
   *   The cart session type.
   *
   * @return bool
   *   TRUE if the given cart order ID exists in the session, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_cart\\CartSessionInterface',
         'functionName' => 'hasCartId',
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
    'f3c792a0096e640e956cca448fafe662' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the given cart order id from the session.
   *
   * @param int $cart_id
   *   The cart order ID.
   * @param string $type
   *   The cart session type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_cart\\CartSessionInterface',
         'functionName' => 'deleteCartId',
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