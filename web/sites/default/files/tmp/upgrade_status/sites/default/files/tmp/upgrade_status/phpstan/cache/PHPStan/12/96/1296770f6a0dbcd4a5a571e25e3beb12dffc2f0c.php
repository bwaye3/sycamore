<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/log/src/EventSubscriber/OrderMailEventSubscriber.php-1624732871',
   'data' => 
  array (
    'e32bd7d323fbc7b6c5169c2f522fe01e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Reacts to order emails sent via the Commerce mail handler.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'commerceevents' => 'Drupal\\commerce\\Event\\CommerceEvents',
          'postmailsendevent' => 'Drupal\\commerce\\Event\\PostMailSendEvent',
          'logtemplatemanagerinterface' => 'Drupal\\commerce_log\\LogTemplateManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\OrderMailEventSubscriber',
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
    'f3db08128944ba2cf455a60b48c40e60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'commerceevents' => 'Drupal\\commerce\\Event\\CommerceEvents',
          'postmailsendevent' => 'Drupal\\commerce\\Event\\PostMailSendEvent',
          'logtemplatemanagerinterface' => 'Drupal\\commerce_log\\LogTemplateManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\OrderMailEventSubscriber',
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
    'c34b739db7a7352b6eba7c838fe0975b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The log template manager.
   *
   * @var \\Drupal\\commerce_log\\LogTemplateManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'commerceevents' => 'Drupal\\commerce\\Event\\CommerceEvents',
          'postmailsendevent' => 'Drupal\\commerce\\Event\\PostMailSendEvent',
          'logtemplatemanagerinterface' => 'Drupal\\commerce_log\\LogTemplateManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\OrderMailEventSubscriber',
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
    '1817edc22ef8b7e60d9932783da76361' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new MailEventSubscriber object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   * @param \\Drupal\\commerce_log\\LogTemplateManagerInterface $log_template_manager
   *   The log template manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'commerceevents' => 'Drupal\\commerce\\Event\\CommerceEvents',
          'postmailsendevent' => 'Drupal\\commerce\\Event\\PostMailSendEvent',
          'logtemplatemanagerinterface' => 'Drupal\\commerce_log\\LogTemplateManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\OrderMailEventSubscriber',
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
    '931bf849c135122567ff5199f868649b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'commerceevents' => 'Drupal\\commerce\\Event\\CommerceEvents',
          'postmailsendevent' => 'Drupal\\commerce\\Event\\PostMailSendEvent',
          'logtemplatemanagerinterface' => 'Drupal\\commerce_log\\LogTemplateManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\OrderMailEventSubscriber',
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
    '5b74fd7b2910a4bec138f984917ecaaf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Reacts to an order email being sent.
   *
   * @param \\Drupal\\commerce\\Event\\PostMailSendEvent $event
   *   The "post mail send" event.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'commerceevents' => 'Drupal\\commerce\\Event\\CommerceEvents',
          'postmailsendevent' => 'Drupal\\commerce\\Event\\PostMailSendEvent',
          'logtemplatemanagerinterface' => 'Drupal\\commerce_log\\LogTemplateManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\OrderMailEventSubscriber',
         'functionName' => 'onMailSend',
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
    '187fca3ebad86146da566b1e45d1aec4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_log\\LogStorageInterface $log_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_log\\EventSubscriber',
         'uses' => 
        array (
          'commerceevents' => 'Drupal\\commerce\\Event\\CommerceEvents',
          'postmailsendevent' => 'Drupal\\commerce\\Event\\PostMailSendEvent',
          'logtemplatemanagerinterface' => 'Drupal\\commerce_log\\LogTemplateManagerInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\commerce_log\\EventSubscriber\\OrderMailEventSubscriber',
         'functionName' => 'onMailSend',
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