<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/product/src/Element/CommerceProductRenderedAttribute.php-1624732871',
   'data' => 
  array (
    '352901fa6512850a02bbaef09b3b5527' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form input element for rendering attributes as radio buttons.
 *
 * The options must be an array of attribute values, keyed by the entity\'s ID.
 *
 * Example usage:
 * @code
 * $form[\'rendered_attributes\'] = [
 *   \'#type\' => \'commerce_product_rendered_attribute\',
 *   \'#title\' => $this->t(\'Attributes\'),
 *   \'#default_value\' => 1,
 *   \'#options\' => [0 => \'Red\', 1 => \'Blue\'],
 * ];
 * @endcode
 *
 * @FormElement("commerce_product_rendered_attribute")
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'radios' => 'Drupal\\Core\\Render\\Element\\Radios',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\commerce_product\\Element\\CommerceProductRenderedAttribute',
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
    '54738450fc7e6e5775061cd454b47062' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Expands a radios element into individual radio elements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'radios' => 'Drupal\\Core\\Render\\Element\\Radios',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\commerce_product\\Element\\CommerceProductRenderedAttribute',
         'functionName' => 'processRadios',
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
    'ab72348a293d0ed5175bfe27100c7550' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Render\\RendererInterface $renderer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_product\\Element',
         'uses' => 
        array (
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'radios' => 'Drupal\\Core\\Render\\Element\\Radios',
          'htmlutility' => 'Drupal\\Component\\Utility\\Html',
        ),
         'className' => 'Drupal\\commerce_product\\Element\\CommerceProductRenderedAttribute',
         'functionName' => 'processRadios',
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