<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Template/Attribute.php-1624732867',
   'data' => 
  array (
    '726709c5295bcc22367a1659025b99f4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Collects, sanitizes, and renders HTML attributes.
 *
 * To use, optionally pass in an associative array of defined attributes, or
 * add attributes using array syntax. For example:
 * @code
 *  $attributes = new Attribute(array(\'id\' => \'socks\'));
 *  $attributes[\'class\'] = array(\'black-cat\', \'white-cat\');
 *  $attributes[\'class\'][] = \'black-white-cat\';
 *  echo \'<cat\' . $attributes . \'>\';
 *  // Produces <cat id="socks" class="black-cat white-cat black-white-cat">
 * @endcode
 *
 * $attributes always prints out all the attributes. For example:
 * @code
 *  $attributes = new Attribute(array(\'id\' => \'socks\'));
 *  $attributes[\'class\'] = array(\'black-cat\', \'white-cat\');
 *  $attributes[\'class\'][] = \'black-white-cat\';
 *  echo \'<cat class="cat \' . $attributes[\'class\'] . \'"\' . $attributes . \'>\';
 *  // Produces <cat class="cat black-cat white-cat black-white-cat" id="socks" class="cat black-cat white-cat black-white-cat">
 * @endcode
 *
 * When printing out individual attributes to customize them within a Twig
 * template, use the "without" filter to prevent attributes that have already
 * been printed from being printed again. For example:
 * @code
 *  <cat class="{{ attributes.class }} my-custom-class"{{ attributes|without(\'class\') }}>
 *  {# Produces <cat class="cat black-cat white-cat black-white-cat my-custom-class" id="socks"> #}
 * @endcode
 *
 * The attribute keys and values are automatically escaped for output with
 * Html::escape(). No protocol filtering is applied, so when using user-entered
 * input as a value for an attribute that expects an URI (href, src, ...),
 * UrlHelper::stripDangerousProtocols() should be used to ensure dangerous
 * protocols (such as \'javascript:\') are removed. For example:
 * @code
 *  $path = \'javascript:alert("xss");\';
 *  $path = UrlHelper::stripDangerousProtocols($path);
 *  $attributes = new Attribute(array(\'href\' => $path));
 *  echo \'<a\' . $attributes . \'>\';
 *  // Produces <a href="alert(&quot;xss&quot;);">
 * @endcode
 *
 * The attribute values are considered plain text and are treated as such. If a
 * safe HTML string is detected, it is converted to plain text with
 * PlainTextOutput::renderFromHtml() before being escaped. For example:
 * @code
 *   $value = t(\'Highlight the @tag tag\', [\'@tag\' => \'<em>\']);
 *   $attributes = new Attribute([\'value\' => $value]);
 *   echo \'<input\' . $attributes . \'>\';
 *   // Produces <input value="Highlight the &lt;em&gt; tag">
 * @endcode
 *
 * @see \\Drupal\\Component\\Utility\\Html::escape()
 * @see \\Drupal\\Component\\Render\\PlainTextOutput::renderFromHtml()
 * @see \\Drupal\\Component\\Utility\\UrlHelper::stripDangerousProtocols()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    '4b340ee3c2be2646c582df555b6aed4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Stores the attribute data.
   *
   * @var \\Drupal\\Core\\Template\\AttributeValueBase[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    '7737d6f81e27bb25faf077604afe24c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a \\Drupal\\Core\\Template\\Attribute object.
   *
   * @param array $attributes
   *   An associative array of key-value pairs to be converted to attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    'd54752113f566563498b85ef3c8b55ca' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    '210d91a03dcfe79cc8542c884656c675' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    'a325b16a0d9f9c2eb63e8780bf307731' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates the different types of attribute values.
   *
   * @param string $name
   *   The attribute name.
   * @param mixed $value
   *   The attribute value.
   *
   * @return \\Drupal\\Core\\Template\\AttributeValueBase
   *   An AttributeValueBase representation of the attribute\'s value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'createAttributeValue',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e3810e0b4e968391e1d5985ca689b016' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    '57bd74284d50d012dad436ad40859a98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    '5d707e8a3668c0b222fef0a9ef01a7b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds classes or merges them on to array of existing CSS classes.
   *
   * @param string|array ...
   *   CSS classes to add to the class attribute array.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'addClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '23ca2f32af41c830db2930098f4d4485' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets values for an attribute key.
   *
   * @param string $attribute
   *   Name of the attribute.
   * @param string|array $value
   *   Value(s) to set for the given attribute key.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'setAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'bbf915c08c1d410486cf37436655a1e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the storage has an attribute with the given name.
   *
   * @param string $name
   *   The name of the attribute to check for.
   *
   * @return bool
   *   Returns TRUE if the attribute exists, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'hasAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ad2b0ab7f6292f6bd25c63e4371f75c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes an attribute from an Attribute object.
   *
   * @param string|array ...
   *   Attributes to remove from the attribute array.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'removeAttribute',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0cab07c0471eaebed97d64ac304ff8da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes argument values from array of existing CSS classes.
   *
   * @param string|array ...
   *   CSS classes to remove from the class attribute array.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'removeClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6e4db8b1c333c993d9f53b019ead792f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the class attribute value if set.
   *
   * This method is implemented to take precedence over hasClass() for Twig 2.0.
   *
   * @return \\Drupal\\Core\\Template\\AttributeValueBase
   *   The class attribute value if set.
   *
   * @see twig_get_attribute()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'getClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd5ebcf8788edacc8e169d9daea2e75b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks if the class array has the given CSS class.
   *
   * @param string $class
   *   The CSS class to check for.
   *
   * @return bool
   *   Returns TRUE if the class exists, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'hasClass',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '2e942a53cb24dc65626fd4f413f37566' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __toString() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    '0e2781a27be894cab80d5e232ea9d384' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Template\\AttributeValueBase $value */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
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
    'b366075a531d62b3966480c845407ef4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all storage elements as an array.
   *
   * @return array
   *   An associative array of attributes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cdeb5ad0d517955f7b12b37803a71391' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __clone() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => '__clone',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '44424abf2845106808631d722ce5738f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'getIterator',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a878cef03cb9972cdf1fbb419aa26e15' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the whole array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'storage',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0e780a74e742984b098d9ae39e605e01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a representation of the object for use in JSON serialization.
   *
   * @return string
   *   The safe string content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'jsonSerialize',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '6fe5befbc5fd3e7e544313f7ba3b94ae' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Merges an Attribute object into the current storage.
   *
   * @param \\Drupal\\Core\\Template\\Attribute $collection
   *   The Attribute object to merge.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Template',
         'uses' => 
        array (
          'plaintextoutput' => 'Drupal\\Component\\Render\\PlainTextOutput',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'nestedarray' => 'Drupal\\Component\\Utility\\NestedArray',
        ),
         'className' => 'Drupal\\Core\\Template\\Attribute',
         'functionName' => 'merge',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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