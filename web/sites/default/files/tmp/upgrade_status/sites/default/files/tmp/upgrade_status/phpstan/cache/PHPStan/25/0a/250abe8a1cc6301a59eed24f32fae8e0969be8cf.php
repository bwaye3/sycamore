<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/CartProviderInterface.php-1624732871',
   'data' => 
  array (
    '7d2eb161c1d426c5b1933ca60f9da0c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Creates and loads carts for anonymous and authenticated users.
 *
 * @see \\Drupal\\commerce_cart\\CartSessionInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
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
    'd25206caf927b20bf8858a1097bed4fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a cart order for the given store and user.
   *
   * @param string $order_type
   *   The order type ID.
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store. If empty, the current store is assumed.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user. If empty, the current user is assumed.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface
   *   The created cart order.
   *
   * @throws \\Drupal\\commerce_cart\\Exception\\DuplicateCartException
   *   When a cart with the given criteria already exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
         'functionName' => 'createCart',
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
    'baf764c6cb22775a03389484528a40ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finalizes the given cart order.
   *
   * Removes the cart flag from the order and saves it.
   * If the user is anonymous, moves the cart ID from the
   * active to the completed cart session.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $cart
   *   The cart order.
   * @param bool $save_cart
   *   Whether to immediately save the cart or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
         'functionName' => 'finalizeCart',
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
    '8a7ba3c6f3952c375743b2f8ba57b8b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the cart order for the given store and user.
   *
   * @param string $order_type
   *   The order type ID.
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store. If omitted, the current store is assumed.
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user. If omitted, the current user is assumed.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface|null
   *   The cart order, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
         'functionName' => 'getCart',
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
    '501aef579d323beef0ea75de70c46e81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the cart order ID for the given store and user.
   *
   * @param string $order_type
   *   The order type ID.
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface|null $store
   *   The store. If omitted, the current store is assumed.
   * @param \\Drupal\\Core\\Session\\AccountInterface|null $account
   *   The user. If empty, the current user is assumed.
   *
   * @return int|null
   *   The cart order ID, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
         'functionName' => 'getCartId',
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
    '1be5d8f937a892ba44a65e308f6faab5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all cart orders for the given user.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface|null $account
   *   The user. If omitted, the current user is assumed.
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface|null $store
   *   The store. If omitted, carts belonging to all stores are returned.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface[]
   *   A list of cart orders.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
         'functionName' => 'getCarts',
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
    'e311197f5e8d60b5f704833cd68689f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all cart order ids for the given user.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface|null $account
   *   The user. If omitted, the current user is assumed.
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface|null $store
   *   The store. If omitted, carts belonging to all stores are returned.
   *
   * @return int[]
   *   A list of cart orders ids.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
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
    '6e266af0298d59321fba9138030c0d94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears the static caches.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartProviderInterface',
         'functionName' => 'clearCaches',
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