<?php

namespace Drupal\Tests\block_content\Functional\Views;

use Drupal\Tests\block_content\Functional\BlockContentTestBase;

/**
 * Tests block_content wizard and generic entity integration.
 *
 * @group block_content
 */
class BlockContentWizardTest extends BlockContentTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['block_content', 'views_ui'];
=======
  protected static $modules = ['block_content', 'views_ui'];
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
    $this->drupalLogin($this->drupalCreateUser(['administer views']));
    $this->createBlockContentType('Basic block');
  }

  /**
   * Tests creating a 'block_content' entity view.
   */
  public function testViewAddBlockContent() {
    $view = [];
    $view['label'] = $this->randomMachineName(16);
    $view['id'] = strtolower($this->randomMachineName(16));
    $view['description'] = $this->randomMachineName(16);
    $view['page[create]'] = FALSE;
    $view['show[wizard_key]'] = 'block_content';
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');
>>>>>>> dev

    $view_storage_controller = $this->container->get('entity_type.manager')->getStorage('view');
    /** @var \Drupal\views\Entity\View $view */
    $view = $view_storage_controller->load($view['id']);

    $display_options = $view->getDisplay('default')['display_options'];

    $this->assertEquals('block_content', $display_options['filters']['reusable']['entity_type']);
    $this->assertEquals('reusable', $display_options['filters']['reusable']['entity_field']);
    $this->assertEquals('boolean', $display_options['filters']['reusable']['plugin_id']);
    $this->assertEquals('1', $display_options['filters']['reusable']['value']);
  }

}
