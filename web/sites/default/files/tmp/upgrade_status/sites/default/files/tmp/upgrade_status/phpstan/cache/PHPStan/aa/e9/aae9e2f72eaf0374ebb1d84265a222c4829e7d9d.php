<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Language/LanguageManagerInterface.php-1624732867',
   'data' => 
  array (
    '6615bfce8967a63bb93e5c025e42ad1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Common interface for the language manager service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
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
    'de4e210f5d84b3e9673694e21841eefc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether or not the site has more than one language added.
   *
   * @return bool
   *   TRUE if more than one language is added, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'isMultilingual',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '35c379f9d415a5a44d09cc31c4453baa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of the available language types.
   *
   * @return array
   *   An array of language type machine names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getLanguageTypes',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '53caf425892461fee52b7b8fcecf753e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns information about all defined language types.
   *
   * @return array
   *   An associative array of language type information arrays keyed by
   *   language type machine name, in the format of
   *   hook_language_types_info(). In some implementing classes, this is based
   *   on information from hook_language_types_info() and
   *   hook_language_types_info_alter().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getDefinedLanguageTypesInfo',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e22c225fab6a7b9a37734a3db07303c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current language for the given type.
   *
   * @param string $type
   *   (optional) The language type; e.g., the interface or the content
   *   language. Defaults to
   *   \\Drupal\\Core\\Language\\LanguageInterface::TYPE_INTERFACE.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface
   *   The current language object for the given type of language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getCurrentLanguage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '21e66dfe13a204191a1f3468a5ee0076' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the given language type or all types if none specified.
   *
   * @param string|null $type
   *   (optional) The language type to reset as a string, e.g.,
   *   LanguageInterface::TYPE_INTERFACE, or NULL to reset all language types.
   *   Defaults to NULL.
   *
   * @return $this
   *   The language manager that has been reset.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
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
    'c92782c75b5f3cff1a83df8dd6b48dac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a language object representing the site\'s default language.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface
   *   A language object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getDefaultLanguage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6fb6977b7a2095e3d685ca155470f7dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of languages set up on the site.
   *
   * @param int $flags
   *   (optional) Specifies the state of the languages that have to be returned.
   *   It can be: LanguageInterface::STATE_CONFIGURABLE,
   *   LanguageInterface::STATE_LOCKED, or LanguageInterface::STATE_ALL.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface[]
   *   An associative array of languages, keyed by the language code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
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
    'e357b64db0449af7379cc27976045a02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of languages set up on the site in their native form.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface[]
   *   An associative array of languages, keyed by the language code, ordered
   *   by weight ascending and name ascending.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getNativeLanguages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f893cfb6663d6e1062a5d94fa9ca3a60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a language object from the given language code.
   *
   * @param string $langcode
   *   The language code.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface|null
   *   A fully-populated language object or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getLanguage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c82ef2ed81a51462c002747cb540a654' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Produced the printed name for a language for display.
   *
   * @param string $langcode
   *   The language code.
   *
   * @return string
   *   The printed name of the language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getLanguageName',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0b8a5b4224590085558a6b745c989180' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a list of the default locked languages.
   *
   * @param int $weight
   *   (optional) An integer value that is used as the start value for the
   *   weights of the locked languages.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface[]
   *   An array of language objects.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getDefaultLockedLanguages',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fd9e1415c026e9983bd6b0b6adf6bca9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a language is locked.
   *
   * @param string $langcode
   *   The language code.
   *
   * @return bool
   *   Returns whether the language is locked.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'isLanguageLocked',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2b9dd0b71d451706e2f8110c67d446b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language fallback candidates for a given context.
   *
   * @param array $context
   *   (optional) An associative array of data that can be useful to determine
   *   the fallback sequence. The following keys are used in core:
   *   - langcode: Language code of the desired language.
   *   - operation: The name of the operation indicating the context where
   *     language fallback is being applied. The following operations are
   *     defined in core, but more may be defined in contributed modules:
   *       - entity_view: Invoked when an entity is about to be displayed.
   *         The data key contains the loaded entity.
   *       - views_query: Invoked when a field based views query is performed.
   *         The data key contains a reference to the field object.
   *       - locale_lookup: Invoked when a string translation was not found.
   *         The data key contains the source string.
   *   - data: A data structure that makes sense in the provided
   *     context, see above.
   *
   * @return array
   *   An array of language codes sorted by priority: first values should be
   *   tried first.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getFallbackCandidates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f7cef20c6b4e03ea04f754cd98de4582' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language switch links for the given language type.
   *
   * @param string $type
   *   The language type.
   * @param \\Drupal\\Core\\Url $url
   *   The URL the switch links will be relative to.
   *
   * @return array
   *   A keyed array of links ready to be themed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getLanguageSwitchLinks',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5b5563da2ae1a8f1aa7f0146f940735f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the configuration override language.
   *
   * @param \\Drupal\\Core\\Language\\LanguageInterface $language
   *   The language to override configuration with.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'setConfigOverrideLanguage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '84d02d92a289a9e1d8c7f87b3d40aa14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current configuration override language.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface
   *   The current configuration override language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getConfigOverrideLanguage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd4979a34aeb6801a186de95dcf6348b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Some common languages with their English and native names.
   *
   * Language codes are defined by the W3C language tags document for
   * interoperability. Language codes typically have a language and, optionally,
   * a script or regional variant name. See:
   * http://www.w3.org/International/articles/language-tags/ for more
   * information.
   *
   * @return array
   *   An array of language code to language name information. Language name
   *   information itself is an array of English and native names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Language',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\Core\\Language\\LanguageManagerInterface',
         'functionName' => 'getStandardLanguageList',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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