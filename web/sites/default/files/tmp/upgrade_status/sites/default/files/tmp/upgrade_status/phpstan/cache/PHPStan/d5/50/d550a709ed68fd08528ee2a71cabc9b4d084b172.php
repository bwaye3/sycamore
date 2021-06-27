<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/EventSubscriber/OrderAssignSubscriber.php-1624732871',
   'data' => 
  array (
    '6da6cf690355e0161f7159d0be275eb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The address book.
   *
   * @var \\Drupal\\commerce_order\\AddressBookInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderAssignSubscriber',
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
    'e80a52a9b38c1da16c1a17ab726605ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new AddressBookSubscriber object.
   *
   * @param \\Drupal\\commerce_order\\AddressBookInterface $address_book
   *   The address book.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderAssignSubscriber',
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
    'd8b5afb5cb075e232d02bf519660da50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderAssignSubscriber',
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
    'eb505ae13f610b26a485e93983e6d043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assigns anonymous payment methods to the new customer.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderAssignEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderAssignSubscriber',
         'functionName' => 'onAssign',
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
    '3a224c5244f5e5a85962b694061035c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface $payment_method */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\EventSubscriber\\OrderAssignSubscriber',
         'functionName' => 'onAssign',
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