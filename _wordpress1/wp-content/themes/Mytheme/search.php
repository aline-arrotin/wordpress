<?php get_header(); ?>
<?php affTemplate("search.php"); ?>
<main>
	<section>
	<?php  if ($wp_query->post_count > 0) :
	$nb_post = ($wp_query->post_count > 1) ? $wp_query->post_count. "résultats" : $wp_query->post_count. "Résultat"; ?> <!-- //Retourne le nombre d'enregistrement envoyé par la requête -->
	<h1><?php echo $nb_post; ?> sur base de <?php echo get_search_query(); ?></h1>
<?php else : ?>
	<h1>Pas de résultats</h1>
<?php endif; ?>
	<p> <?php echo category_description( $category_id ); ?></p>
		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>
			<?php if(has_post_thumbnail()) : ?>
				<div class="alaUne">
					<?php the_post_thumbnail("thumbnail"); ?>
				</div>
			<?php endif; ?>
<!-- 			<?php //print_r($post); ?> -->
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_excerpt(); ?>
			<?php endwhile;
		endif; ?>
	</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>