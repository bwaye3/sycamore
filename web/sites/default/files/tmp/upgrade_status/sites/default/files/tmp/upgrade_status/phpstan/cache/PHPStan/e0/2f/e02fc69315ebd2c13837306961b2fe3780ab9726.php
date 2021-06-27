<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Menu/MenuLinkManagerInterface.php-1624732867',
   'data' => 
  array (
    '6ff694fa1ff6314036d0c425f370fab7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for managing menu links and storing their definitions.
 *
 * Menu link managers support both automatic plugin definition discovery and
 * manually maintaining plugin definitions.
 *
 * MenuLinkManagerInterface::updateDefinition() can be used to update a single
 * menu link\'s definition and pass this onto the menu storage without requiring
 * a full MenuLinkManagerInterface::rebuild().
 *
 * Implementations that do not use automatic discovery should call
 * MenuLinkManagerInterface::addDefinition() or
 * MenuLinkManagerInterface::removeDefinition() when they add or remove links,
 * and MenuLinkManagerInterface::updateDefinition() to update links they have
 * already defined.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
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
    'a1ff03028a9e724358ea5cb7a6923542' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Triggers discovery, save, and cleanup of discovered links.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'rebuild',
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
    '3b0d2ca43e49f566e9ffd81134c5aa96' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Deletes all links having a certain menu name.
   *
   * If a link is not deletable but is resettable, the link will be reset to have
   * its original menu name, under the assumption that the original menu is not
   * the one we are deleting it from. Note that when resetting, if the original
   * menu name is the same as the menu name passed to this method, the link will
   * not be moved or deleted.
   *
   * @param string $menu_name
   *   The name of the menu whose links will be deleted or reset.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'deleteLinksInMenu',
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
    '68a16d3ec732a6d689867bd0220cccd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes a single link definition from the menu tree storage.
   *
   * This is used for plugins not found through discovery to remove definitions.
   *
   * @param string $id
   *   The menu link plugin ID.
   * @param bool $persist
   *   If TRUE, this method will attempt to persist the deletion from any
   *   external storage by invoking MenuLinkInterface::deleteLink() on the
   *   plugin that is being deleted.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   Thrown if the $id is not a valid, existing, plugin ID or if the link
   *   cannot be deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'removeDefinition',
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
    'da3b3889842e16cf0de81def0f24bd9d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads multiple plugin instances based on route.
   *
   * @param string $route_name
   *   The route name.
   * @param array $route_parameters
   *   (optional) The route parameters. Defaults to an empty array.
   * @param string $menu_name
   *   (optional) Restricts the found links to just those in the named menu.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkInterface[]
   *   An array of instances keyed by plugin ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'loadLinksByRoute',
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
    'a0ec33e6ba159571e27b159a771f9643' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a new menu link definition to the menu tree storage.
   *
   * Use this function when you know there is no entry in the tree. This is
   * used for plugins not found through discovery to add new definitions.
   *
   * @param string $id
   *   The plugin ID for the new menu link definition that is being added.
   * @param array $definition
   *   The values of the link definition.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkInterface
   *   A plugin instance created using the newly added definition.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   Thrown when the $id is not valid or is an already existing plugin ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'addDefinition',
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
    'e8a4824658b7776d24aef048a71799e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Updates the values for a menu link definition in the menu tree storage.
   *
   * This will update the definition for a discovered menu link without the
   * need for a full rebuild. It is also used for plugins not found through
   * discovery to update definitions.
   *
   * @param string $id
   *   The menu link plugin ID.
   * @param array $new_definition_values
   *   The new values for the link definition. This will usually be just a
   *   subset of the plugin definition.
   * @param bool $persist
   *   TRUE to also have the link instance itself persist the changed values to
   *   any additional storage by invoking MenuLinkInterface::updateDefinition()
   *   on the plugin that is being updated.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkInterface
   *   A plugin instance created using the updated definition.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   Thrown if the $id is not a valid, existing, plugin ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'updateDefinition',
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
    'f1747fa8387ef4a607869809a0669284' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets the values for a menu link based on the values found by discovery.
   *
   * @param string $id
   *   The menu link plugin ID.
   *
   * @return \\Drupal\\Core\\Menu\\MenuLinkInterface
   *   The menu link instance after being reset.
   *
   * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginException
   *   Thrown if the $id is not a valid, existing, plugin ID or if the link
   *   cannot be reset.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'resetLink',
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
    '3cd2390c624b73b36e2e22fd4ffa28ea' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Counts the total number of menu links.
   *
   * @param string $menu_name
   *   (optional) The menu name to count by. Defaults to all menus.
   *
   * @return int
   *   The number of menu links in the named menu, or in all menus if the
   *   menu name is NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'countMenuLinks',
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
    '530d72a1e598d959184008114f482f5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all parent link IDs of a given menu link.
   *
   * This method is very similar to getActiveTrailIds() but allows the link to
   * be specified rather than being discovered based on the menu name and
   * request. This method is mostly useful for testing.
   *
   * @param string $id
   *   The menu link plugin ID.
   *
   * @return array
   *   An ordered array of IDs representing the path to the root of the tree.
   *   The first element of the array will be equal to $id, unless $id is not
   *   valid, in which case the return value will be NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'getParentIds',
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
    '9d195db72a79940ce3e7407a937c3503' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Loads all child link IDs of a given menu link, regardless of visibility.
   *
   * This method is mostly useful for testing.
   *
   * @param string $id
   *   The menu link plugin ID.
   *
   * @return array
   *   An unordered array of IDs representing the IDs of all children, or NULL
   *   if the ID is invalid.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'getChildIds',
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
    '2248d31dab44f15f152caeb937b7f56c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Determines if any links use a given menu name.
   *
   * @param string $menu_name
   *   The menu name.
   *
   * @return bool
   *   TRUE if any links are present in the named menu, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'menuNameInUse',
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
    '8626acf68e0649ded9f85901568ead7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Resets any local definition cache. Used for testing.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Menu',
         'uses' => 
        array (
          'pluginmanagerinterface' => 'Drupal\\Component\\Plugin\\PluginManagerInterface',
        ),
         'className' => 'Drupal\\Core\\Menu\\MenuLinkManagerInterface',
         'functionName' => 'resetDefinitions',
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