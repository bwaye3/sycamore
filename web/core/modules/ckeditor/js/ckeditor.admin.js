/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings, _) {
  Drupal.ckeditor = Drupal.ckeditor || {};
<<<<<<< HEAD

  Drupal.behaviors.ckeditorAdmin = {
    attach: function attach(context) {
      var $configurationForm = $(context).find('.ckeditor-toolbar-configuration').once('ckeditor-configuration');
      if ($configurationForm.length) {
        var $textarea = $configurationForm.find('.js-form-item-editor-settings-toolbar-button-groups').hide().find('textarea');

        $configurationForm.append(drupalSettings.ckeditor.toolbarAdmin);

=======
  Drupal.behaviors.ckeditorAdmin = {
    attach: function attach(context) {
      var $configurationForm = $(context).find('.ckeditor-toolbar-configuration').once('ckeditor-configuration');

      if ($configurationForm.length) {
        var $textarea = $configurationForm.find('.js-form-item-editor-settings-toolbar-button-groups').hide().find('textarea');
        $configurationForm.append(drupalSettings.ckeditor.toolbarAdmin);
>>>>>>> dev
        Drupal.ckeditor.models.Model = new Drupal.ckeditor.Model({
          $textarea: $textarea,
          activeEditorConfig: JSON.parse($textarea.val()),
          hiddenEditorConfig: drupalSettings.ckeditor.hiddenCKEditorConfig
        });
<<<<<<< HEAD

=======
>>>>>>> dev
        var viewDefaults = {
          model: Drupal.ckeditor.models.Model,
          el: $('.ckeditor-toolbar-configuration')
        };
        Drupal.ckeditor.views = {
          controller: new Drupal.ckeditor.ControllerView(viewDefaults),
          visualView: new Drupal.ckeditor.VisualView(viewDefaults),
          keyboardView: new Drupal.ckeditor.KeyboardView(viewDefaults),
          auralView: new Drupal.ckeditor.AuralView(viewDefaults)
        };
      }
    },
    detach: function detach(context, settings, trigger) {
      if (trigger !== 'unload') {
        return;
      }

      var $configurationForm = $(context).find('.ckeditor-toolbar-configuration').findOnce('ckeditor-configuration');
<<<<<<< HEAD
=======

>>>>>>> dev
      if ($configurationForm.length && Drupal.ckeditor.models && Drupal.ckeditor.models.Model) {
        var config = Drupal.ckeditor.models.Model.toJSON().activeEditorConfig;
        var buttons = Drupal.ckeditor.views.controller.getButtonList(config);
        var $activeToolbar = $('.ckeditor-toolbar-configuration').find('.ckeditor-toolbar-active');
<<<<<<< HEAD
=======

>>>>>>> dev
        for (var i = 0; i < buttons.length; i++) {
          $activeToolbar.trigger('CKEditorToolbarChanged', ['removed', buttons[i]]);
        }
      }
    }
  };
<<<<<<< HEAD

  Drupal.ckeditor = {
    views: {},

    models: {},

=======
  Drupal.ckeditor = {
    views: {},
    models: {},
>>>>>>> dev
    registerButtonMove: function registerButtonMove(view, $button, callback) {
      var $group = $button.closest('.ckeditor-toolbar-group');

      if ($group.hasClass('placeholder')) {
        if (view.isProcessing) {
          return;
        }
<<<<<<< HEAD
        view.isProcessing = true;

=======

        view.isProcessing = true;
>>>>>>> dev
        Drupal.ckeditor.openGroupNameDialog(view, $group, callback);
      } else {
        view.model.set('isDirty', true);
        callback(true);
      }
    },
    registerGroupMove: function registerGroupMove(view, $group) {
      var $row = $group.closest('.ckeditor-row');
<<<<<<< HEAD
=======

>>>>>>> dev
      if ($row.hasClass('placeholder')) {
        $row.removeClass('placeholder');
      }

      $row.parent().children().each(function () {
        $row = $(this);
<<<<<<< HEAD
=======

>>>>>>> dev
        if ($row.find('.ckeditor-toolbar-group').not('.placeholder').length === 0) {
          $row.addClass('placeholder');
        }
      });
      view.model.set('isDirty', true);
    },
    openGroupNameDialog: function openGroupNameDialog(view, $group, callback) {
      callback = callback || function () {};

      function validateForm(form) {
        if (form.elements[0].value.length === 0) {
          var $form = $(form);
<<<<<<< HEAD
          if (!$form.hasClass('errors')) {
            $form.addClass('errors').find('input').addClass('error').attr('aria-invalid', 'true');
            $('<div class="description" >' + Drupal.t('Please provide a name for the button group.') + '</div>').insertAfter(form.elements[0]);
          }
          return true;
        }
=======

          if (!$form.hasClass('errors')) {
            $form.addClass('errors').find('input').addClass('error').attr('aria-invalid', 'true');
            $("<div class=\"description\" >".concat(Drupal.t('Please provide a name for the button group.'), "</div>")).insertAfter(form.elements[0]);
          }

          return true;
        }

>>>>>>> dev
        return false;
      }

      function closeDialog(action, form) {
        function shutdown() {
          dialog.close(action);
<<<<<<< HEAD

=======
>>>>>>> dev
          delete view.isProcessing;
        }

        function namePlaceholderGroup($group, name) {
          if ($group.hasClass('placeholder')) {
<<<<<<< HEAD
            var groupID = 'ckeditor-toolbar-group-aria-label-for-' + Drupal.checkPlain(name.toLowerCase().replace(/\s/g, '-'));
=======
            var groupID = "ckeditor-toolbar-group-aria-label-for-".concat(Drupal.checkPlain(name.toLowerCase().replace(/\s/g, '-')));
>>>>>>> dev
            $group.removeAttr('aria-label').attr('data-drupal-ckeditor-type', 'group').attr('tabindex', 0).children('.ckeditor-toolbar-group-name').attr('id', groupID).end().children('.ckeditor-toolbar-group-buttons').attr('aria-labelledby', groupID);
          }

          $group.attr('data-drupal-ckeditor-toolbar-group-name', name).children('.ckeditor-toolbar-group-name').text(name);
        }

        if (action === 'cancel') {
          shutdown();
          callback(false, $group);
          return;
        }

        if (form && validateForm(form)) {
          return;
        }

        if (action === 'apply') {
          shutdown();
<<<<<<< HEAD

          namePlaceholderGroup($group, Drupal.checkPlain(form.elements[0].value));

          $group.closest('.ckeditor-row.placeholder').addBack().removeClass('placeholder');

          callback(true, $group);

=======
          namePlaceholderGroup($group, Drupal.checkPlain(form.elements[0].value));
          $group.closest('.ckeditor-row.placeholder').addBack().removeClass('placeholder');
          callback(true, $group);
>>>>>>> dev
          view.model.set('isDirty', true);
        }
      }

      var $ckeditorButtonGroupNameForm = $(Drupal.theme('ckeditorButtonGroupNameForm'));
      var dialog = Drupal.dialog($ckeditorButtonGroupNameForm.get(0), {
        title: Drupal.t('Button group name'),
        dialogClass: 'ckeditor-name-toolbar-group',
        resizable: false,
        buttons: [{
          text: Drupal.t('Apply'),
          click: function click() {
            closeDialog('apply', this);
          },
<<<<<<< HEAD

=======
>>>>>>> dev
          primary: true
        }, {
          text: Drupal.t('Cancel'),
          click: function click() {
            closeDialog('cancel');
          }
        }],
        open: function open() {
          var form = this;
          var $form = $(this);
          var $widget = $form.parent();
          $widget.find('.ui-dialog-titlebar-close').remove();
<<<<<<< HEAD

=======
>>>>>>> dev
          $widget.on('keypress.ckeditor', 'input, button', function (event) {
            if (event.keyCode === 13) {
              var $target = $(event.currentTarget);
              var data = $target.data('ui-button');
              var action = 'apply';

              if (data && data.options && data.options.label) {
                action = data.options.label.toLowerCase();
              }
<<<<<<< HEAD
=======

>>>>>>> dev
              closeDialog(action, form);
              event.stopPropagation();
              event.stopImmediatePropagation();
              event.preventDefault();
            }
          });
<<<<<<< HEAD

          var text = Drupal.t('Editing the name of the new button group in a dialog.');
=======
          var text = Drupal.t('Editing the name of the new button group in a dialog.');

>>>>>>> dev
          if (typeof $group.attr('data-drupal-ckeditor-toolbar-group-name') !== 'undefined') {
            text = Drupal.t('Editing the name of the "@groupName" button group in a dialog.', {
              '@groupName': $group.attr('data-drupal-ckeditor-toolbar-group-name')
            });
          }
<<<<<<< HEAD
=======

>>>>>>> dev
          Drupal.announce(text);
        },
        close: function close(event) {
          $(event.target).remove();
        }
      });
<<<<<<< HEAD

      dialog.showModal();

      $(document.querySelector('.ckeditor-name-toolbar-group').querySelector('input')).attr('value', $group.attr('data-drupal-ckeditor-toolbar-group-name')).trigger('focus');
    }
  };

=======
      dialog.showModal();
      $(document.querySelector('.ckeditor-name-toolbar-group').querySelector('input')).attr('value', $group.attr('data-drupal-ckeditor-toolbar-group-name')).trigger('focus');
    }
  };
>>>>>>> dev
  Drupal.behaviors.ckeditorAdminButtonPluginSettings = {
    attach: function attach(context) {
      var $context = $(context);
      var $ckeditorPluginSettings = $context.find('#ckeditor-plugin-settings').once('ckeditor-plugin-settings');
<<<<<<< HEAD
      if ($ckeditorPluginSettings.length) {
        $ckeditorPluginSettings.find('[data-ckeditor-buttons]').each(function () {
          var $this = $(this);
=======

      if ($ckeditorPluginSettings.length) {
        $ckeditorPluginSettings.find('[data-ckeditor-buttons]').each(function () {
          var $this = $(this);

>>>>>>> dev
          if ($this.data('verticalTab')) {
            $this.data('verticalTab').tabHide();
          } else {
            $this.hide();
          }
<<<<<<< HEAD
          $this.data('ckeditorButtonPluginSettingsActiveButtons', []);
        });

        $context.find('.ckeditor-toolbar-active').off('CKEditorToolbarChanged.ckeditorAdminPluginSettings').on('CKEditorToolbarChanged.ckeditorAdminPluginSettings', function (event, action, button) {
          var $pluginSettings = $ckeditorPluginSettings.find('[data-ckeditor-buttons~=' + button + ']');
=======

          $this.data('ckeditorButtonPluginSettingsActiveButtons', []);
        });
        $context.find('.ckeditor-toolbar-active').off('CKEditorToolbarChanged.ckeditorAdminPluginSettings').on('CKEditorToolbarChanged.ckeditorAdminPluginSettings', function (event, action, button) {
          var $pluginSettings = $ckeditorPluginSettings.find("[data-ckeditor-buttons~=".concat(button, "]"));
>>>>>>> dev

          if ($pluginSettings.length === 0) {
            return;
          }

          var verticalTab = $pluginSettings.data('verticalTab');
          var activeButtons = $pluginSettings.data('ckeditorButtonPluginSettingsActiveButtons');
<<<<<<< HEAD
=======

>>>>>>> dev
          if (action === 'added') {
            activeButtons.push(button);

            if (verticalTab) {
              verticalTab.tabShow();
            } else {
              $pluginSettings.show();
            }
          } else {
            activeButtons.splice(activeButtons.indexOf(button), 1);

            if (activeButtons.length === 0) {
              if (verticalTab) {
                verticalTab.tabHide();
              } else {
                $pluginSettings.hide();
              }
            }
          }
<<<<<<< HEAD
=======

>>>>>>> dev
          $pluginSettings.data('ckeditorButtonPluginSettingsActiveButtons', activeButtons);
        });
      }
    }
  };

  Drupal.theme.ckeditorRow = function () {
    return '<li class="ckeditor-row placeholder" role="group"><ul class="ckeditor-toolbar-groups clearfix"></ul></li>';
  };

  Drupal.theme.ckeditorToolbarGroup = function () {
    var group = '';
<<<<<<< HEAD
    group += '<li class="ckeditor-toolbar-group placeholder" role="presentation" aria-label="' + Drupal.t('Place a button to create a new button group.') + '">';
    group += '<h3 class="ckeditor-toolbar-group-name">' + Drupal.t('New group') + '</h3>';
=======
    group += "<li class=\"ckeditor-toolbar-group placeholder\" role=\"presentation\" aria-label=\"".concat(Drupal.t('Place a button to create a new button group.'), "\">");
    group += "<h3 class=\"ckeditor-toolbar-group-name\">".concat(Drupal.t('New group'), "</h3>");
>>>>>>> dev
    group += '<ul class="ckeditor-buttons ckeditor-toolbar-group-buttons" role="toolbar" data-drupal-ckeditor-button-sorting="target"></ul>';
    group += '</li>';
    return group;
  };

  Drupal.theme.ckeditorButtonGroupNameForm = function () {
    return '<form><input name="group-name" required="required"></form>';
  };

  Drupal.theme.ckeditorButtonGroupNamesToggle = function () {
    return '<button class="link ckeditor-groupnames-toggle" aria-pressed="false"></button>';
  };

  Drupal.theme.ckeditorNewButtonGroup = function () {
<<<<<<< HEAD
    return '<li class="ckeditor-add-new-group"><button aria-label="' + Drupal.t('Add a CKEditor button group to the end of this row.') + '">' + Drupal.t('Add group') + '</button></li>';
=======
    return "<li class=\"ckeditor-add-new-group\"><button aria-label=\"".concat(Drupal.t('Add a CKEditor button group to the end of this row.'), "\">").concat(Drupal.t('Add group'), "</button></li>");
>>>>>>> dev
  };
})(jQuery, Drupal, drupalSettings, _);