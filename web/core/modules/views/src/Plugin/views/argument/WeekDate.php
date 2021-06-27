<?php

namespace Drupal\views\Plugin\views\argument;

/**
 * Argument handler for a week.
 *
 * @ViewsArgument("date_week")
 */
class WeekDate extends Date {

  /**
   * {@inheritdoc}
   */
  protected $argFormat = 'W';

  /**
<<<<<<< HEAD
   * Provide a link to the next level of the view
=======
   * Provide a link to the next level of the view.
>>>>>>> dev
   */
  public function summaryName($data) {
    $created = $data->{$this->name_alias};
    return $this->t('Week @week', ['@week' => $created]);
  }

}
