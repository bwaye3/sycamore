<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/includes/module.inc-1624732867',
   'data' => 
  array (
    '7beb73630e476c382af1730315ac3723' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * API for loading and interacting with Drupal modules.
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
    '792521b65b8b42fb3649ad6b257abffc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builds a list of installed themes.
 *
 * @param $type
 *   The type of list to return:
 *   - theme: All installed themes.
 *
 * @return array
 *   An associative array of themes, keyed by name.
 *   For $type \'theme\', the array values are objects representing the
 *   respective database row, with the \'info\' property already unserialized.
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal::service(\'theme_handler\')->listInfo() instead.
 *
 * @see https://www.drupal.org/node/2709919
 * @see \\Drupal\\Core\\Extension\\ThemeHandler::listInfo()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'system_list',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9f414e3cbb6eecdcdd906434931efa5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Resets all system_list() caches.
 *
 * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. There
 *   is no direct replacement. Call each
 *   \\Drupal::service(\'extension.list.TYPE\')->reset() as necessary.
 *
 * @see https://www.drupal.org/node/2709919
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'system_list_reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '34434e6dde393d50f2d7b53e729e610e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Registers an extension in runtime registries for execution.
 *
 * @param string $type
 *   The extension type; e.g., \'module\' or \'theme\'.
 * @param string $name
 *   The internal name of the extension; e.g., \'node\'.
 * @param string $uri
 *   The relative URI of the primary extension file; e.g.,
 *   \'core/modules/node/node.module\'.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. There is
 *   no replacement for this function. Use the following sequence of code to
 *   achieve the same functionality:
 *   @code
 *   $path = \\Drupal::service("extension.list.$type")->getPath($name);
 *   \\Drupal::service(\'class_loader\')->addPsr4(\'Drupal\\\\\' . $name . \'\\\\\', \\Drupal::root() . \'/\' . $path . \'/src\');
 *   @endcode
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'system_register',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '83327657049a3fa6eaa9844897fc8de5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads a module\'s installation hooks.
 *
 * @param $module
 *   The name of the module (without the .module extension).
 *
 * @return
 *   The name of the module\'s install file, if successful; FALSE otherwise.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'module_load_install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9be9761d5c42a9e549edf7bdc2ee54c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Loads a module include file.
 *
 * Examples:
 * @code
 *   // Load node.admin.inc from the node module.
 *   module_load_include(\'inc\', \'node\', \'node.admin\');
 *   // Load content_types.inc from the node module.
 *   module_load_include(\'inc\', \'node\', \'content_types\');
 * @endcode
 *
 * Do not use this function to load an install file, use module_load_install()
 * instead. Do not use this function in a global context since it requires
 * Drupal to be fully bootstrapped, use require_once DRUPAL_ROOT . \'/path/file\'
 * instead.
 *
 * @param $type
 *   The include file\'s type (file extension).
 * @param $module
 *   The module to which the include file belongs.
 * @param $name
 *   (optional) The base file name (without the $type extension). If omitted,
 *   $module is used; i.e., resulting in "$module.$type" by default.
 *
 * @return
 *   The name of the included file, if successful; FALSE otherwise.
 *
 * @todo The module_handler service has a loadInclude() method which performs
 *   this same task but only for enabled modules. Figure out a way to move this
 *   functionality entirely into the module_handler while keeping the ability to
 *   load the files of disabled modules.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'module_load_include',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b7481dfef14a69ee010515b319873d0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns an array of modules required by core.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'drupal_required_modules',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1e73e177f034f53ac97ebd57a80de986' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets weight of a particular module.
 *
 * The weight of uninstalled modules cannot be changed.
 *
 * @param string $module
 *   The name of the module (without the .module extension).
 * @param int $weight
 *   An integer representing the weight of the module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'module_set_weight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '95a557b900ecf9cec9e767cc546eee32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sorts the configured list of enabled modules.
 *
 * The list of enabled modules is expected to be ordered by weight and name.
 * The list is always sorted on write to avoid the overhead on read.
 *
 * @param array $data
 *   An array of module configuration data.
 *
 * @return array
 *   An array of module configuration data sorted by weight and name.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => NULL,
         'functionName' => 'module_config_sort',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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