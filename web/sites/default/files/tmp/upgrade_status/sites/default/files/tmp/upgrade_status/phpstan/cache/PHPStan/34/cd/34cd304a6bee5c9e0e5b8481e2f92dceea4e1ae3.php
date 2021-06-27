<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Link.php-1624732867',
   'data' => 
  array (
    'aa9f6261917a977f23f3087145cea35c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an object that holds information about a link.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
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
    'bf33ebcec85a7f0fcd14a7456b099bf4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The link generator.
   *
   * @var \\Drupal\\Core\\Utility\\LinkGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
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
    '0473138a9164015c19d890306f9523c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The text of the link.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
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
    '3cf4782364e0bbd4ecffaffb945557a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The URL of the link.
   *
   * @var \\Drupal\\Core\\Url
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
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
    '97adb3ddbd0157175a5f3410a72fbf79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new Link object.
   *
   * @param string $text
   *   The text of the link.
   * @param \\Drupal\\Core\\Url $url
   *   The url object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
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
    '1f35377d6f326625fb9ed4d6ea0305db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a Link object from a given route name and parameters.
   *
   * @param string $text
   *   The text of the link.
   * @param string $route_name
   *   The name of the route
   * @param array $route_parameters
   *   (optional) An associative array of parameter names and values.
   * @param array $options
   *   The options parameter takes exactly the same structure.
   *   See \\Drupal\\Core\\Url::fromUri() for details.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'createFromRoute',
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
    '121c20cc4cf22e3958dae4b0d1dcc413' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a Link object from a given Url object.
   *
   * @param string|array|\\Drupal\\Component\\Render\\MarkupInterface $text
   *   The link text for the anchor tag as a translated string or render array.
   * @param \\Drupal\\Core\\Url $url
   *   The Url to create the link for.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'fromTextAndUrl',
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
    '82cbac2f560ba865c0768b2612b324fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the text of the link.
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'getText',
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
    'c75995d82c7243bd5e824c819fd49dbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the new text of the link.
   *
   * @param string $text
   *   The new text.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'setText',
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
    '87a0ed720d27a4c91b178acad59f1fb2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URL of the link.
   *
   * @return \\Drupal\\Core\\Url
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'getUrl',
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
    '3f91a66062a06d5b2102206eed5262e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the URL of this link.
   *
   * @param Url $url
   *   The URL object to set
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'setUrl',
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
    '1607824a058647ea1503e744533b72af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates the HTML for this Link object.
   *
   * Do not use this method to render a link in an HTML context. In an HTML
   * context, self::toRenderable() should be used so that render cache
   * information is maintained. However, there might be use cases such as tests
   * and non-HTML contexts where calling this method directly makes sense.
   *
   * @return \\Drupal\\Core\\GeneratedLink
   *   The link HTML markup.
   *
   * @see \\Drupal\\Core\\Link::toRenderable()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'toString',
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
    '276158d0aa6a11c5a3907b156e78a13d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'toRenderable',
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
    '8fedc4cfbca5678941085e9c63a55d2a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the link generator.
   *
   * @return \\Drupal\\Core\\Utility\\LinkGeneratorInterface
   *   The link generator
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'getLinkGenerator',
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
    'd2f8d6017c3288c7ec9de5ba7b86a192' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the link generator service.
   *
   * @param \\Drupal\\Core\\Utility\\LinkGeneratorInterface $generator
   *   The link generator service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core',
         'uses' => 
        array (
          'renderableinterface' => 'Drupal\\Core\\Render\\RenderableInterface',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Link',
         'functionName' => 'setLinkGenerator',
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