<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/PaymentGatewayStorage.php-1624732871',
   'data' => 
  array (
    '8de49387f28faaf43edbbdfec1b86109' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the payment gateway storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configentitystorage' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentGatewayStorage',
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
    '374c4b3209dbfa7e801697d263bf8d71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The event dispatcher.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configentitystorage' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentGatewayStorage',
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
    '4570a8fa5026d75dee03e26573c36134' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a PaymentGatewayStorage object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory
   *   The config factory service.
   * @param \\Drupal\\Component\\Uuid\\UuidInterface $uuid_service
   *   The UUID service.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface $memory_cache
   *   The memory cache.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configentitystorage' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentGatewayStorage',
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
    '3a963db685e7dc1a4a8f152755006b95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configentitystorage' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentGatewayStorage',
         'functionName' => 'createInstance',
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
    '8b9e8bb4af78163a9fca893fd307d8a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configentitystorage' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentGatewayStorage',
         'functionName' => 'loadForUser',
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
    'ec954dbfb74954264abfde6e633dd2be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configentitystorage' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentGatewayStorage',
         'functionName' => 'loadMultipleForOrder',
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
    '559b8c804a7e9e99ccccc428dc8f419d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface[] $payment_gateways */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'filterpaymentgatewaysevent' => 'Drupal\\commerce_payment\\Event\\FilterPaymentGatewaysEvent',
          'paymentevents' => 'Drupal\\commerce_payment\\Event\\PaymentEvents',
          'supportsstoredpaymentmethodsinterface' => 'Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\SupportsStoredPaymentMethodsInterface',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'memorycacheinterface' => 'Drupal\\Core\\Cache\\MemoryCache\\MemoryCacheInterface',
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
          'configentitystorage' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorage',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\PaymentGatewayStorage',
         'functionName' => 'loadMultipleForOrder',
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