<?php

namespace Drupal\Component\Gettext;

/**
 * Gettext PO header handler.
 *
 * Possible Gettext PO header elements are explained in
 * http://www.gnu.org/software/gettext/manual/gettext.html#Header-Entry,
 * but we only support a subset of these directly.
 *
 * Example header:
 *
 * "Project-Id-Version: Drupal core (7.11)\n"
 * "POT-Creation-Date: 2012-02-12 22:59+0000\n"
 * "PO-Revision-Date: YYYY-mm-DD HH:MM+ZZZZ\n"
 * "Language-Team: Catalan\n"
 * "MIME-Version: 1.0\n"
 * "Content-Type: text/plain; charset=utf-8\n"
 * "Content-Transfer-Encoding: 8bit\n"
 * "Plural-Forms: nplurals=2; plural=(n>1);\n"
 */
class PoHeader {

  /**
   * Language code.
   *
   * @var string
   */
  protected $langcode;

  /**
   * Formula for the plural form.
   *
   * @var string
   */
  protected $pluralForms;

  /**
   * Author(s) of the file.
   *
   * @var string
   */
  protected $authors;

  /**
   * Date the po file got created.
   *
   * @var string
   */
  protected $poDate;

  /**
   * Human readable language name.
   *
   * @var string
   */
  protected $languageName;

  /**
   * Name of the project the translation belongs to.
   *
   * @var string
   */
  protected $projectName;

  /**
   * Constructor, creates a PoHeader with default values.
   *
   * @param string $langcode
   *   Language code.
   */
  public function __construct($langcode = NULL) {
    $this->langcode = $langcode;
    // Ignore errors when run during site installation before
    // date_default_timezone_set() is called.
    $this->poDate = @date("Y-m-d H:iO");
    $this->pluralForms = 'nplurals=2; plural=(n > 1);';
  }

  /**
   * Gets the plural form.
   *
   * @return string
   *   Plural form component from the header, for example:
   *   'nplurals=2; plural=(n > 1);'.
   */
  public function getPluralForms() {
    return $this->pluralForms;
  }

  /**
   * Set the human readable language name.
   *
   * @param string $languageName
   *   Human readable language name.
   */
  public function setLanguageName($languageName) {
    $this->languageName = $languageName;
  }

  /**
   * Gets the human readable language name.
   *
   * @return string
   *   The human readable language name.
   */
  public function getLanguageName() {
    return $this->languageName;
  }

  /**
   * Set the project name.
   *
   * @param string $projectName
   *   Human readable project name.
   */
  public function setProjectName($projectName) {
    $this->projectName = $projectName;
  }

  /**
   * Gets the project name.
   *
   * @return string
   *   The human readable project name.
   */
  public function getProjectName() {
    return $this->projectName;
  }

  /**
   * Populate internal values from a string.
   *
   * @param string $header
   *   Full header string with key-value pairs.
   */
  public function setFromString($header) {
    // Get an array of all header values for processing.
    $values = $this->parseHeader($header);

    // There is only one value relevant for our header implementation when
    // reading, and that is the plural formula.
    if (!empty($values['Plural-Forms'])) {
      $this->pluralForms = $values['Plural-Forms'];
    }
  }

  /**
   * Generate a Gettext PO formatted header string based on data set earlier.
   */
  public function __toString() {
    $output = '';

    $isTemplate = empty($this->languageName);

    $output .= '# ' . ($isTemplate ? 'LANGUAGE' : $this->languageName) . ' translation of ' . ($isTemplate ? 'PROJECT' : $this->projectName) . "\n";
    if (!empty($this->authors)) {
      $output .= '# Generated by ' . implode("\n# ", $this->authors) . "\n";
    }
    $output .= "#\n";

    // Add the actual header information.
    $output .= "msgid \"\"\n";
    $output .= "msgstr \"\"\n";
    $output .= "\"Project-Id-Version: PROJECT VERSION\\n\"\n";
    $output .= "\"POT-Creation-Date: " . $this->poDate . "\\n\"\n";
    $output .= "\"PO-Revision-Date: " . $this->poDate . "\\n\"\n";
    $output .= "\"Last-Translator: NAME <EMAIL@ADDRESS>\\n\"\n";
    $output .= "\"Language-Team: LANGUAGE <EMAIL@ADDRESS>\\n\"\n";
    $output .= "\"MIME-Version: 1.0\\n\"\n";
    $output .= "\"Content-Type: text/plain; charset=utf-8\\n\"\n";
    $output .= "\"Content-Transfer-Encoding: 8bit\\n\"\n";
    $output .= "\"Plural-Forms: " . $this->pluralForms . "\\n\"\n";
    $output .= "\n";

    return $output;
  }

