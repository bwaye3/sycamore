<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/commerce_payment.install-1624732871',
   'data' => 
  array (
    '2de8c4d413979652aa0e2419535b84df' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Install, update and uninstall functions for the commerce_payment module.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
        ),
         'className' => NULL,
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
    'db2368023dc14c6a27e72768dbf0de60' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_install().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_install',
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
    '72cabed713695d39d8656026c030f435' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Add the payment_gateway_mode field to payments and payment methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8200',
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
    '76ea1260e6fbc5e20729bbdf61052bdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Remove the authorization_expires field from payments, add the expires and completed fields.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8201',
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
    '015519af8534e95f3466c7067d294647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Make payment_gateway and payment_method order fields optional.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8202',
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
    'c5319311f29f5810548f9f47571a03b8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update entity keys for payment methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8203',
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
    '92ef0bf1acc1bca0fce30e0384a15946' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Add the event handler to the payment entity type.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8204',
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
    'c695c3638758e7f796cc9e7df9e7be21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update the \'uid\' field.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8205',
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
    '1f3427290b09241359060c3b076169ce' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Field\\FieldDefinitionInterface $base_field_override */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8205',
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
    'c7344b693894b36f4c4e0f6bd7ca4f57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Add the avs_response_code and avs_response_code_label fields to payments.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8206',
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
    '84a25857fd4e42424ab76b48837240ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ensure new field indexes on the payment and payment method entities.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8207',
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
    '5d8db1d14dbf0d22c5642f3bdf0a9609' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Update the remote_id field definition.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'commercecontententitystorageschema' => 'Drupal\\commerce\\CommerceContentEntityStorageSchema',
          'paymentmethod' => 'Drupal\\commerce_payment\\Entity\\PaymentMethod',
          'paymentevent' => 'Drupal\\commerce_payment\\Event\\PaymentEvent',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => NULL,
         'functionName' => 'commerce_payment_update_8208',
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