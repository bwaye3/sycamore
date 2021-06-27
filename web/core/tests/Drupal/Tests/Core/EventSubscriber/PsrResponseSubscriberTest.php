<?php

namespace Drupal\Tests\Core\EventSubscriber;

use Drupal\Tests\UnitTestCase;
use Drupal\Core\EventSubscriber\PsrResponseSubscriber;
<<<<<<< HEAD
=======
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
>>>>>>> dev

/**
 * @coversDefaultClass \Drupal\Core\EventSubscriber\PsrResponseSubscriber
 * @group EventSubscriber
 */
class PsrResponseSubscriberTest extends UnitTestCase {

  /**
   * The tested path root subscriber.
   *
   * @var \Drupal\Core\EventSubscriber\PsrResponseSubscriber
   */
  protected $psrResponseSubscriber;

  /**
   * The tested path root subscriber.
   *
   * @var \Symfony\Bridge\PsrHttpMessage\HttpFoundationFactoryInterface|\PHPUnit\Framework\MockObject\MockObject
   */
  protected $httpFoundationFactoryMock;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    $factory = $this->getMockBuilder('Symfony\Bridge\PsrHttpMessage\HttpFoundationFactoryInterface')
      ->disableOriginalConstructor()
      ->getMock();
    $factory
      ->expects($this->any())
      ->method('createResponse')
      ->willReturn($this->createMock('Symfony\Component\HttpFoundation\Response'));

    $this->httpFoundationFactoryMock = $factory;

    $this->psrResponseSubscriber = new PsrResponseSubscriber($this->httpFoundationFactoryMock);
  }

  /**
   * Tests altering and finished event.
   *
   * @covers ::onKernelView
   */
  public function testConvertsControllerResult() {
<<<<<<< HEAD
    $event = $this->createEventMock($this->createMock('Psr\Http\Message\ResponseInterface'));
    $event
      ->expects($this->once())
      ->method('setResponse')
      ->with($this->isInstanceOf('Symfony\Component\HttpFoundation\Response'));
    $this->psrResponseSubscriber->onKernelView($event);
=======
    $event = $this->createEvent($this->createMock('Psr\Http\Message\ResponseInterface'));
    $this->psrResponseSubscriber->onKernelView($event);
    $this->assertInstanceOf(Response::class, $event->getResponse());
>>>>>>> dev
  }

  /**
   * Tests altering and finished event.
   *
   * @covers ::onKernelView
   */
  public function testDoesNotConvertControllerResult() {
<<<<<<< HEAD
    $event = $this->createEventMock([]);
    $event
      ->expects($this->never())
      ->method('setResponse');
    $this->psrResponseSubscriber->onKernelView($event);
    $event = $this->createEventMock(NULL);
    $event
      ->expects($this->never())
      ->method('setResponse');
    $this->psrResponseSubscriber->onKernelView($event);
  }

  /**
   * Sets up an alias event that return $controllerResult.
=======
    $event = $this->createEvent([]);
    $this->psrResponseSubscriber->onKernelView($event);
    $this->assertNull($event->getResponse());

    $event = $this->createEvent(NULL);
    $this->psrResponseSubscriber->onKernelView($event);
    $this->assertNull($event->getResponse());
  }

  /**
   * Sets up an event that returns $controllerResult.
>>>>>>> dev
   *
   * @param mixed $controller_result
   *   The return Object.
   *
<<<<<<< HEAD
   * @return \Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent|\PHPUnit\Framework\MockObject\MockObject
   *   A mock object to test.
   */
  protected function createEventMock($controller_result) {
    $event = $this->getMockBuilder('Symfony\Component\HttpKernel\Event\GetResponseForControllerResultEvent')
      ->disableOriginalConstructor()
      ->getMock();
    $event
      ->expects($this->once())
      ->method('getControllerResult')
      ->willReturn($controller_result);
    return $event;
=======
   * @return \Symfony\Component\HttpKernel\Event\ViewEvent
   *   A ViewEvent object to test.
   */
  protected function createEvent($controller_result) {
    return new ViewEvent(
      $this->createMock(HttpKernelInterface::class),
      $this->createMock(Request::class),
      HttpKernelInterface::MASTER_REQUEST,
      $controller_result
    );
>>>>>>> dev
  }

}
