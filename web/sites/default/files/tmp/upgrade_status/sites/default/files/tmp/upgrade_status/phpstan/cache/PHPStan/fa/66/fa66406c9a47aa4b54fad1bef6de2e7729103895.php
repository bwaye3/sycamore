<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Form/OrderReassignForm.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Form/CustomerFormTrait.php-1624732871',
   'data' => 
  array (
    '013f67da7ad949c3b93e1ffa68c5206e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form for assigning orders to a different customer.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
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
    '356b27d2bf34ae1f0ad48f2c39347eb7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a form for selecting the order\'s customer (uid and mail fields).
 *
 * Used when adding a new order or reassigning an existing one.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
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
    '64c088b86ffbf89460ff8925de27c3b7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Builds the customer form.
   *
   * @param array $form
   *   The parent form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The current order, if known.
   *
   * @return array
   *   The parent form with the customer form elements added.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'buildCustomerForm',
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
    '240bd7f0cde0c98cd95509b732d7c5c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Ajax callback.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'customerFormAjax',
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
    '7a97543f8a3d550e6d104167c833d82c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Submit handler for the customer select form.
   *
   * @param array $form
   *   The parent form.
   * @param \\Drupal\\Core\\Form\\FormStateInterface $form_state
   *   The current state of the form.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'html' => 'Drupal\\Component\\Utility\\Html',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'user' => 'Drupal\\user\\Entity\\User',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'submitCustomerForm',
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
    'c57b313093cd183564250b68c50c45a2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
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
    '55ac6e101047c66b6b35a041fe8169d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order assignment service.
   *
   * @var \\Drupal\\commerce_order\\OrderAssignmentInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
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
    'e487060816929f380e89232a455788c9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The user storage.
   *
   * @var \\Drupal\\Core\\Entity\\EntityStorageInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
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
    'db2aab9f85853088e8f9e9ae87fffc3f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new OrderReassignForm object.
   *
   * @param \\Drupal\\Core\\Routing\\CurrentRouteMatch $current_route_match
   *   The current route match.
   * @param \\Drupal\\commerce_order\\OrderAssignmentInterface $order_assignment
   *   The order assignment service.
   * @param \\Drupal\\Core\\Entity\\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
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
    '16740f83cb922dbe4bac10972282ba10' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'create',
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
    '29928e95a4c2cb4b6c5b1fd0e07235db' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'getFormId',
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
    'b837b6e7c510e9b59c6229a6172f3343' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'buildForm',
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
    'f9fcbf7faeccb3050c9574d9f248221b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'submitForm',
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
    '3e0ea45f3cfa4d2f7a5d6a0a99b71f6d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\user\\UserInterface $user */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Form',
         'uses' => 
        array (
          'orderassignmentinterface' => 'Drupal\\commerce_order\\OrderAssignmentInterface',
          'entitytypemanagerinterface' => 'Drupal\\Core\\Entity\\EntityTypeManagerInterface',
          'formbase' => 'Drupal\\Core\\Form\\FormBase',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'currentroutematch' => 'Drupal\\Core\\Routing\\CurrentRouteMatch',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Form\\OrderReassignForm',
         'functionName' => 'submitForm',
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