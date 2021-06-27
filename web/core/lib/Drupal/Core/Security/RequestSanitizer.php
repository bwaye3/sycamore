<?php

namespace Drupal\Core\Security;

use Drupal\Component\Utility\UrlHelper;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;

/**
 * Sanitizes user input.
 */
class RequestSanitizer {

  /**
   * Request attribute to mark the request as sanitized.
   */
  const SANITIZED = '_drupal_request_sanitized';

  /**
<<<<<<< HEAD
   * The name of the setting that configures the whitelist.
=======
   * The name of the setting that configures the sanitize input safe keys.
   */
  const SANITIZE_INPUT_SAFE_KEYS = 'sanitize_input_safe_keys';

  /**
   * Previous name of SANITIZE_INPUT_SAFE_KEYS.
   *
   * @deprecated in drupal:9.1.0 and is removed from drupal:10.0.0. Use
   *   SANITIZE_INPUT_SAFE_KEYS instead.
   * @see https://www.drupal.org/node/3163148
>>>>>>> dev
   */
  const SANITIZE_WHITELIST = 'sanitize_input_whitelist';

  /**
   * The name of the setting that determines if sanitized keys are logged.
   */
  const SANITIZE_LOG = 'sanitize_input_logging';

  /**
   * Strips dangerous keys from user input.
   *
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The incoming request to sanitize.
<<<<<<< HEAD
   * @param string[] $whitelist
   *   An array of keys to whitelist as safe. See default.settings.php.
=======
   * @param string[] $safe_keys
   *   An array of keys to consider safe.
>>>>>>> dev
   * @param bool $log_sanitized_keys
   *   (optional) Set to TRUE to log keys that are sanitized.
   *
   * @return \Symfony\Component\HttpFoundation\Request
   *   The sanitized request.
   */
<<<<<<< HEAD
  public static function sanitize(Request $request, $whitelist, $log_sanitized_keys = FALSE) {
=======
  public static function sanitize(Request $request, array $safe_keys, $log_sanitized_keys = FALSE) {
>>>>>>> dev
    if (!$request->attributes->get(self::SANITIZED, FALSE)) {
      $update_globals = FALSE;
      $bags = [
        'query' => 'Potentially unsafe keys removed from query string parameters (GET): %s',
        'request' => 'Potentially unsafe keys removed from request body parameters (POST): %s',
        'cookies' => 'Potentially unsafe keys removed from cookie parameters: %s',
      ];
      foreach ($bags as $bag => $message) {
<<<<<<< HEAD
        if (static::processParameterBag($request->$bag, $whitelist, $log_sanitized_keys, $bag, $message)) {
=======
        if (static::processParameterBag($request->$bag, $safe_keys, $log_sanitized_keys, $bag, $message)) {
>>>>>>> dev
          $update_globals = TRUE;
        }
      }
      if ($update_globals) {
        $request->overrideGlobals();
      }
      $request->attributes->set(self::SANITIZED, TRUE);
    }
    return $request;
  }

  /**
   * Processes a request parameter bag.
   *
   * @param \Symfony\Component\HttpFoundation\ParameterBag $bag
   *   The parameter bag to process.
<<<<<<< HEAD
   * @param string[] $whitelist
   *   An array of keys to whitelist as safe.
=======
   * @param string[] $safe_keys
   *   An array of keys to consider safe.
>>>>>>> dev
   * @param bool $log_sanitized_keys
   *   Set to TRUE to log keys that are sanitized.
   * @param string $bag_name
   *   The request parameter bag name. Either 'query', 'request' or 'cookies'.
   * @param string $message
   *   The message to log if the parameter bag contains keys that are removed.
   *   If the message contains %s that is replaced by a list of removed keys.
   *
   * @return bool
   *   TRUE if the parameter bag has been sanitized, FALSE if not.
   */
<<<<<<< HEAD
  protected static function processParameterBag(ParameterBag $bag, $whitelist, $log_sanitized_keys, $bag_name, $message) {
    $sanitized = FALSE;
    $sanitized_keys = [];
    $bag->replace(static::stripDangerousValues($bag->all(), $whitelist, $sanitized_keys));
=======
  protected static function processParameterBag(ParameterBag $bag, array $safe_keys, $log_sanitized_keys, $bag_name, $message) {
    $sanitized = FALSE;
    $sanitized_keys = [];
    $bag->replace(static::stripDangerousValues($bag->all(), $safe_keys, $sanitized_keys));
>>>>>>> dev
    if (!empty($sanitized_keys)) {
      $sanitized = TRUE;
      if ($log_sanitized_keys) {
        trigger_error(sprintf($message, implode(', ', $sanitized_keys)));
      }
    }

    if ($bag->has('destination')) {
      $destination = $bag->get('destination');
<<<<<<< HEAD
      $destination_dangerous_keys = static::checkDestination($destination, $whitelist);
=======
      $destination_dangerous_keys = static::checkDestination($destination, $safe_keys);
>>>>>>> dev
      if (!empty($destination_dangerous_keys)) {
        // The destination is removed rather than sanitized because the URL
        // generator service is not available and this method is called very
        // early in the bootstrap.
        $bag->remove('destination');
        $sanitized = TRUE;
        if ($log_sanitized_keys) {
          trigger_error(sprintf('Potentially unsafe destination removed from %s parameter bag because it contained the following keys: %s', $bag_name, implode(', ', $destination_dangerous_keys)));
        }
      }
      // Sanitize the destination parameter (which is often used for redirects)
      // to prevent open redirect attacks leading to other domains.
      if (UrlHelper::isExternal($destination)) {
        // The destination is removed because it is an external URL.
        $bag->remove('destination');
        $sanitized = TRUE;
        if ($log_sanitized_keys) {
          trigger_error(sprintf('Potentially unsafe destination removed from %s parameter bag because it points to an external URL.', $bag_name));
        }
      }
    }
    return $sanitized;
  }

  /**
   * Checks a destination string to see if it is dangerous.
   *
   * @param string $destination
   *   The destination string to check.
<<<<<<< HEAD
   * @param array $whitelist
   *   An array of keys to whitelist as safe.
=======
   * @param string[] $safe_keys
   *   An array of keys to consider safe.
>>>>>>> dev
   *
   * @return array
   *   The dangerous keys found in the destination parameter.
   */
<<<<<<< HEAD
  protected static function checkDestination($destination, array $whitelist) {
=======
  protected static function checkDestination($destination, array $safe_keys) {
>>>>>>> dev
    $dangerous_keys = [];
    $parts = UrlHelper::parse($destination);
    // If there is a query string, check its query parameters.
    if (!empty($parts['query'])) {
<<<<<<< HEAD
      static::stripDangerousValues($parts['query'], $whitelist, $dangerous_keys);
=======
      static::stripDangerousValues($parts['query'], $safe_keys, $dangerous_keys);
>>>>>>> dev
    }
    return $dangerous_keys;
  }

  /**
   * Strips dangerous keys from $input.
   *
   * @param mixed $input
   *   The input to sanitize.
<<<<<<< HEAD
   * @param string[] $whitelist
   *   An array of keys to whitelist as safe.
=======
   * @param string[] $safe_keys
   *   An array of keys to consider safe.
>>>>>>> dev
   * @param string[] $sanitized_keys
   *   An array of keys that have been removed.
   *
   * @return mixed
   *   The sanitized input.
   */
<<<<<<< HEAD
  protected static function stripDangerousValues($input, array $whitelist, array &$sanitized_keys) {
    if (is_array($input)) {
      foreach ($input as $key => $value) {
        if ($key !== '' && ((string) $key)[0] === '#' && !in_array($key, $whitelist, TRUE)) {
=======
  protected static function stripDangerousValues($input, array $safe_keys, array &$sanitized_keys) {
    if (is_array($input)) {
      foreach ($input as $key => $value) {
        if ($key !== '' && ((string) $key)[0] === '#' && !in_array($key, $safe_keys, TRUE)) {
>>>>>>> dev
          unset($input[$key]);
          $sanitized_keys[] = $key;
        }
        else {
<<<<<<< HEAD
          $input[$key] = static::stripDangerousValues($input[$key], $whitelist, $sanitized_keys);
=======
          $input[$key] = static::stripDangerousValues($input[$key], $safe_keys, $sanitized_keys);
>>>>>>> dev
        }
      }
    }
    return $input;
  }

}
