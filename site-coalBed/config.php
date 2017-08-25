<?php
/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire.
 * This config.php file was generated by the ProcessExportProfile module. 
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * ProcessWire 2.x
 * Copyright (C) 2014 by Ryan Cramer
 * Licensed under GNU/GPL v2, see LICENSE.TXT
 *
 * http://processwire.com
 *
 */
if(!defined("PROCESSWIRE")) die();

/**
 * Server Character Encoding Fix
 */
setlocale(LC_ALL,'en_US.UTF-8');

/*** SITE CONFIG *************************************************************************/

/**
 * Environment-Specific Configs
 *
 * These should not be tracked in a resulting repository.
 */
require_once("env.php");

/**
 * Template Pre/Append
 */
$config->prependTemplateFile    = '_init.php';
$config->appendTemplateFile     = '_foot.php';
