/**
 * @file
 * Polyfill for HTML5 details elements.
 */

<<<<<<< HEAD
(function($, Modernizr, Drupal) {
=======
(function ($, Modernizr, Drupal) {
>>>>>>> dev
  /**
   * The collapsible details object represents a single details element.
   *
   * @constructor Drupal.CollapsibleDetails
   *
   * @param {HTMLElement} node
   *   The details element.
   */
  function CollapsibleDetails(node) {
    this.$node = $(node);
    this.$node.data('details', this);
    // Expand details if there are errors inside, or if it contains an
    // element that is targeted by the URI fragment identifier.
    const anchor =
      window.location.hash && window.location.hash !== '#'
        ? `, ${window.location.hash}`
        : '';
    if (this.$node.find(`.error${anchor}`).length) {
      this.$node.attr('open', true);
    }
<<<<<<< HEAD
    // Initialize and setup the summary,
    this.setupSummary();
    // Initialize and setup the legend.
    this.setupLegend();
=======
    // Initialize and set up the summary polyfill.
    this.setupSummaryPolyfill();
>>>>>>> dev
  }

  $.extend(
    CollapsibleDetails,
    /** @lends Drupal.CollapsibleDetails */ {
      /**
       * Holds references to instantiated CollapsibleDetails objects.
       *
       * @type {Array.<Drupal.CollapsibleDetails>}
       */
      instances: [],
    },
  );

  $.extend(
    CollapsibleDetails.prototype,
    /** @lends Drupal.CollapsibleDetails# */ {
      /**
<<<<<<< HEAD
       * Initialize and setup summary events and markup.
       *
       * @fires event:summaryUpdated
       *
       * @listens event:summaryUpdated
       */
      setupSummary() {
        this.$summary = $('<span class="summary"></span>');
        this.$node
          .on('summaryUpdated', $.proxy(this.onSummaryUpdated, this))
          .trigger('summaryUpdated');
      },

      /**
       * Initialize and setup legend markup.
       */
      setupLegend() {
        // Turn the summary into a clickable link.
        const $legend = this.$node.find('> summary');

        $('<span class="details-summary-prefix visually-hidden"></span>')
          .append(this.$node.attr('open') ? Drupal.t('Hide') : Drupal.t('Show'))
          .prependTo($legend)
=======
       * Initialize and setup summary markup.
       */
      setupSummaryPolyfill() {
        // Turn the summary into a clickable link.
        const $summary = this.$node.find('> summary');

        // If this polyfill is in use, the browser does not recognize
        // <summary> as a focusable element. The tabindex is set to -1 so the
        // tabbable library does not incorrectly identify it as tabbable.
        $summary.attr('tabindex', '-1');

        $('<span class="details-summary-prefix visually-hidden"></span>')
          .append(this.$node.attr('open') ? Drupal.t('Hide') : Drupal.t('Show'))
          .prependTo($summary)
>>>>>>> dev
          .after(document.createTextNode(' '));

        // .wrapInner() does not retain bound events.
        $('<a class="details-title"></a>')
          .attr('href', `#${this.$node.attr('id')}`)
<<<<<<< HEAD
          .prepend($legend.contents())
          .appendTo($legend);

        $legend
          .append(this.$summary)
          .on('click', $.proxy(this.onLegendClick, this));
      },

      /**
       * Handle legend clicks.
=======
          .prepend($summary.contents())
          .appendTo($summary);

        $summary
          .append(this.$summary)
          .on('click', $.proxy(this.onSummaryClick, this));
      },

      /**
       * Handle summary clicks.
>>>>>>> dev
       *
       * @param {jQuery.Event} e
       *   The event triggered.
       */
<<<<<<< HEAD
      onLegendClick(e) {
=======
      onSummaryClick(e) {
>>>>>>> dev
        this.toggle();
        e.preventDefault();
      },

      /**
<<<<<<< HEAD
       * Update summary.
       */
      onSummaryUpdated() {
        const text = $.trim(this.$node.drupalGetSummary());
        this.$summary.html(text ? ` (${text})` : '');
      },

      /**
=======
>>>>>>> dev
       * Toggle the visibility of a details element using smooth animations.
       */
      toggle() {
        const isOpen = !!this.$node.attr('open');
        const $summaryPrefix = this.$node.find(
          '> summary span.details-summary-prefix',
        );
        if (isOpen) {
          $summaryPrefix.html(Drupal.t('Show'));
        } else {
          $summaryPrefix.html(Drupal.t('Hide'));
        }
        // Delay setting the attribute to emulate chrome behavior and make
        // details-aria.js work as expected with this polyfill.
        setTimeout(() => {
          this.$node.attr('open', !isOpen);
        }, 0);
      },
    },
  );

  /**
   * Polyfill HTML5 details element.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches behavior for the details element.
   */
  Drupal.behaviors.collapse = {
    attach(context) {
      if (Modernizr.details) {
        return;
      }
      const $collapsibleDetails = $(context)
        .find('details')
        .once('collapse')
        .addClass('collapse-processed');
      if ($collapsibleDetails.length) {
        for (let i = 0; i < $collapsibleDetails.length; i++) {
          CollapsibleDetails.instances.push(
            new CollapsibleDetails($collapsibleDetails[i]),
          );
        }
      }
    },
  };

  /**
   * Open parent details elements of a targeted page fragment.
   *
   * Opens all (nested) details element on a hash change or fragment link click
   * when the target is a child element, in order to make sure the targeted
   * element is visible. Aria attributes on the summary
   * are set by triggering the click event listener in details-aria.js.
   *
   * @param {jQuery.Event} e
   *   The event triggered.
   * @param {jQuery} $target
   *   The targeted node as a jQuery object.
   */
  const handleFragmentLinkClickOrHashChange = (e, $target) => {
<<<<<<< HEAD
    $target
      .parents('details')
      .not('[open]')
      .find('> summary')
      .trigger('click');
=======
    $target.parents('details').not('[open]').find('> summary').trigger('click');
>>>>>>> dev
  };

  /**
   * Binds a listener to handle fragment link clicks and URL hash changes.
   */
  $('body').on(
    'formFragmentLinkClickOrHashChange.details',
    handleFragmentLinkClickOrHashChange,
  );

  // Expose constructor in the public space.
  Drupal.CollapsibleDetails = CollapsibleDetails;
})(jQuery, Modernizr, Drupal);
