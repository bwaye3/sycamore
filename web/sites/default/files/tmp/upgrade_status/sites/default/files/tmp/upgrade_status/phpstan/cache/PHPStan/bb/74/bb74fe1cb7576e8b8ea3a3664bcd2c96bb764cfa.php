<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/Entity/StoreType.php-1624732871',
   'data' => 
  array (
    '162986a258927772ec35d7a7494efd51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the store type entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_store_type",
 *   label = @Translation("Store type", context = "Commerce"),
 *   label_collection = @Translation("Store types", context = "Commerce"),
 *   label_singular = @Translation("store type", context = "Commerce"),
 *   label_plural = @Translation("store types", context = "Commerce"),
 *   label_count = @PluralTranslation(
 *     singular = "@count store type",
 *     plural = "@count store types",
 *     context = "Commerce",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\commerce\\CommerceBundleAccessControlHandler",
 *     "list_builder" = "Drupal\\commerce_store\\StoreTypeListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\commerce_store\\Form\\StoreTypeForm",
 *       "edit" = "Drupal\\commerce_store\\Form\\StoreTypeForm",
 *       "duplicate" = "Drupal\\commerce_store\\Form\\StoreTypeForm",
 *       "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer commerce_store_type",
 *   config_prefix = "commerce_store_type",
 *   bundle_of = "commerce_store",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "uuid",
 *     "description",
 *     "traits",
 *     "locked",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/store-types/add",
 *     "edit-form" = "/admin/commerce/config/store-types/{commerce_store_type}/edit",
 *     "duplicate-form" = "/admin/commerce/config/store-types/{commerce_store_type}/duplicate",
 *     "delete-form" = "/admin/commerce/config/store-types/{commerce_store_type}/delete",
 *     "collection" = "/admin/commerce/config/store-types",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_store\\Entity\\StoreType',
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
    'a7675e27ba2963a621acd1389beaab52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A brief description of this store type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_store\\Entity\\StoreType',
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
    '4da4cd438cccdb93a907be806a54f6cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_store\\Entity\\StoreType',
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
    'ecf80c5176913a45bc513a981b8ccc25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
        ),
         'className' => 'Drupal\\commerce_store\\Entity\\StoreType',
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
  ),
));