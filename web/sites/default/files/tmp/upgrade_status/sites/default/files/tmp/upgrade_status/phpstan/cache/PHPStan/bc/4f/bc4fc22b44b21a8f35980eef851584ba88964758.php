<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/EventDispatcher/ContainerAwareEventDispatcher.php-1624732867',
   'data' => 
  array (
    '44080e70a32bf67edf262c5a43f91ba1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A performance optimized container aware event dispatcher.
 *
 * This version of the event dispatcher contains the following optimizations
 * in comparison to the Symfony event dispatcher component:
 *
 * <dl>
 *   <dt>Faster instantiation of the event dispatcher service</dt>
 *   <dd>
 *     Instead of calling <code>addSubscriberService</code> once for each
 *     subscriber, a precompiled array of listener definitions is passed
 *     directly to the constructor. This is faster by roughly an order of
 *     magnitude. The listeners are collected and prepared using a compiler
 *     pass.
 *   </dd>
 *   <dt>Lazy instantiation of listeners</dt>
 *   <dd>
 *     Services are only retrieved from the container just before invocation.
 *     Especially when dispatching the KernelEvents::REQUEST event, this leads
 *     to a more timely invocation of the first listener. Overall dispatch
 *     runtime is not affected by this change though.
 *   </dd>
 * </dl>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
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
    'fd4645dbeb04873026aeb428034965b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The service container.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
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
    '8ed8bc0c593efa1af5f61cb99855cc5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Listener definitions.
   *
   * A nested array of listener definitions keyed by event name and priority.
   * A listener definition is an associative array with one of the following key
   * value pairs:
   * - callable: A callable listener
   * - service: An array of the form [service id, method]
   *
   * A service entry will be resolved to a callable only just before its
   * invocation.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
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
    '7d8001dd4785b1b2c879ea748a979517' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether listeners need to be sorted prior to dispatch, keyed by event name.
   *
   * @var TRUE[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
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
    'e46fddde512a599d67c2b12e3e4ee5d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a container aware event dispatcher.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The service container.
   * @param array $listeners
   *   A nested array of listener definitions keyed by event name and priority.
   *   The array is expected to be ordered by priority. A listener definition is
   *   an associative array with one of the following key value pairs:
   *   - callable: A callable listener
   *   - service: An array of the form [service id, method]
   *   A service entry will be resolved to a callable only just before its
   *   invocation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
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
    'c1542e4ed5a701b8d7220a48575f9760' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'dispatch',
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
    'ec332ec8cf14118f0554631b4198ffb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'getListeners',
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
    '042e69ba795e9ca3eb41bc4ad4a2a839' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'getListenerPriority',
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
    'f5413b8356eba19cfdd180daa5926e3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'hasListeners',
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
    '51847acb1b017bbc5941e12af1170f15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'addListener',
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
    '30b89cc53e9bb48bcb48c99cc1cd77d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'removeListener',
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
    'f2896624666e81d8a8d653d78ca78845' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'addSubscriber',
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
    'ce0dcb337941d1f05c4824e99c283aab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\EventDispatcher',
         'uses' => 
        array (
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\Component\\EventDispatcher\\ContainerAwareEventDispatcher',
         'functionName' => 'removeSubscriber',
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