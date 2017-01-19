<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js"><!--<![endif]-->
<head>   
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />

    <title><?php echo $g->globals_siteTitleText; ?> — <?php echo $page->title; ?></title>


    <?php // Meta Tags ?>
    <?php foreach($g->globals_metaTagRepeater as $tag) {
        if($tag->globals_metaNameText && $tag->globals_metaContentText) {
            echo "<meta name=\"{$tag->globals_metaNameText}\" content=\"{$tag->globals_metaContentText}\">";
        }
    } ?>

    <?php // Windows Tile ?>
    <meta name="application-name" content="<?php echo $g->globals_siteTitleText; ?>"/>
    <meta name="msapplication-TileColor" content="<?php echo $g->globals_siteColor; ?>"/>
    <meta name="msapplication-square310x310logo" content="<?php echo $g->globals_mobileTileImage->url; ?>"/>

    <?php // Apple Touch Icons ?>
    <?php if($g->globals_faviconImage) : ?>
        <link rel="apple-touch-icon" href="<?php echo $g->globals_mobileTileImage->url; ?>" />
    <?php endif; ?>

    <?php // Site Favicon ?>
    <link rel="shortcut icon" href="<?php echo $g->globals_faviconImage->url; ?>" />

    <?php // Stylesheet ?>
    <link rel="stylesheet" href="/build/css/app.css">

    <?php // RSS Feeds ?>

    <?php // Javascripts ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <?php if($g->globals_typekitText) : ?>
        <script src="//use.typekit.net/<?php echo $g->globals_typekitText; ?>.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php endif; ?>

</head>

<body class="<?php echo HtmlBodyClasses::renderClasses($page); ?>">

    <div class="wrapper">

        <nav class="navbar navbar-light bg-primary" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $home->httpUrl; ?>">
                    <img alt="Brand" class="site-brand hidden-md-up" src="<?php echo $globals_logo->httpUrl; ?>">
                    <span class="h2 text-uppercase site-title hidden-sm-down"><?php echo $g->globals_siteTitleText; ?></span>
                </a>

                <?php if($menu) : ?>
                    <div class="float-xs-right text-xs-right hidden-lg-up">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
                    </div>
                    <div class="collapse navbar-toggleable-md navbar-nav-wrap float-lg-right" id="navbarResponsive">
                        <div>
                            <?php echo $menu->render('primary', $primary_menu_options);?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </nav>

