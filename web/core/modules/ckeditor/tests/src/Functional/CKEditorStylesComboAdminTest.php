<?php

namespace Drupal\Tests\ckeditor\Functional;

use Drupal\editor\Entity\Editor;
use Drupal\filter\Entity\FilterFormat;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests administration of the CKEditor StylesCombo plugin.
 *
 * @group ckeditor
 */
class CKEditorStylesComboAdminTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['filter', 'editor', 'ckeditor'];
=======
  protected static $modules = ['filter', 'editor', 'ckeditor'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * A user with the 'administer filters' permission.
   *
   * @var \Drupal\user\UserInterface
   */
  protected $adminUser;

  /**
   * A random generated format machine name.
   *
   * @var string
   */
  protected $format;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $this->format = strtolower($this->randomMachineName());
    $filter_format = FilterFormat::create([
      'format' => $this->format,
      'name' => $this->randomString(),
      'filters' => [],
    ]);
    $filter_format->save();
    $editor = Editor::create([
      'format' => $this->format,
      'editor' => 'ckeditor',
    ]);
    $editor->save();

    $this->adminUser = $this->drupalCreateUser(['administer filters']);
  }

  /**
   * Tests StylesCombo settings for an existing text format.
   */
  public function testExistingFormat() {
    $ckeditor = $this->container->get('plugin.manager.editor')->createInstance('ckeditor');
    $default_settings = $ckeditor->getDefaultSettings();

    $this->drupalLogin($this->adminUser);
    $this->drupalGet('admin/config/content/formats/manage/' . $this->format);

    // Ensure an Editor config entity exists, with the proper settings.
    $expected_settings = $default_settings;
    $editor = Editor::load($this->format);
<<<<<<< HEAD
    $this->assertEqual($expected_settings, $editor->getSettings(), 'The Editor config entity has the correct settings.');
=======
    $this->assertEquals($expected_settings, $editor->getSettings(), 'The Editor config entity has the correct settings.');
>>>>>>> dev

    // Case 1: Configure the Styles plugin with different labels for each style,
    // and ensure the updated settings are saved.
    $this->drupalGet('admin/config/content/formats/manage/' . $this->format);
    $edit = [
<<<<<<< HEAD
      'editor[settings][plugins][stylescombo][styles]' => "h1.title|Title\np.callout|Callout\n\n",
    ];
    $this->drupalPostForm(NULL, $edit, t('Save configuration'));
    $expected_settings['plugins']['stylescombo']['styles'] = "h1.title|Title\np.callout|Callout\n\n";
    $editor = Editor::load($this->format);
    $this->assertEqual($expected_settings, $editor->getSettings(), 'The Editor config entity has the correct settings.');
=======
      'editor[settings][plugins][stylescombo][styles]' => "h1.title|Title\np.callout|Callout\ndrupal-entity.has-dashes|Allowing Dashes\n\n",
    ];
    $this->submitForm($edit, 'Save configuration');
    $expected_settings['plugins']['stylescombo']['styles'] = "h1.title|Title\np.callout|Callout\ndrupal-entity.has-dashes|Allowing Dashes\n\n";
    $editor = Editor::load($this->format);
    $this->assertEquals($expected_settings, $editor->getSettings(), 'The Editor config entity has the correct settings.');
>>>>>>> dev

    // Case 2: Configure the Styles plugin with same labels for each style, and
    // ensure that an error is displayed and that the updated settings are not
    // saved.
    $this->drupalGet('admin/config/content/formats/manage/' . $this->format);
    $edit = [
      'editor[settings][plugins][stylescombo][styles]' => "h1.title|Title\np.callout|Title\n\n",
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save configuration'));
    $this->assertRaw(t('Each style must have a unique label.'));
    $expected_settings['plugins']['stylescombo']['styles'] = "h1.title|Title\np.callout|Callout\n\n";
    $editor = Editor::load($this->format);
    $this->assertEqual($expected_settings, $editor->getSettings(), 'The Editor config entity has the correct settings.');
=======
    $this->submitForm($edit, 'Save configuration');
    $this->assertRaw(t('Each style must have a unique label.'));
    $editor = Editor::load($this->format);
    $this->assertEquals($expected_settings, $editor->getSettings(), 'The Editor config entity has the correct settings.');
>>>>>>> dev
  }

}
