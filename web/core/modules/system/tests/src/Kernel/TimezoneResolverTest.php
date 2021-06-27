<?php

namespace Drupal\Tests\system\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Drupal\Tests\user\Traits\UserCreationTrait;
use Symfony\Component\HttpFoundation\Request;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
=======
use Symfony\Component\HttpKernel\Event\RequestEvent;
>>>>>>> dev
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * @coversDefaultClass \Drupal\system\TimeZoneResolver
 * @group system
 */
class TimezoneResolverTest extends KernelTestBase {

  use UserCreationTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'system',
    'user',
  ];

  /**
   * Tests time zone resolution.
   */
  public function testGetTimeZone() {
    $this->installEntitySchema('user');
    $this->installSchema('system', ['sequences']);
    $this->installConfig(['system']);

    // Check the default test timezone.
    $this->assertEquals('Australia/Sydney', date_default_timezone_get());

    // Test the configured system timezone.
    $configFactory = $this->container->get('config.factory');
    $timeZoneConfig = $configFactory->getEditable('system.date');
    $timeZoneConfig->set('timezone.default', 'Australia/Adelaide');
    $timeZoneConfig->save();

    $eventDispatcher = $this->container->get('event_dispatcher');
    $kernel = $this->container->get('kernel');

<<<<<<< HEAD
    $eventDispatcher->dispatch(KernelEvents::REQUEST, new GetResponseEvent($kernel, Request::create('http://www.example.com'), HttpKernelInterface::MASTER_REQUEST));
=======
    $eventDispatcher->dispatch(new RequestEvent($kernel, Request::create('http://www.example.com'), HttpKernelInterface::MASTER_REQUEST, KernelEvents::REQUEST));
>>>>>>> dev

    $this->assertEquals('Australia/Adelaide', date_default_timezone_get());

    $user = $this->createUser([]);
    $user->set('timezone', 'Australia/Lord_Howe');
    $user->save();

    $this->setCurrentUser($user);

    $this->assertEquals('Australia/Lord_Howe', date_default_timezone_get());

  }

}
