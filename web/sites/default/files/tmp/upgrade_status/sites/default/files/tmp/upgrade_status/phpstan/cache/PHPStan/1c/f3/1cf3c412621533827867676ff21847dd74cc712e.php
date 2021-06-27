<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/src/EventSubscriber/CaptchaCachedSettingsSubscriber.php-1624732871',
   'data' => 
  array (
    'bb0a9e8632a61101a8ba74c39f9468ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A subscriber clearing the cached definitions when saving captcha settings.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\EventSubscriber',
         'uses' => 
        array (
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\captcha\\EventSubscriber\\CaptchaCachedSettingsSubscriber',
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
    '4f98086bf57fe648d53dfd64aca34679' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The Element info.
   *
   * @var \\Drupal\\Core\\Render\\ElementInfoManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\EventSubscriber',
         'uses' => 
        array (
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\captcha\\EventSubscriber\\CaptchaCachedSettingsSubscriber',
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
    'd3cfffdd4a837a84476698e872df80d4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * CaptchaCachedSettingsSubscriber constructor.
   *
   * @param \\Drupal\\Core\\Render\\ElementInfoManagerInterface $elementInfo
   *   Constructor.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\EventSubscriber',
         'uses' => 
        array (
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\captcha\\EventSubscriber\\CaptchaCachedSettingsSubscriber',
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
    '6bb2e9473acf152b3a35027873ac4421' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Clearing the cached definitions whenever the settings are modified.
   *
   * @param \\Drupal\\Core\\Config\\ConfigCrudEvent $event
   *   The Event to process.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\EventSubscriber',
         'uses' => 
        array (
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\captcha\\EventSubscriber\\CaptchaCachedSettingsSubscriber',
         'functionName' => 'onSave',
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
    '90a091e34a9d0bd793912eb485f282b4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\EventSubscriber',
         'uses' => 
        array (
          'configcrudevent' => 'Drupal\\Core\\Config\\ConfigCrudEvent',
          'configevents' => 'Drupal\\Core\\Config\\ConfigEvents',
          'elementinfomanagerinterface' => 'Drupal\\Core\\Render\\ElementInfoManagerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
        ),
         'className' => 'Drupal\\captcha\\EventSubscriber\\CaptchaCachedSettingsSubscriber',
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
  ),
));