  /**
   * Parses a Plural-Forms entry from a Gettext Portable Object file header.
   *
   * @param string $pluralforms
   *   The Plural-Forms entry value.
   *
   * @return
   *   An indexed array of parsed plural formula data. Containing:
   *   - 'nplurals': The number of plural forms defined by the plural formula.
   *   - 'plurals': Array of plural positions keyed by plural value.
   *
   * @throws \Exception
   */
  public function parsePluralForms($pluralforms) {
    $plurals = [];
    // First, delete all whitespace.
    $pluralforms = strtr($pluralforms, [" " => "", "\t" => ""]);

    // Select the parts that define nplurals and plural.
    $nplurals = strstr($pluralforms, "nplurals=");
    if (strpos($nplurals, ";")) {
      // We want the string from the 10th char, because "nplurals=" length is 9.
      $nplurals = substr($nplurals, 9, strpos($nplurals, ";") - 9);
    }
    else {
      return FALSE;
    }
    $plural = strstr($pluralforms, "plural=");
    if (strpos($plural, ";")) {
      // We want the string from the 8th char, because "plural=" length is 7.
      $plural = substr($plural, 7, strpos($plural, ";") - 7);
    }
    else {
      return FALSE;
    }

    // If the number of plurals is zero, we return a default result.
    if ($nplurals == 0) {
      return [$nplurals, ['default' => 0]];
    }

    // Calculate possible plural positions of different plural values. All known
    // plural formula's are repetitive above 100.
    // For data compression we store the last position the array value
    // changes and store it as default.
    $element_stack = $this->parseArithmetic($plural);
    if ($element_stack !== FALSE) {
      for ($i = 0; $i <= 199; $i++) {
        $plurals[$i] = $this->evaluatePlural($element_stack, $i);
      }
      $default = $plurals[$i - 1];
      $plurals = array_filter($plurals, function ($value) use ($default) {
        return ($value != $default);
      });
      $plurals['default'] = $default;

      return [$nplurals, $plurals];
    }
    else {
      throw new \Exception('The plural formula could not be parsed.');
    }
  }

  /**
   * Parses a Gettext Portable Object file header.
   *
   * @param string $header
   *   A string containing the complete header.
   *
   * @return array
   *   An associative array of key-value pairs.
   */
  private function parseHeader($header) {
    $header_parsed = [];
    $lines = array_map('trim', explode("\n", $header));
    foreach ($lines as $line) {
      if ($line) {
        list($tag, $contents) = explode(":", $line, 2);
        $header_parsed[trim($tag)] = trim($contents);
      }
    }
    return $header_parsed;
  }

