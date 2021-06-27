<?php

namespace Drupal\Tests\Core\Serialization;

use Drupal\Component\Serialization\SerializationInterface;
use Drupal\Core\Serialization\Yaml;
use Drupal\Core\Site\Settings;
use Drupal\Tests\UnitTestCase;

/**
 * @coversDefaultClass \Drupal\Core\Serialization\Yaml
 * @group Serialization
 */
class YamlTest extends UnitTestCase {

  /**
<<<<<<< HEAD
   * Test that the overridden serializer is called.
=======
   * Tests that the overridden serializer is called.
>>>>>>> dev
   *
   * @covers ::getSerializer
   * @runInSeparateProcess
   */
<<<<<<< HEAD
  public function testGetSeralization() {
=======
  public function testGetSerialization() {
>>>>>>> dev
    new Settings(['yaml_parser_class' => YamlParserProxy::class]);

    $this->assertEquals(YamlParserProxy::class, Settings::get('yaml_parser_class'));

    $mock = $this->getMockBuilder('\stdClass')
      ->setMethods(['encode', 'decode', 'getFileExtension'])
      ->getMock();
    $mock
      ->expects($this->once())
      ->method('decode');
    YamlParserProxy::setMock($mock);
    Yaml::decode('---');

    new Settings([]);
  }

}

class YamlParserProxy implements SerializationInterface {

  /**
   * @var \Drupal\Component\Serialization\SerializationInterface
   */
  protected static $mock;

  public static function setMock($mock) {
    static::$mock = $mock;
  }

  public static function encode($data) {
    return static::$mock->encode($data);
  }

  public static function decode($raw) {
    return static::$mock->decode($raw);
  }

  public static function getFileExtension() {
    return static::$mock->getFileExtension();
  }

}
