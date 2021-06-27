<?php

/**
 * @file
 * Post update functions for Contact.
 */

<<<<<<< HEAD
use Drupal\contact\Entity\ContactForm;

/**
 * Initialize 'message' and 'redirect' field values to 'contact_form' entities.
 */
function contact_post_update_add_message_redirect_field_to_contact_form() {
  /** @var \Drupal\contact\ContactFormInterface $contact */
  foreach (ContactForm::loadMultiple() as $contact) {
    $contact
      ->setMessage('Your message has been sent.')
      ->setRedirectPath('')
      ->save();
  }
=======
/**
 * Implements hook_removed_post_updates().
 */
function contact_removed_post_updates() {
  return [
    'contact_post_update_add_message_redirect_field_to_contact_form' => '9.0.0',
  ];
>>>>>>> dev
}
