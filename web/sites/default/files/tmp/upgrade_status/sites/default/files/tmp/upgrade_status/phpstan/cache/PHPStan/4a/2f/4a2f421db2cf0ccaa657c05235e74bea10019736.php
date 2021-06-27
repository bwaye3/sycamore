<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/EventSubscriber/AddressBookSubscriber.php-1624732871',
   'data' => 
  array (
    '7f53f74cc5d94e05c0bb15f0052abf15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Copies the order\'s profiles to the customer\'s address book.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
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
    'd5f81d2cde01f4b39f16ef310be4c0ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The address book.
   *
   * @var \\Drupal\\commerce_order\\AddressBookInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
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
    '22416916d87662100c1b1d36e122e746' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new AddressBookSubscriber object.
   *
   * @param \\Drupal\\commerce_order\\AddressBookInterface $address_book
   *   The address book.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
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
    'ca93edf1c8d93c580b3350d9728b30cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
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
    '74f9f5b9f0d5aa44d7d8810788803a04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies the order\'s profiles when the order is placed.
   *
   * @param \\Drupal\\state_machine\\Event\\WorkflowTransitionEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
         'functionName' => 'onOrderPlace',
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
    'e41c5dd6320e5d423a8d071c9157490a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
         'functionName' => 'onOrderPlace',
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
    '55a760587d2090157767ea41ebd21aab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies the order\'s profiles when the order is assigned.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderAssignEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
         'functionName' => 'onOrderAssign',
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
    '428dd815de09c51d575f6dd6fc372db9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'orderassignevent' => 'Drupal\\commerce_order\\Event\\OrderAssignEvent',
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\AddressBookSubscriber',
         'functionName' => 'onOrderAssign',
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