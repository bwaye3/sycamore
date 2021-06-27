<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Block/BlockBase.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Block/BlockPluginTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Messenger/MessengerTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/PluginWithFormsTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/ContextAwarePluginAssignmentTrait.php-1624732867',
   'data' => 
  array (
    '7b2ecbe55808338af6145111353f03d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a base block implementation that most blocks plugins will extend.
 *
 * This abstract class provides the generic block configuration form, default
 * block settings, and handling for general user-defined block visibility
 * settings.
 *
 * @ingroup block_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'contextawarepluginassignmenttrait' => 'Drupal\\Core\\Plugin\\ContextAwarePluginAssignmentTrait',
          'contextawarepluginbase' => 'Drupal\\Core\\Plugin\\ContextAwarePluginBase',
          'pluginwithformsinterface' => 'Drupal\\Core\\Plugin\\PluginWithFormsInterface',
          'previewfallbackinterface' => 'Drupal\\Core\\Render\\PreviewFallbackInterface',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'dd1b729da7bfcd7a454879aeb820a72e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the base implementation of a block plugin.
 *
 * @internal
 *   This trait is used internally by the block system. Block plugins should
 *   extend \\Drupal\\Core\\Block\\BlockBase.
 *
 * @see \\Drupal\\Core\\Block\\BlockBase
 * @see \\Drupal\\Core\\Block\\BlockPluginInterface
 *
 * @ingroup block_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '3cdfea81434d6957cd8f3f59cf10ded0' => 
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
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '054f46391e413a5a4fda3328b7689462' => 
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
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'eed172b5208dbc9500344eadecc723fc' => 
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
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '40d01bbe21a52fd504d90b693255f0ec' => 
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
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'b16857ffaf25c34a43d9858164098c54' => 
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
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'c13f59dc42019a633958b6e19538dfb5' => 
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
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '397196f2b1b9a536c993ee1084172129' => 
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
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '0227c1d71fbe659a00523ccf827f8e49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for the messenger service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '4cfb8be025f79810b6738c0ae125db4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '862486bc75a3863fe1c2a91aea655e15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the messenger.
   *
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setMessenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '679d9d6a361179599f6ea42fff82e917' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the messenger.
   *
   * @return \\Drupal\\Core\\Messenger\\MessengerInterface
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'messenger',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd83c9e0ba488c2acbe6e708d36cc3eed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait with typical behavior for plugins which have forms.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '9d52cd8d55a778d4e18ec1df1b1ebb4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getFormClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7d70047b09af8de2f0e6ae6a3287b622' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'hasFormClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5d4cfc12315f5e06e3a444ab3fbfe33d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The transliteration service.
   *
   * @var \\Drupal\\Component\\Transliteration\\TransliterationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'c63eff3d83c43daa29f3fcd44877e96e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'a96ccfef7e07ce6f401c0909e96c44c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '4ed473db99873e1d2da5b8d3dc14afea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'eb425eb2c86a13d311a2266476557577' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7149a3aedcb532d48c35ef770b8fd5e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns generic default configuration for block plugins.
   *
   * @return array
   *   An associative array with the default configuration.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'baseConfigurationDefaults',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a2a9c38d99b48db2e2958acc051fad7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'defaultConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c82f0ed19518cb98d34d3d8b7f2a3772' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setConfigurationValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '88291bee1a839cec8f1aeda6d0bde4e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '39bf68bc478d2f3f344eddb4b4b8b4aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'a177ef8f0cc6ccf8731c359d11158f0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Indicates whether the block should be shown.
   *
   * Blocks with specific access checking should override this method rather
   * than access(), in order to avoid repeating the handling of the
   * $return_as_object argument.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The user session for which to check access.
   *
   * @return \\Drupal\\Core\\Access\\AccessResult
   *   The access result.
   *
   * @see self::access()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockAccess',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e05f79beb102f1ac76d410bc21dc67f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Creates a generic configuration form for all block types. Individual
   * block plugins can add elements to this form by overriding
   * BlockBase::blockForm(). Most block plugins should not override this
   * method unless they need to alter the generic form elements.
   *
   * @see \\Drupal\\Core\\Block\\BlockBase::blockForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'buildConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0bea5167f142fe2220e598221e7dc564' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ea2d78305d583acca0eb0e75411c81a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Most block plugins should not override this method. To add validation
   * for a specific block type, override BlockBase::blockValidate().
   *
   * @see \\Drupal\\Core\\Block\\BlockBase::blockValidate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'validateConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5214817d6f6c1591ab2369a519000466' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockValidate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a68c3a28ce940c7346e8482fe0c15c30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Most block plugins should not override this method. To add submission
   * handling for a specific block type, override BlockBase::blockSubmit().
   *
   * @see \\Drupal\\Core\\Block\\BlockBase::blockSubmit()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'submitConfigurationForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fa42499aa8ea660ce7c39842df37a3db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'blockSubmit',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '10bfbe3dd13e4d06f1984b32613fc438' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getMachineNameSuggestion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '09671e68c05a48379bae7d303687cd4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'getPreviewFallbackString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a0d399301d3a6d39aaea74b51b777254' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the transliteration service.
   *
   * @return \\Drupal\\Component\\Transliteration\\TransliterationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'transliteration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '38def20f1aa0951478de9b8a971d14b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the transliteration service.
   *
   * @param \\Drupal\\Component\\Transliteration\\TransliterationInterface $transliteration
   *   The transliteration service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Block',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'pluginwithformstrait' => 'Drupal\\Core\\Plugin\\PluginWithFormsTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'setTransliteration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4b7ca6267ff327a366b79ee89ad96a83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Handles context assignments for context-aware plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    'd66f88a37da54734ba61fcae51f624cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures the t() method is available.
   *
   * @see \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
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
    '255d7192d7eb4bd3cbd98abb8b546f3c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the context handler.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'contextHandler',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c301f63e2c703a3ce46719e45d940486' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a form element for assigning a context to a given slot.
   *
   * @param \\Drupal\\Core\\Plugin\\ContextAwarePluginInterface $plugin
   *   The context-aware plugin.
   * @param \\Drupal\\Component\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of contexts.
   *
   * @return array
   *   A form element for assigning context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Block\\BlockBase',
         'functionName' => 'addContextAssignmentElement',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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