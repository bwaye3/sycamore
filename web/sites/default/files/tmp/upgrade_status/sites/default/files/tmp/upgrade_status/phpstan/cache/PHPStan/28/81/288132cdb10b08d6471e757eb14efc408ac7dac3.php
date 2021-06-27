<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Component/Plugin/Context/ContextInterface.php-1624732867',
   'data' => 
  array (
    '49e2b5d0fe0171f50eb969e47b66e389' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides data and definitions for plugins during runtime and administration.
 *
 * Plugin contexts are satisfied by ContextInterface implementing objects.
 * These objects always contain a definition of what data they will provide
 * during runtime. During run time, ContextInterface implementing objects must
 * also provide the corresponding data value.
 *
 * @see \\Drupal\\Component\\Plugin\\Context\\ContextDefinitionInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
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
    '9284e8ec293db9bd7eec290963711e28' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the context value.
   *
   * @return mixed
   *   The currently set context value, or NULL if it is not set.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
         'functionName' => 'getContextValue',
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
    '0a9dcd602d8da354baea46f739ecd0f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns whether the context has a value.
   *
   * @return bool
   *   TRUE if the context has a value, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
         'functionName' => 'hasContextValue',
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
    '591996bbb25d5cc49e90cdb3610b35b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the provided definition that the context must conform to.
   *
   * @return \\Drupal\\Component\\Plugin\\Context\\ContextDefinitionInterface
   *   The defining characteristic representation of the context.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
         'functionName' => 'getContextDefinition',
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
    '127e45f10d6358a11346b76e73e31a3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of validation constraints.
   *
   * @return array
   *   Array of constraints, each being an instance of
   *   \\Symfony\\Component\\Validator\\Constraint.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
         'functionName' => 'getConstraints',
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
    '24c1b9fa9497822815369d7b2813b2d7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Validates the set context value.
   *
   * @return \\Symfony\\Component\\Validator\\ConstraintViolationListInterface
   *   A list of constraint violations. If the list is empty, validation
   *   succeeded.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Component\\Plugin\\Context',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Component\\Plugin\\Context\\ContextInterface',
         'functionName' => 'validate',
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