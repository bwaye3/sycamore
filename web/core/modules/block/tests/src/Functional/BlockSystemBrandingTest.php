<?php

namespace Drupal\Tests\block\Functional;

/**
 * Tests branding block display.
 *
 * @group block
 */
class BlockSystemBrandingTest extends BlockTestBase {

  /**
   * Modules to install.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'system'];
=======
  protected static $modules = ['block', 'system'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    // Set a site slogan.
    $this->config('system.site')
      ->set('slogan', 'Community plumbing')
      ->save();
    // Add the system branding block to the page.
    $this->drupalPlaceBlock('system_branding_block', ['region' => 'header', 'id' => 'site-branding']);
  }

  /**
   * Tests system branding block configuration.
   */
  public function testSystemBrandingSettings() {
    $site_logo_xpath = '//div[@id="block-site-branding"]//a[@class="site-logo"]';
    $site_name_xpath = '//div[@id="block-site-branding"]//div[@class="site-name"]';
    $site_slogan_xpath = '//div[@id="block-site-branding"]//div[@class="site-slogan"]';

    // Set default block settings.
    $this->drupalGet('');
    $site_logo_element = $this->xpath($site_logo_xpath);
    $site_name_element = $this->xpath($site_name_xpath);
    $site_slogan_element = $this->xpath($site_slogan_xpath);
    // Test that all branding elements are displayed.
    $this->assertTrue(!empty($site_logo_element), 'The branding block logo was found.');
    $this->assertTrue(!empty($site_name_element), 'The branding block site name was found.');
    $this->assertTrue(!empty($site_slogan_element), 'The branding block slogan was found.');
<<<<<<< HEAD
    $this->assertCacheTag('config:system.site');
=======
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'config:system.site');
>>>>>>> dev

    // Be sure the slogan is XSS-filtered.
    $this->config('system.site')
      ->set('slogan', '<script>alert("Community carpentry");</script>')
      ->save();
    $this->drupalGet('');
    $site_slogan_element = $this->xpath($site_slogan_xpath);
<<<<<<< HEAD
    $this->assertEqual($site_slogan_element[0]->getText(), 'alert("Community carpentry");', 'The site slogan was XSS-filtered.');
=======
    $this->assertEquals('alert("Community carpentry");', $site_slogan_element[0]->getText(), 'The site slogan was XSS-filtered.');
>>>>>>> dev

    // Turn just the logo off.
    $this->config('block.block.site-branding')
      ->set('settings.use_site_logo', 0)
      ->save();
    $this->drupalGet('');
    $site_logo_element = $this->xpath($site_logo_xpath);
    $site_name_element = $this->xpath($site_name_xpath);
    $site_slogan_element = $this->xpath($site_slogan_xpath);
    // Re-test all branding elements.
    $this->assertTrue(empty($site_logo_element), 'The branding block logo was disabled.');
    $this->assertTrue(!empty($site_name_element), 'The branding block site name was found.');
    $this->assertTrue(!empty($site_slogan_element), 'The branding block slogan was found.');
<<<<<<< HEAD
    $this->assertCacheTag('config:system.site');
=======
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'config:system.site');
>>>>>>> dev

    // Turn just the site name off.
    $this->config('block.block.site-branding')
      ->set('settings.use_site_logo', 1)
      ->set('settings.use_site_name', 0)
      ->save();
    $this->drupalGet('');
    $site_logo_element = $this->xpath($site_logo_xpath);
    $site_name_element = $this->xpath($site_name_xpath);
    $site_slogan_element = $this->xpath($site_slogan_xpath);
    // Re-test all branding elements.
    $this->assertTrue(!empty($site_logo_element), 'The branding block logo was found.');
    $this->assertTrue(empty($site_name_element), 'The branding block site name was disabled.');
    $this->assertTrue(!empty($site_slogan_element), 'The branding block slogan was found.');
<<<<<<< HEAD
    $this->assertCacheTag('config:system.site');
=======
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'config:system.site');
>>>>>>> dev

    // Turn just the site slogan off.
    $this->config('block.block.site-branding')
      ->set('settings.use_site_name', 1)
      ->set('settings.use_site_slogan', 0)
      ->save();
    $this->drupalGet('');
    $site_logo_element = $this->xpath($site_logo_xpath);
    $site_name_element = $this->xpath($site_name_xpath);
    $site_slogan_element = $this->xpath($site_slogan_xpath);
    // Re-test all branding elements.
    $this->assertTrue(!empty($site_logo_element), 'The branding block logo was found.');
    $this->assertTrue(!empty($site_name_element), 'The branding block site name was found.');
    $this->assertTrue(empty($site_slogan_element), 'The branding block slogan was disabled.');
<<<<<<< HEAD
    $this->assertCacheTag('config:system.site');
=======
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'config:system.site');
>>>>>>> dev

    // Turn the site name and the site slogan off.
    $this->config('block.block.site-branding')
      ->set('settings.use_site_name', 0)
      ->set('settings.use_site_slogan', 0)
      ->save();
    $this->drupalGet('');
    $site_logo_element = $this->xpath($site_logo_xpath);
    $site_name_element = $this->xpath($site_name_xpath);
    $site_slogan_element = $this->xpath($site_slogan_xpath);
    // Re-test all branding elements.
    $this->assertTrue(!empty($site_logo_element), 'The branding block logo was found.');
    $this->assertTrue(empty($site_name_element), 'The branding block site name was disabled.');
    $this->assertTrue(empty($site_slogan_element), 'The branding block slogan was disabled.');
<<<<<<< HEAD
    $this->assertCacheTag('config:system.site');
=======
    $this->assertSession()->responseHeaderContains('X-Drupal-Cache-Tags', 'config:system.site');
>>>>>>> dev
  }

}
