<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1624735258,
	'meta' => array (
  'cacheVersion' => 'v9-project-extensions',
  'phpstanVersion' => '0.12.90',
  'phpVersion' => 70324,
  'projectConfig' => '{parameters: {bootstrapFiles: [/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/mglaman/phpstan-drupal/drupal-autoloader.php], excludes_analyse: [*.api.php, */tests/fixtures/*.php, */tests/Drupal/Tests/Listeners/Legacy/*, */tests/fixtures/*.php, */settings*.php, */bower_components/*, */node_modules/*], fileExtensions: [module, theme, inc, install, profile, engine], drupal: {drupal_root: /Users/bradleywaye/Sites/local.sycamoretrust.com/web, entityTypeStorageMapping: {node: Drupal\\node\\NodeStorage, taxonomy_term: Drupal\\taxonomy\\TermStorage, user: Drupal\\user\\UserStorage}}, tmpDir: /Users/bradleywaye/Sites/local.sycamoretrust.com/web/sites/default/files/tmp/upgrade_status/sites/default/files/tmp/upgrade_status/phpstan, customRulesetUsed: true}, rules: [PHPStan\\Rules\\Classes\\PluginManagerInspectionRule, PHPStan\\Rules\\Drupal\\Coder\\DiscouragedFunctionsRule, PHPStan\\Rules\\Drupal\\GlobalDrupalDependencyInjectionRule, PHPStan\\Rules\\Drupal\\PluginManager\\PluginManagerSetsCacheBackendRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedConstant, PHPStan\\Rules\\Deprecations\\AccessDeprecatedPropertyRule, PHPStan\\Rules\\Deprecations\\AccessDeprecatedStaticPropertyRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedFunctionRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedMethodRule, PHPStan\\Rules\\Deprecations\\CallToDeprecatedStaticMethodRule, PHPStan\\Rules\\Deprecations\\FetchingClassConstOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\FetchingDeprecatedConstRule, PHPStan\\Rules\\Deprecations\\ImplementationOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\InheritanceOfDeprecatedInterfaceRule, PHPStan\\Rules\\Deprecations\\InstantiationOfDeprecatedClassRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClassMethodSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInClosureSignatureRule, PHPStan\\Rules\\Deprecations\\TypeHintDeprecatedInFunctionSignatureRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedCastRule, PHPStan\\Rules\\Deprecations\\UsageOfDeprecatedTraitRule], services: [{class: PHPStan\\Drupal\\ServiceMap}, {class: PHPStan\\Type\\EntityTypeManagerGetStorageDynamicReturnTypeExtension, arguments: {entityTypeStorageMapping: %drupal.entityTypeStorageMapping%}, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Type\\ServiceDynamicReturnTypeExtension, tags: [phpstan.broker.dynamicMethodReturnTypeExtension]}, {class: PHPStan\\Reflection\\EntityFieldsViaMagicReflectionExtension, tags: [phpstan.broker.propertiesClassReflectionExtension]}, {class: PHPStan\\Rules\\Drupal\\LoadIncludes, tags: [phpstan.rules.rule], arguments: [%drupal.drupal_root%]}, {class: PHPStan\\Rules\\Drupal\\ModuleLoadInclude, tags: [phpstan.rules.rule], arguments: [%drupal.drupal_root%]}, {class: PHPStan\\Rules\\Deprecations\\DeprecatedClassHelper}]}',
  'analysedPaths' => 
  array (
    0 => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
  ),
  'composerInstalled' => 
  array (
  ),
  'executedFilesHashes' => 
  array (
    '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/mglaman/phpstan-drupal/drupal-autoloader.php' => '6ad3cbafe65641bbbc5725a2719bfc1f2b8b91c1',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/Attribute.php' => '88caf21263a7d841940cfb8eb5038db48c64eea2',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/runtime/ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'bz2',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dba',
    13 => 'dom',
    14 => 'exif',
    15 => 'fileinfo',
    16 => 'filter',
    17 => 'ftp',
    18 => 'gd',
    19 => 'hash',
    20 => 'iconv',
    21 => 'json',
    22 => 'ldap',
    23 => 'libxml',
    24 => 'mbstring',
    25 => 'mysqli',
    26 => 'mysqlnd',
    27 => 'openssl',
    28 => 'pcre',
    29 => 'pdo_mysql',
    30 => 'pdo_sqlite',
    31 => 'posix',
    32 => 'readline',
    33 => 'session',
    34 => 'shmop',
    35 => 'snmp',
    36 => 'soap',
    37 => 'sockets',
    38 => 'sqlite3',
    39 => 'standard',
    40 => 'sysvmsg',
    41 => 'sysvsem',
    42 => 'sysvshm',
    43 => 'tidy',
    44 => 'tokenizer',
    45 => 'wddx',
    46 => 'xml',
    47 => 'xmlreader',
    48 => 'xmlrpc',
    49 => 'xmlwriter',
    50 => 'xsl',
    51 => 'zlib',
  ),
  'stubFiles' => 
  array (
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ArrayObject.stub' => '3b057be141d1852027278114d7574d5b777e9b77',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/PDOStatement.stub' => 'e8ef2c0c9c8d09136525ee1a9123d958cfe45f3f',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionClass.stub' => '58d53af400e16da1ac377a3a08cead58f89ef82a',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ReflectionFunctionAbstract.stub' => '1b23e432797a716191e792d673667ebc001643fc',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/SplObjectStorage.stub' => '8c1272fb5f32ab3478e0c805276609cd02277ee4',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/WeakReference.stub' => '2a6220f72171aa65d979f4f8ee06a707ecb96ff4',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/date.stub' => '8d63f9636060e7efdfced52e29873f51c7cab46e',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/dom.stub' => '850c98e54136d3dbbd46c1042a9286f7ca4d36f0',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/ext-ds.stub' => 'd6ee3aa03606b7a32ba2da3fcaa9bd725b28a868',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/iterable.stub' => '8a1046a82d819976c6bc909dc3f7c3241d1474c0',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/spl.stub' => '6a8ce07b7dc82139ffd4ab1e84414e984801b065',
    'phar:///Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/phpstan/phpstan/phpstan.phar/stubs/zip.stub' => 'aff61beeb3e9dfaed0eede432921df5eee2d3b40',
  ),
  'level' => '0',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php' => 
  array (
    0 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Class Drupal\\fb_likebox\\Tests\\FBLikeboxBlockTest extends deprecated class Drupal\\simpletest\\WebTestBase:
in drupal:8.8.0 and is removed from drupal:9.0.0. Instead,
  use \\Drupal\\Tests\\BrowserTestBase. See https://www.drupal.org/node/3030340.',
       'file' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php',
       'line' => 12,
       'canBeIgnored' => true,
       'filePath' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Class_',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to method setUp() of deprecated class Drupal\\simpletest\\WebTestBase:
in drupal:8.8.0 and is removed from drupal:9.0.0. Instead,
  use \\Drupal\\Tests\\BrowserTestBase. See https://www.drupal.org/node/3030340.',
       'file' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
    2 => 
    PHPStan\Analyser\Error::__set_state(array(
       'message' => '\\Drupal calls should be avoided in classes, use dependency injection instead',
       'file' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => NULL,
       'metadata' => 
      array (
      ),
    )),
  ),
); },
	'dependencies' => array (
  '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/fb_likebox.module' => 
  array (
    'fileHash' => 'e53b2abd7ebff44b09305472e063a5a5c79dc12f',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Plugin/Block/FBLikeboxBlock.php' => 
  array (
    'fileHash' => 'b4837c59386585f3c36148058eadf93e282a4b64',
    'dependentFiles' => 
    array (
    ),
  ),
  '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php' => 
  array (
    'fileHash' => '24b4f327a9ea94e9176573be4a782a71b1b3475c',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/fb_likebox.module' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'fb_likebox_help',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_help().
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'route_name',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'route_match',
           'type' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedFunctionNode::__set_state(array(
       'name' => 'fb_likebox_theme',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Implements hook_theme().
 */',
         'namespace' => NULL,
         'uses' => 
        array (
          'routematchinterface' => 'Drupal\\Core\\Routing\\RouteMatchInterface',
        ),
      )),
       'byRef' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Plugin/Block/FBLikeboxBlock.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\fb_likebox\\Plugin\\Block\\FBLikeboxBlock',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Provides a configurable block with Facebook Likebox\'s plugin.
 *
 * @Block(
 *   id = "fb_likebox_block",
 *   admin_label = @Translation("FB Likebox"),
 *   category = @Translation("FB Likebox")
 * )
 */',
         'namespace' => 'Drupal\\fb_likebox\\Plugin\\Block',
         'uses' => 
        array (
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Drupal\\Core\\Block\\BlockBase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'blockForm',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * {@inheritdoc}
   */',
         'namespace' => 'Drupal\\fb_likebox\\Plugin\\Block',
         'uses' => 
        array (
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_state',
           'type' => 'Drupal\\Core\\Form\\FormStateInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'blockSubmit',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * {@inheritdoc}
   */',
         'namespace' => 'Drupal\\fb_likebox\\Plugin\\Block',
         'uses' => 
        array (
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
        0 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form',
           'type' => NULL,
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
        1 => 
        PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
           'name' => 'form_state',
           'type' => 'Drupal\\Core\\Form\\FormStateInterface',
           'byRef' => false,
           'variadic' => false,
           'hasDefault' => false,
        )),
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'build',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * {@inheritdoc}
   */',
         'namespace' => 'Drupal\\fb_likebox\\Plugin\\Block',
         'uses' => 
        array (
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    4 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'defaultConfiguration',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * {@inheritdoc}
   */',
         'namespace' => 'Drupal\\fb_likebox\\Plugin\\Block',
         'uses' => 
        array (
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    5 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'likeboxLanguages',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Returns a list of all available facebook likebox languages.
   *
   * @return array
   *   Returns a list of all available facebook likebox languages.
   */',
         'namespace' => 'Drupal\\fb_likebox\\Plugin\\Block',
         'uses' => 
        array (
          'blockbase' => 'Drupal\\Core\\Block\\BlockBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
  '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/fb_likebox/src/Tests/FBLikeboxBlockTest.php' => 
  array (
    0 => 
    PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'Drupal\\fb_likebox\\Tests\\FBLikeboxBlockTest',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
 * Tests if the facebook likebox block is available.
 *
 * @group fb_likebox
 */',
         'namespace' => 'Drupal\\fb_likebox\\Tests',
         'uses' => 
        array (
          'webtestbase' => 'Drupal\\simpletest\\WebTestBase',
        ),
      )),
       'abstract' => false,
       'final' => false,
       'extends' => 'Drupal\\simpletest\\WebTestBase',
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
    )),
    1 => 
    PHPStan\Dependency\ExportedNode\ExportedPropertyNode::__set_state(array(
       'name' => 'modules',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
         'namespace' => 'Drupal\\fb_likebox\\Tests',
         'uses' => 
        array (
          'webtestbase' => 'Drupal\\simpletest\\WebTestBase',
        ),
      )),
       'type' => NULL,
       'public' => true,
       'private' => false,
       'static' => true,
    )),
    2 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'setUp',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * {@inheritdoc}
   */',
         'namespace' => 'Drupal\\fb_likebox\\Tests',
         'uses' => 
        array (
          'webtestbase' => 'Drupal\\simpletest\\WebTestBase',
        ),
      )),
       'byRef' => false,
       'public' => false,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
    3 => 
    PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
       'name' => 'testFBLikeboxBlock',
       'phpDoc' => 
      PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
         'phpDocString' => '/**
   * Test that the sharethis form block can be placed and works.
   */',
         'namespace' => 'Drupal\\fb_likebox\\Tests',
         'uses' => 
        array (
          'webtestbase' => 'Drupal\\simpletest\\WebTestBase',
        ),
      )),
       'byRef' => false,
       'public' => true,
       'private' => false,
       'abstract' => false,
       'final' => false,
       'static' => false,
       'returnType' => NULL,
       'parameters' => 
      array (
      ),
    )),
  ),
); },
];