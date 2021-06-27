<?php

namespace Drupal\KernelTests;

/**
 * Translates Simpletest assertion methods to PHPUnit.
 *
 * Protected methods are custom. Public static methods override methods of
 * \PHPUnit\Framework\Assert.
 *
<<<<<<< HEAD
 * Deprecated Scheduled for removal in Drupal 10.0.0. Use PHPUnit's native
 *   assert methods instead.
 *
 * @todo https://www.drupal.org/project/drupal/issues/3031580 Note that
 *   deprecations in this file do not use the @ symbol in Drupal 8 because this
 *   will be removed in Drupal 10.0.0.
=======
 * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use
 *   PHPUnit's native assert methods instead.
 *
 * @see https://www.drupal.org/node/3129738
>>>>>>> dev
 */
trait AssertLegacyTrait {

  /**
   * @see \Drupal\simpletest\TestBase::assert()
   *
<<<<<<< HEAD
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertTrue()
   *   instead.
   */
  protected function assert($actual, $message = '') {
=======
   * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use
   *   $this->assertTrue() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */
  protected function assert($actual, $message = '') {
    @trigger_error('AssertLegacyTrait::assert() is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use $this->assertTrue() instead. See https://www.drupal.org/node/3129738', E_USER_DEPRECATED);
>>>>>>> dev
    parent::assertTrue((bool) $actual, $message);
  }

  /**
   * @see \Drupal\simpletest\TestBase::assertEqual()
   *
<<<<<<< HEAD
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertEquals()
   *   instead.
   */
  protected function assertEqual($actual, $expected, $message = '') {
=======
   * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use
   *   $this->assertEquals() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */
  protected function assertEqual($actual, $expected, $message = '') {
    @trigger_error('AssertLegacyTrait::assertEqual() is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use $this->assertEquals() instead. See https://www.drupal.org/node/3129738', E_USER_DEPRECATED);
>>>>>>> dev
    $this->assertEquals($expected, $actual, (string) $message);
  }

  /**
   * @see \Drupal\simpletest\TestBase::assertNotEqual()
   *
<<<<<<< HEAD
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use
   *   self::assertNotEquals() instead.
   */
  protected function assertNotEqual($actual, $expected, $message = '') {
=======
   * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use
   *   $this->assertNotEquals() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */
  protected function assertNotEqual($actual, $expected, $message = '') {
    @trigger_error('AssertLegacyTrait::assertNotEqual() is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use $this->assertNotEquals() instead. See https://www.drupal.org/node/3129738', E_USER_DEPRECATED);
>>>>>>> dev
    $this->assertNotEquals($expected, $actual, (string) $message);
  }

  /**
   * @see \Drupal\simpletest\TestBase::assertIdentical()
   *
<<<<<<< HEAD
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertSame()
   *   instead.
   */
  protected function assertIdentical($actual, $expected, $message = '') {
=======
   * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use
   *   $this->assertSame() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */
  protected function assertIdentical($actual, $expected, $message = '') {
    @trigger_error('AssertLegacyTrait::assertIdentical() is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use $this->assertSame() instead. See https://www.drupal.org/node/3129738', E_USER_DEPRECATED);
>>>>>>> dev
    $this->assertSame($expected, $actual, (string) $message);
  }

  /**
   * @see \Drupal\simpletest\TestBase::assertNotIdentical()
   *
<<<<<<< HEAD
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use
   *   self::assertNotSame() instead.
   */
  protected function assertNotIdentical($actual, $expected, $message = '') {
=======
   * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use
   *   $this->assertNotSame() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */
  protected function assertNotIdentical($actual, $expected, $message = '') {
    @trigger_error('AssertLegacyTrait::assertNotIdentical() is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use $this->assertNotSame() instead. See https://www.drupal.org/node/3129738', E_USER_DEPRECATED);
>>>>>>> dev
    $this->assertNotSame($expected, $actual, (string) $message);
  }

  /**
   * @see \Drupal\simpletest\TestBase::assertIdenticalObject()
   *
<<<<<<< HEAD
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertEquals()
   *   instead.
   */
  protected function assertIdenticalObject($actual, $expected, $message = '') {
=======
   * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use
   *   $this->assertEquals() instead.
   *
   * @see https://www.drupal.org/node/3129738
   */
  protected function assertIdenticalObject($actual, $expected, $message = '') {
    @trigger_error('AssertLegacyTrait::assertIdenticalObject() is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. Use $this->assertEquals() instead. See https://www.drupal.org/node/3129738', E_USER_DEPRECATED);
>>>>>>> dev
    // Note: ::assertSame checks whether its the same object. ::assertEquals
    // though compares

    $this->assertEquals($expected, $actual, (string) $message);
  }

  /**
   * @see \Drupal\simpletest\TestBase::pass()
   *
<<<<<<< HEAD
   * Deprecated Scheduled for removal in Drupal 10.0.0. Use self::assertTrue()
   *   instead.
   */
  protected function pass($message) {
=======
   * @deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. PHPUnit
   *   interrupts a test as soon as a test assertion fails, so there is usually
   *   no need to call this method. If a test's logic relies on this method,
   *   refactor the test.
   *
   * @see https://www.drupal.org/node/3129738
   */
  protected function pass($message) {
    @trigger_error('AssertLegacyTrait::pass() is deprecated in drupal:8.0.0 and is removed from drupal:10.0.0. PHPUnit interrupts a test as soon as a test assertion fails, so there is usually no need to call this method. If a test\'s logic relies on this method, refactor the test. See https://www.drupal.org/node/3129738', E_USER_DEPRECATED);
>>>>>>> dev
    $this->assertTrue(TRUE, $message);
  }

  /**
   * @see \Drupal\simpletest\TestBase::verbose()
<<<<<<< HEAD
   */
  protected function verbose($message) {
=======
   *
   * @deprecated in drupal:9.2.0 and is removed from drupal:10.0.0. Use
   *   dump() instead.
   *
   * @see https://www.drupal.org/node/3197514
   */
  protected function verbose($message) {
    @trigger_error('AssertLegacyTrait::verbose() is deprecated in drupal:9.2.0 and is removed from drupal:10.0.0. Use dump() instead. See https://www.drupal.org/node/3197514', E_USER_DEPRECATED);
>>>>>>> dev
    if (in_array('--debug', $_SERVER['argv'], TRUE)) {
      // Write directly to STDOUT to not produce unexpected test output.
      // The STDOUT stream does not obey output buffering.
      fwrite(STDOUT, $message . "\n");
    }
  }

}
