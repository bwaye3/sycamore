<?php

namespace Drupal\Tests\Core\Test;

<<<<<<< HEAD
use Drupal\Tests\UnitTestCase;
use Drupal\Tests\BrowserTestBase;
use Behat\Mink\Driver\GoutteDriver;
=======
use Behat\Mink\Driver\GoutteDriver;
use Drupal\Tests\DrupalTestBrowser;
use Drupal\Tests\UnitTestCase;
use Drupal\Tests\BrowserTestBase;
use Behat\Mink\Driver\BrowserKitDriver;
>>>>>>> dev
use Behat\Mink\Session;
use Goutte\Client;

/**
 * @coversDefaultClass \Drupal\Tests\BrowserTestBase
 * @group Test
 */
class BrowserTestBaseTest extends UnitTestCase {

  protected function mockBrowserTestBaseWithDriver($driver) {
    $session = $this->getMockBuilder(Session::class)
      ->disableOriginalConstructor()
      ->setMethods(['getDriver'])
      ->getMock();
<<<<<<< HEAD
    $session->expects($this->once())
=======
    $session->expects($this->any())
>>>>>>> dev
      ->method('getDriver')
      ->willReturn($driver);

    $btb = $this->getMockBuilder(BrowserTestBase::class)
      ->disableOriginalConstructor()
      ->setMethods(['getSession'])
      ->getMockForAbstractClass();
<<<<<<< HEAD
    $btb->expects($this->once())
=======
    $btb->expects($this->any())
>>>>>>> dev
      ->method('getSession')
      ->willReturn($session);

    return $btb;
  }

  /**
   * @covers ::getHttpClient
   */
  public function testGetHttpClient() {
    // Our stand-in for the Guzzle client object.
    $expected = new \stdClass();

<<<<<<< HEAD
    $browserkit_client = $this->getMockBuilder(Client::class)
=======
    $browserkit_client = $this->getMockBuilder(DrupalTestBrowser::class)
>>>>>>> dev
      ->setMethods(['getClient'])
      ->getMockForAbstractClass();
    $browserkit_client->expects($this->once())
      ->method('getClient')
      ->willReturn($expected);

<<<<<<< HEAD
    // Because the driver is a GoutteDriver, we'll get back a client.
    $driver = $this->getMockBuilder(GoutteDriver::class)
      ->setMethods(['getClient'])
      ->getMock();
    $driver->expects($this->once())
      ->method('getClient')
      ->willReturn($browserkit_client);

=======
    // Because the driver is a BrowserKitDriver, we'll get back a client.
    $driver = new BrowserKitDriver($browserkit_client);
    $btb = $this->mockBrowserTestBaseWithDriver($driver);

    $ref_gethttpclient = new \ReflectionMethod($btb, 'getHttpClient');
    $ref_gethttpclient->setAccessible(TRUE);

    $this->assertSame(get_class($expected), get_class($ref_gethttpclient->invoke($btb)));
  }

  /**
   * @covers ::getHttpClient
   *
   * @group legacy
   */
  public function testGetHttpClientGoutte() {
    // Our stand-in for the Guzzle client object.
    $expected = new \stdClass();

    $browserkit_client = $this->getMockBuilder(Client::class)
      ->setMethods(['getClient'])
      ->getMockForAbstractClass();
    $browserkit_client->expects($this->once())
      ->method('getClient')
      ->willReturn($expected);

    // Because the driver is a GoutteDriver, we'll get back a client.
    $driver = new GoutteDriver($browserkit_client);
>>>>>>> dev
    $btb = $this->mockBrowserTestBaseWithDriver($driver);

    $ref_gethttpclient = new \ReflectionMethod($btb, 'getHttpClient');
    $ref_gethttpclient->setAccessible(TRUE);

    $this->assertSame(get_class($expected), get_class($ref_gethttpclient->invoke($btb)));
  }

  /**
   * @covers ::getHttpClient
   */
  public function testGetHttpClientException() {
<<<<<<< HEAD
    // A driver type that isn't GoutteDriver. This should cause a
=======
    // A driver type that isn't BrowserKitDriver. This should cause a
>>>>>>> dev
    // RuntimeException.
    $btb = $this->mockBrowserTestBaseWithDriver(new \stdClass());

    $ref_gethttpclient = new \ReflectionMethod($btb, 'getHttpClient');
    $ref_gethttpclient->setAccessible(TRUE);

    $this->expectException(\RuntimeException::class);
    $this->expectExceptionMessage('The Mink client type stdClass does not support getHttpClient().');
    $ref_gethttpclient->invoke($btb);
  }

  /**
<<<<<<< HEAD
   * Test that tearDown doesn't call cleanupEnvironment if setUp is not called.
=======
   * Tests that tearDown doesn't call cleanupEnvironment if setUp is not called.
>>>>>>> dev
   *
   * @covers ::tearDown
   */
  public function testTearDownWithoutSetUp() {
    $method = 'cleanupEnvironment';
    $this->assertTrue(method_exists(BrowserTestBase::class, $method));
    $btb = $this->getMockBuilder(BrowserTestBase::class)
      ->disableOriginalConstructor()
      ->setMethods([$method])
      ->getMockForAbstractClass();
    $btb->expects($this->never())->method($method);
    $ref_tearDown = new \ReflectionMethod($btb, 'tearDown');
    $ref_tearDown->setAccessible(TRUE);
    $ref_tearDown->invoke($btb);
  }

}
