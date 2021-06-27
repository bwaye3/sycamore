<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityReferenceSelection/SelectionInterface.php-1624732867',
   'data' => 
  array (
    '2ccddc132f12117af3b4c1eb4c6fa5c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface definition for Entity Reference Selection plugins.
 *
 * @see \\Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionPluginManager
 * @see \\Drupal\\Core\\Entity\\Annotation\\EntityReferenceSelection
 * @see plugin_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
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
    'f368d6dd8e2013d2a4cd33276046f79d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the list of referenceable entities.
   *
   * @return array
   *   A nested array of entities, the first level is keyed by the
   *   entity bundle, which contains an array of entity labels (escaped),
   *   keyed by the entity ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
         'functionName' => 'getReferenceableEntities',
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
    '104c27d470fa302696d03a7daacaf40b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counts entities that are referenceable.
   *
   * @return int
   *   The number of referenceable entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
         'functionName' => 'countReferenceableEntities',
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
    'ed864378b78d0ebf7c49ca30eb724b44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates which existing entities can be referenced.
   *
   * @return array
   *   An array of valid entity IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
         'functionName' => 'validateReferenceableEntities',
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
    '79f7461ffc1742b0504832635b9dc5d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Allows the selection to alter the SelectQuery generated by EntityFieldQuery.
   *
   * @param \\Drupal\\Core\\Database\\Query\\SelectInterface $query
   *   A Select Query object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\EntityReferenceSelection',
         'uses' => 
        array (
          'selectinterface' => 'Drupal\\Core\\Database\\Query\\SelectInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityReferenceSelection\\SelectionInterface',
         'functionName' => 'entityQueryAlter',
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