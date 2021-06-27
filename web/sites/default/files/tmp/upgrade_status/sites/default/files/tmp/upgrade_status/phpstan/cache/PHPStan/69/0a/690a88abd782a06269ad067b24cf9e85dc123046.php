<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/includes/bootstrap.inc-1624732867',
   'data' => 
  array (
    '1d3561c3f89f7bb4d7541b7e19b8da94' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Functions that need to be loaded on every Drupal request.
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
    '05a86ad8aa8473f537ba8848ae917811' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Minimum allowed version of PHP.
 *
 * Below this version:
 * - The installer cannot be run.
 * - Updates cannot be run.
 * - Modules and themes cannot be enabled.
 * - If a site managed to bypass all of the above, then an error is shown in
 *   the status report and various fatal errors occur on various pages.
 *
 * @see install.php
 *
 * @todo Move this to an appropriate autoloadable class. See
 *   https://www.drupal.org/project/drupal/issues/2908079
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '7f976dfadf34b025f166b2b08ae31ea4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Minimum supported version of PHP.
 *
 * Below this version:
 * - New sites cannot be installed, except from within tests.
 * - Updates from previous Drupal versions can be run, but users are warned
 *   that Drupal no longer supports that PHP version.
 * - An error is shown in the status report that the PHP version is too old.
 *
 * @todo Move this to an appropriate autoloadable class. See
 *   https://www.drupal.org/project/drupal/issues/2908079
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    'c725d7d8825fc24498224330281996aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Minimum recommended version of PHP.
 *
 * Sites installing Drupal on PHP versions lower than this will see a warning
 * message, but Drupal can still be installed. Used for (e.g.) PHP versions
 * that have reached their EOL or will in the near future.
 *
 * @todo Move this to an appropriate autoloadable class. See
 *   https://www.drupal.org/project/drupal/issues/2908079
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    'c9e27a07ac2e8fbc0962e2fd51e5d56c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Minimum recommended value of PHP memory_limit.
 *
 * 64M was chosen as a minimum requirement in order to allow for additional
 * contributed modules to be installed prior to hitting the limit. However,
 * 40M is the target for the Standard installation profile.
 *
 * @todo Move this to an appropriate autoloadable class. See
 *   https://www.drupal.org/project/drupal/issues/2908079
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '40655d19835e663fde6f836183b442de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Error reporting level: display no errors.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '2d01961c4a0a3180198e2e8bbd11d875' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Error reporting level: display errors and warnings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    'e3ee6c613d4b315f1b0c43b37de6af4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Error reporting level: display all messages.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '82bb1636c019b4b521654a51bfc07a88' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Error reporting level: display all messages, plus backtrace information.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '0582b5106131e928264842603393c5a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Role ID for anonymous users; should match what\'s in the "role" table.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use Drupal\\Core\\Session\\AccountInterface::ANONYMOUS_ROLE or
 *   \\Drupal\\user\\RoleInterface::ANONYMOUS_ID instead.
 *
 * @see https://www.drupal.org/node/1619504
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    'e297b0db64d57cec4dcd67c9ba12209b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Role ID for authenticated users; should match what\'s in the "role" table.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use Drupal\\Core\\Session\\AccountInterface::AUTHENTICATED_ROLE or
 *   \\Drupal\\user\\RoleInterface::AUTHENTICATED_ID instead.
 *
 * @see https://www.drupal.org/node/1619504
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '18ee4af58397e2049c2bd2241097b251' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The maximum number of characters in a module or theme name.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '38d7dc197382bc0d49916df5be91a6f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Time of the current request in seconds elapsed since the Unix Epoch.
 *
 * This differs from $_SERVER[\'REQUEST_TIME\'], which is stored as a float
 * since PHP 5.4.0. Float timestamps confuse most PHP functions
 * (including date_create()).
 *
 * @see http://php.net/manual/reserved.variables.server.php
 * @see http://php.net/manual/function.time.php
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:10.0.0.
 *   Use \\Drupal::time()->getRequestTime();
 *
 * @see https://www.drupal.org/node/2785211
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '5d3fb40a19387d62ce7c508e7e5b1df9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Regular expression to match PHP function names.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Extension\\ExtensionDiscovery::PHP_FUNCTION_PATTERN instead.
 *
 * @see https://www.drupal.org/node/2936107
 * @see http://php.net/manual/language.functions.php
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '57d50f0d3957597c8d82ccb47a1a0278' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * $config_directories key for active directory.
 *
 * @see config_get_config_directory()
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Drupal core no
 *   longer creates an active directory.
 *
 * @see https://www.drupal.org/node/2501187
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '4c896134b436fa269606fc546f9905a9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * $config_directories key for sync directory.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Site\\Settings::get(\'config_sync_directory\') instead.
 *
 * @see https://www.drupal.org/node/3018145
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '5af136f0f32db2ed9b3e076ae7850d01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * $config_directories key for staging directory.
 *
 * @see config_get_config_directory()
 * @see CONFIG_SYNC_DIRECTORY
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. The staging
 *   directory was renamed to sync.
 *
 * @see https://www.drupal.org/node/2574957
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '47b1884669536638dcc6182a0f4eca5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the root directory of the Drupal installation.
 *
 * This strips two levels of directories off the current directory.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
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
    '7e26d098a3c7e6b9ed505a7b660d5740' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the path of a configuration directory.
 *
 * Configuration directories are configured using $config_directories in
 * settings.php.
 *
 * @param string $type
 *   The type of config directory to return. Drupal core provides the
 *   CONFIG_SYNC_DIRECTORY constant to access the sync directory.
 *
 * @return string
 *   The configuration directory path.
 *
 * @throws \\Exception
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Core\\Site\\Settings::get(\'config_sync_directory\') instead.
 *
 * @see https://www.drupal.org/node/3018145
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'config_get_config_directory',
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
    '8a4381907ab713f14b3d94a1c14c80e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns and optionally sets the filename for a system resource.
 *
 * The filename, whether provided, cached, or retrieved from the database, is
 * only returned if the file exists.
 *
 * This function plays a key role in allowing Drupal\'s resources (modules
 * and themes) to be located in different places depending on a site\'s
 * configuration. For example, a module \'foo\' may legally be located
 * in any of these three places:
 *
 * core/modules/foo/foo.info.yml
 * modules/foo/foo.info.yml
 * sites/example.com/modules/foo/foo.info.yml
 *
 * Calling drupal_get_filename(\'module\', \'foo\') will give you one of
 * the above, depending on where the module is located.
 *
 * @param $type
 *   The type of the item; one of \'core\', \'profile\', \'module\', \'theme\', or
 *   \'theme_engine\'.
 * @param $name
 *   The name of the item for which the filename is requested. Ignored for
 *   $type \'core\'.
 * @param $filename
 *   The filename of the item if it is to be set explicitly rather
 *   than by consulting the database.
 *
 * @return string
 *   The filename of the requested item or NULL if the item is not found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_filename',
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
    '9ea0f173dfc7d2454918c048f179a855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Extension\\ExtensionList $extension_list */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_filename',
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
    'fc61ee81fec314dce02012823881fcc8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the path to a system item (module, theme, etc.).
 *
 * @param $type
 *   The type of the item; one of \'core\', \'profile\', \'module\', \'theme\', or
 *   \'theme_engine\'.
 * @param $name
 *   The name of the item for which the path is requested. Ignored for
 *   $type \'core\'.
 *
 * @return string
 *   The path to the requested item or an empty string if the item is not found.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_path',
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
    'e364ca929033e762c4d5b84fabdd2b02' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Translates a string to the current language or to a given language.
 *
 * In order for strings to be localized, make them available in one of the ways
 * supported by the @link i18n Localization API. @endlink When possible, use
 * the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait $this->t().
 * Otherwise create a new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 * object directly.
 *
 * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
 * important security information and usage guidelines.
 *
 * @param string $string
 *   A string containing the English text to translate.
 * @param array $args
 *   (optional) An associative array of replacements to make after translation.
 *   Based on the first character of the key, the value is escaped and/or
 *   themed. See
 *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
 *   details.
 * @param array $options
 *   (optional) An associative array of additional options, with the following
 *   elements:
 *   - \'langcode\' (defaults to the current language): A language code, to
 *     translate to a language other than what is used to display the page.
 *   - \'context\' (defaults to the empty context): The context the source string
 *     belongs to. See the @link i18n Internationalization topic @endlink for
 *     more information about string contexts.
 *
 * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
 *   An object that, when cast to a string, returns the translated string.
 *
 * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 * @see \\Drupal\\Core\\StringTranslation\\StringTranslationTrait::t()
 * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
 *
 * @ingroup sanitization
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 't',
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
    'be946cc2f284305245d5fab3876c1ce7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Formats a string for HTML display by replacing variable placeholders.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Component\\Render\\FormattableMarkup instead.
 *
 * @see https://www.drupal.org/node/2302363
 * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
 * @see \\Drupal\\Component\\Render\\FormattableMarkup
 * @see t()
 * @ingroup sanitization
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'format_string',
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
    '9f4f150da9fd2cd1f18134e4e2bb2a80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks whether a string is valid UTF-8.
 *
 * All functions designed to filter input should use drupal_validate_utf8
 * to ensure they operate on valid UTF-8 strings to prevent bypass of the
 * filter.
 *
 * When text containing an invalid UTF-8 lead byte (0xC0 - 0xFF) is presented
 * as UTF-8 to Internet Explorer 6, the program may misinterpret subsequent
 * bytes. When these subsequent bytes are HTML control characters such as
 * quotes or angle brackets, parts of the text that were deemed safe by filters
 * end up in locations that are potentially unsafe; An onerror attribute that
 * is outside of a tag, and thus deemed safe by a filter, can be interpreted
 * by the browser as if it were inside the tag.
 *
 * The function does not return FALSE for strings containing character codes
 * above U+10FFFF, even though these are prohibited by RFC 3629.
 *
 * @param $text
 *   The text to check.
 *
 * @return bool
 *   TRUE if the text is valid UTF-8, FALSE if not.
 *
 * @see \\Drupal\\Component\\Utility\\Unicode::validateUtf8()
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Component\\Utility\\Unicode::validateUtf8().
 *
 * @see https://www.drupal.org/node/1992584
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_validate_utf8',
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
    '5e7c32c052d4806378c7d8b8ee7791cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Logs an exception.
 *
 * This is a wrapper logging function which automatically decodes an exception.
 *
 * @param $type
 *   The category to which this message belongs.
 * @param $exception
 *   The exception that is going to be logged.
 * @param $message
 *   The message to store in the log. If empty, a text that contains all useful
 *   information about the passed-in exception is used.
 * @param $variables
 *   Array of variables to replace in the message on display or
 *   NULL if message is already translated or not possible to
 *   translate.
 * @param $severity
 *   The severity of the message, as per RFC 3164.
 * @param $link
 *   A link to associate with the message.
 *
 * @see \\Drupal\\Core\\Utility\\Error::decodeException()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'watchdog_exception',
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
    'd5c783c677c29170bb2e6965c390cb03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Sets a message to display to the user.
 *
 * Messages are stored in a session variable and displayed in the page template
 * via the $messages theme variable.
 *
 * Example usage:
 * @code
 * drupal_set_message(t(\'An error occurred and processing did not complete.\'), \'error\');
 * @endcode
 *
 * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
 *   (optional) The translated message to be displayed to the user. For
 *   consistency with other messages, it should begin with a capital letter and
 *   end with a period.
 * @param string $type
 *   (optional) The message\'s type. Defaults to \'status\'. These values are
 *   supported:
 *   - \'status\'
 *   - \'warning\'
 *   - \'error\'
 * @param bool $repeat
 *   (optional) If this is FALSE and the message is already set, then the
 *   message won\'t be repeated. Defaults to FALSE.
 *
 * @return array|null
 *   A multidimensional array with keys corresponding to the set message types.
 *   The indexed array values of each contain the set messages for that type,
 *   and each message is an associative array with the following format:
 *   - safe: Boolean indicating whether the message string has been marked as
 *     safe. Non-safe strings will be escaped automatically.
 *   - message: The message string.
 *   So, the following is an example of the full return array structure:
 *   @code
 *     array(
 *       \'status\' => array(
 *         array(
 *           \'safe\' => TRUE,
 *           \'message\' => \'A <em>safe</em> markup string.\',
 *         ),
 *         array(
 *           \'safe\' => FALSE,
 *           \'message\' => "$arbitrary_user_input to escape.",
 *         ),
 *       ),
 *     );
 *   @endcode
 *   If there are no messages set, the function returns NULL.
 *
 * @see drupal_get_messages()
 * @see status-messages.html.twig
 * @see https://www.drupal.org/node/2774931
 *
 * @deprecated in drupal:8.5.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Messenger\\MessengerInterface::addMessage() instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_set_message',
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
    '8c90c66507a660f544fb61e839e30bd6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns all messages that have been set with drupal_set_message().
 *
 * @param string $type
 *   (optional) Limit the messages returned by type. Defaults to NULL, meaning
 *   all types. These values are supported:
 *   - NULL
 *   - \'status\'
 *   - \'warning\'
 *   - \'error\'
 * @param bool $clear_queue
 *   (optional) If this is TRUE, the queue will be cleared of messages of the
 *   type specified in the $type parameter. Otherwise the queue will be left
 *   intact. Defaults to TRUE.
 *
 * @return array
 *   An associative, nested array of messages grouped by message type, with
 *   the top-level keys as the message type. The messages returned are
 *   limited to the type specified in the $type parameter, if any. If there
 *   are no messages of the specified type, an empty array is returned. See
 *   drupal_set_message() for the array structure of individual messages.
 *
 * @see drupal_set_message()
 * @see status-messages.html.twig
 * @see https://www.drupal.org/node/2774931
 *
 * @deprecated in drupal:8.5.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Messenger\\MessengerInterface::all() or
 *   \\Drupal\\Core\\Messenger\\MessengerInterface::messagesByType() instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_messages',
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
    'c22ba0e25ae444510585b3edfdbeb2f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the time zone of the current user.
 *
 * @return string
 *   The name of the current user\'s timezone or the name of the default timezone.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
 *   date_default_timezone_get() instead.
 *
 * @see https://www.drupal.org/node/3009387
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_user_timezone',
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
    '500b9bfeb91cebe87b9102a2a8775b23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides custom PHP error handling.
 *
 * @param $error_level
 *   The level of the error raised.
 * @param $message
 *   The error message.
 * @param $filename
 *   (optional) The filename that the error was raised in.
 * @param $line
 *   (optional) The line number the error was raised at.
 * @param $context
 *   (optional) An array that points to the active symbol table at the point the
 *   error occurred.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => '_drupal_error_handler',
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
    'bb46daaa90cd5a428260c686d8ccb427' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides custom PHP exception handling.
 *
 * Uncaught exceptions are those not enclosed in a try/catch block. They are
 * always fatal: the execution of the script will stop as soon as the exception
 * handler exits.
 *
 * @param \\Exception|\\Throwable $exception
 *   The exception object that was thrown.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => '_drupal_exception_handler',
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
    '56981ed2359fb9f75a3734284518c2a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Displays any additional errors caught while handling an exception.
 *
 * @param \\Exception|\\Throwable $exception
 *   The first exception object that was thrown.
 * @param \\Exception|\\Throwable $exception2
 *   The second exception object that was thrown.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => '_drupal_exception_handler_additional',
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
    '9150f82aefeaa99a2529c8c28b5e9556' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns the test prefix if this is an internal request from SimpleTest.
 *
 * @param string $new_prefix
 *   Internal use only. A new prefix to be stored.
 *
 * @return string|false
 *   Either the simpletest prefix (the string "simpletest" followed by any
 *   number of digits) or FALSE if the user agent does not contain a valid
 *   HMAC and timestamp.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_valid_test_ua',
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
    '0b8c7bc0404201a2093cb1f1a6273ee3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Generates a user agent string with a HMAC and timestamp for simpletest.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_generate_test_ua',
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
    '8436eedbb3d2f7947633e6efeaf9cf00' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Enables use of the theme system without requiring database access.
 *
 * Loads and initializes the theme system for site installs, updates and when
 * the site is in maintenance mode. This also applies when the database fails.
 *
 * @see _drupal_maintenance_theme()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_maintenance_theme',
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
    '58419f92044fe85b9446c9427959102a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Returns TRUE if a Drupal installation is currently being attempted.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Installer\\InstallerKernel::installationAttempted()
 *   instead.
 *
 * @see https://www.drupal.org/node/3035275
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_installation_attempted',
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
    '5d0f0fa5bbda8df07c70c6e36d621583' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Gets the name of the currently active installation profile.
 *
 * When this function is called during Drupal\'s initial installation process,
 * the name of the profile that\'s about to be installed is stored in the global
 * installation state. At all other times, the "install_profile" setting will be
 * available in container as a parameter.
 *
 * @return string|null
 *   The name of the installation profile or NULL if no installation profile is
 *   currently active. This is the case for example during the first steps of
 *   the installer or during unit tests.
 *
 * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0.
 *   Use the install_profile container parameter or \\Drupal::installProfile()
 *   instead. If you are accessing the value before it is written to
 *   configuration during the installer use the $install_state global. If you
 *   need to access the value before container is available you can use
 *   BootstrapConfigStorageFactory to load the value directly from
 *   configuration.
 *
 * @see https://www.drupal.org/node/2538996
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_get_profile',
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
    '01316e71820380efe2cdfeeea4d38f65' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Registers an additional namespace.
 *
 * @param string $name
 *   The namespace component to register; e.g., \'node\'.
 * @param string $path
 *   The relative path to the Drupal component in the filesystem.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use the
 *   class loader as injected service instance to register the namespace:
 *   @code
 *   $this->classLoader->addPsr4(\'Drupal\\\\\' . $name . \'\\\\\', \\Drupal::root() . \'/\' . $path . \'/src\');
 *   @endcode
 *   or the following code if the service cannot be injected:
 *   @code
 *   \\Drupal::service(\'class_loader\')->addPsr4(\'Drupal\\\\\' . $name . \'\\\\\', \\Drupal::root() . \'/\' . $path . \'/src\');
 *   @endcode
 *
 * @see https://www.drupal.org/node/3035275
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_classloader_register',
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
    'bb229a00a6cadf78789616ada0b9097a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides central static variable storage.
 *
 * All functions requiring a static variable to persist or cache data within
 * a single page request are encouraged to use this function unless it is
 * absolutely certain that the static variable will not need to be reset during
 * the page request. By centralizing static variable storage through this
 * function, other functions can rely on a consistent API for resetting any
 * other function\'s static variables.
 *
 * Example:
 * @code
 * function example_list($field = \'default\') {
 *   $examples = &drupal_static(__FUNCTION__);
 *   if (!isset($examples)) {
 *     // If this function is being called for the first time after a reset,
 *     // query the database and execute any other code needed to retrieve
 *     // information.
 *     ...
 *   }
 *   if (!isset($examples[$field])) {
 *     // If this function is being called for the first time for a particular
 *     // index field, then execute code needed to index the information already
 *     // available in $examples by the desired field.
 *     ...
 *   }
 *   // Subsequent invocations of this function for a particular index field
 *   // skip the above two code blocks and quickly return the already indexed
 *   // information.
 *   return $examples[$field];
 * }
 * function examples_admin_overview() {
 *   // When building the content for the overview page, make sure to get
 *   // completely fresh information.
 *   drupal_static_reset(\'example_list\');
 *   ...
 * }
 * @endcode
 *
 * In a few cases, a function can have certainty that there is no legitimate
 * use-case for resetting that function\'s static variable. This is rare,
 * because when writing a function, it\'s hard to forecast all the situations in
 * which it will be used. A guideline is that if a function\'s static variable
 * does not depend on any information outside of the function that might change
 * during a single page request, then it\'s ok to use the "static" keyword
 * instead of the drupal_static() function.
 *
 * Example:
 * @code
 * function mymodule_log_stream_handle($new_handle = NULL) {
 *   static $handle;
 *   if (isset($new_handle)) {
 *     $handle = $new_handle;
 *   }
 *   return $handle;
 * }
 * @endcode
 *
 * In a few cases, a function needs a resettable static variable, but the
 * function is called many times (100+) during a single page request, so
 * every microsecond of execution time that can be removed from the function
 * counts. These functions can use a more cumbersome, but faster variant of
 * calling drupal_static(). It works by storing the reference returned by
 * drupal_static() in the calling function\'s own static variable, thereby
 * removing the need to call drupal_static() for each iteration of the function.
 * Conceptually, it replaces:
 * @code
 * $foo = &drupal_static(__FUNCTION__);
 * @endcode
 * with:
 * @code
 * // Unfortunately, this does not work.
 * static $foo = &drupal_static(__FUNCTION__);
 * @endcode
 * However, the above line of code does not work, because PHP only allows static
 * variables to be initialized by literal values, and does not allow static
 * variables to be assigned to references.
 * - http://php.net/manual/language.variables.scope.php#language.variables.scope.static
 * - http://php.net/manual/language.variables.scope.php#language.variables.scope.references
 * The example below shows the syntax needed to work around both limitations.
 * For benchmarks and more information, see https://www.drupal.org/node/619666.
 *
 * Example:
 * @code
 * function example_default_format_type() {
 *   // Use the advanced drupal_static() pattern, since this is called very often.
 *   static $drupal_static_fast;
 *   if (!isset($drupal_static_fast)) {
 *     $drupal_static_fast[\'format_type\'] = &drupal_static(__FUNCTION__);
 *   }
 *   $format_type = &$drupal_static_fast[\'format_type\'];
 *   ...
 * }
 * @endcode
 *
 * @param $name
 *   Globally unique name for the variable. For a function with only one static,
 *   variable, the function name (e.g. via the PHP magic __FUNCTION__ constant)
 *   is recommended. For a function with multiple static variables add a
 *   distinguishing suffix to the function name for each one.
 * @param $default_value
 *   Optional default value.
 * @param $reset
 *   TRUE to reset one or all variables(s). This parameter is only used
 *   internally and should not be passed in; use drupal_static_reset() instead.
 *   (This function\'s return value should not be used when TRUE is passed in.)
 *
 * @return mixed
 *   Returns a variable by reference.
 *
 * @see drupal_static_reset()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_static',
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
    'a432e8758c376dc87486eb198cccca22' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Resets one or all centrally stored static variable(s).
 *
 * @param $name
 *   Name of the static variable to reset. Omit to reset all variables.
 *   Resetting all variables should only be used, for example, for running
 *   unit tests with a clean environment.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_static_reset',
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
    '8c5ff5682a0ef7ffdbc53e6352f625fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Formats text for emphasized display in a placeholder inside a sentence.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
 *   \\Drupal\\Component\\Render\\FormattableMarkup or Twig\'s "placeholder" filter
 *   instead. Note this method should not be used to simply emphasize a string
 *   and therefore has few valid use-cases. Note also, that this method does not
 *   mark the string as safe.
 *
 * @see https://www.drupal.org/node/2302363
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_placeholder',
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
    '3a8da471785ec45c510ea1ce2f77cd4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Registers a function for execution on shutdown.
 *
 * Wrapper for register_shutdown_function() that catches thrown exceptions to
 * avoid "Exception thrown without a stack frame in Unknown".
 *
 * @param callable $callback
 *   The shutdown function to register.
 * @param ...
 *   Additional arguments to pass to the shutdown function.
 *
 * @return array
 *   Array of shutdown functions to be executed.
 *
 * @see register_shutdown_function()
 * @ingroup php_wrappers
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => 'drupal_register_shutdown_function',
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
    'dd2e42a0cef7d3797f41e60f5a7bfcc5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Executes registered shutdown functions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => '_drupal_shutdown_function',
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
    'c1b6a5f4f6688c23808c1ef0bcc73c2f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Displays and logs any errors that may happen during shutdown.
 *
 * @param \\Exception|\\Throwable $exception
 *   The exception object that was thrown.
 *
 * @see _drupal_shutdown_function()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'bootstrapconfigstoragefactory' => 'Drupal\\Core\\Config\\BootstrapConfigStorageFactory',
          'installerkernel' => 'Drupal\\Core\\Installer\\InstallerKernel',
          'rfcloglevel' => 'Drupal\\Core\\Logger\\RfcLogLevel',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'translatablemarkup' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
        ),
         'className' => NULL,
         'functionName' => '_drupal_shutdown_function_handle_exception',
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