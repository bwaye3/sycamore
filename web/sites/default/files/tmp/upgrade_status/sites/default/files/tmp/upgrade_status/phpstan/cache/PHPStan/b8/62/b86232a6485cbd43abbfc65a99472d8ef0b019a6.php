<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/SynchronizableInterface.php-1624732867',
   'data' => 
  array (
    'c62cb8d750b47284f62dcce12b35e30b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines methods for an entity that supports synchronization.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
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
    '646ace871075001b75dbdd5b4359a4e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the status of the synchronization flag.
   *
   * @param bool $status
   *   The status of the synchronization flag.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
         'functionName' => 'setSyncing',
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
    'da0494b453c592d9bd0786ba410cdb0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether this entity is being changed as part of a synchronization.
   *
   * If you are writing code that responds to a change in this entity (insert,
   * update, delete, presave, etc.), and your code would result in a change to
   * this entity itself, a configuration change (whether related to this entity,
   * another entity, or non-entity configuration), you need to check and see if
   * this entity change is part of a synchronization process, and skip executing
   * your code if that is the case.
   *
   * For example, \\Drupal\\node\\Entity\\NodeType::postSave() adds the default body
   * field to newly created node type configuration entities, which is a
   * configuration change. You would not want this code to run during an import,
   * because imported entities were already given the body field when they were
   * originally created, and the imported configuration includes all of their
   * currently-configured fields. On the other hand,
   * \\Drupal\\field\\Entity\\FieldStorageConfig::preSave() and the methods it calls
   * make sure that the storage tables are created or updated for the field
   * storage configuration entity, which is not a configuration change, and it
   * must be done whether due to an import or not. So, the first method should
   * check $entity->isSyncing() and skip executing if it returns TRUE, and the
   * second should not perform this check.
   *
   * @return bool
   *   TRUE if the configuration entity is being created, updated, or deleted
   *   through a synchronization process.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\SynchronizableInterface',
         'functionName' => 'isSyncing',
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