<?php get_header(); ?>
<?php affTemplate("archive.php"); ?>
<main>
	<section>
	<h1>Les articles dans <?php single_cat_title("",true); ?></h1>
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
			<?php endwhile; ?>
			<?php previous_posts_link('Précédents', 0); ?>
			<?php next_posts_link('Suite', true); ?>
		 <?php endif; ?>
	</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>