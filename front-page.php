<?php get_header(); ?>

<!-- WELCOME START --> 
  <section id="welcome-section">
    <h1>.daley<span class="version colorchange">v3</span><span class="colorchange title-under">Web.Developer</span></h1>
  </section>
<!-- WELCOME END -->



<!--PROJECT WINDOW SHOWING 5 MOST RECENT PROJECTS-->
  <div id="projWindow">
    <section id="projects">

<?php
  $homepageProjects = new WP_Query(array(
    'posts_per_page' => 5,
    'category_name'  => 'Projects'
  ));

  while($homepageProjects -> have_posts()){
    $homepageProjects -> the_post(); ?>

      <div class="project-tile">
        <a href="<?php the_permalink();?>" target="_blank">
          <?php the_post_thumbnail();?>
          <p><?php the_title();?></p>
        </a>  
      </div>
        
    <?php
     }
     wp_reset_postdata();
    ?>

    </section>
    <div class="seeMore">
      <ul>
        <li id="seeMore" class="colorchange"><a href="<?php echo site_url('/projects');?>"><li id="seeMore" class="colorchange">see more</li></a></li>
      </ul>
    </div>
  </div>
<!--PROJECT WINDOW END-->

<!-- CONTACT START -->
    <section id="contact">
      <header>Let's build something..</header>
      <div class="contact-links">
        <a href="https://github.com/dannydaley" target="_blank" id="profile-link" class="contact-link">
          <i class="fab fa-github"></i> GitHub
        </a>
        <a href="https://www.freecodecamp.org/dannydaley" target="_blank" class="contact-link">
          <i class="fab fa-free-code-camp"></i> freeCodeCamp
        </a>
        <a href="https://codepen.io/dannydaley" target="_blank" class="contact-link">
          <i class="fab fa-codepen"></i> CodePen
        </a>
      </div>
      <div  id="email_link">
        <a href="#">
          <i class="far fa-envelope emailicon"></i>dannydaley@outlook.com
        </a>
      </div>
      <div class="sandbox">
        <img class="html" src="<?php echo get_theme_file_uri('/images/html5.png');?>" height="100px" width="100px">
        <img class="css" src="<?php echo get_theme_file_uri('/images/css3.png');?>" height="100px" width="100px">
        <img class="js" class="play" src="<?php echo get_theme_file_uri('/images/jslogo.png');?>" height="100px" width="100px">
      </div>
    </section>
<!-- CONTACT END -->
  </div>

<?php get_footer(); ?>