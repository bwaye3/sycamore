<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment_example/src/Plugin/Commerce/PaymentGateway/OffsiteRedirect.php-1624732871',
   'data' => 
  array (
    'b9830956500dc1a3315ee059e4a51985' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the Off-site Redirect payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "example_offsite_redirect",
 *   label = "Example (Off-site redirect)",
 *   display_label = "Example",
 *   forms = {
 *     "offsite-payment" = "Drupal\\commerce_payment_example\\PluginForm\\OffsiteRedirect\\PaymentOffsiteForm",
 *   },
 *   payment_method_types = {"credit_card"},
 *   credit_card_types = {
 *     "amex", "dinersclub", "discover", "jcb", "maestro", "mastercard", "visa",
 *   },
 *   requires_billing_information = FALSE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'offsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OffsiteRedirect',
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
    '506605c5ff71d187a415fed7e0c5b256' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'offsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OffsiteRedirect',
         'functionName' => 'defaultConfiguration',
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
    '9eb8fe4f094c906dc91b7264f6a65875' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'offsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OffsiteRedirect',
         'functionName' => 'buildConfigurationForm',
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
    '3db8adf1aee8febb8909400c8214d796' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'offsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OffsiteRedirect',
         'functionName' => 'submitConfigurationForm',
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
    '4dfce89bf875433ebe7c817a08388c8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'offsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\OffsiteRedirect',
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