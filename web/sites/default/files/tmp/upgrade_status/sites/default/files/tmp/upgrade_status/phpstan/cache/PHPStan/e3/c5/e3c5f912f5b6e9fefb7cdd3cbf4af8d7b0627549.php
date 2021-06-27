<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/price/tests/src/Kernel/PriceFormattersTest.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1624732871',
   'data' => 
  array (
    'a9afb48fe5f0b7b43fb829cc94255428' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests price formatters provided by Price module.
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
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
    '932d3378770a7848b26ae729af53b296' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create stores and set the default store.
 *
 * This trait is meant to be used only by test classes.
 *
 * @todo Move to \\Drupal\\Tests\\commerce_store post-SimpleTest.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'store' => 'Drupal\\commerce_store\\Entity\\Store',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
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
    'e0f581960a26145b20d6ff198e0b360d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a store for the test.
   *
   * @param string $name
   *   The store name.
   * @param string $mail
   *   The store email.
   * @param string $type
   *   The store type.
   * @param bool $default
   *   Whether the store should be the default store.
   * @param string $country
   *   The store country code.
   * @param string $currency
   *   The store currency code.
   *
   * @return \\Drupal\\commerce_store\\Entity\\StoreInterface
   *   The store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'store' => 'Drupal\\commerce_store\\Entity\\Store',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
         'functionName' => 'createStore',
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
    'dd02dbdf7ed2a2729c6abfd46b1aff16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   *
   * @todo should commerce_test provide a simplistic PurchasableEntity?
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
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
    '4cfaa8cc4838609caabbd3859b98fa86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The first product variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
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
    '0f29c9d9f37f5515022194b30f7cb169' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The second product variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
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
    '89afad0e4a9df20207f34770d14b7a09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
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
    '52bc77349fba47223f57f15002e8676d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @var \\Drupal\\Core\\Entity\\EntityViewBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
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
    '88eb00598a7fd9ba3d2811d935eb8a0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
         'functionName' => 'setUp',
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
    'a05b851676f44e44fc2324f097d9fd2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the default formatter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
         'functionName' => 'testDefaultFormatter',
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
    'd1108eab7f1a253af8b4072742810ac2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests the calculated price formatter.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_price\\Kernel',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'commercekerneltestbase' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_price\\Kernel\\PriceFormattersTest',
         'functionName' => 'testCalculatedFormatter',
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