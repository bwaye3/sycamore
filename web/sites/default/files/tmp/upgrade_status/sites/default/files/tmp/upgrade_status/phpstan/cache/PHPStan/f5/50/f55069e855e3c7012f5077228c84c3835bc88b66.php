<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/twig/twig/src/Environment.php-1581400763',
   'data' => 
  array (
    '60e6f5fa5377e210c675689259efa0be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Stores the Twig configuration.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
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
    '8d1f6913adbe011ba9a5997e7d7cb196' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Constructor.
     *
     * Available options:
     *
     *  * debug: When set to true, it automatically set "auto_reload" to true as
     *           well (default to false).
     *
     *  * charset: The charset used by the templates (default to UTF-8).
     *
     *  * base_template_class: The base template class to use for generated
     *                         templates (default to \\Twig\\Template).
     *
     *  * cache: An absolute path where to store the compiled templates,
     *           a \\Twig\\Cache\\CacheInterface implementation,
     *           or false to disable compilation cache (default).
     *
     *  * auto_reload: Whether to reload the template if the original source changed.
     *                 If you don\'t provide the auto_reload option, it will be
     *                 determined automatically based on the debug value.
     *
     *  * strict_variables: Whether to ignore invalid variables in templates
     *                      (default to false).
     *
     *  * autoescape: Whether to enable auto-escaping (default to html):
     *                  * false: disable auto-escaping
     *                  * true: equivalent to html
     *                  * html, js: set the autoescaping to one of the supported strategies
     *                  * name: set the autoescaping strategy based on the template name extension
     *                  * PHP callback: a PHP callback that returns an escaping strategy based on the template "name"
     *
     *  * optimizations: A flag that indicates which optimizations to apply
     *                   (default to -1 which means that all optimizations are enabled;
     *                   set it to 0 to disable).
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
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
    '8f9e58da66095b3fdbaaa2951b947717' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the base template class for compiled templates.
     *
     * @return string The base template class name
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getBaseTemplateClass',
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
    'e9c5fe33354a6100a108c9392a62249a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the base template class for compiled templates.
     *
     * @param string $class The base template class name
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'setBaseTemplateClass',
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
    'db29c894ad11fa566c65f84466d7eb7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Enables debugging mode.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'enableDebug',
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
    '32de071ee87c57e7434f65a81b0fa059' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Disables debugging mode.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'disableDebug',
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
    'ade88a7293783322de54f304e166af3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if debug mode is enabled.
     *
     * @return bool true if debug mode is enabled, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'isDebug',
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
    '4650cc352dcf659823cfb39dfaecefec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Enables the auto_reload option.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'enableAutoReload',
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
    'd74faed058fb0ffc758af8460e22f5e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Disables the auto_reload option.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'disableAutoReload',
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
    '64685dabc219fb71638b18cdf27380bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the auto_reload option is enabled.
     *
     * @return bool true if auto_reload is enabled, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'isAutoReload',
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
    '88babac904cb2fce82eae49e13ba90a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Enables the strict_variables option.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'enableStrictVariables',
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
    '051ff3127c17334fb3bdd93ce1e71dc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Disables the strict_variables option.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'disableStrictVariables',
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
    '9ecf58056af80e176f7c54728fa7f49a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the strict_variables option is enabled.
     *
     * @return bool true if strict_variables is enabled, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'isStrictVariables',
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
    'e656a89a84cd75ace91fe69409d5b038' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the current cache implementation.
     *
     * @param bool $original Whether to return the original cache option or the real cache instance
     *
     * @return CacheInterface|string|false A Twig\\Cache\\CacheInterface implementation,
     *                                     an absolute path to the compiled templates,
     *                                     or false to disable cache
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getCache',
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
    '18592acb3ed27e7505c9dfae0f2e18d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the current cache implementation.
     *
     * @param CacheInterface|string|false $cache A Twig\\Cache\\CacheInterface implementation,
     *                                           an absolute path to the compiled templates,
     *                                           or false to disable cache
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'setCache',
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
    'fee4ee225392ba6619599f62cdfe7277' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the cache filename for a given template.
     *
     * @param string $name The template name
     *
     * @return string|false The cache file name or false when caching is disabled
     *
     * @deprecated since 1.22 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getCacheFilename',
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
    'd425a5e9eead74935c9279e58be8e4bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the template class associated with the given string.
     *
     * The generated template class is based on the following parameters:
     *
     *  * The cache key for the given template;
     *  * The currently enabled extensions;
     *  * Whether the Twig C extension is available or not;
     *  * PHP version;
     *  * Twig version;
     *  * Options with what environment was created.
     *
     * @param string   $name  The name for which to calculate the template class name
     * @param int|null $index The index if it is an embedded template
     *
     * @return string The template class name
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getTemplateClass',
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
    '069dfd00125a477e3ab800078858d1be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the template class prefix.
     *
     * @return string The template class prefix
     *
     * @deprecated since 1.22 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getTemplateClassPrefix',
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
    '2ed155380013c4094356ef44e3aeda95' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Renders a template.
     *
     * @param string|TemplateWrapper $name    The template name
     * @param array                  $context An array of parameters to pass to the template
     *
     * @return string The rendered template
     *
     * @throws LoaderError  When the template cannot be found
     * @throws SyntaxError  When an error occurred during compilation
     * @throws RuntimeError When an error occurred during rendering
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'render',
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
    '6e5d0163cd1d1cb0659c73357fb43750' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Displays a template.
     *
     * @param string|TemplateWrapper $name    The template name
     * @param array                  $context An array of parameters to pass to the template
     *
     * @throws LoaderError  When the template cannot be found
     * @throws SyntaxError  When an error occurred during compilation
     * @throws RuntimeError When an error occurred during rendering
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'display',
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
    '302ef17772c9f21397b28b5d6d2e55bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads a template.
     *
     * @param string|TemplateWrapper|\\Twig\\Template $name The template name
     *
     * @throws LoaderError  When the template cannot be found
     * @throws RuntimeError When a previously generated cache is corrupted
     * @throws SyntaxError  When an error occurred during compilation
     *
     * @return TemplateWrapper
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'load',
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
    '2afa041f552778873b0753f732b27f8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads a template internal representation.
     *
     * This method is for internal use only and should never be called
     * directly.
     *
     * @param string $name  The template name
     * @param int    $index The index if it is an embedded template
     *
     * @return \\Twig_TemplateInterface A template instance representing the given template name
     *
     * @throws LoaderError  When the template cannot be found
     * @throws RuntimeError When a previously generated cache is corrupted
     * @throws SyntaxError  When an error occurred during compilation
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'loadTemplate',
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
    '34033487b9270bf3b283b1d96d92e71c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'loadClass',
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
    '21ef8b3fa907e9a8b9eda8017f3da702' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a template from source.
     *
     * This method should not be used as a generic way to load templates.
     *
     * @param string $template The template source
     * @param string $name     An optional name of the template to be used in error messages
     *
     * @return TemplateWrapper A template instance representing the given template name
     *
     * @throws LoaderError When the template cannot be found
     * @throws SyntaxError When an error occurred during compilation
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'createTemplate',
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
    'cd39c03b306fdf64689f1c8e4f44db8b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the template is still fresh.
     *
     * Besides checking the loader for freshness information,
     * this method also checks if the enabled extensions have
     * not changed.
     *
     * @param string $name The template name
     * @param int    $time The last modification time of the cached template
     *
     * @return bool true if the template is fresh, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'isTemplateFresh',
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
    'a970cf6fe23fc9178cb217da5568ee27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tries to load a template consecutively from an array.
     *
     * Similar to load() but it also accepts instances of \\Twig\\Template and
     * \\Twig\\TemplateWrapper, and an array of templates where each is tried to be loaded.
     *
     * @param string|Template|\\Twig\\TemplateWrapper|array $names A template or an array of templates to try consecutively
     *
     * @return TemplateWrapper|Template
     *
     * @throws LoaderError When none of the templates can be found
     * @throws SyntaxError When an error occurred during compilation
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'resolveTemplate',
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
    '7a8d97ca744f507fd24fbda42e0e74d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clears the internal template cache.
     *
     * @deprecated since 1.18.3 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'clearTemplateCache',
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
    'c8bbee761f1eb99b2dbca6fd7abdb65d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clears the template cache files on the filesystem.
     *
     * @deprecated since 1.22 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'clearCacheFiles',
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
    '33d37aeb425560b100e020b86a43427a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the Lexer instance.
     *
     * @return \\Twig_LexerInterface
     *
     * @deprecated since 1.25 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getLexer',
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
    '44bf5639bd69a63c5799cd00f1d1d0ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tokenizes a source code.
     *
     * @param string|Source $source The template source code
     * @param string        $name   The template name (deprecated)
     *
     * @return TokenStream
     *
     * @throws SyntaxError When the code is syntactically wrong
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'tokenize',
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
    'e7d3bdf42c2e835e25b099098a3a9106' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the Parser instance.
     *
     * @return \\Twig_ParserInterface
     *
     * @deprecated since 1.25 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getParser',
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
    '6e7b16fd3736e13d3049fa09484c9c98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Converts a token stream to a node tree.
     *
     * @return ModuleNode
     *
     * @throws SyntaxError When the token stream is syntactically or semantically wrong
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'parse',
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
    '639f8d71ad93dbbac920871e3de87dd3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the Compiler instance.
     *
     * @return \\Twig_CompilerInterface
     *
     * @deprecated since 1.25 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getCompiler',
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
    'f5feb3c0de4be10b6cc938191d5b1c58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Compiles a node and returns the PHP code.
     *
     * @return string The compiled PHP source code
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'compile',
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
    '0a4f3d4a3b5375e1d0eddf1ebfefee21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Compiles a template source code.
     *
     * @param string|Source $source The template source code
     * @param string        $name   The template name (deprecated)
     *
     * @return string The compiled PHP source code
     *
     * @throws SyntaxError When there was an error during tokenizing, parsing or compiling
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'compileSource',
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
    'de73001b7f261374cbd19a1c51ed3bad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the Loader instance.
     *
     * @return LoaderInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getLoader',
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
    '9a424f0033251a2c62db88908dc299c3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the default template charset.
     *
     * @param string $charset The default charset
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'setCharset',
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
    '6d8a3840f881b15f5940ae1adb988444' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the default template charset.
     *
     * @return string The default charset
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getCharset',
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
    'f1f0d9f17b1e2b82e36e444e43c40f77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes the runtime environment.
     *
     * @deprecated since 1.23 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'initRuntime',
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
    '3071742cd12b767f6f3d0322f0c92f0e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the given extension is registered.
     *
     * @param string $class The extension class name
     *
     * @return bool Whether the extension is registered or not
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'hasExtension',
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
    '1ecf16001bef2b8ddf99d4d8bc8ba1ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a runtime loader.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'addRuntimeLoader',
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
    '007691f0a418c54be710ed828ba28ddc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets an extension by class name.
     *
     * @param string $class The extension class name
     *
     * @return ExtensionInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getExtension',
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
    '5069dee058f4603c8f129f08faa1e307' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the runtime implementation of a Twig element (filter/function/test).
     *
     * @param string $class A runtime class name
     *
     * @return object The runtime implementation
     *
     * @throws RuntimeError When the template cannot be found
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getRuntime',
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
    '8ee27951deeb55c24a2c72fb67b0b180' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes an extension by name.
     *
     * This method is deprecated and you should not use it.
     *
     * @param string $name The extension name
     *
     * @deprecated since 1.12 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'removeExtension',
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
    '498432cf31f8f4e4395e3bc6c7d00e75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers an array of extensions.
     *
     * @param array $extensions An array of extensions
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'setExtensions',
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
    '6f39aaa2b41852c92b05ff8d14741b8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all registered extensions.
     *
     * @return ExtensionInterface[] An array of extensions (keys are for internal usage only and should not be relied on)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getExtensions',
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
    '20f49498d62804903084c4de0f9373c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered Token Parsers.
     *
     * @return \\Twig_TokenParserBrokerInterface
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getTokenParsers',
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
    'd42668ba5d85cd2a2a5d460f6a177da8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets registered tags.
     *
     * Be warned that this method cannot return tags defined by \\Twig_TokenParserBrokerInterface classes.
     *
     * @return TokenParserInterface[]
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getTags',
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
    '8df987d74a8e4d19fb391d00fda17b42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered Node Visitors.
     *
     * @return NodeVisitorInterface[]
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getNodeVisitors',
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
    'c0a642dd168fc55653a9dd4c247c109d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers a Filter.
     *
     * @param string|TwigFilter                $name   The filter name or a \\Twig_SimpleFilter instance
     * @param \\Twig_FilterInterface|TwigFilter $filter
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'addFilter',
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
    '1dff9604b4130040fda2545c7f40d550' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a filter by name.
     *
     * Subclasses may override this method and load filters differently;
     * so no list of filters is available.
     *
     * @param string $name The filter name
     *
     * @return \\Twig_Filter|false
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getFilter',
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
    '6d9e249b5161cf2f6695ce6b240bde5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered Filters.
     *
     * Be warned that this method cannot return filters defined with registerUndefinedFilterCallback.
     *
     * @return \\Twig_FilterInterface[]
     *
     * @see registerUndefinedFilterCallback
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getFilters',
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
    'f40e8fb72ebc5c22471158ae06efbf0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers a Test.
     *
     * @param string|TwigTest              $name The test name or a \\Twig_SimpleTest instance
     * @param \\Twig_TestInterface|TwigTest $test A \\Twig_TestInterface instance or a \\Twig_SimpleTest instance
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'addTest',
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
    '153dc03a39b0b7d3868adda466cace1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered Tests.
     *
     * @return \\Twig_TestInterface[]
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getTests',
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
    'b0d2c6cf5ad22cd5bcb8eaba004873a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a test by name.
     *
     * @param string $name The test name
     *
     * @return \\Twig_Test|false
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getTest',
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
    '805f44d516399c527caa602e118955e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers a Function.
     *
     * @param string|TwigFunction                  $name     The function name or a \\Twig_SimpleFunction instance
     * @param \\Twig_FunctionInterface|TwigFunction $function
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'addFunction',
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
    '63c8673dc7b9fb19c4c7e65c2724b3d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Get a function by name.
     *
     * Subclasses may override this method and load functions differently;
     * so no list of functions is available.
     *
     * @param string $name function name
     *
     * @return \\Twig_Function|false
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getFunction',
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
    'd9f4158c5dfb2277a3384c0cef2a6b84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets registered functions.
     *
     * Be warned that this method cannot return functions defined with registerUndefinedFunctionCallback.
     *
     * @return \\Twig_FunctionInterface[]
     *
     * @see registerUndefinedFunctionCallback
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getFunctions',
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
    'c965b88c3eeca44b93109cc96d9ba6c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Registers a Global.
     *
     * New globals can be added before compiling or rendering a template;
     * but after, you can only update existing globals.
     *
     * @param string $name  The global name
     * @param mixed  $value The global value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'addGlobal',
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
    'bdade5c989a22148fae46c767fc758d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered Globals.
     *
     * @return array An array of globals
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getGlobals',
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
    'ecd1f2a4c66a5c77a81904749494849b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Merges a context with the defined globals.
     *
     * @param array $context An array representing the context
     *
     * @return array The context merged with the globals
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'mergeGlobals',
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
    '95b1ea995fa6c5330b8f8dffdfbc5251' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered unary Operators.
     *
     * @return array An array of unary operators
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getUnaryOperators',
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
    '6a3b7ac911a81a9c3fb32c898c4d58c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered binary Operators.
     *
     * @return array An array of binary operators
     *
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'getBinaryOperators',
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
    '9e5e353d9c5c2f3ff50846af466fed3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated since 1.23 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'computeAlternatives',
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
    '816f3973076e095d83df5c2f928dc537' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'initGlobals',
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
    '18644504153717a42f4170f0c2f338e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'initExtensions',
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
    '71cd9ca3063733f4cfe6d7d5d1ee0f84' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'initExtension',
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
    '7290ec016efd48cb00d9c8d6dd9813f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @deprecated since 1.22 (to be removed in 2.0)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig',
         'uses' => 
        array (
          'cacheinterface' => 'Twig\\Cache\\CacheInterface',
          'filesystemcache' => 'Twig\\Cache\\FilesystemCache',
          'nullcache' => 'Twig\\Cache\\NullCache',
          'error' => 'Twig\\Error\\Error',
          'loadererror' => 'Twig\\Error\\LoaderError',
          'runtimeerror' => 'Twig\\Error\\RuntimeError',
          'syntaxerror' => 'Twig\\Error\\SyntaxError',
          'coreextension' => 'Twig\\Extension\\CoreExtension',
          'escaperextension' => 'Twig\\Extension\\EscaperExtension',
          'extensioninterface' => 'Twig\\Extension\\ExtensionInterface',
          'globalsinterface' => 'Twig\\Extension\\GlobalsInterface',
          'initruntimeinterface' => 'Twig\\Extension\\InitRuntimeInterface',
          'optimizerextension' => 'Twig\\Extension\\OptimizerExtension',
          'stagingextension' => 'Twig\\Extension\\StagingExtension',
          'arrayloader' => 'Twig\\Loader\\ArrayLoader',
          'chainloader' => 'Twig\\Loader\\ChainLoader',
          'loaderinterface' => 'Twig\\Loader\\LoaderInterface',
          'sourcecontextloaderinterface' => 'Twig\\Loader\\SourceContextLoaderInterface',
          'modulenode' => 'Twig\\Node\\ModuleNode',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'runtimeloaderinterface' => 'Twig\\RuntimeLoader\\RuntimeLoaderInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
        ),
         'className' => 'Twig\\Environment',
         'functionName' => 'writeCacheFile',
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