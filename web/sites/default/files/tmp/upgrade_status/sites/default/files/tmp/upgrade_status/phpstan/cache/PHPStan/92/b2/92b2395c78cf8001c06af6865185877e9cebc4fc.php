<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/user/src/Entity/User.php-1624732869,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityChangedTrait.php-1624732867',
   'data' => 
  array (
    '9009747b029c3fc65dd0d2ac5f464be8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the user entity class.
 *
 * The base table name here is plural, despite Drupal table naming standards,
 * because "user" is a reserved word in many databases.
 *
 * @ContentEntityType(
 *   id = "user",
 *   label = @Translation("User"),
 *   label_collection = @Translation("Users"),
 *   label_singular = @Translation("user"),
 *   label_plural = @Translation("users"),
 *   label_count = @PluralTranslation(
 *     singular = "@count user",
 *     plural = "@count users",
 *   ),
 *   handlers = {
 *     "storage" = "Drupal\\user\\UserStorage",
 *     "storage_schema" = "Drupal\\user\\UserStorageSchema",
 *     "access" = "Drupal\\user\\UserAccessControlHandler",
 *     "list_builder" = "Drupal\\user\\UserListBuilder",
 *     "views_data" = "Drupal\\user\\UserViewsData",
 *     "route_provider" = {
 *       "html" = "Drupal\\user\\Entity\\UserRouteProvider",
 *     },
 *     "form" = {
 *       "default" = "Drupal\\user\\ProfileForm",
 *       "cancel" = "Drupal\\user\\Form\\UserCancelForm",
 *       "register" = "Drupal\\user\\RegisterForm"
 *     },
 *     "translation" = "Drupal\\user\\ProfileTranslationHandler"
 *   },
 *   admin_permission = "administer users",
 *   base_table = "users",
 *   data_table = "users_field_data",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "uid",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/user/{user}",
 *     "edit-form" = "/user/{user}/edit",
 *     "cancel-form" = "/user/{user}/cancel",
 *     "collection" = "/admin/people",
 *   },
 *   field_ui_base_route = "entity.user.admin_form",
 *   common_reference_target = TRUE
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
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
    'f1205a25aa2f6f7e782edb0d1685072b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for accessing changed time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\Entity\\User',
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
    '52416f0f01c572f9a1f156d9c0129259' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the timestamp of the last entity change across all translations.
   *
   * @return int
   *   The timestamp of the last entity save operation across all
   *   translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getChangedTimeAcrossTranslations',
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
    'eef876f726dcd7cb2ea1acabeb6a0dcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the timestamp of the last entity change for the current translation.
   *
   * @return int
   *   The timestamp of the last entity save operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getChangedTime',
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
    'c1e9f7619e5cde71aa747156ad413c11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the timestamp of the last entity change for the current translation.
   *
   * @param int $timestamp
   *   The timestamp of the last entity save operation.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'setChangedTime',
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
    'b63577897d9bff49765107ef616e89aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores a reference for a reusable anonymous user entity.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
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
    'e64c7b6be1fa26bfa97687b702abd935' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'isNew',
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
    'd01822b0b9425ea2f72f96d842adbf85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'label',
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
    'd396f0edcac993c19cfc320e34aa0cda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
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
    'da4c30d43e2bc825d6f54babb5738658' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
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
    '8df8dc4782a189e9bb398c9ba65c7102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
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
    'c40217c947addaeed7d96ecc4553bba6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getRoles',
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
    '73e06b533adaf2e6a774f8b8ae30950e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'hasRole',
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
    '976aa3f398fee956d62c3191b7d366ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'addRole',
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
    '29328ed8323bb22d0e7d4a7c2861efba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'removeRole',
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
    '7ddba686cad0657c09fa097baecf0618' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'hasPermission',
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
    '1cd4b5bdcb9e28ce1daf87b35458a697' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getPassword',
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
    '102307088bb5a18a46385d644ada7dcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'setPassword',
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
    'e344483a3f729e9618fa2ed85e01134a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getEmail',
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
    'f0d4424969a16a1ae70864dafa05b8be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'setEmail',
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
    'ab329df412bc9691b2ed458ba783b88f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getCreatedTime',
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
    '54597d9e7284a0e6b1775ac08ad6e1c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getLastAccessedTime',
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
    'b11843ae8da3a9238df804510dfe2b45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'setLastAccessTime',
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
    'f0b5a87d7b353a8b309f6646e0098291' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getLastLoginTime',
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
    'd609369dd57be98b2d2261ac403964da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'setLastLoginTime',
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
    'd0b2a77adb18c63d73f504cafbfb9af5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'isActive',
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
    '7a40b7cc5bfac00b0cb58c053f6b3b75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'isBlocked',
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
    '7bda690535c696586e67e50af787c53a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'activate',
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
    'ff9621c22004e0efc1b745cfd87a48a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'block',
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
    '5983d7a3313d62557f1919dea7282d2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getTimeZone',
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
    'b5d5011d7afce0782b28001829090f18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getPreferredLangcode',
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
    'e6612129e769122a23c90adfc79f4dd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getPreferredAdminLangcode',
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
    '7ed53c9e4752432258d853a4e318b428' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getInitialEmail',
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
    '1bdc65950323ad3333b138054c01d89e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'isAuthenticated',
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
    'b333462a6d372cf9765861c8aa2ed3dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'isAnonymous',
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
    'fcb0f35f4e4ec636c46b02693102d36a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getUsername',
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
    'e7c1a8bb9b0c9839e9a0cb941dab1605' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getAccountName',
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
    'c06f37809e3cdb767b7f4636cb711369' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getDisplayName',
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
    '050c45e9e885a14136d60600ded729e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'setUsername',
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
    '50f08f954511c53bc9dac3cdfb168b10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'setExistingPassword',
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
    '74f1b29f781b11ae393a0fcf6d6e2ec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'checkExistingPassword',
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
    '422b70a06bd28a710c4411f89254d84d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an anonymous user entity.
   *
   * @return \\Drupal\\user\\UserInterface
   *   An anonymous user entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getAnonymousUser',
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
    'd10ebb589e17b7fd420ef72e6acdb783' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'baseFieldDefinitions',
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
    '08a9229a70655f1a217e8431ae6067f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\BaseFieldDefinition[] $fields */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'baseFieldDefinitions',
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
    '4981bf9611797d630ebf403ea01a36c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the role storage object.
   *
   * @return \\Drupal\\user\\RoleStorageInterface
   *   The role storage object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getRoleStorage',
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
    '3703e950f1c7be4bb3cb8b56db04cd38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines allowed timezones for the field\'s AllowedValues constraint.
   *
   * @return string[]
   *   The allowed values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getAllowedTimezones',
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
    'de8e3a4e30f3a8bb0a2003a25e607bf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines allowed configurable language codes for AllowedValues constraints.
   *
   * @return string[]
   *   The allowed values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\user\\Entity',
         'uses' => 
        array (
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'roleinterface' => 'Drupal\\user\\RoleInterface',
          'statusitem' => 'Drupal\\user\\StatusItem',
          'timezoneitem' => 'Drupal\\user\\TimeZoneItem',
          'userinterface' => 'Drupal\\user\\UserInterface',
        ),
         'className' => 'Drupal\\user\\Entity\\User',
         'functionName' => 'getAllowedConfigurableLanguageCodes',
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