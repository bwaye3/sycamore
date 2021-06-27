<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/validator/Violation/ConstraintViolationBuilderInterface.php-1590864218',
   'data' => 
  array (
    '34bde8c92562bc8d8ad916d14ac897f7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builds {@link \\Symfony\\Component\\Validator\\ConstraintViolationInterface}
 * objects.
 *
 * Use the various methods on this interface to configure the built violation.
 * Finally, call {@link addViolation()} to add the violation to the current
 * execution context.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
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
    'f38470c03119d002cebcfb19019d9df0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Stores the property path at which the violation should be generated.
     *
     * The passed path will be appended to the current property path of the
     * execution context.
     *
     * @param string $path The property path
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'atPath',
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
    'aa0e59869d999b16201d4a86c104733b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets a parameter to be inserted into the violation message.
     *
     * @param string $key   The name of the parameter
     * @param string $value The value to be inserted in the parameter\'s place
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'setParameter',
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
    'dc5566b69a470d9d71b8b6b3236e1e8e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets all parameters to be inserted into the violation message.
     *
     * @param array $parameters An array with the parameter names as keys and
     *                          the values to be inserted in their place as
     *                          values
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'setParameters',
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
    '83aa66c5480acf959bb1ae930fd0c284' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the translation domain which should be used for translating the
     * violation message.
     *
     * @param string $translationDomain The translation domain
     *
     * @return $this
     *
     * @see \\Symfony\\Component\\Translation\\TranslatorInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'setTranslationDomain',
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
    '608ec91d9244408b3546ae9ade0a6c63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the invalid value that caused this violation.
     *
     * @param mixed $invalidValue The invalid value
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'setInvalidValue',
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
    'e505d02102f7171b1c4ed387bb10894a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the number which determines how the plural form of the violation
     * message is chosen when it is translated.
     *
     * @param int $number The number for determining the plural form
     *
     * @return $this
     *
     * @see \\Symfony\\Component\\Translation\\TranslatorInterface::transChoice()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'setPlural',
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
    '2bb1cc28016c9cf1f9a78035c7b17b49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the violation code.
     *
     * @param string|null $code The violation code
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'setCode',
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
    'adbb4816b6adfde7a03f39f0c8f59c0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the cause of the violation.
     *
     * @param mixed $cause The cause of the violation
     *
     * @return $this
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'setCause',
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
    'be3c198526b2716900b6c139968b2707' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds the violation to the current execution context.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Violation',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
         'functionName' => 'addViolation',
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