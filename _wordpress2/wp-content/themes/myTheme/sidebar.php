<aside>
	<?php $col1 = new WP_Query(array(
		'post__not_in' => array(get_the_ID()),
		'posts_per_page' => '3'
		)); 
		//echo get_the_ID();?>

		<div id="col1" >
					<?php if($col1 -> have_posts()) : ?>
			<?php while($col1 -> have_posts()) : $col1 -> the_post(); ?>
			<?php //print_r($post); ?>
			<h1><?php $cat = get_the_category(); echo $cat[0]->name; ?></h1>
			<div class="article">
				<h1><?php the_title(); ?></h1>
				<?php the_post_thumbnail('thumbnail') ?>
				<p class="date"><?php echo get_the_date(); ?></p>
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
</aside>