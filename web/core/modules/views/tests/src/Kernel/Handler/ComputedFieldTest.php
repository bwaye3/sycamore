<?php

namespace Drupal\Tests\views\Kernel\Handler;

use Drupal\entity_test\Entity\EntityTestComputedField;
use Drupal\Tests\views\Kernel\ViewsKernelTestBase;
use Drupal\views\Views;

/**
 * Provides some integration tests for the Field handler.
 *
 * @see \Drupal\views\Plugin\views\field\EntityField
 * @group views
 */
class ComputedFieldTest extends ViewsKernelTestBase {

  /**
   * Views to be enabled.
   *
   * @var array
   */
  public static $testViews = ['computed_field_view'];

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['entity_test'];
=======
  protected static $modules = ['entity_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp($import_test_views = TRUE) {
=======
  protected function setUp($import_test_views = TRUE): void {
>>>>>>> dev
    parent::setUp($import_test_views);

    $this->installEntitySchema('entity_test_computed_field');
  }

  /**
<<<<<<< HEAD
   * Test the computed field handler.
=======
   * Tests the computed field handler.
>>>>>>> dev
   */
  public function testComputedFieldHandler() {
    \Drupal::state()->set('entity_test_computed_field_item_list_value', ['computed string']);

    $entity = EntityTestComputedField::create([]);
    $entity->save();

    $view = Views::getView('computed_field_view');

    $rendered_view = $view->preview();
    $output = $this->container->get('renderer')->renderRoot($rendered_view);
    $this->assertStringContainsString('computed string', (string) $output);
  }

}
