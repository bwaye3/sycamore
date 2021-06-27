<?php

namespace Drupal\Tests\field\FunctionalJavascript\EntityReference;

<<<<<<< HEAD
use Drupal\Core\Url;
use Behat\Mink\Element\NodeElement;
use Drupal\Component\Render\FormattableMarkup;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Tests\field_ui\Traits\FieldUiTestTrait;
=======
use Behat\Mink\Element\NodeElement;
use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Url;
use Drupal\FunctionalJavascriptTests\WebDriverTestBase;
use Drupal\Tests\field_ui\Traits\FieldUiTestTrait;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
>>>>>>> dev

/**
 * Tests for the administrative UI.
 *
 * @group entity_reference
 */
class EntityReferenceAdminTest extends WebDriverTestBase {

  use FieldUiTestTrait;

  /**
   * Modules to install.
   *
   * Enable path module to ensure that the selection handler does not fail for
   * entities with a path field.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'node',
    'field_ui',
    'path',
    'taxonomy',
    'block',
    'views_ui',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * The name of the content type created for testing purposes.
   *
   * @var string
   */
  protected $type;

  /**
<<<<<<< HEAD
   * {@inheritdoc}
   */
  protected function setUp() {
=======
   * The name of a second content type to be used as a target of entity
   * references.
   *
   * @var string
   */
  protected $target_type;

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->drupalPlaceBlock('system_breadcrumb_block');

    // Create a content type, with underscores.
    $type_name = strtolower($this->randomMachineName(8)) . '_test';
    $type = $this->drupalCreateContentType(['name' => $type_name, 'type' => $type_name]);
    $this->type = $type->id();

<<<<<<< HEAD
=======
    // Create a second content type, to be a target for entity reference fields.
    $type_name = strtolower($this->randomMachineName(8)) . '_test';
    $type = $this->drupalCreateContentType(['name' => $type_name, 'type' => $type_name]);
    $this->target_type = $type->id();

    // Change the title field label.
    $fields = \Drupal::service('entity_field.manager')
      ->getFieldDefinitions('node', $type->id());
    $fields['title']->getConfig($type->id())
      ->setLabel($type->id() . ' title')->save();

    // Add text field to the second content type.
    FieldStorageConfig::create([
      'field_name' => 'field_text',
      'entity_type' => 'node',
      'type' => 'text',
      'entity_types' => ['node'],
    ])->save();
    FieldConfig::create([
      'label' => 'Text Field',
      'field_name' => 'field_text',
      'entity_type' => 'node',
      'bundle' => $this->target_type,
      'settings' => [],
      'required' => FALSE,
    ])->save();

>>>>>>> dev
    // Create test user.
    $admin_user = $this->drupalCreateUser([
      'access content',
      'administer node fields',
      'administer node display',
      'administer views',
<<<<<<< HEAD
      'create ' . $type_name . ' content',
      'edit own ' . $type_name . ' content',
=======
      'create ' . $this->type . ' content',
      'edit own ' . $this->type . ' content',
>>>>>>> dev
    ]);
    $this->drupalLogin($admin_user);
  }

