<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Entity/EntityFormMode.php-1624732867',
   'data' => 
  array (
    'db5082d72e0c66aef29eb93313ca31b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the entity form mode configuration entity class.
 *
 * Form modes allow entity forms to be displayed differently depending on the
 * context. For instance, the user entity form can be displayed with a set of
 * fields on the \'profile\' page (user edit page) and with a different set of
 * fields (or settings) on the user registration page. Modules taking part in
 * the display of the entity form (notably the Field API) can adjust their
 * behavior depending on the requested form mode. An additional \'default\' form
 * mode is available for all entity types. For each available form mode,
 * administrators can configure whether it should use its own set of field
 * display settings, or just replicate the settings of the \'default\' form mode,
 * thus reducing the amount of form display configurations to keep track of.
 *
 * @see \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface::getAllFormModes()
 * @see \\Drupal\\Core\\Entity\\EntityDisplayRepositoryInterface::getFormModes()
 *
 * @ConfigEntityType(
 *   id = "entity_form_mode",
 *   label = @Translation("Form mode"),
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "targetEntityType",
 *     "cache",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Entity',
         'uses' => 
        array (
          'entitydisplaymodebase' => 'Drupal\\Core\\Entity\\EntityDisplayModeBase',
          'entityformmodeinterface' => 'Drupal\\Core\\Entity\\EntityFormModeInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\Entity\\EntityFormMode',
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
  ),
));