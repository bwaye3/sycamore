<?php

namespace Drupal\Core\Session;

<<<<<<< HEAD
=======
use Drupal\Component\Utility\Crypt;
>>>>>>> dev
use Drupal\Core\Site\Settings;
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag as SymfonyMetadataBag;

/**
 * Provides a container for application specific session metadata.
 */
class MetadataBag extends SymfonyMetadataBag {

  /**
   * The key used to store the CSRF token seed in the session.
   */
  const CSRF_TOKEN_SEED = 's';

  /**
   * Constructs a new metadata bag instance.
   *
   * @param \Drupal\Core\Site\Settings $settings
   *   The settings instance.
   */
  public function __construct(Settings $settings) {
    $update_threshold = $settings->get('session_write_interval', 180);
    parent::__construct('_sf2_meta', $update_threshold);
  }

  /**
   * Set the CSRF token seed.
   *
   * @param string $csrf_token_seed
   *   The per-session CSRF token seed.
   */
  public function setCsrfTokenSeed($csrf_token_seed) {
    $this->meta[static::CSRF_TOKEN_SEED] = $csrf_token_seed;
  }

  /**
   * Get the CSRF token seed.
   *
   * @return string|null
   *   The per-session CSRF token seed or null when no value is set.
   */
  public function getCsrfTokenSeed() {
    if (isset($this->meta[static::CSRF_TOKEN_SEED])) {
      return $this->meta[static::CSRF_TOKEN_SEED];
    }
  }

  /**
<<<<<<< HEAD
   * Clear the CSRF token seed.
   */
  public function clearCsrfTokenSeed() {
=======
   * {@inheritdoc}
   */
  public function stampNew($lifetime = NULL) {
    parent::stampNew($lifetime);

    // Set the token seed immediately to avoid a race condition between two
    // simultaneous requests without a seed.
    $this->setCsrfTokenSeed(Crypt::randomBytesBase64());
  }

  /**
   * Clear the CSRF token seed.
   */
  public function clearCsrfTokenSeed() {
    @trigger_error('Calling ' . __METHOD__ . '() is deprecated in drupal:9.2.0 and will be removed in drupal:10.0.0. Use \Drupal\Core\Session\MetadataBag::stampNew() instead. See https://www.drupal.org/node/3187914', E_USER_DEPRECATED);
>>>>>>> dev
    unset($this->meta[static::CSRF_TOKEN_SEED]);
  }

}
