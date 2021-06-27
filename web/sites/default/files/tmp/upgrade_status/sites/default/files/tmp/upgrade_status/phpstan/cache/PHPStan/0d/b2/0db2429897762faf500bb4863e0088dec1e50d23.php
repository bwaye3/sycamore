<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Entity/Order.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityChangedTrait.php-1624732867',
   'data' => 
  array (
    '95808cd6633c9658276212f09096b4c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the order entity class.
 *
 * @ContentEntityType(
 *   id = "commerce_order",
 *   label = @Translation("Order", context = "Commerce"),
 *   label_collection = @Translation("Orders", context = "Commerce"),
 *   label_singular = @Translation("order", context = "Commerce"),
 *   label_plural = @Translation("orders", context = "Commerce"),
 *   label_count = @PluralTranslation(
 *     singular = "@count order",
 *     plural = "@count orders",
 *     context = "Commerce",
 *   ),
 *   bundle_label = @Translation("Order type", context = "Commerce"),
 *   handlers = {
 *     "event" = "Drupal\\commerce_order\\Event\\OrderEvent",
 *     "storage" = "Drupal\\commerce_order\\OrderStorage",
 *     "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
 *     "access" = "Drupal\\commerce_order\\OrderAccessControlHandler",
 *     "query_access" = "Drupal\\commerce_order\\OrderQueryAccessHandler",
 *     "permission_provider" = "Drupal\\commerce_order\\OrderPermissionProvider",
 *     "list_builder" = "Drupal\\commerce_order\\OrderListBuilder",
 *     "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
 *     "form" = {
 *       "default" = "Drupal\\commerce_order\\Form\\OrderForm",
 *       "add" = "Drupal\\commerce_order\\Form\\OrderForm",
 *       "edit" = "Drupal\\commerce_order\\Form\\OrderForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
 *       "unlock" = "Drupal\\commerce_order\\Form\\OrderUnlockForm",
 *       "resend-receipt" = "Drupal\\commerce_order\\Form\\OrderReceiptResendForm",
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\commerce_order\\OrderRouteProvider",
 *       "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
 *     },
 *     "entity_print" = "Drupal\\commerce_order\\EntityPrint\\OrderRenderer"
 *   },
 *   base_table = "commerce_order",
 *   admin_permission = "administer commerce_order",
 *   permission_granularity = "bundle",
 *   field_indexes = {
 *     "order_number"
 *   },
 *   entity_keys = {
 *     "id" = "order_id",
 *     "label" = "order_number",
 *     "uuid" = "uuid",
 *     "bundle" = "type"
 *   },
 *   links = {
 *     "canonical" = "/admin/commerce/orders/{commerce_order}",
 *     "edit-form" = "/admin/commerce/orders/{commerce_order}/edit",
 *     "delete-form" = "/admin/commerce/orders/{commerce_order}/delete",
 *     "delete-multiple-form" = "/admin/commerce/orders/delete",
 *     "reassign-form" = "/admin/commerce/orders/{commerce_order}/reassign",
 *     "unlock-form" = "/admin/commerce/orders/{commerce_order}/unlock",
 *     "collection" = "/admin/commerce/orders",
 *     "resend-receipt-form" = "/admin/commerce/orders/{commerce_order}/resend-receipt"
 *   },
 *   bundle_entity_type = "commerce_order_type",
 *   field_ui_base_route = "entity.commerce_order_type.edit_form",
 *   allow_number_patterns = TRUE,
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
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
    '5a1c4cd4027946a6de25293ea05978e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for accessing changed time.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
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
    'fc62566e1564a633ce4368183aa834b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the timestamp of the last entity change across all translations.
   *
   * @return int
   *   The timestamp of the last entity save operation across all
   *   translations.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getChangedTimeAcrossTranslations',
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
    '5721e854c77d1889fed1afdbbbb367c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the timestamp of the last entity change for the current translation.
   *
   * @return int
   *   The timestamp of the last entity save operation.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getChangedTime',
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
    '84095db11a27954131f8403036d9d5f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the timestamp of the last entity change for the current translation.
   *
   * @param int $timestamp
   *   The timestamp of the last entity save operation.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setChangedTime',
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
    '3a460cdda53b8b15480a34fa3cc730b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getOrderNumber',
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
    '056fa91d2022b5183657c55a739231f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setOrderNumber',
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
    '716bf5fb707b944189001935daa9f6bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getStore',
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
    '4aa7a012773cad6d952d0a6d302548a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setStore',
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
    'e2141cbb71c4e26a1280527cf3c737b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getStoreId',
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
    '57ff4759fbdda0e15afca0d849bf1070' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setStoreId',
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
    '63673fdf2294f949b72f53b60413b2e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getCustomer',
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
    'f3a24cd3914882a5e89e274566de4818' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setCustomer',
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
    '12cbaa3113448a574e11c85e0d9fe5c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getCustomerId',
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
    'ea745658f51324c7eeaccd2f676cb7c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setCustomerId',
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
    '28f6fc62f464805ac7a66ab6939d3548' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getEmail',
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
    '0b014f59e60ab2c7f0815158e28cbe11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setEmail',
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
    '35f61c42d61ad6f3c9c2b02305f95f56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getIpAddress',
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
    'f60e9e8826e81a80a81af29d738afa78' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setIpAddress',
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
    'bf19cd1759e56f7b1ffcee7c17af378b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getBillingProfile',
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
    '8530d06719dd78eb19d885f5be3b8170' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setBillingProfile',
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
    '5172aa86973572485d7ca32ce6f5b481' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'collectProfiles',
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
    'bc40145a4e55149d42de01fec234d3d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getItems',
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
    'ff7bcf7b4707cc7fabb3457102ca9cca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setItems',
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
    '9de5aeb84c00ac608f04bebf031898c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'hasItems',
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
    '49a96f4f0412b66c0232849442c54718' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'addItem',
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
    '9411867f176524144d3650b2b735b48d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'removeItem',
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
    'b66064938bf7fb806a2a596e8f37f6e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'hasItem',
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
    '74d6480ee0463d4ba9a8405182ca7c3b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the index of the given order item.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item
   *   The order item.
   *
   * @return int|bool
   *   The index of the given order item, or FALSE if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getItemIndex',
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
    '513fe1d267c7ef93fb7e5b09de4da012' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getAdjustments',
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
    '0c3656561cd0d2dcc23fa0b310f5dd81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Adjustment[] $adjustments */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getAdjustments',
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
    '1a125359280984fd6cf152ed68c51b2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setAdjustments',
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
    'd7be81d0ed2ca3475bec2e721348d536' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'addAdjustment',
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
    '49717d39374ebf6bbe9943d11ebc171f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'removeAdjustment',
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
    'e5f47e0e031738834580cb39466b7af7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'clearAdjustments',
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
    '56b65eb5742a79dc91af70785aad7bb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Adjustment $adjustment */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'clearAdjustments',
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
    'a564f609cee7e819218592433a202463' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Adjustment[] $adjustments */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'clearAdjustments',
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
    'c8f73af62098ea0b483c30aeb11a0235' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'collectAdjustments',
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
    'e7e91956e10cab8e15c6bdf6a68eac56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getSubtotalPrice',
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
    'f07298f25ff3160aa9d8eb243e778dd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_price\\Price $subtotal_price */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getSubtotalPrice',
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
    'e37b48168b078217750940837026a175' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'recalculateTotalPrice',
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
    '5291ed1b57347f7f21cf60b0c7e0b1c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_price\\Price $total_price */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'recalculateTotalPrice',
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
    '67e4cf7afbe85ba51ff07230f18b37c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\AdjustmentTransformerInterface $adjustment_transformer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'recalculateTotalPrice',
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
    '058a38cd2ac27476542c1bf696d3ed05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getTotalPrice',
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
    '16e3fa7bcd3d5bf49b64d49b853685e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getTotalPaid',
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
    'f54aad1511ba0bc74068907f745c548c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setTotalPaid',
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
    'acbcc6c16784762a0e7c55a97d75b1f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getBalance',
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
    '0762b04e7f7aba0f91b0f5ddda5dd389' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'isPaid',
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
    '091acd28ead5ca1b461fce0ec162a947' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getState',
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
    '0a67018ffc258be016c2513cf1ca9a5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getRefreshState',
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
    '92e603be0e6e14af78f58f1879b2f826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setRefreshState',
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
    '61690039b0278f6bed888258b35830d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getData',
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
    '02705f3146a19892584d1365fcdad980' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setData',
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
    'c1f17752e6170a070286935f6e4543f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'unsetData',
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
    '94fce19acd3b0792671f1c6d1f67f450' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'isLocked',
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
    '6cfd2a629930131e8cbc7a0f13415a1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'lock',
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
    '3eac159c644a8d0611c1b2a44bbaf433' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'unlock',
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
    'f419458770e7fa6d5341ae58c4b5f43f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getCreatedTime',
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
    '751e7123d6aeb093f61245ae7c27d599' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setCreatedTime',
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
    '204cfdb682871f93efb120c657c6367b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getPlacedTime',
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
    '8a15e114746348e99a97b16f174031a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setPlacedTime',
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
    '9deaa3ea80b92f086b9f56931af48281' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getCompletedTime',
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
    '577733086db29197b6aab7e8737a2935' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'setCompletedTime',
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
    '392cd5de287725cd7b895e55ddc56271' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getCalculationDate',
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
    '8e966a0f569f6e3c820a6d143b8923e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'preSave',
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
    'e686e55dd9217cf3f03ad61e293cf241' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'postSave',
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
    '1fae925bc6e726cac44805744a126cb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'postDelete',
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
    'f9a80ddc07a382d7f0e165da45c2b3f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'postDelete',
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
    '3d41ce39d7e89d7d220e60b696df9aeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorageInterface $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'postDelete',
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
    '0f8611c09f96b25942a349257f4fca7e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'baseFieldDefinitions',
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
    'b169c0aa69acf58b0be412b201c8c670' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'uid\' base field definition.
   *
   * @see ::baseFieldDefinitions()
   *
   * @return array
   *   An array of default values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getCurrentUserId',
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
    '5162eff246489b13eb4161e45ddb1ce9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the workflow ID for the state field.
   *
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The order.
   *
   * @return string
   *   The workflow ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'orderevents' => 'Drupal\\commerce_order\\Event\\OrderEvents',
          'orderprofilesevent' => 'Drupal\\commerce_order\\Event\\OrderProfilesEvent',
          'orderbalancefielditemlist' => 'Drupal\\commerce_order\\OrderBalanceFieldItemList',
          'price' => 'Drupal\\commerce_price\\Price',
          'storeinterface' => 'Drupal\\commerce_store\\Entity\\StoreInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'user' => 'Drupal\\user\\Entity\\User',
          'userinterface' => 'Drupal\\user\\UserInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\Order',
         'functionName' => 'getWorkflowId',
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