<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Plugin/Commerce/Condition/ConditionInterface.php-1624732871',
   'data' => 
  array (
    'b89719128d08a31900f5beba8adbc2a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for conditions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
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
    '83e734b38800cbaf546513d211df0bd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the condition label.
   *
   * @return string
   *   The condition label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
         'functionName' => 'getLabel',
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
    '8bcbaa8ef4e86a1113156c0f7986e65c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the condition display label.
   *
   * Shown in the condition UI when enabling/disabling a condition.
   *
   * @return string
   *   The condition display label.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
         'functionName' => 'getDisplayLabel',
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
    '21515f316491e840ae7d37d40fdc8f5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the condition entity type ID.
   *
   * This is the entity type ID of the entity passed to evaluate().
   *
   * @return string
   *   The condition\'s entity type ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
         'functionName' => 'getEntityTypeId',
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
    'a84aabff74cae8b99aabf4338507aa1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Evaluates the condition.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity.
   *
   * @return bool
   *   TRUE if the condition has been met, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition',
         'uses' => 
        array (
          'configurableinterface' => 'Drupal\\Component\\Plugin\\ConfigurableInterface',
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'pluginforminterface' => 'Drupal\\Core\\Plugin\\PluginFormInterface',
        ),
         'className' => 'Drupal\\commerce\\Plugin\\Commerce\\Condition\\ConditionInterface',
         'functionName' => 'evaluate',
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