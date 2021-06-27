<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/EntityTraitManagerInterface.php-1624732871',
   'data' => 
  array (
    '49b98bc8eda516d89f73d088f3b30b24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for commerce_entity_trait plugin managers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitytraitinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\EntityTraitManagerInterface',
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
    'f7156c509bb8f678448f481ce318442e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definitions filtered by entity type.
   *
   * @param string $entity_type_id
   *   The entity type id.
   *
   * @return array
   *   The definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitytraitinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\EntityTraitManagerInterface',
         'functionName' => 'getDefinitionsByEntityType',
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
    '6349cecf68f7af3cdfad9559c7a86b19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Detects conflicts between the given trait and the installed traits.
   *
   * A conflict exists if the given trait has a field with a name that\'s already
   * taken by a field from an installed trait.
   *
   * @param \\Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface $trait
   *   The trait.
   * @param \\Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface[] $installed_traits
   *   The installed traits.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitytraitinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\EntityTraitManagerInterface',
         'functionName' => 'detectConflicts',
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
    '637da53a47d04c89a371b87788c87a1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Installs the given trait for the given entity type and bundle.
   *
   * Installing a trait attaches any fields that the trait provides to the
   * given bundle.
   *
   * @param \\Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface $trait
   *   The trait.
   * @param string $entity_type_id
   *   The entity type id.
   * @param string $bundle
   *   The bundle.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitytraitinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\EntityTraitManagerInterface',
         'functionName' => 'installTrait',
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
    '99564dc7a55a9291a2619268e966ae2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the given trait can be uninstalled.
   *
   * A trait can only be uninstalled if the fields it provides contain no data.
   *
   * @param \\Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface $trait
   *   The trait.
   * @param string $entity_type_id
   *   The entity type id.
   * @param string $bundle
   *   The bundle.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitytraitinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\EntityTraitManagerInterface',
         'functionName' => 'canUninstallTrait',
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
    '5de2cb75c8980fa6475a9af4373ce1a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Uninstalls the given trait for the given entity type and bundle.
   *
   * Uninstalling a trait removes any fields that the trait provides from the
   * given bundle.
   *
   * @param \\Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface $trait
   *   The trait.
   * @param string $entity_type_id
   *   The entity type id.
   * @param string $bundle
   *   The bundle.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitytraitinterface' => 'Drupal\\commerce\\Plugin\\Commerce\\EntityTrait\\EntityTraitInterface',
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\EntityTraitManagerInterface',
         'functionName' => 'uninstallTrait',
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