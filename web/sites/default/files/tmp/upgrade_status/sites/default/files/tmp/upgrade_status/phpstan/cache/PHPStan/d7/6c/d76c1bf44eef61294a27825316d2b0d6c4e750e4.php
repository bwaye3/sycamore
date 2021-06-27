<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Render/FormattableMarkup.php-1624732867',
   'data' => 
  array (
    'd58e0837ccfaa611271049a4133b0e3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Formats a string for HTML display by replacing variable placeholders.
 *
 * When cast to a string, this object replaces variable placeholders in the
 * string with the arguments passed in during construction and escapes the
 * values so they can be safely displayed as HTML. See the documentation of
 * \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for details
 * on the supported placeholders and how to use them securely. Incorrect use of
 * this class can result in security vulnerabilities.
 *
 * In most cases, you should use TranslatableMarkup or PluralTranslatableMarkup
 * rather than this object, since they will translate the text (on
 * non-English-only sites) in addition to formatting it. Variables concatenated
 * without the insertion of language-specific words or punctuation are some
 * examples where translation is not applicable and using this class directly
 * directly is appropriate.
 *
 * This class is designed for formatting messages that are mostly text, not as
 * an HTML template language. As such:
 * - The passed in string should contain no (or minimal) HTML.
 * - Variable placeholders should not be used within the "<" and ">" of an
 *   HTML tag, such as in HTML attribute values. This would be a security
 *   risk. Examples:
 *   @code
 *     // Insecure (placeholder within "<" and ">"):
 *     $this->placeholderFormat(\'<@variable>text</@variable>\', [\'@variable\' => $variable]);
 *     // Insecure (placeholder within "<" and ">"):
 *     $this->placeholderFormat(\'<a @variable>link text</a>\', [\'@variable\' => $variable]);
 *     // Insecure (placeholder within "<" and ">"):
 *     $this->placeholderFormat(\'<a title="@variable">link text</a>\', [\'@variable\' => $variable]);
 *   @endcode
 *   Only the "href" attribute is supported via the special ":variable"
 *   placeholder, to allow simple links to be inserted:
 *   @code
 *     // Secure (usage of ":variable" placeholder for href attribute):
 *     $this->placeholderFormat(\'<a href=":variable">link text</a>\', [\':variable\' , $variable]);
 *     // Secure (usage of ":variable" placeholder for href attribute):
 *     $this->placeholderFormat(\'<a href=":variable" title="static text">link text</a>\', [\':variable\' => $variable]);
 *     // Insecure (the "@variable" placeholder does not filter dangerous
 *     // protocols):
 *     $this->placeholderFormat(\'<a href="@variable">link text</a>\', [\'@variable\' => $variable]);
 *     // Insecure ("@variable" placeholder within "<" and ">"):
 *     $this->placeholderFormat(\'<a href=":url" title="@variable">link text</a>\', [\':url\' => $url, \'@variable\' => $variable]);
 *   @endcode
 * To build non-minimal HTML, use an HTML template language such as Twig,
 * rather than this class.
 *
 * @ingroup sanitization
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup
 * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
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
    'ef0b822c0f6d5f7500efb92659ef049c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string containing placeholders.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
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
    'c2de4719cd89e78fc276a0e3175b2cc0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The arguments to replace placeholders with.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
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
    '668aca3c7dd8c0017b40ffecdd26873b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new class instance.
   *
   * @param string $string
   *   A string containing placeholders. The string itself will not be escaped,
   *   any unsafe content must be in $args and inserted via placeholders.
   * @param array $arguments
   *   An array with placeholder replacements, keyed by placeholder. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   additional information about placeholders.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
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
    '28f4ee51f01bb2f7ac4b5beb18087a7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
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
    '5e3fc021e8787030e601744aed575b69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the string length.
   *
   * @return int
   *   The length of the string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
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
    'ba7cc6ba2155f6c56f9d0d3fdf672194' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a representation of the object for use in JSON serialization.
   *
   * @return string
   *   The safe string content.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
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
    'f44180cfc3e333797c432d908b40abeb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Replaces placeholders in a string with values.
   *
   * @param string $string
   *   A string containing placeholders. The string itself is expected to be
   *   safe and correct HTML. Any unsafe content must be in $args and
   *   inserted via placeholders.
   * @param array $args
   *   An associative array of replacements. Each array key should be the same
   *   as a placeholder in $string. The corresponding value should be a string
   *   or an object that implements
   *   \\Drupal\\Component\\Render\\MarkupInterface. The value replaces the
   *   placeholder in $string. Sanitization and formatting will be done before
   *   replacement. The type of sanitization and formatting depends on the first
   *   character of the key:
   *   - @variable: When the placeholder replacement value is:
   *     - A string, the replaced value in the returned string will be sanitized
   *       using \\Drupal\\Component\\Utility\\Html::escape().
   *     - A MarkupInterface object, the replaced value in the returned string
   *       will not be sanitized.
   *     - A MarkupInterface object cast to a string, the replaced value in the
   *       returned string be forcibly sanitized using
   *       \\Drupal\\Component\\Utility\\Html::escape().
   *       @code
   *         $this->placeholderFormat(\'This will force HTML-escaping of the replacement value: @text\', [\'@text\' => (string) $safe_string_interface_object));
   *       @endcode
   *     Use this placeholder as the default choice for anything displayed on
   *     the site, but not within HTML attributes, JavaScript, or CSS. Doing so
   *     is a security risk.
   *   - %variable: Use when the replacement value is to be wrapped in <em>
   *     tags.
   *     A call like:
   *     @code
   *       $string = "%output_text";
   *       $arguments = [\'%output_text\' => \'text output here.\'];
   *       $this->placeholderFormat($string, $arguments);
   *     @endcode
   *     makes the following HTML code:
   *     @code
   *       <em class="placeholder">text output here.</em>
   *     @endcode
   *     As with @variable, do not use this within HTML attributes, JavaScript,
   *     or CSS. Doing so is a security risk.
   *   - :variable: Return value is escaped with
   *     \\Drupal\\Component\\Utility\\Html::escape() and filtered for dangerous
   *     protocols using UrlHelper::stripDangerousProtocols(). Use this when
   *     using the "href" attribute, ensuring the attribute value is always
   *     wrapped in quotes:
   *     @code
   *     // Secure (with quotes):
   *     $this->placeholderFormat(\'<a href=":url">@variable</a>\', [\':url\' => $url, \'@variable\' => $variable]);
   *     // Insecure (without quotes):
   *     $this->placeholderFormat(\'<a href=:url>@variable</a>\', [\':url\' => $url, \'@variable\' => $variable]);
   *     @endcode
   *     When ":variable" comes from arbitrary user input, the result is secure,
   *     but not guaranteed to be a valid URL (which means the resulting output
   *     could fail HTML validation). To guarantee a valid URL, use
   *     Url::fromUri($user_input)->toString() (which either throws an exception
   *     or returns a well-formed URL) before passing the result into a
   *     ":variable" placeholder.
   *
   * @return string
   *   A formatted HTML string with the placeholders replaced.
   *
   * @ingroup sanitization
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   * @see \\Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup
   * @see \\Drupal\\Component\\Utility\\Html::escape()
   * @see \\Drupal\\Component\\Utility\\UrlHelper::stripDangerousProtocols()
   * @see \\Drupal\\Core\\Url::fromUri()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
         'functionName' => 'placeholderFormat',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e613848e8110879bce8f71a837f60c53' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Escapes a placeholder replacement value if needed.
   *
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $value
   *   A placeholder replacement value.
   *
   * @return string
   *   The properly escaped replacement value.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Render',
         'uses' => 
        array (
          'html' => 'Drupal\\Component\\Utility\\Html',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
        ),
         'className' => 'Drupal\\Component\\Render\\FormattableMarkup',
         'functionName' => 'placeholderEscape',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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