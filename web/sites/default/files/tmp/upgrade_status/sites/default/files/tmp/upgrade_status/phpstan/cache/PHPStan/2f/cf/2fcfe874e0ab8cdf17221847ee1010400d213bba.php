<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/ComplexDataInterface.php-1624732867',
   'data' => 
  array (
    '612028c236b4c761560e3a7e7e900699' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for complex data; i.e. data containing named and typed properties.
 *
 * The name of a property has to be a valid PHP variable name, starting with
 * an alphabetic character.
 *
 * This is implemented by entities as well as by field item classes of
 * entities.
 *
 * When implementing this interface which extends Traversable, make sure to list
 * IteratorAggregate or Iterator before this interface in the implements clause.
 *
 * @see \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface
 *
 * @ingroup typed_data
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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
    '59af2702fa6b7fe6ee380b1b9da7760d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the data definition.
   *
   * @return \\Drupal\\Core\\TypedData\\ComplexDataDefinitionInterface
   *   The data definition object describing the complex data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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
    'b7c55f1404674958bd0cc2b4b7647071' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a property object.
   *
   * @param $property_name
   *   The name of the property to get; e.g., \'title\' or \'name\'.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface
   *   The property object.
   *
   * @throws \\InvalidArgumentException
   *   If an invalid property name is given.
   * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
   *   If the complex data structure is unset and no property can be created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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
    '23ddb307967552acdafd5f24f9f5ffe0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a property value.
   *
   * @param $property_name
   *   The name of the property to set; e.g., \'title\' or \'name\'.
   * @param $value
   *   The value to set, or NULL to unset the property.
   * @param bool $notify
   *   (optional) Whether to notify the parent object of the change. Defaults to
   *   TRUE. If the update stems from a parent object, set it to FALSE to avoid
   *   being notified again.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   If the specified property does not exist.
   * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
   *   If the complex data structure is unset and no property can be set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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
    '4562d8b48f0e0b95d4e218d9ab5d0816' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array of property objects.
   *
   * @param bool $include_computed
   *   If set to TRUE, computed properties are included. Defaults to FALSE.
   *
   * @return \\Drupal\\Core\\TypedData\\TypedDataInterface[]
   *   An array of property objects implementing the TypedDataInterface, keyed
   *   by property name.
   *
   * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
   *   If the complex data structure is unset and no property can be created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
         'functionName' => 'getProperties',
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
    '07cd0a6e344340dd72e63c1c534067ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array of all property values.
   *
   * Gets an array of plain property values including all not-computed
   * properties.
   *
   * @return array
   *   An array of property values, keyed by property name.
   *
   * @throws \\Drupal\\Core\\TypedData\\Exception\\MissingDataException
   *   If the complex data structure is unset and no property can be created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
         'functionName' => 'toArray',
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
    '91ef119e5f054a38468a4d8910b93159' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether the data structure is empty.
   *
   * @return bool
   *   TRUE if the data structure is empty, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\ComplexDataInterface',
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
  ),
));