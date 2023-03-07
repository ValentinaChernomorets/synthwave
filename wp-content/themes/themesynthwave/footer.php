<html>
    <body>
        <footer class="main-footer">
          <div class="footer">
            <?php wp_nav_menu(array('menu'=>'footer menu')); ?>
          </div>
          <div class="contacts">
            <div class="social-widget">
              <a class="px-3" href="https://www.facebook.com/RetroSynthwave80/"><img src="<?php echo get_template_directory_uri() . '/images/social/facebook-icon.png' ?>" alt="facebook"></a>
              <a class="px-3" href="https://twitter.com/RetroSynthwave"><img src="<?php echo get_template_directory_uri() . '/images/social/twitter-icon.png' ?>" alt="twitter"></a>
              <a class="px-3" href="https://www.linkedin.com/"><img src="<?php echo get_template_directory_uri() . '/images/social/linkedin-icon.png' ?>" alt="linkedin"></a>
              <a class="px-3" href="https://www.instagram.com/retrosynthwave80/"><img src="<?php echo get_template_directory_uri() . '/images/social/instagram-icon.png' ?>" alt="instagram"></a>
              <a class="px-3" href="https://fr.pinterest.com/retrosynthwave/"><img src="<?php echo get_template_directory_uri() . '/images/social/pinterest-icon.png' ?>" alt="pinterest"></a>
            </div>
          </div>
          <div class="contacts-email">
            <span class="post-title">email</span>
            <strong>
              <a href="mailto:spacemaster@retro-synthwave.com">
                <span class="email">spacemaster@retro-synthwave.com</span>
              </a>
            </strong>
            <a href="mailto:info@retro-synthwave.com">
              <span>info@retro-synthwave.com</span>
            </a>
          </div>
          <?php wp_footer(); ?>
        </footer>
    </body>
</html>