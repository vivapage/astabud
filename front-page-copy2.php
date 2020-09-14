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
<main id="primary" class="site-main">
  <div class="container">
    <div class="services anim-items down anim-show">
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
    <div class="services anim-items anim-show down">
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
        <div class="item anim-items anim-show right">
          <?php _e('<p>The basis of our business is the creation of partnerships with the client, compliance with high quality requirements for the work performed, the fulfillment of contractual relations on time.</p>
					<p>The quality of services provided in alliance with fair prices is the main course of the company, and is constantly monitored at all levels of the production process.</p>', 'astabud'); ?>
        </div>
      </div>
    </div>

  </div>

  <div class="block-image2">
    <div class="container">
      <div class="block-image-items">

        <div class="item anim-items anim-show left">
          <?php _e('<p>Individuality<br /><span>We provide an individual approach to each client.</span></p>
                    <p>Control<br /><span>We carry out quality control at every stage of the work.</span></p>
                    <p>Qualification<br /><span>Qualified personnel with extensive experience.</span></p>
                    <p>Technology<br /><span>Application of modern technologies and tendencies of the world market of construction services.</span></p>', 'astabud'); ?>
        </div>
        <div class="item"></div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3 class="heading"><?php _e('Why us?', 'astabud'); ?></h3>
    <div class="whyus anim-items down anim-show">
      <div class="whyus-item">
        <div class="whyus-header"><?php _e('ADAPTABILITY', 'astabud'); ?></div>
        <div class="whyus-text"><?php _e('We quickly adjust to the right wave', 'astabud'); ?></div>
      </div>
      <div class="whyus-item">
        <div class="whyus-header"><?php _e('IN TREND', 'astabud'); ?></div>
        <div class="whyus-text">
          <?php _e('We apply modern technologies in management and performance of work', 'astabud'); ?></div>
      </div>
      <div class="whyus-item">
        <div class="whyus-header"><?php _e('STABILITY', 'astabud'); ?></div>
        <div class="whyus-text"><?php _e('In everything and everyone stages', 'astabud'); ?></div>
      </div>
    </div>

    <div class="whyus anim-items down anim-show">
      <div class="whyus-item">
        <div class="whyus-header"><?php _e('REPUTATION', 'astabud'); ?></div>
        <div class="whyus-text"><?php _e('The most valuable thing we have!', 'astabud'); ?></div>
      </div>
      <div class="whyus-item">
        <div class="whyus-header"><?php _e('EFFICIENCY', 'astabud'); ?></div>
        <div class="whyus-text">
          <?php _e('High speed information processing and work execution', 'astabud'); ?></div>
      </div>
      <div class="whyus-item">
        <div class="whyus-header"><?php _e('GEOGRAPHY', 'astabud'); ?></div>
        <div class="whyus-text"><?php _e('We work on all over Ukraine', 'astabud'); ?></div>
      </div>
    </div>
  </div>

  <div class="container">
    <h3 class="heading"><?php _e('Contacts', 'astabud'); ?></h3>
    <div class="contact">
      <div class="contact-item">
        <div class="big-text"><?php _e('Contact us in any way convenient for you:', 'astabud'); ?> </div>
        <a href="mailto:astabud.service@gmail.com"><img
            src="<?php echo get_template_directory_uri(); ?>/images/envelope.svg" alt="">E-mail</a>
        <br>
        <a href="skype:+380673347353?call"><img src="<?php echo get_template_directory_uri(); ?>/images/skype.svg"
            alt="">Skype</a>
        <br>
        <a href="viber://add?number=+380673347353"><img
            src="<?php echo get_template_directory_uri(); ?>/images/viber.svg" alt="">Viber</a>
        <br><a href="tg://resolve?domain=astabud-service"><img
            src="<?php echo get_template_directory_uri(); ?>/images/telegram.svg" alt="">Telegram</a>
        <br><br><br>
        <hr>
        <p>
          <?php _e('The specialists of our company will consult you completely free of charge and answer all your questions.', 'astabud'); ?>
        </p>
        <hr>
        <p>
          <?php _e('We can meet at our office, at your facility, or at a convenient place for you. Let`s get acquainted and draw up a preliminary technical task.', 'astabud'); ?>
        </p>
        <hr>
      </div>


      <div class="contact-item">
        <div class="big-text">
          <?php _e('Or leave a request on our website and we will call you back at a convenient time for you:', 'astabud'); ?>
        </div>
        <?php
        echo do_shortcode('[contact-form-7 id="167" title="Обратная связь"] ');
        ?>
      </div>
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