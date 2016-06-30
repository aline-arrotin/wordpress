<?php get_header(); ?>
<?php affTemplate("front-page.php"); ?>
<main>
	<section>
		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>
 			<?php myPrint_r($post); ?>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php endwhile;
		endif; ?>
	</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>