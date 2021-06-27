<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/FieldItemListInterface.php-1624732867',
   'data' => 
  array (
    'f392fedf139cf185c9372a17353a8956' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for fields, being lists of field items.
 *
 * This interface must be implemented by every entity field, whereas contained
 * field items must implement the FieldItemInterface.
 * Some methods of the fields are delegated to the first contained item, in
 * particular get() and set() as well as their magic equivalences.
 *
 * Optionally, a typed data object implementing
 * Drupal\\Core\\TypedData\\TypedDataInterface may be passed to
 * ArrayAccess::offsetSet() instead of a plain value.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\Field\\FieldItemInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
    '0eb8a44cf284809c406f29c05221683f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity that field belongs to.
   *
   * @return \\Drupal\\Core\\Entity\\FieldableEntityInterface
   *   The entity object. If the entity is translatable and a specific
   *   translation is required, always request it by calling ::getTranslation()
   *   or ::getUntranslated() as the language of the returned object is not
   *   defined.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'getEntity',
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
    '8c650d1e837bd56af953716be3faa48e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the langcode of the field values held in the object.
   *
   * @param string $langcode
   *   The langcode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'setLangcode',
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
    'e15b21227bc36bbca378f09d2f3feb86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the langcode of the field values held in the object.
   *
   * @return string
   *   The langcode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'getLangcode',
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
    '2d5114fef220781e178e21baa5f45f93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the field definition.
   *
   * @return \\Drupal\\Core\\Field\\FieldDefinitionInterface
   *   The field definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'getFieldDefinition',
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
    'e48bb756e08f8c3c968509126efd8347' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the array of field settings.
   *
   * @return array
   *   An array of key/value pairs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'getSettings',
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
    '05ab6bc619fffadf1925cfad3f32b5b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the value of a given field setting.
   *
   * @param string $setting_name
   *   The setting name.
   *
   * @return mixed
   *   The setting value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'getSetting',
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
    '1a581af1a53b12ee6a0c927d1e9a06e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Contains the default access logic of this field.
   *
   * See \\Drupal\\Core\\Entity\\EntityAccessControlHandlerInterface::fieldAccess() for
   * the parameter documentation.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'defaultAccess',
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
    '4606ff3308277479092845fe55b94b74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters out empty field items and re-numbers the item deltas.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'filterEmptyItems',
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
    '192a4bffd626e778b3bc119984a39468' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Gets a property value of to the first field item.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::__set()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
    'd9ee747932a67ff06e1eba068217dc07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Sets a property value of the first field item.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::__get()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => '__set',
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
    '62723455538bafb3b632915e1e398b87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Determines whether a property of the first field item is set.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::__unset()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => '__isset',
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
    '386cf4896d36b89fbaa0d50354e73433' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Unsets a property of the first field item.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::__isset()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => '__unset',
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
    '823f2225054f7c78f8058d5323b6e237' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom presave behavior for field values.
   *
   * This method is called during the process of saving an entity, just before
   * item values are written into storage.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::preSave()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
    '5108eb517e9d30441741884f23bc00d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom post-save behavior for field values.
   *
   * This method is called during the process of saving an entity, just after
   * item values are written into storage.
   *
   * @param bool $update
   *   Specifies whether the entity is being updated or created.
   *
   * @return bool
   *   Whether field items should be rewritten to the storage as a consequence
   *   of the logic implemented by the custom behavior.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::postSave()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
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
    'd1fdd9feded8ea8557be4bcd7969521d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom delete behavior for field values.
   *
   * This method is called during the process of deleting an entity, just before
   * values are deleted from storage.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'delete',
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
    '3d02bdc4d18aab0b2645c32d0268e9b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Defines custom revision delete behavior for field values.
   *
   * This method is called from during the process of deleting an entity
   * revision, just before the field values are deleted from storage. It is only
   * called for entity types that support revisioning.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'deleteRevision',
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
    '57017861e173c4d25003fa17ad51aed4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a renderable array for the field items.
   *
   * @param string|array $display_options
   *   Can be either the name of a view mode, or an array of display settings.
   *   See EntityViewBuilderInterface::viewField() for more information.
   *
   * @return array
   *   A renderable array for the field values.
   *
   * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewField()
   * @see \\Drupal\\Core\\Field\\FieldItemInterface::view()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'view',
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
    'd2335e43d6da6a137ee2465beda7de66' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Populates a specified number of field items with valid sample data.
   *
   * @param int $count
   *   The number of items to create.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'generateSampleItems',
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
    'bcaf45ffd2cb28a07847e1c0ed10ccff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a form for the default value input.
   *
   * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
   * administrators to configure instance-level default value.
   *
   * @param array $form
   *   The form where the settings form is being included in.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the (entire) configuration form.
   *
   * @return array
   *   The form definition for the field default value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'defaultValuesForm',
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
    '81f58c1e08ced0dfa3490721fb56ac9e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the submitted default value.
   *
   * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
   * administrators to configure instance-level default value.
   *
   * @param array $element
   *   The default value form element.
   * @param array $form
   *   The form where the settings form is being included in.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the (entire) configuration form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'defaultValuesFormValidate',
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
    '03f3977ce1455dd7e09e89163f1d5673' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the submitted default value.
   *
   * Invoked from \\Drupal\\field_ui\\Form\\FieldConfigEditForm to allow
   * administrators to configure instance-level default value.
   *
   * @param array $element
   *   The default value form element.
   * @param array $form
   *   The form where the settings form is being included in.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The form state of the (entire) configuration form.
   *
   * @return array
   *   The field default value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'defaultValuesFormSubmit',
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
    '9d59cf9b2917e080dcec0da156133a2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes the default value before being applied.
   *
   * Defined or configured default values of a field might need some processing
   * in order to be a valid runtime value for the field type; e.g., a date field
   * could process the defined value of \'NOW\' to a valid date.
   *
   * @param array $default_value
   *   The unprocessed default value defined for the field, as a numerically
   *   indexed array of items, each item being an array of property/value pairs.
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity for which the default value is generated.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $definition
   *   The definition of the field.
   *
   * @return array
   *   The return default value for the field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'processDefaultValue',
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
    'dcacf3371fa83e26db8a86dd0fb93b2d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines equality to another object implementing FieldItemListInterface.
   *
   * This method is usually used by the storage to check for not computed
   * value changes, which will be saved into the storage.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $list_to_compare
   *   The field item list to compare to.
   *
   * @return bool
   *   TRUE if the field item lists are equal, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'equals',
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
    '33a29adbb295883f31d3c253b86000cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the field has relevant changes.
   *
   * This is for example used to determine if a revision of an entity has
   * changes in a given translation. Unlike
   * \\Drupal\\Core\\Field\\FieldItemListInterface::equals(), this can report
   * that for example an untranslatable field, despite being changed and
   * therefore technically affecting all translations, is only internal metadata
   * or only affects a single translation.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $original_items
   *   The original field items to compare against.
   * @param string $langcode
   *   The language that should be checked.
   *
   * @return bool
   *   TRUE if the field has relevant changes, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'accessibleinterface' => 'Drupal\\Core\\Access\\AccessibleInterface',
          'listinterface' => 'Drupal\\Core\\TypedData\\ListInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldItemListInterface',
         'functionName' => 'hasAffectingChanges',
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