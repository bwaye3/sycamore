<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/validator/ConstraintViolationInterface.php-1590864218',
   'data' => 
  array (
    'de74555a090093a642bf5b4abce8cc36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A violation of a constraint that happened during validation.
 *
 * For each constraint that fails during validation one or more violations are
 * created. The violations store the violation message, the path to the failing
 * element in the validation graph and the root element that was originally
 * passed to the validator. For example, take the following graph:
 *
 *     (Person)---(firstName: string)
 *          \\
 *       (address: Address)---(street: string)
 *
 * If the <tt>Person</tt> object is validated and validation fails for the
 * "firstName" property, the generated violation has the <tt>Person</tt>
 * instance as root and the property path "firstName". If validation fails
 * for the "street" property of the related <tt>Address</tt> instance, the root
 * element is still the person, but the property path is "address.street".
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
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
    '2c316b8c8ac3b5f9eefe9de5762a43b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the violation message.
     *
     * @return string|\\Stringable The violation message as a string or a stringable object
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getMessage',
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
    '9a8d0f184aa3e9b49ed9402e35e89e05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the raw violation message.
     *
     * The raw violation message contains placeholders for the parameters
     * returned by {@link getParameters}. Typically you\'ll pass the
     * message template and parameters to a translation engine.
     *
     * @return string The raw violation message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getMessageTemplate',
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
    'a26b9b70f5d5493dabbb745102dc5e7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the parameters to be inserted into the raw violation message.
     *
     * @return array a possibly empty list of parameters indexed by the names
     *               that appear in the message template
     *
     * @see getMessageTemplate()
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getParameters',
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
    'e16a205cd7655a1cefbbf6b8f70b738a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a number for pluralizing the violation message.
     *
     * For example, the message template could have different translation based
     * on a parameter "choices":
     *
     * <ul>
     * <li>Please select exactly one entry. (choices=1)</li>
     * <li>Please select two entries. (choices=2)</li>
     * </ul>
     *
     * This method returns the value of the parameter for choosing the right
     * pluralization form (in this case "choices").
     *
     * @return int|null The number to use to pluralize of the message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getPlural',
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
    'c1179f6a90fc088c67033059b357fb8a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the root element of the validation.
     *
     * @return mixed The value that was passed originally to the validator when
     *               the validation was started. Because the validator traverses
     *               the object graph, the value at which the violation occurs
     *               is not necessarily the value that was originally validated.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getRoot',
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
    '4cf92b87ef8aff35b21cd12129f1be6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the property path from the root element to the violation.
     *
     * @return string The property path indicates how the validator reached
     *                the invalid value from the root element. If the root
     *                element is a <tt>Person</tt> instance with a property
     *                "address" that contains an <tt>Address</tt> instance
     *                with an invalid property "street", the generated property
     *                path is "address.street". Property access is denoted by
     *                dots, while array access is denoted by square brackets,
     *                for example "addresses[1].street".
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getPropertyPath',
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
    '34a470b6c5723c840cced5f25dff72da' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value that caused the violation.
     *
     * @return mixed the invalid value that caused the validated constraint to
     *               fail
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getInvalidValue',
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
    'ffb64c8d5f3c108bff127b745ede3d7a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a machine-digestible error code for the violation.
     *
     * @return string|null The error code
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Validator\\ConstraintViolationInterface',
         'functionName' => 'getCode',
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