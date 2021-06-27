<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/MenuTreeParameters.php-1624732867',
   'data' => 
  array (
    '176d65d5c775c9dd76db82bf35b6cab5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a value object to model menu tree parameters.
 *
 * Menu tree parameters are used to determine the set of definitions to be
 * loaded from \\Drupal\\Core\\Menu\\MenuTreeStorageInterface. Hence they determine
 * the shape and content of the tree:
 * - Which parent IDs should be used to restrict the tree. Only links with
 *   a parent in the list will be included.
 * - Which menu links are omitted, depending on the minimum and maximum depth.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    'ad0c04d4c9adfd862a28df82c5f78ac2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A menu link plugin ID that should be used as the root.
   *
   * By default the root ID of empty string \'\' is used. However, when only the
   * descendants (subtree) of a certain menu link are needed, a custom root can
   * be specified.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    'aeaae4b4f97e96cd30ed6317ee5f7859' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The minimum depth of menu links in the resulting tree relative to the root.
   *
   * @var int|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    '129cebe5a8f6c568662b6f5b34bfe19e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The maximum depth of menu links in the resulting tree relative to the root.
   *
   * @var int|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    'f21e2262afa4cfbffb5182ac3851044b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * An array of parent link IDs.
   *
   * This restricts the tree to only menu links that are at the top level or
   * have a parent ID in this list. If empty, the whole menu tree is built.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    '88fbe530228650d05d533b94102e011d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The IDs from the currently active menu link to the root of the whole tree.
   *
   * This is an array of menu link plugin IDs, representing the trail from the
   * currently active menu link to the ("real") root of that menu link\'s menu.
   * This does not affect the way the tree is built. It is only used to set the
   * value of the inActiveTrail property for each tree element.
   *
   * @var string[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    '8bc2736151193273a20d4a5dacdbc75e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The conditions used to restrict which links are loaded.
   *
   * An associative array of custom query condition key/value pairs.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    'dd12f29f5b071b27a656d9bddd7c165c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a root for menu tree loading.
   *
   * @param string $root
   *   A menu link plugin ID, or empty string \'\' to use the root of the whole
   *   tree.
   *
   * @return $this
   *
   * @codeCoverageIgnore
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'setRoot',
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
    '301cd715d75c33df324c877964ad52c7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a minimum depth for menu tree loading.
   *
   * @param int $min_depth
   *   The (root-relative) minimum depth to apply.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'setMinDepth',
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
    '83b66aa19b666fbee33349a03f37cb82' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a maximum depth for menu tree loading.
   *
   * @param int $max_depth
   *   The (root-relative) maximum depth to apply.
   *
   * @return $this
   *
   * @codeCoverageIgnore
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'setMaxDepth',
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
    'fbe73029d5ce4acc773c649d92d2c47f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds parent menu links IDs to restrict the tree.
   *
   * @param string[] $parents
   *   An array containing parent IDs. If supplied, the tree is limited to
   *   links that have these parents.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'addExpandedParents',
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
    '8301b8da2784a668905a1e7b80ee60b0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the active trail IDs used to set the inActiveTrail property.
   *
   * @param string[] $active_trail
   *   An array containing the active trail: a list of menu link plugin IDs.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\Menu\\MenuActiveTrail::getActiveTrailIds()
   *
   * @codeCoverageIgnore
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'setActiveTrail',
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
    '31a29ef787b9752b75331ada57794af7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a custom query condition.
   *
   * @param string $definition_field
   *   Only conditions that are testing menu link definition fields are allowed.
   * @param mixed $value
   *   The value to test the link definition field against. In most cases, this
   *   is a scalar. For more complex options, it is an array. The meaning of
   *   each element in the array is dependent on the $operator.
   * @param string|null $operator
   *   (optional) The comparison operator, such as =, <, or >=. It also accepts
   *   more complex options such as IN, LIKE, or BETWEEN. If NULL, defaults to
   *   the = operator.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
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
    '25c0d2d8829516840bc36a89647f9035' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Excludes links that are not enabled.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'onlyEnabledLinks',
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
    '5c94133074c1c36830453ae0693c1dec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ensures only the top level of the tree is loaded.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'setTopLevelOnly',
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
    '9a42be83f508b74c3b77f4f7cd40b3fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Excludes the root menu link from the tree.
   *
   * Note that this is only necessary when you specified a custom root, because
   * the normal root ID is the empty string, \'\', which does not correspond to an
   * actual menu link. Hence when loading a menu link tree without specifying a
   * custom root the tree will start at the children even if this method has not
   * been called.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'excludeRoot',
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
    '675b9775109fa3c90401acd184477961' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'serialize',
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
    'dd4a8b88933f2721c1b948e5d8308011' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuTreeParameters',
         'functionName' => 'unserialize',
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