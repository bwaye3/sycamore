<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Kernel/IntervalTest.php-1624732871',
   'data' => 
  array (
    '99557f406cb71aae72f48750993b885b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the Interval class.
 *
 * @coversDefaultClass \\Drupal\\commerce\\Interval
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
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
    '271c9d7ee5cf4bd80b2db6d6cade72df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The interval.
   *
   * @var \\Drupal\\commerce\\Interval
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
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
    '26ce90b0ca1d535d6627b017d1c89cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests creating an interval with an invalid number.
   *
   * ::covers __construct.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'testInvalidNumber',
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
    'c90dd5239e20e047214b0359d46e23d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests creating an interval with an invalid unit.
   *
   * ::covers __construct.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'testInvalidUnit',
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
    '813c6c51d009034e0a803e55407ff944' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the methods for getting the number/unit in various formats.
   *
   * ::covers getNumber
   * ::covers getUnit
   * ::covers __toString
   * ::covers toArray.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
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
    '70e484be4fb9b2622f22a2263ce2f718' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @dataProvider additionDateProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'testAddition',
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
    '828f3fc2826b9525a69e48872d12d606' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @dataProvider subtractionDateProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'testSubtraction',
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
    'c4dea37244be3f323a6b88ee4c26d526' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @dataProvider flooringDateProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'testFlooring',
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
    '7977feb3fdc35e90318aaaae38b13364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @dataProvider ceilingDateProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'testCeiling',
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
    '9702d2f4940dd8e084fa7cd6926d0e7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for ::testAddition.
   *
   * @return array
   *   A list of testAddition function arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'additionDateProvider',
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
    '7b55305d96b2feff7fac0dc163d8dcba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for ::testSubtraction.
   *
   * @return array
   *   A list of testSubtraction function arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'subtractionDateProvider',
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
    '39e0eccc4862933915680c3637f821ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for ::testFlooring.
   *
   * @return array
   *   A list of testFlooring function arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'flooringDateProvider',
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
    '99635fb17b636460d0fc7c6162249148' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for ::testCeiling.
   *
   * @return array
   *   A list of testCeiling function arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'interval' => 'Drupal\\commerce\\Interval',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'kerneltestbase' => 'Drupal\\KernelTests\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\IntervalTest',
         'functionName' => 'ceilingDateProvider',
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