<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/number_pattern/src/Entity/NumberPattern.php-1624732871',
   'data' => 
  array (
    '2589fd58a2ea4bed7b186fa36495fc21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the number pattern entity class.
 *
 * @ConfigEntityType(
 *   id = "commerce_number_pattern",
 *   label = @Translation("Number pattern"),
 *   label_collection = @Translation("Number patterns"),
 *   label_singular = @Translation("number pattern"),
 *   label_plural = @Translation("number patterns"),
 *   label_count = @PluralTranslation(
 *     singular = "@count number pattern",
 *     plural = "@count number patterns",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\commerce_number_pattern\\NumberPatternAccessControlHandler",
 *     "form" = {
 *       "add" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternForm",
 *       "duplicate" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternForm",
 *       "edit" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternForm",
 *       "delete" = "Drupal\\Core\\Entity\\EntityDeleteForm",
 *       "reset-sequence" = "Drupal\\commerce_number_pattern\\Form\\NumberPatternResetSequenceForm",
 *     },
 *     "local_task_provider" = {
 *       "default" = "Drupal\\entity\\Menu\\DefaultEntityLocalTaskProvider",
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\\commerce_number_pattern\\NumberPatternRouteProvider",
 *     },
 *     "list_builder" = "Drupal\\commerce_number_pattern\\NumberPatternListBuilder",
 *   },
 *   admin_permission = "administer commerce_number_pattern",
 *   config_prefix = "commerce_number_pattern",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "targetEntityType",
 *     "plugin",
 *     "configuration",
 *   },
 *   links = {
 *     "add-form" = "/admin/commerce/config/number-patterns/add",
 *     "edit-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/edit",
 *     "duplicate-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/duplicate",
 *     "delete-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/delete",
 *     "reset-sequence-form" = "/admin/commerce/config/number-patterns/{commerce_number_pattern}/reset-sequence",
 *     "collection" = "/admin/commerce/config/number-patterns"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    'e221174e9e295942709340a3770ed705' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number pattern ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    'fc8e566c68cc9361ff390b275d9e5f42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The number pattern label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '1d591dbf1b531f6afdf51a9506b0a683' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The target entity type ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '679e44113c088da99ad6e99ab39fb0a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '02b611d6d1db85098e8997341ca384a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin configuration.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '47cda6a0dd14fb268027cd08e5049511' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin collection that holds the number pattern plugin.
   *
   * @var \\Drupal\\commerce\\CommerceSinglePluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '2499c97e6b79293a5b7f3c8d29819bb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
         'functionName' => 'getTargetEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4e024d78b5dee95de7e3f389648ce12a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
         'functionName' => 'setTargetEntityTypeId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7520f9962c44809d4dac73dabc430007' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '9f0211a71bb4b8eedd51504f30e5868e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '90b840a67b99a3749ad9ea8fc6bf2847' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '7f0a192f78a4720aa265cd1c174aa6ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '70718716dd54c680a65123dc698b26f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '0865c492f42f47648ab63706b9c99542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    '74eb68b7a90a20b2acbcca60a686f0f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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
    'd136846b7a1354748f10b647408744f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plugin collection that holds the number pattern plugin.
   *
   * Ensures the plugin collection is initialized before returning it.
   *
   * @return \\Drupal\\commerce\\CommerceSinglePluginCollection
   *   The plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_number_pattern\\Entity',
         'uses' => 
        array (
          'commercesingleplugincollection' => 'Drupal\\commerce\\CommerceSinglePluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\commerce_number_pattern\\Entity\\NumberPattern',
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