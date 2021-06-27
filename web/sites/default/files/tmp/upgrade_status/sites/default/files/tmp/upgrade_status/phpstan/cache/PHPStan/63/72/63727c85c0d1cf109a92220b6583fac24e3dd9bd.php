<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/Cron.php-1624732871',
   'data' => 
  array (
    '1c5d2f2d385c4844b14ef5bb7fd3bef7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Default cron implementation.
 *
 * Queues abandoned carts for expiration (deletion).
 *
 * @see \\Drupal\\commerce_cart\\Plugin\\QueueWorker\\CartExpiration
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
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
    '2b325273a0fb8e12fae8c781a10051b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
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
    '12e913c0b42574bf63af97d3e662ca5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order type storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
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
    '646b52946f7c665f32048a3de8d3f255' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The commerce_cart_expiration queue.
   *
   * @var \\Drupal\\Core\\Queue\\QueueInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
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
    'e32b50d30013d573aa1cd75dec91fc7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Cron object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Queue\\QueueFactory $queue_factory
   *   The queue factory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
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
    'cfbb5a9ace2d64b53e771dfed0b84e00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
         'functionName' => 'run',
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
    'f626bd19db2e6d86ffebb6a854c0469c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface[] $order_types */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
         'functionName' => 'run',
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
    '3adbb86d89fd0ee10bc7ba173f77baef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the applicable order IDs.
   *
   * @param string $order_type_id
   *   The order type ID.
   * @param \\Drupal\\commerce\\Interval $interval
   *   The expiration interval.
   *
   * @return array
   *   The order IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'queuefactory' => 'Drupal\\Core\\Queue\\QueueFactory',
        ),
         'className' => 'Drupal\\commerce_cart\\Cron',
         'functionName' => 'getOrderIds',
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