<?php

namespace Drupal\Core\Template;

<<<<<<< HEAD
=======
use Twig\Error\SyntaxError;
use Twig\Node\Expression\FilterExpression;
use Twig\Node\Expression\GetAttrExpression;
use Twig\Node\Expression\NameExpression;
use Twig\Node\Node;
use Twig\Node\PrintNode;
use Twig\Node\TextNode;
use Twig\Token;
use Twig\TokenParser\AbstractTokenParser;

>>>>>>> dev
/**
 * A class that defines the Twig 'trans' token parser for Drupal.
 *
 * The token parser converts a token stream created from template source
 * code into an Abstract Syntax Tree (AST).  The AST will later be compiled
 * into PHP code usable for runtime execution of the template.
 *
<<<<<<< HEAD
 * @see \Twig_TokenParser
 * @see https://twig-extensions.readthedocs.io/en/latest/i18n.html
 * @see https://github.com/fabpot/Twig-extensions
 */
class TwigTransTokenParser extends \Twig_TokenParser {
=======
 * @see https://twig-extensions.readthedocs.io/en/latest/i18n.html
 * @see https://github.com/fabpot/Twig-extensions
 */
class TwigTransTokenParser extends AbstractTokenParser {
>>>>>>> dev

  /**
   * {@inheritdoc}
   */
<<<<<<< HEAD
  public function parse(\Twig_Token $token) {
=======
  public function parse(Token $token) {
>>>>>>> dev
    $lineno = $token->getLine();
    $stream = $this->parser->getStream();
    $body = NULL;
    $options = NULL;
    $count = NULL;
    $plural = NULL;

<<<<<<< HEAD
    if (!$stream->test(\Twig_Token::BLOCK_END_TYPE) && $stream->test(\Twig_Token::STRING_TYPE)) {
      $body = $this->parser->getExpressionParser()->parseExpression();
    }
    if (!$stream->test(\Twig_Token::BLOCK_END_TYPE) && $stream->test(\Twig_Token::NAME_TYPE, 'with')) {
=======
    if (!$stream->test(Token::BLOCK_END_TYPE) && $stream->test(Token::STRING_TYPE)) {
      $body = $this->parser->getExpressionParser()->parseExpression();
    }
    if (!$stream->test(Token::BLOCK_END_TYPE) && $stream->test(Token::NAME_TYPE, 'with')) {
>>>>>>> dev
      $stream->next();
      $options = $this->parser->getExpressionParser()->parseExpression();
    }
    if (!$body) {
<<<<<<< HEAD
      $stream->expect(\Twig_Token::BLOCK_END_TYPE);
      $body = $this->parser->subparse([$this, 'decideForFork']);
      if ('plural' === $stream->next()->getValue()) {
        $count = $this->parser->getExpressionParser()->parseExpression();
        $stream->expect(\Twig_Token::BLOCK_END_TYPE);
=======
      $stream->expect(Token::BLOCK_END_TYPE);
      $body = $this->parser->subparse([$this, 'decideForFork']);
      if ('plural' === $stream->next()->getValue()) {
        $count = $this->parser->getExpressionParser()->parseExpression();
        $stream->expect(Token::BLOCK_END_TYPE);
>>>>>>> dev
        $plural = $this->parser->subparse([$this, 'decideForEnd'], TRUE);
      }
    }

<<<<<<< HEAD
    $stream->expect(\Twig_Token::BLOCK_END_TYPE);
=======
    $stream->expect(Token::BLOCK_END_TYPE);
>>>>>>> dev

    $this->checkTransString($body, $lineno);

    $node = new TwigNodeTrans($body, $plural, $count, $options, $lineno, $this->getTag());

    return $node;
  }

  /**
   * Detect a 'plural' switch or the end of a 'trans' tag.
   */
  public function decideForFork($token) {
    return $token->test(['plural', 'endtrans']);
  }

  /**
   * Detect the end of a 'trans' tag.
   */
  public function decideForEnd($token) {
    return $token->test('endtrans');
  }

  /**
   * {@inheritdoc}
   */
  public function getTag() {
    return 'trans';
  }

  /**
   * Ensure that any nodes that are parsed are only of allowed types.
   *
<<<<<<< HEAD
   * @param \Twig_Node $body
=======
   * @param \Twig\Node\Node $body
>>>>>>> dev
   *   The expression to check.
   * @param int $lineno
   *   The source line.
   *
<<<<<<< HEAD
   * @throws \Twig_Error_Syntax
   */
  protected function checkTransString(\Twig_Node $body, $lineno) {
    foreach ($body as $node) {
      if (
        $node instanceof \Twig_Node_Text
        ||
        ($node instanceof \Twig_Node_Print && $node->getNode('expr') instanceof \Twig_Node_Expression_Name)
        ||
        ($node instanceof \Twig_Node_Print && $node->getNode('expr') instanceof \Twig_Node_Expression_GetAttr)
        ||
        ($node instanceof \Twig_Node_Print && $node->getNode('expr') instanceof \Twig_Node_Expression_Filter)
      ) {
        continue;
      }
      throw new \Twig_Error_Syntax(sprintf('The text to be translated with "trans" can only contain references to simple variables'), $lineno);
=======
   * @throws \Twig\Error\SyntaxError
   */
  protected function checkTransString(Node $body, $lineno) {
    foreach ($body as $node) {
      if (
        $node instanceof TextNode
        ||
        ($node instanceof PrintNode && $node->getNode('expr') instanceof NameExpression)
        ||
        ($node instanceof PrintNode && $node->getNode('expr') instanceof GetAttrExpression)
        ||
        ($node instanceof PrintNode && $node->getNode('expr') instanceof FilterExpression)
      ) {
        continue;
      }
      throw new SyntaxError(sprintf('The text to be translated with "trans" can only contain references to simple variables'), $lineno);
>>>>>>> dev
    }
  }

}
