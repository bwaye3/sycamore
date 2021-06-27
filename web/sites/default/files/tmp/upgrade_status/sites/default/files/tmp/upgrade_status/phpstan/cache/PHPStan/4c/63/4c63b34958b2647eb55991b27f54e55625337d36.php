<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/jsonapi/tests/src/Traits/CommonCollectionFilterAccessTestPatternsTrait.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/field/tests/src/Traits/EntityReferenceTestTrait.php-1624732868',
   'data' => 
  array (
    '70b7eb262e5f7894bad59b84f27c66f1' => 
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
         'className' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
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
    '05965eb64b339d181fc44e021da79fe5' => 
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
         'className' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
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
    '0c35fcc4513d726824cd395fa0cc729f' => 
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
         'className' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
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
    '4fde580843a38212e65fafa4cf0ce81d' => 
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
         'className' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
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
    '5321adb04cf092532f038d95014145ed' => 
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
         'className' => 'Drupal\\Tests\\jsonapi\\Traits\\CommonCollectionFilterAccessTestPatternsTrait',
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
  ),
));