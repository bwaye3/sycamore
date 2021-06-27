<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Database/Query/ExtendableInterface.php-1624732867',
   'data' => 
  array (
    'a34af81f93d47c1fbfa2345f6163eaa8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface for extendable query objects.
 *
 * "Extenders" follow the "Decorator" OOP design pattern.  That is, they wrap
 * and "decorate" another object. In our case, they implement the same
 * interface as select queries and wrap a select query, to which they delegate
 * almost all operations. Subclasses of this class may implement additional
 * methods or override existing methods as appropriate. Extenders may also wrap
 * other extender objects, allowing for arbitrarily complex "enhanced" queries.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
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
    '7790e3b07b7da51d9b23d9491ba604c0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Enhance this object by wrapping it in an extender object.
   *
   * @param $extender_name
   *   The fully-qualified name of the extender class, without the leading \'\\\'
   *   (for example, Drupal\\my_module\\myExtenderClass). The extender name will
   *   be checked against the current database connection to allow
   *   driver-specific subclasses as well, using the same logic as the query
   *   objects themselves.
   *
   * @return \\Drupal\\Core\\Database\\Query\\ExtendableInterface
   *   The extender object, which now contains a reference to this object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Database\\Query',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Database\\Query\\ExtendableInterface',
         'functionName' => 'extend',
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