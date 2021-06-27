<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityConstraintViolationListInterface.php-1624732867',
   'data' => 
  array (
    '178f248275c11cb7db3c707ae6c6eb5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for the result of entity validation.
 *
 * The Symfony violation list is extended with methods that allow filtering
 * violations by fields and field access. Forms leverage that to skip possibly
 * pre-existing violations that cannot be caused or fixed by the form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
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
    '81c0d64c4bb23ca1d8d52ab21860c119' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets violations flagged on entity level, not associated with any field.
   *
   * @return \\Drupal\\Core\\Entity\\EntityConstraintViolationListInterface
   *   A list of violations on the entity level.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
         'functionName' => 'getEntityViolations',
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
    '1d03d1907168cddc4cd0101aace8593a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the violations of the given field.
   *
   * @param string $field_name
   *   The name of the field to get violations for.
   *
   * @return \\Symfony\\Component\\Validator\\ConstraintViolationListInterface
   *   The violations of the given field.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
         'functionName' => 'getByField',
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
    'd7e314ebc446b05bff655bd8be2650d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the violations of the given fields.
   *
   * When violations should be displayed for a sub-set of visible fields only,
   * this method may be used to filter the set of visible violations first.
   *
   * @param string[] $field_names
   *   The names of the fields to get violations for.
   *
   * @return \\Drupal\\Core\\Entity\\EntityConstraintViolationListInterface
   *   A list of violations of the given fields.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
         'functionName' => 'getByFields',
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
    '2fac25b979750bf269577da34698c457' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters this violation list by the given fields.
   *
   * The returned object just has violations attached to the provided fields.
   *
   * When violations should be displayed for a sub-set of visible fields only,
   * this method may be used to filter the set of visible violations first.
   *
   * @param string[] $field_names
   *   The names of the fields to filter violations for.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
         'functionName' => 'filterByFields',
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
    '8c97a28afcd78abfc528542528a66de5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Filters this violation list to apply for accessible fields only.
   *
   * Violations for inaccessible fields are removed so the returned object just
   * has the remaining violations.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   (optional) The user for which to check access, or NULL to check access
   *   for the current user. Defaults to NULL.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
         'functionName' => 'filterByFieldAccess',
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
    '6f302411ec803850a95943af93248f0b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the names of all violated fields.
   *
   * @return string[]
   *   An array of field names.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
         'functionName' => 'getFieldNames',
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
    '1c43c4b6a4fe5be28a7d690d8c6b486f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity which has been validated.
   *
   * @return \\Drupal\\Core\\Entity\\FieldableEntityInterface
   *   The entity object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'constraintviolationlistinterface' => 'Symfony\\Component\\Validator\\ConstraintViolationListInterface',
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityConstraintViolationListInterface',
         'functionName' => 'getEntity',
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