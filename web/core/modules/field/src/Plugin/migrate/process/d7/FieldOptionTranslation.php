<?php

namespace Drupal\field\Plugin\migrate\process\d7;

use Drupal\migrate\MigrateExecutableInterface;
use Drupal\migrate\ProcessPluginBase;
use Drupal\migrate\Row;

/**
 * Determines the allowed values translation for select lists.
 *
 * @MigrateProcessPlugin(
 *   id = "d7_field_option_translation",
 *   handle_multiples = TRUE
 * )
 */
class FieldOptionTranslation extends ProcessPluginBase {

  /**
   * {@inheritdoc}
   *
   * Get the field default/mapped settings.
   */
  public function transform($value, MigrateExecutableInterface $migrate_executable, Row $row, $destination_property) {
    list($type, $data) = $value;

    $data = unserialize($data);
<<<<<<< HEAD
    $allowed_values = '';
    $translation_key = $row->getSourceProperty('property');
    $i = 0;
=======
    $new_allowed_values = '';
    $translation_key = $row->getSourceProperty('property');
>>>>>>> dev
    if (isset($data['settings']['allowed_values'])) {
      $allowed_values = $data['settings']['allowed_values'];
      switch ($type) {
        case 'list_string':
        case 'list_integer':
        case 'list_float':
        case 'list_text':
          if (isset($allowed_values[$translation_key])) {
<<<<<<< HEAD
            $allowed_values = ['label' => $row->getSourceProperty('translation')];
=======
            $new_allowed_values = ['label' => $row->getSourceProperty('translation')];
            $translation_key = array_search($translation_key, array_keys($allowed_values));
>>>>>>> dev
            break;
          }
          break;

        default:
      }
    }
<<<<<<< HEAD
    return ["settings.allowed_values.$translation_key", $allowed_values];
=======
    return ["settings.allowed_values.$translation_key", $new_allowed_values];
>>>>>>> dev
  }

}
