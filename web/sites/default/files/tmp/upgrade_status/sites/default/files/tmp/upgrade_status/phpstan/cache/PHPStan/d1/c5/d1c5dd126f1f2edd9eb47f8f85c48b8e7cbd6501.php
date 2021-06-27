<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Event/OrderEvents.php-1624732871',
   'data' => 
  array (
    'a0ac875d5a5e06976e06c1b1cf101ae3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when assigning an order to a customer.
   *
   * Fired when assigning an anonymous order to a customer (e.g. after the
   * customer logged in / registered at the end of checkout), and when
   * reassigning an order to a different customer in the admin UI.
   *
   * Note:
   * At this point the order still has the original data (customer, email).
   * Use $event->getOrder()-getCustomer()->isAnonymous() to check whether the
   * original customer was anonymous.
   *
   * Fired before the order is saved.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderAssignEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '16e080d57e34746aa83cd6acf7a7ac25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after the order has been fully paid.
   *
   * Guaranteed to only fire once, when the order balance reaches zero.
   * Subsequent changes to the balance won\'t redispatch the event (e.g. in case
   * of a refund followed by an additional payment).
   *
   * Fired before the order is saved.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\OrderInterface::getBalance()
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '6c8a099b3b75c5225b82d22346f5d204' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when collecting order profiles.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderProfilesEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '6d6feb194d8fa895f97b62d082da90b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after loading an order.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '8f56cc4d8e59d61817dda56c3c20d7ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after creating a new order.
   *
   * Fired before the order is saved.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '938418cffc3799e456d459846e12c431' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired before saving an order.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    'b196398a1d46bc42696992856588f8b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after saving a new order.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '7a568c3d45de5e7092af471566431a7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after saving an existing order.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    'f310af66551ed216f87612b562d70e41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired before deleting an order.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '7b153a8cd2a9b2ee236800bc7f8eeabb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after deleting an order.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '608fad7337cf4f3fc2efd4242c6cbe28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after loading an order item.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderItemEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '631e997caf77c2894f6e6d763f513566' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after creating a new order item.
   *
   * Fired before the order item is saved.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderItemEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    'd882d9055a68bb62149336b4183d31a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired before saving an order item.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderItemEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    'f9a2517517dc8a2db9c762e022937c3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after saving a new order item.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderItemEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '1aa68418b8779f1e0160ecb859207fc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after saving an existing order item.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderItemEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    'cc2439b5ec3217c742f9ed9040ba7393' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired before deleting an order item.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderItemEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
    '29ed126b173e430293377df3b50535d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired after deleting an order item.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_order\\Event\\OrderItemEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Event\\OrderEvents',
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
  ),
));