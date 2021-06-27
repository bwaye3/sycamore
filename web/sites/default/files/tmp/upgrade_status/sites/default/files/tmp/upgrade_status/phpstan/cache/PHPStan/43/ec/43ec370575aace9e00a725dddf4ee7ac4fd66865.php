<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Entity/OrderInterface.php-1624732871',
   'data' => 
  array (
    'c0d5d3bad4aa1d7796fc2ba4c3c7c787' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for orders.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
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
    '8fc193bb8ec742fc7db99536387cae69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order number.
   *
   * @return string
   *   The order number.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getOrderNumber',
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
    'e6e25d3c5803565e58fa8e307a685e0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order number.
   *
   * @param string $order_number
   *   The order number.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setOrderNumber',
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
    '26ffafb213740d6c4b082b6e30e193b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the customer user.
   *
   * @return \\Drupal\\user\\UserInterface
   *   The customer user entity. If the order is anonymous (customer
   *   unspecified or deleted), an anonymous user will be returned. Use
   *   $customer->isAnonymous() to check.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getCustomer',
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
    '63f8651e8a89593004cf59e87572982e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the customer user.
   *
   * @param \\Drupal\\user\\UserInterface $account
   *   The customer user entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setCustomer',
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
    'f8165bc5e740877ce829e2cde809e3ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the customer user ID.
   *
   * @return int
   *   The customer user ID (\'0\' if anonymous).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getCustomerId',
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
    '48c51848a8a8b421ad5ab5a8be6250e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the customer user ID.
   *
   * @param int $uid
   *   The customer user ID.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setCustomerId',
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
    'c67702d749c8b439d3d50694702306eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order email.
   *
   * @return string
   *   The order email.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getEmail',
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
    '91316f69a73bfbf12de6d9856b0f7100' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order email.
   *
   * @param string $mail
   *   The order email.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setEmail',
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
    '521505ee22401ae175bc79f3cfaa4a8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order IP address.
   *
   * @return string
   *   The IP address.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getIpAddress',
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
    'd60275a703240b9ff1d43e41cf86e199' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order IP address.
   *
   * @param string $ip_address
   *   The IP address.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setIpAddress',
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
    '87ce0d0293846c5fc342d2b67dd5f857' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the billing profile.
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface|null
   *   The billing profile, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getBillingProfile',
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
    '525601d3f53f295c5f2ac03543806321' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the billing profile.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The billing profile.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setBillingProfile',
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
    '2992484bcb25cc2d54381e1700d1dc42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Collects all profiles that belong to the order.
   *
   * This includes the billing profile, plus other profiles added
   * by modules through event subscribers (e.g. the shipping profile).
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface[]
   *   The order\'s profiles, keyed by scope (billing, shipping, etc).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'collectProfiles',
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
    '618de7d7f85bec5bc38a2919699df37e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order items.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderItemInterface[]
   *   The order items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getItems',
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
    '394f30599cb049841424208a78b4225a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order items.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface[] $order_items
   *   The order items.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setItems',
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
    '32f3357126a7cbb660f9ab361b5150cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the order has order items.
   *
   * @return bool
   *   TRUE if the order has order items, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'hasItems',
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
    '2b71867e33263877cc30de83c96c46a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'addItem',
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
    'f50813f48d769c10a9959b08eedfd306' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes an order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'removeItem',
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
    'b9a0976d2b90ce5b1e38f1625da74991' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the order has a given order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return bool
   *   TRUE if the order item was found, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'hasItem',
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
    'a97b133c71be1562402cf1d93397f176' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes all adjustments that belong to the order.
   *
   * This includes both order and order item adjustments, with the exception
   * of adjustments added via the UI.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'clearAdjustments',
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
    'e9d7e2183415050e283dcc165974df5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Collects all adjustments that belong to the order.
   *
   * Unlike getAdjustments() which returns only order adjustments, this
   * method returns both order and order item adjustments.
   *
   * Important:
   * The returned adjustments are unprocessed, and must be processed before use.
   *
   * @param string[] $adjustment_types
   *   The adjustment types to include.
   *   Examples: fee, promotion, tax. Defaults to all adjustment types.
   *
   * @return \\Drupal\\commerce_order\\Adjustment[]
   *   The adjustments.
   *
   * @see \\Drupal\\commerce_order\\AdjustmentTransformerInterface::processAdjustments()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'collectAdjustments',
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
    '1c2dbf20b4137c8a759f108d8630c539' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order subtotal price.
   *
   * Represents a sum of all order item totals.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The order subtotal price, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getSubtotalPrice',
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
    '9ece8c9f02ce31a2e145825cad9a405f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recalculates the order total price.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'recalculateTotalPrice',
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
    '9fdbf0d6fd58f52a6dde28d2a3c0c37a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order total price.
   *
   * Represents a sum of all order item totals along with adjustments.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The order total price, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getTotalPrice',
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
    'c28687da92464ed887b1a0b9e9d34e06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the total paid price.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The total paid price, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getTotalPaid',
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
    'ff961086d5903153cc1806c79e719465' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the total paid price.
   *
   * @param \\Drupal\\commerce_price\\Price $total_paid
   *   The total paid price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setTotalPaid',
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
    '8c6a8b6d55e04f9ce7b0a24a66dd5169' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order balance.
   *
   * Calculated by subtracting the total paid price from the total price.
   * Can be negative in case the order was overpaid.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The order balance, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getBalance',
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
    'ae8993e2a07616aea4b098943d478fc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the order has been fully paid.
   *
   * Free orders (total price is zero) are considered fully paid once
   * they have been placed.
   *
   * Non-free orders are considered fully paid once their balance
   * becomes zero or negative.
   *
   * @return bool
   *   TRUE if the order has been fully paid, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'isPaid',
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
    'b9107abe98adfa0758165825f63978ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order state.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface
   *   The order state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getState',
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
    '8098cf80a0e49d5af427c6f560db0867' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order refresh state.
   *
   * @return string|null
   *   The refresh state, if set. One of the following order constants:
   *   REFRESH_ON_LOAD: The order should be refreshed when it is next loaded.
   *   REFRESH_ON_SAVE: The order should be refreshed before it is saved.
   *   REFRESH_SKIP: The order should not be refreshed for now.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getRefreshState',
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
    '73296b6f2603fb0f9159ac9d06e26f68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order refresh state.
   *
   * @param string $refresh_state
   *   The order refresh state.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setRefreshState',
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
    '6ab6f7d7e2fddb89a6cc7f0745a26247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an order data value with the given key.
   *
   * Used to store temporary data during order processing (i.e. checkout).
   *
   * @param string $key
   *   The key.
   * @param mixed $default
   *   The default value.
   *
   * @return mixed
   *   The value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getData',
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
    'd66ec0e092535b1374814da91b3c768e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an order data value with the given key.
   *
   * @param string $key
   *   The key.
   * @param mixed $value
   *   The value.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setData',
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
    '40f0c6e8812b7da310162227eb3dc74a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unsets an order data value with the given key.
   *
   * @param string $key
   *   The key.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'unsetData',
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
    'd7efb6539622f5d3352d6150af5046b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the order is locked.
   *
   * @return bool
   *   TRUE if the order is locked, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'isLocked',
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
    '75e08de84124e8bfe2f5b1aff38cacd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Locks the order.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'lock',
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
    'f36dbba0cf52ef8a230294fceebf730b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unlocks the order.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'unlock',
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
    'eb2e879336b39b2791f72867dd201e4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order creation timestamp.
   *
   * @return int
   *   Creation timestamp of the order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getCreatedTime',
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
    '64f32ef36548bdfff3160784c0adb0bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order creation timestamp.
   *
   * @param int $timestamp
   *   The order creation timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setCreatedTime',
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
    '14a124f56cb0a7a3018ce49063e4d3b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order placed timestamp.
   *
   * @return int
   *   The order placed timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getPlacedTime',
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
    '174befb77d8360b3971c4cfd2b26fda7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order placed timestamp.
   *
   * @param int $timestamp
   *   The order placed timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setPlacedTime',
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
    '78e2680146ecf45a09922f390c258e3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the order completed timestamp.
   *
   * @return int
   *   The order completed timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getCompletedTime',
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
    '29e77fb5d4763568979fd5ab0a822c8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order completed timestamp.
   *
   * @param int $timestamp
   *   The order completed timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'setCompletedTime',
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
    '248248da4161f418733d88a69592bde9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the calculation date/time for the order.
   *
   * Used during order processing, for determining promotion/tax availability.
   * Matches the placed timestamp, if the order has been placed.
   * Otherwise, falls back to the current request date/time.
   *
   * @return \\Drupal\\Core\\Datetime\\DrupalDateTime
   *   The calculation date/time, in the store timezone.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'entityadjustableinterface' => 'Drupal\\commerce_order\\EntityAdjustableInterface',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitystoreinterface' => 'Drupal\\commerce_store\\Entity\\EntityStoreInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
         'functionName' => 'getCalculationDate',
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