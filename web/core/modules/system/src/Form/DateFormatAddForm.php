<?php

namespace Drupal\system\Form;

use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a form for adding a date format.
 *
 * @internal
 */
class DateFormatAddForm extends DateFormatFormBase {

  /**
   * {@inheritdoc}
   */
  protected function actions(array $form, FormStateInterface $form_state) {
    $actions = parent::actions($form, $form_state);
<<<<<<< HEAD
    $actions['submit']['#value'] = t('Add format');
=======
    $actions['submit']['#value'] = $this->t('Add format');
>>>>>>> dev
    return $actions;
  }

}
