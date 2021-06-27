<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/payment/src/Entity/PaymentMethodInterface.php-1624732871',
   'data' => 
  array (
    '2a5fd892bfc07ed104fb9f173b8fd70b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the interface for payment methods.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    '137862f895d723eb8dd83ba8f358724e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment method type.
   *
   * @return \\Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentMethodType\\PaymentMethodTypeInterface
   *   The payment method type.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    '6c2a5e81c0fc172bf3be6436f151bd76' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment gateway mode.
   *
   * A payment gateway in "live" mode can\'t manipulate payment methods created
   * while it was in "test" mode, and vice-versa.
   *
   * @return string
   *   The payment gateway mode.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    '0afdbbf04b13d4d7fd546578fe1ab6e3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment method remote ID.
   *
   * @return string
   *   The payment method remote ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    '9749aa7300cce5003b826ace759952a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment method remote ID.
   *
   * @param string $remote_id
   *   The payment method remote ID.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    '2a6741600071ab1971dd1a76ac3af1a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the billing profile.
   *
   * Present only if the payment gateway collects billing information.
   *
   * @see \\Drupal\\commerce_payment\\Plugin\\Commerce\\PaymentGateway\\PaymentGatewayInterface::collectsBillingInformation()
   *
   * @return \\Drupal\\profile\\Entity\\ProfileInterface|null
   *   The billing profile entity, or NULL if none found.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'getBillingProfile',
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
    '015eda3ce34459cd067aa492c9582903' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the billing profile.
   *
   * @param \\Drupal\\profile\\Entity\\ProfileInterface $profile
   *   The billing profile entity.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'setBillingProfile',
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
    '76529a59adaa0348da41401a2cb8b6c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the payment method is reusable.
   *
   * @return bool
   *   TRUE if the payment method is reusable, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'isReusable',
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
    '6d25e1c9166f5e4e9270c1324e8f3d63' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether the payment method is reusable.
   *
   * @param bool $reusable
   *   Whether the payment method is reusable.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'setReusable',
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
    '2ffb7af0ff6f118a1f4ad71029a2e405' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether this is the user\'s default payment method.
   *
   * @return bool
   *   TRUE if this is the user\'s default payment method, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'isDefault',
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
    '9a0a1649b2c74bd885f260ebfdcef147' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether this is the user\'s default payment method.
   *
   * @param bool $default
   *   Whether this is the user\'s default payment method.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'setDefault',
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
    '07a548df5c28b874842046fae2deb858' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets whether the payment method has expired.
   *
   * @return bool
   *   TRUE if the payment method has expired, FALSE otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    '9e434e34fb26c63ea6d1a0f11b781742' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment method expiration timestamp.
   *
   * @return int
   *   The payment method expiration timestamp.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    '67e20b7d81f09166f23ce98cc2941dc1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment method expiration timestamp.
   *
   * @param int $timestamp
   *   The payment method expiration timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
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
    'd4393acefe12aebe7f117bd91fad34ab' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the payment method creation timestamp.
   *
   * @return int
   *   Creation timestamp of the payment.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'getCreatedTime',
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
    'beebf756a4ca9f15fac3ee3eaf90626e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the payment method creation timestamp.
   *
   * @param int $timestamp
   *   The payment method creation timestamp.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_payment\\Entity',
         'uses' => 
        array (
          'entitychangedinterface' => 'Drupal\\Core\\Entity\\EntityChangedInterface',
          'contententityinterface' => 'Drupal\\Core\\Entity\\ContentEntityInterface',
          'entityownerinterface' => 'Drupal\\user\\EntityOwnerInterface',
          'profileinterface' => 'Drupal\\profile\\Entity\\ProfileInterface',
        ),
         'className' => 'Drupal\\commerce_payment\\Entity\\PaymentMethodInterface',
         'functionName' => 'setCreatedTime',
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