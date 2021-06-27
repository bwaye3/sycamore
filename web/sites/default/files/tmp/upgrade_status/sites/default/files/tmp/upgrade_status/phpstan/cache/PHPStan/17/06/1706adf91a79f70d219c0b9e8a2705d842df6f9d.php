<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/RedirectDestinationInterface.php-1624732867',
   'data' => 
  array (
    'aa57b4f87b0b40141d0356ae01e73387' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides an interface for redirect destinations.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
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
    '66fc1f6a94eec71ee03116b803ec7386' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a \'destination\' URL query parameter for use with \\Drupal\\Core\\Url.
   *
   * Used to direct the user back to the referring page after completing a form.
   * By default the current URL is returned. If a destination exists in the
   * current request, that destination is returned. As such, a destination can
   * persist across multiple pages.
   *
   * @return array
   *   An associative array containing the key:
   *   - destination: The value of the current request\'s \'destination\' query
   *     parameter, if present. This can be either a relative or absolute URL.
   *     However, for security, redirection to external URLs is not performed.
   *     If the query parameter isn\'t present, then the URL of the current
   *     request is returned.
   *
   * @see \\Drupal\\Core\\EventSubscriber\\RedirectResponseSubscriber::checkRedirectUrl()
   * @ingroup form_api
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
         'functionName' => 'getAsArray',
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
    '02e799eef471d00fa3dcd4b988162b92' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the destination as a path.
   *
   * To convert to a URL suitable for
   * \\Symfony\\Component\\HttpFoundation\\RedirectResponse::__construct() use
   * @code
   * \\Drupal\\Core\\Url::fromUserInput(\\Drupal::destination()->get())->setAbsolute()->toString()
   * @endcode
   *
   * @return string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
         'functionName' => 'get',
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
    'b9879803ec8c8232a936f834fa432bed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the destination as URL.
   *
   * This method should be used really rarely, for example views uses it, in
   * order to override all destination calls in all of its rendering.
   *
   * @param string $new_destination
   *   The new destination.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Routing\\RedirectDestinationInterface',
         'functionName' => 'set',
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