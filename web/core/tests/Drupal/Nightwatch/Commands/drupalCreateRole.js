/**
 * Creates role with given permissions.
 *
 * @param {object} settings
 *   Settings object
 * @param {array} settings.permissions
 *   The list of roles granted for the user.
 * @param {string} [settings.name=null]
 *   The role name.
 * @param {function} callback
 *   A callback which will be called, when creating the role is finished.
 * @return {object}
 *   The drupalCreateRole command.
 */
exports.command = function drupalCreateRole(
  { permissions, name = null },
  callback,
) {
  const self = this;
<<<<<<< HEAD
  const roleName =
    name ||
    Math.random()
      .toString(36)
      .substring(2, 15);
=======
  const roleName = name || Math.random().toString(36).substring(2, 15);
>>>>>>> dev

  let machineName;
  this.drupalLoginAsAdmin(() => {
    this.drupalRelativeURL('/admin/people/roles/add')
      .setValue('input[name="label"]', roleName)
      // Wait for the machine name to appear so that it can be used later to
      // select the permissions from the permission page.
      .expect.element('.user-role-form .machine-name-value')
      .to.be.visible.before(2000);

<<<<<<< HEAD
    this.perform(done => {
      this.getText('.user-role-form .machine-name-value', element => {
=======
    this.perform((done) => {
      this.getText('.user-role-form .machine-name-value', (element) => {
>>>>>>> dev
        machineName = element.value;
        done();
      });
    })
      .submitForm('#user-role-form')
      .drupalRelativeURL('/admin/people/permissions')
      .perform((client, done) => {
        Promise.all(
          permissions.map(
<<<<<<< HEAD
            permission =>
              new Promise(resolve => {
=======
            (permission) =>
              new Promise((resolve) => {
>>>>>>> dev
                client.click(
                  `input[name="${machineName}[${permission}]"]`,
                  () => {
                    resolve();
                  },
                );
              }),
          ),
        ).then(() => {
          done();
        });
      })
      .submitForm('#user-admin-permissions');
  }).perform(() => {
    if (typeof callback === 'function') {
      callback.call(self, machineName);
    }
  });

  return this;
};
