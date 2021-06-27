/**
 * @file
 * A Backbone view for the collapsible menus.
 */

<<<<<<< HEAD
(function($, Backbone, Drupal) {
=======
(function ($, Backbone, Drupal) {
>>>>>>> dev
  Drupal.toolbar.MenuVisualView = Backbone.View.extend(
    /** @lends Drupal.toolbar.MenuVisualView# */ {
      /**
       * Backbone View for collapsible menus.
       *
       * @constructs
       *
       * @augments Backbone.View
       */
      initialize() {
        this.listenTo(this.model, 'change:subtrees', this.render);
      },

      /**
       * {@inheritdoc}
       */
      render() {
        const subtrees = this.model.get('subtrees');
        // Add subtrees.
<<<<<<< HEAD
        Object.keys(subtrees || {}).forEach(id => {
=======
        Object.keys(subtrees || {}).forEach((id) => {
>>>>>>> dev
          this.$el
            .find(`#toolbar-link-${id}`)
            .once('toolbar-subtrees')
            .after(subtrees[id]);
        });
        // Render the main menu as a nested, collapsible accordion.
        if ('drupalToolbarMenu' in $.fn) {
          this.$el.children('.toolbar-menu').drupalToolbarMenu();
        }
      },
    },
  );
})(jQuery, Backbone, Drupal);
