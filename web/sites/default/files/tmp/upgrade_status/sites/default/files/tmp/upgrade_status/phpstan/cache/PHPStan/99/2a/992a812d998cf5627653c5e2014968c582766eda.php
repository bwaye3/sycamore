<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Plugin/Commerce/TaxType/LocalTaxTypeBase.php-1624732871',
   'data' => 
  array (
    'f2a99d10f16e98fc478db7828ad95f45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the base class for local tax types.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
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
    'e3fc2cbb1f8ed449dba384e3e0db4e5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The rounder.
   *
   * @var \\Drupal\\commerce_price\\RounderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
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
    '34e2c7aee7c692e2215a8bcb761be7bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The chain tax rate resolver.
   *
   * @var \\Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
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
    'facd3ad64fd010c04e41401c3628e20e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The zones.
   *
   * @var \\Drupal\\commerce_tax\\TaxZone[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
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
    '449bfb9ba1393e24f21baf3d266c52ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The matched zones.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
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
    '30c08c00217688f6b9752ac1d0427471' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new LocalTaxTypeBase object.
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
   * @param \\Drupal\\commerce_price\\RounderInterface $rounder
   *   The rounder.
   * @param \\Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface $chain_rate_resolver
   *   The chain tax rate resolver.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
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
    'a2a0f1ab8e394613926f8f3519232b38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
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
    '78a23d3160cd31d093bbc17ca1b21515' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'shouldRound',
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
    '5dd6ad837fd2d639f6c2cc0cbc8d9dd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'applies',
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
    '53f0cf898b025ba9821e37fa486ffb48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'apply',
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
    'ba09164ba1597683238f8ef86abeec24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the tax type matches the store\'s billing address.
   *
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store.
   *
   * @return bool
   *   TRUE if the tax type matches the billing address, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'matchesAddress',
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
    '625d8d8b06b8663fea9388f35faf8ce2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the tax type matches the store\'s tax registrations.
   *
   * Countries have a yearly transaction threshold (such as $30k) which
   * when breached requires companies to register for tax collection.
   * This also often applies to foreign companies selling to that
   * country\'s residents. Furthermore, many countries are now trying to
   * make foreign companies collect their tax when selling digital products
   * to their residents, regardless of any threshold.
   * The $store->tax_registrations field allows merchants to precisely specify
   * for which countries they are collecting tax.
   *
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store.
   *
   * @return bool
   *   TRUE if the tax type matches the tax registrations, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'matchesRegistrations',
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
    'b80c646f73ef0e9cadbc86b20bf6068a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the store is registered to collect taxes in the given zone.
   *
   * @param \\Drupal\\commerce_store\\Entity\\StoreInterface $store
   *   The store.
   * @param \\Drupal\\commerce_tax\\TaxZone $zone
   *   The tax zone.
   *
   * @return bool
   *   TRUE if the store is registered in the given zone, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'checkRegistrations',
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
    'e3049f35abe08a9d8c34bdf87b976a96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves the tax rates for the given order item and customer profile.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $customer_profile
   *   The customer profile. Contains the address and tax number.
   *
   * @return \\Drupal\\commerce_tax\\TaxRate[]
   *   The tax rates, keyed by tax zone ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'resolveRates',
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
    'dfd2afe61a39ddce8f04879f390b8627' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resolves the tax zones for the given order item and customer profile.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $customer_profile
   *   The customer profile. Contains the address and tax number.
   *
   * @return \\Drupal\\commerce_tax\\TaxZone[]
   *   The tax zones.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'resolveZones',
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
    '657c9fc200826cbb92d6d50f7541c59c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the summary of all available tax rates.
   *
   * @return array
   *   The summary form element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'buildRateSummary',
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
    'dbfaa6695dab6888a839510e2d723517' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_tax\\TaxZone $b */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'buildRateSummary',
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
    '08085f8bd482c9208c52a5093f1f9b85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_tax\\TaxZone $a */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'buildRateSummary',
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
    '7fb3bc12a040c1ad60609352386c6553' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_tax\\TaxRatePercentage $percentage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'buildRateSummary',
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
    'ad69a1e58539eebed277cff2288a86cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'getZones',
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
    'ccd38133f1832c87f2471474568b66dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'getMatchingZones',
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
    '8df90fe58a87539530f8e635b05fe781' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the tax zones.
   *
   * @return \\Drupal\\commerce_tax\\TaxZone[]
   *   The tax zones, keyed by ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'address' => 'CommerceGuys\\Addressing\\Address',
          'addressinterface' => 'CommerceGuys\\Addressing\\AddressInterface',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'buildzonesevent' => 'Drupal\\commerce_tax\\Event\\BuildZonesEvent',
          'taxevents' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\LocalTaxTypeBase',
         'functionName' => 'buildZones',
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