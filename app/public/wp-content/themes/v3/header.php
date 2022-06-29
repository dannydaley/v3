<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<?php wp_head(); ?>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<meta name="description" content="dannydaley portfolio and blogging platform, share your coding or creative projects, see my portfolio work and blog posts in the work section. don't forget to check out the community tab!">
  
    <!-- <link rel="icon" type="image/png" sizes="32x32" src="./android-chrome-256x256.png" href='/public/stylesheets/android-chrome-256x256.png'>
    <link rel="icon" type="image/png" sizes="16x16" src="./android-chrome-256x256.png" href='/stylesheets/android-chrome-256x256.png'>
    <link rel="manifest" href='/stylesheets/site.webmanifest'> -->
    <link rel="mask-icon" href='/stylesheets/safari-pinned-tab.svg' color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src="https://kit.fontawesome.com/a7b4d738fb.js" crossorigin="anonymous"></script>


</head>
<body <?php body_class();?>>
<script>
      </script>
      <nav id="navbar">
        <!-- <ul>
          <li><a href="<?php echo site_url('/');?>">home</a></li>
          <li><a href="<?php echo site_url('/projects');?>">projects</a></li>
          <li><a href="<?php echo site_url('/blog');?>">blog</a></li>
          <li><a href="<?php echo site_url('/#contact');?>">contact</a></li>
        </ul> -->
        <!-- this outputs a nav menu at the location defined in functions.php -->
        <?php wp_nav_menu(array('theme_location' => 'headerMenuLocation'));?>
</ul>
      </nav>
    </header>
