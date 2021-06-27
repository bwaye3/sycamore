<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/CheckoutPane/PaymentProcess.php-1624732871',
   'data' => 
  array (
    'a8ee4b48fc8f63c709b11d1edb27e8ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the payment process pane.
 *
 * @CommerceCheckoutPane(
 *   id = "payment_process",
 *   label = @Translation("Payment process"),
 *   default_step = "payment",
 *   wrapper_element = "container",
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '7d77a6d9ee144e685d70a36cc9f38ad2' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    'c192ba7963e71f87566096483ad246a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger.
   *
   * @var \\Psr\\Log\\LoggerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '8c825dc64872cce4799d17ba535bc40e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PaymentProcess object.
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
   * @param \\Drupal\\commerce\\InlineFormManager $inline_form_manager
   *   The inline form manager.
   * @param \\Psr\\Log\\LoggerInterface $logger
   *   The logger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '316fc5419ea678f15f79a6f707bb1ccb' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '143951ae6ef412569569414482cb251a' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '660d217d7dc4ae66451ce3a0baf36234' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
         'functionName' => 'buildConfigurationSummary',
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
    '539b3ebede3c45637b8b0d6ab2971c5f' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '49e5100001e10c6ca7ce3309d9e11877' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    'f6f7556faf9947de07ac811d03d78a0a' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
         'functionName' => 'isVisible',
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
    '5d0dfaea7a23414d2959e9555d5e09f3' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '9b61f65499c1a26c70ccd1eb51d66cda' => 
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
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '55d7fa4753cf11446d8201d891b7a842' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the URL to the "return" page.
   *
   * @return \\Drupal\\Core\\Url
   *   The "return" page URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
         'functionName' => 'buildReturnUrl',
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
    'c1ae2c85a1b60f58193bd415385f3502' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the URL to the "cancel" page.
   *
   * @return \\Drupal\\Core\\Url
   *   The "cancel" page URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
         'functionName' => 'buildCancelUrl',
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
    '8f46ccc6f990002c3492423e7d8966ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the step ID that the customer should be sent to on error.
   *
   * @return string
   *   The error step ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
         'functionName' => 'getErrorStepId',
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
    '412d1bf169202b18bcc629c0aad27d22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the payment to be processed.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway
   *   The payment gateway in use.
   *
   * @return \\Drupal\\commerce_payment\\Entity\\PaymentInterface
   *   The created payment.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
    '16d7c06ea3ed1442de4f6e53dd5de568' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutpanebase' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CheckoutPaneBase',
          'paymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface',
          'declineexception' => 'Drupal\\commerce_payment\\Exception\\DeclineException',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'manualpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\ManualPaymentGatewayInterface',
          'offsitepaymentgatewayinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\OffsitePaymentGatewayInterface',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'url' => 'Drupal\\Core\\Url',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\CheckoutPane\\PaymentProcess',
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
  ),
));