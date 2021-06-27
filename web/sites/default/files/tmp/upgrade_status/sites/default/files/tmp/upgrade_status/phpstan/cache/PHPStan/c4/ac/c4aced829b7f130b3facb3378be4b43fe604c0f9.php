<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/field/src/Entity/FieldConfig.php-1624732868',
   'data' => 
  array (
    '3d7ebd6252834daf52c0fe1b723c259c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Field entity.
 *
 * @ConfigEntityType(
 *   id = "field_config",
 *   label = @Translation("Field"),
 *   label_collection = @Translation("Fields"),
 *   label_singular = @Translation("field"),
 *   label_plural = @Translation("fields"),
 *   label_count = @PluralTranslation(
 *     singular = "@count field",
 *     plural = "@count fields",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\field\\FieldConfigAccessControlHandler",
 *     "storage" = "Drupal\\field\\FieldConfigStorage"
 *   },
 *   config_prefix = "field",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   config_export = {
 *     "id",
 *     "field_name",
 *     "entity_type",
 *     "bundle",
 *     "label",
 *     "description",
 *     "required",
 *     "translatable",
 *     "default_value",
 *     "default_value_callback",
 *     "settings",
 *     "field_type",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '2e13c0f4c8b23f134ef86d23ddb1de7d' => 
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
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    'a6857c4b6b220590099dd7f32c490195' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The associated FieldStorageConfig entity.
   *
   * @var \\Drupal\\field\\Entity\\FieldStorageConfig
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '5bc0b5ecf972f2ec5e5897f55ec018e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a FieldConfig object.
   *
   * In most cases, Field entities are created via
   * FieldConfig::create($values), where $values is the same
   * parameter as in this constructor.
   *
   * @param array $values
   *   An array of field properties, keyed by property name. The
   *   storage associated with the field can be specified either with:
   *   - field_storage: the FieldStorageConfigInterface object,
   *   or by referring to an existing field storage in the current configuration
   *   with:
   *   - field_name: The field name.
   *   - entity_type: The entity type.
   *   Additionally, a \'bundle\' property is required to indicate the entity
   *   bundle to which the field is attached to. Other array elements will be
   *   used to set the corresponding properties on the class; see the class
   *   property documentation for details.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '1450d0e8cf8d3030b84757f55ace506b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'postCreate',
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
    '5912c0af06306c49b86dc62d664fa706' => 
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
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '077bc67810274491f9029508768420db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '8db3e51ed5acfa95c7ce0dec03ab8b80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '4193fd45d89b3ed48ea41e7d024741e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\DeletedFieldsRepositoryInterface $deleted_fields_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '6ccbd4f7a945b67b92356d1e6c21b9b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\field\\FieldConfigInterface $field */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '2c2db4fe747eb5f2a7534723e7ce6f30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '5c251fc25120de9cb2b2735752738587' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'linkTemplates',
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
    'f73d4c03200f949eda0a84f3c4a6a71c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'urlRouteParameters',
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
    'dd9902c00f649367661dd9a6f94d2e5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    'bcfca17458bf25c7fca97de997f34c33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
    '3dd96dff857dab7c78f25ec85175d98e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'isDisplayConfigurable',
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
    '2c1ec9bc51fdc163264d72a2480a3e68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'getDisplayOptions',
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
    'fedd536cadb4ee42194eab2095b37ead' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'isReadOnly',
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
    '1b9f53b5dbadc09db086f608c3bbc30f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'isComputed',
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
    '823af2912cdbfb2a4f58646c149e4e4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
         'functionName' => 'getUniqueIdentifier',
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
    '74ad5525d5c60c6667b265a956b92b0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads a field config entity based on the entity type and field name.
   *
   * @param string $entity_type_id
   *   ID of the entity type.
   * @param string $bundle
   *   Bundle name.
   * @param string $field_name
   *   Name of the field.
   *
   * @return static
   *   The field config entity if one exists for the provided field
   *   name, otherwise NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\field\\Entity',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentitystorageinterface' => 'Drupal\\Core\\Entity\\FieldableEntityStorageInterface',
          'fieldconfigbase' => 'Drupal\\Core\\Field\\FieldConfigBase',
          'fieldexception' => 'Drupal\\Core\\Field\\FieldException',
          'fieldstorageconfiginterface' => 'Drupal\\field\\FieldStorageConfigInterface',
          'fieldconfiginterface' => 'Drupal\\field\\FieldConfigInterface',
        ),
         'className' => 'Drupal\\field\\Entity\\FieldConfig',
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
  ),
));