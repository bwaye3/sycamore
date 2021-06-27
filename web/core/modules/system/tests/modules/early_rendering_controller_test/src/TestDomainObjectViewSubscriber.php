<?php

namespace Drupal\early_rendering_controller_test;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent;
=======
use Symfony\Component\HttpKernel\Event\ViewEvent;
>>>>>>> dev
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * View subscriber for turning TestDomainObject objects into Response objects.
 */
class TestDomainObjectViewSubscriber implements EventSubscriberInterface {

  /**
   * Sets a response given a TestDomainObject instance.
   *
<<<<<<< HEAD
   * @param \Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent $event
   *   The event to process.
   */
  public function onViewTestDomainObject(GetResponseForControllerResultEvent $event) {
=======
   * @param \Symfony\Component\HttpKernel\Event\ViewEvent $event
   *   The event to process.
   */
  public function onViewTestDomainObject(ViewEvent $event) {
>>>>>>> dev
    $result = $event->getControllerResult();

    if ($result instanceof TestDomainObject) {
      if ($result instanceof AttachmentsTestDomainObject) {
        $event->setResponse(new AttachmentsTestResponse('AttachmentsTestDomainObject'));
      }
      elseif ($result instanceof CacheableTestDomainObject) {
        $event->setResponse(new CacheableTestResponse('CacheableTestDomainObject'));
      }
      else {
        $event->setResponse(new Response('TestDomainObject'));
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public static function getSubscribedEvents() {
    $events[KernelEvents::VIEW][] = ['onViewTestDomainObject'];

    return $events;
  }

}
