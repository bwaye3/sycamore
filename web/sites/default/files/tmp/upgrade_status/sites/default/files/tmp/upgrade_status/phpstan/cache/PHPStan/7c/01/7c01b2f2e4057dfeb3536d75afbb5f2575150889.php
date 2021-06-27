<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/better_exposed_filters/src/Plugin/better_exposed_filters/filter/FilterWidgetBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867',
   'data' => 
  array (
    '0c7997a460c69b78dc5257ae47b2b3a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for Better exposed filters widget plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    '6573bdcb05733ea814f8cdc972cde81a' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    '28cbe15451802f85ef1dfe0d831a5d14' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    '8f49bafbc6e06cfdc06fb3f60cb6de88' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    'c6935dbadca11f962e963c6ac9697b93' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    '55af0945cbae0bb289a57b2b22e89855' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    'eaabe260fa2ac20959132040ba3fc230' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    'ae4618787b6c09190357845dc5d49a52' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    '38a78d8160c9205918eced820ff0bfd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'isApplicable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5a01cbb5ca360bcd9dda6ba20e5b9ec1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\Plugin\\views\\filter\\FilterPluginBase $filter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'isApplicable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '804eeb857cedfc5808b2d5940061ecd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    'd7b7053a5134aac67d4068f6f3300fa1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    '66133e9177434acdacf753808ea79407' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\Plugin\\views\\filter\\FilterPluginBase $filter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
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
    '1dff8aa491f9fc6cfeba2a5f3169e6f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'exposedFormAlter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '650d6ecd99272651c4514c3ee56dcb5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\Plugin\\views\\filter\\FilterPluginBase $filter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'exposedFormAlter',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a7fb18d2fd837f89e1b86aec7c24e975' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sorts the options for a given form element alphabetically.
   *
   * @param array $element
   *   The form element.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   Form state.
   *
   * @return array
   *   The altered element.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'processSortedOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cdca57369c21417dec33e4a7a25f97ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to get the unique identifier for the exposed filter.
   *
   * Takes into account grouped filters with custom identifiers.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'getExposedFilterFieldId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd1b3ff9d7c2b9cceb546ff7cc01455ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\Plugin\\views\\filter\\FilterPluginBase $filter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'getExposedFilterFieldId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1c251895a22228f2e278b60624db7c19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to get the widget type of the exposed filter.
   *
   * @return string
   *   The type of the form render element use for the exposed filter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'getExposedFilterWidgetType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bb9cd64e604afbcde8418d86c848e2c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\Plugin\\views\\filter\\FilterPluginBase $filter */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstate' => 'Drupal\\Core\\Form\\FormState',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'numericfilter' => 'Drupal\\views\\Plugin\\views\\filter\\NumericFilter',
          'stringfilter' => 'Drupal\\views\\Plugin\\views\\filter\\StringFilter',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\filter\\FilterWidgetBase',
         'functionName' => 'getExposedFilterWidgetType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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