<aside>
	Barre latérale

<?php get_template_part('meteo'); ?>
<?php
	$args = array(
		"show_count" => 1,
		"order" => "ASC",
		"taxonomy" => 'post_tag',
		"title_li" => "Nos catégories");
wp_list_categories($args); ?>

<?php if(single_cat_title( "", false) != 'News') : //OR ! is_category('news') : // Si je ne suis pas dans news, j'affiche la liste des news.?>
<div id="news">
<?php
$args = array(
	"category_name" => "news",
	"showposts" => 1);
	 $myNews = new WP_Query($args); ?>
		<?php if($myNews -> have_posts()) :
			while($myNews -> have_posts()) : $myNews -> the_post(); ?>
<!-- 			<?php //print_r($post); ?> -->
			<h1><?php the_title(); ?></h1>
			<p><?php the_excerpt(); //Appel de la fonction new_excerpt_length?></p>
			<?php endwhile; ?>
			<a href="<?php bloginfo('url'); ?>/category/news">Voir toutes les news</a>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
			<?php rewind_posts(); //Permet de réinitialiser la boucle. On ne peut pas faire 2 boucles sur la même requete si on ne remet pas le compteur à zéro. ?>
</div>
<?php endif; ?>
</aside>