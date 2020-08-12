<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package astabud
 */

get_header();
?>
<div class="slider">
  <?php add_revslider('slider-2', 'homepage'); ?></div>
<main id="primary" class="site-main">
  <div class="container">
    <div class="services">
      <div class="services-item">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-01.svg" alt="">
        </div>
        <div class="services-text">
          <?php _e('Capital and cosmetic repair of commercial facilities and residential real estate.', 'astabud'); ?>
        </div>
      </div>
      <div class="services-item">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-02.svg" alt="">
        </div>
        <div class="services-text">
          <?php _e('Capital construction civil and industrial objects', 'astabud'); ?>
        </div>
      </div>
      <div class="services-item">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-03.svg" alt="">
        </div>
        <div class="services-text">
          <?php _e('Design and installation of engineering systems; Electrical work', 'astabud'); ?>
        </div>
      </div>
    </div>
    <div class="services">
      <div class="services-item">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-04.svg" alt="">
        </div>
        <div class="services-text">
          <?php _e('Architectural design; Interior design.', 'astabud'); ?>
        </div>
      </div>
      <div class="services-item">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-05.svg" alt="">
        </div>
        <div class="services-text">
          <?php _e('Technical supervision construction projects', 'astabud'); ?>
        </div>
      </div>
      <div class="services-item">
        <div class="services-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-06.svg" alt="">
        </div>
        <div class="services-text">
          <?php _e('General construction works; Road works', 'astabud'); ?>
        </div>
      </div>
    </div>
  </div>
  <div class="block-image">
    <div class="container">
      <div class="block-image-items">
        <div class="item"></div>
        <div class="item">
          <?php _e('<p>Our company was founded in 2015 and is a full cycle construction company.</p>
					<p>Competently built organizational structure of the enterprise in alliance with a young, purposeful team of specialists with a high level of professional skills, theoretical knowledge and serious practical experience in their application, allows our company to create optimal, most comfortable working conditions for each client.</p>', 'astabud'); ?>
        </div>
      </div>
    </div>

  </div>

  <div class="block-image2">
    <div class="container">
      <div class="block-image-items">

        <div class="item">
          <?php _e('<p>Strict quality control and strict adherence to the technological process at each stage of our work allows us to effectively manage resources and time, as well as to comply with all conditions of all contractual relations.</p>
					<p>We are actively developing and to date have succeeded in many areas of activity, as well as well-established as a confident strategic partner and reliable general contractor.</p>', 'astabud'); ?>
        </div>
        <div class="item"></div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3 class="heading"><?php _e('Our works', 'astabud'); ?></h3>
    <p>
      <?php _e('We strive to ensure that our quality work and desire to satisfy customers are our motto', 'astabud'); ?>
    </p>
  </div>
  <div class="block-news">
    <div class="container">
      <h3 class="heading"><?php _e('Our news', 'astabud'); ?></h3>
    </div>
  </div>
  <div class="container">
    <h3 class="heading"><?php _e('Our friends', 'astabud'); ?></h3>
  </div>

  <div class="partners">
    <div class="container">
      <div class="partners-items">
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/dzidzio.svg" alt="">
        </div>
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/chb.svg" alt="">
        </div>
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/kg.svg" alt="">
        </div>
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/hlh.svg" alt="">
        </div>
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/bf.svg" alt="">
        </div>
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/dl.svg" alt="">
        </div>
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/images/partners/n.svg" alt="">
        </div>
      </div>
    </div>
  </div>
</main><!-- #main -->

<?php
get_footer();