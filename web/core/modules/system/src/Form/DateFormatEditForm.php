<?php

namespace Drupal\system\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a form for editing a date format.
 *
 * @internal
 */
class DateFormatEditForm extends DateFormatFormBase {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

<<<<<<< HEAD
    $now = t('Displayed as %date', ['%date' => $this->dateFormatter->format(REQUEST_TIME, $this->entity->id())]);
=======
    $now = $this->t('Displayed as %date', ['%date' => $this->dateFormatter->format(REQUEST_TIME, $this->entity->id())]);
>>>>>>> dev
    $form['date_format_pattern']['#field_suffix'] = ' <small data-drupal-date-formatter="preview">' . $now . '</small>';
    $form['date_format_pattern']['#default_value'] = $this->entity->getPattern();

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);
<<<<<<< HEAD
    $actions['submit']['#value'] = t('Save format');
=======
    $actions['submit']['#value'] = $this->t('Save format');
>>>>>>> dev
    unset($actions['delete']);
    return $actions;
  }

}
