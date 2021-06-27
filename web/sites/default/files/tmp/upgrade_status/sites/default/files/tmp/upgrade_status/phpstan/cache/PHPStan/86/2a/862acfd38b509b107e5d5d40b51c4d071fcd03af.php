<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/log/src/EventSubscriber/CartEventSubscriber.php-1624732871',
   'data' => 
  array (
    '4124c527e4138bb1c3dbf09e5b289478' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The log storage.
   *
   * @var \\Drupal\\commerce_log\\LogStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\CartEventSubscriber',
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
    '7a6347975cc903e44952e5220f8f6b6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CartEventSubscriber object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\CartEventSubscriber',
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
    'c5c240797effc4ff5ba9ccf0f7348ed2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\CartEventSubscriber',
         'functionName' => 'getSubscribedEvents',
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
    'c42a4064533da1f38abaa272aef422f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a log when an entity has been added to the cart.
   *
   * @param \\Drupal\\commerce_cart\\Event\\CartEntityAddEvent $event
   *   The cart event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\CartEventSubscriber',
         'functionName' => 'onCartEntityAdd',
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
    'd1435eea247596c4995ad4ee8c66c2a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a log when an order item has been removed from the cart.
   *
   * @param \\Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent $event
   *   The cart event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'cartentityaddevent' => 'Drupal\\commerce_cart\\Event\\CartEntityAddEvent',
          'cartevents' => 'Drupal\\commerce_cart\\Event\\CartEvents',
          'cartorderitemremoveevent' => 'Drupal\\commerce_cart\\Event\\CartOrderItemRemoveEvent',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\CartEventSubscriber',
         'functionName' => 'onCartOrderItemRemove',
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