  /**
   * Tests the Entity Reference Admin UI.
   */
  public function testFieldAdminHandler() {
    $bundle_path = 'admin/structure/types/manage/' . $this->type;

    $page = $this->getSession()->getPage();
    $assert_session = $this->assertSession();

    // First step: 'Add new field' on the 'Manage fields' page.
    $this->drupalGet($bundle_path . '/fields/add-field');

    // Check if the commonly referenced entity types appear in the list.
<<<<<<< HEAD
    $this->assertOption('edit-new-storage-type', 'field_ui:entity_reference:node');
    $this->assertOption('edit-new-storage-type', 'field_ui:entity_reference:user');

    $page->findField('new_storage_type')->setValue('entity_reference');
    $assert_session->waitForField('label')->setValue('Test');
    $machine_name = $assert_session->waitForElement('xpath', '//*[@id="edit-label-machine-name-suffix"]/span[2]/span[contains(text(), "field_test")]');
=======
    $this->assertSession()->optionExists('edit-new-storage-type', 'field_ui:entity_reference:node');
    $this->assertSession()->optionExists('edit-new-storage-type', 'field_ui:entity_reference:user');

    $page->findField('new_storage_type')->setValue('entity_reference');
    $assert_session->waitForField('label')->setValue('Test');
    $machine_name = $assert_session->waitForElement('xpath', '//*[@id="edit-label-machine-name-suffix"]/span[contains(text(), "field_test")]');
>>>>>>> dev
    $this->assertNotEmpty($machine_name);
    $page->pressButton('Save and continue');

    // Node should be selected by default.
<<<<<<< HEAD
    $this->assertFieldByName('settings[target_type]', 'node');
=======
    $this->assertSession()->fieldValueEquals('settings[target_type]', 'node');
>>>>>>> dev

    // Check that all entity types can be referenced.
    $this->assertFieldSelectOptions('settings[target_type]', array_keys(\Drupal::entityTypeManager()->getDefinitions()));

    // Second step: 'Field settings' form.
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save field settings'));

    // The base handler should be selected by default.
    $this->assertFieldByName('settings[handler]', 'default:node');
=======
    $this->submitForm([], 'Save field settings');

    // The base handler should be selected by default.
    $this->assertSession()->fieldValueEquals('settings[handler]', 'default:node');
>>>>>>> dev

    // The base handler settings should be displayed.
    $entity_type_id = 'node';
    // Check that the type label is correctly displayed.
    $assert_session->pageTextContains('Content type');
    // Check that sort options are not yet visible.
    $sort_by = $page->findField('settings[handler_settings][sort][field]');
    $this->assertNotEmpty($sort_by);
    $this->assertFalse($sort_by->isVisible(), 'The "sort by" options are hidden.');
<<<<<<< HEAD
    // Select all bundles so that sort options are available.
    $bundles = $this->container->get('entity_type.bundle.info')->getBundleInfo($entity_type_id);
    foreach ($bundles as $bundle_name => $bundle_info) {
      $this->assertFieldByName('settings[handler_settings][target_bundles][' . $bundle_name . ']');
      $page->findField('settings[handler_settings][target_bundles][' . $bundle_name . ']')->setValue($bundle_name);
      $assert_session->assertWaitOnAjaxRequest();
=======
    $bundles = $this->container->get('entity_type.bundle.info')->getBundleInfo($entity_type_id);
    foreach ($bundles as $bundle_name => $bundle_info) {
      $this->assertSession()->fieldExists('settings[handler_settings][target_bundles][' . $bundle_name . ']');
>>>>>>> dev
    }

    reset($bundles);

<<<<<<< HEAD
    // Test the sort settings.
    // Option 0: no sort.
    $this->assertFieldByName('settings[handler_settings][sort][field]', '_none');
    $sort_by = $page->findField('settings[handler_settings][sort][field]');
    $this->assertNoFieldByName('settings[handler_settings][sort][direction]');
    // Option 1: sort by field.
    $sort_by->setValue('nid');
    $assert_session->waitForField('settings[handler_settings][sort][direction]');
    $this->assertFieldByName('settings[handler_settings][sort][direction]', 'ASC');
=======
    // Initially, no bundles are selected so no sort options are available.
    $this->assertFieldSelectOptions('settings[handler_settings][sort][field]', ['_none']);

    // Select this bundle so that standard sort options are available.
    $page->findField('settings[handler_settings][target_bundles][' . $this->type . ']')->setValue($this->type);
    $assert_session->assertWaitOnAjaxRequest();
    // Test that a non-translatable base field is a sort option.
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'nid');
    // Test that a translatable base field is a sort option.
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'title');
    // Test that a configurable field is a sort option.
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'body.value');
    // Test that a field not on this bundle is not a sort option.
    $assert_session->optionNotExists('settings[handler_settings][sort][field]', 'field_text.value');
    // Test that the title option appears once, with the default label.
    $title_options = $sort_by->findAll('xpath', 'option[@value="title"]');
    $this->assertEquals(1, count($title_options));
    $this->assertEquals('Title', $title_options[0]->getText());

    // Also select the target bundle so that field_text is also available.
    $page->findField('settings[handler_settings][target_bundles][' . $this->target_type . ']')->setValue($this->target_type);
    $assert_session->assertWaitOnAjaxRequest();
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'nid');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'title');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'body.value');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'field_text.value');

    // Select only the target bundle. The options should be the same.
    $page->findField('settings[handler_settings][target_bundles][' . $this->type . ']')->uncheck();
    $assert_session->assertWaitOnAjaxRequest();
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'nid');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'title');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'body.value');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'field_text.value');
    // Exception: the title option has a different label.
    $title_options = $sort_by->findAll('xpath', 'option[@value="title"]');
    $this->assertEquals(1, count($title_options));
    $this->assertEquals($this->target_type . ' title', $title_options[0]->getText());

    // Test the sort settings.
    // Option 0: no sort.
    $this->assertSession()->fieldValueEquals('settings[handler_settings][sort][field]', '_none');
    $sort_direction = $page->findField('settings[handler_settings][sort][direction]');
    $this->assertFalse($sort_direction->isVisible());
    // Option 1: sort by field.
    $sort_by->setValue('nid');
    $assert_session->assertWaitOnAjaxRequest();
    $this->assertTrue($sort_direction->isVisible());
    $this->assertSession()->fieldValueEquals('settings[handler_settings][sort][direction]', 'ASC');
