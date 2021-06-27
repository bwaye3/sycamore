<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/MenuLinkTreeElement.php-1624732867',
   'data' => 
  array (
    '216b12e85fc5d0c34310955e51458842' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a value object to model an element in a menu link tree.
 *
 * \\Drupal\\Core\\Menu\\MenuLinkTreeElement objects represent a menu link\'s data.
 * Objects of this class provide complimentary data: the placement in a tree.
 * Therefore, we can summarize this split as follows:
 * - Menu link objects contain all information about an individual menu link,
 *   plus what their parent is. But they don\'t know where exactly in a menu link
 *   tree they live.
 * - Instances of this class are complimentary to those objects, they know:
 *   - All additional metadata from {menu_tree}, which contains "materialized"
 *     metadata about a menu link tree, such as whether a link in the tree has
 *     visible children and the depth relative to the root.
 *   - Plus all additional metadata that\'s adjusted for the current tree query,
 *     such as whether the link is in the active trail, whether the link is
 *     accessible for the current user, and the link\'s children (which are only
 *     loaded if the link was marked as "expanded" by the query).
 *
 * @see \\Drupal\\Core\\Menu\\MenuTreeStorage::loadTreeData()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    'ecf83e290bdfbdcedc407a76db115bf2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The menu link for this element in a menu link tree.
   *
   * @var \\Drupal\\Core\\Menu\\MenuLinkInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    'e4769d48e76a8f598f69b34753f9a69a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The subtree of this element in the menu link tree (this link\'s children).
   *
   * (Children of a link are only loaded if a link is marked as "expanded" by
   * the query.)
   *
   * @var \\Drupal\\Core\\Menu\\MenuLinkTreeElement[]
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    '101528fed49683554642118e50a353ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The depth of this link relative to the root of the tree.
   *
   * @var int
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    'bb21b482cf334be6cb9b8d1a7a84495c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this link has any children at all.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    '33e8d16c54c1db20c31ce0b96b83fdf9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this link is in the active trail.
   *
   * @var bool
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    '556ed0661f3eddb85e7c76bc998c321f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Whether this link is accessible by the current user.
   *
   * If the value is NULL the access was not determined yet, if an access result
   * object, it was determined already.
   *
   * @var \\Drupal\\Core\\Access\\AccessResultInterface|null
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    '1eb33918bb27c3da8d9baf3d9ecf7359' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Additional options for this link.
   *
   * This is merged (\\Drupal\\Component\\Utility\\NestedArray::mergeDeep()) with
   * \\Drupal\\Core\\Menu\\MenuLinkInterface::getOptions(), to allow menu link tree
   * manipulators to add or override link options.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    '1660e126fe6269aba814599e5563674a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new \\Drupal\\Core\\Menu\\MenuLinkTreeElement.
   *
   * @param \\Drupal\\Core\\Menu\\MenuLinkInterface $link
   *   The menu link for this element in the menu link tree.
   * @param bool $has_children
   *   A flag as to whether this element has children even if they are not
   *   included in the tree (i.e. this may be TRUE even if $subtree is empty).
   * @param int $depth
   *   The depth of this element relative to the tree root.
   * @param bool $in_active_trail
   *   A flag as to whether this link was included in the list of active trail
   *   IDs used to build the tree.
   * @param \\Drupal\\Core\\Menu\\MenuLinkTreeElement[] $subtree
   *   The children of this element in the menu link tree.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
    '0a84bb2975d91259eb396c97ed7e60a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counts all menu links in the current subtree.
   *
   * @return int
   *   The number of menu links in this subtree (one plus the number of menu
   *   links in all descendants).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkTreeElement',
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
  ),
));