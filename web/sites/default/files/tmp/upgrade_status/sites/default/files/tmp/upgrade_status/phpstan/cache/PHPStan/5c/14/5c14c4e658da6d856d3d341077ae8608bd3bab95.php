<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/media/tests/src/Traits/MediaTypeCreationTrait.php-1624732868',
   'data' => 
  array (
    '3971472a4c73551287b5cb02b5d9adb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create a media type from given values.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Traits',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
        ),
         'className' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
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
    '04f5d18606075686043cde857b54dc7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create a media type for a source plugin.
   *
   * @param string $source_plugin_id
   *   The media source plugin ID.
   * @param mixed[] $values
   *   (optional) Additional values for the media type entity:
   *   - id: The ID of the media type. If none is provided, a random value will
   *     be used.
   *   - label: The human-readable label of the media type. If none is provided,
   *     a random value will be used.
   *   - bundle: (deprecated) The ID of the media type, for backwards
   *     compatibility purposes. Use \'id\' instead.
   *   See \\Drupal\\media\\MediaTypeInterface and \\Drupal\\media\\Entity\\MediaType
   *   for full documentation of the media type properties.
   *
   * @return \\Drupal\\media\\MediaTypeInterface
   *   A media type.
   *
   * @see \\Drupal\\media\\MediaTypeInterface
   * @see \\Drupal\\media\\Entity\\MediaType
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Traits',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
        ),
         'className' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
         'functionName' => 'createMediaType',
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
    'fe7ae4479cb46fd7d49d21e5a42a0d26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\media\\MediaTypeInterface $media_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\media\\Traits',
         'uses' => 
        array (
          'mediatype' => 'Drupal\\media\\Entity\\MediaType',
        ),
         'className' => 'Drupal\\Tests\\media\\Traits\\MediaTypeCreationTrait',
         'functionName' => 'createMediaType',
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