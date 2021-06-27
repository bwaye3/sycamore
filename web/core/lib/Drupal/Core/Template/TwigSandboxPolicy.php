<?php

namespace Drupal\Core\Template;

use Drupal\Core\Site\Settings;
<<<<<<< HEAD
=======
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityPolicyInterface;
>>>>>>> dev

/**
 * Default sandbox policy for Twig templates.
 *
 * Twig's sandbox extension is usually used to evaluate untrusted code by
 * limiting access to potentially unsafe properties or methods. Since we do not
 * use ViewModels when passing objects to Twig templates, we limit what those
<<<<<<< HEAD
 * objects can do by whitelisting certain classes, method names, and method
 * names with an allowed prefix. All object properties may be accessed.
 */
class TwigSandboxPolicy implements \Twig_Sandbox_SecurityPolicyInterface {

  /**
   * An array of whitelisted methods in the form of methodName => TRUE.
   *
   * @var array
   */
  protected $whitelisted_methods;

  /**
   * An array of whitelisted method prefixes -- any method starting with one of
=======
 * objects can do by only loading certain classes, method names, and method
 * names with an allowed prefix. All object properties may be accessed.
 */
class TwigSandboxPolicy implements SecurityPolicyInterface {

  /**
   * An array of allowed methods in the form of methodName => TRUE.
   *
   * @var array
   */
  protected $allowed_methods;

  /**
   * An array of allowed method prefixes -- any method starting with one of
>>>>>>> dev
   * these prefixes will be allowed.
   *
   * @var array
   */
<<<<<<< HEAD
  protected $whitelisted_prefixes;
=======
  protected $allowed_prefixes;
>>>>>>> dev

  /**
   * An array of class names for which any method calls are allowed.
   *
   * @var array
   */
<<<<<<< HEAD
  protected $whitelisted_classes;
=======
  protected $allowed_classes;
>>>>>>> dev

  /**
   * Constructs a new TwigSandboxPolicy object.
   */
  public function __construct() {
<<<<<<< HEAD
    // Allow settings.php to override our default whitelisted classes, methods,
    // and prefixes.
    $whitelisted_classes = Settings::get('twig_sandbox_whitelisted_classes', [
=======
    // Allow settings.php to override our default allowed classes, methods, and
    // prefixes.
    $allowed_classes = Settings::get('twig_sandbox_allowed_classes', [
>>>>>>> dev
      // Allow any operations on the Attribute object as it is intended to be
      // changed from a Twig template, for example calling addClass().
      'Drupal\Core\Template\Attribute',
    ]);
<<<<<<< HEAD
    // Flip the arrays so we can check using isset().
    $this->whitelisted_classes = array_flip($whitelisted_classes);

    $whitelisted_methods = Settings::get('twig_sandbox_whitelisted_methods', [
=======
    // Flip the array so we can check using isset().
    $this->allowed_classes = array_flip($allowed_classes);

    $allowed_methods = Settings::get('twig_sandbox_allowed_methods', [
>>>>>>> dev
      // Only allow idempotent methods.
      'id',
      'label',
      'bundle',
      'get',
      '__toString',
      'toString',
    ]);
<<<<<<< HEAD
    $this->whitelisted_methods = array_flip($whitelisted_methods);

    $this->whitelisted_prefixes = Settings::get('twig_sandbox_whitelisted_prefixes', [
=======
    // Flip the array so we can check using isset().
    $this->allowed_methods = array_flip($allowed_methods);

    $this->allowed_prefixes = Settings::get('twig_sandbox_allowed_prefixes', [
>>>>>>> dev
      'get',
      'has',
      'is',
    ]);
  }

  /**
   * {@inheritdoc}
   */
  public function checkSecurity($tags, $filters, $functions) {}

  /**
   * {@inheritdoc}
   */
  public function checkPropertyAllowed($obj, $property) {}

  /**
   * {@inheritdoc}
   */
  public function checkMethodAllowed($obj, $method) {
<<<<<<< HEAD
    foreach ($this->whitelisted_classes as $class => $key) {
=======
    foreach ($this->allowed_classes as $class => $key) {
>>>>>>> dev
      if ($obj instanceof $class) {
        return TRUE;
      }
    }

    // Return quickly for an exact match of the method name.
<<<<<<< HEAD
    if (isset($this->whitelisted_methods[$method])) {
      return TRUE;
    }

    // If the method name starts with a whitelisted prefix, allow it.
    // Note: strpos() is between 3x and 7x faster than preg_match in this case.
    foreach ($this->whitelisted_prefixes as $prefix) {
=======
    if (isset($this->allowed_methods[$method])) {
      return TRUE;
    }

    // If the method name starts with an allowed prefix, allow it. Note:
    // strpos() is between 3x and 7x faster than preg_match() in this case.
    foreach ($this->allowed_prefixes as $prefix) {
>>>>>>> dev
      if (strpos($method, $prefix) === 0) {
        return TRUE;
      }
    }

<<<<<<< HEAD
    throw new \Twig_Sandbox_SecurityError(sprintf('Calling "%s" method on a "%s" object is not allowed.', $method, get_class($obj)));
=======
    throw new SecurityError(sprintf('Calling "%s" method on a "%s" object is not allowed.', $method, get_class($obj)));
>>>>>>> dev
  }

}
