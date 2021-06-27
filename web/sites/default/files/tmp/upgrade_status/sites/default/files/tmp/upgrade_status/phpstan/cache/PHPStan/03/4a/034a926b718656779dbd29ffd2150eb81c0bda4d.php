<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/FieldStorageDefinitionListenerInterface.php-1624732867',
   'data' => 
  array (
    'bc39a8184a3f270866a791990a229dfd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for reacting to field storage definition creation, deletion, and updates.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
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
    '69b2152189fc76070bb72862c7462d77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to the creation of a field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The definition being created.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
         'functionName' => 'onFieldStorageDefinitionCreate',
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
    'd478cfc8a02273ff2b0a5ed2e4541cf1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to the update of a field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field being updated.
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $original
   *   The original storage definition; i.e., the definition before the update.
   *
   * @throws \\Drupal\\Core\\Entity\\Exception\\FieldStorageDefinitionUpdateForbiddenException
   *   Thrown when the update to the field is forbidden.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
         'functionName' => 'onFieldStorageDefinitionUpdate',
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
    '7cfe88f26be271be53b4b7b4e339814d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to the deletion of a field storage definition.
   *
   * @param \\Drupal\\Core\\Field\\FieldStorageDefinitionInterface $storage_definition
   *   The field being deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Field\\FieldStorageDefinitionListenerInterface',
         'functionName' => 'onFieldStorageDefinitionDelete',
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