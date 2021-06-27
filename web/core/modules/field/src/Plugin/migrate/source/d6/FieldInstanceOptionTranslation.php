<?php

namespace Drupal\field\Plugin\migrate\source\d6;

/**
<<<<<<< HEAD
 * Gets field instance option label translations.
=======
 * Drupal 6 i18n field instance option labels source from database.
 *
 * For available configuration keys, refer to the parent classes:
 * @see \Drupal\migrate\Plugin\migrate\source\SqlBase
 * @see \Drupal\migrate\Plugin\migrate\source\SourcePluginBase
>>>>>>> dev
 *
 * @MigrateSource(
 *   id = "d6_field_instance_option_translation",
 *   source_module = "i18ncck"
 * )
 */
class FieldInstanceOptionTranslation extends FieldOptionTranslation {

  /**
   * {@inheritdoc}
   */
  public function query() {
    $query = parent::query();
<<<<<<< HEAD
    $query->join('content_node_field_instance', 'cnfi', 'cnf.field_name = cnfi.field_name');
=======
    $query->join('content_node_field_instance', 'cnfi', '[cnfi].[field_name] = [cnf].[field_name]');
>>>>>>> dev
    $query->addField('cnfi', 'type_name');
    return $query;
  }

  /**
   * {@inheritdoc}
   */
  public function fields() {
    $fields = [
      'type_name' => $this->t('Type (article, page, ....)'),
    ];
    return parent::fields() + $fields;
  }

}
