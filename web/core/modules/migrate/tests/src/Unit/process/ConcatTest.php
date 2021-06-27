<?php

/**
 * @file
 * Contains \Drupal\Tests\migrate\Unit\process\ConcatTest.
 */

namespace Drupal\Tests\migrate\Unit\process;

use Drupal\migrate\MigrateException;
use Drupal\migrate\Plugin\migrate\process\Concat;

/**
 * Tests the concat process plugin.
 *
 * @group migrate
 */
class ConcatTest extends MigrateProcessTestCase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    $this->plugin = new TestConcat();
    parent::setUp();
  }

  /**
<<<<<<< HEAD
   * Test concat works without a delimiter.
=======
   * Tests concat works without a delimiter.
>>>>>>> dev
   */
  public function testConcatWithoutDelimiter() {
    $value = $this->plugin->transform(['foo', 'bar'], $this->migrateExecutable, $this->row, 'destination_property');
    $this->assertSame('foobar', $value);
  }

  /**
<<<<<<< HEAD
   * Test concat fails properly on non-arrays.
=======
   * Tests concat fails properly on non-arrays.
>>>>>>> dev
   */
  public function testConcatWithNonArray() {
    $this->expectException(MigrateException::class);
    $this->plugin->transform('foo', $this->migrateExecutable, $this->row, 'destination_property');
  }

  /**
<<<<<<< HEAD
   * Test concat works without a delimiter.
=======
   * Tests concat works without a delimiter.
>>>>>>> dev
   */
  public function testConcatWithDelimiter() {
    $this->plugin->setDelimiter('_');
    $value = $this->plugin->transform(['foo', 'bar'], $this->migrateExecutable, $this->row, 'destination_property');
    $this->assertSame('foo_bar', $value);
  }

}

class TestConcat extends Concat {

  public function __construct() {
  }

  /**
   * Set the delimiter.
   *
   * @param string $delimiter
   *   The new delimiter.
   */
  public function setDelimiter($delimiter) {
    $this->configuration['delimiter'] = $delimiter;
  }

}
