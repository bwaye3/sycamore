<?php

namespace Drupal\Core\Entity\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the EntityType constraint.
 */
class EntityTypeConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {
    if (!isset($entity)) {
      return;
    }

<<<<<<< HEAD
    /** @var $entity \Drupal\Core\Entity\EntityInterface */
=======
    /** @var \Drupal\Core\Entity\EntityInterface $entity */
>>>>>>> dev
    if ($entity->getEntityTypeId() != $constraint->type) {
      $this->context->addViolation($constraint->message, ['%type' => $constraint->type]);
    }
  }

}
