<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/commerce/modules/order/tests/src/Kernel/OrderReceiptTest.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Test/AssertMailTrait.php-1624732867',
   'data' => 
  array (
    '2591daa667f117ce5c8f97daef3102bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Tests the sending of multilingual order receipt emails.
 *
 * @group commerce
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '60c1305aef8698ae2a89eaa48d97c562' => 
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
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    'a7d4978c617d9d60b9780c97013deb2b' => 
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
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '33e96c8c04056f09b831b8c2931c8618' => 
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
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '961bd64d83c3203b2ff93a4a6ad488ac' => 
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
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    'e9b2881d3a2738957cad4d3a39dca7f8' => 
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
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '5ba57f6714a7ebc5f548ad0d3dac7f58' => 
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
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    'a9007ca29c8d188d83910887d44755ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * A sample order.
   *
   * @var \\Drupal\\commerce_order\\Entity\\OrderInterface
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    'a54a33b8f65820a9e422ca04a6f0cd86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Translated strings used in the order receipt.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '9e732ecb29e3d23be62f425e2b0cbf5f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '72ecb7d157552582adb36565e6842f01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '8008f1fcad88023a354005c377e1c272' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_price\\CurrencyImporterInterface $currency_importer */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '3a9de1290d51e5eaab1f5342d538324d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\language\\ConfigurableLanguageManagerInterface $language_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    'b522cb9f72c59f7e1da6a483c59884a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_payment\\Entity\\PaymentGatewayInterface $payment_gateway */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '8ba6cf1fd1417ba341654acdf0620752' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\commerce_order\\OrderItemStorageInterface $order_item_storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
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
    '24ac0809ff2057c7af3952089e3fa377' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests disabling the order receipt.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
         'functionName' => 'testOrderReceiptDisabled',
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
    '410684cc4fa69e512b4e35776c101b6f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Tests that the email is sent and translated to the customer\'s language.
   *
   * The email is sent in the customer\'s langcode  if the user is not anonymous,
   * otherwise it is the site\'s default langcode. In #2603482 this could
   * be changed to use the order\'s langcode.
   *
   * @param string $langcode
   *   The langcode to test with.
   * @param string $expected_langcode
   *   The expected langcode.
   * @param string $expected_order_total
   *   The expected order total.
   *
   * @dataProvider providerOrderReceiptMultilingualData
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
         'functionName' => 'testOrderReceipt',
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
    '9021e48a6740f5c12ada613f77c75aef' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides data for the multilingual email receipt test.
   *
   * @return array
   *   The data.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\commerce_order\\Kernel',
         'uses' => 
        array (
          'order' => 'Drupal\\commerce_order\\Entity\\Order',
          'ordertype' => 'Drupal\\commerce_order\\Entity\\OrderType',
          'paymentgateway' => 'Drupal\\commerce_payment\\Entity\\PaymentGateway',
          'price' => 'Drupal\\commerce_price\\Price',
          'product' => 'Drupal\\commerce_product\\Entity\\Product',
          'productvariation' => 'Drupal\\commerce_product\\Entity\\ProductVariation',
          'formattablemarkup' => 'Drupal\\Component\\Render\\FormattableMarkup',
          'language' => 'Drupal\\Core\\Language\\Language',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'assertmailtrait' => 'Drupal\\Core\\Test\\AssertMailTrait',
          'configurablelanguage' => 'Drupal\\language\\Entity\\ConfigurableLanguage',
          'profile' => 'Drupal\\profile\\Entity\\Profile',
        ),
         'className' => 'Drupal\\Tests\\commerce_order\\Kernel\\OrderReceiptTest',
         'functionName' => 'providerOrderReceiptMultilingualData',
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