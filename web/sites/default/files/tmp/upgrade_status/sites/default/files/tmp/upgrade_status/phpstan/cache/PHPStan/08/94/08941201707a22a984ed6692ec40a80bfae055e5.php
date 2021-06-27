<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/CartManager.php-1624732871',
   'data' => 
  array (
    '8f97707ceb258161f6c0092cf1bfbaf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default implementation of the cart manager.
 *
 * Fires its own events, different from the order entity events by being a
 * result of user interaction (add to cart form, cart view, etc).
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
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
    '42641f76439daf17dfdb2515dfba6695' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order item storage.
   *
   * @var \\Drupal\\commerce_order\\OrderItemStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
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
    'e365f011dab2d9156d1f718d1f318b5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order item matcher.
   *
   * @var \\Drupal\\commerce_cart\\OrderItemMatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
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
    '753a27ec78fc72346726c3d3557684cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The event dispatcher.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
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
    '17746009887f53ed1e8b3ce1652d6d05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CartManager object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\commerce_cart\\OrderItemMatcherInterface $order_item_matcher
   *   The order item matcher.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => '__construct',
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
    'f1013070df8e156025b7eeba0e5f3df9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'emptyCart',
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
    '851a640e6292b9da8b7471c5d6df24d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'addEntity',
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
    '42e99e7507cee200917302de6177a477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'createOrderItem',
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
    '08bdf0948af5f7f0a0241ab9b5711cfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'addOrderItem',
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
    '788aec1c8108f8f5a535949cb1722169' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'updateOrderItem',
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
    '91401320caae4fea1cf5f6ef98a60fd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $original_order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'updateOrderItem',
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
    '357304987418cc8f8a2851cd00abf4e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'removeOrderItem',
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
    'cba56b7f50a72d6d39fffb4365da718f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the checkout step.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $cart
   *   The cart order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'cartorderitemaddevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemAddEvent',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartemptyevent' => 'Drupal\\commerce_cart\\Event\\CartEmptyEvent',
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'cartorderitemupdateevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemUpdateEvent',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\CartManager',
         'functionName' => 'resetCheckoutStep',
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