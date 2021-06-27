<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/tests/src/Functional/CaptchaWebTestBase.php-1624732871,/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/comment/src/Tests/CommentTestTrait.php-1624732867',
   'data' => 
  array (
    '92358c529fae0f79ed6fc839b20829b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Base class for CAPTCHA tests.
 *
 * Provides common setup stuff and various helper functions.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    '77a990e07b9ee6e1228fe61fa762dd86' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Provides common functionality for the Comment test classes.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    '1ff9cc911285b463ddf141d85d563934' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds the default comment field to an entity.
   *
   * Attaches a comment field named \'comment\' to the given entity type and
   * bundle. Largely replicates the default behavior in Drupal 7 and earlier.
   *
   * @param string $entity_type
   *   The entity type to attach the default comment field to.
   * @param string $bundle
   *   The bundle to attach the default comment field to.
   * @param string $field_name
   *   (optional) Field name to use for the comment field. Defaults to
   *     \'comment\'.
   * @param int $default_value
   *   (optional) Default value, one of CommentItemInterface::HIDDEN,
   *   CommentItemInterface::OPEN, CommentItemInterface::CLOSED. Defaults to
   *   CommentItemInterface::OPEN.
   * @param string $comment_type_id
   *   (optional) ID of comment type to use. Defaults to \'comment\'.
   * @param string $comment_view_mode
   *   (optional) The comment view mode to be used in comment field formatter.
   *   Defaults to \'full\'.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'addDefaultCommentField',
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
    '16005466b94c89f7f12137b52799e545' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\Entity\\EntityFieldManagerInterface $entity_field_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\comment\\Tests',
         'uses' => 
        array (
          'unicode' => 'Drupal\\Component\\Utility\\Unicode',
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'addDefaultCommentField',
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
    '2ef0ed5b3116cf260ac8a14fe0d45f16' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Wrong response error message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'f706a2f87cf98e44bab9e63d0389f3cc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Unknown CSID error message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'a3e9c68492d209f550176c41248f2d99' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Form ID of comment form on standard (page) node.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'd21d9436ccca0f40d0e84dd1f5234d21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Drupal path of the (general) CAPTCHA admin page.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'eb249e75cbeae61d65b76604d1f6f31e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to install for this Test class.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    '0184685d889c781967286ff1e951e32e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'f45cf5c52566f1b96d6cc64fc5477a98' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * User with various administrative permissions.
   *
   * @var \\Drupal\\user\\Entity\\User
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'b7bbddf5902ac66df7ee958f8e938644' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Normal visitor with limited permissions.
   *
   * @var \\Drupal\\user\\Entity\\User
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'ea9c919d6c48395c45b55b4cd10cbd46' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
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
    'f0d96613ecc48da9c2b39c1f795ead58' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert that the response is accepted.
   *
   * No "unknown CSID" message, no "CSID reuse attack detection" message,
   * No "wrong answer" message.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'assertCaptchaResponseAccepted',
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
    'f7256173fb45de4b01f05f52359b5ba9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Assert that there is a CAPTCHA on the form or not.
   *
   * @param bool $presence
   *   Whether there should be a CAPTCHA or not.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'assertCaptchaPresence',
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
    'ca0624a52a8e85bb49b673386ec20b85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to generate a form values array for comment forms.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'getCommentFormValues',
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
    'e13c8c47056184eb1dd0a569e331eb05' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to generate a form values array for node forms.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'getNodeFormValues',
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
    '508e55bb9d778f6c549c49976e298867' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the CAPTCHA session id from the current form in the browser.
   *
   * @param null|string $form_html_id
   *   HTML form id attribute.
   *
   * @return int
   *   Captcha SID integer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'getCaptchaSidFromForm',
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
    '2e56873b893c5640cd77595a46a2a47f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the CAPTCHA token from the current form in the browser.
   *
   * @param null|string $form_html_id
   *   HTML form id attribute.
   *
   * @return int
   *   Captcha token integer.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'getCaptchaTokenFromForm',
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
    'fee50ccc7fb932bd523c9c20b34f25e2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Get the solution of the math CAPTCHA from the current form in the browser.
   *
   * @param null|string $form_html_id
   *   HTML form id attribute.
   *
   * @return int
   *   Calculated Math solution.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'getMathCaptchaSolutionFromForm',
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
    '16e755647f0f867a4210f74938bd529a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Helper function to allow comment posting for anonymous users.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Tests\\captcha\\Functional',
         'uses' => 
        array (
          'commentiteminterface' => 'Drupal\\comment\\Plugin\\Field\\FieldType\\CommentItemInterface',
          'commenttesttrait' => 'Drupal\\comment\\Tests\\CommentTestTrait',
          'accountinterface' => 'Drupal\\Core\\Session\\AccountInterface',
          'fieldconfig' => 'Drupal\\field\\Entity\\FieldConfig',
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\Tests\\captcha\\Functional\\CaptchaWebTestBase',
         'functionName' => 'allowCommentPostingForAnonymousVisitors',
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