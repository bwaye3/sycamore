<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Security/DoTrustedCallbackTrait.php-1624732867',
   'data' => 
  array (
    '02035763d24e48a42a1a4382d279dab3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Ensures that TrustedCallbackInterface can be enforced for callback methods.
 *
 * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Security',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
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
    'a6db65244b2267d169bc28ef69bc7d83' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Performs a callback.
   *
   * If the callback is trusted the callback will occur. Trusted callbacks must
   * be methods of a class that implements
   * \\Drupal\\Core\\Security\\TrustedCallbackInterface or $extra_trusted_interface
   * or be an anonymous function. If the callback is not trusted then whether or
   * not the callback is called and what type of error is thrown depends on
   * $error_type. To provide time for dependent code to use trusted callbacks
   * use TrustedCallbackInterface::TRIGGER_SILENCED_DEPRECATION and then at a
   * later date change this to TrustedCallbackInterface::THROW_EXCEPTION.
   *
   * @param callable $callback
   *   The callback to call. Note that callbacks which are objects and use the
   *   magic method __invoke() are not supported.
   * @param array $args
   *   The arguments to pass the callback.
   * @param $message
   *   The error message if the callback is not trusted. If the message contains
   *   "%s" it will be replaced in with the resolved callback.
   * @param string $error_type
   *   (optional) The type of error to trigger. One of:
   *   - TrustedCallbackInterface::THROW_EXCEPTION
   *   - TrustedCallbackInterface::TRIGGER_WARNING
   *   - TrustedCallbackInterface::TRIGGER_SILENCED_DEPRECATION
   *   Defaults to TrustedCallbackInterface::THROW_EXCEPTION.
   * @param string $extra_trusted_interface
   *   (optional) An additional interface that if implemented by the callback
   *   object means any public methods on that object are trusted.
   *
   * @return mixed
   *   The callback\'s return value.
   *
   * @throws \\Drupal\\Core\\Security\\UntrustedCallbackException
   *   Exception thrown if the callback is not trusted and $error_type equals
   *   TrustedCallbackInterface::THROW_EXCEPTION.
   *
   * @see \\Drupal\\Core\\Security\\TrustedCallbackInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Security',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Security\\DoTrustedCallbackTrait',
         'functionName' => 'doTrustedCallback',
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