  /**
   * Parses and sanitizes an arithmetic formula into a plural element stack.
   *
   * While parsing, we ensure, that the operators have the right
   * precedence and associativity.
   *
   * @param string $string
   *   A string containing the arithmetic formula.
   *
   * @return
   *   A stack of values and operations to be evaluated.
   */
  private function parseArithmetic($string) {
    // Operator precedence table.
    $precedence = ["(" => -1, ")" => -1, "?" => 1, ":" => 1, "||" => 3, "&&" => 4, "==" => 5, "!=" => 5, "<" => 6, ">" => 6, "<=" => 6, ">=" => 6, "+" => 7, "-" => 7, "*" => 8, "/" => 8, "%" => 8];
    // Right associativity.
    $right_associativity = ["?" => 1, ":" => 1];

    $tokens = $this->tokenizeFormula($string);

    // Parse by converting into infix notation then back into postfix
    // Operator stack - holds math operators and symbols.
    $operator_stack = [];
    // Element Stack - holds data to be operated on.
    $element_stack = [];

    foreach ($tokens as $token) {
      $current_token = $token;

      // Numbers and the $n variable are simply pushed into $element_stack.
      if (is_numeric($token)) {
        $element_stack[] = $current_token;
      }
      elseif ($current_token == "n") {
        $element_stack[] = '$n';
      }
      elseif ($current_token == "(") {
        $operator_stack[] = $current_token;
      }
      elseif ($current_token == ")") {
        $topop = array_pop($operator_stack);
        while (isset($topop) && ($topop != "(")) {
          $element_stack[] = $topop;
          $topop = array_pop($operator_stack);
        }
      }
      elseif (!empty($precedence[$current_token])) {
        // If it's an operator, then pop from $operator_stack into
        // $element_stack until the precedence in $operator_stack is less
        // than current, then push into $operator_stack.
        $topop = array_pop($operator_stack);
        while (isset($topop) && ($precedence[$topop] >= $precedence[$current_token]) && !(($precedence[$topop] == $precedence[$current_token]) && !empty($right_associativity[$topop]) && !empty($right_associativity[$current_token]))) {
          $element_stack[] = $topop;
          $topop = array_pop($operator_stack);
        }
        if ($topop) {
          // Return element to top.
          $operator_stack[] = $topop;
        }
        // Parentheses are not needed.
        $operator_stack[] = $current_token;
      }
      else {
        return FALSE;
      }
    }

    // Flush operator stack.
    $topop = array_pop($operator_stack);
    while ($topop != NULL) {
      $element_stack[] = $topop;
      $topop = array_pop($operator_stack);
    }
    $return = $element_stack;

    // Now validate stack.
    $previous_size = count($element_stack) + 1;
    while (count($element_stack) < $previous_size) {
      $previous_size = count($element_stack);
      for ($i = 2; $i < count($element_stack); $i++) {
        $op = $element_stack[$i];
        if (!empty($precedence[$op])) {
          if ($op == ":") {
            $f = $element_stack[$i - 2] . "):" . $element_stack[$i - 1] . ")";
          }
          elseif ($op == "?") {
            $f = "(" . $element_stack[$i - 2] . "?(" . $element_stack[$i - 1];
          }
          else {
            $f = "(" . $element_stack[$i - 2] . $op . $element_stack[$i - 1] . ")";
          }
          array_splice($element_stack, $i - 2, 3, $f);
          break;
        }
      }
    }

    // If only one element is left, the number of operators is appropriate.
    return count($element_stack) == 1 ? $return : FALSE;
  }

  /**
   * Tokenize the formula.
   *
   * @param string $formula
   *   A string containing the arithmetic formula.
   *
   * @return array
   *   List of arithmetic tokens identified in the formula.
   */
  private function tokenizeFormula($formula) {
    $formula = str_replace(" ", "", $formula);
    $tokens = [];
    for ($i = 0; $i < strlen($formula); $i++) {
      if (is_numeric($formula[$i])) {
        $num = $formula[$i];
        $j = $i + 1;
        while ($j < strlen($formula) && is_numeric($formula[$j])) {
          $num .= $formula[$j];
          $j++;
        }
        $i = $j - 1;
        $tokens[] = $num;
      }
      elseif ($pos = strpos(" =<>!&|", $formula[$i])) {
        $next = $formula[$i + 1];
        switch ($pos) {
          case 1:
          case 2:
          case 3:
          case 4:
            if ($next == '=') {
              $tokens[] = $formula[$i] . '=';
              $i++;
            }
            else {
              $tokens[] = $formula[$i];
            }
            break;

          case 5:
            if ($next == '&') {
              $tokens[] = '&&';
              $i++;
            }
            else {
              $tokens[] = $formula[$i];
            }
            break;

          case 6:
            if ($next == '|') {
              $tokens[] = '||';
              $i++;
            }
            else {
              $tokens[] = $formula[$i];
            }
            break;
        }
      }
      else {
        $tokens[] = $formula[$i];
      }
    }
    return $tokens;
  }

