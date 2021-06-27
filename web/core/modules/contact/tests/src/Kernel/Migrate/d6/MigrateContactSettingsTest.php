<?php

namespace Drupal\Tests\contact\Kernel\Migrate\d6;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade variables to contact.settings.yml.
 *
 * @group migrate_drupal_6
 */
class MigrateContactSettingsTest extends MigrateDrupal6TestBase {

  use SchemaCheckTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['contact'];
=======
  protected static $modules = ['contact'];
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
    $this->executeMigrations(['contact_category', 'd6_contact_settings']);
  }

  /**
   * Tests migration of contact variables to contact.settings.yml.
   */
  public function testContactSettings() {
    $config = $this->config('contact.settings');
<<<<<<< HEAD
    $this->assertIdentical(TRUE, $config->get('user_default_enabled'));
    $this->assertIdentical(3, $config->get('flood.limit'));
    $this->assertIdentical('some_other_category', $config->get('default_form'));
=======
    $this->assertTrue($config->get('user_default_enabled'));
    $this->assertSame(3, $config->get('flood.limit'));
    $this->assertSame('some_other_category', $config->get('default_form'));
>>>>>>> dev
    $this->assertConfigSchema(\Drupal::service('config.typed'), 'contact.settings', $config->get());
  }

}
