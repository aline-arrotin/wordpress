<?php get_header(); ?>
<?php affTemplate("single.php"); ?>
<main>
	<section class="<?php echo get_post_format(); ?>">
		<?php if(have_posts()) :
			while(have_posts()) : the_post(); ?>
<!-- 			<?php //print_r($post); ?> -->
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_content(); ?>
			<div class="prix">
				<?php $prix = get_post_meta(get_the_ID(), 'my_prix', true);
				if(! empty($prix)){
				echo $prix;
				};
				?> 
			</div>
			<?php previous_post_link('%link', '%title', true); ?>
			<?php next_post_link('%link', '%title', true); ?>
			<p class="categories"><?php
			$categories = get_the_category();
			$nb_cat = count($categories);
			echo "Fait partie de $nb_cat
			catégories : " ;
			//myPrint_r($categories);
			 the_category(" | ", "multiple"); ?></p>
			<?php endwhile;
		endif; ?></p>

		<p class="tags"><?php
			$tags = get_the_tags();
			if($tags) :
			$nb_tag = count($tags);
			echo "A $nb_tag tags: " ;
			the_tags("", " | ", ""); ?>
			</p>
			<?php endif; ?>
	</section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>