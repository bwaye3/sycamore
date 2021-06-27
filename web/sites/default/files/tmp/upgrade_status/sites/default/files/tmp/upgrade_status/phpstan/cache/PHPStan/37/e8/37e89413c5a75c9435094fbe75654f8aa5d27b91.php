<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Entity/OrderType.php-1624732871',
   'data' => 
  array (
    'a2856f63de84147c5b177f8571a35797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the order type entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_order_type",
 *   label = @Translation("Order type", context = "Commerce"),
 *   label_collection = @Translation("Order types", context = "Commerce"),
 *   label_singular = @Translation("order type", context = "Commerce"),
 *   label_plural = @Translation("order types", context = "Commerce"),
 *   label_count = @PluralTranslation(
 *     singular = "@count order type",
 *     plural = "@count order types",
 *     context = "Commerce",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\commerce\\CommerceBundleAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\\commerce_order\\Form\\OrderTypeForm",
 *       "edit" = "Drupal\\commerce_order\\Form\\OrderTypeForm",
 *       "duplicate" = "Drupal\\commerce_order\\Form\\OrderTypeForm",
 *       "delete" = "Drupal\\commerce\\Form\\CommerceBundleEntityDeleteFormBase"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *     "list_builder" = "Drupal\\commerce_order\\OrderTypeListBuilder",
 *   },
 *   admin_permission = "administer commerce_order_type",
 *   config_prefix = "commerce_order_type",
 *   bundle_of = "commerce_order",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "label",
 *     "id",
 *     "workflow",
 *     "numberPattern",
 *     "refresh_mode",
 *     "refresh_frequency",
 *     "sendReceipt",
 *     "receiptBcc",
 *     "traits",
 *     "locked",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/order-types/add",
 *     "edit-form" = "/admin/commerce/config/order-types/{commerce_order_type}/edit",
 *     "duplicate-form" = "/admin/commerce/config/order-types/{commerce_order_type}/duplicate",
 *     "delete-form" = "/admin/commerce/config/order-types/{commerce_order_type}/delete",
 *     "collection" = "/admin/commerce/config/order-types"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    '3229f26d53332da47dbe7a35e2e1c8a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order type workflow ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    'e4226eed3d3c3b1977f7f6a96a59dfe8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number pattern ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    'a444ae4f9bf4c856b800ede4fb13d784' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order type refresh mode.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    '730e55e52d4da32408eb9e4047277587' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order type refresh frequency.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    'a6053a1038b5139a64ffc1b177e302af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether to email the customer a receipt when an order is placed.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    'db22336b6c094bab30edb2a0161c2f5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The receipt BCC email.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    '6096c5f4521fb91fb2c3f79c3c5e7c7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
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
    '7414ce0f7965006f5b026e418ae40a9c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'setWorkflowId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5b3eafdcf9c84516367cb48012af5c63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'getNumberPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '020949d08edb138731336ec9b340885b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'getNumberPatternId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1a053af4615f37be90bbef1d562d1449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'setNumberPatternId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e0d6299181b452a12e75c0ce20ebabe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'getRefreshMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd7e5ed791de9bd75c9f50d7d1de0f0ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'setRefreshMode',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ecad02b6416bad9bf56e8e5b5f46a35a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'getRefreshFrequency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b1523bd71d528866ebdf1a389d71fc6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'setRefreshFrequency',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8ffd40da14624d9d3ee43d3e8a01748b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'shouldSendReceipt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd72f8d6378ad4f73c183ddeeb84b8fc6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'setSendReceipt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'efa5c821b26830d086af6a52b4f9a1b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'getReceiptBcc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5eb4ed1571a70e87aca3e2b9aa36f15f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'setReceiptBcc',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '01ff20e06648e1563c55304b98cf1e2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Entity',
         'uses' => 
        array (
          'commercebundleentitybase' => 'Drupal\\commerce\\Entity\\CommerceBundleEntityBase',
          'numberpattern' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
        ),
         'className' => 'Drupal\\commerce_order\\Entity\\OrderType',
         'functionName' => 'calculateDependencies',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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