>>>>>>> dev

    // Test that the sort-by options are sorted.
    $labels = array_map(function (NodeElement $element) {
      return $element->getText();
    }, $sort_by->findAll('xpath', 'option'));
    for ($i = count($labels) - 1, $sorted = TRUE; $i > 0; --$i) {
      if ($labels[$i - 1] > $labels[$i]) {
        $sorted = FALSE;
        break;
      }
    }
    $this->assertTrue($sorted, 'The "sort by" options are sorted.');

<<<<<<< HEAD
    // Test that a non-translatable base field is a sort option.
    $this->assertFieldByXPath("//select[@name='settings[handler_settings][sort][field]']/option[@value='nid']");
    // Test that a translatable base field is a sort option.
    $this->assertFieldByXPath("//select[@name='settings[handler_settings][sort][field]']/option[@value='title']");
    // Test that a configurable field is a sort option.
    $this->assertFieldByXPath("//select[@name='settings[handler_settings][sort][field]']/option[@value='body.value']");

    // Set back to no sort.
    $sort_by->setValue('_none');
    $assert_session->assertWaitOnAjaxRequest();
    $this->assertNoFieldByName('settings[handler_settings][sort][direction]');

    // Third step: confirm.
    $this->drupalPostForm(NULL, [
      'required' => '1',
    ], t('Save settings'));

    // Check that the field appears in the overview form.
    $this->assertFieldByXPath('//table[@id="field-overview"]//tr[@id="field-test"]/td[1]', 'Test', 'Field was created and appears in the overview page.');
