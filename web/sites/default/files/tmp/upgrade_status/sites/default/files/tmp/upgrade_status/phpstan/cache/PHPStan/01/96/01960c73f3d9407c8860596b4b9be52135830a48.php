<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/RouteProvider.php-1624732867',
   'data' => 
  array (
    'd4535c761ab24f0685ebc464c29a54e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Route Provider front-end for all Drupal-stored routes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '54ff1243a131bf7bde5da844098d91a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database connection from which to read route information.
   *
   * @var \\Drupal\\Core\\Database\\Connection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '84752c49e84442014be63ac19f4053e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the SQL table from which to read the routes.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    'cad42b0bbb6b19e132ed54203cc07882' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The state.
   *
   * @var \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '0ed5241a96e3e558cfef22c8e8e15c29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A cache of already-loaded routes, keyed by route name.
   *
   * @var \\Symfony\\Component\\Routing\\Route[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    'c81b9520028cb4006e96e508bc28bf44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A cache of already-loaded serialized routes, keyed by route name.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '5e266a69b81b2046d1bb4b58d9a6619c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current path.
   *
   * @var \\Drupal\\Core\\Path\\CurrentPathStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '211f6487cf33902b81d18dc4416f90bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache backend.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '5c822dd03f79e7657f9c317e1fa26a68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache tag invalidator.
   *
   * @var \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '9c3d74eeca471d42682e353b51e81118' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A path processor manager for resolving the system path.
   *
   * @var \\Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '2368912e0512465d223968d266bb0b61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    'cad71fc1e591742c8cb11b2e314cf485' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache ID prefix used to load routes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '487dd3d46aff47f38874ee3bed4f6728' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of cache key parts to be used for the route match cache.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '4dc796c0cef21ca8431fdd717ec51bcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PathMatcher.
   *
   * @param \\Drupal\\Core\\Database\\Connection $connection
   *   A database connection object.
   * @param \\Drupal\\Core\\State\\StateInterface $state
   *   The state.
   * @param \\Drupal\\Core\\Path\\CurrentPathStack $current_path
   *   The current path.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache_backend
   *   The cache backend.
   * @param \\Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface $path_processor
   *   The path processor.
   * @param \\Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface $cache_tag_invalidator
   *   The cache tag invalidator.
   * @param string $table
   *   (Optional) The table in the database to use for matching. Defaults to \'router\'
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   (Optional) The language manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
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
    '798c43bf1af43c84dba58e2b5e50b309' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds routes that may potentially match the request.
   *
   * This may return a mixed list of class instances, but all routes returned
   * must extend the core symfony route. The classes may also implement
   * RouteObjectInterface to link to a content document.
   *
   * This method may not throw an exception based on implementation specific
   * restrictions on the url. That case is considered a not found - returning
   * an empty array. Exceptions are only used to abort the whole request in
   * case something is seriously broken, like the storage backend being down.
   *
   * Note that implementations may not implement an optimal matching
   * algorithm, simply a reasonable first pass.  That allows for potentially
   * very large route sets to be filtered down to likely candidates, which
   * may then be filtered in memory more completely.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   A request against which to match.
   *
   * @return \\Symfony\\Component\\Routing\\RouteCollection
   *   RouteCollection with all urls that could potentially match $request.
   *   Empty collection if nothing can match. The collection will be sorted from
   *   highest to lowest fit (match of path parts) and then in ascending order
   *   by route name for routes with the same fit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRouteCollectionForRequest',
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
    '900667408c52392622c454d8b99dcfb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Find the route using the provided route name.
   *
   * @param string $name
   *   The route name to fetch
   *
   * @return \\Symfony\\Component\\Routing\\Route
   *   The found route.
   *
   * @throws \\Symfony\\Component\\Routing\\Exception\\RouteNotFoundException
   *   Thrown if there is no route with that name in this repository.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRouteByName',
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
    'd440433d8cfdaf64f2db3cf1d6a7ea94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'preLoadRoutes',
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
    '58108c8108cb5d8edd2363bac445ce21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRoutesByNames',
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
    '2267c06f8c008310eacbe5f1d8650ff7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of path pattern outlines that could match the path parts.
   *
   * @param array $parts
   *   The parts of the path for which we want candidates.
   *
   * @return array
   *   An array of outlines that could match the specified path parts.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getCandidateOutlines',
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
    '4106bf53a186a1d1a2023a01288f28e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRoutesByPattern',
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
    'c4b41ec53e25fa2c141b0f07f0c65f98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all routes which match a certain pattern.
   *
   * @param string $path
   *   The route pattern to search for.
   *
   * @return \\Symfony\\Component\\Routing\\RouteCollection
   *   Returns a route collection of matching routes. The collection may be
   *   empty and will be sorted from highest to lowest fit (match of path parts)
   *   and then in ascending order by route name for routes with the same fit.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRoutesByPath',
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
    '5e7a6cb432c9b07cfa395f2eab62f66d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Comparison function for usort on routes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'routeProviderRouteCompare',
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
    '517346a4096b3939711cbd86d8910bf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getAllRoutes',
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
    'b83ae06f3c4969801a58fc2ea3f9284a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'reset',
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
    '1c531dc58df56cd9ffba8d16f10efa90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getSubscribedEvents',
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
    '85e1d4c6154a970ef5a40a49a60c27cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRoutesPaged',
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
    '63d67889062c80b57a5ee7019307319a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRoutesCount',
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
    '048735b08b8208a8f804d8b1d7259e89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'addExtraCacheKeyPart',
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
    '1f8e7b7f4ff1dd64afb873d1d4af57dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the cache ID for the route collection cache.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request object.
   *
   * @return string
   *   The cache ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getRouteCollectionCacheId',
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
    'bdf3ae15e2494c02bc556367bb8a0cc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language identifier for the route collection cache.
   *
   * @return string
   *   The language identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'cachetagsinvalidatorinterface' => 'Drupal\\Core\\Cache\\CacheTagsInvalidatorInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'currentpathstack' => 'Drupal\\Core\\Path\\CurrentPathStack',
          'inboundpathprocessorinterface' => 'Drupal\\Core\\PathProcessor\\InboundPathProcessorInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'pagedroutecollection' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteCollection',
          'pagedrouteproviderinterface' => 'Symfony\\Cmf\\Component\\Routing\\PagedRouteProviderInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'routenotfoundexception' => 'Symfony\\Component\\Routing\\Exception\\RouteNotFoundException',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
          'connection' => 'Drupal\\Core\\Database\\Connection',
        ),
         'className' => 'Drupal\\Core\\Routing\\RouteProvider',
         'functionName' => 'getCurrentLanguageCacheIdPart',
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