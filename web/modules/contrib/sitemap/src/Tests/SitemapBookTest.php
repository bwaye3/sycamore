<?php

namespace Drupal\sitemap\Tests;

<<<<<<< HEAD
use Drupal\simpletest\WebTestBase;
=======
use \Drupal\node\NodeInterface;
>>>>>>> dev

/**
 * Test the display of books based on sitemap settings.
 *
 * @group sitemap
 */
<<<<<<< HEAD
class SitemapBookTest extends WebTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
  public static $modules = array('sitemap', 'book');

  /**
   * A book node.
   *
   * @var object
=======
class SitemapBookTest extends SitemapBrowserTestBase {

  use SitemapTestTrait;

  /**
   * {@inheritdoc}
   */
  public static $modules = ['sitemap', 'book'];

  /**
   * The parent book node.
   *
   * @var NodeInterface
>>>>>>> dev
   */
  protected $book;

  /**
<<<<<<< HEAD
=======
   * Nodes that make up the content of the book.
   *
   * @var NodeInterface[]
   */
  protected $nodes;

  /**
>>>>>>> dev
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create user then login.
<<<<<<< HEAD
    $this->user = $this->drupalCreateUser(array(
=======
    $this->user = $this->drupalCreateUser([
>>>>>>> dev
      'administer sitemap',
      'access sitemap',
      'create book content',
      'create new books',
      'administer book outlines',
<<<<<<< HEAD
    ));
    $this->drupalLogin($this->user);
=======
    ]);
    $this->drupalLogin($this->user);

    $this->nodes = $this->createBook();
>>>>>>> dev
  }

  /**
   * Tests books.
   */
  public function testBooks() {
    // Assert that books are not included in the sitemap by default.
    $this->drupalGet('/sitemap');
<<<<<<< HEAD
    $elements = $this->cssSelect(".sitemap-box h2:contains('Books')");
    $this->assertEqual(count($elements), 0, 'Books are not included.');

    // Create new book.
    $nodes = $this->createBook();
    $book = $this->book;

    // Configure sitemap to show the test book.
    $bid = $book->id();
    $edit = array(
      'show_books[' . $bid . ']' => $bid,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));

    // Assert that all book links are displayed by default.
    $this->drupalGet('/sitemap');
    $this->assertLink($this->book->getTitle());
    foreach ($nodes as $node) {
      $this->assertLink($node->getTitle());
    }

    // Configure sitemap to not expand books.
    $edit = array(
      'books_expanded' => FALSE,
    );
    $this->drupalPostForm('admin/config/search/sitemap', $edit, t('Save configuration'));
=======
    $elements = $this->cssSelect(".sitemap-plugin--book");
    $this->assertEquals(count($elements), 0, 'Books are not included.');

    // Configure sitemap to show the test book.
    $bid = $this->book->id();
    $nodes = $this->nodes;
    $edit = [
      'plugins[book:' . $bid . '][enabled]' => TRUE,
    ];
    $this->saveSitemapForm($edit);

    // Assert that all book links are displayed by default.
    $this->drupalGet('/sitemap');
    $this->assertSession()->linkExists($this->book->getTitle());
    foreach ($nodes as $node) {
      $this->assertSession()->linkExists($node->getTitle());
    }

    // Configure sitemap to not expand books.
    $edit = [
      'plugins[book:' . $bid . '][settings][show_expanded]' => FALSE,
    ];
    $this->saveSitemapForm($edit);
>>>>>>> dev

    // Assert that the top-level book link is displayed, but that the others are
    // not.
    $this->drupalGet('/sitemap');
<<<<<<< HEAD
    $this->assertLink($this->book->getTitle());
    foreach ($nodes as $node) {
      $this->assertNoLink($node->getTitle());
=======
    $this->assertSession()->linkExists($this->book->getTitle());
    foreach ($nodes as $node) {
      $this->assertSession()->linkNotExists($node->getTitle());
>>>>>>> dev
    }

  }

<<<<<<< HEAD
=======
  /**
   * Tests a custom title setting for books.
   */
  public function testBooksCustomTitle() {
    $bid = $this->book->id();

    // Configure sitemap to show the test book.
    $this->saveSitemapForm(['plugins[book:' . $bid . '][enabled]' => TRUE]);

    $this->titleTest($this->book->label(), 'book', $bid,  TRUE);
  }

  // @TODO: test book crud
  // @TODO: test multiple books
>>>>>>> dev

  /**
   * Creates a new book with a page hierarchy. Adapted from BookTest.
   */
  protected function createBook() {
    $this->book = $this->createBookNode('new');
    $book = $this->book;

    /*
     * Add page hierarchy to book.
     * Node 00 (top level), created above
     *  |- Node 01
     *   |- Node 02
     *   |- Node 03
     *  |- Node 04
     *  |- Node 05
     */
<<<<<<< HEAD
    $nodes = array();
=======
    $nodes = [];
>>>>>>> dev
    $nodes[] = $this->createBookNode($book->id());
    $nodes[] = $this->createBookNode($book->id(), $nodes[0]->book['nid']);
    $nodes[] = $this->createBookNode($book->id(), $nodes[0]->book['nid']);
    $nodes[] = $this->createBookNode($book->id());
    $nodes[] = $this->createBookNode($book->id());

    return $nodes;
  }

<<<<<<< HEAD

=======
>>>>>>> dev
  /**
   * Creates a book node. From BookTest.
   *
   * @param int|string $book_nid
   *   A book node ID or set to 'new' to create a new book.
   * @param int|null $parent
   *   (optional) Parent book reference ID. Defaults to NULL.
   *
<<<<<<< HEAD
   * @return object
   *   Returns object
   */
  protected function createBookNode($book_nid, $parent = NULL) {
    // $number does not use drupal_static as it should not be reset
    // since it uniquely identifies each call to createBookNode().
    // Used to ensure that when sorted nodes stay in same order.
    static $number = 0;

    $edit = array();
    $edit['title[0][value]'] = str_pad($number, 2, '0', STR_PAD_LEFT) . ' - SimpleTest test node ' . $this->randomMachineName(10);
    $edit['body[0][value]'] = 'SimpleTest test body ' . $this->randomMachineName(32) . ' ' . $this->randomMachineName(32);
    $edit['book[bid]'] = $book_nid;
=======
   * @return NodeInterface
   *   Returns object
   *
   * @throws \Exception
   */
  protected function createBookNode($bid, $parent = NULL) {
    $edit = [
      'title[0][value]' => $this->randomMachineName(10),
      'book[bid]' => $bid
    ];
>>>>>>> dev

    if ($parent !== NULL) {
      $this->drupalPostForm('node/add/book', $edit, t('Change book (update list of parents)'));

      $edit['book[pid]'] = $parent;
      $this->drupalPostForm(NULL, $edit, t('Save'));
    }
    else {
      $this->drupalPostForm('node/add/book', $edit, t('Save'));
    }

<<<<<<< HEAD
    $node = $this->drupalGetNodeByTitle($edit['title[0][value]']);
    $number++;

    return $node;
=======
    return $this->drupalGetNodeByTitle($edit['title[0][value]']);
>>>>>>> dev
  }

}