=======
    // Set back to no sort.
    $sort_by->setValue('_none');
    $assert_session->assertWaitOnAjaxRequest();
    $this->assertFalse($sort_direction->isVisible());

    // Sort by nid, then select no bundles. The sort fields and sort direction
    // should not display.
    $sort_by->setValue('nid');
    $assert_session->assertWaitOnAjaxRequest();
    foreach ($bundles as $bundle_name => $bundle_info) {
      $this->assertSession()->fieldExists('settings[handler_settings][target_bundles][' . $bundle_name . ']');
      $page->findField('settings[handler_settings][target_bundles][' . $bundle_name . ']')->uncheck();
      $assert_session->assertWaitOnAjaxRequest();
    }
    $this->assertFalse($sort_by->isVisible(), 'The "sort by" options are hidden.');
    $this->assertFalse($sort_direction->isVisible());

    // Select a bundle and check the same two fields.
    $page->findField('settings[handler_settings][target_bundles][' . $this->target_type . ']')->setValue($this->target_type);
    $assert_session->assertWaitOnAjaxRequest();
    $this->assertTrue($sort_by->isVisible(), 'The "sort by" options are visible.');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'field_text.value');

    // Un-select the bundle and check the same two fields.
    $page->findField('settings[handler_settings][target_bundles][' . $this->target_type . ']')->uncheck();
    $assert_session->assertWaitOnAjaxRequest();
    $this->assertFalse($sort_by->isVisible(), 'The "sort by" options are hidden yet again.');
    $this->assertFieldSelectOptions('settings[handler_settings][sort][field]', ['_none']);

    // Third step: confirm.
    $page->findField('settings[handler_settings][target_bundles][' . $this->target_type . ']')->setValue($this->target_type);
    $assert_session->assertWaitOnAjaxRequest();
    $this->submitForm(['required' => '1'], 'Save settings');

    // Check that the field appears in the overview form.
    $this->assertSession()->elementTextContains('xpath', '//table[@id="field-overview"]//tr[@id="field-test"]/td[1]', "Test");
>>>>>>> dev

    // Check that the field settings form can be submitted again, even when the
    // field is required.
    // The first 'Edit' link is for the Body field.
    $this->clickLink(t('Edit'), 1);
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save settings'));
=======
    $this->submitForm([], 'Save settings');
