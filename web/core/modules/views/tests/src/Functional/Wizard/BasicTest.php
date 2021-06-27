<?php

namespace Drupal\Tests\views\Functional\Wizard;

use Drupal\Component\Serialization\Json;
use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Url;
use Drupal\views\Views;

/**
 * Tests creating views with the wizard and viewing them on the listing page.
 *
 * @group views
 */
class BasicTest extends WizardTestBase {

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

    $this->drupalPlaceBlock('page_title_block');
  }

  public function testViewsWizardAndListing() {
    $this->drupalCreateContentType(['type' => 'article']);
    $this->drupalCreateContentType(['type' => 'page']);

    // Check if we can access the main views admin page.
    $this->drupalGet('admin/structure/views');
<<<<<<< HEAD
    $this->assertText(t('Add view'));
=======
    $this->assertSession()->pageTextContains('Add view');
>>>>>>> dev

    // Create a simple and not at all useful view.
    $view1 = [];
    $view1['label'] = $this->randomMachineName(16);
    $view1['id'] = strtolower($this->randomMachineName(16));
    $view1['description'] = $this->randomMachineName(16);
    $view1['page[create]'] = FALSE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view1, t('Save and edit'));
    $this->assertSession()->statusCodeEquals(200);
    $this->drupalGet('admin/structure/views');
    $this->assertText($view1['label']);
    $this->assertText($view1['description']);
    $this->assertLinkByHref(Url::fromRoute('entity.view.edit_form', ['view' => $view1['id']])->toString());
    $this->assertLinkByHref(Url::fromRoute('entity.view.delete_form', ['view' => $view1['id']])->toString());
    $this->assertLinkByHref(Url::fromRoute('entity.view.duplicate_form', ['view' => $view1['id']])->toString());

    // The view should not have a REST export display.
    $this->assertNoText('REST export', 'When no options are enabled in the wizard, the resulting view does not have a REST export display.');
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view1, 'Save and edit');
    $this->assertSession()->statusCodeEquals(200);
    $this->drupalGet('admin/structure/views');
    $this->assertSession()->pageTextContains($view1['label']);
    $this->assertSession()->pageTextContains($view1['description']);
    $this->assertSession()->linkByHrefExists(Url::fromRoute('entity.view.edit_form', ['view' => $view1['id']])->toString());
    $this->assertSession()->linkByHrefExists(Url::fromRoute('entity.view.delete_form', ['view' => $view1['id']])->toString());
    $this->assertSession()->linkByHrefExists(Url::fromRoute('entity.view.duplicate_form', ['view' => $view1['id']])->toString());

    // The view should not have a REST export display.
    $this->assertNoText('REST export');
