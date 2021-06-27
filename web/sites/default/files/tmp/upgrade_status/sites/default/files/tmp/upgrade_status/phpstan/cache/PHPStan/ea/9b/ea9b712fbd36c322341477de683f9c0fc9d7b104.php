<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/EventSubscriber/TimestampEventSubscriber.php-1624732871',
   'data' => 
  array (
    '01c7879dcc4b8d17bbc2c7be4f1ce0d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The time.
   *
   * @var \\Drupal\\Component\\Datetime\\TimeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\TimestampEventSubscriber',
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
    'e83ed8d5e375546ce7dc1a3de197fbf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new TimestampEventSubscriber object.
   *
   * @param \\Drupal\\Component\\Datetime\\TimeInterface $time
   *   The time.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\TimestampEventSubscriber',
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
    'fcaf0830156f2eaa16d65c5be1d3cbfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\TimestampEventSubscriber',
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
    '75b3eef716e1ce928fc53e8626d0f015' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order\'s placed timestamp.
   *
   * @param \\Drupal\\state_machine\\Event\\WorkflowTransitionEvent $event
   *   The transition event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\TimestampEventSubscriber',
         'functionName' => 'onPlaceTransition',
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
    '8dcead3fa0b9efa5dc3cb5547f1332b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\TimestampEventSubscriber',
         'functionName' => 'onPlaceTransition',
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
    '7eef76cd1d03c6e16c9cbc25eef0a61e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the order\'s completed timestamp.
   *
   * @param \\Drupal\\state_machine\\Event\\WorkflowTransitionEvent $event
   *   The transition event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\TimestampEventSubscriber',
         'functionName' => 'onAnyTransition',
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
    'd45c148629c659fd61ba8742187729d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'workflowtransitionevent' => 'Drupal\\state_machine\\Event\\WorkflowTransitionEvent',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\TimestampEventSubscriber',
         'functionName' => 'onAnyTransition',
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