<?php

namespace Drupal\Core\Entity;

<<<<<<< HEAD
use Drupal\Core\DependencyInjection\DeprecatedServicePropertyTrait;
=======
>>>>>>> dev
use Drupal\Core\Form\FormBuilderInterface;
use Drupal\Core\Form\FormState;

/**
 * Builds entity forms.
 */
class EntityFormBuilder implements EntityFormBuilderInterface {
<<<<<<< HEAD
  use DeprecatedServicePropertyTrait;

  /**
   * {@inheritdoc}
   */
  protected $deprecatedProperties = ['entityManager' => 'entity.manager'];
=======
>>>>>>> dev

  /**
   * The entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The form builder.
   *
   * @var \Drupal\Core\Form\FormBuilderInterface
   */
  protected $formBuilder;

  /**
   * Constructs a new EntityFormBuilder.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   The entity type manager service.
   * @param \Drupal\Core\Form\FormBuilderInterface $form_builder
   *   The form builder.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, FormBuilderInterface $form_builder) {
<<<<<<< HEAD
    if ($entity_type_manager instanceof EntityManagerInterface) {
      @trigger_error('Passing the entity.manager service to EntityFormBuilder::__construct() is deprecated in Drupal 8.7.0 and will be removed before Drupal 9.0.0. Pass the new dependencies instead. See https://www.drupal.org/node/2549139.', E_USER_DEPRECATED);
      $this->entityTypeManager = \Drupal::entityTypeManager();
    }
    else {
      $this->entityTypeManager = $entity_type_manager;
    }
=======
    $this->entityTypeManager = $entity_type_manager;
>>>>>>> dev
    $this->formBuilder = $form_builder;
  }

  /**
   * {@inheritdoc}
   */
  public function getForm(EntityInterface $entity, $operation = 'default', array $form_state_additions = []) {
    $form_object = $this->entityTypeManager->getFormObject($entity->getEntityTypeId(), $operation);
    $form_object->setEntity($entity);

    $form_state = (new FormState())->setFormState($form_state_additions);
    return $this->formBuilder->buildForm($form_object, $form_state);
  }

}
