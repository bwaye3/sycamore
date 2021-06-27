<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Plugin/Commerce/TaxType/Custom.php-1624732871',
   'data' => 
  array (
    '104814b6b40fc97ef438da3c4e759de4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the Custom tax type.
 *
 * @CommerceTaxType(
 *   id = "custom",
 *   label = "Custom",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '7d92716ac75bba00d9fa05dd1b1418cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The UUID generator.
   *
   * @var \\Drupal\\Component\\Uuid\\UuidInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '57d2b323a525cf7225682030cdd95763' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Custom object.
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
   * @param \\Drupal\\Component\\Uuid\\UuidInterface $uuid_generator
   *   The UUID generator.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    'f34d3f97e7b72b050266914407474dfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '280ae0f3d999668c21f967254ccb0aba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '897f6fc1c96817274dd88f5dc753bc86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '53ab0bab20e46cb05cd14202636056a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    'e6157edf60d016f6a7633278642ff78a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback for tax rate and zone territory operations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
         'functionName' => 'ajaxCallback',
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
    '8c656508c1b154527c9cf355b63f68ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit callback for adding a new rate.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
         'functionName' => 'addRateSubmit',
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
    '8c2396351705b5409e81c5f9ce6840a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit callback for removing a rate.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
         'functionName' => 'removeRateSubmit',
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
    'b158c1692e1d32dd31c8b6e2414331f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit callback for adding a new territory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
         'functionName' => 'addTerritorySubmit',
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
    '10a0653a3437926aa63a38f3c0b266c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit callback for removing a territory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
         'functionName' => 'removeTerritorySubmit',
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
    '68c50fc6ef957978e8e1f48796268785' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '0ffba332408cedce0e70b9b8078e1ced' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '20f17110735441defbc3ca62d854327e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the available display labels.
   *
   * @return array
   *   The display labels, keyed by machine name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
         'functionName' => 'getDisplayLabels',
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
    'f61f9ab4f1a2f1b16c094c584d0ccfeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the configured display label.
   *
   * @return string
   *   The configured display label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    'fdd32204b62e4f828cc0f07b7655c2b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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
    '3f2f8b4747972f7e31f44c561a131d42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType',
         'uses' => 
        array (
          'rounderinterface' => 'Drupal\\commerce_price\\RounderInterface',
          'chaintaxrateresolverinterface' => 'Drupal\\commerce_tax\\Resolver\\ChainTaxRateResolverInterface',
          'taxzone' => 'Drupal\\commerce_tax\\TaxZone',
          'uuidinterface' => 'Drupal\\Component\\Uuid\\UuidInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\commerce_tax\\Plugin\\Commerce\\TaxType\\Custom',
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