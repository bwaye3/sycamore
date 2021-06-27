<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DrupalKernel.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Installer/InstallerRedirectTrait.php-1624732867',
   'data' => 
  array (
    'f6681228e710102412e1a42bacf293de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The DrupalKernel class is the core of Drupal itself.
 *
 * This class is responsible for building the Dependency Injection Container and
 * also deals with the registration of service providers. It allows registered
 * service providers to add their services to the container. Core provides the
 * CoreServiceProvider, which, in addition to registering any core services that
 * cannot be registered in the core.services.yaml file, adds any compiler passes
 * needed by core, e.g. for processing tagged services. Each module can add its
 * own service provider, i.e. a class implementing
 * Drupal\\Core\\DependencyInjection\\ServiceProvider, to register services to the
 * container, or modify existing services.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '4e58656f0c83b8a4c653c72c61988d3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods for checking if Drupal is already installed.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Installer',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'databasenotfoundexception' => 'Drupal\\Core\\Database\\DatabaseNotFoundException',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '468a988623c3b2e32868c4bc81348812' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the current PHP process runs on CLI.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Installer',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'databasenotfoundexception' => 'Drupal\\Core\\Database\\DatabaseNotFoundException',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'isCli',
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
    'd67358700e84d6eba315dced6f9988f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if an exception handler should redirect to the installer.
   *
   * @param \\Exception $exception
   *   The exception to check.
   * @param \\Drupal\\Core\\Database\\Connection|null $connection
   *   (optional) The default database connection. If not provided, a less
   *   comprehensive check will be performed. This can be the case if the
   *   exception occurs early enough that a database connection object isn\'t
   *   available from the container yet.
   *
   * @return bool
   *   TRUE if the exception handler should redirect to the installer because
   *   Drupal is not installed yet, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Installer',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'databasenotfoundexception' => 'Drupal\\Core\\Database\\DatabaseNotFoundException',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'shouldRedirectToInstaller',
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
    '68e3f39aaa5fd6a1a61da65521e7017d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the class used for dumping the container to a PHP array.
   *
   * In combination with swapping the container class this is useful to e.g.
   * dump to the human-readable PHP array format to debug the container
   * definition in an easier way.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '1931ddee798aa15e0e74361329259fa9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the default bootstrap container definition.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    'c1077a4c10e5bd00a39ec8c14f0ffa75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the class used for instantiating the bootstrap container.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '21a9064457c262bb35e8f395d50dcc1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the bootstrap container.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '5b2d8c6daae713d96bb464238f996563' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the container instance.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '80a0d149aca3160fc6fabe9014812fef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The environment, e.g. \'testing\', \'install\'.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    'f4d5d6c292c73f0274f4335bd6309bb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the kernel has been booted.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '1eb5bca7baa8ac09e2690699b994e2cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether essential services have been set up properly by preHandle().
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '95e9aeba01d09487d4073040e88c74e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the list of enabled modules.
   *
   * @var array
   *   An associative array whose keys are module names and whose values are
   *   ignored.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '8b84735431e4824ee0da03100378a986' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of available modules and installation profiles.
   *
   * @var \\Drupal\\Core\\Extension\\Extension[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '2e851f8e8db49d6f1d7849752c6b1d3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The class loader object.
   *
   * @var \\Composer\\Autoload\\ClassLoader
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    'fb881cb95b92ea35f8d2ed802df3c1b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Config storage object used for reading enabled modules configuration.
   *
   * @var \\Drupal\\Core\\Config\\StorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '0eae1336c279d42b999802295a85edb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the container can be dumped.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '2c133a8cdb809caf180aa6c27755a867' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the container needs to be rebuilt the next time it is initialized.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    'b4f639b15afa31e6b9de1a7bd0a49e12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the container needs to be dumped once booting is complete.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    'e042eebf3c59873fb5d34f567aeb5896' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of discovered services.yml pathnames.
   *
   * This is a nested array whose top-level keys are \'app\' and \'site\', denoting
   * the origin of a service provider. Site-specific providers have to be
   * collected separately, because they need to be processed last, so as to be
   * able to override services from application service providers.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '1e2b964b454311365489e1fcbf84e20c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of discovered service provider class names or objects.
   *
   * This is a nested array whose top-level keys are \'app\' and \'site\', denoting
   * the origin of a service provider. Site-specific providers have to be
   * collected separately, because they need to be processed last, so as to be
   * able to override services from application service providers.
   *
   * Allowing objects is for example used to allow
   * \\Drupal\\KernelTests\\KernelTestBase to register itself as service provider.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    'ad2c70241ee45fde64081a98ba93786a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of instantiated service provider classes.
   *
   * @see \\Drupal\\Core\\DrupalKernel::$serviceProviderClasses
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '14cc1b7485be1258539431b33a541015' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the PHP environment has been initialized.
   *
   * This legacy phase can only be booted once because it sets session INI
   * settings. If a session has already been started, re-generating these
   * settings would break the session.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '6b703f3cbe7ace5fd16013ecd3d8bae7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The site directory.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '356138e495b68d8b73f8be70971e4313' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '6af604b424b1912e7b7432ede10318e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a DrupalKernel object from a request.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   * @param $class_loader
   *   The class loader. Normally Composer\'s ClassLoader, as included by the
   *   front controller, but may also be decorated; e.g.,
   *   \\Symfony\\Component\\ClassLoader\\ApcClassLoader.
   * @param string $environment
   *   String indicating the environment, e.g. \'prod\' or \'dev\'.
   * @param bool $allow_dumping
   *   (optional) FALSE to stop the container from being written to or read
   *   from disk. Defaults to TRUE.
   * @param string $app_root
   *   (optional) The path to the application root as a string. If not supplied,
   *   the application root will be computed.
   *
   * @return static
   *
   * @throws \\Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException
   *   In case the host name in the request is not trusted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'createFromRequest',
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
    '6df7a8dddb1af453dd406080f920bdf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a DrupalKernel object.
   *
   * @param string $environment
   *   String indicating the environment, e.g. \'prod\' or \'dev\'.
   * @param $class_loader
   *   The class loader. Normally \\Composer\\Autoload\\ClassLoader, as included by
   *   the front controller, but may also be decorated; e.g.,
   *   \\Symfony\\Component\\ClassLoader\\ApcClassLoader.
   * @param bool $allow_dumping
   *   (optional) FALSE to stop the container from being written to or read
   *   from disk. Defaults to TRUE.
   * @param string $app_root
   *   (optional) The path to the application root as a string. If not supplied,
   *   the application root will be computed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
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
    '522f6cfb2b6f26e710985130df552b2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine the application root directory based on this file\'s location.
   *
   * @return string
   *   The application root.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'guessApplicationRoot',
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
    '6094a29eb87318fbda71a149116b99dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the appropriate site directory for a request.
   *
   * Once the kernel has been created DrupalKernelInterface::getSitePath() is
   * preferred since it gets the statically cached result of this method.
   *
   * Site directories contain all site specific code. This includes settings.php
   * for bootstrap level configuration, file configuration stores, public file
   * storage and site specific modules and themes.
   *
   * A file named sites.php must be present in the sites directory for
   * multisite. If it doesn\'t exist, then \'sites/default\' will be used.
   *
   * Finds a matching site directory file by stripping the website\'s hostname
   * from left to right and pathname from right to left. By default, the
   * directory must contain a \'settings.php\' file for it to match. If the
   * parameter $require_settings is set to FALSE, then a directory without a
   * \'settings.php\' file will match as well. The first configuration file found
   * will be used and the remaining ones will be ignored. If no configuration
   * file is found, returns a default value \'sites/default\'. See
   * default.settings.php for examples on how the URL is converted to a
   * directory.
   *
   * The sites.php file in the sites directory can define aliases in an
   * associative array named $sites. The array is written in the format
   * \'<port>.<domain>.<path>\' => \'directory\'. As an example, to create a
   * directory alias for https://www.drupal.org:8080/mysite/test whose
   * configuration file is in sites/example.com, the array should be defined as:
   * @code
   * $sites = array(
   *   \'8080.www.drupal.org.mysite.test\' => \'example.com\',
   * );
   * @endcode
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   * @param bool $require_settings
   *   Only directories with an existing settings.php file will be recognized.
   *   Defaults to TRUE. During initial installation, this is set to FALSE so
   *   that Drupal can detect a matching directory, then create a new
   *   settings.php file in it.
   * @param string $app_root
   *   (optional) The path to the application root as a string. If not supplied,
   *   the application root will be computed.
   *
   * @return string
   *   The path of the matching directory.
   *
   * @throws \\Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException
   *   In case the host name in the request is invalid.
   *
   * @see \\Drupal\\Core\\DrupalKernelInterface::getSitePath()
   * @see \\Drupal\\Core\\DrupalKernelInterface::setSitePath()
   * @see default.settings.php
   * @see example.sites.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'findSitePath',
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
    '3f2db0c2f3d06b21bbb58fa7d39acaf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'setSitePath',
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
    'a1f18e0ae42b6151579d6d21f9f66e0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getSitePath',
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
    '93aafc13107e4f3cd0aef767572af3b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getAppRoot',
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
    'a77eb3d6eb80b7b72b1a49a071605341' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'boot',
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
    'd04aecb7cbee26acf2b1df1250dc8a2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'shutdown',
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
    '8dfb8100176889bb35b2c233f78a5b3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getContainer',
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
    '572d2b06e2a9b2f0c42825366eb3f0b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'setContainer',
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
    'adbe30daf2472b09c48353dd2acccdc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getCachedContainerDefinition',
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
    'c5c6c5f5cbedbd796aaa09a22533ec68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'loadLegacyIncludes',
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
    '48da227e32311a507d78e56507939f1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'preHandle',
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
    '33f1232c9562779f8b62e81857b66925' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'discoverServiceProviders',
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
    '27ad2bcf4f57d62c979cf8f53cea8c00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getServiceProviders',
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
    '18c94f14cb81a7918a5005ed7eb48337' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'terminate',
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
    '2154d232fb338a83ce4922c82ac572eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'handle',
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
    '849e6c73c3d72dd1acebdc37b91b57af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts an exception into a response.
   *
   * @param \\Exception $e
   *   An exception
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   A Request instance
   * @param int $type
   *   The type of the request (one of HttpKernelInterface::MASTER_REQUEST or
   *   HttpKernelInterface::SUB_REQUEST)
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Response
   *   A Response instance
   *
   * @throws \\Exception
   *   If the passed in exception cannot be turned into a response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'handleException',
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
    'fe3b2b7dba853628195765eb46757c6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'prepareLegacyRequest',
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
    '964038066eb4cf2caf94b3c4b4a20385' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns module data on the filesystem.
   *
   * @param $module
   *   The name of the module.
   *
   * @return \\Drupal\\Core\\Extension\\Extension|bool
   *   Returns an Extension object if the module is found, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'moduleData',
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
    '260ad8b7b3088b8ae06f03456f66cb07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements Drupal\\Core\\DrupalKernelInterface::updateModules().
   *
   * @todo Remove obsolete $module_list parameter. Only $module_filenames is
   *   needed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'updateModules',
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
    '00e9392d46bb1a8f47995a48ffd67689' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the container cache key based on the environment.
   *
   * The \'environment\' consists of:
   * - The kernel environment string.
   * - The Drupal version constant.
   * - The deployment identifier from settings.php. This allows custom
   *   deployments to force a container rebuild.
   * - The operating system running PHP. This allows compiler passes to optimize
   *   services for different operating systems.
   * - The paths to any additional container YAMLs from settings.php.
   *
   * @return string
   *   The cache key used for the service container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getContainerCacheKey',
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
    'c801f828c20d0ffb59d6ae8d2901a321' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the kernel parameters.
   *
   * @return array An array of kernel parameters
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getKernelParameters',
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
    '53fa004635bc86467337c68d5e0d3644' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the service container.
   *
   * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'initializeContainer',
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
    '03211ea4db3c750a488030d2a78db780' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Setup a consistent PHP environment.
   *
   * This method sets PHP environment options we want to be sure are set
   * correctly for security or just saneness.
   *
   * @param string $app_root
   *   (optional) The path to the application root as a string. If not supplied,
   *   the application root will be computed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'bootEnvironment',
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
    '8c40dfca06fa5c4d4f87f860216b6cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Locate site path and initialize settings singleton.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   *
   * @throws \\Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException
   *   In case the host name in the request is not trusted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'initializeSettings',
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
    'fcc28699676a191c33433ee0732dff42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Bootstraps the legacy global request variables.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The current request.
   *
   * @todo D8: Eliminate this entirely in favor of Request object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'initializeRequestGlobals',
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
    '82f12d87827e508af760e3bd56bd5c5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns service instances to persist from an old container to a new one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getServicesToPersist',
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
    '44a6e6f9d9b4e9e023873de72a2a88e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Moves persistent service instances into a new container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'persistServices',
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
    '9e0d2f22ab04aa79dd7bc7fe1f889d53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'rebuildContainer',
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
    'bb8aa6243e94511dc89b7bd9f59af267' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'invalidateContainer',
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
    'ff793d50beab6259debefd66e1f28528' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Attach synthetic values on to kernel.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   Container object
   *
   * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'attachSynthetic',
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
    'e27248871b037a9a2a216a2c33690981' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compiles a new service container.
   *
   * @return \\Drupal\\Core\\DependencyInjection\\ContainerBuilder The compiled service container
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'compileContainer',
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
    'e3f55f660d53fc6fe946a66e41d15e7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var $component \\DirectoryIterator */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'compileContainer',
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
    'ea6717d70e846a0461a516c1444eef0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers all service providers to the kernel.
   *
   * @throws \\LogicException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'initializeServiceProviders',
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
    '4d82eaccaf520b2bc37ffbcafb282946' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a new ContainerBuilder instance used to build the service container.
   *
   * @return \\Drupal\\Core\\DependencyInjection\\ContainerBuilder
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getContainerBuilder',
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
    'c7aa48d872746eccf5bfd5e6e79366c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the container definition in a cache.
   *
   * @param array $container_definition
   *   The container definition to cache.
   *
   * @return bool
   *   TRUE if the container was successfully cached.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'cacheDrupalContainer',
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
    '6ced17f63b35c54c69bea13591dda238' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a http kernel from the container
   *
   * @return \\Symfony\\Component\\HttpKernel\\HttpKernelInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getHttpKernel',
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
    '8934310f98b6daa603867af05a0e7533' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the active configuration storage to use during building the container.
   *
   * @return \\Drupal\\Core\\Config\\StorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getConfigStorage',
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
    '014a3b244d2a4497edd817a4b8471870' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of Extension class parameters for all enabled modules.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getModulesParameter',
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
    '1c79a1a0c32ed0dc27c243df368fc06a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the file name for each enabled module.
   *
   * @return array
   *   Array where each key is a module name, and each value is a path to the
   *   respective *.info.yml file.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getModuleFileNames',
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
    'd05cd1b19dee6225c1f7bfad3ca8d1ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the PSR-4 base directories for module namespaces.
   *
   * @param string[] $module_file_names
   *   Array where each key is a module name, and each value is a path to the
   *   respective *.info.yml file.
   *
   * @return string[]
   *   Array where each key is a module namespace like \'Drupal\\system\', and each
   *   value is the PSR-4 base directory associated with the module namespace.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getModuleNamespacesPsr4',
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
    '001504f95d1a48f4532027289faf71ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers a list of namespaces with PSR-4 directories for class loading.
   *
   * @param array $namespaces
   *   Array where each key is a namespace like \'Drupal\\system\', and each value
   *   is either a PSR-4 base directory, or an array of PSR-4 base directories
   *   associated with this namespace.
   * @param object $class_loader
   *   The class loader. Normally \\Composer\\Autoload\\ClassLoader, as included by
   *   the front controller, but may also be decorated; e.g.,
   *   \\Symfony\\Component\\ClassLoader\\ApcClassLoader.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'classLoaderAddMultiplePsr4',
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
    '4b529d12204b22858726f30d3214baf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates a hostname length.
   *
   * @param string $host
   *   A hostname.
   *
   * @return bool
   *   TRUE if the length is appropriate, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'validateHostnameLength',
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
    'a529680070df35b0d403fa8e7127b0d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the hostname supplied from the HTTP request.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request object
   *
   * @return bool
   *   TRUE if the hostname is valid, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'validateHostname',
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
    '08b8ed2580ed58531baf154ddeb25b18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up the lists of trusted HTTP Host headers.
   *
   * Since the HTTP Host header can be set by the user making the request, it
   * is possible to create an attack vectors against a site by overriding this.
   * Symfony provides a mechanism for creating a list of trusted Host values.
   *
   * Host patterns (as regular expressions) can be configured through
   * settings.php for multisite installations, sites using ServerAlias without
   * canonical redirection, or configurations where the site responds to default
   * requests. For example,
   *
   * @code
   * $settings[\'trusted_host_patterns\'] = array(
   *   \'^example\\.com$\',
   *   \'^*.example\\.com$\',
   * );
   * @endcode
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request object.
   * @param array $host_patterns
   *   The array of trusted host patterns.
   *
   * @return bool
   *   TRUE if the Host header is trusted, FALSE otherwise.
   *
   * @see https://www.drupal.org/docs/8/install/trusted-host-settings
   * @see \\Drupal\\Core\\Http\\TrustedHostsRequestFactory
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'setupTrustedHosts',
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
    'cbcfbdd61d31b83365f060763c9b7bed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add service files.
   *
   * @param string[] $service_yamls
   *   A list of service files.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'addServiceFiles',
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
    'ea2c30bce109bb829a625bbef537d3ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the active install profile.
   *
   * @return string|null
   *   The name of the any active install profile or distribution.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'classloader' => 'Composer\\Autoload\\ClassLoader',
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'databasebackend' => 'Drupal\\Core\\Cache\\DatabaseBackend',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'nullstorage' => 'Drupal\\Core\\Config\\NullStorage',
          'database' => 'Drupal\\Core\\Database\\Database',
          'containerbuilder' => 'Drupal\\Core\\DependencyInjection\\ContainerBuilder',
          'servicemodifierinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceModifierInterface',
          'serviceproviderinterface' => 'Drupal\\Core\\DependencyInjection\\ServiceProviderInterface',
          'yamlfileloader' => 'Drupal\\Core\\DependencyInjection\\YamlFileLoader',
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
          'mimetypeguesser' => 'Drupal\\Core\\File\\MimeType\\MimeTypeGuesser',
          'trustedhostsrequestfactory' => 'Drupal\\Core\\Http\\TrustedHostsRequestFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'installerredirecttrait' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
          'language' => 'Drupal\\Core\\Language\\Language',
          'pharextensioninterceptor' => 'Drupal\\Core\\Security\\PharExtensionInterceptor',
          'requestsanitizer' => 'Drupal\\Core\\Security\\RequestSanitizer',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'apcclassloader' => 'Symfony\\Component\\ClassLoader\\ApcClassLoader',
          'wincacheclassloader' => 'Symfony\\Component\\ClassLoader\\WinCacheClassLoader',
          'xcacheclassloader' => 'Symfony\\Component\\ClassLoader\\XcacheClassLoader',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'parameterbag' => 'Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'badrequesthttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException',
          'httpexceptioninterface' => 'Symfony\\Component\\HttpKernel\\Exception\\HttpExceptionInterface',
          'terminableinterface' => 'Symfony\\Component\\HttpKernel\\TerminableInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
          'pharstreamwrappermanager' => 'TYPO3\\PharStreamWrapper\\Manager',
          'pharstreamwrapperbehavior' => 'TYPO3\\PharStreamWrapper\\Behavior',
          'pharstreamwrapper' => 'TYPO3\\PharStreamWrapper\\PharStreamWrapper',
        ),
         'className' => 'Drupal\\Core\\DrupalKernel',
         'functionName' => 'getInstallProfile',
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