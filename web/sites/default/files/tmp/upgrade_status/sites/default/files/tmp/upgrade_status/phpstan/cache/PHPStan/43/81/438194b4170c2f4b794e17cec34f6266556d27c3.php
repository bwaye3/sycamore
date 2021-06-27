<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/src/Repository/SubdivisionRepository.php-1624732871',
   'data' => 
  array (
    '5b50d079693356c76a86d0f381dc5a1b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides subdivisions.
 *
 * Subdivisions are stored on disk in JSON and cached inside Drupal.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Repository',
         'uses' => 
        array (
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'externalsubdivisionrepository' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\address\\Repository\\SubdivisionRepository',
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
    'c5e5d2ea57a12a5f88d151d2533b61a3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The event dispatcher.
   *
   * @var \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Repository',
         'uses' => 
        array (
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'externalsubdivisionrepository' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\address\\Repository\\SubdivisionRepository',
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
    '25bf0544d1b2b1987c46b7fe29a00849' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cache backend.
   *
   * @var \\Drupal\\Core\\Cache\\CacheBackendInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Repository',
         'uses' => 
        array (
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'externalsubdivisionrepository' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\address\\Repository\\SubdivisionRepository',
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
    'a6843256e44c62ac99222d989504de18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Creates a SubdivisionRepository instance.
   *
   * @param \\CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface $address_format_repository
   *   The address format repository.
   * @param \\Symfony\\Component\\EventDispatcher\\EventDispatcherInterface $event_dispatcher
   *   The event dispatcher.
   * @param \\Drupal\\Core\\Cache\\CacheBackendInterface $cache
   *   The cache backend.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Repository',
         'uses' => 
        array (
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'externalsubdivisionrepository' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\address\\Repository\\SubdivisionRepository',
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
    '8e8508b285f32eb3a22edd6ee1fe01d3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address\\Repository',
         'uses' => 
        array (
          'addressformatrepositoryinterface' => 'CommerceGuys\\Addressing\\AddressFormat\\AddressFormatRepositoryInterface',
          'externalsubdivisionrepository' => 'CommerceGuys\\Addressing\\Subdivision\\SubdivisionRepository',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'cachebackendinterface' => 'Drupal\\Core\\Cache\\CacheBackendInterface',
          'eventdispatcherinterface' => 'Symfony\\Component\\EventDispatcher\\EventDispatcherInterface',
        ),
         'className' => 'Drupal\\address\\Repository\\SubdivisionRepository',
         'functionName' => 'loadDefinitions',
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