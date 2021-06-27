<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Entity/Coupon.php-1624732871',
   'data' => 
  array (
    'c798c59d769eeae1a40ec2684223d8ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Coupon entity.
 *
 * @ContentEntityType(
 *   id = "commerce_promotion_coupon",
 *   label = @Translation("Coupon"),
 *   label_singular = @Translation("coupon"),
 *   label_plural = @Translation("coupons"),
 *   label_count = @PluralTranslation(
 *     singular = "@count coupon",
 *     plural = "@count coupons",
 *   ),
 *   handlers = {
 *     "event" = "Drupal\\commerce_promotion\\Event\\CouponEvent",
 *     "list_builder" = "Drupal\\commerce_promotion\\CouponListBuilder",
 *     "storage" = "Drupal\\commerce_promotion\\CouponStorage",
 *     "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
 *     "access" = "Drupal\\commerce_promotion\\CouponAccessControlHandler",
 *     "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
 *     "form" = {
 *       "add" = "Drupal\\commerce_promotion\\Form\\CouponForm",
 *       "edit" = "Drupal\\commerce_promotion\\Form\\CouponForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm"
 *     },
 *    "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\commerce_promotion\\CouponRouteProvider",
 *     },
 *   },
 *   base_table = "commerce_promotion_coupon",
 *   admin_permission = "administer commerce_promotion",
 *   field_indexes = {
 *     "code"
 *   },
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "code",
 *     "uuid" = "uuid",
 *     "status" = "status",
 *   },
 *   links = {
 *     "add-form" = "/promotion/{commerce_promotion}/coupons/add",
 *     "edit-form" = "/promotion/{commerce_promotion}/coupons/{commerce_promotion_coupon}/edit",
 *     "delete-form" = "/promotion/{commerce_promotion}/coupons/{commerce_promotion_coupon}/delete",
 *     "collection" = "/promotion/{commerce_promotion}/coupons",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
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
    'f35cf1f47a35b5e5cd65c9f196c00705' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'urlRouteParameters',
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
    '660ff8304188ef19bf10747b04b33520' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'getPromotion',
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
    'a1b002343df27b8b1094f6786ed654f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'getPromotionId',
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
    'e8430b30f00e458cd1a67d285e65e49f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'getCode',
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
    '223516dc1457355c6fe66691af4ccae9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'setCode',
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
    'bd402a3a329341993a6dc4222a40fa53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'getUsageLimit',
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
    'b417585db0ad9f99bb2456c3bc372bf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'setUsageLimit',
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
    '28cc516a763517890d7b68b1b19057c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'getCustomerUsageLimit',
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
    '836d6313015a41dc9f88afc91b0ba545' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'setCustomerUsageLimit',
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
    'b48a809ddbb91e0595efd82d8ca38385' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'isEnabled',
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
    '633df6dee477f04abd5c731b8a5f030d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'setEnabled',
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
    '6979fd49b27fb1400a8ee2c2b982495a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'available',
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
    'abf56376e18ec58d39551af26b1aa3f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\PromotionUsageInterface $usage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
         'functionName' => 'available',
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
    'eb20ed2595dff8bdad0299bb59fe25ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
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
    '5baf5873de90004013dadb5761be25a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
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
    '55a3b680aca37d3f4408001d8f6392c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\PromotionUsageInterface $usage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
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
    '48ef0c285cab6f248abbe73fbde31282' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $promotion */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
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
    '319f8f994a15d737878be286408fa337' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Coupon',
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
  ),
));