#!/usr/bin/env php
<?php

/**
 * @file
 * A command line application to dump a database to a generation script.
 */

use Drupal\Core\Command\DbDumpApplication;
use Drupal\Core\DrupalKernel;
use Drupal\Core\Site\Settings;
use Symfony\Component\HttpFoundation\Request;

if (PHP_SAPI !== 'cli') {
  return;
}

// Bootstrap.
$autoloader = require __DIR__ . '/../../autoload.php';
<<<<<<< HEAD
require_once __DIR__ . '/../includes/bootstrap.inc';
$request = Request::createFromGlobals();
Settings::initialize(dirname(dirname(__DIR__)), DrupalKernel::findSitePath($request), $autoloader);
=======
$request = Request::createFromGlobals();
Settings::initialize(dirname(__DIR__, 2), DrupalKernel::findSitePath($request), $autoloader);
>>>>>>> dev
$kernel = DrupalKernel::createFromRequest($request, $autoloader, 'prod')->boot();

// Run the database dump command.
$application = new DbDumpApplication();
$application->run();
