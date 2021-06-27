<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Functional/CommerceBrowserTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/block/tests/src/Traits/BlockCreationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Traits/CommerceBrowserTestTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Traits/DeprecationSuppressionTrait.php-1624732871',
   'data' => 
  array (
    'b660d7571559101d32a33a63fcdf6f3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for Commerce functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '0348056f0ed84195183b6e8febcf23fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create and place block with default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '41bac035297cfed2d91bb2442c62423b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a block instance based on default settings.
   *
   * @param string $plugin_id
   *   The plugin ID of the block type for this block instance.
   * @param array $settings
   *   (optional) An associative array of settings for the block entity.
   *   Override the defaults by specifying the key and value in the array, for
   *   example:
   *   @code
   *     $this->drupalPlaceBlock(\'system_powered_by_block\', array(
   *       \'label\' => t(\'Hello, world!\'),
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - label: Random string.
   *   - ID: Random string.
   *   - region: \'sidebar_first\'.
   *   - theme: The default theme.
   *   - visibility: Empty array.
   *
   * @return \\Drupal\\block\\Entity\\Block
   *   The block entity.
   *
   * @todo
   *   Add support for creating custom block instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'placeBlock',
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
    '43193ea36b2fd6a61ac9189bad264857' => 
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
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '063fd79700777a9cddf189b8b107a81b' => 
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
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '8ff85e2a9c8409f056cbf8909723c41f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for Commerce functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '651773b6aa5baf668d77cf0cda4b03a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new entity.
   *
   * @param string $entity_type
   *   The entity type to be created.
   * @param array $values
   *   An array of settings.
   *   Example: \'id\' => \'foo\'.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   A new entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'createEntity',
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
    'f895d3e89e7ba4c05f83a47f339ded3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'createEntity',
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
    'e0438e91025305cb3a4db80febb687ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reloads the entity after clearing the static cache.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to reload.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The reloaded entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'reloadEntity',
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
    '213dda3ee9e5cf0109939186e285062e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'reloadEntity',
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
    'aba889abebcfd5eb331eb6b3abb6a592' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Debugger method to save additional HTML output.
   *
   * The base class will only save browser output when accessing page using
   * ::drupalGet and providing a printer class to PHPUnit. This method
   * is intended for developers to help debug browser test failures and capture
   * more verbose output.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'saveHtmlOutput',
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
    '117abc7eaa6b140ad02f35191a103a68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the passed field values are correct.
   *
   * Ignores differences in ordering.
   *
   * @param array $field_values
   *   The field values.
   * @param array $expected_values
   *   The expected values.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages:
   *   use \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   *   to embed variables in the message text, not t().
   *   If left blank, a default message will be displayed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Traits',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'assertFieldValues',
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
    '01811d2d0d0b3a6deb4bb432d0fd2e93' => 
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
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '58cfe27fff07cff05fea11ac7de51122' => 
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
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '70daaabb5a5cf0bc6271f193a050a9e1' => 
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
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '0649d6116b7f9ea1b4a9ae325eb6190c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The store entity.
   *
   * @var \\Drupal\\commerce_store\\Entity\\Store
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '85678d20b2a4810c94bd620ddb337ce1' => 
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
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '79abe4c853cdbe7c454ea5844500c338' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '2717b5c1867ea683094db84637d89074' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test user with administrative privileges.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '3e0dee3d3746bd5cc82323971247c427' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '5fc3ebfed0e6c340c051d92363422887' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
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
    '27282b948066df4a823ca8cef2acbfeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the permissions for the admin user.
   *
   * @return string[]
   *   The permissions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\Functional',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
         'functionName' => 'getAdministratorPermissions',
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