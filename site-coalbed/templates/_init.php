<?php
/**
 * Init File
 *
 * This file is for loading some pretty common things that will be used cross-template
 */
$g = $pages->get("/globals");

$globals_logo = $g->globals_logo;
$globals_favicon = $g->globals_favicon;
$globals_tile = $g->globals_mobileTile;
$globals_title = $pages->get(1)->title;

$home = $pages->get(1);
$admin = $config->get("/admin");


/**
 * Now we include the Head
 */
include("./_head.php");
