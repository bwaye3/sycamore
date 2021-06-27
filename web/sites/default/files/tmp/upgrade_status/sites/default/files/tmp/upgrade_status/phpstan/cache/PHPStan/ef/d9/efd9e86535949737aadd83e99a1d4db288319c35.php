<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Entity/ProductType.php-1624732871',
   'data' => 
  array (
    'c8496a4ba4f0a8523cb8f08e78d6cf41' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the product type entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_product_type",
 *   label = @Translation("Product type"),
 *   label_collection = @Translation("Product types"),
 *   label_singular = @Translation("product type"),
 *   label_plural = @Translation("product types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count product type",
 *     plural = "@count product types",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\commerce\\CommerceBundleAccessControlHandler",
 *     "list_builder" = "Drupal\\commerce_product\\ProductTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\commerce_product\\Form\\ProductTypeForm",
 *       "edit" = "Drupal\\commerce_product\\Form\\ProductTypeForm",
 *       "duplicate" = "Drupal\\commerce_product\\Form\\ProductTypeForm",
 *       "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "commerce_product_type",
 *   admin_permission = "administer commerce_product_type",
 *   bundle_of = "commerce_product",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "variationType",
 *     "multipleVariations",
 *     "injectVariationFields",
 *     "traits",
 *     "locked",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/product-types/add",
 *     "edit-form" = "/admin/commerce/config/product-types/{commerce_product_type}/edit",
 *     "duplicate-form" = "/admin/commerce/config/product-types/{commerce_product_type}/duplicate",
 *     "delete-form" = "/admin/commerce/config/product-types/{commerce_product_type}/delete",
 *     "collection" = "/admin/commerce/config/product-types"
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    '82a7eccbdd90c98e2faaf5f4c1d29c0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The product type description.
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    'a65ee5763a6ade5d60eb5254eff65df7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The variation type ID.
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    'db9be04853eb1811adc13c7aa76a91aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether products of this type can have multiple variations.
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    '08283351f56b6aecc59df80717174e28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether variation fields should be injected.
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    'a1303c327eb8ee8fb4331ec20dcf9127' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
         'functionName' => 'getDescription',
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
    'e6061bd2f4b828e6f74498049f7c7ba0' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
         'functionName' => 'setDescription',
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
    '081de4b55ada3ef6e031c20c2349cc76' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    '3ebd2064a4befa6866f7591875314367' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    '973d015466ef1a64ff5c586e55d9dc78' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    '3a754629e6c9d8942f2335199b46926a' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    '3257f845ad9c0cd7fa9bedb18ab731ec' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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
    'eeb400fafcc154b36858bbe958af0ea3' => 
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
         'className' => 'Drupal\\commerce_product\\Entity\\ProductType',
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