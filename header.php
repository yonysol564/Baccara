<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php the_title(); ?></title>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <div class="wraper">
        <!-- ========   N A V  D E S K T O P   ====== -->
        <nav class="navbar navbar-default desktop_nav">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnavabar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-header">
                <?php
                  $logo = get_field('logo','option'); 
                ?>
                <a class="navbar-brand" href="<?php echo home_url(); ?>" title="home">
                  <img alt="Brand" src="<?php echo $logo; ?>">
                </a>
              </div>
            </div>

              <div class="navbar-right main_right_menu">
                <?php
                   wp_nav_menu( array(
                      'theme_location'    => 'top_menu',
                      'menu'              => 'primary',
                      'menu_class'        => 'nav navbar-nav',
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'topnavabar',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback')
                  );
                ?>


                <div class="top_icons">
                  <a class="top_icons_a search_icon" href="#" title="search">
                    <img alt="Brand" src="<?php echo get_template_directory_uri(); ?>/images/search.png">
                  </a>
                </div>
                <div class="lang_div">
                  <!-- ENGLISH | 中文 | ESPANOL -->
                  <?php icl_post_languages(); ?>
                  
                </div> 
              </div>
              <?php get_search_form();?>

          </div>
        
        </nav>
         <!-- ========   N A V  M O B I L E   ====== -->
        <nav class="navbar navbar-default mobile_nav">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnavabar2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="lang_m_div">
                <?php icl_post_languages_m(); ?>
              </div>
              <div class="navbar-header">
                <?php
                  $logo = get_field('logo','option'); 
                ?>
                <a class="navbar-brand" href="<?php echo home_url(); ?>" title="home">
                  <img alt="Brand" src="<?php echo $logo; ?>">
                </a>
              </div>
            </div>

              <div class="navbar-right main_right_menu">
                <?php
                   wp_nav_menu( array(
                      'theme_location'    => 'top_menu_mobile',
                      'menu'              => 'primary',
                      'menu_class'        => 'nav navbar-nav',
                      'container'         => 'div',
                      'container_class'   => 'collapse navbar-collapse',
                      'container_id'      => 'topnavabar2',
                      'fallback_cb'       => 'wp_bootstrap_navwalker::fallback')
                  );
                ?>
              </div>

        </nav>

