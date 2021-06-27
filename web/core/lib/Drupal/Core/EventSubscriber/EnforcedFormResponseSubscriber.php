<?php

namespace Drupal\Core\EventSubscriber;

use Drupal\Core\Form\EnforcedResponse;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
=======
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
>>>>>>> dev
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Handle the EnforcedResponseException and deliver an EnforcedResponse.
 */
class EnforcedFormResponseSubscriber implements EventSubscriberInterface {

  /**
   * Replaces the response in case an EnforcedResponseException was thrown.
   */
<<<<<<< HEAD
  public function onKernelException(GetResponseForExceptionEvent $event) {
    if ($response = EnforcedResponse::createFromException($event->getException())) {
=======
  public function onKernelException(ExceptionEvent $event) {
    if ($response = EnforcedResponse::createFromException($event->getThrowable())) {
>>>>>>> dev
      // Setting the response stops the event propagation.
      $event->setResponse($response);
    }
  }

  /**
   * Unwraps an enforced response.
   */
<<<<<<< HEAD
  public function onKernelResponse(FilterResponseEvent $event) {
    $response = $event->getResponse();
    if ($response instanceof EnforcedResponse && $event->isMasterRequest()) {
=======
  public function onKernelResponse(ResponseEvent $event) {
    $response = $event->getResponse();
    if ($response instanceof EnforcedResponse && $event->isMainRequest()) {
>>>>>>> dev
      $event->setResponse($response->getResponse());
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::EXCEPTION] = ['onKernelException', 128];
    $events[KernelEvents::RESPONSE] = ['onKernelResponse', 128];

    return $events;
  }

}
