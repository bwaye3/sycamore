<?php

namespace Drupal\Tests\file\Functional;

<<<<<<< HEAD
use Drupal\Component\Render\FormattableMarkup;
=======
>>>>>>> dev
use Drupal\Core\Field\FieldStorageDefinitionInterface;
use Drupal\file\Entity\File;
use Drupal\node\Entity\Node;

/**
 * Tests the display of file fields in node and views.
 *
 * @group file
 */
class FileFieldDisplayTest extends FileFieldTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests normal formatter display on node display.
   */
  public function testNodeDisplay() {
    $field_name = strtolower($this->randomMachineName());
    $type_name = 'article';
    $field_storage_settings = [
      'display_field' => '1',
      'display_default' => '1',
      'cardinality' => FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED,
    ];
    $field_settings = [
      'description_field' => '1',
    ];
    $widget_settings = [];
    $this->createFileField($field_name, 'node', $type_name, $field_storage_settings, $field_settings, $widget_settings);

    // Create a new node *without* the file field set, and check that the field
    // is not shown for each node display.
    $node = $this->drupalCreateNode(['type' => $type_name]);
    // Check file_default last as the assertions below assume that this is the
    // case.
    $file_formatters = ['file_table', 'file_url_plain', 'hidden', 'file_default'];
    foreach ($file_formatters as $formatter) {
      if ($formatter === 'hidden') {
        $edit = [
          "fields[$field_name][region]" => 'hidden',
        ];
      }
      else {
        $edit = [
          "fields[$field_name][type]" => $formatter,
          "fields[$field_name][region]" => 'content',
        ];
      }
<<<<<<< HEAD
      $this->drupalPostForm("admin/structure/types/manage/$type_name/display", $edit, t('Save'));
      $this->drupalGet('node/' . $node->id());
      $this->assertNoText($field_name, new FormattableMarkup('Field label is hidden when no file attached for formatter %formatter', ['%formatter' => $formatter]));
=======
      $this->drupalGet("admin/structure/types/manage/{$type_name}/display");
      $this->submitForm($edit, 'Save');
      $this->drupalGet('node/' . $node->id());
      // Verify that the field label is hidden when no file is attached.
      $this->assertNoText($field_name);
>>>>>>> dev
    }

    $this->generateFile('escaped-&-text', 64, 10, 'text');
    $test_file = File::create([
      'uri' => 'public://escaped-&-text.txt',
      'name' => 'escaped-&-text',
      'filesize' => filesize('public://escaped-&-text.txt'),
    ]);

    // Create a new node with the uploaded file.
    $nid = $this->uploadNodeFile($test_file, $field_name, $type_name);

    // Check that the default formatter is displaying with the file name.
    $node_storage = $this->container->get('entity_type.manager')->getStorage('node');
    $node_storage->resetCache([$nid]);
    $node = $node_storage->load($nid);
    $node_file = File::load($node->{$field_name}->target_id);
    $file_link = [
      '#theme' => 'file_link',
      '#file' => $node_file,
    ];
    $default_output = \Drupal::service('renderer')->renderRoot($file_link);
<<<<<<< HEAD
    $this->assertRaw($default_output, 'Default formatter displaying correctly on full node view.');

    // Turn the "display" option off and check that the file is no longer displayed.
    $edit = [$field_name . '[0][display]' => FALSE];
    $this->drupalPostForm('node/' . $nid . '/edit', $edit, t('Save'));

    $this->assertNoRaw($default_output, 'Field is hidden when "display" option is unchecked.');
=======
    $this->assertRaw($default_output);

    // Turn the "display" option off and check that the file is no longer displayed.
    $edit = [$field_name . '[0][display]' => FALSE];
    $this->drupalGet('node/' . $nid . '/edit');
    $this->submitForm($edit, 'Save');

    $this->assertNoRaw($default_output);
>>>>>>> dev

    // Add a description and make sure that it is displayed.
    $description = $this->randomMachineName();
    $edit = [
      $field_name . '[0][description]' => $description,
      $field_name . '[0][display]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/' . $nid . '/edit', $edit, t('Save'));
    $this->assertText($description);
=======
    $this->drupalGet('node/' . $nid . '/edit');
    $this->submitForm($edit, 'Save');
    $this->assertSession()->pageTextContains($description);
>>>>>>> dev

    // Ensure the filename in the link's title attribute is escaped.
    $this->assertRaw('title="escaped-&amp;-text.txt"');

    // Test that fields appear as expected after during the preview.
    // Add a second file.
    $name = 'files[' . $field_name . '_1][]';
    $edit_upload[$name] = \Drupal::service('file_system')->realpath($test_file->getFileUri());
<<<<<<< HEAD
    $this->drupalPostForm("node/$nid/edit", $edit_upload, t('Upload'));
=======
    $this->drupalGet("node/{$nid}/edit");
    $this->submitForm($edit_upload, 'Upload');
>>>>>>> dev

    // Uncheck the display checkboxes and go to the preview.
    $edit[$field_name . '[0][display]'] = FALSE;
    $edit[$field_name . '[1][display]'] = FALSE;
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Preview'));
    $this->clickLink(t('Back to content editing'));
    $this->assertRaw($field_name . '[0][display]', 'First file appears as expected.');
    $this->assertRaw($field_name . '[1][display]', 'Second file appears as expected.');
    $this->assertSession()->responseContains($field_name . '[1][description]', 'Description of second file appears as expected.');

    // Check that the file fields don't contain duplicate HTML IDs.
    $this->assertNoDuplicateIds();
=======
    $this->submitForm($edit, 'Preview');
    $this->clickLink(t('Back to content editing'));
    // First file.
    $this->assertRaw($field_name . '[0][display]');
    // Second file.
    $this->assertRaw($field_name . '[1][display]');
    $this->assertSession()->responseContains($field_name . '[1][description]');

    // Check that the file fields don't contain duplicate HTML IDs.
    $this->assertSession()->pageContainsNoDuplicateId();
>>>>>>> dev
  }

  /**
   * Tests default display of File Field.
   */
  public function testDefaultFileFieldDisplay() {
    $field_name = strtolower($this->randomMachineName());
    $type_name = 'article';
    $field_storage_settings = [
      'display_field' => '1',
      'display_default' => '0',
      'cardinality' => FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED,
    ];
    $field_settings = [
      'description_field' => '1',
    ];
    $widget_settings = [];
    $this->createFileField($field_name, 'node', $type_name, $field_storage_settings, $field_settings, $widget_settings);

    $test_file = $this->getTestFile('text');

    // Create a new node with the uploaded file.
    $nid = $this->uploadNodeFile($test_file, $field_name, $type_name);

    $this->drupalGet('node/' . $nid . '/edit');
<<<<<<< HEAD
    $this->assertFieldByXPath('//input[@type="checkbox" and @name="' . $field_name . '[0][display]"]', NULL, 'Default file display checkbox field exists.');
    $this->assertFieldByXPath('//input[@type="checkbox" and @name="' . $field_name . '[0][display]" and not(@checked)]', NULL, 'Default file display is off.');
=======
    $this->assertSession()->fieldExists($field_name . '[0][display]');
    $this->assertSession()->checkboxNotChecked($field_name . '[0][display]');
>>>>>>> dev
  }

  /**
   * Tests description toggle for field instance configuration.
   */
  public function testDescToggle() {
    $type_name = 'test';
    $field_type = 'file';
    $field_name = strtolower($this->randomMachineName());
    // Use the UI to add a new content type that also contains a file field.
    $edit = [
      'name' => $type_name,
      'type' => $type_name,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/types/add', $edit, t('Save and manage fields'));
=======
    $this->drupalGet('admin/structure/types/add');
    $this->submitForm($edit, 'Save and manage fields');
>>>>>>> dev
    $edit = [
      'new_storage_type' => $field_type,
      'field_name' => $field_name,
      'label' => $this->randomString(),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('/admin/structure/types/manage/' . $type_name . '/fields/add-field', $edit, t('Save and continue'));
    $this->drupalPostForm(NULL, [], t('Save field settings'));
=======
    $this->drupalGet('/admin/structure/types/manage/' . $type_name . '/fields/add-field');
    $this->submitForm($edit, 'Save and continue');
    $this->submitForm([], 'Save field settings');
>>>>>>> dev
    // Ensure the description field is selected on the field instance settings
    // form. That's what this test is all about.
    $edit = [
      'settings[description_field]' => TRUE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save settings'));
=======
    $this->submitForm($edit, 'Save settings');
>>>>>>> dev
    // Add a node of our new type and upload a file to it.
    $file = current($this->drupalGetTestFiles('text'));
    $title = $this->randomString();
    $edit = [
      'title[0][value]' => $title,
      'files[field_' . $field_name . '_0]' => \Drupal::service('file_system')->realpath($file->uri),
    ];
<<<<<<< HEAD
    $this->drupalPostForm('node/add/' . $type_name, $edit, t('Save'));
    $node = $this->drupalGetNodeByTitle($title);
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->assertText(t('The description may be used as the label of the link to the file.'));
=======
    $this->drupalGet('node/add/' . $type_name);
    $this->submitForm($edit, 'Save');
    $node = $this->drupalGetNodeByTitle($title);
    $this->drupalGet('node/' . $node->id() . '/edit');
    $this->assertSession()->pageTextContains('The description may be used as the label of the link to the file.');
>>>>>>> dev
  }

  /**
   * Tests description display of File Field.
   */
  public function testDescriptionDefaultFileFieldDisplay() {
    $field_name = strtolower($this->randomMachineName());
    $type_name = 'article';
    $field_storage_settings = [
      'display_field' => '1',
      'display_default' => '1',
      'cardinality' => FieldStorageDefinitionInterface::CARDINALITY_UNLIMITED,
    ];
    $field_settings = [
      'description_field' => '1',
    ];
    $widget_settings = [];
    $this->createFileField($field_name, 'node', $type_name, $field_storage_settings, $field_settings, $widget_settings);

    $test_file = $this->getTestFile('text');

    // Create a new node with the uploaded file.
    $nid = $this->uploadNodeFile($test_file, $field_name, $type_name);

    // Add file description.
    $description = 'This is the test file description';
<<<<<<< HEAD
    $this->drupalPostForm("node/$nid/edit", [$field_name . '[0][description]' => $description], t('Save'));
=======
    $this->drupalGet("node/{$nid}/edit");
    $this->submitForm([
      $field_name . '[0][description]' => $description,
    ], 'Save');
>>>>>>> dev

    // Load uncached node.
    \Drupal::entityTypeManager()->getStorage('node')->resetCache([$nid]);
    $node = Node::load($nid);

    // Test default formatter.
    $this->drupalGet('node/' . $nid);
<<<<<<< HEAD
    $this->assertFieldByXPath('//a[@href="' . $node->{$field_name}->entity->createFileUrl(FALSE) . '"]', $description);
=======
    $this->assertSession()->elementTextContains('xpath', '//a[@href="' . $node->{$field_name}->entity->createFileUrl(FALSE) . '"]', $description);
>>>>>>> dev

    // Change formatter to "Table of files".
    $display = \Drupal::entityTypeManager()->getStorage('entity_view_display')->load('node.' . $type_name . '.default');
    $display->setComponent($field_name, [
      'label' => 'hidden',
      'type' => 'file_table',
    ])->save();

    $this->drupalGet('node/' . $nid);
<<<<<<< HEAD
    $this->assertFieldByXPath('//a[@href="' . $node->{$field_name}->entity->createFileUrl(FALSE) . '"]', $description);
  }

  /**
   * Asserts that each HTML ID is used for just a single element on the page.
   *
   * @param string $message
   *   (optional) A message to display with the assertion.
   */
  protected function assertNoDuplicateIds($message = '') {
    $args = ['@url' => $this->getUrl()];

    if (!$elements = $this->xpath('//*[@id]')) {
      $this->fail(new FormattableMarkup('The page @url contains no HTML IDs.', $args));
      return;
    }

    $message = $message ?: new FormattableMarkup('The page @url does not contain duplicate HTML IDs', $args);

    $seen_ids = [];
    foreach ($elements as $element) {
      $id = $element->getAttribute('id');
      if (isset($seen_ids[$id])) {
        $this->fail($message);
        return;
      }
      $seen_ids[$id] = TRUE;
    }
    $this->assertTrue(TRUE, $message);
=======
    $this->assertSession()->elementTextContains('xpath', '//a[@href="' . $node->{$field_name}->entity->createFileUrl(FALSE) . '"]', $description);
>>>>>>> dev
  }

}
