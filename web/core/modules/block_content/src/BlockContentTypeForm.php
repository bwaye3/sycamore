<?php

namespace Drupal\block_content;

use Drupal\Core\Entity\BundleEntityFormBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\language\Entity\ContentLanguageSettings;

/**
 * The block content type entity form.
 *
 * @internal
 */
class BlockContentTypeForm extends BundleEntityFormBase {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

<<<<<<< HEAD
    /* @var \Drupal\block_content\BlockContentTypeInterface $block_type */
=======
    /** @var \Drupal\block_content\BlockContentTypeInterface $block_type */
>>>>>>> dev
    $block_type = $this->entity;

    if ($this->operation == 'add') {
      $form['#title'] = $this->t('Add custom block type');
    }
    else {
      $form['#title'] = $this->t('Edit %label custom block type', ['%label' => $block_type->label()]);
    }

    $form['label'] = [
      '#type' => 'textfield',
<<<<<<< HEAD
      '#title' => t('Label'),
      '#maxlength' => 255,
      '#default_value' => $block_type->label(),
      '#description' => t("Provide a label for this block type to help identify it in the administration pages."),
=======
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $block_type->label(),
      '#description' => $this->t("Provide a label for this block type to help identify it in the administration pages."),
>>>>>>> dev
      '#required' => TRUE,
    ];
    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $block_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\block_content\Entity\BlockContentType::load',
      ],
      '#maxlength' => EntityTypeInterface::BUNDLE_MAX_LENGTH,
    ];

    $form['description'] = [
      '#type' => 'textarea',
      '#default_value' => $block_type->getDescription(),
<<<<<<< HEAD
      '#description' => t('Enter a description for this block type.'),
      '#title' => t('Description'),
=======
      '#description' => $this->t('Enter a description for this block type.'),
      '#title' => $this->t('Description'),
>>>>>>> dev
    ];

    $form['revision'] = [
      '#type' => 'checkbox',
<<<<<<< HEAD
      '#title' => t('Create new revision'),
      '#default_value' => $block_type->shouldCreateNewRevision(),
      '#description' => t('Create a new revision by default for this block type.'),
=======
      '#title' => $this->t('Create new revision'),
      '#default_value' => $block_type->shouldCreateNewRevision(),
      '#description' => $this->t('Create a new revision by default for this block type.'),
>>>>>>> dev
    ];

    if ($this->moduleHandler->moduleExists('language')) {
      $form['language'] = [
        '#type' => 'details',
<<<<<<< HEAD
        '#title' => t('Language settings'),
=======
        '#title' => $this->t('Language settings'),
>>>>>>> dev
        '#group' => 'additional_settings',
      ];

      $language_configuration = ContentLanguageSettings::loadByEntityTypeBundle('block_content', $block_type->id());
      $form['language']['language_configuration'] = [
        '#type' => 'language_configuration',
        '#entity_information' => [
          'entity_type' => 'block_content',
          'bundle' => $block_type->id(),
        ],
        '#default_value' => $language_configuration,
      ];

      $form['#submit'][] = 'language_configuration_element_submit';
    }

    $form['actions'] = ['#type' => 'actions'];
    $form['actions']['submit'] = [
      '#type' => 'submit',
<<<<<<< HEAD
      '#value' => t('Save'),
=======
      '#value' => $this->t('Save'),
>>>>>>> dev
    ];

    return $this->protectBundleIdElement($form);
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $block_type = $this->entity;
    $status = $block_type->save();

    $edit_link = $this->entity->toLink($this->t('Edit'), 'edit-form')->toString();
    $logger = $this->logger('block_content');
    if ($status == SAVED_UPDATED) {
<<<<<<< HEAD
      $this->messenger()->addStatus(t('Custom block type %label has been updated.', ['%label' => $block_type->label()]));
=======
      $this->messenger()->addStatus($this->t('Custom block type %label has been updated.', ['%label' => $block_type->label()]));
>>>>>>> dev
      $logger->notice('Custom block type %label has been updated.', ['%label' => $block_type->label(), 'link' => $edit_link]);
    }
    else {
      block_content_add_body_field($block_type->id());
<<<<<<< HEAD
      $this->messenger()->addStatus(t('Custom block type %label has been added.', ['%label' => $block_type->label()]));
=======
      $this->messenger()->addStatus($this->t('Custom block type %label has been added.', ['%label' => $block_type->label()]));
>>>>>>> dev
      $logger->notice('Custom block type %label has been added.', ['%label' => $block_type->label(), 'link' => $edit_link]);
    }

    $form_state->setRedirectUrl($this->entity->toUrl('collection'));
  }

}
