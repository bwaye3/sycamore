<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/modules/image/src/Entity/ImageStyle.php-1624732868',
   'data' => 
  array (
    'af13f75eac30700a68864155d4b828bd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an image style configuration entity.
 *
 * @ConfigEntityType(
 *   id = "image_style",
 *   label = @Translation("Image style"),
 *   label_collection = @Translation("Image styles"),
 *   label_singular = @Translation("image style"),
 *   label_plural = @Translation("image styles"),
 *   label_count = @PluralTranslation(
 *     singular = "@count image style",
 *     plural = "@count image styles",
 *   ),
 *   handlers = {
 *     "form" = {
 *       "add" = "Drupal\\image\\Form\\ImageStyleAddForm",
 *       "edit" = "Drupal\\image\\Form\\ImageStyleEditForm",
 *       "delete" = "Drupal\\image\\Form\\ImageStyleDeleteForm",
 *       "flush" = "Drupal\\image\\Form\\ImageStyleFlushForm"
 *     },
 *     "list_builder" = "Drupal\\image\\ImageStyleListBuilder",
 *     "storage" = "Drupal\\image\\ImageStyleStorage",
 *   },
 *   admin_permission = "administer image styles",
 *   config_prefix = "style",
 *   entity_keys = {
 *     "id" = "name",
 *     "label" = "label"
 *   },
 *   links = {
 *     "flush-form" = "/admin/config/media/image-styles/manage/{image_style}/flush",
 *     "edit-form" = "/admin/config/media/image-styles/manage/{image_style}",
 *     "delete-form" = "/admin/config/media/image-styles/manage/{image_style}/delete",
 *     "collection" = "/admin/config/media/image-styles",
 *   },
 *   config_export = {
 *     "name",
 *     "label",
 *     "effects",
 *   }
 * )
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
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
    '88b58b579fe1e38479d7fa20fc1f0944' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The name of the image style.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
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
    '298e6047cb956c0a2235b7420d8ba7bc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The image style label.
   *
   * @var string
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
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
    'a3b9706e280699642daef9f874968b26' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * The array of image effects for this image style.
   *
   * @var array
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
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
    '91f09c3afc0befdd982523d7db709f04' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Holds the collection of image effects that are used by this image style.
   *
   * @var \\Drupal\\image\\ImageEffectPluginCollection
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
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
    '824f97cbf41924263ba6d947270c8b5c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
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
    '17baffd4267096d905a88ce9935328b1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'postSave',
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
    'c93da72e24d8a04f4585addf7a96445d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'postDelete',
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
    '565aa7609d99c6630a73157948a09386' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleInterface[] $entities */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'postDelete',
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
    'e97230e838cee1a8039d36c5c799ca01' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'postDelete',
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
    'b0f1c25bdbd9ffcd180c1579d2c33447' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Update field settings if the image style name is changed.
   *
   * @param \\Drupal\\image\\ImageStyleInterface $style
   *   The image style.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'replaceImageStyle',
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
    '71347e8060819e0f844c97038c87cbe2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'buildUri',
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
    '96a88cf146b7cb63872bcc6e0713e531' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'buildUrl',
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
    'a50870916b64fcbc5d0b0d6c52c74b55' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface $stream_wrapper_manager */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'buildUrl',
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
    'f875ba3780dac8ddec31cdac95fd9518' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'flush',
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
    '7321a12e284527e424ce76ceb7e4e336' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\Core\\File\\FileSystemInterface $file_system */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'flush',
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
    'd223adbd021b9ab6aa016b90e9197373' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'createDerivative',
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
    '9b3fa891a515279ba3bd822eb57e6565' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'transformDimensions',
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
    '7beb222962b421e15fece1e6f1a08cd5' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getDerivativeExtension',
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
    '1d9f538d44d9c5e2e26d5dd6d4aef9b9' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getPathToken',
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
    '585317e2c519b1403d4c879d5f6fa48b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'deleteImageEffect',
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
    '49086d4934f000b5a492e84aae6bca6a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'supportsUri',
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
    'a77facf6405b7cd8b17cf16ad7650797' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getEffect',
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
    '8eec4e8763f119ec2fc28c47a3bf7e7f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getEffects',
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
    'd53f9025975c100c438132fef10dce33' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getPluginCollections',
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
    '0e30e8c09479aab3be665ea13413bf9b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'addImageEffect',
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
    '3f3aed03be18584bed04b8882aca957a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getReplacementID',
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
    '41f45f9c7fa1f1186298d4bba14ce411' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var \\Drupal\\image\\ImageStyleStorageInterface $storage */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getReplacementID',
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
    '895932e6b9bdd52c3a98dbf22f989f18' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getName',
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
    'c63b391eb0eec2afa7f2c9b327c4bbc4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'setName',
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
    '53d88038c907866e526cc6954e011948' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image effect plugin manager.
   *
   * @return \\Drupal\\Component\\Plugin\\PluginManagerInterface
   *   The image effect plugin manager.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getImageEffectPluginManager',
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
    'd598eb20ac6c80709b4394bdb7c8416b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Returns the image factory.
   *
   * @return \\Drupal\\Core\\Image\\ImageFactory
   *   The image factory.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getImageFactory',
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
    '360e52521b0d6a56bbb235e0d243ede4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the Drupal private key.
   *
   * @return string
   *   The Drupal private key.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getPrivateKey',
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
    'c6e04c7bf905c6e8685a04dcbecd7527' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets a salt useful for hardening against SQL injection.
   *
   * @return string
   *   A salt based on information in settings.php, not in the database.
   *
   * @throws \\RuntimeException
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getHashSalt',
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
    '3a1ba5d6492629cd96195c84ae761e85' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds an extension to a path.
   *
   * If this image style changes the extension of the derivative, this method
   * adds the new extension to the given path. This way we avoid filename
   * clashes while still allowing us to find the source image.
   *
   * @param string $path
   *   The path to add the extension to.
   *
   * @return string
   *   The given path if this image style doesn\'t change its extension, or the
   *   path with the added extension if it does.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'addExtension',
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
    'fa08f3e94b872f66ffe3c8fe3e7ccf30' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a wrapper for file_uri_scheme() to allow unit testing.
   *
   * Returns the scheme of a URI (e.g. a stream).
   *
   * @param string $uri
   *   A stream, referenced as "scheme://target"  or "data:target".
   *
   * @return string
   *   A string containing the name of the scheme, or FALSE if none. For
   *   example, the URI "public://example.txt" would return "public".
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\StreamWrapper\\StreamWrapperManager::getTarget() instead.
   *
   * @see https://www.drupal.org/node/3035273
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'fileUriScheme',
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
    '4e21d38d66e256abeb0d13ee43cad7ac' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a wrapper for file_uri_target() to allow unit testing.
   *
   * Returns the part of a URI after the schema.
   *
   * @param string $uri
   *   A stream, referenced as "scheme://target" or "data:target".
   *
   * @return string|bool
   *   A string containing the target (path), or FALSE if none.
   *   For example, the URI "public://sample/test.txt" would return
   *   "sample/test.txt".
   *
   * @deprecated in drupal:8.8.0 and is removed from drupal:9.0.0. Use
   *   \\Drupal\\Core\\StreamWrapper\\StreamWrapperManager::getUriTarget() instead.
   *
   * @see https://www.drupal.org/node/3035273
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'fileUriTarget',
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
    'f2c425215a47e0bce55fdde47492f8fc' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Provides a wrapper to allow unit testing.
   *
   * Gets the default file stream implementation.
   *
   * @return string
   *   \'public\', \'private\' or any other file scheme defined as the default.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'fileDefaultScheme',
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
    '807a009825916ef081ba1a29735a9ffd' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the stream wrapper manager service.
   *
   * @return \\Drupal\\Core\\StreamWrapper\\StreamWrapperManagerInterface
   *   The stream wrapper manager service
   *
   * @todo Properly inject this service in Drupal 9.0.x.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\image\\Entity',
         'uses' => 
        array (
          'cache' => 'Drupal\\Core\\Cache\\Cache',
          'configentitybase' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityBase',
          'entityformdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityFormDisplay',
          'entitystorageinterface' => 'Drupal\\Core\\Entity\\EntityStorageInterface',
          'entitywithplugincollectioninterface' => 'Drupal\\Core\\Entity\\EntityWithPluginCollectionInterface',
          'fileexception' => 'Drupal\\Core\\File\\Exception\\FileException',
          'filesysteminterface' => 'Drupal\\Core\\File\\FileSystemInterface',
          'requesthelper' => 'Drupal\\Core\\Routing\\RequestHelper',
          'settings' => 'Drupal\\Core\\Site\\Settings',
          'streamwrappermanager' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperManager',
          'url' => 'Drupal\\Core\\Url',
          'imageeffectplugincollection' => 'Drupal\\image\\ImageEffectPluginCollection',
          'imageeffectinterface' => 'Drupal\\image\\ImageEffectInterface',
          'imagestyleinterface' => 'Drupal\\image\\ImageStyleInterface',
          'crypt' => 'Drupal\\Component\\Utility\\Crypt',
          'urlhelper' => 'Drupal\\Component\\Utility\\UrlHelper',
          'streamwrapperinterface' => 'Drupal\\Core\\StreamWrapper\\StreamWrapperInterface',
          'servicenotfoundexception' => 'Symfony\\Component\\DependencyInjection\\Exception\\ServiceNotFoundException',
          'entityviewdisplay' => 'Drupal\\Core\\Entity\\Entity\\EntityViewDisplay',
        ),
         'className' => 'Drupal\\image\\Entity\\ImageStyle',
         'functionName' => 'getStreamWrapperManager',
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