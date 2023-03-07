<!-- 
  Template for CONTACT US page
 -->
 <?php get_header(); ?>
<div class="background-style contact-us">
  <div id="content">
    <div class="content-style container clearfix">
      <?php 
        if(have_posts()):
          while( have_posts() ): the_post(); ?>
            <?php get_template_part('content',get_post_format()); ?>
          <?php endwhile;
        endif;
      ?>
      </br>
    </div>
  </div>
</div>
<?php get_footer(); ?>