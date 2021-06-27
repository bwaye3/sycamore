<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/captcha/src/Entity/CaptchaPoint.php-1624732871',
   'data' => 
  array (
    '5b2be8d091ae49df716a18a2108140ed' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines the CaptchaPoint entity.
 *
 * The \'rendered\' tag for the List cache is necessary since captchas have to be
 * rerendered once they are modified. Invalidating the render cache ensures
 * we always display the correct captcha for every form.
 *
 * @ConfigEntityType(
 *   id = "captcha_point",
 *   label = @Translation("Captcha Point"),
 *   handlers = {
 *     "list_builder" = "Drupal\\captcha\\Entity\\Controller\\CaptchaPointListBuilder",
 *     "form" = {
 *       "add" = "Drupal\\captcha\\Form\\CaptchaPointForm",
 *       "edit" = "Drupal\\captcha\\Form\\CaptchaPointForm",
 *       "disable" = "Drupal\\captcha\\Form\\CaptchaPointDisableForm",
 *       "enable" = "Drupal\\captcha\\Form\\CaptchaPointEnableForm",
 *       "delete" = "Drupal\\captcha\\Form\\CaptchaPointDeleteForm"
 *     }
 *   },
 *   config_prefix = "captcha_point",
 *   admin_permission = "administer CAPTCHA settings",
 *   list_cache_tags = {
 *    "rendered"
 *   },
 *   entity_keys = {
 *     "id" = "formId",
 *     "label" = "label",
 *     "status" = "status",
 *   },
 *   config_export = {
 *     "formId",
 *     "captchaType",
 *     "label",
 *     "uuid",
 *   },
 *   links = {
 *     "edit-form" = "/admin/config/people/captcha/captcha-points/{captcha_point}",
 *     "disable" = "/admin/config/people/captcha/captcha-points/{captcha_point}/disable",
 *     "enable" = "/admin/config/people/captcha/captcha-points/{captcha_point}/enable",
 *     "delete-form" = "/admin/config/people/captcha/captcha-points/{captcha_point}/delete",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
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
    '84eab3766ed44a98d6ad360112725204' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The captcha type.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
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
    '2a8824b9242e8ca6586bad6c7479a744' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The captcha label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
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
    '217931c54cf8ad9234787f517b13698f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The formid associated with the captcha.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
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
    '5de54f4880867fb37d28855a1c2e02ec' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
         'functionName' => 'id',
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
    '80e5beb8ecc53454996f65370e5493de' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
         'functionName' => 'getFormId',
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
    'b61488a964d7b0b35825558eadfbcc21' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
         'functionName' => 'setFormId',
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
    'bb588009fa16f53403cb45acdef2783e' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
         'functionName' => 'getLabel',
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
    '899d30679fcf170c3bb26a66ae01d1a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
         'functionName' => 'setLabel',
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
    'b2a356535ebe72eeace56cc7b5b1d81c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
         'functionName' => 'getCaptchaType',
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
    '2e971b95d5e363887a8191f6546223ad' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\captcha\\Entity',
         'uses' => 
        array (
          'captchapointinterface' => 'Drupal\\captcha\\CaptchaPointInterface',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
        ),
         'className' => 'Drupal\\captcha\\Entity\\CaptchaPoint',
         'functionName' => 'setCaptchaType',
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