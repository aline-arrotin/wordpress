<?php get_header(); ?>
<?php affTemplate("front-page.php"); ?>
<main>
	<section>
		<?php $col1 = new WP_Query(array(
			'posts_per_page' => -1,
			'cat' => '2'
			)); ?>

			<div id="col1" >
				<h1><?php echo get_the_category_by_ID (2 );?></h1>
				<?php if($col1 -> have_posts()) : 
				while($col1 -> have_posts()) : $col1 -> the_post(); ?>
				<?php //print_r($post); ?>
				<div class="article">
					<h1><?php the_title(); ?></h1>
					<?php the_post_thumbnail('thumbnail') ?>
					<p class="date"><?php the_date(); ?></p>
					<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="plus">&gt;&gt;&gt;</a>
					<p class="signature"><?php $auteur = get_post_meta(get_the_ID(), 'Auteur', true);
				if(! empty($auteur)){
				echo $auteur;
				};
				?> </p>
				</div> <!-- .article -->
			<?php endwhile; ?>
			<?php endif; ?>
		</div>


		<?php $col2 = new WP_Query(array(
			'posts_per_page' => -1,
			'cat' => '3'
			)); ?>

			<div id="col2" >
				<h1><?php echo get_the_category_by_ID (3 );?></h1>
				<?php if($col2 -> have_posts()) : 
				while($col2 -> have_posts()) : $col2 -> the_post(); ?>
				<?php //print_r($post); ?>
				<div class="article">
					<h1><?php the_title(); ?></h1>
					<?php the_post_thumbnail('thumbnail') ?>
					<p class="date"><?php the_date(); ?></p>
					<?php the_excerpt(); ?>
					<a href="<?php the_permalink(); ?>" class="plus">&gt;&gt;&gt;</a>
					<p class="signature"><?php $auteur = get_post_meta(get_the_ID(), 'Auteur', true);
				if(! empty($auteur)){
				echo $auteur;
				};
				?> </p>
				</div> <!-- .article -->
			<?php endwhile; ?>
			<?php endif; ?>
		</div>


		<?php $col3 = new WP_Query(array(
			'posts_per_page' => -1,
			'cat' => '4'
			)); ?>

			<div id="col3" >
				<h1><?php echo get_the_category_by_ID (4 );?></h1>
				<?php if($col3 -> have_posts()) : 
				while($col3 -> have_posts()) : $col3 -> the_post(); ?>
				<?php //print_r($post); ?>
				<div class="article">
					<h1><?php the_title(); ?></h1>
					<?php the_post_thumbnail('thumbnail') ?>
					<p class="date"><?php the_date(); ?></p>
					<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="plus">&gt;&gt;&gt;</a>
					<p class="signature"><?php $auteur = get_post_meta(get_the_ID(), 'Auteur', true);
				if(! empty($auteur)){
				echo $auteur;
				};
				?> </p>
				</div> <!-- .article -->
			<?php endwhile; ?>
			<?php endif; ?>
		</div>


	</section>
</main>
<?php get_footer(); ?>
