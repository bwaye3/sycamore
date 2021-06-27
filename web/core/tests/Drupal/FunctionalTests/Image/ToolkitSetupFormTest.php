<?php

namespace Drupal\FunctionalTests\Image;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests image toolkit setup form.
 *
 * @group Image
 */
class ToolkitSetupFormTest extends BrowserTestBase {

  /**
   * Admin user account.
   *
   * @var \Drupal\user\Entity\User
   */
  protected $adminUser;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['system', 'image_test'];
=======
  protected static $modules = ['system', 'image_test'];
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
    $this->adminUser = $this->drupalCreateUser([
      'administer site configuration',
    ]);
    $this->drupalLogin($this->adminUser);
  }

  /**
<<<<<<< HEAD
   * Test Image toolkit setup form.
=======
   * Tests Image toolkit setup form.
>>>>>>> dev
   */
  public function testToolkitSetupForm() {
    // Get form.
    $this->drupalGet('admin/config/media/image-toolkit');

    // Test that default toolkit is GD.
<<<<<<< HEAD
    $this->assertFieldByName('image_toolkit', 'gd', 'The default image toolkit is GD.');

    // Test changing the jpeg image quality.
    $edit = ['gd[image_jpeg_quality]' => '70'];
    $this->drupalPostForm(NULL, $edit, 'Save configuration');
    $this->assertEqual($this->config('system.image.gd')->get('jpeg_quality'), '70');

    // Test changing the toolkit.
    $edit = ['image_toolkit' => 'test'];
    $this->drupalPostForm(NULL, $edit, 'Save configuration');
    $this->assertEqual($this->config('system.image')->get('toolkit'), 'test');
    $this->assertFieldByName('test[test_parameter]', '10');

    // Test changing the test toolkit parameter.
    $edit = ['test[test_parameter]' => '0'];
    $this->drupalPostForm(NULL, $edit, 'Save configuration');
    $this->assertText(t('Test parameter should be different from 0.'), 'Validation error displayed.');
    $edit = ['test[test_parameter]' => '20'];
    $this->drupalPostForm(NULL, $edit, 'Save configuration');
    $this->assertEqual($this->config('system.image.test_toolkit')->get('test_parameter'), '20');
=======
    $this->assertSession()->fieldValueEquals('image_toolkit', 'gd');

    // Test changing the jpeg image quality.
    $edit = ['gd[image_jpeg_quality]' => '70'];
    $this->submitForm($edit, 'Save configuration');
    $this->assertEquals('70', $this->config('system.image.gd')->get('jpeg_quality'));

    // Test changing the toolkit.
    $edit = ['image_toolkit' => 'test'];
    $this->submitForm($edit, 'Save configuration');
    $this->assertEquals('test', $this->config('system.image')->get('toolkit'));
    $this->assertSession()->fieldValueEquals('test[test_parameter]', '10');

    // Test changing the test toolkit parameter.
    $edit = ['test[test_parameter]' => '0'];
    $this->submitForm($edit, 'Save configuration');
    $this->assertSession()->pageTextContains('Test parameter should be different from 0.');
    $edit = ['test[test_parameter]' => '20'];
    $this->submitForm($edit, 'Save configuration');
    $this->assertEquals('20', $this->config('system.image.test_toolkit')->get('test_parameter'));
>>>>>>> dev

    // Test access without the permission 'administer site configuration'.
    $this->drupalLogin($this->drupalCreateUser(['access administration pages']));
    $this->drupalGet('admin/config/media/image-toolkit');
    $this->assertSession()->statusCodeEquals(403);
  }

}
