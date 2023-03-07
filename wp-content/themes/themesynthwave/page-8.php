<!-- 
  Template for RETRO NEWS page
 -->
<?php get_header(); ?>
<div class="background-style retro-news">
  <div id="content" class="content-style">
    <div class="container clearfix">
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