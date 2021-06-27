<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/migrate_drupal/src/Plugin/migrate/source/DrupalSqlBase.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/DependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/DependencyInjection/DeprecatedServicePropertyTrait.php-1624732867',
   'data' => 
  array (
    '6f0df18edddde60d551f38cee26813c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A base class for source plugins using a Drupal database as a source.
 *
 * Provides general purpose helper methods that are commonly needed
 * when writing source plugins that use a Drupal database as a source, for
 * example:
 * - Check if the given module exists in the source database.
 * - Read Drupal configuration variables from the source database.
 *
 * For a full list, refer to the methods of this class.
 *
 * For available configuration keys, refer to the parent classes:
 * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase
 * @see \\Drupal\\migrate\\Plugin\\migrate\\source\\SourcePluginBase
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    'bc26ce64624c7a16536ff1d00ba4281f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for managing an object\'s dependencies.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    'd38b17761c9ee2d18bd6d4299a94bbbc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The object\'s dependencies.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    'ec0312a748e6b64d3c80cbd9a71d42dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a dependency.
   *
   * @param string $type
   *   Type of dependency being added: \'module\', \'theme\', \'config\', \'content\'.
   * @param string $name
   *   If $type is \'module\' or \'theme\', the name of the module or theme. If
   *   $type is \'config\' or \'content\', the result of
   *   EntityInterface::getConfigDependencyName().
   *
   * @see \\Drupal\\Core\\Entity\\EntityInterface::getConfigDependencyName()
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => 'addDependency',
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
    'acbdc954f3b8e9adcb2ba4feaaea450f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds multiple dependencies.
   *
   * @param array $dependencies
   *   An array of dependencies keyed by the type of dependency. One example:
   *   @code
   *   array(
   *     \'module\' => array(
   *       \'node\',
   *       \'field\',
   *       \'image\',
   *     ),
   *   );
   *   @endcode
   *
   * @see \\Drupal\\Core\\Entity\\DependencyTrait::addDependency
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => 'addDependencies',
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
    'c58b693aada3dc0029b56df3e805be19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a standard way to announce deprecated properties.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    'd1008278950fb3341dccf2914bafd044' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows to access deprecated/removed properties.
   *
   * This method must be public.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\DependencyInjection',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => '__get',
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
    'a539b3350484af12d8e0d128cebe635b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    '2bea8e8f058e24cff0e5ebcf2b879144' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The contents of the system table.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    '370bf755b52cd69214accaa0c8dc922a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * If the source provider is missing.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    'ca97de0d60d0d851bf4c67415d843f72' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    'aaaa87c6ebba6c4f6f3d364aa2860f0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    '56d0c4b2dc1fc86d1be60760d12a0b4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves all system data information from the source Drupal database.
   *
   * @return array
   *   List of system table information keyed by type and name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => 'getSystemData',
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
    '6e5c787ff07c0f6c8f0c88bd0af1af2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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
    'ee07fbb4c63a691982138510bc6a5894' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => 'checkRequirements',
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
    'b7084f1320eb3fd6218d8e6265628027' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a module schema_version from the source Drupal database.
   *
   * @param string $module
   *   Name of module.
   *
   * @return mixed
   *   The current module schema version on the origin system table or FALSE if
   *   not found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => 'getModuleSchemaVersion',
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
    '20c0b1c6f475b9d49ca003aa65f19f17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if a given module is enabled in the source Drupal database.
   *
   * @param string $module
   *   Name of module to check.
   *
   * @return bool
   *   TRUE if module is enabled on the origin system, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => 'moduleExists',
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
    '9f1c3505808733677b4c50ef42f11af9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reads a variable from a source Drupal database.
   *
   * @param $name
   *   Name of the variable.
   * @param $default
   *   The default value.
   *
   * @return mixed
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
         'functionName' => 'variableGet',
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
    '1adcac96a7b60df5fbb265bc557afa2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'deprecatedservicepropertytrait' => 'Drupal\\Core\\DependencyInjection\\DeprecatedServicePropertyTrait',
          'dependencytrait' => 'Drupal\\Core\\Entity\\DependencyTrait',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'stateinterface' => 'Drupal\\Core\\State\\StateInterface',
          'migrationinterface' => 'Drupal\\migrate\\Plugin\\MigrationInterface',
          'requirementsexception' => 'Drupal\\migrate\\Exception\\RequirementsException',
          'sqlbase' => 'Drupal\\migrate\\Plugin\\migrate\\source\\SqlBase',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\migrate_drupal\\Plugin\\migrate\\source\\DrupalSqlBase',
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