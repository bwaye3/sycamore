<?php

namespace Drupal\Tests\content_translation\Kernel;

use Drupal\Core\Database\Database;
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests the content translation settings API.
 *
 * @group content_translation
 */
class ContentTranslationSettingsApiTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'language',
    'content_translation',
    'user',
    'entity_test',
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installEntitySchema('entity_test_mul');
  }

  /**
   * Tests that enabling translation via the API triggers schema updates.
   */
  public function testSettingsApi() {
    $this->container->get('content_translation.manager')->setEnabled('entity_test_mul', 'entity_test_mul', TRUE);
    $schema = Database::getConnection()->schema();
    $result =
      $schema->fieldExists('entity_test_mul_property_data', 'content_translation_source') &&
      $schema->fieldExists('entity_test_mul_property_data', 'content_translation_outdated');
    $this->assertTrue($result, 'Schema updates correctly performed.');
  }

}
