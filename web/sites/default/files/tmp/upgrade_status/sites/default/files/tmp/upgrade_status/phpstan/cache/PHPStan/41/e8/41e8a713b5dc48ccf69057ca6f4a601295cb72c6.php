<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/addressing/src/Locale.php-1621238721',
   'data' => 
  array (
    '38c51fd2527b2bf8859424eb644f5982' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides locale handling logic.
 *
 * Copied from commerceguys/intl to avoid a dependency.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
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
    '3867fe7961bfdfd7bcb2e66ca21e778f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Locale aliases.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
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
    '4566faccf8f8d181a2c0c3747474b8b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Locale parents.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
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
    'd6abfd0bd8d390d27cbcd9163f308c3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether two locales match.
     *
     * @param string $firstLocale  The first locale.
     * @param string $secondLocale The second locale.
     *
     * @return bool TRUE if the locales match, FALSE otherwise.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
         'functionName' => 'match',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8bb4335e5c75ca232bf19d9d9cda7ece' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether two locales have at least one common candidate.
     *
     * For example, "de" and "de-AT" will match because they both have
     * "de" in common. This is useful for partial locale matching.
     *
     * @see self::getCandidates
     *
     * @param string $firstLocale  The first locale.
     * @param string $secondLocale The second locale.
     *
     * @return bool TRUE if there is a common candidate, FALSE otherwise.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
         'functionName' => 'matchCandidates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7ca8c9d02cc834795d1d271093888141' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Resolves the locale from the available locales.
     *
     * Takes all locale candidates for the requested locale
     * and fallback locale, searches for them in the available
     * locale list. The first found locale is returned.
     * If no candidate is found in the list, an exception is thrown.
     *
     * @see self::getCandidates
     *
     * @param array  $availableLocales The available locales.
     * @param string $locale           The requested locale (i.e. fr-FR).
     * @param string $fallbackLocale   A fallback locale (i.e "en").
     *
     * @return string
     *
     * @throws UnknownLocaleException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
         'functionName' => 'resolve',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ceb22137702edb9a804cc1886069e7e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Canonicalizes the given locale.
     *
     * Standardizes separators and capitalization, turning
     * a locale such as "sr_rs_latn" into "sr-RS-Latn".
     *
     * @param string $locale The locale.
     *
     * @return string The canonicalized locale.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
         'functionName' => 'canonicalize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8320ed8db8b152546cb38dd3398e7c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets locale candidates.
     *
     * For example, "bs-Cyrl-BA" has the following candidates:
     * 1) bs-Cyrl-BA
     * 2) bs-Cyrl
     * 3) bs
     *
     * The locale is de-aliased, e.g. the candidates for "sh" are:
     * 1) sr-Latn
     * 2) sr
     *
     * @param string $locale         The locale (i.e. fr-FR).
     * @param string $fallbackLocale A fallback locale (i.e "en").
     *
     * @return array An array of all variants of a locale.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
         'functionName' => 'getCandidates',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '516a7f7f503330edc521e3c9c69f702e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the parent for the given locale.
     *
     * @param string $locale
     *   The locale.
     *
     * @return string|null
     *   The parent, or null if none found.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
         'functionName' => 'getParent',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '732159f012b0701f74ce48f0251d977e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Replaces a locale alias with the real locale.
     *
     * For example, "zh-CN" is replaced with "zh-Hans-CN".
     *
     * @param string $locale The locale.
     *
     * @return string The locale.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Addressing',
         'uses' => 
        array (
          'unknownlocaleexception' => 'CommerceGuys\\Addressing\\Exception\\UnknownLocaleException',
        ),
         'className' => 'CommerceGuys\\Addressing\\Locale',
         'functionName' => 'replaceAlias',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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