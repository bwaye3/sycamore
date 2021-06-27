<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Entity/ProductVariationType.php-1624732871',
   'data' => 
  array (
    '8fdd91f4b9c607964a6dd76fd3b6dba1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the product variation type entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_product_variation_type",
 *   label = @Translation("Product variation type"),
 *   label_collection = @Translation("Product variation types"),
 *   label_singular = @Translation("product variation type"),
 *   label_plural = @Translation("product variation types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count product variation type",
 *     plural = "@count product variation types",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\commerce_product\\ProductVariationTypeAccessControlHandler",
 *     "list_builder" = "Drupal\\commerce_product\\ProductVariationTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\commerce_product\\Form\\ProductVariationTypeForm",
 *       "edit" = "Drupal\\commerce_product\\Form\\ProductVariationTypeForm",
 *       "duplicate" = "Drupal\\commerce_product\\Form\\ProductVariationTypeForm",
 *       "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "commerce_product_variation_type",
 *   admin_permission = "administer commerce_product_type",
 *   bundle_of = "commerce_product_variation",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "orderItemType",
 *     "generateTitle",
 *     "traits",
 *     "locked",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/product-variation-types/add",
 *     "edit-form" = "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/edit",
 *     "duplicate-form" = "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/duplicate",
 *     "delete-form" = "/admin/commerce/config/product-variation-types/{commerce_product_variation_type}/delete",
 *     "collection" =  "/admin/commerce/config/product-variation-types"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
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
    'cea4fcaf99290c558968a2cb6e77ac52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order item type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
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
    'ab88dea3785d7a63534531b895e60d45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the product variation title should be automatically generated.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
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
    'b9a7589b2631f5ac66e6a2ede61cb6c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
         'functionName' => 'getOrderItemTypeId',
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
    '6fb9910fdf31869f791f8470a6c6711f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
         'functionName' => 'setOrderItemTypeId',
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
    '2f56c8c3e29b830733cbc2ce3b860b4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
         'functionName' => 'shouldGenerateTitle',
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
    'f51b0d1293c04b71532fe13cd5023464' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_product\\Entity\\ProductVariationType',
         'functionName' => 'setGenerateTitle',
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