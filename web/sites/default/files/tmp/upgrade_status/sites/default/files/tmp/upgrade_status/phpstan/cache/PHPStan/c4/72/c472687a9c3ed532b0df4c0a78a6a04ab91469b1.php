<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/tests/src/Kernel/CountryNameTokenTest.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/taxonomy/tests/src/Traits/TaxonomyTestTrait.php-1624732869',
   'data' => 
  array (
    'b70ccae7ac0d1752c53bb100f5736b25' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the country name token.
 *
 * @requires module token
 * @group address
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\address\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'taxonomytesttrait' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
          'kerneltestbase' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
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
    '6a38cfe92aed17d65a58f45557eb5212' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common helper methods for Taxonomy module tests.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\taxonomy\\Traits',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabularyinterface' => 'Drupal\\taxonomy\\VocabularyInterface',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
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
    '965b890480b671e0521a9262bf093703' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a new vocabulary with random properties.
   *
   * @return \\Drupal\\taxonomy\\VocabularyInterface
   *   A vocabulary used for testing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\taxonomy\\Traits',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabularyinterface' => 'Drupal\\taxonomy\\VocabularyInterface',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
         'functionName' => 'createVocabulary',
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
    '870256bfa6bd4fe1d19fec87fe9ce6d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a new term with random properties given a vocabulary.
   *
   * @param \\Drupal\\taxonomy\\VocabularyInterface $vocabulary
   *   The vocabulary object.
   * @param array $values
   *   (optional) An array of values to set, keyed by property name.
   *
   * @return \\Drupal\\taxonomy\\TermInterface
   *   The new taxonomy term object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\taxonomy\\Traits',
         'uses' => 
        array (
          'languageinterface' => 'Drupal\\Core\\Language\\LanguageInterface',
          'vocabulary' => 'Drupal\\taxonomy\\Entity\\Vocabulary',
          'term' => 'Drupal\\taxonomy\\Entity\\Term',
          'vocabularyinterface' => 'Drupal\\taxonomy\\VocabularyInterface',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
         'functionName' => 'createTerm',
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
    '75e1b94da64161f7722b16e35b4fde77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A test format.
   *
   * @var \\Drupal\\filter\\FilterFormatInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\address\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'taxonomytesttrait' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
          'kerneltestbase' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
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
    '7dc4e7366ff8e3f668c98f80b15fd4dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Vocabulary for testing chained token support.
   *
   * @var \\Drupal\\taxonomy\\VocabularyInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\address\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'taxonomytesttrait' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
          'kerneltestbase' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
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
    '05bffdb058eeb0c8fe223357cf8607ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\address\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'taxonomytesttrait' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
          'kerneltestbase' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
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
    '0c4545228060990aae9e63ddcf095a40' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\address\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'taxonomytesttrait' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
          'kerneltestbase' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
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
    '93fe32e29168798bf1649b37e2a73301' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests [entity:country_name] tokens.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\address\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'taxonomytesttrait' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
          'kerneltestbase' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
         'functionName' => 'testEntityCountryNameTokens',
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
    'd2ed2042c33766f57fc4fb6eaa138af4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Test tokens for multilingual fields and entities.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\address\\Kernel',
         'uses' => 
        array (
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'fieldstorageconfig' => 'Drupal\\field\\Entity\\FieldStorageConfig',
          'filterformat' => 'Drupal\\filter\\Entity\\FilterFormat',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'node' => 'Drupal\\node\\Entity\\Node',
          'nodetype' => 'Drupal\\node\\Entity\\NodeType',
          'taxonomytesttrait' => 'Drupal\\Tests\\taxonomy\\Traits\\TaxonomyTestTrait',
          'kerneltestbase' => 'Drupal\\Tests\\token\\Kernel\\KernelTestBase',
        ),
         'className' => 'Drupal\\Tests\\address\\Kernel\\CountryNameTokenTest',
         'functionName' => 'testMultilingualFields',
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