<?php get_header(); ?>
<div class="single-container">
<?php

    while(have_posts()) {
        the_post(); ?>
        <div class="post-container">
        <h2> <?php the_title(); ?></h2>
        <?php the_content(); ?>
        <div class="image-container">
        <?php the_post_thumbnail();?>
    </div>
        <hr>
    </div>
    <?php }

?>
</div>
<?php get_footer(); ?>