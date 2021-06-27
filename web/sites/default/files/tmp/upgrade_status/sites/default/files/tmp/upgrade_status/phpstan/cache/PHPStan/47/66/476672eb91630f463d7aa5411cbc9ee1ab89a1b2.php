<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/TypedData/TranslatableInterface.php-1624732867',
   'data' => 
  array (
    '049f74dfd4e1cffa19ff223fadb56a14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for translatable data.
 *
 * Classes implementing this interface do not necessarily support translations.
 *
 * To detect whether an entity type supports translation, call
 * EntityTypeInterface::isTranslatable().
 *
 * Many entity interfaces are composed of numerous other interfaces such as this
 * one, which allow implementations to pick and choose which features to support
 * through stub implementations of various interface methods. This means that
 * even if an entity class implements TranslatableInterface, it might only have
 * a stub implementation and not a functional one.
 *
 * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::isTranslatable()
 * @see https://www.drupal.org/docs/8/api/entity-api/structure-of-an-entity-annotation
 * @see https://www.drupal.org/docs/8/api/entity-api/entity-translation-api
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
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
    '080cc766865d124c2cd3cb4de6e2c3cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the translation language.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface
   *   The language object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'language',
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
    '8979b56e175235479b5d77f011ec063f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the translation is the default one.
   *
   * @return bool
   *   TRUE if the translation is the default one, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'isDefaultTranslation',
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
    '55a6adcae8950829eda01d205dcc0778' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether the translation is new.
   *
   * @return bool
   *   TRUE if the translation is new, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'isNewTranslation',
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
    '6335e97a3f28199a2579867bd73f2449' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the languages the data is translated to.
   *
   * @param bool $include_default
   *   (optional) Whether the default language should be included. Defaults to
   *   TRUE.
   *
   * @return \\Drupal\\Core\\Language\\LanguageInterface[]
   *   An associative array of language objects, keyed by language codes.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'getTranslationLanguages',
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
    'a31228edc3c1c34f5dc3716e790cfeb4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a translation of the data.
   *
   * The returned translation has to be of the same type than this typed data
   * object.
   *
   * @param $langcode
   *   The language code of the translation to get or
   *   LanguageInterface::LANGCODE_DEFAULT
   *   to get the data in default language.
   *
   * @return $this
   *   A typed data object for the translated data.
   *
   * @throws \\InvalidArgumentException
   *   If an invalid or non-existing translation language is specified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'getTranslation',
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
    '45aa2affcead8b89eee67ce48fa6ce46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the translatable object referring to the original language.
   *
   * @return $this
   *   The translation object referring to the original language.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'getUntranslated',
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
    '7ac09a8958fbf697bb9f0cd3cdcabfc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks there is a translation for the given language code.
   *
   * @param string $langcode
   *   The language code identifying the translation.
   *
   * @return bool
   *   TRUE if the translation exists, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'hasTranslation',
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
    'b52817177333098607b173a664f79770' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a new translation to the translatable object.
   *
   * To create a translation of an entity prefilled with the original data:
   * @code
   *   $entity->addTranslation($langcode, $entity->toArray())
   * @endcode
   *
   * @param string $langcode
   *   The language code identifying the translation.
   * @param array $values
   *   (optional) An array of initial values to be assigned to the translatable
   *   fields. Defaults to none.
   *
   * @return $this
   *
   * @throws \\InvalidArgumentException
   *   If an invalid or existing translation language is specified.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'addTranslation',
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
    'aead6b81532004ac4b19a27db8f28f28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes the translation identified by the given language code.
   *
   * @param string $langcode
   *   The language code identifying the translation to be removed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'removeTranslation',
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
    '345471597b5e1eeb6aacf571b51c594d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the translation support status.
   *
   * @return bool
   *   TRUE if the object has translation support enabled.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\TypedData',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\TypedData\\TranslatableInterface',
         'functionName' => 'isTranslatable',
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