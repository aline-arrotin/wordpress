
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
<body>
<div id="max">
  <div id="header">
<div id="nav"><a href="index.php">Home</a></div>
    <div id="search"><form action="resultat_articles.php" method="post">Recherche : 
      <input name="textfield" type="text" id="textfield">
        <input name="button" id="button" value="Envoyer" type="submit">
    </form></div>
  </div>