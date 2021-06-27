<?php

namespace Drupal\BuildTests\Framework\Tests;

use Drupal\BuildTests\QuickStart\QuickStartTestBase;
<<<<<<< HEAD
=======
use Drupal\Core\Database\Driver\sqlite\Install\Tasks;
>>>>>>> dev

/**
 * @coversDefaultClass \Drupal\BuildTests\Framework\BuildTestBase
 * @group Build
<<<<<<< HEAD
=======
 * @requires extension pdo_sqlite
>>>>>>> dev
 */
class HtRouterTest extends QuickStartTestBase {

  /**
   * @covers ::instantiateServer
   */
  public function testHtRouter() {
<<<<<<< HEAD
=======
    if (version_compare(\SQLite3::version()['versionString'], Tasks::SQLITE_MINIMUM_VERSION) < 0) {
      $this->markTestSkipped();
    }

>>>>>>> dev
    $this->copyCodebase();
    $this->executeCommand('COMPOSER_DISCARD_CHANGES=true composer install --no-dev --no-interaction');
    $this->assertErrorOutputContains('Generating autoload files');
    $this->installQuickStart('minimal');
    $this->formLogin($this->adminUsername, $this->adminPassword);
    $this->visit('/.well-known/change-password');
    $this->assertDrupalVisit();
    $url = $this->getMink()->getSession()->getCurrentUrl();
    $this->assertEquals('http://localhost:' . $this->getPortNumber() . '/user/1/edit', $url);
  }

}
