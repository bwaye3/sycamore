<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/src/Response/NeedsRedirectException.php-1624732871',
   'data' => 
  array (
    '8e58824a7f23bfae9a1b0ac588e42dbb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an exception that represents the need for an HTTP redirect.
 *
 * Allows nested forms to perform HTTP redirects in an easy way.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Response',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'enforcedresponseexception' => 'Drupal\\Core\\Form\\EnforcedResponseException',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
        ),
         'className' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
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
    '162b22cdd19db1c120c3df3950ef1d98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new NeedsRedirectException object.
   *
   * @param string $url
   *   The URL to redirect to.
   * @param int $status_code
   *   The redirect status code.
   * @param string[] $headers
   *   Headers to pass with the redirect.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce\\Response',
         'uses' => 
        array (
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'cacheablemetadata' => 'Drupal\\Core\\Cache\\CacheableMetadata',
          'enforcedresponseexception' => 'Drupal\\Core\\Form\\EnforcedResponseException',
          'trustedredirectresponse' => 'Drupal\\Core\\Routing\\TrustedRedirectResponse',
        ),
         'className' => 'Drupal\\commerce\\Response\\NeedsRedirectException',
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
  ),
));