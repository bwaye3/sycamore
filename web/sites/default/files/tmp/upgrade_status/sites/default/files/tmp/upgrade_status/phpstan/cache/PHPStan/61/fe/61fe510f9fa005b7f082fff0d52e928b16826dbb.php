<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Entity/ConfigEntityInterface.php-1624732867',
   'data' => 
  array (
    '62eece4c40e8191b89f1e911fe0a77de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines a common interface for configuration entities.
 *
 * @ingroup config_api
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
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
    'e936efd32f438204898fa1aad35c39a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enables the configuration entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'enable',
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
    '1ee6b04dab3e27b66ca03c23a475c87a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Disables the configuration entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'disable',
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
    'b951e10d971bf1ec9e8e6b91ebce17e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the status of the configuration entity.
   *
   * @param bool $status
   *   The status of the configuration entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'setStatus',
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
    '4d44984f6b469612e6484c734ad2d0aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the configuration entity is enabled.
   *
   * Status implementations for configuration entities should follow these
   * general rules:
   *   - Status does not affect the loading of entities. I.e. Disabling
   *     configuration entities should only have UI/access implications.
   *   - It should only take effect when a \'status\' key is explicitly declared
   *     in the entity_keys info of a configuration entity\'s annotation data.
   *   - Each entity implementation (entity/controller) is responsible for
   *     checking and managing the status.
   *
   * @return bool
   *   Whether the entity is enabled or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'status',
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
    'df4704b813e260fa561957cc7b7e304b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether this entity is being changed during the uninstall process.
   *
   * If you are writing code that responds to a change in this entity (insert,
   * update, delete, presave, etc.), and your code would result in a
   * configuration change (whether related to this configuration entity, another
   * configuration entity, or non-entity configuration) or your code would
   * result in a change to this entity itself, you need to check and see if this
   * entity change is part of an uninstall process, and skip executing your code
   * if that is the case.
   *
   * For example, \\Drupal\\language\\Entity\\ConfigurableLanguage::preDelete()
   * prevents the API from deleting the default language. However during an
   * uninstall of the language module it is expected that the default language
   * should be deleted.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'isUninstalling',
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
    '4c91c70151d0d5df8cf2485746c3b142' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the value of a property.
   *
   * @param string $property_name
   *   The name of the property that should be returned.
   *
   * @return mixed
   *   The property if it exists, or NULL otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'get',
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
    'f28e316229c28099b9821ae5286b58c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of a property.
   *
   * @param string $property_name
   *   The name of the property that should be set.
   * @param mixed $value
   *   The value the property should be set to.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
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
    '31578b7e833863436baef538857cfeca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Calculates dependencies and stores them in the dependency property.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
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
    'd7913fc2cb2ba8e13648ecbf2d6c5f93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Informs the entity that entities it depends on will be deleted.
   *
   * This method allows configuration entities to remove dependencies instead
   * of being deleted themselves. Configuration entities can use this method to
   * avoid being unnecessarily deleted during an extension uninstallation.
   * For example, entity displays remove references to widgets and formatters if
   * the plugin that supplies them depends on a module that is being
   * uninstalled.
   *
   * If this method returns TRUE then the entity needs to be re-saved by the
   * caller for the changes to take effect. Implementations should not save the
   * entity.
   *
   * @param array $dependencies
   *   An array of dependencies that will be deleted keyed by dependency type.
   *   Dependency types are, for example, entity, module and theme.
   *
   * @return bool
   *   TRUE if the entity has been changed as a result, FALSE if not.
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   * @see \\Drupal\\Core\\Config\\ConfigEntityBase::preDelete()
   * @see \\Drupal\\Core\\Config\\ConfigManager::uninstall()
   * @see \\Drupal\\Core\\Entity\\EntityDisplayBase::onDependencyRemoval()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
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
    'c4fd285f95f27ae1bccb83aaae402843' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the configuration dependencies.
   *
   * @return array
   *   An array of dependencies, keyed by $type.
   *
   * @see \\Drupal\\Core\\Config\\Entity\\ConfigDependencyManager
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'getDependencies',
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
    '69949ea0f04b4a0d1ed878a47d36bdd0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether this entity is installable.
   *
   * For example, a default view might not be installable if the base table
   * doesn\'t exist.
   *
   * @return bool
   *   TRUE if the entity is installable, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
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
    'e38e76baaf7fb0e1dda2b360ab11f956' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets that the data should be trusted.
   *
   * If the data is trusted then dependencies will not be calculated on save and
   * schema will not be used to cast the values. Generally this is only used
   * during module and theme installation. Once the config entity has been saved
   * the data will no longer be marked as trusted. This is an optimization for
   * creation of configuration during installation.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Config\\ConfigInstaller::createConfiguration()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'trustData',
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
    'a9a8d49fe77ae7cc360b0cbddbda5fe4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether on not the data is trusted.
   *
   * @return bool
   *   TRUE if the configuration data is trusted, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'synchronizableinterface' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
         'functionName' => 'hasTrustedData',
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