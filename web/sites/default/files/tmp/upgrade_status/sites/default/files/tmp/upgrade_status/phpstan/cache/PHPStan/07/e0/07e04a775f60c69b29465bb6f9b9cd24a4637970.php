<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/PageCache/ResponsePolicyInterface.php-1624732867',
   'data' => 
  array (
    'ebfd0ab22bb8cc848a19d5adb7ac6ed6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for response policy implementations.
 *
 * The response policy is evaluated in order to determine whether a page should
 * be stored a in the cache. Calling code should do so unless static::DENY is
 * returned from the check() method.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\PageCache',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\PageCache\\ResponsePolicyInterface',
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
    '5b7f74919ad1159d187681c8125a7d4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deny storage of a page in the cache.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\PageCache',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\PageCache\\ResponsePolicyInterface',
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
    'da9161f6981e05afb00e21180eb8ec08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines whether it is save to store a page in the cache.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\Response $response
   *   The response which is about to be sent to the client.
   * @param \\Symfony\\Component\\HttpFoundation\\Request $request
   *   The request object.
   *
   * @return string|null
   *   Either static::DENY or NULL. Calling code may attempt to store a page in
   *   the cache unless static::DENY is returned. Returns NULL if the policy
   *   policy is not specified for the given response.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\PageCache',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
        ),
         'className' => 'Drupal\\Core\\PageCache\\ResponsePolicyInterface',
         'functionName' => 'check',
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