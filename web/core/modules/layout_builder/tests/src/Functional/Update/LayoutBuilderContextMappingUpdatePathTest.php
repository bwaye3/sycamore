<?php

namespace Drupal\Tests\layout_builder\Functional\Update;

<<<<<<< HEAD
use Drupal\FunctionalTests\Update\UpdatePathTestBase;

/**
 * Tests context-aware blocks after the context changes to section storage.
 *
 * @group layout_builder
 * @group legacy
=======
use Drupal\Core\Entity\Entity\EntityViewDisplay;
use Drupal\FunctionalTests\Update\UpdatePathTestBase;

/**
 * Tests the upgrade path for Layout Builder layout context mappings.
 *
 * @see layout_builder_post_update_section_storage_context_mapping()
 *
 * @group layout_builder
>>>>>>> dev
 */
class LayoutBuilderContextMappingUpdatePathTest extends UpdatePathTestBase {

  /**
   * {@inheritdoc}
   */
  protected function setDatabaseDumpFiles() {
    $this->databaseDumpFiles = [
<<<<<<< HEAD
      __DIR__ . '/../../../../../system/tests/fixtures/update/drupal-8.filled.standard.php.gz',
      __DIR__ . '/../../../fixtures/update/layout-builder.php',
      __DIR__ . '/../../../fixtures/update/layout-builder-field-schema.php',
      __DIR__ . '/../../../fixtures/update/layout-builder-field-block.php',
=======
      __DIR__ . '/../../../../../system/tests/fixtures/update/drupal-9.0.0.bare.standard.php.gz',
      __DIR__ . '/../../../fixtures/update/layout-builder.php',
      __DIR__ . '/../../../fixtures/update/layout-builder-context-mapping.php',
>>>>>>> dev
    ];
  }

  /**
<<<<<<< HEAD
   * Tests the upgrade path for enabling Layout Builder.
   */
  public function testRunUpdates() {
    $assert_session = $this->assertSession();

    $this->runUpdates();

    $this->drupalLogin($this->rootUser);
    // Ensure that defaults and overrides display the body field within the
    // content region of the one column layout.
    $paths = [
      // Overrides.
      'node/1',
      // Defaults.
      'admin/structure/types/manage/article/display/default/layout',
    ];
    foreach ($paths as $path) {
      $this->drupalGet($path);
      $assert_session->statusCodeEquals(200);
      $assert_session->elementExists('css', '.layout--onecol .layout__region--content .field--name-body');
    }
=======
   * Tests the upgrade path for Layout Builder layout context mappings.
   */
  public function testRunUpdates() {
    $data = EntityViewDisplay::load('node.article.teaser')->toArray();
    $this->assertSame(TRUE, $data['third_party_settings']['layout_builder']['enabled']);
    $this->assertArrayNotHasKey('context_mapping', $data['third_party_settings']['layout_builder']['sections'][0]->toArray()['layout_settings']);

    $this->runUpdates();

    $data = EntityViewDisplay::load('node.article.teaser')->toArray();
    $this->assertSame(TRUE, $data['third_party_settings']['layout_builder']['enabled']);
    $this->assertSame([], $data['third_party_settings']['layout_builder']['sections'][0]->toArray()['layout_settings']['context_mapping']);
>>>>>>> dev
  }

}
