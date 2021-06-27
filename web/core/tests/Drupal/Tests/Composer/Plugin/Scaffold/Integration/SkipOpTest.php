<?php

namespace Drupal\Tests\Composer\Plugin\Scaffold\Integration;

use Drupal\Composer\Plugin\Scaffold\Operations\SkipOp;
use Drupal\Composer\Plugin\Scaffold\ScaffoldOptions;
use Drupal\Tests\Composer\Plugin\Scaffold\Fixtures;
<<<<<<< HEAD
use Drupal\Tests\PhpunitCompatibilityTrait;
=======
use Drupal\Tests\Traits\PhpUnitWarnings;
>>>>>>> dev
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Drupal\Composer\Plugin\Scaffold\Operations\SkipOp
 *
 * @group Scaffold
 */
class SkipOpTest extends TestCase {
<<<<<<< HEAD
  use PhpunitCompatibilityTrait;
=======
  use PhpUnitWarnings;
>>>>>>> dev

  /**
   * @covers ::process
   */
  public function testProcess() {
    $fixtures = new Fixtures();
    $destination = $fixtures->destinationPath('[web-root]/robots.txt');
    $options = ScaffoldOptions::create([]);
    $sut = new SkipOp();
    // Assert that there is no target file before we run our test.
<<<<<<< HEAD
    $this->assertFileNotExists($destination->fullPath());
    // Test the system under test.
    $sut->process($destination, $fixtures->io(), $options);
    // Assert that the target file was not created.
    $this->assertFileNotExists($destination->fullPath());
=======
    $this->assertFileDoesNotExist($destination->fullPath());
    // Test the system under test.
    $sut->process($destination, $fixtures->io(), $options);
    // Assert that the target file was not created.
    $this->assertFileDoesNotExist($destination->fullPath());
>>>>>>> dev
    // Confirm that expected output was written to our io fixture.
    $output = $fixtures->getOutput();
    $this->assertStringContainsString('Skip [web-root]/robots.txt: disabled', $output);
  }

}
