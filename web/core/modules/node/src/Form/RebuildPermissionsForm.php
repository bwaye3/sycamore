<?php

namespace Drupal\node\Form;

use Drupal\Core\Form\ConfirmFormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Form for rebuilding permissions.
 *
 * @internal
 */
class RebuildPermissionsForm extends ConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'node_configure_rebuild_confirm';
  }

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
<<<<<<< HEAD
    return t('Are you sure you want to rebuild the permissions on site content?');
=======
    return $this->t('Are you sure you want to rebuild the permissions on site content?');
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('system.status');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
<<<<<<< HEAD
    return t('Rebuild permissions');
=======
    return $this->t('Rebuild permissions');
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function getDescription() {
<<<<<<< HEAD
    return t('This action rebuilds all permissions on site content, and may be a lengthy process. This action cannot be undone.');
=======
    return $this->t('This action rebuilds all permissions on site content, and may be a lengthy process. This action cannot be undone.');
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    node_access_rebuild(TRUE);
    $form_state->setRedirectUrl($this->getCancelUrl());
  }

}
