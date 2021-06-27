<?php

namespace Drupal\Tests\node\Kernel\Migrate\d6;

use Drupal\Core\Field\Entity\BaseFieldOverride;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * @group migrate_drupal_6
 */
class MigrateNodeSettingStatusTest extends MigrateDrupal6TestBase {

<<<<<<< HEAD
  public static $modules = ['node', 'text', 'menu_ui'];
=======
  protected static $modules = ['node', 'text', 'menu_ui'];
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
    $this->installConfig(['node']);
    $this->executeMigration('d6_node_type');
    $this->executeMigration('d6_node_setting_status');
  }

  /**
   * Tests migration of the publishing status checkbox's settings.
   */
  public function testMigration() {
<<<<<<< HEAD
    $this->assertIdentical('Publishing status', BaseFieldOverride::load('node.article.status')->label());
=======
    $this->assertSame('Publishing status', BaseFieldOverride::load('node.article.status')->label());
>>>>>>> dev
  }

}
