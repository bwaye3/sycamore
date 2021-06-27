<?php

namespace Drupal\sitemap\Tests;

/**
 * Tests the display of RSS links based on sitemap settings.
 *
 * @group sitemap
 */
class SitemapTaxonomyTermsRssTest extends SitemapTaxonomyTestBase {

  /**
<<<<<<< HEAD
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('sitemap', 'node', 'taxonomy');

  /**
=======
>>>>>>> dev
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
<<<<<<< HEAD

    // Create terms
    $this->terms = $this->createTerms($this->vocabulary);

    // Set to show all taxonomy terms, even if they are not assigned to any
    // nodes.
    $edit = array(
      'term_threshold' => -1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

=======
    $vocab = $this->vocabulary;
    $vid = $vocab->id();

    // Show all taxonomy terms, even if they are not assigned to any nodes.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][term_count_threshold]" => 0]);
>>>>>>> dev
  }

  /**
   * Tests included RSS links.
   */
  public function testIncludeRssLinks() {
<<<<<<< HEAD

    // Assert that RSS links for terms are included in the sitemap.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertLinkByHref('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Change module not to include RSS links.
    $edit = array(
      'show_rss_links' => 0,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that RSS links are not included in the sitemap.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertNoLinkByHref('/taxonomy/term/' . $term->id() . '/feed');
    }
=======
    // The vocabulary is already configured to display in parent ::setUp().
    $vocab = $this->vocabulary;
    $vid = $vocab->id();

    // Create terms.
    $this->terms = $this->createTerms($vocab);

    // Assert that RSS links for terms are not included in the sitemap.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Include an RSS link for all terms.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][enable_rss]" => TRUE]);

    // Assert that RSS links are included in the sitemap.
    $this->drupalGet('/sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefExists('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Change RSS feed depth to 0.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][rss_depth]" => 0]);

    // Assert that RSS links are not included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $term->id() . '/feed');
    }

>>>>>>> dev
  }

  /**
   * Tests RSS feed depth.
   */
  public function testRssFeedDepth() {
<<<<<<< HEAD
    $terms = $this->terms;

    // Set RSS feed depth to -1.
    $edit = array(
      'rss_taxonomy' => -1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that all RSS links are included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($terms as $term) {
      $this->assertLinkByHref('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Change RSS feed depth to 0.
    $edit = array(
      'rss_taxonomy' => 0,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that RSS links are not included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($terms as $term) {
      $this->assertNoLinkByHref('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Change RSS feed depth to 1.
    $edit = array(
      'rss_taxonomy' => 1,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that only RSS feed link for term 1 is included in the sitemap.
    $this->drupalGet('sitemap');
    $this->assertLinkByHref('/taxonomy/term/' . $terms[0]->id() . '/feed');
    $this->assertNoLinkByHref('/taxonomy/term/' . $terms[1]->id() . '/feed');
    $this->assertNoLinkByHref('/taxonomy/term/' . $terms[2]->id() . '/feed');

    // Change RSS feed depth to 2.
    $edit = array(
      'rss_taxonomy' => 2,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));
=======
    // The vocabulary is already configured to display in parent ::setUp().
    $vocab = $this->vocabulary;
    $vid = $vocab->id();

    // Create terms.
    $this->terms = $this->createNestedTerms($vocab);

    // Assert that RSS links are not included by default.
    $this->drupalGet('sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Set RSS feed depth to maximum.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][enable_rss]" => TRUE]);
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][rss_depth]" => 9]);

    // Assert that all RSS links are included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefExists('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Change RSS feed depth to 0.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][rss_depth]" => 0]);

    // Assert that RSS links are not included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Change RSS feed depth to 1.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][rss_depth]" => 1]);

    // Assert that only RSS feed link for term 1 is included in the sitemap.
    $this->drupalGet('sitemap');
    $this->assertSession()->linkByHrefExists('/taxonomy/term/' . $this->terms[0]->id() . '/feed');
    $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $this->terms[1]->id() . '/feed');
    $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $this->terms[2]->id() . '/feed');

    // Change RSS feed depth to 2.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][rss_depth]" => 2]);
>>>>>>> dev

    // Assert that RSS feed link for term 1 and term 2 is included in the site
    // map.
    $this->drupalGet('sitemap');
<<<<<<< HEAD
    $this->assertLinkByHref('/taxonomy/term/' . $terms[0]->id() . '/feed');
    $this->assertLinkByHref('/taxonomy/term/' . $terms[1]->id() . '/feed');
    $this->assertNoLinkByHref('/taxonomy/term/' . $terms[2]->id() . '/feed');

    // Change RSS feed depth to 3.
    $edit = array(
      'rss_taxonomy' => 3,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that all RSS links are included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($terms as $term) {
      $this->assertLinkByHref('/taxonomy/term/' . $term->id() . '/feed');
    }
  }

=======
    $this->assertSession()->linkByHrefExists('/taxonomy/term/' . $this->terms[0]->id() . '/feed');
    $this->assertSession()->linkByHrefExists('/taxonomy/term/' . $this->terms[1]->id() . '/feed');
    $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $this->terms[2]->id() . '/feed');

    // Change RSS feed depth to 3.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][rss_depth]" => 3]);

    // Assert that all RSS links are included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefExists('/taxonomy/term/' . $term->id() . '/feed');
    }

    // Change disable RSS links.
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][enable_rss]" => FALSE]);
    $this->saveSitemapForm(["plugins[vocabulary:$vid][settings][rss_depth]" => 9]);

    // Assert that RSS links are not included in the sitemap.
    $this->drupalGet('sitemap');
    foreach ($this->terms as $term) {
      $this->assertSession()->linkByHrefNotExists('/taxonomy/term/' . $term->id() . '/feed');
    }

  }

  /**
   * @TODO: Tests customized RSS links.
   *//*
  public function testCustomRssLinks() {
  }*/

>>>>>>> dev
}
