<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Entity/PaymentInterface.php-1624732871',
   'data' => 
  array (
    '3e64d5ebde595e1e3052baede7b5be23' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for payments.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
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
    'd65b33da9091d7c93447fcc9eb5eb47b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment type.
   *
   * @return \\Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentType\\PaymentTypeInterface
   *   The payment type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getType',
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
    '9664bc7a69b6323100b967dbeade11b3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment gateway mode.
   *
   * A payment gateway in "live" mode can\'t manipulate payments created while
   * it was in "test" mode, and vice-versa.
   *
   * @return string
   *   The payment gateway mode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getPaymentGatewayMode',
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
    '64603fe02d883c2ce0387db99ce55e8d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment method.
   *
   * @return \\Drupal\\commerce_payment\\Entity\\PaymentMethodInterface|null
   *   The payment method entity, or null if unknown.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getPaymentMethod',
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
    '56a920e36b0a2d0a24363cda5a2cabdf' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment method ID.
   *
   * @return int|null
   *   The payment method ID, or null if unknown.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getPaymentMethodId',
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
    'e547bf27c727596054d4daf4da69c2f9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the parent order.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface|null
   *   The order entity, or null.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getOrder',
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
    'eb32b904d36be0d2730b54d147739e03' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the parent order ID.
   *
   * @return int|null
   *   The order ID, or null.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getOrderId',
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
    '528f00d354223859d14689a8f59d068e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment remote ID.
   *
   * @return string
   *   The payment remote ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getRemoteId',
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
    '4db0f59a91aeb376646a5d4786589c08' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment remote ID.
   *
   * @param string $remote_ID
   *   The payment remote ID.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setRemoteId',
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
    '459de59865cfa6fc1b3f2b0e9794192a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment remote state.
   *
   * @return string
   *   The payment remote state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getRemoteState',
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
    '95d3de7219be799d64aad3d9e80112d0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment remote state.
   *
   * @param string $remote_state
   *   The payment remote state.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setRemoteState',
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
    '1f83a716478e58000c5ba79de8002c54' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment AVS response code.
   *
   * @return string
   *   The payment AVS response code.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getAvsResponseCode',
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
    '7e0ed703ee19ffa932558efc61463c7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment AVS response code.
   *
   * @param string $avs_response_code
   *   The payment AVS response code.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setAvsResponseCode',
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
    '46a676561dcc09d657d17ca4033b0dd9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment AVS response code label.
   *
   * @return string|null
   *   The payment AVS response code label, or NULL if it does not exist.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getAvsResponseCodeLabel',
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
    '685f872c4be527c6fc16926abed6b803' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment AVS response code label.
   *
   * @param string $avs_response_code_label
   *   The payment AVS response code label.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setAvsResponseCodeLabel',
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
    '12b73fff4c781433bdf18206680ff4d8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment balance.
   *
   * The balance represents the payment amount minus the refunded amount.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The payment balance, or NULL if the payment does not have an amount yet.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getBalance',
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
    'ded42deb69fdd925033dba9dfe3a6a44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment amount.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The payment amount, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getAmount',
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
    '3ec7a72085024311455277d78456e8ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment amount.
   *
   * @param \\Drupal\\commerce_price\\Price $amount
   *   The payment amount.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setAmount',
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
    'bbbc4f97cc77ec40295316e56ab78a8f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the refunded payment amount.
   *
   * @return \\Drupal\\commerce_price\\Price|null
   *   The refunded payment amount, or NULL.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getRefundedAmount',
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
    'b4831d0d8bcafa82d8f2f58a6f251c44' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the refunded payment amount.
   *
   * @param \\Drupal\\commerce_price\\Price $refunded_amount
   *   The refunded payment amount.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setRefundedAmount',
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
    '338ea1bb5b88f71f8694c8b2148c23c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment state.
   *
   * @return \\Drupal\\state_machine\\Plugin\\Field\\FieldType\\StateItemInterface
   *   The payment state.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getState',
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
    '887587e299e08d5f5bd858513627c3eb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment state.
   *
   * @param string $state_id
   *   The new state ID.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setState',
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
    '820025f637478bd6c5c89dae1816c390' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment authorization timestamp.
   *
   * @return int
   *   The payment authorization timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getAuthorizedTime',
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
    'b9e0a9823979bb89abb5f94c13ed9db8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment authorization timestamp.
   *
   * @param int $timestamp
   *   The payment authorization timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setAuthorizedTime',
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
    'e2ab5a52201b767e6cf1809a0d4ccb35' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the payment has expired.
   *
   * @return bool
   *   TRUE if the payment has expired, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'isExpired',
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
    'a88f2ce5f53ddc0acf48ffd6dd43cfd7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment expiration timestamp.
   *
   * Marks the time after which the payment can no longer be completed.
   *
   * @return int
   *   The payment expiration timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getExpiresTime',
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
    '48edc3d3b4908d576046e4ff1540b998' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment expiration timestamp.
   *
   * @param int $timestamp
   *   The payment expiration timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setExpiresTime',
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
    '651d28a0d53d23faedc72fcaa392a8e8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the payment has been completed.
   *
   * @return bool
   *   TRUE if the payment has been completed, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'isCompleted',
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
    '16a23ca2f1445a30dd9f3733afbc924e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment completed timestamp.
   *
   * @return int
   *   The payment completed timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'getCompletedTime',
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
    'b660d13a0e55bd238ecc08698d49480d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment completed timestamp.
   *
   * @param int $timestamp
   *   The payment completed timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'price' => 'Drupal\\commerce_price\\Price',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentInterface',
         'functionName' => 'setCompletedTime',
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