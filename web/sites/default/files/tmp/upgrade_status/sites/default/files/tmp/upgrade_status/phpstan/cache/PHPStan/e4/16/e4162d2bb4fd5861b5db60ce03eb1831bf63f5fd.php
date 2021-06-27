<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/tests/src/Unit/CreditCardTest.php-1624732871',
   'data' => 
  array (
    '0ff8ab93a7e69c7dad1317af66735d3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @coversDefaultClass \\Drupal\\commerce_payment\\CreditCard
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
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
    'c7c141d78fd65034995292320e471a09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::getTypes
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testGetTypes',
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
    'ba5901e4902fd9d0454851f58523c205' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::getType
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testGetInvalidType',
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
    'a9e0db7001d011579e3ed428a8dc988d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::getType
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testGetType',
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
    '61803dac08cca245a4b260be2bdf1dae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::detectType
   * @covers ::matchPrefix
   * @covers ::validateNumber
   * @covers ::validateLuhn
   * @dataProvider cardsProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testValidateNumber',
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
    'b5abf26e863462336e82236e6d68d17c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::validateExpirationDate
   * @dataProvider expirationDateProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testValidateExpirationDate',
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
    '75d0fcbf161b0715e62c4dbc51b4377a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::calculateExpirationTimestamp
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testCalculateExpirationTimestamp',
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
    '0f45ab1e78a24af88bd56a0cabe2662f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::validateSecurityCode
   * @dataProvider securityCodeProvider
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testsValidateSecurityCode',
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
    'c0955aa3297a1fb72c5e06568925e393' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for ::testValidateNumber.
   *
   * @return array
   *   A list of testValidateNumber function arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'cardsProvider',
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
    '7770762705b63fbb807f4adb15933822' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for ::testValidateExpirationDate.
   *
   * @return array
   *   A list of testValidateExpirationDate function arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'expirationDateProvider',
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
    '31b51ac99ef187a1988fcfc53d5d8274' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Data provider for ::testValidateSecurityCode.
   *
   * @return array
   *   A list of testValidateSecurityCode function arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'securityCodeProvider',
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
    'e5d085a894f8eaf152e44421211eb2d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @covers ::getAvsResponseCodeMeanings
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_payment\\Unit',
         'uses' => 
        array (
          'creditcard' => 'Drupal\\commerce_payment\\CreditCard',
          'creditcardtype' => 'Drupal\\commerce_payment\\CreditCardType',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'unittestcase' => 'Drupal\\Tests\\UnitTestCase',
        ),
         'className' => 'Drupal\\Tests\\commerce_payment\\Unit\\CreditCardTest',
         'functionName' => 'testGetAvsResponseCodeMeanings',
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