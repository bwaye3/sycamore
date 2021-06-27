<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/cart/src/Form/AddToCartForm.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/store/src/SelectStoreTrait.php-1624732871',
   'data' => 
  array (
    '741472bc591a085e1c2b447de7489cfc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides the order item add to cart form.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '71add6d76847ab29a99a8fb3abda59f5' => 
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
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '5232a9c2df504e2a269f2a5883dea0cc' => 
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
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'c63cdd2469f312962fc5bdab6d23ee80' => 
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
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '2fe53aacfe68517b80dd5534bbef2d1e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart manager.
   *
   * @var \\Drupal\\commerce_cart\\CartManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'be1410ec5d25f23888038aa8c95d7d2c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The cart provider.
   *
   * @var \\Drupal\\commerce_cart\\CartProviderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '354b359d6a1786f2a81172010c7c1f49' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The order type resolver.
   *
   * @var \\Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '8317671a47e7441bab63f50a28d7a32e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current store.
   *
   * @var \\Drupal\\commerce_store\\CurrentStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '04b1bbf343aa1fb3161b2022427a869e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The chain base price resolver.
   *
   * @var \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'bc4096dcf76227bde727b35df64410f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'dc4d7ed404c92567e10cef6ecce6a498' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The form ID.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'bc0535646755a7d0a1fad0af18299647' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new AddToCartForm object.
   *
   * @param \\Drupal\\Core\\Entity\\EntityRepositoryInterface $entity_repository
   *   The entity repository.
   * @param \\Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface $entity_type_bundle_info
   *   The entity type bundle info.
   * @param \\Drupal\\Component\\Datetime\\TimeInterface $time
   *   The time.
   * @param \\Drupal\\commerce_cart\\CartManagerInterface $cart_manager
   *   The cart manager.
   * @param \\Drupal\\commerce_cart\\CartProviderInterface $cart_provider
   *   The cart provider.
   * @param \\Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface $order_type_resolver
   *   The order type resolver.
   * @param \\Drupal\\commerce_store\\CurrentStoreInterface $current_store
   *   The current store.
   * @param \\Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface $chain_price_resolver
   *   The chain base price resolver.
   * @param \\Drupal\\Core\\Session\\AccountInterface $current_user
   *   The current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '56f85ff365787ec42a7dc1c5435a11d6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '963a1d12eec5f15265ad7584fd37fb3d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
         'functionName' => 'setEntity',
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
    '3ff599d1ad0a84966461ecc02e0da549' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
         'functionName' => 'getBaseFormId',
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
    '221b40a8523ccb7c66c84d9b37fcba09' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'e802eea815c480a4f32f26e931d59f4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '1c1d4c8517d6bca790f4f0f6961205bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
         'functionName' => 'setFormId',
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
    'c51d8281b68f801b2a2f837862b07855' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'a04c820c75329c863465ec146e3450e7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
         'functionName' => 'actions',
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
    '7fe052d9e2dac237909a06492a906c4f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '9bfd711b0dbf4b4a0e2d75c604b6bd7b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $order_item */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    '1b1a3488cacb40d700dfdef3b71c219c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce\\PurchasableEntityInterface $purchased_entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
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
    'e63f6ba9595570bd3fe22afd408615cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
         'functionName' => 'buildEntity',
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
    'c256938022aab6730bd48247ea7a8a6b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderItemInterface $entity */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_cart\\Form',
         'uses' => 
        array (
          'context' => 'Drupal\\commerce\\Context',
          'cartmanagerinterface' => 'Drupal\\commerce_cart\\CartManagerInterface',
          'cartproviderinterface' => 'Drupal\\commerce_cart\\CartProviderInterface',
          'ordertyperesolverinterface' => 'Drupal\\commerce_order\\Resolver\\OrderTypeResolverInterface',
          'chainpriceresolverinterface' => 'Drupal\\commerce_price\\Resolver\\ChainPriceResolverInterface',
          'currentstoreinterface' => 'Drupal\\commerce_store\\CurrentStoreInterface',
          'selectstoretrait' => 'Drupal\\commerce_store\\SelectStoreTrait',
          'timeinterface' => 'Drupal\\Component\\Datetime\\TimeInterface',
          'contententityform' => 'Drupal\\Core\\Entity\\ContentEntityForm',
          'entityinterface' => 'Drupal\\Core\\Entity\\EntityInterface',
          'entityrepositoryinterface' => 'Drupal\\Core\\Entity\\EntityRepositoryInterface',
          'entitytypebundleinfointerface' => 'Drupal\\Core\\Entity\\EntityTypeBundleInfoInterface',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
        ),
         'className' => 'Drupal\\commerce_cart\\Form\\AddToCartForm',
         'functionName' => 'buildEntity',
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