<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Field/FieldConfigInterface.php-1624732867',
   'data' => 
  array (
    '4d946652942c0f952c88f5d8d2375df2' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Defines an interface for configurable field definitions.
 *
 * This interface allows both configurable fields and overridden base fields to
 * share a common interface. The interface also extends ConfigEntityInterface
 * to ensure that implementations have the expected save() method.
 *
 * @see \\Drupal\\Core\\Field\\Entity\\BaseFieldOverride
 * @see \\Drupal\\field\\Entity\\FieldConfig
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
    '35ba405b59f06790c4e3057ddc667b5a' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the field definition label.
   *
   * @param string $label
   *   The label to set.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
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
    '23e54b2813e5c3d2903f57318176f9e4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a human readable description.
   *
   * Descriptions are usually used on user interfaces where the data is edited
   * or displayed.
   *
   * @param string $description
   *   The description for this field.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setDescription',
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
    '8e82a455f222ea9b4742ae4e8b90384b' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether the field is translatable.
   *
   * @param bool $translatable
   *   Whether the field is translatable.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setTranslatable',
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
    'bd9cdb028fa6fcd8d5d2454a4799fac8' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets field settings.
   *
   * Note that the method does not unset existing settings not specified in the
   * incoming $settings array.
   *
   * For example:
   * @code
   *   // Given these are the default settings.
   *   $field_definition->getSettings() === [
   *     \'fruit\' => \'apple\',
   *     \'season\' => \'summer\',
   *   ];
   *   // Change only the \'fruit\' setting.
   *   $field_definition->setSettings([\'fruit\' => \'banana\']);
   *   // The \'season\' setting persists unchanged.
   *   $field_definition->getSettings() === [
   *     \'fruit\' => \'banana\',
   *     \'season\' => \'summer\',
   *   ];
   * @endcode
   *
   * For clarity, it is preferred to use setSetting() if not all available
   * settings are supplied.
   *
   * @param array $settings
   *   The array of field settings.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setSettings',
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
    'aaf2a2cbde21028bbffae0fb93528a7c' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the value for a field setting by name.
   *
   * @param string $setting_name
   *   The name of the setting.
   * @param mixed $value
   *   The value of the setting.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setSetting',
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
    '87f5a07ae84b69556d5f63887c8da93f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets whether the field can be empty.
   *
   * If a field is required, an entity needs to have at least a valid,
   * non-empty item in that field\'s FieldItemList in order to pass validation.
   *
   * An item is considered empty if its isEmpty() method returns TRUE.
   * Typically, that is if at least one of its required properties is empty.
   *
   * @param bool $required
   *   TRUE if the field is required. FALSE otherwise.
   *
   * @return $this
   *   The current object, for a fluent interface.
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setRequired',
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
    '49b314a92bb0632eac8d42a61f20837f' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a default value.
   *
   * Note that if a default value callback is set, it will take precedence over
   * any value set here.
   *
   * @param mixed $value
   *   The default value for the field. This can be either:
   *   - a literal, in which case it will be assigned to the first property of
   *     the first item.
   *   - a numerically indexed array of items, each item being a property/value
   *     array.
   *   - a non-numerically indexed array, in which case the array is assumed to
   *     be a property/value array and used as the first item
   *   - NULL or array() for no default value.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setDefaultValue',
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
    'be8597571100c2ff9c1a57d7e0cf461d' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets a custom default value callback.
   *
   * If set, the callback overrides any set default value.
   *
   * @param string|null $callback
   *   The callback to invoke for getting the default value (pass NULL to unset
   *   a previously set callback). The callback will be invoked with the
   *   following arguments:
   *   - \\Drupal\\Core\\Entity\\FieldableEntityInterface $entity
   *     The entity being created.
   *   - \\Drupal\\Core\\Field\\FieldDefinitionInterface $definition
   *     The field definition.
   *   It should return the default value in the format accepted by the
   *   setDefaultValue() method.
   *
   * @return $this
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setDefaultValueCallback',
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
    '11291178b456223e8f11ea9ff48938a1' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets constraints for a given field item property.
   *
   * Note: this overwrites any existing property constraints. If you need to
   * add to the existing constraints, use
   * \\Drupal\\Core\\Field\\FieldConfigInterface::addPropertyConstraints()
   *
   * Note that constraints added via this method are not stored in configuration
   * and as such need to be added at runtime using
   * hook_entity_bundle_field_info_alter().
   *
   * @param string $name
   *   The name of the property to set constraints for.
   * @param array $constraints
   *   The constraints to set.
   *
   * @return static
   *   The object itself for chaining.
   *
   * @see hook_entity_bundle_field_info_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setPropertyConstraints',
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
    'e77828326b9b6ff5f415043c31df33cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds constraints for a given field item property.
   *
   * Adds a constraint to a property of a field item. e.g.
   * @code
   * // Limit the field item\'s value property to the range 0 through 10.
   * // e.g. $node->field_how_many->value.
   * $field->addPropertyConstraints(\'value\', [
   *   \'Range\' => [
   *     \'min\' => 0,
   *     \'max\' => 10,
   *   ]
   * ]);
   * @endcode
   *
   * If you want to add a validation constraint that applies to the
   * \\Drupal\\Core\\Field\\FieldItemList, use FieldConfigInterface::addConstraint()
   * instead.
   *
   * Note: passing a new set of options for an existing property constraint will
   * overwrite with the new options.
   *
   * Note that constraints added via this method are not stored in configuration
   * and as such need to be added at runtime using
   * hook_entity_bundle_field_info_alter().
   *
   * @param string $name
   *   The name of the property to set constraints for.
   * @param array $constraints
   *   The constraints to set.
   *
   * @return static
   *   The object itself for chaining.
   *
   * @see \\Drupal\\Core\\Field\\FieldConfigInterface::addConstraint()
   * @see hook_entity_bundle_field_info_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'addPropertyConstraints',
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
    '711cb64db9948940e78ae6180adbcf19' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Adds a validation constraint to the FieldItemList.
   *
   * Note: If you wish to apply a constraint to just a property of a FieldItem
   * use \\Drupal\\Core\\Field\\FieldConfigInterface::addPropertyConstraints()
   * instead.
   * @code
   *   // Add a constraint to the \'field_username\' FieldItemList.
   *   // e.g. $node->field_username
   *   $fields[\'field_username\']->addConstraint(\'UniqueField\');
   * @endcode
   *
   * If you wish to apply a constraint to a \\Drupal\\Core\\Field\\FieldItem instead
   * of a property or FieldItemList, you can use the
   * \\Drupal\\Core\\Field\\FieldConfigBase::getItemDefinition() method.
   * @code
   *   // Add a constraint to the \'field_entity_reference\' FieldItem (entity
   *   // reference item).
   *   $fields[\'field_entity_reference\']->getItemDefinition()->addConstraint(\'MyCustomFieldItemValidationPlugin\', []);
   * @endcode
   *
   * See \\Drupal\\Core\\TypedData\\DataDefinitionInterface::getConstraints() for
   * details.
   *
   * Note that constraints added via this method are not stored in configuration
   * and as such need to be added at runtime using
   * hook_entity_bundle_field_info_alter().
   *
   * @param string $constraint_name
   *   The name of the constraint to add, i.e. its plugin id.
   * @param array|null $options
   *   The constraint options as required by the constraint plugin, or NULL.
   *
   * @return static
   *   The object itself for chaining.
   *
   * @see \\Drupal\\Core\\Field\\FieldItemList
   * @see \\Drupal\\Core\\Field\\FieldConfigInterface::addPropertyConstraints()
   * @see hook_entity_bundle_field_info_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'addConstraint',
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
    '30b08ebdf21f64eb2f4ea5091911c826' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Sets the array of validation constraints for the FieldItemList.
   *
   * NOTE: This will overwrite any previously set constraints. In most cases
   * FieldConfigInterface::addConstraint() should be used instead.
   *
   * Note that constraints added via this method are not stored in configuration
   * and as such need to be added at runtime using
   * hook_entity_bundle_field_info_alter().
   *
   * @param array $constraints
   *   The array of constraints. See
   *   \\Drupal\\Core\\TypedData\\TypedDataManager::getConstraints() for details.
   *
   * @return $this
   *
   * @see \\Drupal\\Core\\TypedData\\DataDefinition::addConstraint()
   * @see \\Drupal\\Core\\TypedData\\DataDefinition::getConstraints()
   * @see \\Drupal\\Core\\Field\\FieldItemList
   * @see hook_entity_bundle_field_info_alter()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Field',
         'uses' => 
        array (
          'configentityinterface' => 'Drupal\\Core\\Config\\Entity\\ConfigEntityInterface',
        ),
         'className' => 'Drupal\\Core\\Field\\FieldConfigInterface',
         'functionName' => 'setConstraints',
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