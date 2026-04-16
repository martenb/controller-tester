<?php declare(strict_types = 1);

use Contributte\Tester\Environment;

require __DIR__ . '/../vendor/autoload.php';

// Configure Nette\Tester
Environment::setupTester();

// Configure timezone
Environment::setupTimezone('Europe/Prague');

// Configure many constants
if (method_exists(Environment::class, 'setupFolders')) {
	Environment::setupFolders(__DIR__);
} else {
	Environment::setupVariables(__DIR__);
}

// Fill global variables
Environment::setupGlobalVariables();
