<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/ProductVariationAttributeMapperInterface.php-1624732871',
   'data' => 
  array (
    'ea429f712cb1553a9e814b8c5fadb981' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides logic for selecting variations using attributes.
 *
 * @see \\Drupal\\commerce_product\\Plugin\\Field\\FieldWidget\\ProductVariationAttributesWidget
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationAttributeMapperInterface',
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
    'f3bb4429fb61b863cc56a85a2cc18a6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selects the best matching variation for the given attribute values.
   *
   * Takes the first variation that matches the most attribute values.
   * Partial matches are considered when a full match cannot be made.
   * For example, when given [Red, Small, Cotton], the search priority is:
   * 1) [Red, Small, Cotton]
   * 2) [Red, Small]
   * 3) [Red]
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface[] $variations
   *   The variations.
   * @param array $attribute_values
   *   Attribute value IDs, keyed by the field name.
   *
   * @return \\Drupal\\commerce_product\\Entity\\ProductVariationInterface|null
   *   The selected variation, or NULL if none could be selected.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationAttributeMapperInterface',
         'functionName' => 'selectVariation',
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
    'ffc4d59b472b45a01aa6c5233d4dc367' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the available attributes for the selected product variation.
   *
   * The attribute and its values are retrieved in the language of the
   * variation. Values not corresponding to any variation are removed.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface $selected_variation
   *   The selected product variation.
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface[] $variations
   *   The available product variations.
   *
   * @return \\Drupal\\commerce_product\\PreparedAttribute[]
   *   The prepared attributes, keyed by field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationAttributeMapperInterface',
         'functionName' => 'prepareAttributes',
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