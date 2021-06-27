<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/CheckoutPane/PaymentInformation.php-1624732871',
   'data' => 
  array (
    'e3d4ae9059d3ae1409f499056764be2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the payment information pane.
 *
 * Disabling this pane will automatically disable the payment process pane,
 * since they are always used together. Developers subclassing this pane
 * should use hook_commerce_checkout_pane_info_alter(array &$panes) to
 * point $panes[\'payment_information\'][\'class\'] to the new child class.
 *
 * @CommerceCheckoutPane(
 *   id = "payment_information",
 *   label = @Translation("Payment information"),
 *   default_step = "order_information",
 *   wrapper_element = "fieldset",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
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
    '24cc32abbcdc2ec5fcd9d4adb1778dbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
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
    '2be7648da6234100c5be6290c9591275' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The inline form manager.
   *
   * @var \\Drupal\\commerce\\InlineFormManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
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
    'a42e9d92f23eadc01db490e83d9cada3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The payment options builder.
   *
   * @var \\Drupal\\commerce_payment\\PaymentOptionsBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
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
    '4cd896a64a43b77165ad901a91485e00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PaymentInformation object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface $checkout_flow
   *   The parent checkout flow.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\commerce\\InlineFormManager $inline_form_manager
   *   The inline form manager.
   * @param \\Drupal\\commerce_payment\\PaymentOptionsBuilderInterface $payment_options_builder
   *   The payment options builder.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
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
    '75051d96aa48a8d666b7b5995f1d60a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
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
    '8490f42462b014790f92118ea1577c84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'buildPaneSummary',
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
    'ccd155b4d18bb5f8efafbfa982c1dceb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'buildPaneSummary',
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
    '980bf2c00f9dae6259eddc43798f8af4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'buildPaneForm',
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
    '0e369453ebe2abe5aecf886c09887c5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\PaymentGatewayStorageInterface $payment_gateway_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'buildPaneForm',
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
    'f37d6a970065ea58d23ae9190b92c3de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the payment method form for the selected payment option.
   *
   * @param array $pane_form
   *   The pane form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the parent form.
   * @param \\Drupal\\commerce_payment\\PaymentOption $payment_option
   *   The payment option.
   *
   * @return array
   *   The modified pane form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'buildPaymentMethodForm',
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
    'fc2c31ecba6cf86b41b92c4737e47a0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the billing profile form.
   *
   * @param array $pane_form
   *   The pane form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the parent form.
   *
   * @return array
   *   The modified pane form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'buildBillingProfileForm',
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
    '528ac73ab3f0fbf55b36cbf12a0de98b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'ajaxRefresh',
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
    'b4e5776165d13317830c6f0ced9a7233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears dependent form input when the payment_method changes.
   *
   * Without this Drupal considers the rebuilt form to already be submitted,
   * ignoring default values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'clearValues',
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
    '87f846697da810fc26e97052b67646c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'validatePaneForm',
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
    '2bbf8f20a1d8a4951cba5264f9b4d701' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    '6a639cac35c54f24d8dfa82e52f7da31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormInterface $inline_form */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    '8cd8da5927c9e720c76a795958d318da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\profile\\Entity\\ProfileInterface $billing_profile */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    'a3f9f5ec6992cdedab2a4794842b00e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\PaymentOption $selected_option */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    '7b6c507ae610707143ae87d027c0d971' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\PaymentGatewayStorageInterface $payment_gateway_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    '09b76a65dd1c8b5a932d1da89203a8db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    'c059ca1431be430e507e4e5642fe9344' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\PaymentMethodStorageInterface $payment_method_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    '1599b5830e22fedb74da6accbc8abd7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface $payment_method */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'submitPaneForm',
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
    '9902b07f35b9ac9a25c8064ed64ae894' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an error message in case there are no available payment gateways.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   The error message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'paymentmethodstorageinterface' => 'Drupal\\commerce_payment\\PaymentMethodStorageInterface',
          'paymentoption' => 'Drupal\\commerce_payment\\PaymentOption',
          'paymentoptionsbuilderinterface' => 'Drupal\\commerce_payment\\PaymentOptionsBuilderInterface',
          'supportscreatingpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsCreatingPaymentMethodsInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentInformation',
         'functionName' => 'noPaymentGatewayErrorMessage',
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