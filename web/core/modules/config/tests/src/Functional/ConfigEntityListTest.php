<?php

namespace Drupal\Tests\config\Functional;

use Drupal\Core\Routing\RedirectDestinationTrait;
use Drupal\config_test\Entity\ConfigTest;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests the listing of configuration entities.
 *
 * @group config
 */
class ConfigEntityListTest extends BrowserTestBase {

  use RedirectDestinationTrait;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['block', 'config_test'];
=======
  protected static $modules = ['block', 'config_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'classy';

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    // Delete the override config_test entity since it is not required by this
    // test.
    \Drupal::entityTypeManager()->getStorage('config_test')->load('override')->delete();
    $this->drupalPlaceBlock('local_actions_block');
  }

  /**
   * Tests entity list builder methods.
   */
  public function testList() {
    $controller = \Drupal::entityTypeManager()->getListBuilder('config_test');

    // Test getStorage() method.
    $this->assertInstanceOf(EntityStorageInterface::class, $controller->getStorage());

    // Get a list of ConfigTest entities and confirm that it contains the
    // ConfigTest entity provided by the config_test module.
    // @see config_test.dynamic.dotted.default.yml
    $list = $controller->load();
    $this->assertCount(1, $list, '1 ConfigTest entity found.');
    $entity = $list['dotted.default'];
    $this->assertInstanceOf(ConfigTest::class, $entity);

    // Test getOperations() method.
    $expected_operations = [
      'edit' => [
        'title' => t('Edit'),
        'weight' => 10,
        'url' => $entity->toUrl()->setOption('query', $this->getRedirectDestination()->getAsArray()),
      ],
      'disable' => [
        'title' => t('Disable'),
        'weight' => 40,
        'url' => $entity->toUrl('disable')->setOption('query', $this->getRedirectDestination()->getAsArray()),
      ],
      'delete' => [
        'title' => t('Delete'),
        'weight' => 100,
        'url' => $entity->toUrl('delete-form')->setOption('query', $this->getRedirectDestination()->getAsArray()),
      ],
    ];

    $actual_operations = $controller->getOperations($entity);
    // Sort the operations to normalize link order.
    uasort($actual_operations, ['Drupal\Component\Utility\SortArray', 'sortByWeightElement']);
    $this->assertEquals($expected_operations, $actual_operations, 'The operations are identical.');

    // Test buildHeader() method.
    $expected_items = [
      'label' => 'Label',
      'id' => 'Machine name',
      'operations' => 'Operations',
    ];
    $actual_items = $controller->buildHeader();
    $this->assertEquals($expected_items, $actual_items, 'Return value from buildHeader matches expected.');

    // Test buildRow() method.
    $build_operations = $controller->buildOperations($entity);
    $expected_items = [
      'label' => 'Default',
      'id' => 'dotted.default',
      'operations' => [
        'data' => $build_operations,
      ],
    ];
    $actual_items = $controller->buildRow($entity);
    $this->assertEquals($expected_items, $actual_items, 'Return value from buildRow matches expected.');
    // Test sorting.
    $storage = $controller->getStorage();
    $entity = $storage->create([
      'id' => 'alpha',
      'label' => 'Alpha',
      'weight' => 1,
    ]);
    $entity->save();
    $entity = $storage->create([
      'id' => 'omega',
      'label' => 'Omega',
      'weight' => 1,
    ]);
    $entity->save();
    $entity = $storage->create([
      'id' => 'beta',
      'label' => 'Beta',
      'weight' => 0,
    ]);
    $entity->save();
    $list = $controller->load();
<<<<<<< HEAD
    $this->assertIdentical(array_keys($list), ['beta', 'dotted.default', 'alpha', 'omega']);
=======
    $this->assertSame(['beta', 'dotted.default', 'alpha', 'omega'], array_keys($list));
>>>>>>> dev

    // Test that config entities that do not support status, do not have
    // enable/disable operations.
    $controller = $this->container->get('entity_type.manager')
      ->getListBuilder('config_test_no_status');

    $list = $controller->load();
    $entity = $list['default'];

    // Test getOperations() method.
    $expected_operations = [
      'edit' => [
        'title' => t('Edit'),
        'weight' => 10,
        'url' => $entity->toUrl()->setOption('query', $this->getRedirectDestination()->getAsArray()),
      ],
      'delete' => [
        'title' => t('Delete'),
        'weight' => 100,
        'url' => $entity->toUrl('delete-form')->setOption('query', $this->getRedirectDestination()->getAsArray()),
      ],
    ];

    $actual_operations = $controller->getOperations($entity);
    // Sort the operations to normalize link order.
    uasort($actual_operations, ['Drupal\Component\Utility\SortArray', 'sortByWeightElement']);
    $this->assertEquals($expected_operations, $actual_operations, 'The operations are identical.');
  }

