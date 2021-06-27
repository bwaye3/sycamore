<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Plugin/Commerce/CheckoutPane/BillingInformation.php-1624732871',
   'data' => 
  array (
    '1d896651d5586ccc5a2f2d0abe649b1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the billing information pane.
 *
 * @CommerceCheckoutPane(
 *   id = "billing_information",
 *   label = @Translation("Billing information"),
 *   default_step = "order_information",
 *   wrapper_element = "fieldset",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    '38974e9f2a8396b13bc54ce2aacd8277' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The inline form manager.
   *
   * @var \\Drupal\\commerce\\InlineFormManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    '7e37c999e68e3b25ea1270151faa1802' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new BillingInformation object.
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
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    '0bded0deec231ed1ee9e50ce214cb585' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    '2658ee6ad3996ac0c182ff20f4441cae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    'b06336d39e2ea51b7c8e2dc9792aa295' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    '936716043551df56ee60038d7463fd10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    '7824aca511493479c22682a44e81fb6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Commerce\\InlineForm\\EntityInlineFormInterface $inline_form */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
    'e11649f48080eb93c17517e166dc7003' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\profile\\Entity\\ProfileInterface $profile */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'inlineformmanager' => 'Drupal\\commerce\\InlineFormManager',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\BillingInformation',
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
  ),
));