<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/ListDataDefinitionInterface.php-1624732867',
   'data' => 
  array (
    '1de656bbe4e19bc3ffed64a1ca544c82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for data definitions of lists.
 *
 * This interface is present on a data definition if it describes a list. The
 * actual lists implement the \\Drupal\\Core\\TypedData\\ListInterface.
 *
 * @see \\Drupal\\Core\\TypedData\\ListDefinition
 * @see \\Drupal\\Core\\TypedData\\ListInterface
 *
 * @ingroup typed_data
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
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
    '3b432bc50f21d5a7c4ef333d15366866' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a new list data definition for items of the given data type.
   *
   * This method is typically used by
   * \\Drupal\\Core\\TypedData\\TypedDataManager::createListDataDefinition() to
   * build a definition object for an arbitrary item type. When the definition
   * class is known, it is recommended to directly use the static create()
   * method on that class instead; e.g.:
   * @code
   *   $list_definition = \\Drupal\\Core\\TypedData\\ListDataDefinition::create(\'string\');
   * @endcode
   *
   * @param string $item_type
   *   The item type, for which a list data definition should be created.
   *
   * @return static
   *
   * @throws \\InvalidArgumentException
   *   If an unsupported data type gets passed to the class; e.g., \'string\' to a
   *   definition class handling lists of \'field_item:* data types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
         'functionName' => 'createFromItemType',
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
    'e761b581d1ee1271a0a9190f98180386' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the data definition of an item of the list.
   *
   * @return \\Drupal\\Core\\TypedData\\DataDefinitionInterface
   *   A data definition describing the list items.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ListDataDefinitionInterface',
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
  ),
));