  /**
   * Tests the listing UI.
   */
  public function testListUI() {
    // Log in as an administrative user to access the full menu trail.
    $this->drupalLogin($this->drupalCreateUser([
      'access administration pages',
      'administer site configuration',
    ]));

    // Get the list callback page.
    $this->drupalGet('admin/structure/config_test');

    // Test for the page title.
<<<<<<< HEAD
    $this->assertTitle('Test configuration | Drupal');

    // Test for the table.
    $element = $this->xpath('//div[@class="layout-content"]//table');
    $this->assertCount(1, $element, 'Configuration entity list table found.');

    // Test the table header.
    $elements = $this->xpath('//div[@class="layout-content"]//table/thead/tr/th');
    $this->assertCount(3, $elements, 'Correct number of table header cells found.');

    // Test the contents of each th cell.
    $expected_items = ['Label', 'Machine name', 'Operations'];
    foreach ($elements as $key => $element) {
      $this->assertIdentical($element->getText(), $expected_items[$key]);
    }

    // Check the number of table row cells.
    $elements = $this->xpath('//div[@class="layout-content"]//table/tbody/tr[@class="odd"]/td');
    $this->assertCount(3, $elements, 'Correct number of table row cells found.');
=======
    $this->assertSession()->titleEquals('Test configuration | Drupal');

    // Test for the table.
    $this->assertSession()->elementsCount('xpath', '//div[@class="layout-content"]//table', 1);

    // Test the table header.
    $this->assertSession()->elementsCount('xpath', '//div[@class="layout-content"]//table/thead/tr/th', 3);

    // Test the contents of each th cell.
    $this->assertSession()->elementTextEquals('xpath', '//div[@class="layout-content"]//table/thead/tr/th[1]', 'Label');
    $this->assertSession()->elementTextEquals('xpath', '//div[@class="layout-content"]//table/thead/tr/th[2]', 'Machine name');
    $this->assertSession()->elementTextEquals('xpath', '//div[@class="layout-content"]//table/thead/tr/th[3]', 'Operations');

    // Check the number of table row cells.
    $this->assertSession()->elementsCount('xpath', '//div[@class="layout-content"]//table/tbody/tr[@class="odd"]/td', 3);
>>>>>>> dev

    // Check the contents of each row cell. The first cell contains the label,
    // the second contains the machine name, and the third contains the
    // operations list.
<<<<<<< HEAD
    $this->assertIdentical($elements[0]->getText(), 'Default');
    $this->assertIdentical($elements[1]->getText(), 'dotted.default');
    $this->assertNotEmpty($elements[2]->find('xpath', '//ul'), 'Operations list found.');
=======
    $this->assertSession()->elementTextEquals('xpath', '//div[@class="layout-content"]//table/tbody/tr[@class="odd"]/td[1]', 'Default');
    $this->assertSession()->elementTextEquals('xpath', '//div[@class="layout-content"]//table/tbody/tr[@class="odd"]/td[2]', 'dotted.default');
    $this->assertSession()->elementExists('xpath', '//div[@class="layout-content"]//table/tbody/tr[@class="odd"]/td[3]//ul');
>>>>>>> dev

    // Add a new entity using the operations link.
    $this->assertSession()->linkExists('Add test configuration');
    $this->clickLink('Add test configuration');
    $this->assertSession()->statusCodeEquals(200);
    $edit = [
      'label' => 'Antelope',
      'id' => 'antelope',
      'weight' => 1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Save'));
=======
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Ensure that the entity's sort method was called.
    $this->assertTrue(\Drupal::state()->get('config_entity_sort'), 'ConfigTest::sort() was called.');

    // Confirm that the user is returned to the listing, and verify that the
    // text of the label and machine name appears in the list (versus elsewhere
    // on the page).
<<<<<<< HEAD
    $this->assertFieldByXpath('//td', 'Antelope', "Label found for added 'Antelope' entity.");
    $this->assertFieldByXpath('//td', 'antelope', "Machine name found for added 'Antelope' entity.");

    // Edit the entity using the operations link.
    $this->assertLinkByHref('admin/structure/config_test/manage/antelope');
    $this->clickLink('Edit', 1);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertTitle('Edit Antelope | Drupal');
    $edit = ['label' => 'Albatross', 'id' => 'albatross'];
    $this->drupalPostForm(NULL, $edit, t('Save'));
=======
    $this->assertSession()->elementExists('xpath', '//td[text() = "Antelope"]');
    $this->assertSession()->elementExists('xpath', '//td[text() = "antelope"]');

    // Edit the entity using the operations link.
    $this->assertSession()->linkByHrefExists('admin/structure/config_test/manage/antelope');
    $this->clickLink('Edit', 1);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->titleEquals('Edit Antelope | Drupal');
    $edit = ['label' => 'Albatross', 'id' => 'albatross'];
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Confirm that the user is returned to the listing, and verify that the
    // text of the label and machine name appears in the list (versus elsewhere
    // on the page).
<<<<<<< HEAD
    $this->assertFieldByXpath('//td', 'Albatross', "Label found for updated 'Albatross' entity.");
    $this->assertFieldByXpath('//td', 'albatross', "Machine name found for updated 'Albatross' entity.");

    // Delete the added entity using the operations link.
    $this->assertLinkByHref('admin/structure/config_test/manage/albatross/delete');
    $this->clickLink('Delete', 1);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertTitle('Are you sure you want to delete the test configuration Albatross? | Drupal');
    $this->drupalPostForm(NULL, [], t('Delete'));

    // Verify that the text of the label and machine name does not appear in
    // the list (though it may appear elsewhere on the page).
    $this->assertNoFieldByXpath('//td', 'Albatross', "No label found for deleted 'Albatross' entity.");
    $this->assertNoFieldByXpath('//td', 'albatross', "No machine name found for deleted 'Albatross' entity.");
=======
    $this->assertSession()->elementExists('xpath', '//td[text() = "Albatross"]');
    $this->assertSession()->elementExists('xpath', '//td[text() = "albatross"]');

    // Delete the added entity using the operations link.
    $this->assertSession()->linkByHrefExists('admin/structure/config_test/manage/albatross/delete');
    $this->clickLink('Delete', 1);
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->titleEquals('Are you sure you want to delete the test configuration Albatross? | Drupal');
    $this->submitForm([], 'Delete');

    // Verify that the text of the label and machine name does not appear in
    // the list (though it may appear elsewhere on the page).
    $this->assertSession()->elementNotExists('xpath', '//td[text() = "Albatross"]');
    $this->assertSession()->elementNotExists('xpath', '//td[text() = "albatross"]');
>>>>>>> dev

    // Delete the original entity using the operations link.
    $this->clickLink('Delete');
    $this->assertSession()->statusCodeEquals(200);
<<<<<<< HEAD
    $this->assertTitle('Are you sure you want to delete the test configuration Default? | Drupal');
    $this->drupalPostForm(NULL, [], t('Delete'));

    // Verify that the text of the label and machine name does not appear in
    // the list (though it may appear elsewhere on the page).
    $this->assertNoFieldByXpath('//td', 'Default', "No label found for deleted 'Default' entity.");
    $this->assertNoFieldByXpath('//td', 'dotted.default', "No machine name found for deleted 'Default' entity.");

    // Confirm that the empty text is displayed.
    $this->assertText('There are no test configuration entities yet.');
  }

  /**
   * Test paging.
=======
    $this->assertSession()->titleEquals('Are you sure you want to delete the test configuration Default? | Drupal');
    $this->submitForm([], 'Delete');

    // Verify that the text of the label and machine name does not appear in
    // the list (though it may appear elsewhere on the page).
    $this->assertSession()->elementNotExists('xpath', '//td[text() = "Default"]');
    $this->assertSession()->elementNotExists('xpath', '//td[text() = "dotted.default"]');

    // Confirm that the empty text is displayed.
    $this->assertSession()->pageTextContains('There are no test configuration entities yet.');
  }

  /**
   * Tests paging.
>>>>>>> dev
   */
  public function testPager() {
    $this->drupalLogin($this->drupalCreateUser([
      'administer site configuration',
    ]));

    $storage = \Drupal::service('entity_type.manager')->getListBuilder('config_test')->getStorage();

    // Create 51 test entities.
    for ($i = 1; $i < 52; $i++) {
      $storage->create([
        'id' => str_pad($i, 2, '0', STR_PAD_LEFT),
        'label' => 'Test config entity ' . $i,
        'weight' => $i,
        'protected_property' => $i,
      ])->save();
    }

    // Load the listing page.
    $this->drupalGet('admin/structure/config_test');

    // Item 51 should not be present.
<<<<<<< HEAD
    $this->assertRaw('Test config entity 50', 'Config entity 50 is shown.');
    $this->assertNoRaw('Test config entity 51', 'Config entity 51 is on the next page.');

    // Browse to the next page.
    $this->clickLink(t('Page 2'));
    $this->assertNoRaw('Test config entity 50', 'Test config entity 50 is on the previous page.');
    $this->assertRaw('dotted.default', 'Default config entity appears on page 2.');
    $this->assertRaw('Test config entity 51', 'Test config entity 51 is on page 2.');
=======
    $this->assertRaw('Test config entity 50');
    $this->assertNoRaw('Test config entity 51');

    // Browse to the next page, test config entity 51 is on page 2.
    $this->clickLink(t('Page 2'));
    $this->assertNoRaw('Test config entity 50');
    $this->assertRaw('dotted.default');
    $this->assertRaw('Test config entity 51');
>>>>>>> dev
  }

}
