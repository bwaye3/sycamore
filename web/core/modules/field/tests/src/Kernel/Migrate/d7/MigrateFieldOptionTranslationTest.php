<?php

namespace Drupal\Tests\field\Kernel\Migrate\d7;

use Drupal\Tests\migrate_drupal\Kernel\d7\MigrateDrupal7TestBase;

/**
 * Migrate field option translations.
 *
 * @group migrate_drupal_7
 */
class MigrateFieldOptionTranslationTest extends MigrateDrupal7TestBase {

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public static $modules = [
=======
  protected static $modules = [
>>>>>>> dev
    'comment',
    'config_translation',
    'datetime',
    'file',
    'image',
    'language',
    'link',
    'locale',
    'menu_ui',
    'node',
    'system',
    'taxonomy',
    'telephone',
    'text',
  ];

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  protected function setUp() {
=======
  protected function setUp(): void {
>>>>>>> dev
    parent::setUp();
    $this->executeMigrations([
      'language',
      'd7_field',
      'd7_field_option_translation',
    ]);
  }

  /**
   * Tests the Drupal 7 field option translation to Drupal 8 migration.
   */
  public function testFieldOptionTranslation() {
    $language_manager = $this->container->get('language_manager');

    /** @var \Drupal\language\Config\LanguageConfigOverride $config_translation */
    $config_translation = $language_manager->getLanguageConfigOverride('fr', 'field.storage.node.field_color');
    $allowed_values = [
      0 => [
        'label' => 'Verte',
      ],
      1 => [
        'label' => 'Noire',
      ],
      2 => [
        'label' => 'Blanche',
      ],
    ];
    $this->assertSame($allowed_values, $config_translation->get('settings.allowed_values'));

    $config_translation = $language_manager->getLanguageConfigOverride('is', 'field.storage.node.field_color');
    $allowed_values = [
      0 => [
        'label' => 'Grænn',
      ],
      1 => [
        'label' => 'Svartur',
      ],
      2 => [
        'label' => 'Hvítur',
      ],
    ];
    $this->assertSame($allowed_values, $config_translation->get('settings.allowed_values'));

    $config_translation = $language_manager->getLanguageConfigOverride('fr', 'field.storage.node.field_rating');
    $allowed_values = [
<<<<<<< HEAD
      1 => [
        'label' => 'Haute',
      ],
      2 => [
        'label' => 'Moyenne',
      ],
      3 => [
=======
      0 => [
        'label' => 'Haute',
      ],
      1 => [
        'label' => 'Moyenne',
      ],
      2 => [
>>>>>>> dev
        'label' => 'Faible',
      ],
    ];
    $this->assertSame($allowed_values, $config_translation->get('settings.allowed_values'));

    $config_translation = $language_manager->getLanguageConfigOverride('is', 'field.storage.node.field_rating');
    $allowed_values = [
<<<<<<< HEAD
      1 => [
        'label' => 'Hár',
      ],
      2 => [
        'label' => 'Miðlungs',
      ],
      3 => [
=======
      0 => [
        'label' => 'Hár',
      ],
      1 => [
        'label' => 'Miðlungs',
      ],
      2 => [
>>>>>>> dev
        'label' => 'Lágt',
      ],
    ];
    $this->assertSame($allowed_values, $config_translation->get('settings.allowed_values'));

    // Ensure that the count query works as expected.
    $this->assertCount(16, $this->getMigration('d7_field_option_translation')->getSourcePlugin());
  }

}
