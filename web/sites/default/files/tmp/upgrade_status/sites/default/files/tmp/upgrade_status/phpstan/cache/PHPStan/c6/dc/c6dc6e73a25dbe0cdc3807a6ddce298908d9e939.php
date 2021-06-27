<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/language/src/Entity/ContentLanguageSettings.php-1624732868',
   'data' => 
  array (
    'ee7fc3b1252cd59f1b6cac876e257bd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the ContentLanguageSettings entity.
 *
 * @ConfigEntityType(
 *   id = "language_content_settings",
 *   label = @Translation("Content Language Settings"),
 *   label_collection = @Translation("Content Language Settings"),
 *   label_singular = @Translation("content language setting"),
 *   label_plural = @Translation("content languages settings"),
 *   label_count = @PluralTranslation(
 *     singular = "@count content language setting",
 *     plural = "@count content languages settings",
 *   ),
 *   admin_permission = "administer languages",
 *   config_prefix = "content_settings",
 *   entity_keys = {
 *     "id" = "id"
 *   },
 *   config_export = {
 *     "id",
 *     "target_entity_type_id",
 *     "target_bundle",
 *     "default_langcode",
 *     "language_alterable",
 *   },
 *   list_cache_tags = { "rendered" }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    '5cd4e43d8b1183bf63bdaae23a54dc21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The id. Combination of $target_entity_type_id.$target_bundle.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    'a33e4ddbe777f1eb1775bce67479999a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type ID (machine name).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    'ec1ed65cfe3428aafa0ae941cdda0d51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The bundle (machine name).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    '82b99362ecd9a23f5c6e3984eb995404' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default language code.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    '583b0f02a9db1d1cd2b6e452da05f056' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates if the language is alterable or not.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    '7bbc0badc7c40e6ec4aacaa687cbff83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a ContentLanguageSettings object.
   *
   * In most cases, Field entities are created via
   * FieldConfig::create($values), where $values is the same
   * parameter as in this constructor.
   *
   * @param array $values
   *   An array of the referring entity bundle with:
   *   - target_entity_type_id: The entity type.
   *   - target_bundle: The bundle.
   *   Other array elements will be used to set the corresponding properties on
   *   the class; see the class property documentation for details.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    '6393288d3d289ea58d2a0dd0ccb4689f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    '08642cd51d8c4a421bc8e3492dbaf1f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    '7f7822ec5b357a22a1ea66b74b8a4ebb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'getTargetBundle',
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
    'a61bb9081c567604e3ce444ef9abfce8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'setTargetBundle',
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
    '0f012e0b628838e4c69645d7815b323c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'setDefaultLangcode',
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
    '199ced57b589e310a486f0ee183108b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'getDefaultLangcode',
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
    'a57cfe343865fe8c96092a7c2bf50f59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'setLanguageAlterable',
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
    '4b3174f9f22e483c9c522ac5204ebfd4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'isLanguageAlterable',
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
    '9455d334aacb1e76e8250bc119bc1b0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
    'ddc9ec7781dd57365330cf8f1a510894' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'isDefaultConfiguration',
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
    'cb305eb294925bb77f2ee88e62de91b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads a content language config entity based on the entity type and bundle.
   *
   * @param string $entity_type_id
   *   ID of the entity type.
   * @param string $bundle
   *   Bundle name.
   *
   * @return $this
   *   The content language config entity if one exists. Otherwise, returns
   *   default values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
         'functionName' => 'loadByEntityTypeBundle',
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
    'a3f446e033d3608f5b5d2c22c6382338' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'contentlanguagesettingsexception' => 'Drupal\\language\\ContentLanguageSettingsException',
          'contentlanguagesettingsinterface' => 'Drupal\\language\\ContentLanguageSettingsInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ContentLanguageSettings',
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
  ),
));