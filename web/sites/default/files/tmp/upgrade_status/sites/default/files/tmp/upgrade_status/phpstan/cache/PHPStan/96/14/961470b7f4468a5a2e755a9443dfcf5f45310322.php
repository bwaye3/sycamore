<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Installer/InstallerRedirectTrait.php-1624732867',
   'data' => 
  array (
    '63626ec3a962ec55af1d5278029ab4a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods for checking if Drupal is already installed.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Installer',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'databasenotfoundexception' => 'Drupal\\Core\\Database\\DatabaseNotFoundException',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
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
    'e567a0bdf0ff1466253aab54f7d7d93f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the current PHP process runs on CLI.
   *
   * @return bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Installer',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'databasenotfoundexception' => 'Drupal\\Core\\Database\\DatabaseNotFoundException',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
         'functionName' => 'isCli',
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
    '5d628fe74bd44272fcee981bffc68516' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if an exception handler should redirect to the installer.
   *
   * @param \\Exception $exception
   *   The exception to check.
   * @param \\Drupal\\Core\\Database\\Connection|null $connection
   *   (optional) The default database connection. If not provided, a less
   *   comprehensive check will be performed. This can be the case if the
   *   exception occurs early enough that a database connection object isn\'t
   *   available from the container yet.
   *
   * @return bool
   *   TRUE if the exception handler should redirect to the installer because
   *   Drupal is not installed yet, or FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Installer',
         'uses' => 
        array (
          'connection' => 'Drupal\\Core\\Database\\Connection',
          'database' => 'Drupal\\Core\\Database\\Database',
          'databaseexception' => 'Drupal\\Core\\Database\\DatabaseException',
          'databasenotfoundexception' => 'Drupal\\Core\\Database\\DatabaseNotFoundException',
          'notfoundhttpexception' => 'Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException',
        ),
         'className' => 'Drupal\\Core\\Installer\\InstallerRedirectTrait',
         'functionName' => 'shouldRedirectToInstaller',
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