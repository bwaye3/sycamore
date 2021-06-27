<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/language/src/Entity/ConfigurableLanguage.php-1624732868',
   'data' => 
  array (
    'abcabdfdf22d8d9cd6db5942f72ebdb6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the ConfigurableLanguage entity.
 *
 * @ConfigEntityType(
 *   id = "configurable_language",
 *   label = @Translation("Language"),
 *   label_collection = @Translation("Languages"),
 *   label_singular = @Translation("language"),
 *   label_plural = @Translation("languages"),
 *   label_count = @PluralTranslation(
 *     singular = "@count language",
 *     plural = "@count languages",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\\language\\LanguageListBuilder",
 *     "access" = "Drupal\\language\\LanguageAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\\language\\Form\\LanguageAddForm",
 *       "edit" = "Drupal\\language\\Form\\LanguageEditForm",
 *       "delete" = "Drupal\\language\\Form\\LanguageDeleteForm"
 *     }
 *   },
 *   admin_permission = "administer languages",
 *   config_prefix = "entity",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "weight" = "weight"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "direction",
 *     "weight",
 *     "locked"
 *   },
 *   links = {
 *     "delete-form" = "/admin/config/regional/language/delete/{configurable_language}",
 *     "edit-form" = "/admin/config/regional/language/edit/{configurable_language}",
 *     "collection" = "/admin/config/regional/language",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    'ec40d4af03fbc36794cc3ccd7d3e0b85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language ID (machine name).
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    'c0eb588b01b12e16ece7c27cb9c475b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The human-readable label for the language.
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '0f2c87817200596bec0247c4d7ab9ff5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The direction of language, either DIRECTION_LTR or DIRECTION_RTL.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    'e38a3b860c5ee0e50fba646c9e5b2263' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The weight of the language, used in lists of languages.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '4aeeaaaa92db58a1c2c52cd777ceae2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Locked languages cannot be edited.
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    'a7289536c42a4b8034ce798c0491d67a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Used during saving to detect when the site becomes multilingual.
   *
   * This property is not saved to the language entity, but is needed for
   * detecting when to rebuild the services.
   *
   * @see \\Drupal\\language\\Entity\\ConfigurableLanguage::preSave()
   * @see \\Drupal\\language\\Entity\\ConfigurableLanguage::postSave()
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '985414b712d43511fce558695c5ef93f' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
         'functionName' => 'isDefault',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6ed5958cb3dad13c8e6675aa0a5f3302' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '829f1f2164f6eb4a1a5a8a58d4768306' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '68dd8ea6ae1ee41d904e2703bf3e5286' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '1cf3e04cbb892603295ae21355f97fe5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @throws \\DeleteDefaultLanguageException
   *   Exception thrown if we\'re trying to delete the default language entity.
   *   This is not allowed as a site must have a default language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '213febfcad2a3614ee5d7cbb0513688b' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '8d5e51a4040ea132fa52e49c114776a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the default langcode.
   *
   * @return string
   *   The current default langcode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '5a4d5c0e37427b4d25b8bc9c4c9d5319' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
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
    '641a251dc0868c99aee3ece96a6e1225' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
         'functionName' => 'setName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '56e2c769d2b391302b286ae33f68b357' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
         'functionName' => 'getId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7535ee1e3926f90148581f7a1b0aab5e' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
         'functionName' => 'getDirection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '026b4c1a2b8eaefab83742dcfe850f60' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
         'functionName' => 'getWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '15cef4ddc40443826afb44f98641d8c7' => 
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
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
         'functionName' => 'setWeight',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8afc0d702125418143e945c3fd172223' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a configurable language object from a langcode.
   *
   * @param string $langcode
   *   The language code to use to create the object.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Language\\LanguageManager::getStandardLanguageList()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Entity',
         'uses' => 
        array (
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'languagemanager' => 'Drupal\\Core\\Language\\LanguageManager',
          'configurablelanguagemanager' => 'Drupal\\language\\ConfigurableLanguageManager',
          'configurablelanguagemanagerinterface' => 'Drupal\\language\\ConfigurableLanguageManagerInterface',
          'deletedefaultlanguageexception' => 'Drupal\\language\\Exception\\DeleteDefaultLanguageException',
          'configurablelanguageinterface' => 'Drupal\\language\\ConfigurableLanguageInterface',
        ),
         'className' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
         'functionName' => 'createFromLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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