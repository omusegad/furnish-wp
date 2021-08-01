<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package furnish
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	 <!--====== Favicon Icon ======-->
	 <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/png">

	<!--====== Bootstrap css ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">

	<!--====== Animate css ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

	<!--====== Magnific Popup css ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">

	<!--====== Slick css ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">

	<!--====== Line Icons css ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/LineIcons.css">

	<!--====== Default css ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css">

	<!--====== Responsive css ======-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'furnish' ); ?></a>

    <!--====== PRELOADER PART START ======-->
    
    <!-- <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
     -->
	
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?php home_url( '/' ); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#service">Services</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Products</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#contact">Contact</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#showcase">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#blog">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#team">Team</a>
                                </li>
                               
                                
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    