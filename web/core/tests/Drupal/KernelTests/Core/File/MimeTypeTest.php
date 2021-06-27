<?php

namespace Drupal\KernelTests\Core\File;

<<<<<<< HEAD
use Drupal\Component\Render\FormattableMarkup;

=======
>>>>>>> dev
/**
 * Tests filename mimetype detection.
 *
 * @group File
 */
class MimeTypeTest extends FileTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['file_test'];

  /**
   * Test mapping of mimetypes from filenames.
=======
  protected static $modules = ['file_test'];

  /**
   * Tests mapping of mimetypes from filenames.
>>>>>>> dev
   */
  public function testFileMimeTypeDetection() {
    $prefixes = ['public://', 'private://', 'temporary://', 'dummy-remote://'];

    $test_case = [
      'test.jar' => 'application/java-archive',
      'test.jpeg' => 'image/jpeg',
      'test.JPEG' => 'image/jpeg',
      'test.jpg' => 'image/jpeg',
      'test.jar.jpg' => 'image/jpeg',
      'test.jpg.jar' => 'application/java-archive',
      'test.pcf.Z' => 'application/x-font',
      'pcf.z' => 'application/octet-stream',
      'jar' => 'application/octet-stream',
      'some.junk' => 'application/octet-stream',
      'foo.file_test_1' => 'madeup/file_test_1',
      'foo.file_test_2' => 'madeup/file_test_2',
      'foo.doc' => 'madeup/doc',
      'test.ogg' => 'audio/ogg',
    ];

    $guesser = $this->container->get('file.mime_type.guesser');
    // Test using default mappings.
    foreach ($test_case as $input => $expected) {
      // Test stream [URI].
      foreach ($prefixes as $prefix) {
<<<<<<< HEAD
        $output = $guesser->guess($prefix . $input);
        $this->assertIdentical($output, $expected, new FormattableMarkup('Mimetype for %input is %output (expected: %expected).', ['%input' => $prefix . $input, '%output' => $output, '%expected' => $expected]));
      }

      // Test normal path equivalent
      $output = $guesser->guess($input);
      $this->assertIdentical($output, $expected, new FormattableMarkup('Mimetype (using default mappings) for %input is %output (expected: %expected).', ['%input' => $input, '%output' => $output, '%expected' => $expected]));
=======
        $output = $guesser->guessMimeType($prefix . $input);
        $this->assertSame($expected, $output);
      }

      // Test normal path equivalent
      $output = $guesser->guessMimeType($input);
      $this->assertSame($expected, $output);
>>>>>>> dev
    }

    // Now test the extension guesser by passing in a custom mapping.
    $mapping = [
      'mimetypes' => [
        0 => 'application/java-archive',
        1 => 'image/jpeg',
      ],
      'extensions' => [
         'jar' => 0,
         'jpg' => 1,
      ],
    ];

    $test_case = [
      'test.jar' => 'application/java-archive',
      'test.jpeg' => 'application/octet-stream',
      'test.jpg' => 'image/jpeg',
      'test.jar.jpg' => 'image/jpeg',
      'test.jpg.jar' => 'application/java-archive',
      'test.pcf.z' => 'application/octet-stream',
      'pcf.z' => 'application/octet-stream',
      'jar' => 'application/octet-stream',
      'some.junk' => 'application/octet-stream',
      'foo.file_test_1' => 'application/octet-stream',
      'foo.file_test_2' => 'application/octet-stream',
      'foo.doc' => 'application/octet-stream',
      'test.ogg' => 'application/octet-stream',
    ];
    $extension_guesser = $this->container->get('file.mime_type.guesser.extension');
    $extension_guesser->setMapping($mapping);

    foreach ($test_case as $input => $expected) {
<<<<<<< HEAD
      $output = $extension_guesser->guess($input);
      $this->assertIdentical($output, $expected, new FormattableMarkup('Mimetype (using passed-in mappings) for %input is %output (expected: %expected).', ['%input' => $input, '%output' => $output, '%expected' => $expected]));
    }
  }

=======
      $output = $extension_guesser->guessMimeType($input);
      $this->assertSame($expected, $output);
    }
  }

  /**
   * Test deprecations.
   *
   * @group legacy
   */
  public function testFileMimeTypeDetectionDeprecation() {
    $this->expectDeprecation('The "Symfony\Component\HttpFoundation\File\MimeType\MimeTypeGuesser" class is deprecated since Symfony 4.3, use "Symfony\Component\Mime\MimeTypes" instead.');
    $this->expectDeprecation('The "Symfony\Component\HttpFoundation\File\MimeType\FileBinaryMimeTypeGuesser" class is deprecated since Symfony 4.3, use "Symfony\Component\Mime\FileBinaryMimeTypeGuesser" instead.');
    $this->expectDeprecation('The "Symfony\Component\HttpFoundation\File\MimeType\FileinfoMimeTypeGuesser" class is deprecated since Symfony 4.3, use "Symfony\Component\Mime\FileinfoMimeTypeGuesser" instead.');
    $this->expectDeprecation('Drupal\Core\File\MimeType\MimeTypeGuesser::guess() is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Use ::guessMimeType() instead. See https://www.drupal.org/node/3133341');
    $guesser = $this->container->get('file.mime_type.guesser');
    $output = $guesser->guess('public://test.jar');
    $this->assertSame('application/java-archive', $output);
  }

>>>>>>> dev
}
