<?php

namespace Drupal\Tests\search\Kernel;

<<<<<<< HEAD
use Drupal\Core\Language\LanguageInterface;
=======
>>>>>>> dev
use Drupal\KernelTests\KernelTestBase;

/**
 * Tests deprecated search methods.
 *
 * @group legacy
 * @group search
 */
class SearchDeprecationTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = ['search'];
=======
  protected static $modules = ['search'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->installSchema('search', [
      'search_index',
      'search_dataset',
      'search_total',
    ]);
    $this->installConfig(['search']);
  }

<<<<<<< HEAD
  /**
   * @expectedDeprecation search_index() is deprecated in drupal:8.8.0 and is removed in drupal:9.0.0. Use \Drupal\search\SearchIndex::index() instead. See https://www.drupal.org/node/3075696
   */
  public function testIndex() {
    $this->assertNull(search_index('_test_', 1, LanguageInterface::LANGCODE_NOT_SPECIFIED, "foo"));
  }

  /**
   * @expectedDeprecation search_index_clear() is deprecated in drupal:8.8.0 and is removed in drupal:9.0.0. Use \Drupal\search\SearchIndex::clear() instead. See https://www.drupal.org/node/3075696
   */
  public function testClear() {
    $this->assertNull(search_index_clear());
  }

  /**
   * @expectedDeprecation search_dirty() is deprecated in drupal:8.8.0 and is removed in drupal:9.0.0. Use custom implementation of \Drupal\search\SearchIndexInterface instead. See https://www.drupal.org/node/3075696
   */
  public function testDirty() {
    $this->assertNull(search_dirty("foo"));
    $this->assertEqual([], search_dirty());
  }

  /**
   * @expectedDeprecation search_update_totals() is deprecated in drupal:8.8.0 and is removed in drupal:9.0.0. Use custom implementation of \Drupal\search\SearchIndexInterface instead. See https://www.drupal.org/node/3075696
   */
  public function testUpdateTotals() {
    $this->assertNull(search_update_totals());
  }

  /**
   * @expectedDeprecation search_mark_for_reindex() is deprecated in drupal:8.8.0 and is removed in drupal:9.0.0. Use \Drupal\search\SearchIndex::markForReindex() instead. See https://www.drupal.org/node/3075696
   */
  public function testMarkForReindex() {
    $this->assertNull(search_mark_for_reindex('_test_', 1, LanguageInterface::LANGCODE_NOT_SPECIFIED));
=======
  public function testDeprecatedIndexSplit() {
    $this->expectDeprecation('search_index_split() is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Use \Drupal\search\SearchTextProcessorInterface::process() instead. See https://www.drupal.org/node/3078162');
    $this->assertEquals(["two", "words"], search_index_split("two words"));
  }

  public function testDeprecatedSimplify() {
    $this->expectDeprecation('search_simplify() is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Use \Drupal\search\SearchTextProcessorInterface::analyze() instead. See https://www.drupal.org/node/3078162');
    // cSpell:disable-next-line
    $this->assertEquals("vogel", search_simplify("Vögel"));
  }

  public function testExpandCjk() {
    $this->expectDeprecation('search_expand_cjk() is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Use a custom implementation of SearchTextProcessorInterface instead. instead. See https://www.drupal.org/node/3078162');
    $this->assertEquals(" 이런 ", search_expand_cjk(["이런"]));
  }

  public function testInvokePreprocess() {
    $this->expectDeprecation('search_invoke_preprocess() is deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Use a custom implementation of SearchTextProcessorInterface instead. See https://www.drupal.org/node/3078162');
    $text = $this->randomString();
    search_invoke_preprocess($text);
    $this->assertIsString($text);
>>>>>>> dev
  }

}
