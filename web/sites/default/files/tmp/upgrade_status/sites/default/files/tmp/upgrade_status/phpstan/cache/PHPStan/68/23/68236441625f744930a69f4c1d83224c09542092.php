<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Extension/ModuleHandlerInterface.php-1624732867',
   'data' => 
  array (
    'cf468fc49ecf9b9dfb1944a0ad14bd65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for classes that manage a set of enabled modules.
 *
 * Classes implementing this interface work with a fixed list of modules and are
 * responsible for loading module files and maintaining information about module
 * dependencies and hook implementations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
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
    '6a8c46091b402243da3beeb08222dd6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Includes a module\'s .module file.
   *
   * This prevents including a module more than once.
   *
   * @param string $name
   *   The name of the module to load.
   *
   * @return bool
   *   TRUE if the item is loaded or has already been loaded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'load',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8e4c7370c7b34770382d5a17a2a3e5f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all enabled modules.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'loadAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '88d8319ee2958fe55b35b126b1f5c677' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether all modules have been loaded.
   *
   * @return bool
   *   A Boolean indicating whether all modules have been loaded. This means all
   *   modules; the load status of bootstrap modules cannot be checked.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'isLoaded',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c2e476b2d3de406b07692408888a6fa3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reloads all enabled modules.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'reload',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f8fa4d8b50f506d6d4e9ec5a7e6ee4c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the list of currently active modules.
   *
   * @return \\Drupal\\Core\\Extension\\Extension[]
   *   An associative array whose keys are the names of the modules and whose
   *   values are Extension objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'getModuleList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'aafabf5715bcea64641670cb3a00086a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a module extension object from the currently active modules list.
   *
   * @param string $name
   *   The name of the module to return.
   *
   * @return \\Drupal\\Core\\Extension\\Extension
   *   An extension object.
   *
   * @throws \\Drupal\\Core\\Extension\\Exception\\UnknownExtensionException
   *   Thrown when the requested module does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'getModule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2a97eafbb94a4c3094d3a0fdd536e377' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an explicit list of currently active modules.
   *
   * @param \\Drupal\\Core\\Extension\\Extension[] $module_list
   *   An associative array whose keys are the names of the modules and whose
   *   values are Extension objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'setModuleList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '024051bd944f05daab08bcd0c24e3b36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a module to the list of currently active modules.
   *
   * @param string $name
   *   The module name; e.g., \'node\'.
   * @param string $path
   *   The module path; e.g., \'core/modules/node\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'addModule',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '747f032fd70a0713c71807cf7966e105' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an installation profile to the list of currently active modules.
   *
   * @param string $name
   *   The profile name; e.g., \'standard\'.
   * @param string $path
   *   The profile path; e.g., \'core/profiles/standard\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'addProfile',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '14535c2623a61845921fdd2ba63676a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines which modules require and are required by each module.
   *
   * @param array $modules
   *   An array of module objects keyed by module name. Each object contains
   *   information discovered during a Drupal\\Core\\Extension\\ExtensionDiscovery
   *   scan.
   *
   * @return
   *   The same array with the new keys for each module:
   *   - requires: An array with the keys being the modules that this module
   *     requires.
   *   - required_by: An array with the keys being the modules that will not work
   *     without this module.
   *
   * @see \\Drupal\\Core\\Extension\\ExtensionDiscovery
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'buildModuleDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '528714658526378cdf98735f06b95e81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a given module is enabled.
   *
   * @param string $module
   *   The name of the module (without the .module extension).
   *
   * @return bool
   *   TRUE if the module is both installed and enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'moduleExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b8b4c7f5ecbbbc3cdc6fb7dad8725ff0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads an include file for each enabled module.
   *
   * @param string $type
   *   The include file\'s type (file extension).
   * @param string $name
   *   (optional) The base file name (without the $type extension). If omitted,
   *   each module\'s name is used; i.e., "$module.$type" by default.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'loadAllIncludes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b69b965deb60672a7d39a6c19cdac06c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads a module include file.
   *
   * Examples:
   * @code
   *   // Load node.admin.inc from the node module.
   *   $this->loadInclude(\'node\', \'inc\', \'node.admin\');
   *   // Load content_types.inc from the node module.
   *   $this->loadInclude(\'node\', \'inc\', \'content_types\');
   * @endcode
   *
   * @param string $module
   *   The module to which the include file belongs.
   * @param string $type
   *   The include file\'s type (file extension).
   * @param string $name
   *   (optional) The base file name (without the $type extension). If omitted,
   *   $module is used; i.e., resulting in "$module.$type" by default.
   *
   * @return string|false
   *   The name of the included file, if successful; FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'loadInclude',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '732de6a8ef08a49fdf0e4039d36a6219' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a list of hooks that are declared through hook_hook_info().
   *
   * @return array
   *   An associative array whose keys are hook names and whose values are an
   *   associative array containing a group name. The structure of the array
   *   is the same as the return value of hook_hook_info().
   *
   * @see hook_hook_info()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'getHookInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4b61ebe0a5334c38ccf597218140e0dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines which modules are implementing a hook.
   *
   * @param string $hook
   *   The name of the hook (e.g. "help" or "menu").
   *
   * @return array
   *   An array with the names of the modules which are implementing this hook.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'getImplementations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5e627541902e3e00b1a83caf2c36b8f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Write the hook implementation info to the cache.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'writeCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6fc81fbe9a4f1f2aede48e98cf49e3d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the cached list of hook implementations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'resetImplementations',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ae03fd979f83a72e3f654659a7c40148' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether a given module implements a given hook.
   *
   * @param string $module
   *   The name of the module (without the .module extension).
   * @param string $hook
   *   The name of the hook (e.g. "help" or "menu").
   *
   * @return bool
   *   TRUE if the module is both installed and enabled, and the hook is
   *   implemented in that module.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'implementsHook',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd1849a1ad7945ddd12ebc1cd63d525a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes a hook in a particular module.
   *
   * @param string $module
   *   The name of the module (without the .module extension).
   * @param string $hook
   *   The name of the hook to invoke.
   * @param array $args
   *   Arguments to pass to the hook implementation.
   *
   * @return mixed
   *   The return value of the hook implementation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'invoke',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a129222d22d9e51662af7275b750dca1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes a hook in all enabled modules that implement it.
   *
   * @param string $hook
   *   The name of the hook to invoke.
   * @param array $args
   *   Arguments to pass to the hook.
   *
   * @return array
   *   An array of return values of the hook implementations. If modules return
   *   arrays from their implementations, those are merged into one array
   *   recursively. Note: integer keys in arrays will be lost, as the merge is
   *   done using Drupal\\Component\\Utility\\NestedArray::mergeDeepArray().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'invokeAll',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5b781af610aea21d7ad97e2387537f79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes a deprecated hook in a particular module.
   *
   * Invoking a deprecated hook adds the behavior of triggering an
   * E_USER_DEPRECATED error if any implementations are found.
   *
   * API maintainers should use this method instead of invoke() when their hook
   * is deprecated. This method does not detect when a hook is deprecated.
   *
   * @param string $description
   *   Helpful text describing what to do instead of implementing this hook.
   * @param string $module
   *   The name of the module (without the .module extension).
   * @param string $hook
   *   The name of the hook to invoke.
   * @param array $args
   *   Arguments to pass to the hook implementation.
   *
   * @return mixed
   *   The return value of the hook implementation.
   *
   * @see \\Drupal\\Core\\Extension\\ModuleHandlerInterface::invoke()
   * @see https://www.drupal.org/core/deprecation#how-hook
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'invokeDeprecated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6f0b71789e9adff3a185438a20872eab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invokes a deprecated hook in all enabled modules that implement it.
   *
   * Invoking a deprecated hook adds the behavior of triggering an
   * E_USER_DEPRECATED error if any implementations are found.
   *
   * API maintainers should use this method instead of invokeAll() when their
   * hook is deprecated. This method does not detect when a hook is deprecated.
   *
   * @param string $description
   *   Helpful text describing what to do instead of implementing this hook.
   * @param string $hook
   *   The name of the hook to invoke.
   * @param array $args
   *   Arguments to pass to the hook.
   *
   * @return array
   *   An array of return values of the hook implementations. If modules return
   *   arrays from their implementations, those are merged into one array
   *   recursively. Note: integer keys in arrays will be lost, as the merge is
   *   done using Drupal\\Component\\Utility\\NestedArray::mergeDeepArray().
   *
   * @see \\Drupal\\Core\\Extension\\ModuleHandlerInterface::invokeAll()
   * @see https://www.drupal.org/core/deprecation#how-hook
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'invokeAllDeprecated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c243bf76c98db4be258b0a2592435b40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes alterable variables to specific hook_TYPE_alter() implementations.
   *
   * This dispatch function hands off the passed-in variables to type-specific
   * hook_TYPE_alter() implementations in modules. It ensures a consistent
   * interface for all altering operations.
   *
   * A maximum of 2 alterable arguments is supported. In case more arguments need
   * to be passed and alterable, modules provide additional variables assigned by
   * reference in the last $context argument:
   * @code
   *   $context = array(
   *     \'alterable\' => &$alterable,
   *     \'unalterable\' => $unalterable,
   *     \'foo\' => \'bar\',
   *   );
   *   $this->alter(\'mymodule_data\', $alterable1, $alterable2, $context);
   * @endcode
   *
   * Note that objects are always passed by reference. If it is absolutely
   * required that no implementation alters a passed object in $context, then an
   * object needs to be cloned:
   * @code
   *   $context = array(
   *     \'unalterable_object\' => clone $object,
   *   );
   *   $this->alter(\'mymodule_data\', $data, $context);
   * @endcode
   *
   * @param string|array $type
   *   A string describing the type of the alterable $data. \'form\', \'links\',
   *   \'node_content\', and so on are several examples. Alternatively can be an
   *   array, in which case hook_TYPE_alter() is invoked for each value in the
   *   array, ordered first by module, and then for each module, in the order of
   *   values in $type. For example, when Form API is using $this->alter() to
   *   execute both hook_form_alter() and hook_form_FORM_ID_alter()
   *   implementations, it passes array(\'form\', \'form_\' . $form_id) for $type.
   * @param mixed $data
   *   The variable that will be passed to hook_TYPE_alter() implementations to be
   *   altered. The type of this variable depends on the value of the $type
   *   argument. For example, when altering a \'form\', $data will be a structured
   *   array. When altering a \'profile\', $data will be an object.
   * @param mixed $context1
   *   (optional) An additional variable that is passed by reference.
   * @param mixed $context2
   *   (optional) An additional variable that is passed by reference. If more
   *   context needs to be provided to implementations, then this should be an
   *   associative array as described above.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'alter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0c4f70b93edf521a7e7b35b2c0df78b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes alterable variables to deprecated hook_TYPE_alter() implementations.
   *
   * This method triggers an E_USER_DEPRECATED error if any implementations of
   * the alter hook are found. It is otherwise identical to alter().
   *
   * See the documentation for alter() for more details.
   *
   * @param string $description
   *   Helpful text describing what to do instead of implementing this alter
   *   hook.
   * @param string|array $type
   *   A string describing the type of the alterable $data. \'form\', \'links\',
   *   \'node_content\', and so on are several examples. Alternatively can be an
   *   array, in which case hook_TYPE_alter() is invoked for each value in the
   *   array, ordered first by module, and then for each module, in the order of
   *   values in $type. For example, when Form API is using $this->alter() to
   *   execute both hook_form_alter() and hook_form_FORM_ID_alter()
   *   implementations, it passes array(\'form\', \'form_\' . $form_id) for $type.
   * @param mixed $data
   *   The variable that will be passed to hook_TYPE_alter() implementations to be
   *   altered. The type of this variable depends on the value of the $type
   *   argument. For example, when altering a \'form\', $data will be a structured
   *   array. When altering a \'profile\', $data will be an object.
   * @param mixed $context1
   *   (optional) An additional variable that is passed by reference.
   * @param mixed $context2
   *   (optional) An additional variable that is passed by reference. If more
   *   context needs to be provided to implementations, then this should be an
   *   associative array as described above.
   *
   * @see \\Drupal\\Core\\Extension\\ModuleHandlerInterface::alter()
   * @see https://www.drupal.org/core/deprecation#how-hook
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'alterDeprecated',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c47e20695c730bad9cbb71526a5e6798' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of directories for all enabled modules. Useful for
   * tasks such as finding a file that exists in all module directories.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'getModuleDirectories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cbeed127004950d4c24aaf12471edd45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the human readable name of a given module.
   *
   * @param string $module
   *   The machine name of the module which title should be shown.
   *
   * @return string
   *   Returns the human readable name of the module or the machine name passed
   *   in if no matching module is found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
         'functionName' => 'getName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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