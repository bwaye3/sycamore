<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/StaticMenuLinkOverridesInterface.php-1624732867',
   'data' => 
  array (
    'efdb82bffdde8cf651d1ec7508bda438' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for objects which overrides menu links defined in YAML.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
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
    '1631a6a9b73e7810bec116c2f5425a1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reloads the overrides from config.
   *
   * Forces all overrides to be reloaded from config storage to compare the
   * override value with the value submitted during test form submission.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
         'functionName' => 'reload',
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
    'f1dca6184ce51c94884b3e036c843518' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads any overrides to the definition of a static (YAML-defined) link.
   *
   * @param string $id
   *   A menu link plugin ID.
   *
   * @return array|null
   *   An override with following supported keys:
   *     - parent
   *     - weight
   *     - menu_name
   *     - expanded
   *     - enabled
   *   or NULL if there is no override for the given ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
         'functionName' => 'loadOverride',
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
    '626983ac7173bf4b00f28897597b424a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes any overrides to the definition of a static (YAML-defined) link.
   *
   * @param string $id
   *   A menu link plugin ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
         'functionName' => 'deleteOverride',
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
    'e3668c112929f3c5e2501178ff901bbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes multiple overrides to definitions of static (YAML-defined) links.
   *
   * @param array $ids
   *   Array of menu link plugin IDs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
         'functionName' => 'deleteMultipleOverrides',
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
    '48873c5a117aeab8448e9fb212f9b7ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads overrides to multiple definitions of a static (YAML-defined) link.
   *
   * @param array $ids
   *   Array of menu link plugin IDs.
   *
   * @return array
   *   One or override keys by plugin ID.
   *
   * @see \\Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
         'functionName' => 'loadMultipleOverrides',
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
    'cd1b9054537629fa6f685b0ca27f4fcb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Saves the override.
   *
   * @param string $id
   *   A menu link plugin ID.
   * @param array $definition
   *   The definition values to override. Supported keys:
   *   - menu_name
   *   - parent
   *   - weight
   *   - expanded
   *   - enabled
   *
   * @return array
   *   A list of properties which got saved.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
         'functionName' => 'saveOverride',
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
    'cdd52cd4f6abcf11e110bb854e6c63cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The unique cache tag associated with this menu link override.
   *
   * @return string[]
   *   An array of cache tags.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\StaticMenuLinkOverridesInterface',
         'functionName' => 'getCacheTags',
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