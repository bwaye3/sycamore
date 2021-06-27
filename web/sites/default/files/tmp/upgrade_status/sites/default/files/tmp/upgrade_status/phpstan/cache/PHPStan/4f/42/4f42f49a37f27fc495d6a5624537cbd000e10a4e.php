<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/vendor/symfony/validator/Context/ExecutionContextInterface.php-1590864218',
   'data' => 
  array (
    'd21eaaa9157cd5141c2a141a56f5ab5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The context of a validation run.
 *
 * The context collects all violations generated during the validation. By
 * default, validators execute all validations in a new context:
 *
 *     $violations = $validator->validate($object);
 *
 * When you make another call to the validator, while the validation is in
 * progress, the violations will be isolated from each other:
 *
 *     public function validate($value, Constraint $constraint)
 *     {
 *         $validator = $this->context->getValidator();
 *
 *         // The violations are not added to $this->context
 *         $violations = $validator->validate($value);
 *     }
 *
 * However, if you want to add the violations to the current context, use the
 * {@link ValidatorInterface::inContext()} method:
 *
 *     public function validate($value, Constraint $constraint)
 *     {
 *         $validator = $this->context->getValidator();
 *
 *         // The violations are added to $this->context
 *         $validator
 *             ->inContext($this->context)
 *             ->validate($value)
 *         ;
 *     }
 *
 * Additionally, the context provides information about the current state of
 * the validator, such as the currently validated class, the name of the
 * currently validated property and more. These values change over time, so you
 * cannot store a context and expect that the methods still return the same
 * results later on.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
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
    'ccabc1b0e20eef0ff89f79b759da73e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds a violation at the current node of the validation graph.
     *
     * @param string|\\Stringable $message The error message as a string or a stringable object
     * @param array              $params  The parameters substituted in the error message
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
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
    'cf0928a086c27498b90037ebea81147a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a builder for adding a violation with extended information.
     *
     * Call {@link ConstraintViolationBuilderInterface::addViolation()} to
     * add the violation when you\'re done with the configuration:
     *
     *     $context->buildViolation(\'Please enter a number between %min% and %max%.\')
     *         ->setParameter(\'%min%\', 3)
     *         ->setParameter(\'%max%\', 10)
     *         ->setTranslationDomain(\'number_validation\')
     *         ->addViolation();
     *
     * @param string|\\Stringable $message    The error message as a string or a stringable object
     * @param array              $parameters The parameters substituted in the error message
     *
     * @return ConstraintViolationBuilderInterface The violation builder
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'buildViolation',
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
    '8427fd35e8b30c04c5cfeb6ec69a1d24' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the validator.
     *
     * Useful if you want to validate additional constraints:
     *
     *     public function validate($value, Constraint $constraint)
     *     {
     *         $validator = $this->context->getValidator();
     *
     *         $violations = $validator->validate($value, new Length([\'min\' => 3]));
     *
     *         if (count($violations) > 0) {
     *             // ...
     *         }
     *     }
     *
     * @return ValidatorInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getValidator',
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
    '6214b5c03da24119d3c96cbc7ee84057' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the currently validated object.
     *
     * If the validator is currently validating a class constraint, the
     * object of that class is returned. If it is validating a property or
     * getter constraint, the object that the property/getter belongs to is
     * returned.
     *
     * In other cases, null is returned.
     *
     * @return object|null The currently validated object or null
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getObject',
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
    '3f1378146fd83a238bcae38ed2f42884' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the currently validated value.
     *
     * @param mixed                  $value        The validated value
     * @param object|null            $object       The currently validated object
     * @param MetadataInterface|null $metadata     The validation metadata
     * @param string                 $propertyPath The property path to the current value
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'setNode',
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
    '62067c3dc30a8f9b989ffab795d51cdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the currently validated group.
     *
     * @param string|null $group The validated group
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'setGroup',
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
    '2068f070861e05cf2e1096cd758ea8b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the currently validated constraint.
     *
     * @param Constraint $constraint The validated constraint
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'setConstraint',
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
    '235b4086c5caf54b711f50215df61334' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Marks an object as validated in a specific validation group.
     *
     * @param string $cacheKey  The hash of the object
     * @param string $groupHash The group\'s name or hash, if it is group
     *                          sequence
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'markGroupAsValidated',
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
    '1ab647c247fb0d3a62d391d0cdfef91d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether an object was validated in a specific validation group.
     *
     * @param string $cacheKey  The hash of the object
     * @param string $groupHash The group\'s name or hash, if it is group
     *                          sequence
     *
     * @return bool Whether the object was already validated for that
     *              group
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'isGroupValidated',
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
    '9a6eec81942fe782e8e24bc689f91b80' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Marks a constraint as validated for an object.
     *
     * @param string $cacheKey       The hash of the object
     * @param string $constraintHash The hash of the constraint
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'markConstraintAsValidated',
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
    'd23935adc41458ec2e2a54e8969b65f8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether a constraint was validated for an object.
     *
     * @param string $cacheKey       The hash of the object
     * @param string $constraintHash The hash of the constraint
     *
     * @return bool Whether the constraint was already validated
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'isConstraintValidated',
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
    '7fb03e9f6a78f3b9c5dbf2e553a7f874' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Marks that an object was initialized.
     *
     * @param string $cacheKey The hash of the object
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     *
     * @see ObjectInitializerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'markObjectAsInitialized',
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
    'b920d2bbb955ae8e50eb059f89b9f202' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns whether an object was initialized.
     *
     * @param string $cacheKey The hash of the object
     *
     * @return bool Whether the object was already initialized
     *
     * @internal Used by the validator engine. Should not be called by user
     *           code.
     *
     * @see ObjectInitializerInterface
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'isObjectInitialized',
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
    '6ccc57be405f3903a62ea0d60f5b05bf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the violations generated by the validator so far.
     *
     * @return ConstraintViolationListInterface The constraint violation list
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getViolations',
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
    '6d9bd9e50d6201cfa5140533afd19f05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value at which validation was started in the object graph.
     *
     * The validator, when given an object, traverses the properties and
     * related objects and their properties. The root of the validation is the
     * object from which the traversal started.
     *
     * The current value is returned by {@link getValue}.
     *
     * @return mixed The root value of the validation
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
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
    '67f0b22615ff6187fe24d43854d6885b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the value that the validator is currently validating.
     *
     * If you want to retrieve the object that was originally passed to the
     * validator, use {@link getRoot}.
     *
     * @return mixed The currently validated value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getValue',
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
    'acd3cd2524aceae5308bd5c2556e263a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the metadata for the currently validated value.
     *
     * With the core implementation, this method returns a
     * {@link Mapping\\ClassMetadataInterface} instance if the current value is an object,
     * a {@link Mapping\\PropertyMetadata} instance if the current value is
     * the value of a property and a {@link Mapping\\GetterMetadata} instance if
     * the validated value is the result of a getter method.
     *
     * If the validated value is neither of these, for example if the validator
     * has been called with a plain value and constraint, this method returns
     * null.
     *
     * @return MetadataInterface|null the metadata of the currently validated
     *                                value
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getMetadata',
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
    '042801601abc8022456cba11d6fc2405' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the validation group that is currently being validated.
     *
     * @return string|null The current validation group
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getGroup',
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
    '124e65ac3ae67e5642ac6ef395c5e7a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the class name of the current node.
     *
     * If the metadata of the current node does not implement
     * {@link Mapping\\ClassMetadataInterface} or if no metadata is available for the
     * current node, this method returns null.
     *
     * @return string|null The class name or null, if no class name could be found
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getClassName',
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
    '89dd573b33b08775a3cbf94ac785ee4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the property name of the current node.
     *
     * If the metadata of the current node does not implement
     * {@link PropertyMetadataInterface} or if no metadata is available for the
     * current node, this method returns null.
     *
     * @return string|null The property name or null, if no property name could be found
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
         'functionName' => 'getPropertyName',
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
    'd1cbe4d9d2572e58562d4dacab4c8da2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the property path to the value that the validator is currently
     * validating.
     *
     * For example, take the following object graph:
     *
     * <pre>
     * (Person)---($address: Address)---($street: string)
     * </pre>
     *
     * When the <tt>Person</tt> instance is passed to the validator, the
     * property path is initially empty. When the <tt>$address</tt> property
     * of that person is validated, the property path is "address". When
     * the <tt>$street</tt> property of the related <tt>Address</tt> instance
     * is validated, the property path is "address.street".
     *
     * Properties of objects are prefixed with a dot in the property path.
     * Indices of arrays or objects implementing the {@link \\ArrayAccess}
     * interface are enclosed in brackets. For example, if the property in
     * the previous example is <tt>$addresses</tt> and contains an array
     * of <tt>Address</tt> instance, the property path generated for the
     * <tt>$street</tt> property of one of these addresses is for example
     * "addresses[0].street".
     *
     * @param string $subPath Optional. The suffix appended to the current
     *                        property path.
     *
     * @return string The current property path. The result may be an empty
     *                string if the validator is currently validating the
     *                root value of the validation graph.
     */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Validator\\Context',
         'uses' => 
        array (
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
          'mapping' => 'Symfony\\Component\\Validator\\Mapping',
          'metadatainterface' => 'Symfony\\Component\\Validator\\Mapping\\MetadataInterface',
          'validatorinterface' => 'Symfony\\Component\\Validator\\Validator\\ValidatorInterface',
          'constraintviolationbuilderinterface' => 'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface',
        ),
         'className' => 'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface',
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
  ),
));