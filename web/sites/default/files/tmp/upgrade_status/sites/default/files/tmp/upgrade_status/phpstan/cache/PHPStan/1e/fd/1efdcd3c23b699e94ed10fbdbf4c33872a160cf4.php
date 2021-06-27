<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment_example/src/Plugin/Commerce/PaymentGateway/StoredOffsiteRedirect.php-1624732871',
   'data' => 
  array (
    '115e55e2c4c2acf0f1edbef63dcce0a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an example offsite payment gateway with stored payment methods.
 *
 * @CommercePaymentGateway(
 *   id = "example_stored_offsite_redirect",
 *   label = "Example (Off-site redirect with stored payment methods)",
 *   display_label = "Example Stored Offsite",
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
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    '4ed3c691468c40c03beb95c9c25d2c80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    'c9df85cf5965f9875eddf914383a1f0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PaymentGatewayBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\commerce_payment\\PaymentTypeManager $payment_type_manager
   *   The payment type manager.
   * @param \\Drupal\\commerce_payment\\PaymentMethodTypeManager $payment_method_type_manager
   *   The payment method type manager.
   * @param \\Drupal\\Component\\Datetime\\TimeInterface $time
   *   The time.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    '9c894e5b2782888c2e495c5882a9a634' => 
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
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    '35f7c5b4c1954dbee2e13775429d976c' => 
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
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    '19d7e6c57edb69e003214f040b46f71c' => 
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
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    'd53a7b7700c05283789cd2623f717fc9' => 
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
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    '7cbbe3b2a1e6c6b7e86f45e925475015' => 
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
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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
    'eb8fe645cecd581a417a096606ab7374' => 
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
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\commerce_payment_example\\Plugin\\Commerce\\PaymentGateway\\StoredOffsiteRedirect',
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