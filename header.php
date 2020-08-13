<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astabud
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">

    <header id="masthead" class="site-header <?php if (!is_front_page()) {
                                                echo "nofront";
                                              } ?>">


      <nav id="site-navigation" class="main-navigation">
        <div id="navbar" class="nav-wrap">
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">menu</button>

          <div class="container">
            <div class="logo-menu"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img
                  src="<?php echo get_template_directory_uri(); ?>/images/logo-top.svg" alt=""></a>
            </div>

            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
            <div class="lang"><?php do_action('wpml_add_language_selector'); ?>
            </div>
            <div class="phone">+38 (067) 33 47 353
            </div>
          </div>

        </div>
      </nav><!-- #site-navigation -->

      <div class=" v-header site-branding ">
        <?php if (is_front_page()) {; ?>

        <div class="fullscreen-video-wrap">
          <video autoplay muted playsinline src="<?php echo get_template_directory_uri(); ?>/images/header.mp4">
          </video>
        </div>
        <?php }; ?>


      </div><!-- .site-branding -->



    </header><!-- #masthead -->