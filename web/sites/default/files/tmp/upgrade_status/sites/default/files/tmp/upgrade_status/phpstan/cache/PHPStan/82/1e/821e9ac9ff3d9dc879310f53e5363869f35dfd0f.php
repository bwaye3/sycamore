<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/PaymentGateway/Manual.php-1624732871',
   'data' => 
  array (
    '8b6a97156abd01c9d370ccc2223c35f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the Manual payment gateway.
 *
 * @CommercePaymentGateway(
 *   id = "manual",
 *   label = "Manual",
 *   display_label = "Manual",
 *   modes = {
 *     "n/a" = @Translation("N/A"),
 *   },
 *   forms = {
 *     "add-payment" = "Drupal\\commerce_payment\\PluginForm\\ManualPaymentAddForm",
 *     "receive-payment" = "Drupal\\commerce_payment\\PluginForm\\PaymentReceiveForm",
 *   },
 *   payment_type = "payment_manual",
 *   requires_billing_information = FALSE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '741969a9fb9eaa78e4414e021c0f559d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The token service.
   *
   * @var \\Drupal\\Core\\Utility\\Token
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '3913d1eb493efd70c3fcba92d656d90f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Manual object.
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
   * @param \\Drupal\\Core\\Utility\\Token $token
   *   The token service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '2b2ea18dacbe73323305ec2f1e3305f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '69bf4662274ff0b928e81b14352e2e9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    'e68cf04e6118ff4e5b1a72046b8a1043' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '74750dc6531946c1a5736f9c1614dad2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '3944c0518661cede5e1e20e1cdd99960' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
         'functionName' => 'buildPaymentInstructions',
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
    '455a9eb1216bfc21900d81bd4721abbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
         'functionName' => 'buildPaymentOperations',
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
    'e53a1fc0b56e09e30814f5813d1a0805' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '00442698635710c0a623dd1644acc751' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
         'functionName' => 'receivePayment',
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
    '3feb61d2015c2f429b5ea5ae03999b6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
    '5d09c4a77ed2b83a0b4e35b73f5fccc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'token' => 'Drupal\\Core\\Utility\\Token',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\Manual',
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
  ),
));