<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/OrderItemMatcher.php-1624732871',
   'data' => 
  array (
    'cf7334dbfbcb58d37f65baefe4ce1d1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default implementation of the order item matcher.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
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
    '12cbbc57f0c7c634d46fa081bebe7e3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
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
    'a90047ad3e88bc07113399830abf5dec' => 
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
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
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
    'cf2fceda2dab640ce7c412328c0de547' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new OrderItemMatcher object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
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
    'abc8c0b03c6c77b36c3bdad758bc3e4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
         'functionName' => 'match',
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
    'bab7e1c6fd6f8b7090453735c2da0282' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
         'functionName' => 'matchAll',
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
    '1a1869e4647c076d870c0c2f459935b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $existing_order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
         'functionName' => 'matchAll',
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
    '8f5376cb4e3409c13e4838f152eb04d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of custom fields shown on the add to cart form.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return string[]
   *   The field names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
         'functionName' => 'getCustomFields',
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
    '74880e4c48b8b85f0490270bb2772193' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $form_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'orderitemcomparisonfieldsevent' => 'Drupal\\commerce_cart\\Event\\OrderItemComparisonFieldsEvent',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\OrderItemMatcher',
         'functionName' => 'getCustomFields',
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