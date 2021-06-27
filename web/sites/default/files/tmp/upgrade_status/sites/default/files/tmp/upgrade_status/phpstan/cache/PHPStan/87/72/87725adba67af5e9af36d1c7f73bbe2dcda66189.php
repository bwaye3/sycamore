<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/FieldDefinitionListenerInterface.php-1624732867',
   'data' => 
  array (
    'd63e5d2015d3aee1eec89172e604d136' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for reacting to field creation, deletion, and updates.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
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
    '3ed05998cf3159bce0baf290760e6c94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to the creation of a field.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
         'functionName' => 'onFieldDefinitionCreate',
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
    '6d169782f03ed40ebbf0cd9478c5c885' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to the update of a field.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition being updated.
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $original
   *   The original field definition; i.e., the definition before the update.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
         'functionName' => 'onFieldDefinitionUpdate',
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
    '2eacba3b114376813597344cd0d209b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to the deletion of a field.
   *
   * Stored values should not be wiped at once, but marked as \'deleted\' so that
   * they can go through a proper purge process later on.
   *
   * @param \\Drupal\\Core\\Field\\FieldDefinitionInterface $field_definition
   *   The field definition being deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldDefinitionListenerInterface',
         'functionName' => 'onFieldDefinitionDelete',
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