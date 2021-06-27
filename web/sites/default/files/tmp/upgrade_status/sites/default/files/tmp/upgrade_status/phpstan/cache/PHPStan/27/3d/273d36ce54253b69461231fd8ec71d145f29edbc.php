<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/tests/src/FunctionalJavascript/ProductWebDriverTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/field/tests/src/Traits/EntityReferenceTestTrait.php-1624732868',
   'data' => 
  array (
    'dbbcd2b8679ce4c0ceaf0875e93f329f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines base class for product test cases.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript',
         'uses' => 
        array (
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'commercewebdrivertestbase' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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
    'fbc25984be4330b11fdc9261a159e18d' => 
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
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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
    'c5c34538a643a793e50271b512b1ca55' => 
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
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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
    'd5ef3d07608daee106048a7b946b4db8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript',
         'uses' => 
        array (
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'commercewebdrivertestbase' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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
    '79669a53e0a4d763f2a72c3f4c02c3bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product to test against.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript',
         'uses' => 
        array (
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'commercewebdrivertestbase' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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
    '7dcfe9cd04939df4079b173baf92b8f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The stores to test against.
   *
   * @var \\Drupal\\commerce_store\\Entity\\StoreInterface[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript',
         'uses' => 
        array (
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'commercewebdrivertestbase' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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
    'd88d3f915626136cffb6d8b038f84233' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript',
         'uses' => 
        array (
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'commercewebdrivertestbase' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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
    'c02bbf066e67c21137ad4cb9a377008b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript',
         'uses' => 
        array (
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'commercewebdrivertestbase' => 'Drupal\\Tests\\commerce\\FunctionalJavascript\\CommerceWebDriverTestBase',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\FunctionalJavascript\\ProductWebDriverTestBase',
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