<?php

namespace Drupal\KernelTests\Core\Validation;

use Drupal\KernelTests\KernelTestBase;

/**
 * Tests various low level constrains provided by core.
 *
 * @group Validation
 */
class ConstraintsTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['config_test'];
=======
  protected static $modules = ['config_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->installConfig('config_test');
  }

  /**
   * @see \Drupal\Core\Validation\Plugin\Validation\Constraint\UuidConstraint
   */
  public function testUuid() {
    $typed_config_manager = \Drupal::service('config.typed');
    /** @var \Drupal\Core\Config\Schema\TypedConfigInterface $typed_config */
    $typed_config = $typed_config_manager->get('config_test.validation');
    $typed_config->get('uuid')
      ->setValue(\Drupal::service('uuid')->generate());

    $this->assertCount(0, $typed_config->validate());

    $typed_config->get('uuid')
      ->setValue(\Drupal::service('uuid')->generate() . '-invalid');
    $this->assertCount(1, $typed_config->validate());
  }

}
