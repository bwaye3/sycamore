<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/serialization/src/Normalizer/SerializedColumnNormalizerTrait.php-1624732868',
   'data' => 
  array (
    '2c6d141f55274fec3a0243f20347d9ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A trait providing methods for serialized columns.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
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
    '6e6d38af0ff59f365ad1e725f3990cd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if there is a serialized string for a column.
   *
   * @param mixed $data
   *   The field item data to denormalize.
   * @param string $class
   *   The expected class to instantiate.
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
         'functionName' => 'checkForSerializedStrings',
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
    '1f212cfd1e774ca691107685cb94b86b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the data contains string value for serialize column.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   * @param array $data
   *   The data being denormalized.
   *
   * @return bool
   *   TRUE if there is a string value for serialize column, otherwise FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
         'functionName' => 'dataHasStringForSerializeColumn',
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
    '9a436d8664741c407aeef1607c693d4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all serialized properties.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   *
   * @return string[]
   *   The property names for serialized properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
         'functionName' => 'getSerializedPropertyNames',
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
    '602009eadb9f31c6e33296af8ae479e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the names of all properties the plugin treats as serialized data.
   *
   * This allows the field storage definition or entity type to provide a
   * setting for serialized properties. This can be used for fields that
   * handle serialized data themselves and do not rely on the serialized schema
   * flag.
   *
   * @param \\Drupal\\Core\\Field\\FieldItemInterface $field_item
   *   The field item.
   *
   * @return string[]
   *   The property names for serialized properties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'plugininspectioninterface' => 'Drupal\\Component\\Plugin\\PluginInspectionInterface',
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\SerializedColumnNormalizerTrait',
         'functionName' => 'getCustomSerializedPropertyNames',
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