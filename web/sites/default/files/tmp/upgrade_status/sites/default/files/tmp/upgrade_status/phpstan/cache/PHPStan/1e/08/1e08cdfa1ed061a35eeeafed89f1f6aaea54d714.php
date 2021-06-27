<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Queue/SuspendQueueException.php-1624732867',
   'data' => 
  array (
    'b79decfe0f082f1e5e352beb5e2bcc07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Exception class to throw to indicate that a cron queue should be skipped.
 *
 * An implementation of \\Drupal\\Core\\Queue\\QueueWorkerInterface::processItem()
 * throws this class of exception to indicate that processing of the whole queue
 * should be skipped. This should be thrown rather than a normal Exception if
 * the problem encountered by the queue worker is such that it can be deduced
 * that workers of subsequent items would encounter it too. For example, if a
 * remote site that the queue worker depends on appears to be inaccessible.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Queue',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Queue\\SuspendQueueException',
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
  ),
));