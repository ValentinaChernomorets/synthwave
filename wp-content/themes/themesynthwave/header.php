<html <?php language_attributes(); ?>>
  <head>
    <meta charset="UTF-8">
      <title>Test Theme</title>
      <?php wp_head(); ?>
      <!-- Google font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
  </head>
  <body class="sunthwave-body">
    <nav id="nav-bar-synthwave" class="navbar">
      <a class="navbar-brand" href="../">
        <picture>
          <source media="(max-width:400px)" srcset="<?php echo get_template_directory_uri() . '/images/Logo-150-70.png' ?>">
          <source media="(max-width:700px)" srcset="<?php echo get_template_directory_uri() . '/images/Logo-150-70.png' ?>">
          <source media="(max-width:880px)" srcset="<?php echo get_template_directory_uri() . '/images/Logo-150-70.png' ?>">
          <source media="(max-width:992px)" srcset="<?php echo get_template_directory_uri() . '/images/Logo-150-70.png' ?>">
          <source media="(max-width:1000px)" srcset="<?php echo get_template_directory_uri() . '/images/Logo.png' ?>">
          <img src="<?php echo get_template_directory_uri() . '/images/Logo.png' ?>" class="d-inline-block align-text-top" alt="Logo of synthwave">
        <picture>
      </a>
      <div class="navbar" id="navbarNavDropdown">
        <?php
          wp_nav_menu(array(
            'menu' => 'synthwave',
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'nav menu', 
            'add_li_class' => 'test px-2',
            'link_class' => 'nav-link',
            'depth'=> 2, 
            'walker' => new Walker_Nav_Primary(),
          ));
        ?>
        <div class="burger-menu">	
          <a class="toggle-nav" href="#">&#9776</a>	
        </div>
      </div>
    </nav>
    <div class="clear"></div>
  </body>