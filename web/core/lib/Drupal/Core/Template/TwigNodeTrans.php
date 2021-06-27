<?php

namespace Drupal\Core\Template;

<<<<<<< HEAD
use Twig\Node\CheckToStringNode;
=======
use Twig\Compiler;
use Twig\Error\SyntaxError;
use Twig\Node\CheckToStringNode;
use Twig\Node\Expression\AbstractExpression;
use Twig\Node\Expression\ConstantExpression;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Expression\FunctionExpression;
use Twig\Node\Expression\GetAttrExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Node\Expression\TempNameExpression;
use Twig\Node\Node;
use Twig\Node\PrintNode;
>>>>>>> dev

/**
 * A class that defines the Twig 'trans' tag for Drupal.
 *
 * This Twig extension was originally based on Twig i18n extension. It has been
 * severely modified to work properly with the complexities of the Drupal
 * translation system.
 *
 * @see https://twig-extensions.readthedocs.io/en/latest/i18n.html
 * @see https://github.com/fabpot/Twig-extensions
 */
<<<<<<< HEAD
class TwigNodeTrans extends \Twig_Node {
=======
class TwigNodeTrans extends Node {
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function __construct(\Twig_Node $body, \Twig_Node $plural = NULL, \Twig_Node_Expression $count = NULL, \Twig_Node_Expression $options = NULL, $lineno, $tag = NULL) {
=======
  public function __construct(Node $body, Node $plural = NULL, AbstractExpression $count = NULL, AbstractExpression $options = NULL, $lineno, $tag = NULL) {
>>>>>>> dev
    $nodes['body'] = $body;
    if ($count !== NULL) {
      $nodes['count'] = $count;
    }
    if ($plural !== NULL) {
      $nodes['plural'] = $plural;
    }
    if ($options !== NULL) {
      $nodes['options'] = $options;
    }
    parent::__construct($nodes, [], $lineno, $tag);
  }

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function compile(\Twig_Compiler $compiler) {
=======
  public function compile(Compiler $compiler) {
>>>>>>> dev
    $compiler->addDebugInfo($this);

    list($singular, $tokens) = $this->compileString($this->getNode('body'));
    $plural = NULL;

    if ($this->hasNode('plural')) {
      list($plural, $pluralTokens) = $this->compileString($this->getNode('plural'));
      $tokens = array_merge($tokens, $pluralTokens);
    }

    // Start writing with the function to be called.
    $compiler->write('echo ' . (empty($plural) ? 't' : '\Drupal::translation()->formatPlural') . '(');

    // Move the count to the beginning of the parameters list.
    if (!empty($plural)) {
      $compiler->raw('abs(')->subcompile($this->getNode('count'))->raw('), ');
    }

    // Write the singular text parameter.
    $compiler->subcompile($singular);

    // Write the plural text parameter, if necessary.
    if (!empty($plural)) {
      $compiler->raw(', ')->subcompile($plural);
    }

    // Write any tokens found as an associative array parameter, otherwise just
    // leave as an empty array.
    $compiler->raw(', array(');
    foreach ($tokens as $token) {
      $compiler->string($token->getAttribute('placeholder'))->raw(' => ')->subcompile($token)->raw(', ');
    }
    $compiler->raw(')');

    // Write any options passed.
    if ($this->hasNode('options')) {
      $compiler->raw(', ')->subcompile($this->getNode('options'));
    }

    // Write function closure.
    $compiler->raw(')');

    // @todo Add debug output, see https://www.drupal.org/node/2512672

    // End writing.
    $compiler->raw(";\n");
  }

  /**
   * Extracts the text and tokens for the "trans" tag.
   *
<<<<<<< HEAD
   * @param \Twig_Node $body
=======
   * @param \Twig\Node\Node $body
>>>>>>> dev
   *   The node to compile.
   *
   * @return array
   *   Returns an array containing the two following parameters:
   *   - string $text
   *       The extracted text.
   *   - array $tokens
<<<<<<< HEAD
   *       The extracted tokens as new \Twig_Node_Expression_Name instances.
   */
  protected function compileString(\Twig_Node $body) {
    if ($body instanceof \Twig_Node_Expression_Name || $body instanceof \Twig_Node_Expression_Constant || $body instanceof \Twig_Node_Expression_TempName) {
=======
   *       The extracted tokens as new \Twig\Node\Expression\TempNameExpression
   *       instances.
   */
  protected function compileString(Node $body) {
    if ($body instanceof NameExpression || $body instanceof ConstantExpression || $body instanceof TempNameExpression) {
>>>>>>> dev
      return [$body, []];
    }

    $tokens = [];
    if (count($body)) {
      $text = '';

      foreach ($body as $node) {
<<<<<<< HEAD
        if (get_class($node) === 'Twig_Node' && $node->getNode(0) instanceof \Twig_Node_SetTemp) {
          $node = $node->getNode(1);
        }

        if ($node instanceof \Twig_Node_Print) {
          $n = $node->getNode('expr');
          while ($n instanceof \Twig_Node_Expression_Filter) {
=======
        if ($node instanceof PrintNode) {
          $n = $node->getNode('expr');
          while ($n instanceof FilterExpression) {
>>>>>>> dev
            $n = $n->getNode('node');
          }

          if ($n instanceof CheckToStringNode) {
            $n = $n->getNode('expr');
          }
          $args = $n;

          // Support TwigExtension->renderVar() function in chain.
<<<<<<< HEAD
          if ($args instanceof \Twig_Node_Expression_Function) {
=======
          if ($args instanceof FunctionExpression) {
>>>>>>> dev
            $args = $n->getNode('arguments')->getNode(0);
          }

          // Detect if a token implements one of the filters reserved for
          // modifying the prefix of a token. The default prefix used for
          // translations is "@". This escapes the printed token and makes them
          // safe for templates.
          // @see TwigExtension::getFilters()
          $argPrefix = '@';
<<<<<<< HEAD
          while ($args instanceof \Twig_Node_Expression_Filter) {
=======
          while ($args instanceof FilterExpression) {
>>>>>>> dev
            switch ($args->getNode('filter')->getAttribute('value')) {
              case 'placeholder':
                $argPrefix = '%';
                break;
            }
            $args = $args->getNode('node');
          }
          if ($args instanceof CheckToStringNode) {
            $args = $args->getNode('expr');
          }
<<<<<<< HEAD
          if ($args instanceof \Twig_Node_Expression_GetAttr) {
=======
          if ($args instanceof GetAttrExpression) {
>>>>>>> dev
            $argName = [];
            // Reuse the incoming expression.
            $expr = $args;
            // Assemble a valid argument name by walking through the expression.
            $argName[] = $args->getNode('attribute')->getAttribute('value');
            while ($args->hasNode('node')) {
              $args = $args->getNode('node');
<<<<<<< HEAD
              if ($args instanceof \Twig_Node_Expression_Name) {
=======
              if ($args instanceof NameExpression) {
>>>>>>> dev
                $argName[] = $args->getAttribute('name');
              }
              else {
                $argName[] = $args->getNode('attribute')->getAttribute('value');
              }
            }
            $argName = array_reverse($argName);
            $argName = implode('.', $argName);
          }
          else {
            $argName = $n->getAttribute('name');
            if (!is_null($args)) {
              $argName = $args->getAttribute('name');
            }
<<<<<<< HEAD
            $expr = new \Twig_Node_Expression_Name($argName, $n->getTemplateLine());
=======
            $expr = new NameExpression($argName, $n->getTemplateLine());
>>>>>>> dev
          }
          $placeholder = sprintf('%s%s', $argPrefix, $argName);
          $text .= $placeholder;
          $expr->setAttribute('placeholder', $placeholder);
          $tokens[] = $expr;
        }
        else {
          $text .= $node->getAttribute('data');
        }
      }
    }
    elseif (!$body->hasAttribute('data')) {
<<<<<<< HEAD
      throw new \Twig_Error_Syntax('{% trans %} tag cannot be empty');
=======
      throw new SyntaxError('{% trans %} tag cannot be empty');
>>>>>>> dev
    }
    else {
      $text = $body->getAttribute('data');
    }

    return [
<<<<<<< HEAD
      new \Twig_Node([new \Twig_Node_Expression_Constant(trim($text), $body->getTemplateLine())]),
=======
      new Node([new ConstantExpression(trim($text), $body->getTemplateLine())]),
>>>>>>> dev
      $tokens,
    ];
  }

}
