<?php

namespace Drupal\Tests\views\Functional\Plugin;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Tests\views\Functional\ViewTestBase;
use Drupal\views\Views;
use Drupal\views_test_data\Plugin\views\filter\FilterTest as FilterPlugin;

/**
 * Tests general filter plugin functionality.
 *
 * @group views
 * @see \Drupal\views\Plugin\views\filter\FilterPluginBase
 */
class FilterTest extends ViewTestBase {

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_filter', 'test_filter_in_operator_ui'];

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['views_ui', 'node'];
=======
  protected static $modules = ['views_ui', 'node'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);

    $this->enableViewsTestModule();

    $this->adminUser = $this->drupalCreateUser(['administer views']);
    $this->drupalLogin($this->adminUser);
    $this->drupalCreateContentType(['type' => 'article', 'name' => 'Article']);
    $this->drupalCreateContentType(['type' => 'page', 'name' => 'Page']);
  }

  /**
   * {@inheritdoc}
   */
  protected function viewsData() {
    $data = parent::viewsData();
    $data['views_test_data']['name']['filter']['id'] = 'test_filter';

    return $data;
  }

  /**
<<<<<<< HEAD
   * Test query of the row plugin.
=======
   * Tests query of the row plugin.
>>>>>>> dev
   */
  public function testFilterQuery() {
    // Check that we can find the test filter plugin.
    $plugin = $this->container->get('plugin.manager.views.filter')->createInstance('test_filter');
    $this->assertInstanceOf(FilterPlugin::class, $plugin);

    $view = Views::getView('test_filter');
    $view->initDisplay();

    // Change the filtering.
    $view->displayHandlers->get('default')->overrideOption('filters', [
      'test_filter' => [
        'id' => 'test_filter',
        'table' => 'views_test_data',
        'field' => 'name',
        'operator' => '=',
        'value' => 'John',
        'group' => 0,
      ],
    ]);

    $this->executeView($view);

    // Make sure the query have where data.
    $this->assertTrue(!empty($view->query->where));

    // Check the data added.
    $where = $view->query->where;
<<<<<<< HEAD
    $this->assertIdentical($where[0]['conditions'][0]['field'], 'views_test_data.name', 'Where condition field matches');
    $this->assertIdentical($where[0]['conditions'][0]['value'], 'John', 'Where condition value matches');
    $this->assertIdentical($where[0]['conditions'][0]['operator'], '=', 'Where condition operator matches');
=======
    $this->assertSame('views_test_data.name', $where[0]['conditions'][0]['field'], 'Where condition field matches');
    $this->assertSame('John', $where[0]['conditions'][0]['value'], 'Where condition value matches');
    $this->assertSame('=', $where[0]['conditions'][0]['operator'], 'Where condition operator matches');
>>>>>>> dev

    $this->executeView($view);

    // Check that our operator and value match on the filter.
<<<<<<< HEAD
    $this->assertIdentical($view->filter['test_filter']->operator, '=');
    $this->assertIdentical($view->filter['test_filter']->value, 'John');
=======
    $this->assertSame('=', $view->filter['test_filter']->operator);
    $this->assertSame('John', $view->filter['test_filter']->value);
>>>>>>> dev

    // Check that we have a single element, as a result of applying the '= John'
    // filter.
    $this->assertCount(1, $view->result, new FormattableMarkup('Results were returned. @count results.', ['@count' => count($view->result)]));

    $view->destroy();

    $view->initDisplay();

    // Change the filtering.
    $view->displayHandlers->get('default')->overrideOption('filters', [
      'test_filter' => [
        'id' => 'test_filter',
        'table' => 'views_test_data',
        'field' => 'name',
        'operator' => '<>',
        'value' => 'John',
        'group' => 0,
      ],
    ]);

    $this->executeView($view);

    // Check that our operator and value match on the filter.
<<<<<<< HEAD
    $this->assertIdentical($view->filter['test_filter']->operator, '<>');
    $this->assertIdentical($view->filter['test_filter']->value, 'John');
=======
    $this->assertSame('<>', $view->filter['test_filter']->operator);
    $this->assertSame('John', $view->filter['test_filter']->value);
>>>>>>> dev

    // Check if we have the other elements in the dataset, as a result of
    // applying the '<> John' filter.
    $this->assertCount(4, $view->result, new FormattableMarkup('Results were returned. @count results.', ['@count' => count($view->result)]));

    $view->destroy();
    $view->initDisplay();

    // Set the test_enable option to FALSE. The 'where' clause should not be
    // added to the query.
    $view->displayHandlers->get('default')->overrideOption('filters', [
      'test_filter' => [
        'id' => 'test_filter',
        'table' => 'views_test_data',
        'field' => 'name',
        'operator' => '<>',
        'value' => 'John',
        'group' => 0,
        // Disable this option, so nothing should be added to the query.
        'test_enable' => FALSE,
      ],
    ]);

    // Execute the view again.
    $this->executeView($view);

    // Check if we have all 5 results.
    $this->assertCount(5, $view->result, new FormattableMarkup('All @count results returned', ['@count' => count($view->displayHandlers)]));
  }

  /**
<<<<<<< HEAD
   * Test no error message is displayed when all options are selected in an
   * exposed filter.
   */
  public function testInOperatorSelectAllOptions() {
    $view = Views::getView('test_filter_in_operator_ui');
    $row['row[type]'] = 'fields';
    $this->drupalPostForm('admin/structure/views/nojs/display/test_filter_in_operator_ui/default/row', $row, t('Apply'));
    $field['name[node_field_data.nid]'] = TRUE;
    $this->drupalPostForm('admin/structure/views/nojs/add-handler/test_filter_in_operator_ui/default/field', $field, t('Add and configure fields'));
    $this->drupalPostForm('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/field/nid', [], t('Apply'));
    $edit['options[value][all]'] = TRUE;
    $edit['options[value][article]'] = TRUE;
    $edit['options[value][page]'] = TRUE;
    $this->drupalPostForm('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/filter/type', $edit, t('Apply'));
    $this->drupalPostForm('admin/structure/views/view/test_filter_in_operator_ui/edit/default', [], t('Save'));
    $this->drupalPostForm(NULL, [], t('Update preview'));
=======
   * Tests no error message is displayed when all options are selected in an
   * exposed filter.
   */
  public function testInOperatorSelectAllOptions() {
    $row['row[type]'] = 'fields';
    $this->drupalGet('admin/structure/views/nojs/display/test_filter_in_operator_ui/default/row');
    $this->submitForm($row, 'Apply');
    $field['name[node_field_data.nid]'] = TRUE;
    $this->drupalGet('admin/structure/views/nojs/add-handler/test_filter_in_operator_ui/default/field');
    $this->submitForm($field, 'Add and configure fields');
    $this->drupalGet('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/field/nid');
    $this->submitForm([], 'Apply');
    $edit['options[value][all]'] = TRUE;
    $edit['options[value][article]'] = TRUE;
    $edit['options[value][page]'] = TRUE;
    $this->drupalGet('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/filter/type');
    $this->submitForm($edit, 'Apply');
    $this->drupalGet('admin/structure/views/view/test_filter_in_operator_ui/edit/default');
    $this->submitForm([], 'Save');
    $this->submitForm([], 'Update preview');
>>>>>>> dev
    $this->assertNoText('An illegal choice has been detected.');
  }

  /**
   * Tests the limit of the expose operator functionality.
   */
  public function testLimitExposedOperators() {

    $this->drupalGet('test_filter_in_operator_ui');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertOption('edit-nid-op', '<');
    $this->assertOption('edit-nid-op', '<=');
    $this->assertOption('edit-nid-op', '=');
    $this->assertNoOption('edit-nid-op', '>');
    $this->assertNoOption('edit-nid-op', '>=');

    // Because there are not operators that use the min and max fields, those
    // fields should not be in the exposed form.
    $this->assertFieldById('edit-nid-value');
    $this->assertNoFieldById('edit-nid-min');
    $this->assertNoFieldById('edit-nid-max');
=======
    $this->assertSession()->optionExists('edit-nid-op', '<');
    $this->assertSession()->optionExists('edit-nid-op', '<=');
    $this->assertSession()->optionExists('edit-nid-op', '=');
    $this->assertSession()->optionNotExists('edit-nid-op', '>');
    $this->assertSession()->optionNotExists('edit-nid-op', '>=');

    // Because there are not operators that use the min and max fields, those
    // fields should not be in the exposed form.
    $this->assertSession()->fieldExists('edit-nid-value');
    $this->assertSession()->fieldNotExists('edit-nid-min');
    $this->assertSession()->fieldNotExists('edit-nid-max');
>>>>>>> dev

    $edit = [];
    $edit['options[operator]'] = '>';
    $edit['options[expose][operator_list][]'] = ['>', '>=', 'between'];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/filter/nid', $edit, t('Apply'));
    $this->drupalPostForm('admin/structure/views/view/test_filter_in_operator_ui/edit/default', [], t('Save'));

    $this->drupalGet('test_filter_in_operator_ui');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoOption('edit-nid-op', '<');
    $this->assertNoOption('edit-nid-op', '<=');
    $this->assertNoOption('edit-nid-op', '=');
    $this->assertOption('edit-nid-op', '>');
    $this->assertOption('edit-nid-op', '>=');

    $this->assertFieldById('edit-nid-value');
    $this->assertFieldById('edit-nid-min');
    $this->assertFieldById('edit-nid-max');
=======
    $this->drupalGet('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/filter/nid');
    $this->submitForm($edit, 'Apply');
    $this->drupalGet('admin/structure/views/view/test_filter_in_operator_ui/edit/default');
    $this->submitForm([], 'Save');

    $this->drupalGet('test_filter_in_operator_ui');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->optionNotExists('edit-nid-op', '<');
    $this->assertSession()->optionNotExists('edit-nid-op', '<=');
    $this->assertSession()->optionNotExists('edit-nid-op', '=');
    $this->assertSession()->optionExists('edit-nid-op', '>');
    $this->assertSession()->optionExists('edit-nid-op', '>=');

    $this->assertSession()->fieldExists('edit-nid-value');
    $this->assertSession()->fieldExists('edit-nid-min');
    $this->assertSession()->fieldExists('edit-nid-max');
>>>>>>> dev

    // Set the default to an excluded operator.
    $edit = [];
    $edit['options[operator]'] = '=';
    $edit['options[expose][operator_list][]'] = ['<', '>'];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/filter/nid', $edit, t('Apply'));
    $this->assertText('You selected the "Is equal to" operator as the default value but is not included in the list of limited operators.');
=======
    $this->drupalGet('admin/structure/views/nojs/handler/test_filter_in_operator_ui/default/filter/nid');
    $this->submitForm($edit, 'Apply');
    $this->assertSession()->pageTextContains('You selected the "Is equal to" operator as the default value but is not included in the list of limited operators.');
>>>>>>> dev
  }

}
