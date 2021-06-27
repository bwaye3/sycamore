<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Plugin/Commerce/InlineForm/PaymentGatewayForm.php-1624732871',
   'data' => 
  array (
    'fbfcaf42646ffb09cdcba8b42b211495' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form element for embedding payment gateway forms.
 *
 * Each payment gateway plugin defines its own plugin forms, keyed by operation.
 * The plugin forms operate on a payment or a payment method entity.
 * When the plugin form is submitted, an API call is usually performed, and the
 * updated entity is saved.
 *
 * This inline form takes a payment or a payment method entity, initializes
 * the appropriate plugin form, then lets it do its thing, while ensuring
 * that any thrown exception is correctly handled.
 *
 * @CommerceInlineForm(
 *   id = "payment_gateway_form",
 *   label = @Translation("Payment gateway form"),
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
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
    'eec001529ee55f86f445eab54f6a1f2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin form factory.
   *
   * @var \\Drupal\\Core\\Plugin\\PluginFormFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
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
    'a31ed0416721e9154247e6294411685c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin form.
   *
   * @var \\Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
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
    '40b7f1dbdc6322adf2f8a4593d656beb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PaymentGatewayForm object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Plugin\\PluginFormFactoryInterface $plugin_form_factory
   *   The plugin form factory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
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
    '8121e99e57fc549c09340c3c3d766630' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
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
    '530dca783fbd4c332d2c1fab360c430e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
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
    '741346b7140d30b9bf0abbf6e632a321' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
         'functionName' => 'requiredConfiguration',
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
    'acc1b9686baa93507e7e09dfbaad28e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
         'functionName' => 'buildInlineForm',
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
    '5b5aa519a46b6f64094bd8b637a084fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prevents the form from being submitted, by removing the actions element.
   *
   * Done in a #process callback because buildInlineForm() doesn\'t have access
   * to the complete form (since it\'s called while the initial form structure
   * is still being built).
   *
   * @param array $element
   *   The form element being processed.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param array $complete_form
   *   The complete form structure.
   *
   * @return array
   *   The form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
         'functionName' => 'preventSubmit',
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
    'ae2de1e07f71712983a9880123ff3393' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
         'functionName' => 'validateInlineForm',
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
    'd74325c3f4c31e879304880780dfd8ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm',
         'uses' => 
        array (
          'entityinlineformbase' => 'Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormBase',
          'entitywithpaymentgatewayinterface' => 'Drupal\\commerce_payment\\Entity\\EntityWithPaymentGatewayInterface',
          'paymentgatewayexception' => 'Drupal\\commerce_payment\\Exception\\PaymentGatewayException',
          'paymentgatewayforminterface' => 'Drupal\\commerce_payment\\PluginForm\\PaymentGatewayFormInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'pluginformfactoryinterface' => 'Drupal\\Core\\Plugin\\PluginFormFactoryInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\InlineForm\\PaymentGatewayForm',
         'functionName' => 'submitInlineForm',
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