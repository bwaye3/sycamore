<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/FunctionalJavascript/CommerceWebDriverTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/block/tests/src/Traits/BlockCreationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Traits/CommerceBrowserTestTrait.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/tests/src/Traits/DeprecationSuppressionTrait.php-1624732871',
   'data' => 
  array (
    '91f1c7df2c2b610c58d3fd00c405ed85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a base class for Commerce functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'bebc6d2c6ffe29076b85475b257d33d5' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'd12ac5ef6fdc511edbed6b2bafa1d783' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'a8d892570cbb2774d99db25c4ea2ed5a' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '71e06480c565e020ef8db514403a206e' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '2456509577f6f3bfb4805ab0ee45942d' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '221e0000619f3af9f24c37fda60e1f7c' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'ea778a32a33980479f64e0ce813041f3' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '1d5112ee3830507dca133f96c97203dc' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '3402103a1597ca26bce3d7ae2f61583c' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '28f7f51bed5d6d250fe9df11b61b678f' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'c3c1886e77e735c4b11e7aa5cca4f1dc' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'b481dfe65e6cbff0258d524fbbe19447' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '68a96bfdfa6a7b01f2a1da74986ca044' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '8baa70a31af05499b17cbdfec2d7c05a' => 
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
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '42d4ec422d98206e009f1f9cdba5d27d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The store entity.
   *
   * @var \\Drupal\\commerce_store\\Entity\\Store
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '25167a19d68c09676faa3bd81ab2715d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The country list.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'c73c4a657f105e196536fef4708913f8' => 
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
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '4d61a57c2725cbe699c21c835cb01f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '0342343398c151774146ac39c6cd0c0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test user with administrative privileges.
   *
   * @var \\Drupal\\user\\UserInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'c72e383c0fd075f63face5558cc60996' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'b8c5c17fea3acabed6bbd5a5692d0723' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    '70dbf2abf2610747771b6e6622fa31e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the permissions for the admin user.
   *
   * @return string[]
   *   The permissions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
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
    'bcad007900dc8952ef52c09d0fdbcc28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets an input field\'s raw value.
   *
   * HTML5 date and time input elements use locale-specific formats,
   * making it difficult to test across environments.
   * Setting the value via JS allows us to bypass this and modify the underling
   * value, which is always in a consistent format.
   *
   * @param string $name
   *   The input element name.
   * @param string $value
   *   The value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
         'functionName' => 'setRawFieldValue',
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
    'cd9adb44706bfc767a22093c76dcead0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the given address is rendered on the page.
   *
   * @param array $address
   *   The address.
   * @param string $container
   *   The name of the containing profile element. Defaults to \'profile\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
         'functionName' => 'assertRenderedAddress',
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
    '03ae5b54e852bf2a5b6cca0df63b040c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Waits for the given time or until the given JS condition becomes TRUE.
   *
   * @param string $condition
   *   JS condition to wait until it becomes TRUE.
   * @param int $timeout
   *   (Optional) Timeout in milliseconds, defaults to 1000.
   * @param string $message
   *   (optional) A message to display with the assertion. If left blank, a
   *   default message will be displayed.
   *
   * @see \\Behat\\Mink\\Driver\\DriverInterface::evaluateScript()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
         'functionName' => 'assertJsCondition',
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
    'ee5cd40c486fc026156eb9c059994072' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Waits for jQuery to become active and animations to complete.
   *
   * @deprecated in commerce:8.x-2.16 and is removed from commerce:3.x.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce\\FunctionalJavascript',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'pricecomparator' => 'Drupal\\commerce_price\\Comparator\\PriceComparator',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'webdrivertestbase' => 'Drupal\\FunctionalJavascriptTests\\WebDriverTestBase',
          'blockcreationtrait' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
          'commercebrowsertesttrait' => 'Drupal\\Tests\\commerce\\Traits\\CommerceBrowserTestTrait',
          'deprecationsuppressiontrait' => 'Drupal\\Tests\\commerce\\Traits\\DeprecationSuppressionTrait',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
         'functionName' => 'waitForAjaxToFinish',
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