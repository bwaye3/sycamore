<?php

namespace Drupal\Core\EventSubscriber;

<<<<<<< HEAD
use Symfony\Cmf\Component\Routing\RouteProviderInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
=======
use Drupal\Core\Routing\RouteProviderInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
>>>>>>> dev
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\Route;

/**
 * Handles options requests.
 *
<<<<<<< HEAD
 * Therefore it sends a options response using all methods on all possible
=======
 * Therefore it sends an options response using all methods on all possible
>>>>>>> dev
 * routes.
 */
class OptionsRequestSubscriber implements EventSubscriberInterface {

  /**
   * The route provider.
   *
<<<<<<< HEAD
   * @var \Symfony\Cmf\Component\Routing\RouteProviderInterface
=======
   * @var \Drupal\Core\Routing\RouteProviderInterface
>>>>>>> dev
   */
  protected $routeProvider;

  /**
   * Creates a new OptionsRequestSubscriber instance.
   *
<<<<<<< HEAD
   * @param \Symfony\Cmf\Component\Routing\RouteProviderInterface $route_provider
=======
   * @param \Drupal\Core\Routing\RouteProviderInterface $route_provider
>>>>>>> dev
   *   The route provider.
   */
  public function __construct(RouteProviderInterface $route_provider) {
    $this->routeProvider = $route_provider;
  }

  /**
   * Tries to handle the options request.
   *
<<<<<<< HEAD
   * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event
   *   The request event.
   */
  public function onRequest(GetResponseEvent $event) {
=======
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   The request event.
   */
  public function onRequest(RequestEvent $event) {
>>>>>>> dev
    if ($event->getRequest()->isMethod('OPTIONS')) {
      $routes = $this->routeProvider->getRouteCollectionForRequest($event->getRequest());
      // In case we don't have any routes, a 403 should be thrown by the normal
      // request handling.
      if (count($routes) > 0) {
        // Flatten and unique the available methods.
        $methods = array_reduce($routes->all(), function ($methods, Route $route) {
          return array_merge($methods, $route->getMethods());
        }, []);
        $methods = array_unique($methods);
        $response = new Response('', 200, ['Allow' => implode(', ', $methods)]);
        $event->setResponse($response);
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    // Set a high priority so it is executed before routing.
    $events[KernelEvents::REQUEST][] = ['onRequest', 1000];
    return $events;
  }

}
