<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/ConditionManagerInterface.php-1624732871',
   'data' => 
  array (
    '89cbe7c525abd8e26c04aa04d42d0ce2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for commerce_condition plugin managers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\ConditionManagerInterface',
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
    'dc5f7b102ae4c74740b74d0901c917bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the filtered plugin definitions.
   *
   * @param string $parent_entity_type_id
   *   The parent entity type ID. For example: \'commerce_promotion\' if the
   *   conditions are being loaded for a promotion.
   * @param array $entity_type_ids
   *   The entity type IDs. For example: [\'commerce_order\'] to get
   *   only conditions that evaluate orders.
   *
   * @return array
   *   The filtered plugin definitions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce',
         'uses' => 
        array (
          'categorizingpluginmanagerinterface' => 'Drupal\\Component\\Plugin\\CategorizingPluginManagerInterface',
        ),
         'className' => 'Drupal\\commerce\\ConditionManagerInterface',
         'functionName' => 'getFilteredDefinitions',
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