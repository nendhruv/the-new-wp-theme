<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
   <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


 
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 
    
<?php wp_enqueue_script("jquery"); ?>

<?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'new' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'new' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
 
<body>
    <?php if ( is_home() || is_front_page() ) { ?>
<div id="wrapper-home" class="hfeed">
  <div class="background">
    <header id="header" class="color">
        <div class="container">
        <div id="masthead" class="row">
 
              <div id="branding"  class="col-sm-2">
                <div id="blog-title"><!--<span><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></span>-->
                  
                  <div>
                    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

                  </div>
                </div>

                    <!--<h1 id="blog-description"><?php bloginfo( 'description' ) ?></h1>-->

                   <!-- <div id="blog-description"><?php bloginfo( 'description' ) ?></div>-->

            </div><!-- #branding -->
 
           <div id="access " class="col-sm-6 col-sm-offset-4 col-dd-9 col-dd-offset-1">
    <!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'new' ) ?>"><?php _e( 'Skip to content', 'new' ) ?></a></div>-->

<nav class="">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
</nav>
</div><!-- #access -->
 
        </div><!-- #masthead -->
    </div>
    </header><!-- #header -->
 
    <div id="main">

        <?php } else { ?>

         <div id="wrapper" class="hfeed">

    <header id="header" class="head product-head">
      <div class="background-p">
        <div class="container">
        <div id="masthead" class="row">
 
              <div id="branding"  class="col-sm-2">
                <div id="blog-title"><!--<span><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></span>-->
                  
                  <div>
                   <a href="index.php"> <img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>

                  </div>
                </div>

                    <!--<h1 id="blog-description"><?php bloginfo( 'description' ) ?></h1>-->

                   <!-- <div id="blog-description"><?php bloginfo( 'description' ) ?></div>-->

            </div><!-- #branding -->
 
           <div id="access " class="col-sm-6 col-sm-offset-4 col-dd-9 col-dd-offset-1">
    <!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'new' ) ?>"><?php _e( 'Skip to content', 'new' ) ?></a></div>-->

<nav class="">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle navbar-btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
       
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
</nav>
</div><!-- #access -->

  <div class="row ">
                    <h2 class="gap entry-title font name head-heading"><strong><span class="name"><?php the_title(); ?></strong></span></h2>
                </div>
 
        </div><!-- #masthead -->
    </div>
    
    </header><!-- #header -->

        <?php } ?>