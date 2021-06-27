<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/src/Plugin/Validation/Constraint/PurchasedEntityAvailableConstraintValidator.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/SelectStoreTrait.php-1624732871',
   'data' => 
  array (
    'e5272a62a1747e01ebc72d6921921434' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Constraint validator for validating purchased entity availability.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'availabilitymanagerinterface' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
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
    '1de7c69feaa44419c6df3dbfe1aa433f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a method for selecting the correct store for a purchasable entity.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
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
    '2c1d27116fc27f971f22ccc5b09100a7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current store.
   *
   * @var \\Drupal\\commerce_store\\CurrentStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
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
    '4def817541f81ee62af9776f266115f3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Selects the store for the given purchasable entity.
   *
   * If the entity is sold from one store, then that store is selected.
   * If the entity is sold from multiple stores, and the current store is
   * one of them, then that store is selected.
   *
   * @param \\Drupal\\commerce\\PurchasableEntityInterface $entity
   *   The entity being added to cart.
   *
   * @throws \\Exception
   *   When the entity can\'t be purchased from the current store.
   *
   * @return \\Drupal\\commerce_store\\Entity\\StoreInterface
   *   The selected store.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_store',
         'uses' => 
        array (
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
         'functionName' => 'selectStore',
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
    '749f18efad0c87b0872f2fd394c57cbf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The availability manager.
   *
   * @var \\Drupal\\commerce_order\\AvailabilityManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'availabilitymanagerinterface' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
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
    '13976e4bc415f959aa73ac24f5c0ada3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'availabilitymanagerinterface' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
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
    '5a8b006bf875617ae7f76bc165de50f1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new PurchasedEntityAvailableConstraintValidator object.
   *
   * @param \\Drupal\\commerce_order\\AvailabilityManagerInterface $availability_manager
   *   The availability manager.
   * @param \\Drupal\\commerce_store\\CurrentStoreInterface $current_store
   *   The current store.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'availabilitymanagerinterface' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
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
    '42c2dfeba21ec804814cda575ee9d543' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'availabilitymanagerinterface' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
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
    '2bad985b61dcf7072b6dbf8612d7b82d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'purchasableentityinterface' => 'Drupal\\commerce\\PurchasableEntityInterface',
          'availabilitymanagerinterface' => 'Drupal\\commerce_order\\AvailabilityManagerInterface',
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'orderiteminterface' => 'Drupal\\commerce_order\\Entity\\OrderItemInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'entityreferencefielditemlistinterface' => 'Drupal\\Core\\Field\\EntityReferenceFieldItemListInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
          'constraintvalidator' => 'Symfony\\Component\\Validator\\ConstraintValidator',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
        ),
         'className' => 'Drupal\\commerce_order\\Plugin\\Validation\\Constraint\\PurchasedEntityAvailableConstraintValidator',
         'functionName' => 'validate',
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