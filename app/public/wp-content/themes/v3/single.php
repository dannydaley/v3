<?php get_header(); ?>
<div class="single-container">
    
<?php

    while(have_posts()) {
        the_post(); ?>
        <div class="post-container">
        <div class="post-thumbnail">
        <?php the_post_thumbnail();?>
    </div>
        <h2 class="single-title"> <?php the_title(); ?></h2>

        <?php the_content(); ?>
        <div class="image-container">
        
    </div>
       
    </div>
    <?php }

?>
</div>
<?php get_footer(); ?>