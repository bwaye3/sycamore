<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityViewBuilderInterface.php-1624732867',
   'data' => 
  array (
    '719fa5a506ab4b6b29bee8d2fb193e6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for entity view builders.
 *
 * @ingroup entity_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
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
    'b9d9d67a040dacfc70991e9203743bee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the component fields and properties of a set of entities.
   *
   * @param &$build
   *   The renderable array representing the entity content.
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   The entities whose content is being built.
   * @param \\Drupal\\Core\\Entity\\Display\\EntityViewDisplayInterface[] $displays
   *   The array of entity view displays holding the display options
   *   configured for the entity components, keyed by bundle name.
   * @param string $view_mode
   *   The view mode in which the entity is being viewed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
         'functionName' => 'buildComponents',
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
    'ced6b7ee29a5ddb1792a8d6cb958ce88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the render array for the provided entity.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to render.
   * @param string $view_mode
   *   (optional) The view mode that should be used to render the entity.
   * @param string $langcode
   *   (optional) For which language the entity should be rendered, defaults to
   *   the current content language.
   *
   * @return array
   *   A render array for the entity.
   *
   * @throws \\InvalidArgumentException
   *   Can be thrown when the set of parameters is inconsistent, like when
   *   trying to view a Comment and passing a Node which is not the one the
   *   comment belongs to, or not passing one, and having the comment node not
   *   be available for loading.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
         'functionName' => 'view',
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
    '860bd938417b2c4e3c26810f8095c2ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the render array for the provided entities.
   *
   * @param array $entities
   *   An array of entities implementing EntityInterface to view.
   * @param string $view_mode
   *   (optional) The view mode that should be used to render the entity.
   * @param string $langcode
   *   (optional) For which language the entity should be rendered, defaults to
   *   the current content language.
   *
   * @return
   *   A render array for the entities, indexed by the same keys as the
   *   entities array passed in $entities.
   *
   * @throws \\InvalidArgumentException
   *   Can be thrown when the set of parameters is inconsistent, like when
   *   trying to view Comments and passing a Node which is not the one the
   *   comments belongs to, or not passing one, and having the comments node not
   *   be available for loading.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
         'functionName' => 'viewMultiple',
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
    'bbd964f4c672d4c260e90419db9ab9c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the entity render cache.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface[] $entities
   *   (optional) If specified, the cache is reset for the given entities only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
         'functionName' => 'resetCache',
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
    '0d1dca50fb008a99430042b4287de5c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a renderable array for the value of a single field in an entity.
   *
   * The resulting output is a fully themed field with label and multiple
   * values.
   *
   * This function can be used by third-party modules that need to output an
   * isolated field.
   * - Do not use inside node (or any other entity) templates; use
   *   render($content[FIELD_NAME]) instead.
   * - The FieldItemInterface::view() method can be used to output a single
   *   formatted field value, without label or wrapping field markup.
   *
   * The function takes care of invoking the prepare_view steps. It also
   * respects field access permissions.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemListInterface $items
   *   FieldItemList containing the values to be displayed.
   * @param string|array $display_options
   *   Can be either:
   *   - The name of a view mode. The field will be displayed according to the
   *     display settings specified for this view mode in the $field
   *     definition for the field in the entity\'s bundle. If no display settings
   *     are found for the view mode, the settings for the \'default\' view mode
   *     will be used.
   *   - An array of display options. The following key/value pairs are allowed:
   *     - label: (string) Position of the label. The default \'field\' theme
   *       implementation supports the values \'inline\', \'above\' and \'hidden\'.
   *       Defaults to \'above\'.
   *     - type: (string) The formatter to use. Defaults to the
   *       \'default_formatter\' for the field type. The default formatter will
   *       also be used if the requested formatter is not available.
   *     - settings: (array) Settings specific to the formatter. Defaults to the
   *       formatter\'s default settings.
   *     - weight: (float) The weight to assign to the renderable element.
   *       Defaults to 0.
   *
   * @return array
   *   A renderable array for the field values.
   *
   * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewFieldItem()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
         'functionName' => 'viewField',
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
    '41e5c13a3a52560bad1695a8a07697fd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds a renderable array for a single field item.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $item
   *   FieldItem to be displayed.
   * @param string|array $display_options
   *   Can be either the name of a view mode, or an array of display settings.
   *   See EntityViewBuilderInterface::viewField() for more information.
   *
   * @return array
   *   A renderable array for the field item.
   *
   * @see \\Drupal\\Core\\Entity\\EntityViewBuilderInterface::viewField()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
         'functionName' => 'viewFieldItem',
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
    '1d4e4d9ef12594c59cbf2b58783af949' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache tag associated with this entity view builder.
   *
   * An entity view builder is instantiated on a per-entity type basis, so the
   * cache tags are also per-entity type.
   *
   * @return array
   *   An array of cache tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'fielditemlistinterface' => 'Drupal\\Core\\Field\\FieldItemListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityViewBuilderInterface',
         'functionName' => 'getCacheTags',
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