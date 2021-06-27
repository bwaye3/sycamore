<?php

namespace Drupal\Tests\file\Functional;

use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;

/**
 * Uploads private files to translated node and checks access.
 *
 * @group file
 */
class PrivateFileOnTranslatedEntityTest extends FileFieldTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['language', 'content_translation'];
=======
  protected static $modules = ['language', 'content_translation'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * The name of the file field used in the test.
   *
   * @var string
   */
  protected $fieldName;

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create the "Basic page" node type.
    $this->drupalCreateContentType(['type' => 'page', 'name' => 'Basic page']);

    // Create a file field on the "Basic page" node type.
    $this->fieldName = strtolower($this->randomMachineName());
    $this->createFileField($this->fieldName, 'node', 'page', ['uri_scheme' => 'private']);

    // Create and log in user.
    $permissions = [
      'access administration pages',
      'administer content translation',
      'administer content types',
      'administer languages',
      'create content translations',
      'create page content',
      'edit any page content',
      'translate any entity',
    ];
    $admin_user = $this->drupalCreateUser($permissions);
    $this->drupalLogin($admin_user);

    // Add a second language.
    $edit = [];
    $edit['predefined_langcode'] = 'fr';
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/language/add', $edit, t('Add language'));
=======
    $this->drupalGet('admin/config/regional/language/add');
    $this->submitForm($edit, 'Add language');
>>>>>>> dev

    // Enable translation for "Basic page" nodes.
    $edit = [
      'entity_types[node]' => 1,
      'settings[node][page][translatable]' => 1,
      "settings[node][page][fields][$this->fieldName]" => 1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/regional/content-language', $edit, t('Save configuration'));
=======
    $this->drupalGet('admin/config/regional/content-language');
    $this->submitForm($edit, 'Save configuration');
>>>>>>> dev
  }

  /**
   * Tests private file fields on translated nodes.
   */
  public function testPrivateLanguageFile() {
    // Verify that the file field on the "Basic page" node type is translatable.
    $definitions = \Drupal::service('entity_field.manager')->getFieldDefinitions('node', 'page');
    $this->assertTrue($definitions[$this->fieldName]->isTranslatable(), 'Node file field is translatable.');

    // Create a default language node.
    $default_language_node = $this->drupalCreateNode(['type' => 'page']);

    // Edit the node to upload a file.
    $edit = [];
    $name = 'files[' . $this->fieldName . '_0]';
    $edit[$name] = \Drupal::service('file_system')->realpath($this->drupalGetTestFiles('text')[0]->uri);
<<<<<<< HEAD
    $this->drupalPostForm('node/' . $default_language_node->id() . '/edit', $edit, t('Save'));
=======
    $this->drupalGet('node/' . $default_language_node->id() . '/edit');
    $this->submitForm($edit, 'Save');
>>>>>>> dev
    $last_fid_prior = $this->getLastFileId();

    // Languages are cached on many levels, and we need to clear those caches.
    $this->rebuildContainer();

    // Ensure the file can be downloaded.
    \Drupal::entityTypeManager()->getStorage('node')->resetCache([$default_language_node->id()]);
    $node = Node::load($default_language_node->id());
    $node_file = File::load($node->{$this->fieldName}->target_id);
    $this->drupalGet(file_create_url($node_file->getFileUri()));
    $this->assertSession()->statusCodeEquals(200);

    // Translate the node into French.
    $this->drupalGet('node/' . $default_language_node->id() . '/translations');
    $this->clickLink(t('Add'));

    // Remove the existing file.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Remove'));
=======
    $this->submitForm([], 'Remove');
>>>>>>> dev

    // Upload a different file.
    $edit = [];
    $edit['title[0][value]'] = $this->randomMachineName();
    $name = 'files[' . $this->fieldName . '_0]';
    $edit[$name] = \Drupal::service('file_system')->realpath($this->drupalGetTestFiles('text')[1]->uri);
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save (this translation)'));
=======
    $this->submitForm($edit, 'Save (this translation)');
>>>>>>> dev
    $last_fid = $this->getLastFileId();

    // Verify the translation was created.
    \Drupal::entityTypeManager()->getStorage('node')->resetCache([$default_language_node->id()]);
    $default_language_node = Node::load($default_language_node->id());
    $this->assertTrue($default_language_node->hasTranslation('fr'), 'Node found in database.');
<<<<<<< HEAD
    $this->assertTrue($last_fid > $last_fid_prior, 'New file got saved.');
=======
    // Verify that the new file got saved.
    $this->assertGreaterThan($last_fid_prior, $last_fid);
>>>>>>> dev

    // Ensure the file attached to the translated node can be downloaded.
    $french_node = $default_language_node->getTranslation('fr');
    $node_file = File::load($french_node->{$this->fieldName}->target_id);
    $this->drupalGet(file_create_url($node_file->getFileUri()));
    $this->assertSession()->statusCodeEquals(200);
  }

}
