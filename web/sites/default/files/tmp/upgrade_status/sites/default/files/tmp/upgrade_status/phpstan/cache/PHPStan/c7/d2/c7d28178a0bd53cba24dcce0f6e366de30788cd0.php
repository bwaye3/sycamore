<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/block/tests/src/Traits/BlockCreationTrait.php-1624732867',
   'data' => 
  array (
    '22a18edfde6f47f41066163282b245ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods to create and place block with default settings.
 *
 * This trait is meant to be used only by test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
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
    '05d12290cf65a3a7a721683f5dd0a2cd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a block instance based on default settings.
   *
   * @param string $plugin_id
   *   The plugin ID of the block type for this block instance.
   * @param array $settings
   *   (optional) An associative array of settings for the block entity.
   *   Override the defaults by specifying the key and value in the array, for
   *   example:
   *   @code
   *     $this->drupalPlaceBlock(\'system_powered_by_block\', array(
   *       \'label\' => t(\'Hello, world!\'),
   *     ));
   *   @endcode
   *   The following defaults are provided:
   *   - label: Random string.
   *   - ID: Random string.
   *   - region: \'sidebar_first\'.
   *   - theme: The default theme.
   *   - visibility: Empty array.
   *
   * @return \\Drupal\\block\\Entity\\Block
   *   The block entity.
   *
   * @todo
   *   Add support for creating custom block instances.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\block\\Traits',
         'uses' => 
        array (
          'block' => 'Drupal\\block\\Entity\\Block',
        ),
         'className' => 'Drupal\\Tests\\block\\Traits\\BlockCreationTrait',
         'functionName' => 'placeBlock',
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