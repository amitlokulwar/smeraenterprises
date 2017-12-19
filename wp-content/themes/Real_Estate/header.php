<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (is_search()) { ?>
<meta name="robots" content="noindex, nofollow" />
<?php } ?>
<title>
<?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?>
</title>
 
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">


<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/blocks.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/one.style.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/global.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/construction.style.css">



<!-- CSS Owl Carousel -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">

<!-- CSS Header -->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/header-v3.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/footer-v1.css">

<!--CSS custom plugins-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/cubeportfolio/css/cubeportfolio.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/plugins/cubeportfolio/custom/custom-cubeportfolio.css">
 
<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>
</head>

<body class="header-fixed">
 
<div id="wrapper" class="wrapper">

  <!--=== Header ===-->
  <div class="header-v3 header-sticky">
    <!-- Navbar -->
    <div class="navbar navbar-default mega-menu main-menu" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
          </button>
          <a href="<?php echo get_option('home'); ?>" class="navbar-brand">
            <img style="width: 180px;" id="logo-header" class="img-responsive" src="<?php bloginfo('template_directory'); ?>/images/logo_new.png" alt="Logo" title="Logo"/>

          </a>
        </div>

        

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">

            <?php

                  wp_nav_menu( array(

                      'menu'              => 'primary',

                      'theme_location'    => 'primary-menu',

                      'depth'             => 8,

                      'container'         => 'ul',

                      'container_class'   => 'collapse navbar-collapse',

                      'container_id'      => 'bs-example-navbar-collapse-1',

                      'menu_class'        => 'nav navbar-nav',

                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

                      'walker'            => new wp_bootstrap_navwalker())

                  );

              ?>

        </div><!--/navbar-collapse-->
        
      </div>
    </div>
    <!-- End Navbar -->
  </div>
  <!--=== End Header ===-->


