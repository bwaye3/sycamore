<?php

namespace Drupal\Tests\content_translation\Functional\Views;

use Drupal\Tests\content_translation\Functional\ContentTranslationTestBase;
use Drupal\views\Tests\ViewTestData;
use Drupal\Core\Language\Language;
use Drupal\user\Entity\User;

/**
 * Tests the content translation overview link field handler.
 *
 * @group content_translation
 * @see \Drupal\content_translation\Plugin\views\field\TranslationLink
 */
class TranslationLinkTest extends ContentTranslationTestBase {

  /**
   * Views used by this test.
   *
   * @var array
   */
  public static $testViews = ['test_entity_translations_link'];

  /**
   * Modules to enable.
   *
   * @var array
   */
<<<<<<< HEAD
  public static $modules = ['content_translation_test_views'];
=======
  protected static $modules = ['content_translation_test_views'];
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    // @todo Use entity_type once it has multilingual Views integration.
    $this->entityTypeId = 'user';

    parent::setUp();

    // Assign user 1  a language code so that the entity can be translated.
    $user = User::load(1);
    $user->langcode = 'en';
    $user->save();

    // Assign user 2 LANGCODE_NOT_SPECIFIED code so entity can't be translated.
    $user = User::load(2);
    $user->langcode = Language::LANGCODE_NOT_SPECIFIED;
    $user->save();

<<<<<<< HEAD
    ViewTestData::createTestViews(get_class($this), ['content_translation_test_views']);
=======
    ViewTestData::createTestViews(static::class, ['content_translation_test_views']);
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  protected function getTranslatorPermissions() {
    $permissions = parent::getTranslatorPermissions();
    $permissions[] = 'access user profiles';
    return $permissions;
  }

  /**
   * Tests the content translation overview link field handler.
   */
  public function testTranslationLink() {
    $this->drupalGet('test-entity-translations-link');
<<<<<<< HEAD
    $this->assertLinkByHref('user/1/translations');
    $this->assertNoLinkByHref('user/2/translations', 'The translations link is not present when content_translation_translate_access() is FALSE.');
=======
    $this->assertSession()->linkByHrefExists('user/1/translations');
    $this->assertSession()->linkByHrefNotExists('user/2/translations', 'The translations link is not present when content_translation_translate_access() is FALSE.');
>>>>>>> dev
  }

}
