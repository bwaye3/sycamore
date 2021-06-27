<?php

namespace Drupal\Tests\search\Kernel\Migrate\d6;

use Drupal\Core\Database\Database;
use Drupal\Tests\migrate_drupal\Kernel\d6\MigrateDrupal6TestBase;
use Drupal\search\Entity\SearchPage;

/**
 * Upgrade search page variables.
 *
 * @group migrate_drupal_6
 */
class MigrateSearchPageTest extends MigrateDrupal6TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['search'];
=======
  protected static $modules = ['search'];
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
    $this->executeMigration('search_page');
  }

  /**
   * Tests Drupal 6 search settings to Drupal 8 search page entity migration.
   */
  public function testSearchPage() {
    $id = 'node_search';
    /** @var \Drupal\search\Entity\SearchPage $search_page */
    $search_page = SearchPage::load($id);
<<<<<<< HEAD
    $this->assertIdentical($id, $search_page->id());
    $configuration = $search_page->getPlugin()->getConfiguration();
    $this->assertIdentical($configuration['rankings'], [
=======
    $this->assertSame($id, $search_page->id());
    $configuration = $search_page->getPlugin()->getConfiguration();
    $this->assertSame([
>>>>>>> dev
      'comments' => 5,
      'promote' => 0,
      'recent' => 0,
      'relevance' => 2,
      'sticky' => 8,
      'views' => 1,
<<<<<<< HEAD
    ]);
    $this->assertIdentical('node', $search_page->getPath());
=======
    ], $configuration['rankings']);
    $this->assertSame('node', $search_page->getPath());
>>>>>>> dev

    // Test that we can re-import using the EntitySearchPage destination.
    Database::getConnection('default', 'migrate')
      ->update('variable')
      ->fields(['value' => serialize(4)])
      ->condition('name', 'node_rank_comments')
      ->execute();

    /** @var \Drupal\migrate\Plugin\MigrationInterface $migration */
    $migration = $this->getMigration('search_page');
    // Indicate we're rerunning a migration that's already run.
    $migration->getIdMap()->prepareUpdate();
    $this->executeMigration($migration);

    $configuration = SearchPage::load($id)->getPlugin()->getConfiguration();
<<<<<<< HEAD
    $this->assertIdentical(4, $configuration['rankings']['comments']);
=======
    $this->assertSame(4, $configuration['rankings']['comments']);
>>>>>>> dev
  }

}
