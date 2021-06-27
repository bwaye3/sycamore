<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Entity/Payment.php-1624732871',
   'data' => 
  array (
    '59a3d2784b7a018f630010b66499b341' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the payment entity class.
 *
 * @ContentEntityType(
 *   id = "commerce_payment",
 *   label = @Translation("Payment"),
 *   label_collection = @Translation("Payments"),
 *   label_singular = @Translation("payment"),
 *   label_plural = @Translation("payments"),
 *   label_count = @PluralTranslation(
 *     singular = "@count payment",
 *     plural = "@count payments",
 *   ),
 *   bundle_label = @Translation("Payment type"),
 *   bundle_plugin_type = "commerce_payment_type",
 *   handlers = {
 *     "access" = "Drupal\\commerce_payment\\PaymentAccessControlHandler",
 *     "event" = "Drupal\\commerce_payment\\Event\\PaymentEvent",
 *     "list_builder" = "Drupal\\commerce_payment\\PaymentListBuilder",
 *     "storage" = "Drupal\\commerce_payment\\PaymentStorage",
 *     "storage_schema" = "Drupal\\commerce\\CommerceContentEntityStorageSchema",
 *     "form" = {
 *       "operation" = "Drupal\\commerce_payment\\Form\\PaymentOperationForm",
 *       "delete" = "Drupal\\Core\\Entity\\ContentEntityDeleteForm",
 *     },
 *     "views_data" = "Drupal\\commerce\\CommerceEntityViewsData",
 *     "route_provider" = {
 *       "default" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   base_table = "commerce_payment",
 *   admin_permission = "administer commerce_payment",
 *   field_indexes = {
 *     "remote_id"
 *   },
 *   entity_keys = {
 *     "id" = "payment_id",
 *     "bundle" = "type",
 *     "uuid" = "uuid",
 *   },
 *   links = {
 *     "collection" = "/admin/commerce/orders/{commerce_order}/payments",
 *     "edit-form" = "/admin/commerce/orders/{commerce_order}/payments/commerce_payment/edit",
 *     "delete-form" = "/admin/commerce/orders/{commerce_order}/payments/{commerce_payment}/delete",
 *   },
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '946606ad9ddd1eea1467225ce213b1dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '3b2f54ebfdfbb1e5a5259ef8b1c07692' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'label',
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
    '7773932ee27ece40a94d56f0366a80c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getType',
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
    'bdf9155e70b875175a6abd3b1064f14d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getPaymentGateway',
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
    '20560cfae9e58e0a72c2756f56907950' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getPaymentGatewayId',
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
    'ef224f334f5e4c88b90b10ff391691fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getPaymentGatewayMode',
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
    'a019936f2b3ee8dce09299a8e26154c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getPaymentMethod',
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
    'e1ac73d8ce0d6b0ca375d73a9f76c2d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getPaymentMethodId',
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
    '0bad3ba26a94796fc997d80c19c3fbe9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '86a4f7b2ffcc50721e17b0eade9ae19d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    'f0d8044a63380fbe8e957b8d97576cd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getRemoteId',
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
    '28501d3ed5923e317589d48534431907' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setRemoteId',
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
    '73851008ea2e1dfeae894eb21f4c4da2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getRemoteState',
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
    '0c6797ea7803f5f308a3f599340c593d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setRemoteState',
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
    '28cd1a4359ca79e72baddf4f32839124' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getAvsResponseCode',
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
    '2ce1cf78a6fe78e4fba9e666ee58f9d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setAvsResponseCode',
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
    '86397617c59fceb91b20d88f4474ca05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getAvsResponseCodeLabel',
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
    '75b5e2beeec941ce4256f302aa159918' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setAvsResponseCodeLabel',
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
    'e2068816f753eaf8fb43c74a45276ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '57c980c9ca6a1faa5ad6c58d75b69c01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getAmount',
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
    '82505a7f0c946f131ec8799a983bbb69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setAmount',
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
    '05badefb9cd1e07126ae55d244dbb671' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getRefundedAmount',
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
    'd2d15908ee3f326101a8bcd80d2fdccf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setRefundedAmount',
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
    '5d73fd98f263c1530dc54e2347cd4760' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '0b7c5a43e8dd74bac4f61338cf5bd643' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setState',
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
    'a65f4ca6df64af484d2de7ebe520cf27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getAuthorizedTime',
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
    '387c6fd06e9b8696e6a3c9d809b52c5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setAuthorizedTime',
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
    '370ae89920f1a595d449b9e2f8b5ad40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'isExpired',
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
    'bcd2191ae2e5628d44d82e0c081126fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'getExpiresTime',
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
    'ca33dba221dc10526b79717cbb0b9e5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'setExpiresTime',
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
    '10b9c0f0a03c6eb60e059c400674ed54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
         'functionName' => 'isCompleted',
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
    'abd1206ad8aa5e6c22567bd97053f84e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '001ddbace115b149ca5f4cd5616f3e11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '4a26450564068896f54e0040772d2ba2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '9f61c31a28f393f64d949c7e05fde923' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    'b1613cf3735d65b6ee6ec164f746842c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    'def057a361697b888631a1f2049c0baf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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
    '27719abf4d6e4939e0ef0b2a4f4c0470' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the workflow ID for the state field.
   *
   * @param \\Drupal\\commerce_payment\\Entity\\PaymentInterface $payment
   *   The payment.
   *
   * @return string
   *   The workflow ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententitybase' => 'Drupal\\Core\\Entity\\ContentEntityBase',
          'entitymalformedexception' => 'Drupal\\Core\\Entity\\EntityMalformedException',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\Payment',
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