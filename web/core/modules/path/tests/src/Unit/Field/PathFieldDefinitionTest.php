<?php

namespace Drupal\Tests\path\Unit\Field;

use Drupal\Tests\Core\Field\BaseFieldDefinitionTestBase;

/**
 * @coversDefaultClass \Drupal\Core\Field\BaseFieldDefinition
 * @group path
 */
class PathFieldDefinitionTest extends BaseFieldDefinitionTestBase {

  /**
   * {@inheritdoc}
   */
  protected function getPluginId() {
    return 'path';
  }

  /**
   * {@inheritdoc}
   */
  protected function getModuleAndPath() {
<<<<<<< HEAD
    return ['path', dirname(dirname(dirname(dirname(__DIR__))))];
=======
    return ['path', dirname(__DIR__, 4)];
>>>>>>> dev
  }

  /**
   * @covers ::getColumns
   * @covers ::getSchema
   */
  public function testGetColumns() {
    $this->assertSame([], $this->definition->getColumns());
  }

}
