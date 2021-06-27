<?php

namespace Drupal\sitemap\Tests;

<<<<<<< HEAD
use Drupal\simpletest\WebTestBase;

=======
>>>>>>> dev
/**
 * Tests the inclusion of the sitemap css file based on sitemap settings.
 *
 * @group sitemap
 */
<<<<<<< HEAD
class SitemapCssTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('sitemap');
=======
class SitemapCssTest extends SitemapTestBase {
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

<<<<<<< HEAD
    // Create user then login.
    $this->user = $this->drupalCreateUser(array(
      'administer sitemap',
      'access sitemap',
    ));
    $this->drupalLogin($this->user);
=======
    $this->drupalLogin($this->userAdmin);
>>>>>>> dev
  }

  /**
   * Tests include css file.
   */
  public function testIncludeCssFile() {
    // Assert that css file is included by default.
    $this->drupalGet('/sitemap');
    $this->assertRaw('sitemap.theme.css');

    // Change module not to include css file.
<<<<<<< HEAD
    $edit = array(
      'css' => FALSE,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));
=======
    $this->saveSitemapForm(['include_css' => FALSE]);
    drupal_flush_all_caches();
>>>>>>> dev

    // Assert that css file is not included.
    $this->drupalGet('/sitemap');
    $this->assertNoRaw('sitemap.theme.css');
  }

}
