<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/PaymentMethodStorageInterface.php-1624732871',
   'data' => 
  array (
    '53a391b2ca24ed452433d23ae78bb7d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for payment method storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
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
    'fdc1b55b86d854a4c382cb824e18fbf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads the user\'s reusable payment methods for the given payment gateway.
   *
   * @param \\Drupal\\user\\UserInterface $account
   *   The user account.
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway
   *   The payment gateway.
   * @param array $billing_countries
   *   (Optional) A list of billing countries to filter by.
   *   For example, if [\'US\', \'FR\'] is given, only payment methods
   *   with billing profiles from those countries will be returned.
   *   Filtering is skipped if the payment gateway doesn\'t collect
   *   billing information.
   *
   * @return \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface[]
   *   The reusable payment methods.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
         'functionName' => 'loadReusable',
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
    'd1a294fc426e545fcb03b2c25f1fc59f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a payment method for a customer, without permanently saving it.
   *
   * @param string $payment_method_type
   *   The payment method type.
   * @param string $payment_gateway_id
   *   The payment gateway ID.
   * @param string|int $customer_id
   *   The customer ID.
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $billing_profile
   *   The billing profile, optional.
   *
   * @return \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface
   *   A new payment method object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
         'functionName' => 'createForCustomer',
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