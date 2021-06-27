<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal.php-1624732867',
   'data' => 
  array (
    'f83bd9e6f9b8937e72e1dc36ec6101d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Contains \\Drupal.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
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
    '2e258a88e2ebb4c2ba109878967ccf18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Static Service Container wrapper.
 *
 * Generally, code in Drupal should accept its dependencies via either
 * constructor injection or setter method injection. However, there are cases,
 * particularly in legacy procedural code, where that is infeasible. This
 * class acts as a unified global accessor to arbitrary services within the
 * system in order to ease the transition from procedural code to injected OO
 * code.
 *
 * The container is built by the kernel and passed in to this class which stores
 * it statically. The container always contains the services from
 * \\Drupal\\Core\\CoreServiceProvider, the service providers of enabled modules and any other
 * service providers defined in $GLOBALS[\'conf\'][\'container_service_providers\'].
 *
 * This class exists only to support legacy code that cannot be dependency
 * injected. If your code needs it, consider refactoring it to be object
 * oriented, if possible. When this is not possible, for instance in the case of
 * hook implementations, and your code is more than a few non-reusable lines, it
 * is recommended to instantiate an object implementing the actual logic.
 *
 * @code
 *   // Legacy procedural code.
 *   function hook_do_stuff() {
 *     $lock = lock()->acquire(\'stuff_lock\');
 *     // ...
 *   }
 *
 *   // Correct procedural code.
 *   function hook_do_stuff() {
 *     $lock = \\Drupal::lock()->acquire(\'stuff_lock\');
 *     // ...
 *   }
 *
 *   // The preferred way: dependency injected code.
 *   function hook_do_stuff() {
 *     // Move the actual implementation to a class and instantiate it.
 *     $instance = new StuffDoingClass(\\Drupal::lock());
 *     $instance->doStuff();
 *
 *     // Or, even better, rely on the service container to avoid hard coding a
 *     // specific interface implementation, so that the actual logic can be
 *     // swapped. This might not always make sense, but in general it is a good
 *     // practice.
 *     \\Drupal::service(\'stuff.doing\')->doStuff();
 *   }
 *
 *   interface StuffDoingInterface {
 *     public function doStuff();
 *   }
 *
 *   class StuffDoingClass implements StuffDoingInterface {
 *     protected $lockBackend;
 *
 *     public function __construct(LockBackendInterface $lock_backend) {
 *       $this->lockBackend = $lock_backend;
 *     }
 *
 *     public function doStuff() {
 *       $lock = $this->lockBackend->acquire(\'stuff_lock\');
 *       // ...
 *     }
 *   }
 * @endcode
 *
 * @see \\Drupal\\Core\\DrupalKernel
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
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
    '428b0ca44d120b7e74d8b0b14c4ff848' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current system version.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
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
    '916715970b3417f70d42615ae3a201b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Core API compatibility.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
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
    '17784ce8f3755f4e3a86fc4324e6e683' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Core minimum schema version.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
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
    '9e8128988e00e3a278e8ab1db3b3c4af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The currently active container object, or NULL if not initialized yet.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
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
    '1f7e7c584f6c4330de593ee3da3095ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a new global container.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   A new container instance to replace the current.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
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
    '6f0a0d957df7151e5d868642a5faf40e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unsets the global container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'unsetContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4ff277026d9f42a60d110750da028f11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the currently active global container.
   *
   * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   *
   * @throws \\Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
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
    'e0e33e34c029972139f1dd96ee61f8a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns TRUE if the container has been initialized, FALSE otherwise.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'hasContainer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a40c54c4aa396f3960dfd35d8a1a71c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a service from the container.
   *
   * Use this method if the desired service is not one of those with a dedicated
   * accessor method below. If it is listed below, those methods are preferred
   * as they can return useful type hints.
   *
   * @param string $id
   *   The ID of the service to retrieve.
   *
   * @return mixed
   *   The specified service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'service',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '83e5509fc4ac71b47013fa530396b179' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if a service is defined in the container.
   *
   * @param string $id
   *   The ID of the service to check.
   *
   * @return bool
   *   TRUE if the specified service exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'hasService',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '09a4630cda1081bc3a63a93e508758b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the app root.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'root',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e46202d659b0f9011b504b7c960cc251' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the active install profile.
   *
   * @return string|null
   *   The name of the active install profile.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'installProfile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7bb86854c5f2d65ef821cf7f93b90755' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if there is a currently active request object.
   *
   * @return bool
   *   TRUE if there is a currently active request object, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'hasRequest',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '823d85679dd628bd080da5ed6ce7cd7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the currently active request object.
   *
   * Note: The use of this wrapper in particular is especially discouraged. Most
   * code should not need to access the request directly.  Doing so means it
   * will only function when handling an HTTP request, and will require special
   * modification or wrapping when run from a command line tool, from certain
   * queue processors, or from automated tests.
   *
   * If code must access the request, it is considerably better to register
   * an object with the Service Container and give it a setRequest() method
   * that is configured to run when the service is created.  That way, the
   * correct request object can always be provided by the container and the
   * service can still be unit tested.
   *
   * If this method must be used, never save the request object that is
   * returned.  Doing so may lead to inconsistencies as the request object is
   * volatile and may change at various times, such as during a subrequest.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\Request
   *   The currently active request object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'request',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e4b6e87e8c78879580fee2096d2f0976' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the request stack.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\RequestStack
   *   The request stack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'requestStack',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0ee46cd4e1f5b75a59030c0f1c9431f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the currently active route match object.
   *
   * @return \\Drupal\\Core\\Routing\\RouteMatchInterface
   *   The currently active route match object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'routeMatch',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bf8cb76f9ceb70cf579e0c900f1d2a87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current active user.
   *
   * This method will return the \\Drupal\\Core\\Session\\AccountProxy object of the
   * current user. You can use the \\Drupal\\user\\Entity\\User::load() method to
   * load the full user entity object. For example:
   * @code
   *   $user = \\Drupal\\user\\Entity\\User::load(\\Drupal::currentUser()->id());
   * @endcode
   *
   * @return \\Drupal\\Core\\Session\\AccountProxyInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'currentUser',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dcfdb96dff49aaa22c2fa99a9f24905a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the entity manager service.
   *
   * @return \\Drupal\\Core\\Entity\\EntityManagerInterface
   *   The entity manager service.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal::entityTypeManager() instead in most cases. If the needed
   *   method is not on \\Drupal\\Core\\Entity\\EntityTypeManagerInterface, see the
   *   deprecated \\Drupal\\Core\\Entity\\EntityManager to find the
   *   correct interface or service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'entityManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5c1348358ebad682ed23eb2edda7f201' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the entity type manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'entityTypeManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '26b497f3347385f0f4779e680df4a952' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current primary database.
   *
   * @return \\Drupal\\Core\\Database\\Connection
   *   The current active database\'s master connection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'database',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '03fcd8c6edc85cdf2a389e0d3131ae25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the requested cache bin.
   *
   * @param string $bin
   *   (optional) The cache bin for which the cache object should be returned,
   *   defaults to \'default\'.
   *
   * @return \\Drupal\\Core\\Cache\\CacheBackendInterface
   *   The cache object associated with the specified bin.
   *
   * @ingroup cache
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'cache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '77faed592d034a76945b546bcdf8d4c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the class resolver.
   *
   * This is to be used in procedural code such as module files to instantiate
   * an object of a class that implements
   * \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface.
   *
   * One common usecase is to provide a class which contains the actual code
   * of a hook implementation, without having to create a service.
   *
   * @param string $class
   *   (optional) A class name to instantiate.
   *
   * @return \\Drupal\\Core\\DependencyInjection\\ClassResolverInterface|object
   *   The class resolver or if $class is provided, a class instance with a
   *   given class definition.
   *
   * @throws \\InvalidArgumentException
   *   If $class does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'classResolver',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1d3af0f54910501456f8e92a3b202feb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an expirable key value store collection.
   *
   * @param string $collection
   *   The name of the collection holding key and value pairs.
   *
   * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreExpirableInterface
   *   An expirable key value store collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'keyValueExpirable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9e3960af2be92f772ed6d91f02075775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the locking layer instance.
   *
   * @return \\Drupal\\Core\\Lock\\LockBackendInterface
   *
   * @ingroup lock
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'lock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5d19ac70ebd9bbdb46c9e10448fcdf84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a configuration object.
   *
   * This is the main entry point to the configuration API. Calling
   * @code \\Drupal::config(\'book.admin\') @endcode will return a configuration
   * object the Book module can use to read its administrative settings.
   *
   * @param string $name
   *   The name of the configuration object to retrieve, which typically
   *   corresponds to a configuration file. For
   *   @code \\Drupal::config(\'book.admin\') @endcode, the configuration
   *   object returned will contain the content of the book.admin
   *   configuration file.
   *
   * @return \\Drupal\\Core\\Config\\ImmutableConfig
   *   An immutable configuration object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'config',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bee8f35711f93c471720999ad6128c7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the configuration factory.
   *
   * This is mostly used to change the override settings on the configuration
   * factory. For example, changing the language, or turning all overrides on
   * or off.
   *
   * @return \\Drupal\\Core\\Config\\ConfigFactoryInterface
   *   The configuration factory service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'configFactory',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f06dcc131435f302816faee75f66962b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a queue for the given queue name.
   *
   * The following values can be set in your settings.php file\'s $settings
   * array to define which services are used for queues:
   * - queue_reliable_service_$name: The container service to use for the
   *   reliable queue $name.
   * - queue_service_$name: The container service to use for the
   *   queue $name.
   * - queue_default: The container service to use by default for queues
   *   without overrides. This defaults to \'queue.database\'.
   *
   * @param string $name
   *   The name of the queue to work with.
   * @param bool $reliable
   *   (optional) TRUE if the ordering of items and guaranteeing every item
   *   executes at least once is important, FALSE if scalability is the main
   *   concern. Defaults to FALSE.
   *
   * @return \\Drupal\\Core\\Queue\\QueueInterface
   *   The queue object for a given name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'queue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ffbbb2796f02469856510d5dc3d3df40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a key/value storage collection.
   *
   * @param string $collection
   *   Name of the key/value collection to return.
   *
   * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'keyValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'defed3aa861743ae14f3842a1d0f4a33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the state storage service.
   *
   * Use this to store machine-generated data, local to a specific environment
   * that does not need deploying and does not need human editing; for example,
   * the last time cron was run. Data which needs to be edited by humans and
   * needs to be the same across development, production, etc. environments
   * (for example, the system maintenance message) should use \\Drupal::config() instead.
   *
   * @return \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'state',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9d398e38daca7d5f8d90d9f192a861e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default http client.
   *
   * @return \\GuzzleHttp\\Client
   *   A guzzle http client instance.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'httpClient',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '788b2075b998219357d5411cf30ceeaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity query object for this entity type.
   *
   * @param string $entity_type
   *   The entity type (for example, node) for which the query object should be
   *   returned.
   * @param string $conjunction
   *   (optional) Either \'AND\' if all conditions in the query need to apply, or
   *   \'OR\' if any of them is sufficient. Defaults to \'AND\'.
   *
   * @return \\Drupal\\Core\\Entity\\Query\\QueryInterface
   *   The query object that can query the given entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'entityQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '388eab6263c6494a60d92ac3d27c903c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity query aggregate object for this entity type.
   *
   * @param string $entity_type
   *   The entity type (for example, node) for which the query object should be
   *   returned.
   * @param string $conjunction
   *   (optional) Either \'AND\' if all conditions in the query need to apply, or
   *   \'OR\' if any of them is sufficient. Defaults to \'AND\'.
   *
   * @return \\Drupal\\Core\\Entity\\Query\\QueryAggregateInterface
   *   The query object that can query the given entity type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'entityQueryAggregate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '073a178ef5f6a92d98d874c39acfb897' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the flood instance.
   *
   * @return \\Drupal\\Core\\Flood\\FloodInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'flood',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c29d67dddb49e56618c7e54809ed43fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the module handler.
   *
   * @return \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'moduleHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '46e41d33e55df87d39a5e8b143c607df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the typed data manager service.
   *
   * Use the typed data manager service for creating typed data objects.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataManagerInterface
   *   The typed data manager.
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::create()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'typedDataManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '58cebd6e7495a95db409ed6943854366' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the token service.
   *
   * @return \\Drupal\\Core\\Utility\\Token
   *   The token service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'token',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '77ee9540d4de3ee219ad0fa986392e87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the url generator service.
   *
   * @return \\Drupal\\Core\\Routing\\UrlGeneratorInterface
   *   The url generator service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'urlGenerator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2bf20694cfc7dc401285efda2002e0ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a URL string for a specific route based on the given parameters.
   *
   * This method is a convenience wrapper for generating URL strings for URLs
   * that have Drupal routes (that is, most pages generated by Drupal) using
   * the \\Drupal\\Core\\Url object. See \\Drupal\\Core\\Url::fromRoute() for
   * detailed documentation. For non-routed local URIs relative to
   * the base path (like robots.txt) use Url::fromUri()->toString() with the
   * base: scheme.
   *
   * @param string $route_name
   *   The name of the route.
   * @param array $route_parameters
   *   (optional) An associative array of parameter names and values.
   * @param array $options
   *   (optional) An associative array of additional options.
   * @param bool $collect_bubbleable_metadata
   *   (optional) Defaults to FALSE. When TRUE, both the generated URL and its
   *   associated bubbleable metadata are returned.
   *
   * @return string|\\Drupal\\Core\\GeneratedUrl
   *   A string containing a URL to the given path.
   *   When $collect_bubbleable_metadata is TRUE, a GeneratedUrl object is
   *   returned, containing the generated URL plus bubbleable metadata.
   *
   * @see \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute()
   * @see \\Drupal\\Core\\Url
   * @see \\Drupal\\Core\\Url::fromRoute()
   * @see \\Drupal\\Core\\Url::fromUri()
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Instead create a \\Drupal\\Core\\Url object directly, for example using
   *   Url::fromRoute().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'url',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c85012b27d0e168bf3ff6e15f3f33945' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the link generator service.
   *
   * @return \\Drupal\\Core\\Utility\\LinkGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'linkGenerator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd37f5a1bb81025643727e229485487c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders a link with a given link text and Url object.
   *
   * This method is a convenience wrapper for the link generator service\'s
   * generate() method.
   *
   * @param string|array|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   The link text for the anchor tag as a translated string or render array.
   * @param \\Drupal\\Core\\Url $url
   *   The URL object used for the link.
   *
   * @return \\Drupal\\Core\\GeneratedLink
   *   A GeneratedLink object containing a link to the given route and
   *   parameters and bubbleable metadata.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
   * \\Drupal\\Core\\Link::fromTextAndUrl() instead.
   *
   * @see https://www.drupal.org/node/2614344
   * @see \\Drupal\\Core\\Utility\\LinkGeneratorInterface::generate()
   * @see \\Drupal\\Core\\Url
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'l',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b607e275727a91e312d0273dd1a97be3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationManager
   *   The string translation manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'translation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '839537fe86483ab427371d9e4209e8c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language manager service.
   *
   * @return \\Drupal\\Core\\Language\\LanguageManagerInterface
   *   The language manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'languageManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4e9525cb11cf8f02f9fca22f2bd2fd87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the CSRF token manager service.
   *
   * The generated token is based on the session ID of the current user. Normally,
   * anonymous users do not have a session, so the generated token will be
   * different on every page request. To generate a token for users without a
   * session, manually start a session prior to calling this function.
   *
   * @return \\Drupal\\Core\\Access\\CsrfTokenGenerator
   *   The CSRF token manager.
   *
   * @see \\Drupal\\Core\\Session\\SessionManager::start()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'csrfToken',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f1dcae60f1418de513974e8912884fbe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the transliteration service.
   *
   * @return \\Drupal\\Core\\Transliteration\\PhpTransliteration
   *   The transliteration manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'transliteration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '064f6a18f6237a53a149cb966211db5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the form builder service.
   *
   * @return \\Drupal\\Core\\Form\\FormBuilderInterface
   *   The form builder.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'formBuilder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '73349e6b8224080fa6b194ac9c88536c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the theme service.
   *
   * @return \\Drupal\\Core\\Theme\\ThemeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'theme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9a07d03a8bfa4a9fefd0e522b4f23e68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the syncing state.
   *
   * @return bool
   *   Returns TRUE is syncing flag set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'isConfigSyncing',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a16f6740a54252d825e352d4e9fecefc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a channel logger object.
   *
   * @param string $channel
   *   The name of the channel. Can be any string, but the general practice is
   *   to use the name of the subsystem calling this.
   *
   * @return \\Psr\\Log\\LoggerInterface
   *   The logger for this channel.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'logger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '656c20b548d111098643e966a1cf815b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the menu tree.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkTreeInterface
   *   The menu tree.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'menuTree',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd0a72a943858dbfc9547951523e49ab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the path validator.
   *
   * @return \\Drupal\\Core\\Path\\PathValidatorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'pathValidator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd4e2de4a4ca10acff70db287e7696ba1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the access manager service.
   *
   * @return \\Drupal\\Core\\Access\\AccessManagerInterface
   *   The access manager service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'accessManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4d58a440ed56eea3d14d5c4d0409541a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the redirect destination helper.
   *
   * @return \\Drupal\\Core\\Routing\\RedirectDestinationInterface
   *   The redirect destination helper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'destination',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c3e99506b991c6bcb26bc8396ad9bc05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the entity definition update manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface
   *   The entity definition update manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'entityDefinitionUpdateManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ef568b55bbc6a599bbd388a188bafc75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the time service.
   *
   * @return \\Drupal\\Component\\Datetime\\TimeInterface
   *   The time service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'time',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b128804ac9193f9d3fc2f162cdd62768' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the messenger.
   *
   * @return \\Drupal\\Core\\Messenger\\MessengerInterface
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'containernotinitializedexception' => 'Drupal\\Core\\DependencyInjection\\ContainerNotInitializedException',
          'legacymessenger' => 'Drupal\\Core\\Messenger\\LegacyMessenger',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal',
         'functionName' => 'messenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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