>>>>>>> dev

    // Switch the target type to 'taxonomy_term' and check that the settings
    // specific to its selection handler are displayed.
    $field_name = 'node.' . $this->type . '.field_test';
    $edit = [
      'settings[target_type]' => 'taxonomy_term',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($bundle_path . '/fields/' . $field_name . '/storage', $edit, t('Save field settings'));
    $this->drupalGet($bundle_path . '/fields/' . $field_name);
    $this->assertFieldByName('settings[handler_settings][auto_create]');
=======
    $this->drupalGet($bundle_path . '/fields/' . $field_name . '/storage');
    $this->submitForm($edit, 'Save field settings');
    $this->drupalGet($bundle_path . '/fields/' . $field_name);
    $this->assertSession()->fieldExists('settings[handler_settings][auto_create]');
>>>>>>> dev

    // Switch the target type to 'user' and check that the settings specific to
    // its selection handler are displayed.
    $field_name = 'node.' . $this->type . '.field_test';
    $edit = [
      'settings[target_type]' => 'user',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($bundle_path . '/fields/' . $field_name . '/storage', $edit, t('Save field settings'));
    $this->drupalGet($bundle_path . '/fields/' . $field_name);
    $this->assertFieldByName('settings[handler_settings][filter][type]', '_none');
    $this->assertFieldByName('settings[handler_settings][sort][field]', '_none');
=======
    $this->drupalGet($bundle_path . '/fields/' . $field_name . '/storage');
    $this->submitForm($edit, 'Save field settings');
    $this->drupalGet($bundle_path . '/fields/' . $field_name);
    $this->assertSession()->fieldValueEquals('settings[handler_settings][filter][type]', '_none');
    $this->assertSession()->fieldValueEquals('settings[handler_settings][sort][field]', '_none');
    $assert_session->optionNotExists('settings[handler_settings][sort][field]', 'nid');
    $assert_session->optionExists('settings[handler_settings][sort][field]', 'uid');

    // Check that sort direction is visible only when a sort field is selected.
    $sort_direction = $page->findField('settings[handler_settings][sort][direction]');
    $this->assertFalse($sort_direction->isVisible());
    $sort_by->setValue('name');
    $assert_session->assertWaitOnAjaxRequest();
    $this->assertTrue($sort_direction->isVisible());
>>>>>>> dev

    // Switch the target type to 'node'.
    $field_name = 'node.' . $this->type . '.field_test';
    $edit = [
      'settings[target_type]' => 'node',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($bundle_path . '/fields/' . $field_name . '/storage', $edit, t('Save field settings'));
=======
    $this->drupalGet($bundle_path . '/fields/' . $field_name . '/storage');
    $this->submitForm($edit, 'Save field settings');
>>>>>>> dev

    // Try to select the views handler.
    $this->drupalGet($bundle_path . '/fields/' . $field_name);
    $page->findField('settings[handler]')->setValue('views');
    $views_text = (string) new FormattableMarkup('No eligible views were found. <a href=":create">Create a view</a> with an <em>Entity Reference</em> display, or add such a display to an <a href=":existing">existing view</a>.', [
      ':create' => Url::fromRoute('views_ui.add')->toString(),
      ':existing' => Url::fromRoute('entity.view.collection')->toString(),
    ]);
    $assert_session->waitForElement('xpath', '//a[contains(text(), "Create a view")]');
    $assert_session->responseContains($views_text);

<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save settings'));
=======
    $this->submitForm([], 'Save settings');
>>>>>>> dev
    // If no eligible view is available we should see a message.
    $assert_session->pageTextContains('The views entity selection mode requires a view.');

    // Enable the entity_reference_test module which creates an eligible view.
    $this->container->get('module_installer')
      ->install(['entity_reference_test']);
    $this->resetAll();
    $this->drupalGet($bundle_path . '/fields/' . $field_name);
    $page->findField('settings[handler]')->setValue('views');
    $assert_session
      ->waitForField('settings[handler_settings][view][view_and_display]')
      ->setValue('test_entity_reference:entity_reference_1');
<<<<<<< HEAD
    $this->drupalPostForm(NULL, [], t('Save settings'));
=======
    $this->submitForm([], 'Save settings');
>>>>>>> dev
    $assert_session->pageTextContains('Saved Test configuration.');

    // Switch the target type to 'entity_test'.
    $edit = [
      'settings[target_type]' => 'entity_test',
    ];
<<<<<<< HEAD
    $this->drupalPostForm($bundle_path . '/fields/' . $field_name . '/storage', $edit, t('Save field settings'));
=======
    $this->drupalGet($bundle_path . '/fields/' . $field_name . '/storage');
    $this->submitForm($edit, 'Save field settings');
>>>>>>> dev
    $this->drupalGet($bundle_path . '/fields/' . $field_name);
    $page->findField('settings[handler]')->setValue('views');
    $assert_session
      ->waitForField('settings[handler_settings][view][view_and_display]')
      ->setValue('test_entity_reference_entity_test:entity_reference_1');
    $edit = [
      'required' => FALSE,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save settings'));
=======
    $this->submitForm($edit, 'Save settings');
>>>>>>> dev
    $assert_session->pageTextContains('Saved Test configuration.');
  }

  /**
   * Checks if a select element contains the specified options.
   *
   * @param string $name
   *   The field name.
   * @param array $expected_options
   *   An array of expected options.
   */
  protected function assertFieldSelectOptions($name, array $expected_options) {
<<<<<<< HEAD
    $xpath = $this->buildXPathQuery('//select[@name=:name]', [':name' => $name]);
    $fields = $this->xpath($xpath);
    if ($fields) {
      $field = $fields[0];
      $options = $field->findAll('xpath', 'option');
      $optgroups = $field->findAll('xpath', 'optgroup');
      foreach ($optgroups as $optgroup) {
        $options = array_merge($options, $optgroup->findAll('xpath', 'option'));
      }
      array_walk($options, function (NodeElement &$option) {
        $option = $option->getAttribute('value');
      });

      sort($options);
      sort($expected_options);

      $this->assertIdentical($options, $expected_options);
    }
    else {
      $this->fail('Unable to find field ' . $name);
    }
=======
    $field = $this->assertSession()->selectExists($name);
    $options = $field->findAll('xpath', 'option');
    $optgroups = $field->findAll('xpath', 'optgroup');
    foreach ($optgroups as $optgroup) {
      $options = array_merge($options, $optgroup->findAll('xpath', 'option'));
    }
    array_walk($options, function (NodeElement &$option) {
      $option = $option->getAttribute('value');
    });
    $this->assertEqualsCanonicalizing($expected_options, $options);
>>>>>>> dev
  }

}
