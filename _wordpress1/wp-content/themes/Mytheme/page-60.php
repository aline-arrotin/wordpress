<?php
/**
* Template Name: Contact
**/
?>
<?php get_header(); ?>
<?php affTemplate("page-60.php"); ?>
<main>
	<section>
		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>
<!-- 			<?php //print_r($post); ?> -->
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php endwhile;
		endif; ?>
		<h1>En image</h1>
	</section>
</main>
<?php get_footer(); ?>