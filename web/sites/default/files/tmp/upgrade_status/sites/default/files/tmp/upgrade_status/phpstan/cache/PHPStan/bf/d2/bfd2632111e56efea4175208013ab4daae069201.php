<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Plugin/Commerce/CheckoutFlow/CheckoutFlowBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/AjaxFormTrait.php-1624732871',
   'data' => 
  array (
    '689aec051d38168858cfe37f7b04a24c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the base checkout flow class.
 *
 * Checkout flows should extend this class only if they don\'t want to use
 * checkout panes. Otherwise they should extend CheckoutFlowWithPanesBase.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '0d891653fb8520b310a235515cf404ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax handler for refreshing an entire form.
   *
   * All status messages need to be displayed when refreshing the form.
   * In large forms, it is a best practise to output these messages close
   * to the triggering element. For example, when ajax is triggered at
   * checkout, the messages should be shown above the relevant checkout pane.
   * When [\'#ajax\'][\'element\'] is specified, the messages will be shown above
   * it. Otherwise, the status messages will be shown above the whole form.
   * Example:
   * <code>
   * $inline_form[\'apply\'][\'#ajax\'][\'element\'] = $inline_form[\'#parents\'];
   * </code>
   *
   * Note that both the form and the element need to have an #id specified,
   * as a workaround to core bug #2897377. This was already done for
   * checkout forms, checkout panes, and inline forms.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return \\Drupal\\Core\\Ajax\\AjaxResponse
   *   The ajax response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
          'replacecommand' => 'Drupal\\Core\\Ajax\\ReplaceCommand',
          'prependcommand' => 'Drupal\\Core\\Ajax\\PrependCommand',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'ajaxRefreshForm',
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
    '187a7846773acba295d5cf855577913b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    'f178e2963a4b3e7dce3b53c3134fd16a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The event dispatcher.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '4f7ea2bf7a589f64919df1502ae7fdcd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '23078aaf980d50b1df523f4a5e9c0e99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The parent config entity.
   *
   * Not available while the plugin is being configured.
   *
   * @var \\Drupal\\commerce_checkout\\Entity\\CheckoutFlowInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    'c980842134d5439bb9c5bcbd63490add' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static cache of visible steps.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '8cea9e50cf9fd3501d8e7228ab8e18e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CheckoutFlowBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   * @param \\Drupal\\Core\\Routing\\RouteMatchInterface $route_match
   *   The route match.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '816d33c527adff64300177ffd4cf7129' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '4ef266d186d2966b7f92f57468181fc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '021e08842be44f1ea6d7756cfdf324f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    'b9a98fc113ff2999c39621b611ae06e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'getOrder',
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
    'beff61c28807dbb04985718919c688b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'getPreviousStepId',
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
    'ac9001a602ff0b3aa23796c0f1527109' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'getNextStepId',
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
    'f8d1a9e35c0b195d4b405fc218ef7179' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'redirectToStep',
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
    '387880206408cc1d18e81d6541ba4a26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'getSteps',
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
    '028e99a6e89df07b31df32c47b8b80d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'getVisibleSteps',
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
    '9dfb9a841744befa5480cc5d67d3a42b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the given step is visible.
   *
   * @param string $step_id
   *   The step ID.
   *
   * @return bool
   *   TRUE if the step is visible, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'isStepVisible',
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
    '5d42feaef528ee445e21ee3dd53ab987' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    'be021b235ea4e49f3c178e5ec938004b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    'c48a8c46dca86c4ae026e4daa32417c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    'cfd5771651cab00933e43ec7dcb79ca8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '3d7859d91187e86161c8cf1a8e10d447' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '5383bfc6028ff7d0971939904013fceb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    '2fa8876f979414ba348410a34b268aac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
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
    'fbecd3be7948d3446866aa9ac4bf352d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'getBaseFormId',
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
    '0876d6eae92ef5d0f0a3f2eec7d91b88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'getFormId',
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
    '260c5ccc1147d7a6830164736843fba4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'buildForm',
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
    'd5fea45a00d225b8b94b08a883f43ee2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'validateForm',
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
    '6edc9892f642619ed70af3a5617dfa68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'submitForm',
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
    'a01fd1cee5dd85a676c5784fe01b7089' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to the current step changing.
   *
   * Called before saving the order and redirecting.
   *
   * Handles the following logic
   * 1) Locks the order before the payment page,
   * 2) Unlocks the order when leaving the payment page
   * 3) Places the order before the complete page.
   *
   * @param string $step_id
   *   The new step ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'onStepChange',
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
    '3f24d12734a3b526f23111047dc8ec2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the given step has a sidebar.
   *
   * @param string $step_id
   *   The step ID.
   *
   * @return bool
   *   TRUE if the given step has a sidebar, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'hasSidebar',
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
    'a30a4c1b2bc7927f137bed26820d27be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the actions element for the current form.
   *
   * @param array $form
   *   The current form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current form state.
   *
   * @return array
   *   The actions element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow',
         'uses' => 
        array (
          'ajaxformtrait' => 'Drupal\\commerce\\AjaxFormTrait',
          'needsredirectexception' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderevent' => 'Drupal\\commerce_order\\Event\\OrderEvent',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'link' => 'Drupal\\Core\\Link',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'pluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowBase',
         'functionName' => 'actions',
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