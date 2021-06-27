<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/tests/modules/commerce_payment_test/src/Plugin/Commerce/PaymentGateway/TestOnsite.php-1624732871',
   'data' => 
  array (
    '0d4fc38b75c763ea50ec03abcf004786' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the Test on-site payment gateway.
 *
 * This is a copy of example_onsite with a different display_label.
 *
 * @CommercePaymentGateway(
 *   id = "test_onsite",
 *   label = "Test (On-site)",
 *   display_label = "Test",
 *   forms = {
 *     "add-payment-method" = "Drupal\\commerce_payment_example\\PluginForm\\Onsite\\PaymentMethodAddForm",
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
          'onsite' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
        ),
         'className' => 'Drupal\\commerce_payment_test\\Plugin\\Commerce\\PaymentGateway\\TestOnsite',
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