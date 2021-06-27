<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/ConfigTestTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/StorageCopyTrait.php-1624732867',
   'data' => 
  array (
    '86ee1de0ff0b8e18e6b68f92d896e619' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods to deal with config system objects in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\Tests\\ConfigTestTrait',
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
    'b1b08d7779027737e8aee82fc2ec7650' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility trait to copy configuration from one storage to another.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\ConfigTestTrait',
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
    '50280e887c7ab179d21fcac76a689053' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copy the configuration from one storage to another and remove stale items.
   *
   * This method empties target storage and copies all collections from source.
   * Configuration is only copied and not imported, should not be used
   * with the active storage as the target.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source
   *   The configuration storage to copy from.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target
   *   The configuration storage to copy to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\ConfigTestTrait',
         'functionName' => 'replaceStorageContents',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '35f2ea965948b728a2ed0c6bd81277ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a ConfigImporter object to import test configuration.
   *
   * @return \\Drupal\\Core\\Config\\ConfigImporter
   *   The config importer object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\Tests\\ConfigTestTrait',
         'functionName' => 'configImporter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2a7ca2d3e1918ca839ae84b6516ffdf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies configuration objects from source storage to target storage.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source_storage
   *   The source config storage service.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target_storage
   *   The target config storage service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\Tests\\ConfigTestTrait',
         'functionName' => 'copyConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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