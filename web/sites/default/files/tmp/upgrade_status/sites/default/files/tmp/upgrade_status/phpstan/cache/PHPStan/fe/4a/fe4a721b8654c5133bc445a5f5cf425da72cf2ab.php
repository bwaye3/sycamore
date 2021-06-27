<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/TypedDataInterface.php-1624732867',
   'data' => 
  array (
    'b3759e94fec68ecbfa03202b1e574ce8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for typed data objects.
 *
 * @see \\Drupal\\Core\\TypedData\\DataDefinitionInterface
 *
 * @ingroup typed_data
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
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
    'd9959739d97ba1daad176b7869fde9b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a TypedData object given its definition and context.
   *
   * @param \\Drupal\\Core\\TypedData\\DataDefinitionInterface $definition
   *   The data definition.
   * @param string|null $name
   *   (optional) The name of the created property, or NULL if it is the root
   *   of a typed data tree. Defaults to NULL.
   * @param \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface $parent
   *   (optional) The parent object of the data property, or NULL if it is the
   *   root of a typed data tree. Defaults to NULL.
   *
   * @todo When \\Drupal\\Core\\Config\\TypedConfigManager has been fixed to use
   *   class-based definitions, type-hint $definition to
   *   DataDefinitionInterface. https://www.drupal.org/node/1928868
   *
   * @see \\Drupal\\Core\\TypedData\\TypedDataManager::create()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
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
    '639e49582540ce4d84505faad5d57971' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the data definition.
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
   *   The data definition object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getDataDefinition',
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
    '85ce1bfd7fb9e00bdf8e5e68d4686d61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the data value.
   *
   * @return mixed
   *   The data value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getValue',
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
    'a62c367d79079cddd3b72aced354194d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the data value.
   *
   * @param mixed|null $value
   *   The value to set in the format as documented for the data type or NULL to
   *   unset the data value.
   * @param bool $notify
   *   (optional) Whether to notify the parent object of the change. Defaults to
   *   TRUE. If a property is updated from a parent object, set it to FALSE to
   *   avoid being notified again.
   *
   * @throws \\InvalidArgumentException
   *   If the value input is inappropriate.
   * @throws \\Drupal\\Core\\TypedData\\Exception\\ReadOnlyException
   *   If the data is read-only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'setValue',
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
    'aa052999e30c63db0414a2fd1744b47c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a string representation of the data.
   *
   * @return string
   *   The string representation of the data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getString',
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
    '33ebe596b604221610108569afbf81c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of validation constraints.
   *
   * @return array
   *   Array of constraints, each being an instance of
   *   \\Symfony\\Component\\Validator\\Constraint.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getConstraints',
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
    '34fccf109ba801f7c627c23b60a75ac7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the currently set data value.
   *
   * @return \\Symfony\\Component\\Validator\\ConstraintViolationListInterface
   *   A list of constraint violations. If the list is empty, validation
   *   succeeded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'validate',
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
    '217e712557a6686f50bffe07af29585e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies the default value.
   *
   * @param bool $notify
   *   (optional) Whether to notify the parent object of the change. Defaults to
   *   TRUE. If a property is updated from a parent object, set it to FALSE to
   *   avoid being notified again.
   *
   * @return $this
   *   Returns itself to allow for chaining.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'applyDefaultValue',
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
    '45b4cc253269243cf4a18218d3a3e1c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the name of a property or item.
   *
   * @return string|int|null
   *   If the data is a property of some complex data, the name of the property.
   *   If the data is an item of a list, the name is the numeric position of the
   *   item in the list, starting with 0. Otherwise, NULL is returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getName',
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
    'd8b0e2925ac82a07e36fb7518ff6df91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the parent data structure; i.e. either complex data or a list.
   *
   * @return \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface|null
   *   The parent data structure, either complex data or a list; or NULL if this
   *   is the root of the typed data tree.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getParent',
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
    '940fe62acd3c4414bfc2d5f0f8a182dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the root of the typed data tree.
   *
   * Returns the root data for a tree of typed data objects; e.g. for an entity
   * field item the root of the tree is its parent entity object.
   *
   * @return \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface
   *   The root data structure, either complex data or a list.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getRoot',
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
    'e6930b75e965bd4412f7c20565dee953' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the property path of the data.
   *
   * The trail of property names relative to the root of the typed data tree,
   * separated by dots; e.g. \'field_text.0.format\'.
   *
   * @return string
   *   The property path relative to the root of the typed tree, or an empty
   *   string if this is the root.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'getPropertyPath',
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
    '50bcd0468647102ab415d53317b5eadc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the context of a property or item via a context aware parent.
   *
   * This method is supposed to be called by the factory only.
   *
   * @param string|null $name
   *   (optional) The name of the property or the delta of the list item,
   *   or NULL if it is the root of a typed data tree. Defaults to NULL.
   * @param \\Drupal\\Core\\TypedData\\TraversableTypedDataInterface|null $parent
   *   (optional) The parent object of the data property, or NULL if it is the
   *   root of a typed data tree. Defaults to NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TypedDataInterface',
         'functionName' => 'setContext',
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