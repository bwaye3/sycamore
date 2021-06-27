<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/ExtensionInstallStorage.php-1624732867',
   'data' => 
  array (
    '406223b2035801409ddb8a35acaed109' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Storage to access configuration and schema in enabled extensions.
 *
 * @see \\Drupal\\Core\\Config\\ConfigInstaller
 * @see \\Drupal\\Core\\Config\\TypedConfigManager
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Config\\ExtensionInstallStorage',
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
    '4cfdbdc06ae0c4a13f3e991ea76f33c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The active configuration store.
   *
   * @var \\Drupal\\Core\\Config\\StorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Config\\ExtensionInstallStorage',
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
    '83bc07e127c6e224b7b891b343e4c3ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag to include the profile in the list of enabled modules.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Config\\ExtensionInstallStorage',
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
    '361c9a4f53e8e119afede94fcdc553fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the currently active installation profile.
   *
   * In the early installer this value can be NULL.
   *
   * @var string|NULL
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Config\\ExtensionInstallStorage',
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
    'e3b59c75d30b1ecacec4fedb1f7eb133' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Core\\Config\\InstallStorage::__construct().
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $config_storage
   *   The active configuration store where the list of enabled modules and
   *   themes is stored.
   * @param string $directory
   *   The directory to scan in each extension to scan for files. Defaults to
   *   \'config/install\'. This parameter will be mandatory in Drupal 9.0.0.
   * @param string $collection
   *   (optional) The collection to store configuration in. Defaults to the
   *   default collection. This parameter will be mandatory in Drupal 9.0.0.
   * @param bool $include_profile
   *   (optional) Whether to include the install profile in extensions to
   *   search and to get overrides from. This parameter will be mandatory in
   *   Drupal 9.0.0.
   * @param string|null $profile
   *   (optional) The current installation profile. This parameter will be
   *   mandatory in Drupal 9.0.0.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Config\\ExtensionInstallStorage',
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
    'bb7742ce75cef945d01a40bae11e442b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Config\\ExtensionInstallStorage',
         'functionName' => 'createCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e1b92de9e4e2e10c8dc0ac578f7f6764' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a map of all config object names and their folders.
   *
   * The list is based on enabled modules and themes. The active configuration
   * storage is used rather than \\Drupal\\Core\\Extension\\ModuleHandler and
   *  \\Drupal\\Core\\Extension\\ThemeHandler in order to resolve circular
   * dependencies between these services and \\Drupal\\Core\\Config\\ConfigInstaller
   * and \\Drupal\\Core\\Config\\TypedConfigManager.
   *
   * @return array
   *   An array mapping config object names with directories.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
          'extensiondiscovery' => 'Drupal\\Core\\Extension\\ExtensionDiscovery',
        ),
         'className' => 'Drupal\\Core\\Config\\ExtensionInstallStorage',
         'functionName' => 'getAllFolders',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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