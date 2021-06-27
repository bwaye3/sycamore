<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Controller/ControllerBase.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/LinkGeneratorTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Logger/LoggerChannelTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Messenger/MessengerTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/RedirectDestinationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/StringTranslation/StringTranslationTrait.php-1624732867,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Routing/UrlGeneratorTrait.php-1624732867',
   'data' => 
  array (
    'e2f7d220911801ccfcbb6fb35bf5b457' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Utility base class for thin controllers.
 *
 * Controllers that use this base class have access to a number of utility
 * methods and to the Container, which can greatly reduce boilerplate dependency
 * handling code.  However, it also makes the class considerably more
 * difficult to unit test. Therefore this base class should only be used by
 * controller classes that contain only trivial glue code.  Controllers that
 * contain sufficiently complex logic that it\'s worth testing should not use
 * this base class but use ContainerInjectionInterface instead, or even
 * better be refactored to be trivial glue code.
 *
 * The services exposed here are those that it is reasonable for a well-behaved
 * controller to leverage. A controller that needs other services may
 * need to be refactored into a thin controller and a dependent unit-testable
 * service.
 *
 * @see \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface
 *
 * @ingroup routing
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '8378df7585f8ecf1df9f9044202ebab4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the Link Generator.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Link instead.
 *
 * @see https://www.drupal.org/node/2614344
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'd354f0d5d322f9c18f07a51f71042207' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The link generator.
   *
   * @var \\Drupal\\Core\\Utility\\LinkGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'bb178b089eed67d67182ccba003620f5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Renders a link to a route given a route name and its parameters.
   *
   * For details on the arguments, usage, and possible exceptions see
   * \\Drupal\\Core\\Utility\\LinkGeneratorInterface::generate().
   *
   * @return \\Drupal\\Core\\GeneratedLink
   *   A GeneratedLink object containing a link to the given route and
   *   parameters and bubbleable metadata.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\Link::fromTextAndUrl() instead.
   *
   * @see https://www.drupal.org/node/2614344
   * @see \\Drupal\\Core\\Utility\\LinkGeneratorInterface::generate()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'l',
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
    '0ebd0053099921dfa4bf6754c6396d36' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the link generator.
   *
   * @return \\Drupal\\Core\\Utility\\LinkGeneratorInterface
   *   The link generator
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Inject the
   *   \'link_generator\' service or use \\Drupal\\Core\\Link instead
   *
   * @see https://www.drupal.org/node/2614344
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'getLinkGenerator',
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
    'dfc0f91e4bc6a5b0fe399ec3cdd218e9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the link generator service.
   *
   * @param \\Drupal\\Core\\Utility\\LinkGeneratorInterface $generator
   *   The link generator service.
   *
   * @return $this
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0. Inject the
   *   \'link_generator\' service or use \\Drupal\\Core\\Link instead
   *
   * @see https://www.drupal.org/node/2614344
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'url' => 'Drupal\\Core\\Url',
          'linkgeneratorinterface' => 'Drupal\\Core\\Utility\\LinkGeneratorInterface',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'setLinkGenerator',
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
    'd69e420fc93bb12bd91b2d6454cb71a0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the logger factory service.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 *
 * @see \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '80b99cdcce72d7fce4c2ccef44a36b9a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The logger channel factory service.
   *
   * @var \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '4176e7f5ab355c3ceda4d9c9e4394d7d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the logger for a specific channel.
   *
   * @param string $channel
   *   The name of the channel. Can be any string, but the general practice is
   *   to use the name of the subsystem calling this.
   *
   * @return \\Psr\\Log\\LoggerInterface
   *   The logger for the given channel.
   *
   * @todo Require the use of injected services:
   *   https://www.drupal.org/node/2733703
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'getLogger',
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
    '7ba6a5991be498c5a100426c8a54dcf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Injects the logger channel factory.
   *
   * @param \\Drupal\\Core\\Logger\\LoggerChannelFactoryInterface $logger_factory
   *   The logger channel factory service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Logger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'setLoggerFactory',
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
    '734d6bff580cfd9198c344ac96938532' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides a trait for the messenger service.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'aaddc23524127fdf5af4f053cd420b89' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The messenger.
   *
   * @var \\Drupal\\Core\\Messenger\\MessengerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'edb4754f1d78b21dd38127b78977a41e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the messenger.
   *
   * @param \\Drupal\\Core\\Messenger\\MessengerInterface $messenger
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'setMessenger',
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
    '00f38e114b597a098045e2ea06d99ef0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the messenger.
   *
   * @return \\Drupal\\Core\\Messenger\\MessengerInterface
   *   The messenger.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Messenger',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'messenger',
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
    'c432da1966f2aaa9ffb6e7e1bfebdc75' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the Redirect Destination.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'f8d53cedd1492a8b236721f5bc27a236' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The redirect destination service.
   *
   * @var \\Drupal\\Core\\Routing\\RedirectDestinationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'b312c79bf874a44f6c1dc9ea4fb8d1c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Prepares a \'destination\' URL query parameter for use with \\Drupal\\Core\\Url.
   *
   * @see \\Drupal\\Core\\Routing\\RedirectDestinationInterface::getAsArray()
   *
   * @return array
   *   An associative array containing the key:
   *   - destination: The value of the current request\'s \'destination\' query
   *     parameter, if present. This can be either a relative or absolute URL.
   *     However, for security, redirection to external URLs is not performed.
   *     If the query parameter isn\'t present, then the URL of the current
   *     request is returned.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'getDestinationArray',
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
    '04c2463b15b4ee8bf04b6b473b0d2930' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the redirect destination service.
   *
   * @return \\Drupal\\Core\\Routing\\RedirectDestinationInterface
   *   The redirect destination helper.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'getRedirectDestination',
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
    '5761503500f6307d67eb6520520415ef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the redirect destination service.
   *
   * @param \\Drupal\\Core\\Routing\\RedirectDestinationInterface $redirect_destination
   *   The redirect destination service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'setRedirectDestination',
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
    '7b21ee364fa649d835e45048c5248973' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for \\Drupal\\Core\\StringTranslation\\TranslationInterface.
 *
 * Using this trait will add t() and formatPlural() methods to the class. These
 * must be used for every translatable string, similar to how procedural code
 * must use the global functions t() and \\Drupal::translation()->formatPlural().
 * This allows string extractor tools to find translatable strings.
 *
 * If the class is capable of injecting services from the container, it should
 * inject the \'string_translation\' service and assign it to
 * $this->stringTranslation.
 *
 * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface
 * @see container
 *
 * @ingroup i18n
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'd53d060ef8f3916c0e4cc4915ea871ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The string translation service.
   *
   * @var \\Drupal\\Core\\StringTranslation\\TranslationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'd0b2caa0191dad13df6f76b6d32b41e5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translates a string to the current language or to a given language.
   *
   * See \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct() for
   * important security information and usage guidelines.
   *
   * In order for strings to be localized, make them available in one of the
   * ways supported by the
   * @link https://www.drupal.org/node/322729 Localization API @endlink. When
   * possible, use the \\Drupal\\Core\\StringTranslation\\StringTranslationTrait
   * $this->t(). Otherwise create a new
   * \\Drupal\\Core\\StringTranslation\\TranslatableMarkup object.
   *
   * @param string $string
   *   A string containing the English text to translate.
   * @param array $args
   *   (optional) An associative array of replacements to make after
   *   translation. Based on the first character of the key, the value is
   *   escaped and/or themed. See
   *   \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat() for
   *   details.
   * @param array $options
   *   (optional) An associative array of additional options, with the following
   *   elements:
   *   - \'langcode\' (defaults to the current language): A language code, to
   *     translate to a language other than what is used to display the page.
   *   - \'context\' (defaults to the empty context): The context the source
   *     string belongs to. See the
   *     @link i18n Internationalization topic @endlink for more information
   *     about string contexts.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslatableMarkup
   *   An object that, when cast to a string, returns the translated string.
   *
   * @see \\Drupal\\Component\\Render\\FormattableMarkup::placeholderFormat()
   * @see \\Drupal\\Core\\StringTranslation\\TranslatableMarkup::__construct()
   *
   * @ingroup sanitization
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 't',
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
    '2087677e64dae01026e60477d7cb1f5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Formats a string containing a count of items.
   *
   * @see \\Drupal\\Core\\StringTranslation\\TranslationInterface::formatPlural()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'formatPlural',
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
    'e6983ba1615652118a57e522ef4087aa' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the number of plurals supported by a given language.
   *
   * @see \\Drupal\\locale\\PluralFormulaInterface::getNumberOfPlurals()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'getNumberOfPlurals',
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
    '57c3986398de5da6a35122bf9de93677' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the string translation service.
   *
   * @return \\Drupal\\Core\\StringTranslation\\TranslationInterface
   *   The string translation service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'getStringTranslation',
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
    '4ed733c875ba9cc99469e41226544343' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the string translation service to use.
   *
   * @param \\Drupal\\Core\\StringTranslation\\TranslationInterface $translation
   *   The string translation service.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\StringTranslation',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'setStringTranslation',
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
    '5c19c53c0b504dc4cf52b4927c8f05ee' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Wrapper methods for the Url Generator.
 *
 * This utility trait should only be used in application-level code, such as
 * classes that would implement ContainerInjectionInterface. Services registered
 * in the Container should not use this trait but inject the appropriate service
 * directly for easier testing.
 *
 * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
 *   Use \\Drupal\\Core\\Url instead.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '23943db01051b6aa4ab2fbef9406fb04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The url generator.
   *
   * @var \\Drupal\\Core\\Routing\\UrlGeneratorInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '0194e0eaeeace369b520a1ec9ebd3aa0' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Generates a URL or path for a specific route based on the given parameters.
   *
   * For details on the arguments, usage, and possible exceptions see
   * \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute().
   *
   * @return string
   *   The generated URL for the given route.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use \\Drupal\\Core\\Url::fromUri() instead.
   *
   * @see \\Drupal\\Core\\Routing\\UrlGeneratorInterface::generateFromRoute()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'url',
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
    '401456c46b0b8bc0b3e005e13aca409a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a redirect response object for the specified route.
   *
   * @param string $route_name
   *   The name of the route to which to redirect.
   * @param array $route_parameters
   *   (optional) Parameters for the route.
   * @param array $options
   *   (optional) An associative array of additional options.
   * @param int $status
   *   (optional) The HTTP redirect status code for the redirect. The default is
   *   302 Found.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
   *   A redirect response object that may be returned by the controller.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use new RedirectResponse(Url::fromRoute()) instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'redirect',
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
    'c870ab6e0d7ffe7b4591a13b0f5e6ff3' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the URL generator service.
   *
   * @return \\Drupal\\Core\\Routing\\UrlGeneratorInterface
   *   The URL generator service.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Use the url_generator service instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'getUrlGenerator',
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
    'af19fe0d9316c0ae05245455bb701de6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the URL generator service.
   *
   * @param \\Drupal\\Core\\Routing\\UrlGeneratorInterface $generator
   *   The url generator service.
   *
   * @return $this
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Routing',
         'uses' => 
        array (
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'setUrlGenerator',
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
    '938a398803d800d2bfd6839135647f42' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'bd3606769a0d2eb6ab4db6885cda896a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity type manager.
   *
   * @var \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'e5fe7e420d1f3a6e85025374531dd591' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The entity form builder.
   *
   * @var \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '7f4dff6bfcac5683651daaae9cc09bf7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The language manager.
   *
   * @var \\Drupal\\Core\\Language\\LanguageManagerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '5cafaef456bc9e8cd6e80b1f685011de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The configuration factory.
   *
   * @var \\Drupal\\Core\\Config\\ConfigFactoryInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'bba5bbefa13ff07a093fcac28782cda7' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The key-value storage.
   *
   * @var \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '7dca37083a9baf1d9cd24eefa71eb7c4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The current user service.
   *
   * @var \\Drupal\\Core\\Session\\AccountInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '13254ace51a699047308c9fd47f00062' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The state service.
   *
   * @var \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    'f18c79f33be18db79a17d8c475ce2c5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The module handler.
   *
   * @var \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '3e5a09cd2e20bf4e0e44d77772a612fb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The form builder.
   *
   * @var \\Drupal\\Core\\Form\\FormBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '708b1295a2c99f5541de73d688abfb69' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
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
    '728033631b4d64e74d5fd821d1645b11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the entity manager service.
   *
   * @return \\Drupal\\Core\\Entity\\EntityManagerInterface
   *   The entity manager service.
   *
   * @deprecated in drupal:8.0.0 and is removed from drupal:9.0.0.
   *   Most of the time static::entityTypeManager() is supposed to be used
   *   instead.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'entityManager',
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
    'e947fa2466e5fd87ca00b8dda937619e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the entity type manager.
   *
   * @return \\Drupal\\Core\\Entity\\EntityTypeManagerInterface
   *   The entity type manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'entityTypeManager',
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
    'edbcfa3bc08ff4ea4a3931f52e075952' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves the entity form builder.
   *
   * @return \\Drupal\\Core\\Entity\\EntityFormBuilderInterface
   *   The entity form builder.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'entityFormBuilder',
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
    'cf346b927ea2711370247d18330c2705' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the requested cache bin.
   *
   * @param string $bin
   *   (optional) The cache bin for which the cache object should be returned,
   *   defaults to \'default\'.
   *
   * @return \\Drupal\\Core\\Cache\\CacheBackendInterface
   *   The cache object associated with the specified bin.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'cache',
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
    'be0258baf13a5ee94e56d591b5c2e596' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Retrieves a configuration object.
   *
   * This is the main entry point to the configuration API. Calling
   * @code $this->config(\'book.admin\') @endcode will return a configuration
   * object in which the book module can store its administrative settings.
   *
   * @param string $name
   *   The name of the configuration object to retrieve. The name corresponds to
   *   a configuration file. For @code \\Drupal::config(\'book.admin\') @endcode,
   *   the config object returned will contain the contents of book.admin
   *   configuration file.
   *
   * @return \\Drupal\\Core\\Config\\Config
   *   A configuration object.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'config',
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
    'efd75d7cd02cec85afa7c0b29cf81674' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a key/value storage collection.
   *
   * @param string $collection
   *   Name of the key/value collection to return.
   *
   * @return \\Drupal\\Core\\KeyValueStore\\KeyValueStoreInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'keyValue',
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
    '6ee569a284afd40a6731b549c6b30cdc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the state storage service.
   *
   * Use this to store machine-generated data, local to a specific environment
   * that does not need deploying and does not need human editing; for example,
   * the last time cron was run. Data which needs to be edited by humans and
   * needs to be the same across development, production, etc. environments
   * (for example, the system maintenance message) should use config() instead.
   *
   * @return \\Drupal\\Core\\State\\StateInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'state',
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
    '802f6cd72ddfa14697d2bf3eaf542cac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the module handler.
   *
   * @return \\Drupal\\Core\\Extension\\ModuleHandlerInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'moduleHandler',
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
    'bde36bbe12bacab5ee7a22b58c77af29' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the form builder service.
   *
   * @return \\Drupal\\Core\\Form\\FormBuilderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'formBuilder',
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
    '57cdec49df0593d09c409f5b0ca96912' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the current user.
   *
   * @return \\Drupal\\Core\\Session\\AccountInterface
   *   The current user.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'currentUser',
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
    '27c214895172474b9ba71c35e9087259' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the language manager service.
   *
   * @return \\Drupal\\Core\\Language\\LanguageManagerInterface
   *   The language manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'languageManager',
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
    '69d4a7010a301cf2f5af427ce831a50a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns a redirect response object for the specified route.
   *
   * @param string $route_name
   *   The name of the route to which to redirect.
   * @param array $route_parameters
   *   (optional) Parameters for the route.
   * @param array $options
   *   (optional) An associative array of additional options.
   * @param int $status
   *   (optional) The HTTP redirect status code for the redirect. The default is
   *   302 Found.
   *
   * @return \\Symfony\\Component\\HttpFoundation\\RedirectResponse
   *   A redirect response object that may be returned by the controller.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'redirect',
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
    '43a2069e1ac6ae0a360056e129836675' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the service container.
   *
   * This method is marked private to prevent sub-classes from retrieving
   * services from the container through it. Instead,
   * \\Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface should be used
   * for injecting services.
   *
   * @return \\Symfony\\Component\\DependencyInjection\\ContainerInterface
   *   The service container.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Controller',
         'uses' => 
        array (
          'containerinjectioninterface' => 'Drupal\\Core\\DependencyInjection\\ContainerInjectionInterface',
          'loggerchanneltrait' => 'Drupal\\Core\\Logger\\LoggerChannelTrait',
          'linkgeneratortrait' => 'Drupal\\Core\\Routing\\LinkGeneratorTrait',
          'redirectdestinationtrait' => 'Drupal\\Core\\Routing\\RedirectDestinationTrait',
          'urlgeneratortrait' => 'Drupal\\Core\\Routing\\UrlGeneratorTrait',
          'stringtranslationtrait' => 'Drupal\\Core\\StringTranslation\\StringTranslationTrait',
          'url' => 'Drupal\\Core\\Url',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'messengertrait' => 'Drupal\\Core\\Messenger\\MessengerTrait',
          'redirectresponse' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        ),
         'className' => 'Drupal\\Core\\Controller\\ControllerBase',
         'functionName' => 'container',
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