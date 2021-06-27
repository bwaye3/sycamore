<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/LegacyNumberFormatter.php-1624732871',
   'data' => 
  array (
    '004e86fc645ddb30863979a4b34c9b04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a legacy number formatter for the deprecated NumberFormatterFactory.
 *
 * Wraps the new CurrencyFormatter for compatibility with old code.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
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
    '9b82dbb47da01d6b241f32423fc7871a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The currency formatter.
   *
   * @var \\CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
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
    'e6334eb4b4da33c9f78dcef70e33188d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The formatting options.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
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
    '8c1cd024c3d5d3874a2515043406cb3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new LegacyNumberFormatter object.
   *
   * @param \\CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface $currency_formatter
   *   The currency formatter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
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
    '90aca4f4e616121fa7c82d3fd100eb96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a number.
   *
   * @param string $number
   *   The number.
   *
   * @return string
   *   The formatted number
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
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
    '7918b3c59db16976c658f3fd8b3e49e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a currency amount.
   *
   * @param string $number
   *   The number.
   * @param \\Drupal\\commerce_price\\Entity\\CurrencyInterface $currency
   *   The currency.
   *
   * @return string
   *   The formatted currency amount.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
         'functionName' => 'formatCurrency',
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
    'b87926a2ce6f95f297012bc809fc518d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parses a formatted number.
   *
   * @param string $number
   *   The formatted number.
   *
   * @return string|false
   *   The parsed number, or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
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
    '77c6b87f6fd976d484404a4d0f4b99b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parses a formatted currency amount.
   *
   * @param string $number
   *   The formatted number.
   * @param \\Drupal\\commerce_price\\Entity\\CurrencyInterface $currency
   *   The currency.
   *
   * @return string|false
   *   The parsed currency amount, or FALSE on failure.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
         'functionName' => 'parseCurrency',
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
    'fa534a683f0c245a15a3f65419c71b5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the minimum number of fraction digits.
   *
   * @param int $minimum_fraction_digits
   *   The minimum number of fraction digits.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
         'functionName' => 'setMinimumFractionDigits',
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
    '595376ef39d705aae5846a60f826add7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the maximum number of fraction digits.
   *
   * @param int $maximum_fraction_digits
   *   The maximum number of fraction digits.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
         'functionName' => 'setMaximumFractionDigits',
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
    '316ec3ea87962b5bb3aa816f3cd6d217' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether grouping is used.
   *
   * @param bool $grouping_used
   *   Whether grouping is used.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
         'functionName' => 'setGroupingUsed',
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
    '91e0796000a2c779c1d245eef02c2ff5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the currency display.
   *
   * Allowed values: \'symbol\', \'code\', \'none\'.
   *
   * @param string $currency_display
   *   The currency display.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencyformatterinterface' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
          'currencyinterface' => 'Drupal\\commerce_price\\Entity\\CurrencyInterface',
        ),
         'className' => 'Drupal\\commerce_price\\LegacyNumberFormatter',
         'functionName' => 'setCurrencyDisplay',
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