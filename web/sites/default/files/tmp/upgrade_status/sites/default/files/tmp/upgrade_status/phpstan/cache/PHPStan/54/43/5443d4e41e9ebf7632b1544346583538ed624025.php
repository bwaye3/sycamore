<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/block/src/Entity/Block.php-1624732867',
   'data' => 
  array (
    'd9b1205c373d8d81950bb767db007d90' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a Block configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "block",
 *   label = @Translation("Block"),
 *   label_collection = @Translation("Blocks"),
 *   label_singular = @Translation("block"),
 *   label_plural = @Translation("blocks"),
 *   label_count = @PluralTranslation(
 *     singular = "@count block",
 *     plural = "@count blocks",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\\block\\BlockAccessControlHandler",
 *     "view_builder" = "Drupal\\block\\BlockViewBuilder",
 *     "list_builder" = "Drupal\\block\\BlockListBuilder",
 *     "form" = {
 *       "default" = "Drupal\\block\\BlockForm",
 *       "delete" = "Drupal\\block\\Form\\BlockDeleteForm"
 *     }
 *   },
 *   admin_permission = "administer blocks",
 *   entity_keys = {
 *     "id" = "id",
 *     "status" = "status"
 *   },
 *   links = {
 *     "delete-form" = "/admin/structure/block/manage/{block}/delete",
 *     "edit-form" = "/admin/structure/block/manage/{block}",
 *     "enable" = "/admin/structure/block/manage/{block}/enable",
 *     "disable" = "/admin/structure/block/manage/{block}/disable",
 *   },
 *   config_export = {
 *     "id",
 *     "theme",
 *     "region",
 *     "weight",
 *     "provider",
 *     "plugin",
 *     "settings",
 *     "visibility",
 *   },
 *   lookup_keys = {
 *     "theme"
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'd089e40f48a656b31057686d7984fcb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The ID of the block.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '40f199628daecc9d40b6f1dbc3be6413' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin instance settings.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'fa98401d0f4c2ddcb63c994b0051f1df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The region this block is placed in.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'f7b0c58c688fed5b08e774b6c4f802a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The block weight.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'cbbebe44ad20b69ee20dd17d6fdc4014' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin instance ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '887b270e0dd4f23bd2d5449ef8209f57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The visibility settings for this block.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'c00f73c0e779de313477875b9bafa97a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The plugin collection that holds the block plugin for this entity.
   *
   * @var \\Drupal\\block\\BlockPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '5ed8eab5df591df59cff7c4eaa305752' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The available contexts for this block and its visibility conditions.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'ac0de9907a51096a289fce195d1052cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The visibility collection.
   *
   * @var \\Drupal\\Core\\Condition\\ConditionPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '83178bb42af61c950d9a4337cd60e17e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The condition plugin manager.
   *
   * @var \\Drupal\\Core\\Executable\\ExecutableManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '253334adc026843c266b54fff6e4b189' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme that includes the block plugin for this entity.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '71b6c2fb0deeca4bd0a7cdecd1152b0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'a430ff47bd55d0a86e424818df9a40af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Encapsulates the creation of the block\'s LazyPluginCollection.
   *
   * @return \\Drupal\\Component\\Plugin\\LazyPluginCollection
   *   The block\'s plugin collection.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '2476ce12cadac74d5724b06a34c27e5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'd71e77ddc425870c0f523c9baa4a1f7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'f1d8f0c61dbf9ca8ac68f271f9dd9400' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'getRegion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8a166ade3d3ba705d31d19f145ce6e9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'getTheme',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '03fdd45438a641da3180843432cd04ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '6642813e0c1f88d02a98a1686d9bab2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'bc1c8385be7af79b15c4c40f039fedc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sorts active blocks by weight; sorts inactive blocks by name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'bb0ef8e489aed30ed1023ce34c0cba37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'ec6b74d0d1977b199081cd9400507367' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    'a9265e6d1a51830e2cf6a5bfcac87d50' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'getVisibility',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e7831a4ed420c3884ef31aef6f5d052e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'setVisibilityConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bf3c54f3f63c0d14671bb84c6cf2f5cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'getVisibilityConditions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f5dd521c3ca30e07428800a3180332ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'getVisibilityCondition',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'deb76f032dbd48fc30f9818b09d56cce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the condition plugin manager.
   *
   * @return \\Drupal\\Core\\Executable\\ExecutableManagerInterface
   *   The condition plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'conditionPluginManager',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e071bb25c227b70d9911edeb912f3be6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'setRegion',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '89ef0382aa17487b355d9624671fbd2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
    '61631f7be4226101267897173eb9f89c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
         'functionName' => 'createDuplicateBlock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3361faea4f387a6307f35bc09797113d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'conditionplugincollection' => 'Drupal\\Core\\Condition\\ConditionPluginCollection',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'blockplugincollection' => 'Drupal\\block\\BlockPluginCollection',
          'blockinterface' => 'Drupal\\block\\BlockInterface',
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block\\Entity\\Block',
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
  ),
));