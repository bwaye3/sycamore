<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/entity/src/QueryAccess/ConditionGroup.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/RefinableCacheableDependencyTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Cache/CacheableDependencyTrait.php-1624732867',
   'data' => 
  array (
    '4b492a3671ce9d0f1372b63aed57c595' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Represents a group of query access conditions.
 *
 * Used by query access handlers for filtering lists of entities based on
 * granted permissions.
 *
 * Examples:
 * @code
 *   // Filter by node type and uid.
 *   $condition_group = new ConditionGroup();
 *   $condition_group->addCondition(\'type\', [\'article\', \'page\']);
 *   $condition_group->addCondition(\'uid\', \'1\');
 *
 *   // Filter by node type or status.
 *   $condition_group = new ConditionGroup(\'OR\');
 *   $condition_group->addCondition(\'type\', [\'article\', \'page\']);
 *   $condition_group->addCondition(\'status\', \'1\', \'<>\');
 *
 *   // Nested condition groups: node type AND (uid OR status).
 *   $condition_group = new ConditionGroup();
 *   $condition_group->addCondition(\'type\', [\'article\', \'page\']);
 *   $condition_group->addCondition((new ConditionGroup(\'OR\'))
 *     ->addCondition(\'uid\', 1)
 *     ->addCondition(\'status\', \'1\')
 *   );
 * @endcode
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '13526180052a1fea4719f8810356fa4c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for \\Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '5bdc0f48771ca29b6f9b0b9b31ea9c0d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Trait for \\Drupal\\Core\\Cache\\CacheableDependencyInterface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '8f200a544f07650e4e4e6689e9ded41d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache contexts.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    'd4d858b8d5efa0d81edb030e0c9fc059' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache tags.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '5e238315b98b8409f812bf22dcbc13c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cache max-age.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '59f0617548be5ab5372b594b8cfb7514' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets cacheability; useful for value object constructors.
   *
   * @param \\Drupal\\Core\\Cache\\CacheableDependencyInterface $cacheability
   *   The cacheability to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'setCacheability',
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
    'c68e576f2bc68dacd062e3b864d6ee83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'getCacheTags',
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
    '7a68558f06ee17d385d212a87fcaf5dd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'getCacheContexts',
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
    '03d0b245864bd6b384bef7c96cfd0750' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'getCacheMaxAge',
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
    '85395288cd263dd7ab4d73f2585fd582' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'addCacheableDependency',
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
    'd7682b8aa673f0d9bd921a50af4ad75b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'addCacheContexts',
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
    '9fcd956e9534bc46dfbc7a23721ac3e6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'addCacheTags',
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
    'eb3121cd096773bccbb8a9ea06d506b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Cache',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'mergeCacheMaxAge',
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
    'c22252014dc9c58edb480983f328cbb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The conjunction.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '959f7e0057488ba0bb14a74bcb063350' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The conditions.
   *
   * @var \\Drupal\\entity\\QueryAccess\\Condition[]|\\Drupal\\entity\\QueryAccess\\ConditionGroup[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '47b81450e80deee0b24ccdec9c27e133' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether the condition group is always FALSE.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '75a93e3e9ea51a4937efcd893dbb0fe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new ConditionGroup object.
   *
   * @param string $conjunction
   *   The conjunction.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    'c385b91677349172c81b55708dba02b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the conjunction.
   *
   * @return string
   *   The conjunction. Possible values: AND, OR.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    'efbfd9b5e49481177bad8bcd2fe742c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets all conditions and nested condition groups.
   *
   * @return \\Drupal\\entity\\QueryAccess\\Condition[]|\\Drupal\\entity\\QueryAccess\\ConditionGroup[]
   *   The conditions, where each one is either a Condition or a nested
   *   ConditionGroup. Returned by reference, to allow callers to replace
   *   or remove conditions.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'getConditions',
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
    '20e0294ef0d5420586ba137f52ca1ff1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a condition.
   *
   * @param string|\\Drupal\\entity\\QueryAccess\\ConditionGroup $field
   *   Either a condition group (for nested AND/OR conditions), or a
   *   field name with an optional column name. E.g: \'uid\', \'address.locality\'.
   * @param mixed $value
   *   The value.
   * @param string $operator
   *   The operator.
   *   Possible values: =, <>, <, <=, >, >=, BETWEEN, NOT BETWEEN,
   *                   IN, NOT IN, IS NULL, IS NOT NULL.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'addCondition',
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
    'c77545ab02c753acd29b180429351fe1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the condition group is always FALSE.
   *
   * Used when the user doesn\'t have access to any entities, to ensure that a
   * query returns no results.
   *
   * @return bool
   *   Whether the condition group is always FALSE.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'isAlwaysFalse',
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
    'a844eb35625af9ef6981f75f10ddb3b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether the condition group should always be FALSE.
   *
   * @param bool $always_false
   *   Whether the condition group should always be FALSE.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'alwaysFalse',
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
    '97fe77fd21e01b6b5d23764dcc56d436' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clones the contained conditions when the condition group is cloned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => '__clone',
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
    '4688cae67f579c585bd86e5581051a75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string representation of the condition group.
   *
   * @return string
   *   The string representation of the condition group.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    '8f9429b166f6b1a2553d7e79f258482d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
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
    'b7b3a0c9f1e65b90c66ad69c66ec4526' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'getCacheTags',
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
    '74ddedccb500d8840f85bcf3988dc5e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'getCacheContexts',
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
    '12b540f31b796e40e00726db4b7c35fa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\entity\\QueryAccess',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'refinablecacheabledependencyinterface' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyInterface',
          'refinablecacheabledependencytrait' => 'Drupal\\Core\\Cache\\RefinableCacheableDependencyTrait',
        ),
         'className' => 'Drupal\\entity\\QueryAccess\\ConditionGroup',
         'functionName' => 'getCacheMaxAge',
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