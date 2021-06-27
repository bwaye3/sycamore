<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/layout_builder/src/DefaultsSectionStorageInterface.php-1624732868',
   'data' => 
  array (
    'c9d3b37dc1039e09fbc26d3bca2c0222' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for an object that stores layout sections for defaults.
 *
 * @todo Refactor this interface in https://www.drupal.org/node/2985362.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
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
    '15d61b4ef76ba848bb26e04b8d9bc4c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if the defaults allow custom overrides.
   *
   * @return bool
   *   TRUE if custom overrides are allowed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\layout_builder',
         'uses' => 
        array (
          'thirdpartysettingsinterface' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
        ),
         'className' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
         'functionName' => 'isOverridable',
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
    'd07ea567de6791e2112e9c61ca533540' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the defaults to allow or disallow overrides.
   *
   * @param bool $overridable
   *   TRUE if the display should allow overrides, FALSE otherwise.
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
         'className' => 'Drupal\\layout_builder\\DefaultsSectionStorageInterface',
         'functionName' => 'setOverridable',
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