<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/TranslatableMarkup.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Utility/ToStringTrait.php-1624732867',
   'data' => 
  array (
    '10ef8861c8bf6c2325dd4b5a697cdcb3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides translatable markup class.
 *
 * This object, when cast to a string, will return the formatted, translated
 * string. Avoid casting it to a string yourself, because it is preferable to
 * let the rendering system do the cast as late as possible in the rendering
 * process, so that this object itself can be put, untranslated, into render
 * caches and thus the cache can be shared between different language contexts.
 *
 * @see \\Drupal\\Component\\Render\\FormattableMarkup
 * @see \\Drupal\\Core\\StringTranslation\\TranslationManager::translateString()
 * @see \\Drupal\\Core\\Annotation\\Translation
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '4f7722b71dfacca96fff06d87da13e73' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wraps __toString in a trait to avoid some fatals.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '0b9c8aee0612522b49d3f5e68f5f81af' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements the magic __toString() method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => '__toString',
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
    'fc252e090d9200d0a9fdf72bb7b24a8c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * For test purposes, wrap die() in an overridable method.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => '_die',
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
    'ca24e30b6d0badecb772ec119b20e1a5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders the object as a string.
   *
   * @return string|object
   *   The rendered string or an object implementing __toString().
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Utility',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '9780106ca70bc055c93345491fae14fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The translated markup without placeholder replacements.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'f1d336497a7f148352f4a9f62f7397c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The translation options.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '2c1446b491d2e21e3cf7f7676d628599' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'eb1336bc5688eb07eda22fac38dd99bb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new class instance.
   *
   * When possible, use the
   * \\Drupal\\Core\\StringTranslation\\StringTranslationTrait $this->t(). Otherwise
   * create a new \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object
   * directly.
   *
   * Calling the trait\'s t() method or instantiating a new TranslatableMarkup
   * object serves two purposes:
   * - At run-time it translates user-visible text into the appropriate
   *   language.
   * - Static analyzers detect calls to t() and new TranslatableMarkup, and add
   *   the first argument (the string to be translated) to the database of
   *   strings that need translation. These strings are expected to be in
   *   English, so the first argument should always be in English.
   * To allow the site to be localized, it is important that all human-readable
   * text that will be displayed on the site or sent to a user is made available
   * in one of the ways supported by the
   * @link https://www.drupal.org/node/322729 Localization API @endlink.
   * See the @link https://www.drupal.org/node/322729 Localization API @endlink
   * pages for more information, including recommendations on how to break up or
   * not break up strings for translation.
   *
   * @section sec_translating_vars Translating Variables
   * $string should always be an English literal string.
   *
   * $string should never contain a variable, such as:
   * @code
   * new TranslatableMarkup($text)
   * @endcode
   * There are several reasons for this:
   * - Using a variable for $string that is user input is a security risk.
   * - Using a variable for $string that has even guaranteed safe text (for
   *   example, user interface text provided literally in code), will not be
   *   picked up by the localization static text processor. (The parameter could
   *   be a variable if the entire string in $text has been passed into t() or
   *   new TranslatableMarkup() elsewhere as the first argument, but that
   *   strategy is not recommended.)
   *
   * It is especially important never to call new TranslatableMarkup($user_text)
   * or t($user_text) where $user_text is some text that a user entered -- doing
   * that can lead to cross-site scripting and other security problems. However,
   * you can use variable substitution in your string, to put variable text such
   * as user names or link URLs into translated text. Variable substitution
   * looks like this:
   * @code
   * new TranslatableMarkup("@name\'s blog", array(\'@name\' => $account->getDisplayName()));
   * @endcode
   * Basically, you can put placeholders like @name into your string, and the
   * method will substitute the sanitized values at translation time. (See the
   * Localization API pages referenced above and the documentation of
   * \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * for details about how to safely and correctly define variables in your
   * string.) Translators can then rearrange the string as necessary for the
   * language (e.g., in Spanish, it might be "blog de @name").
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $arguments
   *   (optional) An associative array of replacements to make after
   *   translation. Based on the first character of the key, the value is
   *   escaped and/or themed. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   details.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'langcode\' (defaults to the current language): A language code, to
   *     translate to a language other than what is used to display the page.
   *   - \'context\' (defaults to the empty context): The context the source
   *     string belongs to.
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $string_translation
   *   (optional) The string translation service.
   *
   * @throws \\InvalidArgumentException
   *   Exception thrown when $string is not a string.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * @see \\Drupal\\Core\\StringTranslation\\StringTranslationTrait::t()
   *
   * @ingroup sanitization
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'ab9e65e4b9611b08dd1f3c128e1f1608' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the untranslated string value stored in this translated string.
   *
   * @return string
   *   The string stored in this wrapper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => 'getUntranslatedString',
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
    '28cd5170aaff2b0734af9119df5d71fe' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a specific option from this translated string.
   *
   * @param string $name
   *   Option name.
   *
   * @return mixed
   *   The value of this option or empty string of option is not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => 'getOption',
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
    'fb0f6f8c93c3895eb7ac1a7337a203ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all options from this translated string.
   *
   * @return mixed[]
   *   The array of options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => 'getOptions',
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
    'bbf0563ef409f967cd3b58a466c094d1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all arguments from this translated string.
   *
   * @return mixed[]
   *   The array of arguments.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => 'getArguments',
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
    'a2fb9da425a0ee549e1a59f148091429' => 
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
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    'b3bec5417a05690a9c85058252718445' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Magic __sleep() method to avoid serializing the string translator.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
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
    '9757e6efdc9c057a0e2a47ebae9a01c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => 'getStringTranslation',
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
    '509251d91c23045b0157815ed256f52a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the string length.
   *
   * @return int
   *   The length of the string.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'tostringtrait' => 'Drupal\\Component\\Utility\\ToStringTrait',
        ),
         'className' => 'Drupal\\Core\\StringTranslation\\TranslatableMarkup',
         'functionName' => 'count',
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