<?php

namespace Drupal\Tests\taxonomy\Kernel\Migrate;

use Drupal\Tests\SchemaCheckTestTrait;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * Upgrade variables to taxonomy.settings.yml.
 *
 * @group migrate_drupal_6
 */
class MigrateTaxonomyConfigsTest extends MigrateDrupal6TestBase {

  use SchemaCheckTestTrait;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['taxonomy'];
=======
  protected static $modules = ['taxonomy'];
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
    $this->executeMigration('taxonomy_settings');
  }

  /**
   * Tests migration of taxonomy variables to taxonomy.settings.yml.
   */
  public function testTaxonomySettings() {
    $config = $this->config('taxonomy.settings');
<<<<<<< HEAD
    $this->assertIdentical(100, $config->get('terms_per_page_admin'));
    $this->assertIdentical(FALSE, $config->get('override_selector'));
=======
    $this->assertSame(100, $config->get('terms_per_page_admin'));
    $this->assertFalse($config->get('override_selector'));
>>>>>>> dev
    $this->assertConfigSchema(\Drupal::service('config.typed'), 'taxonomy.settings', $config->get());
  }

}
