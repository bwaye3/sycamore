/**
 * @file
 * Views dialog behaviors.
 */

<<<<<<< HEAD
(function($, Drupal, drupalSettings) {
=======
(function ($, Drupal, drupalSettings) {
>>>>>>> dev
  function handleDialogResize(e) {
    const $modal = $(e.currentTarget);
    const $viewsOverride = $modal.find('[data-drupal-views-offset]');
    const $scroll = $modal.find('[data-drupal-views-scroll]');
    let offset = 0;
    let modalHeight;
    if ($scroll.length) {
      // Add a class to do some styles adjustments.
      $modal.closest('.views-ui-dialog').addClass('views-ui-dialog-scroll');
      // Let scroll element take all the height available.
      $scroll.css({ overflow: 'visible', height: 'auto' });
      modalHeight = $modal.height();
<<<<<<< HEAD
      $viewsOverride.each(function() {
=======
      $viewsOverride.each(function () {
>>>>>>> dev
        offset += $(this).outerHeight();
      });

      // Take internal padding into account.
      const scrollOffset = $scroll.outerHeight() - $scroll.height();
      $scroll.height(modalHeight - offset - scrollOffset);
      // Reset scrolling properties.
      $modal.css('overflow', 'hidden');
      $scroll.css('overflow', 'auto');
    }
  }

  /**
   * Functionality for views modals.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches modal functionality for views.
   * @prop {Drupal~behaviorDetach} detach
   *   Detaches the modal functionality.
   */
  Drupal.behaviors.viewsModalContent = {
    attach(context) {
      $('body')
        .once('viewsDialog')
        .on(
          'dialogContentResize.viewsDialog',
          '.ui-dialog-content',
          handleDialogResize,
        );
      // When expanding details, make sure the modal is resized.
      $(context)
        .find('.scroll')
        .once('detailsUpdate')
<<<<<<< HEAD
        .on('click', 'summary', e => {
=======
        .on('click', 'summary', (e) => {
>>>>>>> dev
          $(e.currentTarget).trigger('dialogContentResize');
        });
    },
    detach(context, settings, trigger) {
      if (trigger === 'unload') {
<<<<<<< HEAD
        $('body')
          .removeOnce('viewsDialog')
          .off('.viewsDialog');
=======
        $('body').removeOnce('viewsDialog').off('.viewsDialog');
>>>>>>> dev
      }
    },
  };
})(jQuery, Drupal, drupalSettings);
