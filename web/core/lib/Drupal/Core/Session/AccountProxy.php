<?php

namespace Drupal\Core\Session;

use Drupal\Core\DependencyInjection\DependencySerializationTrait;
<<<<<<< HEAD
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
=======
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
>>>>>>> dev

/**
 * A proxied implementation of AccountInterface.
 *
 * The reason why we need an account proxy is that we don't want to have global
 * state directly stored in the container.
 *
 * This proxy object avoids multiple invocations of the authentication manager
 * which can happen if the current user is accessed in constructors. It also
 * allows legacy code to change the current user where the user cannot be
 * directly injected into dependent code.
 */
class AccountProxy implements AccountProxyInterface {

  use DependencySerializationTrait;

  /**
   * The instantiated account.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $account;

  /**
   * Account id.
   *
   * @var int
   */
  protected $id = 0;

  /**
<<<<<<< HEAD
   * Initial account id.
   *
   * @var int
   *
   * @deprecated in drupal:8.3.0 and is removed from drupal:9.0.0. Use
   *   $this->id instead.
   */
  protected $initialAccountId;

  /**
   * Event dispatcher.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
=======
   * Event dispatcher.
   *
   * @var \Symfony\Contracts\EventDispatcher\EventDispatcherInterface
>>>>>>> dev
   */
  protected $eventDispatcher;

  /**
   * AccountProxy constructor.
   *
<<<<<<< HEAD
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher
   *   Event dispatcher.
   */
  public function __construct(EventDispatcherInterface $eventDispatcher = NULL) {
    if (!$eventDispatcher) {
      @trigger_error('Calling AccountProxy::__construct() without the $eventDispatcher argument is deprecated in drupal:8.8.0. The $eventDispatcher argument will be required in drupal:9.0.0. See https://www.drupal.org/node/3009387', E_USER_DEPRECATED);
      $eventDispatcher = \Drupal::service('event_dispatcher');
    }
=======
   * @param \Symfony\Contracts\EventDispatcher\EventDispatcherInterface $eventDispatcher
   *   Event dispatcher.
   */
  public function __construct(EventDispatcherInterface $eventDispatcher) {
>>>>>>> dev
    $this->eventDispatcher = $eventDispatcher;
  }

  /**
   * {@inheritdoc}
   */
  public function setAccount(AccountInterface $account) {
    // If the passed account is already proxied, use the actual account instead
    // to prevent loops.
    if ($account instanceof static) {
      $account = $account->getAccount();
    }
    $this->account = $account;
    $this->id = $account->id();
<<<<<<< HEAD
    $this->eventDispatcher->dispatch(AccountEvents::SET_USER, new AccountSetEvent($account));
=======
    $this->eventDispatcher->dispatch(new AccountSetEvent($account), AccountEvents::SET_USER);
>>>>>>> dev
  }

  /**
   * {@inheritdoc}
   */
  public function getAccount() {
    if (!isset($this->account)) {
      if ($this->id) {
        // After the container is rebuilt, DrupalKernel sets the initial
        // account to the id of the logged in user. This is necessary in order
        // to refresh the user account reference here.
        $this->setAccount($this->loadUserEntity($this->id));
      }
      else {
        $this->account = new AnonymousUserSession();
      }
    }

    return $this->account;
  }

  /**
   * {@inheritdoc}
   */
  public function id() {
    return $this->id;
  }

  /**
   * {@inheritdoc}
   */
  public function getRoles($exclude_locked_roles = FALSE) {
    return $this->getAccount()->getRoles($exclude_locked_roles);
  }

  /**
   * {@inheritdoc}
   */
  public function hasPermission($permission) {
    return $this->getAccount()->hasPermission($permission);
  }

  /**
   * {@inheritdoc}
   */
  public function isAuthenticated() {
    return $this->getAccount()->isAuthenticated();
  }

  /**
   * {@inheritdoc}
   */
  public function isAnonymous() {
    return $this->getAccount()->isAnonymous();
  }

  /**
   * {@inheritdoc}
   */
  public function getPreferredLangcode($fallback_to_default = TRUE) {
    return $this->getAccount()->getPreferredLangcode($fallback_to_default);
  }

  /**
   * {@inheritdoc}
   */
  public function getPreferredAdminLangcode($fallback_to_default = TRUE) {
    return $this->getAccount()->getPreferredAdminLangcode($fallback_to_default);
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function getUsername() {
    @trigger_error('\Drupal\Core\Session\AccountInterface::getUsername() is deprecated in Drupal 8.0.0, will be removed before Drupal 9.0.0. Use \Drupal\Core\Session\AccountInterface::getAccountName() or \Drupal\user\UserInterface::getDisplayName() instead. See https://www.drupal.org/node/2572493', E_USER_DEPRECATED);
    return $this->getAccountName();
  }

  /**
   * {@inheritdoc}
   */
=======
>>>>>>> dev
  public function getAccountName() {
    return $this->getAccount()->getAccountName();
  }

  /**
   * {@inheritdoc}
   */
  public function getDisplayName() {
    return $this->getAccount()->getDisplayName();
  }

  /**
   * {@inheritdoc}
   */
  public function getEmail() {
    return $this->getAccount()->getEmail();
  }

  /**
   * {@inheritdoc}
   */
  public function getTimeZone() {
    return $this->getAccount()->getTimeZone();
  }

  /**
   * {@inheritdoc}
   */
  public function getLastAccessedTime() {
    return $this->getAccount()->getLastAccessedTime();
  }

  /**
   * {@inheritdoc}
   */
  public function setInitialAccountId($account_id) {
    if (isset($this->account)) {
      throw new \LogicException('AccountProxyInterface::setInitialAccountId() cannot be called after an account was set on the AccountProxy');
    }

<<<<<<< HEAD
    $this->id = $this->initialAccountId = $account_id;
=======
    $this->id = $account_id;
>>>>>>> dev
  }

  /**
   * Load a user entity.
   *
<<<<<<< HEAD
   * The entity manager requires additional initialization code and cache
=======
   * The entity type manager requires additional initialization code and cache
>>>>>>> dev
   * clearing after the list of modules is changed. Therefore it is necessary to
   * retrieve it as late as possible.
   *
   * Because of serialization issues it is currently not possible to inject the
   * container into the AccountProxy. Thus it is necessary to retrieve the
<<<<<<< HEAD
   * entity manager statically.
=======
   * entity type manager statically.
>>>>>>> dev
   *
   * @see https://www.drupal.org/node/2430447
   *
   * @param int $account_id
   *   The id of an account to load.
   *
   * @return \Drupal\Core\Session\AccountInterface|null
   *   An account or NULL if none is found.
   */
  protected function loadUserEntity($account_id) {
    return \Drupal::entityTypeManager()->getStorage('user')->load($account_id);
  }

}
