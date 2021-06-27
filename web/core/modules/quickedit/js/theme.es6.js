/**
 * @file
 * Provides theme functions for all of Quick Edit's client-side HTML.
 */

<<<<<<< HEAD
(function($, Drupal) {
=======
(function ($, Drupal) {
>>>>>>> dev
  /**
   * Theme function for a "backstage" for the Quick Edit module.
   *
   * @param {object} settings
   *   Settings object used to construct the markup.
   * @param {string} settings.id
   *   The id to apply to the backstage.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditBackstage = function(settings) {
=======
  Drupal.theme.quickeditBackstage = function (settings) {
>>>>>>> dev
    let html = '';
    html += `<div id="${settings.id}"></div>`;
    return html;
  };

  /**
   * Theme function for a toolbar container of the Quick Edit module.
   *
   * @param {object} settings
   *   Settings object used to construct the markup.
   * @param {string} settings.id
   *   the id to apply to the backstage.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditEntityToolbar = function(settings) {
=======
  Drupal.theme.quickeditEntityToolbar = function (settings) {
>>>>>>> dev
    let html = '';
    html += `<div id="${settings.id}" class="quickedit quickedit-toolbar-container clearfix">`;
    html += '<i class="quickedit-toolbar-pointer"></i>';
    html += '<div class="quickedit-toolbar-content">';
    html +=
      '<div class="quickedit-toolbar quickedit-toolbar-entity clearfix icon icon-pencil">';
    html += '<div class="quickedit-toolbar-label"></div>';
    html += '</div>';
    html +=
      '<div class="quickedit-toolbar quickedit-toolbar-field clearfix"></div>';
    html += '</div><div class="quickedit-toolbar-lining"></div></div>';
    return html;
  };

  /**
   * Theme function for a toolbar container of the Quick Edit module.
   *
   * @param {object} settings
   *   Settings object used to construct the markup.
   * @param {string} settings.entityLabel
   *   The title of the active entity.
   * @param {string} settings.fieldLabel
   *   The label of the highlighted or active field.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditEntityToolbarLabel = function(settings) {
=======
  Drupal.theme.quickeditEntityToolbarLabel = function (settings) {
>>>>>>> dev
    // @todo Add XSS regression test coverage in https://www.drupal.org/node/2547437
    return `<span class="field">${Drupal.checkPlain(
      settings.fieldLabel,
    )}</span>${Drupal.checkPlain(settings.entityLabel)}`;
  };

  /**
   * Element defining a containing box for the placement of the entity toolbar.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditEntityToolbarFence = function() {
=======
  Drupal.theme.quickeditEntityToolbarFence = function () {
>>>>>>> dev
    return '<div id="quickedit-toolbar-fence"></div>';
  };

  /**
   * Theme function for a toolbar container of the Quick Edit module.
   *
   * @param {object} settings
   *   Settings object used to construct the markup.
   * @param {string} settings.id
   *   The id to apply to the toolbar container.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditFieldToolbar = function(settings) {
=======
  Drupal.theme.quickeditFieldToolbar = function (settings) {
>>>>>>> dev
    return `<div id="${settings.id}"></div>`;
  };

  /**
   * Theme function for a toolbar toolgroup of the Quick Edit module.
   *
   * @param {object} settings
   *   Settings object used to construct the markup.
   * @param {string} [settings.id]
   *   The id of the toolgroup.
   * @param {string} settings.classes
   *   The class of the toolgroup.
   * @param {Array} settings.buttons
   *   See {@link Drupal.theme.quickeditButtons}.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditToolgroup = function(settings) {
=======
  Drupal.theme.quickeditToolgroup = function (settings) {
>>>>>>> dev
    // Classes.
    const classes = settings.classes || [];
    classes.unshift('quickedit-toolgroup');
    let html = '';
    html += `<div class="${classes.join(' ')}"`;
    if (settings.id) {
      html += ` id="${settings.id}"`;
    }
    html += '>';
    html += Drupal.theme('quickeditButtons', { buttons: settings.buttons });
    html += '</div>';
    return html;
  };

  /**
   * Theme function for buttons of the Quick Edit module.
   *
   * Can be used for the buttons both in the toolbar toolgroups and in the
   * modal.
   *
   * @param {object} settings
   *   Settings object used to construct the markup.
   * @param {Array} settings.buttons
   * - String type: the type of the button (defaults to 'button')
   * - Array classes: the classes of the button.
   * - String label: the label of the button.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditButtons = function(settings) {
=======
  Drupal.theme.quickeditButtons = function (settings) {
>>>>>>> dev
    let html = '';
    for (let i = 0; i < settings.buttons.length; i++) {
      const button = settings.buttons[i];
      if (!button.hasOwnProperty('type')) {
        button.type = 'button';
      }
      // Attributes.
      const attributes = [];
      const attrMap = settings.buttons[i].attributes || {};
<<<<<<< HEAD
      Object.keys(attrMap).forEach(attr => {
=======
      Object.keys(attrMap).forEach((attr) => {
>>>>>>> dev
        attributes.push(attr + (attrMap[attr] ? `="${attrMap[attr]}"` : ''));
      });
      html += `<button type="${button.type}" class="${
        button.classes
      }" ${attributes.join(' ')}>${button.label}</button>`;
    }
    return html;
  };

  /**
   * Theme function for a form container of the Quick Edit module.
   *
   * @param {object} settings
   *   Settings object used to construct the markup.
   * @param {string} settings.id
   *   The id to apply to the toolbar container.
   * @param {string} settings.loadingMsg
   *   The message to show while loading.
   *
   * @return {string}
   *   The corresponding HTML.
   */
<<<<<<< HEAD
  Drupal.theme.quickeditFormContainer = function(settings) {
=======
  Drupal.theme.quickeditFormContainer = function (settings) {
>>>>>>> dev
    let html = '';
    html += `<div id="${settings.id}" class="quickedit-form-container">`;
    html += '  <div class="quickedit-form">';
    html += '    <div class="placeholder">';
    html += settings.loadingMsg;
    html += '    </div>';
    html += '  </div>';
    html += '</div>';
    return html;
  };
})(jQuery, Drupal);
