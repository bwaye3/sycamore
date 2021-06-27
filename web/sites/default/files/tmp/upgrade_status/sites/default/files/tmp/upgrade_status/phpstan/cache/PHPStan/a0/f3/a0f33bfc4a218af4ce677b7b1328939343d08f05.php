<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/content_translation/src/ContentTranslationHandler.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityChangesDetectionTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/DependencySerializationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867',
   'data' => 
  array (
    'adc3d33ca39ba05eec9fac8ea7bf812f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for content translation handlers.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '50ebd55bb9f59d8c2f36de9c19016888' => 
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
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '8297e58aee7b0794b03d2b3f613889a3' => 
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
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '9f79bf792097f3b0efbc6cefc4855234' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityTypeInterface $entity_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'a2452cf94635906788d3afdbc1b1d4c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides dependency injection friendly methods for serialization.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '8f515f31e3443fc2a9a8986c22e1c6d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of service IDs keyed by property name used for serialization.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '7e8963235e9da33ed0b9a47c5d4cb0cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of entity type IDs keyed by the property name of their storages.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'ebc089e55ccca5ca73ecd1de69f7a439' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '02dad93bdbc90194f505700353526d75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => '__wakeup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'de522f390d98b90f284a7de50056b04a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => '__wakeup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b8c62f30a5639a00f1f08e13285e47e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for \\Drupal\\Core\\StringTranslation\\TranslationInterface.
 *
 * Using this trait will add t() and formatPlural() methods to the class. These
 * must be used for every translatable string, similar to how procedural code
 * must use the global functions t() and \\Drupal::translation()->formatPlural().
 * This allows string extractor tools to find translatable strings.
 *
 * If the class is capable of injecting services from the container, it should
 * inject the \'string_translation\' service and assign it to
 * $this->stringTranslation.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface
 * @see container
 *
 * @ingroup i18n
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '29edca94ce511ebf391599ccdc5390f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '840f94f3b6e92531905f0d6a84883f76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
   * important security information and usage guidelines.
   *
   * In order for strings to be localized, make them available in one of the
   * ways supported by the
   * @link https://www.drupal.org/node/322729 Localization API @endlink. When
   * possible, use the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   * $this->t(). Otherwise create a new
   * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object.
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $args
   *   (optional) An associative array of replacements to make after
   *   translation. Based on the first character of the key, the value is
   *   escaped and/or themed. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   details.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'langcode\' (defaults to the current language): A language code, to
   *     translate to a language other than what is used to display the page.
   *   - \'context\' (defaults to the empty context): The context the source
   *     string belongs to. See the
   *     @link i18n Internationalization topic @endlink for more information
   *     about string contexts.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   An object that, when cast to a string, returns the translated string.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
   *
   * @ingroup sanitization
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 't',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4e142c60b409cec8b687f8f3d4dad0e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a string containing a count of items.
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::formatPlural()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'formatPlural',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c558f22e9342fe60a6b37bfb772364ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of plurals supported by a given language.
   *
   * @see \\Drupal\\locale\\PluralFormulaInterface::getNumberOfPlurals()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'getNumberOfPlurals',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c04517430d07624c1483913028904561' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'getStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b2de3272252af51e40859d671f2a27d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the string translation service to use.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $translation
   *   The string translation service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'setStringTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f4453a3a1592dc14545ac42aab7116f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The type of the entity being translated.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '19c3e517f260548677a908c6fea71d0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Information about the entity type.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '1bc9702600897c4f3ba2e5a8bd89b762' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'fe3522873c6687b70fcdacbe38fda34c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The content translation manager.
   *
   * @var \\Drupal\\content_translation\\ContentTranslationManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'd36d2c34e0c4d7333576f096dfb0b02f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '87d3f76b0f5e15fc5848a45373fda05e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '5c39711a78a8198020271ede075b467e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The array of installed field storage definitions for the entity type, keyed
   * by field name.
   *
   * @var \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'dd6924c504b57ea1c8040a038fe90c48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger service.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'a2c524c48ab2ef357e7380f470ee023b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The date formatter service.
   *
   * @var \\Drupal\\Core\\Datetime\\DateFormatterInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'eb6da806abb6c56a4a5ed6b4081cd6ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Initializes an instance of the content translation controller.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The info array of the given entity type.
   * @param \\Drupal\\Core\\Language\\LanguageManagerInterface $language_manager
   *   The language manager.
   * @param \\Drupal\\content_translation\\ContentTranslationManagerInterface $manager
   *   The content translation manager service.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger service.
   * @param \\Drupal\\Core\\Datetime\\DateFormatterInterface $date_formatter
   *   The date formatter service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    '71dd9fade85941e6e52f067acd1b6718' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'createInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '30c25237edd046b854ca870cf25c18c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
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
    'f3500efe79166ca0fef022b8e2732117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the entity type supports author natively.
   *
   * @return bool
   *   TRUE if metadata is natively supported, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'hasAuthor',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c7f244f06d323e65cc04ba52267f63a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the entity type supports published status natively.
   *
   * @return bool
   *   TRUE if metadata is natively supported, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'hasPublishedStatus',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3a19e1f8486733e53a3f3a2e0e8369b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the entity type supports modification time natively.
   *
   * @return bool
   *   TRUE if metadata is natively supported, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'hasChangedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2912240d593f81e64577adf1afe69d9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the entity type supports creation time natively.
   *
   * @return bool
   *   TRUE if metadata is natively supported, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'hasCreatedTime',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '38a24847e842e22ad97c20b1e5adddd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the field storage definition for translatability support.
   *
   * Checks whether the given field is defined in the field storage definitions
   * and if its definition specifies it as translatable.
   *
   * @param string $field_name
   *   The name of the field.
   *
   * @return bool
   *   TRUE if translatable field storage definition exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'checkFieldStorageDefinitionTranslatability',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cab56d0afe01bc5a68a072672ca3b582' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'retranslate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '92f40a8d8b5d82af9754caa30560f0c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'getTranslationAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9270473f7fb8d8df73a82941229d6041' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'getSourceLangcode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd6588533bb40d9eb9b3dc1fa01bd260e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormAlter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f11d7643007a49ccea49d79d66f05bf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormAlter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2e00ac53bb5f617a337af0acd840a603' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Access\\AccessResultInterface $delete_access */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormAlter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c308e82f25524d127b19ac984fda2ab5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process callback: determines which elements get clue in the form.
   *
   * @see \\Drupal\\content_translation\\ContentTranslationHandler::entityFormAlter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormSharedElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '128d346e5f413fa72927267a2b65db25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityForm $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormSharedElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fe7a98ba019e68dc20f6e7f0cd61720a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormSharedElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6c810509337158ffbf05b60df2daeb42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a clue about the form element translatability.
   *
   * If the given element does not have a #title attribute, the function is
   * recursively applied to child elements.
   *
   * @param array $element
   *   A form element array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'addTranslatabilityClue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9b0071f8b7f984e2b6e19d1a6e57c6ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Entity builder method.
   *
   * @param string $entity_type
   *   The type of the entity.
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity whose form is being built.
   *
   * @see \\Drupal\\content_translation\\ContentTranslationHandler::entityFormAlter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormEntityBuild',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'dd852e1d6a9cbe569b439d64d85c049c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form validation handler for ContentTranslationHandler::entityFormAlter().
   *
   * Validates the submitted content translation metadata.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7d9aa2bf7b3273951c99043ad8f6f125' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form submission handler for ContentTranslationHandler::entityFormAlter().
   *
   * Updates metadata fields, which should be updated only after the validation
   * has run and before the entity is saved.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'eb388a21db149e3d274e4a1eeaf5f12d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityFormInterface $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '123e963a8edf0de7f1562cffceec3c37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9b18fe79e02f40e0c15d960cdaf18f79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form submission handler for ContentTranslationHandler::entityFormAlter().
   *
   * Takes care of the source language change.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormSourceChange',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '60a5aaa2fa54569c11e122edabde99f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form submission handler for ContentTranslationHandler::entityFormAlter().
   *
   * Takes care of entity deletion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7ccac6f2c34851b016c464ce9a48f39c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form submission handler for ContentTranslationHandler::entityFormAlter().
   *
   * Takes care of content translation deletion.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormDeleteTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2358612e57a3eb8ecb62e0b72f6f5297' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityFormInterface $form_object */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormDeleteTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '38b6389d7381d3a061b2c8a281cf81de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\ContentEntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormDeleteTranslation',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7d83bbb9112367a26aba01c95e53936b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the title to be used for the entity form page.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity whose form is being altered.
   *
   * @return string|null
   *   The label of the entity, or NULL if there is no label defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'entityFormTitle',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bd17d188b1f58027e87376b012d76d66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for the owner base field definition.
   *
   * @return int
   *   The user ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\content_translation',
         'uses' => 
        array (
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'dateformatterinterface' => 'Drupal\\Core\\Datetime\\DateFormatterInterface',
          'dependencyserializationtrait' => 'Drupal\\Core\\DependencyInjection\\DependencySerializationTrait',
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'entitychangesdetectiontrait' => 'Drupal\\Core\\Entity\\EntityChangesDetectionTrait',
          'entityhandlerinterface' => 'Drupal\\Core\\Entity\\EntityHandlerInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entitylastinstalledschemarepositoryinterface' => 'Drupal\\Core\\Entity\\EntityLastInstalledSchemaRepositoryInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'languagemanagerinterface' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'user' => 'Drupal\\user\\Entity\\User',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\content_translation\\ContentTranslationHandler',
         'functionName' => 'getDefaultOwnerId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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