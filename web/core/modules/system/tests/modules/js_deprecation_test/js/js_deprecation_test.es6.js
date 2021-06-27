/**
 * @file
 *  Testing tools for deprecating JavaScript functions and class properties.
 */
<<<<<<< HEAD
(function({ deprecationError, deprecatedProperty, behaviors }) {
=======
(function ({ deprecationError, deprecatedProperty, behaviors }) {
>>>>>>> dev
  const deprecatedFunction = () => {
    deprecationError({
      message: 'This function is deprecated for testing purposes.',
    });
  };
  const objectWithDeprecatedProperty = deprecatedProperty({
    target: { deprecatedProperty: 'Kitten' },
    deprecatedProperty: 'deprecatedProperty',
    message: 'This property is deprecated for testing purposes.',
  });

  behaviors.testDeprecations = {
    attach: () => {
      deprecatedFunction();
      const deprecatedProperty =
        objectWithDeprecatedProperty.deprecatedProperty;
    },
  };
})(Drupal);
