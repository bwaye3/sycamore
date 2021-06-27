<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/better_exposed_filters/tests/modules/bef_test/bef_test.install-1624732871',
   'data' => 
  array (
    'd60f9790fb83244629737e7806ccd00a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds terms to the hierarchical "location" vocabulary.
 *
 * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
 *   Thrown if the entity type doesn\'t exist.
 * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
 *   Thrown if the storage handler couldn\'t be loaded.
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   In case of failures an exception is thrown.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => 'bef_test_install',
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
    '86c3247f66d30ac489bf0cc23250e68e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds a new term to the bef_test-location vocabulary.
 *
 * If a TID is specified in $parent, the new term is added as a child of that
 * term.
 *
 * @param string $name
 *   The name of the new term.
 * @param int $parent
 *   The (optional) TID of the parent term.
 *
 * @return int
 *   TID of the newly created term.
 *
 * @throws \\Drupal\\Component\\Plugin\\Exception\\PluginNotFoundException
 *   Thrown if the entity type doesn\'t exist.
 * @throws \\Drupal\\Component\\Plugin\\Exception\\InvalidPluginDefinitionException
 *   Thrown if the storage handler couldn\'t be loaded.
 * @throws \\Drupal\\Core\\Entity\\EntityStorageException
 *   In case of failures an exception is thrown.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
         'functionName' => '_bef_test_add_term',
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