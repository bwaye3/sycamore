<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/ConfigurableFieldManagerInterface.php-1624732871',
   'data' => 
  array (
    '1fb17a4195f40fd292a67b50d553e1ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Manages configurable fields based on field definitions.
 *
 * Allows for an easier way to create/delete configurable fields from code.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitybundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
        ),
         'className' => 'Drupal\\commerce\\ConfigurableFieldManagerInterface',
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
    'beb7cb084dbaeae10b169b77da411c70' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a configurable field from the given field definition.
   *
   * @param \\Drupal\\entity\\BundleFieldDefinition $field_definition
   *   The field definition.
   * @param bool $lock
   *   Whether the created field should be locked.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when given an incomplete field definition (missing name,
   *   target entity type ID, or target bundle).
   * @throws \\RuntimeException
   *   Thrown when a field with the same name already exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitybundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
        ),
         'className' => 'Drupal\\commerce\\ConfigurableFieldManagerInterface',
         'functionName' => 'createField',
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
    '0566a13f473f8147a1815638e73fc165' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes the configurable field created from the given field definition.
   *
   * @param \\Drupal\\entity\\BundleFieldDefinition $field_definition
   *   The field definition.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when given an incomplete field definition (missing name,
   *   target entity type ID, or target bundle).
   * @throws \\RuntimeException
   *   Thrown when no matching field was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitybundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
        ),
         'className' => 'Drupal\\commerce\\ConfigurableFieldManagerInterface',
         'functionName' => 'deleteField',
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
    '3ae196f53b160c3c160c7d7cec2c05af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the configurable field has data.
   *
   * @param \\Drupal\\entity\\BundleFieldDefinition $field_definition
   *   The field definition.
   *
   * @return bool
   *   TRUE if data was found, FALSE otherwise.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when given an incomplete field definition (missing name,
   *   target entity type ID, or target bundle).
   * @throws \\RuntimeException
   *   Thrown when no matching field was found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'entitybundlefielddefinition' => 'Drupal\\entity\\BundleFieldDefinition',
        ),
         'className' => 'Drupal\\commerce\\ConfigurableFieldManagerInterface',
         'functionName' => 'hasData',
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