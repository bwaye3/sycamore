<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Controller/PaymentCheckoutController.php-1624732871',
   'data' => 
  array (
    '558f408edaf2d0a4e1bb64cdfaf3179b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides checkout endpoints for off-site payments.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
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
    'a4d2aa4befef1f71864c4becf73a9d6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The checkout order manager.
   *
   * @var \\Drupal\\commerce_checkout\\CheckoutOrderManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
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
    '607cafc1dec98bd358b179678a1a8002' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
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
    '1838115dfd7e0e2a2080773ebf36b9d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger.
   *
   * @var \\Psr\\Log\\LoggerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
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
    'ffafb3fe725c025c4362f9c6bbb9e3ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PaymentCheckoutController object.
   *
   * @param \\Drupal\\commerce_checkout\\CheckoutOrderManagerInterface $checkout_order_manager
   *   The checkout order manager.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   * @param \\Psr\\Log\\LoggerInterface $logger
   *   The logger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
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
    '19330c6ec07c4f1fda644bab794a76ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'create',
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
    'f3c5c24c43b567cfae8c87fa411ec8e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the "return" checkout payment page.
   *
   * Redirects to the next checkout page, completing checkout.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'returnPage',
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
    'a79f1e729fe35444f24f35daf711f87c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'returnPage',
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
    '7c17dbf153cb0f043b8861450f162bab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'returnPage',
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
    'c46518b65c2a8468b2384b2b08ceefb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_checkout\\Entity\\CheckoutFlowInterface $checkout_flow */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'returnPage',
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
    'ccc180e08fd019d80e8b4b17946872d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the "cancel" checkout payment page.
   *
   * Redirects to the previous checkout page.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'cancelPage',
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
    '6c76ef53b2787e3e4510f581a435e142' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'cancelPage',
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
    'afa708e71e5532db78b0be40b4c016b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'cancelPage',
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
    'cd34bc2a94bf75ce5cc5afbb2b7297ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_checkout\\Entity\\CheckoutFlowInterface $checkout_flow */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'cancelPage',
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
    '77ad9db5d240298c24b44e078118e0f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the requested step ID.
   *
   * Redirects to the actual step ID if the requested one is no longer
   * available. This can happen if payment was already cancelled, or if the
   * payment "notify" endpoint created the payment and placed the order
   * before the customer returned to the site.
   *
   * @param string $requested_step_id
   *   The requested step ID, usually "payment".
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   *
   * @throws \\Drupal\\commerce\\Response\\NeedsRedirectException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Controller',
         'uses' => 
        array (
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutordermanagerinterface' => 'Drupal\\commerce_checkout\\CheckoutOrderManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'accessexception' => 'Drupal\\Core\\Access\\AccessException',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment\\Controller\\PaymentCheckoutController',
         'functionName' => 'validateStepId',
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