<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/HttpFoundation/SecuredRedirectResponse.php-1624732867',
   'data' => 
  array (
    '20de6033107cb4b8936de88341f28813' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a common base class for safe redirects.
 *
 * In case you want to redirect to external URLs use
 * TrustedRedirectResponse.
 *
 * For local URLs we use LocalRedirectResponse which opts
 * out of external redirects.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\HttpFoundation',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Component\\HttpFoundation\\SecuredRedirectResponse',
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
    '488e34a55ad6387826eb5372c2e52966' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies an existing redirect response into a safe one.
   *
   * The safe one cannot accidentally redirect to an external URL, unless
   * actively wanted (see TrustedRedirectResponse).
   *
   * @param \\Symfony\\Component\\HttpFoundation\\RedirectResponse $response
   *   The original redirect.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\HttpFoundation',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Component\\HttpFoundation\\SecuredRedirectResponse',
         'functionName' => 'createFromRedirectResponse',
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
    '56f09ff5df1f6865b6abe3b567d24edd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies over the values from the given response.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\RedirectResponse $response
   *   The redirect response object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\HttpFoundation',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Component\\HttpFoundation\\SecuredRedirectResponse',
         'functionName' => 'fromResponse',
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
    'dd086ce64d2f16dfcd0c6d381476cc1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\HttpFoundation',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Component\\HttpFoundation\\SecuredRedirectResponse',
         'functionName' => 'setTargetUrl',
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
    '1dab76d7db75b0e4c0cd1ea600e715ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the URL is considered as safe to redirect to.
   *
   * @param string $url
   *   The URL checked for safety.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\HttpFoundation',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Component\\HttpFoundation\\SecuredRedirectResponse',
         'functionName' => 'isSafe',
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