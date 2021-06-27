<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/twig/twig/src/Extension/ExtensionInterface.php-1581400763',
   'data' => 
  array (
    'c6e46da2e7bd6ab273dcec104a9f00eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface implemented by extension classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    'fbab53a87883b447e4d899c07389a836' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes the runtime environment.
     *
     * This is where you can load some file that contains filter functions for instance.
     *
     * @deprecated since 1.23 (to be removed in 2.0), implement \\Twig_Extension_InitRuntimeInterface instead
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    '94fa29dfd169df310a5eb4252b5a3612' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the token parser instances to add to the existing list.
     *
     * @return TokenParserInterface[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    'e8935b55c7734b3bd0a54aa285fdf34a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the node visitor instances to add to the existing list.
     *
     * @return NodeVisitorInterface[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    'b898a4d21839452e2717f3fd46b5fbed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of filters to add to the existing list.
     *
     * @return TwigFilter[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    'df093b1de9910d02673d9e52fb812aaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of tests to add to the existing list.
     *
     * @return TwigTest[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    '46b22ef2f6478be4cfec3c981e276334' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of functions to add to the existing list.
     *
     * @return TwigFunction[]
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    '4a7a299cc6ad276e1a313edc60527eef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of operators to add to the existing list.
     *
     * @return array<array> First array of unary operators, second array of binary operators
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
         'functionName' => 'getOperators',
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
    '068e76016827b6163abbc541af802308' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a list of global variables to add to the existing list.
     *
     * @return array An array of global variables
     *
     * @deprecated since 1.23 (to be removed in 2.0), implement \\Twig_Extension_GlobalsInterface instead
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
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
    '8d77e63792ba86a396f20ed690c3dd45' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the name of the extension.
     *
     * @return string The extension name
     *
     * @deprecated since 1.26 (to be removed in 2.0), not used anymore internally
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Twig\\Extension',
         'uses' => 
        array (
          'environment' => 'Twig\\Environment',
          'nodevisitorinterface' => 'Twig\\NodeVisitor\\NodeVisitorInterface',
          'tokenparserinterface' => 'Twig\\TokenParser\\TokenParserInterface',
          'twigfilter' => 'Twig\\TwigFilter',
          'twigfunction' => 'Twig\\TwigFunction',
          'twigtest' => 'Twig\\TwigTest',
        ),
         'className' => 'Twig\\Extension\\ExtensionInterface',
         'functionName' => 'getName',
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