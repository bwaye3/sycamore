<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/language/src/Config/LanguageConfigCollectionNameTrait.php-1624732868',
   'data' => 
  array (
    'eef1e25411fab19c15b70bbd5b07c0ac' => 
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
         'className' => 'Drupal\\language\\Config\\LanguageConfigCollectionNameTrait',
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
    'ff590592e37851771e1a45e6261607ca' => 
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
         'className' => 'Drupal\\language\\Config\\LanguageConfigCollectionNameTrait',
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
    '57d465cbb942d8c735706c94117ef2b2' => 
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
         'className' => 'Drupal\\language\\Config\\LanguageConfigCollectionNameTrait',
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
  ),
));