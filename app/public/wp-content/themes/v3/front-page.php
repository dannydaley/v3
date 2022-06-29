<?php get_header(); ?>
<section id="welcome-section">
    <h1>.daley<span class="version flashingLight">v4</span><span class="flashingLight title-under">Web.Developer</span></h1>
</section>
<!-- WELCOME SECTION END -->
<!-- PROJECTS WINDOW START (5 MOST RECENT POSTS) -->
<div class="project-slide-container">
    <div class="project-slide">
        <img src="http://dannydaley.local/wp-content/uploads/2022/06/Daley-update-profile-picture-1640176066856-531430661.jpg" alt="project thumbnail image">
        <div class="projInfo"> 
            <p>
                Hi everyone, my name is <b>Danny Daley</b>, I am currently studying a BSc in Web Development at Falmouth
                University. I have a powerful work ethic and carry a strong passion for developing web applications 
                and improving my coding skills in general. I'm always keen to learn new technologies or frameworks 
                and love taking on new challenges.
            </p>
        </div>
    </div>  
    <div>
        <div class="myStack">
            <div class="stack-item">
                <img alt="HTML5 Logo" class="html" src="http://dannydaley.local/wp-content/uploads/2022/06/html5.png" height="100px" width="80px" />
                <h3>HTML 5</h3>
            </div>  
            <div class="stack-item">
                <img alt="CSS3 Logo" class="css" src="http://dannydaley.local/wp-content/uploads/2022/06/css3.png" height="100px" width="80px" />
                <h3>CSS 3</h3>
            </div>   
            <div class="stack-item">
                <img alt="JavaScript Logo" class="js play" src="http://dannydaley.local/wp-content/uploads/2022/06/jslogo.png" height="100px" width="80px" />
                <h3>JavaScript</h3>
            </div> 
            <div class="stack-item">
                <img alt="Node Logo" class="js play" src="http://dannydaley.local/wp-content/uploads/2022/06/nodeLogo.png" height="100px" width="80px" />
                <h3>Node JS</h3>
            </div>
        </div>
        <div class="myStack">
            <div class="stack-item">
                <img alt="Handlebars Logo" class="js play" src="http://dannydaley.local/wp-content/uploads/2022/06/handlebarslogo.png" height="100px" width="100px" />
                <h3>Handlebars JS</h3>
            </div>
            <div class="stack-item">
                <img alt="React Logo"class="js play" src="http://dannydaley.local/wp-content/uploads/2022/06/reactLogo.png" height="100px" width="80px" />
                <h3>React</h3>
            </div> 
            <div class="stack-item">
                <img alt="MySQL Logo" class="js play" src="http://dannydaley.local/wp-content/uploads/2022/06/mysql-1.png" height="100px" width="150px" />
                <h3>MySQL</h3>
            </div> 
        </div>  
        <div class="myStack">
            <div class="stack-item">
                <img alt="C#" class="" src="http://dannydaley.local/wp-content/uploads/2022/06/csharp.png" height="100px" width="100px" />
                <h3>C#</h3>
            </div>
            <div class="stack-item">
                <img alt="Unity"class="js play" src="http://dannydaley.local/wp-content/uploads/2022/06/unity-logo-white-1.webp" height="70px" width="160px" />
                <h3>Unity</h3>
            </div> 
        </div>  
    </div>   
</div>
<!-- PROJECTS WINDOW START (5 MOST RECENT POSTS) -->
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
            <li id="seeMore" class="flashingLight"><a href="/blog">See more</a></li>
        </ul>
    </div>
</div>
<!-- PROJECTS WINDOW END -->

<!-- CONTACT INFO START -->
<section id="contact">
    <header>Let's build something..</header>
    <div class="contact-links">                
        <a href="https://github.com/dannydaley" target="_blank" id="profile-link" class="contact-link" rel="noopener">
            <i class="fab fa-github">
                <FontAwesomeIcon icon={['fab', 'github']} />                        
            </i> GitHub                        
        </a>                
        <a href="https://www.freecodecamp.org/dannydaley" target="_blank" class="contact-link" rel="noopener">
            <i class="fab fa-free-code-camp">
                <FontAwesomeIcon icon={['fab', 'free-code-camp']} />
            </i> freeCodeCamp
        </a>
        <a href="https://codepen.io/dannydaley" target="_blank" class="contact-link" rel="noopener">
            <i class="fab fa-codepen">
                <FontAwesomeIcon icon={['fab', 'codepen']} />
            </i> CodePen
        </a>
    </div>
    <div  id="email_link">
        <a href="#">
            <i class="far fa-envelope emailicon">
                <FontAwesomeIcon icon={['far', 'envelope']}/>
            </i>dannydaley@outlook.com
        </a>
    </div>
    <div className="sandbox">            
        <img alt="HTML5 Logo" class="html" src="http://dannydaley.local/wp-content/uploads/2022/06/html5.png" height="100px" width="80px" />
        <img alt="CSS3 Logo" class="css" src="http://dannydaley.local/wp-content/uploads/2022/06/css3.png" height="100px" width="80px" />
        <img alt="JavaScript Logo"class="js play" src="http://dannydaley.local/wp-content/uploads/2022/06/jslogo.png" height="100px" width="80px" />
    </div>    
</section>
<!-- CONTACT INFO END -->
  </div>


    



<?php get_footer(); ?>