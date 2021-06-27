<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/tests/src/Kernel/AdjustmentTest.php-1624732871',
   'data' => 
  array (
    '180828ffca88006d3ef634a5cd8bd702' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @coversDefaultClass \\Drupal\\commerce_order\\Adjustment
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
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
    '818b9582e9d70dfaf7ad630f259e2040' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
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
    '9f1e7ffa17f9b93fe254a270677f9442' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the constructor and definition checks.
   *
   * @covers ::__construct
   *
   * @dataProvider invalidDefinitionProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
         'functionName' => 'testInvalidAdjustmentConstruct',
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
    '894f6fe0d1fd29e1c804fdb54f53a15b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invalid constructor definitions.
   *
   * @return array
   *   The definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
         'functionName' => 'invalidDefinitionProvider',
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
    '5fc8f10d4f1c1793e4ce79b16c0a0e0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the constructor and definition checks.
   *
   * @covers ::__construct
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
         'functionName' => 'testValidAdjustmentConstruct',
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
    'bd504f6e1968e9ce1ce4883536344615' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests getters.
   *
   * @covers ::getType
   * @covers ::getLabel
   * @covers ::getAmount
   * @covers ::isPositive
   * @covers ::isNegative
   * @covers ::getPercentage
   * @covers ::getSourceId
   * @covers ::isIncluded
   * @covers ::isLocked
   * @covers ::toArray
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
         'functionName' => 'testGetters',
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
    '2304c34dcf5ac4217efc0c30fad4ce44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the arithmetic operators.
   *
   * @covers ::add
   * @covers ::subtract
   * @covers ::multiply
   * @covers ::divide
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
         'functionName' => 'testArithmetic',
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
    '152a0fe2e5e3e84b6c4452c691364b05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::add
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
         'functionName' => 'testMismatchedTypes',
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
    'c60e535e109a89090d64bcfcc9cb6822' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::add
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\AdjustmentTest',
         'functionName' => 'testMismatchedSourceIds',
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