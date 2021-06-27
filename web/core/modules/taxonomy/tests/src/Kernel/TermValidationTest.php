<?php

namespace Drupal\Tests\taxonomy\Kernel;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;

/**
 * Tests term validation constraints.
 *
 * @group taxonomy
 */
class TermValidationTest extends EntityKernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['taxonomy'];
=======
  protected static $modules = ['taxonomy'];
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
    $this->installEntitySchema('taxonomy_term');
  }

  /**
   * Tests the term validation constraints.
   */
  public function testValidation() {
    $this->entityTypeManager->getStorage('taxonomy_vocabulary')->create([
      'vid' => 'tags',
      'name' => 'Tags',
    ])->save();
    $term = $this->entityTypeManager->getStorage('taxonomy_term')->create([
      'name' => 'test',
      'vid' => 'tags',
    ]);
    $violations = $term->validate();
    $this->assertCount(0, $violations, 'No violations when validating a default term.');

    $term->set('name', $this->randomString(256));
    $violations = $term->validate();
    $this->assertCount(1, $violations, 'Violation found when name is too long.');
<<<<<<< HEAD
    $this->assertEqual($violations[0]->getPropertyPath(), 'name.0.value');
    $field_label = $term->get('name')->getFieldDefinition()->getLabel();
    $this->assertEqual($violations[0]->getMessage(), t('%name: may not be longer than @max characters.', ['%name' => $field_label, '@max' => 255]));
=======
    $this->assertEquals('name.0.value', $violations[0]->getPropertyPath());
    $field_label = $term->get('name')->getFieldDefinition()->getLabel();
    $this->assertEquals(t('%name: may not be longer than @max characters.', ['%name' => $field_label, '@max' => 255]), $violations[0]->getMessage());
>>>>>>> dev

    $term->set('name', NULL);
    $violations = $term->validate();
    $this->assertCount(1, $violations, 'Violation found when name is NULL.');
<<<<<<< HEAD
    $this->assertEqual($violations[0]->getPropertyPath(), 'name');
    $this->assertEqual($violations[0]->getMessage(), t('This value should not be null.'));
=======
    $this->assertEquals('name', $violations[0]->getPropertyPath());
    $this->assertEquals(t('This value should not be null.'), $violations[0]->getMessage());
>>>>>>> dev
    $term->set('name', 'test');

    $term->set('parent', 9999);
    $violations = $term->validate();
    $this->assertCount(1, $violations, 'Violation found when term parent is invalid.');
<<<<<<< HEAD
    $this->assertEqual($violations[0]->getMessage(), new FormattableMarkup('The referenced entity (%type: %id) does not exist.', ['%type' => 'taxonomy_term', '%id' => 9999]));
=======
    $this->assertEquals(new FormattableMarkup('The referenced entity (%type: %id) does not exist.', ['%type' => 'taxonomy_term', '%id' => 9999]), $violations[0]->getMessage());
>>>>>>> dev

    $term->set('parent', 0);
    $violations = $term->validate();
    $this->assertCount(0, $violations, 'No violations for parent id 0.');
  }

}
