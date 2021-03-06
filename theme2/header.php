<?php
	$mainNav = array(
		"theme_location" => "main-menu",
		"container" => "nav",
		"container_class" => "main-nav",
		"depth" => 2
	);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo("charset"); ?>">
	<title><?php bloginfo("name") . wp_title("|"); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <?php wp_head(); ?><!-- needed for javascript -->
</head>
<body <?php body_class($class); ?>>
	<header>
    	<h1><a href="<?php bloginfo("url"); ?>">
			<?php bloginfo("name"); ?>
        </a></h1>
        <h2><?php bloginfo("description"); ?></h2>
        
        <?php wp_nav_menu($mainNav); ?>
    </header>
    
    
    
    
    
    
    
    
    
    
    
    
    
    