<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment_example/src/Plugin/Commerce/PaymentGateway/Onsite.php-1624732871',
   'data' => 
  array (
    'b4e6982759e43c9ab44934f87eb38d22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the On-site payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "example_onsite",
 *   label = "Example (On-site)",
 *   display_label = "Example",
 *   forms = {
 *     "add-payment-method" = "Drupal\\commerce_payment_example\\PluginForm\\Onsite\\PaymentMethodAddForm",
 *     "edit-payment-method" = "Drupal\\commerce_payment\\PluginForm\\PaymentMethodEditForm",
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
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
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
    '0b1167a86f955eca9d87aaf8edeb56d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
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
    'ff45627d5d727e8e60a87bb73dafe249' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
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
    'a3ce11e063a58235a0fd033c1a958d67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
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
    '06190f5fbd5e59dd83200b8088570806' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
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
    'f9f2852941e0f59ac3902f5c1325e5d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'createPayment',
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
    'c8c04f6eef0d849d218083d430ccb6b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem $billing_address */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'createPayment',
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
    '582439105f71b1732dc8509b29c148d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
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
    'f0e901c99dc38a9d938abb3a36a1a719' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'voidPayment',
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
    'fd330cfafe235f370e9a0eeb4e7ead4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'refundPayment',
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
    '000390b1dbf9007e8ef96a68b0d2a469' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'createPaymentMethod',
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
    'c2fa78280eff420fc3166a653e1e921c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\address\\Plugin\\Field\\FieldType\\AddressItem $billing_address */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'createPaymentMethod',
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
    'a7639450598a549ecfae37768b39c3ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'deletePaymentMethod',
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
    '6063640e2710f41ec4fd1081faeeb82d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'updatePaymentMethod',
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
    '6d149c8ecb8880a0cd342e83655e069f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'onsitepaymentgatewaybase' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OnsitePaymentGatewayBase',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\Onsite',
         'functionName' => 'buildAvsResponseCodeLabel',
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