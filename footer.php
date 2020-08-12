<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package astabud
 */

?>

<footer id="colophon" class="site-footer">
  <div class="container">
    <div class="site-info">
      <div class="site-info-item logo"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.svg"
          alt="logo"></div>
      <div class="site-info-item slogan">
        <p>
          <?php _e('Our mission is to provide the best repair service at a reasonable price without compromising on quality. You will be satisfied with our work, knowing that we are taking the necessary steps to meet your needs and do the job right.', 'astabud'); ?>
        </p>
      </div>
      <div class="site-info-item menu">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'footer',
          'container_class' => 'footer-menu'
        ));
        ?></div>
      <div class="site-info-item contact">
        <div class="phone">067 242 0694<br />
          095 698 6212<br />
          067 334 7353</div>
        <div class="email"><a href="mailto: astabud.service@gmail.com">astabud.service@gmail.com</a></div>
        <div class="address"><?php _e('Kyiv, street Solomyanska, 3 <br/> office. 927', 'astabud'); ?></div>

      </div>
    </div><!-- .site-info -->

  </div>
  <div class="site-copy">
    <div class="container">
      <div class="site-copyright">
        <div class="copy">Copyright © 2020, ASTA BUD SERVICE </div>
        <div class="social">
          <div class="social"><span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="5.48" height="12"
                  viewBox="0 0 7.48 14">
                  <path id="facebook-f"
                    d="M29.88,7.875l.388-2.534H27.842V3.7a1.265,1.265,0,0,1,1.425-1.369h1.1V.171A13.414,13.414,0,0,0,28.413,0a3.09,3.09,0,0,0-3.3,3.41V5.341H22.89V7.875h2.22V14h2.732V7.875Z"
                    transform="translate(-22.89)" fill="#fff" />
                </svg></a></span>
            <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 17.237 14">
                  <path id="twitter"
                    d="M15.466,51.571c.011.153.011.306.011.459A9.983,9.983,0,0,1,5.425,62.082,9.983,9.983,0,0,1,0,60.5a7.309,7.309,0,0,0,.853.044A7.075,7.075,0,0,0,5.239,59.03a3.539,3.539,0,0,1-3.3-2.45,4.455,4.455,0,0,0,.667.055,3.736,3.736,0,0,0,.93-.12A3.533,3.533,0,0,1,.7,53.048V53a3.558,3.558,0,0,0,1.6.448A3.538,3.538,0,0,1,1.2,48.727a10.042,10.042,0,0,0,7.284,3.7,3.988,3.988,0,0,1-.088-.809A3.536,3.536,0,0,1,14.514,49.2a6.955,6.955,0,0,0,2.242-.853A3.523,3.523,0,0,1,15.2,50.291a7.082,7.082,0,0,0,2.034-.547A7.594,7.594,0,0,1,15.466,51.571Z"
                    transform="translate(0 -48.082)" fill="#fff7e7" />
                </svg></a></span>
            <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 16.004 16">
                  <path id="instagram"
                    d="M7.929,35.723a4.1,4.1,0,1,0,4.1,4.1A4.1,4.1,0,0,0,7.929,35.723Zm0,6.769A2.667,2.667,0,1,1,10.6,39.825a2.672,2.672,0,0,1-2.667,2.667Zm5.227-6.937A.957.957,0,1,1,12.2,34.6.955.955,0,0,1,13.155,35.555Zm2.717.971a4.735,4.735,0,0,0-1.292-3.352,4.766,4.766,0,0,0-3.352-1.292c-1.321-.075-5.28-.075-6.6,0A4.759,4.759,0,0,0,1.274,33.17,4.751,4.751,0,0,0-.019,36.523c-.075,1.321-.075,5.28,0,6.6a4.735,4.735,0,0,0,1.292,3.352,4.772,4.772,0,0,0,3.352,1.292c1.321.075,5.28.075,6.6,0a4.735,4.735,0,0,0,3.352-1.292,4.766,4.766,0,0,0,1.292-3.352C15.947,41.8,15.947,37.847,15.872,36.526Zm-1.707,8.015a2.7,2.7,0,0,1-1.521,1.521c-1.053.418-3.552.321-4.716.321s-3.667.093-4.716-.321a2.7,2.7,0,0,1-1.521-1.521c-.418-1.053-.321-3.552-.321-4.716s-.093-3.667.321-4.716a2.7,2.7,0,0,1,1.521-1.521c1.053-.418,3.552-.321,4.716-.321s3.667-.093,4.716.321a2.7,2.7,0,0,1,1.521,1.521c.418,1.053.321,3.552.321,4.716S14.583,43.492,14.166,44.541Z"
                    transform="translate(0.075 -31.825)" fill="#fff" />
                </svg>
              </a></span>
            <span><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 19.911 14">
                  <path id="youtube"
                    d="M34.428,66.191a2.5,2.5,0,0,0-1.76-1.772C31.115,64,24.889,64,24.889,64s-6.226,0-7.779.419a2.5,2.5,0,0,0-1.76,1.772,28.169,28.169,0,0,0,0,9.647,2.465,2.465,0,0,0,1.76,1.743C18.662,78,24.889,78,24.889,78s6.226,0,7.779-.419a2.465,2.465,0,0,0,1.76-1.743,28.17,28.17,0,0,0,0-9.647ZM22.852,73.975V68.054l5.2,2.961Z"
                    transform="translate(-14.933 -64)" fill="#fff" />
                </svg></a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>