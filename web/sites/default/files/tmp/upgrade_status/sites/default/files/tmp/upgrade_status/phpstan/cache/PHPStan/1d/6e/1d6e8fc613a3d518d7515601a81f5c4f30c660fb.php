<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/Entity/Promotion.php-1624732871',
   'data' => 
  array (
    '3ba3019cbca7f5306b922fe4fa5e0352' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the promotion entity class.
 *
 * @ContentEntityType(
 *   id = "commerce_promotion",
 *   label = @Translation("Promotion", context = "Commerce"),
 *   label_collection = @Translation("Promotions", context = "Commerce"),
 *   label_singular = @Translation("promotion", context = "Commerce"),
 *   label_plural = @Translation("promotions", context = "Commerce"),
 *   label_count = @PluralTranslation(
 *     singular = "@count promotion",
 *     plural = "@count promotions",
 *     context = "Commerce",
 *   ),
 *   handlers = {
 *     "event" = "Drupal\\commerce_promotion\\Event\\PromotionEvent",
 *     "storage" = "Drupal\\commerce_promotion\\PromotionStorage",
 *     "access" = "Drupal\\entity\\EntityAccessControlHandler",
 *     "permission_provider" = "Drupal\\entity\\EntityPermissionProvider",
 *     "view_builder" = "Drupal\\Core\\Entity\\EntityViewBuilder",
 *     "list_builder" = "Drupal\\commerce_promotion\\PromotionListBuilder",
 *     "views_data" = "Drupal\\commerce_promotion\\PromotionViewsData",
 *     "form" = {
 *       "default" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
 *       "add" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
 *       "enable" = "Drupal\\commerce_promotion\\Form\\PromotionEnableForm",
 *       "disable" = "Drupal\\commerce_promotion\\Form\\PromotionDisableForm",
 *       "edit" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
 *       "duplicate" = "Drupal\\commerce_promotion\\Form\\PromotionForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\commerce_promotion\\PromotionRouteProvider",
 *       "delete-multiple" = "Drupal\\entity\\Routing\\DeleteMultipleRouteProvider",
 *     },
 *     "translation" = "Drupal\\commerce_promotion\\PromotionTranslationHandler",
 *   },
 *   base_table = "commerce_promotion",
 *   data_table = "commerce_promotion_field_data",
 *   admin_permission = "administer commerce_promotion",
 *   translatable = TRUE,
 *   translation = {
 *     "content_translation" = {
 *       "access_callback" = "content_translation_translate_access"
 *     },
 *   },
 *   entity_keys = {
 *     "id" = "promotion_id",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "status" = "status",
 *   },
 *   links = {
 *     "add-form" = "/promotion/add",
 *     "edit-form" = "/promotion/{commerce_promotion}/edit",
 *     "enable-form" = "/promotion/{commerce_promotion}/enable",
 *     "disable-form" = "/promotion/{commerce_promotion}/disable",
 *     "duplicate-form" = "/promotion/{commerce_promotion}/duplicate",
 *     "delete-form" = "/promotion/{commerce_promotion}/delete",
 *     "delete-multiple-form" = "/admin/commerce/promotions/delete",
 *     "collection" = "/admin/commerce/promotions",
 *     "drupal:content-translation-overview" = "/promotion/{commerce_promotion}/translations",
 *     "drupal:content-translation-add" = "/promotion/{commerce_promotion}/translations/add/{source}/{target}",
 *     "drupal:content-translation-edit" = "/promotion/{commerce_promotion}/translations/edit/{language}",
 *     "drupal:content-translation-delete" = "/promotion/{commerce_promotion}/translations/delete/{language}",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '5869de888c39f7b308a2ea286fbd19b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'toUrl',
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
    '2b5f556f9a8e7d015f82d0bbcc0f6fff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'createDuplicate',
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
    'be886a58efefafa905d63097a3ee7ff8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getName',
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
    '9b05e7218a71250febf16362ca16d729' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setName',
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
    '6ee8f4a03525636758f546db55d11e47' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getDisplayName',
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
    '4104aeff302c69a8165cefac06377e1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setDisplayName',
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
    'e807b6c880842f6218ef56b42ff4d101' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    'f5270297f77dff3fbae114fe32464eb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '1f75ed3e606a54350019ff37b25ea9b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getOrderTypes',
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
    '278f68ce9b74188dae82acc9cbff2963' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setOrderTypes',
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
    '8ecfb64db349e40bc8f9e863d9f3269b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getOrderTypeIds',
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
    '31b29852219ffd47fcc9daab42337989' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setOrderTypeIds',
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
    'b96eacb23fd06e2a88f45e75228d33da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getStores',
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
    '328e1069cfe66e5af7ff63968f3d61c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setStores',
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
    '73d5949ddaf990933f607dae3f1ea292' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getStoreIds',
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
    '63bb6040a0982b916ddfba2e97e04c48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setStoreIds',
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
    '348ac1a64e17a538a7c7142cdd919a09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getOffer',
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
    'e6a5a7e0bede8941be95dcb517728cf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setOffer',
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
    'd3bd253f087e76d9532c813dd00ae3fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getConditions',
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
    '7ca616de4d7e955775a789a21c4c85c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Field\\FieldType\\PluginItemInterface $field_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getConditions',
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
    '684c3a9321bb03c8d0ab4f75fea9ad7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setConditions',
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
    'ca8b378da2d3ec6a9a5eea56357aaad5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getConditionOperator',
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
    '87f234ab17ba38d9da147d88a1c3ccad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setConditionOperator',
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
    'c7196823cf24284ca8fa18091cc0f692' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getCouponIds',
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
    'c7b8e21f2e6c6ee1f9fa4bae83fc3fd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getCoupons',
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
    '68a1cafa2b19bcf72013537d8af37d19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setCoupons',
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
    'de64a77e6b3b1814cf4e7b8fa00d9a62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'hasCoupons',
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
    '49c7ea06d3f1a2245478d9e0fffe7978' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'addCoupon',
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
    'a307ba58e48de46b2716818a01313a6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'removeCoupon',
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
    '236a7fa578b411464eab61ac405bbb86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'hasCoupon',
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
    '86f6f538a679a3c355d2acf38270d2f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the index of the given coupon.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\CouponInterface $coupon
   *   The coupon.
   *
   * @return int|bool
   *   The index of the given coupon, or FALSE if not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getCouponIndex',
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
    '4366f6f36cf53375d44987de172f5a9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '4fe478a14a93e8b88c0c457ab8334903' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '47b22873f7c0b78c151848f657d3f668' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    'd0d6b4486e6140187e98d2c2f6063699' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '7d3b37692c408367c2e6bf18b347f61a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getStartDate',
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
    '68b2aa8cf30f3f25b58d491ef606d0bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setStartDate',
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
    'aad30e8a82ac68e667bba379df0c4c7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getEndDate',
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
    '029e3db4720b0df0650298e97ce38c8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setEndDate',
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
    '44115aa6f0a3ba0a0e84434259c0c8ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getCompatibility',
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
    '16fbaf17f127316b8513e8983ac4b8ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setCompatibility',
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
    '7f8c981fd11ebfc96d8944f6b761bfcc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    'ce390f6037ca1df5541517da9e68c5b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '31870641f1c0ec63c5534e67c4f52f39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getWeight',
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
    '219dcaac276338f0f559cd737d3543ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'setWeight',
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
    'f246bd4a0a5c32e1f4574020ce50f955' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '31baafb4b7f954a6889b304ed739c8eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\PromotionUsageInterface $usage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    'f8c7d0332498144c7bbabf00c5e1741e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'applies',
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
    '8d6ed73f6494f46bb55ec1d7e770e86d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface $condition */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'applies',
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
    '62ca72d04e8c131d20207d9e3935beea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'apply',
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
    'ad61bd0027d53d5f7604b90ee0441a19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'clear',
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
    '11530661ac4ff5e367bb482c5983bbe9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '097e48b98924dab7dbae1ce27ece4e90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '21294256b58c4958ec73370d28adf499' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\CouponStorageInterface $coupon_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '8aa411c55250428f3a9503b1c35df16e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_promotion\\PromotionUsageInterface $usage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '1ca8b7c781bc1171a23d31959375676c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
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
    '1dd05ae37a024c650a0c453789cdaae7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default value callback for \'start_date\' base field definition.
   *
   * @see ::baseFieldDefinitions()
   *
   * @return string
   *   The default value (date string).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getDefaultStartDate',
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
    'd9bee5bb88e39c9b1b0c5f3b6ee03298' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper callback for uasort() to sort promotions by weight and label.
   *
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $a
   *   The first promotion to sort.
   * @param \\Drupal\\commerce_promotion\\Entity\\PromotionInterface $b
   *   The second promotion to sort.
   *
   * @return int
   *   The comparison result for uasort().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'sort',
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
    '3c145c8af6143ee63e6b2bc5e0ebfbe7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the allowed values for the \'compatibility\' base field.
   *
   * @return array
   *   The allowed values.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\Entity',
         'uses' => 
        array (
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'commercecontententitybase' => 'Drupal\\commerce\\Entity\\CommerceContentEntityBase',
          'conditioninterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'calculator' => 'Drupal\\commerce_price\\Calculator',
          'orderitempromotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\OrderItemPromotionOfferInterface',
          'promotionofferinterface' => 'Drupal\\commerce_promotion\\Plugin\\Commerce\\PromotionOffer\\PromotionOfferInterface',
          'drupaldatetime' => 'Drupal\\Core\\Datetime\\DrupalDateTime',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'datetimeiteminterface' => 'Drupal\\datetime\\Plugin\\Field\\FieldType\\DateTimeItemInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\Entity\\Promotion',
         'functionName' => 'getCompatibilityOptions',
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