<?php

namespace Drupal\Core\EventSubscriber;

<<<<<<< HEAD
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
=======
use Symfony\Component\HttpKernel\Event\ResponseEvent;
>>>>>>> dev
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Response subscriber to add X-Generator header tag.
 */
class ResponseGeneratorSubscriber implements EventSubscriberInterface {

  /**
   * Sets extra X-Generator header on successful responses.
   *
<<<<<<< HEAD
   * @param \Symfony\Component\HttpKernel\Event\FilterResponseEvent $event
   *   The event to process.
   */
  public function onRespond(FilterResponseEvent $event) {
    if (!$event->isMasterRequest()) {
=======
   * @param \Symfony\Component\HttpKernel\Event\ResponseEvent $event
   *   The event to process.
   */
  public function onRespond(ResponseEvent $event) {
    if (!$event->isMainRequest()) {
>>>>>>> dev
      return;
    }

    $response = $event->getResponse();

    // Set the generator in the HTTP header.
    list($version) = explode('.', \Drupal::VERSION, 2);
    $response->headers->set('X-Generator', 'Drupal ' . $version . ' (https://www.drupal.org)');
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::RESPONSE][] = ['onRespond'];
    return $events;
  }

}
