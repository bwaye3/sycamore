<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/better_exposed_filters/src/Plugin/better_exposed_filters/sort/SortWidgetBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867',
   'data' => 
  array (
    'ec335572cad11cec6d5bda65f78d5c08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for Better exposed pager widget plugins.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '8bea470259853062f052b59f34a595eb' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '8ff7f526969cea5a5b811583eebbca39' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '3958e97d025a7266a099df19e571618d' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '343b6d76c0d8617b0847a37b8844807f' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '2fc4af51fc35b8107fa23fcaf80fe3d0' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '822c01ff656b0f4f0b210b040a5dbb96' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '87146b7020996649b9c98f3539ab63fd' => 
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
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '32ccf195783e502f1d8cd321ff90fa26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * List of available exposed sort form element keys.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '0718ed0695e172a98eb128805f4c37f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '1408eec173baf6fbf8569288f32c4f53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    'f12686d9dfaca6b3483dc1a13d26827a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '8429d675ab5252d3340138252eed10bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
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
    '1c5349d69dd118bae845fc140d377877' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unpacks sort_by and sort_order from the sort_bef_combine element.
   *
   * @param array $form
   *   An associative array containing the structure of the form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort',
         'uses' => 
        array (
          'betterexposedfiltershelper' => 'Drupal\\better_exposed_filters\\BetterExposedFiltersHelper',
          'betterexposedfilterswidgetbase' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetBase',
          'betterexposedfilterswidgetinterface' => 'Drupal\\better_exposed_filters\\Plugin\\BetterExposedFiltersWidgetInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
        ),
         'className' => 'Drupal\\better_exposed_filters\\Plugin\\better_exposed_filters\\sort\\SortWidgetBase',
         'functionName' => 'sortCombineSubmitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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