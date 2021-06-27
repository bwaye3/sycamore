<?php

namespace Drupal\Tests\config\Functional;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Component\Uuid\Uuid;
use Drupal\Core\Entity\EntityMalformedException;
use Drupal\Core\Entity\EntityStorageException;
use Drupal\Core\Config\Entity\ConfigEntityStorage;
use Drupal\Core\Config\Entity\Exception\ConfigEntityIdLengthException;
use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Tests configuration entities.
 *
 * @group config
 */
class ConfigEntityTest extends BrowserTestBase {

  /**
   * The maximum length for the entity storage used in this test.
   */
  const MAX_ID_LENGTH = ConfigEntityStorage::MAX_ID_LENGTH;

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['config_test'];
=======
  protected static $modules = ['config_test'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Tests CRUD operations.
   */
  public function testCRUD() {
    $default_langcode = \Drupal::languageManager()->getDefaultLanguage()->getId();
    // Verify default properties on a newly created empty entity.
    $storage = \Drupal::entityTypeManager()->getStorage('config_test');
    $empty = $storage->create();
<<<<<<< HEAD
    $this->assertIdentical($empty->label, NULL);
    $this->assertIdentical($empty->style, NULL);
    $this->assertIdentical($empty->language()->getId(), $default_langcode);

    // Verify ConfigEntity properties/methods on the newly created empty entity.
    $this->assertIdentical($empty->isNew(), TRUE);
    $this->assertIdentical($empty->getOriginalId(), NULL);
    $this->assertIdentical($empty->bundle(), 'config_test');
    $this->assertIdentical($empty->id(), NULL);
    $this->assertTrue(Uuid::isValid($empty->uuid()));
    $this->assertIdentical($empty->label(), NULL);

    $this->assertIdentical($empty->get('id'), NULL);
    $this->assertTrue(Uuid::isValid($empty->get('uuid')));
    $this->assertIdentical($empty->get('label'), NULL);
    $this->assertIdentical($empty->get('style'), NULL);
    $this->assertIdentical($empty->language()->getId(), $default_langcode);

    // Verify Entity properties/methods on the newly created empty entity.
    $this->assertIdentical($empty->getEntityTypeId(), 'config_test');
=======
    $this->assertNull($empty->label);
    $this->assertNull($empty->style);
    $this->assertSame($default_langcode, $empty->language()->getId());

    // Verify ConfigEntity properties/methods on the newly created empty entity.
    $this->assertTrue($empty->isNew());
    $this->assertNull($empty->getOriginalId());
    $this->assertSame('config_test', $empty->bundle());
    $this->assertNull($empty->id());
    $this->assertTrue(Uuid::isValid($empty->uuid()));
    $this->assertNull($empty->label());

    $this->assertNull($empty->get('id'));
    $this->assertTrue(Uuid::isValid($empty->get('uuid')));
    $this->assertNull($empty->get('label'));
    $this->assertNull($empty->get('style'));
    $this->assertSame($default_langcode, $empty->language()->getId());

    // Verify Entity properties/methods on the newly created empty entity.
    $this->assertSame('config_test', $empty->getEntityTypeId());
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
    $empty_id = $storage->create([
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
    $config_test = $storage->create($expected = [
      'id' => $this->randomMachineName(),
      'label' => $this->randomString(),
      'style' => $this->randomMachineName(),
    ]);
<<<<<<< HEAD
    $this->assertNotEqual($config_test->uuid(), $empty->uuid());
    $this->assertIdentical($config_test->label, $expected['label']);
    $this->assertIdentical($config_test->style, $expected['style']);
    $this->assertIdentical($config_test->language()->getId(), $default_langcode);

    // Verify methods on the newly created entity.
    $this->assertIdentical($config_test->isNew(), TRUE);
    $this->assertIdentical($config_test->getOriginalId(), $expected['id']);
    $this->assertIdentical($config_test->id(), $expected['id']);
    $this->assertTrue(Uuid::isValid($config_test->uuid()));
    $expected['uuid'] = $config_test->uuid();
    $this->assertIdentical($config_test->label(), $expected['label']);
=======
    $this->assertNotEquals($empty->uuid(), $config_test->uuid());
    $this->assertSame($expected['label'], $config_test->label);
    $this->assertSame($expected['style'], $config_test->style);
    $this->assertSame($default_langcode, $config_test->language()->getId());

    // Verify methods on the newly created entity.
    $this->assertTrue($config_test->isNew());
    $this->assertSame($expected['id'], $config_test->getOriginalId());
    $this->assertSame($expected['id'], $config_test->id());
    $this->assertTrue(Uuid::isValid($config_test->uuid()));
    $expected['uuid'] = $config_test->uuid();
    $this->assertSame($expected['label'], $config_test->label());
>>>>>>> dev

    // Verify that the entity can be saved.
    try {
      $status = $config_test->save();
    }
    catch (EntityMalformedException $e) {
      $this->fail('EntityMalformedException was not thrown.');
    }

    // The entity path can only be checked after saving.
<<<<<<< HEAD
    $this->assertIdentical($config_test->toUrl()->toString(), Url::fromRoute('entity.config_test.edit_form', ['config_test' => $expected['id']])->toString());

    // Verify that the correct status is returned and properties did not change.
    $this->assertIdentical($status, SAVED_NEW);
    $this->assertIdentical($config_test->id(), $expected['id']);
    $this->assertIdentical($config_test->uuid(), $expected['uuid']);
    $this->assertIdentical($config_test->label(), $expected['label']);
    $this->assertIdentical($config_test->isNew(), FALSE);
    $this->assertIdentical($config_test->getOriginalId(), $expected['id']);

    // Save again, and verify correct status and properties again.
    $status = $config_test->save();
    $this->assertIdentical($status, SAVED_UPDATED);
    $this->assertIdentical($config_test->id(), $expected['id']);
    $this->assertIdentical($config_test->uuid(), $expected['uuid']);
    $this->assertIdentical($config_test->label(), $expected['label']);
    $this->assertIdentical($config_test->isNew(), FALSE);
    $this->assertIdentical($config_test->getOriginalId(), $expected['id']);
=======
    $this->assertSame(Url::fromRoute('entity.config_test.edit_form', ['config_test' => $expected['id']])->toString(), $config_test->toUrl()->toString());

    // Verify that the correct status is returned and properties did not change.
    $this->assertSame(SAVED_NEW, $status);
    $this->assertSame($expected['id'], $config_test->id());
    $this->assertSame($expected['uuid'], $config_test->uuid());
    $this->assertSame($expected['label'], $config_test->label());
    $this->assertFalse($config_test->isNew());
    $this->assertSame($expected['id'], $config_test->getOriginalId());

    // Save again, and verify correct status and properties again.
    $status = $config_test->save();
    $this->assertSame(SAVED_UPDATED, $status);
    $this->assertSame($expected['id'], $config_test->id());
    $this->assertSame($expected['uuid'], $config_test->uuid());
    $this->assertSame($expected['label'], $config_test->label());
    $this->assertFalse($config_test->isNew());
    $this->assertSame($expected['id'], $config_test->getOriginalId());
>>>>>>> dev

    // Verify that a configuration entity can be saved with an ID of the
    // maximum allowed length, but not longer.

    // Test with a short ID.
    $id_length_config_test = $storage->create([
      'id' => $this->randomMachineName(8),
    ]);
    try {
      $id_length_config_test->save();
    }
    catch (ConfigEntityIdLengthException $e) {
      $this->fail($e->getMessage());
    }

    // Test with an ID of the maximum allowed length.
    $id_length_config_test = $storage->create([
      'id' => $this->randomMachineName(static::MAX_ID_LENGTH),
    ]);
    try {
      $id_length_config_test->save();
    }
    catch (ConfigEntityIdLengthException $e) {
      $this->fail($e->getMessage());
    }

    // Test with an ID exceeding the maximum allowed length.
    $id_length_config_test = $storage->create([
      'id' => $this->randomMachineName(static::MAX_ID_LENGTH + 1),
    ]);
    try {
      $status = $id_length_config_test->save();
      $this->fail(new FormattableMarkup("config_test entity with ID length @length exceeding the maximum allowed length of @max saved successfully", [
        '@length' => strlen($id_length_config_test->id()),
        '@max' => static::MAX_ID_LENGTH,
      ]));
    }
    catch (ConfigEntityIdLengthException $e) {
      // Expected exception; just continue testing.
    }

    // Ensure that creating an entity with the same id as an existing one is not
    // possible.
    $same_id = $storage->create([
      'id' => $config_test->id(),
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
      $this->assertIdentical($config_test->id(), $old_id);
      $this->assertIdentical($config_test->getOriginalId(), $old_id);

      // Rename.
      $config_test->set('id', $new_id);
      $this->assertIdentical($config_test->id(), $new_id);
      $status = $config_test->save();
      $this->assertIdentical($status, SAVED_UPDATED);
      $this->assertIdentical($config_test->isNew(), FALSE);

      // Verify that originalID points to new ID directly after renaming.
      $this->assertIdentical($config_test->id(), $new_id);
      $this->assertIdentical($config_test->getOriginalId(), $new_id);
=======
      $this->assertSame($old_id, $config_test->id());
      $this->assertSame($old_id, $config_test->getOriginalId());

      // Rename.
      $config_test->set('id', $new_id);
      $this->assertSame($new_id, $config_test->id());
      $status = $config_test->save();
      $this->assertSame(SAVED_UPDATED, $status);
      $this->assertFalse($config_test->isNew());

      // Verify that originalID points to new ID directly after renaming.
      $this->assertSame($new_id, $config_test->id());
      $this->assertSame($new_id, $config_test->getOriginalId());
>>>>>>> dev
    }

    // Test config entity prepopulation.
    \Drupal::state()->set('config_test.prepopulate', TRUE);
    $config_test = $storage->create(['foo' => 'bar']);
    $this->assertEquals('baz', $config_test->get('foo'), 'Initial value correctly populated');
  }

  /**
   * Tests CRUD operations through the UI.
   */
  public function testCRUDUI() {
    $this->drupalLogin($this->drupalCreateUser([
      'administer site configuration',
    ]));

    $id = strtolower($this->randomMachineName());
    $label1 = $this->randomMachineName();
    $label2 = $this->randomMachineName();
    $label3 = $this->randomMachineName();
    $message_insert = new FormattableMarkup('%label configuration has been created.', ['%label' => $label1]);
    $message_update = new FormattableMarkup('%label configuration has been updated.', ['%label' => $label2]);
    $message_delete = new FormattableMarkup('The test configuration %label has been deleted.', ['%label' => $label2]);

    // Create a configuration entity.
    $edit = [
      'id' => $id,
      'label' => $label1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/config_test/add', $edit, 'Save');
    $this->assertUrl('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertRaw($message_insert);
    $this->assertNoRaw($message_update);
    $this->assertLinkByHref("admin/structure/config_test/manage/$id");
=======
    $this->drupalGet('admin/structure/config_test/add');
    $this->submitForm($edit, 'Save');
    $this->assertSession()->addressEquals('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertRaw($message_insert);
    $this->assertNoRaw($message_update);
    $this->assertSession()->linkByHrefExists("admin/structure/config_test/manage/$id");
>>>>>>> dev

    // Update the configuration entity.
    $edit = [
      'label' => $label2,
    ];
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/config_test/manage/$id", $edit, 'Save');
    $this->assertUrl('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoRaw($message_insert);
    $this->assertRaw($message_update);
    $this->assertLinkByHref("admin/structure/config_test/manage/$id");
    $this->assertLinkByHref("admin/structure/config_test/manage/$id/delete");
=======
    $this->drupalGet("admin/structure/config_test/manage/{$id}");
    $this->submitForm($edit, 'Save');
    $this->assertSession()->addressEquals('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoRaw($message_insert);
    $this->assertRaw($message_update);
    $this->assertSession()->linkByHrefExists("admin/structure/config_test/manage/$id");
    $this->assertSession()->linkByHrefExists("admin/structure/config_test/manage/$id/delete");
>>>>>>> dev

    // Delete the configuration entity.
    $this->drupalGet("admin/structure/config_test/manage/$id");
    $this->clickLink(t('Delete'));
<<<<<<< HEAD
    $this->assertUrl("admin/structure/config_test/manage/$id/delete");
    $this->drupalPostForm(NULL, [], 'Delete');
    $this->assertUrl('admin/structure/config_test');
=======
    $this->assertSession()->addressEquals("admin/structure/config_test/manage/$id/delete");
    $this->submitForm([], 'Delete');
    $this->assertSession()->addressEquals('admin/structure/config_test');
>>>>>>> dev
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoRaw($message_update);
    $this->assertRaw($message_delete);
    $this->assertNoText($label1);
<<<<<<< HEAD
    $this->assertNoLinkByHref("admin/structure/config_test/manage/$id");
=======
    $this->assertSession()->linkByHrefNotExists("admin/structure/config_test/manage/$id");
>>>>>>> dev

    // Re-create a configuration entity.
    $edit = [
      'id' => $id,
      'label' => $label1,
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/config_test/add', $edit, 'Save');
    $this->assertUrl('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertText($label1);
    $this->assertLinkByHref("admin/structure/config_test/manage/$id");
=======
    $this->drupalGet('admin/structure/config_test/add');
    $this->submitForm($edit, 'Save');
    $this->assertSession()->addressEquals('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains($label1);
    $this->assertSession()->linkByHrefExists("admin/structure/config_test/manage/$id");
>>>>>>> dev

    // Rename the configuration entity's ID/machine name.
    $edit = [
      'id' => strtolower($this->randomMachineName()),
      'label' => $label3,
    ];
<<<<<<< HEAD
    $this->drupalPostForm("admin/structure/config_test/manage/$id", $edit, 'Save');
    $this->assertUrl('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoText($label1);
    $this->assertNoText($label2);
    $this->assertText($label3);
    $this->assertNoLinkByHref("admin/structure/config_test/manage/$id");
    $id = $edit['id'];
    $this->assertLinkByHref("admin/structure/config_test/manage/$id");
=======
    $this->drupalGet("admin/structure/config_test/manage/{$id}");
    $this->submitForm($edit, 'Save');
    $this->assertSession()->addressEquals('admin/structure/config_test');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertNoText($label1);
    $this->assertNoText($label2);
    $this->assertSession()->pageTextContains($label3);
    $this->assertSession()->linkByHrefNotExists("admin/structure/config_test/manage/$id");
    $id = $edit['id'];
    $this->assertSession()->linkByHrefExists("admin/structure/config_test/manage/$id");
>>>>>>> dev

    // Create a configuration entity with '0' machine name.
    $edit = [
      'id' => '0',
      'label' => '0',
    ];
<<<<<<< HEAD
    $this->drupalPostForm('admin/structure/config_test/add', $edit, 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $message_insert = new FormattableMarkup('%label configuration has been created.', ['%label' => $edit['label']]);
    $this->assertRaw($message_insert);
    $this->assertLinkByHref('admin/structure/config_test/manage/0');
    $this->assertLinkByHref('admin/structure/config_test/manage/0/delete');
    $this->drupalPostForm('admin/structure/config_test/manage/0/delete', [], 'Delete');
=======
    $this->drupalGet('admin/structure/config_test/add');
    $this->submitForm($edit, 'Save');
    $this->assertSession()->statusCodeEquals(200);
    $message_insert = new FormattableMarkup('%label configuration has been created.', ['%label' => $edit['label']]);
    $this->assertRaw($message_insert);
    $this->assertSession()->linkByHrefExists('admin/structure/config_test/manage/0');
    $this->assertSession()->linkByHrefExists('admin/structure/config_test/manage/0/delete');
    $this->drupalGet('admin/structure/config_test/manage/0/delete');
    $this->submitForm([], 'Delete');
>>>>>>> dev
    $storage = \Drupal::entityTypeManager()->getStorage('config_test');
    $this->assertNull($storage->load(0), 'Test entity deleted');

    // Create a configuration entity with a property that uses AJAX to show
    // extra form elements. Test this scenario in a non-JS case by using a
    // 'js-hidden' submit button.
    // @see \Drupal\Tests\config\FunctionalJavascript\ConfigEntityTest::testAjaxOnAddPage()
    $this->drupalGet('admin/structure/config_test/add');

    $id = strtolower($this->randomMachineName());
    $edit = [
      'id' => $id,
      'label' => $this->randomString(),
      'size' => 'custom',
    ];

<<<<<<< HEAD
    $this->assertFieldByName('size');
    $this->assertNoFieldByName('size_value');

    $this->drupalPostForm(NULL, $edit, 'Change size');
    $this->assertFieldByName('size');
    $this->assertFieldByName('size_value');
=======
    $this->assertSession()->fieldExists('size');
    $this->assertSession()->fieldNotExists('size_value');

    $this->submitForm($edit, 'Change size');
    $this->assertSession()->fieldExists('size');
    $this->assertSession()->fieldExists('size_value');
>>>>>>> dev

    // Submit the form with the regular 'Save' button and check that the entity
    // values are correct.
    $edit += ['size_value' => 'medium'];
<<<<<<< HEAD
    $this->drupalPostForm(NULL, $edit, 'Save');
=======
    $this->submitForm($edit, 'Save');
>>>>>>> dev

    $entity = $storage->load($id);
    $this->assertEquals('custom', $entity->get('size'));
    $this->assertEquals('medium', $entity->get('size_value'));
  }

}
