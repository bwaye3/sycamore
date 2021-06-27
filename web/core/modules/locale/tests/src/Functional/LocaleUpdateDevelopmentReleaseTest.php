<?php

namespace Drupal\Tests\locale\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test for proper version fallback in case of a development release.
 *
 * @group language
 */
class LocaleUpdateDevelopmentReleaseTest extends BrowserTestBase {

<<<<<<< HEAD
  public static $modules = ['locale', 'locale_test_development_release'];
=======
  protected static $modules = ['locale', 'locale_test_development_release'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    module_load_include('compare.inc', 'locale');
    $admin_user = $this->drupalCreateUser([
      'administer modules',
      'administer languages',
      'access administration pages',
      'translate interface',
    ]);
    $this->drupalLogin($admin_user);
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', ['predefined_langcode' => 'hu'], t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm(['predefined_langcode' => 'hu'], 'Add language');
>>>>>>> dev
  }

  public function testLocaleUpdateDevelopmentRelease() {
    $projects = locale_translation_build_projects();
<<<<<<< HEAD
    $this->verbose($projects['drupal']->info['version']);
    $this->assertEqual($projects['drupal']->info['version'], '8.0.x', 'The branch of the core dev release.');
    $this->verbose($projects['contrib']->info['version']);
    $this->assertEqual($projects['contrib']->info['version'], '12.x-10.x', 'The branch of the contrib module dev release.');
=======
    $this->assertEquals('8.0.x', $projects['drupal']->info['version'], 'The branch of the core dev release.');
    $this->assertEquals('12.x-10.x', $projects['contrib']->info['version'], 'The branch of the contrib module dev release.');
>>>>>>> dev
  }

}
