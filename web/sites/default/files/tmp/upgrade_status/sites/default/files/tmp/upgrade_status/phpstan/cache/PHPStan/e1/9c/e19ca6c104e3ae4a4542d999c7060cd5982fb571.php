<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Render/Renderer.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Security/DoTrustedCallbackTrait.php-1624732867',
   'data' => 
  array (
    '8e97ab0f767a685b23bc82fa51efba37' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Turns a render array into a HTML string.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    'cd18370e722dc87e7f40261e0517534d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ensures that TrustedCallbackInterface can be enforced for callback methods.
 *
 * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Security',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    'da2c63cb5bf616b8c1b24ffe765b6ad8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a callback.
   *
   * If the callback is trusted the callback will occur. Trusted callbacks must
   * be methods of a class that implements
   * \\Drupal\\Core\\Security\\TrustedCallbackInterface or $extra_trusted_interface
   * or be an anonymous function. If the callback is not trusted then whether or
   * not the callback is called and what type of error is thrown depends on
   * $error_type. To provide time for dependent code to use trusted callbacks
   * use TrustedCallbackInterface::TRIGGER_SILENCED_DEPRECATION and then at a
   * later date change this to TrustedCallbackInterface::THROW_EXCEPTION.
   *
   * @param callable $callback
   *   The callback to call. Note that callbacks which are objects and use the
   *   magic method __invoke() are not supported.
   * @param array $args
   *   The arguments to pass the callback.
   * @param $message
   *   The error message if the callback is not trusted. If the message contains
   *   "%s" it will be replaced in with the resolved callback.
   * @param string $error_type
   *   (optional) The type of error to trigger. One of:
   *   - TrustedCallbackInterface::THROW_EXCEPTION
   *   - TrustedCallbackInterface::TRIGGER_WARNING
   *   - TrustedCallbackInterface::TRIGGER_SILENCED_DEPRECATION
   *   Defaults to TrustedCallbackInterface::THROW_EXCEPTION.
   * @param string $extra_trusted_interface
   *   (optional) An additional interface that if implemented by the callback
   *   object means any public methods on that object are trusted.
   *
   * @return mixed
   *   The callback\'s return value.
   *
   * @throws \\Drupal\\Core\\Security\\UntrustedCallbackException
   *   Exception thrown if the callback is not trusted and $error_type equals
   *   TrustedCallbackInterface::THROW_EXCEPTION.
   *
   * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Security',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'doTrustedCallback',
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
    '2aaf209e6be060473fd2508c6450ad91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The theme manager.
   *
   * @var \\Drupal\\Core\\Theme\\ThemeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '962f0571d17a88f3c072b5713d57646a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The controller resolver.
   *
   * @var \\Drupal\\Core\\Controller\\ControllerResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '522ab91ba6fc07b19949cc9cd3986ec6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The element info.
   *
   * @var \\Drupal\\Core\\Render\\ElementInfoManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '092463ccb2c0588938d83d1b757066b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The placeholder generator.
   *
   * @var \\Drupal\\Core\\Render\\PlaceholderGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '3caf473619fbe42513f4c93fa0a6895e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The render cache service.
   *
   * @var \\Drupal\\Core\\Render\\RenderCacheInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '8198ca8e6bab31ce98b4e5bd822f31e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The renderer configuration array.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '3175af0f6d97c01313b42fc7a5433385' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether we\'re currently in a ::renderRoot() call.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '88a7380c4c68608179418473c9e20c81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '4b7af769509ee6481e21bd8df7769c28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The render context collection.
   *
   * An individual global render context is tied to the current request. We then
   * need to maintain a different context for each request to correctly handle
   * rendering in subrequests.
   *
   * This must be static as long as some controllers rebuild the container
   * during a request. This causes multiple renderer instances to co-exist
   * simultaneously, render state getting lost, and therefore causing pages to
   * fail to render correctly. As soon as it is guaranteed that during a request
   * the same container is used, it no longer needs to be static.
   *
   * @var \\Drupal\\Core\\Render\\RenderContext[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '23c4a44724786a9dff52feaf713d71b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Renderer.
   *
   * @param \\Drupal\\Core\\Controller\\ControllerResolverInterface $controller_resolver
   *   The controller resolver.
   * @param \\Drupal\\Core\\Theme\\ThemeManagerInterface $theme
   *   The theme manager.
   * @param \\Drupal\\Core\\Render\\ElementInfoManagerInterface $element_info
   *   The element info.
   * @param \\Drupal\\Core\\Render\\PlaceholderGeneratorInterface $placeholder_generator
   *   The placeholder generator.
   * @param \\Drupal\\Core\\Render\\RenderCacheInterface $render_cache
   *   The render cache service.
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   The request stack.
   * @param array $renderer_config
   *   The renderer configuration array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    'fe66463868d66ddc39a764ae8d9eb086' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'renderRoot',
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
    'b251928700ae5a680193b4de449d0f27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'renderPlain',
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
    'eec32af3067864cb42a86e99c7bc5079' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'renderPlaceholder',
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
    '503c2b0f7a395242e05ab773a0bdbf55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
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
    '910594edc858d937923d0f2601e33d2e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * See the docs for ::render().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'doRender',
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
    '0c5a97d08f20721505f98a66661b906f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'hasRenderContext',
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
    'b2a86c6d55a6f9e31f66af1bef471371' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'executeInRenderContext',
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
    'd5332ba91d4a441a356a58016b0e7083' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current render context.
   *
   * @return \\Drupal\\Core\\Render\\RenderContext
   *   The current render context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'getCurrentRenderContext',
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
    '3ba6a36f73b83b0e182a47ae77748328' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the current render context.
   *
   * @param \\Drupal\\Core\\Render\\RenderContext|null $context
   *   The render context. This can be NULL for instance when restoring the
   *   original render context, which is in fact NULL.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'setCurrentRenderContext',
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
    'bcb70dee4859edd57418773186b83abe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces placeholders.
   *
   * Placeholders may have:
   * - #lazy_builder callback, to build a render array to be rendered into
   *   markup that can replace the placeholder
   * - #cache: to cache the result of the placeholder
   *
   * Also merges the bubbleable metadata resulting from the rendering of the
   * contents of the placeholders. Hence $elements will be contain the entirety
   * of bubbleable metadata.
   *
   * @param array &$elements
   *   The structured array describing the data being rendered. Including the
   *   bubbleable metadata associated with the markup that replaced the
   *   placeholders.
   *
   * @returns bool
   *   Whether placeholders were replaced.
   *
   * @see \\Drupal\\Core\\Render\\Renderer::renderPlaceholder()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'replacePlaceholders',
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
    'eb9b15b5b85c57a93494504f36509828' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'mergeBubbleableMetadata',
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
    '2444da1959422ca313157321bf28eb52' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'addCacheableDependency',
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
    '3384b2e76b5ef1b6f0f1c93755754e81' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Applies a very permissive XSS/HTML filter for admin-only use.
   *
   * Note: This method only filters if $string is not marked safe already. This
   * ensures that HTML intended for display is not filtered.
   *
   * @param string|\\Drupal\\Core\\Render\\Markup $string
   *   A string.
   *
   * @return \\Drupal\\Core\\Render\\Markup
   *   The escaped string wrapped in a Markup object. If the string is an
   *   instance of \\Drupal\\Component\\Render\\MarkupInterface, it won\'t be escaped
   *   again.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'xssFilterAdminIfUnsafe',
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
    '3f6ddc843c636d6bec7ad3581c8cd2f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes #plain_text or filters #markup as required.
   *
   * Drupal uses Twig\'s auto-escape feature to improve security. This feature
   * automatically escapes any HTML that is not known to be safe. Due to this
   * the render system needs to ensure that all markup it generates is marked
   * safe so that Twig does not do any additional escaping.
   *
   * By default all #markup is filtered to protect against XSS using the admin
   * tag list. Render arrays can alter the list of tags allowed by the filter
   * using the #allowed_tags property. This value should be an array of tags
   * that Xss::filter() would accept. Render arrays can escape text instead
   * of XSS filtering by setting the #plain_text property instead of #markup. If
   * #plain_text is used #allowed_tags is ignored.
   *
   * @param array $elements
   *   A render array with #markup set.
   *
   * @return \\Drupal\\Component\\Render\\MarkupInterface|string
   *   The escaped markup wrapped in a Markup object. If $elements[\'#markup\']
   *   is an instance of \\Drupal\\Component\\Render\\MarkupInterface, it won\'t be
   *   escaped or filtered again.
   *
   * @see \\Drupal\\Component\\Utility\\Html::escape()
   * @see \\Drupal\\Component\\Utility\\Xss::filter()
   * @see \\Drupal\\Component\\Utility\\Xss::filterAdmin()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'ensureMarkupIsSafe',
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
    '0d082487344982be5fa8aaad3fe9cff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a callback.
   *
   * @param string $callback_type
   *   The type of the callback. For example, \'#post_render\'.
   * @param string|callable $callback
   *   The callback to perform.
   * @param array $args
   *   The arguments to pass to the callback.
   *
   * @return mixed
   *   The callback\'s return value.
   *
   * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Render',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'xss' => 'Drupal\\Component\\Utility\\Xss',
          'accessresultinterface' => 'Drupal\\Core\\Access\\AccessResultInterface',
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'controllerresolverinterface' => 'Drupal\\Core\\Controller\\ControllerResolverInterface',
          'formhelper' => 'Drupal\\Core\\Form\\FormHelper',
          'rendercallbackinterface' => 'Drupal\\Core\\Render\\Element\\RenderCallbackInterface',
          'trustedcallbackinterface' => 'Drupal\\Core\\Security\\TrustedCallbackInterface',
          'dotrustedcallbacktrait' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
          'thememanagerinterface' => 'Drupal\\Core\\Theme\\ThemeManagerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Render\\Renderer',
         'functionName' => 'doCallback',
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