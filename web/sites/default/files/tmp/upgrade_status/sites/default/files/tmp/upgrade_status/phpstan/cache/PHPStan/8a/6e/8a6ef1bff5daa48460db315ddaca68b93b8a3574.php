<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/PurchasableEntityTypeRepositoryInterface.php-1624732871',
   'data' => 
  array (
    'aecb2bd2b4b3d71de0656ab24ba3cd19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for methods to help loading purchasable entity types.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\PurchasableEntityTypeRepositoryInterface',
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
    'c288cd386a8874a84d00f3e70e1973aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the full list of purchasable entity types.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface[]
   *   An array of purchasable entity type definitions keyed by entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\PurchasableEntityTypeRepositoryInterface',
         'functionName' => 'getPurchasableEntityTypes',
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
    '4a56b82ef875393a865f362f898f8c92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a list of entity type labels suitable for a Form API options list.
   *
   * @return array
   *   An array of purchasable entity type labels keyed by entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\PurchasableEntityTypeRepositoryInterface',
         'functionName' => 'getPurchasableEntityTypeLabels',
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
    'c74e63080165f8488563636dc777bf3e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a sensible default purchasable entity type.
   *
   * This is primarily needed to set an entity type to target in the base
   * field definition for the purchasable entity field on order items. The core
   * EntityReferenceItem field definition defaults the base field settings
   * array to specify a target_type of node or user, and it is never overridden
   * by bundle specific settings before the Views module uses that target_type
   * to populate the list of view modes when rendering the purchasable entity
   * reference field value as a "Rendered entity" in Views.
   *
   * As such, our workaround is to determine a "default" purchasable entity
   * type, privileging commerce_product_variation as the dominant use case if
   * it exists and just selecting the first available entity type if not. Sites
   * that need to set a specific default target_type can still do so by
   * decorating the default service and overriding this method to return your
   * purchasable entity type.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeInterface
   *   The default purchasable entity type definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce\\PurchasableEntityTypeRepositoryInterface',
         'functionName' => 'getDefaultPurchasableEntityType',
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