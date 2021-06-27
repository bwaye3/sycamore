<?php

namespace Drupal\Tests\Core\DependencyInjection;

use Drupal\Component\FileCache\FileCacheFactory;
use Drupal\Core\DependencyInjection\ContainerBuilder;
use Drupal\Core\DependencyInjection\YamlFileLoader;
use Drupal\Tests\UnitTestCase;
use org\bovigo\vfs\vfsStream;

/**
 * @coversDefaultClass \Drupal\Core\DependencyInjection\YamlFileLoader
 * @group DependencyInjection
 */
class YamlFileLoaderTest extends UnitTestCase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    FileCacheFactory::setPrefix('example');
  }

  public function testParseDefinitionsWithProvider() {
    $yml = <<<YAML
services:
<<<<<<< HEAD
  example_service:
    class: \Drupal\Core\ExampleClass
=======
  example_service_1:
    class: \Drupal\Core\ExampleClass
  example_service_2: '@example_service_1'
>>>>>>> dev
  example_private_service:
    class: \Drupal\Core\ExampleClass
    public: false
YAML;

    vfsStream::setup('drupal', NULL, [
      'modules' => [
        'example' => [
          'example.yml' => $yml,
        ],
      ],
    ]);

    $builder = new ContainerBuilder();
    $yaml_file_loader = new YamlFileLoader($builder);
    $yaml_file_loader->load('vfs://drupal/modules/example/example.yml');

<<<<<<< HEAD
    $this->assertEquals(['_provider' => [['provider' => 'example']]], $builder->getDefinition('example_service')->getTags());
    $this->assertTrue($builder->getDefinition('example_service')->isPublic());
    $this->assertFalse($builder->getDefinition('example_private_service')->isPublic());
    $builder->compile();
    $this->assertTrue($builder->has('example_service'));
=======
    $this->assertEquals(['_provider' => [['provider' => 'example']]], $builder->getDefinition('example_service_1')->getTags());
    $this->assertEquals('example_service_1', $builder->getAlias('example_service_2')->__toString());
    $this->assertTrue($builder->getDefinition('example_service_1')->isPublic());
    $this->assertFalse($builder->getDefinition('example_private_service')->isPublic());
    $builder->compile();
    $this->assertTrue($builder->has('example_service_1'));
>>>>>>> dev
    $this->assertFalse($builder->has('example_private_service'));
  }

}
