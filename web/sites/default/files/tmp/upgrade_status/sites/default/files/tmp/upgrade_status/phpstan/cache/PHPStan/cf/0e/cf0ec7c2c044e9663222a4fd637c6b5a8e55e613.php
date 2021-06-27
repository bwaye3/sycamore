<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Session/AccountProxyInterface.php-1624732867',
   'data' => 
  array (
    'e66b700cef683466e204878bf17f610e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for a service which has the current account stored.
 *
 * It is generally more useful to use \\Drupal\\Core\\Session\\AccountInterface
 * unless one specifically needs the proxying features of this interface.
 *
 * @see \\Drupal\\Core\\Session\\AccountInterface
 *
 * @ingroup user_api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Session',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Session\\AccountProxyInterface',
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
    'cdaca0209e48d29b936ebb604f30dfd1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the currently wrapped account.
   *
   * Setting the current account is highly discouraged! Instead, make sure to
   * inject the desired user object into the dependent code directly.
   *
   * A preferable method of account impersonation is to use
   * \\Drupal\\Core\\Session\\AccountSwitcherInterface::switchTo() and
   * \\Drupal\\Core\\Session\\AccountSwitcherInterface::switchBack().
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The current account.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Session',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Session\\AccountProxyInterface',
         'functionName' => 'setAccount',
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
    '2980077a2fb377a9e872f4e5a1d32082' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the currently wrapped account.
   *
   * @return \\Drupal\\Core\\Session\\AccountInterface
   *   The current account.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Session',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Session\\AccountProxyInterface',
         'functionName' => 'getAccount',
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
    'a287a92e6481a5115d12312dee6b12ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the id of the initial account.
   *
   * Never use this method, its sole purpose is to work around weird effects
   * during mid-request container rebuilds.
   *
   * @param int $account_id
   *   The id of the initial account.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Session',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Session\\AccountProxyInterface',
         'functionName' => 'setInitialAccountId',
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