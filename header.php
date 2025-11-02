<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="site">
    <header class="site-header">
      <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
      </h1>
      <p class="site-description"><?php bloginfo( 'description' ); ?></p>

      <nav class="site-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false ) ); ?>
      </nav>
    </header>

    <main class="site-main">
