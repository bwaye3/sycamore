<?php

namespace Drupal\Tests\path\Kernel\Migrate\d7;

/**
 * Tests URL alias migration.
 *
 * @group path
 */
class MigrateUrlAliasNoTranslationTest extends MigrateUrlAliasTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->executeMigration('d7_url_alias');
  }

}
