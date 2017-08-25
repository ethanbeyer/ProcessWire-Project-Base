<?php
/**
 * Environment Specific Configs™
 *
 * Just FYI: This file should not to added to repositories other than this Project Base
 */

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */
$config->debug = false;

/**
 * Environment Name
 */
$config->env = 'dev';

/**
 * Database
 */
$config->dbHost = '';
$config->dbName = '';
$config->dbUser = '';
$config->dbPass = '';
$config->dbPort = '';

/**
 * HTTP Hosts Whitelist
 */
$config->httpHosts = array('');