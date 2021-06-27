<?php

namespace Drupal\views\Plugin\views\filter;

use Drupal\Core\Form\FormStateInterface;

/**
<<<<<<< HEAD
 * Simple filter to handle equal to / not equal to filters
=======
 * Simple filter to handle equal to / not equal to filters.
>>>>>>> dev
 *
 * @ingroup views_filter_handlers
 *
 * @ViewsFilter("equality")
 */
class Equality extends FilterPluginBase {

<<<<<<< HEAD
  // exposed filter options
  protected $alwaysMultiple = TRUE;

  /**
   * Provide simple equality operator
=======
  /**
   * Exposed filter options.
   *
   * @var bool
   */
  protected $alwaysMultiple = TRUE;

  /**
   * Provide simple equality operator.
>>>>>>> dev
   */
  public function operatorOptions() {
    return [
      '=' => $this->t('Is equal to'),
      '!=' => $this->t('Is not equal to'),
    ];
  }

  /**
<<<<<<< HEAD
   * Provide a simple textfield for equality
=======
   * Provide a simple textfield for equality.
>>>>>>> dev
   */
  protected function valueForm(&$form, FormStateInterface $form_state) {
    $form['value'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Value'),
      '#size' => 30,
      '#default_value' => $this->value,
    ];

<<<<<<< HEAD
    if ($exposed = $form_state->get('exposed')) {
=======
    if ($form_state->get('exposed')) {
>>>>>>> dev
      $identifier = $this->options['expose']['identifier'];
      $user_input = $form_state->getUserInput();
      if (!isset($user_input[$identifier])) {
        $user_input[$identifier] = $this->value;
        $form_state->setUserInput($user_input);
      }
    }
  }

}
