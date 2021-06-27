<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityDefinitionUpdateManagerInterface.php-1624732867',
   'data' => 
  array (
    'd7a0ad47a91b0b71a715b69700b60e67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for managing entity definition updates.
 *
 * During the application lifetime, the definitions of various entity types and
 * their data components (e.g., fields for fieldable entity types) can change.
 * For example, updated code can be deployed. Some entity handlers may need to
 * perform complex or long-running logic in response to the change. For
 * example, a SQL-based storage handler may need to update the database schema.
 *
 * To support this,
 * \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface has methods
 * to retrieve the last installed definitions as well as the definitions
 * specified by the current codebase. It also has create/update/delete methods
 * to bring the former up to date with the latter.
 *
 * However, it is not the responsibility of the entity manager to decide how to
 * report the differences or when to apply each update. This interface is for
 * managing that.
 *
 * This interface also provides methods to retrieve instances of the definitions
 * to be updated ready to be manipulated. In fact when definitions change in
 * code the system needs to be notified about that and the definitions stored in
 * state need to be reconciled with the ones living in code. This typically
 * happens in Update API functions, which need to take the system from a known
 * state to another known state. Relying on the definitions living in code might
 * prevent this, as the system might transition directly to the last available
 * state, and thus skipping the intermediate steps. Manipulating the definitions
 * in state allows to avoid this and ensures that the various steps of the
 * update process are predictable and repeatable.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeManagerInterface::getDefinition()
 * @see \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface::getLastInstalledDefinition()
 * @see \\Drupal\\Core\\Entity\\EntityFieldManagerInterface::getFieldStorageDefinitions()
 * @see \\Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface::getLastInstalledFieldStorageDefinitions()
 * @see hook_update_N()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
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
    'b71e6dbaf97565e586821543dc23e6d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that a definition has just been created.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
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
    'b3b3eded26815a522094da84a9c8101d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that a definition has changes.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
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
    'ada70c4b466ccbb4e74906013fd1f1e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates that a definition has just been deleted.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
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
    'bd8e8520edaaab0d4b58299b8aea7d8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if there are any definition updates that need to be applied.
   *
   * @return bool
   *   TRUE if updates are needed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'needsUpdates',
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
    'fdfb42472be3b1d2eef41c1a5d751326' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a human readable summary of the detected changes.
   *
   * @return array
   *   An associative array keyed by entity type id. Each entry is an array of
   *   human-readable strings, each describing a change.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'getChangeSummary',
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
    '7cd13b5fdd913eca57618d089ee87fdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of changes to entity type and field storage definitions.
   *
   * @return array
   *   An associative array keyed by entity type ID of change descriptors. Every
   *   entry is an associative array with the following optional keys:
   *   - entity_type: a scalar having one value among:
   *     - EntityDefinitionUpdateManagerInterface::DEFINITION_CREATED
   *     - EntityDefinitionUpdateManagerInterface::DEFINITION_UPDATED
   *   - field_storage_definitions: an associative array keyed by field name of
   *     scalars having one value among:
   *     - EntityDefinitionUpdateManagerInterface::DEFINITION_CREATED
   *     - EntityDefinitionUpdateManagerInterface::DEFINITION_UPDATED
   *     - EntityDefinitionUpdateManagerInterface::DEFINITION_DELETED
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'getChangeList',
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
    '1b6b6d175bbeacc42da89de09a5e267a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies all the detected valid changes.
   *
   * Use this with care, as it will apply updates for any module, which will
   * lead to unpredictable results.
   *
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   This exception is thrown if a change cannot be applied without
   *   unacceptable data loss. In such a case, the site administrator needs to
   *   apply some other process, such as a custom update function or a
   *   migration via the Migrate module.
   *
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0. Use
   *    \\Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface::getChangeList()
   *    and execute each entity type and field storage update manually instead.
   *
   * @see https://www.drupal.org/node/3034742
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'applyUpdates',
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
    'b8c6357cd22dc18b9fa19d3b157ac94c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an entity type definition ready to be manipulated.
   *
   * When needing to apply updates to existing entity type definitions, this
   * method should always be used to retrieve a definition ready to be
   * manipulated.
   *
   * @param string $entity_type_id
   *   The entity type identifier.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
   *   The entity type definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'getEntityType',
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
    '379552af1a32cd25551e24d8b9cf948e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all the entity type definitions, ready to be manipulated.
   *
   * When needing to apply updates to existing entity type definitions, this
   * method should always be used to retrieve all the definitions ready to be
   * manipulated.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface[]
   *   The last installed entity type definitions, keyed by the entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'getEntityTypes',
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
    '87a4400e239ae56e73f8bc639643f8f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs a new entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'installEntityType',
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
    'ee075d32be4268a414638e6074dd660e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs a new fieldable entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   The entity type\'s field storage definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'installFieldableEntityType',
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
    '39ca1e542d684c22b35dad1980e8db5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies any change performed to the passed entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'updateEntityType',
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
    'f17da5fc686d37617e867f58339c04fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uninstalls an entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'uninstallEntityType',
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
    'f39b17fec0517c226319f84dee45f56a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies any change performed to a fieldable entity type definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The updated entity type definition.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[] $field_storage_definitions
   *   The updated field storage definitions, including possibly new ones.
   * @param array &$sandbox
   *   (optional) A sandbox array provided by a hook_update_N() implementation
   *   or a Batch API callback. If the entity schema update requires a data
   *   migration, this parameter is mandatory. Defaults to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'updateFieldableEntityType',
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
    '70f8108d187c34eb80fde005e2dfa9b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a field storage definition ready to be manipulated.
   *
   * When needing to apply updates to existing field storage definitions, this
   * method should always be used to retrieve a storage definition ready to be
   * manipulated.
   *
   * @param string $name
   *   The field name.
   * @param string $entity_type_id
   *   The entity type identifier.
   *
   * @return \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface
   *   The field storage definition.
   *
   * @todo Make this return a mutable storage definition interface when we have
   *   one. See https://www.drupal.org/node/2346329.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'getFieldStorageDefinition',
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
    'c39a5e98149e6856ec49c85d8675481f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs a new field storage definition.
   *
   * @param string $name
   *   The field storage definition name.
   * @param string $entity_type_id
   *   The target entity type identifier.
   * @param string $provider
   *   The name of the definition provider.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'installFieldStorageDefinition',
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
    'c7635e7d4689e9cf3e4526d5043fabb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies any change performed to the passed field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'updateFieldStorageDefinition',
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
    'aaa329262b4c4611ee44334d687f4541' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uninstalls a field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field storage definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityDefinitionUpdateManagerInterface',
         'functionName' => 'uninstallFieldStorageDefinition',
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