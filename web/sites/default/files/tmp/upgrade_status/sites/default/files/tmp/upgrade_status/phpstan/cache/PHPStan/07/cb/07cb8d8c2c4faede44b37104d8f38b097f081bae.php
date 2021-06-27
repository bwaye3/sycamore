<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/block_visibility_groups/block_visibility_groups_admin/src/Plugin/ConditionCreator/NodeTypeConditionCreator.php-1624732871',
   'data' => 
  array (
    'b9a79debd6fc2bc67e560f614f56439d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A condition creator to be used in creating user role condition.
 *
 * @ConditionCreator(
 *   id = "node_type",
 *   label = "Content Types",
 *   condition_plugin = "node_type"
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
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
    'c8902e7109ce880e168c3f42e4777a28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
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
    'ba05b72315e2079dd2d27de9b637731b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * NodeTypeConditionCreator constructor.
   *
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   * @param \\Drupal\\Core\\Entity\\EntityStorageInterface $entityStorage
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
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
    '642987b6c372baa9c5fcf18dffe03ac0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an instance of the plugin.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   The container to pull out services used in the plugin.
   *
   * @param array $configuration
   * @param string $plugin_id
   * @param mixed $plugin_definition
   *
   * @return static Returns an instance of this plugin.
   *   Returns an instance of this plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
         'functionName' => 'create',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '538915ab373ff293e8ae34e395da78d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
         'functionName' => 'getNewConditionLabel',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2a2f467ccb40ee983e899b67e1dbe5d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
         'functionName' => 'createConditionElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '977c240e986ea09700d098e69f5625ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\node\\Entity\\Node $node */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
         'functionName' => 'createConditionElements',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6280b041e4d39694e4de2047f4671b7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
         'functionName' => 'itemSelected',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6193b79f155ca56356fd546473f4a6c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator',
         'uses' => 
        array (
          'conditioncreatorbase' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreatorBase',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'node' => 'Drupal\\node\\Entity\\Node',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\block_visibility_groups_admin\\Plugin\\ConditionCreator\\NodeTypeConditionCreator',
         'functionName' => 'createConditionConfig',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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