<?php

namespace Drupal\sitemap\Tests;

<<<<<<< HEAD
use Drupal\Core\Entity\Entity\EntityFormDisplay;
use Drupal\Core\Field\FieldStorageDefinitionInterface;
=======
use Drupal\sitemap\Plugin\Sitemap\Vocabulary;
>>>>>>> dev

/**
 * Tests the display of taxonomies based on sitemap settings.
 *
 * @group sitemap
 */
class SitemapTaxonomyTermsTest extends SitemapTaxonomyTestBase {

  /**
<<<<<<< HEAD
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create terms
    $this->terms = $this->createTerms($this->vocabulary);

  }

  /**
   * Tests the term_threshold setting
   */
  public function testTermThreshold() {
    // Get term names from terms.
    $names = array();
=======
   * Tests the term_threshold setting.
   */
  public function testTermThreshold() {
    // Create terms.
    $this->terms = $this->createTerms($this->vocabulary);

    // The vocabulary is already configured to display in parent ::setUp().
    $vocab = $this->vocabulary;
    $vid = $vocab->id();

    // Get term names from terms.
    $names = [];
>>>>>>> dev
    foreach ($this->terms as $term) {
      $names[] = $term->label();
    }

<<<<<<< HEAD
    // Confirm that terms without content are not displayed by default.
    $this->drupalGet('sitemap');
    foreach ($names as $term_name) {
      $this->assertNoText($term_name);
    }

    // Show all taxonomy terms, even if they are not assigned to any nodes.
    $edit = array(
      'term_threshold' => -1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that terms without nodes are now displayed on the sitemap.
    $this->drupalGet('sitemap');
    foreach ($names as $term_name) {
      $this->assertText($term_name);
      $this->assertNoLink($term_name);
=======
    // Confirm that terms without content are displayed by default.
    $this->drupalGet('/sitemap');
    foreach ($names as $term_name) {
      $this->assertSession()->pageTextContains($term_name);
>>>>>>> dev
    }

    // Create test node with terms.
    $this->createNodeWithTerms($this->terms);
<<<<<<< HEAD
    drupal_flush_all_caches();

    // Assert that terms with content are displayed on the sitemap as links when
    // term_threshold is set to -1.
    $this->drupalGet('sitemap');
    foreach ($names as $term_name) {
      $this->assertLink($term_name);
    }

    // Require at least one node for taxonomy terms to show up.
    $edit = array(
      'term_threshold' => 0,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));
=======
    // @TODO: Figure out proper cache tags.
    drupal_flush_all_caches();

    // Require at least one node for taxonomy terms to show up.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_count_threshold]" => 1]);
>>>>>>> dev

    // Assert that terms with content are displayed on the sitemap as links.
    $this->drupalGet('sitemap');
    foreach ($names as $term_name) {
<<<<<<< HEAD
      $this->assertLink($term_name);
    }

    // Require at least two nodes for taxonomy terms to show up.
    $edit = array(
      'term_threshold' => 1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));
=======
      $this->assertSession()->linkExists($term_name);
    }

    // Require at least two nodes for taxonomy terms to show up.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_count_threshold]" => 2]);
>>>>>>> dev

    $terms = $this->terms;
    unset($terms[0]);

    // Create a second test node with only two terms.
    $this->createNodeWithTerms($terms);

    $this->drupalGet('sitemap');
<<<<<<< HEAD
    $this->assertNoLink($this->terms[0]->label());
    $this->assertLink($this->terms[1]->label());
    $this->assertLink($this->terms[2]->label());
=======
    $this->assertSession()->linkNotExists($this->terms[0]->label());
    $this->assertSession()->linkExists($this->terms[1]->label());
    $this->assertSession()->linkExists($this->terms[2]->label());


    // TODO: Check for empty <li>s as well.
>>>>>>> dev
  }

