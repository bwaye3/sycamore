<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/commerce_cart.module-1624732871',
   'data' => 
  array (
    '9280d1536d920420fe1e8dcf28790a0c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @file
 * Implements the shopping cart system and add to cart features.
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
    '352cdaa418f094d7e512cf2f3901b8e1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_cron().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_cron',
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
    '1c0ba2d9c6e454b010b426ef3aa2d04f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_menu_links_discovered_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_menu_links_discovered_alter',
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
    '5f4308f65526662ddc5a32264fd0cd6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_theme().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_theme',
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
    'b9c8532f4f3e2efe1db3696b99f83397' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_preprocess_views_view().
 *
 * Moves the commerce_cart_form footer output above the submit buttons.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_preprocess_views_view',
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
    '204794f45fd7c839676a486e3ead9e68' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_entity_base_field_info().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_entity_base_field_info',
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
    '21b40482e994529a30c2bf62664a1c87' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_entity_type_build().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_entity_type_build',
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
    'b6fa0f7cb310597af1fa9e05c5006889' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_user_login().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_user_login',
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
    '8dceddeb6e8e8b013837f9b137b08c5b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_delete().
 *
 * Removes deleted carts from the anonymous user\'s session.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_commerce_order_delete',
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
    '347a9c7657925952a0f54bbd5f846992' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_access().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_commerce_order_access',
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
    '997f389d0ccbdb54b8476bf804b77d07' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_ENTITY_TYPE_access().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_commerce_order_item_access',
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
    'd92aba1d839b7776e467777cd2a5e271' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Checks that the account has access to the cart.
 *
 * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
 *   The cart order.
 * @param string $operation
 *   The operation.
 * @param \\Drupal\\Core\\Session\\AccountInterface $account
 *   The account.
 *
 * @return \\Drupal\\Core\\Access\\AccessResultInterface
 *   The access result.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => '_commerce_cart_order_access',
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
    'a4329492dfe4d82ae73cca9b70976432' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_FORM_ID_alter() for \'entity_form_display_edit_form\'.
 *
 * Hides irrelevant purchased_entity widgets on the add_to_cart order item
 * form display.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_form_entity_form_display_edit_form_alter',
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
    '99c5380923ada2fd2fa3ed95c3fc4ab6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_form_entity_form_display_edit_form_alter',
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
    '3003137c7577c30795f4df1deca598a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_BASE_FORM_ID_alter() for \'commerce_order_form\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_form_commerce_order_form_alter',
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
    'c3b87bd6b97fcbaecf1240d34af2deec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_form_commerce_order_form_alter',
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
    '687007f69d086349a6ca2dd5ce693ae4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_BASE_FORM_ID_alter() for \'commerce_order_type_form\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_form_commerce_order_type_form_alter',
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
    '99c65e1f77d02c7ddf5164134731e88a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface $order_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_form_commerce_order_type_form_alter',
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
    '7bfdf6eb310416bcee2958a967c8df8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Form submission handler for \'commerce_order_type_form\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_order_type_form_submit',
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
    'a5cc089324428c6afc7f5be61347fa1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderTypeInterface $order_type */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_order_type_form_submit',
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
    'cf4362aba72d326fc8fce3247d24d566' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_form_BASE_FORM_ID_alter() for \'commerce_order_item_type_form\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_form_commerce_order_item_type_form_alter',
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
    'fc62b550e3a5331c911ffb24de950499' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Form submission handler for \'commerce_order_item_type_form\'.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_order_item_type_form_submit',
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
    '846285d7f3fbad94bf4a6daa437898f0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface $form_display */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_order_item_type_form_submit',
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
    'bb1784c46238f29da4819037fdc8000e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_entity_form_display_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_entity_form_display_alter',
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
    'ae56be8e7e2f14ed2d9a1ede8c7f9e4e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Implements hook_views_data_alter().
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'commerce_cart_views_data_alter',
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
    '17da1881ecaf7166944ecee80300ea14' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Prepares variables for the cart block element template.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => NULL,
         'uses' => 
        array (
          'cartsessioninterface' => 'Drupal\\commerce_cart\\CartSessionInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'accessresult' => 'Drupal\\Core\\Access\\AccessResult',
          'entityformdisplayinterface' => 'Drupal\\Core\\Entity\\Display\\EntityFormDisplayInterface',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'entitytypeinterface' => 'Drupal\\Core\\Entity\\EntityTypeInterface',
          'basefielddefinition' => 'Drupal\\Core\\Field\\BaseFieldDefinition',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'anonymoususersession' => 'Drupal\\Core\\Session\\AnonymousUserSession',
        ),
         'className' => NULL,
         'functionName' => 'template_preprocess_commerce_cart_block',
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