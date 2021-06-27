<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Entity/PaymentGateway.php-1624732871',
   'data' => 
  array (
    '3854aa5941dbe429503ced27881669e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the payment gateway entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_payment_gateway",
 *   label = @Translation("Payment gateway"),
 *   label_collection = @Translation("Payment gateways"),
 *   label_singular = @Translation("payment gateway"),
 *   label_plural = @Translation("payment gateways"),
 *   label_count = @PluralTranslation(
 *     singular = "@count payment gateway",
 *     plural = "@count payment gateways",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\\commerce_payment\\PaymentGatewayListBuilder",
 *     "storage" = "Drupal\\commerce_payment\\PaymentGatewayStorage",
 *     "form" = {
 *       "add" = "Drupal\\commerce_payment\\Form\\PaymentGatewayForm",
 *       "edit" = "Drupal\\commerce_payment\\Form\\PaymentGatewayForm",
 *       "duplicate" = "Drupal\\commerce_payment\\Form\\PaymentGatewayForm",
 *       "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   admin_permission = "administer commerce_payment_gateway",
 *   config_prefix = "commerce_payment_gateway",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid",
 *     "weight" = "weight",
 *     "status" = "status",
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "weight",
 *     "status",
 *     "plugin",
 *     "configuration",
 *     "conditions",
 *     "conditionOperator",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/payment-gateways/add",
 *     "edit-form" = "/admin/commerce/config/payment-gateways/manage/{commerce_payment_gateway}",
 *     "duplicate-form" = "/admin/commerce/config/payment-gateways/manage/{commerce_payment_gateway}/duplicate",
 *     "delete-form" = "/admin/commerce/config/payment-gateways/manage/{commerce_payment_gateway}/delete",
 *     "collection" =  "/admin/commerce/config/payment-gateways"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '2779bbe0f2590aa30a87cf4c009ffdca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The payment gateway ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '371ebc4ed823676c7abbbbdc6968a21e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The payment gateway label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '7db6c6a20a77e73d42904f6212c5c0ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The payment gateway weight.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    'd397687eb102c0cb2988f08e798bb382' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    'f4784b44b527656d09c8076ff81a57fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin configuration.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    'cb5e6c32bf682b77060b3e3cb959431c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The conditions.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '35f23f71535e4f5aded72e7a1b3d1fca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The condition operator.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '6426283069608f0fa23b8e92115459f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin collection that holds the payment gateway plugin.
   *
   * @var \\Drupal\\commerce\\CommerceSinglePluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '8974de7b30dd9b38a50d1d677f8caec4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '552d1c3e787643e55b15ff23d4d7690e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '9490221b3ce73ca1ee90324f151d327b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'getPlugin',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c1d37f1a9df4daa26f04a82a8c79205a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'getPluginId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1ceceadf0a19524f26723e8232e48c72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'setPluginId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4efdf44a0ee1cb3fb399185a74597425' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'getPluginConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'becccde61a78a45a01ff2dcaf309ec48' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'setPluginConfiguration',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3773603e050461114ac3aac2e4cdc49d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'getPluginCollections',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0ece338abbc1983e0329ce6ee96d7c38' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    'a4dfec1b8280b0ab27d163be3bddbd51' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    'ca57755fbcddcbf991eb7f799f2df2b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '2d85f0e83dd9ebdfb8ed97469247ce57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    '2968c1f093109776a904656815c62725' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface $condition */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
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
    'c64a02c4381d62ebd5edf1cfabfc9c72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'set',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7b1c3418ff592485e6b08687889f49eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plugin collection that holds the payment gateway plugin.
   *
   * Ensures the plugin collection is initialized before returning it.
   *
   * @return \\Drupal\\commerce\\CommerceSinglePluginCollection
   *   The plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'conditiongroup' => 'Drupal\\commerce\\ConditionGroup',
          'parententityawareinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ParentEntityAwareInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
         'functionName' => 'getPluginCollection',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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