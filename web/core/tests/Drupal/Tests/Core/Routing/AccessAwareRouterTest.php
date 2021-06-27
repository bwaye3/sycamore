<?php

namespace Drupal\Tests\Core\Routing;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\AccessAwareRouter;
use Drupal\Core\Routing\AccessAwareRouterInterface;
use Drupal\Tests\UnitTestCase;
<<<<<<< HEAD
use Symfony\Cmf\Component\Routing\RouteObjectInterface;
=======
use Drupal\Core\Routing\RouteObjectInterface;
>>>>>>> dev
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\Routing\Route;

/**
 * @coversDefaultClass \Drupal\Core\Routing\AccessAwareRouter
 * @group Routing
 */
class AccessAwareRouterTest extends UnitTestCase {

  /**
   * @var \Symfony\Component\Routing\Route
   */
  protected $route;

  /**
<<<<<<< HEAD
   * @var \Symfony\Cmf\Component\Routing\ChainRouter|\PHPUnit\Framework\MockObject\MockObject
   */
  protected $chainRouter;
=======
   * @var \Drupal\Core\Routing\Router|\PHPUnit\Framework\MockObject\MockObject
   */
  protected $coreRouter;
>>>>>>> dev

  /**
   * @var \Drupal\Core\Access\AccessManagerInterface|\PHPUnit\Framework\MockObject\MockObject
   */
  protected $accessManager;

  /**
   * @var \Drupal\Core\Session\AccountInterface||\PHPUnit\Framework\MockObject\MockObject
   */
  protected $currentUser;

  /**
   * @var \Drupal\Core\Routing\AccessAwareRouter
   */
<<<<<<< HEAD
  protected $router;
=======
  protected $accessAwareRouter;
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->route = new Route('test');
    $this->accessManager = $this->createMock('Drupal\Core\Access\AccessManagerInterface');
    $this->currentUser = $this->createMock('Drupal\Core\Session\AccountInterface');
  }

  /**
   * Sets up a chain router with matchRequest.
   */
  protected function setupRouter() {
<<<<<<< HEAD
    $this->chainRouter = $this->getMockBuilder('Symfony\Cmf\Component\Routing\ChainRouter')
      ->disableOriginalConstructor()
      ->getMock();
    $this->chainRouter->expects($this->once())
      ->method('matchRequest')
      ->will($this->returnValue([RouteObjectInterface::ROUTE_OBJECT => $this->route]));
    $this->router = new AccessAwareRouter($this->chainRouter, $this->accessManager, $this->currentUser);
=======
    $this->router = $this->getMockBuilder('Drupal\Core\Routing\Router')
      ->disableOriginalConstructor()
      ->getMock();
    $this->router->expects($this->once())
      ->method('matchRequest')
      ->will($this->returnValue([RouteObjectInterface::ROUTE_OBJECT => $this->route]));
    $this->accessAwareRouter = new AccessAwareRouter($this->router, $this->accessManager, $this->currentUser);
>>>>>>> dev
  }

  /**
   * Tests the matchRequest() function for access allowed.
   */
  public function testMatchRequestAllowed() {
    $this->setupRouter();
    $request = new Request();
    $access_result = AccessResult::allowed();
    $this->accessManager->expects($this->once())
      ->method('checkRequest')
      ->with($request)
      ->willReturn($access_result);
<<<<<<< HEAD
    $parameters = $this->router->matchRequest($request);
=======
    $parameters = $this->accessAwareRouter->matchRequest($request);
>>>>>>> dev
    $expected = [
      RouteObjectInterface::ROUTE_OBJECT => $this->route,
      AccessAwareRouterInterface::ACCESS_RESULT => $access_result,
    ];
    $this->assertSame($expected, $request->attributes->all());
    $this->assertSame($expected, $parameters);
  }

  /**
   * Tests the matchRequest() function for access denied.
   */
  public function testMatchRequestDenied() {
    $this->setupRouter();
    $request = new Request();
    $access_result = AccessResult::forbidden();
    $this->accessManager->expects($this->once())
      ->method('checkRequest')
      ->with($request)
      ->willReturn($access_result);
    $this->expectException(AccessDeniedHttpException::class);
<<<<<<< HEAD
    $this->router->matchRequest($request);
=======
    $this->accessAwareRouter->matchRequest($request);
>>>>>>> dev
  }

  /**
   * Tests the matchRequest() function for access denied with reason message.
   */
  public function testCheckAccessResultWithReason() {
    $this->setupRouter();
    $request = new Request();
    $reason = $this->getRandomGenerator()->string();
    $access_result = AccessResult::forbidden($reason);
    $this->accessManager->expects($this->once())
      ->method('checkRequest')
      ->with($request)
      ->willReturn($access_result);
    $this->expectException(AccessDeniedHttpException::class);
    $this->expectExceptionMessage($reason);
<<<<<<< HEAD
    $this->router->matchRequest($request);
=======
    $this->accessAwareRouter->matchRequest($request);
>>>>>>> dev
  }

  /**
   * Ensure that methods are passed to the wrapped router.
   *
   * @covers ::__call
   */
  public function testCall() {
    $mock_router = $this->createMock('Symfony\Component\Routing\RouterInterface');

<<<<<<< HEAD
    $this->chainRouter = $this->getMockBuilder('Symfony\Cmf\Component\Routing\ChainRouter')
      ->disableOriginalConstructor()
      ->setMethods(['add'])
      ->getMock();
    $this->chainRouter->expects($this->once())
      ->method('add')
      ->with($mock_router)
      ->willReturnSelf();
    $this->router = new AccessAwareRouter($this->chainRouter, $this->accessManager, $this->currentUser);

    $this->router->add($mock_router);
=======
    $this->router = $this->getMockBuilder('Drupal\Core\Routing\Router')
      ->disableOriginalConstructor()
      ->setMethods(['add'])
      ->getMock();
    $this->router->expects($this->once())
      ->method('add')
      ->with($mock_router)
      ->willReturnSelf();
    $this->accessAwareRouter = new AccessAwareRouter($this->router, $this->accessManager, $this->currentUser);

    $this->accessAwareRouter->add($mock_router);
>>>>>>> dev
  }

}
