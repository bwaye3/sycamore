<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity_print/src/FilenameGenerator.php-1624732871',
   'data' => 
  array (
    '13f2a461f3bc4093712f355fa6ec18ff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A service for generating filenames for printed documents.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\entity_print\\FilenameGenerator',
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
    'af185db6eae3381687bff484d3a755b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The transliteration service.
   *
   * @var \\Drupal\\Component\\Transliteration\\TransliterationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\entity_print\\FilenameGenerator',
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
    '788776c0bbdd351328a94d00a2d6c587' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * FilenameGenerator constructor.
   *
   * @param \\Drupal\\Component\\Transliteration\\TransliterationInterface $transliteration
   *   Transliteration service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\entity_print\\FilenameGenerator',
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
    'f1145219a984309e5396b7225eb20ac1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\entity_print\\FilenameGenerator',
         'functionName' => 'generateFilename',
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
    'a8b64e0ba606b7bb2545b6972f201102' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\entity_print\\FilenameGenerator',
         'functionName' => 'generateFilename',
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
    '67b3e648e27c27296a3433855c9cdd1d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a safe filename.
   *
   * @param string $filename
   *   The un-processed filename.
   * @param string $langcode
   *   The language of the filename.
   *
   * @return string
   *   The filename stripped to only safe characters.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity_print',
         'uses' => 
        array (
          'transliterationinterface' => 'Drupal\\Component\\Transliteration\\TransliterationInterface',
        ),
         'className' => 'Drupal\\entity_print\\FilenameGenerator',
         'functionName' => 'sanitizeFilename',
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