<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/EntityViewTrait.php-1624732870',
   'data' => 
  array (
    '8afa1f07e7b22331662bb4abc8eaab2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods to deal with building entity views in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Tests\\EntityViewTrait',
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
    '14f64ebaf61049b670c83f581f6bfd07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the renderable view of an entity.
   *
   * Entities postpone the composition of their renderable arrays to #pre_render
   * functions in order to maximize cache efficacy. This means that the full
   * renderable array for an entity is constructed in drupal_render(). Some
   * tests require the complete renderable array for an entity outside of the
   * drupal_render process in order to verify the presence of specific values.
   * This method isolates the steps in the render process that produce an
   * entity\'s renderable array.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to prepare a renderable array for.
   * @param string $view_mode
   *   (optional) The view mode that should be used to build the entity.
   * @param null $langcode
   *   (optional) For which language the entity should be prepared, defaults to
   *   the current content language.
   * @param bool $reset
   *   (optional) Whether to clear the cache for this entity.
   *
   * @return array
   *
   * @see \\Drupal\\Core\\Render\\RendererInterface::render()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
        ),
         'className' => 'Drupal\\Tests\\EntityViewTrait',
         'functionName' => 'buildEntityView',
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