  /**
   * Tests appearance of node counts.
   */
  public function testNodeCounts() {
<<<<<<< HEAD
=======
    $this->terms = $this->createTerms($this->vocabulary);

    // The vocabulary is already configured to display in parent ::setUp().
    $vocab = $this->vocabulary;
    $vid = $vocab->id();
>>>>>>> dev

    // Create test node with terms.
    $this->createNodeWithTerms($this->terms);

<<<<<<< HEAD
    // Assert that node counts are included in the sitemap by default.
    $this->drupalGet('/sitemap');
    $this->assertEqual(substr_count($this->getTextContent(), '(1)'), 3, 'Node counts are included');

    // Configure module to hide node counts.
    $edit = array(
      'show_count' => FALSE,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that node counts are not included in the sitemap.
    $this->drupalGet('sitemap');
    $this->assertEqual(substr_count($this->getTextContent(), '(1)'), 0, 'Node counts are not included');
=======
    // Assert that node counts are not included in the sitemap by default.
    $this->drupalGet('/sitemap');
    $elements = $this->cssSelect(".sitemap-plugin--vocabulary .count:contains('(1)')");
    $this->assertEquals(count($elements), 0, 'Node counts not included.');

    // Configure module to display node counts.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][show_count]" => TRUE]);

    // Assert that node counts are included in the sitemap.
    $this->drupalGet('sitemap');
    $elements = $this->cssSelect(".sitemap-plugin--vocabulary .count:contains('(1)')");
    $this->assertEquals(count($elements), 3, 'Node counts included.');

    // TODO: Add another node and check counts.
    //@TODO: Test count display when parent term does not meet threshold.

>>>>>>> dev
  }

  /**
   * Tests vocabulary depth settings.
   */
  public function testVocabularyDepth() {
<<<<<<< HEAD

    // Set to show all taxonomy terms, even if they are not assigned to any
    // nodes.
    $edit = array(
      'term_threshold' => -1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Get tags from terms.
    $tags = array();
    foreach ($this->terms as $term) {
      $tags[] = $term->label();
    }

    // Change vocabulary depth to -1.
    $edit = array(
      'vocabulary_depth' => -1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that all tags are listed in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($tags as $tag) {
      $this->assertText($tag);
    }

    // Change vocabulary depth to 0.
    $edit = array(
      'vocabulary_depth' => 0,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that no tags are listed in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($tags as $tag) {
      $this->assertNoText($tag);
    }

    // Change vocabulary depth to 1.
    $edit = array(
      'vocabulary_depth' => 1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that only tag 1 is listed in the sitemap.
    $this->drupalGet('sitemap');
    $this->assertText($tags[0]);
    $this->assertNoText($tags[1]);
    $this->assertNoText($tags[2]);

    // Change vocabulary depth to 2.
    $edit = array(
      'vocabulary_depth' => 2,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that tag 1 and tag 2 are listed in the sitemap.
    $this->drupalGet('sitemap');
    $this->assertText($tags[0]);
    $this->assertText($tags[1]);
    $this->assertNoText($tags[2]);

    // Change vocabulary depth to 3.
    $edit = array(
      'vocabulary_depth' => 3,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that all tags are listed in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($tags as $tag) {
      $this->assertText($tag);
    }
  }

  /**
   * Tests vocabulary show link settings.
   */
  public function testVocabularyShowLinks() {
    // Set to show all taxonomy terms, even if they are not assigned to any
    // nodes. Also change the vocabulary depth to -1.
    $edit = [
      'term_threshold' => -1,
      'vocabulary_depth' => -1,
    ];
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Get tags from terms.
    $tags = array();
    foreach ($this->terms as $term) {
      $tags[] = $term->label();
    }

    // Assert that all tags are listed in the sitemap and do not link.
    $this->drupalGet('sitemap');
    foreach ($tags as $tag) {
      $this->assertText($tag);
      $this->assertNoLink($tag);
    }

    // Configure to show all links.
    $edit = [
      'vocabulary_show_links' => TRUE,
    ];
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Now assert that all terms have links on them.
    $this->drupalGet('sitemap');
    foreach ($tags as $tag) {
      $this->assertLink($tag);
    }
  }

=======
    // Create terms.
    $this->terms = $this->createNestedTerms($this->vocabulary);

    // Set to show all taxonomy terms, even if they are not assigned to content.
    $vid = $this->vocabulary->id();
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_count_threshold]" => Vocabulary::THRESHOLD_DISABLED]);

    // Change vocabulary depth to its maximum (9).
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_depth]" => Vocabulary::DEPTH_MAX]);

    // Assert that all tags are listed in the sitemap.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->pageTextContains($term->label());
    }

    // Change vocabulary depth to 0.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_depth]" => Vocabulary::DEPTH_DISABLED]);

    // Assert that no tags are listed in the sitemap.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->pageTextNotContains($term->label());
    }

    // Change vocabulary depth to 1.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_depth]" => 1]);

    // Assert that only tag 1 is listed in the sitemap.
    $this->drupalGet('/sitemap');
    $this->assertSession()->pageTextContains($this->terms[0]->label());
    $this->assertSession()->pageTextNotContains($this->terms[1]->label());
    $this->assertSession()->pageTextNotContains($this->terms[2]->label());

    // Change vocabulary depth to 2.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_depth]" => 2]);

    // Assert that tag 1 and tag 2 are listed in the sitemap.
    $this->drupalGet('/sitemap');
    $this->assertSession()->pageTextContains($this->terms[0]->label());
    $this->assertSession()->pageTextContains($this->terms[1]->label());
    $this->assertSession()->pageTextNotContains($this->terms[2]->label());

    // Change vocabulary depth to 3.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_depth]" => 3]);

    // Assert that all tags are listed in the sitemap.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->pageTextContains($term->label());
    }

    // Test display when parent term does not meet threshold.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_count_threshold]" => 1]);
    $childTerms = $this->terms;
    array_shift($childTerms);
    $this->createNodeWithTerms($childTerms);
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->pageTextContains($term->label());
    }
    // TODO: Check for empty <li>s as well.

    // Test show_count when parent term does not meet threshold.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][show_count]" => TRUE]);
    $this->drupalGet('/sitemap');
    $elements = $this->cssSelect(".sitemap-plugin--vocabulary .count:contains('(1)')");
    $this->assertEquals(count($elements), 2, 'Node counts included.');
  }

