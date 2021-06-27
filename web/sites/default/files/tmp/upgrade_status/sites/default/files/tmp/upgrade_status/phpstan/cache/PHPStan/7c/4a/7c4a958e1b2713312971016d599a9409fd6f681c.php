<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/src/Form/CaptchaPointForm.php-1624732871',
   'data' => 
  array (
    '991752d6bd4e76619865254aab22346b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Entity Form to edit CAPTCHA points.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Form',
         'uses' => 
        array (
          'captchaservice' => 'Drupal\\captcha\\Service\\CaptchaService',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\captcha\\Form\\CaptchaPointForm',
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
    'b81155fd75986d59c0a98779c1cba73c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The CAPTCHA helper service.
   *
   * @var \\Drupal\\captcha\\Service\\CaptchaService
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Form',
         'uses' => 
        array (
          'captchaservice' => 'Drupal\\captcha\\Service\\CaptchaService',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\captcha\\Form\\CaptchaPointForm',
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
    '9bf59d2a0e50fe34967f97515918d61d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The request stack.
   *
   * @var \\Symfony\\Component\\HttpFoundation\\RequestStack
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Form',
         'uses' => 
        array (
          'captchaservice' => 'Drupal\\captcha\\Service\\CaptchaService',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\captcha\\Form\\CaptchaPointForm',
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
    'e96e3a9006025012cfa770747e099b4a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * CaptchaPointForm constructor.
   *
   * @param \\Symfony\\Component\\HttpFoundation\\RequestStack $request_stack
   *   Constructor.
   * @param \\Drupal\\captcha\\Service\\CaptchaService $captcha_service
   *   The captcha service.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Form',
         'uses' => 
        array (
          'captchaservice' => 'Drupal\\captcha\\Service\\CaptchaService',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\captcha\\Form\\CaptchaPointForm',
         'functionName' => '__construct',
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
    'fc2fbc2d9f9e283f367307ad974319ba' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Create Captcha Points.
   *
   * @param \\Symfony\\Component\\DependencyInjection\\ContainerInterface $container
   *   Event to create Captcha points.
   *
   * @return static
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Form',
         'uses' => 
        array (
          'captchaservice' => 'Drupal\\captcha\\Service\\CaptchaService',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\captcha\\Form\\CaptchaPointForm',
         'functionName' => 'create',
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
    'fc34c48a8124745743d9325a6958de20' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Form',
         'uses' => 
        array (
          'captchaservice' => 'Drupal\\captcha\\Service\\CaptchaService',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\captcha\\Form\\CaptchaPointForm',
         'functionName' => 'form',
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
    '314cd8d4f604f6f2d8317547919f00b5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Form',
         'uses' => 
        array (
          'captchaservice' => 'Drupal\\captcha\\Service\\CaptchaService',
          'entityform' => 'Drupal\\Core\\Entity\\EntityForm',
          'formstateinterface' => 'Drupal\\Core\\Form\\FormStateInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'requeststack' => 'Symfony\\Component\\HttpFoundation\\RequestStack',
        ),
         'className' => 'Drupal\\captcha\\Form\\CaptchaPointForm',
         'functionName' => 'save',
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