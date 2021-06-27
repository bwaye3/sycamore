<?php

namespace Drupal\form_test\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
=======
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
>>>>>>> dev
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Test event subscriber to add new attributes to the request.
 */
class FormTestEventSubscriber implements EventSubscriberInterface {

  /**
   * Adds custom attributes to the request object.
   *
<<<<<<< HEAD
   * @param \Symfony\Component\HttpKernel\Event\GetResponseEvent $event
   *   The kernel request event.
   */
  public function onKernelRequest(GetResponseEvent $event) {
=======
   * @param \Symfony\Component\HttpKernel\Event\RequestEvent $event
   *   The kernel request event.
   */
  public function onKernelRequest(RequestEvent $event) {
>>>>>>> dev
    $request = $event->getRequest();
    $request->attributes->set('custom_attributes', 'custom_value');
    $request->attributes->set('request_attribute', 'request_value');
  }

  /**
   * Adds custom headers to the response.
   *
<<<<<<< HEAD
   * @param \Symfony\Component\HttpKernel\Event\FilterResponseEvent $event
   *   The kernel request event.
   */
  public function onKernelResponse(FilterResponseEvent $event) {
=======
   * @param \Symfony\Component\HttpKernel\Event\ResponseEvent $event
   *   The kernel response event.
   */
  public function onKernelResponse(ResponseEvent $event) {
>>>>>>> dev
    $response = $event->getResponse();
    $response->headers->set('X-Form-Test-Response-Event', 'invoked');
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = ['onKernelRequest'];
    $events[KernelEvents::RESPONSE][] = ['onKernelResponse'];
    return $events;
  }

}