>>>>>>> dev

    // This view should not have a block.
    $this->drupalGet('admin/structure/block');
    $this->assertNoText($view1['label']);

    // Create two nodes.
    $node1 = $this->drupalCreateNode(['type' => 'page']);
    $node2 = $this->drupalCreateNode(['type' => 'article']);

    // Now create a page with simple node listing and an attached feed.
    $view2 = [];
    $view2['label'] = $this->randomMachineName(16);
    $view2['id'] = strtolower($this->randomMachineName(16));
    $view2['description'] = $this->randomMachineName(16);
    $view2['page[create]'] = 1;
    $view2['page[title]'] = $this->randomMachineName(16);
    $view2['page[path]'] = $this->randomMachineName(16);
    $view2['page[feed]'] = 1;
    $view2['page[feed_properties][path]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view2, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view2, 'Save and edit');
>>>>>>> dev
    $this->drupalGet($view2['page[path]']);
    $this->assertSession()->statusCodeEquals(200);

    // Since the view has a page, we expect to be automatically redirected to
    // it.
<<<<<<< HEAD
    $this->assertUrl($view2['page[path]']);
    $this->assertText($view2['page[title]']);
    $this->assertText($node1->label());
    $this->assertText($node2->label());

    // Check if we have the feed.
    $this->assertLinkByHref(Url::fromRoute('view.' . $view2['id'] . '.feed_1')->toString());
=======
    $this->assertSession()->addressEquals($view2['page[path]']);
    $this->assertSession()->pageTextContains($view2['page[title]']);
    $this->assertSession()->pageTextContains($node1->label());
    $this->assertSession()->pageTextContains($node2->label());

    // Check if we have the feed.
    $this->assertSession()->linkByHrefExists(Url::fromRoute('view.' . $view2['id'] . '.feed_1')->toString());
>>>>>>> dev
    $elements = $this->cssSelect('link[href="' . Url::fromRoute('view.' . $view2['id'] . '.feed_1', [], ['absolute' => TRUE])->toString() . '"]');
    $this->assertCount(1, $elements, 'Feed found.');
    $this->drupalGet($view2['page[feed_properties][path]']);
    // Because the response is XML we can't use the page which depends on an
    // HTML tag being present.
    $this->assertEquals('2.0', $this->getSession()->getDriver()->getAttribute('//rss', 'version'));
    // The feed should have the same title and nodes as the page.
<<<<<<< HEAD
    $this->assertText($view2['page[title]']);
    $this->assertRaw($node1->toUrl('canonical', ['absolute' => TRUE])->toString());
    $this->assertText($node1->label());
    $this->assertRaw($node2->toUrl('canonical', ['absolute' => TRUE])->toString());
    $this->assertText($node2->label());

    // Go back to the views page and check if this view is there.
    $this->drupalGet('admin/structure/views');
    $this->assertText($view2['label']);
    $this->assertText($view2['description']);
    $this->assertLinkByHref(Url::fromRoute('view.' . $view2['id'] . '.page_1')->toString());

    // The view should not have a REST export display.
    $this->assertNoText('REST export', 'If only the page option was enabled in the wizard, the resulting view does not have a REST export display.');
=======
    $this->assertSession()->responseContains($view2['page[title]']);
    $this->assertRaw($node1->toUrl('canonical', ['absolute' => TRUE])->toString());
    $this->assertSession()->responseContains($node1->label());
    $this->assertRaw($node2->toUrl('canonical', ['absolute' => TRUE])->toString());
    $this->assertSession()->responseContains($node2->label());

    // Go back to the views page and check if this view is there.
    $this->drupalGet('admin/structure/views');
    $this->assertSession()->pageTextContains($view2['label']);
    $this->assertSession()->pageTextContains($view2['description']);
    $this->assertSession()->linkByHrefExists(Url::fromRoute('view.' . $view2['id'] . '.page_1')->toString());

    // The view should not have a REST export display.
    $this->assertNoText('REST export');
>>>>>>> dev

    // This view should not have a block.
    $this->drupalGet('admin/structure/block');
    $this->assertNoText('View: ' . $view2['label']);

    // Create a view with a page and a block, and filter the listing.
    $view3 = [];
    $view3['label'] = $this->randomMachineName(16);
    $view3['id'] = strtolower($this->randomMachineName(16));
    $view3['description'] = $this->randomMachineName(16);
    $view3['show[wizard_key]'] = 'node';
    $view3['show[type]'] = 'page';
    $view3['page[create]'] = 1;
    $view3['page[title]'] = $this->randomMachineName(16);
    $view3['page[path]'] = $this->randomMachineName(16);
    $view3['block[create]'] = 1;
    $view3['block[title]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view3, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view3, 'Save and edit');
>>>>>>> dev
    $this->drupalGet($view3['page[path]']);
    $this->assertSession()->statusCodeEquals(200);

    // Make sure the view only displays the node we expect.
<<<<<<< HEAD
    $this->assertUrl($view3['page[path]']);
    $this->assertText($view3['page[title]']);
    $this->assertText($node1->label());
=======
    $this->assertSession()->addressEquals($view3['page[path]']);
    $this->assertSession()->pageTextContains($view3['page[title]']);
    $this->assertSession()->pageTextContains($node1->label());
>>>>>>> dev
    $this->assertNoText($node2->label());

    // Go back to the views page and check if this view is there.
    $this->drupalGet('admin/structure/views');
<<<<<<< HEAD
    $this->assertText($view3['label']);
    $this->assertText($view3['description']);
    $this->assertLinkByHref(Url::fromRoute('view.' . $view3['id'] . '.page_1')->toString());

    // The view should not have a REST export display.
    $this->assertNoText('REST export', 'If only the page and block options were enabled in the wizard, the resulting view does not have a REST export display.');
=======
    $this->assertSession()->pageTextContains($view3['label']);
    $this->assertSession()->pageTextContains($view3['description']);
    $this->assertSession()->linkByHrefExists(Url::fromRoute('view.' . $view3['id'] . '.page_1')->toString());

    // The view should not have a REST export display.
    $this->assertNoText('REST export');
>>>>>>> dev

    // Confirm that the block is available in the block administration UI.
    $this->drupalGet('admin/structure/block/list/' . $this->config('system.theme')->get('default'));
    $this->clickLink('Place block');
<<<<<<< HEAD
    $this->assertText($view3['label']);
=======
    $this->assertSession()->pageTextContains($view3['label']);
>>>>>>> dev

    // Place the block.
    $this->drupalPlaceBlock("views_block:{$view3['id']}-block_1");

    // Visit a random page (not the one that displays the view itself) and look
    // for the expected node title in the block.
    $this->drupalGet('user');
<<<<<<< HEAD
    $this->assertText($node1->label());
    $this->assertNoText($node2->label());

    // Make sure the listing page doesn't show disabled default views.
    $this->assertNoText('tracker', 'Default tracker view does not show on the listing page.');
=======
    $this->assertSession()->pageTextContains($node1->label());
    $this->assertNoText($node2->label());

    // Make sure the listing page doesn't show disabled default views.
    $this->assertNoText('tracker');
>>>>>>> dev

    // Create a view with only a REST export.
    $view4 = [];
    $view4['label'] = $this->randomMachineName(16);
    $view4['id'] = strtolower($this->randomMachineName(16));
    $view4['description'] = $this->randomMachineName(16);
    $view4['show[wizard_key]'] = 'node';
    $view4['show[type]'] = 'page';
    $view4['rest_export[create]'] = 1;
    $view4['rest_export[path]'] = $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view4, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view4, 'Save and edit');
>>>>>>> dev
    $this->assertRaw(t('The view %view has been saved.', ['%view' => $view4['label']]));

    // Check that the REST export path works. JSON will work, as all core
    // formats will be allowed. JSON and XML by default.
    $this->drupalGet($view4['rest_export[path]'], ['query' => ['_format' => 'json']]);
    $this->assertSession()->statusCodeEquals(200);
    $data = Json::decode($this->getSession()->getPage()->getContent());
    $this->assertCount(1, $data, 'Only the node of type page is exported.');
    $node = reset($data);
<<<<<<< HEAD
    $this->assertEqual($node['nid'][0]['value'], $node1->id(), 'The node of type page is exported.');
=======
    $this->assertEquals($node1->id(), $node['nid'][0]['value'], 'The node of type page is exported.');
>>>>>>> dev

    // Create a view with a leading slash in the path and test that is properly
    // set.
    $leading_slash_view = [];
    $leading_slash_view['label'] = $this->randomMachineName(16);
    $leading_slash_view['id'] = strtolower($this->randomMachineName(16));
    $leading_slash_view['description'] = $this->randomMachineName(16);
    $leading_slash_view['show[wizard_key]'] = 'node';
    $leading_slash_view['show[type]'] = 'page';
    $leading_slash_view['page[create]'] = 1;
    $leading_slash_view['page[title]'] = $this->randomMachineName(16);
    $leading_slash_view['page[path]'] = '/' . $this->randomMachineName(16);
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $leading_slash_view, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($leading_slash_view, 'Save and edit');
>>>>>>> dev
    $this->assertEquals($leading_slash_view['page[path]'], $this->cssSelect('#views-page-1-path')[0]->getText());
  }

  /**
   * Tests default plugin values are populated from the wizard form.
   *
   * @see \Drupal\views\Plugin\views\display\DisplayPluginBase::mergeDefaults()
   */
  public function testWizardDefaultValues() {
    $random_id = strtolower($this->randomMachineName(16));
    // Create a basic view.
    $view = [];
    $view['label'] = $this->randomMachineName(16);
    $view['id'] = $random_id;
    $view['description'] = $this->randomMachineName(16);
    $view['page[create]'] = FALSE;
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/views/add', $view, t('Save and edit'));
=======
    $this->drupalGet('admin/structure/views/add');
    $this->submitForm($view, 'Save and edit');
>>>>>>> dev

    // Make sure the plugin types that should not have empty options don't have.
    // Test against all values is unit tested.
    // @see \Drupal\Tests\views\Kernel\Plugin\DisplayKernelTest
    $view = Views::getView($random_id);
    $displays = $view->storage->get('display');

    foreach ($displays as $display) {
      foreach (['query', 'exposed_form', 'pager', 'style', 'row'] as $type) {
        $this->assertFalse(empty($display['display_options'][$type]['options']), new FormattableMarkup('Default options found for @plugin.', ['@plugin' => $type]));
      }
    }
  }

}
