<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<?php wp_head(); ?>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body <?php body_class();?>>

    <header>
        <nav id="navbar">
            <ul>
                <li><a href="<?php echo site_url('/home');?>">home</a></li>
                <li><a href="<?php echo site_url('/projects');?>">work</a></li>
                <li><a href="<?php echo site_url('/home/#contact');?>">contact</a></li>
                <li><a href="<?php echo site_url('/blog'); ?>">blog</a></li>
            </ul>
        </nav>
    </header>