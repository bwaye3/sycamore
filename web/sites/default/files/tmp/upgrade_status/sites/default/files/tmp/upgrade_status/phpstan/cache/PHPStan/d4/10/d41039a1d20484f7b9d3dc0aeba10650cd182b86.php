<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/checkout/src/Event/CheckoutCompletionRegisterEvent.php-1624732871',
   'data' => 
  array (
    '2664cb8dec096fb0d782d13c939f190d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the checkout completion register event.
 *
 * @see \\Drupal\\commerce_checkout\\Event\\CheckoutEvents
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
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
    'ef52fd160fad032b419a34a64fdac544' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The created account.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
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
    'fd02f66c0f8e0078f50a8e96a6596ac6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The checkout order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
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
    '1f7beb2c2a9f32d1883b19c200f169bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The redirect URL.
   *
   * @var \\Drupal\\Core\\Url
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
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
    'd67e20ac57b8d028782c1628682575aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Constructs a new CheckoutCompletionRegisterEvent object.
   *
   * @param \\Drupal\\Core\\Session\\AccountInterface $account
   *   The created account.
   * @param \\Drupal\\commerce_order\\Entity\\OrderInterface $order
   *   The checkout order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
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
    'f161b84f30a7dcd76789fc053f1651c5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the created account.
   *
   * @return \\Drupal\\Core\\Session\\AccountInterface
   *   The created account.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
         'functionName' => 'getAccount',
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
    '9a1be288064cd6098856aa15f46e6f9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the checkout order.
   *
   * @return \\Drupal\\commerce_order\\Entity\\OrderInterface
   *   The checkout order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
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
    '0b415ba5edf012bde234df1954fe4451' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the redirect URL.
   *
   * Used to redirect the customer after the account has been created.
   *
   * @return \\Drupal\\Core\\Url|null
   *   The redirect url, if set. NULL otherwise.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
         'functionName' => 'getRedirectUrl',
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
    'af0fd32fd0b4467190bd7c6dd83ed368' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the redirect URL.
   *
   * @param \\Drupal\\Core\\Url $url
   *   The redirect URL.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
         'functionName' => 'setRedirectUrl',
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
    'cba596500c18c7403a0475771ef52519' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the redirect.
   *
   * @param string $route_name
   *   The name of the route.
   * @param array $route_parameters
   *   (optional) An associative array of parameter names and values.
   * @param array $options
   *   (optional) An associative array of additional options. See
   *   \\Drupal\\Core\\Url for the available keys.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\commerce_checkout\\Event',
         'uses' => 
        array (
          'orderinterface' => 'Drupal\\commerce_order\\Entity\\OrderInterface',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'url' => 'Drupal\\Core\\Url',
          'event' => 'Symfony\\Component\\EventDispatcher\\Event',
        ),
         'className' => 'Drupal\\commerce_checkout\\Event\\CheckoutCompletionRegisterEvent',
         'functionName' => 'setRedirect',
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