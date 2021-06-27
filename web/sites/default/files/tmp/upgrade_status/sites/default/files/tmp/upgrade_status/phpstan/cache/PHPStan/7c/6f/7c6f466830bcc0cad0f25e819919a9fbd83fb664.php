<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/Plugin/QueueWorker/CartExpiration.php-1624732871',
   'data' => 
  array (
    '3a4e86d37ee7d4ec4d03fb68243a588a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Deletes expired carts.
 *
 * @QueueWorker(
 *  id = "commerce_cart_expiration",
 *  title = @Translation("Cart expiration"),
 *  cron = {"time" = 30}
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
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
    '6b2e5f74f9ef557b194b4dc2fedd8c9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
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
    '6ea830bc4a46665f1509f03171498d41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order type storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
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
    'b4816e9c5a37617e024bace49dbb44e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CartExpiration object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin ID for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
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
    'd57861933793e9ceac725ea66fcf571d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
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
    '5ffe90c8d32bf4334a4eceb04a4a8d26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
         'functionName' => 'processItem',
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
    '5f2ad10a72f1da97a58526dbe1089111' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
         'functionName' => 'processItem',
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
    'b38e7f36c941e4c0cad021feee4ac738' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface $order_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker',
         'uses' => 
        array (
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'queueworkerbase' => 'Drupal\\Core\\Queue\\QueueWorkerBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'interval' => 'Drupal\\commerce\\Interval',
        ),
         'className' => 'Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration',
         'functionName' => 'processItem',
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