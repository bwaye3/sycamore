<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/Entity/ThirdPartySettingsInterface.php-1624732867',
   'data' => 
  array (
    '6ed5b2770c5c278124ea0cea29387f4d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for configuration entities to store third party information.
 *
 * A third party is a module that needs to store tightly coupled information to
 * the configuration entity. For example, a module that alters the node type
 * form can use this to store its configuration so that it will be deployed
 * with the node type.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
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
    '6a850a8bebacc4eda60206169a7bbf75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value of a third-party setting.
   *
   * @param string $module
   *   The module providing the third-party setting.
   * @param string $key
   *   The setting name.
   * @param mixed $value
   *   The setting value.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
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
    '9e2554befa34378b5a9f349a966e984c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the value of a third-party setting.
   *
   * @param string $module
   *   The module providing the third-party setting.
   * @param string $key
   *   The setting name.
   * @param mixed $default
   *   The default value
   *
   * @return mixed
   *   The value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
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
    'dc85f805d99cced9a0cd824d44997f59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all third-party settings of a given module.
   *
   * @param string $module
   *   The module providing the third-party settings.
   *
   * @return array
   *   An array of key-value pairs.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
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
    '132dd6687b42bf08d7b5862e0a23304d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unsets a third-party setting.
   *
   * @param string $module
   *   The module providing the third-party setting.
   * @param string $key
   *   The setting name.
   *
   * @return mixed
   *   The value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
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
    'a0aba3b8e375a0c2d72cae41003ff62d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the list of third parties that store information.
   *
   * @return array
   *   The list of third parties.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Config\\Entity\\ThirdPartySettingsInterface',
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