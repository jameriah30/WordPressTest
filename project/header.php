<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset');?>"/>
	<title>Sound Wellness and Counseling</title>

<!--  <meta http-equiv="X-UA-Compatible" content="IE=9" />-->
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/image_slide.js"></script>

    <?php wp_head();?>
</head>

<body>

<div id="main">
    <div id="header">
        <div id="banner">
            <?php get_sidebar();?>
            <div id="welcome">
                <h1></h1>
            </div><!--close welcome-->
            <div id="menubar">
                <ul id="menu">

                    <?php wp_nav_menu(array("menu" => "Main Menu")); ?>
<!--                    <li class="current"><a href="index.php">Home</a></li>-->
<!--                    <li><a href="about.php">About</a></li>-->
<!--                    <li><a href="services.php">Services</a></li>-->
<!--                    <li><a href="contact.php">Contact Us</a></li>-->
                </ul>
            </div><!--close menubar-->
        </div><!--close banner-->
    </div><!--close header-->