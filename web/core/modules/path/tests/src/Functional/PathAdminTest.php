<?php

namespace Drupal\Tests\path\Functional;

/**
 * Tests the Path admin UI.
 *
 * @group path
 */
class PathAdminTest extends PathTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['path'];
=======
  protected static $modules = ['path'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    // Create test user and log in.
    $web_user = $this->drupalCreateUser([
      'create page content',
      'edit own page content',
      'administer url aliases',
      'create url aliases',
    ]);
    $this->drupalLogin($web_user);
  }

  /**
   * Tests the filtering aspect of the Path UI.
   */
  public function testPathFiltering() {
    // Create test nodes.
    $node1 = $this->drupalCreateNode();
    $node2 = $this->drupalCreateNode();
    $node3 = $this->drupalCreateNode();

    // Create aliases.
    $alias1 = '/' . $this->randomMachineName(8);
    $edit = [
      'path[0][value]' => '/node/' . $node1->id(),
      'alias[0][value]' => $alias1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/search/path/add', $edit, t('Save'));
=======
    $this->drupalGet('admin/config/search/path/add');
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    $alias2 = '/' . $this->randomMachineName(8);
    $edit = [
      'path[0][value]' => '/node/' . $node2->id(),
      'alias[0][value]' => $alias2,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/search/path/add', $edit, t('Save'));
=======
    $this->drupalGet('admin/config/search/path/add');
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    $alias3 = '/' . $this->randomMachineName(4) . '/' . $this->randomMachineName(4);
    $edit = [
      'path[0][value]' => '/node/' . $node3->id(),
      'alias[0][value]' => $alias3,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/config/search/path/add', $edit, t('Save'));
=======
    $this->drupalGet('admin/config/search/path/add');
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    // Filter by the first alias.
    $edit = [
      'filter' => $alias1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Filter'));
    $this->assertLinkByHref($alias1);
    $this->assertNoLinkByHref($alias2);
    $this->assertNoLinkByHref($alias3);
=======
    $this->submitForm($edit, 'Filter');
    $this->assertSession()->linkByHrefExists($alias1);
    $this->assertSession()->linkByHrefNotExists($alias2);
    $this->assertSession()->linkByHrefNotExists($alias3);
>>>>>>> dev

    // Filter by the second alias.
    $edit = [
      'filter' => $alias2,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Filter'));
    $this->assertNoLinkByHref($alias1);
    $this->assertLinkByHref($alias2);
    $this->assertNoLinkByHref($alias3);
=======
    $this->submitForm($edit, 'Filter');
    $this->assertSession()->linkByHrefNotExists($alias1);
    $this->assertSession()->linkByHrefExists($alias2);
    $this->assertSession()->linkByHrefNotExists($alias3);
>>>>>>> dev

    // Filter by the third alias which has a slash.
    $edit = [
      'filter' => $alias3,
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Filter'));
    $this->assertNoLinkByHref($alias1);
    $this->assertNoLinkByHref($alias2);
    $this->assertLinkByHref($alias3);
=======
    $this->submitForm($edit, 'Filter');
    $this->assertSession()->linkByHrefNotExists($alias1);
    $this->assertSession()->linkByHrefNotExists($alias2);
    $this->assertSession()->linkByHrefExists($alias3);
>>>>>>> dev

    // Filter by a random string with a different length.
    $edit = [
      'filter' => $this->randomMachineName(10),
    ];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, t('Filter'));
    $this->assertNoLinkByHref($alias1);
    $this->assertNoLinkByHref($alias2);

    // Reset the filter.
    $edit = [];
    $this->drupalPostForm(NULL, $edit, t('Reset'));
    $this->assertLinkByHref($alias1);
    $this->assertLinkByHref($alias2);
=======
    $this->submitForm($edit, 'Filter');
    $this->assertSession()->linkByHrefNotExists($alias1);
    $this->assertSession()->linkByHrefNotExists($alias2);

    // Reset the filter.
    $edit = [];
    $this->submitForm($edit, 'Reset');
    $this->assertSession()->linkByHrefExists($alias1);
    $this->assertSession()->linkByHrefExists($alias2);
>>>>>>> dev
  }

}
