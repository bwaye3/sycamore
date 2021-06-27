<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/Traits/Core/GeneratePermutationsTrait.php-1624732870',
   'data' => 
  array (
    '88244011a20a09797e356ec2c54f9c2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds ability to convert a list of parameters into a stack of permutations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
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
    '37ff55346b8c5148aa123c20ea5c30c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts a list of possible parameters into a stack of permutations.
   *
   * Takes a list of parameters containing possible values, and converts all of
   * them into a list of items containing every possible permutation.
   *
   * Example:
   * @code
   * $parameters = [
   *   \'one\' => [0, 1],
   *   \'two\' => [2, 3],
   * ];
   * $permutations = $this->generatePermutations($parameters);
   * // Result:
   * $permutations == [
   *   [\'one\' => 0, \'two\' => 2],
   *   [\'one\' => 1, \'two\' => 2],
   *   [\'one\' => 0, \'two\' => 3],
   *   [\'one\' => 1, \'two\' => 3],
   * ]
   * @endcode
   *
   * @param array $parameters
   *   An associative array of parameters, keyed by parameter name, and whose
   *   values are arrays of parameter values.
   *
   * @return array[]
   *   A list of permutations, which is an array of arrays. Each inner array
   *   contains the full list of parameters that have been passed, but with a
   *   single value only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
         'functionName' => 'generatePermutations',
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