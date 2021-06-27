<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/EventSubscriber/ProfileLabelSubscriber.php-1624732871',
   'data' => 
  array (
    'cc9127e7b345dd80287f637d6405fbdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'profiletype' => 'Drupal\\profile\\Entity\\ProfileType',
          'profilelabelevent' => 'Drupal\\profile\\Event\\ProfileLabelEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\ProfileLabelSubscriber',
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
    'd10f26b231f222e4be56676c6e1b53b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the customer profile label to the first address line.
   *
   * This behavior is restricted to customer profile types.
   *
   * @param \\Drupal\\profile\\Event\\ProfileLabelEvent $event
   *   The profile label event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'profiletype' => 'Drupal\\profile\\Entity\\ProfileType',
          'profilelabelevent' => 'Drupal\\profile\\Event\\ProfileLabelEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\ProfileLabelSubscriber',
         'functionName' => 'onLabel',
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
    '8651fac45208bfd4302d91b1ba8201d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\profile\\Entity\\ProfileInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\EventSubscriber',
         'uses' => 
        array (
          'profiletype' => 'Drupal\\profile\\Entity\\ProfileType',
          'profilelabelevent' => 'Drupal\\profile\\Event\\ProfileLabelEvent',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_order\\EventSubscriber\\ProfileLabelSubscriber',
         'functionName' => 'onLabel',
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