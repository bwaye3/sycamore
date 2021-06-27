/**
 * @file
 * Contains client-side code for testing CSS delivered to CKEditor via AJAX.
 */

<<<<<<< HEAD
(function(Drupal, ckeditor, editorSettings, $) {
=======
(function (Drupal, ckeditor, editorSettings, $) {
>>>>>>> dev
  Drupal.behaviors.ajaxCssForm = {
    attach(context) {
      // Initialize an inline CKEditor on the #edit-inline element if it
      // isn't editable already.
      $(context)
        .find('#edit-inline')
        .not('[contenteditable]')
<<<<<<< HEAD
        .each(function() {
=======
        .each(function () {
>>>>>>> dev
          ckeditor.attachInlineEditor(this, editorSettings.formats.test_format);
        });
    },
  };
})(Drupal, Drupal.editors.ckeditor, drupalSettings.editor, jQuery);
