<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Display/EntityViewDisplayInterface.php-1624732867',
   'data' => 
  array (
    '520c154c68c6a9b9cfceeee78d2c9a4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a common interface for entity view displays.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
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
    'a7a64f03ceddd509a61ce09aa8fa4342' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a renderable array for the components of an entity.
   *
   * See the buildMultiple() method for details.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *   The entity being displayed.
   *
   * @return array
   *   A renderable array for the entity.
   *
   * @see \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface::buildMultiple()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
         'functionName' => 'build',
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
    '17212888b845e1a5732d92325b3bc4e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a renderable array for the components of a set of entities.
   *
   * This only includes the components handled by the Display object, but
   * excludes \'extra fields\', that are typically rendered through specific,
   * ad-hoc code in EntityViewBuilderInterface::buildComponents() or in
   * hook_entity_view() implementations.
   *
   * hook_entity_display_build_alter() is invoked on each entity, allowing 3rd
   * party code to alter the render array.
   *
   * @param \\Drupal\\Core\\Entity\\FieldableEntityInterface[] $entities
   *   The entities being displayed.
   *
   * @return array
   *   A renderable array for the entities, indexed by the same keys as the
   *   $entities array parameter.
   *
   * @see hook_entity_display_build_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Display',
         'uses' => 
        array (
          'fieldableentityinterface' => 'Drupal\\Core\\Entity\\FieldableEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface',
         'functionName' => 'buildMultiple',
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