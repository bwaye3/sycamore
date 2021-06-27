<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/tests/src/Traits/ProductAttributeTestTrait.php-1624732871',
   'data' => 
  array (
    'e26e367a5b15df162f11869ffdfa2b64' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a trait for attribute-related functional tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
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
    '41fb5c537d62f388e468bb7a93273ad9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The attribute field manager.
   *
   * @var \\Drupal\\commerce_product\\ProductAttributeFieldManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
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
    'b71e08e03d6bd1317444a35a79e0de45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an attribute field and set of attribute values.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface $variation_type
   *   The variation type.
   * @param string $name
   *   The attribute field name.
   * @param array $options
   *   Associative array of key name values. [red => Red].
   * @param bool $test_field
   *   Flag to create a test field on the attribute.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface[]
   *   Array of attribute entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
         'functionName' => 'createAttributeSet',
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
    '602895129824571a7b577f04307e231a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Entity\\EntityFormDisplay $attribute_view_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
         'functionName' => 'createAttributeSet',
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
    '7fce3566fb28c98bac556bdc938b25ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an attribute value.
   *
   * @param string $attribute
   *   The attribute ID.
   * @param string $name
   *   The attribute value name.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductAttributeValueInterface
   *   The attribute value entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_product\\Traits',
         'uses' => 
        array (
          'productattribute' => 'Drupal\\commerce_product\\Entity\\ProductAttribute',
          'productvariationtypeinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationTypeInterface',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
        ),
         'className' => 'Drupal\\Tests\\commerce_product\\Traits\\ProductAttributeTestTrait',
         'functionName' => 'createAttributeValue',
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