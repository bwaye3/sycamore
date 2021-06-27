<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Flood/FloodInterface.php-1624732867',
   'data' => 
  array (
    'fc136354e2736295d1ac8fddcfcd01a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for flood controllers.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Flood',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Flood\\FloodInterface',
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
    '7667eb6c8023ab1158a10eba4f1061f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Registers an event for the current visitor to the flood control mechanism.
   *
   * @param string $name
   *   The name of an event. To prevent unintended name clashes, it is recommended
   *   to use the module name first in the event name, optionally followed by
   *   a dot and the actual event name (e.g. "mymodule.my_event").
   * @param int $window
   *   (optional) Number of seconds before this event expires. Defaults to 3600
   *   (1 hour). Typically uses the same value as the isAllowed() $window
   *   parameter. Expired events are purged on cron run to prevent the flood
   *   table from growing indefinitely.
   * @param string $identifier
   *   (optional) Unique identifier of the current user. Defaults to the current
   *   user\'s IP address).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Flood',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Flood\\FloodInterface',
         'functionName' => 'register',
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
    '6763307921ed53c6fef362bf49e58ed2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Makes the flood control mechanism forget an event for the current visitor.
   *
   * @param string $name
   *   The name of an event.
   * @param string $identifier
   *   (optional) Unique identifier of the current user. Defaults to the current
   *   user\'s IP address).
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Flood',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Flood\\FloodInterface',
         'functionName' => 'clear',
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
    'ea4550fab8c6dc8a603ce5b8fd5a7be7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks whether a user is allowed to proceed with the specified event.
   *
   * Events can have thresholds saying that each user can only do that event
   * a certain number of times in a time window. This function verifies that
   * the current user has not exceeded this threshold.
   *
   * @param string $name
   *   The name of an event.
   * @param int $threshold
   *   The maximum number of times each user can do this event per time window.
   * @param int $window
   *   (optional) Number of seconds in the time window for this event (default is 3600
   *   seconds, or 1 hour).
   * @param string $identifier
   *   (optional) Unique identifier of the current user. Defaults to the current
   *   user\'s IP address).
   *
   * @return
   *   TRUE if the user is allowed to proceed. FALSE if they have exceeded the
   *   threshold and should not be allowed to proceed.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Flood',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Flood\\FloodInterface',
         'functionName' => 'isAllowed',
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
    '27582bc227c875acd75495781f658002' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Cleans up expired flood events. This method is called automatically on
   * cron run.
   *
   * @see system_cron()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Flood',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Flood\\FloodInterface',
         'functionName' => 'garbageCollection',
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