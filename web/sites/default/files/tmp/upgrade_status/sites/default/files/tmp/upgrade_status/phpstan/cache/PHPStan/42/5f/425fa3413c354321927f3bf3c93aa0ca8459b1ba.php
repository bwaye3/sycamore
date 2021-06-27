<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/ProductVariationFieldRendererInterface.php-1624732871',
   'data' => 
  array (
    '5c2af1002be2bbe962e52b883e70c7cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Renders variation fields.
 *
 * The rendered variation fields are displayed along the parent product fields.
 * Optionally replaced via AJAX when the add to cart form changes the selected
 * variation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
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
    '83dee6b7899e455c69e74a25fd457490' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders all renderable variation fields.
   *
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface $variation
   *   The product variation.
   * @param string $view_mode
   *   The view mode.
   *
   * @return array
   *   Array of render arrays, keyed by field name.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
         'functionName' => 'renderFields',
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
    '9cb3ef8207785a586d2c901343d35354' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders a single variation field.
   *
   * @param string $field_name
   *   The field name.
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface $variation
   *   The product variation.
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
   *   The render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
         'functionName' => 'renderField',
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
    '39ad8dff917d70f5e44d4cee4daf18e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces the rendered variation fields via AJAX.
   *
   * Called by the add to cart form when the selected variation changes.
   *
   * @param \\Drupal\\Core\\Ajax\\AjaxResponse $response
   *   The AJAX response.
   * @param \\Drupal\\commerce_product\\Entity\\ProductVariationInterface $variation
   *   The product variation.
   * @param string $view_mode
   *   The display mode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product',
         'uses' => 
        array (
          'productvariationinterface' => 'Drupal\\commerce_product\\Entity\\ProductVariationInterface',
          'ajaxresponse' => 'Drupal\\Core\\Ajax\\AjaxResponse',
        ),
         'className' => 'Drupal\\commerce_product\\ProductVariationFieldRendererInterface',
         'functionName' => 'replaceRenderedFields',
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