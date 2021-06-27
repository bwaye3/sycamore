<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Entity/CheckoutFlow.php-1624732871',
   'data' => 
  array (
    'bd34290f25ae2811e6fec316fd1b62ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the checkout flow entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_checkout_flow",
 *   label = @Translation("Checkout flow"),
 *   label_collection = @Translation("Checkout flows"),
 *   label_singular = @Translation("checkout flow"),
 *   label_plural = @Translation("checkout flows"),
 *   label_count = @PluralTranslation(
 *     singular = "@count checkout flow",
 *     plural = "@count checkout flows",
 *   ),
 *   handlers = {
 *     "list_builder" = "Drupal\\commerce_checkout\\CheckoutFlowListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\commerce_checkout\\Form\\CheckoutFlowForm",
 *       "edit" = "Drupal\\commerce_checkout\\Form\\CheckoutFlowForm",
 *       "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm"
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\Core\\Entity\\Routing\\DefaultHtmlRouteProvider",
 *     },
 *   },
 *   config_prefix = "commerce_checkout_flow",
 *   admin_permission = "administer commerce_checkout_flow",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "plugin",
 *     "configuration",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/checkout-flows/add",
 *     "edit-form" = "/admin/commerce/config/checkout-flows/manage/{commerce_checkout_flow}",
 *     "delete-form" = "/admin/commerce/config/checkout-flows/manage/{commerce_checkout_flow}/delete",
 *     "collection" =  "/admin/commerce/config/checkout-flows"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    '78a541f6bd1d3bb1858d60cc31737833' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The checkout flow ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    '349abf43522af00be3548733b23ce882' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The checkout flow label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    'ca4c6da0377e3f2c932a69d32cc85b56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    '5328a48fcf272dc130e797315ff01493' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin configuration.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    'f778b5694262a337575ebced5982040c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin collection that holds the checkout flow plugin.
   *
   * @var \\Drupal\\commerce\\CommerceSinglePluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    '396f02ad72c861a30bbd23c2add0f21f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    '101c20c87f9ca0169c639e65b5408dac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    'fb1f60c73e18ae267f6b8c815d1c5d1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    'c39cb52163fc3760282af191b414daae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    '64ab955cb1e3bba2572f610953b7cf81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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
    'dacca9778bf9355f760d257764a1384c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plugin collection that holds the checkout flow plugin.
   *
   * Ensures the plugin collection is initialized before returning it.
   *
   * @return \\Drupal\\commerce\\CommerceSinglePluginCollection
   *   The plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_checkout\\Entity\\CheckoutFlow',
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