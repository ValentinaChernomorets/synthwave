<!-- 
  Template for HOME page
 -->
<?php get_header(); ?>
<div class="home-page">
  <div class="background-style parallax">
    <div class="content-style parallax-content">
      <?php 
        if(have_posts()):
          while(have_posts()): the_post(); ?>
            <?php get_template_part('content',get_post_format()); ?>
          <?php endwhile;
        endif;
      ?>
      </br>
    </div>    
  </div>
</div>
<?php get_footer(); ?>