<?php

namespace Drupal\Tests\content_moderation\Functional;

/**
 * Tests setting a custom default moderation state.
 *
 * @group content_moderation
 */
class DefaultModerationStateTest extends ModerationStateTestBase {

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
    $this->drupalLogin($this->adminUser);
    $this->createContentTypeFromUi('Moderated content', 'moderated_content', TRUE);
    $this->grantUserPermissionToCreateContentOfType($this->adminUser, 'moderated_content');
  }

  /**
<<<<<<< HEAD
   * Test a workflow with a default moderation state set.
   */
  public function testPublishedDefaultState() {
    // Set the default moderation state to be "published".
    $this->drupalPostForm('admin/config/workflow/workflows/manage/' . $this->workflow->id(), [
      'type_settings[workflow_settings][default_moderation_state]' => 'published',
    ], 'Save');
=======
   * Tests a workflow with a default moderation state set.
   */
  public function testPublishedDefaultState() {
    // Set the default moderation state to be "published".
    $this->drupalGet('admin/config/workflow/workflows/manage/' . $this->workflow->id());
    $this->submitForm(['type_settings[workflow_settings][default_moderation_state]' => 'published'], 'Save');
>>>>>>> dev

    $this->drupalGet('node/add/moderated_content');
    $this->assertEquals('published', $this->assertSession()->selectExists('moderation_state[0][state]')->getValue());
    $this->submitForm([
      'title[0][value]' => 'moderated content',
    ], 'Save');

    $node = $this->getNodeByTitle('moderated content');
    $this->assertEquals('published', $node->moderation_state->value);
  }

  /**
<<<<<<< HEAD
   * Test access to deleting the default state.
=======
   * Tests access to deleting the default state.
>>>>>>> dev
   */
  public function testDeleteDefaultStateAccess() {
    $this->drupalGet('admin/config/workflow/workflows/manage/editorial/state/archived/delete');
    $this->assertSession()->statusCodeEquals(200);

<<<<<<< HEAD
    $this->drupalPostForm('admin/config/workflow/workflows/manage/' . $this->workflow->id(), [
      'type_settings[workflow_settings][default_moderation_state]' => 'archived',
    ], 'Save');
=======
    $this->drupalGet('admin/config/workflow/workflows/manage/' . $this->workflow->id());
    $this->submitForm(['type_settings[workflow_settings][default_moderation_state]' => 'archived'], 'Save');
>>>>>>> dev

    $this->drupalGet('admin/config/workflow/workflows/manage/editorial/state/archived/delete');
    $this->assertSession()->statusCodeEquals(403);
  }

}
