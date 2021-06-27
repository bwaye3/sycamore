<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/tests/modules/commerce_checkout_test/src/EventSubscriber/CheckoutSubscriber.php-1624732871',
   'data' => 
  array (
    '888d5528291cde89c12ca80ab32250c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout_test\\EventSubscriber',
         'uses' => 
        array (
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_checkout_test\\EventSubscriber\\CheckoutSubscriber',
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
    '11b436583bfb39a1bd8ccff7cfd8b477' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores arbitrary data on the order on checkout completion.
   *
   * @param \\Drupal\\commerce_order\\Event\\OrderEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout_test\\EventSubscriber',
         'uses' => 
        array (
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_checkout_test\\EventSubscriber\\CheckoutSubscriber',
         'functionName' => 'onCompletion',
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
    '86a7a4141280d666aa5009d8131d2cad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Redirects to the user edit page after account creation.
   *
   * @param \\Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout_test\\EventSubscriber',
         'uses' => 
        array (
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_checkout_test\\EventSubscriber\\CheckoutSubscriber',
         'functionName' => 'onRegister',
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
    '1854612482941c5b88aa76ce11521b8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Session\\AccountInterface $account */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout_test\\EventSubscriber',
         'uses' => 
        array (
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_checkout_test\\EventSubscriber\\CheckoutSubscriber',
         'functionName' => 'onRegister',
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