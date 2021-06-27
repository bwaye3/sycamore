<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/ListInterface.php-1624732867',
   'data' => 
  array (
    'a615993bd921a6ac84678d66524d6839' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for a list of typed data.
 *
 * A list of typed data contains only items of the same type, is ordered and may
 * contain duplicates. Note that the data type of a list is always \'list\'.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\TypedData\\ListDefinitionInterface
 *
 * @ingroup typed_data
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
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
    '31dc6e7bf5c74a074d4b9ca5d06f4363' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the data definition.
   *
   * @return \\Drupal\\Core\\TypedData\\ListDataDefinitionInterface
   *   The data definition object describing the list.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
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
    '4cfd8519a50e61c2336ca862cd1178f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the list contains any non-empty items.
   *
   * @return bool
   *   TRUE if the list is empty, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
         'functionName' => 'isEmpty',
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
    '3bb3c1a5be159c9858e4cec45d17eb53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the definition of a contained item.
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
   *   The data definition of contained items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
         'functionName' => 'getItemDefinition',
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
    '22f22f9897ca19400a059dd597eee79a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the item at the specified position in this list.
   *
   * @param int $index
   *   Index of the item to return.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface|null
   *   The item at the specified position in this list, or NULL if no item
   *   exists at that position.
   *
   * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
   *   If the complex data structure is unset and no item can be created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
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
    'c4e2ee5cf0d695605c4e553535215458' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of the item at a given position in the list.
   *
   * @param int $index
   *   The position of the item in the list. Since a List only contains
   *   sequential, 0-based indexes, $index has to be:
   *   - Either the position of an existing item in the list. This updates the
   *   item value.
   *   - Or the next available position in the sequence of the current list
   *   indexes. This appends a new item with the provided value at the end of
   *   the list.
   * @param mixed $value
   *   The value of the item to be stored at the specified position.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   If the $index is invalid (non-numeric, or pointing to an invalid
   *   position in the list).
   * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
   *   If the complex data structure is unset and no item can be set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
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
    'c04e4ce46187fb6ee1fa39438b1c87e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the first item in this list.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface|null
   *   The first item in this list, or NULL if there are no items.
   *
   * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
   *   If the complex data structure is unset and no item can be created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
         'functionName' => 'first',
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
    'f7fc6e823f43b0c4bb503f752c608fc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Appends a new item to the list.
   *
   * @param mixed $value
   *   The value of the new item.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
   *   The item that was appended.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
         'functionName' => 'appendItem',
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
    'd88d0e6821e3d894071e6b43022b7881' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes the item at the specified position.
   *
   * @param int $index
   *   Index of the item to remove.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
         'functionName' => 'removeItem',
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
    'f9a4e1d08fc2e45436b5f64d6abf2364' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters the items in the list using a custom callback.
   *
   * @param callable $callback
   *   The callback to use for filtering. Like with array_filter(), the
   *   callback is called for each item in the list. Only items for which the
   *   callback returns TRUE are preserved.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListInterface',
         'functionName' => 'filter',
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