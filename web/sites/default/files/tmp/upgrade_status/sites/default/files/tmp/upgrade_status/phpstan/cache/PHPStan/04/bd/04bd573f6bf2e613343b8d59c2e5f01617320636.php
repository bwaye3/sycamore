<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/taxonomy/src/TermStorageInterface.php-1624732869',
   'data' => 
  array (
    'adf6c1d01daa664297efd7ccebf71bec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for taxonomy_term entity storage classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
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
    '035b940dcebad6c7dac5e14fa1aa80ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removed reference to terms from term_hierarchy.
   *
   * @param array $tids
   *   Array of terms that need to be removed from hierarchy.
   *
   * @todo Remove this method in Drupal 9.0.x. Now the parent references are
   *   automatically cleared when deleting a taxonomy term.
   *   https://www.drupal.org/node/2785693
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'deleteTermHierarchy',
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
    'e93a4352534a5f29271f24648bdba10e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates terms hierarchy information with the hierarchy trail of it.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $term
   *   Term entity that needs to be added to term hierarchy information.
   *
   * @todo remove this method Drupal 9.0.x. Now the parent references are
   *   automatically updates when when a taxonomy term is added/updated.
   *   https://www.drupal.org/node/2785693
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'updateTermHierarchy',
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
    '31656625dbc477f1042da69111d7872a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all parents of a given term ID.
   *
   * @param int $tid
   *   Term ID to retrieve parents for.
   *
   * @return \\Drupal\\taxonomy\\TermInterface[]
   *   An array of term objects which are the parents of the term $tid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'loadParents',
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
    '817b510245d84114ed837abef4a5934b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all ancestors of a given term ID.
   *
   * @param int $tid
   *   Term ID to retrieve ancestors for.
   *
   * @return \\Drupal\\taxonomy\\TermInterface[]
   *   An array of term objects which are the ancestors of the term $tid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'loadAllParents',
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
    '54987b81ac7f2fd92c95fc6a6baeb209' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all children of a term ID.
   *
   * @param int $tid
   *   Term ID to retrieve children for.
   * @param string $vid
   *   An optional vocabulary ID to restrict the child search.
   *
   * @return \\Drupal\\taxonomy\\TermInterface[]
   *   An array of term objects that are the children of the term $tid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'loadChildren',
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
    '7770c3069bb9aa4eec83985814b4285c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Finds all terms in a given vocabulary ID.
   *
   * @param string $vid
   *   Vocabulary ID to retrieve terms for.
   * @param int $parent
   *   The term ID under which to generate the tree. If 0, generate the tree
   *   for the entire vocabulary.
   * @param int $max_depth
   *   The number of levels of the tree to return. Leave NULL to return all
   *   levels.
   * @param bool $load_entities
   *   If TRUE, a full entity load will occur on the term objects. Otherwise
   *   they are partial objects queried directly from the {taxonomy_term_data}
   *   table to save execution time and memory consumption when listing large
   *   numbers of terms. Defaults to FALSE.
   *
   * @return object[]|\\Drupal\\taxonomy\\TermInterface[]
   *   An array of term objects that are the children of the vocabulary $vid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'loadTree',
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
    '6ecc8d3294ced94fc3bc78e5c50ad94c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Count the number of nodes in a given vocabulary ID.
   *
   * @param string $vid
   *   Vocabulary ID to retrieve terms for.
   *
   * @return int
   *   A count of the nodes in a given vocabulary ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'nodeCount',
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
    '33ee306a6465f3c9d9065c4f9c833f27' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reset the weights for a given vocabulary ID.
   *
   * @param string $vid
   *   Vocabulary ID to retrieve terms for.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'resetWeights',
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
    'e8a5535abc87c5f85db62de65021b19e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns all terms used to tag some given nodes.
   *
   * @param array $nids
   *   Node IDs to retrieve terms for.
   * @param array $vocabs
   *   (optional) A vocabularies array to restrict the term search. Defaults to
   *   empty array.
   * @param string $langcode
   *   (optional) A language code to restrict the term search. Defaults to NULL.
   *
   * @return array
   *   An array of nids and the term entities they were tagged with.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'getNodeTerms',
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
    '0d3f19b5ae8ff3aa5ef9db67dd26dca7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the hierarchy type for a specific vocabulary ID.
   *
   * @param string $vid
   *   Vocabulary ID to retrieve the hierarchy type for.
   *
   * @return int
   *   The vocabulary hierarchy.
   *   Possible values:
   *    - VocabularyInterface::HIERARCHY_DISABLED: No parents.
   *    - VocabularyInterface::HIERARCHY_SINGLE: Single parent.
   *    - VocabularyInterface::HIERARCHY_MULTIPLE: Multiple parents.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'getVocabularyHierarchyType',
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
    '59fe56f3bbb24ee166eedb8c94a06d0a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a list of term IDs with pending revisions.
   *
   * @return int[]
   *   An array of term IDs which have pending revisions, keyed by their
   *   revision IDs.
   *
   * @internal
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\taxonomy',
         'uses' => 
        array (
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'contententitystorageinterface' => 'Drupal\\Core\\Entity\\ContentEntityStorageInterface',
        ),
         'className' => 'Drupal\\taxonomy\\TermStorageInterface',
         'functionName' => 'getTermIdsWithPendingRevisions',
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