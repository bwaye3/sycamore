<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/vendor/ondrejmirtes/better-reflection/src/SourceLocator/SourceStubber/../../../../../jetbrains/phpstorm-stubs/SimpleXML/SimpleXML.stub-1624000535',
   'data' => 
  array (
    '4ff0c8060f56d6f8f8ab2d318d948339' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents an element in an XML document.
 * @link https://php.net/manual/en/class.simplexmlelement.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
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
    'e77b849a530e331c1f8011e619f9f101' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a new SimpleXMLElement object
     * @link https://php.net/manual/en/simplexmlelement.construct.php
     * @param string $data A well-formed XML string or the path or URL to an XML document if data_is_url is TRUE.
     * @param int $options Optionally used to specify additional Libxml parameters.
     * @param bool $dataIsURL By default, data_is_url is FALSE.
     * Use TRUE to specify that data is a path or URL to an XML document instead of string data.
     * @param string $namespaceOrPrefix Namespace prefix or URI.
     * @param bool $isPrefix TRUE if ns is a prefix, FALSE if it\'s a URI; defaults to FALSE.
     * @throws \\Exception if the XML data could not be parsed.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
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
    '6f0a250cf1358462eaa65c8535180df0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Provides access to element\'s children
     * private Method not callable directly, stub exists for typehint only
     * @param string $name child name
     * @return static
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => '__get',
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
    '679a0eb19ea96d6ce8f91e6cad36c99b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return a well-formed XML string based on SimpleXML element
     * @link https://php.net/manual/en/simplexmlelement.asxml.php
     * @param string $filename [optional] <p>
     * If specified, the function writes the data to the file rather than
     * returning it.
     * </p>
     * @return string|bool If the <i>filename</i> isn\'t specified, this function
     * returns a string on success and <b>FALSE</b> on error. If the
     * parameter is specified, it returns <b>TRUE</b> if the file was written
     * successfully and <b>FALSE</b> otherwise.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'asXML',
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
    '6bc1b2355597a17a6ea321e2ecfcd3c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Alias of <b>SimpleXMLElement::asXML</b>
     * Return a well-formed XML string based on SimpleXML element
     * @link https://php.net/manual/en/simplexmlelement.savexml.php
     * @param string $filename [optional] <p>
     * If specified, the function writes the data to the file rather than
     * returning it.
     * </p>
     * @return string|bool If the <i>filename</i> isn\'t specified, this function
     * returns a string on success and false on error. If the
     * parameter is specified, it returns true if the file was written
     * successfully and false otherwise.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'saveXML',
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
    '94ad4f1bba7fe71b505a26ded9cf0247' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Runs XPath query on XML data
     * @link https://php.net/manual/en/simplexmlelement.xpath.php
     * @param string $expression <p>
     * An XPath path
     * </p>
     * @return static[]|false an array of SimpleXMLElement objects or <b>FALSE</b> in
     * case of an error.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'xpath',
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
    '5fd5e9b6f20a236e22414ce3be131c67' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a prefix/ns context for the next XPath query
     * @link https://php.net/manual/en/simplexmlelement.registerxpathnamespace.php
     * @param string $prefix <p>
     * The namespace prefix to use in the XPath query for the namespace given in
     * <i>ns</i>.
     * </p>
     * @param string $namespace <p>
     * The namespace to use for the XPath query. This must match a namespace in
     * use by the XML document or the XPath query using
     * <i>prefix</i> will not return any results.
     * </p>
     * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'registerXPathNamespace',
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
    '471cfacf0f1b3d1255cd9d4576a2314f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Identifies an element\'s attributes
     * @link https://php.net/manual/en/simplexmlelement.attributes.php
     * @param string $namespaceOrPrefix [optional] <p>
     * An optional namespace for the retrieved attributes
     * </p>
     * @param bool $isPrefix [optional] <p>
     * Default to <b>FALSE</b>
     * </p>
     * @return static|null a <b>SimpleXMLElement</b> object that can be
     * iterated over to loop through the attributes on the tag.
     * </p>
     * <p>
     * Returns <b>NULL</b> if called on a <b>SimpleXMLElement</b>
     * object that already represents an attribute and not a tag.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'attributes',
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
    '79482e86d0a0ca0e232fe55c069dc4ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds children of given node
     * @link https://php.net/manual/en/simplexmlelement.children.php
     * @param string $namespaceOrPrefix [optional] <p>
     * An XML namespace.
     * </p>
     * @param bool $isPrefix [optional] <p>
     * If <i>is_prefix</i> is <b>TRUE</b>,
     * <i>ns</i> will be regarded as a prefix. If <b>FALSE</b>,
     * <i>ns</i> will be regarded as a namespace
     * URL.
     * </p>
     * @return static a <b>SimpleXMLElement</b> element, whether the node
     * has children or not.
     * @since 5.0.1
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'children',
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
    '9b388490d4d22b8caa2fd34e73c92f9f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns namespaces used in document
     * @link https://php.net/manual/en/simplexmlelement.getnamespaces.php
     * @param bool $recursive [optional] <p>
     * If specified, returns all namespaces used in parent and child nodes.
     * Otherwise, returns only namespaces used in root node.
     * </p>
     * @return array The getNamespaces method returns an array of
     * namespace names with their associated URIs.
     * @since 5.1.2
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'getNamespaces',
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
    '1a099b3573d8659a4744753ab6783dfe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns namespaces declared in document
     * @link https://php.net/manual/en/simplexmlelement.getdocnamespaces.php
     * @param bool $recursive [optional] <p>
     * If specified, returns all namespaces declared in parent and child nodes.
     * Otherwise, returns only namespaces declared in root node.
     * </p>
     * @param bool $fromRoot [optional] <p>
     * Allows you to recursively check namespaces under a child node instead of
     * from the root of the XML doc.
     * </p>
     * @return array The getDocNamespaces method returns an array
     * of namespace names with their associated URIs.
     * @since 5.1.2
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'getDocNamespaces',
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
    'c788424b8525490c506e92950bc3df01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the name of the XML element
     * @link https://php.net/manual/en/simplexmlelement.getname.php
     * @return string The getName method returns as a string the
     * name of the XML tag referenced by the SimpleXMLElement object.
     * @since 5.1.3
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
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
    '8f7a65844da3151d8e62724540f7fdd2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a child element to the XML node
     * @link https://php.net/manual/en/simplexmlelement.addchild.php
     * @param string $qualifiedName <p>
     * The name of the child element to add.
     * </p>
     * @param string $value [optional] <p>
     * If specified, the value of the child element.
     * </p>
     * @param string $namespace [optional] <p>
     * If specified, the namespace to which the child element belongs.
     * </p>
     * @return static The addChild method returns a SimpleXMLElement
     * object representing the child added to the XML node.
     * @since 5.1.3
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'addChild',
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
    '75da5ff91ef3aae9ce779c393d5a7cca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds an attribute to the SimpleXML element
     * @link https://php.net/manual/en/simplexmlelement.addattribute.php
     * @param string $qualifiedName <p>
     * The name of the attribute to add.
     * </p>
     * @param string $value [optional] <p>
     * The value of the attribute.
     * </p>
     * @param string $namespace [optional] <p>
     * If specified, the namespace to which the attribute belongs.
     * </p>
     * @return void No value is returned.
     * @since 5.1.3
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'addAttribute',
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
    'd1a35a5a3e1aa685b2a96ea97fad1c82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * (No version information available, might only be in SVN)<br/>
     * Returns the string content
     * @link https://php.net/manual/en/simplexmlelement.tostring.php
     * @return string the string content on success or an empty string on failure.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => '__toString',
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
    'effab4691db692c34789e5aea5d1d9ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Counts the children of an element
     * @link https://php.net/manual/en/simplexmlelement.count.php
     * @return int the number of elements of an element.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'count',
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
    '5dad6b65d7532c441913e49fc93abc5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @return bool true on success or false on failure.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'offsetExists',
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
    '22d08d62c0a2c7919f4835190a36f065' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @return static Either a named attribute or an element from a list of children
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'offsetGet',
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
    'a4c3ef0e8f90e16793983964b3b457d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @param mixed $value
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'offsetSet',
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
    '73308873749e10690c512558572bfc24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Class provides access to children by position, and attributes by name
     * private Method not callable directly, stub exists for typehint only
     * @param string|int $offset
     * @return void
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'offsetUnset',
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
    '8979b73e388206f955b038fb61e769f6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Rewind to the first element
     * @link https://php.net/manual/en/simplexmliterator.rewind.php
     * @return void No value is returned.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'rewind',
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
    '911b027f80a5f33d3f4127f41aa13105' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check whether the current element is valid
     * @link https://php.net/manual/en/simplexmliterator.valid.php
     * @return bool <b>TRUE</b> if the current element is valid, otherwise <b>FALSE</b>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'valid',
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
    'd2498ec074f3c024951f00a0fba4b680' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the current element
     * @link https://php.net/manual/en/simplexmliterator.current.php
     * @return static|null the current element as a <b>SimpleXMLElement</b> object or <b>NULL</b> on failure.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'current',
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
    '0a36042c974ff5611a1f319287846478' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return current key
     * @link https://php.net/manual/en/simplexmliterator.key.php
     * @return string|false the XML tag name of the element referenced by the current <b>SimpleXMLIterator</b> object or <b>FALSE</b>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'key',
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
    '5ba2f3c4b8496623fe8ad1ce500f7af3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Move to next element
     * @link https://php.net/manual/en/simplexmliterator.next.php
     * @return void No value is returned.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'next',
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
    '9c84d5ac3d077a9e44c89995f6448e59' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return bool
     * @since 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'hasChildren',
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
    '622f4583823cba755db21362ed1b6a8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @since 8.0
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLElement',
         'functionName' => 'getChildren',
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
    'a0df34113e2319bb1b9fe07e425fbd93' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The SimpleXMLIterator provides recursive iteration over all nodes of a <b>SimpleXMLElement</b> object.
 * @link https://php.net/manual/en/class.simplexmliterator.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
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
    'e5b616d213c501ec891797ddd5c0b7c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Rewind to the first element
     * @link https://php.net/manual/en/simplexmliterator.rewind.php
     * @return void No value is returned.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'rewind',
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
    '630dd5f76ed313ac990af1e2814e27e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check whether the current element is valid
     * @link https://php.net/manual/en/simplexmliterator.valid.php
     * @return bool <b>TRUE</b> if the current element is valid, otherwise <b>FALSE</b>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'valid',
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
    '2d985b1d35aa72a7478610f4eee9f10d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the current element
     * @link https://php.net/manual/en/simplexmliterator.current.php
     * @return static|null the current element as a <b>SimpleXMLIterator</b> object or <b>NULL</b> on failure.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'current',
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
    '3784cc257dcee68d7318f9f49af51574' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return current key
     * @link https://php.net/manual/en/simplexmliterator.key.php
     * @return string|false the XML tag name of the element referenced by the current <b>SimpleXMLIterator</b> object or <b>FALSE</b>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'key',
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
    '83a1520220d503116e41e1c50a0fa4b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Move to next element
     * @link https://php.net/manual/en/simplexmliterator.next.php
     * @return void No value is returned.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'next',
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
    '376b97f5f0e00728c43172b47ca92e4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the current element has sub elements.
     * @link https://php.net/manual/en/simplexmliterator.haschildren.php
     * @return bool <b>TRUE</b> if the current element has sub-elements, otherwise <b>FALSE</b>
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'hasChildren',
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
    'fcc440dcd55beed9249ba8cf54b2cd5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the sub-elements of the current element
     * @link https://php.net/manual/en/simplexmliterator.getchildren.php
     * @return SimpleXMLIterator a <b>SimpleXMLIterator</b> object containing
     * the sub-elements of the current element.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'getChildren',
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
    'ae8a191cb90c97361d799398d40acaf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * (No version information available, might only be in SVN)<br/>
     * Returns the string content
     * @link https://php.net/manual/en/simplexmlelement.tostring.php
     * @return string the string content on success or an empty string on failure.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => '__toString',
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
    'e3dc49176bd0ef401e3653ee6436b3ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Counts the children of an element
     * @link https://php.net/manual/en/simplexmlelement.count.php
     * @return int the number of elements of an element.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => 'SimpleXMLIterator',
         'functionName' => 'count',
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
    '4235484fa5163e28e48ced0656a0e1e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interprets an XML file into an object
 * @link https://php.net/manual/en/function.simplexml-load-file.php
 * @param string $filename <p>
 * Path to the XML file
 * </p>
 * <p>
 * Libxml 2 unescapes the URI, so if you want to pass e.g.
 * b&c as the URI parameter a,
 * you have to call
 * simplexml_load_file(rawurlencode(\'https://example.com/?a=\' .
 * urlencode(\'b&c\'))). Since PHP 5.1.0 you don\'t need to do
 * this because PHP will do it for you.
 * </p>
 * @param string|null $class_name [optional] <p>
 * You may use this optional parameter so that
 * <b>simplexml_load_file</b> will return an object of
 * the specified class. That class should extend the
 * SimpleXMLElement class.
 * </p>
 * @param int $options [optional] <p>
 * Since PHP 5.1.0 and Libxml 2.6.0, you may also use the
 * <i>options</i> parameter to specify additional Libxml parameters.
 * </p>
 * @param string $namespace_or_prefix [optional] <p>
 * Namespace prefix or URI.
 * </p>
 * @param bool $is_prefix [optional] <p>
 * <b>TRUE</b> if <i>ns</i> is a prefix, <b>FALSE</b> if it\'s a URI;
 * defaults to <b>FALSE</b>.
 * </p>
 * @return SimpleXMLElement|false an object of class SimpleXMLElement with
 * properties containing the data held within the XML document, or <b>FALSE</b> on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'simplexml_load_file',
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
    'bad7052a859229fcc4a7066bb8862f28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interprets a string of XML into an object
 * @link https://php.net/manual/en/function.simplexml-load-string.php
 * @param string $data <p>
 * A well-formed XML string
 * </p>
 * @param string|null $class_name [optional] <p>
 * You may use this optional parameter so that
 * <b>simplexml_load_string</b> will return an object of
 * the specified class. That class should extend the
 * SimpleXMLElement class.
 * </p>
 * @param int $options [optional] <p>
 * Since PHP 5.1.0 and Libxml 2.6.0, you may also use the
 * <i>options</i> parameter to specify additional Libxml parameters.
 * </p>
 * @param string $namespace_or_prefix [optional] <p>
 * Namespace prefix or URI.
 * </p>
 * @param bool $is_prefix [optional] <p>
 * <b>TRUE</b> if <i>ns</i> is a prefix, <b>FALSE</b> if it\'s a URI;
 * defaults to <b>FALSE</b>.
 * </p>
 * @return SimpleXMLElement|false an object of class SimpleXMLElement with
 * properties containing the data held within the xml document, or <b>FALSE</b> on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'simplexml_load_string',
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
    '6f5d58c1a8a5668a1ebe8b68a73576cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Get a SimpleXMLElement object from a DOM node.
 * @link https://php.net/manual/en/function.simplexml-import-dom.php
 * @param DOMNode $node <p>
 * A DOM Element node
 * </p>
 * @param string|null $class_name [optional] <p>
 * You may use this optional parameter so that
 * <b>simplexml_import_dom</b> will return an object of
 * the specified class. That class should extend the
 * SimpleXMLElement class.
 * </p>
 * @return SimpleXMLElement|null a SimpleXMLElement or <b>FALSE</b> on failure.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'pure' => 'JetBrains\\PhpStorm\\Pure',
        ),
         'className' => NULL,
         'functionName' => 'simplexml_import_dom',
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