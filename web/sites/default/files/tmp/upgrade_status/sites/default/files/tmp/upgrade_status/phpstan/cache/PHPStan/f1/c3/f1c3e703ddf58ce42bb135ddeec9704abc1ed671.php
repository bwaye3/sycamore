<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/intl/src/Formatter/CurrencyFormatter.php-1621239958,/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/intl/src/Formatter/FormatterTrait.php-1621239958',
   'data' => 
  array (
    'e5ae9928cdc292a649e06c6a4007573b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Formats currency amounts using locale-specific patterns.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '27935afe3f391f1e36005463e8e7b4a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The parsed number patterns, keyed by locale and style.
     *
     * @var ParsedPattern[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    'c726256fc5063e57a7d4554c766a64b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Localized digits.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '1e7dccc72f6b6fd7372134a0d99f055f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Formats the number according to the number format.
     *
     * @param string       $number       The number.
     * @param NumberFormat $numberFormat The number format.
     *
     * @return string The formatted number.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'formatNumber',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6ac9dee6ec6e3f822d3ff47ddfeb92a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Localizes the number according to the number format.
     *
     * Both the digits and the symbols are replaced
     * with their localized equivalents.
     *
     * @param string       $number       The number.
     * @param NumberFormat $numberFormat The number format.
     *
     * @return string The localized number.
     *
     * @see http://cldr.unicode.org/translation/number-symbols
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'localizeNumber',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2c5d6fd984bc8ab7aea934174e780fdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parses the number according to the number format.
     *
     * Both the digits and the symbols are replaced
     * with their non-localized equivalents.
     *
     * @param string       $number       The number.
     * @param NumberFormat $numberFormat The number format.
     *
     * @return string The localized number.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'parseNumber',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2a45d1e8d4b31cdd991728caf4faaccb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the pattern for the provided number format.
     *
     * @param NumberFormat $numberFormat The number format.
     * @param string       $style        The formatter style.
     *
     * @return ParsedPattern
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'getParsedPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ce6fbd087f4a76764c0a1079d3ead944' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the available patterns for the provided number format.
     *
     * @param NumberFormat $numberFormat The number format.
     *
     * @return string[] The patterns, keyed by style.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'getAvailablePatterns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '71c8cd55d020125bed7f8709f6911fab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the localized symbols for the provided number format.
     *
     * Used to localize the number in localizeNumber().
     *
     * @param NumberFormat $numberFormat The number format.
     *
     * @return array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'getLocalizedSymbols',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '66e8cf66c7e99dd01455b98eeb6b228b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The number format repository.
     *
     * @var NumberFormatRepositoryInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '4782f33ae6e1c75154ace9f090680213' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The currency repository.
     *
     * @var CurrencyRepositoryInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '033903834969d2d8715321277c1b5525' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The default locale.
     *
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '5a5770b3423da8dcdbdd0e9cf9f7008c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The loaded number formats.
     *
     * @var NumberFormat[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '04a9b62689a13a532d30e7b4dad4b6b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The loaded currencies.
     *
     * @var Currency[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '48c17bbabec00cad02507ec709c8cc5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The default options.
     *
     * @var array
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '5cc97d61b3a0c4fcc29dc05198d00f17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a CurrencyFormatter instance.
     *
     * @param NumberFormatRepositoryInterface $numberFormatRepository The number format repository.
     * @param CurrencyRepositoryInterface     $currencyRepository     The currency repository.
     * @param array                           $defaultOptions         The default options.
     *
     * @throws \\RuntimeException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
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
    '01635e8ab1ec1f775ef5ef1a3ceecea6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'format',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '86c40bcaf85077273d215f75bd4e5939' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'parse',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1d4854a3d92fca88c7e40f1fedbcc3ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the number format for the provided locale.
     *
     * @param string $locale The locale.
     *
     * @return NumberFormat
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'getNumberFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ef0fb3372bc6c3c41d6b3a246f410a88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the currency for the provided currency code and locale.
     *
     * @param string $currencyCode The currency code.
     * @param string $locale       The locale.
     *
     * @return Currency
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'getCurrency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '743abb0f9ae1cce4fa0b38c3e4becf8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'getAvailablePatterns',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3f6b5235b10e06fb54d8031a8e7c7e38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Validates the provided options.
     *
     * Ensures the absence of unknown keys, correct data types and values.
     *
     * @param array $options The options.
     *
     * @throws \\InvalidArgumentException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'validateOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '24b7e980e9ca67f2a3c44e569a2386cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'currency' => 'CommerceGuys\\Intl\\Currency\\Currency',
          'currencyrepositoryinterface' => 'CommerceGuys\\Intl\\Currency\\CurrencyRepositoryInterface',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'unknowncurrencyexception' => 'CommerceGuys\\Intl\\Exception\\UnknownCurrencyException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatter',
         'functionName' => 'getLocalizedSymbols',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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