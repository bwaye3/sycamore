<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Form/ConfigFormBaseTrait.php-1624732867',
   'data' => 
  array (
    '4f9a6f7bf92a0f2611938cee8ad7edbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides access to configuration for forms.
 *
 * This trait provides a config() method that returns override free and mutable
 * config objects if the configuration name is in the array returned by the
 * getEditableConfigNames() implementation.
 *
 * Forms that present configuration to the user have to take care not to save
 * configuration overrides to the stored configuration since overrides are often
 * environment specific. Default values of form elements should be obtained from
 * override free configuration objects. However, if a form reacts to
 * configuration in any way, for example sends an email to the system.site:mail
 * address, then it is important that the value comes from a configuration
 * object with overrides. Therefore, override free and editable configuration
 * objects are limited to those listed by the getEditableConfigNames() method.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        ),
         'className' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
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
    'b1d2d4f1681173f9d26d48ea1d39f791' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a configuration object.
   *
   * @param string $name
   *   The name of the configuration object to retrieve. The name corresponds to
   *   a configuration file. For @code \\Drupal::config(\'book.admin\') @endcode,
   *   the config object returned will contain the contents of book.admin
   *   configuration file.
   *
   * @return \\Drupal\\Core\\Config\\Config|\\Drupal\\Core\\Config\\ImmutableConfig
   *   An editable configuration object if the given name is listed in the
   *   getEditableConfigNames() method or an immutable configuration object if
   *   not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        ),
         'className' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
         'functionName' => 'config',
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
    '30f66635f4567da76b221a04a17039ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Config\\ConfigFactoryInterface $config_factory */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        ),
         'className' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
         'functionName' => 'config',
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
    'bbccf8473afa18b1f11fbbfbf1f663eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the configuration names that will be editable.
   *
   * @return array
   *   An array of configuration object names that are editable if called in
   *   conjunction with the trait\'s config() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Form',
         'uses' => 
        array (
          'configfactoryinterface' => 'Drupal\\Core\\Config\\ConfigFactoryInterface',
        ),
         'className' => 'Drupal\\Core\\Form\\ConfigFormBaseTrait',
         'functionName' => 'getEditableConfigNames',
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