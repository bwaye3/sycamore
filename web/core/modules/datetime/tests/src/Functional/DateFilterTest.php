<?php

namespace Drupal\Tests\datetime\Functional;

use Drupal\datetime\Plugin\Field\FieldType\DateTimeItem;
use Drupal\field\Entity\FieldConfig;
use Drupal\field\Entity\FieldStorageConfig;
use Drupal\node\Entity\NodeType;
use Drupal\Tests\views\Functional\ViewTestBase;
use Drupal\views\Tests\ViewTestData;

/**
 * Test exposed datetime filters functionality.
 *
 * @group views
 * @see \Drupal\datetime\Plugin\views\filter\Date
 */
class DateFilterTest extends ViewTestBase {

  /**
   * A user with permission to administer views.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $adminUser;

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_exposed_filter_datetime'];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'datetime_test',
    'node',
    'datetime',
    'field',
    'views_ui',
  ];

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
    parent::setUp($import_test_views);
    ViewTestData::createTestViews(get_class($this), ['datetime_test']);
=======
  protected function setUp($import_test_views = TRUE): void {
    parent::setUp($import_test_views);
    ViewTestData::createTestViews(static::class, ['datetime_test']);
>>>>>>> dev

    // Add a date field to page nodes.
    $node_type = NodeType::create([
      'type' => 'page',
      'name' => 'page',
    ]);
    $node_type->save();
    $fieldStorage = FieldStorageConfig::create([
      'field_name' => 'field_date',
      'entity_type' => 'node',
      'type' => 'datetime',
      'settings' => ['datetime_type' => DateTimeItem::DATETIME_TYPE_DATETIME],
    ]);
    $fieldStorage->save();
    $field = FieldConfig::create([
      'field_storage' => $fieldStorage,
      'bundle' => 'page',
      'required' => TRUE,
    ]);
    $field->save();

    $this->adminUser = $this->drupalCreateUser(['administer views']);
    $this->drupalLogin($this->adminUser);
    $this->drupalCreateContentType(['type' => 'article', 'name' => 'Article']);
  }

  /**
   * Tests the limit of the expose operator functionality.
   */
  public function testLimitExposedOperators() {

    $this->drupalGet('test_exposed_filter_datetime');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertOption('edit-field-date-value-op', '=');
    $this->assertNoOption('edit-field-date-value-op', '>');
    $this->assertNoOption('edit-field-date-value-op', '>=');

    // Because there are not operators that use the min and max fields, those
    // fields should not be in the exposed form.
    $this->assertFieldById('edit-field-date-value-value');
    $this->assertNoFieldById('edit-field-date-value-min');
    $this->assertNoFieldById('edit-field-date-value-max');
=======
    $this->assertSession()->optionExists('edit-field-date-value-op', '=');
    $this->assertSession()->optionNotExists('edit-field-date-value-op', '>');
    $this->assertSession()->optionNotExists('edit-field-date-value-op', '>=');

    // Because there are not operators that use the min and max fields, those
    // fields should not be in the exposed form.
    $this->assertSession()->fieldExists('edit-field-date-value-value');
    $this->assertSession()->fieldNotExists('edit-field-date-value-min');
    $this->assertSession()->fieldNotExists('edit-field-date-value-max');
>>>>>>> dev

    $edit = [];
    $edit['options[operator]'] = '>';
    $edit['options[expose][operator_list][]'] = ['>', '>=', 'between'];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/nojs/handler/test_exposed_filter_datetime/default/filter/field_date_value', $edit, t('Apply'));
    $this->drupalPostForm('admin/structure/views/view/test_exposed_filter_datetime/edit/default', [], t('Save'));

    $this->drupalGet('test_exposed_filter_datetime');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoOption('edit-field-date-value-op', '<');
    $this->assertNoOption('edit-field-date-value-op', '<=');
    $this->assertNoOption('edit-field-date-value-op', '=');
    $this->assertOption('edit-field-date-value-op', '>');
    $this->assertOption('edit-field-date-value-op', '>=');

    $this->assertFieldById('edit-field-date-value-value');
    $this->assertFieldById('edit-field-date-value-min');
    $this->assertFieldById('edit-field-date-value-max');
=======
    $this->drupalGet('admin/structure/views/nojs/handler/test_exposed_filter_datetime/default/filter/field_date_value');
    $this->submitForm($edit, 'Apply');
    $this->drupalGet('admin/structure/views/view/test_exposed_filter_datetime/edit/default');
    $this->submitForm([], 'Save');

    $this->drupalGet('test_exposed_filter_datetime');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->optionNotExists('edit-field-date-value-op', '<');
    $this->assertSession()->optionNotExists('edit-field-date-value-op', '<=');
    $this->assertSession()->optionNotExists('edit-field-date-value-op', '=');
    $this->assertSession()->optionExists('edit-field-date-value-op', '>');
    $this->assertSession()->optionExists('edit-field-date-value-op', '>=');

    $this->assertSession()->fieldExists('edit-field-date-value-value');
    $this->assertSession()->fieldExists('edit-field-date-value-min');
    $this->assertSession()->fieldExists('edit-field-date-value-max');
>>>>>>> dev

    // Set the default to an excluded operator.
    $edit = [];
    $edit['options[operator]'] = '=';
    $edit['options[expose][operator_list][]'] = ['<', '>'];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/nojs/handler/test_exposed_filter_datetime/default/filter/field_date_value', $edit, t('Apply'));
    $this->assertText('You selected the "Is equal to" operator as the default value but is not included in the list of limited operators.');
=======
    $this->drupalGet('admin/structure/views/nojs/handler/test_exposed_filter_datetime/default/filter/field_date_value');
    $this->submitForm($edit, 'Apply');
    $this->assertSession()->pageTextContains('You selected the "Is equal to" operator as the default value but is not included in the list of limited operators.');
>>>>>>> dev
  }

}
