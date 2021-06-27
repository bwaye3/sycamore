<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/simpletest/src/TestBase.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/AssertHelperTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/TestSetupTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/RandomGeneratorTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/Traits/Core/GeneratePermutationsTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/tests/Drupal/Tests/ConfigTestTrait.php-1624732870,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Config/StorageCopyTrait.php-1624732867',
   'data' => 
  array (
    'd609e6fd6ea6df7a5e84fa48397cb738' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for Drupal tests.
 *
 * Do not extend this class directly; use \\Drupal\\simpletest\\WebTestBase.
 *
 * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Instead,
 *   use one of the phpunit base test classes like
 *   Drupal\\Tests\\BrowserTestBase. See https://www.drupal.org/node/3030340.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'a16b6e1cb445c583a18bd2adbe8f4661' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods for assertions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '3460fe1240d1bfb5a78b2e2a6253517a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Casts MarkupInterface objects into strings.
   *
   * @param string|array $value
   *   The value to act on.
   *
   * @return mixed
   *   The input value, with MarkupInterface objects casted to string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'castSafeStrings',
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
    '395d82f007fabc778ae4984b3a5c18a8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for shared test setup functionality.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '18e3d3761f16f405757d0b8cb74945e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of config object names that are excluded from schema checking.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'd3338fc036a28ad0dc5d718ace2c3073' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The dependency injection container used in the test.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'aa1d9421450712bed59d61828d64839f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The site directory of this test run.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'f6614e04b8befb8bcc701d270148ea12' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The public file directory for the test environment.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '320b20cd3d7a88159435f0bfda8d3642' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The site directory of the original parent site.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '57d55756b8162377102f910e0981e8ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The private file directory for the test environment.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'add2a54caefdb3a092fa9fc6bab87c0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Set to TRUE to strict check all configuration saved.
   *
   * @see \\Drupal\\Core\\Config\\Testing\\ConfigSchemaChecker
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'b4ee973b5d0b28b83d66904122c0b37d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The DrupalKernel instance used in the test.
   *
   * @var \\Drupal\\Core\\DrupalKernel
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'd743a0986b5e03feedbf6f65be906753' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The temporary file directory for the test environment.
   *
   * This value has to match the temporary directory created in
   * install_base_system() for test installs.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   * @see install_base_system()
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '542a208f9feac78f551783346e406df7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The test run ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'd2bafa424d4a4fb32e202d29f3a25c6c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the database connection to the site running Simpletest.
   *
   * @return \\Drupal\\Core\\Database\\Connection
   *   The database connection to use for inserting assertions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'getDatabaseConnection',
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
    'e5a234fe6ed7554d97e4fea132c1b6f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a database prefix for running tests.
   *
   * The database prefix is used by prepareEnvironment() to setup a public files
   * directory for the test to be run, which also contains the PHP error log,
   * which is written to in case of a fatal error. Since that directory is based
   * on the database prefix, all tests (even unit tests) need to have one, in
   * order to access and read the error log.
   *
   * The generated database table prefix is used for the Drupal installation
   * being performed for the test. It is also used as user agent HTTP header
   * value by the cURL-based browser of WebTestBase, which is sent to the Drupal
   * installation of the test. During early Drupal bootstrap, the user agent
   * HTTP header is parsed, and if it matches, all database queries use the
   * database table prefix that has been generated here.
   *
   * @see \\Drupal\\Tests\\BrowserTestBase::prepareEnvironment()
   * @see \\Drupal\\simpletest\\WebTestBase::curlInitialize()
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see drupal_valid_test_ua()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'prepareDatabasePrefix',
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
    '7720f738b601519ba1d2ed79676b8a26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes the database connection to the prefixed one.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'changeDatabasePrefix',
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
    'c3a9e9acd55b76fbf3a95cebd72fbd0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the config schema exclusions for this test.
   *
   * @return string[]
   *   An array of config object names that are excluded from schema checking.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'database' => 'Drupal\\Core\\Database\\Database',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'getConfigSchemaExclusions',
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
    '1e7bd78fe4de930ee3e4f4758695eeb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides random generator utility methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '73e1a25ab498c7bd7399fa21a0297bc3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The random generator.
   *
   * @var \\Drupal\\Component\\Utility\\Random
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '147c9d2f88c01fd7d021063ccb765f3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a pseudo-random string of ASCII characters of codes 32 to 126.
   *
   * Do not use this method when special characters are not possible (e.g., in
   * machine or file names that have already been validated); instead, use
   * \\Drupal\\simpletest\\TestBase::randomMachineName(). If $length is greater
   * than 3 the random string will include at least one ampersand (\'&\') and
   * at least one greater than (\'>\') character to ensure coverage for special
   * characters and avoid the introduction of random test failures.
   *
   * @param int $length
   *   Length of random string to generate.
   *
   * @return string
   *   Pseudo-randomly generated unique string including special characters.
   *
   * @see \\Drupal\\Component\\Utility\\Random::string()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'randomString',
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
    'ef9edf30cac74b8928e0d554c4425119' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Callback for random string validation.
   *
   * @see \\Drupal\\Component\\Utility\\Random::string()
   *
   * @param string $string
   *   The random string to validate.
   *
   * @return bool
   *   TRUE if the random string is valid, FALSE if not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'randomStringValidate',
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
    '8ed333de06a272014fbfabfea0aba12a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a unique random string containing letters and numbers.
   *
   * Do not use this method when testing unvalidated user input. Instead, use
   * \\Drupal\\simpletest\\TestBase::randomString().
   *
   * @param int $length
   *   Length of random string to generate.
   *
   * @return string
   *   Randomly generated unique string.
   *
   * @see \\Drupal\\Component\\Utility\\Random::name()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'randomMachineName',
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
    '38caf0e6cbe868993a87793f4850a90e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a random PHP object.
   *
   * @param int $size
   *   The number of random keys to add to the object.
   *
   * @return object
   *   The generated object, with the specified number of random keys. Each key
   *   has a random string value.
   *
   * @see \\Drupal\\Component\\Utility\\Random::object()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'randomObject',
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
    '492834f95d991ff11683aa885cca443b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the random generator for the utility methods.
   *
   * @return \\Drupal\\Component\\Utility\\Random
   *   The random generator.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'random' => 'Drupal\\Component\\Utility\\Random',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'getRandomGenerator',
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
    'c418be471afbf0076f60844c3ce54960' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds ability to convert a list of parameters into a stack of permutations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '620a60d6914ef0f29cc189ff9e1c9686' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts a list of possible parameters into a stack of permutations.
   *
   * Takes a list of parameters containing possible values, and converts all of
   * them into a list of items containing every possible permutation.
   *
   * Example:
   * @code
   * $parameters = [
   *   \'one\' => [0, 1],
   *   \'two\' => [2, 3],
   * ];
   * $permutations = $this->generatePermutations($parameters);
   * // Result:
   * $permutations == [
   *   [\'one\' => 0, \'two\' => 2],
   *   [\'one\' => 1, \'two\' => 2],
   *   [\'one\' => 0, \'two\' => 3],
   *   [\'one\' => 1, \'two\' => 3],
   * ]
   * @endcode
   *
   * @param array $parameters
   *   An associative array of parameters, keyed by parameter name, and whose
   *   values are arrays of parameter values.
   *
   * @return array[]
   *   A list of permutations, which is an array of arrays. Each inner array
   *   contains the full list of parameters that have been passed, but with a
   *   single value only.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\Traits\\Core',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'generatePermutations',
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
    'b52d38e7ce2e99f005ac96827fd929a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides helper methods to deal with config system objects in tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'd08e6a69041985780fe15a83d87fe3f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility trait to copy configuration from one storage to another.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'f9aaa3b55466662799d44e17ade1a927' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copy the configuration from one storage to another and remove stale items.
   *
   * This method empties target storage and copies all collections from source.
   * Configuration is only copied and not imported, should not be used
   * with the active storage as the target.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source
   *   The configuration storage to copy from.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target
   *   The configuration storage to copy to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'replaceStorageContents',
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
    'd2c0b5fd36f7428bb762cbffa2515689' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a ConfigImporter object to import test configuration.
   *
   * @return \\Drupal\\Core\\Config\\ConfigImporter
   *   The config importer object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'configImporter',
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
    '0256b9f702a51bb108734d1e1b30611a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Copies configuration objects from source storage to target storage.
   *
   * @param \\Drupal\\Core\\Config\\StorageInterface $source_storage
   *   The source config storage service.
   * @param \\Drupal\\Core\\Config\\StorageInterface $target_storage
   *   The target config storage service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests',
         'uses' => 
        array (
          'configimporter' => 'Drupal\\Core\\Config\\ConfigImporter',
          'storagecomparer' => 'Drupal\\Core\\Config\\StorageComparer',
          'storagecopytrait' => 'Drupal\\Core\\Config\\StorageCopyTrait',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'copyConfig',
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
    '529a698bf2a741ad2b9cf1e6c40994bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The database prefix of this test run.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '7026aa235e37aa4fad242344ac2a1139' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Time limit for the test.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '423f7e6727523b730fc07c3af6c7667f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Current results of this test case.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'cef177f3aa6a18d29d68044c77b54a08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assertions thrown in that test case.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'e5b18ba79612076d70fb647309da0b91' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * This class is skipped when looking for the source of an assertion.
   *
   * When displaying which function an assert comes from, it\'s not too useful
   * to see "WebTestBase->drupalLogin()\', we would like to see the test
   * that called it. So we need to skip the classes defining these helper
   * methods.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '8d35a3c1a91d205a97b181dcd688e385' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * TRUE if verbose debugging is enabled.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'bacdc6a19399859c14ac86c4ad8e197b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Incrementing identifier for verbose output filenames.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '16548059b2907b31ba52efb08d9f6c96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Safe class name for use in verbose output filenames.
   *
   * Namespaces separator (\\) replaced with _.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '2dd741bdc86810844eefdba4d5bf36e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Directory where verbose output files are put.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'd7965d1afbd4163f13f8f092a52478fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * URL to the verbose output file directory.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'cd886169f9f78696984be092b1c5feb8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original configuration (variables), if available.
   *
   * @var string
   * @todo Remove all remnants of $GLOBALS[\'conf\'].
   * @see https://www.drupal.org/node/2183323
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '6035b89cd1bd6a898cf41de4cfd06c71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original configuration (variables).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '20dde3c57d1ec84ca065d3f4888bfee9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original configuration directories.
   *
   * An array of paths keyed by the CONFIG_*_DIRECTORY constants defined by
   * core/includes/bootstrap.inc.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '8bf8a365fac6ba7e0604b2c63d5b94e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original container.
   *
   * @var \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'f5652aedd2c6c3f38b572e839e9b3351' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original file directory, before it was changed for testing purposes.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'eeda75dae312d110de21925b438e36c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original language.
   *
   * @var \\Drupal\\Core\\Language\\LanguageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '2b439f0e8b58d58a7728d420222b33df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original database prefix when running inside Simpletest.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '8ec52e0ab8bfb5e521d508cede48d81c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the session cookie of the test-runner.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '7de16087d1a2f371db4531837c73f261' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The settings array.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'c835ef2dda475453c61670f8035106ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original array of shutdown function callbacks.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '70b7800a4a8d786ac545ed9ebec5aa3a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The original user, before testing began.
   *
   * @var \\Drupal\\Core\\Session\\AccountProxyInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '4218f297c7fbd6f527f0a840456bc06f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The translation file directory for the test environment.
   *
   * This is set in TestBase::prepareEnvironment().
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'f3a822a1887d4ab24eb212bed7a0f148' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether to die in case any test assertion fails.
   *
   * @var bool
   *
   * @see run-tests.sh
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '7b9fd4b2635627b03cda2616fdd69112' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The config importer that can used in a test.
   *
   * @var \\Drupal\\Core\\Config\\ConfigImporter
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'c63d65f81632bc71b545bcd8c509758e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * HTTP authentication method (specified as a CURLAUTH_* constant).
   *
   * @var int
   * @see http://php.net/manual/function.curl-setopt.php
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '9bf8a1011493a747e0667f154649365f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * HTTP authentication credentials (<username>:<password>).
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    '72b6cfe9ce082851af2ae67b0e437e08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructor for Test.
   *
   * @param $test_id
   *   Tests with the same id are reported together.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
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
    'c0eb23d3242d922eb768f5dbff93aa30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fail the test if it belongs to a PHPUnit-based framework.
   *
   * This would probably be caused by automated test conversions such as those
   * in https://www.drupal.org/project/drupal/issues/2770921.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'checkTestHierarchyMismatch',
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
    'a74879a4bfac5c16669f96ced9e6cd97' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs setup tasks before each individual test method is run.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'setUp',
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
    'df92bba50ebe42923ff3028f492629cf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks the matching requirements for Test.
   *
   * @return
   *   Array of errors containing a list of unmet requirements.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'checkRequirements',
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
    '20cafcd20636f01f1c41e05a918d6617' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper method to store an assertion record in the configured database.
   *
   * This method decouples database access from assertion logic.
   *
   * @param array $assertion
   *   Keyed array representing an assertion, as generated by assert().
   *
   * @see self::assert()
   *
   * @return \\Drupal\\Core\\Database\\StatementInterface|int|null
   *   The message ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'storeAssertion',
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
    'f086fa22e94e3fcc909226d8d3596279' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Internal helper: stores the assert.
   *
   * @param $status
   *   Can be \'pass\', \'fail\', \'exception\', \'debug\'.
   *   TRUE is a synonym for \'pass\', FALSE for \'fail\'.
   * @param string|\\Drupal\\Component\\Render\\MarkupInterface $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   * @param $caller
   *   By default, the assert comes from a function whose name starts with
   *   \'test\'. Instead, you can specify where this assert originates from
   *   by passing in an associative array as $caller. Key \'file\' is
   *   the name of the source file, \'line\' is the line number and \'function\'
   *   is the caller function itself.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assert',
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
    'b1f897d9d687246f44251cfceaede4b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Store an assertion from outside the testing context.
   *
   * This is useful for inserting assertions that can only be recorded after
   * the test case has been destroyed, such as PHP fatal errors. The caller
   * information is not automatically gathered since the caller is most likely
   * inserting the assertion on behalf of other code. In all other respects
   * the method behaves just like \\Drupal\\simpletest\\TestBase::assert() in terms
   * of storing the assertion.
   *
   * @return
   *   Message ID of the stored assertion.
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   simpletest_insert_assert() instead.
   *
   * @see https://www.drupal.org/node/3030340
   * @see \\Drupal\\simpletest\\TestBase::assert()
   * @see \\Drupal\\simpletest\\TestBase::deleteAssert()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'insertAssert',
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
    'ff1dfd714e7cc30c569cb4f36a463345' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Delete an assertion record by message ID.
   *
   * @param $message_id
   *   Message ID of the assertion to delete.
   *
   * @return
   *   TRUE if the assertion was deleted, FALSE otherwise.
   *
   * @see \\Drupal\\simpletest\\TestBase::insertAssert()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'deleteAssert',
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
    'e6b712a8e8677f4fef54546a24bf4fef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cycles through backtrace until the first non-assertion method is found.
   *
   * @return
   *   Array representing the true caller.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'getAssertionCall',
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
    '759c19f86a6a22aa49482d57ab802398' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if a value is not false.
   *
   * False values are: empty string, 0, NULL, and FALSE.
   *
   * @param $value
   *   The value on which the assertion is to be done.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertTrue',
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
    '5d7fde1deb829e5564e6edde75737d68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if a value is false.
   *
   * False values are: empty string, 0, NULL, and FALSE.
   *
   * @param $value
   *   The value on which the assertion is to be done.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertFalse',
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
    'bd76137b110f78a2f3af9ba057051abc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if a value is NULL.
   *
   * @param $value
   *   The value on which the assertion is to be done.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertNull',
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
    '28cb1ba6d8a8a35ff57b416f320084e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if a value is not NULL.
   *
   * @param $value
   *   The value on which the assertion is to be done.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertNotNull',
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
    'd494f254fe9eca2cf02f23c6722b0d8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if two values are equal.
   *
   * @param $first
   *   The first value to check.
   * @param $second
   *   The second value to check.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertEqual',
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
    'ef3133595f345026af441ba2c86982bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if two values are not equal.
   *
   * @param $first
   *   The first value to check.
   * @param $second
   *   The second value to check.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertNotEqual',
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
    '0e8e56ab1874247424512a6eda01163f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if two values are identical.
   *
   * @param $first
   *   The first value to check.
   * @param $second
   *   The second value to check.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertIdentical',
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
    '25662cd5013b003696747f0e36f150f2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Check to see if two values are not identical.
   *
   * @param $first
   *   The first value to check.
   * @param $second
   *   The second value to check.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertNotIdentical',
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
    'e9922c49d785fde8153467b3e4736c8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks to see if two objects are identical.
   *
   * @param object $object1
   *   The first object to check.
   * @param object $object2
   *   The second object to check.
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE if the assertion succeeded, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertIdenticalObject',
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
    '25291fd979196b99a1f99bfacb39565f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that no errors have been logged to the PHP error.log thus far.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Core\\DrupalKernel::bootConfiguration()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertNoErrorsLogged',
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
    'a2b809e88c2d834e41fed15ad145c1be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that a specific error has been logged to the PHP error log.
   *
   * @param string $error_message
   *   The expected error message.
   *
   * @return bool
   *   TRUE if the assertion succeeded, FALSE otherwise.
   *
   * @see \\Drupal\\simpletest\\TestBase::prepareEnvironment()
   * @see \\Drupal\\Core\\DrupalKernel::bootConfiguration()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'assertErrorLogged',
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
    '66734ee9d435f45470882209c11e9595' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fire an assertion that is always positive.
   *
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   TRUE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'pass',
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
    '37caf2a7dbb20d8be8171cb901a4afb9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fire an assertion that is always negative.
   *
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return
   *   FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'fail',
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
    '0a1646035f913ba1f49d9570c4a350b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Fire an error assertion.
   *
   * @param $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   * @param $caller
   *   The caller of the error.
   *
   * @return
   *   FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'error',
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
    'b73962a0605392a750bff359887803d2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Logs a verbose message in a text file.
   *
   * The link to the verbose message will be placed in the test results as a
   * passing assertion with the text \'[verbose message]\'.
   *
   * @param $message
   *   The verbose message to be stored.
   *
   * @see simpletest_verbose()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'verbose',
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
    '32e9b12a82a27c1dcf89f199d8fe12b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Run all tests in this class.
   *
   * Regardless of whether $methods are passed or not, only method names
   * starting with "test" are executed.
   *
   * @param $methods
   *   (optional) A list of method names in the test case class to run; e.g.,
   *   array(\'testFoo\', \'testBar\'). By default, all methods of the class are
   *   taken into account, but it can be useful to only run a few selected test
   *   methods during debugging.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'run',
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
    '7aafa85f7cb5781804d1cc132a69de4b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a database prefix for running tests.
   *
   * The database prefix is used by prepareEnvironment() to setup a public files
   * directory for the test to be run, which also contains the PHP error log,
   * which is written to in case of a fatal error. Since that directory is based
   * on the database prefix, all tests (even unit tests) need to have one, in
   * order to access and read the error log.
   *
   * @see TestBase::prepareEnvironment()
   *
   * The generated database table prefix is used for the Drupal installation
   * being performed for the test. It is also used as user agent HTTP header
   * value by the cURL-based browser of WebTestBase, which is sent to the Drupal
   * installation of the test. During early Drupal bootstrap, the user agent
   * HTTP header is parsed, and if it matches, all database queries use the
   * database table prefix that has been generated here.
   *
   * @see WebTestBase::curlInitialize()
   * @see drupal_valid_test_ua()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'prepareDatabasePrefix',
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
    '929772f345c6634110a476708007bedd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Act on global state information before the environment is altered for a test.
   *
   * Allows e.g. KernelTestBase to prime system/extension info from the
   * parent site (and inject it into the test environment so as to improve
   * performance).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'beforePrepareEnvironment',
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
    '692e7b8f9497f98189f2b98e4a5ae46e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares the current environment for running the test.
   *
   * Backups various current environment variables and resets them, so they do
   * not interfere with the Drupal site installation in which tests are executed
   * and can be restored in TestBase::restoreEnvironment().
   *
   * Also sets up new resources for the testing environment, such as the public
   * filesystem and configuration directories.
   *
   * This method is private as it must only be called once by TestBase::run()
   * (multiple invocations for the same test would have unpredictable
   * consequences) and it must not be callable or overridable by test classes.
   *
   * @see TestBase::beforePrepareEnvironment()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'prepareEnvironment',
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
    '2901ea14829f7a5b8ca8c3f3fd259a14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs cleanup tasks after each individual test method has been run.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'tearDown',
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
    '8ff591ae1e34e5cc48b85d4978b6124b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cleans up the test environment and restores the original environment.
   *
   * Deletes created files, database tables, and reverts environment changes.
   *
   * This method needs to be invoked for both unit and integration tests.
   *
   * @see TestBase::prepareDatabasePrefix()
   * @see TestBase::changeDatabasePrefix()
   * @see TestBase::prepareEnvironment()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'restoreEnvironment',
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
    'f5bfd073c8f86c9468396805053837dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handle errors during test runs.
   *
   * Because this is registered in set_error_handler(), it has to be public.
   *
   * @see set_error_handler
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'errorHandler',
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
    'ded98e49a540d5afa15bc211c29b8d87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Handle exceptions.
   *
   * @see set_exception_handler
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'exceptionHandler',
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
    '5128c08e51e38eb9bb4dae13874fb5bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Changes in memory settings.
   *
   * @param $name
   *   The name of the setting to return.
   * @param $value
   *   The value of the setting.
   *
   * @see \\Drupal\\Core\\Site\\Settings::get()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'settingsSet',
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
    '655a48ab03e302e94e22db3d8a01b0db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures test files are deletable.
   *
   * Some tests chmod generated files to be read only. During
   * TestBase::restoreEnvironment() and other cleanup operations, these files
   * need to get deleted too.
   *
   * @see \\Drupal\\Core\\File\\FileSystemInterface::deleteRecursive()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'filePreDeleteCallback',
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
    'f937b1d1374efb615c48642e89b409c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Configuration accessor for tests. Returns non-overridden configuration.
   *
   * @param $name
   *   Configuration name.
   *
   * @return \\Drupal\\Core\\Config\\Config
   *   The configuration object with original configuration data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'config',
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
    '752834d72b9c4222505fb8206801aa69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the database prefix.
   *
   * @return string
   *   The database prefix
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'getDatabasePrefix',
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
    '7ea4040325c836452d44c512b7bbb38d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the temporary files directory.
   *
   * @return string
   *   The temporary files directory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\simpletest',
         'uses' => 
        array (
          'handle' => 'Drupal\\Component\\Assertion\\Handle',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'markupinterface' => 'Drupal\\Component\\Render\\MarkupInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'environment' => 'Drupal\\Component\\Utility\\Environment',
          'database' => 'Drupal\\Core\\Database\\Database',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'publicstream' => 'Drupal\\Core\\StreamWrapper\\PublicStream',
          'testdatabase' => 'Drupal\\Core\\Test\\TestDatabase',
          'testdiscovery' => 'Drupal\\Core\\Test\\TestDiscovery',
          'testsetuptrait' => 'Drupal\\Core\\Test\\TestSetupTrait',
          'error' => 'Drupal\\Core\\Utility\\Error',
          'baseasserthelpertrait' => 'Drupal\\Tests\\AssertHelperTrait',
          'configtesttrait' => 'Drupal\\Tests\\ConfigTestTrait',
          'randomgeneratortrait' => 'Drupal\\Tests\\RandomGeneratorTrait',
          'generatepermutationstrait' => 'Drupal\\Tests\\Traits\\Core\\GeneratePermutationsTrait',
        ),
         'className' => 'Drupal\\simpletest\\TestBase',
         'functionName' => 'getTempFilesDirectory',
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