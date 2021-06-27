<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/ProductAttributeFieldManagerInterface.php-1624732871',
   'data' => 
  array (
    '9e1fd3785918592ea9107de0b572cbc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages attribute fields.
 *
 * Attribute fields are entity reference fields storing values of a specific
 * attribute on the product variation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
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
    '5b2eddccf3f76cd6610358322568df15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the attribute field definitions.
   *
   * The field definitions are not ordered.
   * Use the field map when the field order is important.
   *
   * @param string $variation_type_id
   *   The product variation type ID.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface[]
   *   The attribute field definitions, keyed by field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
         'functionName' => 'getFieldDefinitions',
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
    '713ccfea41a370c21fd9019123ebe1fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a map of attribute fields across variation types.
   *
   * @param string $variation_type_id
   *   (Optional) The product variation type ID.
   *   When given, used to filter the returned maps.
   *
   * @return array
   *   If a product variation type ID was given, a list of maps.
   *   Otherwise, a list of maps grouped by product variation type ID.
   *   Each map is an array with the following keys:
   *   - attribute_id: The attribute id;
   *   - field_name: The attribute field name.
   *   The maps are ordered by the weight of the attribute fields on the
   *   default product variation form display.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
         'functionName' => 'getFieldMap',
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
    '339d9e23e66f6899c045c373b6c2b48a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clears the attribute field map and definition caches.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
         'functionName' => 'clearCaches',
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
    '3c210ffdfb390758b7bdc452ec1e81ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an attribute field for the given attribute.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductAttributeInterface $attribute
   *   The product attribute.
   * @param string $variation_type_id
   *   The product variation type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
         'functionName' => 'createField',
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
    'bc1a8ec63f2ca7598b230459b7c7d9e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the attribute field for the given attribute can be deleted.
   *
   * An attribute field is no longer deletable once it has data.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductAttributeInterface $attribute
   *   The product attribute.
   * @param string $variation_type_id
   *   The product variation type ID.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the attribute field does not exist.
   *
   * @return bool
   *   TRUE if the attribute field can be deleted, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
         'functionName' => 'canDeleteField',
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
    '2f6c3136fb3697b41618bfe872c75be2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the attribute field for the given attribute.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductAttributeInterface $attribute
   *   The product attribute.
   * @param string $variation_type_id
   *   The product variation type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productattributeinterface' => 'Drupal\\commerce_product\\Entity\\ProductAttributeInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductAttributeFieldManagerInterface',
         'functionName' => 'deleteField',
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