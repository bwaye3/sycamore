<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/tests/src/Kernel/TaxRatePercentageTest.php-1624732871',
   'data' => 
  array (
    'c5c116670e6e588668651c5d9bc43aa7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @coversDefaultClass \\Drupal\\commerce_tax\\TaxRatePercentage
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_tax\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'taxratepercentage' => 'Drupal\\commerce_tax\\TaxRatePercentage',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_tax\\Kernel\\TaxRatePercentageTest',
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
    'b78e41ae17e891bfd71f327fdc37dfbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::__construct
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_tax\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'taxratepercentage' => 'Drupal\\commerce_tax\\TaxRatePercentage',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_tax\\Kernel\\TaxRatePercentageTest',
         'functionName' => 'testMissingProperty',
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
    '43c7ff961a6ebf4a0926f00e9ddb24a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::__construct
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_tax\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'taxratepercentage' => 'Drupal\\commerce_tax\\TaxRatePercentage',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_tax\\Kernel\\TaxRatePercentageTest',
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
    'eb4ae6809bbfe2bf9d6ff71927b0dba4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::__construct
   * @covers ::getNumber
   * @covers ::getStartDate
   * @covers ::getEndDate
   * @covers ::toArray
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_tax\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'taxratepercentage' => 'Drupal\\commerce_tax\\TaxRatePercentage',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_tax\\Kernel\\TaxRatePercentageTest',
         'functionName' => 'testValid',
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
    '56668b9b16c2fa05b5c2775f7263adbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::calculateTaxAmount
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_tax\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'taxratepercentage' => 'Drupal\\commerce_tax\\TaxRatePercentage',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_tax\\Kernel\\TaxRatePercentageTest',
         'functionName' => 'testCalculation',
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