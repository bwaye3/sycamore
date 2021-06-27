<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/tests/src/Functional/ProductBrowserTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/field/tests/src/Traits/EntityReferenceTestTrait.php-1624732868',
   'data' => 
  array (
    '954cfd560928a5a2cee126efa4e55ee3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines base class for shortcut test cases.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional',
         'uses' => 
        array (
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
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
    '2433d744d8a434ebbc8e847af03932dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common functionality for the EntityReference test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Traits',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
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
    '9c5796df8cb71d3406af64d244846d2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a field of an entity reference field storage on the specified bundle.
   *
   * @param string $entity_type
   *   The type of entity the field will be attached to.
   * @param string $bundle
   *   The bundle name of the entity the field will be attached to.
   * @param string $field_name
   *   The name of the field; if it already exists, a new instance of the existing
   *   field will be created.
   * @param string $field_label
   *   The label of the field.
   * @param string $target_entity_type
   *   The type of the referenced entity.
   * @param string $selection_handler
   *   The selection handler used by this field.
   * @param array $selection_handler_settings
   *   An array of settings supported by the selection handler specified above.
   *   (e.g. \'target_bundles\', \'sort\', \'auto_create\', etc).
   * @param int $cardinality
   *   The cardinality of the field.
   *
   * @see \\Drupal\\Core\\Entity\\Plugin\\EntityReferenceSelection\\SelectionBase::buildConfigurationForm()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\field\\Traits',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
         'functionName' => 'createEntityReferenceField',
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
    'e225243d39b76ba613bd3c846890af7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional',
         'uses' => 
        array (
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
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
    '7e2ae3ef8cef10012ab09aac24568ae3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product to test against.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional',
         'uses' => 
        array (
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
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
    '627118ddd98a32e1793c49f917b71b48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stores to test against.
   *
   * @var \\Drupal\\commerce_store\\Entity\\StoreInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional',
         'uses' => 
        array (
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
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
    'b1d969ca2c85d122f36beebd85d24c94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional',
         'uses' => 
        array (
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
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
    'f0ea53fb11d50913300a1801578dc14a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional',
         'uses' => 
        array (
          'commercebrowsertestbase' => 'Drupal\\Tests\\commerce\\Functional\\CommerceBrowserTestBase',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\ProductBrowserTestBase',
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
  ),
));