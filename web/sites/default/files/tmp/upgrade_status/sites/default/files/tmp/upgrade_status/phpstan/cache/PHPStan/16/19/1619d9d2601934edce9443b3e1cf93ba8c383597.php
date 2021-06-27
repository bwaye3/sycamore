<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/promotion/src/EventSubscriber/FilterConditionsEventSubscriber.php-1624732871',
   'data' => 
  array (
    'fccbebcfe4f3e43f8fc59e49c8edb277' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\EventSubscriber',
         'uses' => 
        array (
          'filterconditionsevent' => 'Drupal\\commerce\\Event\\FilterConditionsEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\EventSubscriber\\FilterConditionsEventSubscriber',
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
    '450867c3abbb728cc02299888ba6e5a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Removes unneeded conditions.
   *
   * Promotions have store and order_types base fields that are used for
   * filtering, so there\'s no need to have conditions targeting the same data.
   *
   * @param \\Drupal\\commerce\\Event\\FilterConditionsEvent $event
   *   The event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_promotion\\EventSubscriber',
         'uses' => 
        array (
          'filterconditionsevent' => 'Drupal\\commerce\\Event\\FilterConditionsEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_promotion\\EventSubscriber\\FilterConditionsEventSubscriber',
         'functionName' => 'onFilterConditions',
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