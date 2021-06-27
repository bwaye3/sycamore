<?php

namespace Drupal\Tests\Composer\Plugin\Scaffold\Integration;

use Drupal\Composer\Plugin\Scaffold\Operations\ReplaceOp;
use Drupal\Composer\Plugin\Scaffold\ScaffoldOptions;
use Drupal\Tests\Composer\Plugin\Scaffold\Fixtures;
<<<<<<< HEAD
use Drupal\Tests\PhpunitCompatibilityTrait;
=======
use Drupal\Tests\Traits\PhpUnitWarnings;
>>>>>>> dev
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Drupal\Composer\Plugin\Scaffold\Operations\ReplaceOp
 *
 * @group Scaffold
 */
class ReplaceOpTest extends TestCase {
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
    $source = $fixtures->sourcePath('drupal-assets-fixture', 'robots.txt');
    $options = ScaffoldOptions::create([]);
    $sut = new ReplaceOp($source, TRUE);
    // Assert that there is no target file before we run our test.
<<<<<<< HEAD
    $this->assertFileNotExists($destination->fullPath());
=======
    $this->assertFileDoesNotExist($destination->fullPath());
>>>>>>> dev
    // Test the system under test.
    $sut->process($destination, $fixtures->io(), $options);
    // Assert that the target file was created.
    $this->assertFileExists($destination->fullPath());
    // Assert the target contained the contents from the correct scaffold file.
    $contents = trim(file_get_contents($destination->fullPath()));
    $this->assertEquals('# Test version of robots.txt from drupal/core.', $contents);
    // Confirm that expected output was written to our io fixture.
    $output = $fixtures->getOutput();
    $this->assertStringContainsString('Copy [web-root]/robots.txt from assets/robots.txt', $output);
  }

}
