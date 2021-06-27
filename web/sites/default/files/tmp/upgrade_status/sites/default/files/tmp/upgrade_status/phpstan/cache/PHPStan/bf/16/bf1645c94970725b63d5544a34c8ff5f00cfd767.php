<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Plugin/Commerce/CheckoutPane/CompletionRegister.php-1624732871',
   'data' => 
  array (
    'eb9a9c05932cf45fbaabb32f84cc6d84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the registration after checkout pane.
 *
 * @CommerceCheckoutPane(
 *   id = "completion_register",
 *   label = @Translation("Guest registration after checkout"),
 *   display_label = @Translation("Account information"),
 *   default_step = "complete",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '4c7deddaf943cf7529ba7579cc20bad2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The credentials check flood controller.
   *
   * @var \\Drupal\\commerce\\CredentialsCheckFloodInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '56f8c61eb9c109a6dc7d4832edea4e98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'fd6262643947ef673ec840534f515f68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The user authentication object.
   *
   * @var \\Drupal\\user\\UserAuthInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '2528fa944fea98e1567e63c36cc1c793' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The client IP address.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'a33576df3c866b58a5d09a7c3e119abe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The event dispatcher.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'd657c7a7d9b0aef1db8cf796f61a5bb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order assignment.
   *
   * @var \\Drupal\\commerce_order\\OrderAssignmentInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'd16de3eb6d9f1871330ebccdec308917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The user storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'a98a55be8a12b65abb6db5d031016ab2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CompletionRegister object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface $checkout_flow
   *   The parent checkout flow.
   * @param \\Drupal\\commerce\\CredentialsCheckFloodInterface $credentials_check_flood
   *   The credentials check flood controller.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   * @param \\Drupal\\commerce_order\\OrderAssignmentInterface $order_assignment
   *   The order assignment.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack.
   * @param \\Drupal\\user\\UserAuthInterface $user_auth
   *   The user authentication object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'f4dba4122beed0d00a21268ea89e6656' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '6ad8ce4939d3ada5f34af30296d7fb3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '04f5e7ec02ca0de9166def8510bba52e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '13402eb85b5479ea870b09817fe69597' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $account */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'fe5c2267ced56547bd20e897ada82f54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '8dbcc0d9be936d2ec121e96a6ca764c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $account */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    'bdbd09c66d133faa368b049e240431b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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
    '37fa6216aff143d7a68309e562a0efc9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $account */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane',
         'uses' => 
        array (
          'credentialscheckfloodinterface' => 'Drupal\\commerce\\CredentialsCheckFloodInterface',
          'checkoutflowinterface' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutFlow\\CheckoutFlowInterface',
          'checkoutcompletionregisterevent' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
          'checkoutevents' => 'Drupal\\commerce_checkout\\Event\\CheckoutEvents',
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'userauthinterface' => 'Drupal\\user\\UserAuthInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\commerce_checkout\\Plugin\\Commerce\\CheckoutPane\\CompletionRegister',
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