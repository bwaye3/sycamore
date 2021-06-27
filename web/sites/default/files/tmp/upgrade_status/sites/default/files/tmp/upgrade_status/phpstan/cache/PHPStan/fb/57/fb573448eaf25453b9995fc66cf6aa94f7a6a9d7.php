<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/block_visibility_groups/src/BlockVisibilityGroupedListBuilder.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/block_visibility_groups/src/BlockVisibilityLister.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/block_visibility_groups/src/ConditionsSetFormTrait.php-1624732871',
   'data' => 
  array (
    '5e5268b1271092ce890d4ec89f08644a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Extends BlockListBuilder to add our elements only show certain blocks.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
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
    '6d89d723c44f1575e6f4e1afa5e056b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides functionality to get block visibility conditions and labels.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
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
    '7aba632275deb3e18311ab4f36b38f71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get labels for groups.
   *
   * @return array
   *   The list of labels.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getBlockVisibilityLabels',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '64b97efb5fdfdeb255e8559245e4a771' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the visibility group for a block.
   *
   * @param \\Drupal\\block\\Entity\\Block $block
   *   The block instance.
   *
   * @return string
   *   The config group name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getGroupForBlock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '67bb1f51cfe6fabe16fafc5a5af82267' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var ConditionPluginCollection $conditions */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getGroupForBlock',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd3d852d1d75c22992ccd52877fe241a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 *
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
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
    'beed7116d0588cca34ef8eea6ceaa3b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a conditions set form.
   *
   * @param array $form
   *   The form array.
   * @param \\Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup $block_visibility_group
   *   The BlockVisibilityGroup instance.
   *
   * @return array
   *   The conditions section form renderable array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'json' => 'Drupal\\Component\\Serialization\\Json',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'url' => 'Drupal\\Core\\Url',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'createConditionsSet',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '14c2ac0f3a612b3a2f160174f855ef45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Used in query string to denote blocks that don\'t have a group set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
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
    'a423f9b5aad8698dd6808fe9d24492ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Used in Query string to denote showing all blocks.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
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
    '31ae264c78573fbb37c23fcc37954ad0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity storage class for Block Visibility Groups.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
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
    'ecb78fc8b30d513e7281377f74b53da6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The state service.
   *
   * @var \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
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
    'd9edd1f73217ac65d804b143cb6fe64c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new BlockVisibilityGroupedListBuilder object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeInterface $entity_type
   *   The entity type definition.
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $storage
   *   The entity storage class.
   * @param \\Drupal\\Core\\Theme\\ThemeManagerInterface $theme_manager
   *   The theme manager.
   * @param \\Drupal\\Core\\Form\\FormBuilderInterface $form_builder
   *   The form builder.
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $block_visibility_group_storage
   *   The group entity storage.
   * @param \\Drupal\\Core\\State\\StateInterface $state
   *   The state system service.
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface|null $messenger
   *   The messenger service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => '__construct',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '435599a68389ea671878a63193ef5696' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'createInstance',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '99965e54ed243f84b0bd2c0010a2e6d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '05f6bc14a5ebc76a509a08153165378d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup $group */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'buildForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8a88fe94f92b931fc68c26d27ed3ba56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'submitForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '159c73ea0fd0b47c6e1045338bc73952' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the group from the query string.
   *
   * @return mixed|string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getCurrentBlockVisibilityGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5f6335367a7552b08e74931cd9da1504' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get Group options info to group select dropdown.
   *
   * @return array
   *   Keys = Group keys
   *   Values array with keys:
   *     label
   *     path - URL to redirect to Group page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getBlockVisibilityGroupOptions',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '86656fa56f821d6c063f6d1538fa86fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'buildBlocksForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '4f679a510e855094d8f1ea26bf82adb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Url $url */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'buildBlocksForm',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'f8ffd423b2b45c8f4bcc03a9fe970ded' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the Block Visibility Group for this page request.
   *
   * @param bool|false $groups_only
   *   Should this function return only group key
   *   or also a constant value if no group.
   *
   * @return string|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getBlockVisibilityGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0fa28b7237b6d069cc2ba65401dcfdc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   *
   * Unset blocks that should not be shown with current group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getEntityIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '55a19c6ab18563c1d7b4e51d69a32012' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Block $block */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getEntityIds',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e561e152495bac007e56726c72c46390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if any groups exist.
   *
   * @return bool
   *   TRUE if any groups exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'groupsExist',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '99a61fdb9fd800f4c4889c5c9e9ae567' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add Column to show Visibility Group.
   *
   * @param array $form
   *   The form array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'addGroupColumn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ba49188b0940080284532d80b6d1ccc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Block $block */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'addGroupColumn',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd032d3f82fc6b114eb063fd3c86ea877' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if global(unset) blocks should be shown when viewing a group.
   *
   * @return mixed
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'getShowGlobalWithGroup',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cb4cd106c109d65c2c2c45865348a1c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a help description.
   *
   * @param array $form
   *   The form array.
   * @param $group
   *   The block visibility group instance.
   *
   * @return array
   *   A renderable array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups',
         'uses' => 
        array (
          'blocklistbuilder' => 'Drupal\\block\\BlockListBuilder',
          'blockvisibilitygroup' => 'Drupal\\block_visibility_groups\\Entity\\BlockVisibilityGroup',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'formbuilderinterface' => 'Drupal\\Core\\Form\\FormBuilderInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'messengerinterface' => 'Drupal\\Core\\Messenger\\MessengerInterface',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups\\BlockVisibilityGroupedListBuilder',
         'functionName' => 'createHelp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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