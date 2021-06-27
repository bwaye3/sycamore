<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/field/FieldHandlerInterface.php-1624732869',
   'data' => 
  array (
    '958d677cd26520fadcbc1d5cd4511123' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base field handler that has no options and renders an unformatted field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
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
    'c63ee655582bcac8fca476b6a0cef54e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an ORDER BY clause to the query for click sort columns.
   *
   * @param string $order
   *   Either ASC or DESC
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'clickSort',
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
    '4d622a6d5ed617f7f3261f7e1ed1a1a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if this field is click sortable.
   *
   * @return bool
   *   The value of \'click sortable\' from the plugin definition, this defaults
   *   to TRUE if not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'clickSortable',
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
    'bd6e2e17e6823b8d50d375aea9d76d4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets this field\'s label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'label',
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
    'b094c5e422ed4fd27b774f23fffdad62' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an HTML element based upon the field\'s element type.
   *
   * @param bool $none_supported
   *   Whether or not this HTML element is supported.
   * @param bool $default_empty
   *   Whether or not this HTML element is empty by default.
   * @param bool $inline
   *   Whether or not this HTML element is inline.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'elementType',
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
    'cfbbf61521a42bd9f06e511ffaf25d71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an HTML element for the label based upon the field\'s element type.
   *
   * @param bool $none_supported
   *   Whether or not this HTML element is supported.
   * @param bool $default_empty
   *   Whether or not this HTML element is empty by default.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'elementLabelType',
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
    'c238172d039bbadcc0ed44934a0d3ab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an HTML element for the wrapper based upon the field\'s element type.
   *
   * @param bool $none_supported
   *   Whether or not this HTML element is supported.
   * @param bool $default_empty
   *   Whether or not this HTML element is empty by default.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'elementWrapperType',
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
    '8fcf03992ace1ff60b7ea0f841bd428e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a list of elements valid for field HTML.
   *
   * This function can be overridden by fields that want more or fewer
   * elements available, though this seems like it would be an incredibly
   * rare occurrence.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'getElements',
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
    '0a95456a52eac94dc97ee4f01bbd6959' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the class of the field.
   *
   * @param bool $row_index
   *   The index of current row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'elementClasses',
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
    'a0bedce577f9856b925793671882af88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces a value with tokens from the last field.
   *
   * This function actually figures out which field was last and uses its
   * tokens so they will all be available.
   *
   * @param string $value
   *   The raw string.
   * @param bool $row_index
   *   The index of current row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'tokenizeValue',
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
    'ab0a384f66839013068d7a4c1206e9e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the class of the field\'s label.
   *
   * @param bool $row_index
   *   The index of current row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'elementLabelClasses',
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
    '4e8274a48922613911bb3f91f5b32344' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the class of the field\'s wrapper.
   *
   * @param bool $row_index
   *   The index of current row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'elementWrapperClasses',
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
    '0f8cef228c7db1a1fec8ea57e1013814' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the entity matching the current row and relationship.
   *
   * @param \\Drupal\\views\\ResultRow $values
   *   An object containing all retrieved values.
   *
   * @return \\Drupal\\Core\\Entity\\EntityInterface|null
   *   Returns the entity matching the values or NULL if there is no matching
   *   entity.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'getEntity',
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
    'fd9371848a45b70b39fe23e86870f691' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value that\'s supposed to be rendered.
   *
   * This api exists so that other modules can easy set the values of the field
   * without having the need to change the render method as well.
   *
   * @param \\Drupal\\views\\ResultRow $values
   *   An object containing all retrieved values.
   * @param string $field
   *   Optional name of the field where the value is stored.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'getValue',
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
    '483e2c6da7ab1ccca29797aa94b32022' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if this field will be available as an option to group the result
   * by in the style settings.
   *
   * @return bool
   *   TRUE if this field handler is groupable, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'useStringGroupBy',
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
    '04af7c3b606b82bf2743f289e76a6579' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs before any fields are rendered.
   *
   * This gives the handlers some time to set up before any handler has
   * been rendered.
   *
   * @param \\Drupal\\views\\ResultRow[] $values
   *   An array of all ResultRow objects returned from the query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'preRender',
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
    'ec32dfdd14fc9ed0949d0340071057d5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the field.
   *
   * @param \\Drupal\\views\\ResultRow $values
   *   The values retrieved from a single row of a view\'s query result.
   *
   * @return string|\\Drupal\\Component\\Render\\MarkupInterface
   *   The rendered output. If the output is safe it will be wrapped in an
   *   object that implements MarkupInterface. If it is empty or unsafe it
   *   will be a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'render',
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
    'e9b3fc0b834398009f5d517c41a9db7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Runs after every field has been rendered.
   *
   * This is meant to be used mainly to deal with field handlers whose output
   * cannot be cached at row level but can be cached at display level. The
   * typical example is the row counter. For completely uncacheable field output
   * placeholders should be used.
   *
   * @param \\Drupal\\views\\ResultRow $row
   *   An array of all ResultRow objects returned from the query.
   * @param $output
   *   The field rendered output.
   *
   * @return string[]
   *   An associative array of post-render token values keyed by placeholder.
   *
   * @see \\Drupal\\views\\Plugin\\views\\field\\UncacheableFieldHandlerTrait
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'postRender',
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
    'bb1670b316d5f0e0ad0451ab78e36c36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders a field using advanced settings.
   *
   * This renders a field normally, then decides if render-as-link and
   * text-replacement rendering is necessary.
   *
   * @param \\Drupal\\views\\ResultRow $values
   *   The values retrieved from a single row of a view\'s query result.
   *
   * @return string|\\Drupal\\Component\\Render\\MarkupInterface
   *   The advanced rendered output. If the output is safe it will be wrapped in
   *   an object that implements MarkupInterface. If it is empty or unsafe
   *   it will be a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'advancedRender',
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
    '906e72ca5af3d4ab817f5cea6356eb1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if a field value is empty.
   *
   * @param $value
   *   The field value.
   * @param bool $empty_zero
   *   Whether or not this field is configured to consider 0 as empty.
   * @param bool $no_skip_empty
   *   Whether or not to use empty() to check the value.
   *
   * @return bool
   *   TRUE if the value is considered empty, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'isValueEmpty',
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
    '5bd7d80ed385a13847d0a98233f401a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs an advanced text render for the item.
   *
   * This is separated out as some fields may render lists, and this allows
   * each item to be handled individually.
   *
   * @param array $alter
   *   The alter array of options to use.
   *     - max_length: Maximum length of the string, the rest gets truncated.
   *     - word_boundary: Trim only on a word boundary.
   *     - ellipsis: Show an ellipsis (…) at the end of the trimmed string.
   *     - html: Make sure that the html is correct.
   *
   * @return string|\\Drupal\\Component\\Render\\MarkupInterface
   *   The rendered output. If the output is safe it will be wrapped in an
   *   object that implements MarkupInterface. If it is empty or unsafe it
   *   will be a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'renderText',
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
    '60b962d647d5d50f52b452a52c7c45e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the \'render\' tokens to use for advanced rendering.
   *
   * This runs through all of the fields and arguments that
   * are available and gets their values. This will then be
   * used in one giant str_replace().
   *
   * @param mixed $item
   *   The item to render.
   *
   * @return array
   *   An array of available tokens
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'getRenderTokens',
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
    'e66ea460ccd861b6d6fcbea500fa892c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Passes values to drupal_render() using $this->themeFunctions() as #theme.
   *
   * @param \\Drupal\\views\\ResultRow $values
   *   Holds single row of a view\'s result set.
   *
   * @return string|\\Drupal\\Component\\Render\\MarkupInterface
   *   Returns rendered output of the given theme implementation. If the output
   *   is safe it will be wrapped in an object that implements
   *   MarkupInterface. If it is empty or unsafe it will be a string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\field',
         'uses' => 
        array (
          'resultrow' => 'Drupal\\views\\ResultRow',
          'viewshandlerinterface' => 'Drupal\\views\\Plugin\\views\\ViewsHandlerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\field\\FieldHandlerInterface',
         'functionName' => 'theme',
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