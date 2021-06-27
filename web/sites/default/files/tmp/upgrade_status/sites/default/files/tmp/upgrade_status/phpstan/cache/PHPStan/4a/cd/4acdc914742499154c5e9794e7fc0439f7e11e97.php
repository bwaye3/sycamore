<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/FunctionalTestSetupTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/SessionTestTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/RefreshVariablesTrait.php-1624732867',
   'data' => 
  array (
    '4855394470e1017c4e7146eb17ad6194' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'd97c6b369a4737b58c2a89057b887c6b' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'c354f284ff28674232012052d1f97883' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '669aed743281f1f93a6f4186240bd626' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '356da8c52951f5bd8c991f64cfad8082' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'f3b59e280cbc813aeeec8e62235dfbe9' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'e82ab3a5c0815b910d69b406e4d2712b' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '168d00841d2e3c52273cfcd6b7d6353f' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '37e2817641e1e4e451d341bfe1f54ef3' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '88f16f7ba1bbd8fa71feea53f20033d6' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'ce0a4ffa556f9065a5a37744b4934e86' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '8c22808e55af6cc2d291363f645069ee' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'c213fde8b0543ae50ab5c28fb548a58f' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '731bc1007f474094fde9cfe522b2e8c3' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'c324fd0fcf4a4056f6dffcf7329f41be' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '1304a544a722cb30c7236fcaaae4fd5a' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '50dd30432bcae3c04a8dda0ba093ef94' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '78570e95d833fc1981fc2951354902a4' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '5b8fd5ea0c3ea689bb737b666579fe59' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'd5539c2eac41411af7c9236d80c9e339' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '0359552504d6f396207b54b6b8dacac2' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'e96f4dc1817f2f17bb989e76cf02984b' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '53d787e36501369d01a3929ffba0d583' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '4b7b044688e5e09764eab70a24acc10e' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '14355732f8553fabde2ed082715824fc' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    'c6aedb19d3135d9cdca22df373ca6e1e' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '562172baf00d10d3ca75295ae10b543a' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '8e4cb226bcea8857644f672709f95a90' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
    '76aeb5b6dd3663ffe262562b56b908ca' => 
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
         'className' => 'Drupal\\Core\\Test\\FunctionalTestSetupTrait',
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
  ),
));