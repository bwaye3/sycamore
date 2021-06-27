<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/language/src/Config/LanguageConfigOverride.php-1624732868,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/language/src/Config/LanguageConfigCollectionNameTrait.php-1624732868',
   'data' => 
  array (
    'e4a4f04f98d58f5ed25396ac752d85e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines language configuration overrides.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'storableconfigbase' => 'Drupal\\Core\\Config\\StorableConfigBase',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
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
    '55b0627674fc08de30a5b57c465e3f0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a common trait for working with language override collection names.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
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
    'addf52f4f47cfcc5acba298f8b47befd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a configuration collection name based on a language code.
   *
   * @param string $langcode
   *   The language code.
   *
   * @return string
   *   The configuration collection name for a language code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
         'functionName' => 'createConfigCollectionName',
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
    '27701d406f70bde0fea50d2b5a8b6202' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Converts a configuration collection name to a language code.
   *
   * @param string $collection
   *   The configuration collection name.
   *
   * @return string
   *   The language code of the collection.
   *
   * @throws \\InvalidArgumentException
   *   Exception thrown if the provided collection name is not in the format
   *   "language.LANGCODE".
   *
   * @see self::createConfigCollectionName()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
         'functionName' => 'getLangcodeFromCollectionName',
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
    'a577d4a7e315eb987fb086c20ac7ad14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The event dispatcher.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'storableconfigbase' => 'Drupal\\Core\\Config\\StorableConfigBase',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
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
    'e2f36da9ce7167d78a8c9425e8914670' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a language override object.
   *
   * @param string $name
   *   The name of the configuration object being overridden.
   * @param \\Drupal\\Core\\Config\\StorageInterface $storage
   *   A storage controller object to use for reading and writing the
   *   configuration override.
   * @param \\Drupal\\Core\\Config\\TypedConfigManagerInterface $typed_config
   *   The typed configuration manager service.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'storableconfigbase' => 'Drupal\\Core\\Config\\StorableConfigBase',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
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
    '43cc59fcd345435e0d3c0d3d751035bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'storableconfigbase' => 'Drupal\\Core\\Config\\StorableConfigBase',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
         'functionName' => 'save',
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
    'e7afdc468f345f24148f8ab968a292ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'storableconfigbase' => 'Drupal\\Core\\Config\\StorableConfigBase',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
         'functionName' => 'delete',
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
    'c538ec03164dfac02cf86a2404757b98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language code of this language override.
   *
   * @return string
   *   The language code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\language\\Config',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'storableconfigbase' => 'Drupal\\Core\\Config\\StorableConfigBase',
          'storageinterface' => 'Drupal\\Core\\Config\\StorageInterface',
          'typedconfigmanagerinterface' => 'Drupal\\Core\\Config\\TypedConfigManagerInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\language\\Config\\LanguageConfigOverride',
         'functionName' => 'getLangcode',
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