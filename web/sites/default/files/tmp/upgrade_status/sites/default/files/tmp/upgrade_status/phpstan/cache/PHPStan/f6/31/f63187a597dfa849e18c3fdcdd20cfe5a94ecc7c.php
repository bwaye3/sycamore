<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/field/src/Entity/FieldStorageConfig.php-1624732868',
   'data' => 
  array (
    'f391b8455426bef5b0712534c9817a74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Field storage configuration entity.
 *
 * @ConfigEntityType(
 *   id = "field_storage_config",
 *   label = @Translation("Field storage"),
 *   label_collection = @Translation("Field storages"),
 *   label_singular = @Translation("field storage"),
 *   label_plural = @Translation("field storages"),
 *   label_count = @PluralTranslation(
 *     singular = "@count field storage",
 *     plural = "@count field storages",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\field\\FieldStorageConfigAccessControlHandler",
 *     "storage" = "Drupal\\field\\FieldStorageConfigStorage"
 *   },
 *   config_prefix = "storage",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "id"
 *   },
 *   config_export = {
 *     "id",
 *     "field_name",
 *     "entity_type",
 *     "type",
 *     "settings",
 *     "module",
 *     "locked",
 *     "cardinality",
 *     "translatable",
 *     "indexes",
 *     "persist_with_no_fields",
 *     "custom_storage",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '6cb4a703749b54ae1dce3d32ccd49d72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum length of the field name, in characters.
   *
   * For fields created through Field UI, this includes the \'field_\' prefix.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '4ab5de5bce9f5129dbb974f503fd6049' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field ID.
   *
   * The ID consists of 2 parts: the entity type and the field name.
   *
   * Example: node.body, user.field_main_image.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    'fdf0bd2b4c678fbc823981cd3e8c1499' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field name.
   *
   * This is the name of the property under which the field values are placed in
   * an entity: $entity->{$field_name}. The maximum length is
   * Field:NAME_MAX_LENGTH.
   *
   * Example: body, field_main_image.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '41e0c0b679bd6b6eb03d226d0d5663b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the entity type the field can be attached to.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '1473eec5e13c91cdd557205645e1b0a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field type.
   *
   * Example: text, integer.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    'ba236544ad938e5c13034f8ae05c7d52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the module that provides the field type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    'def1af9f0ede908808ab5549e105fc95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Field-type specific settings.
   *
   * An array of key/value pairs, The keys and default values are defined by the
   * field type.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '717113eca1633f5977b5f9d3283bf5ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field cardinality.
   *
   * The maximum number of values the field can hold. Possible values are
   * positive integers or
   * FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED. Defaults to 1.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    'd6713336e8ca3b0c4e3388a4597ce71d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag indicating whether the field is translatable.
   *
   * Defaults to TRUE.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '5b427f1a1dc4a1fd76ae6173ee8e4c28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag indicating whether the field is available for editing.
   *
   * If TRUE, some actions not available though the UI (but are still possible
   * through direct API manipulation):
   * - field settings cannot be changed,
   * - new fields cannot be created
   * - existing fields cannot be deleted.
   * Defaults to FALSE.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    'c3f1fff4475e72c49f7cd687d2edba4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag indicating whether the field storage should be deleted when orphaned.
   *
   * By default field storages for configurable fields are removed when there
   * are no remaining fields using them. If multiple modules provide bundles
   * which need to use the same field storage then setting this to TRUE will
   * preserve the field storage regardless of what happens to the bundles. The
   * classic use case for this is node body field storage since Book, Forum, the
   * Standard profile and bundle (node type) creation through the UI all use
   * same field storage.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '909ce3700a602d9e2b493c2dd01b0d5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A boolean indicating whether or not the field item uses custom storage.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '5291918766c6bb9566696a70502f7e5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The custom storage indexes for the field data storage.
   *
   * This set of indexes is merged with the "default" indexes specified by the
   * field type in the class implementing
   * \\Drupal\\Core\\Field\\FieldItemInterface::schema() method to determine the
   * actual set of indexes that get created.
   *
   * The indexes are defined using the same definition format as Schema API
   * index specifications. Only columns that are part of the field schema, as
   * defined by the field type in the class implementing
   * \\Drupal\\Core\\Field\\FieldItemInterface::schema() method, are allowed.
   *
   * Some storage backends might not support indexes, and discard that
   * information.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '5ab2d67dc8b6e8fd01eb71713d54dc6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Flag indicating whether the field is deleted.
   *
   * The delete() method marks the field as "deleted" and removes the
   * corresponding entry from the config storage, but keeps its definition in
   * the state storage while field data is purged by a separate
   * garbage-collection process.
   *
   * Deleted fields stay out of the regular entity lifecycle (notably, their
   * values are not populated in loaded entities, and are not saved back).
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '3b62118c33ff8c3f5f8d8d734d7b84de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field schema.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '69bd3076f438b8b010e7b80581bf89e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of field property definitions.
   *
   * @var \\Drupal\\Core\\TypedData\\DataDefinitionInterface[]
   *
   * @see \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface::getPropertyDefinitions()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    'b3de6c115fd6eecd0199b20e49e18f1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Static flag set to prevent recursion during field deletes.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '15ccb5d5ca50a287f5ea314cdc482ede' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a FieldStorageConfig object.
   *
   * In most cases, Field entities are created via
   * FieldStorageConfig::create($values)), where $values is the same parameter
   * as in this constructor.
   *
   * @param array $values
   *   An array of field properties, keyed by property name. Most array
   *   elements will be used to set the corresponding properties on the class;
   *   see the class property documentation for details. Some array elements
   *   have special meanings and a few are required. Special elements are:
   *   - name: required. As a temporary Backwards Compatibility layer right now,
   *     a \'field_name\' property can be accepted in place of \'id\'.
   *   - entity_type: required.
   *   - type: required.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '2a0b48ecd47bf52511d1de4128aac2ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'id',
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
    '38806260805017415f2b49faf86f6224' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides \\Drupal\\Core\\Entity\\Entity::preSave().
   *
   * @throws \\Drupal\\Core\\Field\\FieldException
   *   If the field definition is invalid.
   * @throws \\Drupal\\Core\\Entity\\EntityStorageException
   *   In case of failures at the configuration storage level.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'preSave',
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
    '1d25a2d70fd1a29003b8ec8f80e14fb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares saving a new field definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage.
   *
   * @throws \\Drupal\\Core\\Field\\FieldException
   *   If the field definition is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'preSaveNew',
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
    '0d36842959e3b80ac9c1688d63ce9a85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'calculateDependencies',
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
    'de16b6cb230c94baa414f478c92854fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares saving an updated field definition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'preSaveUpdated',
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
    '260f0424ced76db45d0787eefcf6c12a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'postSave',
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
    'a0c0093ec4ac271d8e2ee680fb6ffeed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'preDelete',
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
    'b6849ac927194893f5126a20295e772b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\DeletedFieldsRepositoryInterface $deleted_fields_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'preDelete',
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
    'da4f28b7948ba9d91932d19321d4ec98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldStorageConfigInterface $field_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'preDelete',
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
    '935e57044577b456a2f84b7df668762f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'postDelete',
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
    '77d220bca9a33c0a2bc647e82b8293de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getSchema',
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
    'ac94bcd532d8c92cc30ed7f00a3f07f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'hasCustomStorage',
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
    '5b7710c0340f2433c1c0e65294bc4ea9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isBaseField',
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
    '037e7cdb60681d3082c443218e91a793' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getColumns',
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
    '04ed708475c5d6b5ac95609d63615dae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getBundles',
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
    'bd99fcee25036a95b2be4b573ed460f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
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
    '0e020e51cdfa763df7804e5b3d0afb8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isDeleted',
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
    'ac222e3f412e0d81a261294a333cf2ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getTypeProvider',
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
    'bbd96a65346b857fd49636dcfa553009' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getType',
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
    '1b50f21984f44e0b069596ec301a02b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getSettings',
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
    '7ab70d865e40fff6cb2bf5c863925ff2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getSetting',
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
    '1f45568e97a8560b960b18f8e1bb5036' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'setSetting',
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
    'd828e27e02d6446d61fd41fbf46beb62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'setSettings',
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
    'ddbdd72128a6aa946ab7d00d813f4390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isTranslatable',
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
    'b409c0ef0171ca0bfe64fd3af609ea88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isRevisionable',
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
    '7279f48d9577ed639a0e695f3b58e5ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'setTranslatable',
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
    'a059ef179abf4b00a0b096e4ed095d25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getProvider',
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
    'c15d4f4f92108cb21f811d8926add41f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getLabel',
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
    '4fdb4bc1757f309010a3021d692039ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getDescription',
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
    '9cf05cb7be2ecd02840d43f510290d39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getCardinality',
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
    '4e40dbd51467db774554679d8d7fceed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\FieldTypePluginManager $field_type_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getCardinality',
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
    '6890fad46d570cdcad13527c1e994cad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'setCardinality',
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
    '2927f3b53dc3d5b354cc871d2b6ca08b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getOptionsProvider',
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
    'f2948878c2bb9901245e1fab62f43ca7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isMultiple',
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
    '3fe86dd5f6535e01ac9776f2a4e21d5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isLocked',
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
    'e393f51db55aeef7e5eee32b0e777c36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'setLocked',
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
    '83b9c86a1f9956c5aecf538ea8c04c79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getTargetEntityTypeId',
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
    '4b3d03526e60e53c5e5ffb93f3e697ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isQueryable',
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
    '12fee4df3ea74562bab414811e9382d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a field has any data.
   *
   * @return bool
   *   TRUE if the field has data for any entity; FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'hasData',
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
    '6d017593f5da91b7dfd5a3c40bfb8df8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __sleep() method.
   *
   * Using the Serialize interface and serialize() / unserialize() methods
   * breaks entity forms in PHP 5.4.
   * @todo Investigate in https://www.drupal.org/node/1977206.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => '__sleep',
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
    '2bdd0702ea22d7323dbce7f7cb15d9c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getConstraints',
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
    '7bfd2e9ae03f41f8a80521c1c5253243' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getConstraint',
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
    '92da0ebc0e2487600345379e95e46059' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getPropertyDefinition',
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
    'bbdb6c4797e9f5c88e950b65dd54a107' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getPropertyDefinitions',
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
    '00639392cb155e418d1ec3b082038daf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getPropertyNames',
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
    'fbab050c308e0d76dfd70bf12ba9aba8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getMainPropertyName',
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
    'ded0a3be0d26b30242cf038aeaf78a9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getUniqueStorageIdentifier',
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
    'a85fcdbb663adeb9ae5e2ffb72712258' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper to retrieve the field item class.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getFieldItemClass',
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
    '18d8239c2f498a94c5207a73f39fe75c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads a field config entity based on the entity type and field name.
   *
   * @param string $entity_type_id
   *   ID of the entity type.
   * @param string $field_name
   *   Name of the field.
   *
   * @return static
   *   The field config entity if one exists for the provided field name,
   *   otherwise NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'loadByName',
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
    'a0620f3ec2b9f963e6239493bc789e29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'isDeletable',
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
    '51b8d342ed116c68cbd55914b74c5928' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'getIndexes',
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
    '67dbb07b60a34039f820777b7de190f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstoragedefinitioninterface' => 'Drupal\\Core\\Field\\FieldStorageDefinitionInterface',
          'optionsproviderinterface' => 'Drupal\\Core\\TypedData\\OptionsProviderInterface',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldStorageConfig',
         'functionName' => 'setIndexes',
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