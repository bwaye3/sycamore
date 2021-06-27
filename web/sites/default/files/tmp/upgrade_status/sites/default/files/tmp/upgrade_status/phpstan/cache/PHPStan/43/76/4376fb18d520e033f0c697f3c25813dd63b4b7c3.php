<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/BundleFieldDefinition.php-1624732871',
   'data' => 
  array (
    '38cfdb0a8c7772dda2798f3307cf4157' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a field definition class for bundle fields.
 *
 * Core currently doesn\'t provide one, the hook_entity_bundle_field_info()
 * example uses BaseFieldDefinition, which is wrong. Tracked in #2346347.
 *
 * Note that this class implements both FieldStorageDefinitionInterface and
 * FieldDefinitionInterface. This is a simplification for DX reasons,
 * allowing code to return just the bundle definitions instead of having to
 * return both storage definitions and bundle definitions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\entity\\BundleFieldDefinition',
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
    'c3fc8047f0a697decd32f976401938f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity',
         'uses' => 
        array (
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
        ),
         'className' => 'Drupal\\entity\\BundleFieldDefinition',
         'functionName' => 'isBaseField',
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