<?php

// Global Settings
$g = $pages->get("/globals");

// Global Functions
require_once("./_functions.php");

// Menus
require_once("./_navigation.php");


/**
 * Now we include the Head
 *
 * Optionally, this can be added to each template, and the content can be wrapped in AJAX calls.
 * There would be other reasons to do this - but right now, in order to avoid ANY similarity to Wordpress,
 * the _head inclusion happens here. Once.
 */
include("./_head.php");