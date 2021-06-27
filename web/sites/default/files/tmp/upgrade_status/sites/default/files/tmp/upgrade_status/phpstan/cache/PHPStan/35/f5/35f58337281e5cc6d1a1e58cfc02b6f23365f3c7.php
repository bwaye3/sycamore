<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/Calculator.php-1624732871',
   'data' => 
  array (
    '71f77ab676bc27543727066defd76e31' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helpers for bcmath-based arithmetic.
 *
 * The bcmath extension provides support for arbitrary precision arithmetic,
 * which does not suffer from the precision loses that make floating point
 * arithmetic unsafe for eCommerce.
 *
 * Important: All numbers must be passed as strings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
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
    '7d8a7004ae85f4c392d4eb72920e5668' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds the second number to the first number.
   *
   * @param string $first_number
   *   The first number.
   * @param string $second_number
   *   The second number.
   * @param int $scale
   *   The maximum number of digits after the decimal place.
   *   Any digit after $scale will be truncated.
   *
   * @return string
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
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
    'a76e944d141356da5e6b1488877cf233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Subtracts the second number from the first number.
   *
   * @param string $first_number
   *   The first number.
   * @param string $second_number
   *   The second number.
   * @param int $scale
   *   The maximum number of digits after the decimal place.
   *   Any digit after $scale will be truncated.
   *
   * @return string
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
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
    '7dbff4b490c27851db938bbf377ccd38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Multiplies the first number by the second number.
   *
   * @param string $first_number
   *   The first number.
   * @param string $second_number
   *   The second number.
   * @param int $scale
   *   The maximum number of digits after the decimal place.
   *   Any digit after $scale will be truncated.
   *
   * @return string
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
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
    'a9a53782f05e14c1680e2ce394de3a97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Divides the first number by the second number.
   *
   * @param string $first_number
   *   The first number.
   * @param string $second_number
   *   The second number.
   * @param int $scale
   *   The maximum number of digits after the decimal place.
   *   Any digit after $scale will be truncated.
   *
   * @return string
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
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
    'c03918cb2261bc853474c992c95e6c05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates the next highest whole value of a number.
   *
   * @param string $number
   *   A numeric string value.
   *
   * @return string
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
         'functionName' => 'ceil',
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
    'b94651e44787c46bd89eb3ee1bbef2d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates the next lowest whole value of a number.
   *
   * @param string $number
   *   The number.
   *
   * @return string
   *   The result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
         'functionName' => 'floor',
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
    '3c97208e8c9065215da8c6c99c6ca8b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Rounds the given number.
   *
   * Replicates PHP\'s support for rounding to the nearest even/odd number
   * even if that number is decimal ($precision > 0).
   *
   * @param string $number
   *   The number.
   * @param int $precision
   *   The number of decimals to round to.
   * @param int $mode
   *   The rounding mode. One of the following constants: PHP_ROUND_HALF_UP,
   *   PHP_ROUND_HALF_DOWN, PHP_ROUND_HALF_EVEN, PHP_ROUND_HALF_ODD.
   *
   * @return string
   *   The rounded number.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when an invalid (non-numeric or negative) precision is given.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
         'functionName' => 'round',
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
    'c4a78af1fe2af6c9e4b2b7c88a47415d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compares the first number to the second number.
   *
   * @param string $first_number
   *   The first number.
   * @param string $second_number
   *   The second number.
   * @param int $scale
   *   The maximum number of digits after the decimal place.
   *   Any digit after $scale will be truncated.
   *
   * @return int
   *   0 if both numbers are equal, 1 if the first one is greater, -1 otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
         'functionName' => 'compare',
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
    '56a282136f997e2b89fee83271153b09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Trims the given number.
   *
   * By default bcmath returns numbers with the number of digits according
   * to $scale. This means that bcadd(\'2\', \'2\', 6) will return \'4.00000\'.
   * Trimming the number removes the excess zeroes.
   *
   * @param string $number
   *   The number to trim.
   *
   * @return string
   *   The trimmed number.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
         'functionName' => 'trim',
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
    'b6dbee7ddda2bdcd2483c4bd6a2096ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert that the given number is a numeric string value.
   *
   * @param string $number
   *   The number to check.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the given number is not a numeric string value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_price\\Calculator',
         'functionName' => 'assertNumberFormat',
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