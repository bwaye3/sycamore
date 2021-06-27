<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Theme/Registry.php-1624732867',
   'data' => 
  array (
    '58934c66aec53db3dcd260933d544dd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the theme registry service.
 *
 * @internal
 *
 * Theme registry is expected to be used only internally since every
 * hook_theme() implementation depends on the way this class is built. This
 * class may get new features in minor releases so this class should be
 * considered internal.
 *
 * @todo Replace local $registry variables in methods with $this->registry.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '1526bc4f3e333a2e5559d0a4ab2ee907' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme object representing the active theme for this registry.
   *
   * @var \\Drupal\\Core\\Theme\\ActiveTheme
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    'c0e310bcff6bf48540c333e567cc382e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The lock backend that should be used.
   *
   * @var \\Drupal\\Core\\Lock\\LockBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '728551eda2b919080cec70cf563153fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The complete theme registry.
   *
   * @var array
   *   An array of theme registries, keyed by the theme name. Each registry is
   *   an associative array keyed by theme hook names, whose values are
   *   associative arrays containing the aggregated hook definition:
   *   - type: The type of the extension the original theme hook originates
   *     from; e.g., \'module\' for theme hook \'node\' of Node module.
   *   - name: The name of the extension the original theme hook originates
   *     from; e.g., \'node\' for theme hook \'node\' of Node module.
   *   - theme path: The effective \\Drupal\\Core\\Theme\\ActiveTheme::getPath()
   *      during \\Drupal\\Core\\Theme\\ThemeManagerInterface::render(), available
   *      as \'directory\' variable in templates. For functions, it should point
   *      to the respective theme. For templates, it should point to the
   *      directory that contains the template.
   *   - includes: (optional) An array of include files to load when the theme
   *     hook is executed by \\Drupal\\Core\\Theme\\ThemeManagerInterface::render().
   *   - file: (optional) A filename to add to \'includes\', either prefixed with
   *     the value of \'path\', or the path of the extension implementing
   *     hook_theme().
   *   In case of a theme base hook, one of the following:
   *   - variables: An associative array whose keys are variable names and whose
   *     values are default values of the variables to use for this theme hook.
   *   - render element: A string denoting the name of the variable name, in
   *     which the render element for this theme hook is provided.
   *   In case of a theme template file:
   *   - path: The path to the template file to use. Defaults to the
   *     subdirectory \'templates\' of the path of the extension implementing
   *     hook_theme(); e.g., \'core/modules/node/templates\' for Node module.
   *   - template: The basename of the template file to use, without extension
   *     (as the extension is specific to the theme engine). The template file
   *     is in the directory defined by \'path\'.
   *   - template_file: A full path and file name to a template file to use.
   *     Allows any extension to override the effective template file.
   *   - engine: The theme engine to use for the template file.
   *   In case of a theme function:
   *   - function: The function name to call to generate the output.
   *   For any registered theme hook, including theme hook suggestions:
   *   - preprocess: An array of theme variable preprocess callbacks to invoke
   *     before invoking final theme variable processors.
   *   - process: An array of theme variable process callbacks to invoke
   *     before invoking the actual theme function or template.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '0c566518a6418d457762fe75e2983941' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache backend to use for the complete theme registry data.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '4834d0780838ca9e4b1cdea15f1c34cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler to use to load modules.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '145b1085741325ebd162b4696741ad8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of incomplete, runtime theme registries, keyed by theme name.
   *
   * @var \\Drupal\\Core\\Utility\\ThemeRegistry[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    'a325761350f52b7e20a5d71f892eea74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores whether the registry was already initialized.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '36a63f8d1c13c3ff6960a7d47f442335' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the theme for which to construct the registry, if given.
   *
   * @var string|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    'fa12849cc24540afcf4730d1a8243b21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The app root.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '230598f01545c74b34c7650271a0fa66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme handler.
   *
   * @var \\Drupal\\Core\\Extension\\ThemeHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    'e994282b7a69e6a2298521aca9730e39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme initialization.
   *
   * @var \\Drupal\\Core\\Theme\\ThemeInitializationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '1746d4e12c13cb5748ac39fefe37d5b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme manager.
   *
   * @var \\Drupal\\Core\\Theme\\ThemeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    'a0d596f6b5acbdb3b38df2fbc27d4419' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The runtime cache.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    'b7302680cf89398f96acc78ce2c32813' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a \\Drupal\\Core\\Theme\\Registry object.
   *
   * @param string $root
   *   The app root.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   The cache backend interface to use for the complete theme registry data.
   * @param \\Drupal\\Core\\Lock\\LockBackendInterface $lock
   *   The lock backend.
   * @param \\Drupal\\Core\\Extension\\ModuleHandlerInterface $module_handler
   *   The module handler to use to load modules.
   * @param \\Drupal\\Core\\Extension\\ThemeHandlerInterface $theme_handler
   *   The theme handler.
   * @param \\Drupal\\Core\\Theme\\ThemeInitializationInterface $theme_initialization
   *   The theme initialization.
   * @param string $theme_name
   *   (optional) The name of the theme for which to construct the registry.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $runtime_cache
   *   The cache backend interface to use for the runtime theme registry data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '8cd3c4310d5b9f32877fb9177a028df2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the theme manager.
   *
   * @param \\Drupal\\Core\\Theme\\ThemeManagerInterface $theme_manager
   *   The theme manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'setThemeManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fefb35fe97c9f76e93b6ed1aec6d2428' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes a theme with a certain name.
   *
   * This function does to much magic, so it should be replaced by another
   * services which holds the current active theme information.
   *
   * @param string $theme_name
   *   (optional) The name of the theme for which to construct the registry.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'init',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4e6e5031030dbe670ec8cf8cfaf05b9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the complete theme registry from cache or rebuilds it.
   *
   * @return array
   *   The complete theme registry data array.
   *
   * @see Registry::$registry
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'get',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3d9939a65732f951e2a30578aadd3946' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the incomplete, runtime theme registry.
   *
   * @return \\Drupal\\Core\\Utility\\ThemeRegistry
   *   A shared instance of the ThemeRegistry class, provides an ArrayObject
   *   that allows it to be accessed with array syntax and isset(), and is more
   *   lightweight than the full registry.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'getRuntime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ffc1efdcbb67a5562864507cb6d7365f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Persists the theme registry in the cache backend.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'setCache',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6fc76ff1ab0c3e2e88ad7ae2fcc61e11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the base hook for a given hook suggestion.
   *
   * @param string $hook
   *   The name of a theme hook whose base hook to find.
   *
   * @return string|false
   *   The name of the base hook or FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'getBaseHook',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '55d9d04a11448bbaa0e81cc397579156' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the theme registry cache.
   *
   * Theme hook definitions are collected in the following order:
   * - Modules
   * - Base theme engines
   * - Base themes
   * - Theme engine
   * - Theme
   *
   * All theme hook definitions are essentially just collated and merged in the
   * above order. However, various extension-specific default values and
   * customizations are required; e.g., to record the effective file path for
   * theme template. Therefore, this method first collects all extensions per
   * type, and then dispatches the processing for each extension to
   * processExtension().
   *
   * After completing the collection, modules are allowed to alter it. Lastly,
   * any derived and incomplete theme hook definitions that are hook suggestions
   * for base hooks (e.g., \'block__node\' for the base hook \'block\') need to be
   * determined based on the full registry and classified as \'base hook\'.
   *
   * See the @link themeable Default theme implementations topic @endlink for
   * details.
   *
   * @return \\Drupal\\Core\\Utility\\ThemeRegistry
   *   The build theme registry.
   *
   * @see hook_theme_registry_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'build',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dfb4129160f72a59a8d22e6880d5bbcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process a single implementation of hook_theme().
   *
   * @param array $cache
   *   The theme registry that will eventually be cached; It is an associative
   *   array keyed by theme hooks, whose values are associative arrays
   *   describing the hook:
   *   - \'type\': The passed-in $type.
   *   - \'theme path\': The passed-in $path.
   *   - \'function\': The name of the function generating output for this theme
   *     hook. Either defined explicitly in hook_theme() or, if neither
   *     \'function\' nor \'template\' is defined, then the default theme function
   *     name is used. The default theme function name is the theme hook
   *     prefixed by either \'theme_\' for modules or \'$name_\' for everything
   *     else. If \'function\' is defined, \'template\' is not used.
   *   - \'template\': The filename of the template generating output for this
   *     theme hook. The template is in the directory defined by the \'path\' key
   *     of hook_theme() or defaults to "$path/templates".
   *   - \'variables\': The variables for this theme hook as defined in
   *     hook_theme(). If there is more than one implementation and \'variables\'
   *     is not specified in a later one, then the previous definition is kept.
   *   - \'render element\': The renderable element for this theme hook as defined
   *     in hook_theme(). If there is more than one implementation and
   *     \'render element\' is not specified in a later one, then the previous
   *     definition is kept.
   *   - See the @link themeable Theme system overview topic @endlink for
   *     detailed documentation.
   * @param string $name
   *   The name of the module, theme engine, base theme engine, theme or base
   *   theme implementing hook_theme().
   * @param string $type
   *   One of \'module\', \'theme_engine\', \'base_theme_engine\', \'theme\', or
   *   \'base_theme\'. Unlike regular hooks that can only be implemented by
   *   modules, each of these can implement hook_theme(). This function is
   *   called in aforementioned order and new entries override older ones. For
   *   example, if a theme hook is both defined by a module and a theme, then
   *   the definition in the theme will be used.
   * @param string $theme
   *   The actual name of theme, module, etc. that is being processed.
   * @param string $path
   *   The directory where $name is. For example, modules/system or
   *   themes/bartik.
   *
   * @see \\Drupal\\Core\\Theme\\ThemeManagerInterface::render()
   * @see hook_theme()
   * @see \\Drupal\\Core\\Extension\\ThemeHandler::listInfo()
   * @see twig_render_template()
   *
   * @throws \\BadFunctionCallException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'processExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dd53fc1b1dba9362e5a049bb8253e8e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Completes the definition of the requested suggestion hook.
   *
   * @param string $hook
   *   The name of the suggestion hook to complete.
   * @param array $cache
   *   The theme registry, as documented in
   *   \\Drupal\\Core\\Theme\\Registry::processExtension().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'completeSuggestion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '39d9388f0827e61a42c7eb0ac4fb6d57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges the source hook\'s preprocess functions into the destination hook\'s.
   *
   * @param string $destination_hook_name
   *   The name of the hook to merge preprocess functions to.
   * @param string $source_hook_name
   *   The name of the hook to merge preprocess functions from.
   * @param array $parent_hook
   *   The parent hook if it exists. Either an incomplete hook from suggestions
   *   or a base hook.
   * @param array $cache
   *   The theme registry, as documented in
   *   \\Drupal\\Core\\Theme\\Registry::processExtension().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'mergePreprocessFunctions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '96696bf4ad131b8ec95efc6905b81001' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Completes the theme registry adding discovered functions and hooks.
   *
   * @param array $cache
   *   The theme registry as documented in
   *   \\Drupal\\Core\\Theme\\Registry::processExtension().
   * @param \\Drupal\\Core\\Theme\\ActiveTheme $theme
   *   Current active theme.
   *
   * @see ::processExtension()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'postProcessExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6aef7c21a5cc3fbf3edb874409ab9ca9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invalidates theme registry caches.
   *
   * To be called when the list of enabled extensions is changed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
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
    '889272f553098b1a24d8fa8990ddfa54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'destruct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2e86ddecd2a7eab2c4631355d7dd1da0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all user functions grouped by the word before the first underscore.
   *
   * @param $prefixes
   *   An array of function prefixes by which the list can be limited.
   *
   * @return array
   *   Functions grouped by the first prefix.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'getPrefixGroupedUserFunctions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fd23415cf1ef91614fdaf3f91aad7fb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps drupal_get_path().
   *
   * @param string $module
   *   The name of the item for which the path is requested.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Theme',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'destructableinterface' => 'Drupal\\Core\\DestructableInterface',
          'modulehandlerinterface' => 'Drupal\\Core\\Extension\\ModuleHandlerInterface',
          'themehandlerinterface' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
          'lockbackendinterface' => 'Drupal\\Core\\Lock\\LockBackendInterface',
          'themeregistry' => 'Drupal\\Core\\Utility\\ThemeRegistry',
        ),
         'className' => 'Drupal\\Core\\Theme\\Registry',
         'functionName' => 'getPath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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