<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Logger/LoggerChannelFactoryInterface.php-1624732867',
   'data' => 
  array (
    '725ac8fdd0cf9ec12e5b2767d1da1a2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Logger channel factory interface.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
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
    'b76048fc56eb4457d50cf6b8f14b9aaa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the registered logger for the requested channel.
   *
   * @return \\Drupal\\Core\\Logger\\LoggerChannelInterface
   *   The registered logger for this channel.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
         'functionName' => 'get',
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
    'f635942bc4ff65cab374f6f39e4d4099' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a logger to all the channels.
   *
   * @param \\Psr\\Log\\LoggerInterface $logger
   *   The PSR-3 logger to add.
   * @param int $priority
   *   The priority of the logger being added.
   *
   * @see \\Symfony\\Component\\HttpKernel\\DependencyInjection\\LoggerPass
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
        ),
         'className' => 'Drupal\\Core\\Logger\\LoggerChannelFactoryInterface',
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