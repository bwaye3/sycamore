<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/Section.php-1624732868',
   'data' => 
  array (
    'd0cf4f3e6a2a32559c98dda192f13d7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a domain object for layout sections.
 *
 * A section consists of three parts:
 * - The layout plugin ID for the layout applied to the section (for example,
 *   \'layout_onecol\').
 * - An array of settings for the layout plugin.
 * - An array of components that can be rendered in the section.
 *
 * @see \\Drupal\\Core\\Layout\\LayoutDefinition
 * @see \\Drupal\\layout_builder\\SectionComponent
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
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
    'ee8b37d37fbd1858c42be4bd24ac89a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The layout plugin ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
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
    '56bfda6940f76d4b7a0b836ad713deff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The layout plugin settings.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
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
    '43ddbe4bb5bf69e51fe0d2e9fb28c044' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of components, keyed by UUID.
   *
   * @var \\Drupal\\layout_builder\\SectionComponent[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
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
    '9eba63cf2ad7885770e8fc833192ee2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Third party settings.
   *
   * An array of key/value pairs keyed by provider.
   *
   * @var array[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
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
    'f932a9941ccebe3b27e5cfa5db850376' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Section.
   *
   * @param string $layout_id
   *   The layout plugin ID.
   * @param array $layout_settings
   *   (optional) The layout plugin settings.
   * @param \\Drupal\\layout_builder\\SectionComponent[] $components
   *   (optional) The components.
   * @param array[] $third_party_settings
   *   (optional) Any third party settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => '__construct',
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
    'a6bb360856126f04a1525e73a8a2eee0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the renderable array for this section.
   *
   * @param \\Drupal\\Core\\Plugin\\Context\\ContextInterface[] $contexts
   *   An array of available contexts.
   * @param bool $in_preview
   *   TRUE if the section is being previewed, FALSE otherwise.
   *
   * @return array
   *   A renderable array representing the content of the section.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'toRenderArray',
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
    '936422f055f41ca8c25850af55f0a56a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the layout plugin for this section.
   *
   * @return \\Drupal\\Core\\Layout\\LayoutInterface
   *   The layout plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getLayout',
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
    '58295d0672394f683e81ce74b16b6a6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the layout plugin ID for this section.
   *
   * @return string
   *   The layout plugin ID.
   *
   * @internal
   *   This method should only be used by code responsible for storing the data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getLayoutId',
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
    '2df9cb3dd9eecfbb7d487e065b674b06' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the layout plugin settings for this section.
   *
   * @return mixed[]
   *   The layout plugin settings.
   *
   * @internal
   *   This method should only be used by code responsible for storing the data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getLayoutSettings',
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
    'b2d7ee4f2aa5efb0f0344f6447128460' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the layout plugin settings for this section.
   *
   * @param mixed[] $layout_settings
   *   The layout plugin settings.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'setLayoutSettings',
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
    'ebc70d52dbdf3315e63093aed4487708' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the default region.
   *
   * @return string
   *   The machine-readable name of the default region.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getDefaultRegion',
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
    '32ecfe7eb7a7021d77bb7a7fb0ef5f01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the components of the section.
   *
   * @return \\Drupal\\layout_builder\\SectionComponent[]
   *   The components.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getComponents',
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
    '9e42b07ec996fd0d5c62add193266d18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the component for a given UUID.
   *
   * @param string $uuid
   *   The UUID of the component to retrieve.
   *
   * @return \\Drupal\\layout_builder\\SectionComponent
   *   The component.
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the expected UUID does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getComponent',
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
    'e6f164521a4747961e2a005af2e166ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper method to set a component.
   *
   * @param \\Drupal\\layout_builder\\SectionComponent $component
   *   The component.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'setComponent',
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
    '7e2501805cf189c6ea7f879c0e13560e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a given component from a region.
   *
   * @param string $uuid
   *   The UUID of the component to remove.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'removeComponent',
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
    '86c8d40497d82a56460795b7d290da5d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Appends a component to the end of a region.
   *
   * @param \\Drupal\\layout_builder\\SectionComponent $component
   *   The component being appended.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'appendComponent',
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
    '4a32a3f8dcf232e449bb69fed25e3e94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the next highest weight of the component in a region.
   *
   * @param string $region
   *   The region name.
   *
   * @return int
   *   A number higher than the highest weight of the component in the region.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getNextHighestWeight',
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
    '7d9fa9a52c0f12ed35d74dd2dac789ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the components for a specific region.
   *
   * @param string $region
   *   The region name.
   *
   * @return \\Drupal\\layout_builder\\SectionComponent[]
   *   An array of components in the specified region, sorted by weight.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getComponentsByRegion',
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
    'e7e97b62851c1f2bc878f73a19ee3dbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Inserts a component after a specified existing component.
   *
   * @param string $preceding_uuid
   *   The UUID of the existing component to insert after.
   * @param \\Drupal\\layout_builder\\SectionComponent $component
   *   The component being inserted.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   Thrown when the expected UUID does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'insertAfterComponent',
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
    '0bd68c265289c2a23101a96b0fe8d237' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Inserts a component at a specified delta.
   *
   * @param int $delta
   *   The zero-based delta in which to insert the component.
   * @param \\Drupal\\layout_builder\\SectionComponent $new_component
   *   The component being inserted.
   *
   * @return $this
   *
   * @throws \\OutOfBoundsException
   *   Thrown when the specified delta is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'insertComponent',
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
    '2fb969f82ced6c492746953c81c39987' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wraps the layout plugin manager.
   *
   * @return \\Drupal\\Core\\Layout\\LayoutPluginManagerInterface
   *   The layout plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'layoutPluginManager',
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
    '27c0abb0b5a96709eecdb406f0ecfa56' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns an array representation of the section.
   *
   * Only use this method if you are implementing custom storage for sections.
   *
   * @return array
   *   An array representation of the section component.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'toArray',
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
    '4f916244a491b6513f1ffaf6e13cb0ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates an object from an array representation of the section.
   *
   * Only use this method if you are implementing custom storage for sections.
   *
   * @param array $section
   *   An array of section data in the format returned by ::toArray().
   *
   * @return static
   *   The section object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'fromArray',
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
    'a01d9c8c40d91cdb9a249d3f3b601117' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic method: Implements a deep clone.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => '__clone',
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
    '9a8fdac45c8cc961876ff403876691d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getThirdPartySetting',
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
    '5da7ab057970b9f79eb65d0e06deb65d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getThirdPartySettings',
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
    'a3c53c48b88a51dfbe4159226e8cd226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'setThirdPartySetting',
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
    'e1e19199d06dcaa4d6389ae32ee6aab7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'unsetThirdPartySetting',
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
    '6e4105878ff0b4f63ac77d5a6f6e1cd8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\Section',
         'functionName' => 'getThirdPartyProviders',
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