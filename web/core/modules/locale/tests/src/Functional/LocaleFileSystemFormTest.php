<?php

namespace Drupal\Tests\locale\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests the locale functionality in the altered file settings form.
 *
 * @group locale
 */
class LocaleFileSystemFormTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['system'];
=======
  protected static $modules = ['system'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $account = $this->drupalCreateUser(['administer site configuration']);
    $this->drupalLogin($account);
  }

  /**
   * Tests translation directory settings on the file settings form.
   */
  public function testFileConfigurationPage() {
    // By default there should be no setting for the translation directory.
    $this->drupalGet('admin/config/media/file-system');
<<<<<<< HEAD
    $this->assertNoFieldByName('translation_path');
=======
    $this->assertSession()->fieldNotExists('translation_path');
>>>>>>> dev

    // With locale module installed, the setting should appear.
    $module_installer = $this->container->get('module_installer');
    $module_installer->install(['locale']);
    $this->rebuildContainer();
    $this->drupalGet('admin/config/media/file-system');
<<<<<<< HEAD
    $this->assertFieldByName('translation_path');
=======
    $this->assertSession()->fieldExists('translation_path');
>>>>>>> dev

    // The setting should persist.
    $translation_path = $this->publicFilesDirectory . '/translations_changed';
    $fields = [
      'translation_path' => $translation_path,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $fields, t('Save configuration'));
    $this->drupalGet('admin/config/media/file-system');
    $this->assertFieldByName('translation_path', $translation_path);
    $this->assertEqual($translation_path, $this->config('locale.settings')->get('translation.path'));
=======
    $this->submitForm($fields, 'Save configuration');
    $this->drupalGet('admin/config/media/file-system');
    $this->assertSession()->fieldValueEquals('translation_path', $translation_path);
    $this->assertEquals($this->config('locale.settings')->get('translation.path'), $translation_path);
>>>>>>> dev
  }

}
