/**
 * @file
 * A Backbone View that renders the visual view of a contextual region element.
 */

<<<<<<< HEAD
(function(Drupal, Backbone, Modernizr) {
=======
(function (Drupal, Backbone, Modernizr) {
>>>>>>> dev
  Drupal.contextual.RegionView = Backbone.View.extend(
    /** @lends Drupal.contextual.RegionView# */ {
      /**
       * Events for the Backbone view.
       *
       * @return {object}
       *   A mapping of events to be used in the view.
       */
      events() {
        let mapping = {
          mouseenter() {
            this.model.set('regionIsHovered', true);
          },
          mouseleave() {
<<<<<<< HEAD
            this.model
              .close()
              .blur()
              .set('regionIsHovered', false);
=======
            this.model.close().blur().set('regionIsHovered', false);
>>>>>>> dev
          },
        };
        // We don't want mouse hover events on touch.
        if (Modernizr.touchevents) {
          mapping = {};
        }
        return mapping;
      },

      /**
       * Renders the visual view of a contextual region element.
       *
       * @constructs
       *
       * @augments Backbone.View
       */
      initialize() {
        this.listenTo(this.model, 'change:hasFocus', this.render);
      },

      /**
       * {@inheritdoc}
       *
       * @return {Drupal.contextual.RegionView}
       *   The current contextual region view.
       */
      render() {
        this.$el.toggleClass('focus', this.model.get('hasFocus'));

        return this;
      },
    },
  );
})(Drupal, Backbone, Modernizr);
