<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/address/tests/modules/address_test/src/EventSubscriber/GreatBritainEventSubscriber.php-1624732871',
   'data' => 
  array (
    'a4f8b4438a4508b3eddac5298f62cf49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Adds a county field and a predefined list of counties for Great Britain.
 *
 * Counties are not provided by the library because they\'re not used for
 * addressing. However, sites might want to add them for other purposes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address_test\\EventSubscriber',
         'uses' => 
        array (
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'addressformatevent' => 'Drupal\\address\\Event\\AddressFormatEvent',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\address_test\\EventSubscriber\\GreatBritainEventSubscriber',
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
    'ecd2356a53d31db2f63be8311f1d911b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address_test\\EventSubscriber',
         'uses' => 
        array (
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'addressformatevent' => 'Drupal\\address\\Event\\AddressFormatEvent',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\address_test\\EventSubscriber\\GreatBritainEventSubscriber',
         'functionName' => 'getSubscribedEvents',
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
    '5051bf58caa338cdac3d9faa3c46caff' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Alters the address format for Great Britain.
   *
   * @param \\Drupal\\address\\Event\\AddressFormatEvent $event
   *   The address format event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address_test\\EventSubscriber',
         'uses' => 
        array (
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'addressformatevent' => 'Drupal\\address\\Event\\AddressFormatEvent',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\address_test\\EventSubscriber\\GreatBritainEventSubscriber',
         'functionName' => 'onAddressFormat',
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
    '712ef9de813d32dcca1ef3c5f06ac080' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides the subdivisions for Great Britain.
   *
   * Note: Provides just the Welsh counties. A real subscriber would include
   * the full list, sourced from the CLDR "Territory Subdivisions" listing.
   *
   * @param \\Drupal\\address\\Event\\SubdivisionsEvent $event
   *   The subdivisions event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\address_test\\EventSubscriber',
         'uses' => 
        array (
          'administrativeareatype' => 'CommerceGuys\\Addressing\\AddressFormat\\AdministrativeAreaType',
          'addressevents' => 'Drupal\\address\\Event\\AddressEvents',
          'addressformatevent' => 'Drupal\\address\\Event\\AddressFormatEvent',
          'subdivisionsevent' => 'Drupal\\address\\Event\\SubdivisionsEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\address_test\\EventSubscriber\\GreatBritainEventSubscriber',
         'functionName' => 'onSubdivisions',
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