<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Logger/LoggerChannelInterface.php-1624732867',
   'data' => 
  array (
    '5c0f130a7abb272cdaf9f0e5b084007f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Logger channel interface.
 *
 * This interface defines the full behavior of the central Drupal logger
 * facility. However, when writing code that does logging, use the generic
 * \\Psr\\Log\\LoggerInterface for typehinting instead (you shouldn\'t need the
 * methods here).
 *
 * To add a new logger to the system, implement \\Psr\\Log\\LoggerInterface and
 * add a service for that class to a services.yml file tagged with the \'logger\'
 * tag. The default logger channel implementation will call the log() method
 * of every logger service with some useful data set in the $context argument
 * of log(): request_uri, referer, ip, user, uid.
 *
 * SECURITY NOTE: the caller might also set a \'link\' in the $context array
 * which will be printed as-is by the dblog module under an "operations"
 * header. Usually this is a "view", "edit" or similar relevant link. Make sure
 * to use proper, secure link generation facilities; some are listed below.
 *
 * @see \\Drupal\\Core\\Logger\\RfcLoggerTrait
 * @see \\Psr\\Log\\LoggerInterface
 * @see \\Drupal\\Core\\Logger\\\\LoggerChannelFactoryInterface
 * @see \\Drupal\\Core\\Utility\\LinkGeneratorInterface
 * @see \\Drupal\\Core\\Link::fromTextAndUrl()
 * @see \\Drupal\\Core\\Entity\\EntityInterface::link()
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
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
    '005ffa52f2de6ea7cc0d0faf21d4086f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the request stack.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack|null $requestStack
   *   The current request object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
         'functionName' => 'setRequestStack',
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
    'a8bfc978a94a320b7ecad527322cdc71' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the current user.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface|null $current_user
   *   The current user object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
         'functionName' => 'setCurrentUser',
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
    'e41d1134cd2677baf661ee652db1ddf0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the loggers for this channel.
   *
   * @param array $loggers
   *   An array of arrays of \\Psr\\Log\\LoggerInterface keyed by priority.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
         'functionName' => 'setLoggers',
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
    '8ca1277ba9940d5515ec845d19212906' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a logger.
   *
   * @param \\Psr\\Log\\LoggerInterface $logger
   *   The PSR-3 logger to add.
   * @param int $priority
   *   The priority of the logger being added.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelInterface',
         'functionName' => 'addLogger',
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