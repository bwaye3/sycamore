<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Extension/ThemeHandlerInterface.php-1624732867',
   'data' => 
  array (
    '1b278acd86b7cd31a6f9f4a4a0032eda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages the list of available themes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
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
    '57131f334e293ced9215cc4d632c87e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs a given list of themes.
   *
   * @param array $theme_list
   *   An array of theme names.
   * @param bool $install_dependencies
   *   (optional) If TRUE, dependencies will automatically be installed in the
   *   correct order. This incurs a significant performance cost, so use FALSE
   *   if you know $theme_list is already complete and in the correct order.
   *
   * @return bool
   *   Whether any of the given themes have been installed.
   *
   * @throws \\Drupal\\Core\\Extension\\ExtensionNameLengthException
   *   Thrown when the theme name is to long.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use the theme_installer service instead.
   *
   * @see https://www.drupal.org/node/3017233
   * @see \\Drupal\\Core\\Extension\\ThemeInstallerInterface::install()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'install',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e636bb2295e7bce89decf5ecedefa4c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uninstalls a given list of themes.
   *
   * Uninstalling a theme removes all related configuration (like blocks) and
   * invokes the \'themes_uninstalled\' hook.
   *
   * @param array $theme_list
   *   The themes to uninstall.
   *
   * @throws \\Drupal\\Core\\Extension\\Exception\\UninstalledExtensionException
   *   Thrown when you try to uninstall a theme that wasn\'t installed.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use the theme_installer service instead.
   *
   * @see https://www.drupal.org/node/3017233
   * @see hook_themes_uninstalled()
   * @see \\Drupal\\Core\\Extension\\ThemeInstallerInterface::uninstall()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'uninstall',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '969b41b202a78cc971db159811e00ee4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of currently installed themes.
   *
   * @return \\Drupal\\Core\\Extension\\Extension[]
   *   An associative array of the currently installed themes. The keys are the
   *   themes\' machine names and the values are Extension objects having the
   *   following properties:
   *   - filename: The filepath and name of the .info.yml file.
   *   - name: The machine name of the theme.
   *   - status: 1 for installed, 0 for uninstalled themes.
   *   - info: The contents of the .info.yml file.
   *   - stylesheets: A two dimensional array, using the first key for the
   *     media attribute (e.g. \'all\'), the second for the name of the file
   *     (e.g. style.css). The value is a complete filepath (e.g.
   *     themes/bartik/style.css). Not set if no stylesheets are defined in the
   *     .info.yml file.
   *   - scripts: An associative array of JavaScripts, using the filename as key
   *     and the complete filepath as value. Not set if no scripts are defined
   *     in the .info.yml file.
   *   - prefix: The base theme engine prefix.
   *   - engine: The machine name of the theme engine.
   *   - base_theme: If this is a sub-theme, the machine name of the base theme
   *     defined in the .info.yml file. Otherwise, the element is not set.
   *   - base_themes: If this is a sub-theme, an associative array of the
   *     base-theme ancestors of this theme, starting with this theme\'s base
   *     theme, then the base theme\'s own base theme, etc. Each entry has an
   *     array key equal to the theme\'s machine name, and a value equal to the
   *     human-readable theme name; if a theme with matching machine name does
   *     not exist in the system, the value will instead be NULL (and since the
   *     system would not know whether that theme itself has a base theme, that
   *     will end the array of base themes). This is not set if the theme is not
   *     a sub-theme.
   *   - sub_themes: An associative array of themes on the system that are
   *     either direct sub-themes (that is, they declare this theme to be
   *     their base theme), direct sub-themes of sub-themes, etc. The keys are
   *     the themes\' machine names, and the values are the themes\'
   *     human-readable names. This element is not set if there are no themes on
   *     the system that declare this theme as their base theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'listInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0d63ab8a5cb24736ef01af959a314dd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a theme extension to the internal listing.
   *
   * @param \\Drupal\\Core\\Extension\\Extension $theme
   *   The theme extension.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'addTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ab0e1394c2cd69618dfdd04c67f7565f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Refreshes the theme info data of currently installed themes.
   *
   * Modules can alter theme info, so this is typically called after a module
   * has been installed or uninstalled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'refreshInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '928950bbc18d52865f1198ac0b65abe6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the internal state of the theme handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
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
    '85ae7ba25aa6f1a520898e7568193247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Scans and collects theme extension data and their engines.
   *
   * @return \\Drupal\\Core\\Extension\\Extension[]
   *   An associative array of theme extensions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'rebuildThemeData',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '43ee8d4df5f3df276c4a877a68299353' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all the base themes for the specified theme.
   *
   * Themes can inherit templates and function implementations from earlier
   * themes.
   *
   * @param \\Drupal\\Core\\Extension\\Extension[] $themes
   *   An array of available themes.
   * @param string $theme
   *   The name of the theme whose base we are looking for.
   *
   * @return array
   *   Returns an array of all of the theme\'s ancestors; the first element\'s
   *   value will be NULL if an error occurred.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'getBaseThemes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8eb8964f494149c01143cc612db9b69b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the human readable name of a given theme.
   *
   * @param string $theme
   *   The machine name of the theme which title should be shown.
   *
   * @return string
   *   Returns the human readable name of the theme.
   *
   * @throws \\Drupal\\Core\\Extension\\Exception\\UnknownExtensionException
   *   When the specified theme does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
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
    'e9984fbcf9ff2a14cb6249dfedcb385e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the default theme.
   *
   * @return string
   *   The default theme.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'getDefault',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5d5a707aa20dbdb1b14481b35373f711' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a new default theme.
   *
   * @param string $theme
   *   The new default theme.
   *
   * @return $this
   *
   * @deprecated in drupal:8.2.0 and is removed from drupal:9.0.0. Use the
   *   configuration system to edit the system.theme config directly.
   *
   * @see https://www.drupal.org/node/3082630
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'setDefault',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dc31b1fc6e4bb14b7f7adccdb517c8b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of directories for all installed themes.
   *
   * Useful for tasks such as finding a file that exists in all theme
   * directories.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'getThemeDirectories',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7f889b76f830e03adbf24abb383a3c9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a given theme is installed.
   *
   * @param string $theme
   *   The name of the theme (without the .theme extension).
   *
   * @return bool
   *   TRUE if the theme is installed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'themeExists',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0b19125648ffbdcdfbd283d57f57fbf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a theme extension object from the currently active theme list.
   *
   * @param string $name
   *   The name of the theme to return.
   *
   * @return \\Drupal\\Core\\Extension\\Extension
   *   An extension object.
   *
   * @throws \\Drupal\\Core\\Extension\\Extension\\UnknownExtensionException
   *   Thrown when the requested theme does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'getTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '620e1f597173bc6133c504abf2d39bd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if a theme should be shown in the user interface.
   *
   * To be shown in the UI the theme has to be installed. If the theme is hidden
   * it will not be shown unless it is the default or admin theme.
   *
   * @param string $name
   *   The name of the theme to check.
   *
   * @return bool
   *   TRUE if the theme should be shown in the UI, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Extension',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Extension\\ThemeHandlerInterface',
         'functionName' => 'hasUi',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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