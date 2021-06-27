<?php declare(strict_types = 1);

return PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/Users/bradleywaye/Sites/local.sycamoretrust.com/web/core/lib/Drupal/Core/Entity/EntityFormBuilderInterface.php-1624732867',
   'data' => 
  array (
    '184695d9aa5bd23ad44004b50ae627cb' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Builds entity forms.
 *
 * This is like \\Drupal\\Core\\Form\\FormBuilderInterface but instead of looking
 * up the form class by class name, it looks up the form class based on the
 * entity type and operation.
 */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
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
    '8eed7836953adf507b52d6cacaa4e8a4' => 
    PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
   * Gets the built and processed entity form for the given entity.
   *
   * The form may also be retrieved from the cache if the form was built in a
   * previous page load. The form is then passed on for processing, validation,
   * and submission if there is proper input.
   *
   * @param \\Drupal\\Core\\Entity\\EntityInterface $entity
   *   The entity to be created or edited.
   * @param string $operation
   *   (optional) The operation identifying the form variation to be returned.
   *   Defaults to \'default\'. This is typically used in routing:
   *   @code
   *   _entity_form: node.book_outline
   *   @endcode
   *   where "book_outline" is the value of $operation. The class name for the
   *   form for each operation (edit, delete, etc.) can be found in the form
   *   section of the handlers entity annotation. For example:
   *   @code
   *   handlers = {
   *     "form" = {
   *       "delete" = "Drupal\\node\\Form\\NodeDeleteForm",
   *   @endcode
   *   Alternatively, the form class can be set from hook_entity_type_build().
   * @param array $form_state_additions
   *   (optional) An associative array used to build the current state of the
   *   form. Use this to pass additional information to the form, such as the
   *   langcode. Defaults to an empty array.
   *
   * @code
   *   $form_state_additions[\'langcode\'] = $langcode;
   *   $form = \\Drupal::service(\'entity.form_builder\')->getForm($entity, \'default\', $form_state_additions);
   * @endcode
   *
   * @return array
   *   The processed form for the given entity and operation.
   *
   * @see \\Drupal\\Core\\Form\\FormBuilderInterface::getForm()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::getFormClass()
   * @see \\Drupal\\Core\\Entity\\EntityTypeInterface::setFormClass()
   * @see system_entity_type_build()
   */',
       'nameScope' => 
      PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Drupal\\Core\\Entity',
         'uses' => 
        array (
        ),
         'className' => 'Drupal\\Core\\Entity\\EntityFormBuilderInterface',
         'functionName' => 'getForm',
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