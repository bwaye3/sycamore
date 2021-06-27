<?php

namespace Drupal\Tests\node\Kernel\Migrate\d6;

use Drupal\Core\Field\Entity\BaseFieldOverride;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;

/**
 * @group migrate_drupal_6
 */
class MigrateNodeSettingPromoteTest extends MigrateDrupal6TestBase {

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
    $this->executeMigration('d6_node_setting_promote');
  }

  /**
   * Tests migration of the promote checkbox's settings.
   */
  public function testMigration() {
<<<<<<< HEAD
    $this->assertIdentical('Promoted to front page', BaseFieldOverride::load('node.article.promote')->label());
=======
    $this->assertSame('Promoted to front page', BaseFieldOverride::load('node.article.promote')->label());
>>>>>>> dev
  }

}
