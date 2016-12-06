<?php
/*
*****[main-menu]*****
title
head_menuPages

/*
|==========================================================================
| Functions
|==========================================================================
*/


/*
|==========================================================================
| Variables
|==========================================================================
*/
$head = $pages->get("/globals/head");
$primary_menu = $head->head_menuPages;

/*
|==========================================================================
| View
|==========================================================================
*/
?>
<?
//
// Head
//
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />

    <title><?php echo $globals_title .": ". $page->title; ?></title>

    <?php // Windows Tile ?>
    <meta name="application-name" content="<?php echo $pages->get(1)->title; ?>"/>
    <meta name="msapplication-TileColor" content="#D6470F"/>
    <meta name="msapplication-square310x310logo" content="<?php echo $globals_tile->httpUrl; ?>"/>

    <?php // Apple Touch Icons ?>
    <link rel="apple-touch-icon" href="<?php echo $globals_tile->httpUrl; ?>" />

    <?php // Site Favicon ?>
    <link rel="shortcut icon" href="<?php echo $globals_favicon->url; ?>" />

    <?php // Stylesheet ?>
    <link rel="stylesheet" href="/build/css/app.css">

    <?php // RSS Feeds ?>

    <?php // Javascripts ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//use.typekit.net/ash3zqi.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

<body class="<?php echo HtmlBodyClasses::renderClasses($page); ?>">

    <div class="wrapper">

        <nav class="navbar navbar-fixed-top navbar-light bg-primary" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $home->httpUrl; ?>">
                    <img alt="Brand" class="site-brand hidden-md-up" src="<?php echo $globals_logo->httpUrl; ?>">
                    <span class="h2 text-uppercase site-title hidden-sm-down"><?php echo $globals_title; ?></span>
                </a>

                <?php if($primary_menu) : ?>
                    <div class="float-xs-right text-xs-right hidden-lg-up">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                    </div>
                    <div class="collapse navbar-toggleable-md navbar-nav-wrap float-lg-right" id="navbarResponsive">
                        <div class="">
                            <ul class="nav navbar-nav">
                                <?php foreach($primary_menu as $item) : ?>
                                    <li class="nav-item">
                                        <a href="<?php echo $item->url; ?>" class="nav-link <?php echo ($page->id == $item->id) ? 'active' : ''; ?>"><?php echo $item->title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                                <?php if($page->editable()) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo $page->editURL; ?>" target="_blank">Edit</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </nav>

