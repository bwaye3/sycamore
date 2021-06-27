<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/TranslationManager.php-1624732867',
   'data' => 
  array (
    'c8c77331dc8fbddfd9d7205192e42e24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a chained translation implementation combining multiple translators.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    'd1fe21ba7e747766624236e441e4e936' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An unsorted array of arrays of active translators.
   *
   * An associative array. The keys are integers that indicate priority. Values
   * are arrays of TranslatorInterface objects.
   *
   * @var \\Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface[][]
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationManager::addTranslator()
   * @see \\Drupal\\Core\\StringTranslation\\TranslationManager::sortTranslators()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    '6434e250d417203dc4c270f16694c473' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of translators, sorted by priority.
   *
   * If this is NULL a rebuild will be triggered.
   *
   * @var null|\\Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface[]
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationManager::addTranslator()
   * @see \\Drupal\\Core\\StringTranslation\\TranslationManager::sortTranslators()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    '2c1f38b885bdbfe28be9a3e9345362e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default langcode used in translations.
   *
   * @var string
   *   A language code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    'b33cd567744343adcc57f5ff095d8e67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a TranslationManager object.
   *
   * @param \\Drupal\\Core\\Language\\LanguageDefault $default_language
   *   The default language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    'b0a8774ede736cbf3db4ea36c2869a69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Appends a translation system to the translation chain.
   *
   * @param \\Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface $translator
   *   The translation interface to be appended to the translation chain.
   * @param int $priority
   *   The priority of the logger being added.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
         'functionName' => 'addTranslator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e357a0f65b279bd4071cfa305db24fb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sorts translators according to priority.
   *
   * @return \\Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface[]
   *   A sorted array of translator objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
         'functionName' => 'sortTranslators',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fb8e71c2465e532666075af0000dc472' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    'acd3fe327a195063b168963dad0c3c09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
         'functionName' => 'translate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b5b80205cc7ffa735a28126591ab5c49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
         'functionName' => 'translateString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '541c4589e9535bb17485d985493eac31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $options
   *   An associative array of additional options, with the following elements:
   *   - \'langcode\': The language code to translate to a language other than
   *      what is used to display the page.
   *   - \'context\': The context the source string belongs to.
   *
   * @return string
   *   The translated string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
         'functionName' => 'doTranslate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '85284b02c71bbf39b7fced44b4c4a63b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    'aff00c34e387052fe38cad54e8bad989' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the default langcode.
   *
   * @param string $langcode
   *   A language code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
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
    '4ad90cc112e08b7c5207df7253186433' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'languagedefault' => 'Drupal\\Core\\Language\\LanguageDefault',
          'translatorinterface' => 'Drupal\\Core\\StringTranslation\\Translator\\TranslatorInterface',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslationManager',
         'functionName' => 'reset',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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