  /**
   * Tests the term link settings.
   */
  public function testTermLinks() {
    $this->terms = $this->createTerms($this->vocabulary);
    $this->linkSettingsTest();
  }

  /**
   * Tests the nested term link settings.
   */
  public function testNestedTermLinks() {
    // Create terms.
    $this->terms = $this->createNestedTerms($this->vocabulary);
    $this->linkSettingsTest();

    // Test link when parent term does not meet threshold.
    $vid = $this->vocabulary->id();
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_count_threshold]" => 2]);
    $childTerms = $this->terms;
    array_shift($childTerms);
    $this->createNodeWithTerms($childTerms);
    $this->drupalGet('/sitemap');
    $this->assertSession()->linkNotExists($this->terms[0]->label());
    foreach ($childTerms as $term) {
      $this->assertSession()->linkExists($term->label());
    }

    // Test 'always display links'.
    $vid = $this->vocabulary->id();
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][always_link]" => TRUE]);
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkExists($term->label());
    }
  }

  /**
   * @TODO: Tests customized term links.
   *//*
  public function testTermCustomLinks() {
  }*/

  /**
   * Helper function for testing link settings.
   */
  protected function linkSettingsTest() {
    // Confirm that terms without content are not linked by default.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkNotExists($term->label());
    }

    // Test 'always display links'.
    $vid = $this->vocabulary->id();
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][always_link]" => TRUE]);
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkExists($term->label());
    }

    // Test that terms with content are linked...
    $this->createNodeWithTerms($this->terms);
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkExists($term->label());
    }

    // ... even when always_link is disabled.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][always_link]" => FALSE]);
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkExists($term->label());
    }

  }
>>>>>>> dev
}
