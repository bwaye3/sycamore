<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/custom/gavias_sliderlayer/vendor/revolution/php/twitter/RestApi.php-1624732909',
   'data' => 
  array (
    'f135489039e3a80b0368d85d6a849855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @author   Albert Kozlowski <vojant@gmail.com>
 * @license  MIT License
 * @link     https://github.com/vojant/Twitter-php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
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
    'ce87e668482ff478f7e21ae99fccd1dc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class TwitterRestApiException
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'TwitterPhp',
         'uses' => 
        array (
          'application' => 'TwitterPhp\\Connection\\Application',
          'user' => 'TwitterPhp\\Connection\\User',
        ),
         'className' => 'TwitterPhp\\RestApiException',
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
    'db47ddb6f8a53bc9a413a40b22846e9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Class RestApi
 * @package TwitterPhp
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'TwitterPhp',
         'uses' => 
        array (
          'application' => 'TwitterPhp\\Connection\\Application',
          'user' => 'TwitterPhp\\Connection\\User',
        ),
         'className' => 'TwitterPhp\\RestApi',
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
    '945aeb0eab02c7b537bf553b45e83942' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var string
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'TwitterPhp',
         'uses' => 
        array (
          'application' => 'TwitterPhp\\Connection\\Application',
          'user' => 'TwitterPhp\\Connection\\User',
        ),
         'className' => 'TwitterPhp\\RestApi',
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
    '44fabd0df6997db00d674a79949584c2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param string $consumerKey
     * @param string $consumerSecret
     * @param null|string $accessToken
     * @param null|string $accessTokenSecret
     * @throws TwitterRestApiException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'TwitterPhp',
         'uses' => 
        array (
          'application' => 'TwitterPhp\\Connection\\Application',
          'user' => 'TwitterPhp\\Connection\\User',
        ),
         'className' => 'TwitterPhp\\RestApi',
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
    'f5a2c27b324cb093ef5f158f9fc0cee1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Connect to Twitter API as application.
     * @link https://dev.twitter.com/docs/auth/application-only-auth
     *
     * @return \\TwitterPhp\\Connection\\Application
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'TwitterPhp',
         'uses' => 
        array (
          'application' => 'TwitterPhp\\Connection\\Application',
          'user' => 'TwitterPhp\\Connection\\User',
        ),
         'className' => 'TwitterPhp\\RestApi',
         'functionName' => 'connectAsApplication',
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
    'bf0f34b3fdf54cc9069de5f27fe7594f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Connect to Twitter API as user.
     * @link https://dev.twitter.com/docs/auth/oauth/single-user-with-examples
     *
     * @return \\TwitterPhp\\Connection\\User
     * @throws TwitterRestApiException
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'TwitterPhp',
         'uses' => 
        array (
          'application' => 'TwitterPhp\\Connection\\Application',
          'user' => 'TwitterPhp\\Connection\\User',
        ),
         'className' => 'TwitterPhp\\RestApi',
         'functionName' => 'connectAsUser',
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