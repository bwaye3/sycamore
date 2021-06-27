<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/modules/contrib/block_visibility_groups/src/Tests/BlockVisibilityGroupsTestBase.php-1624732871',
   'data' => 
  array (
    '87badfdaf98261fef8fae5335aecef57' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 *
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Tests',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Tests\\BlockVisibilityGroupsTestBase',
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
    '198230c6974ca2768927d89a2fa3e7a6' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Modules to enable.
   *
   * Var array.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Tests',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Tests\\BlockVisibilityGroupsTestBase',
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
    'ccb53525c705cf0c5aa302f8e3bb3d1c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * {@inheritdoc}
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Tests',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Tests\\BlockVisibilityGroupsTestBase',
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
    '33d43278172c63b970820356d65f5230' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * @param $plugin_id
   * @param $group_id
   * @param array $settings
   *
   * @return \\Drupal\\block\\Entity\\Block
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Tests',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Tests\\BlockVisibilityGroupsTestBase',
         'functionName' => 'placeBlockInGroup',
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
    '85c0eee987263bc7eb077a824caed59d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Places a block in a block visibility group through the UI.
   *
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param string $group_id
   *   The group id.
   * @param string $title
   *   The title for the block.
   *
   * @return string
   *   The block ID.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Tests',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Tests\\BlockVisibilityGroupsTestBase',
         'functionName' => 'placeBlockInGroupUI',
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
    'f6cf973ecd15974b1f426ed8c54a12b2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Update a block which is already placed in a block visibility group.
   *
   * @param string $block_id
   *   The block ID.
   * @param string $group_id
   *   The group id.
   * @param array $settings
   *   The array of settings.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\block_visibility_groups\\Tests',
         'uses' => 
        array (
          'browsertestbase' => 'Drupal\\Tests\\BrowserTestBase',
        ),
         'className' => 'Drupal\\block_visibility_groups\\Tests\\BlockVisibilityGroupsTestBase',
         'functionName' => 'updateBlockInGroupUI',
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