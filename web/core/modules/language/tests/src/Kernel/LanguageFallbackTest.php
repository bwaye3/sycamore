<?php

namespace Drupal\Tests\language\Kernel;

use Drupal\Core\Language\LanguageInterface;
use Drupal\language\Entity\ConfigurableLanguage;

/**
 * Tests the language fallback behavior.
 *
 * @group language
 */
class LanguageFallbackTest extends LanguageTestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();

    $i = 0;
    foreach (['af', 'am', 'ar'] as $langcode) {
      $language = ConfigurableLanguage::createFromLangcode($langcode);
      $language->set('weight', $i--);
      $language->save();
    }
  }

  /**
   * Tests language fallback candidates.
   */
  public function testCandidates() {
    $language_list = $this->languageManager->getLanguages();
    $expected = array_keys($language_list + [LanguageInterface::LANGCODE_NOT_SPECIFIED => NULL]);

    // Check that language fallback candidates by default are all the available
    // languages sorted by weight.
    $candidates = $this->languageManager->getFallbackCandidates();
<<<<<<< HEAD
    $this->assertEqual(array_values($candidates), $expected, 'Language fallback candidates are properly returned.');
=======
    $this->assertEquals($expected, array_values($candidates), 'Language fallback candidates are properly returned.');
>>>>>>> dev

    // Check that candidates are alterable.
    $this->state->set('language_test.fallback_alter.candidates', TRUE);
    $expected = array_slice($expected, 0, count($expected) - 1);
    $candidates = $this->languageManager->getFallbackCandidates();
<<<<<<< HEAD
    $this->assertEqual(array_values($candidates), $expected, 'Language fallback candidates are alterable.');
=======
    $this->assertEquals($expected, array_values($candidates), 'Language fallback candidates are alterable.');
>>>>>>> dev

    // Check that candidates are alterable for specific operations.
    $this->state->set('language_test.fallback_alter.candidates', FALSE);
    $this->state->set('language_test.fallback_operation_alter.candidates', TRUE);
    $expected[] = LanguageInterface::LANGCODE_NOT_SPECIFIED;
    $expected[] = LanguageInterface::LANGCODE_NOT_APPLICABLE;
    $candidates = $this->languageManager->getFallbackCandidates(['operation' => 'test']);
<<<<<<< HEAD
    $this->assertEqual(array_values($candidates), $expected, 'Language fallback candidates are alterable for specific operations.');
=======
    $this->assertEquals($expected, array_values($candidates), 'Language fallback candidates are alterable for specific operations.');
>>>>>>> dev

    // Check that when the site is monolingual no language fallback is applied.
    /** @var \Drupal\Core\Config\Entity\ConfigEntityStorageInterface $configurable_language_storage */
    $configurable_language_storage = $this->container->get('entity_type.manager')->getStorage('configurable_language');
    foreach ($language_list as $langcode => $language) {
      if (!$language->isDefault()) {
        $configurable_language_storage->load($langcode)->delete();
      }
    }
    $candidates = $this->languageManager->getFallbackCandidates();
<<<<<<< HEAD
    $this->assertEqual(array_values($candidates), [LanguageInterface::LANGCODE_DEFAULT], 'Language fallback is not applied when the Language module is not enabled.');
=======
    $this->assertEquals([LanguageInterface::LANGCODE_DEFAULT], array_values($candidates), 'Language fallback is not applied when the Language module is not enabled.');
>>>>>>> dev
  }

}
