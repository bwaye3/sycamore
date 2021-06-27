<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Access/AddressBookAccessCheck.php-1624732871',
   'data' => 
  array (
    '699bba22a0df47223f4e21bf6278e3b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks address book access.
 *
 * Intended to be combined with more specific (overview / CRUD) access checks.
 *
 * Requirements key: \'_address_book_access\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Access',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accessinterface' => 'Drupal\\Core\\Routing\\Access\\AccessInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Access\\AddressBookAccessCheck',
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
    'eadc8410a271b01f36dbdf363dd69fb5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The address book.
   *
   * @var \\Drupal\\commerce_order\\AddressBookInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Access',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accessinterface' => 'Drupal\\Core\\Routing\\Access\\AccessInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Access\\AddressBookAccessCheck',
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
    '2e347dc70b8563a46298c886290faaee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new AddressBookAccessCheck object.
   *
   * @param \\Drupal\\commerce_order\\AddressBookInterface $address_book
   *   The address book.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Access',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accessinterface' => 'Drupal\\Core\\Routing\\Access\\AccessInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Access\\AddressBookAccessCheck',
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
    '818e3240208b741f05abe8067dcf2238' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Checks address book access.
   *
   * Ensures that the user is logged in, and the address book UI is exposed.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The currently logged in account.
   *
   * @return \\Drupal\\Core\\Access\\AccessResultInterface
   *   The access result.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Access',
         'uses' => 
        array (
          'addressbookinterface' => 'Drupal\\commerce_order\\AddressBookInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'accessinterface' => 'Drupal\\Core\\Routing\\Access\\AccessInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Access\\AddressBookAccessCheck',
         'functionName' => 'access',
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