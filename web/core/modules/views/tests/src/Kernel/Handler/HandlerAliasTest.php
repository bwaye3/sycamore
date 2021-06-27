<?php

namespace Drupal\Tests\views\Kernel\Handler;

use Drupal\Tests\views\Kernel\ViewsKernelTestBase;
use Drupal\views\Views;

/**
 * Tests handler table and field aliases.
 *
 * @group views
 */
class HandlerAliasTest extends ViewsKernelTestBase {

<<<<<<< HEAD
  public static $modules = ['user'];
=======
  protected static $modules = ['user'];
>>>>>>> dev

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_filter', 'test_alias'];

<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp();

    $this->installEntitySchema('user');
  }

  /**
   * {@inheritdoc}
   */
  protected function viewsData() {
    $data = parent::viewsData();
    // User the existing test_filter plugin.
    $data['views_test_data_alias']['table']['real table'] = 'views_test_data';
    $data['views_test_data_alias']['name_alias']['filter']['id'] = 'test_filter';
    $data['views_test_data_alias']['name_alias']['filter']['real field'] = 'name';

    return $data;
  }

  public function testPluginAliases() {
    $view = Views::getView('test_filter');
    $view->initDisplay();

    // Change the filtering.
    $view->displayHandlers->get('default')->overrideOption('filters', [
      'test_filter' => [
        'id' => 'test_filter',
        'table' => 'views_test_data_alias',
        'field' => 'name_alias',
        'operator' => '=',
        'value' => 'John',
        'group' => 0,
      ],
    ]);

    $this->executeView($view);

    $filter = $view->filter['test_filter'];

    // Check the definition values are present.
<<<<<<< HEAD
    $this->assertIdentical($filter->definition['real table'], 'views_test_data');
    $this->assertIdentical($filter->definition['real field'], 'name');

    $this->assertIdentical($filter->table, 'views_test_data');
    $this->assertIdentical($filter->realField, 'name');
=======
    $this->assertSame('views_test_data', $filter->definition['real table']);
    $this->assertSame('name', $filter->definition['real field']);

    $this->assertSame('views_test_data', $filter->table);
    $this->assertSame('name', $filter->realField);
>>>>>>> dev

    // Test an existing user uid field.
    $view = Views::getView('test_alias');
    $view->initDisplay();
    $this->executeView($view);

    $filter = $view->filter['uid_raw'];

<<<<<<< HEAD
    $this->assertIdentical($filter->definition['real field'], 'uid');

    $this->assertIdentical($filter->field, 'uid_raw');
    $this->assertIdentical($filter->table, 'users_field_data');
    $this->assertIdentical($filter->realField, 'uid');
=======
    $this->assertSame('uid', $filter->definition['real field']);

    $this->assertSame('uid_raw', $filter->field);
    $this->assertSame('users_field_data', $filter->table);
    $this->assertSame('uid', $filter->realField);
>>>>>>> dev
  }

}
