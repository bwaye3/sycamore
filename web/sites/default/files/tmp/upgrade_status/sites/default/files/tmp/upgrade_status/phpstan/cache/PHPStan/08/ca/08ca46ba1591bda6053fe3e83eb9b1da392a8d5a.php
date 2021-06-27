<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/commerceguys/intl/src/Formatter/CurrencyFormatterInterface.php-1621239958',
   'data' => 
  array (
    'ffa7ffcb8c6e30e22dd04f62fe108319' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Formats a currency amount.
     *
     * Supported options:
     * - locale:                  The locale. Default: \'en\'.
     * - use_grouping:            Whether to use grouping separators,
     *                            such as thousands separators.
     *                            Default: true.
     * - minimum_fraction_digits: Minimum fraction digits.
     * - maximum_fraction_digits: Minimum fraction digits.
     * - rounding_mode:           The rounding mode.
     *                            A PHP_ROUND_ constant or \'none\' to skip
     *                            rounding. Default: PHP_ROUND_HALF_UP.
     * - style:                   The style.
     *                            One of: \'standard\', \'accounting\'.
     *                            Default: \'standard\'.
     * - currency_display:        How the currency should be displayed.
     *                            One of: \'code\', \'symbol\', \'none\'.
     *                            Default: \'symbol\'.
     *
     * Both minimum_fraction_digits and maximum_fraction_digits default
     * to the currency\'s number of fraction digits.
     *
     * @param string $number       The number.
     * @param string $currencyCode The currency code.
     * @param array  $options      The formatting options.
     *
     * @return string The formatted number.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
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
    'b9984bd6327a469380b306d3839af775' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parses a formatted currency amount.
     *
     * Commonly used in input widgets where the end-user might input
     * a number using digits and symbols common to their locale.
     *
     * Supported options:
     * - locale: The locale. Default: \'en\'.
     *
     * @param string $number       The formatted number.
     * @param string $currencyCode The currency code.
     * @param array  $options      The parsing options.
     *
     * @return string|false The parsed number or FALSE on error.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'CommerceGuys\\Intl\\Formatter',
         'uses' => 
        array (
        ),
         'className' => 'CommerceGuys\\Intl\\Formatter\\CurrencyFormatterInterface',
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
  ),
));