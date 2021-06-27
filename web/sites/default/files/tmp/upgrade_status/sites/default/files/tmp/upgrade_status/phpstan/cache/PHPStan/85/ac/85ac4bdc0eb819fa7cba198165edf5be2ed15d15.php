<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Entity/View.php-1624732869',
   'data' => 
  array (
    '4bf092532f316a65bf056be9636295b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a View configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "view",
 *   label = @Translation("View", context = "View entity type"),
 *   label_collection = @Translation("Views", context = "View entity type"),
 *   label_singular = @Translation("view", context = "View entity type"),
 *   label_plural = @Translation("views", context = "View entity type"),
 *   label_count = @PluralTranslation(
 *     singular = "@count view",
 *     plural = "@count views",
 *     context = "View entity type",
 *   ),
 *   admin_permission = "administer views",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "status" = "status"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "module",
 *     "description",
 *     "tag",
 *     "base_table",
 *     "base_field",
 *     "display",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '8272b5efbda5704b3f54a7a93a757b6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the base table this view will use.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '93bf0bf7d767afe228ba15bc0a20324d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The unique ID of the view.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '9e46f0b7289b3c86698709d4d9eac9ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The label of the view.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '9cde08405150873964cbf6598be1b265' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The description of the view, which is used only in the interface.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    'a852b89703fe33bbd4edf3b1a17a2bd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The "tags" of a view.
   *
   * The tags are stored as a single string, though it is used as multiple tags
   * for example in the views overview.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    'ca82cf4d8ee69a03df53150382470090' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores all display handlers of this view.
   *
   * An array containing Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase
   * objects.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '313890fed07d406c4c4df5f1a482c218' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the base field to use.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    'cd28d52fce1be733d7ac3c1c5f781895' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores a reference to the executable version of this view.
   *
   * @var \\Drupal\\views\\ViewExecutable
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '73c22edb8ff7e47ab4241532aa2e8e01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module implementing this view.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '72e8ce0f80b3fe9990725e18a1eb2d32' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'getExecutable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '55905f9b72949058e5da213da2c9dcc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '0f31aef11779670ca4b5c046ac644819' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '5102984ebd1b45b3fe22ad8e2cfab1e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'addDisplay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '7424eb0f5c2a7bd00beedef0a6844bed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a display ID of a certain plugin type.
   *
   * @param string $plugin_id
   *   Which plugin should be used for the new display ID.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'generateDisplayId',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd262ad616fbf5dfdb9cfcd129809ac66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'getDisplay',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '81d058f25ad1dbc83e214f0eafa63b25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'duplicateDisplayAsType',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'eb39519df799e25c51a3904410399d6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '32a7cd7df5873a860df5e89564bedf79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    'bbf592e9f4885127d96f89cb6389d9e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fixes table names for revision metadata fields of revisionable entities.
   *
   * Views for revisionable entity types using revision metadata fields might
   * be using the wrong table to retrieve the fields after system_update_8300
   * has moved them correctly to the revision table. This method updates the
   * views to use the correct tables.
   *
   * @param array &$displays
   *   An array containing display handlers of a view.
   *
   * @todo Remove this method and its usage in Drupal 9. See
   *   https://www.drupal.org/project/drupal/issues/3069405.
   * @see https://www.drupal.org/node/2831499
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'fixTableNames',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'af8c2575a8531a0f0b62e5639d1608ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fills in the cache metadata of this view.
   *
   * Cache metadata is set per view and per display, and ends up being stored in
   * the view\'s configuration. This allows Views to determine very efficiently:
   * - the max-age
   * - the cache contexts
   * - the cache tags
   *
   * In other words: this allows us to do the (expensive) work of initializing
   * Views plugins and handlers to determine their effect on the cacheability of
   * a view at save time rather than at runtime.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'addCacheMetadata',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8c3a3352923c073baabfb276fdad16ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '32bf6778a1d014ca5ff8726ef7a008bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'postLoad',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ce91ee4c01e7c23a222f2bd2c74ed365' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'preCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fdaab295a0cf9df7c76046c531bb71da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'postCreate',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5f9afa05c783696801a5cbafa406768a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1f0782065cd6a5fc3cf10ee6aba8111c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\ViewEntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'preDelete',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '1b0f22b087547ef0427f5b62b313d7ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
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
    '74df9274031e5a392e05d8bedade6cde' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'mergeDefaultDisplaysOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '90a4b6a533d7349a4f49a445e0698a1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'isInstallable',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8a0051f9274af2af981e4197dedf2078' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => '__sleep',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '83f0259f55ef06c88b7e0d43451f177c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Invalidates cache tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'invalidateCaches',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '722c8b41ab15c7469b92736a87881442' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Entity',
         'uses' => 
        array (
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'contententitytypeinterface' => 'Drupal\\Core\\Entity\\ContentEntityTypeInterface',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'dependentwithremovalplugininterface' => 'Drupal\\views\\Plugin\\DependentWithRemovalPluginInterface',
          'views' => 'Drupal\\views\\Views',
          'viewentityinterface' => 'Drupal\\views\\ViewEntityInterface',
        ),
         'className' => 'Drupal\\views\\Entity\\View',
         'functionName' => 'onDependencyRemoval',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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