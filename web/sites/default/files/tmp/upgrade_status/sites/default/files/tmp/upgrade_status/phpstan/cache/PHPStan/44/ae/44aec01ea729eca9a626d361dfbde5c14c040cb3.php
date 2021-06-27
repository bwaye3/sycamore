<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Entity/ImportableEntityStorageInterface.php-1624732867',
   'data' => 
  array (
    '72c4a87fc5339ff8f6633c0454470ae9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for responding to configuration imports.
 *
 * When configuration is synchronized between storages, the entity storage must
 * handle the synchronization of configuration data for its entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
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
    '5bb92dc03ca33796775d01d74ccd8861' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates entities upon synchronizing configuration changes.
   *
   * @param string $name
   *   The name of the configuration object.
   * @param \\Drupal\\Core\\Config\\Config $new_config
   *   A configuration object containing the new configuration data.
   * @param \\Drupal\\Core\\Config\\Config $old_config
   *   A configuration object containing the old configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
         'functionName' => 'importCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '79abf83501ca2351deaf7859ceb54074' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates entities upon synchronizing configuration changes.
   *
   * @param string $name
   *   The name of the configuration object.
   * @param \\Drupal\\Core\\Config\\Config $new_config
   *   A configuration object containing the new configuration data.
   * @param \\Drupal\\Core\\Config\\Config $old_config
   *   A configuration object containing the old configuration data.
   *
   * @throws \\Drupal\\Core\\Config\\ConfigImporterException
   *   Thrown when the config entity that should be updated can not be found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
         'functionName' => 'importUpdate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c7df93dd45254291ed9ae01d349cdeb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Delete entities upon synchronizing configuration changes.
   *
   * @param string $name
   *   The name of the configuration object.
   * @param \\Drupal\\Core\\Config\\Config $new_config
   *   A configuration object containing the new configuration data.
   * @param \\Drupal\\Core\\Config\\Config $old_config
   *   A configuration object containing the old configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
         'functionName' => 'importDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '49c7476cf90f76ea28a6e730d5d44d62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renames entities upon synchronizing configuration changes.
   *
   * @param string $old_name
   *   The original name of the configuration object.
   * @param \\Drupal\\Core\\Config\\Config $new_config
   *   A configuration object containing the new configuration data.
   * @param \\Drupal\\Core\\Config\\Config $old_config
   *   A configuration object containing the old configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'config' => 'Drupal\\Core\\Config\\Config',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ImportableEntityStorageInterface',
         'functionName' => 'importRename',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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