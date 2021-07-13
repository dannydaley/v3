<?php get_header();?>
<section id="projectsSection">
<?php 
while(have_posts()){
    the_post();?>
      

          <!-- PROJECTS START -->
          <div class="project-slide">
            <div class="projInfo">
              <a href="<?php the_permalink();?>" target="_blank">
                <p><?php the_title();?></p>
              </a>  
              <p><?php the_content();?></p>
            </div>
            <a href="<?php the_permalink();?>" target="_blank">
              <?php the_post_thumbnail();?> 
            </a>                   
          </div>

    <?php
}?>
</section>
<?php get_footer();?>