<?php

namespace Drupal\Tests\file\Kernel;

/**
 * Tests the file_validate() function.
 *
 * @group file
 */
class ValidateTest extends FileManagedUnitTestBase {

  /**
<<<<<<< HEAD
   * Test that the validators passed into are checked.
=======
   * Tests that the validators passed into are checked.
>>>>>>> dev
   */
  public function testCallerValidation() {
    $file = $this->createFile();

    // Empty validators.
<<<<<<< HEAD
    $this->assertEqual(file_validate($file, []), [], 'Validating an empty array works successfully.');
=======
    $this->assertEquals([], file_validate($file, []), 'Validating an empty array works successfully.');
>>>>>>> dev
    $this->assertFileHooksCalled(['validate']);

    // Use the file_test.module's test validator to ensure that passing tests
    // return correctly.
    file_test_reset();
    file_test_set_return('validate', []);
    $passing = ['file_test_validator' => [[]]];
<<<<<<< HEAD
    $this->assertEqual(file_validate($file, $passing), [], 'Validating passes.');
=======
    $this->assertEquals([], file_validate($file, $passing), 'Validating passes.');
>>>>>>> dev
    $this->assertFileHooksCalled(['validate']);

    // Now test for failures in validators passed in and by hook_validate.
    file_test_reset();
    file_test_set_return('validate', ['Epic fail']);
    $failing = ['file_test_validator' => [['Failed', 'Badly']]];
<<<<<<< HEAD
    $this->assertEqual(file_validate($file, $failing), ['Failed', 'Badly', 'Epic fail'], 'Validating returns errors.');
=======
    $this->assertEquals(['Failed', 'Badly', 'Epic fail'], file_validate($file, $failing), 'Validating returns errors.');
>>>>>>> dev
    $this->assertFileHooksCalled(['validate']);
  }

  /**
   * Tests hard-coded security check in file_validate().
   */
  public function testInsecureExtensions() {
    $file = $this->createFile('test.php', 'Invalid PHP');

    // Test that file_validate() will check for insecure extensions by default.
    $errors = file_validate($file, []);
    $this->assertEquals('For security reasons, your upload has been rejected.', $errors[0]);
    $this->assertFileHooksCalled(['validate']);
    file_test_reset();

    // Test that the 'allow_insecure_uploads' is respected.
    $this->config('system.file')->set('allow_insecure_uploads', TRUE)->save();
    $errors = file_validate($file, []);
    $this->assertEmpty($errors);
    $this->assertFileHooksCalled(['validate']);
  }

}
