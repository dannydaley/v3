<?php get_header();?>
<section id="projectsSection">
  <?php if (is_category()) {
    ?><h1><?php single_cat_title(); ?></h1><?php 
  }
  ?>
  <?php 
    while(have_posts()){
      the_post();?>      
          <div class="project-slide-container" id="{{title}}">
            <div class="project-slide">
              <div class="projInfo">
                <a href="<?php the_permalink();?>" target="_blank">
                  <p><?php the_title();?></p>
                </a>  
                <p class="proj-info-brief"><?php the_content();?></p>
              </div>
              <a href="<?php the_permalink();?>" target="_blank">
                <?php the_post_thumbnail();?> 
              </a>     
            </div>            
            <div class="projectTags">
              <form method="POST" action="/userProfile">
                <p>posted by <?php the_author();?></p>
              </form>
            </div>
          </div>
      <?php } ?>
</section>


<?php get_footer();?>