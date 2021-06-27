<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Entity/OrderItem.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityChangedTrait.php-1624732867',
   'data' => 
  array (
    '36c50490a141f13bd8d57c3cc1c59bb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the order item entity class.
 *
 * @ContentEntityType(
 *   id = "commerce_order_item",
 *   label = @Translation("Order item"),
 *   label_singular = @Translation("order item"),
 *   label_plural = @Translation("order items"),
 *   label_count = @PluralTranslation(
 *     singular = "@count order item",
 *     plural = "@count order items",
 *   ),
 *   bundle_label = @Translation("Order item type"),
 *   handlers = {
 *     "event" = "Drupal\\commerce_order\\Event\\OrderItemEvent",
 *     "storage" = "Drupal\\commerce_order\\OrderItemStorage",
 *     "access" = "Drupal\\commerce_order\\OrderItemAccessControlHandler",
 *     "permission_provider" = "Drupal\\commerce_order\\OrderItemPermissionProvider",
 *     "views_data" = "Drupal\\commerce_order\\OrderItemViewsData",
 *     "form" = {
 *       "default" = "Drupal\\Core\\Entity\\ContentEntityForm",
 *     },
 *     "inline_form" = "Drupal\\commerce_order\\Form\\OrderItemInlineForm",
 *   },
 *   base_table = "commerce_order_item",
 *   admin_permission = "administer commerce_order",
 *   entity_keys = {
 *     "id" = "order_item_id",
 *     "uuid" = "uuid",
 *     "bundle" = "type",
 *     "label" = "title",
 *   },
 *   bundle_entity_type = "commerce_order_item_type",
 *   field_ui_base_route = "entity.commerce_order_item_type.edit_form",
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'd6dcdc95749edf60ec8f8e32c655526e' => 
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
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '2dbd14a45ef98f396a6dabc1d1cd8982' => 
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
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'aa090aac757ccb2224f3734041a8f306' => 
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
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '72e7e383d6f3148a1f238bcabec7ab17' => 
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
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '3affee936f16dafb253a5fb181dc0a91' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getOrder',
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
    '2db959dae415942fa60c1bc883099c4a' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getOrderId',
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
    '352d6c39f551ddc0f6c04fa70246d99a' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'hasPurchasedEntity',
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
    '732af082c3b8208249d3e9ddda0ed024' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getPurchasedEntity',
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
    '9faf8c593ecccadf02d4214e38db5fa9' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getPurchasedEntityId',
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
    '74d512162854e77c1c77758670cdf2f2' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getTitle',
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
    '0b495e6aa4ca3f5ac951a6ed05f3d15b' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'setTitle',
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
    'ebfde21c9e54f9884ba3f60722331911' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getQuantity',
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
    'e3122a02f77baff5ed49f86a05b1db4d' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'setQuantity',
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
    '57e62d0354e65c98fe1c16127e6d24b6' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getUnitPrice',
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
    'da6f8a5caa3b3a7c861b5646c98b2bc6' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'setUnitPrice',
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
    'b3720c148a5eba1ad95cf3ed8b3cada9' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'isUnitPriceOverridden',
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
    '3d2a0cbb294e4515c4d27ab591d47559' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '8a0b71e5bcbe572506741227469275d5' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '4edfd7f681fffe84b9b91c824e56615f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Adjustment[] $adjustments */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'fba0bd65254431788ed64a1c3ab072f4' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'f0a7410ff1f73570192467b536fea3c5' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'a16ada27662ce407ac770d48c812ff0c' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'f504c48af6a9b2308926376b7325fe57' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'usesLegacyAdjustments',
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
    'af097eefdda3643f67ea10f8a71c93a3' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getAdjustedTotalPrice',
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
    '2096309e63d6e217dede950003318d33' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'getAdjustedUnitPrice',
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
    '212b16c39cb8b202eb70df3bf59269c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies adjustments to the given price.
   *
   * @param \\Drupal\\commerce_price\\Price $price
   *   The price.
   * @param string[] $adjustment_types
   *   The adjustment types to include in the adjusted price.
   *   Examples: fee, promotion, tax. Defaults to all adjustment types.
   *
   * @return \\Drupal\\commerce_price\\Price
   *   The adjusted price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'applyAdjustments',
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
    '92de5ce133f46331a34d399e9cd4b115' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'ebab39d1ad507888cecb76d8369d8ff4' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '21ac3cb8a0bf4ec18a74eda7b63abaa8' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'e8265fd3848f63e14de8915318c5bc88' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '27609f356d197842bcd943c94dfe517e' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'a09d3101d21ad8d2a1590ae9b7b523cf' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'ac64d81ec9887aa5d247b2a15f7d9b58' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '93f3f9fbe07251c22bfdb0b375997a1c' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'bcda6cd0b08daa63fd1f3c4309976d63' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '250ade1718d2a4ecc6ac440838a441df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Recalculates the order item total price.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'c2a0d160bcef6243588c691f0a25ffe8' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    'c319ffe4eb096df0e589a75089067057' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\PurchasableEntityTypeRepositoryInterface $purchasable_entity_type_repository */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
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
    '8e4df4fe0b6dd4250fe578b76e391083' => 
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
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'bundleFieldDefinitions',
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
    'd4be961b8999ae7db7268d978792f84a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemTypeInterface $order_item_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'price' => 'Drupal\\commerce_price\\Price',
          'entitychangedtrait' => 'Drupal\\Core\\Entity\\EntityChangedTrait',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderItem',
         'functionName' => 'bundleFieldDefinitions',
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