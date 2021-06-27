<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/PluginBase.php-1624732869',
   'data' => 
  array (
    '40fa6a08287c0629449d6b603116f05c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for any views plugin types.
 *
 * Via the @Plugin definition the plugin may specify a theme function or
 * template to be used for the plugin. It also can auto-register the theme
 * implementation for that file or function.
 * - theme: the theme implementation to use in the plugin. This may be the name
 *   of the function (without theme_ prefix) or the template file (without
 *   template engine extension).
 *   If a template file should be used, the file has to be placed in the
 *   module\'s templates folder.
 *   Example: theme = "mymodule_row" of module "mymodule" will implement
 *   mymodule-row.html.twig in the [..]/modules/mymodule/templates folder.
 * - register_theme: (optional) When set to TRUE (default) the theme is
 *   registered automatically. When set to FALSE the plugin reuses an existing
 *   theme implementation, defined by another module or views plugin.
 * - theme_file: (optional) the location of an include file that may hold the
 *   theme or preprocess function. The location has to be relative to module\'s
 *   root directory.
 * - module: machine name of the module. It must be present for any plugin that
 *   wants to register a theme.
 *
 * @ingroup views_plugins
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '926415bf3075a3741bdbc68b3aced9e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Include negotiated languages when listing languages.
   *
   * @see \\Drupal\\views\\Plugin\\views\\PluginBase::listLanguages()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    'cbbed447244b0268b8aaca70a8f9f93d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Include entity row languages when listing languages.
   *
   * @see \\Drupal\\views\\Plugin\\views\\PluginBase::listLanguages()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '74ab34d8afacaaeb1439c3a876302226' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Query string to indicate the site default language.
   *
   * @see \\Drupal\\Core\\Language\\LanguageInterface::LANGCODE_DEFAULT
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '49f59f6a43d8f9f6215f279623c29c69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Options for this plugin will be held here.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '25d1a5d0d98c76c5ca1154e74a689c49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The top object of a view.
   *
   * @var \\Drupal\\views\\ViewExecutable
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '4e01c79eff8797ac9b2de90b504d6a6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The display object this plugin is for.
   *
   * For display plugins this is empty.
   *
   * @todo find a better description
   *
   * @var \\Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '1fe607ed2cd9741334f45987a42d6540' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Plugins\'s definition
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '43ca6159957cf268d1cd2d25fb6e2cc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Denotes whether the plugin has an additional options form.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '3098fc6f940bd958fe6430c3356a141c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the render API renderer.
   *
   * @var \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    'ca0670feb50d4568536a4eefbaf848e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a PluginBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
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
    '5d3676efdbc317b99f46b683473c4b84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'create',
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
    '28b11e13e4ca4d2312a7d4154af3fb4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'init',
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
    '4d30cc91889d5f69a3cda7ad56e90fd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Information about options for all kinds of purposes will be held here.
   * @code
   * \'option_name\' => array(
   *  - \'default\' => default value,
   *  - \'contains\' => (optional) array of items this contains, with its own
   *      defaults, etc. If contains is set, the default will be ignored and
   *      assumed to be array().
   *  ),
   * @endcode
   *
   * @return array
   *   Returns the options of this handler/plugin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'defineOptions',
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
    'e065615601a3135349f1ce4b4f10bce6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fills up the options of the plugin with defaults.
   *
   * @param array $storage
   *   An array which stores the actual option values of the plugin.
   * @param array $options
   *   An array which describes the options of a plugin. Each element is an
   *   associative array containing:
   *   - default: The default value of one option. Should be translated to the
   *     interface text language selected for page if translatable.
   *   - (optional) contains: An array which describes the available options
   *     under the key. If contains is set, the default will be ignored and
   *     assumed to be an empty array.
   *   - (optional) \'bool\': TRUE if the value is boolean, else FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'setOptionDefaults',
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
    'c92d194bbb7efd71ef9a25c4c18835eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'filterByDefinedOptions',
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
    '4b1d3055594c4a6774989e51c3ebc5de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Do the work to filter out stored options depending on the defined options.
   *
   * @param array $storage
   *   The stored options.
   * @param array $options
   *   The defined options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'doFilterByDefinedOptions',
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
    'c7b37df3a3de1ed970704f63c26460ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'unpackOptions',
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
    'c2d2cf6621a5c369937bc08e8a5623a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'destroy',
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
    'f9a023d0a0531ae74df19c5b77dd7ecb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'buildOptionsForm',
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
    '99db283ec126b383c2471011a3185629' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'trustedCallbacks',
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
    '39fa81b4ec414c34a9a45d1726455f74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'validateOptionsForm',
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
    'db70ccaa0b20662854a834d796ba2e85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'submitOptionsForm',
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
    'd9b0e848caf4e8a350eef51de8ab2503' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'query',
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
    'dff8fa8ac9b2725c8ae7bb827bbb4a89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'themeFunctions',
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
    'bb3b52ea16aceddea9a1ab1778a2ad02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'validate',
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
    'd4f268f72f136310501399a2f2149a52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'summaryTitle',
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
    '677980016a0a09a8321811cfb8695bb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'pluginTitle',
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
    'd706a9bd4826f78c91cb586404771209' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'usesOptions',
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
    '7901f4b68e45825d9dcb3380d93332f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'globalTokenReplace',
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
    '18cda445d4171d0db0309812a1540af1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces Views\' tokens in a given string. The resulting string will be
   * sanitized with Xss::filterAdmin.
   *
   * @param $text
   *   Unsanitized string with possible tokens.
   * @param $tokens
   *   Array of token => replacement_value items.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'viewsTokenReplace',
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
    '946c85217b9752820b4e1d0b37d71e0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'getAvailableGlobalTokens',
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
    '51ab1a205a1c5366fa39a325dcdea01d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'globalTokenForm',
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
    '683838a64e4ec534ba0375e8debd4693' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'preRenderAddFieldsetMarkup',
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
    '13943b5c386468a5ef9b33fcf77865df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'preRenderFlattenData',
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
    'ed51a62f5960dd6484d819e704b9773d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'calculateDependencies',
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
    '497a0292606c8ff14bcef4ea72be356c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'getProvider',
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
    '5658e5339c84d2c0b18781513da66375' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Makes an array of languages, optionally including special languages.
   *
   * @param int $flags
   *   (optional) Flags for which languages to return (additive). Options:
   *   - \\Drupal\\Core\\Language::STATE_ALL (default): All languages
   *     (configurable and default).
   *   - \\Drupal\\Core\\Language::STATE_CONFIGURABLE: Configurable languages.
   *   - \\Drupal\\Core\\Language::STATE_LOCKED: Locked languages.
   *   - \\Drupal\\Core\\Language::STATE_SITE_DEFAULT: Add site default language;
   *     note that this is not included in STATE_ALL.
   *   - \\Drupal\\views\\Plugin\\views\\PluginBase::INCLUDE_NEGOTIATED: Add
   *     negotiated language types.
   *   - \\Drupal\\views\\Plugin\\views\\PluginBase::INCLUDE_ENTITY: Add
   *     entity row language types. Note that these are only supported for
   *     display options, not substituted in queries.
   * @param array|null $current_values
   *   The currently-selected options in the list, if available.
   *
   * @return array
   *   An array of language names, keyed by the language code. Negotiated and
   *   special languages have special codes that are substituted in queries by
   *   PluginBase::queryLanguageSubstitutions().
   *   Only configurable languages and languages that are in $current_values are
   *   included in the list.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'listLanguages',
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
    'b2b2c1ee2a6cb28f4456e6f1078a87a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns substitutions for Views queries for languages.
   *
   * This is needed so that the language options returned by
   * PluginBase::listLanguages() are able to be used in queries. It is called
   * by the Views module implementation of hook_views_query_substitutions()
   * to get the language-related substitutions.
   *
   * @return array
   *   An array in the format of hook_views_query_substitutions() that gives
   *   the query substitutions needed for the special language types.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'queryLanguageSubstitutions',
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
    '8b11c6201869bf150ad933ffe1c5db19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the render API renderer.
   *
   * @return \\Drupal\\Core\\Render\\RendererInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'containerfactoryplugininterface' => 'Drupal\\Core\\Plugin\\ContainerFactoryPluginInterface',
          'componentpluginbase' => 'Drupal\\Core\\Plugin\\PluginBase',
          'element' => 'Drupal\\Core\\Render\\Element',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\PluginBase',
         'functionName' => 'getRenderer',
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