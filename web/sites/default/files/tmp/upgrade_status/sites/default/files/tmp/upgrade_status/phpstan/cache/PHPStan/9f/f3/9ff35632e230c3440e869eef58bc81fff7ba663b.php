<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/simpletest/src/WebTestBase.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/FunctionalTestSetupTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/SessionTestTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/RefreshVariablesTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/KernelTests/AssertContentTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/TestFileCreationTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/system/src/Tests/Cache/AssertPageCacheContextsAndTagsTrait.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/block/tests/src/Traits/BlockCreationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/node/tests/src/Traits/ContentTypeCreationTrait.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/Traits/Core/CronRunTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/AssertMailTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/node/tests/src/Traits/NodeCreationTrait.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/user/tests/src/Traits/UserCreationTrait.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/XdebugRequestTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/EntityViewTrait.php-1624732870',
   'data' => 
  array (
    '0abeff2a63f9b6fec4105a8707376d31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Test case for typical Drupal tests.
 *
 * @ingroup testing
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Instead,
 *   use \\Drupal\\Tests\\BrowserTestBase. See https://www.drupal.org/node/3030340.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'd10f397ffb56a4b74c2fe9c48d82fdda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a trait for shared functional test setup functionality.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '1ced975c57dcd0ae67c3641f996e4348' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to generate and get session name in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '3e895f7eab1b5996980dcd8e622b7015' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the session cookie.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'd669b52ec73e05c7754a1ff3d27c2546' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a session cookie name.
   *
   * @param string $data
   *   The data to generate session name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'generateSessionName',
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
    '7dd2078c47e7bd796cf400219106d5f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the session name in use on the child site.
   *
   * @return string
   *   The name of the session cookie.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getSessionName',
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
    'b950b980a7d7d26c7a3ca977755bc672' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a method to refresh in-memory configuration and state information.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '59142feda0467c422271cb179eff05cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Refreshes in-memory configuration and state information.
   *
   * Useful after a page request is made that changes configuration or state in
   * a different thread.
   *
   * In other words calling a settings page with $this->drupalPostForm() with a
   * changed value would update configuration to reflect that change, but in the
   * thread that made the call (thread running the test) the changed values
   * would not be picked up.
   *
   * This method clears the cache and loads a fresh copy.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'refreshVariables',
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
    '10e26478b8661bf6f1fb4e236c1faeab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The "#1" admin user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'b425e0d1d011911554c7408557119556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The class loader to use for installation and initialization of setup.
   *
   * @var \\Symfony\\Component\\Classloader\\Classloader
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'abca04b546a95afaa1cffadf86acf9ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config directories used in this test.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Site\\Settings::get(\'config_sync_directory\') instead.
   *
   * @see https://www.drupal.org/node/3018145
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'baaeb4d3068e3cbf074c7c785e1399a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The flag to set \'apcu_ensure_unique_prefix\' setting.
   *
   * Wide use of a unique prefix can lead to problems with memory, if tests are
   * run with a concurrency higher than 1. Therefore, FALSE by default.
   *
   * @var bool
   *
   * @see \\Drupal\\Core\\Site\\Settings::getApcuPrefix().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'df3a5ffecdb8ee317c2bf8a450b8156c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares site settings and services before installation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'prepareSettings',
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
    'f4a6020b820f7ea0d16dc4f83fbfe318' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rewrites the settings.php file of the test site.
   *
   * @param array $settings
   *   An array of settings to write out, in the format expected by
   *   drupal_rewrite_settings().
   *
   * @see drupal_rewrite_settings()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'writeSettings',
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
    '6d82c79afcc2a1d4f1c71eb977f004c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes parameters in the services.yml file.
   *
   * @param string $name
   *   The name of the parameter.
   * @param string $value
   *   The value of the parameter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setContainerParameter',
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
    '00485a3c0328f7f128fa066dfc5a7178' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rebuilds \\Drupal::getContainer().
   *
   * Use this to update the test process\'s kernel with a new service container.
   * For example, when the list of enabled modules is changed via the internal
   * browser the test process\'s kernel has a service container with an out of
   * date module list.
   *
   * @see TestBase::prepareEnvironment()
   * @see TestBase::restoreEnvironment()
   *
   * @todo Fix https://www.drupal.org/node/2021959 so that module enable/disable
   *   changes are immediately reflected in \\Drupal::getContainer(). Until then,
   *   tests can invoke this workaround when requiring services from newly
   *   enabled modules to be immediately available in the same request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'afb8f5350e658bc6be76185a41465ab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets all data structures after having enabled new modules.
   *
   * This method is called by FunctionalTestSetupTrait::rebuildAll() after
   * enabling the requested modules. It must be called again when additional
   * modules are enabled later.
   *
   * @see \\Drupal\\Core\\Test\\FunctionalTestSetupTrait::rebuildAll()
   * @see \\Drupal\\Tests\\BrowserTestBase::installDrupal()
   * @see \\Drupal\\simpletest\\WebTestBase::setUp()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'resetAll',
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
    '837162fc6bece148f2917ad4a5362f2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a mock request and sets it on the generator.
   *
   * This is used to manipulate how the generator generates paths during tests.
   * It also ensures that calls to $this->drupalGet() will work when running
   * from run-tests.sh because the url generator no longer looks at the global
   * variables that are set there but relies on getting this information from a
   * request object.
   *
   * @param bool $clean_urls
   *   Whether to mock the request using clean urls.
   * @param array $override_server_vars
   *   An array of server variables to override.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Request
   *   The mocked request object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'prepareRequestForGenerator',
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
    'be063fb7bb117a51b505be793b4c231c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Execute the non-interactive installer.
   *
   * @see install_drupal()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'doInstall',
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
    'e2988322ffcdb76419d1adee0cd4a939' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize settings created during install.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'initSettings',
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
    '96fc0e1674f2e448843fad423a4902b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initialize various configurations post-installation.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'initConfig',
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
    '8de0183c2ea45f84aeaf2dc7d03b1f23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes user 1 for the site to be installed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'initUserSession',
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
    '9430ba3ef753b1020387277d508c2740' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the kernel after installation.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   Request object.
   *
   * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'initKernel',
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
    '2043444691b37a71a56595b5a05e706b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs the default theme defined by `static::$defaultTheme` when needed.
   *
   * To install a test theme outside of the testing environment, add
   * @code
   * $settings[\'extension_discovery_scan_tests\'] = TRUE;
   * @endcode
   * to your settings.php.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'installDefaultThemeFromClassProperty',
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
    'f6d3e37b2d6d87df524c3e13d4f2ab0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Install modules defined by `static::$modules`.
   *
   * To install test modules outside of the testing environment, add
   * @code
   * $settings[\'extension_discovery_scan_tests\'] = TRUE;
   * @endcode
   * to your settings.php.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'installModulesFromClassProperty',
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
    'a3670e113bc88a68538ed599b65470d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets and rebuilds the environment after setup.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'rebuildAll',
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
    '417e83823357373daeedec77b7da8e5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the parameters that will be used when Simpletest installs Drupal.
   *
   * @see install_drupal()
   * @see install_state_defaults()
   *
   * @return array
   *   Array of parameters for use in install_drupal().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'installParameters',
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
    '180aef5a2b0837027594574cae5ff154' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up the base URL based upon the environment variable.
   *
   * @throws \\Exception
   *   Thrown when no SIMPLETEST_BASE_URL environment variable is provided.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setupBaseUrl',
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
    'ecca1bbef8f256934a19a27a0c1a6063' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the current environment for running the test.
   *
   * Also sets up new resources for the testing environment, such as the public
   * filesystem and configuration directories.
   *
   * This method is private as it must only be called once by
   * BrowserTestBase::setUp() (multiple invocations for the same test would have
   * unpredictable consequences) and it must not be callable or overridable by
   * test classes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'prepareEnvironment',
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
    '436a53915a73b420ff839225f5a40d57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all supported database driver installer objects.
   *
   * This wraps drupal_get_database_types() for use without a current container.
   *
   * @return \\Drupal\\Core\\Database\\Install\\Tasks[]
   *   An array of available database driver installer objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'filecachefactory' => 'Drupal\\Component\\FileCache\\FileCacheFactory',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'configschemachecker' => 'Drupal\\Core\\Config\\Development\\ConfigSchemaChecker',
          'filestorage' => 'Drupal\\Core\\Config\\FileStorage',
          'installstorage' => 'Drupal\\Core\\Config\\InstallStorage',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'database' => 'Drupal\\Core\\Database\\Database',
          'drupalkernel' => 'Drupal\\Core\\DrupalKernel',
          'missingdependencyexception' => 'Drupal\\Core\\Extension\\MissingDependencyException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'yaml' => 'Drupal\\Core\\Serialization\\Yaml',
          'usersession' => 'Drupal\\Core\\Session\\UserSession',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'sessiontesttrait' => 'Drupal\\Tests\\SessionTestTrait',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'symfonyyaml' => 'Symfony\\Component\\Yaml\\Yaml',
          'routeobjectinterface' => 'Symfony\\Cmf\\Component\\Routing\\RouteObjectInterface',
          'route' => 'Symfony\\Component\\Routing\\Route',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getDatabaseTypes',
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
    '8dd899341e76ed71551dc36ffa986ca7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides test methods to assert content.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '3925b5b9be31d4c7b0562adb1d12ede5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current raw content.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'f3d450fb4f2ec366afb6c61ecc6565ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plain-text content of raw $content (text nodes).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '3cc00bcb9aa054bdb93ed42ce7a29bf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The drupalSettings value from the current raw $content.
   *
   * Variable drupalSettings refers to the drupalSettings JavaScript variable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'a7d5390cd8416f7119eb8656e44a0d16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The XML structure parsed from the current raw $content.
   *
   * @var \\SimpleXMLElement
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '7effbc72aed26239e0675be646aad32d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current raw content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getRawContent',
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
    'd21b87fb64e0c503767c77e9c8318bf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the raw content (e.g. HTML).
   *
   * @param string $content
   *   The raw content to set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setRawContent',
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
    'e86aa97d8ef10c1c388432d233711516' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the plain-text content from the current raw content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getTextContent',
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
    '7f05af10b176728aaf1d65b58f709f7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes all white-space between HTML tags from the raw content.
   *
   * White-space is only removed if there are no non-white-space characters
   * between HTML tags.
   *
   * Use this (once) after performing an operation that sets new raw content,
   * and when you want to use e.g. assertText() but ignore potential white-space
   * caused by HTML output templates.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'removeWhiteSpace',
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
    '82b6b82437ac48a714cc9c4c97af7855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value of drupalSettings for the currently-loaded page.
   *
   * Variable drupalSettings refers to the drupalSettings JavaScript variable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getDrupalSettings',
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
    '8b902923299010d0b06bc45826314f13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of drupalSettings for the currently-loaded page.
   *
   * Variable drupalSettings refers to the drupalSettings JavaScript variable.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setDrupalSettings',
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
    '22f8ea63c9cc8925976385fd4f2640c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parse content returned from curlExec using DOM and SimpleXML.
   *
   * @return \\SimpleXMLElement|false
   *   A SimpleXMLElement or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'parse',
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
    '7b1a00bbc5a46e52f831720477d893cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the current URL from the cURL handler.
   *
   * @return string
   *   The current URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getUrl',
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
    '75cdfd4d31890a953f7824de966eeba9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an XPath query.
   *
   * Builds an XPath query by replacing placeholders in the query by the value
   * of the arguments.
   *
   * XPath 1.0 (the version supported by libxml2, the underlying XML library
   * used by PHP) doesn\'t support any form of quotation. This function
   * simplifies the building of XPath expression.
   *
   * @param string $xpath
   *   An XPath query, possibly with placeholders in the form \':name\'.
   * @param array $args
   *   An array of arguments with keys in the form \':name\' matching the
   *   placeholders in the query. The values may be either strings or numeric
   *   values.
   *
   * @return string
   *   An XPath query with arguments replaced.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'buildXPathQuery',
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
    '40126879621a8ab4adece95473e5ddde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs an xpath search on the contents of the internal browser.
   *
   * The search is relative to the root element (HTML tag normally) of the page.
   *
   * @param string $xpath
   *   The xpath string to use in the search.
   * @param array $arguments
   *   An array of arguments with keys in the form \':name\' matching the
   *   placeholders in the query. The values may be either strings or numeric
   *   values.
   *
   * @return \\SimpleXMLElement[]|bool
   *   The return value of the xpath search or FALSE on failure. For details on
   *   the xpath string format and return values see the SimpleXML
   *   documentation.
   *
   * @see http://php.net/manual/function.simplexml-element-xpath.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'xpath',
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
    'ca407d13504b942a393d2e9dc0732922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Searches elements using a CSS selector in the raw content.
   *
   * The search is relative to the root element (HTML tag normally) of the page.
   *
   * @param string $selector
   *   CSS selector to use in the search.
   *
   * @return \\SimpleXMLElement[]
   *   The return value of the XPath search performed after converting the CSS
   *   selector to an XPath selector.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'cssSelect',
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
    'ed22351a29ade7b0c5e0adb4b8a07e5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get all option elements, including nested options, in a select.
   *
   * @param \\SimpleXMLElement $element
   *   The element for which to get the options.
   *
   * @return \\SimpleXmlElement[]
   *   Option elements in select.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getAllOptions',
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
    '966c0756d3bb3f230d8584a2198fff1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is found.
   *
   * An optional link index may be passed.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param int $index
   *   Link position counting from zero.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use strtr() to embed variables in the message text, not
   *   t(). If left blank, a default message will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertLink',
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
    'e7fc80b4e9ce6d054d05ce6282fcaf41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link with the specified label is not found.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoLink',
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
    'a440cbc1cb3e61ca6717448fb86cf1fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param string $index
   *   Link position counting from zero.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertLinkByHref',
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
    '63e2a2a9d365925ea79a47155dee5c80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href (part) is not found.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoLinkByHref',
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
    '95902ac63ae3ac57962908bb69e75f36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if a link containing a given href is not found in the main region.
   *
   * @param string $href
   *   The full or partial value of the \'href\' attribute of the anchor tag.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoLinkByHrefInMainRegion',
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
    '255e25c5c7f5bd6f0a1826db6ec49ab5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertRaw',
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
    'a9cc82665f062d06c065f210c7c031c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text is NOT found on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoRaw',
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
    '3b080cab74badb7176673ca810b46a2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS found escaped on the loaded page, fail otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertEscaped',
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
    '9889de2d3dff0e2093d17572c2d61ded' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the raw text IS NOT found escaped on the loaded page, fail
   * otherwise.
   *
   * Raw text refers to the raw HTML that the page generated.
   *
   * @param string $raw
   *   Raw (HTML) string to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoEscaped',
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
    '61c181f0e1f61a344363fcb5715af81d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @see \\Drupal\\simpletest\\AssertContentTrait::assertRaw()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertText',
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
    '1c084bfe9bd11085887cb569f83a41ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the page (with HTML stripped) does not contains the text.
   *
   * Note that stripping HTML tags also removes their attributes, such as
   * the values of text fields.
   *
   * @param string $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @see \\Drupal\\simpletest\\AssertContentTrait::assertNoRaw()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoText',
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
    'e4957c106c8a2ad1958b98eaca528321' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper for assertText and assertNoText.
   *
   * It is not recommended to call this function directly.
   *
   * @param string $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default. Defaults to \'Other\'.
   * @param bool $not_exists
   *   (optional) TRUE if this text should not exist, FALSE if it should.
   *   Defaults to TRUE.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertTextHelper',
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
    '5fa59e3fadc3d4f2f708e27ead2df80f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found ONLY ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertUniqueText',
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
    '1d89faa1a6abe85fb340877e93b69efe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the text is found MORE THAN ONCE on the text version of the page.
   *
   * The text version is the equivalent of what a user would see when viewing
   * through a web browser. In other words the HTML has been filtered out of
   * the contents.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoUniqueText',
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
    '2c1543a775859ff21c5bb5841b732f9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper for assertUniqueText and assertNoUniqueText.
   *
   * It is not recommended to call this function directly.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   Plain text to look for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default. Defaults to \'Other\'.
   * @param bool $be_unique
   *   (optional) TRUE if this text should be found only once, FALSE if it
   *   should be found more than once. Defaults to FALSE.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertUniqueTextHelper',
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
    '01ec00019a8aed9e32a58fa9af99b620' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the Perl regex pattern is found in the raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertPattern',
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
    '4009e6605292070f903bb7636391cc7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers a pass if the perl regex pattern is not found in raw content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoPattern',
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
    'ed994e756d775338895fde3d39f4f0e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a Perl regex pattern is found in the plain-text content.
   *
   * @param string $pattern
   *   Perl regex to look for including the regex delimiters.
   * @param string $message
   *   (optional) A message to display with the assertion.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertTextPattern',
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
    'cc2d65ce568e19cdfaea3e81d884daf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pass if the page title is the given string.
   *
   * @param string $title
   *   The string the title should be.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertTitle',
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
    'f9af53b6d2e08620855dbdc4601ff481' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Pass if the page title is not the given string.
   *
   * @param string $title
   *   The string the title should not be.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoTitle',
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
    '3eb03e616481ab87b599a275302dbc1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts themed output.
   *
   * @param string $callback
   *   The name of the theme hook to invoke; e.g. \'links\' for links.html.twig.
   * @param string $variables
   *   An array of variables to pass to the theme function.
   * @param string $expected
   *   The expected themed output string.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertThemeOutput',
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
    '784c5244fd645e25df0167f2fdda9794' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\RendererInterface $renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertThemeOutput',
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
    'fbd9df42af041eb171492c453439cd42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page with a given Xpath result.
   *
   * @param \\SimpleXmlElement[] $fields
   *   Xml elements.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default) to skip
   *   checking the actual value, while still checking that the field exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertFieldsByValue',
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
    '22146799053a9e5e750284d397b95c80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists in the current page by the given XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertFieldByXPath',
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
    'a16b2de8ddfaa488f036aac9dd38e2d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the selected value from a select field.
   *
   * @param \\SimpleXmlElement $element
   *   SimpleXMLElement select element.
   *
   * @return bool
   *   The selected value or FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getSelectedItem',
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
    '15f444325329f0271d552080f0cc58c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist or its value does not match, by XPath.
   *
   * @param string $xpath
   *   XPath used to find the field.
   * @param string $value
   *   (optional) Value of the field, to assert that the field\'s value on the
   *   page does not match it.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoFieldByXPath',
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
    '2e12e05ad8a7da6b2cef7980df0d9777' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value of the field to assert. You may pass in NULL (default)
   *   to skip checking the actual value, while still checking that the field
   *   exists.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertFieldByName',
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
    '6ff06cb7bb3225700a98411eb1736053' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given name and value.
   *
   * @param string $name
   *   Name of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page doesn\'t match it. You may pass in NULL to skip checking the
   *   value, while still checking that the field doesn\'t exist. However, the
   *   default value (\'\') asserts that the field value is not an empty string.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoFieldByName',
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
    'd6f3be78881dd9d8f1c322ef84d49dba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $value
   *   (optional) Value for the field to assert. You may pass in NULL to skip
   *   checking the value, while still checking that the field exists.
   *   However, the default value (\'\') asserts that the field value is an empty
   *   string.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertFieldById',
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
    '0607c8deec54ff38f39f8f738f1a7238' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given ID and value.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $value
   *   (optional) Value for the field, to assert that the field\'s value on the
   *   page doesn\'t match it. You may pass in NULL to skip checking the value,
   *   while still checking that the field doesn\'t exist. However, the default
   *   value (\'\') asserts that the field value is not an empty string.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoFieldById',
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
    'cfdecdb2bb8ddc8182f21ded80642dae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is checked.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertFieldChecked',
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
    '590634c26011edd7cfdc146c30fb0f0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a checkbox field in the current page is not checked.
   *
   * @param string $id
   *   ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoFieldChecked',
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
    'df15d3103677fe9248fa0c9a2c8e9bcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page exists.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertOption',
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
    '34f72230e76cba89a46b021748369784' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option with the visible text exists.
   *
   * @param string $id
   *   The ID of the select field to assert.
   * @param string $text
   *   The text for the option tag to assert.
   * @param string $message
   *   (optional) A message to display with the assertion.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertOptionByText',
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
    '36eeeb860dc3aeadd8cc764f76069315' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page exists.
   *
   * @param string $drupal_selector
   *   The data drupal selector of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertOptionWithDrupalSelector',
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
    'f4b52d609115659034370fdefe45e3d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page does not exist.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoOption',
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
    '390ee788c129224b2e53a9bb23e52d94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is checked.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @todo $id is unusable. Replace with $name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertOptionSelected',
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
    '0d291a4a9682e75fb37d807b7cc57c70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is checked.
   *
   * @param string $drupal_selector
   *   The data drupal selector of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   *
   * @todo $id is unusable. Replace with $name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertOptionSelectedWithDrupalSelector',
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
    'a0e0ae8e6972a09ab6bc7a5bf37fb11b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a select option in the current page is not checked.
   *
   * @param string $id
   *   ID of select field to assert.
   * @param string $option
   *   Option to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoOptionSelected',
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
    '29a4eb8deb60f4beda79d646bdba6926' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field exists with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertField',
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
    '728ad325dc9e92599a91622abcb5cb88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a field does not exist with the given name or ID.
   *
   * @param string $field
   *   Name or ID of field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoField',
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
    'ad3784a17c903b3c10bb342730d7f922' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that each HTML ID is used for just a single element.
   *
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   * @param array $ids_to_skip
   *   An optional array of ids to skip when checking for duplicates. It is
   *   always a bug to have duplicate HTML IDs, so this parameter is to enable
   *   incremental fixing of core code. Whenever a test passes this parameter,
   *   it should add a "todo" comment above the call to this function explaining
   *   the legacy bug that the test wishes to ignore and including a link to an
   *   issue that is working to fix that legacy bug.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoDuplicateIds',
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
    '24946b59c379b9b1593663b9afd386f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper: Constructs an XPath for the given set of attributes and value.
   *
   * @param string $attribute
   *   Field attributes.
   * @param string $value
   *   Value of field.
   *
   * @return string
   *   XPath for specified values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\KernelTests',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'rendercontext' => 'Drupal\\Core\\Render\\RenderContext',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
          'cssselectorconverter' => 'Symfony\\Component\\CssSelector\\CssSelectorConverter',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'constructFieldXpath',
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
    '577e0b1178013db39b8189132cd8ae83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create test files from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '7a997376cf1ea29fae01638ee3a2452d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the files were copied to the test files directory.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '7b3b3733c8d1908dfc5923ea05226568' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of files that can be used in tests.
   *
   * The first time this method is called, it will call
   * $this->generateFile() to generate binary and ASCII text files in the
   * public:// directory. It will also copy all files in
   * core/tests/fixtures/files to public://. These contain image, SQL, PHP,
   * JavaScript, and HTML files.
   *
   * All filenames are prefixed with their type and have appropriate extensions:
   * - text-*.txt
   * - binary-*.txt
   * - html-*.html and html-*.txt
   * - image-*.png, image-*.jpg, and image-*.gif
   * - javascript-*.txt and javascript-*.script
   * - php-*.txt and php-*.php
   * - sql-*.txt and sql-*.sql
   *
   * Any subsequent calls will not generate any new files, or copy the files
   * over again. However, if a test class adds a new file to public:// that
   * is prefixed with one of the above types, it will get returned as well, even
   * on subsequent calls.
   *
   * @param $type
   *   File type, possible values: \'binary\', \'html\', \'image\', \'javascript\',
   *   \'php\', \'sql\', \'text\'.
   * @param $size
   *   (optional) File size in bytes to match. Defaults to NULL, which will not
   *   filter the returned list by size.
   *
   * @return array[]
   *   List of files in public:// that match the filter(s).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getTestFiles',
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
    'a9b2fc56f7f3bd46ff905750687eca62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getTestFiles',
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
    '9649054ad09769a727ce93d2476d8ed4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares two files based on size and file name.
   *
   * Callback for uasort() within \\TestFileCreationTrait::getTestFiles().
   *
   * @param object $file1
   *   The first file.
   * @param object $file2
   *   The second class.
   *
   * @return int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'compareFiles',
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
    '6894a41d24c1f3538937db38fa250bf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a test file.
   *
   * @param string $filename
   *   The name of the file, including the path. The suffix \'.txt\' is appended
   *   to the supplied file name and the file is put into the public:// files
   *   directory.
   * @param int $width
   *   The number of characters on one line.
   * @param int $lines
   *   The number of lines in the file.
   * @param string $type
   *   (optional) The type, one of:
   *   - text: The generated file contains random ASCII characters.
   *   - binary: The generated file contains random characters whose codes are
   *     in the range of 0 to 31.
   *   - binary-text: The generated file contains random sequence of \'0\' and \'1\'
   *     values.
   *
   * @return string
   *   The name of the file, including the path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'generateFile',
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
    '52ef2d4364633d715808c69817762e7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides test assertions for testing page-level cache contexts & tags.
 *
 * Can be used by test classes that extend \\Drupal\\simpletest\\WebTestBase.
 *
 * @deprecated in drupal:8.?.? and is removed from drupal:9.0.0. Use
 *  \\Drupal\\Tests\\system\\Functional\\Cache\\AssertPageCacheContextsAndTagsTrait
 *  instead.
 *
 * @see https://www.drupal.org/node/2896632
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '2149627bb747c0d556fad5f18a84bcf6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables page caching.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'enablePageCaching',
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
    '621e74db089fa7e5e7f25ffd0dc9ea25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific header value as array.
   *
   * @param string $header_name
   *   The header name.
   *
   * @return string[]
   *   The header value, potentially exploded by spaces.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getCacheHeaderValues',
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
    'd215f4b961c4ae04c30a5e2a571e910c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache context was present in the last response.
   *
   * @param string $expected_cache_context
   *   The expected cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertCacheContext',
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
    '4ab091e1bb3ac268749474177f5203f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a cache context was not present in the last response.
   *
   * @param string $not_expected_cache_context
   *   The expected cache context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoCacheContext',
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
    '88a810f8f9876d58452e1af110a5d4d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts page cache miss, then hit for the given URL; checks cache headers.
   *
   * @param \\Drupal\\Core\\Url $url
   *   The URL to test.
   * @param string[] $expected_contexts
   *   The expected cache contexts for the given URL.
   * @param string[] $expected_tags
   *   The expected cache tags for the given URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertPageCacheContextsAndTags',
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
    'e35e153cf86fd11f07242571768f06bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides debug information for cache tags.
   *
   * @param string[] $actual_tags
   *   The actual cache tags.
   * @param string[] $expected_tags
   *   The expected cache tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'debugCacheTags',
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
    'bb2bff1de98a9b0817fc8cb881e446c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures that some cache tags are present in the current response.
   *
   * @param string[] $expected_tags
   *   The expected tags.
   * @param bool $include_default_tags
   *   (optional) Whether the default cache tags should be included.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertCacheTags',
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
    'c836b5fe7807e3a87216b84c37e6e56d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures that some cache contexts are present in the current response.
   *
   * @param string[] $expected_contexts
   *   The expected cache contexts.
   * @param string $message
   *   (optional) A verbose message to output.
   * @param bool $include_default_contexts
   *   (optional) Whether the default contexts should automatically be included.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertCacheContexts',
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
    '2dab479ea695fb08bc9242150d597eb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the max age header.
   *
   * @param int $max_age
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\system\\Tests\\Cache',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertCacheMaxAge',
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
    '4b967889960a4b77bb7edda03c2d7d21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create and place block with default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '76635545b87d68f6450c1d38e09d071d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a block instance based on default settings.
   *
   * @param string $plugin_id
   *   The plugin ID of the block type for this block instance.
   * @param array $settings
   *   (optional) An associative array of settings for the block entity.
   *   Override the defaults by specifying the key and value in the array, for
   *   example:
   *   @code
   *     $this->drupalPlaceBlock(\'system_powered_by_block\', array(
   *       \'label\' => t(\'Hello, world!\'),
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - label: Random string.
   *   - ID: Random string.
   *   - region: \'sidebar_first\'.
   *   - theme: The default theme.
   *   - visibility: Empty array.
   *
   * @return \\Drupal\\block\\Entity\\Block
   *   The block entity.
   *
   * @todo
   *   Add support for creating custom block instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'placeBlock',
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
    'ab86f3bf6102a7014bfc9ad361e56bf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create content type from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '56c4aeb572c671649b4f8e296e4f4499' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a custom content type based on default settings.
   *
   * @param array $values
   *   An array of settings to change from the defaults.
   *   Example: \'type\' => \'foo\'.
   *
   * @return \\Drupal\\node\\Entity\\NodeType
   *   Created content type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'testcase' => 'PHPUnit\\Framework\\TestCase',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'createContentType',
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
    '76bab9f877e0d3748a57d27a0f25d6e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds ability to run cron from tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '0419f4b8bb7509559a9f160d2302a3f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs cron on the test site.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'cronRun',
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
    '11cff1562faf3fca8c814e642c2d6fbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods for testing emails sent during test runs.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'f1222d90189a3bc4014ba3d99a7830ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array containing all emails sent during this test case.
   *
   * @param array $filter
   *   An array containing key/value pairs used to filter the emails that are
   *   returned.
   *
   * @return array
   *   An array containing email messages captured during the current test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getMails',
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
    '579d27b11e57f8dfa6005a9dc5748673' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the given value.
   *
   * The field in $name must have the content described in $value.
   *
   * @param string $name
   *   Name of field or message property to assert. Examples: subject, body,
   *   id, ...
   * @param string $value
   *   Value of the field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Email\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertMail',
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
    'af91061f1d5f57ea943e2f62e50cdfe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the string in it.
   *
   * @param string $field_name
   *   Name of field or message property to assert: subject, body, id, ...
   * @param string $string
   *   String to search for.
   * @param int $email_depth
   *   Number of emails to search for string, starting with most recent.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertMailString',
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
    '537e2f2aba1fcd4c0339c7608f3e2008' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the pattern in it.
   *
   * @param string $field_name
   *   Name of field or message property to assert: subject, body, id, ...
   * @param string $regex
   *   Pattern to search for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertMailPattern',
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
    'b12643232fe9f03cf105e4625d3f6419' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Outputs to verbose the most recent $count emails sent.
   *
   * @param int $count
   *   Optional number of emails to output.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'verboseEmail',
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
    '9dccc20a9c63a7b041530029257161a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create node based on default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '76675e75658d4fa43aa608c049ff56b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a node from the database based on its title.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $title
   *   A node title, usually generated by $this->randomMachineName().
   * @param $reset
   *   (optional) Whether to reset the entity cache.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   A node entity matching $title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getNodeByTitle',
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
    '1bc89f2dc4749bceb3344d3592293f39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a node based on default settings.
   *
   * @param array $values
   *   (optional) An associative array of values for the node, as used in
   *   creation of entity. Override the defaults by specifying the key and value
   *   in the array, for example:
   *
   *   @code
   *     $this->drupalCreateNode(array(
   *       \'title\' => t(\'Hello, world!\'),
   *       \'type\' => \'article\',
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - body: Random string using the default filter format:
   *     @code
   *       $values[\'body\'][0] = array(
   *         \'value\' => $this->randomMachineName(32),
   *         \'format\' => filter_default_format(),
   *       );
   *     @endcode
   *   - title: Random string.
   *   - type: \'page\'.
   *   - uid: The currently logged in user, or anonymous.
   *
   * @return \\Drupal\\node\\NodeInterface
   *   The created node entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'createNode',
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
    '0e2e26893829f742bfcf0486d0058658' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $user */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\node\\Traits',
         'uses' => 
        array (
          'node' => 'Drupal\\node\\Entity\\Node',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'createNode',
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
    'eddcf4766da349a7904f4675436f1c22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create additional test users and switch the currently
 * logged in one.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'fdd8e6354d449abc311cce1aae8334df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a random user account and sets it as current user.
   *
   * Unless explicitly specified by setting the user ID to 1, a regular user
   * account will be created and set as current, after creating user account 1.
   * Additionally, this will ensure that at least the anonymous user account
   * exists regardless of the specified user ID.
   *
   * @param array $values
   *   (optional) An array of initial user field values.
   * @param array $permissions
   *   (optional) Array of permission names to assign to user. Note that the
   *   user always has the default permissions derived from the "authenticated
   *   users" role.
   * @param bool $admin
   *   (optional) Whether the user should be an administrator with all the
   *   available permissions.
   *
   * @return \\Drupal\\user\\UserInterface
   *   A user account object.
   *
   * @throws \\LogicException
   *   If attempting to assign additional roles to the anonymous user account.
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   If the user could not be saved.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setUpCurrentUser',
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
    'a49ec43150da58c218e6769f1b308fb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Switch the current logged in user.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user account object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setCurrentUser',
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
    'b1449a4f20d979f224cae5c79b80a0e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a user with a given set of permissions.
   *
   * @param array $permissions
   *   Array of permission names to assign to user. Note that the user always
   *   has the default permissions derived from the "authenticated users" role.
   * @param string $name
   *   The user name.
   * @param bool $admin
   *   (optional) Whether the user should be an administrator
   *   with all the available permissions.
   * @param array $values
   *   (optional) An array of initial user field values.
   *
   * @return \\Drupal\\user\\Entity\\User|false
   *   A fully loaded user object with pass_raw property, or FALSE if account
   *   creation fails.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   If the user creation fails.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'createUser',
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
    'cb7282545189daa1900d2891db302eda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an administrative role.
   *
   * @param string $rid
   *   (optional) The role ID (machine name). Defaults to a random name.
   * @param string $name
   *   (optional) The label for the role. Defaults to a random string.
   * @param int $weight
   *   (optional) The weight for the role. Defaults to NULL which sets the
   *   weight to maximum + 1.
   *
   * @return string
   *   Role ID of newly created role, or FALSE if role creation failed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'createAdminRole',
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
    'b4418a9c14f73190880dcd3c7858d54b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\RoleInterface $role */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'createAdminRole',
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
    'a2470d18d1377cc9ed43843d565360c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a role with specified permissions.
   *
   * @param array $permissions
   *   Array of permission names to assign to role.
   * @param string $rid
   *   (optional) The role ID (machine name). Defaults to a random name.
   * @param string $name
   *   (optional) The label for the role. Defaults to a random string.
   * @param int $weight
   *   (optional) The weight for the role. Defaults to NULL which sets the
   *   weight to maximum + 1.
   *
   * @return string
   *   Role ID of newly created role, or FALSE if role creation failed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'createRole',
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
    '76d42ce52fafaba0b50b399fb15a3e33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a given list of permission names is valid.
   *
   * @param array $permissions
   *   The permission names to check.
   *
   * @return bool
   *   TRUE if the permissions are valid, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'checkPermissions',
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
    'b5b86e4bddd37c203896f1e0bf9b453f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Grant permissions to a user role.
   *
   * @param \\Drupal\\user\\RoleInterface $role
   *   The user role entity to alter.
   * @param array $permissions
   *   (optional) A list of permission names to grant.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\user\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'databaseexceptionwrapper' => 'Drupal\\Core\\Database\\DatabaseExceptionWrapper',
          'schemaobjectexistsexception' => 'Drupal\\Core\\Database\\SchemaObjectExistsException',
          'entitystorageexception' => 'Drupal\\Core\\Entity\\EntityStorageException',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
          'role' => 'Drupal\\user\\Entity\\Role',
          'user' => 'Drupal\\user\\Entity\\User',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'grantPermissions',
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
    '7c7e2c186ab7466bb1333c314a95ccfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds xdebug cookies, from request setup.
   *
   * In order to debug web tests you need to either set a cookie, have the
   * Xdebug session in the URL or set an environment variable in case of CLI
   * requests. If the developer listens to connection on the parent site, by
   * default the cookie is not forwarded to the client side, so you cannot
   * debug the code running on the child site. In order to make debuggers work
   * this bit of information is forwarded. Make sure that the debugger listens
   * to at least three external connections.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request.
   *
   * @return array
   *   The extracted cookies.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'extractCookiesFromRequest',
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
    '8aa3bc338d71876efb3911bb1f6cf9f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods to deal with building entity views in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'd465bc35ab1546486d13f3a4403fb4e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the renderable view of an entity.
   *
   * Entities postpone the composition of their renderable arrays to #pre_render
   * functions in order to maximize cache efficacy. This means that the full
   * renderable array for an entity is constructed in drupal_render(). Some
   * tests require the complete renderable array for an entity outside of the
   * drupal_render process in order to verify the presence of specific values.
   * This method isolates the steps in the render process that produce an
   * entity\'s renderable array.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to prepare a renderable array for.
   * @param string $view_mode
   *   (optional) The view mode that should be used to build the entity.
   * @param null $langcode
   *   (optional) For which language the entity should be prepared, defaults to
   *   the current content language.
   * @param bool $reset
   *   (optional) Whether to clear the cache for this entity.
   *
   * @return array
   *
   * @see \\Drupal\\Core\\Render\\RendererInterface::render()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'buildEntityView',
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
    '2707ee5552afa54d3c4c7a8994827602' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The profile to install as a basis for testing.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'e7a0648cf41908b103f4bbd6734cab6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The URL currently loaded in the internal browser.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '929321d1e319d0a74c8e3b0e1aec2d20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The handle of the current cURL connection.
   *
   * @var resource
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'd6d7b1d0978f1629e822693ed2e960ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether or not to assert the presence of the X-Drupal-Ajax-Token.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '91784dac338a26597792b3649004d353' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The headers of the page currently loaded in the internal browser.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'f4adf6f250c9514e352af11545611463' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cookies of the page currently loaded in the internal browser.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '4bfb50cb3741f4e816869bf90a2d297d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that headers should be dumped if verbose output is enabled.
   *
   * Headers are dumped to verbose by drupalGet(), drupalHead(), and
   * drupalPostForm().
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'af7c9838f150d0a1b708177a11087207' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user logged in using the internal browser.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface|bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '8f62da04e5d5dc35606f2af2067e6db0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current cookie file used by cURL.
   *
   * We do not reuse the cookies in further runs, so we do not need a file
   * but we still need cookie handling, so we set the jar to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'e544e3313ea2894b5de23394e431a046' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Additional cURL options.
   *
   * \\Drupal\\simpletest\\WebTestBase itself never sets this but always obeys what
   * is set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'b153a6cc3128f8e3b96c79d842185290' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original batch, before it was changed for testing purposes.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'cc29b1996452b5f339bc143597d67226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original user, before it was changed to a clean uid = 1 for testing.
   *
   * @var object
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'aa6ce177a296fb24b1026487d72001ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original shutdown handlers array, before it was cleaned for testing.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'a40c045d4bf89b803052252b09d310ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current session ID, if available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'aa4c0178d6fbaed04aed991fc8df79ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum number of redirects to follow when handling responses.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '14c9b3479e8a7cb2138d7b72c91de5c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number of redirects followed during the handling of a request.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '13aa92a19498cac01fdcbeb4eac8ae61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number of meta refresh redirects to follow, or NULL if unlimited.
   *
   * @var null|int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '159ff0fb595b909532cf7d2c9726a752' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number of meta refresh redirects followed during ::drupalGet().
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    'e558b323227433442bb9c571bfd28c5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cookies to set on curl requests.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '2b18994d50070a8a39311e5140266fe6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of custom translations suitable for drupal_rewrite_settings().
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '3276c739ffa3fa8156d3fc97ff27ae5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructor for \\Drupal\\simpletest\\WebTestBase.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
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
    '4eb063ebd847f5646ed9bdb05945db38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks to see whether a block appears on the page.
   *
   * @param \\Drupal\\block\\Entity\\Block $block
   *   The block entity to find on the page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertBlockAppears',
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
    'ad0a2f8c1332ba5b5977d7b958ebaaf5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks to see whether a block does not appears on the page.
   *
   * @param \\Drupal\\block\\Entity\\Block $block
   *   The block entity to find on the page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoBlockAppears',
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
    '310c78e75ee61d63563d258bfd865660' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Find a block instance on the page.
   *
   * @param \\Drupal\\block\\Entity\\Block $block
   *   The block entity to find on the page.
   *
   * @return array
   *   The result from the xpath query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'findBlockInstance',
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
    '27b86b716ee77b7fd49a8ae2f2d4cf02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Log in a user with the internal browser.
   *
   * If a user is already logged in, then the current user is logged out before
   * logging in the specified user.
   *
   * Please note that neither the current user nor the passed-in user object is
   * populated with data of the logged in user. If you need full access to the
   * user object after logging in, it must be updated manually. If you also need
   * access to the plain-text password of the user (set by drupalCreateUser()),
   * e.g. to log in the same user again, then it must be re-assigned manually.
   * For example:
   * @code
   *   // Create a user.
   *   $account = $this->drupalCreateUser(array());
   *   $this->drupalLogin($account);
   *   // Load real user object.
   *   $pass_raw = $account->pass_raw;
   *   $account = User::load($account->id());
   *   $account->pass_raw = $pass_raw;
   * @endcode
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   User object representing the user to log in.
   *
   * @see drupalCreateUser()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalLogin',
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
    '09ecef7b17b09ed965531a55285b5294' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether a given user account is logged in.
   *
   * @param \\Drupal\\user\\UserInterface $account
   *   The user account object to check.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalUserIsLoggedIn',
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
    'ad2c3b46840f923cb57071150a99e710' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs a user out of the internal browser and confirms.
   *
   * Confirms logout by checking the login page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalLogout',
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
    'f345ad3bbcd053c1d3288656c6446261' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets up a Drupal site for running functional and integration tests.
   *
   * Installs Drupal with the installation profile specified in
   * \\Drupal\\simpletest\\WebTestBase::$profile into the prefixed database.
   *
   * Afterwards, installs any additional modules specified in the static
   * \\Drupal\\simpletest\\WebTestBase::$modules property of each class in the
   * class hierarchy.
   *
   * After installation all caches are flushed and several configuration values
   * are reset to the values of the parent site executing the test, since the
   * default values may be incompatible with the environment in which tests are
   * being executed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setUp',
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
    '65a6a4a7f8ea98afa85630643423de3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Preserve the original batch, and instantiate the test batch.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setBatch',
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
    '4953bffa1dc2830b2a5242df0bef0eeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Restore the original batch.
   *
   * @see ::setBatch
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'restoreBatch',
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
    'e35c8be3468fec1e05df444165fcd12e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queues custom translations to be written to settings.php.
   *
   * Use WebTestBase::writeCustomTranslations() to apply and write the queued
   * translations.
   *
   * @param string $langcode
   *   The langcode to add translations for.
   * @param array $values
   *   Array of values containing the untranslated string and its translation.
   *   For example:
   *   @code
   *   array(
   *     \'\' => array(\'Sunday\' => \'domingo\'),
   *     \'Long month name\' => array(\'March\' => \'marzo\'),
   *   );
   *   @endcode
   *   Pass an empty array to remove all existing custom translations for the
   *   given $langcode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'addCustomTranslations',
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
    '599e8284de7e2e109f4bd7136f3a7d1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Writes custom translations to the test site\'s settings.php.
   *
   * Use TestBase::addCustomTranslations() to queue custom translations before
   * calling this method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'writeCustomTranslations',
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
    '0f4ac765b6267f8f63b0df0aec14accb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cleans up after testing.
   *
   * Deletes created files and temporary files directory, deletes the tables
   * created by setUp(), and resets the database prefix.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'tearDown',
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
    'b434cafbc709bba7cbc974050ce52829' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes the cURL connection.
   *
   * If the simpletest_httpauth_credentials variable is set, this function will
   * add HTTP authentication headers. This is necessary for testing sites that
   * are protected by login credentials from public access.
   * See the description of $curl_options for other options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'curlInitialize',
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
    'd2729799ce9f9c1e74295a0221320108' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes and executes a cURL request.
   *
   * @param $curl_options
   *   An associative array of cURL options to set, where the keys are constants
   *   defined by the cURL library. For a list of valid options, see
   *   http://php.net/manual/function.curl-setopt.php
   * @param $redirect
   *   FALSE if this is an initial request, TRUE if this request is the result
   *   of a redirect.
   *
   * @return
   *   The content returned from the call to curl_exec().
   *
   * @see curlInitialize()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'curlExec',
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
    '2035b0c1265bea8cd9ebf8282425fa22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reads headers and registers errors received from the tested site.
   *
   * @param $curlHandler
   *   The cURL handler.
   * @param $header
   *   An header.
   *
   * @see _drupal_log_error()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'curlHeaderCallback',
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
    '9c290aa3a22f454a1066759a3eff51c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Close the cURL handler and unset the handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'curlClose',
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
    '1e7536ed162d55ba8ce05ece369c3ff9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the test is being executed from within a test site.
   *
   * Mainly used by recursive tests (i.e. to test the testing framework).
   *
   * @return bool
   *   TRUE if this test was instantiated in a request within the test site,
   *   FALSE otherwise.
   *
   * @see \\Drupal\\Core\\DrupalKernel::bootConfiguration()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'isInChildSite',
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
    '7c10f9eab997c4a6fc20125337892a7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a Drupal path or an absolute path.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Drupal path or URL to load into internal browser
   * @param $options
   *   Options to be forwarded to the url generator.
   * @param $headers
   *   An array containing additional HTTP request headers, each formatted as
   *   "name: value".
   *
   * @return string
   *   The retrieved HTML string, also available as $this->getRawContent()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalGet',
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
    'af9dcd586ff3eeea2421ede8ea769424' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a Drupal path or an absolute path and JSON decodes the result.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Drupal path or URL to request AJAX from.
   * @param array $options
   *   Array of URL options.
   * @param array $headers
   *   Array of headers. Eg array(\'Accept: application/vnd.drupal-ajax\').
   *
   * @return array
   *   Decoded json.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalGetJSON',
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
    '7a9f7d46ad89f51259a7308368ad291e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a Drupal path or an absolute path for a given format.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Drupal path or URL to request given format from.
   * @param string $format
   *   The wanted request format.
   * @param array $options
   *   Array of URL options.
   * @param array $headers
   *   Array of headers.
   *
   * @return mixed
   *   The result of the request.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalGetWithFormat',
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
    '172ed7850815cf3955db11d8ff9a77e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Requests a path or URL in drupal_ajax format and JSON-decodes the response.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Drupal path or URL to request from.
   * @param array $options
   *   Array of URL options.
   * @param array $headers
   *   Array of headers.
   *
   * @return array
   *   Decoded JSON.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalGetAjax',
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
    '0bdb3dd750c71fd5f5b5ec6acaed6f0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Requests a Drupal path or an absolute path as if it is a XMLHttpRequest.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Drupal path or URL to request from.
   * @param array $options
   *   Array of URL options.
   * @param array $headers
   *   Array of headers.
   *
   * @return string
   *   The retrieved content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalGetXHR',
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
    'ab3d6ecb8b8af8a7de52856d082983ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes a form submission.
   *
   * It will be done as usual POST request with SimpleBrowser.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Location of the post form. Either a Drupal path or an absolute path or
   *   NULL to post to the current page. For multi-stage forms you can set the
   *   path to NULL and have it post to the last received page. Example:
   *
   *   @code
   *   // First step in form.
   *   $edit = array(...);
   *   $this->drupalPostForm(\'some_url\', $edit, t(\'Save\'));
   *
   *   // Second step in form.
   *   $edit = array(...);
   *   $this->drupalPostForm(NULL, $edit, t(\'Save\'));
   *   @endcode
   * @param $edit
   *   Field data in an associative array. Changes the current input fields
   *   (where possible) to the values indicated.
   *
   *   When working with form tests, the keys for an $edit element should match
   *   the \'name\' parameter of the HTML of the form. For example, the \'body\'
   *   field for a node has the following HTML:
   *   @code
   *   <textarea id="edit-body-und-0-value" class="text-full form-textarea
   *    resize-vertical" placeholder="" cols="60" rows="9"
   *    name="body[0][value]"></textarea>
   *   @endcode
   *   When testing this field using an $edit parameter, the code becomes:
   *   @code
   *   $edit["body[0][value]"] = \'My test value\';
   *   @endcode
   *
   *   A checkbox can be set to TRUE to be checked and should be set to FALSE to
   *   be unchecked. Multiple select fields can be tested using \'name[]\' and
   *   setting each of the desired values in an array:
   *   @code
   *   $edit = array();
   *   $edit[\'name[]\'] = array(\'value1\', \'value2\');
   *   @endcode
   * @param $submit
   *   Value of the submit button whose click is to be emulated. For example,
   *   t(\'Save\'). The processing of the request depends on this value. For
   *   example, a form may have one button with the value t(\'Save\') and another
   *   button with the value t(\'Delete\'), and execute different code depending
   *   on which one is clicked.
   *
   *   This function can also be called to emulate an Ajax submission. In this
   *   case, this value needs to be an array with the following keys:
   *   - path: A path to submit the form values to for Ajax-specific processing.
   *   - triggering_element: If the value for the \'path\' key is a generic Ajax
   *     processing path, this needs to be set to the name of the element. If
   *     the name doesn\'t identify the element uniquely, then this should
   *     instead be an array with a single key/value pair, corresponding to the
   *     element name and value. The \\Drupal\\Core\\Form\\FormAjaxResponseBuilder
   *     uses this to find the #ajax information for the element, including
   *     which specific callback to use for processing the request.
   *
   *   This can also be set to NULL in order to emulate an Internet Explorer
   *   submission of a form with a single text field, and pressing ENTER in that
   *   textfield: under these conditions, no button information is added to the
   *   POST data.
   * @param $options
   *   Options to be forwarded to the url generator.
   * @param $headers
   *   An array containing additional HTTP request headers, each formatted as
   *   "name: value".
   * @param $form_html_id
   *   (optional) HTML ID of the form to be submitted. On some pages
   *   there are many identical forms, so just using the value of the submit
   *   button is not enough. For example: \'trigger-node-presave-assign-form\'.
   *   Note that this is not the Drupal $form_id, but rather the HTML ID of the
   *   form, which is typically the same thing but with hyphens replacing the
   *   underscores.
   * @param $extra_post
   *   (optional) A string of additional data to append to the POST submission.
   *   This can be used to add POST data for which there are no HTML fields, as
   *   is done by drupalPostAjaxForm(). This string is literally appended to the
   *   POST data, so it must already be urlencoded and contain a leading "&"
   *   (e.g., "&extra_var1=hello+world&extra_var2=you%26me").
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalPostForm',
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
    '6f8ebe9221e0f5515391f92e9cb29a48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Executes an Ajax form submission.
   *
   * This executes a POST as ajax.js does. The returned JSON data is used to
   * update $this->content via drupalProcessAjaxResponse(). It also returns
   * the array of AJAX commands received.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   Location of the form containing the Ajax enabled element to test. Can be
   *   either a Drupal path or an absolute path or NULL to use the current page.
   * @param $edit
   *   Field data in an associative array. Changes the current input fields
   *   (where possible) to the values indicated.
   * @param $triggering_element
   *   The name of the form element that is responsible for triggering the Ajax
   *   functionality to test. May be a string or, if the triggering element is
   *   a button, an associative array where the key is the name of the button
   *   and the value is the button label. i.e.) array(\'op\' => t(\'Refresh\')).
   * @param $ajax_path
   *   (optional) Override the path set by the Ajax settings of the triggering
   *   element.
   * @param $options
   *   (optional) Options to be forwarded to the url generator.
   * @param $headers
   *   (optional) An array containing additional HTTP request headers, each
   *   formatted as "name: value". Forwarded to drupalPostForm().
   * @param $form_html_id
   *   (optional) HTML ID of the form to be submitted, use when there is more
   *   than one identical form on the same page and the value of the triggering
   *   element is not enough to identify the form. Note this is not the Drupal
   *   ID of the form but rather the HTML ID of the form.
   * @param $ajax_settings
   *   (optional) An array of Ajax settings which if specified will be used in
   *   place of the Ajax settings of the triggering element.
   *
   * @return
   *   An array of Ajax commands.
   *
   * @see drupalPostForm()
   * @see drupalProcessAjaxResponse()
   * @see ajax.js
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalPostAjaxForm',
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
    '6dcd69785f1057332db9ebc0c72890f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes an AJAX response into current content.
   *
   * This processes the AJAX response as ajax.js does. It uses the response\'s
   * JSON data, an array of commands, to update $this->content using equivalent
   * DOM manipulation as is used by ajax.js.
   * It does not apply custom AJAX commands though, because emulation is only
   * implemented for the AJAX commands that ship with Drupal core.
   *
   * @param string $content
   *   The current HTML content.
   * @param array $ajax_response
   *   An array of AJAX commands.
   * @param array $ajax_settings
   *   An array of AJAX settings which will be used to process the response.
   * @param array $drupal_settings
   *   An array of settings to update the value of drupalSettings for the
   *   currently-loaded page.
   *
   * @see drupalPostAjaxForm()
   * @see ajax.js
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalProcessAjaxResponse',
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
    '3dac8dfb61d8d0a04a6ca956ec116089' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Perform a POST HTTP request.
   *
   * @param string|\\Drupal\\Core\\Url $path
   *   Drupal path or absolute path where the request should be POSTed.
   * @param string $accept
   *   The value for the "Accept" header. Usually either \'application/json\' or
   *   \'application/vnd.drupal-ajax\'.
   * @param array $post
   *   The POST data. When making a \'application/vnd.drupal-ajax\' request, the
   *   Ajax page state data should be included. Use getAjaxPageStatePostData()
   *   for that.
   * @param array $options
   *   (optional) Options to be forwarded to the url generator. The \'absolute\'
   *   option will automatically be enabled.
   *
   * @return
   *   The content returned from the call to curl_exec().
   *
   * @see WebTestBase::getAjaxPageStatePostData()
   * @see WebTestBase::curlExec()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalPost',
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
    'd67678fe03b7d6c51916f6556b871b23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a POST HTTP request with a specific format.
   *
   * @param string|\\Drupal\\Core\\Url $path
   *   Drupal path or absolute path where the request should be POSTed.
   * @param string $format
   *   The request format.
   * @param array $post
   *   The POST data. When making a \'application/vnd.drupal-ajax\' request, the
   *   Ajax page state data should be included. Use getAjaxPageStatePostData()
   *   for that.
   * @param array $options
   *   (optional) Options to be forwarded to the url generator. The \'absolute\'
   *   option will automatically be enabled.
   *
   * @return string
   *   The content returned from the call to curl_exec().
   *
   * @see WebTestBase::drupalPost
   * @see WebTestBase::getAjaxPageStatePostData()
   * @see WebTestBase::curlExec()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalPostWithFormat',
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
    '56d396ca6673d5ac2974be744e289fe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the Ajax page state from drupalSettings and prepare it for POSTing.
   *
   * @return array
   *   The Ajax page state POST data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getAjaxPageStatePostData',
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
    '1f7132ed2f4b69270f54d40b9028f30a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Serialize POST HTTP request values.
   *
   * Encode according to application/x-www-form-urlencoded. Both names and
   * values needs to be urlencoded, according to
   * http://www.w3.org/TR/html4/interact/forms.html#h-17.13.4.1
   *
   * @param array $post
   *   The array of values to be POSTed.
   *
   * @return string
   *   The serialized result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'serializePostValues',
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
    'b00814894ce4d337c7702fed2b1e3691' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Transforms a nested array into a flat array suitable for WebTestBase::drupalPostForm().
   *
   * @param array $values
   *   A multi-dimensional form values array to convert.
   *
   * @return array
   *   The flattened $edit array suitable for WebTestBase::drupalPostForm().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'translatePostValues',
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
    'c869f85492088b3a1f68384f2384dcbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks for meta refresh tag and if found call drupalGet() recursively.
   *
   * This function looks for the http-equiv attribute to be set to "Refresh" and
   * is case-sensitive.
   *
   * @return
   *   Either the new page content or FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'checkForMetaRefresh',
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
    '5084f55cc463b5e40342054e749e9e9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves only the headers for a Drupal path or an absolute path.
   *
   * @param $path
   *   Drupal path or URL to load into internal browser
   * @param $options
   *   Options to be forwarded to the url generator.
   * @param $headers
   *   An array containing additional HTTP request headers, each formatted as
   *   "name: value".
   *
   * @return
   *   The retrieved headers, also available as $this->getRawContent()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalHead',
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
    '5971a41bc2feca6eae9d2169d60b5a94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handles form input related to drupalPostForm().
   *
   * Ensure that the specified fields exist and attempt to create POST data in
   * the correct manner for the particular field type.
   *
   * @param $post
   *   Reference to array of post values.
   * @param $edit
   *   Reference to array of edit values to be checked against the form.
   * @param $submit
   *   Form submit button value.
   * @param $form
   *   Array of form elements.
   *
   * @return
   *   Submit value matches a valid submit input in the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'handleForm',
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
    '6e103a0fa58c3b81a09c1f2a9a5643dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Follows a link by complete name.
   *
   * Will click the first link found with this link text by default, or a later
   * one if an index is given. Match is case sensitive with normalized space.
   * The label is translated label.
   *
   * If the link is discovered and clicked, the test passes. Fail otherwise.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags.
   * @param int $index
   *   Link position counting from zero.
   *
   * @return string|bool
   *   Page contents on success, or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'clickLink',
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
    '1b7116939d51ff211f09229192cc093a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Follows a link by partial name.
   *
   * If the link is discovered and clicked, the test passes. Fail otherwise.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags, uses starts-with().
   * @param int $index
   *   Link position counting from zero.
   *
   * @return string|bool
   *   Page contents on success, or FALSE on failure.
   *
   * @see ::clickLink()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'clickLinkPartialName',
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
    'fed4a184b98daed90d58776ae487aed5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a helper for ::clickLink() and ::clickLinkPartialName().
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $label
   *   Text between the anchor tags, uses starts-with().
   * @param int $index
   *   Link position counting from zero.
   * @param string $pattern
   *   A pattern to use for the XPath.
   *
   * @return bool|string
   *   Page contents on success, or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'clickLinkHelper',
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
    '1a033279ac5483da9085cb2a42c79ca7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Takes a path and returns an absolute path.
   *
   * This method is implemented in the way that browsers work, see
   * https://url.spec.whatwg.org/#relative-state for more information about the
   * possible cases.
   *
   * @param string $path
   *   A path from the internal browser content.
   *
   * @return string
   *   The $path with $base_url prepended, if necessary.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'getAbsoluteUrl',
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
    '1fb3f6604e4b8a773768c4720ee20432' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the HTTP response headers of the requested page.
   *
   * Normally we are only interested in the headers returned by the last
   * request. However, if a page is redirected or HTTP authentication is in use,
   * multiple requests will be required to retrieve the page. Headers from all
   * requests may be requested by passing TRUE to this function.
   *
   * @param $all_requests
   *   Boolean value specifying whether to return headers from all requests
   *   instead of just the last request. Defaults to FALSE.
   *
   * @return
   *   A name/value array if headers from only the last request are requested.
   *   If headers from all requests are requested, an array of name/value
   *   arrays, one for each request.
   *
   *   The pseudonym ":status" is used for the HTTP status line.
   *
   *   Values for duplicate headers are stored as a single comma-separated list.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalGetHeaders',
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
    '61df28f94f14124723c8b931adf9a709' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value of an HTTP response header.
   *
   * If multiple requests were required to retrieve the page, only the headers
   * from the last request will be checked by default. However, if TRUE is
   * passed as the second argument, all requests will be processed from last to
   * first until the header is found.
   *
   * @param $name
   *   The name of the header to retrieve. Names are case-insensitive (see RFC
   *   2616 section 4.2).
   * @param $all_requests
   *   Boolean value specifying whether to check all requests if the header is
   *   not found in the last request. Defaults to FALSE.
   *
   * @return
   *   The HTTP header value or FALSE if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'drupalGetHeader',
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
    '5223bc561ce57a3fde1177f96cd68ee0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check if a HTTP response header exists and has the expected value.
   *
   * @param string $header
   *   The header key, example: Content-Type
   * @param string $value
   *   The header value.
   * @param string $message
   *   (optional) A message to display with the assertion.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertHeader',
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
    '1cb9d71c34acf8db9991f9753f76c6e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes if the internal browser\'s URL matches the given path.
   *
   * @param \\Drupal\\Core\\Url|string $path
   *   The expected system path or URL.
   * @param $options
   *   (optional) Any additional options to pass for $path to the url generator.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertUrl',
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
    '808906a295fd65aabe71a57f6ff48fc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the page responds with the specified response code.
   *
   * @param $code
   *   Response code. For example 200 is a successful page request. For a list
   *   of all codes see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return
   *   Assertion result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertResponse',
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
    'a251ec43df8b7b6b8c1b8824d0477ab9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts the page did not return the specified response code.
   *
   * @param $code
   *   Response code. For example 200 is a successful page request. For a list
   *   of all codes see http://www.w3.org/Protocols/rfc2616/rfc2616-sec10.html.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Browser\'; most tests do not override
   *   this default.
   *
   * @return
   *   Assertion result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoResponse',
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
    'b266e752930c7c78decef2a47477f030' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds an a absolute URL from a system path or a URL object.
   *
   * @param string|\\Drupal\\Core\\Url $path
   *   A system path or a URL.
   * @param array $options
   *   Options to be passed to Url::fromUri().
   *
   * @return string
   *   An absolute URL string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'buildUrl',
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
    '96e5a127cb86a6d7b05aa09e554dcae6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache tag was present in the last response.
   *
   * @param string $expected_cache_tag
   *   The expected cache tag.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertCacheTag',
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
    'cdc42af63e7c1bfefa9d2674a286dc9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts whether an expected cache tag was absent in the last response.
   *
   * @param string $cache_tag
   *   The cache tag to check.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'assertNoCacheTag',
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
    'cd3d8942368c76332f119085965162fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables/disables the cacheability headers.
   *
   * Sets the http.response.debug_cacheability_headers container parameter.
   *
   * @param bool $value
   *   (optional) Whether the debugging cacheability headers should be sent.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'ajaxresponsesubscriber' => 'Drupal\\Core\\EventSubscriber\\AjaxResponseSubscriber',
          'maincontentviewsubscriber' => 'Drupal\\Core\\EventSubscriber\\MainContentViewSubscriber',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'functionaltestsetuptrait' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'url' => 'Drupal\\Core\\Url',
          'coreassertcontenttrait' => 'Drupal\\KernelTests\\AssertContentTrait',
          'assertpagecachecontextsandtagstrait' => 'Drupal\\system\\Tests\\Cache\\AssertPageCacheContextsAndTagsTrait',
          'entityviewtrait' => 'Drupal\\Tests\\EntityViewTrait',
          'baseblockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'deprecationlistenertrait' => 'Drupal\\Tests\\Listeners\\DeprecationListenerTrait',
          'basecontenttypecreationtrait' => 'Drupal\\Tests\\node\\Traits\\ContentTypeCreationTrait',
          'basenodecreationtrait' => 'Drupal\\Tests\\node\\Traits\\NodeCreationTrait',
          'cronruntrait' => 'Drupal\\Tests\\Traits\\Core\\CronRunTrait',
          'testfilecreationtrait' => 'Drupal\\Tests\\TestFileCreationTrait',
          'baseusercreationtrait' => 'Drupal\\Tests\\user\\Traits\\UserCreationTrait',
          'xdebugrequesttrait' => 'Drupal\\Tests\\XdebugRequestTrait',
          'uri' => 'Laminas\\Diactoros\\Uri',
        ),
         'className' => 'Drupal\\simpletest\\WebTestBase',
         'functionName' => 'setHttpResponseDebugCacheabilityHeaders',
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