  /**
   * Evaluate the plural element stack using a plural value.
   *
   * Using an element stack, which represents a plural formula, we calculate
   * which plural string should be used for a given plural value.
   *
   * An example of plural formula parting and evaluation:
   *   Plural formula: 'n!=1'
   * This formula is parsed by parseArithmetic() to a stack (array) of elements:
   *   array(
   *     0 => '$n',
   *     1 => '1',
   *     2 => '!=',
   *   );
   * The evaluatePlural() method evaluates the $element_stack using the plural
   * value $n. Before the actual evaluation, the '$n' in the array is replaced
   * by the value of $n.
   *   For example: $n = 2 results in:
   *   array(
   *     0 => '2',
   *     1 => '1',
   *     2 => '!=',
   *   );
   * The stack is processed until only one element is (the result) is left. In
   * every iteration the top elements of the stack, up until the first operator,
   * are evaluated. After evaluation the arguments and the operator itself are
   * removed and replaced by the evaluation result. This is typically 2
   * arguments and 1 element for the operator.
   *   Because the operator is '!=' the example stack is evaluated as:
   *   $f = (int) 2 != 1;
   *   The resulting stack is:
   *   array(
   *     0 => 1,
   *   );
   * With only one element left in the stack (the final result) the loop is
   * terminated and the result is returned.
   *
   * @param array $element_stack
   *   Array of plural formula values and operators create by parseArithmetic().
   * @param int $n
   *   The @count number for which we are determining the right plural position.
   *
   * @return int
   *   Number of the plural string to be used for the given plural value.
   *
   * @see parseArithmetic()
<<<<<<< HEAD
=======
   *
>>>>>>> dev
   * @throws \Exception
   */
  protected function evaluatePlural($element_stack, $n) {
    $count = count($element_stack);
    $limit = $count;
    // Replace the '$n' value in the formula by the plural value.
    for ($i = 0; $i < $count; $i++) {
      if ($element_stack[$i] === '$n') {
        $element_stack[$i] = $n;
      }
    }

    // We process the stack until only one element is (the result) is left.
    // We limit the number of evaluation cycles to prevent an endless loop in
    // case the stack contains an error.
    while (isset($element_stack[1])) {
      for ($i = 2; $i < $count; $i++) {
        // There's no point in checking non-symbols. Also, switch(TRUE) would
        // match any case and so it would break.
        if (is_bool($element_stack[$i]) || is_numeric($element_stack[$i])) {
          continue;
        }
        $f = NULL;
        $length = 3;
        $delta = 2;
        switch ($element_stack[$i]) {
          case '==':
            $f = $element_stack[$i - 2] == $element_stack[$i - 1];
            break;

          case '!=':
            $f = $element_stack[$i - 2] != $element_stack[$i - 1];
            break;

          case '<=':
            $f = $element_stack[$i - 2] <= $element_stack[$i - 1];
            break;

          case '>=':
            $f = $element_stack[$i - 2] >= $element_stack[$i - 1];
            break;

          case '<':
            $f = $element_stack[$i - 2] < $element_stack[$i - 1];
            break;

          case '>':
            $f = $element_stack[$i - 2] > $element_stack[$i - 1];
            break;

          case '+':
            $f = $element_stack[$i - 2] + $element_stack[$i - 1];
            break;

          case '-':
            $f = $element_stack[$i - 2] - $element_stack[$i - 1];
            break;

          case '*':
            $f = $element_stack[$i - 2] * $element_stack[$i - 1];
            break;

          case '/':
            $f = $element_stack[$i - 2] / $element_stack[$i - 1];
            break;

          case '%':
            $f = $element_stack[$i - 2] % $element_stack[$i - 1];
            break;

          case '&&':
            $f = $element_stack[$i - 2] && $element_stack[$i - 1];
            break;

          case '||':
            $f = $element_stack[$i - 2] || $element_stack[$i - 1];
            break;

          case ':':
            $f = $element_stack[$i - 3] ? $element_stack[$i - 2] : $element_stack[$i - 1];
            // This operator has 3 preceding elements, instead of the default 2.
            $length = 5;
            $delta = 3;
            break;
        }

        // If the element is an operator we remove the processed elements and
        // store the result.
        if (isset($f)) {
          array_splice($element_stack, $i - $delta, $length, $f);
          break;
        }
      }
    }
    if (!$limit) {
      throw new \Exception('The plural formula could not be evaluated.');
    }
    return (int) $element_stack[0];
  }

}
