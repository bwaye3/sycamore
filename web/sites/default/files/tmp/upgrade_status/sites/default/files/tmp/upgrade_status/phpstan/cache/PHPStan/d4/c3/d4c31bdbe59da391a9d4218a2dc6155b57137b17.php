<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/tests/src/FunctionalJavascript/OrderAdminTest.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/AssertMailTrait.php-1624732867',
   'data' => 
  array (
    'b5d6d1a91a04df6f135b58c10ef97e6e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the order admin UI.
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8fe18f5a31adab58c46e94a19a265220' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides methods for testing emails sent during test runs.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '158a7181f5130f314d244d40e72f29c6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets an array containing all emails sent during this test case.
   *
   * @param array $filter
   *   An array containing key/value pairs used to filter the emails that are
   *   returned.
   *
   * @return array
   *   An array containing email messages captured during the current test.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'getMails',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '27db5928d35c2d5c52f26e81d073cdb1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the given value.
   *
   * The field in $name must have the content described in $value.
   *
   * @param string $name
   *   Name of field or message property to assert. Examples: subject, body,
   *   id, ...
   * @param string $value
   *   Value of the field to assert.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Email\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'assertMail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '9139d13bf754e3a933de7a24ee4ba7be' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the string in it.
   *
   * @param string $field_name
   *   Name of field or message property to assert: subject, body, id, ...
   * @param string $string
   *   String to search for.
   * @param int $email_depth
   *   Number of emails to search for string, starting with most recent.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'assertMailString',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '0f4c924a6ca8bafcea288cdf1a3def61' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Asserts that the most recently sent email message has the pattern in it.
   *
   * @param string $field_name
   *   Name of field or message property to assert: subject, body, id, ...
   * @param string $regex
   *   Pattern to search for.
   * @param string $message
   *   (optional) A message to display with the assertion. Do not translate
   *   messages: use \\Drupal\\Component\\Render\\FormattableMarkup to embed
   *   variables in the message text, not t(). If left blank, a default message
   *   will be displayed.
   * @param string $group
   *   (optional) The group this message is in, which is displayed in a column
   *   in test output. Use \'Debug\' to indicate this is debugging output. Do not
   *   translate this string. Defaults to \'Other\'; most tests do not override
   *   this default.
   *
   * @return bool
   *   TRUE on pass, FALSE on fail.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'assertMailPattern',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '8ac333af8324c3ae1e0be8181a5b9c1a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Outputs to verbose the most recent $count emails sent.
   *
   * @param int $count
   *   Optional number of emails to output.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Test',
         'uses' => 
        array (
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'verboseEmail',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '10059e1b6f5c41aca625365590041c46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default profile\'s address.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '5adcb74fc2bf753d630ec4d38f38413c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The default profile.
   *
   * @var \\Drupal\\profile\\Entity\\ProfileInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '56b92c7eedb08c77b10e62f28fe70054' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The second variation.
   *
   * @var \\Drupal\\commerce_product\\Entity\\ProductVariationInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => NULL,
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'd8b14d4c4ae4af2cf356b022a6e287b6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'setUp',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'a3be6f9adaa889ed30cabeee16513621' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests creating an order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testCreateOrder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '056ed2b21ffec6c1b8a48b704aa14a77' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests editing an order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testEditOrder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ef0972a763a2c2d683c7d6ea655ac4ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\profile\\Entity\\ProfileInterface $profile */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testEditOrder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'cf8712f69fc449b5eabf274cf90982e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests editing an order after the customer was deleted.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testEditOrderWithDeletedCustomer',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '86984c0415ecdda0d5f0a169570ce380' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests deleting an order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testDeleteOrder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'e0775a0f5f3a9993f21ae6216fce1486' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests unlocking an order.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testUnlockOrder',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ab7d65961c5188cf9aa779786b43aa39' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests resending the order receipt.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testResendReceipt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'ddaefd0a6861f5e02ae6aa7b1125df11' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testResendReceipt',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    '31a4c0ce42eaceca6d1562ed4403d38e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that an admin can view an order\'s details.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testAdminOrderView',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
    'c56d3d86ba43058a12475d790401a875' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\Entity\\OrderInterface $order */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript',
         'uses' => 
        array (
          'adjustment' => 'Drupal\\commerce_order\\Adjustment',
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'orderitem' => 'Drupal\\commerce_order\\Entity\\OrderItem',
          'price' => 'Drupal\\commerce_price\\Price',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\FunctionalJavascript\\OrderAdminTest',
         'functionName' => 'testAdminOrderView',
         'templateTypeMap' => 
        PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));