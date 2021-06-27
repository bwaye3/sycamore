<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/Query/ConditionInterface.php-1624732867',
   'data' => 
  array (
    'a5d9eb60649e3cde4c079cecd6904a82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the entity query condition interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
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
    'e943f3b6aca09bfc50570496fcfbbc2b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the current conjunction.
   *
   * @return string
   *   Can be AND or OR.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
         'functionName' => 'getConjunction',
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
    'cfa6bef12e4e317b00cdf8f8d4a9b209' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Implements \\Countable::count().
   *
   * Returns the size of this conditional. The size of the conditional is the
   * size of its conditional array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
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
    '9e6be066d64e7ad713a7cecea98abb3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a condition.
   *
   * @param string|\\Drupal\\Core\\Entity\\Query\\ConditionInterface $field
   * @param mixed $value
   * @param string $operator
   * @param string $langcode
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::condition()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
         'functionName' => 'condition',
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
    '71d5660ddd6e9d16b193fb164067676d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries for the existence of a field.
   *
   * @param string $field
   * @param string $langcode
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::exists()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
         'functionName' => 'exists',
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
    'dcc4f85a91a813f3b9fc91cb99f9a619' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Queries for the nonexistence of a field.
   *
   * @param string $field
   * @param string $langcode
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Entity\\Query\\QueryInterface::notExists()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
         'functionName' => 'notExists',
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
    '3f55feeed9910522c6c67957524d7d1f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a complete list of all conditions in this conditional clause.
   *
   * This method returns by reference. That allows alter hooks to access the
   * data structure directly and manipulate it before it gets compiled.
   *
   * @return array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
         'functionName' => 'conditions',
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
    '4098491e97775a49e1f5723f07a3c9d9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Compiles this conditional clause.
   *
   * @param $query
   *   The query object this conditional clause belongs to.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\Query\\ConditionInterface',
         'functionName' => 'compile',
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