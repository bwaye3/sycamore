/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, window, Drupal) {
  Drupal.behaviors.insertTest = {
    attach: function attach(context) {
      $('.ajax-insert').once('ajax-insert').on('click', function (event) {
        event.preventDefault();
        var ajaxSettings = {
          url: event.currentTarget.getAttribute('href'),
          wrapper: 'ajax-target',
          base: false,
          element: false,
          method: event.currentTarget.getAttribute('data-method'),
          effect: event.currentTarget.getAttribute('data-effect')
        };
        var myAjaxObject = Drupal.ajax(ajaxSettings);
        myAjaxObject.execute();
      });
<<<<<<< HEAD

=======
>>>>>>> dev
      $('.ajax-insert-inline').once('ajax-insert').on('click', function (event) {
        event.preventDefault();
        var ajaxSettings = {
          url: event.currentTarget.getAttribute('href'),
          wrapper: 'ajax-target-inline',
          base: false,
          element: false,
          method: event.currentTarget.getAttribute('data-method'),
          effect: event.currentTarget.getAttribute('data-effect')
        };
        var myAjaxObject = Drupal.ajax(ajaxSettings);
        myAjaxObject.execute();
      });
<<<<<<< HEAD

=======
>>>>>>> dev
      $(context).addClass('processed');
    }
  };
})(jQuery, window, Drupal);