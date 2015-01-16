<!-- <!doctype html> -->
<html lang="en">
<head>
  

  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta name="description" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta name="author" content="<?php bloginfo('description'); ?>" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="2014 (c) Company Name" />
    
    <meta property="og:title" content="<?php bloginfo('name'); ?><?php wp_title(); ?>" />
    <meta property="og:description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:image" content="" />
    
    <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    

    <!-- Mobile Jazz -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- CSS: implied media="all" -->

    <link rel="stylesheet" href="<?php bloginfo('template_directory' ); ?>/style.css" type="text/css" media="screen" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>

    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> -->

    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- bootstrap css -->

    <link href="<?php bloginfo('template_directory' ); ?>/css/bootstrap.css" rel="stylesheet">
    <script src="<?php bloginfo('template_directory' ); ?>/js/bootstrap.js" type='text/javascript'></script>
    
    <!-- type kit -->

    <script src="//use.typekit.net/tot8smp.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <!-- <link href="http://allfont.net/css/?fonts=smudger-let-plain10" rel="stylesheet" type="text/css" /> -->

    <script type="text/javascript">
        $(function() {
            $('#desktop_toggle').click(function() {
              $('.desktop_toggle').toggle();
              return false;
            });
        });
    </script>



<body <?php body_class(); ?>>
  <?php $options = get_option('ten_theme_options'); ?>   
  <div id="header">
      <div id="header_nav" class="navbar navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div>
              <a href="#" id="desktop_toggle">
                <img src="<?php bloginfo('template_directory' ); ?>/assets/img/menu_img.png" alt="">
              </a>
            </div>
          </div>
            <?php
              wp_nav_menu( array(
                  'menu'              => 'header-menu',
                  'theme_location'    => 'top-nav',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'navbar-collapse collapse',
                  'container_id'      => 'navbar',
                  'menu_class'        => 'nav navbar-nav desktop_toggle',
                  'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                  'walker'            => new wp_bootstrap_navwalker())
              );
            ?>

            <?php if (is_front_page()) { ?>

              <div class="social_hdr_links hidden"> 

            <?php } else { ?> 
              
              <div class="social_hdr_links">

            <?php } ?>

               <ul>
                  <li><a href="<?php echo $options['facebook_url'] ?>"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="<?php echo $options['twitter_url'] ?>"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="<?php echo $options['youtube_url'] ?>"><i class="fa fa-youtube"></i></a></li>
                  <li><a href="<?php echo $options['vimeo_url'] ?>"><i class="fa fa-vimeo-square"></a></i></li>
                  <li><a href="<?php echo $options['instagram_url'] ?>"><i class="fa fa-instagram"></i></a></li>
                </ul> 
              </div> 

        </div>
      </div>
  </div>
  