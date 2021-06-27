<?php

namespace Drupal\KernelTests\Core\KeyValueStore;

use Drupal\Core\Entity\EntityMalformedException;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\KernelTests\KernelTestBase;
use Drupal\entity_test\Entity\EntityTestLabel;

/**
 * Tests KeyValueEntityStorage for content entities.
 *
 * @group KeyValueStore
 */
class KeyValueContentEntityStorageTest extends KernelTestBase {

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['user', 'entity_test', 'keyvalue_test'];
=======
  protected static $modules = ['user', 'entity_test', 'keyvalue_test'];
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
    $this->installEntitySchema('user');
  }

  /**
   * Tests CRUD operations.
   *
   * @covers \Drupal\Core\Entity\KeyValueStore\KeyValueEntityStorage::hasData
   */
  public function testCRUD() {
    $default_langcode = \Drupal::languageManager()->getDefaultLanguage()->getId();

    $storage = \Drupal::entityTypeManager()->getStorage('entity_test_label');
    $this->assertFalse($storage->hasData());

    // Verify default properties on a newly created empty entity.
    $empty = EntityTestLabel::create();
<<<<<<< HEAD
    $this->assertIdentical($empty->id->value, NULL);
    $this->assertIdentical($empty->name->value, NULL);
    $this->assertNotEmpty($empty->uuid->value);
    $this->assertIdentical($empty->langcode->value, $default_langcode);

    // Verify ConfigEntity properties/methods on the newly created empty entity.
    $this->assertIdentical($empty->isNew(), TRUE);
    $this->assertIdentical($empty->bundle(), 'entity_test_label');
    $this->assertIdentical($empty->id(), NULL);
    $this->assertNotEmpty($empty->uuid());
    $this->assertIdentical($empty->label(), NULL);

    // Verify Entity properties/methods on the newly created empty entity.
    $this->assertIdentical($empty->getEntityTypeId(), 'entity_test_label');
=======
    $this->assertNull($empty->id->value);
    $this->assertNull($empty->name->value);
    $this->assertNotEmpty($empty->uuid->value);
    $this->assertSame($default_langcode, $empty->langcode->value);

    // Verify ConfigEntity properties/methods on the newly created empty entity.
    $this->assertTrue($empty->isNew());
    $this->assertSame('entity_test_label', $empty->bundle());
    $this->assertNull($empty->id());
    $this->assertNotEmpty($empty->uuid());
    $this->assertNull($empty->label());

    // Verify Entity properties/methods on the newly created empty entity.
    $this->assertSame('entity_test_label', $empty->getEntityTypeId());
>>>>>>> dev
    // The URI can only be checked after saving.
    try {
      $empty->toUrl();
      $this->fail('EntityMalformedException was thrown.');
    }
    catch (EntityMalformedException $e) {
      // Expected exception; just continue testing.
    }

    // Verify that an empty entity cannot be saved.
    try {
      $empty->save();
      $this->fail('EntityMalformedException was thrown.');
    }
    catch (EntityMalformedException $e) {
      // Expected exception; just continue testing.
    }

    // Verify that an entity with an empty ID string is considered empty, too.
    $empty_id = EntityTestLabel::create([
      'id' => '',
    ]);
<<<<<<< HEAD
    $this->assertIdentical($empty_id->isNew(), TRUE);
=======
    $this->assertTrue($empty_id->isNew());
>>>>>>> dev
    try {
      $empty_id->save();
      $this->fail('EntityMalformedException was thrown.');
    }
    catch (EntityMalformedException $e) {
      // Expected exception; just continue testing.
    }

    // Verify properties on a newly created entity.
    $entity_test = EntityTestLabel::create($expected = [
      'id' => $this->randomMachineName(),
      'name' => $this->randomString(),
    ]);
<<<<<<< HEAD
    $this->assertIdentical($entity_test->id->value, $expected['id']);
    $this->assertNotEmpty($entity_test->uuid->value);
    $this->assertNotEqual($entity_test->uuid->value, $empty->uuid->value);
    $this->assertIdentical($entity_test->name->value, $expected['name']);
    $this->assertIdentical($entity_test->langcode->value, $default_langcode);

    // Verify methods on the newly created entity.
    $this->assertIdentical($entity_test->isNew(), TRUE);
    $this->assertIdentical($entity_test->id(), $expected['id']);
    $this->assertNotEmpty($entity_test->uuid());
    $expected['uuid'] = $entity_test->uuid();
    $this->assertIdentical($entity_test->label(), $expected['name']);
=======
    $this->assertSame($expected['id'], $entity_test->id->value);
    $this->assertNotEmpty($entity_test->uuid->value);
    $this->assertNotEquals($empty->uuid->value, $entity_test->uuid->value);
    $this->assertSame($expected['name'], $entity_test->name->value);
    $this->assertSame($default_langcode, $entity_test->langcode->value);

    // Verify methods on the newly created entity.
    $this->assertTrue($entity_test->isNew());
    $this->assertSame($expected['id'], $entity_test->id());
    $this->assertNotEmpty($entity_test->uuid());
    $expected['uuid'] = $entity_test->uuid();
    $this->assertSame($expected['name'], $entity_test->label());
>>>>>>> dev

    // Verify that the entity can be saved.
    try {
      $status = $entity_test->save();
    }
    catch (EntityMalformedException $e) {
      $this->fail('EntityMalformedException was not thrown.');
    }

    // Verify that hasData() returns the expected result.
    $this->assertTrue($storage->hasData());

    // Verify that the correct status is returned and properties did not change.
<<<<<<< HEAD
    $this->assertIdentical($status, SAVED_NEW);
    $this->assertIdentical($entity_test->id(), $expected['id']);
    $this->assertIdentical($entity_test->uuid(), $expected['uuid']);
    $this->assertIdentical($entity_test->label(), $expected['name']);
    $this->assertIdentical($entity_test->isNew(), FALSE);

    // Save again, and verify correct status and properties again.
    $status = $entity_test->save();
    $this->assertIdentical($status, SAVED_UPDATED);
    $this->assertIdentical($entity_test->id(), $expected['id']);
    $this->assertIdentical($entity_test->uuid(), $expected['uuid']);
    $this->assertIdentical($entity_test->label(), $expected['name']);
    $this->assertIdentical($entity_test->isNew(), FALSE);
=======
    $this->assertSame(SAVED_NEW, $status);
    $this->assertSame($expected['id'], $entity_test->id());
    $this->assertSame($expected['uuid'], $entity_test->uuid());
    $this->assertSame($expected['name'], $entity_test->label());
    $this->assertFalse($entity_test->isNew());

    // Save again, and verify correct status and properties again.
    $status = $entity_test->save();
    $this->assertSame(SAVED_UPDATED, $status);
    $this->assertSame($expected['id'], $entity_test->id());
    $this->assertSame($expected['uuid'], $entity_test->uuid());
    $this->assertSame($expected['name'], $entity_test->label());
    $this->assertFalse($entity_test->isNew());
>>>>>>> dev

    // Ensure that creating an entity with the same id as an existing one is not
    // possible.
    $same_id = EntityTestLabel::create([
      'id' => $entity_test->id(),
    ]);
<<<<<<< HEAD
    $this->assertIdentical($same_id->isNew(), TRUE);
=======
    $this->assertTrue($same_id->isNew());
>>>>>>> dev
    try {
      $same_id->save();
      $this->fail('Not possible to overwrite an entity entity.');
    }
    catch (EntityStorageException $e) {
      // Expected exception; just continue testing.
    }

    // Verify that renaming the ID returns correct status and properties.
    $ids = [$expected['id'], 'second_' . $this->randomMachineName(4), 'third_' . $this->randomMachineName(4)];
    for ($i = 1; $i < 3; $i++) {
      $old_id = $ids[$i - 1];
      $new_id = $ids[$i];
      // Before renaming, everything should point to the current ID.
<<<<<<< HEAD
      $this->assertIdentical($entity_test->id(), $old_id);

      // Rename.
      $entity_test->id = $new_id;
      $this->assertIdentical($entity_test->id(), $new_id);
      $status = $entity_test->save();
      $this->assertIdentical($status, SAVED_UPDATED);
      $this->assertIdentical($entity_test->isNew(), FALSE);

      // Verify that originalID points to new ID directly after renaming.
      $this->assertIdentical($entity_test->id(), $new_id);
=======
      $this->assertSame($old_id, $entity_test->id());

      // Rename.
      $entity_test->id = $new_id;
      $this->assertSame($new_id, $entity_test->id());
      $status = $entity_test->save();
      $this->assertSame(SAVED_UPDATED, $status);
      $this->assertFalse($entity_test->isNew());

      // Verify that originalID points to new ID directly after renaming.
      $this->assertSame($new_id, $entity_test->id());
>>>>>>> dev
    }
  }

  /**
   * Tests uninstallation of a module that does not use the SQL entity storage.
   */
  public function testUninstall() {
    $uninstall_validator_reasons = \Drupal::service('content_uninstall_validator')->validate('keyvalue_test');
    $this->assertEmpty($uninstall_validator_reasons);
  }

}
