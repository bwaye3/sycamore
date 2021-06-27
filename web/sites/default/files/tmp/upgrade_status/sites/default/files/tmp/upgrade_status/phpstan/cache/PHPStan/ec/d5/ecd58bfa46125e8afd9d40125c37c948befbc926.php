<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/intl/src/Formatter/NumberFormatter.php-1621239958,/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/intl/src/Formatter/FormatterTrait.php-1621239958',
   'data' => 
  array (
    '84c485a57d8c5dc04208e08e92f46b6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Formats numbers using locale-specific patterns.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '6b52bc8fc5d8eda2f6026ca48f26116c' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '2a2a10e1c98224698f5aeb9131212173' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '43b4b99bedac913b67904c8634c7b492' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '8ca95f036b67abf1cc6a9fe9e5156831' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    'fd6e13d61efb082c6c847eceba2e4229' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '045476e56c161993295de4673c35dddd' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '1b3fd2b886129311d6afe8aeb34b1c5b' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '9d0979e3c91273947dcb1b88dd5c4fd7' => 
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
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '1426d9b188815e7d16dd2c25c738f772' => 
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
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    'e0cde523a14909522103745a724f3f01' => 
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
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '73b21247fd026a61945225f82d4b1b7e' => 
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
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    'fa771317ceeda8af94661f0211aa32c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a NumberFormatter instance.
     *
     * @param NumberFormatRepositoryInterface $numberFormatRepository The number format repository.
     * @param array                           $defaultOptions         The default options.
     *
     * @throws \\InvalidArgumentException
     * @throws \\RuntimeException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    'bbc5a317d783007a75cf63585d93e103' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    'b1cbbf05b88c0afa3e75bd0769b311f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '3844cf1eb3fc34b5f30712c9d3ff6cac' => 
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
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    'cc1c56807c788b74796df5a480960684' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    '65feb93ab6c33b94833f2b7432c99854' => 
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
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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
    'f6f509a066c5620929d8b2389981f119' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritdoc}
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
          'calculator' => 'CommerceGuys\\Intl\\Calculator',
          'invalidargumentexception' => 'CommerceGuys\\Intl\\Exception\\InvalidArgumentException',
          'numberformat' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormat',
          'numberformatrepositoryinterface' => 'CommerceGuys\\Intl\\NumberFormat\\NumberFormatRepositoryInterface',
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\NumberFormatter',
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