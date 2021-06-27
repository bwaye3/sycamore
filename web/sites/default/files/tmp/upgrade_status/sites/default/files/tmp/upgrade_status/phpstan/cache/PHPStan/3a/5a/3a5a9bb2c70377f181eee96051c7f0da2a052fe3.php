<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/src/Comparator/NumberComparator.php-1624732871',
   'data' => 
  array (
    'fa663ebff9204d57d0f5471d644f0696' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a PHPUnit comparator for numbers cast to strings.
 *
 * In PHPUnit 6, $this->assertEquals(\'2.0\', \'2.000\') would pass because
 * numerically the two strings were equal. This behavior was removed in
 * PHPUnit 7, and the assert fails. This comparator restores the ability to
 * compare two strings numerically.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Comparator',
         'uses' => 
        array (
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparisonfailure' => 'SebastianBergmann\\Comparator\\ComparisonFailure',
        ),
         'className' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
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
    'd455b997760f3c71416dd7e2bbfec425' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Comparator',
         'uses' => 
        array (
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparisonfailure' => 'SebastianBergmann\\Comparator\\ComparisonFailure',
        ),
         'className' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
         'functionName' => 'accepts',
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
    '104e7fe4617bea8b022072b40a8b28c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_price\\Comparator',
         'uses' => 
        array (
          'comparator' => 'SebastianBergmann\\Comparator\\Comparator',
          'comparisonfailure' => 'SebastianBergmann\\Comparator\\ComparisonFailure',
        ),
         'className' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
         'functionName' => 'assertEquals',
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