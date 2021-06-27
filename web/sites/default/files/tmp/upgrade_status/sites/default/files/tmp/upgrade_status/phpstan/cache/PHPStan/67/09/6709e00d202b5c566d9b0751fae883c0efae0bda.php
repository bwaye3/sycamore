<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/tax/src/Event/TaxEvents.php-1624732871',
   'data' => 
  array (
    '2b5d4f56a9299c318d0ae5a0e8e38a7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when building the tax zones.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_tax\\Event\\BuildZonesEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
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
    'f9de2a10bcde323929e9efe260a61000' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Name of the event fired when determining the customer\'s profile.
   *
   * By default the billing profile is used to determine tax type
   * applicability for each order item. Modules should use this event
   * to select a shipping profile instead, when available.
   *
   * @Event
   *
   * @see \\Drupal\\commerce_tax\\Event\\CustomerProfileEvent
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_tax\\Event',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\commerce_tax\\Event\\TaxEvents',
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