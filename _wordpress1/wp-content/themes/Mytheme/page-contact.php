<?php
/**
* Template Name: Contact
**/
?>
<?php get_header(); ?>
<?php affTemplate("page-contact.php"); ?>
<main>
	<section>
		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>
<!-- 			<?php //print_r($post); ?> -->
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
			<?php endwhile;
		endif; ?>
		<h1>Par email</h1>
		<?php echo do_shortcode('[contact-form-7 id="55" title="Contact form 1"]') ?>
	</section>
</main>
<?php get_footer(); ?>