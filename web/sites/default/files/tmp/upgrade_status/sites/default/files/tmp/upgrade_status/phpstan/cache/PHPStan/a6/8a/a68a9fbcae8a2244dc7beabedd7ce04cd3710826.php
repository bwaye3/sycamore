<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/views/src/Plugin/views/argument/ArgumentPluginBase.php-1624732869',
   'data' => 
  array (
    'c4695adfb98c028aafc2769116b68431' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for argument (contextual filter) handler plugins.
 *
 * The basic argument works for very simple arguments such as nid and uid
 *
 * Definition terms for this handler:
 * - name field: The field to use for the name to use in the summary, which is
 *               the displayed output. For example, for the node: nid argument,
 *               the argument itself is the nid, but node.title is displayed.
 * - name table: The table to use for the name, should it not be in the same
 *               table as the argument.
 * - empty field name: For arguments that can have no value, such as taxonomy
 *                     which can have "no term", this is the string which
 *                     will be displayed for this lack of value. Be sure to use
 *                     $this->t().
 * - validate type: A little used string to allow an argument to restrict
 *                  which validator is available to just one. Use the
 *                  validator ID. This probably should not be used at all,
 *                  and may disappear or change.
 * - numeric: If set to TRUE this field is numeric and will use %d instead of
 *            %s in queries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    'c063d1165e226430b20280cc5e64a928' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The table to use for the name, should it not be in the same table as the argument.
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    '34777dfcfe15a000be1f8d14fb93397c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The field to use for the name to use in the summary, which is
   * the displayed output. For example, for the node: nid argument,
   * the argument itself is the nid, but node.title is displayed.
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    '89239fc306028430dcb3e95e04d8024e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Overrides Drupal\\views\\Plugin\\views\\HandlerBase:init().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    '59ebd50aba3ca8e203f0a68fe4cd0b67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the argument needs a style plugin.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'needsStylePlugin',
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
    '1cc88797a5258800147403b11c2af78c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    '721500d109a4d0c6aad700155609c451' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provide token help information for the argument.
   *
   * @return array
   *   A render array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getTokenHelp',
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
    'ea6e3c6481279a9147802476ccf45478' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase $handler */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getTokenHelp',
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
    '2a22690b55f9231b1576f4eb2f7048cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provide a list of default behaviors for this argument if the argument
   * is not present.
   *
   * Override this method to provide additional (or fewer) default behaviors.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultActions',
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
    'ce320626c0f8e440626dc53f1a2173e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provide a form for selecting the default argument when the
   * default action is set to provide default argument.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultArgumentForm',
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
    '3df0811d4be37a6b139b77276154639d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provide a form for selecting further summary options when the
   * default action is set to display one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultSummaryForm',
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
    '159d9bde4bda0860c980c665b0356601' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handle the default action, which means our argument wasn\'t present.
   *
   * Override this method only with extreme care.
   *
   * @return
   *   A boolean value; if TRUE, continue building this view. If FALSE,
   *   building the view will be aborted here.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultAction',
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
    'd534ac45f272a1d5f538be09a40d0523' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * How to act if validation fails.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'validateFail',
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
    'fe227d1858be12756b34ea8bd67ce6ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default action: ignore.
   *
   * If an argument was expected and was not given, in this case, simply
   * ignore the argument entirely.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultIgnore',
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
    '69b421d31e2fe2d99a19866bed265a88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default action: not found.
   *
   * If an argument was expected and was not given, in this case, report
   * the view as \'not found\' or hide it.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultNotFound',
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
    'a4d7d6538ea4f5e526e91dcd5167ebce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default action: access denied.
   *
   * If an argument was expected and was not given, in this case, report
   * the view as \'access denied\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultAccessDenied',
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
    '1612a814f3931ca8de5db984cfd29250' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default action: empty
   *
   * If an argument was expected and was not given, in this case, display
   * the view\'s empty text
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultEmpty',
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
    '9fd920c356e3837f1a9e49766ffd9faa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * This just returns true. The view argument builder will know where
   * to find the argument from.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultDefault',
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
    'e95d24840d986de8312b7f9d14ea02d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determine if the argument is set to provide a default argument.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'hasDefaultArgument',
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
    '5eb9964cff2843f92b22826c08fb082f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get a default argument, if available.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getDefaultArgument',
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
    '9c82ada5628f279b15e30f9be0faf7a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Process the summary arguments for display.
   *
   * For example, the validation plugin may want to alter an argument for use in
   * the URL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'processSummaryArguments',
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
    '4ce31f4335dba6f8b86b222c1cb72167' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Default action: summary.
   *
   * If an argument was expected and was not given, in this case, display
   * a summary query.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'defaultSummary',
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
    '9d84265d649f295efcd8700658790f10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Build the info for the summary query.
   *
   * This must:
   * - addGroupBy: group on this field in order to create summaries.
   * - addField: add a \'num_nodes\' field for the count. Usually it will
   *   be a count on $view->base_field
   * - setCountField: Reset the count field so we get the right paging.
   *
   * @return
   *   The alias used to get the number of records (count) for this entry.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'summaryQuery',
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
    'c6e2e1ca01b0fbb3e129071d46ef7832' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Add the name field, which is the field displayed in summary queries.
   * This is often used when the argument is numeric.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'summaryNameField',
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
    '94cdb8171b0585e427f49581ba6497aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Some basic summary behavior that doesn\'t need to be repeated as much as
   * code that goes into summaryQuery()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'summaryBasics',
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
    'c064d1d4066048c694d5cf637039d4e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sorts the summary based upon the user\'s selection. The base variant of
   * this is usually adequate.
   *
   * @param $order
   *   The order selected in the UI.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'summarySort',
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
    'b85700d0314b7304eb22fb6203b18e57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provide the argument to use to link from the summary to the next level;
   * this will be called once per row of a summary, and used as part of
   * $view->getUrl().
   *
   * @param $data
   *   The query results for the row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'summaryArgument',
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
    '0572956771ff23a8e90df5fe9b098ac2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the name to use for the summary. By default this is just
   * the name field.
   *
   * @param $data
   *   The query results for the row.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'summaryName',
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
    '9915ee0f05aeb3701e80a681b1475b57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set up the query for this argument.
   *
   * The argument sent may be found at $this->argument.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    'ef13df8f20f5e354fab4645fd2794d36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the title this argument will assign the view, given the argument.
   *
   * This usually needs to be overridden to provide a proper title.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'title',
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
    '77d4e4bf6d9b701490e142ad1cdbc385' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Called by the view object to get the title. This may be set by a
   * validator so we don\'t necessarily call through to title().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getTitle',
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
    'e488f269d2f3f43544b98a0086b02814' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validate that this argument works. By default, all arguments are valid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'validateArgument',
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
    'bb651b47dcee00ed7d927304a2864f1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Called by the menu system to validate an argument.
   *
   * This checks to see if this is a \'soft fail\', which means that if the
   * argument fails to validate, but there is an action to take anyway,
   * then validation cannot actually fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'validateMenuArgument',
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
    '002d8cd2603ec60e5c0ab3140bdb58ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set the input for this argument
   *
   * @return TRUE if it successfully validates; FALSE if it does not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'setArgument',
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
    '103eac72bf8f9b2315c1a107f4b6b026' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the value of this argument.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getValue',
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
    '243bf7037127904d03fc39e6c0507517' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the display or row plugin, if it exists.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getPlugin',
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
    '1641c6510036c8260c2e1e771c1bcc5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Return a description of how the argument would normally be sorted.
   *
   * Subclasses should override this to specify what the default sort order of
   * their argument is (e.g. alphabetical, numeric, date).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getSortName',
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
    '2d9cffc5e24455ed2472dd503a786e24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Custom form radios process function.
   *
   * Roll out a single radios element to a list of radios, using the options
   * array as index. While doing that, create a container element underneath
   * each option, which contains the settings related to that option.
   *
   * @see \\Drupal\\Core\\Render\\Element\\Radios::processRadios()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'processContainerRadios',
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
    '67ea72a35b502998dd7372b07b150c89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Moves argument options into their place.
   *
   * When configuring the default argument behavior, almost each of the radio
   * buttons has its own fieldset shown below it when the radio button is
   * clicked. That fieldset is created through a custom form process callback.
   * Each element that has #argument_option defined and pointing to a default
   * behavior gets moved to the appropriate fieldset.
   * So if #argument_option is specified as \'default\', the element is moved
   * to the \'default_options\' fieldset.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'preRenderMoveArgumentOptions',
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
    'b49f6371dbe8f255f4f812f4702f110b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sanitize validator options including derivatives with : for js.
   *
   * Reason and alternative: https://www.drupal.org/node/2035345.
   *
   * @param string $id
   *   The identifier to be sanitized.
   *
   * @return string
   *   The sanitized identifier.
   *
   * @see decodeValidatorId()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'encodeValidatorId',
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
    'b488a125804893a6560f8c10fe94c09a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Revert sanitized validator options.
   *
   * @param string $id
   *   The sanitized identifier to be reverted.
   *
   * @return string
   *   The original identifier.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'decodeValidatorId',
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
    '8e49df3d919ded3bc0778334d0b014d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Splits an argument into value and operator properties on this instance.
   *
   * @param bool $force_int
   *   Enforce that values should be numeric.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'unpackArgumentValue',
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
    'ce1ae4372200a0efe9b7f37e9283aff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getCacheMaxAge',
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
    '6939d348eff4f10c912345ebc6b8a7c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getCacheContexts',
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
    'ded2f15c7e105793a5470461afbdfd03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    '9e3e78eb44ed61537e37a4db0dbe91f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
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
    '9994ef51820af54e2b4ceccb09671f5e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a context definition for this argument.
   *
   * @return \\Drupal\\Core\\Plugin\\Context\\ContextDefinitionInterface|null
   *   A context definition that represents the argument or NULL if that is
   *   not possible.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => 'Drupal\\views\\Plugin\\views\\argument\\ArgumentPluginBase',
         'functionName' => 'getContextDefinition',
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
    'f0ca96dae5f72eabd1e96c0169668a6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @}
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\views\\Plugin\\views\\argument',
         'uses' => 
        array (
          'dependentplugininterface' => 'Drupal\\Component\\Plugin\\DependentPluginInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheabledependencyinterface' => 'Drupal\\Core\\Cache\\CacheableDependencyInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'element' => 'Drupal\\Core\\Render\\Element',
          'displaypluginbase' => 'Drupal\\views\\Plugin\\views\\display\\DisplayPluginBase',
          'viewexecutable' => 'Drupal\\views\\ViewExecutable',
          'handlerbase' => 'Drupal\\views\\Plugin\\views\\HandlerBase',
          'views' => 'Drupal\\views\\Views',
        ),
         'className' => NULL,
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
  ),
));