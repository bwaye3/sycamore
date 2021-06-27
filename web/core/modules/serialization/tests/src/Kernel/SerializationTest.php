<?php

namespace Drupal\Tests\serialization\Kernel;

use Drupal\KernelTests\KernelTestBase;
use Symfony\Component\Serializer\Exception\UnexpectedValueException;

/**
 * Functional tests for serialization system.
 *
 * @group serialization
 */
class SerializationTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['serialization', 'serialization_test'];
=======
  protected static $modules = ['serialization', 'serialization_test'];
>>>>>>> dev

  /**
   * The serializer service to test.
   *
   * @var \Symfony\Component\Serializer\SerializerInterface
   */
  protected $serializer;

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->serializer = $this->container->get('serializer');
  }

  /**
   * Confirms that modules can register normalizers and encoders.
   */
  public function testSerializerComponentRegistration() {
    $object = new \stdClass();
    $format = 'serialization_test';
    $expected = 'Normalized by SerializationTestNormalizer, Encoded by SerializationTestEncoder';

    // Ensure the serialization invokes the expected normalizer and encoder.
<<<<<<< HEAD
    $this->assertIdentical($this->serializer->serialize($object, $format), $expected);
=======
    $this->assertSame($expected, $this->serializer->serialize($object, $format));
>>>>>>> dev

    // Ensure the serialization fails for an unsupported format.
    try {
      $this->serializer->serialize($object, 'unsupported_format');
      $this->fail('The serializer was expected to throw an exception for an unsupported format, but did not.');
    }
    catch (UnexpectedValueException $e) {
      // Expected exception; just continue testing.
    }
  }

}
