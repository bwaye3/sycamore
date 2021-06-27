<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/PaymentGateway/SupportsAuthorizationsInterface.php-1624732871',
   'data' => 
  array (
    'f2ba2b05933d0d1cb041fae162939ec9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for gateways which support authorizing payments.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsAuthorizationsInterface',
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
    '1fcccd98a2bc0445528f07a4988832d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the given payment can be captured.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment
   *   The payment to capture.
   *
   * @return bool
   *   TRUE if the payment can be captured, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsAuthorizationsInterface',
         'functionName' => 'canCapturePayment',
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
    'a4f2e4b33326e55fd02dc17d7e3eba84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Captures the given authorized payment.
   *
   * Only payments in the \'authorization\' state can be captured.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment
   *   The payment to capture.
   * @param \\Drupal\\commerce_price\\Price $amount
   *   The amount to capture. If NULL, defaults to the entire payment amount.
   *
   * @throws \\Drupal\\commerce_payment\\Exception\\PaymentGatewayException
   *   Thrown when the transaction fails for any reason.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsAuthorizationsInterface',
         'functionName' => 'capturePayment',
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