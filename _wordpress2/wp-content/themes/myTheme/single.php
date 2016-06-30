<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php affTemplate("single.php"); ?>
<main>
	<div id="col22">

	<?php if(have_posts()) :
	while(have_posts()) : the_post(); ?>
		<h1><?php $cat = get_the_category(); echo $cat[0]->name; ?></h1>
		<div class="article">
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail('thumbnail') ?>
			<p class="par"><?php $auteur = get_post_meta(get_the_ID(), 'Auteur', true);
				if(! empty($auteur)){
					echo $auteur;
				}; ?></p>
				<p class="date"><?php the_date(); ?></p>
				<?php the_content(); ?>
			<?php endwhile;
			endif; ?>
		</div>
	</div>  <p class="break">&nbsp;</p>
</main>
<?php get_footer(); ?>