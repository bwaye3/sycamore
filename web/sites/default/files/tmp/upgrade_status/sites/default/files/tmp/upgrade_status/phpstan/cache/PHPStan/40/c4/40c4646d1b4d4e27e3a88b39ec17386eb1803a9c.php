<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/tests/modules/commerce_payment_test/src/Plugin/Commerce/PaymentGateway/TestOffsite.php-1624732871',
   'data' => 
  array (
    'ae693a46adf9c2aa55a34e52caf30acc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the Test off-site payment gateway.
 *
 * This is a copy of example_offsite_redirect with additional logic around
 * order data usage.
 *
 * @CommercePaymentGateway(
 *   id = "test_offsite",
 *   label = "Test (Off-site redirect)",
 *   display_label = "Test",
 *   forms = {
 *     "offsite-payment" = "Drupal\\commerce_payment_example\\PluginForm\\OffsiteRedirect\\PaymentOffsiteForm",
 *   },
 *   payment_method_types = {"credit_card"},
 *   credit_card_types = {
 *     "amex", "dinersclub", "discover", "jcb", "maestro", "mastercard", "visa",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_test\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'offsiteredirect' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OffsiteRedirect',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_test\\Plugin\\Commerce\\PaymentGateway\\TestOffsite',
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
    '892dfef1bc62a4613268db5617baf55d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Adds data to the order and saves it. Done before or after the payment
   * is saved. Used by OffsiteOrderDataTest.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_test\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'offsiteredirect' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OffsiteRedirect',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_test\\Plugin\\Commerce\\PaymentGateway\\TestOffsite',
         'functionName' => 'onReturn',
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