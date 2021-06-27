<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Entity/ProductTypeInterface.php-1624732871',
   'data' => 
  array (
    '0e60fc44c4054ab3b5f4acdff653ad06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for product types.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentityinterface' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductTypeInterface',
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
    'da54ca278d35fe0a3d0f7a39da1c81a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the product type\'s matching variation type ID.
   *
   * @return string
   *   The variation type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentityinterface' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductTypeInterface',
         'functionName' => 'getVariationTypeId',
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
    '878aa93d54654d4f5ebbc96919c9ec51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the product type\'s matching variation type ID.
   *
   * @param string $variation_type_id
   *   The variation type ID.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentityinterface' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductTypeInterface',
         'functionName' => 'setVariationTypeId',
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
    '198216c9004850deaaf0443d1d06ebf8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether products of this type can have multiple variations.
   *
   * @return bool
   *   TRUE if products of this type can have multiple variations,
   *   FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentityinterface' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductTypeInterface',
         'functionName' => 'allowsMultipleVariations',
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
    'e5f94551d034c980939d6abe5b6e3d92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether products of this type can have multiple variations.
   *
   * @param bool $multiple_variations
   *   Whether products of this type can have multiple variations.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentityinterface' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductTypeInterface',
         'functionName' => 'setMultipleVariations',
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
    'de5deea5caf3a8855c732ca53766a088' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether variation fields should be injected into the rendered product.
   *
   * @return bool
   *   TRUE if the variation fields should be injected into the rendered
   *   product, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentityinterface' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductTypeInterface',
         'functionName' => 'shouldInjectVariationFields',
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
    'b0cf4d234443709ff66ffdb5faeab234' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether variation fields should be injected into the rendered product.
   *
   * @param bool $inject
   *   Whether variation fields should be injected into the rendered product.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentityinterface' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityInterface',
          'entitydescriptioninterface' => 'Drupal\\Core\\Entity\\EntityDescriptionInterface',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductTypeInterface',
         'functionName' => 'setInjectVariationFields',
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