<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/PluralTranslatableMarkup.php-1624732867',
   'data' => 
  array (
    '488e8bf80576899a2de30d295417986b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A class to hold plural translatable markup.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
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
    'e038822b2489413ac9f84a81be3a38c1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The delimiter used to split plural strings.
   *
   * This is the ETX (End of text) character and is used as a minimal means to
   * separate singular and plural variants in source and translation text. It
   * was found to be the most compatible delimiter for the supported databases.
   *
   * @deprecated in drupal:8.7.0 and is removed from drupal:9.0.0.
   *   Use Drupal\\Component\\Gettext\\PoItem::DELIMITER instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
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
    'e8011161b3dafb42849551f8d473b1bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The item count to display.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
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
    '5f76efa157bbb5813b3f70e0889f351f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The already translated string.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
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
    '085c5bb07350b66702f524b71e49cd87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PluralTranslatableMarkup object.
   *
   * Parses values passed into this class through the format_plural() function
   * in Drupal and handles an optional context for the string.
   *
   * @param int $count
   *   The item count to display.
   * @param string $singular
   *   The string for the singular case. Make sure it is clear this is singular,
   *   to ease translation (e.g. use "1 new comment" instead of "1 new"). Do not
   *   use @count in the singular string.
   * @param string $plural
   *   The string for the plural case. Make sure it is clear this is plural, to
   *   ease translation. Use @count in place of the item count, as in
   *   "@count new comments".
   * @param array $args
   *   (optional) An array with placeholder replacements, keyed by placeholder.
   *   See \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   additional information about placeholders. Note that you do not need to
   *   include @count in this array; this replacement is done automatically
   *   for the plural cases.
   * @param array $options
   *   (optional) An associative array of additional options. See t() for
   *   allowed keys.
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   (optional) The string translation service.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
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
    '131464765f9d63482fd90c2d6832f53c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new class instance from already translated markup.
   *
   * This method ensures that the string is pluralized correctly. As opposed
   * to the __construct() method, this method is designed to be invoked with
   * a string already translated (such as with configuration translation).
   *
   * @param int $count
   *   The item count to display.
   * @param string $translated_string
   *   The already translated string.
   * @param array $args
   *   An associative array of replacements to make after translation. Instances
   *   of any key in this array are replaced with the corresponding value.
   *   Based on the first character of the key, the value is escaped and/or
   *   themed. See \\Drupal\\Component\\Render\\FormattableMarkup. Note that you
   *   do not need to include @count in this array; this replacement is done
   *   automatically for the plural cases.
   * @param array $options
   *   An associative array of additional options. See t() for allowed keys.
   *
   * @return static
   *   A PluralTranslatableMarkup object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
         'functionName' => 'createFromTranslatedString',
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
    '8be5800fd1d2dc6c7bc0f610077bf8c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the object as a string.
   *
   * @return string
   *   The translated string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
         'functionName' => 'render',
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
    'ce193451ec2fbdf5552165f84c04d4c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the plural index through the gettext formula.
   *
   * @return int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
         'functionName' => 'getPluralIndex',
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
    'b9e60aebf285fb97f82f709a0f9be5c8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'poitem' => 'Drupal\\Component\\Gettext\\PoItem',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\PluralTranslatableMarkup',
         'functionName' => '__sleep',
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