<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Plugin/Discovery/YamlDiscovery.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Discovery/DiscoveryTrait.php-1624732867',
   'data' => 
  array (
    '6019143686b73e720edf7feb8710afda' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows YAML files to define plugin definitions.
 *
 * If the value of a key (like title) in the definition is translatable then
 * the addTranslatableProperty() method can be used to mark it as such and also
 * to add translation context. Then
 * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup will be used to translate
 * the string and also to mark it safe. Only strings written in the YAML files
 * should be marked as safe, strings coming from dynamic plugin definitions
 * potentially containing user input should not.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Discovery',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'discoverytrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryTrait',
          'coreyamldiscovery' => 'Drupal\\Core\\Discovery\\YamlDiscovery',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
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
    '94f68db9c06a6893116e5c18cc3ee7a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @see Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
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
    'b739233e8c385a7257d2d3dbf398a598' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
         'functionName' => 'getDefinitions',
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
    '5ee0df95f37c3ca4f4c147d3ea63c3ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
         'functionName' => 'getDefinition',
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
    '81415454201a03a29ca1e5ff4245494c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific plugin definition.
   *
   * @param array $definitions
   *   An array of the available plugin definitions.
   * @param string $plugin_id
   *   A plugin id.
   * @param bool $exception_on_invalid
   *   If TRUE, an invalid plugin ID will cause an exception to be thrown; if
   *   FALSE, NULL will be returned.
   *
   * @return array|null
   *   A plugin definition, or NULL if the plugin ID is invalid and
   *   $exception_on_invalid is TRUE.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
   *   Thrown if $plugin_id is invalid and $exception_on_invalid is TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
         'functionName' => 'doGetDefinition',
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
    '251ffdbdd6b4ed5a3ec1534b51e2373c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Discovery',
         'uses' => 
        array (
          'pluginnotfoundexception' => 'Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
         'functionName' => 'hasDefinition',
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
    'f6fdce6ddbb1fae133399bf1c81dd676' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * YAML file discovery and parsing handler.
   *
   * @var \\Drupal\\Core\\Discovery\\YamlDiscovery
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Discovery',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'discoverytrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryTrait',
          'coreyamldiscovery' => 'Drupal\\Core\\Discovery\\YamlDiscovery',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
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
    '9c6fb438ddcb29d61be35784c561b2d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Contains an array of translatable properties passed along to t().
   *
   * @see \\Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery::addTranslatableProperty()
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Discovery',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'discoverytrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryTrait',
          'coreyamldiscovery' => 'Drupal\\Core\\Discovery\\YamlDiscovery',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
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
    '7e65d1ba184679ec4d53f39f0c72a386' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Construct a YamlDiscovery object.
   *
   * @param string $name
   *   The file name suffix to use for discovery; for example, \'test\' will
   *   become \'MODULE.test.yml\'.
   * @param array $directories
   *   An array of directories to scan.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Discovery',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'discoverytrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryTrait',
          'coreyamldiscovery' => 'Drupal\\Core\\Discovery\\YamlDiscovery',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
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
    '0bc1e48881b9b9ca4e357f79ada9c98d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set one of the YAML values as being translatable.
   *
   * @param string $value_key
   *   The key corresponding to the value in the YAML that contains a
   *   translatable string.
   * @param string $context_key
   *   (Optional) the translation context for the value specified by the
   *   $value_key.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Discovery',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'discoverytrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryTrait',
          'coreyamldiscovery' => 'Drupal\\Core\\Discovery\\YamlDiscovery',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
         'functionName' => 'addTranslatableProperty',
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
    '981b3c5644b02ef68caaf9f9fc7ecdd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Plugin\\Discovery',
         'uses' => 
        array (
          'discoveryinterface' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryInterface',
          'discoverytrait' => 'Drupal\\Component\\Plugin\\Discovery\\DiscoveryTrait',
          'coreyamldiscovery' => 'Drupal\\Core\\Discovery\\YamlDiscovery',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
        ),
         'className' => 'Drupal\\Core\\Plugin\\Discovery\\YamlDiscovery',
         'functionName' => 'getDefinitions',
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