<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/tests/src/Functional/Jsonapi/ProductVariationResourceTest.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/jsonapi/tests/src/Traits/CommonCollectionFilterAccessTestPatternsTrait.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/field/tests/src/Traits/EntityReferenceTestTrait.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/StoreCreationTrait.php-1624732871',
   'data' => 
  array (
    'a784063d972a1d9ada3db922d6644bf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * JSON:API resource test for variations.
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    '7167301c870487992775b5c89e0301c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common filter access control tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\jsonapi\\Traits',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'url' => 'Drupal\\Core\\Url',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    '2d9ae9f622b42f9de29e85b7078d9832' => 
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
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    'e2967a7c4a723263567427b5ea999d95' => 
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
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    '42f09d15d9935a62090a4c0df7a1f5fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements ::testCollectionFilterAccess() for pure permission-based access.
   *
   * @param string $label_field_name
   *   The entity type\'s label field name.
   * @param string $view_permission
   *   The entity type\'s permission that grants \'view\' access.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The referencing entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\jsonapi\\Traits',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'url' => 'Drupal\\Core\\Url',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'doTestCollectionFilterAccessBasedOnPermissions',
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
    '2f033d5b7fcbba15ad963c78dbdc5745' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements ::testCollectionFilterAccess() for permission + status access.
   *
   * @param string $label_field_name
   *   The entity type\'s label field name.
   * @param string $view_permission
   *   The entity type\'s permission that grants \'view\' access (for published
   *   entities of this type).
   * @param string $admin_permission
   *   The entity type\'s permission that grants \'view\' access (for unpublished
   *   entities of this type).
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface
   *   The referencing entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\jsonapi\\Traits',
         'uses' => 
        array (
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'entitypublishedinterface' => 'Drupal\\Core\\Entity\\EntityPublishedInterface',
          'url' => 'Drupal\\Core\\Url',
          'entitytest' => 'Drupal\\entity_test\\Entity\\EntityTest',
          'entityreferencetesttrait' => 'Drupal\\Tests\\field\\Traits\\EntityReferenceTestTrait',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'doTestCollectionFilterAccessForPublishableEntities',
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
    'e60483135e2a7e5030465959c2622327' => 
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
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    'ee5e7ad553337d538722645792ea785f' => 
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
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    '82b94a53e31997eec6dec235147f7ba2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    'db0b23d5aae2c18824659ad2a33f302c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product for test variations.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    '37413662af964ecf5542e207b1c4d93a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test entity.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    'addc75104c05407e8a4210ff374d5b8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    '93f58691c3e9a65eeaa7bfd4311a6770' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
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
    'bbe2a4760c9c67420aea40c20d4010dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getExpectedDocument',
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
    '7f8b6b97174dedea60bf62738934458e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getPostDocument',
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
    '522b0e1f814ed760fa33fec1db9e0ba3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'setUpAuthorization',
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
    'e6c049dbca732aa91a590b18a43ab342' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'testCollectionFilterAccess',
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
    '4361b871d0f1e58f7443dede26a1884a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getExpectedUnauthorizedAccessMessage',
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
    '238f51631d6d0c68ed21fda93566b7d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getExpectedUnauthorizedAccessCacheability',
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
    '25eab7a00fdb3b9c9f4da0bf464136bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getExpectedCacheContexts',
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
    '0d8e0f7e7eeaba33fee4c9e3b1529691' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getAccessDeniedResponse',
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
    '789d57eb589bd6682666e876c5346c2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @todo remove after https://www.drupal.org/project/drupal/issues/3163590
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getNestedIncludePaths',
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
    'aa86ac237e3885022d95040a5b4596d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * @todo remove after https://www.drupal.org/project/drupal/issues/3163590
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getRelationshipFieldNames',
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
    '9d8f90e52f61408a37fdbbc8cdc25bec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'entityAccess',
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
    '7b4905a602b4907502c0088a1064b8b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi',
         'uses' => 
        array (
          'numbercomparator' => 'Drupal\\commerce_price\\Comparator\\NumberComparator',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'productvariationtype' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
          'storecreationtrait' => 'Drupal\\commerce_store\\StoreCreationTrait',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'accessresultreasoninterface' => 'Drupal\\Core\\Access\\AccessResultReasonInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'resourcetype' => 'Drupal\\jsonapi\\ResourceType\\ResourceType',
          'resourcetestbase' => 'Drupal\\Tests\\jsonapi\\Functional\\ResourceTestBase',
          'commoncollectionfilteraccesstestpatternstrait' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
          'requestoptions' => 'GuzzleHttp\\RequestOptions',
          'phpunitcomparatorfactory' => 'SebastianBergmann\\Comparator\\Factory',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Functional\\Jsonapi\\ProductVariationResourceTest',
         'functionName' => 'getEntityDuplicate',
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