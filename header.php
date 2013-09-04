<!DOCTYPE html>
<!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<!--[if IE 8 ]><html class="ie8"><![endif]-->
<html <?php language_attributes(); ?>>
<head> 
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<title>
        <?php wp_title('::',true,'right'); ?> <?php bloginfo('name'); ?>
    </title>
	<meta name="author" content="ikantam.com">
	
    <!-- css -->
    <link href="<?php bloginfo('pingback_url'); ?>" rel="pingback" />
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
    <link href="<?php bloginfo('template_directory') ?>/css/bootstrap.css" rel="stylesheet">
    <!-- css -->
<?php  wp_head(); ?>
</head>
<body>

