<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Config/ConfigUpdaterInterface.php-1624732871',
   'data' => 
  array (
    'a981e93b9ba4934b527e278a77f04b12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Performs configuration updates.
 *
 * Allows an extension to import, revert, delete configuration.
 * Needs to be used from hook_post_update_NAME(), since it uses the entity API.
 *
 * @see hook_post_update_NAME()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Config\\ConfigUpdaterInterface',
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
    '1459480d06b8be1205da31144f901efb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Imports configuration from extension storage to active storage.
   *
   * @param string[] $config_names
   *   The configuration names.
   *
   * @return \\Drupal\\commerce\\Config\\ConfigUpdateResult
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Config\\ConfigUpdaterInterface',
         'functionName' => 'import',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c4131e391b13334fcc2d9f9ba92157e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reverts configuration to the values from extension storage.
   *
   * @param string[] $config_names
   *   The configuration names.
   * @param bool $skip_modified
   *   Whether to skip modified configuration.
   *
   * @return \\Drupal\\commerce\\Config\\ConfigUpdateResult
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Config\\ConfigUpdaterInterface',
         'functionName' => 'revert',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8882f2f9399f0c3b032c5127f627af2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes configuration.
   *
   * @param string[] $config_names
   *   The configuration names.
   *
   * @return \\Drupal\\commerce\\Config\\ConfigUpdateResult
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Config\\ConfigUpdaterInterface',
         'functionName' => 'delete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '94ad919bfcb9084b712fca0c41581e80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads configuration from active storage.
   *
   * @param string $config_name
   *   The configuration name.
   *
   * @return array|false
   *   The configuration data, or FALSE if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Config\\ConfigUpdaterInterface',
         'functionName' => 'loadFromActive',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8774b4c44c30e186bc881c36035e91f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads configuration from extension storage.
   *
   * Extension storage represents the config/install or config/optional
   * directory of a module, theme, or install profile.
   *
   * @param string $config_name
   *   The configuration name.
   *
   * @return array|false
   *   The configuration data, or FALSE if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Config\\ConfigUpdaterInterface',
         'functionName' => 'loadFromExtension',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '11c3ac45db7321b6f1940b92519b305b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the configuration was modified since the initial import.
   *
   * @param array $config
   *   The configuration data.
   *
   * @return bool
   *   TRUE if the configuration was modified, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\Config\\ConfigUpdaterInterface',
         'functionName' => 'isModified',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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