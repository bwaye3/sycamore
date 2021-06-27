<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Utility/UrlHelper.php-1624732867',
   'data' => 
  array (
    '7d7d2697bfcafdf12e0ad1b98ea00d79' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper class URL based methods.
 *
 * @ingroup utility
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
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
    'fe007ca3182630080af44eac1fa7a9ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The list of allowed protocols.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
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
    '09521b3b5b10c5d8542647121f381b1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parses an array into a valid, rawurlencoded query string.
   *
   * Function rawurlencode() is RFC3986 compliant, and as a consequence RFC3987
   * compliant. The latter defines the required format of "URLs" in HTML5.
   * urlencode() is almost the same as rawurlencode(), except that it encodes
   * spaces as "+" instead of "%20". This makes its result non compliant to
   * RFC3986 and as a consequence non compliant to RFC3987 and as a consequence
   * not valid as a "URL" in HTML5.
   *
   * @param array $query
   *   The query parameter array to be processed; for instance,
   *   \\Drupal::request()->query->all().
   * @param string $parent
   *   (optional) Internal use only. Used to build the $query array key for
   *   nested items. Defaults to an empty string.
   *
   * @return string
   *   A rawurlencoded string which can be used as or appended to the URL query
   *   string.
   *
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'buildQuery',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '66572d2f30604feb0ae3c0ec7dcc6f74' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters a URL query parameter array to remove unwanted elements.
   *
   * @param array $query
   *   An array to be processed.
   * @param array $exclude
   *   (optional) A list of $query array keys to remove. Use "parent[child]" to
   *   exclude nested items.
   * @param string $parent
   *   Internal use only. Used to build the $query array key for nested items.
   *
   * @return
   *   An array containing query parameters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'filterQueryParameters',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b3635e12d84e51b3a4b6f3a971e16be9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Parses a URL string into its path, query, and fragment components.
   *
   * This function splits both internal paths like @code node?b=c#d @endcode and
   * external URLs like @code https://example.com/a?b=c#d @endcode into their
   * component parts. See
   * @link http://tools.ietf.org/html/rfc3986#section-3 RFC 3986 @endlink for an
   * explanation of what the component parts are.
   *
   * Note that, unlike the RFC, when passed an external URL, this function
   * groups the scheme, authority, and path together into the path component.
   *
   * @param string $url
   *   The internal path or external URL string to parse.
   *
   * @return array
   *   An associative array containing:
   *   - path: The path component of $url. If $url is an external URL, this
   *     includes the scheme, authority, and path.
   *   - query: An array of query parameters from $url, if they exist.
   *   - fragment: The fragment component from $url, if it exists.
   *
   * @see \\Drupal\\Core\\Utility\\LinkGenerator
   * @see http://tools.ietf.org/html/rfc3986
   *
   * @ingroup php_wrappers
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
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
    'e8b963f1231d060ba9546150ca0dabbd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Encodes a Drupal path for use in a URL.
   *
   * For aesthetic reasons slashes are not escaped.
   *
   * @param string $path
   *   The Drupal path to encode.
   *
   * @return string
   *   The encoded path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'encodePath',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '181e2dc95c194c82105271bc9d4df3a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether a path is external to Drupal.
   *
   * An example of an external path is http://example.com. If a path cannot be
   * assessed by Drupal\'s menu handler, then we must treat it as potentially
   * insecure.
   *
   * @param string $path
   *   The internal path or external URL being linked to, such as "node/34" or
   *   "http://example.com/foo".
   *
   * @return bool
   *   TRUE or FALSE, where TRUE indicates an external path.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'isExternal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8ad9a7de47730043643e7be3d49f3ea0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if an external URL points to this installation.
   *
   * @param string $url
   *   A string containing an external URL, such as "http://example.com/foo".
   * @param string $base_url
   *   The base URL string to check against, such as "http://example.com/"
   *
   * @return bool
   *   TRUE if the URL has the same domain and base path.
   *
   * @throws \\InvalidArgumentException
   *   Exception thrown when a either $url or $bath_url are not fully qualified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'externalIsLocal',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '3518ed8e5156b47321682f1c3833fc0f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Processes an HTML attribute value and strips dangerous protocols from URLs.
   *
   * @param string $string
   *   The string with the attribute value.
   *
   * @return string
   *   Cleaned up and HTML-escaped version of $string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'filterBadProtocol',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'b634d330cf7694c7afe4fdb4f49ad799' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the allowed protocols.
   *
   * @return array
   *   An array of protocols, for example http, https and irc.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'getAllowedProtocols',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cb3a5e4112bd9c5e6e520617e3cd9a2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the allowed protocols.
   *
   * @param array $protocols
   *   An array of protocols, for example http, https and irc.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'setAllowedProtocols',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd9f87e067d8902402e05447d04a3ad5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Strips dangerous protocols (for example, \'javascript:\') from a URI.
   *
   * This function must be called for all URIs within user-entered input prior
   * to being output to an HTML attribute value. It is often called as part of
   * \\Drupal\\Component\\Utility\\UrlHelper::filterBadProtocol() or
   * \\Drupal\\Component\\Utility\\Xss::filter(), but those functions return an
   * HTML-encoded string, so this function can be called independently when the
   * output needs to be a plain-text string for passing to functions that will
   * call Html::escape() separately. The exact behavior depends on the value:
   * - If the value is a well-formed (per RFC 3986) relative URL or
   *   absolute URL that does not use a dangerous protocol (like
   *   "javascript:"), then the URL remains unchanged. This includes all
   *   URLs generated via Url::toString() and UrlGeneratorTrait::url().
   * - If the value is a well-formed absolute URL with a dangerous protocol,
   *   the protocol is stripped. This process is repeated on the remaining URL
   *   until it is stripped down to a safe protocol.
   * - If the value is not a well-formed URL, the same sanitization behavior as
   *   for well-formed URLs will be invoked, which strips most substrings that
   *   precede a ":". The result can be used in URL attributes such as "href"
   *   or "src" (only after calling Html::escape() separately), but this may not
   *   produce valid HTML (for example, malformed URLs within "href" attributes
   *   fail HTML validation). This can be avoided by using
   *   Url::fromUri($possibly_not_a_url)->toString(), which either throws an
   *   exception or returns a well-formed URL.
   *
   * @param string $uri
   *   A plain-text URI that might contain dangerous protocols.
   *
   * @return string
   *   A plain-text URI stripped of dangerous protocols. As with all plain-text
   *   strings, this return value must not be output to an HTML page without
   *   being sanitized first. However, it can be passed to functions
   *   expecting plain-text strings.
   *
   * @see \\Drupal\\Component\\Utility\\Html::escape()
   * @see \\Drupal\\Core\\Url::toString()
   * @see \\Drupal\\Core\\Routing\\UrlGeneratorTrait::url()
   * @see \\Drupal\\Core\\Url::fromUri()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'stripDangerousProtocols',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'fbacd6b0b8570521a4ca7bbcb98dbbc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Verifies the syntax of the given URL.
   *
   * This function should only be used on actual URLs. It should not be used for
   * Drupal menu paths, which can contain arbitrary characters.
   * Valid values per RFC 3986.
   *
   * @param string $url
   *   The URL to verify.
   * @param bool $absolute
   *   Whether the URL is absolute (beginning with a scheme such as "http:").
   *
   * @return bool
   *   TRUE if the URL is in a valid format, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Utility\\UrlHelper',
         'functionName' => 'isValid',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
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