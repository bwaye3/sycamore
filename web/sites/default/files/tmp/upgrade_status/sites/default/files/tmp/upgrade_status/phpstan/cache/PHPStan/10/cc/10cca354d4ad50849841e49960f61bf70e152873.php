<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/block_visibility_groups/src/Entity/BlockVisibilityGroup.php-1624732871',
   'data' => 
  array (
    'd00bd311fd375aefaf11029ccdb16ffc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the Block Visibility Group entity.
 *
 * @ConfigEntityType(
 *   id = "block_visibility_group",
 *   label = @Translation("Block Visibility Group"),
 *   handlers = {
 *     "list_builder" =
 *     "Drupal\\block_visibility_groups\\Controller\\BlockVisibilityGroupListBuilder",
 *     "form" = {
 *       "add" =
 *       "Drupal\\block_visibility_groups\\Form\\BlockVisibilityGroupForm",
 *       "edit" =
 *       "Drupal\\block_visibility_groups\\Form\\BlockVisibilityGroupForm",
 *       "delete" =
 *       "Drupal\\block_visibility_groups\\Form\\BlockVisibilityGroupDeleteForm"
 *     }
 *   },
 *   config_prefix = "block_visibility_group",
 *   admin_permission = "administer block visibility groups",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "logic",
 *     "conditions",
 *     "allow_other_conditions",
 *   },
 *   links = {
 *     "canonical" =
 *     "/admin/structure/block/block-visibility-group/{block_visibility_group}",
 *     "edit-form" =
 *     "/admin/structure/block/block-visibility-group/{block_visibility_group}/edit",
 *     "delete-form" =
 *     "/admin/structure/block/block-visibility-group/{block_visibility_group}/delete",
 *     "collection" =  "/admin/structure/block/block-visibility-group"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    'cbac709f8e73481ef4515c332db2650f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Block Visibility Group ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    '4327ed2b31b385e454d98db719e76c6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether other conditions are allowed in the group.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    '541190c06a708f7df716a27a82ba0098' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether other conditions are allowed in the group.
   *
   * @return bool
   *   True if conditions are allowed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'isAllowOtherConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2b5af67fa1c154b2dc3fe5ef3abe5843' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether other conditions should be allowed.
   *
   * @param bool $allow_other_conditions
   *   Whether other conditions should be allowed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'setAllowOtherConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1d394a9c21b45758e09a1d1fda00da2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    'b73ce1c65ef20c0fb7cb3387f8df57ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Block Visibility Group label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    'ffc3b7d60d783108c504826cc5eb410f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration of conditions.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    'd26357010a70b5700e45d2c9d8187cab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tracks the logic used to compute, either \'and\' or \'or\'.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    'af2b4b125f48db1571a8bff80f64f7fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets logic used to compute, either \'and\' or \'or\'.
   *
   * @return string
   *   Either \'and\' or \'or\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'getLogic',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '324e5a65cb4c279e058d4e709eb81471' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets logic used to compute, either \'and\' or \'or\'.
   *
   * @param string $logic
   *   Either \'and\' or \'or\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'setLogic',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c46555a8fe85400c05d56592e5625ad1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin collection that holds the conditions.
   *
   * @var \\Drupal\\Component\\Plugin\\LazyPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    '8dfa355d0bf941ef4a59d4ee5e84e687' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the conditions.
   *
   * @return \\Drupal\\Core\\Condition\\ConditionInterface[]|\\Drupal\\Core\\Condition\\ConditionPluginCollection
   *   An array of configured condition plugins.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
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
    '69e33717506ffdcd3747f18dea532364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'getCondition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '525b7ee6755a7e5987df52ab15f83687' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'addCondition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd603c65faa438297c993248082c3b162' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'removeCondition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e24cfa7f0da641ee80f9db2099ec672a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Entity',
         'uses' => 
        array (
          'blockvisibilitygroupinterface' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
         'functionName' => 'getCacheTags',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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