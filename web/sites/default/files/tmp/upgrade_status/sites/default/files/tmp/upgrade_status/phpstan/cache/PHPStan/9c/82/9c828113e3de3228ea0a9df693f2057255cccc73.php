<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/Price.php-1624732871',
   'data' => 
  array (
    'bf699c523905dfe2a204d7791ff174e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a value object for monetary values.
 *
 * Use the commerce_price.currency_formatter service to format prices.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
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
    '20014cafdbad1602a28641a2fa20a826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
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
    '875c2ba160ac00af6ee47a88ea87ba65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The currency code.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
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
    'c57cf7a045ed48decc901450430d7ab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Price object.
   *
   * @param string $number
   *   The number.
   * @param string $currency_code
   *   The currency code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
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
    'bc144bd4b4f5fef73f5854678f3ee210' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new price from the given array.
   *
   * @param array $price
   *   The price array, with the "number" and "currency_code" keys.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'fromArray',
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
    '90e71a80003e9e34d27effda708bd866' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the number.
   *
   * @return string
   *   The number.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'getNumber',
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
    '6006d802829497973488cb6cb0c7714f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the currency code.
   *
   * @return string
   *   The currency code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'getCurrencyCode',
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
    '109b206131454166cccb1799eb7d902d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string representation of the price.
   *
   * @return string
   *   The string representation of the price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => '__toString',
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
    'f63de2b9b06ca3925f6abeccae622b9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the array representation of the price.
   *
   * @return array
   *   The array representation of the price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'toArray',
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
    '653606313e0cb9b0ac7ec6949c76e78a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts the current price to the given currency.
   *
   * @param string $currency_code
   *   The currency code.
   * @param string $rate
   *   A currency rate corresponding to the currency code.
   *
   * @return static
   *   The resulting price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'convert',
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
    'a6e6d9621501c95bb9f837c4834c8451' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds the given price to the current price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return static
   *   The resulting price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'add',
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
    '238236680283a66702da33854030dab1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Subtracts the given price from the current price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return static
   *   The resulting price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'subtract',
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
    'ea38f5944e994847f750f9c9cc554529' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Multiplies the current price by the given number.
   *
   * @param string $number
   *   The number.
   *
   * @return static
   *   The resulting price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'multiply',
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
    '7531877d4ff6c068f71c08606ad28952' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Divides the current price by the given number.
   *
   * @param string $number
   *   The number.
   *
   * @return static
   *   The resulting price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'divide',
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
    '199c1219f4658976ac25078199fa084c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares the current price with the given price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return int
   *   0 if both prices are equal, 1 if the first one is greater, -1 otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'compareTo',
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
    '761c91206a0cbb485454b880c258e3c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is positive.
   *
   * @return bool
   *   TRUE if the price is positive, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'isPositive',
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
    '4b44749d34b836a1b73699f733971901' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is negative.
   *
   * @return bool
   *   TRUE if the price is negative, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'isNegative',
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
    '12962d1859f72801190d5f487a67bec2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is zero.
   *
   * @return bool
   *   TRUE if the price is zero, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'isZero',
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
    '0e6c6765129d7712f51c8632e0601cc7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is equivalent to the given price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return bool
   *   TRUE if the prices are equal, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'equals',
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
    '5b679cc2c8af9d9fce896a606488433e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is greater than the given price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return bool
   *   TRUE if the current price is greater than the given price,
   *   FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'greaterThan',
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
    '3597c206bcad9ddef61c6da6b2518069' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is greater than or equal to the given price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return bool
   *   TRUE if the current price is greater than or equal to the given price,
   *   FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'greaterThanOrEqual',
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
    'edd1ff0ce8990e6a8180811b72b15aac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is lesser than the given price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return bool
   *   TRUE if the current price is lesser than the given price,
   *   FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'lessThan',
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
    'ccb2ee9cee86a9f5407a0c82559f5ea9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the current price is lesser than or equal to the given price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   *
   * @return bool
   *   TRUE if the current price is lesser than or equal to the given price,
   *   FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'lessThanOrEqual',
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
    'bb5d1fc1f66c55f12b757fa932068719' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the currency code is in the right format.
   *
   * Serves only as a basic sanity check.
   *
   * @param string $currency_code
   *   The currency code.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the currency code is not in the right format.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'assertCurrencyCodeFormat',
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
    '9b2b35ecdd1fdb1d736afb1fe6b91a44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the two prices have the same currency.
   *
   * @param \\Drupal\\commerce_price\\Price $first_price
   *   The first price.
   * @param \\Drupal\\commerce_price\\Price $second_price
   *   The second price.
   *
   * @throws \\Drupal\\commerce_price\\Exception\\CurrencyMismatchException
   *   Thrown when the prices do not have the same currency.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
          'currencymismatchexception' => 'Drupal\\commerce_price\\Exception\\CurrencyMismatchException',
        ),
         'className' => 'Drupal\\commerce_price\\Price',
         'functionName' => 'assertSameCurrency',
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