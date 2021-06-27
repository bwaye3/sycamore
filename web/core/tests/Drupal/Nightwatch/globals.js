import { spawn } from 'child_process';
import path from 'path';
import fs from 'fs';
import mkdirp from 'mkdirp';
import chromedriver from 'chromedriver';
import nightwatchSettings from './nightwatch.conf';

<<<<<<< HEAD
export const commandAsWebserver = command => {
=======
export const commandAsWebserver = (command) => {
>>>>>>> dev
  if (process.env.DRUPAL_TEST_WEBSERVER_USER) {
    return `sudo -u ${process.env.DRUPAL_TEST_WEBSERVER_USER} ${command}`;
  }
  return command;
};

export const drupalDbPrefix = null;
export const drupalSitePath = null;

module.exports = {
<<<<<<< HEAD
  before: done => {
=======
  before: (done) => {
>>>>>>> dev
    if (JSON.parse(process.env.DRUPAL_TEST_CHROMEDRIVER_AUTOSTART)) {
      chromedriver.start();
    }
    done();
  },
<<<<<<< HEAD
  after: done => {
=======
  after: (done) => {
>>>>>>> dev
    if (JSON.parse(process.env.DRUPAL_TEST_CHROMEDRIVER_AUTOSTART)) {
      chromedriver.stop();
    }
    done();
  },
  afterEach: (browser, done) => {
    // Writes the console log - used by the "logAndEnd" command.
    if (
      browser.drupalLogConsole &&
      (!browser.drupalLogConsoleOnlyOnError ||
        browser.currentTest.results.errors > 0 ||
        browser.currentTest.results.failed > 0)
    ) {
      const resultPath = path.join(
        __dirname,
        `../../../${nightwatchSettings.output_folder}/consoleLogs/${browser.currentTest.module}`,
      );
      const status =
        browser.currentTest.results.errors > 0 ||
        browser.currentTest.results.failed > 0
          ? 'FAILED'
          : 'PASSED';
      mkdirp.sync(resultPath);
      const now = new Date().toString().replace(/[\s]+/g, '-');
      const testName = (
        browser.currentTest.name || browser.currentTest.module
      ).replace(/[\s/]+/g, '-');
      browser
<<<<<<< HEAD
        .getLog('browser', logEntries => {
=======
        .getLog('browser', (logEntries) => {
>>>>>>> dev
          const browserLog = JSON.stringify(logEntries, null, '  ');
          fs.writeFileSync(
            `${resultPath}/${testName}_${status}_${now}_console.json`,
            browserLog,
          );
        })
        .end(done);
    } else {
      browser.end(done);
    }
  },
  commandAsWebserver,
};
