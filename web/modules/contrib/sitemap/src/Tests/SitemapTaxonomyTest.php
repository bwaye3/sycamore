<?php

namespace Drupal\sitemap\Tests;

/**
 * Tests the display of taxonomies based on sitemap settings.
 *
 * @group sitemap
 */
class SitemapTaxonomyTest extends SitemapTaxonomyTestBase {

<<<<<<< HEAD
=======
  use SitemapTestTrait;

>>>>>>> dev
  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = array('sitemap', 'node', 'taxonomy');

  /**
   * A vocabulary entity.
   *
   * @var \Drupal\taxonomy\Entity\Vocabulary
   */
  protected $vocabulary_to_delete;
=======
  public static $modules = ['sitemap', 'node', 'taxonomy'];

  /**
   * Tests vocabulary title.
   */
  public function testVocabularyTitle() {
    // The vocabulary is already configured to display in parent ::setUp().
    $vocab = $this->vocabulary;
    $vid = $vocab->id();

    $this->titleTest($vocab->label(), 'vocabulary', $vid, TRUE);
  }
>>>>>>> dev

  /**
   * Tests vocabulary description.
   */
  public function testVocabularyDescription() {
<<<<<<< HEAD
    // Assert that vocabulary description is not included if no tags are
    // displayed.
    $this->drupalGet('/sitemap');
    $this->assertNoText($this->vocabulary->getDescription(), 'Vocabulary description is not included.');
=======
    // The vocabulary is already configured to display in ::setUp().
    $vid = $this->vocabulary->id();

    // Assert that vocabulary description is not included by default.
    $this->drupalGet('/sitemap');
    $elements = $this->cssSelect(".sitemap-plugin--vocabulary");
    $this->assertEquals(count($elements), 1, 'Vocabulary found.');
    $this->assertSession()->pageTextNotContains($this->vocabulary->getDescription());

    // Display the description.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][show_description]" => TRUE]);
    $this->assertSession()->pageTextContains($this->vocabulary->getDescription());
>>>>>>> dev

    // Create taxonomy terms.
    $this->createTerms($this->vocabulary);

    // Set to show all taxonomy terms, even if they are not assigned to any
    // nodes.
<<<<<<< HEAD
    $edit = array(
      'term_threshold' => -1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));
=======
    $this->saveSitemapForm([ "plugins[vocabulary:$vid][settings][term_count_threshold]" => -1]);
>>>>>>> dev

    // Assert that the vocabulary description is included in the sitemap when
    // terms are displayed.
    $this->drupalGet('/sitemap');
<<<<<<< HEAD
    $this->assertText($this->vocabulary->getDescription(), 'Vocabulary description is included.');

    // Configure module not to show vocabulary descriptions.
    $edit = array(
      'show_description' => FALSE,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that vocabulary description is not included in the sitemap.
    $this->drupalGet('/sitemap');
    $this->assertNoText($this->vocabulary->getDescription(), 'Vocabulary description is not included.');
  }

  /**
   * Ensure that deleted vocabularies do not trigger a fatal error if their ids
   * still exist in config.
   * @TODO add a hook_vocabulary_alter if that is a thing?
   */
  function testDeletedVocabulary() {
    // Create the vocabulary to delete
    $this->vocabulary_to_delete = $this->createVocabulary();

    // Configure the sitemap to display both vocabularies.
    $vid = $this->vocabulary->id();
    $vid_to_delete = $this->vocabulary_to_delete->id();
    $edit = array(
      "show_vocabularies[$vid]" => $vid,
      "show_vocabularies[$vid_to_delete]" => $vid_to_delete,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Delete the vocabulary
    $this->vocabulary_to_delete->delete();

    // Visit /sitemap
    $this->drupalGet('/sitemap');
=======
    $this->assertSession()->pageTextContains($this->vocabulary->getDescription());

    // Configure sitemap not to show vocabulary descriptions.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][show_description]" => FALSE]);

    // Assert that vocabulary description is not included in the sitemap.
    $this->drupalGet('/sitemap');
    $this->assertSession()->pageTextNotContains($this->vocabulary->getDescription());
  }

  /**
   * Test seamless functionality when created and deleting vocabularies.
   */
  public function testVocabularyCrud() {
    // Create an additional vocabulary.
    $vocabularyToDelete = $this->createVocabulary();

    // Configure the sitemap to display both vocabularies.
    $vid = $this->vocabulary->id();
    $vid_to_delete = $vocabularyToDelete->id();
    $edit = [
      "plugins[vocabulary:$vid][enabled]" => TRUE,
      "plugins[vocabulary:$vid_to_delete][enabled]" => TRUE,
    ];
    $this->saveSitemapForm($edit);

    // Ensure that both vocabularies are displayed.
    $this->drupalGet('/sitemap');

    $elements = $this->cssSelect(".sitemap-plugin--vocabulary");
    $this->assertEquals(count($elements), 2, '2 vocabularies are included');

    $elements = $this->cssSelect(".sitemap-item--vocabulary-$vid");
    $this->assertEquals(count($elements), 1, "Vocabulary $vid is included.");
    $elements = $this->cssSelect(".sitemap-item--vocabulary-$vid_to_delete");
    $this->assertEquals(count($elements), 1, "Vocabulary $vid_to_delete is included.");

    // Delete the vocabulary.
    $vocabularyToDelete->delete();
    // @todo We shouldn't have to do this if vocab cache tags are in place...
    drupal_flush_all_caches();

    // Visit /sitemap.
    $this->drupalGet('/sitemap');
    $elements = $this->cssSelect(".sitemap-plugin--vocabulary");
    $this->assertEquals(count($elements), 1, '1 vocabulary is included');

    $elements = $this->cssSelect(".sitemap-item--vocabulary-$vid");
    $this->assertEquals(count($elements), 1, "Vocabulary $vid is included.");
    $elements = $this->cssSelect(".sitemap-item--vocabulary-$vid_to_delete");
    $this->assertEquals(count($elements), 0, "Vocabulary $vid_to_delete is included.");

    // Visit the sitemap configuration page to ensure no errors there.
    $this->drupalGet('/admin/config/search/sitemap');
>>>>>>> dev
  }

}
