<!-- = REQUIREMENTS = 
header.php — must open the HTML document, call wp_head(), and display a site title or logo area
-->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    <?php wp_title('|', true, 'right'); ?>
  </title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header>
    <h1>
      <a href="<?php echo home_url(); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <nav>
      <?php wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'primary-menu',
      )); ?>
    </nav>
  </header>
  <main id="themeMain">