
<!DOCTYPE html>
<html lang="fr">
 <head>
    <meta charset="utf-8"/>
    <title><?php echo bloginfo("name") ?> - <?php the_title(); ?></title>
    <?php wp_head(); //permet de faire afficher des plugins?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0/">
		<meta name="keywords" content="Web,HTML,CSS,XML,JavaScript" />
		<meta name="description" content="Site Web bla bla bla" />
		<meta name="author" content="name" />
		<link href="<?php echo bloginfo('stylesheet_url'); ?>" rel="stylesheet" media="screen" />
		<link href="<?php echo bloginfo('template_url'); ?>/main.css" rel="stylesheet" media="screen" />
		<?php wp_head(); ?>

  	<!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script>window.html5 || document.write('<script src="js/html5shiv.js"><\/script>')</script>
  	<![endif]-->
	</head>
<body <?php body_class(); ?>>
	<div class="container">
<header>
	<h1>Hello Folks!</h1>

<form action="<?php bloginfo("url"); ?>">
	<input type="search" name="s" value="<?php echo get_search_query(); ?>">
	<input type="submit" value="Rechercher">
</form>
<?php get_search_form(); ?>
<?php
$args =array(
	'menu' => 'primary',
	'container' => 'nav',
	'container_class' => 'menu_principal',
	'container_id' => '',
	'menu_class' => 'menu',
	'menu_id' => '',
    'before' => ' ',
    'after' => '<hr>',
    'link_before' => '',
    'link_after' => '',
    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth' => 0,
    'theme_location' => 'primary' );
wp_nav_menu($args); ?>
</header>