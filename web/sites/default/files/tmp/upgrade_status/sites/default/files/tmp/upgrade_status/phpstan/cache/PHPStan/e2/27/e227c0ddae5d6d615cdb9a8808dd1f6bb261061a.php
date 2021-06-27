<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/serialization/src/Normalizer/PrimitiveDataNormalizer.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/serialization/src/Normalizer/SerializedColumnNormalizerTrait.php-1624732868',
   'data' => 
  array (
    '8c9e32aa1a961a53b94e48327407b7ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Converts primitive data objects to their casted values.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
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
    'c7dd3d46ccfaf9bd50f09ca8b65662ab' => 
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
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
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
    'e852ed4016bce1e7b59e0c6e4c640b27' => 
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
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
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
    '6086c269d23ed3abc28750940d60ddeb' => 
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
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
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
    'f36b47b32efddfd6ab3d68340f5a00ab' => 
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
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
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
    'f056adab244ac91b29310c85402afc8b' => 
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
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
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
    'aae72331d4c8f22af0f7247b50235d11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
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
    'f27ebd793045ddc294524c4dd24566ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\serialization\\Normalizer',
         'uses' => 
        array (
          'fielditeminterface' => 'Drupal\\Core\\Field\\FieldItemInterface',
          'primitiveinterface' => 'Drupal\\Core\\TypedData\\PrimitiveInterface',
        ),
         'className' => 'Drupal\\serialization\\Normalizer\\PrimitiveDataNormalizer',
         'functionName' => 'normalize',
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