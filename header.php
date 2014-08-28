<!DOCTYPE html>
<!--

    Site by Parsley & Sprouts
    http://www.parsleyandsprouts.com

-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
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
    
<header>
	
    <div id="paint">
    	<img src="<?php echo bloginfo('template_url'); ?>/images/b-<?php $num = rand(1,5); echo $num; ?>.png" />
    </div>
    
    <a href="<?php echo site_url(); ?>" rel="home" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    	<img id="logo" src="<?php echo bloginfo('template_url'); ?>/images/pam.png" />
    </a>   
            
	<nav class="palatino"><?php wp_nav_menu(); ?></nav>
 
</header>

<div id="bkgrnd"></div>
<div id="bkgrnd2"></div>

<div id="main" role="main" class="clearfix">