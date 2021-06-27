<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Kernel/CommerceKernelTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Traits/DeprecationSuppressionTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1624732871',
   'data' => 
  array (
    '5809973b6cede0c964a2f8137520a71e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for Commerce kernel tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
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
    '17ca6093735785a81330cbe1248a0f77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Enables suppression of select deprecation messages during testing.
 *
 * This trait creates a custom error handler able to suppress a specific set
 * of deprecation errors, while allowing the rest to surface. It\'s useful to
 * ignore certain errors temporarily, such as those from dependencies, or those
 * whose fix has been intentionally postponed until a support is dropped for
 * legacy drupal versions.
 *
 * @package Drupal\\Tests\\commerce\\Traits
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
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
    'a93574168e64fd0272706a54bfd5a907' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an error handler to suppress specified deprecation messages.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
         'functionName' => 'setErrorHandler',
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
    'd255e0c4748ffc2f711099e6baeefa04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Restores the original error handler.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
         'functionName' => 'restoreErrorHandler',
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
    '99004be48480d99f29691266978bf0cc' => 
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
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
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
    '8a4348594f486f3ae44249e3780ab3f6' => 
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
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
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
    '26f7559cb2eca8e01c2403a431cb6ca2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * Note that when a child class declares its own $modules list, that list
   * doesn\'t override this one, it just extends it.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
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
    'a9b83faedae71e2e34795b284ad54020' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default store.
   *
   * @var \\Drupal\\commerce_store\\Entity\\StoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
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
    'b3e11648dd2ce6c04a111c3ec8bc5551' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
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
    '9910de0ff80deddeb31ff62be5ad59fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Kernel',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'entitykerneltestbase' => 'Drupal\\KernelTests\\Core\\Entity\\EntityKernelTestBase',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Kernel\\CommerceKernelTestBase',
         'functionName' => 'tearDown',
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