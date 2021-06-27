<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Entity/ConfigEntityStorageInterface.php-1624732867',
   'data' => 
  array (
    '01ec10e82548151156d17d70793b1768' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for configuration entity storage.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
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
    '630108f5972fef25092f68ae49e880b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Extracts the configuration entity ID from the full configuration name.
   *
   * @param string $config_name
   *   The full configuration name to extract the ID from; for example,
   *   \'views.view.archive\'.
   * @param string $config_prefix
   *   The config prefix of the configuration entity; for example, \'views.view\'.
   *
   * @return string
   *   The ID of the configuration entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
         'functionName' => 'getIDFromConfigName',
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
    '2862b58d6007789518bf002affd925ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a configuration entity from storage values.
   *
   * Allows the configuration entity storage to massage storage values before
   * creating an entity.
   *
   * @param array $values
   *   The array of values from the configuration storage.
   *
   * @return ConfigEntityInterface
   *   The configuration entity.
   *
   * @see \\Drupal\\Core\\Entity\\EntityStorageBase::mapFromStorageRecords()
   * @see \\Drupal\\field\\FieldStorageConfigStorage::mapFromStorageRecords()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
         'functionName' => 'createFromStorageRecord',
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
    'a8ab7532cf6eb0dd00ae61263691d842' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates a configuration entity from storage values.
   *
   * Allows the configuration entity storage to massage storage values before
   * updating an entity.
   *
   * @param ConfigEntityInterface $entity
   *   The configuration entity to update.
   * @param array $values
   *   The array of values from the configuration storage.
   *
   * @return ConfigEntityInterface
   *   The configuration entity.
   *
   * @see \\Drupal\\Core\\Entity\\EntityStorageBase::mapFromStorageRecords()
   * @see \\Drupal\\field\\FieldStorageConfigStorage::mapFromStorageRecords()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
         'functionName' => 'updateFromStorageRecord',
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
    '5fbdd4c137dcded9b7ce5bb475da313a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads one entity in their original form without overrides.
   *
   * @param mixed $id
   *   The ID of the entity to load.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface|null
   *   An entity object. NULL if no matching entity is found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
         'functionName' => 'loadOverrideFree',
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
    'bc0015a663d19a30053b192ab9a0437d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads one or more entities in their original form without overrides.
   *
   * @param $ids
   *   An array of entity IDs, or NULL to load all entities.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface[]
   *   An array of entity objects indexed by their IDs. Returns an empty array
   *   if no matching entities are found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityStorageInterface',
         'functionName' => 'loadMultipleOverrideFree',
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