<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/PaymentGateway/OnsitePaymentGatewayInterface.php-1624732871',
   'data' => 
  array (
    '44b63f18b683ab832244454696f1e190' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the base interface for on-site payment gateways.
 *
 * On-site payment gateways allow the customer to enter credit card details
 * directly on the site. The details might be safely tokenized before they
 * reach the server (Braintree, Stripe, etc) or they might be transmitted
 * directly through the server (PayPal Payments Pro).
 *
 * On-site payment flow:
 * 1) The customer enters checkout.
 * 2) The PaymentInformation checkout pane shows the "add-payment-method"
 *    plugin form, allowing the customer to enter their payment details.
 * 3) On submit, a payment method is created via createPaymentMethod()
 *    and attached to the customer and the order.
 * 4) The customer continues checkout, hits the "payment" checkout step.
 * 5) The PaymentProcess checkout pane calls createPayment(), which charges
 *    the provided payment method and creates a payment.
 *
 * If the payment method could not be charged (for example, because the credit
 * card\'s daily limit was breached), the customer is redirected back to the
 * checkout step that contains the PaymentInformation checkout pane, to provide
 * a different payment method.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayInterface',
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
  ),
));