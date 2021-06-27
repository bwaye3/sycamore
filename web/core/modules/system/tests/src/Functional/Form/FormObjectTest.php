<?php

namespace Drupal\Tests\system\Functional\Form;

use Drupal\Tests\BrowserTestBase;

/**
 * Tests building a form from an object.
 *
 * @group Form
 */
class FormObjectTest extends BrowserTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['form_test'];
=======
  protected static $modules = ['form_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests using an object as the form callback.
   *
   * @see \Drupal\form_test\EventSubscriber\FormTestEventSubscriber::onKernelRequest()
   */
  public function testObjectFormCallback() {
    $config_factory = $this->container->get('config.factory');

    $this->drupalGet('form-test/object-builder');
<<<<<<< HEAD
    $this->assertText('The FormTestObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    $this->drupalPostForm(NULL, ['bananas' => 'green'], t('Save'));
    $this->assertText('The FormTestObject::validateForm() method was used for this form.');
    $this->assertText('The FormTestObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertIdentical('green', $value);

    $this->drupalGet('form-test/object-arguments-builder/yellow');
    $this->assertText('The FormTestArgumentsObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-arguments-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    $this->drupalPostForm(NULL, NULL, t('Save'));
    $this->assertText('The FormTestArgumentsObject::validateForm() method was used for this form.');
    $this->assertText('The FormTestArgumentsObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertIdentical('yellow', $value);

    $this->drupalGet('form-test/object-service-builder');
    $this->assertText('The FormTestServiceObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-service-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    $this->drupalPostForm(NULL, ['bananas' => 'brown'], t('Save'));
    $this->assertText('The FormTestServiceObject::validateForm() method was used for this form.');
    $this->assertText('The FormTestServiceObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertIdentical('brown', $value);

    $this->drupalGet('form-test/object-controller-builder');
    $this->assertText('The FormTestControllerObject::create() method was used for this form.');
    $this->assertText('The FormTestControllerObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-controller-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    $this->assertText('custom_value', 'Ensure parameters are injected from request attributes.');
    $this->assertText('request_value', 'Ensure the request object is injected.');
    $this->drupalPostForm(NULL, ['bananas' => 'black'], t('Save'));
    $this->assertText('The FormTestControllerObject::validateForm() method was used for this form.');
    $this->assertText('The FormTestControllerObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertIdentical('black', $value);
=======
    $this->assertSession()->pageTextContains('The FormTestObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    $this->submitForm(['bananas' => 'green'], 'Save');
    $this->assertSession()->pageTextContains('The FormTestObject::validateForm() method was used for this form.');
    $this->assertSession()->pageTextContains('The FormTestObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertSame('green', $value);

    $this->drupalGet('form-test/object-arguments-builder/yellow');
    $this->assertSession()->pageTextContains('The FormTestArgumentsObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-arguments-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    $this->submitForm([], 'Save');
    $this->assertSession()->pageTextContains('The FormTestArgumentsObject::validateForm() method was used for this form.');
    $this->assertSession()->pageTextContains('The FormTestArgumentsObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertSame('yellow', $value);

    $this->drupalGet('form-test/object-service-builder');
    $this->assertSession()->pageTextContains('The FormTestServiceObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-service-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    $this->submitForm(['bananas' => 'brown'], 'Save');
    $this->assertSession()->pageTextContains('The FormTestServiceObject::validateForm() method was used for this form.');
    $this->assertSession()->pageTextContains('The FormTestServiceObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertSame('brown', $value);

    $this->drupalGet('form-test/object-controller-builder');
    $this->assertSession()->pageTextContains('The FormTestControllerObject::create() method was used for this form.');
    $this->assertSession()->pageTextContains('The FormTestControllerObject::buildForm() method was used for this form.');
    $elements = $this->xpath('//form[@id="form-test-form-test-controller-object"]');
    $this->assertTrue(!empty($elements), 'The correct form ID was used.');
    // Ensure parameters are injected from request attributes.
    $this->assertSession()->pageTextContains('custom_value');
    // Ensure the request object is injected.
    $this->assertSession()->pageTextContains('request_value');
    $this->submitForm(['bananas' => 'black'], 'Save');
    $this->assertSession()->pageTextContains('The FormTestControllerObject::validateForm() method was used for this form.');
    $this->assertSession()->pageTextContains('The FormTestControllerObject::submitForm() method was used for this form.');
    $value = $config_factory->get('form_test.object')->get('bananas');
    $this->assertSame('black', $value);
>>>>>>> dev
  }

}
