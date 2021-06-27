<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Form/CommercePluginEntityFormBase.php-1624732871',
   'data' => 
  array (
    '8e3a1f9f149a4d0eb755f95a8d5db6d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @deprecated in Commerce 2.2. Set #disabled on the ID element directly.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Form',
         'uses' => 
        array (
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
        ),
         'className' => 'Drupal\\commerce\\Form\\CommercePluginEntityFormBase',
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
    'f54f97ed502512608e5e69a031c58c65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Protects the plugin\'s ID property\'s form element against changes.
   *
   * This method is assumed to be called on a completely built entity form,
   * including a form element for the plugin config entity\'s ID property.
   *
   * @param array $form
   *   The completely built plugin entity form array.
   *
   * @return array
   *   The updated plugin entity form array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Form',
         'uses' => 
        array (
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
        ),
         'className' => 'Drupal\\commerce\\Form\\CommercePluginEntityFormBase',
         'functionName' => 'protectPluginIdElement',
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