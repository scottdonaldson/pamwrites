<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
     <title><?php wp_title(''); ?></title> 
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
 
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/media.css" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
    
    <script src="<?php echo bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3.min.js"></script> 

<?php wp_head(); ?>    
</head>

<body <?php body_class('clearfix'); ?>>

<!--[if lt IE 10]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
    
<header>

    <div id="header"></div>

    <h1 style="margin: 0;"><a id="site-title" href="<?php echo home_url(); ?>"><?php echo bloginfo('site_title'); ?></a></h1>
            
	<nav class="palatino"><?php wp_nav_menu(); ?></nav>
 
</header>

<div id="bkgrnd"></div>
<div id="bkgrnd2"></div>

<div id="main" role="main" class="clearfix">