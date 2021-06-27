<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/ContentEntityBase.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityChangesDetectionTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/SynchronizableEntityTrait.php-1624732867',
   'data' => 
  array (
    '516b73f60370902116c16281c5f05ec4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements Entity Field API specific enhancements to the Entity class.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '974f13536d7c9f194c861924910ea85e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods to detect changes in an entity object.
 *
 * @internal This may be replaced by a proper entity comparison handler.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'f36f59fecfbd986881b1c89a87e0399b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of field names to skip when checking for changes.
   *
   * @param \\Drupal\\Core\\Entity\\ContentEntityInterface $entity
   *   A content entity object.
   *
   * @return string[]
   *   An array of field names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getFieldsToSkipFromTranslationChangesCheck',
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
    'e9fd549d13a3253a692b643cdbceaca2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getFieldsToSkipFromTranslationChangesCheck',
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
    '5d195f3e0ee0bc62ac72b696ffdc37ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for accessing synchronization information.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '967f418037f43979187df1f9a394513c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this entity is being created, updated or deleted through a
   * synchronization process.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'c234fd01323ecb7e55c3af48c4432c73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'setSyncing',
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
    '3afd76c7bac0aa33d508a15475e29d88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isSyncing',
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
    '06b8b83bddee2f78ab516c39a50d6ce1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plain data values of the contained fields.
   *
   * This always holds the original, unchanged values of the entity. The values
   * are keyed by language code, whereas LanguageInterface::LANGCODE_DEFAULT
   * is used for values in default language.
   *
   * @todo: Add methods for getting original fields and for determining
   * changes.
   * @todo: Provide a better way for defining default values.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '19adf9605cc209b53cc21372436c69e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The array of fields, each being an instance of FieldItemListInterface.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '2c755f147672318d68bd110bf007b98e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Local cache for field definitions.
   *
   * @see ContentEntityBase::getFieldDefinitions()
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'dba3fa90fe21e6e6c4ca44c6663e4830' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Local cache for the available language objects.
   *
   * @var \\Drupal\\Core\\Language\\LanguageInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '7b0a84131567bc33d008ceace70a5308' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language entity key.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '1823f32f0cee362fd9f931b3af984a36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default langcode entity key.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '5ddc315fc6ded3d6c88288d0f1300750' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Language code identifying the entity active language.
   *
   * This is the language field accessors will use to determine which field
   * values manipulate.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'b572a31c9430b79b21fd0ca7b43477fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Local cache for the default language code.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '2b87dd03b17b7184726dfb4a5aba8d58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of entity translation metadata.
   *
   * An associative array keyed by translation language code. Every value is an
   * array containing the translation status and the translation object, if it has
   * already been instantiated.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '419d430bb2c889bfe94fbf898dcd9f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A flag indicating whether a translation object is being initialized.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '74942bf0f4d12394968cbaad7d48a36d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Boolean indicating whether a new revision should be created on save.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'ef7c7ab00c713d582807626d78bbcf17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether this is the default revision.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'a75ba2ebde885c1c3b4ca50e97967e4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds untranslatable entity keys such as the ID, bundle, and revision ID.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'e35ba705151b7c90bf468df45808c46c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds translatable entity keys such as the label.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'ca193ede7eeebfbfa408943ba9ef25cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether entity validation was performed.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'bd24da334184661d81dad6fc7595455e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether entity validation is required before saving the entity.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'a9405313de77f853717c9cc319e5a706' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The loaded revision ID before the new revision was set.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '7803f1a97a747952913e14efb69630db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The revision translation affected entity key.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '9b3dfbbc47bc9cf99691005a2a194a47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the revision translation affected flag has been enforced.
   *
   * An array, keyed by the translation language code.
   *
   * @var bool[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '1a84fb423d030acec92865f58f3ac6a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Local cache for fields to skip from the checking for translation changes.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '763faf0291e6a152ce3761bed17585f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '2398dab0d6c27f7b0b96f3c779e8fbe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getLanguages',
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
    'd6798899a3d9f75f1c840df878665307' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'b03f9b15dffde7a4968a6162c3733c4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'setNewRevision',
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
    '45bcbf64e1e6db5b8f2287b62edb2d06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getLoadedRevisionId',
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
    '3fc15097dad27606bbcfa2c0100e51f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'updateLoadedRevisionId',
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
    'cec9d1da21caa09760bd83ad36a7e062' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isNewRevision',
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
    '73e62e35be000a0f2fe14b51c9afb04c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isDefaultRevision',
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
    '8895ef5ddfe62cc34ff36ce1ce18e436' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'wasDefaultRevision',
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
    'ddaf860282e822c8539b4c2978bf0475' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'wasDefaultRevision',
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
    '13ea2ce7b35e746ebf7c78952bd0c7c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isLatestRevision',
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
    'f76d3a3117739099b10b09757350548b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isLatestRevision',
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
    '4bdf356748c363929c45f0f47b15ab86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isLatestTranslationAffectedRevision',
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
    'ad75c9a4c4b3badb2031bbed38ac68a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isLatestTranslationAffectedRevision',
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
    '665abf28586e002eac2c34568145427a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isRevisionTranslationAffected',
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
    '45c64a2007e9c6e7c8816667a04a1139' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'setRevisionTranslationAffected',
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
    '96eb485d7e9d25701234b912f4f7b966' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isRevisionTranslationAffectedEnforced',
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
    '2af6c89adcde8a48735e01af7338c857' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'setRevisionTranslationAffectedEnforced',
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
    '28d13b5db4ad67c79bbaa6e1795f5074' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isDefaultTranslation',
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
    '7189f605b69dddb7d6220da4c0881cb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getRevisionId',
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
    '243c05335247b18e73f677c05089ba9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'ff3560a8a3577077e7b2401108ab41e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '716cb5c8b9b8c13f0077f6d44af4fcd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'preSaveRevision',
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
    '6d6796f8573b64dafdd8955743945171' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '045916453f1d2fa3513ebcca17b3defc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'validate',
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
    'ce3121f1d9e9cc66fdf302fa10198fbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isValidationRequired',
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
    '3a1743240f1843fe5d05a750d01f9675' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'setValidationRequired',
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
    'e9bc56d4cfa2eff9116bbf0a0cf46724' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clear entity translation object cache to remove stale references.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'clearTranslationCache',
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
    '93214cc74f46c21a6ca968189c1abe3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'ee189be5694922e0a6f52157868db7cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '4087d1a50a27469cecce3e9dc2d817ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'bundle',
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
    'd752089eeb57f5222fa6bf9b180f8ae7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'uuid',
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
    '29f49f3ba83f6c2064541fb36b4c5698' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'hasField',
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
    '1fa143648552ce7be117ceeeebeec2d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'get',
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
    '91403c1f237d0bf5687ae60fb7822f22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a translated field.
   *
   * @return \\Drupal\\Core\\Field\\FieldItemListInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getTranslatedField',
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
    '60c08092c41ff37ea5a1e371292dac7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'set',
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
    'fdc6268f651195740fd583316464ac28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getFields',
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
    '22a4d03731dff4995015e2efe95d8fcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getTranslatableFields',
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
    'ecc397638b3cc481cf44e33544bef9ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getIterator',
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
    '640f2643edc70d58bb0ef6a42266e27f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getFieldDefinition',
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
    '4c204078e3a9364ce65e90095330f3fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getFieldDefinitions',
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
    '6bd9907959224b7129645871a800ec68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'toArray',
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
    '4323198d51df45032824677a343c575f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'access',
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
    '2bbe88c7b42c3f17612489a9cac71d7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'language',
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
    '21edf422748dc620966a35af23bdeccf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Populates the local cache for the default language code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '3cd5f8d7bcd91a342dd547b1f5bfd6ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates language for already instantiated fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'updateFieldLangcodes',
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
    '2823355253b091d376f69efd7984638e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'onChange',
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
    'b592432d6d7447f776b5e49a16d02655' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getTranslation',
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
    'e9d6ff4b71a5364f7331e3cf7c8dcab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getUntranslated',
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
    'dc1ed64b93ed2887a5a906499ab6042f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Instantiates a translation object for an existing translation.
   *
   * The translated entity will be a clone of the current entity with the
   * specified $langcode. All translations share the same field data structures
   * to ensure that all of them deal with fresh data.
   *
   * @param string $langcode
   *   The language code for the requested translation.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The translation object. The content properties of the translation object
   *   are stored as references to the main entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'initializeTranslation',
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
    '3333c0c744d7a0dfbef1b7d1d532321f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'hasTranslation',
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
    '17906510e046553aa5531297ca0f3815' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isNewTranslation',
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
    '0d837b35c72819e698959d78f8f81288' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'addTranslation',
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
    '0bb5ad5dd51b2affd1d22a2fe40d0e13' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'addTranslation',
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
    '79c8901f09e191e2d5eb48f7100b3496' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'removeTranslation',
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
    'c1edc4e7cf7c1023221b7264925cebba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getTranslationStatus',
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
    '7215609ef4fe4ff88162e0942c085047' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getTranslationLanguages',
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
    '6ed6f187acbffddf8e1405ad2f1dd1c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the original values with the interim changes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'updateOriginalValues',
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
    'b440cf2696f2760d0e616ffbd688f9ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic method for getting object properties.
   *
   * @todo: A lot of code still uses non-fields (e.g. $entity->content in view
   *   builders) by reference. Clean that up.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => '__get',
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
    'b431be832c59d7fa9e58e1fb9f923453' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic method for setting object properties.
   *
   * Uses default language always.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => '__set',
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
    '325bf99ef9a2170554332cad4a5319ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic method for isset().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => '__isset',
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
    'c91cfbdd8fe3daa4222b25895318143a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic method for unset().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => '__unset',
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
    '43ebc36a66397a2793b2da6aedc2b5f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'createDuplicate',
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
    '62bb5af8ccaec38908709ca6b5590ffa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Implements a deep clone.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => '__clone',
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
    'fae2c2ff4a82fdff1e8c80b139c9e5a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    'ce99da7d9247b65d04493b6660782b72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'referencedEntities',
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
    '30fdcaa931867bc1864963ede34b46ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value of the given entity key, if defined.
   *
   * @param string $key
   *   Name of the entity key, for example id, revision or bundle.
   *
   * @return mixed
   *   The value of the entity key, NULL if not defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getEntityKey',
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
    '9e7a079da9f94147f2d6eaab44f67c7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
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
    '3d10c6ae4de91769a61c4e7cf1bf5b44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'bundleFieldDefinitions',
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
    '755c74d39c1c2d643e6c662541ad3b02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of field names to skip in ::hasTranslationChanges.
   *
   * @return array
   *   An array of field names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'getFieldsToSkipFromTranslationChangesCheck',
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
    '6cc78ba1834041f0702dc4174387385f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'hasTranslationChanges',
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
    '60e5d538f505f2ae2304ae61e95182a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityBase $original */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'hasTranslationChanges',
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
    'dc1812e210d8dab70e8a37691982a9bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityBase $translation */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'hasTranslationChanges',
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
    '617beabeb797a75f42e75197dafcffbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityreference' => 'Drupal\\Core\\Entity\\Plugin\\DataType\\EntityReference',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'language' => 'Drupal\\Core\\Language\\Language',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'translationstatusinterface' => 'Drupal\\Core\\TypedData\\TranslationStatusInterface',
          'typeddatainterface' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\ContentEntityBase',
         'functionName' => 'isDefaultTranslationAffectedOnly',
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