<?php

namespace Drupal\Tests\views\Kernel\Handler;

use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\Tests\views\Kernel\ViewsKernelTestBase;
use Drupal\views\Views;

/**
 * Tests the core Drupal\views\Plugin\views\field\Url handler.
 *
 * @group views
 */
class FieldUrlTest extends ViewsKernelTestBase {

<<<<<<< HEAD
  public static $modules = ['system'];
=======
  protected static $modules = ['system'];
>>>>>>> dev

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_view'];

  public function viewsData() {
    $data = parent::viewsData();
    $data['views_test_data']['name']['field']['id'] = 'url';
    return $data;
  }

  public function testFieldUrl() {
    $view = Views::getView('test_view');
    $view->setDisplay();

    $view->displayHandlers->get('default')->overrideOption('fields', [
      'name' => [
        'id' => 'name',
        'table' => 'views_test_data',
        'field' => 'name',
        'relationship' => 'none',
        'display_as_link' => FALSE,
      ],
    ]);

    $this->executeView($view);

<<<<<<< HEAD
    $this->assertEqual('John', $view->field['name']->advancedRender($view->result[0]));
=======
    $this->assertEquals('John', $view->field['name']->advancedRender($view->result[0]));
>>>>>>> dev

    // Make the url a link.
    $view->destroy();
    $view->setDisplay();

    $view->displayHandlers->get('default')->overrideOption('fields', [
      'name' => [
        'id' => 'name',
        'table' => 'views_test_data',
        'field' => 'name',
        'relationship' => 'none',
      ],
    ]);

    $this->executeView($view);

<<<<<<< HEAD
    $this->assertEqual(Link::fromTextAndUrl('John', Url::fromUri('base:John'))->toString(), $view->field['name']->advancedRender($view->result[0]));
=======
    $this->assertEquals(Link::fromTextAndUrl('John', Url::fromUri('base:John'))->toString(), $view->field['name']->advancedRender($view->result[0]));
>>>>>>> dev
  }

}
