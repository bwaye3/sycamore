<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/PaymentGateway/PaymentGatewayBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/PluginWithFormsTrait.php-1624732867',
   'data' => 
  array (
    '5645d9407739158a21ff694e0ce953f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the base class for payment gateways.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '78013f061f5c91b665f6ffe3553f243d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait with typical behavior for plugins which have forms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '41a1a6310212c84498b01180d51129d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getFormClass',
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
    '64db0aad5e218184e5339f75f01dd2f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'hasFormClass',
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
    'a6c6502f6bb321d498d0296bb2dcf085' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '08d1b6d8df2440f074b122ca43f9c185' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The parent config entity.
   *
   * Not available while the plugin is being configured.
   *
   * @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    'ce6395d535526db8946fcdfc7c7b8fd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ID of the parent config entity.
   *
   * @deprecated in commerce:8.x-2.16 and is removed from commerce:3.x.
   *   Use $this->parentEntity->id() instead.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '274658c3d576ae739039874b2c7f5f53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The payment type used by the gateway.
   *
   * @var \\Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentType\\PaymentTypeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '3271bb0715eedf83af0330b22ea618cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The payment method types handled by the gateway.
   *
   * @var \\Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\PaymentMethodTypeInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '23859ac94e2260b103da610f1e7ecfc2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The time.
   *
   * @var \\Drupal\\Component\\Datetime\\TimeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '6e0d9de5ef0e7b8edf4a6e038506732c' => 
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
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '888c3e828ea77057f884d136af25085a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    'bd6f3d4617738c67b7d167d3ac162c88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => '__sleep',
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
    '70b99ba29e0401e7d96fbb3b724b653e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => '__wakeup',
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
    '69c1670d0d7950ae1e4b63d643130ede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the default payment gateway forms.
   *
   * @return array
   *   A list of plugin form classes keyed by operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getDefaultForms',
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
    'b4678f63dc917899a7eb2fabe1772198' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getLabel',
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
    '5be3419345b9e4612d6399e7507d318c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getDisplayLabel',
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
    'db6068b526c1bd975a102c8ed4d8943f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getMode',
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
    'd2e73532671381ac4f511f584d1da661' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getSupportedModes',
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
    '714dda4f5f8c1cc82cc12e10d770b743' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getJsLibrary',
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
    'fd2ade2a6cfd681f4fe250e91a67a5d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getPaymentType',
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
    'be354098d4a46aa7d688249fe87ba999' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getPaymentMethodTypes',
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
    '615f74e3a0fe65d8b263b8e0aba54b60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getDefaultPaymentMethodType',
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
    '8d49342d9c2f765e2c346caf57362ba8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getCreditCardTypes',
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
    '067044cc892d56ddbb578d3475d5e56b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'collectsBillingInformation',
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
    '8404b9b02282809d6764557dcb04ea06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'calculateDependencies',
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
    '3707d1dea3c34b3faac86305846c7d67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getConfiguration',
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
    '8abf54179e408d6a01886597f5d2672b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'setConfiguration',
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
    'e985afc88448072d63b04a601f04597a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    'e12e27233a5cf44e54d4c89a49ed312d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '28228c5833b000da08bfbd7de6dcb1a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'validateConfigurationForm',
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
    '7b6b5781719a5202b36c0d69c54cd059' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    'c81f79b38caa6fd94f22e539316905a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '7e0d64757b899aa6e7509e94f00f4b28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '9efaacc170152808a6c06cea91e5afbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'canRefundPayment',
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
    'e9ea06e42675c844852a8f1ecff375b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'canVoidPayment',
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
    '23f99dbfbfcd2e911153235605bec7b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
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
    '1d45d220609e7aeb553d9ea3715c9cfa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'toMinorUnits',
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
    '116e526f0753da34549756e6e0a67380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_price\\Entity\\CurrencyInterface $currency */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'toMinorUnits',
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
    'aae3a6ce33349a701375d9543c5b270a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the remote customer ID for the given user.
   *
   * The remote customer ID is specific to a payment gateway instance
   * in the configured mode. This allows the gateway to skip test customers
   * after the gateway has been switched to live mode.
   *
   * @param \\Drupal\\user\\UserInterface $account
   *   The user account.
   *
   * @return string
   *   The remote customer ID, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getRemoteCustomerId',
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
    'ae55ef90341c34a659e366cf6560e52f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Field\\FieldType\\RemoteIdFieldItemListInterface $remote_ids */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'getRemoteCustomerId',
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
    '8a8af79615c79baf1ee51314ae117e90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the remote customer ID for the given user.
   *
   * @param \\Drupal\\user\\UserInterface $account
   *   The user account.
   * @param string $remote_id
   *   The remote customer ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'setRemoteCustomerId',
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
    'c9ab23feb2a8684efc0e57f2b9ff49f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Field\\FieldType\\RemoteIdFieldItemListInterface $remote_ids */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'setRemoteCustomerId',
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
    '93c7ba00f34b526add8507c241b0e813' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the payment state matches one of the allowed states.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment
   *   The payment.
   * @param string[] $states
   *   The allowed states.
   *
   * @throws \\InvalidArgumentException
   *   Thrown if the payment state does not match the allowed states.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'assertPaymentState',
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
    '12d0789fb6ef9d39fb0fb8c4363f4054' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the payment method is neither empty nor expired.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface $payment_method
   *   The payment method.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the payment method is empty.
   * @throws \\Drupal\\commerce_payment\\Exception\\HardDeclineException
   *   Thrown when the payment method has expired.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'assertPaymentMethod',
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
    'd255d589de7495fe2db09ef70de11675' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the refund amount is valid.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment
   *   The payment.
   * @param \\Drupal\\commerce_price\\Price $refund_amount
   *   The refund amount.
   *
   * @throws \\Drupal\\commerce_payment\\Exception\\InvalidRequestException
   *   Thrown when the refund amount is larger than the payment balance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'paymentinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
          'paymentmethodinterface' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
          'harddeclineexception' => 'Drupal\\commerce_payment\\Exception\\HardDeclineException',
          'invalidrequestexception' => 'Drupal\\commerce_payment\\Exception\\InvalidRequestException',
          'paymentmethodtypemanager' => 'Drupal\\commerce_payment\\PaymentMethodTypeManager',
          'paymenttypemanager' => 'Drupal\\commerce_payment\\PaymentTypeManager',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'price' => 'Drupal\\commerce_price\\Price',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayBase',
         'functionName' => 'assertRefundAmount',
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