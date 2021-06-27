<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/console/Output/OutputInterface.php-1590865085',
   'data' => 
  array (
    'f27f6a6d218ec32f7e8b542b51a67965' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * OutputInterface is the interface implemented by all Output classes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
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
    '831fa22e08cf2c7415114ba3f504e164' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Writes a message to the output.
     *
     * @param string|array $messages The message as an array of strings or a single string
     * @param bool         $newline  Whether to add a newline
     * @param int          $options  A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'write',
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
    '1d0bb9b8d7ea73e6994f747650ea13ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Writes a message to the output and adds a newline at the end.
     *
     * @param string|array $messages The message as an array of strings or a single string
     * @param int          $options  A bitmask of options (one of the OUTPUT or VERBOSITY constants), 0 is considered the same as self::OUTPUT_NORMAL | self::VERBOSITY_NORMAL
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'writeln',
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
    '490bc7ee4f10f3d2e2c5ee541cf56d17' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the verbosity of the output.
     *
     * @param int $level The level of verbosity (one of the VERBOSITY constants)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'setVerbosity',
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
    '4ac9c60aa9d2176dfd840072d62842e0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the current verbosity of the output.
     *
     * @return int The current level of verbosity (one of the VERBOSITY constants)
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'getVerbosity',
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
    '156b66c6025a9014288d27c6b37799fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether verbosity is quiet (-q).
     *
     * @return bool true if verbosity is set to VERBOSITY_QUIET, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'isQuiet',
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
    'd2271b275b3b977d9944f59d6f290461' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether verbosity is verbose (-v).
     *
     * @return bool true if verbosity is set to VERBOSITY_VERBOSE, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'isVerbose',
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
    'c027bf07b721e28641a5e4a84de360f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether verbosity is very verbose (-vv).
     *
     * @return bool true if verbosity is set to VERBOSITY_VERY_VERBOSE, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'isVeryVerbose',
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
    '0e27d1a5b2a0e137fc2c3f0b7449fbcf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether verbosity is debug (-vvv).
     *
     * @return bool true if verbosity is set to VERBOSITY_DEBUG, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'isDebug',
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
    '4781db5631ba71ef0e65b2dc58a239df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the decorated flag.
     *
     * @param bool $decorated Whether to decorate the messages
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'setDecorated',
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
    'b4289a4ea469c9e221bf4019f04f8457' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the decorated flag.
     *
     * @return bool true if the output will decorate messages, false otherwise
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'isDecorated',
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
    'aedbaf39de4bbcfc36e9f3c605ea021c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns current output formatter instance.
     *
     * @return OutputFormatterInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Console\\Output',
         'uses' => 
        array (
          'outputformatterinterface' => 'Symfony\\Component\\Console\\Formatter\\OutputFormatterInterface',
        ),
         'className' => 'Symfony\\Component\\Console\\Output\\OutputInterface',
         'functionName' => 'getFormatter',
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